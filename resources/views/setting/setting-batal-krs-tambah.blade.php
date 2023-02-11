@extends('layouts.default')
@section('title', 'Jenis Mata Kuliah')

{{-- YOUR CONTENT START HERE --}}
@section('contents')
    <x-card title="Periode Pembatalan KRS">
        @slot('button')
        <div class="flex ml-auto">
            <x-button as-link={{true}} href="#" size="sm" class="bg-teal-500 hover:bg-teal-400 active:bg-teal-400 focus:shadow-outline-teal ml-auto"><i
                    data-feather="info" width="14"></i>&nbsp;Bantuan</x-button>
        </div>

        @endslot
        <div class="flex flex-row mb-4">
            <div class="flex ml-auto">
                <x-button size="sm" color="white" as-link={{ true }} href="#" class="mx-2 text-cool-gray-800 border-cool-gray-400 ml-auto">
                    <i data-feather="check" width="16"></i>
                    &nbsp;Simpan
                </x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="/setting/batal/krs"
                        class="mx-2  text-cool-gray-800 border-cool-gray-400 ml-auto"><i data-feather="list" width="16"></i>&nbsp;Daftar</x-button>
            </div>
        </div>
        <hr>
        <form>
            <div class="w-full md:w-1/2">
                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Unit <span
                                class="text-red-600">*</span></span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <select id="unit" name="unit"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                        </select>
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Kelas <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <select id="kelas" name="kelas"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                        </select>
                    </div>
                </div>

                <hr />


                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Periode <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <select id="periode" name="periode"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                        </select>
                        <select id="periode_thn" name="periode_thn"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                        </select>
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Tanggal Mulai <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <div class="relative">
                            <x-datepicker class='ml-4' name="tgl_mulai">
                            </x-datepicker>
                        </div>
                        
                    </div>
                </div>
                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Tanggal Selesai <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <div class="relative">
                            <x-datepicker class='ml-4' name="tgl_selesai">
                            </x-datepicker>
                        </div>
                    </div>
                </div>

                <!-- <p class="text-gray-400 italic my-4 text-sm">Kolom dengan tanda <span class="text-red-600">*</span> wajib
                    diisi.</p>


                <div class="mt-4">
                    <x-button as-link={{ true }} href="/perkuliahan/jenis-mata-kuliah"
                        class="bg-gray-500 hover:bg-gray-400 active:bg-gray-400">Kembali</x-button>
                    <x-button type="submit">Simpan</x-button>
                </div> -->


            </div>

        </form>
    </x-card>
@endsection
@section('scripts')
    <script>
        var unitSelect = {
                placeholder: "Unit",
                options: [{
                        value: "1111",
                        text: "S1 Psikologi"
                    },
                    {
                        value: "1121",
                        text: "S2 Magister Psikologi"
                    },
                    {
                        value: "1122",
                        text: "S2 Magister Psikologi Profesi"
                    },
                ],
            }
        var kelasSelect = {
                placeholder: "Kelas",
                options: [{
                        value: "1",
                        text: "UKT"
                    },
                    {
                        value: "2",
                        text: "SPP Tetap"
                    },
                ],
            }
        var periodeSelect = {
                placeholder: "Peiode",
                options: [{
                        value: "1",
                        text: "Gasal"
                    },
                    {
                        value: "2",
                        text: "Gasal Pendek"
                    },
                    {
                        value: "3",
                        text: "Genap"
                    },
                    {
                        value: "4",
                        text: "Genap Pendek"
                    },
                ],
            }
        var periodethnSelect = {
                placeholder: "Periode",
                options: [{
                        value: "1",
                        text: "2024/2025"
                    },
                    {
                        value: "2",
                        text: "2023/2024"
                    },
                ],
            }
        new TomSelect('#unit', unitSelect)
        new TomSelect('#kelas', kelasSelect)
        new TomSelect('#periode', periodeSelect)
        new TomSelect('#periode_thn', periodethnSelect)
    </script>
@endsection