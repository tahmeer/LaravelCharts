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
    return view('welcome');
});
Route::get('/qrCode','QrController@QrCode')->name('qrcode');
Route::get('/qrCodeResult','QrController@QrCodeResult')->name('qrcoderesult');
Route::get('/chart','ChartController@index')->name('chart');
