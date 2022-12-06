@extends('layouts.default')
@section('title', 'Jenis Mata Kuliah')

{{-- YOUR CONTENT START HERE --}}
@section('contents')
    <x-title class="text-cool-gray-800 mb-5">Jenis Mata Kuliah</x-title>
    <x-card>
        <div class="flex mb-4">
            <x-button size="sm" color="blue" as-link={{ true }} href="{{ URL('/perkuliahan/jenis-mata-kuliah/tambah') }}" class="mx-2"><i
                    data-feather="plus" width="16"></i>&nbsp;Tambah</x-button>
            <x-button size="sm" color="white" as-link={{ true }} href="#"
                class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="refresh-cw"
                    width="16"></i>&nbsp;Reset</x-button>
        </div>
        <table id="view-table" class="hover cell-border stripe order-column"></table>
    </x-card>
@endsection

{{-- JS START HERE --}}
@section('scripts')
<script>
    const dataSet = [{
            id: 1,
            kodemk: '1111',
            nama: 'MPK',
            urutan: 0,
            keterangan: "Matakuliah Pengembangan Kepribadian",
        },
        {
            id: 1,
            kodemk: '1121',
            nama: 'MKK',
            urutan: 0,
            keterangan: "Matakuliah Keilmuan Ketrampilan",
        },
        {
            id: 1,
            kodemk: '1122',
            nama: 'MKKB',
            urutan: 0,
            keterangan: "Matakuliah Keilmuan KB",
        },
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
                    data: 'kodemk',
                    title: 'Kode Jenis MK'
                },
                {
                    data: 'nama',
                    title: 'Nama Jenis Matakuliah'
                },
                {
                    data: 'urutan',
                    title: 'Urutan'
                },
                {
                    data: 'keterangan',
                    title: 'Keterangan'
                },
                {
                    data: 'id',
                    title: 'Aksi',
                    // TODO: FIX THIS
                    render: (data) => {
                        const btnClass = (color = "gray")  => `inline-flex items-center px-2 text-xs rounded my-2 font-medium leading-5 text-center text-white transition-colors duration-150 bg-${color}-500 border border-transparent active:bg-${color}-500 hover:bg-${color}-600 focus:outline-none focus:shadow-outline-${color} mx-1`
                        const btn = `
                        <div class="flex justify-center">
                        <a href="#" class="${btnClass()}"><i data-feather="edit" width="16"></i></a>
                        <a href="#" class="${btnClass("red")}"><i data-feather="trash" width="16"></i></a>
                        </div>
                        `
                        feather.replace()

                        return btn
                    }
                }
            ]
        })
    })
</script>
@endsection