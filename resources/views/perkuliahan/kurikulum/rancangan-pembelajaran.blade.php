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
<<<<<<< HEAD
                nama_en: 'Advertising Management',
                jenis: 1411,
                sks: 3,
                nip_dosen: '212417',
=======
                sks: 3,
                sap: 'Belum Ada',
>>>>>>> 1cc08a5f0c057002f6e097614ff861c5ce7c9986
            },
            {
                id: 2,
                kodemk: 'PET110P',
                nama: 'Aplikasi Komputer Lanjut',
<<<<<<< HEAD
                nama_en: 'Advanced Computer Application',
                jenis: 1411,
                sks: 1,
                nip_dosen: '027',
=======
                sks: 1,
                sap: 'Belum Ada',
>>>>>>> 1cc08a5f0c057002f6e097614ff861c5ce7c9986
            },
            {
                id: 3,
                kodemk: 'PET103',
                nama: 'Statistika',
<<<<<<< HEAD
                nama_en: 'Statistics',
                jenis: 1411,
                sks: 2,
                nip_dosen: '0029126301',
=======
                sks: 2,
                sap: 'Belum Ada',
>>>>>>> 1cc08a5f0c057002f6e097614ff861c5ce7c9986
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
<<<<<<< HEAD
                        title: 'Nama Matakuliah'
                    },
                    {
                        data: 'nama_en',
                        title: 'Nama Matakuliah (EN)'
                    },
                    {
                        data: 'jenis',
                        title: 'Jenis'
=======
                        title: 'Nama MK'
>>>>>>> 1cc08a5f0c057002f6e097614ff861c5ce7c9986
                    },
                    {
                        data: 'sks',
                        title: 'SKS'
                    },
                    {
<<<<<<< HEAD
                        data: 'nip_dosen',
                        title: 'NIP Dosen Pengampu'
=======
                        data: 'sap',
                        title: 'SAP'
>>>>>>> 1cc08a5f0c057002f6e097614ff861c5ce7c9986
                    },
                    {
                        data: 'id',
                        title: 'Aksi',
                        // TODO: FIX THIS
                        render: (data) => {
                            const btnClass = (color = "gray") =>
                                `inline-flex items-center px-2 text-xs rounded my-2 font-medium leading-5 text-center text-white transition-colors duration-150 bg-${color}-500 border border-transparent active:bg-${color}-500 hover:bg-${color}-600 focus:outline-none focus:shadow-outline-${color} mx-1`
<<<<<<< HEAD
                            const btn = `
                        <div class="flex justify-center">
                        <a href="#" class="${btnClass()}"><i data-feather="edit" width="16"></i></a>
                        <a href="#" class="${btnClass("red")}"><i data-feather="trash" width="16"></i></a>
=======
                            const btnClassRed = (color = "red") =>
                                `inline-flex items-center px-2 text-xs rounded my-2 font-medium leading-5 text-center text-white transition-colors duration-150 bg-${color}-600 border border-transparent active:bg-${color}-600 hover:bg-${color}-600 focus:outline-none focus:shadow-outline-${color} mx-1`
                            const btn = `
                        <div class="flex justify-center">
                        <a id='edit_data' href="javascript:void(0)" class="${btnClass()}"><i data-feather="edit" width="16"></i></a>
                        <a id='hapus_data' href="javascript:void(0)" class="${btnClassRed()}"><i data-feather="trash" width="16"></i></a>
>>>>>>> 1cc08a5f0c057002f6e097614ff861c5ce7c9986
                        </div>
                        `
                            feather.replace()

                            return btn
                        }
                    }
                ]
            })

<<<<<<< HEAD
            var jenisMkSelect = {
                placeholder: "Jenis",
                options: [{
                        value: "1111",
                        text: "Matakuliah Pengembangan Kepribadian - 1111"
                    },
                    {
                        value: "1121",
                        text: "Matakuliah Keilmuan Ketrampilan - 1121"
                    },
                    {
                        value: "1122",
                        text: "Matakuliah Keilmuan KB - 1122"
                    },
                ],
            }
            new TomSelect('#filter', jenisMkSelect)
=======
            $('body').on('click', '#edit_data', function (e) {
                var $row = $(this).closest("tr");
                var data = $('#view-table').DataTable().row($row).data();
                var id = data['id'];

                // window.location.href = '/perkuliahan/rancangan-pembelajaran/edit/'+id;
                return false;
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
>>>>>>> 1cc08a5f0c057002f6e097614ff861c5ce7c9986

        })
    </script>
@endsection
