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

/**
 * Portal
 */
Route::get('/mahasiswa', function () {
    return view('portal.mahasiswa');
});

Route::get('/mahasiswa/tambah', function () {
    return view('portal.mahasiswa.tambah');
});
Route::get('/mahasiswa/detail/{nim}', function () {
    return view('portal.mahasiswa.detail');
});

Route::get('/dosen', function () {
    return view('portal.dosen.index');
});

Route::get('/dosen/tambah', function () {
    return view('portal.dosen.form');
});

Route::get('/rekap-status-mahasiswa', function () {
    return view('portal.rekap-status-mhs');
});

Route::get('/rekap-status-mahasiswa/mhs-aktif', function () {
    return view('portal.mhs-status-aktif');
});

Route::get('/rekap-status-mahasiswa/mhs-non-aktif', function () {
    return view('portal.mhs-status-nonaktif');
});

Route::get('/rekap-status-mahasiswa/mhs-cuti', function () {
    return view('portal.mhs-status-cuti');
});

Route::get('/rekap-status-mahasiswa/mhs-lulus', function () {
    return view('portal.mhs-status-lulus');
});

Route::get('/rekap-status-mahasiswa/mhs-pindah', function () {
    return view('portal.mhs-status-pindah');
});

Route::get('/rekap-status-mahasiswa/mhs-do', function () {
    return view('portal.mhs-status-do');
});

Route::get('/rekap-status-mahasiswa/mhs-undur-diri', function () {
    return view('portal.mhs-status-undur-diri');
});

Route::get('/rekap-status-krs', function () {
    return view('portal.rekap-status-krs');
});

Route::get('/rekap-status-krs/bisa-krs', function () {
    return view('portal.rekap-status-krs-bisa');
});

Route::get('/rekap-status-krs/diisi', function () {
    return view('portal.rekap-status-krs-diisi');
});

Route::get('/log-krs', function () {
    return view('portal.log-krs');
});

Route::get('/laporan-total-mhs', function () {
    return view('portal.laporan-total-mhs');
});

Route::get('/laporan-total-mhs/baru', function () {
    return view('portal.laporan-total-mhs-baru');
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
Route::get('/perkuliahan/jenis-mata-kuliah/edit/{id}', function () {
    return view('perkuliahan.kurikulum.edit.jenis-mata-kuliah');
});

Route::get('/perkuliahan/mata-kuliah', function () {
    return view('perkuliahan.kurikulum.mata-kuliah');
});
Route::get('/perkuliahan/mata-kuliah/tambah', function () {
    return view('perkuliahan.kurikulum.form.mata-kuliah');
});
Route::get('/perkuliahan/mata-kuliah/edit/{id}', function () {
    return view('perkuliahan.kurikulum.edit.mata-kuliah');
});

Route::get('/perkuliahan/rancangan-pembelajaran', function () {
    return view('perkuliahan.kurikulum.rancangan-pembelajaran');
});
Route::get('/perkuliahan/rancangan-pembelajaran/edit/{id}', function () {
    return view('perkuliahan.kurikulum.edit.rancangan-pembelajaran');
});

Route::get('/perkuliahan/tahun-kurikulum', function () {
    return view('perkuliahan.kurikulum.tahun-kurikulum');
});

Route::get('/perkuliahan/kode-kurikulum', function () {
    return view('perkuliahan.kurikulum.kode-kurikulum');
});

Route::get('/perkuliahan/kurikulum-jurusan', function () {
    return view('perkuliahan.kurikulum.kurikulum-jurusan');
});

Route::get('/perkuliahan/ekivalensi-matakuliah', function () {
    return view('perkuliahan.kurikulum.ekivalensi-matakuliah');
});

Route::get('/perkuliahan/monitoring-kelas', function () {
    return view('perkuliahan.kelas-kuliah.monitoring-kelas');
});

/**
 * Referensi
 */
Route::get('/referensi/universitas/unit', function () {
    return view('referensi.universitas.unit');
});
Route::get('/referensi/universitas/kampus', function () {
    return view('referensi.universitas.kampus');
});
Route::get('/referensi/universitas/gedung', function () {
    return view('referensi.universitas.gedung');
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
Route::get('/setting/krs/tambah', function () {
    return view('setting.setting-krs-tambah');
});
Route::get('/setting/batal/krs', function () {
    return view('setting.setting-batal-krs');
});
Route::get('/setting/batal/krs-tambah', function () {
    return view('setting.setting-batal-krs-tambah');
});