@extends('layouts.default')
@section('title', 'Pegawai')

{{-- YOUR CONTENT START HERE --}}
@section('contents')
    <x-card title="Pegawai">
        @slot('button')
            <x-button as-link={{ true }} href="#" size="sm"
                class="bg-teal-500 hover:bg-teal-400 active:bg-teal-400 focus:shadow-outline-teal ml-auto"><i data-feather="info"
                    width="14"></i>&nbsp;Bantuan</x-button>
        @endslot
        <form>
            <div class="w-full md:w-1/2">
                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">NIP <span
                                class="text-red-600">*</span></span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <input type="text" name="kodemk"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4"
                            placeholder="111.." required>
                    </div>
                </div>

                <hr />

                <div class="flex flex-col md:flex-row justify-between my-2 py-4 md:py-0">
                    <div class="basis-1/6 flex items-center"><span
                            class="text-gray-600 font-semibold md:font-normal">Nama</span>
                    </div>

                    <div class="basis-5/6">
                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Gelar Depan</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="gelar_depan"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Nama <span
                                class="text-red-600">*</span></span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="nama" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Gelar Belakang</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="gelar_belakang"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>
                    </div>
                </div>

                <hr />


                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Unit Kerja&nbsp;<span
                                class="text-red-600">*</span></span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <select id="select-jenismk" name="jenis_mk" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                        </select>
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">NIK UMB</span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <input type="text" name="kodemk"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">NIDN / NUPN</span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <input type="text" name="kodemk"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">No. KTP</span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <input type="text" name="kodemk"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">NPWP</span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <input type="text" name="kodemk"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                    </div>
                </div>

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
                                id="keluarga-tab" data-tabs-target="#keluarga" type="button" role="tab"
                                aria-controls="keluarga" aria-selected="false">Keluarga</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button
                                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300"
                                id="lain-tab" data-tabs-target="#lain" type="button" role="tab" aria-controls="lain"
                                aria-selected="false">Lain - Lain</button>
                        </li>
                    </ul>
                </div>
                <div id="biodata-content">
                    <div class="hidden p-4 bg-gray-50 rounded-lg" id="biodata" role="tabpanel"
                        aria-labelledby="biodata-tab">
                        <x-title level="5">Detail Bio</x-title>
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

                        <x-title level="5" class="mt-8">Rekening Bank</x-title>

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">No. Rekening</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="no_rek"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Atas Nama</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="atas_nama"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Nama Bank</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="nama_bank"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Cabang</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="cabang"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <x-title level="5" class="mt-8">Ciri Fisik</x-title>

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

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Ciri Rambut</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="ciri_rambut"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Bentuk Muka</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="bentuk_muka"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Warna Kulit</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="bentuk_muka"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 pt-2"><span class="text-gray-600">Ciri Khas</span>
                            </div>
                            <div class="basis-1 pt-2">:</div>
                            <div class="basis-2/3 pl-4">
                                <div class="flex flex-col">
                                    <textarea name="ciri_khas"
                                        class="block w-full my-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input"></textarea>
                                </div>
                            </div>
                        </div>

                        <hr />

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

                        <x-title level="5" class="mt-8">Informasi Lain</x-title>

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

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 pt-2"><span class="text-gray-600">Catatan</span>
                            </div>
                            <div class="basis-1 pt-2">:</div>
                            <div class="basis-2/3 pl-4">
                                <div class="flex flex-col">
                                    <textarea name="catatan"
                                        class="block w-full my-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input"></textarea>
                                </div>
                            </div>
                        </div>

                        <hr />




                    </div>
                    <div class="hidden p-4 bg-gray-50 rounded-lg" id="keluarga" role="tabpanel"
                        aria-labelledby="keluarga-tab">
                        <p class="text-sm text-gray-500">This is some placeholder content the <strong
                                class="font-medium text-gray-800">Dashboard tab's associated
                                content</strong>. Clicking another tab will toggle the visibility of this one for the next.
                            The tab JavaScript swaps classes to control the content visibility and styling.</p>
                    </div>
                    <div class="hidden p-4 bg-gray-50 rounded-lg" id="lain" role="tabpanel"
                        aria-labelledby="lain-tab">
                        <p class="text-sm text-gray-500">This is some placeholder content the <strong
                                class="font-medium text-gray-800">Settings tab's associated
                                content</strong>. Clicking another tab will toggle the visibility of this one for the next.
                            The tab JavaScript swaps classes to control the content visibility and styling.</p>
                    </div>
                </div>



                <p class="text-gray-400 italic my-4 text-sm">Kolom dengan tanda <span class="text-red-600">*</span> wajib
                    diisi.</p>


                <div class="mt-4">
                    <x-button as-link={{ true }} href="/perkuliahan/mata-kuliah"
                        class="bg-gray-500 hover:bg-gray-400 active:bg-gray-400">Kembali</x-button>
                    <x-button type="submit">Simpan</x-button>
                </div>


            </div>

        </form>
    </x-card>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        var jenisMkSelect = {
            placeholder: "Pilih Pegawai...",
            options: [{
                    value: "1111",
                    text: "Matakuliah Pengembangan Kepribadian - 1111"
                },
                {
                    value: "1121",
                    text: "Matakuliah Keilmuan Ketrampilan - 1121"
                },
                {
                    value: "1122",
                    text: "Matakuliah Keilmuan KB - 1122"
                },
            ],
        }

        new TomSelect('#select-jenismk', jenisMkSelect)

        var tipeKuliahSelect = {
            placeholder: "Pilih Tipe Perkuliahan...",
            options: [{
                    value: "kuliah",
                    text: "Kuliah"
                },
                {
                    value: "praktikum",
                    text: "Praktikum"
                },
                {
                    value: "kkn",
                    text: "KKN"
                },
                {
                    value: "ta-skripsi",
                    text: "TA/Skripsi"
                },
            ],
        }

        new TomSelect('#select-tipekuliah', tipeKuliahSelect)

        var dosenPengampuSelect = {
            placeholder: "Pilih Dosen Pengampu...",
            options: [{
                    value: "910101",
                    text: "910101 - Sarjono"
                },
                {
                    value: "960204",
                    text: "960204 - Rukinah Dra."
                },
                {
                    value: "002084801",
                    text: "002084801 - Sri Luwihana D. Ir,S"
                },
                {
                    value: "002086101",
                    text: "002086101 - Ir. Sonita Rosningsih MS."
                },
            ],
        }

        new TomSelect('#select-dosenpengampu', dosenPengampuSelect)


        $('#nilai_min').mask("9.99")
    </script>
@endsection
