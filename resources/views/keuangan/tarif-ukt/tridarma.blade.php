@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Tarif Uang Tridarma">
        <div class="flex flex-row">
            <!-- <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Periode&nbsp; :</span>
                    </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-semester" name="ststus_mhs" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-tahun" name="ststus_mhs" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                
            </div> -->
            
            <div class="flex ml-auto">
                <x-button size="sm" color="blue" as-link={{ true }} href="#" class="mx-2 text-white"><i
                    data-feather="plus" width="16"></i>&nbsp;Tambah</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="refresh-cw"
                        width="16"></i>&nbsp;Reset</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="printer"
                        width="16"></i>&nbsp;Cetak</x-button>
            </div>
        </div>
        <x-card class="w-full mx-auto col-span-3">
            <form>
                <table cellspacing="0" cellpadding="4">
                    <tbody>
                        <tr>
                            <td>Prodi</td>
                            <td><strong>:</strong></td>
                            <td width="260px">
                                <select id="select-prodi" name="select-prodi" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                            <td>Angkatan</td>
                            <td><strong>:</strong></td>
                            <td width="100px">
                                <select id="select-angkatan1" name="select-angkatan1" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                            <td>Lulusan</td>
                            <td><strong>:</strong></td>
                            <td width="140px">
                                <select id="select-lulusan1" name="select-lulusan1" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                            <td>D.Degree</td>
                            <td><strong>:</strong></td>
                            <td width="210px">
                                <select id="select-dgree1" name="select-dgree1" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Kampus</td>
                            <td><strong>:</strong></td>
                            <td width="260px">
                                <select id="select-kampus" name="select-kampus" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                            <td>Jenis Kuliah</td>
                            <td><strong>:</strong></td>
                            <td width="90px">
                                <select id="select-jk" name="select-jk" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Salin ke</td>
                            <td><strong>:</strong></td>
                            <td width="260px">
                                <select id="select-salin" name="select-salin" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                            <td>Angkatan</td>
                            <td><strong>:</strong></td>
                            <td width="100px">
                                <select id="select-angkatan2" name="select-angkatan2" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                            <td>Lulusan</td>
                            <td><strong>:</strong></td>
                            <td width="140px">
                                <select id="select-lulusan2" name="select-lulusan2" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                            <td>D.Degree</td>
                            <td><strong>:</strong></td>
                            <td width="210px">
                                <div class="flex flex-row justify-between my-2">
                                    <select id="select-dgree2" name="select-dgree2" required
                                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                    </select>
                                    <x-button size="sm" color="blue" as-link={{ true }} href="#" class="inline-flex mx-2 text-white"><i data-feather="file" width="16"></i>&nbsp;Salin</x-button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>

        </x-card>
        <br>

        <table id="mahasiswa-table" class="hover cell-border stripe  order-column"></table>

    </x-card>
@endsection

