<?php
// change this for menu navbar
$data_nav = [
    [
        'title' => 'Home',
        'url' => url('/'),
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
                'url' => url('/rekap-status-mahasiswa'),
            ],
            [
                'title' => 'Laporan Total Mahasiswa',
                'url' => url('/rekap-status-mahasiswa'),
            ],
        ],
    ],
    [
        'title' => 'Perkuliahan',
        'url' => url('/'),
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
                        'url' => '#',
                    ],
                    [
                        'title' => 'Kode Kurikulum',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Kurikulum Jurusan',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Ekivalensi Mata Kuliah',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Prasyarat Mata Kuliah',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Skala Nilai',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Unsur Penilaian',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Predikat Kelulusan',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Aturan Batas SKS',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Aturan Evaluasi',
                        'url' => '#',
                    ],
                ],
            ],
            [
                'title' => 'Kelas Kuliah',
                'url' => url('/dosen'),
                'sub_menu' => [
                    [
                        'title' => 'Monitoring Kelas',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Kelas Perkuliahan',
                        'url' => '#',
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
                        'url' => '#',
                    ],
                    [
                        'title' => 'Presensi Mahasiswa',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Nilai Kuliah',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Pengesahan Nilai',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Distribusi Peserta Kelas',
                        'url' => '#',
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
                        'url' => '#',
                    ],
                ],
            ],
            [
                'title' => 'Kelas Ujian',
                'url' => url('/rekap-status-mahasiswa'),
                'sub_menu' => [
                    [
                        'title' => 'Kelas Ujian',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Monitoring Ujian',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Presensi Ujian Mahasiswa',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Matrix Ruang Ujian',
                        'url' => '#',
                    ],
                ],
            ],
            [
                'title' => 'Administrasi',
                'url' => url('/rekap-status-mahasiswa'),
                'sub_menu' => [
                    [
                        'title' => 'Dosen PA',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Periode Akademik',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Aturan Cuti',
                        'url' => '#',
                    ],
                    [
                        'title' => 'BLOK KRS',
                        'url' => '#',
                        'sub_menu' => [
                            [
                                'title' => 'Jenis Blok KRS',
                                'url' => '#',
                            ],
                            [
                                'title' => 'Blok Perpustakaan',
                                'url' => '#',
                            ],
                            [
                                'title' => 'Blok Keuangan',
                                'url' => '#',
                            ],
                            [
                                'title' => 'Blok Kemahasiswaan',
                                'url' => '#',
                            ],
                        ],
                    ],
                    [
                        'title' => 'Rekap Status Mahasiswa',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Pengajuan Status Mahasiswa',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Usulan DO',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Evaluasi Mahasiswa',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Ekivalensi Mahasiswa',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Pindah Jurusan',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Transfer Nilai',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Pengesahan SKPI',
                        'url' => '#',
                    ],
                ],
            ],
            [
                'title' => 'Tugas Akhir',
                'url' => url('/rekap-status-mahasiswa'),
                'sub_menu' => [
                    [
                        'title' => 'Tugas Akhir',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Monitoring Tugas Akhir',
                        'url' => '#',
                    ],
                ],
            ],
            [
                'title' => 'Kerja Praktek',
                'url' => url('/rekap-status-mahasiswa'),
                'sub_menu' => [
                    [
                        'title' => 'Monitoring Kerja Praktek',
                        'url' => '#',
                    ],
                ],
            ],
            [
                'title' => 'Realisasi (Barcode Read)',
                'url' => url('/rekap-status-mahasiswa'),
                'sub_menu' => [
                    [
                        'title' => 'Realisasi Perkuliahan',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Realisasi Ujian',
                        'url' => '#',
                    ],
                ],
            ],
            [
                'title' => 'Yudisium',
                'url' => url('/rekap-status-mahasiswa'),
                'sub_menu' => [
                    [
                        'title' => 'Periode Yudisium',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Syarat Yudisium',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Syarat Mhs Yudisium',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Peserta Yudisium',
                        'url' => '#',
                    ],
                ],
            ],
            [
                'title' => 'Wisuda',
                'url' => url('/rekap-status-mahasiswa'),
                'sub_menu' => [
                    [
                        'title' => 'Periode Wisuda',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Syarat Wisuda',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Syarat Mahasiswa',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Peserta Wisuda',
                        'url' => '#',
                    ],
                ],
            ],
            [
                'title' => 'PDPT',
                'url' => url('/rekap-status-mahasiswa'),
                'sub_menu' => [
                    [
                        'title' => 'Setting',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Target',
                        'url' => '#',
                    ],
                ],
            ],
        ],
    ],
    [
        'title' => 'Keuangan',
        'url' => url('/'),
        'sub_menu' => [
            [
                'title' => 'Komponen Tarif',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'Jenis Tarif',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Tarif Umum',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Formulir',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Kategori Potongan',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Potongan Tagihan',
                        'url' => '#',
                    ],
                ],
            ],
            [
                'title' => 'Tarif R1 dan R2',
                'url' => '#',
                'sub_menu' => [
                    [
                        'title' => 'SPA',
                        'url' => '#',
                    ],
                    [
                        'title' => 'SPP Tetap',
                        'url' => '#',
                    ],
                    [
                        'title' => 'SPP Variabel',
                        'url' => '#',
                    ],
                    [
                        'title' => 'SKS Praktikum',
                        'url' => '#',
                    ],
                    [
                        'title' => 'BPP SKS SP',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Kemahasiswaan',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Ujian Susulan',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Sidang TA',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Ijasah dan Wisuda',
                        'url' => '#',
                    ],
                    [
                        'title' => 'Pengajuan Status',
                        'url' => '#',
                    ],
                    [
                        'title' => 'SKS Default',
                        'url' => '#',
                    ],
                    [
                        'title' => 'SPP Variabel Praktek',
                        'url' => '#',
                    ],
                ],
            ],
            [
                'title' => 'Tarif UKT',
                'url' => '#',
            ],
            [
                'title' => 'Tagihan',
                'url' => '#',
            ],
            [
                'title' => 'Pembayaran',
                'url' => '#',
            ],
            [
                'title' => 'BANK BNI',
                'url' => '#',
            ],
            [
                'title' => 'H2H',
                'url' => '#',
            ],
        ],
    ],
    [
        'title' => 'Laporan',
        'url' => url('/'),
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
                                'url' => url('#'),
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
            ],
            [
                'title' => 'Biodata',
                'url' => url('#'),
            ],
            [
                'title' => 'Mahasiswa',
                'url' => url('#'),
            ],
            [
                'title' => 'Pegawai',
                'url' => url('#'),
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
