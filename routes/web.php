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

Route::get('/db', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admtr', function () {
    return view('administrator');
});

Route::get('/fuser', function () {
    return view('formuser');
});

Route::get('/datal', function () {
    return view('datainstalasi');
});

Route::get('/fdatal', function () {
    return view('formdatal');
});

Route::get('/lapin', function () {
    return view('laporaninstalasi');
});

Route::get('/flapin', function () {
    return view('formlapin');
});

Route::get('/coba', function () {
    return view('coba');
});