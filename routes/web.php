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
Route::get('/albums/create',[Controller::class, "albumscreateform"])->middleware("auth");
Route::post('/albums/create',[Controller::class, "albumscreate"]);
Route::get('/albums/add',[Controller::class, "photosaddform"])->middleware("auth");
Route::post('/albums/add',[Controller::class, "photosadd"]);
Route::get('/albums/{id}',[Controller::class, "albumsdetail"]);
Route::get('/explorer',[Controller::class, "explorer"]);
Route::get('/explorer/tags/{id}',[Controller::class, "explorertags"]);