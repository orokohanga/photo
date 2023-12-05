<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/albums',[Controller::class, "albums"]);
Route::get('/albums/{id}',[Controller::class, "albumsdetail"]);
Route::get('/explorer',[Controller::class, "explorer"]);
Route::get('/explorer/tags/{id}',[Controller::class, "explorertags"]);