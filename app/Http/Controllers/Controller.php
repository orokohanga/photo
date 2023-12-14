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
        return view("welcome", ["photos" => $photos]);
    }

    function albums(){
        $id = Auth::user()->id;
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

    function photosaddform() {
        return view('photosadd');
    }

    function photosadd(Request $request) {

        dd($request->all());
        $request->validate([
            "titre" => "required|max:255",
            "url" => "required|file|mimes:jpg,png",
        ]);
        
        if($request->file("url")->isValid()) {
            $f = $request->file("url")->hashName();
            $request->file("url")->storeAs("public/upload", $f);
            dd($request->file("url"));   
            $image = "/storage/upload/$f";
        }               
        $photo = new Photo;
        $photo->titre = $request->input("titre");
        $photo->url = $image;
        $photo->album_id = 1;
        $photo->save();
        return redirect("/albums")->with("info", "photo enregistré");
    }
}
