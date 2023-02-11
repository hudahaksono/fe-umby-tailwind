@extends('layouts.default')
@section('title', 'Setting Per Kelas')

{{-- YOUR CONTENT START HERE --}}
@section('contents')
    <x-card title="Setting Per Kelas">
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
                
                <div class="basis-1/3 flex items-center pl-2"><span class="text-gray-600">Periode KRS </span>
                </div>
                <div class="basis-1 flex items-center">:</div>
                <div class="basis-2/3 flex items-center pl-2">
                    <span class="text-gray-600">Gasal 2022 </span>
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
                        <th colspan="4">Setting Per Kelas Perkuliahan</th>
                    </tr>
                    <tr>
                        <th colspan="2">Tanggal</th>
                        <th>Awal</th>
                        <th>Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">PENGAJUAN CUTI</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">:</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">01 Jan 2000</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">01 Jan 2020</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">KULIAH</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">:</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">12 Sep 2022</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">31 Des 2022</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">UTS</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">:</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">31 Okt 2022</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">12 Nov 2022</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">UAS</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">:</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">04 Jan 2023</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">18 Jan 2023</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">UTS SUSULAN</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">:</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">05 Mei 2019</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">01 Jun 2019</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">UAS SUSULAN</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">:</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">28 Jul 2019</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">01 Agu 2019</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">PENGUMUMAN NILAI UTS</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">:</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">31 Okt 2022</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">31 Jan 2023</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">PENGUMUMAN NILAI UAS</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">:</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">04 Jan 2023</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">31 Jan 2023</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">KOREKSI NILAI</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">:</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">01 Okt 2022</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">31 Jan 2023</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">UPLOAD SOAL</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">:</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">05 Mar 2019</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">20 Apr 2019</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">MINIMAL KEHADIRAN</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">:</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">0 %</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <form id="form-input">
            <div class="w-full md:w-1/2">
                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">PENGAJUAN CUTI <span
                                class="text-red-600">*</span></span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    

                    <div date-rangepicker datepicker-autohide datepicker-format='dd M yyyy' class="basis-2/3 flex items-center">
                    <x-datepicker range={{true}} class='ml-4' name="pengajuan_cuti">

                    </x-datepicker>
                      <!-- <div class="relative ml-4">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </div>
                            <input name="pengajuan_cuti_start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                        </div>
                        <span class="mx-4 text-gray-500">to</span>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input name="pengajuan_cuti_end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                        </div> -->
                    </div>

                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">KULIAH <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div date-rangepicker datepicker-autohide datepicker-format='dd M yyyy' class="basis-2/3 flex items-center">
                        <x-datepicker range={{true}} class='ml-4' name="kuliah">
                        </x-datepicker>
                        <!-- <input type="text" name="kuliah"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4"
                            placeholder="KULIAH.."> -->
                    </div>
                </div>

                <hr />


                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">UTS <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div date-rangepicker datepicker-autohide datepicker-format='dd M yyyy' class="basis-2/3 flex items-center">
                        <x-datepicker range={{true}} class='ml-4' name="uts">
                        </x-datepicker>
                        <!-- <input type="text" name="uts"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4"
                            placeholder="UTS.."> -->
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">UAS <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div date-rangepicker datepicker-autohide datepicker-format='dd M yyyy' class="basis-2/3 flex items-center">
                        <x-datepicker range={{true}} class='ml-4' name="uas">
                        </x-datepicker>
                        
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">UTS SUSULAN <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div date-rangepicker datepicker-autohide datepicker-format='dd M yyyy' class="basis-2/3 flex items-center">
                        <x-datepicker range={{true}} class='ml-4' name="uts_susulan">
                        </x-datepicker>
                        
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">UAS SUSULAN <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div date-rangepicker datepicker-autohide datepicker-format='dd M yyyy' class="basis-2/3 flex items-center">
                        <x-datepicker range={{true}} class='ml-4' name="uas_susulan">
                        </x-datepicker>
                        
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">PENGUMUMAN NILAI UTS <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div date-rangepicker datepicker-autohide datepicker-format='dd M yyyy' class="basis-2/3 flex items-center">
                        <x-datepicker range={{true}} class='ml-4' name="pengumuman_nilai_uts">
                        </x-datepicker>
                        
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">PENGUMUMAN NILAI UAS <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div date-rangepicker datepicker-autohide datepicker-format='dd M yyyy' class="basis-2/3 flex items-center">
                        <x-datepicker range={{true}} class='ml-4' name="pengumuman_nilai_uas">
                        </x-datepicker>
                        
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">KOREKSI NILAI <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div date-rangepicker datepicker-autohide datepicker-format='dd M yyyy' class="basis-2/3 flex items-center">
                        <x-datepicker range={{true}} class='ml-4' name="koreksi_nilai">
                        </x-datepicker>
                        
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">UPLOAD SOAL <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div date-rangepicker datepicker-autohide datepicker-format='dd M yyyy' class="basis-2/3 flex items-center">
                        <x-datepicker range={{true}} class='ml-4' name="upload_soal">
                        </x-datepicker>
                        
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">MINIMAL KEHADIRAN <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <input type="text" name="minimal_kehadiran"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4"
                            placeholder="MINIMAL KEHADIRAN..">
                    </div>
                </div>

                <p class="text-gray-400 italic my-4 text-sm">Kolom dengan tanda <span class="text-red-600">*</span> wajib diisi.</p>

            </div>
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

    $(document).ready(function() {
        // $('#setting-table').DataTable({
        //     data: dataSet,
        //     columns: [
        //         {
        //             data: 'tanggal',
        //             title: 'Tanggal'
        //         },
        //         {
        //             data: 'awal',
        //             title: 'Awal'
        //         },
        //         {
        //             data: 'akhir',
        //             title: 'Akhir'
        //         }
        //     ]
        // })
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
    });
</script>
@endsection