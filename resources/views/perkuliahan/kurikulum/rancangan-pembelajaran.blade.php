@extends('layouts.default')
@section('title', 'Mata Kuliah')

{{-- YOUR CONTENT START HERE --}}
@section('contents')
    <!-- <x-title class="text-cool-gray-800 mb-5">Mata Kuliah</x-title> -->
    <x-card title="Rancangan Pembelajaran">
        <div class="flex flex-row mb-4">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Filter&nbsp; :</span>
                    </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-thn-kurikulum" name="jk" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-jurusan" name="ststus_mhs" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-status-sap" name="ststus_mhs" required
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
                kodemk: 'ILK53',
                nama: 'Manajemen Periklanan',
                sks: 3,
                sap: 'Belum Ada',
            },
            {
                id: 2,
                kodemk: 'PET110P',
                nama: 'Aplikasi Komputer Lanjut',
                sks: 1,
                sap: 'Belum Ada',
            },
            {
                id: 3,
                kodemk: 'PET103',
                nama: 'Statistika',
                sks: 2,
                sap: 'Belum Ada',
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
                        data: 'kodemk',
                        title: 'Kode MK'
                    },
                    {
                        data: 'nama',
                        title: 'Nama MK'
                    },
                    {
                        data: 'sks',
                        title: 'SKS'
                    },
                    {
                        data: 'sap',
                        title: 'SAP'
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
                        <a id='edit_data' href="javascript:void(0)" class="${btnClass()}"><i data-feather="edit" width="16"></i></a>
                        <a id='hapus_data' href="javascript:void(0)" class="${btnClassRed()}"><i data-feather="trash" width="16"></i></a>
                        </div>
                        `
                            feather.replace()

                            return btn
                        }
                    }
                ]
            })

            $('body').on('click', '#edit_data', function (e) {
                var $row = $(this).closest("tr");
                var data = $('#view-table').DataTable().row($row).data();
                var id = data['id'];

                window.location.href = '/perkuliahan/rancangan-pembelajaran/edit/'+id;
            });

            var thnKurikulumSelect = {
                placeholder: "Tahun Kurikulum",
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
            var jurusanSelect = {
                placeholder: "Jurusan",
                options: [{
                        value: "1",
                        text: "S1 Psikologi"
                    },
                    {
                        value: "2",
                        text: "S2 Magister Psikologi"
                    },
                    {
                        value: "3",
                        text: "S2 Magister Psikologi Profesi"
                    },
                ],
            }
            var statusSAPSelect = {
                placeholder: "Jenis",
                options: [{
                        value: "1",
                        text: "Ada SAP"
                    },
                    {
                        value: "2",
                        text: "Belum Ada SAP"
                    },
                ],
            }
            new TomSelect('#select-thn-kurikulum', thnKurikulumSelect)
            new TomSelect('#select-jurusan', jurusanSelect)
            new TomSelect('#select-status-sap', statusSAPSelect)

        })
    </script>
@endsection
