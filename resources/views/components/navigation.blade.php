<?php
// change this for menu navbar
$data_nav = [
    [
        'title' => 'Home',
        'url' => url('/dashboard'),
    ],
    [
        'title' => 'Portal',
        'url' => '#',
        'sub_menu' => [
            [
                'title' => 'Mahasiswa',
                'url' => url('/mahasiswa'),
            ],
            [
                'title' => 'Dosen',
                'url' => url('/dosen'),
            ],
            [
                'title' => 'Rekap Status Mahasiswa',
                'url' => url('/rekap-status-mahasiswa'),
            ],
            [
                'title' => 'Rekap Status KRS',
                'url' => url('/rekap-status-krs'),
            ],
            [
                'title' => 'Log KRS',
                'url' => url('/log-krs'),
            ],
            [
                'title' => 'Laporan Total Mahasiswa',
                'url' => url('/laporan-total-mhs'),
            ],
        ],
    ],
    [
        'title' => 'Perkuliahan',
        'url' => '#',
        'sub_menu' => [
            [
                'title' => 'Kurikulum',
                'url' => url('/perkuliahan/kurikulum'),
                'sub_menu' => [
                    [
                        'title' => 'Jenis Mata Kuliah',
                        'url' => url('/perkuliahan/jenis-mata-kuliah'),
                    ],
                    [
                        'title' => 'Mata Kuliah',
                        'url' => url('/perkuliahan/mata-kuliah'),
                    ],
                    [
                        'title' => 'Rancangan Pembelajaran',
                        'url' => url('/perkuliahan/rancangan-pembelajaran'),
                    ],
                    [
                        'title' => 'Tahun Kurikulum',
                        'url' => url('/perkuliahan/tahun-kurikulum'),
                    ],
                    [
                        'title' => 'Kode Kurikulum',
                        'url' => url('/perkuliahan/kode-kurikulum'),
                    ],
                    [
                        'title' => 'Kurikulum Jurusan',
                        'url' => url('/perkuliahan/kurikulum-jurusan'),
                    ],
                    [
                        'title' => 'Ekivalensi Mata Kuliah',
                        'url' => url('/perkuliahan/ekivalensi-matakuliah'),
                    ],
                    [
                        'title' => 'Prasyarat Mata Kuliah',
                        'url' => url('/perkuliahan/prasyarat-matkul'),
                    ],
                    [
                        'title' => 'Skala Nilai',
                        'url' => url('/perkuliahan/skala-nilai'),
                    ],
                    [
                        'title' => 'Unsur Penilaian',
                        'url' => url('/perkuliahan/unsur-penilaian'),
                    ],
                    [
                        'title' => 'Predikat Kelulusan',
                        'url' => url('/perkuliahan/predikat-kelulusan'),
                    ],
                    [
                        'title' => 'Aturan Batas SKS',
                        'url' => url('/perkuliahan/aturan-batas-sks'),
                    ],
                    [
                        'title' => 'Aturan Evaluasi',
                        'url' => url('/perkuliahan/aturan-evaluasi'),
                    ],
                ],
            ],
            [
                'title' => 'Kelas Kuliah',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'Monitoring Kelas',
                        'url' => url('/perkuliahan/monitoring-kelas'),
                    ],
                    [
                        'title' => 'Kelas Perkuliahan',
                        'url' => url('/perkuliahan/kelas-perkuliahan'),
                    ],
                    [
                        'title' => 'Penjadwalan Kelas Perkuliahan',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Penjadwalan Dosen Kelas',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Monitoring Dosen Pengajar',
                        'url' => url('/perkuliahan/monitoring-dosen-pengajar'),
                    ],
                    [
                        'title' => 'Presensi Mahasiswa',
                        'url' => url('/perkuliahan/presensi-mahasiswa'),
                    ],
                    [
                        'title' => 'Nilai Kuliah',
                        'url' => url('/perkuliahan/nilai-kuliah'),
                    ],
                    [
                        'title' => 'Pengesahan Nilai',
                        'url' => url('/perkuliahan/pengesahan-nilai'),
                    ],
                    [
                        'title' => 'Distribusi Peserta Kelas',
                        'url' => url('/perkuliahan/distribusi-peserta-kelas'),
                    ],
                    [
                        'title' => 'Matrix Jadwal Kuliah',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Matrix Ruang Perkuliahan',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Pengajuan Soal Ujian',
                        'url' => url('/perkuliahan/pengajuan-soal-ujian'),
                    ],
                ],
            ],
            [
                'title' => 'Kelas Ujian',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'Kelas Ujian',
                        'url' => url('/perkuliahan/kelas-ujian'),
                    ],
                    [
                        'title' => 'Monitoring Ujian',
                        'url' => url('/perkuliahan/monitoring-ujian'),
                    ],
                    [
                        'title' => 'Presensi Ujian Mahasiswa',
                        'url' => url('/perkuliahan/presensi-ujian-mahasiswa'),
                    ],
                    [
                        'title' => 'Matrix Ruang Ujian',
                        'url' => '#',
                    ],
                ],
            ],
            [
                'title' => 'Administrasi',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'Dosen PA',
                        'url' => url('/perkuliahan/dosen-pa'),
                    ],
                    [
                        'title' => 'Periode Akademik',
                        'url' => url('/perkuliahan/periode-akademik'),
                    ],
                    [
                        'title' => 'Aturan Cuti',
                        'url' => url('/perkuliahan/aturan-cuti'),
                    ],
                    [
                        'title' => 'BLOK KRS',
                        'url' => '#',
                        'sub_menu' => [
                            [
                                'title' => 'Jenis Blok KRS',
                                'url' => url('/perkuliahan/blok-krs/jenis-blok-krs'),
                            ],
                            [
                                'title' => 'Blok Perpustakaan',
                                'url' => url('/perkuliahan/blok-krs/blok-perpustakaan'),
                            ],
                            [
                                'title' => 'Blok Keuangan',
                                'url' => url('/perkuliahan/blok-krs/blok-keuangan'),
                            ],
                            [
                                'title' => 'Blok Kemahasiswaan',
                                'url' => url('/perkuliahan/blok-krs/blok-kemahasiswaan'),
                            ],
                        ],
                    ],
                    [
                        'title' => 'Rekap Status Mahasiswa',
                        'url' => url('/perkuliahan/rekap-status-mahasiswa'),
                    ],
                    [
                        'title' => 'Pengajuan Status Mahasiswa',
                        'url' => url('/perkuliahan/pengajuan-status-mahasiswa'),
                    ],
                    [
                        'title' => 'Usulan DO',
                        'url' => url('/perkuliahan/usulan-do'),
                    ],
                    [
                        'title' => 'Evaluasi Mahasiswa',
                        'url' => url('/perkuliahan/evaluasi-mahasiswa'),
                    ],
                    [
                        'title' => 'Ekivalensi Mahasiswa',
                        'url' => url('/perkuliahan/ekivalensi-mahasiswa'),
                    ],
                    [
                        'title' => 'Pindah Jurusan',
                        'url' => url('/perkuliahan/pindah-jurusan'),
                    ],
                    [
                        'title' => 'Transfer Nilai',
                        'url' => url('/perkuliahan/transfer-nilai'),
                    ],
                    [
                        'title' => 'Pengesahan SKPI',
                        'url' => url('/perkuliahan/pengesahan-skpi'),
                    ],
                ],
            ],
            [
                'title' => 'Tugas Akhir',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'Tugas Akhir',
                        'url' => url('/perkuliahan/tugas-akhir'),
                    ],
                    [
                        'title' => 'Monitoring Tugas Akhir',
                        'url' => url('/perkuliahan/monitoring-tugas-akhir'),
                    ],
                ],
            ],
            [
                'title' => 'Kerja Praktek',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'Monitoring Kerja Praktek',
                        'url' => url('/perkuliahan/monitoring-kerja-praktek'),
                    ],
                ],
            ],
            [
                'title' => 'Realisasi (Barcode Read)',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'Realisasi Perkuliahan',
                        'url' => url('/perkuliahan/realisasi-perkuliahan'),
                    ],
                    [
                        'title' => 'Realisasi Ujian',
                        'url' => url('/perkuliahan/realisasi-ujian'),
                    ],
                ],
            ],
            [
                'title' => 'Yudisium',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'Periode Yudisium',
                        'url' => url('/perkuliahan/periode-yudisium'),
                    ],
                    [
                        'title' => 'Syarat Yudisium',
                        'url' => url('/perkuliahan/syarat-yudisium'),
                    ],
                    [
                        'title' => 'Syarat Mhs Yudisium',
                        'url' => url('/perkuliahan/syarat-mhs-yudisium'),
                    ],
                    [
                        'title' => 'Peserta Yudisium',
                        'url' => url('/perkuliahan/peserta-yudisium')
                    ],
                ],
            ],
            [
                'title' => 'Wisuda',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'Periode Wisuda',
                        'url' => url('/perkuliahan/periode-wisuda')
                    ],
                    [
                        'title' => 'Syarat Wisuda',
                        'url' => url('/perkuliahan/syarat-wisuda')
                    ],
                    [
                        'title' => 'Syarat Mahasiswa',
                        'url' => url('/perkuliahan/syarat-mahasiswa')
                    ],
                    [
                        'title' => 'Peserta Wisuda',
                        'url' => url('/perkuliahan/peserta-wisuda')
                    ],
                ],
            ],
            [
                'title' => 'PDPT',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'Setting',
                        'url' => url('/perkuliahan/setting')
                    ],
                    [
                        'title' => 'Target',
                        'url' => url('/perkuliahan/target')
                    ],
                ],
            ],
        ],
    ],
    [
        'title' => 'Keuangan',
        'url' => '#',
        'sub_menu' => [
            [
                'title' => 'Komponen Tarif',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'Jenis Tarif',
                        'url' => url('/keuangan/jenis-tarif')
                    ],
                    [
                        'title' => 'Tarif Umum',
                        'url' => url('/keuangan/tarif-umum')
                    ],
                    [
                        'title' => 'Formulir',
                        'url' => url('/keuangan/formulir')
                    ],
                    [
                        'title' => 'Kategori Potongan',
                        'url' => url('/keuangan/kategori-potongan')
                    ],
                    [
                        'title' => 'Potongan Tagihan',
                        'url' => url('/keuangan/potongan-tagihan')
                    ],
                ],
            ],
            [
                'title' => 'Tarif R1 dan R2',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'SPA',
                        'url' => url('/keuangan/spa1')
                    ],
                    [
                        'title' => 'SPP Tetap',
                        'url' => url('/keuangan/spp-tetap')
                    ],
                    [
                        'title' => 'SPP Variabel',
                        'url' => url('/keuangan/spp-variabel')
                    ],
                    [
                        'title' => 'SKS Praktikum',
                        'url' => '#',
                    ],
                    [
                        'title' => 'BPP SKS SP',
                        'url' => url('/keuangan/bpp-sks-sp')
                    ],
                    [
                        'title' => 'Kemahasiswaan',
                        'url' => url('/keuangan/kemahasiswaan')
                    ],
                    [
                        'title' => 'Ujian Susulan',
                        'url' => url('/keuangan/ujian-susulan')
                    ],
                    [
                        'title' => 'Sidang TA',
                        'url' => url('/keuangan/sidang-ta')
                    ],
                    [
                        'title' => 'Ijasah dan Wisuda',
                        'url' => url('/keuangan/ijasah-wisuda')
                    ],
                    [
                        'title' => 'Pengajuan Status',
                        'url' => url('/keuangan/pengajuan-status')
                    ],
                    [
                        'title' => 'SKS Default',
                        'url' => url('/keuangan/sks-default')
                    ],
                    [
                        'title' => 'SPP Variabel Praktek',
                        'url' => url('/keuangan/spp-variabel-praktek')
                    ],
                    [
                        'title' => 'SPP Tetap Angsuran',
                        'url' => url('/keuangan/spp-tetap-angsuran')
                    ],
                    [
                        'title' => 'Denda SPP Tetap',
                        'url' => url('/keuangan/denda-spp-tetap')
                    ],
                ],
            ],
            [
                'title' => 'Tarif UKT',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'SPA',
                        'url' => url('/keuangan/spa')
                    ],
                    [
                        'title' => 'Tridarma',
                        'url' => url('/keuangan/tridarma')
                    ],
                    [
                        'title' => 'SKS Kuliah',
                        'url' => url('/keuangan/sks-kuliah')
                    ],
                    [
                        'title' => 'Tarif KKN',
                        'url' => url('/keuangan/tarif-kkn')
                    ],
                    [
                        'title' => 'Tarif Wisuda',
                        'url' => url('/keuangan/tarif-wisuda')
                    ],
                    [
                        'title' => 'Tarif LSP',
                        'url' => url('/keuangan/tarif-lsp')
                    ],
                    [
                        'title' => 'Tarif PKPP',
                        'url' => url('/keuangan/tarif-pkpp')
                    ],
                    [
                        'title' => 'Her Registrasi',
                        'url' => url('/keuangan/her-registrasi')
                    ],
                    [
                        'title' => 'Sidang TA',
                        'url' => url('/keuangan/sidang-ta-ukt')
                    ],
                    [
                        'title' => 'Denda SKS Kuliah',
                        'url' => url('/keuangan/denda-sks-kuliah')
                    ],
                ],
            ],
            [
                'title' => 'Tagihan',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'Cari Tagihan',
                        'url' => url('/keuangan/cari-tagihan')
                    ],
                    [
                        'title' => 'Buat Tagihan Mahasiswa',
                        'url' => url('/keuangan/buat-tagihan-mahasiswa')
                    ],
                    [
                        'title' => 'Buat Tagihan Calon Mhs',
                        'url' => url('/keuangan/buat-tagihan-calon-mhs')
                    ],
                    [
                        'title' => 'Dispensasi Tagihan',
                        'url' => url('/keuangan/dispensasi-tagihan')
                    ],
                    [
                        'title' => 'Buat Tagihan Denda',
                        'url' => url('/keuangan/buat-tagihan-denda')
                    ],
                    [
                        'title' => 'Buat Tagihan Her Registrasi',
                        'url' => url('/keuangan/buat-tagihan-her-registrasi')
                    ],
                    [
                        'title' => 'Buat Tagihan KKN',
                        'url' => url('/keuangan/buat-tagihan-kkn')
                    ],
                    [
                        'title' => 'Buat Tagihan Tridarma',
                        'url' => url('/keuangan/buat-tagihan-tridarma')
                    ],
                    [
                        'title' => 'Buat Tagihan Wisuda',
                        'url' => url('/keuangan/buat-tagihan-wisuda')
                    ],
                    [
                        'title' => 'Buat Tagihan LSP',
                        'url' => url('/keuangan/buat-tagihan-lsp')
                    ],
                    [
                        'title' => 'Buat Tagihan PKPP',
                        'url' => url('/keuangan/buat-tagihan-pkpp')
                    ],
                ],
            ],
            [
                'title' => 'Pembayaran',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'Bayar Tagihan',
                        'url' => url('/keuangan/bayar-tagihan')
                    ],
                    [
                        'title' => 'Beli Formulir',
                        'url' => url('/keuangan/beli-formulir')
                    ],
                    [
                        'title' => 'Cari Pembayaran',
                        'url' => url('/keuangan/cari-pembayaran')
                    ],
                    [
                        'title' => 'Cari Pembayaran Periode',
                        'url' => url('/keuangan/cari-pembayaran-periode')
                    ],
                    [
                        'title' => 'Pembayaran Formulir',
                        'url' => url('/keuangan/pembayaran-formulir')
                    ],
                    [
                        'title' => 'Laporan Keuangan',
                        'url' => url('/keuangan/laporan-keuangan')
                    ],
                    [
                        'title' => 'Rekap Keuangan',
                        'url' => url('/keuangan/rekap-keuangan')
                    ],
                ],
            ],
            [
                'title' => 'BANK BNI',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'VA BNI',
                        'url' => url('/keuangan/va-bni')
                    ],
                    [
                        'title' => 'Tagihan VA BNI',
                        'url' => url('/keuangan/tagihan-va-bni')
                    ],
                ]
            ],
            [
                'title' => 'H2H',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'Setting',
                        'url' => url('/keuangan/setting')
                    ],
                    [
                        'title' => 'Log Transaksi',
                        'url' => url('/keuangan/log-transaksi')
                    ],
                    [
                        'title' => 'Bank',
                        'url' => url('/keuangan/bank')
                    ],
                    [
                        'title' => 'Rekonsiliasi',
                        'url' => url('/keuangan/rekonsiliasi')
                    ],
                    [
                        'title' => 'Rekonsiliasi BNI',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Rekanan Bank',
                        'url' => url('/keuangan/rekanan-bank')
                    ],
                    [
                        'title' => 'Jenis Tagihan',
                        'url' =>  url('/keuangan/jenis-tagihan')
                    ],
                ]
            ],
        ],
    ],
    [
        'title' => 'Laporan',
        'url' => '#',
        'sub_menu' => [
            [
                'title' => 'Laporan Index',
                'url' => '#',
            ],
            [
                'title' => 'Mahasiswa',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'Status Mahasiswa Per Semester',
                        'url' => url('/laporan/status-mahasiswa-per-semester')
                    ],
                    [
                        'title' => 'IPK Mahasiswa Per Semester',
                        'url' => url('/laporan/ipk-mahasiswa-persemester')
                    ],
                    [
                        'title' => 'IPS Mahasiswa Per Semester',
                        'url' => url('/laporan/ips-mahasiswa-persemester')
                    ],
                    [
                        'title' => 'Mahasiswa Belum KRS',
                        'url' => url('/laporan/mahasiswa-belum-krs')
                    ],
                    [
                        'title' => 'Rekapitulasi Mhs Tugas Akhir',
                        'url' => url('/laporan/rekapitulasi-mhs-tugas-akhir')
                    ],
                    [
                        'title' => 'Peserta Yudisium',
                        'url' => url('/laporan/peserta-yudisium')
                    ],
                    [
                        'title' => 'Mahasiswa Tidak Hadir 4x Berturutan',
                        'url' => url('/laporan/mahasiswa-tidak-hadir-4xberturutan')
                    ],
                    [
                        'title' => 'Rekap Status Mahasiswa',
                        'url' => url('/laporan/rekap-status-mahasiswa')
                    ],
                    [
                        'title' => 'Laporan Tes',
                        'url' => url('/laporan/laporan-tes')
                    ],
                ]
            ],
            [
                'title' => 'Dosen',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'Rekap Kehadiran Mengajar',
                        'url' => url('/laporan/rekap-kehadiran-mengajar')
                    ],
                    [
                        'title' => 'Kinerja Dosen',
                        'url' => url('/laporan/kinerja-dosen')
                    ],
                    [
                        'title' => 'Rekap Ketepatan Masuk Dosen',
                        'url' => url('/laporan/rekap-ketepatan-masuk-dosen')
                    ],
                    [
                        'title' => 'Kinerja Jurusan',
                        'url' => url('/laporan/kinerja-jurusan')
                    ],
                    [
                        'title' => 'Pengawas',
                        'url' => url('/laporan/pengawas')
                    ],
                    [
                        'title' => 'Himbauan Pengawas Ujian',
                        'url' => url('/laporan/himbauan-pengawas-ujian')
                    ],
                    [
                        'title' => 'Dosen Pembimbing Akademik',
                        'url' => url('/laporan/dosen-pembimbing-akademik')
                    ],
                    [
                        'title' => 'Tanggal Entry Nilai Dosen',
                        'url' => url('/laporan/tanggal-entry-nilai-dosen')
                    ],
                    [
                        'title' => 'Dosen Belum Masukkan Nilai',
                        'url' => url('/laporan/dosen-belum-masukkan-nilai')
                    ],
                    [
                        'title' => 'Rekapitulasi Pembimbing TA',
                        'url' => url('/laporan/rekapitulasi-pembimbing-ta')
                    ],
                ]
            ],
            [
                'title' => 'Perkuliahan',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'Rekap Mahasiswa Per Status',
                        'url' => url('/laporan/rekap-mahasiswa-perstatus')
                    ],
                    [
                        'title' => 'Rekap IPK Mhs Per Semester',
                        'url' => url('/laporan/rekap-ipk-mhs-persemester')
                    ],
                    [
                        'title' => 'Jadwal Perkuliahan',
                        'url' => url('/laporan/jadwal-perkuliahan')
                    ],
                    [
                        'title' => 'Jadwal Ujian Per Jurusan',
                        'url' => url('/laporan/jadwal-ujian-perjurusan')
                    ],
                    [
                        'title' => 'Rekapitulasi Ujian Susulan',
                        'url' => url('/laporan/rekapitulasi-ujian-susulan')
                    ],
                    [
                        'title' => 'Jumlah Peserta Kelas <20 Mhs',
                        'url' => url('/laporan/jumlah-peserta-kelas20mhs')
                    ],
                    [
                        'title' => 'Realisasi dan Kesesuaian SAP',
                        'url' => url('/laporan/realisasi-dan-kesesuaian-sap')
                    ],
                    [
                        'title' => 'Realisasi Perkuliahan dan E-Learning',
                        'url' => url('/laporan/realisasi-perkuliahan-dan-elearning')
                    ],
                    [
                        'title' => 'Matrix Jadwal Kuliah',
                        'url' => url('/laporan/matrix-jadwal-kuliah')
                    ],
                    [
                        'title' => 'Rekap Soal Ujian',
                        'url' => url('/laporan/rekap-soal-ujian')
                    ],
                ]
            ],
            [
                'title' => 'Keuangan',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'Transaksi Pembayaran',
                        'url' => url('/laporan/transaksi-pembayaran')
                    ],
                    [
                        'title' => 'Biaya Kuliah',
                        'url' => url('/laporan/biaya-kuliah')
                    ],
                    [
                        'title' => 'Jurnal Pendapatan Harian',
                        'url' => url('/laporan/jurnal-pendapatan-harian')
                    ],
                    [
                        'title' => 'Jurnal Penerimaan Harian',
                        'url' => url('/laporan/jurnal-penerimaan-harian')
                    ],
                    [
                        'title' => 'Rekap Kewajiban Pembayaran',
                        'url' => url('/laporan/rekap-kewajiban-pembayaran')
                    ],
                    [
                        'title' => 'Jurnal Pendapatan Harian Maba',
                        'url' => url('/laporan/jurnal-pendapatan-harian-maba')
                    ],
                    [
                        'title' => 'Jumlah Entry Per Tanggal',
                        'url' => url('/laporan/jumlah-entrian-pertanggal')
                    ],
                    [
                        'title' => 'Rekap Jumlah Maba',
                        'url' => url('/laporan/rekap-jumlah-maba')
                    ],
                    [
                        'title' => 'Rekap Pembayaran & Jumlah Maba',
                        'url' => url('/laporan/rekap-pembayaran-jumlah-maba')
                    ],
                    [
                        'title' => 'Mahasiswa Beasiswa',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Rekap Keuangan Semester',
                        'url' => url('/laporan/rekap-keuangan-semester')
                    ],
                ]
            ],
            [
                'title' => 'Kelas',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'Presensi Kelas',
                        'url' => url('/laporan/presensi-kelas')
                    ],
                    [
                        'title' => 'Presensi Ujian',
                        'url' => url('/laporan/presensi-ujian')
                    ],
                    [
                        'title' => 'Kelas Barcode',
                        'url' => url('/laporan/kelas-barcode')
                    ],
                ]
            ],
            [
                'title' => 'Kartu Mahasiswa',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'KRS',
                        'url' => url('/laporan/krs')
                    ],
                    [
                        'title' => 'KHS',
                        'url' => url('/laporan/khs')
                    ],
                    [
                        'title' => 'Transkip',
                        'url' => url('/laporan/transkrip')
                    ],
                    [
                        'title' => 'Ijazah',
                        'url' => url('/laporan/ijazah')
                    ],
                    [
                        'title' => 'Kartu Studi Dan Ujian',
                        'url' => url('/laporan/kartu-studi-dan-ujian')
                    ],
                    [
                        'title' => 'Kartu Ujian',
                        'url' => url('/laporan/kartu-ujian')
                    ],
                ]
            ],
            [
                'title' => 'Perangkat Wisuda',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'Buku Alumni',
                        'url' => url('/laporan/buku-alumni')
                    ],
                    [
                        'title' => 'Buku Induk Ijazah',
                        'url' => url('/laporan/buku-induk-ijazah')
                    ],
                    [
                        'title' => 'Name Tag',
                        'url' => url('/laporan/name-tag')
                    ],
                    [
                        'title' => 'Label Bangku',
                        'url' => url('/laporan/label-bangku')
                    ],
                    [
                        'title' => 'Label Undangan',
                        'url' => url('/laporan/label-undangan')
                    ],
                    [
                        'title' => 'Data Alumni',
                        'url' => url('/laporan/data-alumni')
                    ],
                ]
            ],
        ]
    ],
    [
        'title' => 'Referensi',
        'url' => url('/'),
        'sub_menu' => [
            [
                'title' => 'Universitas',
                'url' => url('/'),
                'sub_menu' => [
                    [
                        'title' => 'Unit',
                        'url' => url('/referensi/universitas/unit'),
                    ],
                    [
                        'title' => 'Kampus',
                        'url' => url('/referensi/universitas/kampus'),
                    ],
                    [
                        'title' => 'Gedung',
                        'url' => url('/referensi/universitas/gedung'),
                    ],
                    [
                        'title' => 'Manajemen Ruang',
                        'url' => url('/'),
                        'sub_menu' => [
                            [
                                'title' => 'Master Ruang',
                                'url' => url('/referensi/universitas/master-ruang'),
                            ],
                            [
                                'title' => 'Prioritas Ruang',
                                'url' => url('/referensi/universitas/prioritas-ruang'),
                            ]
                        ]
                    ],
                    [
                        'title' => 'Pejabat',
                        'url' => url('#'),
                    ],
                    [
                        'title' => 'Slot Waktu',
                        'url' => url('#'),
                    ],
                    [
                        'title' => 'Bidang Studi',
                        'url' => url('#'),
                    ],
                    [
                        'title' => 'Program Pendidikan',
                        'url' => url('#'),
                    ],
                    [
                        'title' => 'Jenis Kelas Perkuliahan',
                        'url' => url('#'),
                    ],
                    [
                        'title' => 'Akreditasi',
                        'url' => url('#'),
                    ],
                    [
                        'title' => 'Frekuensi Kurikulum',
                        'url' => url('#'),
                    ],
                    [
                        'title' => 'Kompetensi Jurusan',
                        'url' => url('#'),
                    ],
                ]
            ],
            [
                'title' => 'Akademik',
                'url' => url('#'),
                'sub_menu' => [
                    [
                        'title' => 'Propinsi',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Kota',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Sumber Beasiswa',
                        'url' => '#',
                    ],
                ]
            ],
            [
                'title' => 'Biodata',
                'url' => url('#'),
                'sub_menu' => [
                    [
                        'title' => 'Agama',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Kewarganegaraan',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Status Nikah',
                        'url' => '#',
                    ],
                ]
            ],
            [
                'title' => 'Mahasiswa ',
                'url' => url('#'),
                'sub_menu' => [
                    [
                        'title' => 'Status Mahasiswa',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Pendidikan (ortu)',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Pekerjaan (ortu)',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Pendidikan (ortu)',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Pengalaman',
                        'url' => '#',
                    ],
                ]
            ],
            [
                'title' => 'Pegawai',
                'url' => url('#'),
                'sub_menu' => [
                    [
                        'title' => 'Jabatan Akademik',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Jabatan Struktural',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Pendidikan Dosen',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Jenis Honor',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Beban Mengajar',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Honor Mengajar',
                        'url' => '#',
                    ],
                ]
            ],
        ]
    ],
    [
        'title' => 'Setting',
        'url' => url('/'),
        'sub_menu' => [
            [
                'title' => 'Setting Global',
                'url' => url('/setting/global'),
            ],
            [
                'title' => 'Setting Per Kelas',
                'url' => url('/setting/per-kelas'),
            ],
            [
                'title' => 'Setting Per Unit',
                'url' => url('/setting/per-unit'),
            ],
            [
                'title' => 'Setting KRS',
                'url' => url('/setting/krs'),
            ],
            [
                'title' => 'Setting Batal KRS',
                'url' => url('/setting/batal/krs'),
            ],
        ]
    ],
];

