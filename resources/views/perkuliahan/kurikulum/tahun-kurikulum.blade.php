@extends('layouts.default')
@section('title', 'Tahun Kurikulum')

{{-- YOUR CONTENT START HERE --}}
@section('contents')
    <!-- <x-title class="text-cool-gray-800 mb-5">Jenis Mata Kuliah</x-title> -->
    <x-card title="Tahun Kurikulum">
        @slot('button')
        <x-button as-link={{ true }} href="#" size="sm"
                class="bg-teal-500 hover:bg-teal-400 active:bg-teal-400 focus:shadow-outline-teal ml-auto text-white"><i data-feather="info"
                    width="14"></i>&nbsp;Bantuan</x-button>
        @endslot
        <div class="flex items-center justify-center">
            <div class="w-full md:w-1/2">
            
                <table id="view-table" class="hover cell-border stripe order-column"></table>
            </div>
        </div>
        
    </x-card>

<!-- Modal toggle -->
<!-- <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="modal-edit">
  Toggle modal
</button> -->

<!-- Main modal -->
<x-modal title='Informasi Detail Tahun Kurikulum : 2021' idModel='modal-edit' size='lg' save='false'>
    @slot('body')
        <table class="w-full table-auto">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NAMA UNIT</th>
                    <th>KURIKULUM</th>
                    <th>JUMLAH MK</th>
                    <th>JUMLAH MK WAJIB</th>
                    <th>JUMLAH MK PILIHAN</th>
                    <th>JUMLAH MK PAKET</th>
                </tr>
            </thead>
            <tbody id="edit_data_show">
            </tbody>
        </table>
    @endslot
</x-modal>

@endsection

{{-- JS START HERE --}}
@section('scripts')
<script>
    const dataSet = [{
            id: 1,
            kodemk: '2021',
        },
        {
            id: 2,
            kodemk: '2017',
        },
        {
            id: 3,
            kodemk: '2016',
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
                    title: 'Tahun Kurikulum'
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
                        <a id='edit_data' href="javascript:void(0)" class="${btnClass()}"><i data-feather="list" width="16"></i></a>
                        <a id='hapus_data' href="javascript:void(0)" class="${btnClassRed()}"><i data-feather="trash" width="16"></i></a>
                        </div>
                        `
                        feather.replace()

                        return btn
                    }
                }
            ]
        })

        const dataEdit = [{
                no: 1,
                jurusan: 'Psikologi',
                kurikulum: '21-73201 Kurikulum Psikologi 2021',
                jml_mk: '87',
                jml_mk_wajib: '13',
                jml_mk_pilihan: '74',
                jml_mk_paket: '7',
                lulus: '',
                mk_pilih: ''
            },
            {
                no: 2,
                jurusan: 'Akuntansi',
                kurikulum: '21-62201 Kurikulum Akuntansi 2021',
                jml_mk: '69',
                jml_mk_wajib: '68',
                jml_mk_pilihan: '1',
                jml_mk_paket: '13',
                lulus: '0',
                mk_pilih: 'Semua'
            }]
        setDataEdit(dataEdit);
        function setDataEdit(data){
            html_edit='';
            const inputClass = (width = "60px") => `block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4`
            $.each(data, function(key, value) {
                console.log(new Date(value.uas))
                html_edit += '<tr>' +
                    '<td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">' + value.no + '</td>' +
                    '<td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">' + value.jurusan + '</td>' +
                    '<td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">' + value.kurikulum + '</td>' +
                    '<td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">' + value.jml_mk + '</td>' +
                    '<td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">' + value.jml_mk_wajib + '</td>' +
                    '<td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">' + value.jml_mk_pilihan + '</td>' +
                    '<td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">' + value.jml_mk_paket + '</td>' +
                    '</tr>'
            })
            $('#edit_data_show').html(html_edit);
        }

        $('body').on('click', '#edit_data', function (e) {
            var $row = $(this).closest("tr");
            var data = $('#view-table').DataTable().row($row).data();
            var id = data['id'];

            toggleModal('modal-edit');
            // $('#modal-edit').attr('role', "dialog");
        });

        function toggleModal(modalID){
            $('#modal-edit').attr('role', "dialog");
            $('#modal-edit').addClass('flex');
            $('#modal-edit').removeClass('hidden');
        }

        function toggleModalCancel(modalID){
            $('#modal-edit').addClass('hidden');
            $('#modal-edit').removeClass('flex');
        }

        $('#cancel-modal-edit,#x-modal-edit').click(function(event) {
            toggleModalCancel('modal-edit');
        });
    })
</script>
@endsection