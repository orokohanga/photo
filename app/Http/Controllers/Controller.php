<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function albums(){
        $albums = \App\Models\Album::all();
        return view("albums", ["albums" => $albums]);
    }


    function albumsdetail($id) {
        $album = \App\Models\Album::findOrFail($id);
        return view('albumsdetail', ['album' => $album]);
    }


    function albumscreateform() {
        return view('albumscreate');
    }

    function albumscreate() {
        $album = new \App\Models\Album;
        $album->titre = request("titre");
        $album->creation = date('Y-m-d');
        $album->user_id = Auth::user()->id;
        $album->save();
        return redirect('/albums');
    }


    function explorer(){
        $photos = \App\Models\Photo::all();
        return view("explorer", ["photos" => $photos]);
    }

    function explorertags($id){
        $tag = \App\Models\Tag::find($id);
        $photos = $tag->photos;
    
        return view("explorer", ["photos" => $photos]);
    }

    function registerform()
    {
        return view('register');
    }

    function register()
    {
        $newUser= new \App\Models\User;
        $newUser -> name = request('name');
        $newUser -> email = request('email');
        $newUser -> password = request('password');
        $newUser -> save();
        return redirect("/");
    }

    function loginform()
    {
        return view('login');
    }

    function login() {

        $email = request('email');
        $password = request('password');


        $user = DB::selectOne('SELECT * FROM users WHERE email = ?', [$email]);
        Auth::loginUsingId($user->id);
        if ($user && password_verify($password, $user->password)) {
            return redirect("/");
        }
    }

    function logout() {
        Auth::logout();

        return redirect('/');
    }

}
