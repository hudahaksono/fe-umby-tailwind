@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Tugas Akhir">
        <div class="flex flex-row">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Periode&nbsp; :</span>
                    </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-semester" name="ststus_mhs" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-tahun" name="ststus_mhs" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                
            </div>
            
            <div class="flex ml-auto">
                <x-button size="sm" color="blue" as-link={{ true }} href="#" class="mx-2 text-white"><i data-feather="plus"
                        width="16"></i>&nbsp;Tambah</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="refresh-cw"
                        width="16"></i>&nbsp;Reset</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="printer"
                        width="16"></i>&nbsp;Cetak</x-button>
            </div>
        </div>
        <div class="flex flex-row mb-4">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Filter&nbsp; :</span>
                    </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-jk" name="jk" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                
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
                jur: '',
                semester: '',
                topik_ta: '',
                dospem: '',
                status: '',
            },
            {
                id: 2,
                nim: '16021023',
                nama: 'WILHELMUS DENILSON WEU WODHE',
                jur: '',
                semester: '',
                topik_ta: '',
                dospem: '',
                status: '',
            },
            {
                id: 3,
                nim: '16021051',
                nama: 'MIFTAHUDIN ARIF',
                jur: '',
                semester: '',
                topik_ta: '',
                dospem: '',
                status: '',
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
                        title: 'Nama'
                    },
                    {
                        data: 'jur',
                        title: 'Jur'
                    },
                    {
                        data: 'semester',
                        title: 'Smt'
                    },
                    {
                        data: 'topik_ta',
                        title: 'Topik TA'
                    },
                    {
                        data: 'dospem',
                        title: 'Dosen Pembimbing'
                    },
                    {
                        data: 'status',
                        title: 'Status'
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

        var StatusMHSSelect = {
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

        var JKSelect = {
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

        var semesterSelect = {
            placeholder: "Semester...",
            options: [
                {
                    value: "111",
                    text: "Semester Gasal"
                },
                {
                    value: "112",
                    text: "Semester Gasal Pendek"
                },
                {
                    value: "113",
                    text: "Semester Genap"
                },
                {
                    value: "114",
                    text: "Semester Genap Pendek"
                },
            ],
        }

        new TomSelect('#select-semester', semesterSelect)
        new TomSelect('#select-tahun', StatusMHSSelect)

        new TomSelect('#select-jk', JKSelect)
    </script>
@endsection
