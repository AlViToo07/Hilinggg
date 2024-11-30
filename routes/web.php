<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
}) ->name('home');

Route::get('/city/{slug}', [CityController::class, 'show'])->name('city');  

// Route::get('/login', function () {
//     return view('auth.login');
// }) ->name('login');


Route::get('/login', [LoginController::class, 'index']) ->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']) ->name('login.in');
Route::post('/logout', [LoginController::class, 'logout']) ->name('logout');


Route::get('/register', [RegisterController::class, 'index']) ->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']) ->name('register.store');

Route::middleware('auth')->group(function () {
    Route::get('/bookmarks/show/{customerId}', [BookmarkController::class, 'show'])->name('bookmarks.show');
    Route::post('/bookmarks/store/{destinationId}', [BookmarkController::class, 'store'])->name('bookmarks.store');
    Route::delete('/bookmarks/delete/{destinationId}', [BookmarkController::class, 'destroy'])->name('bookmarks.destroy');
    Route::get('/profile', [UserController::class, 'index']) ->name('index.profile');
    Route::get('/edit-profile', [UserController::class, 'edit']) ->name('edit.profile');
    Route::post('/edit-profile', [UserController::class, 'update']) ->name('update.profile');
    Route::get('/edit-password', [UserController::class, 'editPass']) ->name('edit.password');
    Route::post('/edit-password', [UserController::class, 'updatePass']) ->name('update.password');
    Route::delete('/delete-account', [UserController::class, 'deleteAccount'])->name('account.delete');
});