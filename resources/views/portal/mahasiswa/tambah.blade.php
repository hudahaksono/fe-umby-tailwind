@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <div class="grid grid-cols-2 w-full gap-2">
        <!-- <x-card>
            <x-title level="4">Aksi Cepat</x-title>
            <hr>
            <ul>
                <li>Detail Mahasiswa</li>
                <li>Detail Mahasiswa</li>
                <li>Detail Mahasiswa</li>
                <li>Detail Mahasiswa</li>
                <li>Detail Mahasiswa</li>
                <li>Detail Mahasiswa</li>
                <li>Detail Mahasiswa</li>
            </ul>
        </x-card> -->
        <x-card title="Mahasiswa" class="w-full mx-auto col-span-3 px-12">
            @slot('button')
            <x-button as-link={{ true }} href="#" size="sm"
                class="bg-teal-500 hover:bg-teal-400 active:bg-teal-400 focus:shadow-outline-teal ml-auto"><i data-feather="info"
                    width="14"></i>&nbsp;Bantuan
            </x-button>
            @endslot
            <!-- <x-title level="4" class="text-center">Detail Mahasiswa</x-title> -->
            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-5">
                    <label class="block col-span-1 md:col-span-2">
                        <span class="text-gray-600">NIM</span>
                        <input type="text" name="nim"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input"
                            placeholder="Nim Mahasiswa...">
                    </label>

                    <label class="block">
                        <span class="text-gray-600">Nama</span>
                        <input type="text" name="nama"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input"
                            placeholder="Nama Mahasiswa...">
                    </label>

                    <label class="block">
                        <span class="text-gray-600">Fakultas</span>
                        <select id="select-fakultas" name="fakultas" class="pt-2">
                        </select>
                    </label>

                    <label class="block">
                        <span class="text-gray-600">Jurusan</span>
                        <select id="select-jurusan" name="jurusan" class="pt-2">
                        </select>
                    </label>

                    <label class="block">
                        <span class="text-gray-600">Kampus</span>
                        <select id="select-kampus" name="kampus" class="pt-2">
                        </select>
                    </label>

                    <div class="flex justify-between">
                        <label class="w-3/4">
                            <span class="text-gray-600">Periode Masuk</span>
                            <select id="select-periode-semester" name="semester-masuk" class="pt-2">
                            </select>
                        </label>
                        <label class="w-1/4">
                            <span class="text-gray-600">&nbsp;</span>
                            <select id="select-tahun-masuk" name="periode-masuk" class="pt-2">
                            </select>
                        </label>
                    </div>

                    <label class="block">
                        <span class="text-gray-600">Pendidikan Asal</span>
                        <select id="select-pendidikan" name="pendidikan" class="pt-2">
                        </select>
                    </label>

                    <label class="block">
                        <span class="text-gray-600">Kelas</span>
                        <select id="select-kelas" name="kelas" class="pt-2">
                        </select>
                    </label>

                    <label class="block">
                        <span class="text-gray-600">Jenis Kuliah</span>
                        <select id="select-jenis-kuliah" name="jenis-kuliah" class="pt-2">
                        </select>
                    </label>

                    <label class="block">
                        <span class="text-gray-600">Angsuran Pangkal (UKT)</span>
                        <input type="text" name="nama"
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input"
                            placeholder="Nama Mahasiswa...">
                    </label>

                    <label class="block">
                        <span class="text-gray-600">Kurikulum</span>
                        <select id="select-kurikulum" name="kurikulum" class="pt-2">
                        </select>
                    </label>

                    <label class="block">
                        <span class="text-gray-600">Konsentrasi Bidang/Studi</span>
                        <select id="select-konsentrasi" name="konsentrasi" class="pt-2">
                        </select>
                    </label>

                    <label class="block">
                        <span class="text-gray-600">Tipe Perkuliahan</span>
                        <select id="select-perkuliahan" name="perkuliahan" class="pt-2">
                        </select>
                    </label>
                </div>

                <!-- Tab View -->
                <hr />

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
                                id="pendidikan-asal-tab" data-tabs-target="#pendidikan-asal" type="button" role="tab"
                                aria-controls="pendidikan-asal" aria-selected="false">Pendidikan Asal</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button
                                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300"
                                id="transfer-tab" data-tabs-target="#transfer" type="button" role="tab"
                                aria-controls="transfer" aria-selected="false">Transfer</button>
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
                                id="riwayat-pendidikan-tab" data-tabs-target="#riwayat-pendidikan" type="button" role="tab" aria-controls="riwayat-pendidikan"
                                aria-selected="false">Riawayat Pendidikan</button>
                        </li>
                    </ul>
                </div>
                <div id="biodata-content">
                    <div class="hidden p-4 bg-gray-50 rounded-lg" id="biodata" role="tabpanel"
                        aria-labelledby="biodata-tab">
                        <!-- <x-title level="5">Detail Bio</x-title> -->
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
                                    <option>-- Pilih Agama --</option>
                                    <option>Islam</option>
                                    <option>Kristen Protestan</option>
                                    <option>Kristen Khatolik</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Konghucu</option>
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
                                    <option>-- Pilih Golongan Darah --</option>
                                    <option>O</option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>AB</option>
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

                        <!-- <x-title level="5" class="mt-8">Rekening Bank</x-title> -->

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">No. KTP</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="no_ktp"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">NPWP</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="npwp"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Tinggi Badan</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center pl-4">
                                <input type="text"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded-l form-input ">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border-gray-300 rounded-r py-2 mt-1 font-semibold w-14">
                                    CM
                                </span>
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Berat Badan</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center pl-4">
                                <input type="text"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded-l form-input ">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border-gray-300 rounded-r py-2 mt-1 font-semibold w-14">
                                    KG
                                </span>
                            </div>
                        </div>

                        <hr />

                        <!-- <x-title level="5" class="mt-8">Ciri Fisik</x-title> -->

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 pt-2"><span class="text-gray-600">Cacat Tubuh</span>
                            </div>
                            <div class="basis-1 pt-2">:</div>
                            <div class="basis-2/3 pl-4">
                                <div class="flex flex-col">
                                    <textarea name="cacat_tubuh"
                                        class="block w-full my-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input"></textarea>
                                </div>
                            </div>
                        </div>

                        <hr />

                        <!-- <x-title level="5" class="mt-8">Informasi Lain</x-title> -->

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 pt-2"><span class="text-gray-600">Hobi</span>
                            </div>
                            <div class="basis-1 pt-2">:</div>
                            <div class="basis-2/3 pl-4">
                                <div class="flex flex-col">
                                    <textarea name="hobi"
                                        class="block w-full my-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hidden p-4 bg-gray-50 rounded-lg" id="akademik" role="tabpanel"
                        aria-labelledby="akademik-tab">
                        <x-title level="5">Registrasi</x-title>
                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Tanggal Registrasi</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="date" name="tanggal_registrasi"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Jalur Penerimaan</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="jalur_penerimaan"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Gelombang</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="gelombang"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row justify-between my-2 py-4 md:py-0">
                            <div class="basis-1/6 flex items-center"><span
                                    class="text-gray-600 font-semibold md:font-normal">Nilai</span>
                            </div>

                            <div class="basis-5/6">
                                <div class="flex flex-row justify-between my-2 ">
                                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Ujian Masuk</span>
                                    </div>
                                    <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center">
                                        <input type="text" name="ujian_masuk"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                    </div>
                                </div>

                                <hr />

                                <div class="flex flex-row justify-between my-2 ">
                                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Matrikulasi</span>
                                    </div>
                                    <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center">
                                        <input type="text" name="matrikulasi"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr />

                        <x-title level="5" class="pt-5">Akademik</x-title>
                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Tanggal Awal Masuk Kuliah</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="date" name="tanggal_awal_masuk_kuliah"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Nilai TOEFL</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="nilai_toefl"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Penanggung Dana</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="penanggung_data"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr/>

                        <x-title level="5" class="pt-5">Kelulusan</x-title>
                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">No. Ijasah</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="no_ijasah"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Tanggal Ijasah</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="date" name="tanggal_ijasah"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">No. Transkrip</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="no_transkrip"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <x-title level="5" class="pt-5">Tidak Melanjutkan Kuliah</x-title>
                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Tanggal</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="date" name="tanggal_ijasah"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Alasan</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="alasan_tidak_melanjutkan"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>
                    </div>

                    <div class="hidden p-4 bg-gray-50 rounded-lg" id="keluarga" role="tabpanel"
                        aria-labelledby="keluarga-tab">
                        
                        <x-title level="5">Orang Tua</x-title>
                        
                        <div class="flex flex-col md:flex-row justify-between my-2 py-4 md:py-0">
                            <div class="basis-1/6 flex items-center"><span
                                    class="text-gray-600 font-semibold md:font-normal">Ayah</span>
                            </div>

                            <div class="basis-5/6">
                                <div class="flex flex-row justify-between my-2 ">
                                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Nama</span>
                                    </div>
                                    <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center">
                                        <input type="text" name="nama_ayah"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                    </div>
                                </div>

                                <hr />

                                <div class="flex flex-row justify-between my-2">
                                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Pendidikan</span>
                                    </div>
                                    <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center">
                                        <select id="select-agama" name="agama"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                            <option>-- Pilih Pendidikan --</option>
                                            <option>SD</option>
                                            <option>SMP</option>
                                            <option>SMA</option>
                                            <option>D3</option>
                                            <option>S1</option>
                                            <option>S2</option>
                                        </select>
                                    </div>
                                </div>

                                <hr />

                                <div class="flex flex-row justify-between my-2">
                                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Pekerjaan</span>
                                    </div>
                                    <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center">
                                        <select id="select-agama" name="agama"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                            <option>-- Pilih Pekerjaan --</option>
                                            <option>PNS</option>
                                            <option>TNO/POLRI</option>
                                            <option>KARYAWAN SWASTA</option>
                                            <option>WIRASWASTA</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row justify-between my-2 py-4 md:py-0">
                            <div class="basis-1/6 flex items-center"><span
                                    class="text-gray-600 font-semibold md:font-normal">Ibu</span>
                            </div>

                            <div class="basis-5/6">
                                <div class="flex flex-row justify-between my-2 ">
                                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Nama</span>
                                    </div>
                                    <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center">
                                        <input type="text" name="nama_ayah"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                    </div>
                                </div>

                                <hr />

                                <div class="flex flex-row justify-between my-2">
                                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Pendidikan</span>
                                    </div>
                                    <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center">
                                        <select id="select-agama" name="agama"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                            <option>-- Pilih Pendidikan --</option>
                                            <option>SD</option>
                                            <option>SMP</option>
                                            <option>SMA</option>
                                            <option>D3</option>
                                            <option>S1</option>
                                            <option>S2</option>
                                        </select>
                                    </div>
                                </div>

                                <hr />

                                <div class="flex flex-row justify-between my-2">
                                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Pekerjaan</span>
                                    </div>
                                    <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center">
                                        <select id="select-agama" name="agama"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                            <option>-- Pilih Pekerjaan --</option>
                                            <option>PNS</option>
                                            <option>TNO/POLRI</option>
                                            <option>KARYAWAN SWASTA</option>
                                            <option>WIRASWASTA</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Pendapatan Total</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-pendapatan-total" name="agama"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                    <option>-- Pilih Pendapatan Total --</option>
                                    <option>< Rp. 3.000.000</option>
                                    <option>Rp. 3.000.000 - Rp. 5.000.000</option>
                                </select>
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Alamat</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="alamat_orang_tua"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
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

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Telp</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="tlp_orangtua"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <x-title level="5" class="pt-5">Keluarga</x-title>
                        
                        <div class="flex flex-col md:flex-row justify-between my-2 py-4 md:py-0">
                            <div class="basis-1/6 flex items-center"><span
                                    class="text-gray-600 font-semibold md:font-normal">Istri/Suami</span>
                            </div>

                            <div class="basis-5/6">
                                <div class="flex flex-row justify-between my-2 ">
                                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Nama</span>
                                    </div>
                                    <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center">
                                        <input type="text" name="nama_ayah"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                    </div>
                                </div>

                                <div class="flex flex-row justify-between my-2">
                                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Tanggal Lahir</span>
                                    </div>
                                    <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center">
                                        <input type="date" name="tanggal_lahir_istri_suami"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row justify-between my-2 py-4 md:py-0">
                            <div class="basis-1/6 flex items-center"><span
                                    class="text-gray-600 font-semibold md:font-normal">Anak 1</span>
                            </div>

                            <div class="basis-5/6">
                                <div class="flex flex-row justify-between my-2 ">
                                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Nama</span>
                                    </div>
                                    <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center">
                                        <input type="text" name="nama_anak1"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                    </div>
                                </div>

                                <div class="flex flex-row justify-between my-2">
                                <div class="basis-1/3 flex items-center"><span class="text-gray-600">Jenis Kelamin</span>
                                </div>
                                <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center pl-4">
                                        <ul
                                            class="items-center w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 md:flex">
                                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                                <div class="flex items-center pl-3">
                                                    <input id="horizontal-list-radio-license-anak1" type="radio" value="L"
                                                        name="list-radio"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                                    <label for="horizontal-list-radio-license-anak1"
                                                        class="py-3 ml-2 w-full text-sm font-medium text-gray-90">Laki-Laki</label>
                                                </div>
                                            </li>
                                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                                <div class="flex items-center pl-3">
                                                    <input id="horizontal-list-radio-id-anak1" type="radio" value="P"
                                                        name="list-radio"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                                    <label for="horizontal-list-radio-id-anak1"
                                                        class="py-3 ml-2 w-full text-sm font-medium text-gray-90">Perempuan</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="flex flex-row justify-between my-2">
                                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Tanggal Lahir</span>
                                    </div>
                                    <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center">
                                        <input type="date" name="tanggal_lahir_anak1"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row justify-between my-2 py-4 md:py-0">
                            <div class="basis-1/6 flex items-center"><span
                                    class="text-gray-600 font-semibold md:font-normal">Anak 2</span>
                            </div>

                            <div class="basis-5/6">
                                <div class="flex flex-row justify-between my-2 ">
                                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Nama</span>
                                    </div>
                                    <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center">
                                        <input type="text" name="nama_anak1"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                    </div>
                                </div>

                                <div class="flex flex-row justify-between my-2">
                                <div class="basis-1/3 flex items-center"><span class="text-gray-600">Jenis Kelamin</span>
                                </div>
                                <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center pl-4">
                                        <ul
                                            class="items-center w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 md:flex">
                                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                                <div class="flex items-center pl-3">
                                                    <input id="horizontal-list-radio-license-anak2" type="radio" value="L"
                                                        name="list-radio"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                                    <label for="horizontal-list-radio-license-anak2"
                                                        class="py-3 ml-2 w-full text-sm font-medium text-gray-90">Laki-Laki</label>
                                                </div>
                                            </li>
                                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                                <div class="flex items-center pl-3">
                                                    <input id="horizontal-list-radio-id-anak2" type="radio" value="P"
                                                        name="list-radio"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                                    <label for="horizontal-list-radio-id-anak2"
                                                        class="py-3 ml-2 w-full text-sm font-medium text-gray-90">Perempuan</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="flex flex-row justify-between my-2">
                                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Tanggal Lahir</span>
                                    </div>
                                    <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center">
                                        <input type="date" name="tanggal_lahir_anak2"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <hr />

                        <x-title level="5" class="pt-5">Kontak yang Bisa Dihubungi Saat Darurat</x-title>
                        
                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Nama Kontak</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="nama_darurat"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Telpon</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="tlp_darurat"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                    </div>

                    <div class="hidden p-4 bg-gray-50 rounded-lg" id="pendidikan-asal" role="tabpanel"
                        aria-labelledby="pendidikan-asal-tab">

                        <x-title level="5">Instansi Pendidikan Terakhir (SMA/SMK/Perguruan Tinggi)</x-title>
                        
                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Jenjang Pendidikan</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-jenjang-pendidikan" name="jenjang-pendidikan"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Nama Instansi</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="nama_instansi"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">NISN</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="nisn"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Alamat</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="alamat_jenjang_pendidikan"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Provinsi</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-provinsi-jenjang-penididikan" name="provinsi"
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
                                <select id="select-kota-jenjang-penididikan" name="kota"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Telpon</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="tlp_jenjang_pendidikan"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <x-title level="5" class="pt-5">Riwayat</x-title>
                        
                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">No Ijasah Asal	</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="no_ijasah_asal"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">NEM/IPK Asal	</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="nem_ipk_asal"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                    </div>

                    <div class="hidden p-4 bg-gray-50 rounded-lg" id="transfer" role="tabpanel"
                        aria-labelledby="transfer-tab">

                        <x-title level="5">Transfer</x-title>
                        
                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Status Transfer</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="checkbox" name="status_transfer"
                                    class="block mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-checkbox ml-4"
                                    placeholder=""> &nbsp; Merupakan Mahasiswa Transfer
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">NIM Asal</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="nim_asal"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Tahun Transfer</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="tahun_transfer"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">IPK Asal</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="ipk_asal"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">SKS Lulus/Diakui</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center pl-4">
                                <input type="text" name="sks_diakui"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input mr-2">
                                <span class="text-center">/</span>
                                <input type="text" name="sks_diakui"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-2">
                                    &nbsp; Transfer Nilai
                            </div>
                        </div>

                        <hr />

                        <x-title level="5" class="pt-5">Data DIKTI Perguruan Tinggi Asal (Transfer Eksternal)</x-title>
                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Perguruan Tinggi</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="perguruan_tinggi"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Program Studi</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="program_studi"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <x-title level="5" class="pt-5">Data Perguruan Tinggi Asal (Bila Tidak Ada di Data DIKTI)</x-title>
                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Perguruan Tinggi</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="perguruan_tinggi_dikti"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Program Studi</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="program_studi_dikti"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Provinsi</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-provinsi-dikti" name="provinsi-dikti"
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
                                <select id="select-kota-dikti" name="kota-dikti"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>

                        <hr />
                        
                    </div>

                    <div class="hidden p-4 bg-gray-50 rounded-lg" id="pekerjaan" role="tabpanel"
                        aria-labelledby="pekerjaan-tab">
                        <x-title level="5">Pekerjaan</x-title>
                        
                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Status Pekerjaan</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="checkbox" name="status_pekerjaan"
                                    class="block mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-checkbox ml-4"
                                    placeholder=""> &nbsp; Memiliki Pekerjaan
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Jenis Pekerjaan</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-jenis-pekerjaan" name="jenis-pekerjaan"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Detail Pekerjaan</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="detail_pekerjaan"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Jabatan</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="jabatan"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Pendapatan</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-pendaopatan" name="pendapatan"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>

                        <hr />

                        <x-title level="5" class="pt-5">Tempat Bekerja</x-title>
                        

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Nama Instansi</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="nama_instansi"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Jenis Instansi</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="jenis_instansi"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Alamat</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="alamat_tempat_bekerja"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Provinsi</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-provinsi-tempat-bekerja" name="tempat-bekerja"
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
                                <select id="select-kota-tempat-bekerja" name="kota-tempat-bekerja"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Telpon</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="tlp_kantor"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />
                        
                    </div>

                    <div class="hidden p-4 bg-gray-50 rounded-lg" id="riwayat-pendidikan" role="tabpanel"
                        aria-labelledby="riwayat-pendidikan-tab">
                        <p class="text-sm text-gray-500">This is some placeholder content the <strong
                                class="font-medium text-gray-800">Settings tab's associated
                                content</strong>. Clicking another tab will toggle the visibility of this one for the next.
                            The tab JavaScript swaps classes to control the content visibility and styling.</p>
                    </div>

                    <p class="text-gray-400 italic my-4 text-sm">Kolom dengan tanda <span class="text-red-600">*</span> wajib
                    diisi.</p>
                    <div class="mt-4">
                        <x-button as-link={{ true }} href="/mahasiswa"
                            class="bg-gray-500 hover:bg-gray-400 active:bg-gray-400">Kembali</x-button>
                        <x-button type="submit">Simpan</x-button>
                    </div>
                </div>
            </form>
        </x-card>
    </div>
