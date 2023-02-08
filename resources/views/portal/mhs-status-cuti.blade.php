@extends('layouts.default')
@section('title', 'Portal Mahasiswa Cuti')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Mahasiswa Berstatus Cuti Gasal 2022">
        <div class="flex flex-row mb-4">
            <div class="flex ml-auto">
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="edit"
                        width="16"></i>&nbsp;Ubah</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="printer"
                        width="16"></i>&nbsp;Cetak</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="/rekap-status-mahasiswa"
                    class="mx-2  text-cool-gray-800 border-cool-gray-400"><i data-feather="list" width="16"></i>&nbsp;Daftar</x-button>
            </div>
        </div>
        <div class="form-input ">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <label class="block">
                    <label class="text-gray-600 font-medium">Jurusan : Psikologi</label>
                </label>

                <label class="block">
                    <label class="text-gray-600 font-medium">Kampus : Kampus Pusat</label>
                </label>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <label class="block">
                    <label class="text-gray-600 font-medium">Kelas : UKT</label>
                </label>

                <label class="block">
                    <label class="text-gray-600 font-medium">Angkatan : 2018</label>
                </label>
            </div>
            <!-- <table>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>Psikologi</td>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>Psikologi</td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>UKT</td>
                </tr>
            </table> -->
        </div>
        <br>
        <table id="log-krs-table" class="hover cell-border stripe  order-column"></table>

    </x-card>
@endsection

@section('scripts')
    <script>
        const dataSet = [{
                id: 1,
                nim: '18081187',
                nama_mahasiswa: 'BETANIA RUTMA HAYATI',
                jurusan: 'Psikologi',
                angkatan: 2018,
                status: 'Cuti',
                // dispensasi: '<input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">',
            },
            // {
            //     id: 1,
            //     nim: '16081173',
            //     nama_mahasiswa: 'ADHI JULIAR WIRAWAN',
            //     jurusan: 'Psikologi',
            //     angkatan: 2016,
            //     status: 'Aktif',
            //     dispensasi: '',
            // },
            // {
            //     id: 1,
            //     nim: '16081309',
            //     nama_mahasiswa: 'DESY PARWATI',
            //     jurusan: 'Psikologi',
            //     angkatan: 2016,
            //     status: 'Aktif',
            //     dispensasi: '',
            // },
        ]

        $(document).ready(function() {
            $('#log-krs-table').DataTable({
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
                        title: 'Nama'
                    },
                    {
                        data: 'jurusan',
                        title: 'Jurusan'
                    },
                    {
                        data: 'angkatan',
                        title: 'Angkatan'
                    },
                    {
                        data: 'status',
                        title: 'Status'
                    },
                    {
                        data: 'id',
                        title: 'Dispensasi',
                        render: (data) => {
                            const iCheckBox = () => `w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600`
                            const check = `
                            <input id="default-checkbox" type="checkbox" value="" class="${iCheckBox()}">
                            `
                            // feather.replace()

                            return check
                        }
                    },
                ],
                columnDefs: [{
                        className: "text-center",
                        targets: [0, 6]
                    },
                ]
            })
        })
    </script>
@endsection
