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
    return view('layouts.master');
});

Route::get('/page-1', function () {
    return view('page-1');
});


Route::get('/page-2', function () {
    return view('page-2');
});


Route::get('/page-3', function () {
    return view('page-3');
});

