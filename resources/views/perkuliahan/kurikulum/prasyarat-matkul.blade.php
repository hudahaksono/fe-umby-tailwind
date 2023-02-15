@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Prasyarat Mata Kuliah">
        <div class="flex flex-row mb-2">
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
            </div>
            <div class="flex ml-auto">
                <x-button size="sm" color="blue" as-link={{ true }} href="#" class="mx-2 text-white"><i data-feather="plus"
                        width="16"></i>&nbsp;Tambah</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="refresh-cw"
                        width="16"></i>&nbsp;Reset</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="printer"
                        width="16"></i>&nbsp;Cetak</x-button>
            </div>
        </div>

        <div class="flex flex-row mb-2">
            <div class="w-full md:w-1/2">
                

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Thn. Kur.</span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center ml-2">
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
                    <div class="basis-2/3 flex items-center ml-2">
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
                    <div class="basis-2/3 flex items-center ml-2">
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
                            <td style="width: 150px;">Ke Kurikulum</td>
                            <td style="width: 10px">:</td>
                            <td>
                                <select id="select-kur-ke" name="ststus_mhs" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th colspan="3">
                                <x-button size="md" color="blue" as-link={{ true }} href="#" class="mx-2 text-white"><i width="16"></i>&nbsp;Salin
                                </x-button>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <table id="mahasiswa-table" class="hover cell-border stripe  order-column">
            <thead>
                <tr>
                    <th colspan="3">Mata Kuliah</th>
                    <th colspan="5">Prasyarat</th>
                </tr>
                <tr>
                    <th>No.</th>
                    <th>Kurikulum</th>
                    <th>Kode MK</th>
                    <th>Nama MK</th>
                    <th>Kode MK</th>
                    <th>Nama MK</th>
                    <th>Nilai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>

    </x-card>
@endsection

@section('scripts')
    <script>
        // const dataSet = [{
        //         id: 1,
        //         nim: 'MBY01',
        //         nama: '21-73201',
        //         stat: 'Pendidikan Agama Islam',
        //         angkatan: '2',
        //         asal: '1',
        //         wajib: 'Ya',
        //         paket: '',
        //         mkcu: '',
        //         rapem: 'Ada',
        //     },
        //     {
        //         id: 2,
        //         nim: 'MBY07',
        //         nama: '21-73201',
        //         stat: 'Pancasila',
        //         angkatan: '2',
        //         asal: '1',
        //         wajib: 'Ya',
        //         paket: 'Ya',
        //         mkcu: '',
        //         rapem: 'Ada',
        //     },
        //     {
        //         id: 3,
        //         nim: 'MBY06',
        //         nama: '21-73201',
        //         stat: 'Pendidikan Agama Khonghucu',
        //         angkatan: '2',
        //         asal: '1',
        //         wajib: 'Ya',
        //         paket: '',
        //         mkcu: '',
        //         rapem: 'Ada',
        //     },
        // ]

        const dataSet = []

        $(document).ready(function() {
            $('#mahasiswa-table').DataTable({
                data: dataSet,
                columns: [{
                        data: 'id',
                        render: (data, type, row, meta) => meta.row + meta.settings._iDisplayStart + 1,
                        title: "No."
                    },
                    {
                        data: 'nama',
                        title: 'Kurikulum'
                    },
                    {
                        data: 'nim',
                        title: 'Kode MK',
                        // render :  function (d) {
                        //     return "<a href='/mahasiswa/detail/"+d+"'>"+d+"</a>";
                        // }
                    },
                    {
                        data: 'stat',
                        title: 'Nama MK'
                    },
                    {
                        data: 'nama',
                        title: 'Kode MK'
                    },
                    {
                        data: 'nim',
                        title: 'Nama MK',
                        // render :  function (d) {
                        //     return "<a href='/mahasiswa/detail/"+d+"'>"+d+"</a>";
                        // }
                    },
                    {
                        data: 'stat',
                        title: 'Nilai'
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

        var thnKurikulumSelect = {
            placeholder: "tahun...",
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

        var StatusMHSSelect = {
            placeholder: "Kurikulum...",
            options: [{
                    value: "1",
                    text: "2021-21-73201-Kurikulum Psikologi 2021"
                },
                {
                    value: "2",
                    text: "2017-17-73201-Kurikulum Psikologi 2017"
                },
                {
                    value: "3",
                    text: "2016-16-73201-Kurikulum Psikologi 2016"
                },
            ],
        }

        var JKSelect = {
            placeholder: "Jurusan...",
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

        new TomSelect('#select-jk', JKSelect)

        new TomSelect('#select-thn-kur', thnKurikulumSelect)
        new TomSelect('#select-kur-baru', StatusMHSSelect)

        new TomSelect('#select-kur-dari', StatusMHSSelect)
        new TomSelect('#select-kur-ke', StatusMHSSelect)

        var thnKurSelect = {
            placeholder: "Tahun Kurikulum...",
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

        var jurSelect = {
            placeholder: "Jurusan...",
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

        new TomSelect('#select-thn-kurikulum', thnKurSelect)
        new TomSelect('#select-jurusan', jurSelect)
    </script>
@endsection
