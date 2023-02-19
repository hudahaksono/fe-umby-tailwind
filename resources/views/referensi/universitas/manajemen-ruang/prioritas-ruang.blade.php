@extends('layouts.default')
@section('title', 'Ruang Perkuliahan')

{{-- YOUR CONTENT START HERE --}}
@section('contents')
    <!-- <x-title class="text-cool-gray-800 mb-5">Mata Kuliah</x-title> -->
    <x-card title="Prioritas Ruang Perkuliahan">
        <div class="flex flex-row mb-4">
            
            <div class="flex ml-auto">
                <x-button size="sm" color="blue" as-link={{ true }}
                    href="javascript:void(0)" class="mx-2 text-white"><i data-feather="check"
                        width="16"></i>&nbsp;Simpan</x-button>
            </div>
        </div>
        <div class="flex flex-row mb-2">
            <div class="w-full md:w-1/2">
                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Unit&nbsp;<span
                            class="text-red-600">*</span></span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center ml-2">
                        <select id="select-unit" name="jk" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                    </div>
                </div>

                <hr />
            </div>
            <div class="w-full md:w-1/2 ml-4 items-end">
                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Kampus</span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center ml-2">
                        <select id="select-kampus" name="ststus_mhs" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                    </div>
                </div>

                <hr />
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
                fasilitas: '',
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
                fasilitas: '',
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
                fasilitas: '',
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
                        data: 'gedung',
                        title: 'Gedung'
                    },
                    {
                        data: 'luas_ruang',
                        title: 'Luas'
                    },
                    {
                        data: 'kap',
                        title: 'Kapasitas'
                    },
                    {
                        data: 'fasilitas',
                        title: 'Fasilitas'
                    },
                    {
                        data: 'fungsi',
                        title: 'Urutan'
                    },
                    
                ]
            })

            var statusSelect = {
                placeholder: "Unit...",
                options: [{
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

            // var gedungSelect = {
            //     placeholder: "Gedung...",
            //     options: [{
            //             value: "1",
            //             text: "Gedung A"
            //         },
            //         {
            //             value: "2",
            //             text: "Gedung B"
            //         },
            //         {
            //             value: "3",
            //             text: "Gedung C"
            //         },
            //     ],
            // }

            new TomSelect('#select-unit', statusSelect)
            new TomSelect('#select-kampus', kampusSelect)

        })
    </script>
@endsection
