@extends('layouts.default')
@section('title', 'Rekonsiliasi')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Rekonsiliasi">
        <br>
        <div class="flex flex-row mb-2 form-input">
            <div class="flex">
                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Transaksi</span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <input type="text" name="kodemk"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                    </div>
                    <div class="basis-2/3 flex items-center">
                        <input type="text" name="kodemk"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4">
                    </div>
                    <div class="flex ml-auto">
                        <x-button size="sm" color="white" as-link={{ true }} href="#"
                        class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="refresh-cw"
                            width="16"></i>&nbsp;Tampilan</x-button>
                        <x-button size="sm" color="blue" as-link={{ true }} href="#" class="mx-2 text-white"><i
                            data-feather="plus" width="16"></i>&nbsp;Buat File</x-button>
                       
                    </div>
                </div> 
            </div>
        </div>

        <div class="flex flex-row mb-2">
            <div class="w-full">
                <table id="mahasiswa-table" class="hover cell-border stripe  order-column">
                </table>
            </div>
        </div>

    </x-card>
@endsection

