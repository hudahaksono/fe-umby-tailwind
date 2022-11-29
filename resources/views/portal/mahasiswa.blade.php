@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')

    <x-card class="mb-6">
        FILTER
    </x-card>
    <x-card title="Mahasiswa" class="display nowrap w-full">
        <div class="flex mb-4">
            <x-button size="sm" color="blue" as-link={{ true }} href="#" class="mx-2"><i
                    data-feather="plus" width="16"></i>&nbsp;Tambah</x-button>
            <x-button size="sm" color="green" as-link={{ true }} href="#" class="mx-2"><i
                    data-feather="printer" width="16"></i>&nbsp;Cetak</x-button>
            <x-button size="sm" color="white" as-link={{ true }} href="#"
                class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="refresh-cw"
                    width="16"></i>&nbsp;Reset</x-button>
            <x-button size="sm" color="white" as-link={{ true }} href="#"
                class="mx-2  text-cool-gray-800 border-cool-gray-400"><i data-feather="mail" width="16"></i>&nbsp;Tulis
                Email</x-button>
        </div>
        <table id="mahasiswa-table" class="hover cell-border stripe  order-column"></table>

    </x-card>
@stop

@section('scripts')
    <script>
        const dataSet = [{
                id: 1,
                nim: '16011124',
                nama: 'RONI PARTAMA',
                stat: 'A',
                angkatan: 2016,
                asal: 'SMU -- GEL. 2',
                jurusan: 'Agroteknologi',
                jenis: 'R2',
                kampus: 'Kampus Pusat'
            },
            {
                id: 1,
                nim: '16031003',
                nama: 'MUGIONO',
                stat: 'A',
                angkatan: 2016,
                asal: 'SMU -- GEL. 2',
                jurusan: 'Agroteknologi',
                jenis: 'R2',
                kampus: 'Kampus Pusat'
            },
            {
                id: 1,
                nim: '16031089',
                nama: 'SARPANDI',
                stat: 'A',
                angkatan: 2016,
                asal: 'SMU -- GEL. 2',
                jurusan: 'Agroteknologi',
                jenis: 'R2',
                kampus: 'Kampus Pusat'
            },
        ]

        $(document).ready(function() {
            $('#mahasiswa-table').DataTable({
                data: dataSet,
                columns: [{
                        data: 'id',
                        render: (data, type, row, meta) => meta.row + meta.settings._iDisplayStart + 1,
                        title: "No."
                    },
                    {
                        data: 'nim',
                        title: 'NIM'
                    },
                    {
                        data: 'nama',
                        title: 'Nama Mahasiswa'
                    },
                    {
                        data: 'stat',
                        title: 'Stat.'
                    },
                    {
                        data: 'angkatan',
                        title: 'Angk.'
                    },
                    {
                        data: 'asal',
                        title: 'Asal'
                    },
                    {
                        data: 'jurusan',
                        title: 'Jurusan'
                    },
                    {
                        data: 'jenis',
                        title: 'Jenis'
                    },
                    {
                        data: 'kampus',
                        title: 'Kampus'
                    },
                    {
                        data: 'id',
                        title: 'Aksi',
                        // TODO: FIX THIS
                        render: (data) => {
                            const btnClass = (color = "gray")  => `inline-flex items-center px-2 text-xs rounded my-2 font-medium leading-5 text-center text-white transition-colors duration-150 bg-${color}-500 border border-transparent active:bg-${color}-500 hover:bg-${color}-600 focus:outline-none focus:shadow-outline-${color} mx-1`
                            const btn = `
                            <div class="flex justify-center">
                            <a href="#" class="${btnClass()}"><i data-feather="mail" width="16"></i></a>
                            <a href="#" class="${btnClass()}"><i data-feather="edit" width="16"></i></a>
                            <a href="#" class="${btnClass("red")}"><i data-feather="trash" width="16"></i></a>
                            </div>
                            `
                            feather.replace()

                            return btn
                        }
                    }
                ]
            })
        })
    </script>
@endsection
