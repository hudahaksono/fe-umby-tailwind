@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Jadwal Ujian Mata Kuliah">
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
                        <select id="ada-ujian" name="ada_ujian" required
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                        </select>
                    </div>
               
              
                
            </div>
            <div class="flex ml-auto">
                {{-- <x-button size="sm" color="blue" as-link={{ true }} href="#" class="mx-2"><i
                    data-feather="plus" width="16"></i>&nbsp;Tambah</x-button> --}}
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="refresh-cw"
                        width="16"></i>&nbsp;Reset</x-button>
                {{-- <x-button size="sm" color="gray" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="printer"
                        width="16"></i>&nbsp;Cetak</x-button> --}}
            </div>
        </div>

        

        <div class="flex flex-row mb-2">
            <div class="w-full">
                <table id="mahasiswa-table" class="hover cell-border stripe  order-column">
                </table>
            </div>
            {{-- <div class="w-full md:w-1/3 ml-4">
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
            </div> --}}
        </div>

    </x-card>
@endsection

@section('scripts')
    <script>
        const dataSet = [{
                id: 1,
            
                jurusan: 'Magister Ilmu Pangan',
                nama_mk: 'Metodologi Penelitian dan Statistik Ilmu Pangan	',
                kelas: '12D',
                pes: '3',
                jenis_ujian: 'UAS (1), UTS (1)',
            
            },
            {
                id: 2,
                
                jurusan: 'Magister Ilmu Pangan',
                nama_mk: 'Penanganan Pasca Panen',
                kelas: '12D',
                pes: '3',
                jenis_ujian: 'UAS (1), UTS (1)',
            
            },
            {
                id: 3,
                
                jurusan: 'Magister Ilmu Pangan',
                nama_mk: 'Bioteknologi Industri Pangan',
                kelas: '12D',
                pes: '3',
                jenis_ujian: 'UAS (1), UTS (1)',
            
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
                        data: 'kelas',
                        title: 'Kelas'
                    },
                    
                    {
                        data: 'pes',
                        title: 'Pes.',
                    },
                    {
                        data: 'jenis_ujian',
                        title: 'Jenis Ujian (Kelas Ujian Ke)',
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
        

       

       

        var JurusanSelect = {
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
        var ada_ujianSelect = {
            placeholder: "Ada Ujian...",
            options: [
                {
                    value: "111",
                    text: "Belum Ada Ujian"
                },
                {
                    value: "112",
                    text: "Ada Ujian"
                },
            ],
            }
      

        new TomSelect('#jurusan', JurusanSelect)
        new TomSelect('#ada-ujian', ada_ujianSelect)
        
    </script>
@endsection
