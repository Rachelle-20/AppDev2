<?php

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
    return view('landing');
});

Route::post('/login', function () {
    return view('practice1');
});

Route::post('/register', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('practice1');
});
Route::get('/desk', function () {
    return view('landing');
});

