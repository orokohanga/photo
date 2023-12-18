<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use \Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[Controller::class, "index"]);
Route::get('/albums',[Controller::class, "albums"]);
Route::get('/albums/{id}',[Controller::class, "albumsdetail"]);
Route::get('/albums/create',[Controller::class, "albumscreateform"])->middleware("auth");
Route::post('/albums/create',[Controller::class, "albumscreate"]);
Route::get('/photos/add/{album_id}', [Controller::class, "photosaddform"])->middleware("auth")->name('photos.addform');
Route::post('/photos/add', [Controller::class, "photosadd"])->middleware("auth");
Route::delete('/photos/{photo}', [Controller::class, 'photodelete'])->name('photos.delete');
Route::get('/explorer',[Controller::class, "explorer"]);
Route::get('/explorer/tags/{id}',[Controller::class, "explorertags"]);
Route::get('/search',[Controller::class, "search"]);
Route::get('/profil',[Controller::class, "myprofile"]);
