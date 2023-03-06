@extends('layouts.default')
@section('title', 'Laporan Keuangan')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Laporan Keuangan">
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
                    <select id="select-angkatan" name="select-angktan" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-stsaktif" name="select-stsaktif" required
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
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="printer"
                        width="16"></i>&nbsp;Excel</x-button>       
            </div>
        </div>
       
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
                nim: '15083346',
                nama:'GALUH SEKAR WIDOWATI',
                jurusan:'Psikologi',
                total_tagihan:'8,917,000',
                total_bayar:'8,917,000',
                saldo:'0',
                sta:'A',
                sks:'136',
            },
            {
                id: 2,
                nim: '16011124',
                nama:'RONI PARTAMA',
                jurusan:'Agroteknologi',
                total_tagihan:'54,240,000',
                total_bayar:'54,240,000',
                saldo:'0',
                sta:'A',
                sks:'145',
            },
            {
                id: 3,
                nim: '16021023',
                nama:'WILHELMUS DENILSON WEU WODHE',
                jurusan:'Peternakan',
                total_tagihan:'43,175,000',
                total_bayar:'43,175,000',
                saldo:'0',
                sta:'A',
                sks:'148',
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
                        title: 'NIM'
                    },
                    {
                        data: 'nama',
                        title: 'Nama',
                    },
                    {
                        data: 'jurusan',
                        title: 'Jurusan'
                    },
                    {
                        data: 'total_tagihan',
                        title: 'Total Tagihan'
                    },
                    {
                        data: 'total_bayar',
                        title: 'Total Bayar'
                    },
                    {
                        data: 'saldo',
                        title: 'Saldo'
                    },
                    {
                        data: 'sta',
                        title: 'STA?'
                    },
                    {
                        data: 'sks',
                        title: 'SKS?'
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
                            <a href="#" class="${btnClass()}"><i data-feather="search" width="16"></i></a>
                            
                            `
                            feather.replace()

                            return btn
                        }
                    }
                ]
            })
        })


        var jurusanSelect = {
            placeholder: "Jurusan....",
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

        var angkatanSelect = {
            placeholder: "Angkatan....",
            options: [
                {
                    value: "111",
                    text: "2022"
                },
                {
                    value: "112",
                    text: "2021"
                },
                {
                    value: "113",
                    text: "2020"
                },
            ],
        }

        var stsaktifSelect = {
            placeholder: "Status Aktif....",
            options: [
                {
                    value: "111",
                    text: "Aktif"
                },
                {
                    value: "112",
                    text: "Cuti"
                },
                {
                    value: "113",
                    text: "Drop Out"
                },
            ],
        }
        

       

        new TomSelect('#select-jurusan', jurusanSelect)
        new TomSelect('#select-angkatan', angkatanSelect)
        new TomSelect('#select-stsaktif', stsaktifSelect)

    </script>
@endsection
