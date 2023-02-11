@extends('layouts.default')
@section('title', 'Portal Rekap Total Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Rekap Total Mahasiswa">
        <div class="flex flex-row mb-4">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Periode&nbsp; :</span>
                    </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-semester" name="s_semester"
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-tahun" name="s_tahun"
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
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
                mhs_baru: 227,
                total: 227
            },
            {
                id: 1,
                jurusan: '',
                kelas: '',
                kampus: 'Kampus Condong Catur',
                mhs_baru: 543,
                total: 543
            },
            {
                id: 1,
                jurusan: 'S2 Magister Psikologi',
                kelas: 'UKT',
                kampus: 'Kampus Condong Catur',
                mhs_baru: 9,
                total: 9
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
                        data: 'mhs_baru',
                        title: 'Mhs Baru',
                        // render :  function (d) {
                        //     return "<a href='/laporan-total-mhs/baru/' style='color: #08c'>"+d+"</a>";
                        // }
                    },
                    {
                        data: 'total',
                        title: 'Total'
                    },
                ]
            })
        })

        var SemesterSelect = {
            placeholder: "Pilih Semester...",
            options: [{
                    value: "1",
                    text: "Semester Gasal"
                },
                {
                    value: "2",
                    text: "Semester Gasal Pendek"
                },
                {
                    value: "3",
                    text: "Semester Genap"
                },
                {
                    value: "4",
                    text: "Semester Genap Pendek"
                },
            ],
        }

        var TahunSelect = {
            placeholder: "Pilih Tahun...",
            options: [
                {
                    value: "1",
                    text: "2022/2023"
                },
                {
                    value: "2",
                    text: "2021/2022"
                },
            ],
        }

        new TomSelect('#select-semester', SemesterSelect)

        new TomSelect('#select-tahun', TahunSelect)
    </script>
@endsection
