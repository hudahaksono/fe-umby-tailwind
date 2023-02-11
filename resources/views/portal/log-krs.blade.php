@extends('layouts.default')
@section('title', 'Portal Log KRS')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Log Hapus KRS dan Perubahan Nilai">
        <div class="flex flex-row mb-4">
            <div class="flex ml-auto">
                <x-button size="sm" color="blue" as-link={{ true }} href="#" class="mx-2"><i
                    data-feather="plus" width="16"></i>&nbsp;Tambah</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="refresh-cw"
                        width="16"></i>&nbsp;Reset</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="printer"
                        width="16"></i>&nbsp;Cetak</x-button>
            </div>
        </div>
        <table id="log-krs-table" class="hover cell-border stripe  order-column"></table>

    </x-card>
@endsection

@section('scripts')
    <script>
        const dataSet = [{
                id: 1,
                log: 'Hapus KRS',
                nim: '16012070',
                nama_mahasiswa: 'SANTIKA INTHI NAWANGSARI SUSANTO',
                mata_kuliah: 'Skripsi',
                user: 'ristalia',
                alamat_ip: '10.1.1.3',
                waktu: '16 Agu 2018 12:29',
                aksi: 'setpeserta/lst',
            },
            {
                id: 1,
                log: 'Hapus KRS',
                nim: '16012098',
                nama_mahasiswa: 'WIRA PRAKASIWI',
                mata_kuliah: 'Skripsi',
                user: 'ristalia',
                alamat_ip: '10.1.1.3',
                waktu: '16 Agu 2018 12:29',
                aksi: 'setpeserta/lst',
            },
            {
                id: 1,
                log: 'Hapus KRS',
                nim: '16012099',
                nama_mahasiswa: 'MUHAMMAD NURHADI JAYA ISMANA',
                mata_kuliah: 'Skripsi',
                user: 'ristalia',
                alamat_ip: '10.1.1.3',
                waktu: '16 Agu 2018 12:29',
                aksi: 'setpeserta/lst',
            },
        ]

        $(document).ready(function() {
            $('#log-krs-table').DataTable({
                data: dataSet,
                columns: [{
                        data: 'id',
                        render: (data, type, row, meta) => meta.row + meta.settings._iDisplayStart + 1,
                        title: "No."
                    },
                    {
                        data: 'log',
                        title: 'Log',
                    },
                    {
                        data: 'nim',
                        title: 'NIM'
                    },
                    {
                        data: 'nama_mahasiswa',
                        title: 'Nama Mahasiswa'
                    },
                    {
                        data: 'mata_kuliah',
                        title: 'Mata Kuliah'
                    },
                    {
                        data: 'user',
                        title: 'User'
                    },
                    {
                        data: 'alamat_ip',
                        title: 'Alamat IP'
                    },
                    {
                        data: 'waktu',
                        title: 'Waktu'
                    },
                    {
                        data: 'aksi',
                        title: 'Aksi'
                    },
                ]
            })
        })
    </script>
@endsection
