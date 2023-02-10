@extends('layouts.default')
@section('title', 'Setting Per Unit')

{{-- YOUR CONTENT START HERE --}}
@section('contents')
    <x-card title="Setting Aktivitas Jurusan">
        @slot('button')
            <x-button as-link={{true}} href="#" size="sm" class="bg-teal-500 hover:bg-teal-400 active:bg-teal-400 focus:shadow-outline-teal ml-auto"><i
                    data-feather="info" width="14"></i>&nbsp;Bantuan</x-button>
        @endslot
        <x-card>
            <div class="grid justify-items-end my-2 ">
                <div class="float-right">
                    <x-button id="btn_simpan" size="sm" color="white" as-link={{ true }} href="#" class="mx-2 text-cool-gray-800 border-cool-gray-400" hidden>
                        <i data-feather="check" width="16"></i>
                        &nbsp;Simpan
                    </x-button>
                    <x-button id="btn_batal" size="sm" color="white" as-link={{ true }} href="#" class="mx-2 text-cool-gray-800 border-cool-gray-400" hidden>
                        <i data-feather="rotate-cw" width="16"></i>
                        &nbsp;Batal
                    </x-button>
                    <x-button id="btn_ubah" size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="edit"
                        width="16"></i>&nbsp;Ubah</x-button>
                </div>
            </div>
            <div class="flex flex-row justify-between my-2">
                <div class="basis-1/3 flex items-center"><span class="text-gray-600">Kelas </span>
                </div>
                <div class="basis-1 flex items-center">:</div>
                <div class="basis-2/3 flex items-center pl-2">
                    <select id="kelas" name="kelas" class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                    </select>
                </div>
                

                <div class="basis-1/3 flex items-center pl-2"><span class="text-gray-600">Periode Nilai </span>
                </div>
                <div class="basis-1 flex items-center">:</div>
                <div class="basis-2/3 flex items-center pl-2">
                    <span class="text-gray-600">Gasal 2022 </span>
                </div>
            </div>
        </x-card>
        <br>

        <div id="list_data">
            <table class="table-auto">
                <thead>
                    <tr>
                        <th rowspan="2">Jurusan</th>
                        <th>TU Jurusan</th>
                        <th colspan="4">Akhir Nilai</th>
                        <th>SKS</th>
                        <th>KRS SP</th>
                    </tr>
                    <tr>
                        <th>Isi Pengajar</th>
                        <th>UTS</th>
                        <th>UAS</th>
                        <th>UTS Susulan</th>
                        <th>UAS Susulan</th>
                        <th>Lulus</th>
                        <th>MK Pilih</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Psikologi</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">S1 Psikologi</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Ditutup</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">0</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Semua</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">S2 Magister Psikologi</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Ditutup</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">0</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Semua</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">S2 Magister Psikologi Profesi</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Ditutup</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">0</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Semua</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Ekonomi</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">S1 Akutansi</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Ditutup</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">0</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Semua</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">S1 Manajemen</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Ditutup</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">0</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Semua</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Agroindustri</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">S1 Teknologi Hasil Pertanian</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Ditutup</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">0</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Semua</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">S1 Peternakan</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Ditutup</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">0</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Semua</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">S1 Agroteknologi</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Ditutup</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">0</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Semua</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">S1 Magister Ilmu Pangan</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Ditutup</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">14 Agu 2021</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">0</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Semua</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <form id="form-input">
            <!-- <div class="w-full "> -->
                <table class="w-full table-auto">
                    <thead>
                        <tr>
                            <th rowspan="2">Jurusan</th>
                            <th>TU Jurusan</th>
                            <th colspan="4">Akhir Nilai</th>
                            <th>SKS</th>
                            <th>KRS SP</th>
                        </tr>
                        <tr>
                            <th>Isi Pengajar</th>
                            <th>UTS</th>
                            <th>UAS</th>
                            <th>UTS Susulan</th>
                            <th>UAS Susulan</th>
                            <th>Lulus</th>
                            <th>MK Pilih</th>
                        </tr>
                    </thead>
                    <tbody id="edit_data">
                    </tbody>
                </table>
            <!-- </div> -->
        </form>
    </x-card>
@endsection

{{-- JS START HERE --}}
@section('scripts')
<script>
    const dataSet = [{
            tanggal: 'PENGAJUAN CUTI',
            awal: '01 Jan 2000',
            akhir: '01 Jan 2020'
        },
        {
            tanggal: 'PENGAJUAN CUTI',
            awal: '01 Jan 2000',
            akhir: '01 Jan 2020'
        },
        {
            tanggal: 'PENGAJUAN CUTI',
            awal: '01 Jan 2000',
            akhir: '01 Jan 2020'
        },
    ]

    const dataEdit = [{
                jurusan: 'Psikologi',
                isi_pengajar: '',
                uts: '',
                uas: '',
                uts_susulan: '',
                uas_susulan: '',
                lulus: '',
                mk_pilih: ''
            },
            {
                jurusan: 'S1 Psikologi',
                isi_pengajar: 'Ditutup',
                uts: '14/08/2021',
                uas: '08/14/2021',
                uts_susulan: '14 Agu 2021',
                uas_susulan: '14 Agu 2021',
                lulus: '0',
                mk_pilih: 'Semua'
            }]

    $(document).ready(function() {
        var html_edit;
        var kelasSelect = {
            options: [{
                    value: "UKT",
                    text: "UKT"
                },
                {
                    value: "SPP Tetap",
                    text: "SPP Tetap"
                }
            ],
        };
        new TomSelect('#kelas', kelasSelect);

        $('#btn_simpan').hide();
        $('#btn_batal').hide();
        $('#form-input').hide();

        $('#btn_ubah').click(function(event) {
            $('#btn_simpan').show();
            $('#btn_batal').show();
            $(this).hide();
            $('#list_data').hide();
            $('#form-input').show();
        });

        $('#btn_batal').click(function(event) {
            $('#btn_simpan').hide();
            $(this).hide();
            $('#btn_ubah').show();

            $('#list_data').show();
            $('#form-input').hide();
        });

        setDataEdit(dataEdit);
        function setDataEdit(data){
            html_edit='';
            const inputClass = (width = "60px") => `block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4`
            $.each(data, function(key, value) {
                console.log(new Date(value.uas))
                html_edit += '<tr>' +
                    '<td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">' + value.jurusan + '</td>' +
                    '<td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">' + value.isi_pengajar + '</td>' +
                    '<td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400" ><input datepicker datepicker-autohide type="text" value="' + value.uts + `" name="uts" class="${inputClass()}">` + '</td>' +
                    '<td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400" ><input type="text" value="' + value.uas + `" name="uas" class="${inputClass()}">` + '</td>' +
                    '<td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400" ><input type="text" value="' + value.uts_susulan + `" name="uts_susulan" class="${inputClass()}">` + '</td>' +
                    '<td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400" ><input type="text" value="' + value.uas_susulan + `" name="uas_susulan" class="${inputClass()}">` + '</td>' +
                    '<td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400" style="width:10%;"><input type="text" value="' + value.lulus + `" name="lulus" class="${inputClass()}">` + '</td>' +
                    '<td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">' + value.mk_pilih + '</td>' +
                    '<td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400" style="width:10%;"><input type="date" value="' + new Date(value.uas) + `" name="lulus" class="${inputClass()}">` + '</td>' +
                    '</tr>'
            })
            $('#edit_data').html(html_edit);
        }
        
    });
</script>
@endsection