@section('scripts')
    <script>
        const dataSet = [{
                id: 1,
                nim: '16011124',
                nama: 'RONI PARTAMA',
                history: '',
                dosen: '0',
                bim: '0',
                durasi: '',
                progres: 0,
                judul: '',
                tahap: '',
                ujian: 'Belum Terjadwal',
                unsur: 'Belum Ada',
                nilai: 'Nilai'
            },
            {
                id: 2,
                nim: '16021023',
                nama: 'WILHELMUS DENILSON WEU WODHE',
                history: '',
                dosen: '0',
                bim: '0',
                durasi: '',
                progres: 0,
                judul: '',
                tahap: '',
                ujian: 'Belum Terjadwal',
                unsur: 'Belum Ada',
                nilai: 'Nilai'
            },
            {
                id: 3,
                nim: '16021051',
                nama: 'MIFTAHUDIN ARIF',
                history: '',
                dosen: '0',
                bim: '0',
                durasi: '',
                progres: 0,
                judul: '',
                tahap: '',
                ujian: 'Belum Terjadwal',
                unsur: 'Belum Ada',
                nilai: 'Nilai'
            },
            {
                id: 4,
                nim: '16032032',
                nama: 'M MIFTAHUL FALAH',
                history: '',
                dosen: '0',
                bim: '0',
                durasi: '01-01-1970 01-01-1970',
                progres: 50,
                judul: 'Diisi mahasiswa',
                tahap: 'Proposal',
                ujian: 'Belum Terjadwal',
                unsur: 'Belum Ada',
                nilai: 'A-'
            },
        ]

        // $(document).ready(function() {
        //     $('#mahasiswa-table').DataTable({
        //         data: dataSet,
        //         columns: [{
        //                 data: 'id',
        //                 render: (data, type, row, meta) => meta.row + meta.settings._iDisplayStart + 1,
        //                 title: "No."
        //             },
        //             {
        //                 data: 'nama',
        //                 title: 'Mahasiswa',
        //                 render :  function (data, type, row, meta) {
        //                     return row.nim+'<p><a href="#">'+row.nama+'</a>';
        //                 }
        //             },
        //             {
        //                 data: 'judul',
        //                 title: 'Judul',
        //                 render: (data) => {
        //                     const btnClass = (color = "gray")  => `inline-flex items-center px-2 text-xs rounded my-2 font-medium leading-5 text-center text-white transition-colors duration-150 bg-${color}-500 border border-transparent active:bg-${color}-500 hover:bg-${color}-600 focus:outline-none focus:shadow-outline-${color} mx-1`
        //                     const btn = `
        //                     <div class="flex justify-center">
        //                     <a href="#" class="${btnClass('blue')}">Tambah Judul</a>
        //                     </div>
        //                     `
        //                     feather.replace()

        //                     return btn
        //                 }
        //             },
        //             {
        //                 data: 'history',
        //                 title: 'History',
        //                 render: (data) => {
        //                     const btnClass = (color = "gray")  => `inline-flex items-center px-2 text-xs rounded my-2 font-medium leading-5 text-center text-white transition-colors duration-150 bg-${color}-500 border border-transparent active:bg-${color}-500 hover:bg-${color}-600 focus:outline-none focus:shadow-outline-${color} mx-1`
        //                     const btn = `
        //                     <div class="flex justify-center">
        //                     <a id='edit_data' href="javascript:void(0)" class="${btnClass()}"><i data-feather="list" width="16"></i></a>
        //                     </div>
        //                     `
        //                     feather.replace()

        //                     return btn
        //                 }
        //             },
        //             {
        //                 data: 'dosen',
        //                 title: 'Dosen'
        //             },
        //             {
        //                 data: 'bim',
        //                 title: 'Σ Bim'
        //             },
        //             {
        //                 data: 'durasi',
        //                 title: 'Durasi'
        //             },
        //             {
        //                 data: 'progres',
        //                 title: 'Progres',
        //                 render: (data) => {
        //                     // return '<div class="w-full bg-gray-200 rounded-full dark:bg-gray-700"><div class="bg-green-600 text-xs font-medium text-green-100 text-center p-0.5 leading-none rounded-full" style="width: '+data+'%"> '+data+'%</div></div>';
        //                     return '<div class="flex justify-between mb-1"><span class="text-xs font-medium text-blue-700 dark:text-white">'+data+'%</span></div><div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700"><div class="bg-blue-600 h-2.5 rounded-full" style="width: '+data+'%"></div></div>';
        //                 }
        //             },
        //             {
        //                 data: 'tahap',
        //                 title: 'Tahap',
        //                 render: (data) => {
        //                     if(data){
        //                         return '<div class="flex justify-center"><span class="inline-flex items-center text-center bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">'+data+'</span></div>';
        //                     }else{
        //                         return data;
        //                     }
        //                 }
        //             },
        //             {
        //                 data: 'ujian',
        //                 title: 'Ujian',
        //                 render: (data) => {
        //                     if(data){
        //                         return '<div class="flex justify-center"><span class="inline-flex items-center text-center bg-orange-100 text-orange-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-orange-400 border border-orange-400">'+data+'</span></div>';
        //                     }else{
        //                         return data;
        //                     }
        //                 }
        //             },
        //             {
        //                 data: 'unsur',
        //                 title: 'Unsur',
        //                 render: (data) => {
        //                     if(data){
        //                         return '<div class="flex justify-center"><span class="inline-flex items-center text-center bg-orange-100 text-orange-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-orange-400 border border-orange-400">'+data+'</span></div>';
        //                     }else{
        //                         return data;
        //                     }
        //                 }
        //             },
        //             {
        //                 data: 'nilai',
        //                 title: 'Nilai',
        //                 render: (data) => {
        //                     return "<a href='#' style='color: #08c'>"+data+"</a>";
        //                 }
        //             },
                    
        //         ]
        //     })
        // })


        var select_salinSelect = {
            placeholder: "salin...",
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
                {
                    value: "114",
                    text: "Genap Pendek"
                },
            ],
        }


        var semesterSelect = {
            placeholder: "Periode...",
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
                {
                    value: "114",
                    text: "Genap Pendek"
                },
            ],
        }

        var periodethnSelect = {
            placeholder: "Tahun...",
            options: [{
                    value: "1",
                    text: "2024/2025"
                },
                {
                    value: "2",
                    text: "2023/2024"
                },
                {
                    value: "3",
                    text: "2022/2023"
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
            placeholder: "Kelas...",
            options: [
                {
                    value: "111",
                    text: "Kampus Pusat"
                },
                {
                    value: "112",
                    text: "Kampus Gejayan"
                },
            ],
        }

        var kampusSelect = {
            placeholder: "Kelas...",
            options: [
                {
                    value: "111",
                    text: "Kampus Pusat"
                },
                {
                    value: "112",
                    text: "Kampus Gejayan"
                },
            ],
        }

        var statusSelect = {
            placeholder: "Status...",
            options: [
                {
                    value: "111",
                    text: "TIDAK AKTIF"
                },
                {
                    value: "112",
                    text: "DIAJUKAN"
                },
                {
                    value: "113",
                    text: "DIKEMBALIKAN"
                },
                {
                    value: "114",
                    text: "AKTIF"
                },
                {
                    value: "115",
                    text: "LULUS"
                },
            ],
        }

        var tahapSelect = {
            placeholder: "Tahap...",
            options: [
                {
                    value: "111",
                    text: "PROPOSAL"
                },
                {
                    value: "112",
                    text: "SEMINAR"
                },
                {
                    value: "113",
                    text: "REKOMENDASI SIDANG"
                },
                {
                    value: "114",
                    text: "PENGAJUAN SIDANG"
                },
                {
                    value: "115",
                    text: "SIDANG"
                },
            ],
        }

        new TomSelect('#select-periode', semesterSelect)
        new TomSelect('#select-periode-thn', periodethnSelect)
        new TomSelect('#select-kelas-mhs', kelasSelect)
        new TomSelect('#select-kampus', kampusSelect)
        new TomSelect('#select-status', statusSelect)
        new TomSelect('#select-tahap', tahapSelect)

        new TomSelect('#select-salin', select_salinSelect)
        new TomSelect('#select-jurusan', JKSelect)


    </script>
@endsection
