@extends('layouts.default')
@section('title', 'Setting H2H')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Setting H2H">
        <div class="flex flex-row mb-2">
            <div class="flex ml-auto">
                {{-- <x-button size="sm" color="blue" as-link={{ true }} href="#" class="mx-2 text-white"><i
                    data-feather="plus" width="16"></i>&nbsp;Tambah</x-button>
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="refresh-cw"
                        width="16"></i>&nbsp;Reset</x-button> --}}
                <x-button size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="edit-2"
                        width="16"></i>&nbsp;Ubah</x-button>
            </div>
        </div>

<table>

</table>

        <div class="flex flex-row mb-2">
            <div class="w-full">
                <table id="mahasiswa-table" class="hover cell-border stripe  order-column">
                </table>
            </div>
        </div>

<table class="table">
    <br>
    <thead>
        <tr>
           <th colspan="2" style="text-align:left">Setting Global</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="left_column" width="18%">Batas Revesal</td>
            <td>30 Detik</td>
        </tr>
        <tr>
            <td class="left_column">Batas Rekonsiliasi</td>
            <td>30 Detik</td>
        </tr>
    </tbody>
</table>

<br>
<table class="table table-striped">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left"> Setting Per Jenis Tagihan</th>
        </tr>
        <tr class="sub-header">
            <th>Jenis Tagihan</th>
            <th>Periode</th>
            <th>Inquiry</th>
            <th>Payment</th>
            <th>Revesal</th>
        </tr>
    </thead>
</table>

    </x-card>
@endsection

{{-- @section('scripts')
    <script>
        const dataSet = [{
                id: 1,
                kode_bank: '002',
                nama_bank: 'BRI',
            },
            {
                id: 2,
                kode_bank: '112',
                nama_bank: 'BPD DIY',
            },
            {
                id: 3,
                kode_bank: '',
                nama_bank: '',
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
                        data: 'kode_bank',
                        title: 'Kode Bank',
                        render :  function (d) {
                            return "<a href='#' style='color: #08c'>"+d+"</a>";
                        }

                    },
                    {
                        data: 'nama_bank',
                        title: 'Nama Bank',
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

       
        
    </script>
@endsection --}}
