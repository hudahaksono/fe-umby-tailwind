@extends('layouts.default')
@section('title', 'Setting Batal KRS')

{{-- YOUR CONTENT START HERE --}}
@section('contents')
    <x-card title="Periode Pembatalan KRS">
        <div class="flex flex-row mb-4">
            <div class="w-1/4">
                <select id="filter" name="filter" multiple
                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                </select>
            </div>
            <div class="flex ml-auto">
                <x-button size="sm" color="blue" as-link={{ true }}
                    href="{{ URL('/setting/batal/krs-tambah') }}" class="mx-2"><i data-feather="plus"
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
                kodemk: 'UKT',
                nama: 'Universitas Mercu Buana Yogyakarta',
                nama_en: 'Genap 2019',
                jenis: '2 Maret 2020',
                sks: '7 Maret 2020',
                nip_dosen: '212417',
            },
            {
                id: 2,
                kodemk: 'UKT',
                nama: ' S1 Psikologi',
                nama_en: 'Genap 2019',
                jenis: '2 Maret 2020',
                sks: '7 Maret 2020',
                nip_dosen: '027',
            },
            {
                id: 3,
                kodemk: 'UKT',
                nama: 'Universitas Mercu Buana Yogyakarta',
                nama_en: 'Gasal 2020',
                jenis: '1 September 2020',
                sks: '12 September 2020',
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
                        title: 'Kelas'
                    },
                    {
                        data: 'nama',
                        title: 'Unit'
                    },
                    {
                        data: 'nama_en',
                        title: 'Periode'
                    },
                    {
                        data: 'jenis',
                        title: 'Mulai'
                    },
                    {
                        data: 'sks',
                        title: 'Selesai'
                    },
                    {
                        data: 'id',
                        title: 'Aksi',
                        // TODO: FIX THIS
                        render: (data) => {
                            const btnClass = (color = "gray") =>
                                `inline-flex items-center px-2 text-xs rounded my-2 font-medium leading-5 text-center text-white transition-colors duration-150 bg-${color}-500 border border-transparent active:bg-${color}-500 hover:bg-${color}-600 focus:outline-none focus:shadow-outline-${color} mx-1`
                            const btnClassRed = (color = "red") =>
                                `inline-flex items-center px-2 text-xs rounded my-2 font-medium leading-5 text-center text-white transition-colors duration-150 bg-${color}-600 border border-transparent active:bg-${color}-600 hover:bg-${color}-600 focus:outline-none focus:shadow-outline-${color} mx-1`
                            const btn = `
                        <div class="flex justify-center">
                        <a href="#" class="${btnClass()}"><i data-feather="edit" width="16"></i></a>
                        <a href="#" class="${btnClassRed("red")}"><i data-feather="trash" width="16"></i></a>
                        </div>
                        `
                            feather.replace()

                            return btn
                        }
                    }
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
