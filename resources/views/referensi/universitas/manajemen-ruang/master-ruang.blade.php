@extends('layouts.default')
@section('title', 'Ruang Perkuliahan')

{{-- YOUR CONTENT START HERE --}}
@section('contents')
    <!-- <x-title class="text-cool-gray-800 mb-5">Mata Kuliah</x-title> -->
    <x-card title="Ruang Perkuliahan">
        <div class="flex flex-row mb-4">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Filter&nbsp; :</span>
                    </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-status" name="jk" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-kampus" name="ststus_mhs" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-gedung" name="ststus_mhs" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
            </div>
            <div class="flex ml-auto">
                <x-button size="sm" color="blue" as-link={{ true }}
                    href="javascript:void(0)" class="mx-2 text-white"><i data-feather="plus"
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
                koderuang: 'Full EL AGR 1',
                kampus: 'Kampus Pusat',
                gedung: 'Gedung C',
                lantai: '3',
                luas_ruang: '',
                kap: 100,
                jenis: 'K',
                fungsi: 'K',
                status: 1,
            },
            {
                id: 2,
                koderuang: 'Full EL AGR 2',
                kampus: 'Kampus Pusat',
                gedung: 'Gedung C',
                lantai: '1',
                luas_ruang: '0',
                kap: 100,
                jenis: 'K',
                fungsi: 'K',
                status: 1
            },
            {
                id: 3,
                koderuang: 'A-205Eko',
                kampus: 'Kampus Pusat',
                gedung: 'Gedung A',
                lantai: '2',
                luas_ruang: '120',
                kap: 50,
                jenis: 'K',
                fungsi: 'K',
                status: 0
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
                        data: 'koderuang',
                        title: 'Kode Ruang',
                        // render: (data) => {
                        //     return "<a href='#' style='color: #08c'>"+data+"</a>";
                        // }
                    },
                    {
                        data: 'kampus',
                        title: 'Kampus'
                    },
                    {
                        data: 'gedung',
                        title: 'Gedung'
                    },
                    {
                        data: 'lantai',
                        title: 'Lantai'
                    },
                    {
                        data: 'luas_ruang',
                        title: 'Luas Ruang'
                    },
                    {
                        data: 'kap',
                        title: 'Kap.'
                    },
                    {
                        data: 'jenis',
                        title: 'Jenis'
                    },
                    {
                        data: 'fungsi',
                        title: 'Fungsi'
                    },
                    {
                        data: 'status',
                        title: 'Status',
                        render: (data) => {
                            if(data == 1){
                                return '<div class="flex justify-center"><span class="inline-flex items-center text-center bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">Aktif</span></div>';
                            }else{
                                return '<div class="flex justify-center"><span class="inline-flex items-center text-center bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-red-400 border border-red-400">Inaktif</span></div>';
                            }
                            
                        }
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

            var statusSelect = {
                placeholder: "Status...",
                options: [{
                        value: "0",
                        text: "Aktif"
                    },
                    {
                        value: "1",
                        text: "Tidak Aktif"
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

            var gedungSelect = {
                placeholder: "Gedung...",
                options: [{
                        value: "1",
                        text: "Gedung A"
                    },
                    {
                        value: "2",
                        text: "Gedung B"
                    },
                    {
                        value: "3",
                        text: "Gedung C"
                    },
                ],
            }

            new TomSelect('#select-status', statusSelect)
            new TomSelect('#select-kampus', kampusSelect)
            new TomSelect('#select-gedung', gedungSelect)

        })
    </script>
@endsection
