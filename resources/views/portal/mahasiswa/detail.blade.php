@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Mahasiswa" class="display nowrap w-full">
        @slot('button')
            <x-button as-link={{true}} href="#" size="sm" class="bg-teal-500 hover:bg-teal-400 active:bg-teal-400 focus:shadow-outline-teal ml-auto"><i
                    data-feather="info" width="14"></i>&nbsp;Bantuan</x-button>
        @endslot
        <div class="grid justify-items-end my-2 ">
            <div class="float-right">
                <x-button id="btn_ubah" size="sm" color="white" as-link={{ true }} href="#"
                        class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="edit"
                            width="16"></i>&nbsp;Ubah</x-button>
                <x-button size="sm" color="blue" as-link={{ true }} href="{{ URL('/mahasiswa/tambah') }}" class="mx-2"><i data-feather="plus" width="16"></i>&nbsp;Tambah</x-button>
                
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="x"
                        width="16"></i>&nbsp;Hapus</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2  text-cool-gray-800 border-cool-gray-400"><i data-feather="list" width="16"></i>&nbsp;Daftar</x-button>
            </div>
        </div>

        <form id="form-input">
            <div class="grid grid-rows-2 grid-flow-col gap-4">
                <div class="row-span-2">
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th>Aksi Cepat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Detail Mahasiswa</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Edit Biodata</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Lihat KRS</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">KRS Tugas Akhir</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Jadwal Kuliah</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Jadwal UTS</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Jadwal UAS</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Jadwal Ujian Susulan</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Cetak KTM</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Tarif</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Tagihan</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Total Pembayaran</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Status Semester</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Pengajuan Status</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Kemajuan Belajar</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Lihat KHS</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Edit KHS</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Konsultasi</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Lihat Transkrip</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">SKPI Mahasiswa</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Cetak Transkrip Akhir Indo</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Cetak SKPI</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Cetak SK Mahasiswa Aktif</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Cetak SK Mahasiswa Cuti</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Cetak SK Mahasiswa Pindah</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Cetak SK Mahasiswa Mundur</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Cetak SK Mahasiswa Lulus</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Cetak CV Mahasiwa</td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">View Ijazah</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row-span-2 col-span-12">
                    <table class="table-auto" width="70%">
                        <!-- <thead>
                            <tr>
                                <th>NIM</th>
                            </tr>
                        </thead> -->
                        <tbody>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">NIM</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">:</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">
                                    <input type="text" name="nilai_default" class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4" value="00110001" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Nama</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">:</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">
                                    <input type="text" name="nilai_default" class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4" value="FAUZI ISMAIL" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Fakultas</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">:</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">
                                    <input type="text" name="nilai_default" class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4" value="Agroindustri" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Jurusan</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">:</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">
                                    <input type="text" name="nilai_default" class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4" value="Agroteknologi" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Kampus</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">:</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">
                                    <input type="text" name="nilai_default" class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4" value="Kampus Pusat" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Periode Masuk</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">:</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">
                                    <input type="text" name="nilai_default" class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4" value="Semester Gasal 2000" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Pendidikan Asal</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">:</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">
                                    <input type="text" name="nilai_default" class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4" value="SMU -- Gel. 2" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Kelas</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">:</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">
                                    <input type="text" name="nilai_default" class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4" value="SPP Tetap" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Jenis Kuliah</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">:</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">
                                    <input type="text" name="nilai_default" class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4" value="Reguler Pagi [R1]" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Angsuran Pangkal (UKT)</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">:</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">
                                    <input type="text" name="nilai_default" class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4" value="" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Kurikulum</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">:</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">
                                    <input type="text" name="nilai_default" class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4" value="17-54211 - Kurikulum Agroteknologi 2017" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Konsentrasi / Bidang Studi</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">:</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">
                                    <input type="text" name="nilai_default" class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4" value="" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">Tipe Perkuliahan</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">:</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 pl-5 text-slate-500 dark:text-slate-400">
                                    <input type="text" name="nilai_default" class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4" value="" readonly>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="mt-8 mb-4 border-b border-gray-200">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                            data-tabs-toggle="#myTabContent" role="tablist">
                            <li class="mr-2" role="presentation">
                                <button class="inline-block p-4 rounded-t-lg border-b-2" id="biodata-tab"
                                    data-tabs-target="#biodata" type="button" role="tab" aria-controls="biodata"
                                    aria-selected="false">Biodata</button>
                            </li>
                            <li class="mr-2" role="presentation">
                                <button
                                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300"
                                    id="akademik-tab" data-tabs-target="#akademik" type="button" role="tab"
                                    aria-controls="akademik" aria-selected="false">Akademik</button>
                            </li>
                            <li class="mr-2" role="presentation">
                                <button
                                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300"
                                    id="keluarga-tab" data-tabs-target="#keluarga" type="button" role="tab" aria-controls="keluarga"
                                    aria-selected="false">Keluarga</button>
                            </li>
                            <li class="mr-2" role="presentation">
                                <button
                                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300"
                                    id="pend-asal-tab" data-tabs-target="#pend-asal" type="button" role="tab" aria-controls="pend-asal"
                                    aria-selected="false">Pendidikan Asal</button>
                            </li>
                            <li class="mr-2" role="presentation">
                                <button
                                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300"
                                    id="transfer-tab" data-tabs-target="#transfer" type="button" role="tab" aria-controls="transfer"
                                    aria-selected="false">Transfer</button>
                            </li>
                            <li class="mr-2" role="presentation">
                                <button
                                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300"
                                    id="pekerjaan-tab" data-tabs-target="#pekerjaan" type="button" role="tab" aria-controls="pekerjaan"
                                    aria-selected="false">Pekerjaan</button>
                            </li>
                            <li class="mr-2" role="presentation">
                                <button
                                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300"
                                    id="riwayat-pend-tab" data-tabs-target="#riwayat-pend" type="button" role="tab" aria-controls="riwayat-pend"
                                    aria-selected="false">Riwayat Pendidikan</button>
                            </li>
                        </ul>
                    </div>
                    <div id="biodata-content">
                        <div class="hidden p-4 bg-gray-50 rounded-lg" id="biodata" role="tabpanel"
                            aria-labelledby="biodata-tab">
                            <div class="flex flex-row justify-between my-2">
                                <div class="basis-1/3 flex items-center"><span class="text-gray-600">Jenis Kelamin</span>
                                </div>
                                <div class="basis-1 flex items-center">:</div>
                                <div class="basis-2/3 flex items-center pl-4">
                                    <ul
                                        class="items-center w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 md:flex">
                                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                            <div class="flex items-center pl-3">
                                                <input id="horizontal-list-radio-license" type="radio" value="L"
                                                    name="list-radio"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                                <label for="horizontal-list-radio-license"
                                                    class="py-3 ml-2 w-full text-sm font-medium text-gray-90">Laki-Laki</label>
                                            </div>
                                        </li>
                                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                            <div class="flex items-center pl-3">
                                                <input id="horizontal-list-radio-id" type="radio" value="P"
                                                    name="list-radio"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                                <label for="horizontal-list-radio-id"
                                                    class="py-3 ml-2 w-full text-sm font-medium text-gray-90">Perempuan</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <hr />

                            <div class="flex flex-row justify-between my-2">
                                <div class="basis-1/3 flex items-center"><span class="text-gray-600">Agama</span>
                                </div>
                                <div class="basis-1 flex items-center">:</div>
                                <div class="basis-2/3 flex items-center">
                                    <select id="select-agama" name="agama"
                                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                    </select>
                                </div>
                            </div>

                            <hr />

                            <div class="flex flex-row justify-between my-2">
                                <div class="basis-1/3 flex items-center"><span class="text-gray-600">Gol. Darah</span>
                                </div>
                                <div class="basis-1 flex items-center">:</div>
                                <div class="basis-2/3 flex items-center">
                                    <select id="select-gol_darah" name="gol_darah"
                                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                    </select>
                                </div>
                            </div>

                            <hr />

                            <div class="flex flex-row justify-between my-2">
                                <div class="basis-1/3 flex items-center"><span class="text-gray-600">Tempat Lahir</span>
                                </div>
                                <div class="basis-1 flex items-center">:</div>
                                <div class="basis-2/3 flex items-center">
                                    <input type="text" name="tempat_lahir"
                                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                </div>
                            </div>

                            <hr />

                            <div class="flex flex-row justify-between my-2">
                                <div class="basis-1/3 flex items-center"><span class="text-gray-600">Tanggal Lahir</span>
                                </div>
                                <div class="basis-1 flex items-center">:</div>
                                <div class="basis-2/3 flex items-center">
                                    <input type="date" name="tanggal_lahir"
                                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                </div>
                            </div>

                            <hr />

                            <div class="flex flex-col md:flex-row justify-between my-2 py-4 md:py-0">
                                <div class="basis-1/6 flex items-center"><span
                                        class="text-gray-600 font-semibold md:font-normal">Alamat</span>
                                </div>

                                <div class="basis-5/6">
                                    <div class="flex flex-row justify-between my-2 ">
                                        <div class="basis-1/3 flex items-center"><span class="text-gray-600">Jalan</span>
                                        </div>
                                        <div class="basis-1 flex items-center">:</div>
                                        <div class="basis-2/3 flex items-center">
                                            <input type="text" name="tempat_lahir"
                                                class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                        </div>
                                    </div>

                                    <hr />

                                    <div class="flex flex-row justify-between my-2 ">
                                        <div class="basis-1/3 flex items-center"><span class="text-gray-600">RT / RW</span>
                                        </div>
                                        <div class="basis-1 flex items-center">:</div>
                                        <div class="basis-2/3 flex items-center pl-4">
                                            <input type="text" name="tempat_lahir"
                                                class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input mr-2">
                                            <span class="text-center">/</span>
                                            <input type="text" name="tempat_lahir"
                                                class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-2">
                                        </div>
                                    </div>

                                    <hr />

                                    <div class="flex flex-row justify-between my-2 ">
                                        <div class="basis-1/3 flex items-center"><span class="text-gray-600">Kelurahan</span>
                                        </div>
                                        <div class="basis-1 flex items-center">:</div>
                                        <div class="basis-2/3 flex items-center">
                                            <input type="text" name="tempat_lahir"
                                                class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                        </div>
                                    </div>

                                    <hr />

                                    <div class="flex flex-row justify-between my-2 ">
                                        <div class="basis-1/3 flex items-center"><span class="text-gray-600">Kecamatan</span>
                                        </div>
                                        <div class="basis-1 flex items-center">:</div>
                                        <div class="basis-2/3 flex items-center">
                                            <input type="text" name="tempat_lahir"
                                                class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <hr />

                            <div class="flex flex-row justify-between my-2">
                                <div class="basis-1/3 flex items-center"><span class="text-gray-600">Provinsi</span>
                                </div>
                                <div class="basis-1 flex items-center">:</div>
                                <div class="basis-2/3 flex items-center">
                                    <select id="select-provinsi" name="provinsi"
                                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                    </select>
                                </div>
                            </div>

                            <hr />

                            <div class="flex flex-row justify-between my-2">
                                <div class="basis-1/3 flex items-center"><span class="text-gray-600">Kab. Kota</span>
                                </div>
                                <div class="basis-1 flex items-center">:</div>
                                <div class="basis-2/3 flex items-center">
                                    <select id="select-kota" name="kota"
                                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                    </select>
                                </div>
                            </div>

                            <hr />

                            <div class="flex flex-row justify-between my-2">
                                <div class="basis-1/3 flex items-center"><span class="text-gray-600">Kode Pos</span>
                                </div>
                                <div class="basis-1 flex items-center">:</div>
                                <div class="basis-2/3 flex items-center">
                                    <input type="text" name="kode_pos"
                                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                </div>
                            </div>

                            <hr />

                            <div class="flex flex-col md:flex-row justify-between my-2 py-4 md:py-0">
                                <div class="basis-1/6 flex items-center"><span
                                        class="text-gray-600 font-semibold md:font-normal">Telp</span>
                                </div>

                                <div class="basis-5/6">
                                    <div class="flex flex-row justify-between my-2 ">
                                        <div class="basis-1/3 flex items-center"><span class="text-gray-600">Telp 1</span>
                                        </div>
                                        <div class="basis-1 flex items-center">:</div>
                                        <div class="basis-2/3 flex items-center">
                                            <input type="text" name="telp_1"
                                                class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                        </div>
                                    </div>

                                    <hr />


                                    <div class="flex flex-row justify-between my-2 ">
                                        <div class="basis-1/3 flex items-center"><span class="text-gray-600">Telp 2</span>
                                        </div>
                                        <div class="basis-1 flex items-center">:</div>
                                        <div class="basis-2/3 flex items-center">
                                            <input type="text" name="telp_2"
                                                class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr />

                            <div class="flex flex-col md:flex-row justify-between my-2 py-4 md:py-0">
                                <div class="basis-1/6 flex items-center"><span
                                        class="text-gray-600 font-semibold md:font-normal">HP</span>
                                </div>

                                <div class="basis-5/6">
                                    <div class="flex flex-row justify-between my-2 ">
                                        <div class="basis-1/3 flex items-center"><span class="text-gray-600">HP 1</span>
                                        </div>
                                        <div class="basis-1 flex items-center">:</div>
                                        <div class="basis-2/3 flex items-center">
                                            <input type="text" name="hp_1"
                                                class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                        </div>
                                    </div>

                                    <hr />


                                    <div class="flex flex-row justify-between my-2 ">
                                        <div class="basis-1/3 flex items-center"><span class="text-gray-600">HP 2</span>
                                        </div>
                                        <div class="basis-1 flex items-center">:</div>
                                        <div class="basis-2/3 flex items-center">
                                            <input type="text" name="hp_2"
                                                class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr />

                            <div class="flex flex-col md:flex-row justify-between my-2 py-4 md:py-0">
                                <div class="basis-1/6 flex items-center"><span
                                        class="text-gray-600 font-semibold md:font-normal">Email</span>
                                </div>

                                <div class="basis-5/6">
                                    <div class="flex flex-row justify-between my-2 ">
                                        <div class="basis-1/3 flex items-center"><span class="text-gray-600">Email 1</span>
                                        </div>
                                        <div class="basis-1 flex items-center">:</div>
                                        <div class="basis-2/3 flex items-center">
                                            <input type="text" name="email_1"
                                                class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                        </div>
                                    </div>

                                    <hr />


                                    <div class="flex flex-row justify-between my-2 ">
                                        <div class="basis-1/3 flex items-center"><span class="text-gray-600">Email 2</span>
                                        </div>
                                        <div class="basis-1 flex items-center">:</div>
                                        <div class="basis-2/3 flex items-center">
                                            <input type="text" name="email_2"
                                                class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr />


                            <div class="flex flex-row justify-between my-2">
                                <div class="basis-1/3 flex items-center"><span class="text-gray-600">Status Menikah</span>
                                </div>
                                <div class="basis-1 flex items-center">:</div>
                                <div class="basis-2/3 flex items-center">
                                    <select id="select-status_menikah" name="status_menikah"
                                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                    </select>
                                </div>
                            </div>

                            <hr />

                            <div class="flex flex-row justify-between my-2">
                                <div class="basis-1/3 flex items-center"><span class="text-gray-600">Kewarganegaraan</span>
                                </div>
                                <div class="basis-1 flex items-center">:</div>
                                <div class="basis-2/3 flex items-center">
                                    <select id="select-kewarganegaraan" name="kewarganegaraan"
                                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                    </select>
                                </div>
                            </div>

                            <hr />

                            <div class="flex flex-row justify-between my-2">
                                <div class="basis-1/3 flex items-center"><span class="text-gray-600">No KTP <span
                                class="text-red-600">*</span></span>
                                </div>
                                <div class="basis-1 flex items-center">:</div>
                                <div class="basis-2/3 flex items-center">
                                    <input type="text" name="no_ktp"
                                                class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                </div>
                            </div>

                            <hr />

                            <div class="flex flex-row justify-between my-2">
                                <div class="basis-1/3 flex items-center"><span class="text-gray-600">No NPWP </span>
                                </div>
                                <div class="basis-1 flex items-center">:</div>
                                <div class="basis-2/3 flex items-center">
                                    <input type="text" name="no_npwp"
                                                class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                </div>
                            </div>

                            <hr />

                            <div class="flex flex-row justify-between my-2">
                                <div class="basis-1/3 flex items-center"><span class="text-gray-600">Tinggi Badan </span>
                                </div>
                                <div class="basis-1 flex items-center">:</div>
                                <div class="basis-2/3 flex items-center">
                                    <input type="text" name="tinggi_badan"
                                                class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                </div>
                            </div>

                            <hr />

                            <div class="flex flex-row justify-between my-2">
                                <div class="basis-1/3 flex items-center"><span class="text-gray-600">Berat Badan </span>
                                </div>
                                <div class="basis-1 flex items-center">:</div>
                                <div class="basis-2/3 flex items-center">
                                    <input type="text" name="berat_badan"
                                                class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                </div>
                            </div>

                            <hr />

                            <div class="flex flex-row justify-between my-2">
                                <div class="basis-1/3 flex items-center"><span class="text-gray-600">Cacat Tubuh </span>
                                </div>
                                <div class="basis-1 flex items-center">:</div>
                                <div class="basis-2/3 flex items-center">
                                    <input type="text" name="cacat_tubuh"
                                                class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                </div>
                            </div>

                            <hr />

                            <div class="flex flex-row justify-between my-2">
                                <div class="basis-1/3 flex items-center"><span class="text-gray-600">Hobi </span>
                                </div>
                                <div class="basis-1 flex items-center">:</div>
                                <div class="basis-2/3 flex items-center">
                                    <input type="text" name="hobi"
                                                class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                </div>
                            </div>

                            <hr />
                            
                        </div>
                        <div class="hidden p-4 bg-gray-50 rounded-lg" id="akademik" role="tabpanel"
                            aria-labelledby="akademik-tab">
                            <p class="text-sm text-gray-500">This is some placeholder content the <strong
                                    class="font-medium text-gray-800">Dashboard tab's associated
                                    content</strong>. Clicking another tab will toggle the visibility of this one for the next.
                                The tab JavaScript swaps classes to control the content visibility and styling.</p>
                        </div>
                        <div class="hidden p-4 bg-gray-50 rounded-lg" id="keluarga" role="tabpanel"
                            aria-labelledby="keluarga-tab">
                            <p class="text-sm text-gray-500">This is some placeholder content the <strong
                                    class="font-medium text-gray-800">Settings tab's associated
                                    content</strong>. Clicking another tab will toggle the visibility of this one for the next.
                                The tab JavaScript swaps classes to control the content visibility and styling.</p>
                        </div>
                        <div class="hidden p-4 bg-gray-50 rounded-lg" id="pend-asal" role="tabpanel"
                            aria-labelledby="pend-asal-tab">
                            <p class="text-sm text-gray-500">This is some placeholder content the <strong
                                    class="font-medium text-gray-800">Settings tab's associated
                                    content</strong>. Clicking another tab will toggle the visibility of this one for the next.
                                The tab JavaScript swaps classes to control the content visibility and styling.</p>
                        </div>
                        <div class="hidden p-4 bg-gray-50 rounded-lg" id="transfer" role="tabpanel"
                            aria-labelledby="transfer-tab">
                            <p class="text-sm text-gray-500">This is some placeholder content the <strong
                                    class="font-medium text-gray-800">Settings tab's associated
                                    content</strong>. Clicking another tab will toggle the visibility of this one for the next.
                                The tab JavaScript swaps classes to control the content visibility and styling.</p>
                        </div>
                        <div class="hidden p-4 bg-gray-50 rounded-lg" id="pekerjaan" role="tabpanel"
                            aria-labelledby="pekerjaan-tab">
                            <p class="text-sm text-gray-500">This is some placeholder content the <strong
                                    class="font-medium text-gray-800">Settings tab's associated
                                    content</strong>. Clicking another tab will toggle the visibility of this one for the next.
                                The tab JavaScript swaps classes to control the content visibility and styling.</p>
                        </div>
                        <div class="hidden p-4 bg-gray-50 rounded-lg" id="riwayat-pend" role="tabpanel"
                            aria-labelledby="riwayat-pend-tab">
                            <p class="text-sm text-gray-500">This is some placeholder content the <strong
                                    class="font-medium text-gray-800">Settings tab's associated
                                    content</strong>. Clicking another tab will toggle the visibility of this one for the next.
                                The tab JavaScript swaps classes to control the content visibility and styling.</p>
                        </div>
                    </div>
                </div>
            </div>

        
            
        </form>
    </x-card>
@endsection

@section('scripts')

@endsection
