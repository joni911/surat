<?php

use App\surat_id;
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

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
Route::get('gone/{id}', function ($id) {
echo $id;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([ 'middleware' => 'auth' ], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('surat', 'suratControll');
    Route::resource('suratcode', 'suratcodeControll');
    Route::resource('inbox', 'masukControll');
    Route::resource('expedisi', 'expedisiControll');
    Route::resource('profile', 'profileControll');
    Route::resource('user', 'userControll');
    Route::resource('jabatan', 'jabatanControll');
    Route::resource('disposisi', 'disposisiControll');
    Route::get('/history', 'PembayaranController@history');
    Route::get('/laporan', function () {
    return view('laporan');
    });

    Route::post('/mark-as-read', 'HomeController@markNotification')->name('markNotification');
    // Permissions

    route::get('/laporan/kelas', 'LaporanController@kelas');
    route::get('/laporan/spp', 'LaporanController@spp');
    route::get('/laporan/siswa', 'LaporanController@siswa');
    route::get('/laporan/petugas', 'LaporanController@petugas');
    route::get('/laporan/pembayaran', 'LaporanController@pembayaran');
});
