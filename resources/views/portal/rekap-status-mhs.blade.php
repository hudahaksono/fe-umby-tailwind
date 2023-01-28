@extends('layouts.default')
@section('title', 'Portal Rekap Status Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Rekap Status Mahasiswa">
        <div class="flex flex-row mb-4">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Periode&nbsp; :</span>
                    </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-semester" name="s_semester"
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-tahun" name="s_tahun"
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
            </div>
            <div class="flex ml-auto">
                <div class="flex items-center"><span class="text-gray-600 font-medium">NIM&nbsp; :</span></div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <input type="text" name="s_nim"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4"
                            placeholder="111..">
                </div>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="search"
                        width="16"></i>&nbsp;Cari</x-button>
            </div>
            <div class="flex ml-auto">
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="printer"
                        width="16"></i>&nbsp;Cetak</x-button>
            </div>
        </div>
        <table id="mahasiswa-table" class="hover cell-border stripe  order-column"></table>

    </x-card>
@endsection

@section('scripts')
    <script>
        const dataSet = [{
                id: 1,
                jurusan: 'S1 Psikologi',
                kelas: 'UKT',
                kampus: 'Kampus Pusat',
                angkatan: 2016,
                aktif: 5,
                non_aktif: 9,
                cuti: '',
                lulus: 1,
                drop_out: '',
                pindah: '',
                mengundurkan_diri: '',
                total: 15
            },
            {
                id: 1,
                jurusan: '',
                kelas: '',
                kampus: '',
                angkatan: 2017,
                aktif: 57,
                non_aktif: 14,
                cuti: '',
                lulus: 11,
                drop_out: '',
                pindah: '',
                mengundurkan_diri: '',
                total: 82
            },
            {
                id: 1,
                jurusan: '',
                kelas: '',
                kampus: '',
                angkatan: 2018,
                aktif: 161,
                non_aktif: 5,
                cuti: 1,
                lulus: 30,
                drop_out: '',
                pindah: '',
                mengundurkan_diri: '',
                total: 197
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
                        data: 'jurusan',
                        title: 'Jurusan',
                        render :  function (d) {
                            return "<a href='/mahasiswa/detail/"+d+"'>"+d+"</a>";
                        }
                    },
                    {
                        data: 'kelas',
                        title: 'Kelas'
                    },
                    {
                        data: 'kampus',
                        title: 'Kampus'
                    },
                    {
                        data: 'angkatan',
                        title: 'Angkatan'
                    },
                    {
                        data: 'aktif',
                        title: 'Aktif'
                    },
                    {
                        data: 'non_aktif',
                        title: 'Non Aktif'
                    },
                    {
                        data: 'cuti',
                        title: 'Cuti'
                    },
                    {
                        data: 'lulus',
                        title: 'Lulus'
                    },
                    {
                        data: 'drop_out',
                        title: 'Drop Out'
                    },
                    {
                        data: 'pindah',
                        title: 'Pindah'
                    },
                    {
                        data: 'mengundurkan_diri',
                        title: 'Mengundurkan Diri'
                    },
                    {
                        data: 'total',
                        title: 'Total'
                    },
                ]
            })
        })

        var SemesterSelect = {
            placeholder: "Pilih Semester...",
            options: [{
                    value: "1",
                    text: "Semester Gasal"
                },
                {
                    value: "2",
                    text: "Semester Gasal Pendek"
                },
                {
                    value: "3",
                    text: "Semester Genap"
                },
                {
                    value: "4",
                    text: "Semester Genap Pendek"
                },
            ],
        }

        var TahunSelect = {
            placeholder: "Pilih Tahun...",
            options: [
                {
                    value: "1",
                    text: "2022/2023"
                },
                {
                    value: "2",
                    text: "2021/2022"
                },
            ],
        }

        new TomSelect('#select-semester', SemesterSelect)

        new TomSelect('#select-tahun', TahunSelect)
    </script>
@endsection
