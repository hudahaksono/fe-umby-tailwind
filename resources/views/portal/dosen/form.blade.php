@extends('layouts.default')
@section('title', 'Pegawai')

{{-- YOUR CONTENT START HERE --}}
@section('contents')
    <x-card title="Pegawai" class="w-full mx-auto col-span-3 px-12">
        @slot('button')
            <x-button as-link={{ true }} href="#" size="sm"
                class="bg-teal-500 hover:bg-teal-400 active:bg-teal-400 focus:shadow-outline-teal ml-auto"><i data-feather="info"
                    width="14"></i>&nbsp;Bantuan</x-button>
        @endslot
        <form id="form_input">
            <div class="grid grid-cols-1 md:grid-cols-1 gap-8 pt-5">
                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">NIP <span
                                class="text-red-600">*</span></span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <input type="text" name="nip"
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
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4" required>
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
                        <select id="select-unit" name="kodeunit" required
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
                        <input type="text" name="nik"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">NIDN / NUPN</span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <input type="text" name="nidn"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">No. KTP</span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <input type="text" name="noktp"
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
                                                name="sex"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                            <label for="horizontal-list-radio-license"
                                                class="py-3 ml-2 w-full text-sm font-medium text-gray-90">Laki-Laki</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                        <div class="flex items-center pl-3">
                                            <input id="horizontal-list-radio-id" type="radio" value="P"
                                                name="sex"
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
                                <select id="select-agama" name="kodeagama"
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
                                <select id="select-gol-darah" name="goldarah"
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
                                <input type="text" name="tmplahir"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Tanggal Lahir</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="date" name="tgllahir"
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
                                        <input type="text" name="alamat_jalan"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                    </div>
                                </div>

                                <hr />

                                <div class="flex flex-row justify-between my-2 ">
                                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">RT / RW</span>
                                    </div>
                                    <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center pl-4">
                                        <input type="text" name="alamat_rt"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input mr-2">
                                        <span class="text-center">/</span>
                                        <input type="text" name="alamat_rw"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-2">
                                    </div>
                                </div>

                                <hr />

                                <div class="flex flex-row justify-between my-2 ">
                                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Kelurahan</span>
                                    </div>
                                    <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center">
                                        <input type="text" name="kelurahan"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                    </div>
                                </div>

                                <hr />

                                <div class="flex flex-row justify-between my-2 ">
                                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Kecamatan</span>
                                    </div>
                                    <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center">
                                        <input type="text" name="kecamatan"
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
                                <select id="select-kota" name="kodekota"
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
                                <input type="text" name="kodepos"
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
                                        <input type="text" name="telp"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                    </div>
                                </div>

                                <hr />


                                <div class="flex flex-row justify-between my-2 ">
                                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Telp 2</span>
                                    </div>
                                    <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center">
                                        <input type="text" name="telp2"
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
                                        <input type="text" name="hp"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                    </div>
                                </div>

                                <hr />


                                <div class="flex flex-row justify-between my-2 ">
                                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">HP 2</span>
                                    </div>
                                    <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center">
                                        <input type="text" name="hp2"
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
                                        <input type="text" name="email"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                    </div>
                                </div>

                                <hr />


                                <div class="flex flex-row justify-between my-2 ">
                                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Email 2</span>
                                    </div>
                                    <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center">
                                        <input type="text" name="email2"
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
                                <select id="select-status_menikah" name="statusnikah"
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
                                <select id="select-kewarganegaraan" name="kodewn"
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
                                <input type="text" name="norekening"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Atas Nama</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="rekatasnama"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Nama Bank</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="namabank"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Cabang</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="namacabang"
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
                                <input type="text" name="tinggibadan" 
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
                                <input type="text" name="beratbadan" 
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
                                    <textarea name="cacattubuh"
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
                                    <textarea name="catatankhusus"
                                        class="block w-full my-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input"></textarea>
                                </div>
                            </div>
                        </div>
                        <hr />
                    </div>
                    <div class="hidden p-4 bg-gray-50 rounded-lg" id="keluarga" role="tabpanel"
                        aria-labelledby="keluarga-tab">
                        <x-title level="5">Keluarga</x-title>
                        
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
                                        <input type="text" name="namaistrisuami"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                    </div>
                                </div>

                                <div class="flex flex-row justify-between my-2">
                                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Tanggal Lahir</span>
                                    </div>
                                    <div class="basis-1 flex items-center">:</div>
                                    <div class="basis-2/3 flex items-center">
                                        <input type="date" name="tgllahiristrisuami"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <hr />

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
                                        <input type="text" name="namaanak1"
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
                                                        name="jeniskelaminanak1"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                                    <label for="horizontal-list-radio-license-anak1"
                                                        class="py-3 ml-2 w-full text-sm font-medium text-gray-90">Laki-Laki</label>
                                                </div>
                                            </li>
                                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                                <div class="flex items-center pl-3">
                                                    <input id="horizontal-list-radio-id-anak1" type="radio" value="P"
                                                        name="jeniskelaminanak1"
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
                                        <input type="date" name="tgllahiranak1"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <hr />

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
                                        <input type="text" name="namaanak2"
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
                                                        name="jeniskelaminanak2"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                                    <label for="horizontal-list-radio-license-anak2"
                                                        class="py-3 ml-2 w-full text-sm font-medium text-gray-90">Laki-Laki</label>
                                                </div>
                                            </li>
                                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                                <div class="flex items-center pl-3">
                                                    <input id="horizontal-list-radio-id-anak2" type="radio" value="P"
                                                        name="jeniskelaminanak2"
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
                                        <input type="date" name="tgllahiranak2"
                                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="hidden p-4 bg-gray-50 rounded-lg" id="lain" role="tabpanel"
                        aria-labelledby="lain-tab">
                        
                        <x-title level="5">Kepegawaian</x-title>

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Jabatan Struktural</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-jabatan-struktural" name="jabstruktural"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Jabatan Akademik</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-jabatan-akademik" name="jabakademik"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Pendidikan Terakhir</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-pendidikan-terakhir" name="penddosen"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>

                        <hr />

                        <x-title level="5" class="pt-5">Surat Keterangan Berkelakuan Baik</x-title>

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Pejabat</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="pejabatskkelbaik"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Nomor</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="noskkelbaik"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Tanggal</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="date" name="tglskkelbaik"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <x-title level="5" class="pt-5">Surat Keterangan Berbadan Sehat</x-title>

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Pejabat</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="pejabatsksehat"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Nomor</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="text" name="nosksehat"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Tanggal</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <input type="date" name="tglsksehat"
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                            </div>
                        </div>

                        <hr />

                        <x-title level="5" class="pt-5">Keterangan Lain yang Dianggap Perlu</x-title>


                        <div class="flex flex-row justify-between my-2">
                            <div class="basis-1/3 pt-2"><span class="text-gray-600">Keterangan</span>
                            </div>
                            <div class="basis-1 pt-2">:</div>
                            <div class="basis-2/3 pl-4">
                                <div class="flex flex-col">
                                    <textarea name="keterangan_lain"
                                        class="block w-full my-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="text-gray-400 italic my-4 text-sm">Kolom dengan tanda <span class="text-red-600">*</span> wajib
                    diisi.</p>


                <div class="mt-4">
                    <x-button as-link={{ true }} href="/dosen"
                        class="bg-gray-500 hover:bg-gray-400 active:bg-gray-400 text-white">Kembali</x-button>
                    <x-button id="simpan" as-link={{ true }} href="javascript:void(0)" class="text-white">Simpan</x-button>
                </div>


            </div>

        </form>
    </x-card>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>

        
        
        

        

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

        // new TomSelect('#select-tipekuliah', tipeKuliahSelect)

        var golSelect = {
            placeholder: "Pilih Golongan Darah...",
            options: [{
                    value: "A",
                    text: "A"
                },
                {
                    value: "B",
                    text: "B"
                },
                {
                    value: "AB",
                    text: "AB"
                },
                {
                    value: "O",
                    text: "O"
                },
            ],
        }

        var kewarganegaraanSelect = {
            placeholder: "Pilih Kewarganegaraan...",
            options: [{
                    value: "WNA",
                    text: "Warga Negara Asing"
                },
                {
                    value: "WNI",
                    text: "Warga Negara Indonesia"
                },
            ],
        }

        var statusSelect = {
            placeholder: "Pilih Status Nikah...",
            options: [{
                    value: "0",
                    text: ""
                },
                {
                    value: "1",
                    text: "Menikah"
                },
                {
                    value: "2",
                    text: "Belum Menikah"
                },
                {
                    value: "3",
                    text: "Janda"
                },
                {
                    value: "4",
                    text: "Duda"
                },
            ],
        }

        var pendSelect = {
            placeholder: "Pilih Jenjang Pendidikan...",
            options: [{
                    value: "S1",
                    text: "S-1"
                },
                {
                    value: "S2",
                    text: "S-2"
                },
                {
                    value: "S3",
                    text: "S-3"
                },
            ],
        }

        new TomSelect('#select-gol-darah', golSelect)
        new TomSelect('#select-kewarganegaraan', kewarganegaraanSelect)
        new TomSelect('#select-status_menikah', statusSelect)
        new TomSelect('#select-pendidikan-terakhir', pendSelect)


        $('#nilai_min').mask("9.99")

        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            function get_unit(id = '') {
                $.ajax({
                    url: "/referensi/universitas/unit/list",
                    type: 'GET',
                    success: function(response) {
                        var unitSelect = {
                            placeholder: "Pilih Unit Kerja...",
                            options: response,
                        }
                        new TomSelect('#select-unit', unitSelect)
                    }
                });
            }
