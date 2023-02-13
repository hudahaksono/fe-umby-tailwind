@extends('layouts.default')
@section('title', 'Mata Kuliah')

{{-- YOUR CONTENT START HERE --}}
@section('contents')
    <!-- <x-title class="text-cool-gray-800 mb-5">Mata Kuliah</x-title> -->
    <x-card title="Rancangan Pembelajaran">
        <div class="flex flex-row mb-4">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Filter&nbsp; :</span>
                    </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-thn-kurikulum" name="jk" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-jurusan" name="ststus_mhs" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-status-sap" name="ststus_mhs" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
            </div>
            <div class="flex ml-auto">
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
                kodemk: 'ILK53',
                nama: 'Manajemen Periklanan',
                nama_en: 'Advertising Management',
                jenis: 1411,
                sks: 3,
                nip_dosen: '212417',
            },
            {
                id: 2,
                kodemk: 'PET110P',
                nama: 'Aplikasi Komputer Lanjut',
                nama_en: 'Advanced Computer Application',
                jenis: 1411,
                sks: 1,
                nip_dosen: '027',
            },
            {
                id: 3,
                kodemk: 'PET103',
                nama: 'Statistika',
                nama_en: 'Statistics',
                jenis: 1411,
                sks: 2,
                nip_dosen: '0029126301',
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
                        data: 'kodemk',
                        title: 'Kode MK'
                    },
                    {
                        data: 'nama',
                        title: 'Nama Matakuliah'
                    },
                    {
                        data: 'nama_en',
                        title: 'Nama Matakuliah (EN)'
                    },
                    {
                        data: 'jenis',
                        title: 'Jenis'
                    },
                    {
                        data: 'sks',
                        title: 'SKS'
                    },
                    {
                        data: 'nip_dosen',
                        title: 'NIP Dosen Pengampu'
                    },
                    {
                        data: 'id',
                        title: 'Aksi',
                        // TODO: FIX THIS
                        render: (data) => {
                            const btnClass = (color = "gray") =>
                                `inline-flex items-center px-2 text-xs rounded my-2 font-medium leading-5 text-center text-white transition-colors duration-150 bg-${color}-500 border border-transparent active:bg-${color}-500 hover:bg-${color}-600 focus:outline-none focus:shadow-outline-${color} mx-1`
                            const btn = `
                        <div class="flex justify-center">
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

            var sapSelect = {
                placeholder: "Jenis",
                options: [{
                        value: "1111",
                        text: "Ada SAP"
                    },
                    {
                        value: "1121",
                        text: "Belum ada SAP"
                    },
                ],
            }

            var thnKurSelect = {
                placeholder: "Tahun Kurikulum...",
                options: [{
                        value: "2021",
                        text: "2021"
                    },
                    {
                        value: "2017",
                        text: "2017"
                    },
                    {
                        value: "2016",
                        text: "2016"
                    },
                ],
            }

            var jurSelect = {
                placeholder: "Jurusan...",
                options: [
                    {
                        value: "111",
                        text: "S1 Psikologi"
                    },
                    {
                        value: "112",
                        text: "S1 Magister Psikologi"
                    },
                    {
                        value: "113",
                        text: "S1 Magister Psikologi Profesi"
                    },
                ],
            }

            new TomSelect('#select-thn-kurikulum', thnKurSelect)
            new TomSelect('#select-jurusan', jurSelect)
            new TomSelect('#select-status-sap', sapSelect)

        })
    </script>
@endsection
