@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Mahasiswa">
        <div class="flex flex-row mb-4">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Filter&nbsp; :</span>
                    </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-jk" name="jk" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-statusmhs" name="ststus_mhs" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
            </div>
            <div class="flex ml-auto">
                <x-button size="sm" color="blue" as-link={{ true }} href="{{ URL('/mahasiswa/tambah') }}" class="mx-2"><i
                    data-feather="plus" width="16"></i>&nbsp;Tambah</x-button>
                <x-button size="sm" color="gray" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="refresh-cw"
                        width="16"></i>&nbsp;Reset</x-button>
                <x-button size="sm" color="gray" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="printer"
                        width="16"></i>&nbsp;Cetak</x-button>
                <x-button size="sm" color="gray" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="mail" width="16"></i>&nbsp;Tulis
                    Email</x-button>
            </div>
        </div>
        <table id="mahasiswa-table" class="hover cell-border stripe  order-column"></table>

    </x-card>
@endsection

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
                        title: 'NIM',
                        render :  function (d) {
                            return "<a href='/mahasiswa/detail/"+d+"'>"+d+"</a>";
                        }
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
                            const btnClassRed = (color = "red") =>
                                `inline-flex items-center px-2 text-xs rounded my-2 font-medium leading-5 text-center text-white transition-colors duration-150 bg-${color}-600 border border-transparent active:bg-${color}-600 hover:bg-${color}-600 focus:outline-none focus:shadow-outline-${color} mx-1`
                            const btn = `
                            <div class="flex justify-center">
                            <a href="#" class="${btnClass()}"><i data-feather="mail" width="16"></i></a>
                            <a href="#" class="${btnClass()}"><i data-feather="edit" width="16"></i></a>
                            <a href="#" class="${btnClassRed()}"><i data-feather="trash" width="16"></i></a>
                            </div>
                            `
                            feather.replace()

                            return btn
                        }
                    }
                ]
            })
        })

        var StatusMHSSelect = {
            placeholder: "Pilih Unit kerja...",
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

        var JKSelect = {
            placeholder: "Pilih Jenis Kelamin...",
            options: [
                {
                    value: "L",
                    text: "Laki-laki"
                },
                {
                    value: "P",
                    text: "Perempuan"
                },
            ],
        }

        new TomSelect('#select-statusmhs', StatusMHSSelect)

        new TomSelect('#select-jk', JKSelect)
    </script>
@endsection
