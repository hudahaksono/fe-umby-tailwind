@extends('layouts.default')
@section('title', 'Setting Global')

{{-- YOUR CONTENT START HERE --}}
@section('contents')
    <x-card title="Setting Global">
        @slot('button')
            <x-button as-link={{true}} href="#" size="sm" class="bg-teal-500 hover:bg-teal-400 active:bg-teal-400 focus:shadow-outline-teal ml-auto"><i
                    data-feather="info" width="14"></i>&nbsp;Bantuan</x-button>
        @endslot
        <div id="list_data">
            <div class="grid justify-items-end my-2 ">
                <x-button id="btn_ubah" size="sm" color="white" as-link={{ true }} href="#"
                    class="mx-2 text-cool-gray-800 border-cool-gray-400"><i data-feather="edit"
                        width="16"></i>&nbsp;Ubah</x-button>
            </div>
            <table class="table-auto">
                <thead>
                    <tr>
                        <th colspan="3">Setting Global</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Kurikulum Berlaku</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">:</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">2021</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Periode Semester</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">:</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Gasal 2022/2023</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Periode Smt Pendek</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">:</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Genap Pendek 2019/2020</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Periode KRS TA</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">:</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Gasal 2022/2023</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Periode Nilai</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">:</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Gasal 2022/2023</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Batas SKS Default</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">:</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">18</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Nilai Default</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">:</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">B (3.00)</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">Pesan Pengesahan Nilai</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">:</td>
                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        

        <form id="form-input">
            <!-- <div class="grid justify-items-end my-2 ">
                <div class="float-right">
                    <x-button id="btn_simpan" size="sm" color="white" as-link={{ true }} href="#" class="mx-2 text-cool-gray-800 border-cool-gray-400">
                        <i data-feather="check" width="16"></i>
                        &nbsp;Simpan
                    </x-button>
                    <x-button id="btn_batal" size="sm" color="white" as-link={{ true }} href="#" class="mx-2 text-cool-gray-800 border-cool-gray-400">
                        <i data-feather="rotate-cw" width="16"></i>
                        &nbsp;Batal
                    </x-button>
                </div>

            </div> -->
            <div class="w-full md:w-1/2">
                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Kurikulum Berlaku <span
                                class="text-red-600">*</span></span>
                    </div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <!-- <input type="text" name="kurikulum"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4"
                            placeholder="Kurikulum Berlaku.."> -->
                        <select id="select-kurikulum" name="s_kurikulum"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                        </select>
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Periode Semester <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <!-- <input type="text" name="periode_semester"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4"
                            placeholder="Periode Semester.."> -->
                        <select id="select-semester" name="s_semester"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                        </select>
                        <select id="select-semester-thn" name="s_semester_thn"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                        </select>
                    </div>
                </div>

                <hr />


                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Periode Smt Pendek <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <select id="select-smt-pendek" name="s_smt_pendek"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                        </select>
                        <select id="select-smt-pendek-thn" name="s_smt_pendek_thn"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                        </select>
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Periode KRS TA <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <select id="select-periode-krs" name="s_periode_krs"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                        </select>
                        <select id="select-periode-krs-thn" name="s_periode_krs_thn"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                        </select>
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Periode Nilai <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <select id="select-periode-nilai" name="s_periode_nilai"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                        </select>
                        <select id="select-periode-nilai-thn" name="s_periode_nilai_thn"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                        </select>
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Batas SKS Default <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <input type="text" name="batas_sks"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4"
                            placeholder="Batas SKS Default..">
                    </div>
                </div>

                <hr />

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Nilai Default <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <select id="select-nilai-def" name="s_nilai_def"
                            class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                        </select>
                    </div>
                </div>

                <div class="flex flex-row justify-between my-2">
                    <div class="basis-1/3 flex items-center"><span class="text-gray-600">Nilai Default <span
                                class="text-red-600">*</span></span></div>
                    <div class="basis-1 flex items-center">:</div>
                    <div class="basis-2/3 flex items-center">
                        <textarea id="pesan_pengesahan" class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input ml-4"
                            rows="3"></textarea>
                    </div>
                </div>

                <p class="text-gray-400 italic my-4 text-sm">Kolom dengan tanda <span class="text-red-600">*</span> wajib
                    diisi.</p>


                <div class="mt-4">
                    <x-button id="btn_kembali" as-link={{ true }} href="javascript:;"
                        class="bg-gray-500 hover:bg-gray-400 active:bg-gray-400">Kembali</x-button>
                    <x-button type="submit">Simpan</x-button>
                </div>


            </div>

        </form>
    </x-card>
@endsection

{{-- JS START HERE --}}
@section('scripts')
<script>
    $(document).ready(function() {
        var KurikulumSelect = {
            placeholder: "Pilih Kurikulum...",
            options: [{
                    value: "2021",
                    text: "2021"
                },
                {
                    value: "2020",
                    text: "2022"
                },
                {
                    value: "2019",
                    text: "2023"
                },
                {
                    value: "2018",
                    text: "2018"
                },
            ],
        }

        new TomSelect('#select-kurikulum', KurikulumSelect)

        $('#form-input').hide();

        $('#btn_ubah').click(function(event) {
            $('#list_data').hide();
            $('#form-input').show();
        });

        $('#btn_batal, #btn_kembali').click(function(event) {
            $('#list_data').show();
            $('#form-input').hide();
        });
    });
</script>
@endsection