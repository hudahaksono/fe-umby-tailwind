@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Log Transaksi H2H">
        <div class="flex flex-row mb-2">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Filter&nbsp; :</span>
                    </div>
                    <div class="mb-1 inline-flex items-center px-2 py-1">
                        <select id="select-transaksi" name="select-jnstransaksi" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                    </div>
                    <div class="mb-1 inline-flex items-center px-2 py-1">
                        <select id="select-bank" name="select-bank" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                    </div>
            </div>
            <div class="flex ml-auto">
                {{-- <x-button size="sm" color="blue" as-link={{ true }} href="#" class="mx-2 text-white"><i
                    data-feather="plus" width="16"></i>&nbsp;Tambah</x-button> --}}
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
                transaksi:'Payment',
                produk:'	LAIN2',
                nim_kode: '191310051',
                bank: 'BPD DIY',
                pref: '',
                no_trans: '20230130136892	',
                channel:'TELLER',
                terminal:'00000901',
                waktu:'30 Jan 2023 15:02:19',
                keterangan:'',
            },
            {
                id: 2,
                transaksi: 'Inquiry',
                produk: '	LAIN2',
                nim_kode: '191310051',
                bank: 'BPD DIY',
                pref: '',
                no_trans: '',
                channel:'TELLER',
                terminal:'00000901',
                waktu:'30 Jan 2023 15:02:19',
                keterangan:'',
            },
            {
                id: 3,
                transaksi: 'Inquiry',
                produk: '	LAIN2',
                nim_kode: '191310051',
                bank: 'BPD DIY',
                pref: '',
                no_trans: '',
                channel:'TELLER',
                terminal:'00000901',
                waktu:'30 Jan 2023 15:02:16',
                keterangan:'',
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
                        data: 'transaksi',
                        title: 'Transaksi'
                    },
                    {
                        data: 'produk',
                        title: 'Produk',
                    },
                    {
                        data: 'nim_kode',
                        title: 'NIM/Kode'
                    },
                    {
                        data: 'bank',
                        title: 'Bank'
                    },
                    {
                        data: 'pref',
                        title: 'Pref'
                    },
                    {
                        data: 'no_trans',
                        title: 'No.Trans'
                    },
                    {
                        data: 'channel',
                        title: 'Channel'
                    },
                    {
                        data: 'terminal',
                        title: 'Terminal'
                    },
                    {
                        data: 'waktu',
                        title: 'Waktu'
                    },
                    {
                        data: 'keterangan',
                        title: 'Keterangan'
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


    

        var jnstransaksiSelect = {
            placeholder: "Jenis Transaksi...",
            options: [
                {
                    value: "111",
                    text: "Inquiry"
                },
                {
                    value: "112",
                    text: "Payment"
                },
                {
                    value: "113",
                    text: "Reversal"
                },
            ],
        }

        var bankSelect = {
            placeholder: "Bank...",
            options: [
                {
                    value: "111",
                    text: "002 (BRI)"
                },
                {
                    value: "112",
                    text: "112 (BPD DIY)"
                },
            ],
        }

    

        new TomSelect('#select-transaksi', jnstransaksiSelect)
        new TomSelect('#select-bank', bankSelect)
       
        
    </script>
@endsection
