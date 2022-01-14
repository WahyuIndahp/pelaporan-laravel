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
    return view('admin.datainstalasi');
});

Route::get('/edatal', function () {
    return view('admin.editdatal');
});

Route::get('/detaildatal', function () {
    return view('admin.detaildatal');
});

Route::get('/detaildataltns', function () {
    return view('teknisi.detaildataltns');
});

Route::get('/instal', function () {
    return view('teknisi.instalasi');
});

Route::get('/fdatal', function () {
    return view('admin.formdatal');
});

Route::get('/fdating', function () {
    return view('admin.formdating');
});

Route::get('/edating', function () {
    return view('admin.editdating');
});

Route::get('/dating', function () {
    return view('admin.dataticketing');
});

Route::get('/riwayat', function () {
    return view('teknisi.riwayat');
});


Route::get('/lapin', function () {
    return view('teknisi.laporaninstalasi');
});

Route::get('/dlapin', function () {
    return view('teknisi.detaillapin');
});

Route::get('/dlapinp', function () {
    return view('programmer.detaillapin');
});

Route::get('/dlapinm', function () {
    return view('manager.detaillapin');
});

Route::get('/flapin', function () {
    return view('teknisi.formlapin');
});

Route::get('/penginstalan', function () {
    return view('programmer.datapenginstalan');
});

Route::get('/penginstalan', function () {
    return view('manager.datapenginstalan');
});

Route::get('/tiket', function () {
    return view('teknisi.ticketting');
});

Route::get('/lating', function () {
    return view('laporanticketing');
});

Route::get('/lapting', function () {
    return view('manager.lapticketing');
});

Route::get('/detailtiket', function () {
    return view('teknisi.detailticketting');
});

Route::get('/detailtiketadm', function () {
    return view('admin.detailticketingadm');
});

Route::get('/mnjlating', function () {
    return view('manager.detailticketingmnj');
});

Route::get('/detaillating', function () {
    return view('detaillating');
});

Route::get('/ftiket', function () {
    return view('teknisi.formticketting');
});

Route::get('/grafik', function () {
    return view('manager.grafik');
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/logout', function () {
    return view('login');
});