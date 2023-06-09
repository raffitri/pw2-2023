<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ReviewsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'index']);

Route::resource('/movies', MovieController::class);
Route::resource('/genres', GenresController::class);
Route::resource('/reviews', ReviewsController::class);

Route::get('/users', function () {
    return view('users/index');
});