// \xa0 = spasi untuk jquery .text()
            function get_agama(id = '') {
                $.ajax({
                    url: "/dosen/agama/list",
                    type: 'GET',
                    success: function(response) {
                        var unitSelect = {
                            placeholder: "Pilih Agama...",
                            options: response,
                        }
                        new TomSelect('#select-agama', unitSelect)
                    }
                });
            }

            function get_provinsi(id = '') {
                $.ajax({
                    url: "/referensi/akademik/provinsi/get",
                    type: 'GET',
                    success: function(response) {
                        var provinsiSelect = {
                            placeholder: "Pilih Provinsi...",
                            options: response,
                        }
                        new TomSelect('#select-provinsi', provinsiSelect)
                    }
                });
            }

            function get_kota(id = '') {
                $.ajax({
                    url: "/referensi/akademik/kota/get",
                    type: 'GET',
                    success: function(response) {
                        var kotaSelect = {
                            placeholder: "Pilih Kota...",
                            options: response,
                        }
                        new TomSelect('#select-kota', kotaSelect)
                    }
                });
            }

            function get_jab_akademik(id = '') {
                $.ajax({
                    url: "/referensi/pegawai/jabatan-akademik/get",
                    type: 'GET',
                    success: function(response) {
                        var kotaSelect = {
                            placeholder: "Pilih Jabatan Akademik...",
                            options: response,
                        }
                        new TomSelect('#select-jabatan-akademik', kotaSelect)
                    }
                });
            }

            function get_jab_struktural(id = '') {
                $.ajax({
                    url: "/referensi/pegawai/jabatan-struktural/get",
                    type: 'GET',
                    success: function(response) {
                        var kotaSelect = {
                            placeholder: "Pilih Jabatan Struktural...",
                            options: response,
                        }
                        new TomSelect('#select-jabatan-struktural', kotaSelect)
                    }
                });
            }

            get_unit();
            get_agama();
            get_provinsi()
            get_kota()
            get_jab_akademik()
            get_jab_struktural()

            $('#simpan').click(function(event) {
                var form = $('#form_input');
                var reportValidity = form[0].reportValidity();

                if(reportValidity){
                    $.ajax({
                        type: "post",
                        url: "{{route('dosen.store')}}",
                        // url: "http://localhost:8080/v1/dosen/posts",
                        data: $("#form_input").serialize(),
                        success: function(response) {
                            for (var key in response) {
                                var flag = response["success"];
                                var message = response["message"];
                            }
                            if ($.trim(flag) == "true") {
                                swal({
                                  title: "Success!",
                                  text: message, 
                                  icon: "success",
                                });

                            } else if ($.trim(flag) == "false") {
                                swal({
                                  title: "Warning!",
                                  text: message, 
                                  icon: "warning",
                                });
                            } else {
                                swal({
                                  title: "Warning!",
                                  text: message, 
                                  icon: "warning",
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            var errorMessage = xhr.status + ": " + xhr.statusText;
                            swal({
                                title: "Error!",
                                text: errorMessage, 
                                icon: "error",
                              });
                        },
                    });
                }else{
                    form.addClass('was-validated');
                }
                
            });

        });
    </script>
@endsection
