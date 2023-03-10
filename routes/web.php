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

Route::get('/dashboard', function () {
    return view('portal.index');
});

// Route::get('/dashboard', function () {
//     return view('index');
// });



/**
 * Login Pages
 */
// Route::get('/login', function () {
//     return view('auth.login');
// });
// Route::get('/', function () {
//     return view('auth.login');
// });
Route::get('/', 'Auth\LoginController@index');
Route::post('/postlogin', 'Auth\LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

// Route::get('/menu', function () {
//     return view('auth.menu');
// });
Route::get('/modul', 'Auth\ModulController@index');

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
    Route::get('/list', 'Portal\DosenController@list_data')->name('dosen.list');
    Route::get('/tambah', function () {
        return view('portal.dosen.form');
    });
    Route::post('/store', 'Portal\DosenController@store')->name('dosen.store');

    Route::get('/agama/list', 'Portal\DosenController@list_agama')->name('dosen.list.agama');
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

Route::get('/perkuliahan/kelas-perkuliahan', function () {
    return view('perkuliahan.kelas-kuliah.kelas-perkuliahan');
});

Route::get('/perkuliahan/monitoring-dosen-pengajar', function () {
    return view('perkuliahan.kelas-kuliah.monitoring-dosen-pengajar');
});

Route::get('/perkuliahan/presensi-mahasiswa', function () {
    return view('perkuliahan.kelas-kuliah.presensi-mahasiswa');
});

Route::get('/perkuliahan/nilai-kuliah', function () {
    return view('perkuliahan.kelas-kuliah.nilai-kuliah');
});

Route::get('/perkuliahan/pengesahan-nilai', function () {
    return view('perkuliahan.kelas-kuliah.pengesahan-nilai');
});

Route::get('/perkuliahan/distribusi-peserta-kelas', function () {
    return view('perkuliahan.kelas-kuliah.distribusi-peserta-kelas');
});

Route::get('/perkuliahan/pengajuan-soal-ujian', function () {
    return view('perkuliahan.kelas-kuliah.pengajuan-soal-ujian');
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

Route::get('/perkuliahan/monitoring-kerja-praktek', function () {
    return view('perkuliahan.kerja-praktek.monitoring-kerja-praktek');
});

Route::get('/perkuliahan/realisasi-perkuliahan', function () {
    return view('perkuliahan.realisasi-barcode-read.realisasi-perkuliahan');
});

Route::get('/perkuliahan/realisasi-ujian', function () {
    return view('perkuliahan.realisasi-barcode-read.realisasi-ujian');
});

Route::get('/perkuliahan/periode-yudisium', function () {
    return view('perkuliahan.yudisium.periode-yudisium');
});

Route::get('/perkuliahan/syarat-yudisium', function () {
    return view('perkuliahan.yudisium.syarat-yudisium');
});

Route::get('/perkuliahan/syarat-mhs-yudisium', function () {
    return view('perkuliahan.yudisium.syarat-mhs-yudisium');
});

Route::get('/perkuliahan/peserta-yudisium', function () {
    return view('perkuliahan.yudisium.peserta-yudisium');
});

Route::get('/perkuliahan/periode-wisuda', function () {
    return view('perkuliahan.wisuda.periode-wisuda');
});

Route::get('/perkuliahan/syarat-wisuda', function () {
    return view('perkuliahan.wisuda.syarat-wisuda');
});

Route::get('/perkuliahan/syarat-mahasiswa', function () {
    return view('perkuliahan.wisuda.syarat-mahasiswa');
});

Route::get('/perkuliahan/peserta-wisuda', function () {
    return view('perkuliahan.wisuda.peserta-wisuda');
});

Route::get('/perkuliahan/setting', function () {
    return view('perkuliahan.pdpt.setting');
});

Route::get('/perkuliahan/target', function () {
    return view('perkuliahan.pdpt.target');
});


/**Keuangan
 */
Route::get('/keuangan/jenis-tarif', function () {
    return view('keuangan.komponen-tarif.jenis-tarif');
});

Route::get('/keuangan/tarif-umum', function () {
    return view('keuangan.komponen-tarif.tarif-umum');
});

Route::get('/keuangan/formulir', function () {
    return view('keuangan.komponen-tarif.formulir');
});

Route::get('/keuangan/kategori-potongan', function () {
    return view('keuangan.komponen-tarif.kategori-potongan');
});

Route::get('/keuangan/potongan-tagihan', function () {
    return view('keuangan.komponen-tarif.potongan-tagihan');
});

Route::get('/keuangan/spa1', function () {
    return view('keuangan.tarif-r1-r2.spa1');
});

Route::get('/keuangan/spp-tetap', function () {
    return view('keuangan.tarif-r1-r2.spp-tetap');
});

Route::get('/keuangan/spp-variabel', function () {
    return view('keuangan.tarif-r1-r2.spp-variabel');
});

Route::get('/keuangan/bpp-sks-sp', function () {
    return view('keuangan.tarif-r1-r2.bpp-sks-sp');
});

Route::get('/keuangan/kemahasiswaan', function () {
    return view('keuangan.tarif-r1-r2.kemahasiswaan');
});

Route::get('/keuangan/ujian-susulan', function () {
    return view('keuangan.tarif-r1-r2.ujian-susulan');
});

Route::get('/keuangan/sidang-ta', function () {
    return view('keuangan.tarif-r1-r2.sidang-ta');
});

Route::get('/keuangan/ijasah-wisuda', function () {
    return view('keuangan.tarif-r1-r2.ijasah-wisuda');
});

Route::get('/keuangan/pengajuan-status', function () {
    return view('keuangan.tarif-r1-r2.pengajuan-status');
});

Route::get('/keuangan/sks-default', function () {
    return view('keuangan.tarif-r1-r2.sks-default');
});

Route::get('/keuangan/spp-variabel-praktek', function () {
    return view('keuangan.tarif-r1-r2.spp-variabel-praktek');
});

Route::get('/keuangan/spp-tetap-angsuran', function () {
    return view('keuangan.tarif-r1-r2.spp-tetap-angsuran');
});

Route::get('/keuangan/denda-spp-tetap', function () {
    return view('keuangan.tarif-r1-r2.denda-spp-tetap');
});

Route::get('/keuangan/spa', function () {
    return view('keuangan.tarif-ukt.spa');
});

Route::get('/keuangan/tridarma', function () {
    return view('keuangan.tarif-ukt.tridarma');
});

Route::get('/keuangan/sks-kuliah', function () {
    return view('keuangan.tarif-ukt.sks-kuliah');
});

Route::get('/keuangan/tarif-kkn', function () {
    return view('keuangan.tarif-ukt.tarif-kkn');
});

Route::get('/keuangan/tarif-wisuda', function () {
    return view('keuangan.tarif-ukt.tarif-wisuda');
});

Route::get('/keuangan/tarif-lsp', function () {
    return view('keuangan.tarif-ukt.tarif-lsp');
});

Route::get('/keuangan/tarif-pkpp', function () {
    return view('keuangan.tarif-ukt.tarif-pkpp');
});

Route::get('/keuangan/her-registrasi', function () {
    return view('keuangan.tarif-ukt.her-registrasi');
});

Route::get('/keuangan/sidang-ta-ukt', function () {
    return view('keuangan.tarif-ukt.sidang-ta-ukt');
});

Route::get('/keuangan/denda-sks-kuliah', function () {
    return view('keuangan.tarif-ukt.denda-sks-kuliah');
});

Route::get('/keuangan/cari-tagihan', function () {
    return view('keuangan.tagihan.cari-tagihan');
});

Route::get('/keuangan/buat-tagihan-mahasiswa', function () {
    return view('keuangan.tagihan.buat-tagihan-mahasiswa');
});

Route::get('/keuangan/buat-tagihan-calon-mhs', function () {
    return view('keuangan.tagihan.buat-tagihan-calon-mhs');
});

Route::get('/keuangan/dispensasi-tagihan', function () {
    return view('keuangan.tagihan.dispensasi-tagihan');
});

Route::get('/keuangan/buat-tagihan-denda', function () {
    return view('keuangan.tagihan.buat-tagihan-denda');
});

Route::get('/keuangan/buat-tagihan-her-registrasi', function () {
    return view('keuangan.tagihan.buat-tagihan-her-registrasi');
});

Route::get('/keuangan/buat-tagihan-kkn', function () {
    return view('keuangan.tagihan.buat-tagihan-kkn');
});

Route::get('/keuangan/buat-tagihan-tridarma', function () {
    return view('keuangan.tagihan.buat-tagihan-tridarma');
});

Route::get('/keuangan/buat-tagihan-wisuda', function () {
    return view('keuangan.tagihan.buat-tagihan-wisuda');
});

Route::get('/keuangan/buat-tagihan-lsp', function () {
    return view('keuangan.tagihan.buat-tagihan-lsp');
});

Route::get('/keuangan/buat-tagihan-pkpp', function () {
    return view('keuangan.tagihan.buat-tagihan-pkpp');
});

Route::get('/keuangan/bayar-tagihan', function () {
    return view('keuangan.pembayaran.bayar-tagihan');
});

Route::get('/keuangan/beli-formulir', function () {
    return view('keuangan.pembayaran.beli-formulir');
});

Route::get('/keuangan/cari-pembayaran', function () {
    return view('keuangan.pembayaran.cari-pembayaran');
});

Route::get('/keuangan/cari-pembayaran-periode', function () {
    return view('keuangan.pembayaran.cari-pembayaran-periode');
});

Route::get('/keuangan/pembayaran-formulir', function () {
    return view('keuangan.pembayaran.pembayaran-formulir');
});

Route::get('/keuangan/laporan-keuangan', function () {
    return view('keuangan.pembayaran.laporan-keuangan');
});

Route::get('/keuangan/rekap-keuangan', function () {
    return view('keuangan.pembayaran.rekap-keuangan');
});

Route::get('/keuangan/va-bni', function () {
    return view('keuangan.bank-bni.va-bni');
});

Route::get('/keuangan/tagihan-va-bni', function () {
    return view('keuangan.bank-bni.tagihan-va-bni');
});

Route::get('/keuangan/setting', function () {
    return view('keuangan.h2h.setting');
});

Route::get('/keuangan/log-transaksi', function () {
    return view('keuangan.h2h.log-transaksi');
});

Route::get('/keuangan/bank', function () {
    return view('keuangan.h2h.bank');
});

Route::get('/keuangan/rekonsiliasi', function () {
    return view('keuangan.h2h.rekonsiliasi');
});

Route::get('/keuangan/rekanan-bank', function () {
    return view('keuangan.h2h.rekanan-bank');
});

Route::get('/keuangan/jenis-tagihan', function () {
    return view('keuangan.h2h.jenis-tagihan');
});

/**
 * Laporan
 */
Route::get('/laporan/status-mahasiswa-per-semester', function () {
    return view('laporan.mahasiswa.status-mahasiswa-per-semester');
});

Route::get('/laporan/ipk-mahasiswa-persemester', function () {
    return view('laporan.mahasiswa.ipk-mahasiswa-persemester');
});

Route::get('/laporan/ips-mahasiswa-persemester', function () {
    return view('laporan.mahasiswa.ips-mahasiswa-persemester');
});

Route::get('/laporan/mahasiswa-belum-krs', function () {
    return view('laporan.mahasiswa.mahasiswa-belum-krs');
});

Route::get('/laporan/rekapitulasi-mhs-tugas-akhir', function () {
    return view('laporan.mahasiswa.rekapitulasi-mhs-tugas-akhir');
});

Route::get('/laporan/peserta-yudisium', function () {
    return view('laporan.mahasiswa.peserta-yudisium');
});

Route::get('/laporan/mahasiswa-tidak-hadir-4xberturutan', function () {
    return view('laporan.mahasiswa.mahasiswa-tidak-hadir-4xberturutan');
});

Route::get('/laporan/rekap-status-mahasiswa', function () {
    return view('laporan.mahasiswa.rekap-status-mahasiswa');
});

Route::get('/laporan/laporan-tes', function () {
    return view('laporan.mahasiswa.laporan-tes');
});

Route::get('/laporan/rekap-kehadiran-mengajar', function () {
    return view('laporan.dosen.rekap-kehadiran-mengajar');
});

Route::get('/laporan/kinerja-dosen', function () {
    return view('laporan.dosen.kinerja-dosen');
});

Route::get('/laporan/rekap-ketepatan-masuk-dosen', function () {
    return view('laporan.dosen.rekap-ketepatan-masuk-dosen');
});

Route::get('/laporan/kinerja-jurusan', function () {
    return view('laporan.dosen.kinerja-jurusan');
});

Route::get('/laporan/pengawas', function () {
    return view('laporan.dosen.pengawas');
});

Route::get('/laporan/himbauan-pengawas-ujian', function () {
    return view('laporan.dosen.himbauan-pengawas-ujian');
});

Route::get('/laporan/dosen-pembimbing-akademik', function () {
    return view('laporan.dosen.dosen-pembimbing-akademik');
});

Route::get('/laporan/tanggal-entry-nilai-dosen', function () {
    return view('laporan.dosen.tanggal-entry-nilai-dosen');
});

Route::get('/laporan/dosen-belum-masukkan-nilai', function () {
    return view('laporan.dosen.dosen-belum-masukkan-nilai');
});

Route::get('/laporan/rekapitulasi-pembimbing-ta', function () {
    return view('laporan.dosen.rekapitulasi-pembimbing-ta');
});

Route::get('/laporan/rekap-mahasiswa-perstatus', function () {
    return view('laporan.perkuliahan.rekap-mahasiswa-perstatus');
});

Route::get('/laporan/rekap-ipk-mhs-persemester', function () {
    return view('laporan.perkuliahan.rekap-ipk-mhs-persemester');
});

Route::get('/laporan/jadwal-perkuliahan', function () {
    return view('laporan.perkuliahan.jadwal-perkuliahan');
});

Route::get('/laporan/jadwal-ujian-perjurusan', function () {
    return view('laporan.perkuliahan.jadwal-ujian-perjurusan');
});

Route::get('/laporan/rekapitulasi-ujian-susulan', function () {
    return view('laporan.perkuliahan.rekapitulasi-ujian-susulan');
});

Route::get('/laporan/jumlah-peserta-kelas20mhs', function () {
    return view('laporan.perkuliahan.jumlah-peserta-kelas20mhs');
});

Route::get('/laporan/realisasi-dan-kesesuaian-sap', function () {
    return view('laporan.perkuliahan.realisasi-dan-kesesuaian-sap');
});

Route::get('/laporan/realisasi-perkuliahan-dan-elearning', function () {
    return view('laporan.perkuliahan.realisasi-perkuliahan-dan-elearning');
});

Route::get('/laporan/matrix-jadwal-kuliah', function () {
    return view('laporan.perkuliahan.matrix-jadwal-kuliah');
});

Route::get('/laporan/rekap-soal-ujian', function () {
    return view('laporan.perkuliahan.rekap-soal-ujian');
});

Route::get('/laporan/transaksi-pembayaran', function () {
    return view('laporan.keuangan.transaksi-pembayaran');
});

Route::get('/laporan/biaya-kuliah', function () {
    return view('laporan.keuangan.biaya-kuliah');
});

Route::get('/laporan/jurnal-pendapatan-harian', function () {
    return view('laporan.keuangan.jurnal-pendapatan-harian');
});

Route::get('/laporan/jurnal-penerimaan-harian', function () {
    return view('laporan.keuangan.jurnal-penerimaan-harian');
});

Route::get('/laporan/rekap-kewajiban-pembayaran', function () {
    return view('laporan.keuangan.rekap-kewajiban-pembayaran');
});

Route::get('/laporan/jurnal-pendapatan-harian-maba', function () {
    return view('laporan.keuangan.jurnal-pendapatan-harian-maba');
});

Route::get('/laporan/jumlah-entrian-pertanggal', function () {
    return view('laporan.keuangan.jumlah-entrian-pertanggal');
});

Route::get('/laporan/rekap-jumlah-maba', function () {
    return view('laporan.keuangan.rekap-jumlah-maba');
});

Route::get('/laporan/rekap-pembayaran-jumlah-maba', function () {
    return view('laporan.keuangan.rekap-pembayaran-jumlah-maba');
});

Route::get('/laporan/rekap-keuangan-semester', function () {
    return view('laporan.keuangan.rekap-keuangan-semester');
});

Route::get('/laporan/presensi-kelas', function () {
    return view('laporan.kelas.presensi-kelas');
});

Route::get('/laporan/presensi-ujian', function () {
    return view('laporan.kelas.presensi-ujian');
});

Route::get('/laporan/kelas-barcode', function () {
    return view('laporan.kelas.kelas-barcode');
});

Route::get('/laporan/krs', function () {
    return view('laporan.kartu-mahasiswa.krs');
});

Route::get('/laporan/khs', function () {
    return view('laporan.kartu-mahasiswa.khs');
});

Route::get('/laporan/transkrip', function () {
    return view('laporan.kartu-mahasiswa.transkrip');
});

Route::get('/laporan/ijazah', function () {
    return view('laporan.kartu-mahasiswa.ijazah');
});

Route::get('/laporan/kartu-studi-dan-ujian', function () {
    return view('laporan.kartu-mahasiswa.kartu-studi-dan-ujian');
});

Route::get('/laporan/kartu-ujian', function () {
    return view('laporan.kartu-mahasiswa.kartu-ujian');
});

Route::get('/laporan/buku-alumni', function () {
    return view('laporan.perangkat-wisuda.buku-alumni');
});

Route::get('/laporan/buku-induk-ijazah', function () {
    return view('laporan.perangkat-wisuda.buku-induk-ijazah');
});

Route::get('/laporan/name-tag', function () {
    return view('laporan.perangkat-wisuda.name-tag');
});

Route::get('/laporan/label-bangku', function () {
    return view('laporan.perangkat-wisuda.label-bangku');
});

Route::get('/laporan/label-undangan', function () {
    return view('laporan.perangkat-wisuda.label-undangan');
});

Route::get('/laporan/data-alumni', function () {
    return view('laporan.perangkat-wisuda.data-alumni');
});

/**
 * Referensi
 */
$router->group(['prefix' => 'referensi'], function() use ($router)
{
    Route::get('/universitas/unit', 'Referensi\Universitas\UnitController@index')->name('unit');
    Route::get('/universitas/unit/list', 'Referensi\Universitas\UnitController@list')->name('unit.list');

    Route::get('/akademik/provinsi/get', 'Referensi\Akademik\ProvinsiController@GetProvinsi')->name('provinsi.get');

    Route::get('/akademik/kota/get', 'Referensi\Akademik\KotaController@GetKota')->name('kota.get');

    Route::get('/pegawai/jabatan-akademik/get', 'Referensi\Pegawai\JabAkademikController@getData')->name('jabakademik.get');

    Route::get('/pegawai/jabatan-struktural/get', 'Referensi\Pegawai\JabStrukturalController@getData')->name('jabstruktural.get');

    // Route::get('/tambah', function () {
    //     return view('portal.dosen.form');
    // });
    // Route::post('/store', 'Portal\DosenController@store')->name('dosen.store');
});
// Route::get('/referensi/universitas/unit', function () {
//     return view('referensi.universitas.unit');
// });
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