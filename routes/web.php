<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\BookmarkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
}) ->name('home');

// Route::get('/city', function () {
//     return view('city');
// }) ->name('city');

Route::get('/city/{id}', [CityController::class, 'show'])->name('city');  

Route::get('/login', function () {
    return view('auth.login');
}) ->name('login');

// Route::get('/bookmarks', function () {
//     return view('bookmarks');
// }) ->name('bookmarks');

Route::get('/login', [LoginController::class, 'index']) ->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']) ->name('login.in');
Route::post('/logout', [LoginController::class, 'logout']) ->name('logout');


Route::get('/register', [RegisterController::class, 'index']) ->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']) ->name('register.store');

Route::middleware('auth')->group(function () {
    Route::get('/bookmarks/show/{customerId}', [BookmarkController::class, 'show'])->name('bookmarks.show');
    Route::post('/bookmarks/store/{destinationId}', [BookmarkController::class, 'store'])->name('bookmarks.store');
    Route::delete('/bookmarks/delete/{destinationId}', [BookmarkController::class, 'destroy'])->name('bookmarks.destroy');
});