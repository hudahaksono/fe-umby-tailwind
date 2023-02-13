@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Monitoring Ujian">
        <div class="flex flex-row mb-2">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Filter&nbsp; :</span>
                    </div>
                    <div class="mb-1 inline-flex items-center px-2 py-1">
                        <select id="jurusan" name="Jurusan" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                    </div>
                    <div class="mb-1 inline-flex items-center px-2 py-1">
                        <select id="kampus" name="Kampus" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                    </div>
                    <div class="mb-1 inline-flex items-center px-2 py-1">
                        <select id="mata-kuliah" name="mata_kuliah" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                    </div>
                    <div class="mb-1 inline-flex items-center px-2 py-1">
                        <select id="kelas-mahasiswa" name="kelas_mahasiswa" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                    </div>
                    <div class="mb-1 inline-flex items-center px-2 py-1">
                        <select id="hari" name="hari" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                    </div>
                    <div class="mb-1 inline-flex items-center px-2 py-1">
                        <select id="priode" name="priode" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                    </div>
                    <div class="mb-1 inline-flex items-center px-2 py-1">
                        <select id="ruang-jam" name="ruang_jam" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                    </div>
                    
                    
              
                
            </div>
            <div class="flex ml-auto">
                <x-button size="sm" color="blue" as-link={{ true }} href="#" class="mx-2"><i
                    data-feather="search" width="16"></i>&nbsp;Filter Data Kelas</x-button>
                <x-button size="sm" color="blue" as-link={{ true }} href="#"
                    class="mx-2 text-cool-black-800 border-cool-black-400"><i data-feather="refresh-cw"
                        width="16"></i>&nbsp;Reset</x-button>
                {{-- <x-button size="sm" color="gray" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="printer"
                        width="16"></i>&nbsp;Cetak</x-button> --}}
            </div>
        </div>

     

        <div class="flex flex-row mb-2">
            <div class="flex ml-auto">
                <table id="mahasiswa-table" class="hover cell-border stripe  order-column">
                </table>
            </div>
            <div class="flex ml-auto">
                
            </div>
        </div>

        

    </x-card>
@endsection

@section('scripts')
    <script>
        const dataSet = [{
                id: 1,
            
                jurusan: 'Magister Ilmu Pangan (S2) Kampus Gejayan 2146974148 Gasal (22)',
                nama_mk: 'MIP2130 (3) Metodologi Penelitian dan Statistik Ilmu Pangan',
                kelas_sistem_peserta: '12D UKT 3 Pes',
                jenis_ujian: 'UAS UTS',
                kelas_ujian_ke: '1 3Peserta',
                jadwal: 'Kamis, 05 Jan 2023 17:01 - 18:30 @ D-102',
                pengawas: '0509037001-Dr. Chatarina Lilis Suryani, S.TP., M.P.',
                lb: '',
                ba: '',
                pr: '',
            },
            {
                id: 2,
                
                jurusan: 'Magister Ilmu Pangan (S2) Kampus Gejayan 2146974153 Gasal (22)',
                nama_mk: 'MIP2131 (3) Penanganan Pasca Panen',
                kelas_sistem_peserta: '12D UKT 3 Pes',
                jenis_ujian: 'UAS UTS',
                kelas_ujian_ke: '1 3Peserta',
                jadwal: 'Jumat, 06 Jan 2023 17:01 - 18:30 @ D-102',
                pengawas: '0013126402-Prof. Dr. Ir. Dwiyati Pujimulyani, M.P.',
                lb: '',
                ba: '',
                pr: '',
            },
            {
                id: 3,
                
                jurusan: 'Magister Ilmu Pangan (S2) Kampus Gejayan 2146974150 Gasal (22)',
                nama_mk: 'MIP2132 (3) Bioteknologi Industri Pangan',
                kelas_sistem_peserta: '12D UKT 3 Pes',
                jenis_ujian: 'UAS UTS',
                kelas_ujian_ke: '1 3Peserta',
                jadwal: 'Kamis, 05 Jan 2023 19:01 - 20:30 @ D-102',
                pengawas: '0528076302-Dr. Ir. Wisnu Adi Yulianto, M.P.',
                lb: '',
                ba: '',
                pr: '',
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
                        // render :  function (d) {
                        //     return "<a href='/mahasiswa/detail/"+d+"'>"+d+"</a>";
                        // }
                    },
                    
                    
                    {
                        data: 'nama_mk',
                        title: 'Nama MK'
                    },
                    {
                        data: 'kelas_sistem_peserta',
                        title: 'Kelas Sistem Peserta',
                    },
                    {
                        data: 'jenis_ujian',
                        title: 'Jenis Ujian'
                    },
                    
                    {
                        data: 'kelas_ujian_ke',
                        title: 'Kelas Ujian Ke',
                    },
                    {
                        data: 'jadwal',
                        title: 'Jadwal',
                    },
                    {
                        data: 'pengawas',
                        title: 'Pengawas',
                    },
                    {
                        data: 'lb',
                        title: 'Lb',
                    },
                      {
                        data: 'ba',
                        title: 'BA',
                    },
                      {
                        data: 'pr',
                        title: 'Pr',
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

        var kampusSelect = {
            placeholder: "Kampus...",
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

      var mata_kuliahSelect = {
            placeholder: "Mata Kuliah...",
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

        var kelas_mahasiswaSelect = {
            placeholder: "Kelas Mahasiswa...",
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

        var hariSelect = {
            placeholder: "Hari...",
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

        var priodeSelect = {
            placeholder: "Periode...",
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

        var ruang_jamSelect = {
            placeholder: "Ruang/Jam...",
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


        new TomSelect('#jurusan', jurusanSelect)
        new TomSelect('#kampus', kampusSelect)
        new TomSelect('#mata-kuliah', mata_kuliahSelect)
        new TomSelect('#kelas-mahasiswa', kelas_mahasiswaSelect)
        new TomSelect('#hari', hariSelect)
        new TomSelect('#priode', priodeSelect)
        new TomSelect('#ruang-jam', ruang_jamSelect)

    </script>
@endsection
