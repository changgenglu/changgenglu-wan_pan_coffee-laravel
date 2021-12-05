<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('index');});
Route::get('contact', function () { return view('contactUs');});
Route::get('mocktail', function () { return view('mocktail');});
Route::get('drop', function () { return view('drop');});
Route::get('art', function () { return view('art');});
Route::get('provision', function () { return view('provision');});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
