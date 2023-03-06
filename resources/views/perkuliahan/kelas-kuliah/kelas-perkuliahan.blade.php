@extends('layouts.default')
@section('title', 'Kelas Perkuliahan')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Kelas Perkuliahan">
        <div class="flex flex-row mb-4">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Filter&nbsp; :</span>
                    </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-jurusan" name="select-jurusan" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-kampus" name="select-kampus" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-sistem-kuliah" name="sistem-kuliah" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-semester" name="select-semester" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
            </div>
            <div class="flex ml-auto">
                <x-button size="sm" color="blue" as-link={{ true }} href="#" class="mx-2 text-white"><i
                    data-feather="plus" width="16"></i>&nbsp;Tambah</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="refresh-cw"
                        width="16"></i>&nbsp;Reset</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="printer"
                        width="16"></i>&nbsp;Cetak</x-button>
            </div>
        </div>
        

        {{-- Periode --}}
        <div class="flex flex-row mb-2 form-input">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Periode&nbsp; :</span>
                    </div>
                    <div class="mb-1 inline-flex items-center px-2 py-1">
                        <select id="gasal" name="gasal" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                        <select id="tahun" name="tahun" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                    </div>
                    <div class="flex items-center"><span class="text-gray-600 font-medium">Mata Kuliah&nbsp; :</span>
                    </div> 
                    <div class="mb-1 inline-flex items-center px-2 py-1">
                        <select id="matkul" name="matkul" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select> 
                    </div>
            </div>
        </div>
        <x-button size="sm" color="blue" as-link={{ true }} href="#" class="mx-2 text-white"><i
            width="16"></i>&nbsp;Salin dan Import Kelas</x-button>
        <br>
        {{-- ------ --}}


        <div class="flex flex-row mb-2">
            <div class="w-full">
                <table id="mahasiswa-table" class="hover cell-border stripe  order-column">
                </table>
            </div>
        </div>

    </x-card>
@endsection

@section('scripts')
    <script>
        const dataSet = [{
                id: 1,
                jurusan:'Magister Ilmu Pangan Kampus Gejayan',
                nama_mk:'Bioteknologi Industri Pangan',
                sks:'3',
                smt:'1',
                kelas:'12D UKT',
                jadwal:'Kamis 18:31-20:30 @ D-102',
                pengajar:'Dr. Ir., Wisnu Adi Yulianto, M.P.',
                pes:'3',
                kap:'50',
            },
            {
                id:2,
                jurusan: 'Magister Ilmu Pangan Kampus Gejayan',
                nama_mk:'Ketahanan Pangan dan Gizi',
                sks:'3',
                smt:'1',
                kelas:'12D UKT',
                jadwal:'Jumat 18:31-20:40 @ D-102',
                pengajar:'Dr. Ir., F. Didiet Heru Swasono, M.P. Dr. Ir., Siti Tamaroh Cahyono Murti, M.P.',
                pes:'3',
                kap:'50',
            },
            {
                id: 3,
                jurusan:'Magister Ilmu Pangan Kampus Gejayan',
                nama_mk:'Metodologi Penelitian dan Statistik Ilmu Pangan',
                sks:'3',
                smt:'1',
                kelas:'12D UKT',
                jadwal:'Kamis 16:31-18:30 @ D-102',
                pengajar:'Dr., Chatarina Lilis Suryani, S.TP., M.P. Dr. Ir., Siti Tamaroh Cahyono Murti, M.P.',
                pes:'3',
                kap:'50',
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
                        title: 'Jurusan'
                    },
                    {
                        data: 'nama_mk',
                        title: 'Nama MK',
                    },
                    {
                        data: 'sks',
                        title: 'SKS'
                    },
                    {
                        data: 'smt',
                        title: 'Smt'
                    },
                    {
                        data: 'kelas',
                        title: 'Kelas'
                    },
                    {
                        data: 'jadwal',
                        title: 'Jadwal'
                    },
                    {
                        data: 'pengajar',
                        title: 'Pengajar'
                    },
                    {
                        data: 'pes',
                        title: 'Pes.'
                    },
                    {
                        data: 'kap',
                        title: 'Kap.'
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


        var jurusanSelect = {
            placeholder: "Jurusan...",
            options: [
                {
                    value: "111",
                    text: "S1 Psikologi"
                },
                {
                    value: "112",
                    text: "S2 Magister Psikologi"
                },
                {
                    value: "113",
                    text: "S2 Magister Psikologi Profesi"
                },
            ],
        }

        var kampusSelect = {
            placeholder: "Kampus...",
            options: [
                {
                    value: "111",
                    text: "Kampus Pusat"
                },
                {
                    value: "112",
                    text: "Kampus Gejayan"
                },
                {
                    value: "113",
                    text: "Kampus Gejayan Ring Road"
                },
            ],
        }

        var sistemkuliahSelect = {
            placeholder: "Sistem Kuliah...",
            options: [
                {
                    value: "111",
                    text: "UKT"
                },
                {
                    value: "112",
                    text: "SPP Tetap"
                },
            ],
        }

        var semesterSelect = {
            placeholder: "Semester...",
            options: [
                {
                    value: "111",
                    text: "1"
                },
                {
                    value: "112",
                    text: "2"
                },
                {
                    value: "113",
                    text: "3"
                },
            ],
        }

        var gasalSelect = {
            placeholder: "Gasal...",
            options: [
                {
                    value: "111",
                    text: "Gasal Pendek"
                },
                {
                    value: "112",
                    text: "Genap"
                },
                {
                    value: "113",
                    text: "Genap Pendek"
                },
            ],
        }

        var tahunSelect = {
            placeholder: "2024/2025...",
            options: [
                {
                    value: "111",
                    text: "2023/2024"
                },
                {
                    value: "112",
                    text: "2022/2023"
                },
                {
                    value: "113",
                    text: "2021/2022"
                },
            ],
        }

        var matkulSelect = {
            placeholder: "Semua Mata Kuliah...",
            options: [
                {
                    value: "1",
                    text: "THPH 2162 - Hazard Analytical and Cricital Control Point"
                },
                {
                    value: "2",
                    text: "MBY 12 - Sociopreneurship"
                },
                {
                    value: "3",
                    text: "PBI 2139 - Academic Listening and Speaking"
                },
            ],
        }

        new TomSelect('#select-jurusan', jurusanSelect)
        new TomSelect('#select-kampus', kampusSelect)
        new TomSelect('#select-sistem-kuliah', sistemkuliahSelect)
        new TomSelect('#select-semester', semesterSelect)

        new TomSelect('#gasal', gasalSelect)
        new TomSelect('#tahun', tahunSelect)
        new TomSelect('#matkul', matkulSelect)

    </script>
@endsection
