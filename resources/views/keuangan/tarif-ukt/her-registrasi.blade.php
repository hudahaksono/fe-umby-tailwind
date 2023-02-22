@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Tarif Her Registrasi">
        <div class="flex flex-row mb-2">
            <div class="flex">
            </div>
            <div class="flex ml-auto">
                <x-button size="sm" color="blue" as-link={{ true }} href="#" class="mx-2 text-white"><i
                    data-feather="plus" width="16"></i>&nbsp;Tambah</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="refresh-cw"
                        width="16"></i>&nbsp;Reset</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="printer"
                        width="16"></i>&nbsp;Cetak</x-button>
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
                angkatan:'2021',
                tarif_smstr1: '350,000',
                tarif_selanjutnya:'350,000',
            },
            {
                id: 2,
                angkatan:'2021',
                tarif_smstr1: '350,000',
                tarif_selanjutnya:'350,000',
            },
            {
                id: 3,
                angkatan:'2020',
                tarif_smstr1: '350,000',
                tarif_selanjutnya:'350,000',
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
                        data: 'angkatan',
                        title: 'Angkatan'
                    },
                    {
                        data: 'tarif_smstr1',
                        title: 'Taris Semester 1'
                    },
                    {
                        data: 'tarif_selanjutnya',
                        title: 'Tarif Selanjutnya',
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


        var angkatanSelect = {
            placeholder: "2024...",
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
        var tarifsksSelect = {
            placeholder: "",
            options: [
                
            ],
        }

        var salin_angkatanSelect = {
            placeholder: "2023...",
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


        new TomSelect('#angkatan', angkatanSelect)
        new TomSelect('#tarif-sks', tarifsksSelect)
        new TomSelect('#salin-angkatan', salin_angkatanSelect)
       

    </script>
@endsection
