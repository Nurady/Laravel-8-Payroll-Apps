<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\{DashboardController, CrudController};
// use App\Http\Controllers\{DashboardController, CrudController, LoginController};

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/master', function () {
//     return view('pages.dashboard');
// });

// Route::middleware('sessionLogin')->group(function () {
//     Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

//     Route::get('tambah-data', [CrudController::class, 'tambah'])->name('tambah-data');
//     Route::post('simpan-data', [CrudController::class, 'simpan'])->name('simpan-data');
//     Route::get('edit-data/{id}', [CrudController::class, 'edit'])->name('edit-data');
//     Route::put('update-data/{id}', [CrudController::class, 'update'])->name('update-data');
//     Route::delete('delete-data/{id}', [CrudController::class, 'delete'])->name('delete-data');
    
//     // Route::post('logout', [LoginController::class, 'logout'])->name('logout.post');
//     Route::get('logout', [LoginController::class, 'logout'])->name('logout.post');
// });

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('tambah-data', [CrudController::class, 'tambah'])->name('tambah-data');
    Route::post('simpan-data', [CrudController::class, 'simpan'])->name('simpan-data');
    Route::get('edit-data/{id}', [CrudController::class, 'edit'])->name('edit-data');
    Route::put('update-data/{id}', [CrudController::class, 'update'])->name('update-data');
    Route::delete('delete-data/{id}', [CrudController::class, 'delete'])->name('delete-data');
    // Route::get('logout', [LoginController::class, 'logout'])->name('logout.post');
});

// Route::get('login', [LoginController::class, 'index'])->name('login');
// Route::post('login/post', [LoginController::class, 'post'])->name('login.post');

// login laravel/ui
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login/post', [LoginController::class, 'login'])->name('login.post');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
