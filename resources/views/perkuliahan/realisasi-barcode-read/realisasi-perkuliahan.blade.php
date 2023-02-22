@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Absensi Realisasi Perkuliahan Dosen">
        <div class="flex flex-row mb-2">
            {{-- <div class="flex ml-auto">
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="edit"
                        width="16"></i>&nbsp;Ubah</x-button>
            </div> --}}
        </div>
    </x-card>
@endsection

{{-- @section('scripts')
    <script>
        const dataSet = [{
                id: 1,
                periode: '',
                jenis: '',
                sistem_kuliah:'',
            },
            {
                id: 2,
                periode: '',
                jenis: '',
                sistem_kuliah:'',
            },
            {
                id: 3,
                periode: '',
                jenis: '',
                sistem_kuliah:'',
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
                        data: 'periode',
                        title: 'Periode'
                    },
                    {
                        data: 'jenis',
                        title: 'Jenis',
                    },
                    {
                        data: 'sistem_kuliah',
                        title: 'Sistem Kuliah'
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


    

        var semesterSelect = {
            placeholder: "Semester...",
            options: [
                {
                    value: "111",
                    text: "Gasal"
                },
                {
                    value: "112",
                    text: "Gasal Pendek"
                },
                {
                    value: "113",
                    text: "Genap"
                },
            ],
        }

        var tahunSelect = {
            placeholder: "Tahun...",
            options: [
                {
                    value: "111",
                    text: "2024/2025"
                },
                {
                    value: "112",
                    text: "2023/2024"
                },
                {
                    value: "113",
                    text: "2022/2023"
                },
            ],
        }


        new TomSelect('#semester', semesterSelect)
        new TomSelect('#tahun', tahunSelect)

    </script>
@endsection --}}
