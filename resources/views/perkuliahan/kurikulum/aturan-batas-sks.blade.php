@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Aturan Batas SKS">
        <div class="flex flex-row mb-2">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Filter&nbsp; :</span>
                    </div>
                    <div class="mb-1 inline-flex items-center px-2 py-1">
                        <select id="sistem-perkuliahan" name="sistem_perkuliahan" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                    </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-kur" name="jk" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-pro-pend" name="ststus_mhs" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                
            </div>
            <div class="flex ml-auto">
                <x-button size="sm" color="blue" as-link={{ true }} href="#" class="mx-2"><i
                    data-feather="plus" width="16"></i>&nbsp;Tambah</x-button>
                <x-button size="sm" color="gray" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="refresh-cw"
                        width="16"></i>&nbsp;Reset</x-button>
                <x-button size="sm" color="gray" as-link={{ true }} href="#"
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
            <div class="w-full md:w-2/3">
                <table id="mahasiswa-table" class="hover cell-border stripe  order-column">
                </table>
            </div>
            <div class="w-full md:w-1/3 ml-4">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" style="margin-top: 106px;">
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th colspan="3">Salin Ke Tahun Kurikulum</th>
                        </tr>
                        <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                            <td style="width: 150px;">Dari Tahun Kurikulum</td>
                            <td style="width: 10px">:</td>
                            <td>
                                <select id="select-kur-dari" name="ststus_mhs" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                        </tr>
                        <tr class="border-b bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <td style="width: 150px;">Ke Tahun Kurikulum</td>
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
        </div>

    </x-card>
@endsection

@section('scripts')
    <script>
        const dataSet = [{
                id: 1,
                program: 'S1',
                kurikulum: '2015',
                sistem: 'KY',
                sks_max: '12',
                ips_bawah: '0.00',
                ips_atas: '1.49',
            },
            {
                id: 2,
                program: 'S1',
                kurikulum: '2015',
                sistem: 'KY',
                sks_max: '15',
                ips_bawah: '1.50',
                ips_atas: '1.99',
            },
            {
                id: 3,
                program: 'S1',
                kurikulum: '2015',
                sistem: 'KY',
                sks_max: '18',
                ips_bawah: '2.00',
                ips_atas:'2.49',
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
                        data: 'program',
                        title: 'Program'
                    },
                    {
                        data: 'kurikulum',
                        title: 'Kurikulum',
                        // render :  function (d) {
                        //     return "<a href='/mahasiswa/detail/"+d+"'>"+d+"</a>";
                        // }
                    },
                    {
                        data: 'sistem',
                        title: 'Sistem'
                    },
                    {
                        data: 'sks_max',
                        title: 'SKS Max'
                    },
                    {
                        data: 'ips_bawah',
                        title: 'IPS Bawah',
                    },
                    {
                        data: 'ips_atas',
                        title: 'IPS Atas',
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
        var sistemperkuliahanSelect = {
            placeholder: "sistem perkuliahan...",
            options: [{
                    value: "1",
                    text: "UKT"
                },
                {
                    value: "2",
                    text: "SPP tetap"
                },
            ],
        }

        var thnKurikulumSelect = {
            placeholder: "Kurikulum...",
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

        var ProgSelect = {
            placeholder: "Program Pendidikan...",
            options: [
                {
                    value: "111",
                    text: "Diploma"
                },
                {
                    value: "112",
                    text: "Profesi"
                },
                {
                    value: "113",
                    text: "Sarjana"
                },
                {
                    value: "114",
                    text: "Pasca Sarjana"
                },
                {
                    value: "115",
                    text: "Doktor"
                },
            ],
        }

        var tipeKulSelect = {
            placeholder: "Tipe Kuliah...",
            options: [
                {
                    value: "111",
                    text: "Kuliah"
                },
                {
                    value: "112",
                    text: "Praktikum"
                },
                {
                    value: "113",
                    text: "KKN"
                },
                {
                    value: "114",
                    text: "TA/Skripsi"
                },
            ],
        }

        new TomSelect('#select-pro-pend', ProgSelect)

        new TomSelect('#sistem-perkuliahan', sistemperkuliahanSelect)
        new TomSelect('#select-kur-dari', thnKurikulumSelect)
        new TomSelect('#select-kur-ke', thnKurikulumSelect)

        new TomSelect('#select-kur', thnKurikulumSelect)
    </script>
@endsection
