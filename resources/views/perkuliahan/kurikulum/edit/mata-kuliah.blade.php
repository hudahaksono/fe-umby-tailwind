@extends('layouts.default')
@section('title', 'Mata Kuliah')

{{-- YOUR CONTENT START HERE --}}
@section('contents')
    <x-card title="Mata Kuliah">
        @slot('button')
            <x-button as-link={{ true }} href="#" size="sm"
                class="bg-teal-500 hover:bg-teal-400 active:bg-teal-400 focus:shadow-outline-teal ml-auto"><i data-feather="info"
                    width="14"></i>&nbsp;Bantuan</x-button>
        @endslot
        <form>
            <div class="w-full md:w-1/2">
                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Kode Mata Kuliah <span
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

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Nama Mata Kuliah</span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <input type="text" name="kodemk"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4"
                            placeholder="111..">
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Kode Mata Kuliah (EN)</span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <input type="text" name="kodemk"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4"
                            placeholder="111..">
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Jenis Mata Kuliah</span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <select id="select-jenismk" name="jenis_mk"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                        </select>
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Tipe Kuliah&nbsp;<span
                                class="text-red-600">*</span></span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <select id="select-tipekuliah" name="tipe_kuliah" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                        </select>
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Dosen Pengampu</span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <select id="select-dosenpengampu" name="dosen_pengampu_id" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                        </select>
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 pt-2"><span class="text-gray-600">Nilai Min <span
                                class="text-red-600">*</span></span>
                    </div>
                    <div class="basis-1 pt-2">:</div>
                    <div class="basis-2/3 pl-4">
                        <div class="flex flex-col">
                            <input type="text" id="nilai_min" name="nilai_min"
                            class="block w-1/4 my-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input"
                            required>
                            <p class="text-gray-400 text-xs">Nilai minimal mata kuliah, contoh 1.00, 1.01, 1.10, jika kosong=0.00</p>
                        </div>
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Tanggal Mulai Efektif</span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <input type="date" name="kodemk"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4"
                            placeholder="111..">
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Tanggal Selesai Efektif</span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <input type="date" name="kodemk"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4"
                            placeholder="111..">
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 pt-2"><span class="text-gray-600">SKS</span>
                    </div>
                    <div class="basis-1 pt-2">:</div>
                    <div class="basis-2/3 pl-4">
                        <div class="flex flex-col">
                            <input type="text" name="sks"
                            class="block w-1/4 my-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input"
                            maxlength="3" size="3">
                            <p class="text-gray-400 text-xs">Harus berisi angka contoh 10, 20 dst</p>
                        </div>
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 pt-2"><span class="text-gray-600">&nbsp; &nbsp; &nbsp;SKS MK</span>
                    </div>
                    <div class="basis-1 pt-2">:</div>
                    <div class="basis-2/3 pl-4">
                        <div class="flex flex-col">
                            <input type="text" name="sks_mk"
                            class="block w-1/4 my-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input"
                            maxlength="3" size="3">
                            <p class="text-gray-400 text-xs">Harus berisi angka contoh 10, 20 dst</p>
                        </div>
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 pt-2"><span class="text-gray-600">&nbsp; &nbsp; &nbsp;SKS Tatap Muka</span>
                    </div>
                    <div class="basis-1 pt-2">:</div>
                    <div class="basis-2/3 pl-4">
                        <div class="flex flex-col">
                            <input type="text" name="sks_tm"
                            class="block w-1/4 my-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input"
                            maxlength="3" size="3">
                            <p class="text-gray-400 text-xs">Harus berisi angka contoh 10, 20 dst</p>
                        </div>
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 pt-2"><span class="text-gray-600">&nbsp; &nbsp; &nbsp;SKS Praktikum</span>
                    </div>
                    <div class="basis-1 pt-2">:</div>
                    <div class="basis-2/3 pl-4">
                        <div class="flex flex-col">
                            <input type="text" name="sks_prak"
                            class="block w-1/4 my-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input"
                            maxlength="3" size="3">
                            <p class="text-gray-400 text-xs">Harus berisi angka contoh 10, 20 dst</p>
                        </div>
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 pt-2"><span class="text-gray-600">&nbsp; &nbsp; &nbsp;SKS Paktek Lapangan</span>
                    </div>
                    <div class="basis-1 pt-2">:</div>
                    <div class="basis-2/3 pl-4">
                        <div class="flex flex-col">
                            <input type="text" name="sks_pl"
                            class="block w-1/4 my-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input"
                            maxlength="3" size="3">
                            <p class="text-gray-400 text-xs">Harus berisi angka contoh 10, 20 dst</p>
                        </div>
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 pt-2"><span class="text-gray-600">Syarat SKS Lulus</span>
                    </div>
                    <div class="basis-1 pt-2">:</div>
                    <div class="basis-2/3 pl-4">
                        <div class="flex flex-col">
                            <input type="text" name="sks"
                            class="block w-1/4 my-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input"
                            maxlength="3" size="3">
                            <p class="text-gray-400 text-xs">Harus berisi angka contoh 10, 20 dst</p>
                        </div>
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 pt-2"><span class="text-gray-600">Abstrak</span>
                    </div>
                    <div class="basis-1 pt-2">:</div>
                    <div class="basis-2/3 pl-4">
                        <div class="flex flex-col">
                            <input type="text" name="abstrak"
                            class="block w-full my-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input"
                            >
                            <p class="text-gray-400 text-xs">Gambaran umum mata kuliah</p>
                        </div>
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">SAP</span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <input type="checkbox" name="sap"
                            class="block mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-checkbox ml-4"
                            placeholder="111..">
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Silabus</span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <input type="checkbox" name="silabus"
                            class="block mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-checkbox ml-4"
                            placeholder="111..">
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Bahan Ajar</span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <input type="checkbox" name="bahan_ajar"
                            class="block mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-checkbox ml-4"
                            placeholder="111..">
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Diktat</span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <input type="checkbox" name="diktat"
                            class="block mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-checkbox ml-4"
                            placeholder="111..">
                    </div>
                </div>

                <hr />

                


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
            placeholder: "Pilih Jenis Mata Kuliah...",
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
