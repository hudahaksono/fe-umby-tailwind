@extends('layouts.default')
@section('title', 'Portal Rekap Status KRS')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Rekap Status KRS Mahasiswa Gasal 2022">
        <div class="flex flex-row mb-4">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">NIM&nbsp; :</span></div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <input type="text" name="s_nim"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4"
                            placeholder="111..">
                </div>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="search"
                        width="16"></i>&nbsp;Cari</x-button>
            </div>
            <div class="flex ml-auto">
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
                jurusan: 'S1 Psikologi',
                kelas: 'UKT',
                kampus: 'Kampus Pusat',
                angkatan: 2016,
                bisa_krs: 9,
                krs_diisi: 5
            },
            {
                id: 1,
                jurusan: '',
                kelas: '',
                kampus: '',
                angkatan: 2017,
                bisa_krs: 62,
                krs_diisi: 58
            },
            {
                id: 1,
                jurusan: '',
                kelas: '',
                kampus: '',
                angkatan: 2018,
                bisa_krs: 176,
                krs_diisi: 169
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
                        data: 'jurusan',
                        title: 'Jurusan',
                    },
                    {
                        data: 'kelas',
                        title: 'Kelas'
                    },
                    {
                        data: 'kampus',
                        title: 'Kampus'
                    },
                    {
                        data: 'angkatan',
                        title: 'Angkatan'
                    },
                    {
                        data: 'bisa_krs',
                        title: 'Bisa KRS',
                        render :  function (d) {
                            return "<a href='/rekap-status-krs/bisa-krs/' style='color: #08c'>"+d+"</a>";
                        }
                    },
                    {
                        data: 'krs_diisi',
                        title: 'KRS Diisi',
                        render :  function (d) {
                            return "<a href='/rekap-status-krs/diisi/' style='color: #08c'>"+d+"</a>";
                        }
                    },
                ]
            })
        })

        
    </script>
@endsection
