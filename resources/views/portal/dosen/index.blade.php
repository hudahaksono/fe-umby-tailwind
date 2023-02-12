@extends('layouts.default')
@section('title', 'Portal Dosen')

{{-- YOUR CONTENT START HERE --}}
@section('contents')
    <!-- <x-title class="text-cool-gray-800 mb-5">Dosen</x-title> -->
    <x-card title="Dosen">
        <div class="flex flex-row mb-4">
            <div class="flex">
                <div class="flex items-center"><span class="text-gray-600 font-medium">Filter&nbsp; :</span>
                    </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-jk" name="jk" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
                <div class="mb-1 inline-flex items-center px-2 py-1">
                    <select id="select-unitkerja" name="unit_kerja" required
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                    </select>
                </div>
            </div>
            <div class="flex ml-auto">
                <x-button size="sm" color="blue" as-link={{ true }}
                    href="{{ URL('/dosen/tambah') }}" class="mx-2 text-white"><i data-feather="plus"
                        width="16"></i>&nbsp;Tambah</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="refresh-cw"
                        width="16"></i>&nbsp;Reset</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="printer"
                        width="16"></i>&nbsp;Cetak</x-button>
            </div>
        </div>
        <table id="view-table" class="hover cell-border stripe order-column"></table>
    </x-card>
@endsection

{{-- JS START HERE --}}
@section('scripts')
    <script>
        const dataSet = [{
                id: 1,
                nip: '910101',
                nama: 'Sarjono',
                jenis_kelamin: 'L',
                unit_kerja: '-',
            },
            {
                id: 2,
                nip: '960204',
                nama: 'Rukinah, Dra.',
                jenis_kelamin: 'P',
                unit_kerja: 'Peternakan',
            },
            {
                id: 3,
                nip: '0001',
                nama: 'Diah Noviyana, M.Pd',
                jenis_kelamin: 'P',
                unit_kerja: 'Teknologi Hasil Pertanian',
            }
        ]

        $(document).ready(function() {
            $('#view-table').DataTable({
                data: dataSet,
                columns: [{
                        data: 'id',
                        render: (data, type, row, meta) => meta.row + meta.settings._iDisplayStart + 1,
                        title: "No."
                    },
                    {
                        data: 'nip',
                        title: 'NIP'
                    },
                    {
                        data: 'nama',
                        title: 'Nama Pegawai'
                    },
                    {
                        data: 'jenis_kelamin',
                        title: 'L/P'
                    },
                    {
                        data: 'unit_kerja',
                        title: 'Unit Kerja'
                    },
                    {
                        data: 'id',
                        title: 'Aksi',
                        // TODO: FIX THIS
                        render: (data) => {
                            const btnClass = (color = "gray") =>
                                `inline-flex items-center px-2 text-xs rounded my-2 font-medium leading-5 text-center text-white transition-colors duration-150 bg-${color}-500 border border-transparent active:bg-${color}-500 hover:bg-${color}-600 focus:outline-none focus:shadow-outline-${color} mx-1`
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

        var UnitKerjaSelect = {
            placeholder: "Pilih Unit kerja...",
            options: [{
                    value: "1111",
                    text: "S1 Psikologi"
                },
                {
                    value: "1121",
                    text: "S2 Magister Psikologi"
                },
                {
                    value: "1122",
                    text: "S2 Magister Psikologi Profesi"
                },
            ],
        }

        var JKSelect = {
            placeholder: "Pilih Jenis Kelamin...",
            options: [
                {
                    value: "L",
                    text: "Laki-laki"
                },
                {
                    value: "P",
                    text: "Perempuan"
                },
            ],
        }

        new TomSelect('#select-unitkerja', UnitKerjaSelect)

        new TomSelect('#select-jk', JKSelect)
    </script>
@endsection
