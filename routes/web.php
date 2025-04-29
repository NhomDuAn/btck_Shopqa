<?php
use App\Http\Controllers\Category_Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.index');
});

// Route::get('/QLDM/{category_id}',[Category_Controller::class,'Category']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