@stop

@section('scripts')
    <script>
        var fakultasSetting = {
            placeholder: "Pilih Fakultas...",
            options: [{
                    value: "psikologi",
                    text: "Psikologi"
                },
                {
                    value: "ekonomi",
                    text: "Ekonomi"
                },
            ],
        }

        new TomSelect('#select-fakultas', fakultasSetting)

        var jurusanSetting = {
            placeholder: "Pilih Jurusan...",
            options: [{
                    value: "psikologi",
                    text: "Psikologi"
                },
                {
                    value: "psikologimagister",
                    text: "Psikologi Magister"
                },
            ],
        }

        new TomSelect('#select-jurusan', jurusanSetting)
        

        var kampusSetting = {
            placeholder: "Pilih Kampus...",
            options: [{
                    value: "pusat",
                    text: "Kampus Pusat"
                },
                {
                    value: "gejayan",
                    text: "Kampus Gejayan"
                },
                {
                    value: "gejayan_ring_road",
                    text: "Kampus Gejayan Ring Road"
                },
            ],
        }
        new TomSelect('#select-kampus', kampusSetting)

        var periodeSemesterSetting = {
            placeholder: "Pilih Semester Masuk...",
            options: [{
                    value: "gasal",
                    text: "Semester Gasal"
                },
                {
                    value: "gasal_pendek",
                    text: "Semester Gasal Pendek"
                },
                {
                    value: "genap",
                    text: "Semester Genap"
                },
                {
                    value: "genap_pendek",
                    text: "Semester Genap Pendek"
                },
            ],
        }
        new TomSelect('#select-periode-semester', periodeSemesterSetting)

        var tahunMasukSetting = {
            placeholder: "Tahun Masuk...",
            options: [{
                    value: "2022",
                    text: "2022"
                },
                {
                    value: "2023",
                    text: "2023"
                },
            ],
        }
        new TomSelect('#select-tahun-masuk', tahunMasukSetting)

        var kelasSetting = {
            placeholder: "Pilih Kelas...",
            options: [{
                    value: "ukt",
                    text: "UKT"
                },
                {
                    value: "spp",
                    text: "SPP Tetap"
                },
            ],
        }
        new TomSelect('#select-kelas', kelasSetting)

        var pendidikanSetting = {
            placeholder: "Pilih Pendidikan...",
            options: [
                {
                    value: "sma",
                    text: "SMA"
                },
                {
                    value: "SMEA",
                    text: "SMEA"
                },
                {
                    value: "d1",
                    text: "D1"
                },
                {
                    value: "d2",
                    text: "D2"
                },
                {
                    value: "d3",
                    text: "D3"
                },
                {
                    value: "s1",
                    text: "S1"
                },
                {
                    value: "d4",
                    text: "D4"
                },
            ],
        }

        new TomSelect('#select-pendidikan', pendidikanSetting)

        var jenisKuliahSetting = {
            placeholder: "Pilih Jenis Kuliah...",
            options: [{
                    value: "r1",
                    text: "Reguler Pagi [R1]"
                },
                {
                    value: "r2",
                    text: "Reguler Malam [R2]"
                },
                {
                    value: "r3",
                    text: "Kelas Karyawan [R3]"
                },
            ],
        }

        new TomSelect('#select-jenis-kuliah', jenisKuliahSetting)

        var jurusanSetting = {
            placeholder: "Pilih Jurusan...",
            options: [{
                    value: "psikologi",
                    text: "Psikologi"
                },
                {
                    value: "psikologimagister",
                    text: "Psikologi Magister"
                },
            ],
        }
        
        var kurikulumSetting = {
            placeholder: "Pilih Kurikulum...",
            options: [{
                    value: "21-73201",
                    text: "21-73201 Kurikulum Psikologi 2021"
                },
                {
                    value: "17-73201",
                    text: "17-73201 Kurikulum Psikologi 2017"
                },
                {
                    value: "15-73201",
                    text: "15-73201 Kurikulum Psikologi 2015"
                },
            ],
        }

        new TomSelect('#select-kurikulum', kurikulumSetting)

        // Mulai

        var konsentrasiSetting = {
            placeholder: "Pilih Konsentrasi Bidag...",
            options: [{
                    value: "psikologi",
                    text: "Psikologi"
                },
            ],
        }

        new TomSelect('#select-konsentrasi', konsentrasiSetting)

        var perkuliahanSetting = {
            placeholder: "Pilih Tipe Perkuliahan...",
            options: [{
                    value: "21-73201",
                    text: "21-73201 Kurikulum Psikologi 2021"
                },
                {
                    value: "17-73201",
                    text: "17-73201 Kurikulum Psikologi 2017"
                },
                {
                    value: "15-73201",
                    text: "15-73201 Kurikulum Psikologi 2015"
                },
            ],
        }

        new TomSelect('#select-perkuliahan', perkuliahanSetting)
    </script>
@endsection
