<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Tag;
use App\Models\User;
use App\Models\Photo;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function index(){
        $photos = Photo::all();
        $photos = Photo::orderBy('note', 'desc')->get();
        return view("welcome", ["photos" => $photos]);
    }

    function albums(){
        $albums = Album::all();
        return view("albums", ["albums" => $albums]);
    }


    function albumsdetail($id) {
        $album = Album::findOrFail($id);
        return view('albumsdetail', ['album' => $album]);
    }


    function albumscreateform() {
        return view('albumscreate');
    }

    function albumscreate() {
        $album = new Album;
        $album->titre = request("titre");
        $album->creation = date('Y-m-d');
        $album->user_id = Auth::user()->id;
        $album->save();
        return redirect("/albums/$album->id");
    }


    function explorer(){
        $photos = Photo::all();
        return view("explorer", ["photos" => $photos]);
    }

    function explorertags($id){
        $tag = Tag::find($id);
        $photos = $tag->photos;
    
        return view("explorer", ["photos" => $photos]);
    }

    function photosaddform($album_id) {
        $album = Album::find($album_id);
        
        if ($album->user_id == Auth::id()) {
            return view('photosadd', ['album' => $album]);
        } else {
            return view('albums');
        }
    }

    function photosadd(Request $request) {

        $request->validate([
            "titre" => "required|max:255",
            "url" => "required|file|mimes:jpg,png",
        ]);

        if($request->file("url")->isValid()) {
            $f = $request->file("url")->hashName();
            $request->file("url")->storeAs("public/upload", $f);
            $image = "/storage/upload/$f";
        }               
        $photo = new Photo;
        $photo->titre = $request->input("titre");
        $photo->url = $image;
        $photo->album_id = $request->input("album_id");;
        $photo->save();
        return redirect("/albums")->with("info", "photo enregistré");
    }

    public function photodelete(Photo $photo)
    {
        if (!$photo) {
            return redirect()->back()->with('error', 'La photo n\'existe pas.');
        }

        $photo->delete();

        return redirect()->back()->with('success', 'La photo a été supprimée avec succès.');
    }
}

