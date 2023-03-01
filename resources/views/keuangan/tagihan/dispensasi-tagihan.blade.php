@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Dispensasi Tagihan">
        <div class="flex flex-row mb-2">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Filter&nbsp; :</span>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="angkatan" name="angkatan" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="jurusan" name="jurusan" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="kelas" name="kelas" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="kampus" name="kampus" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
            </div>
            <div class="flex ml-auto">
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="refresh-cw"
                        width="16"></i>&nbsp;Reset</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="printer"
                        width="16"></i>&nbsp;Cetak</x-button>
            </div>
        </div>
        

        {{-- Periode --}}
        <div class="flex flex-row mb-2 form-input">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Periode&nbsp; :</span>
                    </div>
                    <div class="mb-1 inline-flex items-center px-2 py-1">
                        <select id="gasal" name="gasal" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                        <select id="tahun" name="tahun" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                    </div>
                    <div class="flex items-center"><span class="text-gray-600 font-medium">Jenis Syarat&nbsp; :</span>
                    </div> 
                    <div class="mb-1 inline-flex items-center px-2 py-1">
                        <select id="syarat" name="syarat" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select> 
                    </div>
            </div>
        </div>
        <br>
        {{-- ------ --}}


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
                nim: '08052013	',
                nama_mhs:'ESTI DIANA SARI',
                jurusan:'Manajemen',
                tagihan:'',
                dispensasi:'',
                tgl_byr:'30 Sep 2009',
                tgl_janji:'',
            },
            {
                id: 2,
                nim: '09091012',
                nama_mhs:'R.A. ANDINI AVRIYANI',
                jurusan:'Magister Psikologi Profesi',
                tagihan:'',
                dispensasi:'',
                tgl_byr:'	10 Agu 2016',
                tgl_janji:'',
            },
            {
                id: 3,
                nim: '	09111037',
                nama_mhs:'TEGUH SUSILO',
                jurusan:'Informatika',
                tagihan:'',
                dispensasi:'',
                tgl_byr:'22 Okt 2018',
                tgl_janji:'',
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
                        title: 'NIM',
                    },
                    {
                        data: 'nama_mhs',
                        title: 'Nama Mahasiswa',
                    },
                    {
                        data: 'jurusan',
                        title: 'Jurusan',
                    },
                    {
                        data: 'tagihan',
                        title: 'Tagihan',
                        render: (data) => {
                            if(data){
                                return '<div class="flex justify-center"><span class="inline-flex items-center text-center bg-orange-100 text-orange-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-orange-400 border border-orange-400">'+data+'</span></div>';
                            }else{
                                return data;
                            }
                        }
                    },
                    {
                        data: 'dispensasi',
                        title: 'Dispensasi',
                    },
                    {
                        data: 'tgl_byr',
                        title: 'Tgl.Bayar',
                    },
                    {
                        data: 'tgl_janji',
                        title: 'Tgl.Janji',
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


        var angkatanSelect = {
            placeholder: "Angkatan...",
            options: [
                {
                    value: "111",
                    text: "2022"
                },
                {
                    value: "112",
                    text: "2021"
                },
                {
                    value: "113",
                    text: "2020"
                },
            ],
        }

        var jurusanSelect = {
            placeholder: "Jurusan...",
            options: [
                {
                    value: "111",
                    text: "S1 Psikologi"
                },
                {
                    value: "112",
                    text: "S2 Magister Psikologi"
                },
                {
                    value: "113",
                    text: "S2 Magister Psikologi Profesi"
                },
            ],
        }

        var kelasSelect = {
            placeholder: "Kelas...",
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
                    text: "Kampus Pusat"
                },
                {
                    value: "112",
                    text: "Kampus Gejayan"
                },
                {
                    value: "112",
                    text: "Kampus Gejayan Ring Road"
                },
            ],
        }

        var gasalSelect = {
            placeholder: "Gasal...",
            options: [
                {
                    value: "111",
                    text: "Gasal Pendek"
                },
                {
                    value: "112",
                    text: "Genap"
                },
                {
                    value: "113",
                    text: "Genap Pendek"
                },
            ],
        }

        var tahunSelect = {
            placeholder: "2021...",
            options: [
                {
                    value: "111",
                    text: "2022"
                },
                {
                    value: "112",
                    text: "2021"
                },
                {
                    value: "113",
                    text: "2020"
                },
            ],
        }

        var syaratSelect = {
            placeholder: "KRS",
            options: [
                {
                    value: "111",
                    text: "KRS"
                },
                {
                    value: "112",
                    text: "UTS"
                },
                {
                    value: "113",
                    text: "UAS"
                },
            ],
        }

        new TomSelect('#gasal', gasalSelect)
        new TomSelect('#tahun', tahunSelect)
        new TomSelect('#syarat', syaratSelect)
        new TomSelect('#angkatan', angkatanSelect)
        new TomSelect('#jurusan', jurusanSelect)
        new TomSelect('#kelas', kelasSelect)
        new TomSelect('#kampus', kampusSelect)

    </script>
@endsection
