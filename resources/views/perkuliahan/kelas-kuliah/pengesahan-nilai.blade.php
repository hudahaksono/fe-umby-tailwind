@extends('layouts.default')
@section('title', 'Pengesahan Nilai Kelas')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Pengesahan Nilai Kelas">
        <div class="flex flex-row mb-4">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Filter&nbsp; :</span>
                    </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-jurusan" name="select-jurusan" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
            </div>
            <div class="flex ml-auto">
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="refresh-cw"
                        width="16"></i>&nbsp;Reset</x-button>
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
            width="16"></i>&nbsp;Pengesahan Niali</x-button>
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
                prodi:'Agroteknologi',
                kode_mk:'AGR2173',
                nama_mk:'Pestisida dan Alat Aplikasi',
                kelas:'12D',
                pes:'14',
                uts:'14',
                uas:'14',
                nilai:'',
            },
            {
                id:2,
                prodi:'Agroteknologi',
                kode_mk:'AGR2141',
                nama_mk:'Dasar Perlindungan Tanaman',
                kelas:'12D',
                pes:'15',
                uts:'13',
                uas:'15',
                nilai:'',
            },
            {
                id: 3,
                prodi:'Agroteknologi',
                kode_mk:'AGR2170',
                nama_mk:'Pengendalian Hayati',
                kelas:'12D',
                pes:'19',
                uts:'19',
                uas:'17',
                nilai:'',
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
                        data: 'prodi',
                        title: 'Prodi'
                    },
                    {
                        data: 'kode_mk',
                        title: 'Kode MK',
                    },
                    {
                        data: 'nama_mk',
                        title: 'Nama MK'
                    },
                    {
                        data: 'kelas',
                        title: 'Kelas'
                    },
                    {
                        data: 'pes',
                        title: 'Pes'
                    },
                    {
                        data: 'uts',
                        title: 'Σ UTS'
                    },
                    {
                        data: 'uas',
                        title: 'Σ UAS'
                    },
                    {
                        data: 'nilai',
                        title: 'Nilai'
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

        new TomSelect('#gasal', gasalSelect)
        new TomSelect('#tahun', tahunSelect)
        new TomSelect('#matkul', matkulSelect)

    </script>
@endsection
