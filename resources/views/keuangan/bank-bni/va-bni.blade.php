@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Inquiry VA BNI">
        <div class="flex flex-row mb-2">
            <div class="flex">
            </div>
            <div class="flex ml-auto">
                <x-button size="sm" color="blue" as-link={{ true }} href="#" class="mx-2 text-white"><i
                    data-feather="plus" width="16"></i>&nbsp;Tambah</x-button>
            </div>
        </div>
        <x-card class="w-full mx-auto col-span-3">
            <form>
                <td>Pencarian</td>
                <br>
                <table cellspacing="0" cellpadding="4">
                    <tbody>
                        <tr>
                            <td>(Calon) Mahasiswa</td>
                            <td><strong>:</strong></td>
                            <td width="260px">
                                <select id="select-mhs" name="select-mhs" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Prodi</td>
                            <td><strong>:</strong></td>
                            <td width="100px">
                                <select id="select-tglbyr" name="select-tglbyr" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Periode</td>
                            <td><strong>:</strong></td>
                            <td width="260px">
                                <select id="select-byr" name="select-byr" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                            
                            <td width="260px">
                                <select id="select-byr2" name="select-byr2" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Angkatan</td>
                            <td><strong>:</strong></td>
                            <td width="260px">
                                <select id="select-angkatan" name="select-angkatan" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Status Mhs</td>
                            <td><strong>:</strong></td>
                            <td width="260px">
                                <select id="select-stsmhs" name="select-stsmhs" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                        </tr>
                        <td width="210px">
                            <x-button size="sm" color="blue" as-link={{ true }} href="#" class="inline-flex mx-2 text-white"><i data-feather="search" width="16"></i>&nbsp;Cari</x-button>
                        </div>
                    </td>
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

{{-- @section('scripts')
    <script>
        const dataSet = [{
                id: 1,
                jenis:'AKHIR STUDI',
                periode: 'Gs 2022',
                ke:'1',
                nim_no:'10131026',
                nama:'CECILIA LULU TRI ASTUTI SUSMIKO',
                tanggal:'13 Sep 2022',
                tgl_bayar:'',
                sks:'0',
                jumlah:'4,000,000',
                lunas:'',
            },
            {
                id: 2,
                jenis:'BIAYA PENDAFTARAN',
                periode: 'Gs 2022',
                ke:'1',
                nim_no:'11111111',
                nama:'UMBY/ ................................',
                tanggal:'24 Mar 2022',
                tgl_bayar:'24 Mar 2022',
                sks:'0',
                jumlah:'400,000	',
                lunas:'',
            },
            {
                id: 3,
                jenis:'BIAYA PENDAFTARAN',
                periode: '',
                ke:'1',
                nim_no:'11111111',
                nama:'UMBY/ ................................',
                tanggal:'5 Des 2022	',
                tgl_bayar:'5 Des 2022',
                sks:'',
                jumlah:'250,000	',
                lunas:'',
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
                        data: 'jenis',
                        title: 'Jenis',
                    },
                    {
                        data: 'periode',
                        title: 'Periode',
                    },
                    {
                        data: 'ke',
                        title: 'Ke',
                    },
                    {
                        data: 'nim_no',
                        title: 'NIM/No',
                    },
                    {
                        data: 'nama',
                        title: 'Nama',
                    },
                    {
                        data: 'tanggal',
                        title: 'Tanggal',
                    },
                    {
                        data: 'tgl_bayar',
                        title: 'Tgl Bayar',
                    },
                    {
                        data: 'sks',
                        title: 'SKS',
                    },
                    {
                        data: 'jumlah',
                        title: 'Jumlah',
                    },
                    {
                        data: 'lunas',
                        title: 'Lunas?',
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


        var mhsSelect = {
            placeholder: "",
            options: [
                
            ],
        }
        var prodiSelect = {
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

        var periodeSelect = {
            placeholder: "Semester...",
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
            placeholder: "Tahun...",
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
            ],
        }

        var angkatanSelect = {
            placeholder: "Tahun...",
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

        var stsmhsSelect = {
            placeholder: "Tahun...",
            options: [
                {
                    value: "111",
                    text: "Aktif"
                },
                {
                    value: "112",
                    text: "Cuti"
                },
                {
                    value: "113",
                    text: "Drop Out"
                },
            ],
        }


        new TomSelect('#select-mhs', mhsSelect)
        new TomSelect('#select-prodi', prodiSelect)
        new TomSelect('#select-periode', periodeSelect)
        new TomSelect('#select-periode2', periode2Select)
        new TomSelect('#select-angkatan', angkatanSelect)
        new TomSelect('#select-stsmhs', stsmhsSelect)

    </script>
@endsection --}}