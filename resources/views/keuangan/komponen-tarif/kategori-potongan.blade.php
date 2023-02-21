@extends('layouts.default')
@section('title', 'Jenis Mata Kuliah')

{{-- YOUR CONTENT START HERE --}}
@section('contents')
    <!-- <x-title class="text-cool-gray-800 mb-5">Jenis Mata Kuliah</x-title> -->
    <x-card title="Kategori Potongan">
        @slot('button')
        <!-- <div class="flex flex-row mb-4"> -->
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
        <!-- </div> -->
        @endslot
        <table id="view-table" class="hover cell-border stripe order-column"></table>
    </x-card>
@endsection

{{-- JS START HERE --}}
@section('scripts')
<script>
    const dataSet = [{
            id: 1,
            kode_kategori: '123',
            nama_kategori: '123',
            syarat: '',
        },
        {
            id: 2,
            kode_kategori: '2',
            nama_kategori: 'Potongan fasilitas 700000',
            syarat: '',
        },
        {
            id: 3,
            kode_kategori: '3',
            nama_kategori: 'potongan fasilitas 1,000,000',
            syarat: '',
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
                    data: 'kode_kategori',
                    title: 'Kode Kategori',
                },
                {
                    data: 'nama_kategori',
                    title: 'Nama Kategoriif'
                },
                {
                    data: 'syarat',
                    title: 'Syarat'
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
                        <a id='edit_data' href="javascript:void(0)" class="${btnClass()}"><i data-feather="edit" width="16"></i></a>
                        <a id='hapus_data' href="javascript:void(0)" class="${btnClassRed()}"><i data-feather="trash" width="16"></i></a>
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