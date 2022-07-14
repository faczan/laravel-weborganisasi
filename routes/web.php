<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\anggotacontroller;
use App\Http\Controllers\ProgramController;


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

Route::get('/home', function () {
    return view('home');
});

//Route::get('/about', function () {
//return view('about');
//});

Route::get('/dasboard', function () {
    return view('dasboard');
});
Route::get('/temlate', function () {
    return view('temlate');
});
Route::get('/Laporan_proja', function () {
    return view('Laporan_proja');
});
Route::get('/coba', function () {
    return view('layout/coba');
});
Route::get('/Proposal_Kegiatan', function () {
    return view('Proposal_Kegiatan');
});
Route::get('/temlate', function () {
    return view('layout.temlate');
});
Route::get('/coba', function () {
    return view('layout.coba');
});
Route::get('/latihan', function () {
    return view('layout.latihan');
});
Route::get('/Laporan_Kegiatan', function () {
    return view('Laporan_Kegiatan');
});
Route::get('/home', function () {
    return view('admin_layout.home');
});
Route::resource('anggota', 'anggotacontroller'::class);

Route::get('coba', 'coba@coba');

Route::get('/dasboard_1', function () {
    return view('admin_layout.dashboard_1');
});
Route::resource('program', 'ProgramController'::class);
Route::delete('programs/{id}', 'ProgramController@destroy');

Route::get('/data_laporan', function () {
    return view('admin_layout.data');
});
//Route::resources('proker_laporan', 'proker_laporanController'::class);
