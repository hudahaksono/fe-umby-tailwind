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
    return view('portal.index');
});

Route::get('/dashboard', function () {
    return view('index');
});



/**
 * Login Pages
 */
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/mahasiswa', function () {
    return view('portal.mahasiswa');
});

Route::get('/mahasiswa/tambah', function () {
    return view('portal.mahasiswa.tambah');
});

Route::get('/dosen', function () {
    return view('portal.dosen.index');
});

Route::get('/dosen/tambah', function () {
    return view('portal.dosen.form');
});

/**
 * Perkuliahan
 */
Route::get('/perkuliahan/jenis-mata-kuliah', function () {
    return view('perkuliahan.kurikulum.jenis-mata-kuliah');
});
Route::get('/perkuliahan/jenis-mata-kuliah/tambah', function () {
    return view('perkuliahan.kurikulum.form.jenis-mata-kuliah');
});

Route::get('/perkuliahan/mata-kuliah', function () {
    return view('perkuliahan.kurikulum.mata-kuliah');
});
Route::get('/perkuliahan/mata-kuliah/tambah', function () {
    return view('perkuliahan.kurikulum.form.mata-kuliah');
});

/**
 * Setting
 */
Route::get('/setting/global', function () {
    return view('setting.setting-global');
});
Route::get('/setting/per-kelas', function () {
    return view('setting.setting-per-kelas');
});
Route::get('/setting/per-unit', function () {
    return view('setting.setting-per-unit');
});
Route::get('/setting/krs', function () {
    return view('setting.setting-krs');
});
Route::get('/setting/batal/krs', function () {
    return view('setting.setting-batal-krs');
});