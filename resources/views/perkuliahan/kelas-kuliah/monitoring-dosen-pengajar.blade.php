@extends('layouts.default')
@section('title', 'Monitoring Pengajar')

{{-- YOUR CONTENT START HERE --}}
@section('contents')
    <x-card title="Monitoring Pengajar">
        <div class="flex flex-row">     
            <div class="flex ml-auto">
                <x-button size="sm" color="blue" as-link={{ true }} href="#" class="mx-2 text-white"><i
                    data-feather="plus" width="16"></i>&nbsp;Tambah</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="refresh-cw"
                        width="16"></i>&nbsp;Reset</x-button>
            </div>
        </div>
        <x-card class="w-full mx-auto col-span-3">
            <form>
                <div class="flex flex-col md:flex-row justify-between my-2 py-4 md:py-0">
                    <div class="basis-5/6">
                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Jurusan </span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-jurusan" name="select-jurusan" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Periode </span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-periode" name="select-periode" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                                <select id="select-periode-thn" name="select-periodethn" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-1">
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Bentrok </span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-bentrok" name="select-bentrok" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>
                        
                    </div>
                    <div class="basis-5/6 ml-2">
                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Kampus</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-kampus" name="select-kampus" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Kelas </span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-kelas" name="select-kelas" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Pengajar </span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-pengajar" name="select-pengajar" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="basis-5/6 ml-2">
                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Hari </span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-hari" name="select-hari" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Mata Kuliah</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-matakuliah" name="select-matkul" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Dosen </span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-dosen" name="select-dosen" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="filter"
                        width="16"></i>&nbsp;Filter Data Kelas</x-button>
                </div>
            </form>
        </x-card>
        <br>

        <table id="mahasiswa-table" class="hover cell-border stripe  order-column"></table>

    </x-card>
@endsection

@section('scripts')
    <script>
        const dataSet = [{
                id: 1,
                jurusan:'Magister Ilmu Pangan (S2) Kampus Gejayan 2146974148',
                periode:'Gasal (22)',
                nama_mk:'MIP2130 (3) Metodologi Penelitian dan Statistik Ilmu Pangan (0509037001 - Dr., Chatarina Lilis Suryani, S.TP., M.P.; 0526096502 - Dr. Ir., Siti Tamaroh Cahyono Murti, M.P.)',
                kelas:'12D UKT',
                jadwal:'Kamis 16:31-18:30 @ D-102',
                pengajar:'2',
                peserta:'3',

            },
            {
                id: 2,
                jurusan:'Magister Ilmu Pangan (S2) Kampus Gejayan 2146974153',
                periode:'Gasal (22)',
                nama_mk:'MIP2131 (3) Penanganan Pasca Panen (0013126402 - Prof. Dr. Ir., Dwiyati Pujimulyani, M.P.)',
                kelas:'12D UKT',
                jadwal:'Jumat 16:31-18:30 @ D-102',
                pengajar:'1',
                peserta:'3',
            },
            {
                id: 3,
                jurusan:'Magister Ilmu Pangan (S2) Kampus Gejayan 2146974150',
                periode:'Gasal (22)',
                nama_mk:'MIP2132 (3) Bioteknologi Industri Pangan (0528076302 - Dr. Ir., Wisnu Adi Yulianto, M.P.)',
                kelas:'12D UKT',
                jadwal:'Kamis 18:31-20:30 @ D-102',
                pengajar:'1',
                peserta:'3',
            }
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
                        data: 'periode',
                        title: 'Periode'
                    },
                    {
                        data: 'nama_mk',
                        title: 'Nama_mk'
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
                        data: 'peserta',
                        title: 'Peseserta'
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
            placeholder: "Universitar Mercu Buana Yogyakarta...",
            options: [
                {
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

        var periodeSelect = {
            placeholder: "Gasal...",
            options: [
                {
                    value: "1",
                    text: "Gasal"
                },
                {
                    value: "2",
                    text: "Gasal Pendek"
                },
                {
                    value: "3",
                    text: "Genap"
                },
            ],
        }

        var periodethnSelect = {
            placeholder: "2022/2023...",
            options: [
                {
                    value: "1",
                    text: "2024/2025"
                },
                {
                    value: "2",
                    text: "2023/2024"
                },
                {
                    value: "3",
                    text: "2022/2023"
                },
            ],
        }

        var bentrokSelect = {
            placeholder: "Tidak Dicek...",
            options: [
                {
                    value: "1",
                    text: "Tidak Dicek"
                },
                {
                    value: "2",
                    text: "Bentrok Ruangan"
                },
                {
                    value: "3",
                    text: "Bentrok Jadwal Dosen"
                },
            ],
        }

        var kampusSelect = {
            placeholder: "Semua Kampus...",
            options: [
                {
                    value: "1",
                    text: "Kampus Pusat"
                },
                {
                    value: "2",
                    text: "Kampus Gejayaan"
                },
                {
                    value: "3",
                    text: "Kampus Gejayaan Ring Road"
                },
            ],
        }

        var kelasSelect = {
            placeholder: "Semua Sistem Kuliah...",
            options: [
                {
                    value: "1",
                    text: "UKT"
                },
                {
                    value: "2",
                    text: "SPP Tetap"
                },
            ],
        }

        var pengajarSelect = {
            placeholder: "Semua Kelas...",
            options: [
                {
                    value: "1",
                    text: "Ada Pengajar"
                },
                {
                    value: "2",
                    text: "Tidak Ada Pengajar"
                },
            ],
        }

        var hariSelect = {
            placeholder: "Semua Hari...",
            options: [
                {
                    value: "1",
                    text: "Senin"
                },
                {
                    value: "2",
                    text: "Selasa"
                },
                {
                    value: "3",
                    text: "Rabu"
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

        var dosenSelect = {
            placeholder: "",
            options: [
            ],
        }


        new TomSelect('#select-jurusan', jurusanSelect)
        new TomSelect('#select-periode', periodeSelect)
        new TomSelect('#select-periode-thn', periodethnSelect)
        new TomSelect('#select-bentrok', bentrokSelect)

        new TomSelect('#select-kampus', kampusSelect)
        new TomSelect('#select-kelas', kelasSelect)
        new TomSelect('#select-pengajar', pengajarSelect)
        new TomSelect('#select-hari', hariSelect)
        new TomSelect('#select-matakuliah', matkulSelect)
        new TomSelect('#select-dosen', dosenSelect)
        
    
    </script>
@endsection
