@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Monitoring Tugas Akhir">
        <div class="flex flex-row">
            <!-- <div class="flex">
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
                
            </div> -->
            
            <div class="flex ml-auto">
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
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Jurusan</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-jurusan" name="ststus_mhs" required
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
                                <select id="select-periode" name="ststus_mhs" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                                <select id="select-periode-thn" name="ststus_mhs" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-1">
                                </select>
                            </div>
                        </div>

                        
                    </div>
                    <div class="basis-5/6 ml-2">
                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Kelas Mhs</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-kelas-mhs" name="ststus_mhs" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Kampus </span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-kampus" name="ststus_mhs" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="basis-5/6 ml-2">
                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Status</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-status" name="ststus_mhs" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Tahap </span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-tahap" name="ststus_mhs" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="filter"
                        width="16"></i>&nbsp;Filter</x-button>
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
                nim: '16011124',
                nama: 'RONI PARTAMA',
                history: '',
                dosen: '0',
                bim: '0',
                durasi: '',
                progres: 0,
                judul: '',
                tahap: '',
                ujian: 'Belum Terjadwal',
                unsur: 'Belum Ada',
                nilai: 'Nilai'
            },
            {
                id: 2,
                nim: '16021023',
                nama: 'WILHELMUS DENILSON WEU WODHE',
                history: '',
                dosen: '0',
                bim: '0',
                durasi: '',
                progres: 0,
                judul: '',
                tahap: '',
                ujian: 'Belum Terjadwal',
                unsur: 'Belum Ada',
                nilai: 'Nilai'
            },
            {
                id: 3,
                nim: '16021051',
                nama: 'MIFTAHUDIN ARIF',
                history: '',
                dosen: '0',
                bim: '0',
                durasi: '',
                progres: 0,
                judul: '',
                tahap: '',
                ujian: 'Belum Terjadwal',
                unsur: 'Belum Ada',
                nilai: 'Nilai'
            },
            {
                id: 4,
                nim: '16032032',
                nama: 'M MIFTAHUL FALAH',
                history: '',
                dosen: '0',
                bim: '0',
                durasi: '01-01-1970 01-01-1970',
                progres: 50,
                judul: 'Diisi mahasiswa',
                tahap: 'Proposal',
                ujian: 'Belum Terjadwal',
                unsur: 'Belum Ada',
                nilai: 'A-'
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
                        data: 'nama',
                        title: 'Mahasiswa',
                        render :  function (data, type, row, meta) {
                            return row.nim+'<p><a href="#">'+row.nama+'</a>';
                        }
                    },
                    {
                        data: 'judul',
                        title: 'Judul',
                        render: (data) => {
                            const btnClass = (color = "gray")  => `inline-flex items-center px-2 text-xs rounded my-2 font-medium leading-5 text-center text-white transition-colors duration-150 bg-${color}-500 border border-transparent active:bg-${color}-500 hover:bg-${color}-600 focus:outline-none focus:shadow-outline-${color} mx-1`
                            const btn = `
                            <div class="flex justify-center">
                            <a href="#" class="${btnClass('blue')}">Tambah Judul</a>
                            </div>
                            `
                            feather.replace()

                            return btn
                        }
                    },
                    {
                        data: 'history',
                        title: 'History',
                        render: (data) => {
                            const btnClass = (color = "gray")  => `inline-flex items-center px-2 text-xs rounded my-2 font-medium leading-5 text-center text-white transition-colors duration-150 bg-${color}-500 border border-transparent active:bg-${color}-500 hover:bg-${color}-600 focus:outline-none focus:shadow-outline-${color} mx-1`
                            const btn = `
                            <div class="flex justify-center">
                            <a id='edit_data' href="javascript:void(0)" class="${btnClass()}"><i data-feather="list" width="16"></i></a>
                            </div>
                            `
                            feather.replace()

                            return btn
                        }
                    },
                    {
                        data: 'dosen',
                        title: 'Dosen'
                    },
                    {
                        data: 'bim',
                        title: 'Σ Bim'
                    },
                    {
                        data: 'durasi',
                        title: 'Durasi'
                    },
                    {
                        data: 'progres',
                        title: 'Progres',
                        render: (data) => {
                            // return '<div class="w-full bg-gray-200 rounded-full dark:bg-gray-700"><div class="bg-green-600 text-xs font-medium text-green-100 text-center p-0.5 leading-none rounded-full" style="width: '+data+'%"> '+data+'%</div></div>';
                            return '<div class="flex justify-between mb-1"><span class="text-xs font-medium text-blue-700 dark:text-white">'+data+'%</span></div><div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700"><div class="bg-blue-600 h-2.5 rounded-full" style="width: '+data+'%"></div></div>';
                        }
                    },
                    {
                        data: 'tahap',
                        title: 'Tahap',
                        render: (data) => {
                            if(data){
                                return '<span class="inline-flex items-center text-center bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">'+data+'</span>';
                            }else{
                                return data;
                            }
                        }
                    },
                    {
                        data: 'ujian',
                        title: 'Ujian',
                        render: (data) => {
                            if(data){
                                return '<span class="inline-flex items-center text-center bg-orange-100 text-orange-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-orange-400 border border-orange-400">'+data+'</span>';
                            }else{
                                return data;
                            }
                        }
                    },
                    {
                        data: 'unsur',
                        title: 'Unsur',
                        render: (data) => {
                            if(data){
                                return '<span class="inline-flex items-center text-center bg-orange-100 text-orange-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-orange-400 border border-orange-400">'+data+'</span>';
                            }else{
                                return data;
                            }
                        }
                    },
                    {
                        data: 'nilai',
                        title: 'Nilai',
                        render: (data) => {
                            return "<a href='#' style='color: #08c'>"+data+"</a>";
                        }
                    },
                    
                ]
            })
        })

        var semesterSelect = {
            placeholder: "Periode...",
            options: [
                {
                    value: "111",
                    text: "Gasal"
                },
                {
                    value: "112",
                    text: "Gasal Pendek"
                },
                {
                    value: "113",
                    text: "Genap"
                },
                {
                    value: "114",
                    text: "Genap Pendek"
                },
            ],
        }

        var periodethnSelect = {
            placeholder: "Tahun...",
            options: [{
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

        var kelasSelect = {
            placeholder: "Kelas...",
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

        var kampusSelect = {
            placeholder: "Kelas...",
            options: [
                {
                    value: "111",
                    text: "Kampus Pusat"
                },
                {
                    value: "112",
                    text: "Kampus Gejayan"
                },
            ],
        }

        var kampusSelect = {
            placeholder: "Kelas...",
            options: [
                {
                    value: "111",
                    text: "Kampus Pusat"
                },
                {
                    value: "112",
                    text: "Kampus Gejayan"
                },
            ],
        }

        var statusSelect = {
            placeholder: "Status...",
            options: [
                {
                    value: "111",
                    text: "TIDAK AKTIF"
                },
                {
                    value: "112",
                    text: "DIAJUKAN"
                },
                {
                    value: "113",
                    text: "DIKEMBALIKAN"
                },
                {
                    value: "114",
                    text: "AKTIF"
                },
                {
                    value: "115",
                    text: "LULUS"
                },
            ],
        }

        var tahapSelect = {
            placeholder: "Tahap...",
            options: [
                {
                    value: "111",
                    text: "PROPOSAL"
                },
                {
                    value: "112",
                    text: "SEMINAR"
                },
                {
                    value: "113",
                    text: "REKOMENDASI SIDANG"
                },
                {
                    value: "114",
                    text: "PENGAJUAN SIDANG"
                },
                {
                    value: "115",
                    text: "SIDANG"
                },
            ],
        }

        new TomSelect('#select-periode', semesterSelect)
        new TomSelect('#select-periode-thn', periodethnSelect)
        new TomSelect('#select-kelas-mhs', kelasSelect)
        new TomSelect('#select-kampus', kampusSelect)
        new TomSelect('#select-status', statusSelect)
        new TomSelect('#select-tahap', tahapSelect)

        new TomSelect('#select-jurusan', JKSelect)


    </script>
@endsection
