@extends('layouts.default')
@section('title', 'Portal Mahasiswa Bisa KRS')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Mahasiswa Bisa KRS Gasal 2022">
        <div class="flex flex-row mb-4">
            <div class="flex ml-auto">
                <x-button size="sm" color="white" as-link={{ true }} href="/rekap-status-krs"
                    class="mx-2  text-cool-gray-800 border-cool-gray-400"><i data-feather="list" width="16"></i>&nbsp;Daftar</x-button>
            </div>
        </div>
        <div class="form-input ">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <label class="block">
                    <label class="text-gray-600 font-medium">Jurusan : Informatika</label>
                </label>

                <label class="block">
                    <label class="text-gray-600 font-medium">Kampus : Kampus Gejayan</label>
                </label>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <label class="block">
                    <label class="text-gray-600 font-medium">Kelas : UKT</label>
                </label>

                <label class="block">
                    <label class="text-gray-600 font-medium">Angkatan : 2021</label>
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
        function currencyFormat(num, decimal = 0) {
            return accounting.formatMoney(num, "", decimal, ",", ".");
        }

        function amountToFloat(amount) {
            return parseFloat(accounting.unformat(amount));
        }

        const dataSet = [{
                id: 1,
                nim: '16081116',
                nama_mahasiswa: 'DANIK MARYATI',
                jurusan: 'Psikologi',
                angkatan: 2016,
                bisa_krs: 1,
                krd_diisi: 1,
                tagihan: currencyFormat(42045000),
                pembayaran: currencyFormat(42045000),
                buka_nlok: 0,
            },
            {
                id: 2,
                nim: '16081328',
                nama_mahasiswa: 'ARIF ADE WIBOWO',
                jurusan: 'Psikologi',
                angkatan: 2016,
                bisa_krs: 1,
                krd_diisi: 0,
                tagihan: currencyFormat(36570000),
                pembayaran: currencyFormat(36570000),
                buka_blok: 0,
            },
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
                        data: 'bisa_krs',
                        title: 'Bisa KRS',
                        render: (data) => {
                            const iCheckBox = () => `w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600`

                            if(data == 1){
                                check = `
                                    <input checked id="default-checkbox" type="checkbox" value="" class="${iCheckBox()}">
                                    `
                            }else{
                                check = `
                                    <input id="default-checkbox" type="checkbox" value="" class="${iCheckBox()}">
                                    `
                            }
                            
                            // feather.replace()

                            return check
                        }
                    },
                    {
                        data: 'krd_diisi',
                        title: 'KRS Diisi',
                        render: (data) => {
                            const iCheckBox = () => `w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600`
                            if(data == 1){
                                check = `
                                    <input checked id="default-checkbox" type="checkbox" value="" class="${iCheckBox()}">
                                    `
                            }else{
                                check = `
                                    <input id="default-checkbox" type="checkbox" value="" class="${iCheckBox()}">
                                    `
                            }
                            // feather.replace()

                            return check
                        }
                    },
                    {
                        data: 'tagihan',
                        title: 'Tagihan'
                    },
                    {
                        data: 'pembayaran',
                        title: 'Pembayaran'
                    },
                    {
                        data: 'buka_blok',
                        title: 'Buka Blok',
                        render: (data) => {
                            const iCheckBox = () => `w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600`
                            
                            if(data == 1){
                                check = `
                                    <input checked id="default-checkbox" type="checkbox" value="" class="${iCheckBox()}">
                                    `
                            }else{
                                check = `
                                    <input id="default-checkbox" type="checkbox" value="" class="${iCheckBox()}">
                                    `
                            }
                            // feather.replace()

                            return check
                        }
                    },
                ],
                columnDefs: [{
                        className: "text-center",
                        targets: [0, 5, 6, 9]
                    },
                    {
                        className: "text-end",
                        targets: [7, 8]
                    },
                ]
            })
        })
    </script>
@endsection
