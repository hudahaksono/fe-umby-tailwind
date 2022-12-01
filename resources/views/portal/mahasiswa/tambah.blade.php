@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')

    <div class="grid grid-cols-4 w-full gap-4">
        <x-card>
            <x-title level="4">Aksi Cepat</x-title>
            <hr>
            <ul>
                <li>Detail Mahasiswa</li>
                <li>Detail Mahasiswa</li>
                <li>Detail Mahasiswa</li>
                <li>Detail Mahasiswa</li>
                <li>Detail Mahasiswa</li>
                <li>Detail Mahasiswa</li>
                <li>Detail Mahasiswa</li>
            </ul>
        </x-card>
        <x-card class="w-full mx-auto col-span-3 px-12">
            <x-title level="4" class="text-center">Detail Mahasiswa</x-title>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <label class="block col-span-1 md:col-span-2">
                    <span class="text-gray-600">NIM</span>
                    <input type="text" name="nim"
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input"
                        placeholder="Nim Mahasiswa...">
                </label>

                <label class="block">
                    <span class="text-gray-600">Nama</span>
                    <input type="text" name="nama"
                        class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input"
                        placeholder="Nama Mahasiswa...">
                </label>

                <label class="block">
                    <span class="text-gray-600">Fakultas</span>
                    <select id="select-fakultas" name="fakultas" class="pt-2">
                    </select>
                </label>

                <label class="block">
                    <span class="text-gray-600">Kampus</span>
                    <select id="select-kampus" name="kampus" class="pt-2">
                    </select>
                </label>

                <div class="flex justify-between">
                    <label class="w-3/4">
                        <span class="text-gray-600">Periode Masuk</span>
                        <select id="select-periode-semester" name="semester-masuk" class="pt-2">
                        </select>
                    </label>
                    <label class="w-1/4">
                        <span class="text-gray-600">&nbsp;</span>
                        <select id="select-tahun-masuk" name="periode-masuk" class="pt-2">
                        </select>
                    </label>
                </div>

                <label class="block">
                    <span class="text-gray-600">Kelas</span>
                    <select id="select-kelas" name="kelas" class="pt-2">
                    </select>
                </label>

                <label class="block">
                    <span class="text-gray-600">Jenis Kuliah</span>
                    <select id="select-jenis-kuliah" name="jenis-kuliah" class="pt-2">
                    </select>
                </label>

                <label class="block md:col-span-2">
                    <span class="text-gray-600">Angsuran Pangkal (UKT)</span>
                    <input type="text" name="nama"
                        class="block w-1/3 mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded form-input" placeholder="...">
                </label>
            </div>
        </x-card>
    </div>
@stop

@section('scripts')
    <script>
        var fakultasSetting = {
            placeholder: "Pilih Fakultas...",
            options: [{
                    value: "psikologi",
                    text: "Psikologi"
                },
                {
                    value: "ekonomi",
                    text: "Ekonomi"
                },
            ],
        }

        new TomSelect('#select-fakultas', fakultasSetting)

        var kampusSetting = {
            placeholder: "Pilih Kampus...",
            options: [{
                    value: "pusat",
                    text: "Kampus Pusat"
                },
                {
                    value: "gejayan",
                    text: "Kampus Gejayan"
                },
                {
                    value: "gejayan_ring_road",
                    text: "Kampus Gejayan Ring Road"
                },
            ],
        }
        new TomSelect('#select-kampus', kampusSetting)

        var periodeSemesterSetting = {
            placeholder: "Pilih Semester Masuk...",
            options: [{
                    value: "gasal",
                    text: "Semester Gasal"
                },
                {
                    value: "gasal_pendek",
                    text: "Semester Gasal Pendek"
                },
                {
                    value: "genap",
                    text: "Semester Genap"
                },
                {
                    value: "genap_pendek",
                    text: "Semester Genap Pendek"
                },
            ],
        }
        new TomSelect('#select-periode-semester', periodeSemesterSetting)

        var tahunMasukSetting = {
            placeholder: "Tahun Masuk...",
            options: [{
                    value: "2022",
                    text: "2022"
                },
                {
                    value: "2023",
                    text: "2023"
                },
            ],
        }
        new TomSelect('#select-tahun-masuk', tahunMasukSetting)

        var kelasSetting = {
            placeholder: "Pilih Kelas...",
            options: [{
                    value: "ukt",
                    text: "UKT"
                },
                {
                    value: "spp",
                    text: "SPP Tetap"
                },
            ],
        }
        new TomSelect('#select-kelas', kelasSetting)

        var jenisKuliahSetting = {
            placeholder: "Pilih Jenis Kuliah...",
            options: [{
                    value: "r1",
                    text: "Reguler Pagi [R1]"
                },
                {
                    value: "r2",
                    text: "Reguler Malam [R2]"
                },
                {
                    value: "r3",
                    text: "Kelas Karyawan [R3]"
                },
            ],
        }
        new TomSelect('#select-jenis-kuliah', jenisKuliahSetting)
    </script>
@endsection
