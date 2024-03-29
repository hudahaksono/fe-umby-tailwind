@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Kurikulum Jurusan">
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
        Mata Kuliah Jurusan Semester 1
        <table id="mahasiswa-table" class="hover cell-border stripe  order-column"></table>

    </x-card>
@endsection

@section('scripts')
    <script>
        const dataSet = [{
                id: 1,
                nim: 'MBY01',
                nama: '21-73201',
                stat: 'Pendidikan Agama Islam',
                angkatan: '2',
                asal: '1',
                wajib: 'Ya',
                paket: '',
                mkcu: '',
                rapem: 'Ada',
            },
            {
                id: 2,
                nim: 'MBY07',
                nama: '21-73201',
                stat: 'Pancasila',
                angkatan: '2',
                asal: '1',
                wajib: 'Ya',
                paket: 'Ya',
                mkcu: '',
                rapem: 'Ada',
            },
            {
                id: 3,
                nim: 'MBY06',
                nama: '21-73201',
                stat: 'Pendidikan Agama Khonghucu',
                angkatan: '2',
                asal: '1',
                wajib: 'Ya',
                paket: '',
                mkcu: '',
                rapem: 'Ada',
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
                        title: 'Kode MK',
                        render :  function (d) {
                            return "<a href='/mahasiswa/detail/"+d+"'>"+d+"</a>";
                        }
                    },
                    {
                        data: 'nama',
                        title: 'Kode Kur.'
                    },
                    {
                        data: 'stat',
                        title: 'Nama MK'
                    },
                    {
                        data: 'angkatan',
                        title: 'SKS'
                    },
                    {
                        data: 'asal',
                        title: 'Semester Bidang Studi'
                    },
                    {
                        data: 'wajib',
                        title: 'Wajib',
                        render: (data) => {
                            if(data){
                                return '<div class="flex justify-center"><span class="inline-flex items-center text-center bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">'+data+'</span></div>';
                            }else{
                                return data;
                            }
                        }
                    },
                    {
                        data: 'paket',
                        title: 'Paket',
                        render: (data) => {
                            if(data){
                                return '<div class="flex justify-center"><span class="inline-flex items-center text-center bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">'+data+'</span></div>';
                            }else{
                                return data;
                            }
                        }
                    },
                    {
                        data: 'mkcu',
                        title: 'MKCU',
                        render: (data) => {
                            if(data){
                                return '<div class="flex justify-center"><span class="inline-flex items-center text-center bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">'+data+'</span></div>';
                            }else{
                                return data;
                            }
                        }
                    },
                    {
                        data: 'rapem',
                        title: 'RAPEM',
                        render: (data) => {
                            if(data){
                                return '<div class="flex justify-center"><span class="inline-flex items-center text-center bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">'+data+'</span></div>';
                            }else{
                                return data;
                            }
                        }
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
            placeholder: "Kurikulum...",
            options: [{
                    value: "1",
                    text: "2021-21-73201-Kurikulum Psikologi 2021"
                },
                {
                    value: "2",
                    text: "2017-17-73201-Kurikulum Psikologi 2017"
                },
                {
                    value: "3",
                    text: "2016-16-73201-Kurikulum Psikologi 2016"
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

        new TomSelect('#select-statusmhs', StatusMHSSelect)

        new TomSelect('#select-jk', JKSelect)
    </script>
@endsection
