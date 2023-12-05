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
        $albums = DB::select("SELECT * FROM albums");
        return view("albums", ["albums" => $albums]);
    }

    function albumsdetail($id) {
    $photos = DB::select("SELECT photos.*
        FROM photos
        JOIN possede_tag ON photos.id = possede_tag.photo_id
        JOIN tags ON possede_tag.tag_id = tags.id
        WHERE photos.album_id = ?
        GROUP BY photos.id
        ", [$id]);
    return view('albumsdetail', ['photos' => $photos]);
    }

    function explorer(){
        $photos = DB::select("SELECT photos.*, GROUP_CONCAT(tags.nom) AS tags
        FROM photos
        JOIN possede_tag ON photos.id = possede_tag.photo_id
        JOIN tags ON possede_tag.tag_id = tags.id
        GROUP BY photos.id
        ");
        return view("explorer", ["photos" => $photos]);
    }

    function explorertags($id){
        $photos = DB::select("SELECT photos.*,  GROUP_CONCAT(tags.nom) AS tags
        FROM photos
        JOIN possede_tag ON photos.id = possede_tag.photo_id
        JOIN tags ON possede_tag.tag_id = tags.id
        WHERE tags.id = ?
        GROUP BY photos.id
    ", [$id]);
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
            return redirect("/albums");
        }

    }
}
