@extends('layouts.default')
@section('title', 'Data Unit')

{{-- YOUR CONTENT START HERE --}}
@section('contents')
    <x-title class="text-cool-gray-800 mb-5">Data Unit</x-title>
    <x-card>
        <div class="flex flex-row mb-4">
            <!-- <div class="w-1/4">
                <select id="filter" name="filter" multiple
                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                </select>
            </div> -->
            <div class="flex ml-auto">
                <x-button size="sm" color="blue" as-link={{ true }}
                    href="{{ URL('/perkuliahan/mata-kuliah/tambah') }}" class="mx-2"><i data-feather="plus"
                        width="16"></i>&nbsp;Tambah</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="refresh-cw"
                        width="16"></i>&nbsp;Reset</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="printer"
                        width="16"></i>&nbsp;Cetak</x-button>
            </div>
        </div>
        <table id="view-table" class="hover cell-border stripe order-column"></table>
    </x-card>
@endsection

{{-- JS START HERE --}}
@section('scripts')
    <script>
        const dataSet = [{
                id: 1,
                kodeunit: '00',
                namaunit: 'Universitas Mercu Buana Yogyakarta',
                singkat: 'UMB Yogya',
                level: 'Universitas',
                program: '',
                gelar: '',
            },
            {
                id: 2,
                kodeunit: '8',
                namaunit: 'Psikologi',
                singkat: 'FPSI',
                level: 'Fakultas',
                program: '',
                gelar: '',
            },
            {
                id: 3,
                kodeunit: '2',
                namaunit: 'Ekonomi',
                singkat: 'FE',
                level: 'Fakultas',
                program: '',
                gelar: '',
            },
        ]

        $(document).ready(function() {
            $('#view-table').DataTable({
                data: dataSet,
                columns: [{
                        data: 'id',
                        render: (data, type, row, meta) => meta.row + meta.settings._iDisplayStart + 1,
                        title: "No."
                    },
                    {
                        data: 'kodeunit',
                        title: 'Kode Unit'
                    },
                    {
                        data: 'namaunit',
                        title: 'Nama Unit'
                    },
                    {
                        data: 'singkat',
                        title: 'Singkat'
                    },
                    {
                        data: 'level',
                        title: 'Level'
                    },
                    {
                        data: 'program',
                        title: 'Program'
                    },
                    {
                        data: 'gelar',
                        title: 'Gelar'
                    },
                ]
            })

            var jenisMkSelect = {
                placeholder: "Kelas",
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
            new TomSelect('#filter', jenisMkSelect)

        })
    </script>
@endsection
