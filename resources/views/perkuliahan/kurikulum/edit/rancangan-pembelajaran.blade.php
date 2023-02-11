@extends('layouts.default')
@section('title', 'Jenis Mata Kuliah')

{{-- YOUR CONTENT START HERE --}}
@section('contents')
    <x-card title="Rancangan Pembelajaran">
        @slot('button')
        <div class="flex ml-auto">
            <x-button size="sm" color="white" as-link={{ true }} href="/perkuliahan/jenis-mata-kuliah"
                    class="mx-2  text-cool-gray-800 border-cool-gray-400 ml-auto"><i data-feather="list" width="16"></i>&nbsp;Daftar</x-button>
            <x-button as-link={{true}} href="#" size="sm" class="bg-teal-500 hover:bg-teal-400 active:bg-teal-400 focus:shadow-outline-teal ml-auto"><i
                    data-feather="info" width="14"></i>&nbsp;Bantuan</x-button>
        </div>
        @endslot
        <form>
            <div class="w-full md:w-1/2">
                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Kode Jenis MK <span
                                class="text-red-600">*</span></span>
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
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Nama Jenis Mata Kuliah <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <input type="text" name="nama"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4"
                            placeholder="MPK..">
                    </div>
                </div>

                <hr />


                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Urutan <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <input type="text" name="urutan"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4"
                            placeholder="1..">
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Keterangan <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <input type="text" name="keterangan"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4"
                            placeholder="Matakuliah Pengembangan Kepribadian...">
                    </div>
                </div>

                <p class="text-gray-400 italic my-4 text-sm">Kolom dengan tanda <span class="text-red-600">*</span> wajib
                    diisi.</p>


                <div class="mt-4">
                    <x-button as-link={{ true }} href="/perkuliahan/jenis-mata-kuliah"
                        class="bg-gray-500 hover:bg-gray-400 active:bg-gray-400">Kembali</x-button>
                    <x-button type="submit">Simpan</x-button>
                </div>


            </div>

        </form>
    </x-card>
@endsection