?>

<header class="z-10 py-4 bg-umby shadow">
    <div class="container flex items-center justify-between h-full px-6 mx-auto text-gray-600">
        <nav class="bg-umby border-cool-gray-200 px-2 sm:px-4 py-2.5 rounded w-full">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                {{-- UMBY LOGO --}}
                <a href="{{ URL('/') }}" class="flex items-center">
                    <img src="{{ URL('assets/img/icon-siak-white.png') }}" alt="UMBY Logo" class="h-6 mr-3 sm:h-9">
                    <div class="flex flex-col items-center">
                        <p class="self-center font-semibold whitespace-nowrap text-white">Sistem Informasi Akademik</p>
                        <p class="self-center font-semibold whitespace-nowrap text-white text-xs">Universitas Mercubuana Yogyakarta</p>
                    </div>
                </a>

                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-white focus:text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6 color" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="flex flex-col p-4 mt-4  rounded-lg bg-transparent md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                        @foreach ($data_nav as $nav)
                            <li>
                                @if (isset($nav['sub_menu']))
                                    <button id="dropdown-{{ $nav['title'] }}-btn"
                                        data-dropdown-toggle="dropdown-{{ $nav['title'] }}"
                                        class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-cool-gray-300 md:p-0 md:w-auto">{{ $nav['title'] }}
                                        <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg></button>

                                    <div id="dropdown-{{ $nav['title'] }}"
                                        class="absolute z-10 font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 hidden">
                                        <ul class="py-1 text-sm text-gray-700"
                                            aria-labelledby="subMenu-{{ $nav['title'] }}">
                                            @forelse ($nav['sub_menu'] as $submenu)
                                                <li class="relative">
                                                    @if (isset($submenu['sub_menu']))
                                                        <button id="dropdown-sub-{{ $submenu['title'] }}"
                                                            data-dropdown-toggle="dropdown-sub-{{ $submenu['title'] }}-sub"
                                                            data-dropdown-placement="right-start" type="button"
                                                            class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100">{{ $submenu['title'] }}<svg
                                                                aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg></button>
                                                        <div id="dropdown-sub-{{ $submenu['title'] }}-sub"
                                                            class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44">
                                                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                                aria-labelledby="dropdown-sub-{{ $submenu['title'] }}">
                                                                @foreach ($submenu['sub_menu'] as $subsubmenu)
                                                                    @if (isset($subsubmenu['sub_menu']))
                                                                        <button id="dropdown-sub-{{ $subsubmenu['title'] }}"
                                                                            data-dropdown-toggle="dropdown-sub-{{ $subsubmenu['title'] }}-sub"
                                                                            data-dropdown-placement="right-start" type="button"
                                                                            class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100">{{ $subsubmenu['title'] }}<svg
                                                                            aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                                clip-rule="evenodd"></path>
                                                                            </svg></button>
                                                                            <div id="dropdown-sub-{{ $subsubmenu['title'] }}-sub"
                                                                                class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44">
                                                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                                                    aria-labelledby="dropdown-sub-{{ $subsubmenu['title'] }}">
                                                                                    @foreach ($subsubmenu['sub_menu'] as $subsubsubmenu)
                                                                                        <li>
                                                                                            <a href="{{ $subsubsubmenu['url'] }}"
                                                                                                class="block px-4 py-2 hover:bg-gray-100">{{ $subsubsubmenu['title'] }}</a>
                                                                                        </li>
                                                                                    @endforeach
                                                                                </ul>
                                                                            </div>
                                                                    @else
                                                                        <li>
                                                                            <a href="{{ $subsubmenu['url'] }}"
                                                                                class="block px-4 py-2 hover:bg-gray-100">{{ $subsubmenu['title'] }}</a>
                                                                        </li>
                                                                    @endif
                                                                    
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @else
                                                        <a href="{{ $submenu['url'] }}"
                                                            class="block px-4 py-2 hover:bg-gray-100">{{ $submenu['title'] }}</a>
                                                    @endif
                                                </li>
                                            @empty
                                                <li>
                                                    <span>Tidak ada dropdown</span>
                                                </li>
                                            @endforelse
                                        </ul>
                                    </div>
                                @else
                                    <a href="{{ $nav['url'] }}"
                                        class="block py-2 pl-3 pr-4 rounded md:bg-transparent text-white md:p-0 md:hover:text-cool-gray-300">{{ $nav['title'] }}</a>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>


        </nav>
    </div>
</header>
