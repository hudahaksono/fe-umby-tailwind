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

$router->group(['prefix' => 'dosen'], function() use ($router)
{
    Route::get('/', function () {
        return view('portal.dosen.index');
    });

    Route::get('/tambah', function () {
        return view('portal.dosen.form');
    });
    Route::post('/store', 'Portal\DosenController@store')->name('dosen.store');
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

Route::get('/perkuliahan/prasyarat-matkul', function () {
    return view('perkuliahan.kurikulum.prasyarat-matkul');
});

Route::get('/perkuliahan/skala-nilai', function () {
    return view('perkuliahan.kurikulum.skala-nilai');
});

Route::get('/perkuliahan/unsur-penilaian', function () {
    return view('perkuliahan.kurikulum.unsur-penilaian');
});

Route::get('/perkuliahan/predikat-kelulusan', function () {
    return view('perkuliahan.kurikulum.predikat-kelulusan');
});

Route::get('/perkuliahan/aturan-batas-sks', function () {
    return view('perkuliahan.kurikulum.aturan-batas-sks');
});

Route::get('/perkuliahan/aturan-evaluasi', function () {
    return view('perkuliahan.kurikulum.aturan-evaluasi');
});

Route::get('/perkuliahan/kelas-ujian', function () {
    return view('perkuliahan.kelasujian.kelas-ujian');
});

Route::get('/perkuliahan/monitoring-ujian', function () {
    return view('perkuliahan.kelasujian.monitoring-ujian');
});

Route::get('/perkuliahan/presensi-ujian-mahasiswa', function () {
    return view('perkuliahan.kelasujian.presensi-ujian-mahasiswa');
});

Route::get('/perkuliahan/monitoring-kelas', function () {
    return view('perkuliahan.kelas-kuliah.monitoring-kelas');
});

Route::get('/perkuliahan/dosen-pa', function () {
    return view('perkuliahan.administrasi.dosen-pa');
});

Route::get('/perkuliahan/periode-akademik', function () {
    return view('perkuliahan.administrasi.periode-akademik');
});

Route::get('/perkuliahan/aturan-cuti', function () {
    return view('perkuliahan.administrasi.aturan-cuti');
});

Route::get('/perkuliahan/blok-krs/jenis-blok-krs', function () {
    return view('perkuliahan.administrasi.blok-krs.jenis-blok-krs');
});

Route::get('/perkuliahan/blok-krs/blok-perpustakaan', function () {
    return view('perkuliahan.administrasi.blok-krs.blok-perpustakaan');
});

Route::get('/perkuliahan/blok-krs/blok-keuangan', function () {
    return view('perkuliahan.administrasi.blok-krs.blok-keuangan');
});

Route::get('/perkuliahan/blok-krs/blok-kemahasiswaan', function () {
    return view('perkuliahan.administrasi.blok-krs.blok-kemahasiswaan');
});

Route::get('/perkuliahan/rekap-status-mahasiswa', function () {
    return view('perkuliahan.administrasi.rekap-status-mahasiswa');
});

Route::get('/perkuliahan/pengajuan-status-mahasiswa', function () {
    return view('perkuliahan.administrasi.pengajuan-status-mahasiswa');
});

Route::get('/perkuliahan/usulan-do', function () {
    return view('perkuliahan.administrasi.usulan-do');
});

Route::get('/perkuliahan/evaluasi-mahasiswa', function () {
    return view('perkuliahan.administrasi.evaluasi-mahasiswa');
});

Route::get('/perkuliahan/ekivalensi-mahasiswa', function () {
    return view('perkuliahan.administrasi.ekivalensi-mahasiswa');
});

Route::get('/perkuliahan/pindah-jurusan', function () {
    return view('perkuliahan.administrasi.pindah-jurusan');
});

Route::get('/perkuliahan/transfer-nilai', function () {
    return view('perkuliahan.administrasi.transfer-nilai');
});

Route::get('/perkuliahan/pengesahan-skpi', function () {
    return view('perkuliahan.administrasi.pengesahan-skpi');
});
Route::get('/perkuliahan/tugas-akhir', function () {
    return view('perkuliahan.tugas-akhir.tugas-akhir');
});

Route::get('/perkuliahan/monitoring-tugas-akhir', function () {
    return view('perkuliahan.tugas-akhir.monitoring-tugas-akhir');
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
Route::get('/referensi/universitas/master-ruang', function () {
    return view('referensi.universitas.manajemen-ruang.master-ruang');
});
Route::get('/referensi/universitas/prioritas-ruang', function () {
    return view('referensi.universitas.manajemen-ruang.prioritas-ruang');
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