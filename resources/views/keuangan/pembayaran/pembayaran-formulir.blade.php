@extends('layouts.default')
@section('title', 'Pembayaran Formulir')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Pembayaran Formulir">
        <div class="flex flex-row mb-4">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Filter&nbsp; :</span>
                    </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-stspembatalan" name="select-stspembatalan" required
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
                tanggal: '',
                kode:'',
                formulir:'',
                no_token:'',
                jumlah:'',
                nama_pembeli:'',
                batal:'',
            },
            {
                id: 2,
                tanggal: '',
                kode:'',
                formulir:'',
                no_token:'',
                jumlah:'',
                nama_pembeli:'',
                batal:'',
            },
            {
                id: 3,
                tanggal: '',
                kode:'',
                formulir:'',
                no_token:'',
                jumlah:'',
                nama_pembeli:'',
                batal:'',
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
                        data: 'tanggal',
                        title: 'Tanggal'
                    },
                    {
                        data: 'kode',
                        title: 'Kode',
                    },
                    {
                        data: 'formulir',
                        title: 'Formulir'
                    },
                    {
                        data: 'no_token',
                        title: 'No Token'
                    },
                    {
                        data: 'jumlah',
                        title: 'Jumlah'
                    },
                    {
                        data: 'nama_pembeli',
                        title: 'Nama Pembeli'
                    },
                    {
                        data: 'batal',
                        title: 'Batal?'
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


        var stspembatalanSelect = {
            placeholder: "Status Pembatalan....",
            options: [
                {
                    value: "111",
                    text: "Tidak Dibatalkan"
                },
                {
                    value: "112",
                    text: "Dibatalkan"
                },
            ],
        }
        

       

        new TomSelect('#select-stspembatalan', stspembatalanSelect)

    </script>
@endsection
