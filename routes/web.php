<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('landing.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Profile Section
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
Route::put('/profile/password/{id}', [ProfileController::class, 'password'])->name('profile.password');
Route::delete('/profile/delete/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');
