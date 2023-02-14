@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Kode Kurikulum">
        <div class="flex flex-row mb-4">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Filter&nbsp; :</span>
                    </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-statusmhs" name="ststus_mhs" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-jk" name="jk" required
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
        <table id="mahasiswa-table" class="hover cell-border stripe  order-column"></table>

    </x-card>
@endsection

@section('scripts')
    <script>
        const dataSet = [{
                id: 1,
                nim: '15-54211',
                jurusan: 'Agroteknologi',
                thn_kurikulum: '2015',
                nama_kurikulum: 'Kurikulum Agroteknologi 2015',
                tgl_berlaku: '2000-01-01',
                aktif: 1,
                jumlah_matkul: '100',
            },
            {
                id: 2,
                nim: '17-54211',
                jurusan: 'Agroteknologi',
                thn_kurikulum: '2017',
                nama_kurikulum: 'Kurikulum Agroteknologi 2017',
                tgl_berlaku: '2000-01-01',
                aktif: 1,
                jumlah_matkul: '92',
            },
            {
                id: 3,
                nim: '21-54211',
                jurusan: 'Agroteknologi',
                thn_kurikulum: '2021',
                nama_kurikulum: 'Kurikulum Agroteknologi 2021',
                tgl_berlaku: '2021-09-01',
                aktif: 1,
                jumlah_matkul: '97',
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
                        title: 'Kode Kurikulum',
                        render :  function (d) {
                            return "<a href='/mahasiswa/detail/"+d+"'>"+d+"</a>";
                        }
                    },
                    {
                        data: 'jurusan',
                        title: 'Jurusan / Unit'
                    },
                    {
                        data: 'thn_kurikulum',
                        title: 'Tahun Kurikulum'
                    },
                    {
                        data: 'nama_kurikulum',
                        title: 'Nama Kurikulum'
                    },
                    {
                        data: 'tgl_berlaku',
                        title: 'Tanggal Berlaku'
                    },
                    {
                        data: 'aktif',
                        title: 'Aktif',
                        render: (data) => {
                            if(data == 1){
                                return `<div class="flex justify-center"><img src="{{ URL('assets/img/check.png') }}"></div>`
                            }else{
                                return '';
                            }
                        }
                    },
                    {
                        data: 'jumlah_matkul',
                        title: 'JUMLAH MataKuliah',
                        render: (data) => {
                            return "<a href='#' style='color: #08c'>"+data+"</a>";
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

        new TomSelect('#select-statusmhs', StatusMHSSelect)

        new TomSelect('#select-jk', JKSelect)
    </script>
@endsection
