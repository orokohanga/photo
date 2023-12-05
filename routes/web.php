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
Route::get('/albums/create',[Controller::class, "albumscreate"]);
Route::get('/albums/{id}',[Controller::class, "albumsdetail"]);
Route::get('/explorer',[Controller::class, "explorer"]);
Route::get('/explorer/tags/{id}',[Controller::class, "explorertags"]);
Route::get('/login', [Controller::class, 'loginform'])->name('login');
Route::post('/login', [Controller::class, 'login']);
Route::get('/register', [AuthController::class, 'registerform'])->name('register');
Route::post('/register', [AuthController::class, 'register']);