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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/all-destination', function () {
    return view('all-destination');
});

Route::get('/peta', function () {
    return view('peta');
});

Route::get('/rafting', function () {
    return view('rafting');
});

Route::get('/atv', function () {
    return view('atv');
});

Route::get('/cycling', function () {
    return view('cycling');
});

Route::get('/pemandian-suci', function () {
    return view('pemandian-suci');
});

Route::get('/about', function () {
    return view('about');
});