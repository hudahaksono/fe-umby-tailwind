@extends('layouts.default')

@section('title', 'Portal Home')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
@stop

@section('contents')
    <h2 class="mb-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Selamat datang, Username
    </h2>

    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
        <div class="col-span-1 md:col-span-2">
            <x-card title="Status KRS Mahasiswa Gasal 2022">
                <canvas id="krs-mahasiswa-chart"></canvas>

                {{-- chart legend --}}
                <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600">
                    <!-- Chart legend -->
                    <div class="flex items-center">
                        <span class="inline-block w-3 h-3 mr-1 bg-blue-500 rounded-full"></span>
                        <span>Mahasiswa Aktif</span>
                    </div>
                    <div class="flex items-center">
                        <span class="inline-block w-3 h-3 mr-1 bg-orange-400 rounded-full"></span>
                        <span>Mengisi KRS</span>
                    </div>
                    <div class="flex items-center">
                        <span class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"></span>
                        <span>KRS Disetujui</span>
                    </div>
                </div>
            </x-card>
        </div>

        <div>
            <x-card title="Pengajuan Status Belum Selesai">
                <canvas id="pengajuan-status-chart"></canvas>

            </x-card>
        </div>

        <div>
            <x-card title="Mahsiswa Terkena Evaluasi Semester Gasal 2022">
                <canvas id="evalusi-mahasiswa-chart"></canvas>

            </x-card>
        </div>
    </div>
@stop

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const labels = ['Fikom', 'FPSI', 'FKIP', 'FAGRO', 'FE', 'FTI']
        const krsBarConfig = {
            type: 'bar',
            data: {
                labels,
                datasets: [{
                        label: 'Mahasiswa Aktif',
                        backgroundColor: '#1c64f2',
                        borderWidth: 1,
                        data: [1356, 3690, 523, 1067, 2722, 851],
                    },
                    {
                        label: 'Mengisi KRS',
                        backgroundColor: '#ff8a4c',
                        borderWidth: 1,
                        data: [1361, 3726, 527, 1069, 2712, 850],
                    },
                    {
                        label: 'KRS Disetujui',
                        backgroundColor: '#0694a2',
                        borderWidth: 1,
                        data: [27, 777, 115, 310, 65, 91],
                    },
                ]
            },
            options: {
                responsive: true,
                legend: {
                    display: false,
                },
            },
        }

        const krsBarCtx = document.getElementById('krs-mahasiswa-chart')
        window.krsBarCtx = new Chart(krsBarCtx, krsBarConfig)

        const pengajuanBarConfig = {
            type: 'bar',
            data: {
                labels,
                datasets: [{
                        label: 'Belum Disetujui',
                        backgroundColor: '#1c64f2',
                        borderWidth: 1,
                        data: [12, 42, 23, 231, 111, 51],
                    },
                    {
                        label: 'Disetujui Kajur',
                        backgroundColor: '#ff8a4c',
                        borderWidth: 1,
                        data: [12, 56, 24, 55, 21, 51],
                    },
                    {
                        label: 'Diketahui Keuangan',
                        backgroundColor: '#0694a2',
                        borderWidth: 1,
                        data: [12, 66, 67, 55, 45, 51],
                    },
                ]
            },
            options: {
                responsive: true,
                legend: {
                    display: false,
                },
            },
        }

        const pengajuanBarCtx = document.getElementById('pengajuan-status-chart')
        window.pengajuanBarCtx = new Chart(pengajuanBarCtx, pengajuanBarConfig)

        const evalBarConfig = {
            type: 'bar',
            data: {
                labels,
                datasets: [{
                        label: 'Mendekati Evaluasi',
                        backgroundColor: '#faca15',
                        borderWidth: 1,
                        data: [1, 7, 5, 0, 4, 4],
                    },
                    {
                        label: 'Bisa Terkena Evaluasi',
                        backgroundColor: '#ff8a4c',
                        borderWidth: 1,
                        data: [5, 5, 6, 0, 2, 2],
                    },
                    {
                        label: 'Terkena Evaluasi',
                        backgroundColor: '#f05252',
                        borderWidth: 1,
                        data: [6, 1, 17, 0, 6, 2],
                    },
                ]
            },
            options: {
                responsive: true,
                legend: {
                    display: false,
                },
            },
        }

        const evalBarCtx = document.getElementById('evalusi-mahasiswa-chart')
        window.evalBarCtx = new Chart(evalBarCtx, evalBarConfig)
    </script>
@stop
