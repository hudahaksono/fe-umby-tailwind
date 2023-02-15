@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Kandidat Mahasiswa Drop Out">
        <div class="flex flex-row mb-2">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Filter&nbsp; :</span>
                    </div>
                    <div class="mb-1 inline-flex items-center px-2 py-1">
                        <select id="unit" name="unit" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                        <select id="tahun-drop-out" name="thndo" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                        <select id="periode-drop-out" name="prddo" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                        <select id="alasan-drop-out" name="alsndo" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                        <select id="status-drop-out" name="stsdo" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                    </div>
                
                
            </div>
            <div class="flex ml-auto">
                <x-button size="sm" color="blue" as-link={{ true }} href="#" class="mx-2 text-white"><i
                    data-feather="plus" width="16"></i>&nbsp;Tambah</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="refresh-cw"
                        width="16"></i>&nbsp;Reset</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="printer"
                        width="16"></i>&nbsp;Cetak</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="printer"
                        width="16"></i>&nbsp;Exel</x-button>
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
                nim: '15082540',
                nama_mahasiswa: 'LENI ELFRIDA',
                angkt: '20153',
                lulusan: '',
                jurusan:'Psikologi',
                alasan:'Cuti/Non-Aktif > 3 kali	',
                a:'9',
                na:'3',
                c:'2',
                sisa:'2',
                status:'',
                no_sk:'',
            },
            {
                id: 2,
                nim: '16032032',
                nama_mahasiswa: 'M MIFTAHUL FALAH',
                angkt: '20161',
                lulusan: '',
                jurusan:'Teknologi Hasil Pertanian',
                alasan:'Cuti/Non-Aktif > 4 kali	',
                a:'5',
                na:'8',
                c:'0',
                sisa:'1',
                status:'',
                no_sk:'',
            },
            {
                id: 3,
                nim: '16131049',
                nama_mahasiswa: 'NURUL KHOTAMI RAHMAH',
                angkt: '20163',
                lulusan: '',
                jurusan:'Pendidikan Bahasa Inggris',
                alasan:'Cuti/Non-Aktif > 4 kali	',
                a:'7',
                na:'5',
                c:'0',
                sisa:'2',
                status:'',
                no_sk:'',
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
                        data: 'nim',
                        title: 'NIM'
                    },
                    {
                        data: 'nama_mahasiswa',
                        title: 'Nama Mahasiswa',
                    },
                    {
                        data: 'angkt',
                        title: 'Angkt'
                    },
                    {
                        data: 'lulusan',
                        title: 'Lulusan'
                    },
                    {
                        data: 'jurusan',
                        title: 'Jurusan'
                    },
                    {
                        data: 'alasan',
                        title: 'Alasan'
                    },
                    {
                        data: 'a',
                        title: 'A'
                    },
                    {
                        data: 'na',
                        title: 'NA'
                    },
                    {
                        data: 'c',
                        title: 'C'
                    },
                    {
                        data: 'sisa',
                        title: 'Sisa'
                    },
                    {
                        data: 'status',
                        title: 'Status'
                    },
                    {
                        data: 'no_sk',
                        title: 'No. SK'
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


    

        var unitSelect = {
            placeholder: "Unit...",
            options: [
                {
                    value: "111",
                    text: "S1 Psikolog"
                },
                {
                    value: "112",
                    text: "S2 Magister Psikologi"
                },
                {
                    value: "113",
                    text: "S2 Magister Psikologi Profesi"
                },
                {
                    value: "114",
                    text: "S1 Akuntansi"
                },
                {
                    value: "115",
                    text: "S1 Manajemen"
                },
                {
                    value: "116",
                    text: "S1 Teknologi Hasil Pertanian"
                },
                {
                    value: "117",
                    text: "S1 Peternakan"
                },
                {
                    value: "118",
                    text: "S1 Agroteknologi"
                },
                {
                    value: "119",
                    text: "S2 Magister Ilmu Pangan"
                },
                {
                    value: "1110",
                    text: "S1 Informatika"
                },
                {
                    value: "1111",
                    text: "S1 Sistem Informasi"
                },
                {
                    value: "1111",
                    text: "S1 Sistem Informasi"
                },
                {
                    value: "1112",
                    text: "S1 Marketing Communication"
                },
                {
                    value: "1113",
                    text: "S1 Ilmu Komunikasi"
                },
                {
                    value: "1114",
                    text: "S1 Public Relation"
                },
                {
                    value: "1115",
                    text: "S1 Broadcasting"
                },
                {
                    value: "1116",
                    text: "S1 Visual Communication"
                },
                {
                    value: "1117",
                    text: "S1 Pendidikan Bahasa Inggris"
                },
                {
                    value: "1118",
                    text: "S1 Pendidikan Matematika"
                },
                {
                    value: "1119",
                    text: "S1 Bimbingan dan Konseling"
                },
                {
                    value: "1120",
                    text: "S1 Ilmu Keolahragaan"
                },
            ],
        }

        var thndoSelect = {
            placeholder: "Tahun Drop Out...",
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
                {
                    value: "114",
                    text: "2021/2022"
                },
                {
                    value: "115",
                    text: "2020/2021"
                },
            ],
        }
    
        var prddoSelect = {
            placeholder: "Periode Drop Out...",
            options: [
                {
                    value: "111",
                    text: "Gasal 2022"
                },
                {
                    value: "112",
                    text: "Genap 2021"
                },
                {
                    value: "113",
                    text: "Gasal 2021"
                },
                {
                    value: "114",
                    text: "Genap 2020"
                },
                {
                    value: "115",
                    text: "Gasal 2020"
                },
            ],
        }

        var alsndoSelect = {
            placeholder: "Alasan Drop Out...",
            options: [
                {
                    value: "111",
                    text: "Cuti/Non-Aktif"
                },
                {
                    value: "112",
                    text: "Masa Studi Habis"
                },
                {
                    value: "113",
                    text: "Evaluasi IPK"
                },
                {
                    value: "114",
                    text: "Evaluasi SKS"
                },
            ],
        }

        var stsdoSelect = {
            placeholder: "Status Drop Out...",
            options: [
                {
                    value: "111",
                    text: "Belum Drop Out"
                },
                {
                    value: "112",
                    text: "Sudah Drop Out"
                },
            ],
        }

        new TomSelect('#unit', unitSelect)
        new TomSelect('#tahun-drop-out', thndoSelect)
        new TomSelect('#periode-drop-out', prddoSelect)
        new TomSelect('#alasan-drop-out', alsndoSelect)
        new TomSelect('#status-drop-out', stsdoSelect)

    </script>
@endsection
