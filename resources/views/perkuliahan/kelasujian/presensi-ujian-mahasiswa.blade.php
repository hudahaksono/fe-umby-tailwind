@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Daftar Absensi Ujian">
        <div class="flex flex-row mb-2">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Filter&nbsp; :</span>
                    </div>
                    <div class="mb-1 inline-flex items-center px-2 py-1">
                        <select id="jurusan" name="jurusan" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                    </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="jenis-ujian" name="jenis_ujian" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                
                
            </div>
            <div class="flex ml-auto">
                {{-- <x-button size="sm" color="blue" as-link={{ true }} href="#" class="mx-2"><i
                    data-feather="plus" width="16"></i>&nbsp;Tambah</x-button> --}}
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-black-800 border-cool-gray-400"><i data-feather="refresh-cw"
                        width="16"></i>&nbsp;Reset</x-button>
                {{-- <x-button size="sm" color="gray" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="printer"
                        width="16"></i>&nbsp;Cetak</x-button> --}}
            </div>
        </div>

{{-- priode --}}
        <div class="flex">
            <div class="flex items-center"><span class="text-gray-600 font-medium">Priode&nbsp; :</span>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="gasal" name="gasal" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
            <div class="mb-1 inline-flex items-center px-2 py-1">
                <select id="tahun" name="tahun" required
                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                </select>
            </div>
        </div>

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
                prodi: 'Manajemen',
                nama_mk: 'Study Ekskursi',
                nama_kelas: '11A UKT',
                jenis_ujian_kelas: 'UAS (1)',
                jadwal: 'Rab, 18 Jan 2023 06:00-06:59 @A-205eko',
                pes: '10',
            },
            {
                id: 2,
                prodi: 'Teknologi Hasil Pertanian',
                nama_mk: 'Praktikum Biokimia',
                nama_kelas: '11C UKT',
                jenis_ujian_kelas: 'UAS (1)',
                jadwal: 'Rab, 18 Jan 2023 07:30-08:30 @C-303',
                pes: '25',
            },
            {
                id: 3,
                prodi: 'Agroteknologi',
                nama_mk: 'Metode Ilmiah',
                nama_kelas: '11C UKT',
                jenis_ujian_kelas: 'UAS (1)',
                jadwal: 'Rab, 18 Jan 2023 07:30-09:00 @C-302',
                pes: '41',
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
                        data: 'prodi',
                        title: 'Prodi'
                    },
                    {
                        data: 'nama_mk',
                        title: 'Nama MK',
                    },
                    {
                        data: 'nama_kelas',
                        title: 'Nama Kelas'
                    },
                    {
                        data: 'jenis_ujian_kelas',
                        title: 'Jenis Ujian/Kelas'
                    },
                    {
                        data: 'jadwal',
                        title: 'Jadwal',
                    },
                    {
                        data: 'pes',
                        title: 'Pes',
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
        

        var jurusanSelect = {
            placeholder: "Jurusan...",
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

        var jenis_ujianSelect = {
            placeholder: "Jenis Ujian...",
            options: [
                {
                    value: "111",
                    text: "UAS"
                },
                {
                    value: "112",
                    text: "UAS ULANG"
                },
                {
                    value: "113",
                    text: "UTS"
                },
                {
                    value: "114",
                    text: "UTS ULANG"
                },
            ],
        }

var gasalSelect = {
 placeholder: "Gasal...",
 options:[
    {
                    value: "111",
                    text: "Gasal Genap"
                },
 ]
}

var tahunSelect = {
 placeholder: "Tahun...",
 options:[
    {
                    value: "111",
                    text: "2021/2022"
                },
 ]
}


        new TomSelect('#jurusan', jurusanSelect)
        new TomSelect('#jenis-ujian', jenis_ujianSelect)
        new TomSelect('#gasal', gasalSelect)
        new TomSelect('#tahun', tahunSelect)

    </script>
@endsection
