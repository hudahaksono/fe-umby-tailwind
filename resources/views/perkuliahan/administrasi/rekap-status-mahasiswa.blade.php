@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Rekap Status Mahasiswa">
        <div class="flex flex-row mb-2">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Periode&nbsp; :</span>
                    </div>
                    <div class="mb-1 inline-flex items-center px-2 py-1">
                        <select id="semester-gasal" name="smsgasal" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                    </div>
                    <div class="mb-1 inline-flex items-center px-2 py-1">
                        <select id="tahun" name="tahun" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                    </div>
            </div>
            <div class="flex ml-auto">
                {{-- <x-button size="sm" color="blue" as-link={{ true }} href="#" class="mx-2 text-white"><i
                    data-feather="plus" width="16"></i>&nbsp;Tambah</x-button> --}}
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="search"
                        width="16"></i>&nbsp;Cari</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="printer"
                        width="16"></i>&nbsp;Cetak</x-button>
            </div>
        </div>

        
        <!-- <div class="flex flex-row mb-2">
            <div class="w-full md:w-1/2">
                

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Thn. Kur.</span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <select id="select-thn-kur" name="ststus_mhs" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Jurusan&nbsp;<span
                            class="text-red-600">*</span></span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <select id="select-jk" name="jk" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Kurikulum</span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <select id="select-kur-baru" name="ststus_mhs" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                    </div>
                </div>

                
            </div>
            <div class="w-full md:w-1/2 ml-4 items-end">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th colspan="3">Salin Prasyarat Ke Kurikulum Lain</th>
                        </tr>
                        <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                            <td style="width: 150px;">Dari Kurikulum</td>
                            <td style="width: 10px">:</td>
                            <td>
                                <select id="select-kur-dari" name="ststus_mhs" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                        </tr>
                        <tr class="border-b bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <td style="width: 150px;">ke Kurikulum</td>
                            <td style="width: 10px">:</td>
                            <td>
                                <select id="select-kur-ke" name="ststus_mhs" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th colspan="3">
                                <x-button size="md" color="blue" as-link={{ true }} href="#" class="mx-2"><i width="16"></i>&nbsp;Salin
                                </x-button>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> -->

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
                jurusan: 'S1 Psikologi',
                kelas: 'UKT',
                kampus: 'Kampus Pusat',
                angkatan: '2016',
                aktif: '4',
                non_aktif: '9',
                cuti:'',
                lulus:'2',
                drop_out:'',
                pindah:'',
                mengundurkan_diri:'',
                total:'15',
            },
            {
                id: 2,
                jurusan: '',
                kelas: '',
                kampus: '',
                angkatan: '2017',
                aktif: '57',
                non_aktif: '14',
                cuti:'',
                lulus:'11',
                drop_out:'',
                pindah:'',
                mengundurkan_diri:'',
                total:'82',
            },
            {
                id: 3,
                jurusan: '',
                kelas: '',
                kampus: '',
                angkatan: '2018',
                aktif: '143',
                non_aktif: '5',
                cuti:'1',
                lulus:'48',
                drop_out:'',
                pindah:'',
                mengundurkan_diri:'',
                total:'197',
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
                        title: 'Jurusan'
                    },
                    {
                        data: 'kelas',
                        title: 'Kelas',
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
                        data: 'aktif',
                        title: 'Aktif'
                    },
                    {
                        data: 'non_aktif',
                        title: 'Non Aktif'
                    },
                    {
                        data: 'cuti',
                        title: 'Cuti'
                    },
                    {
                        data: 'lulus',
                        title: 'Lulus'
                    },
                    {
                        data: 'drop_out',
                        title: 'Drop Out'
                    },
                    {
                        data: 'pindah',
                        title: 'Pindah'
                    },
                    {
                        data: 'mengundurkan_diri',
                        title: 'Mengundurkan Diri'
                    },
                    {
                        data: 'total',
                        title: 'Total'
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


    

        var smsgasalSelect = {
            placeholder: "Semester Gasal...",
            options: [
                {
                    value: "111",
                    text: "Semester Gasal"
                },
                {
                    value: "112",
                    text: "Semester Gasal Pendek"
                },
                {
                    value: "113",
                    text: "Semester Genap"
                },
                {
                    value: "114",
                    text: "Semester Gasal Pendek"
                },
            ],
        }

        var tahunSelect = {
            placeholder: "2022/2023...",
            options: [
                {
                    value: "111",
                    text: "2022/2023"
                },
                {
                    value: "112",
                    text: "2021/2022"
                },
                {
                    value: "113",
                    text: "2020/2021"
                },
                {
                    value: "114",
                    text: "2019/2020"
                },
            ],
        }

    

        new TomSelect('#semester-gasal', smsgasalSelect)
        new TomSelect('#tahun', tahunSelect)
       
        
    </script>
@endsection
