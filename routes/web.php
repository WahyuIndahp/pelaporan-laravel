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

Route::get('/', function () {
    return view('login');
});

Route::get('/db', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admtr', function () {
    return view('administrator');
});

Route::get('/eadmtr', function () {
    return view('editadministrator');
});

Route::get('/eduser', function () {
    return view('edituser');
});

Route::get('/fuser', function () {
    return view('formuser');
});

Route::get('/datal', function () {
    return view('datainstalasi');
});

Route::get('/edatal', function () {
    return view('editdatal');
});

Route::get('/detaildatal', function () {
    return view('detaildatal');
});

Route::get('/detaildataltns', function () {
    return view('detaildataltns');
});

Route::get('/instal', function () {
    return view('instalasi');
});

Route::get('/fdatal', function () {
    return view('formdatal');
});

Route::get('/fdating', function () {
    return view('formdating');
});

Route::get('/edating', function () {
    return view('editdating');
});

Route::get('/dating', function () {
    return view('dataticketing');
});

Route::get('/riwayat', function () {
    return view('riwayat');
});


Route::get('/lapin', function () {
    return view('laporaninstalasi');
});

Route::get('/dlapin', function () {
    return view('detaillapin');
});

Route::get('/flapin', function () {
    return view('formlapin');
});

Route::get('/penginstalan', function () {
    return view('datapenginstalan');
});

Route::get('/tiket', function () {
    return view('ticketting');
});

Route::get('/lating', function () {
    return view('laporanticketing');
});

Route::get('/lapting', function () {
    return view('lapticketing');
});

Route::get('/detailtiket', function () {
    return view('detailticketting');
});

Route::get('/detailtiketadm', function () {
    return view('detailticketingadm');
});

Route::get('/mnjlating', function () {
    return view('detailticketingmnj');
});

Route::get('/detaillating', function () {
    return view('detaillating');
});

Route::get('/ftiket', function () {
    return view('formticketting');
});

Route::get('/grafik', function () {
    return view('grafik');
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/logout', function () {
    return view('login');
});