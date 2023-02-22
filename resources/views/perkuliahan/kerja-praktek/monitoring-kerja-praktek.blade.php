@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Monitoring Kerja Praktek">
        <div class="flex flex-row">
            <!-- <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Periode&nbsp; :</span>
                    </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-semester" name="ststus_mhs" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-tahun" name="ststus_mhs" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                
            </div> -->
            
            <div class="flex ml-auto">
                <x-button size="sm" color="blue" as-link={{ true }} href="#" class="mx-2 text-white"><i
                    data-feather="plus" width="16"></i>&nbsp;Tambah</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="refresh-cw"
                        width="16"></i>&nbsp;Reset</x-button>
            </div>
        </div>
        <x-card class="w-full mx-auto col-span-3">
            <form>
                <div class="flex flex-col md:flex-row justify-between my-2 py-4 md:py-0">
                    <div class="basis-5/6">
                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Unit</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-jurusan" name="ststus_mhs" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Periode </span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-periode" name="ststus_mhs" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                                <select id="select-periode-thn" name="ststus_mhs" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-1">
                                </select>
                            </div>
                        </div>

                        
                    </div>
                    
                    <div class="basis-5/6 ml-2">
                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Sistem Kuliah</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-kuliah" name="sistem_kuliah" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-row justify-between my-2 ">
                            <div class="basis-1/3 flex items-center"><span class="text-gray-600">Status Kerja Praktek</span>
                            </div>
                            <div class="basis-1 flex items-center">:</div>
                            <div class="basis-2/3 flex items-center">
                                <select id="select-status" name="status_kerja_praktek" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="filter"
                        width="16"></i>&nbsp;Filter</x-button>
                </div>
            </form>
        </x-card>
        <br>

        <table id="mahasiswa-table" class="hover cell-border stripe  order-column"></table>

    </x-card>
@endsection

@section('scripts')
    <script>
        const dataSet = [{
                id: 1,
                judul: '',
                peserta: '',
                perusahaan: '',
                durasi: '',
                nilai: '',
            },
            {
                id: 2,
                judul: '',
                peserta: '',
                perusahaan: '',
                durasi: '',
                nilai: '',
            },
            {
                id: 3,
                judul: '',
                peserta: '',
                perusahaan: '',
                durasi: '',
                nilai: '',
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
                        data: 'judul',
                        title: 'Judul'
                    },
                    {
                        data: 'peserta',
                        title: 'Peserta'
                    },
                    {
                        data: 'perusahaan',
                        title: 'Perusahaan'
                    },
                    {
                        data: 'durasi',
                        title: 'Durasi'
                    },
                    {
                        data: 'nilai',
                        title: 'Nilai'
                    },
                ]
            })
        })

        var semesterSelect = {
            placeholder: "Periode...",
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
                {
                    value: "114",
                    text: "Genap Pendek"
                },
            ],
        }

        var periodethnSelect = {
            placeholder: "Tahun...",
            options: [{
                    value: "1",
                    text: "2024/2025"
                },
                {
                    value: "2",
                    text: "2023/2024"
                },
                {
                    value: "3",
                    text: "2022/2023"
                },
            ],
        }

        var JKSelect = {
            placeholder: "Universitas Mercu Buana Yogyakarta...",
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

        var sistem_kuliahSelect = {
            placeholder: "Sistem Kuliah...",
            options: [
                {
                    value: "111",
                    text: "UKT"
                },
                {
                    value: "112",
                    text: "SPP Tetap"
                },
            ],
        }

        var statusSelect = {
            placeholder: "Status Kerja Praktek...",
            options: [
                {
                    value: "111",
                    text: "TIDAK AKTIF"
                },
                {
                    value: "114",
                    text: "AKTIF"
                },
            ],
        }

        new TomSelect('#select-kuliah', sistem_kuliahSelect)
        new TomSelect('#select-status', statusSelect)

        new TomSelect('#select-periode', semesterSelect)
        new TomSelect('#select-periode-thn', periodethnSelect)

        new TomSelect('#select-jurusan', JKSelect)


    </script>
@endsection
