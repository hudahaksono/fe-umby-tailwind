@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Generate Tagihan Calon Mahasiswa Semester Gasal 2024">
        <div class="flex flex-row mb-2">
            <div class="flex">
            </div>
            <div class="flex ml-auto">
                <x-button size="sm" color="blue" as-link={{ true }} href="#" class="mx-2 text-white"><i
                    data-feather="check-square" width="16"></i>&nbsp;Proses</x-button>
            </div>
        </div>
        <x-card class="w-full mx-auto col-span-3">
            <form>
                <table cellspacing="0" cellpadding="4">
                    <tbody>
                        <tr>
                            <td>Periode Tagihan</td>
                            <td><strong>:</strong></td>
                            <td width="100px">
                                <select id="select-periode" name="select-periode" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                            <td width="100px">
                                <select id="select-periode2" name="select-periode2" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                            <td>Kelas Mahasiswa</td>
                            <td><strong>:</strong></td>
                            <td width="100px">
                                <select id="select-klsmhs" name="select-klsmhs" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td><strong>:</strong></td>
                            <td width="260px">
                                <select id="select-jurusan" name="select-jurusan" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                            <td width="100px">
                                <select id="select-periode2" name="select-periode2" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                            <td>Kampus</td>
                            <td><strong>:</strong></td>
                            <td width="260px">
                                <select id="select-kampus" name="select-kampus" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>

        </x-card>
        <br>

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
                jurusan:'',
                kelas: '',
                kampus:'',
                jalur:'',
                gel:'',
                tertagih_calon_mhs:'',
            },
            {
                id: 2,
                jurusan:'',
                kelas: '',
                kampus:'',
                jalur:'',
                gel:'',
                tertagih_calon_mhs:'',
            },
            {
                id: 3,
                jurusan:'',
                kelas: '',
                kampus:'',
                jalur:'',
                gel:'',
                tertagih_calon_mhs:'',
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
                        title: 'Kelas',
                    },
                    {
                        data: 'kampus',
                        title: 'Kampus',
                    },
                    {
                        data: 'jalur',
                        title: 'Jalur',
                    },
                    {
                        data: 'gel',
                        title: 'Gel.',
                    },
                    {
                        data: 'tertagih_calon_mhs',
                        title: 'Tertagih/Calon Mhs',
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


        var periodeSelect = {
            placeholder: "Gasal",
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

        var periode2Select = {
            placeholder: "2024",
            options: [
                {
                    value: "111",
                    text: "2024"
                },
                {
                    value: "112",
                    text: "2023"
                },
                {
                    value: "113",
                    text: "2022"
                },
            ],
        }

        var jurusanSelect = {
            placeholder: "Universitas Mercu Buana Yogyakarta",
            options: [
                {
                    value: "111",
                    text: "S1 Psikolog"
                },
                {
                    value: "112",
                    text: "S2 Magister Psikolog"
                },
                {
                    value: "113",
                    text: "S2 Magister Psikolog Profesi"
                },
            ],
        }

        var klsmhsSelect = {
            placeholder: "Semua Kelas...",
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

        var kampusSelect = {
            placeholder: "Kampus...",
            options: [
                {
                    value: "111",
                    text: "Non Pusat"
                },
                {
                    value: "112",
                    text: "Kampus Pusat"
                },
                {
                    value: "113",
                    text: "Kampus Gejayaan"
                },
            ],
        }
        


        new TomSelect('#select-periode', periodeSelect)
        new TomSelect('#select-periode2', periode2Select)
        new TomSelect('#select-jurusan', jurusanSelect)
        new TomSelect('#select-klsmhs', klsmhsSelect)
        new TomSelect('#select-kampus', kampusSelect)
     

    </script>
@endsection