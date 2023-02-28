@extends('layouts.default')

@section('title', 'Portal Home')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/highcharts/css/highcharts.css') }}" />

    <style>
        .highcharts-figure,
        .highcharts-data-table table {
            min-width: 310px;
            max-width: 800px;
            margin: 1em auto;
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #ebebeb;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }

        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }

        .highcharts-data-table td,
        .highcharts-data-table th,
        .highcharts-data-table caption {
            padding: 0.5em;
        }

        .highcharts-data-table thead tr,
        .highcharts-data-table tr:nth-child(even) {
            background: #f8f8f8;
        }

        .highcharts-data-table tr:hover {
            background: #f1f7ff;
        }

        .highcharts-yaxis .highcharts-axis-line {
            stroke-width: 2px;
        }

        /* Link the series colors to axis colors */
        .highcharts-color-0 {
            fill: #7cb5ec;
            stroke: #7cb5ec;
        }

        .highcharts-axis.highcharts-color-0 .highcharts-axis-line {
            stroke: #7cb5ec;
        }

        .highcharts-axis.highcharts-color-0 text {
            fill: #7cb5ec;
        }

        .highcharts-color-1 {
            fill: #90ed7d;
            stroke: #90ed7d;
        }

        .highcharts-axis.highcharts-color-1 .highcharts-axis-line {
            stroke: #90ed7d;
        }

        .highcharts-axis.highcharts-color-1 text {
            fill: #90ed7d;
        }
    </style>
@stop

@section('contents')
    <h2 class="mb-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Selamat datang, Username
    </h2>

    {{-- TODO: ADD FILTER --}}

    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
        <div class="col-span-1 md:col-span-2">
            <!-- <x-card title="Status KRS Mahasiswa Gasal 2022">
                <canvas id="krs-mahasiswa-chart"></canvas>

                
                <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600">
                    
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
            </x-card> -->
            <x-card>
                <div id="krs-mahasiswa-chart"></div>
            </x-card>
        </div>

        <div>
            <!-- <x-card title="Pengajuan Status Belum Selesai">
                <canvas id="pengajuan-status-chart"></canvas>

            </x-card> -->
            <x-card>
                <div id="pengajuan-status-chart"></div>
            </x-card>
        </div>

        <div>
            <x-card>
                <div id="evalusi-mahasiswa-chart"></div>

            </x-card>
        </div>

        <!-- <div>
            <x-card>
                <figure class="highcharts-figure">
                    <div id="evalusi-hc"></div>
                </figure>
            </x-card>
        </div> -->

        <!-- <div>
            <x-card>
                <div id="chart4"></div>
            </x-card>
        </div> -->
        
    </div>
@stop

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assets/highcharts/js/highcharts.js') }}"></script>
    <script src="{{ asset('assets/highcharts/js/exporting.js') }}"></script>
    <script src="{{ asset('assets/highcharts/js/export-data.js') }}"></script>
    <script src="{{ asset('assets/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
    <script>
        const labels = ['Fikom', 'FPSI', 'FKIP', 'FAGRO', 'FE', 'FTI']
        // const krsBarConfig = {
        //     type: 'bar',
        //     data: {
        //         labels,
        //         datasets: [{
        //                 label: 'Mahasiswa Aktif',
        //                 backgroundColor: '#1c64f2',
        //                 borderWidth: 1,
        //                 data: [1356, 3690, 523, 1067, 2722, 851],
        //             },
        //             {
        //                 label: 'Mengisi KRS',
        //                 backgroundColor: '#ff8a4c',
        //                 borderWidth: 1,
        //                 data: [1361, 3726, 527, 1069, 2712, 850],
        //             },
        //             {
        //                 label: 'KRS Disetujui',
        //                 backgroundColor: '#0694a2',
        //                 borderWidth: 1,
        //                 data: [27, 777, 115, 310, 65, 91],
        //             },
        //         ]
        //     },
        //     options: {
        //         responsive: true,
        //         legend: {
        //             display: false,
        //         },
        //     },
        // }

        // const krsBarCtx = document.getElementById('krs-mahasiswa-chart')
        // window.krsBarCtx = new Chart(krsBarCtx, krsBarConfig)

        var krsBarOptions = {
            series: [{
                name: 'Mahasiswa Aktif',
                data: [1356, 3690, 523, 1067, 2722, 851]
            }, {
                name: 'Mengisi KRS',
                data: [1361, 3726, 527, 1069, 2712, 850]
            }, {
                name: 'KRS Disetujui',
                data: [27, 777, 115, 310, 65, 91]
            }],
            chart: {
                foreColor: '#9ba7b2',
                type: 'bar',
                height: 400
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            title: {
                text: 'Status KRS Mahasiswa Gasal 2022',
                align: 'left',
                style: {
                    fontSize: '14px'
                }
            },
            colors: ["#7cb5ec", '#ffc107', '#90ed7d'],
            xaxis: {
                categories: labels,
            },
            fill: {
                opacity: 1
            },
        };

        var chart = new ApexCharts(document.querySelector("#krs-mahasiswa-chart"), krsBarOptions);
        chart.render();
        // datasets: [{
        //                 label: 'Belum Disetujui',
        //                 backgroundColor: '#1c64f2',
        //                 borderWidth: 1,
        //                 data: [12, 42, 23, 231, 111, 51],
        //             },
        //             {
        //                 label: 'Disetujui Kajur',
        //                 backgroundColor: '#ff8a4c',
        //                 borderWidth: 1,
        //                 data: [12, 56, 24, 55, 21, 51],
        //             },
        //             {
        //                 label: 'Diketahui Keuangan',
        //                 backgroundColor: '#0694a2',
        //                 borderWidth: 1,
        //                 data: [12, 66, 67, 55, 45, 51],
        //             },
        //         ]
        var statusOptions = {
            series: [{
                name: 'Belum Disetujui',
                data: [12, 42, 23, 231, 111, 51]
            }, {
                name: 'Disetujui Kajur',
                data: [12, 56, 24, 55, 21, 51]
            }, {
                name: 'Diketahui Keuangan',
                data: [12, 66, 67, 55, 45, 51]
            }],
            chart: {
                foreColor: '#9ba7b2',
                type: 'bar',
                height: 360
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            title: {
                text: 'Pengajuan Status Belum Selesai',
                align: 'left',
                style: {
                    fontSize: '14px'
                }
            },
            colors: ["#ffc107", '#90ed7d', '#7cb5ec'],
            xaxis: {
                categories: labels,
            },
            fill: {
                opacity: 1
            },
        };

        var chart = new ApexCharts(document.querySelector("#pengajuan-status-chart"), statusOptions);
        chart.render();

        // const evalBarConfig = {
        //     type: 'bar',
        //     data: {
        //         labels,
        //         datasets: [{
        //                 label: 'Mendekati Evaluasi',
        //                 backgroundColor: '#faca15',
        //                 borderWidth: 1,
        //                 data: [1, 7, 5, 0, 4, 4],
        //             },
        //             {
        //                 label: 'Bisa Terkena Evaluasi',
        //                 backgroundColor: '#ff8a4c',
        //                 borderWidth: 1,
        //                 data: [5, 5, 6, 0, 2, 2],
        //             },
        //             {
        //                 label: 'Terkena Evaluasi',
        //                 backgroundColor: '#f05252',
        //                 borderWidth: 1,
        //                 data: [6, 1, 17, 0, 6, 2],
        //             },
        //         ]
        //     },
        //     options: {
        //         responsive: true,
        //         legend: {
        //             display: false,
        //         },
        //     },
        // }

        // const evalBarCtx = document.getElementById('evalusi-mahasiswa-chart')
        // window.evalBarCtx = new Chart(evalBarCtx, evalBarConfig)

        // chartP = new Highcharts.chart('evalusi-hc', {
        //     chart: {
        //         type: 'column',
        //         styledMode: true
        //     },

        //     credits: {
        //         enabled: false
        //     },

        //     title: {
        //         text: 'Mahsiswa Terkena Evaluasi Semester Gasal 2022',
        //         align: 'left'
        //     },

        //     // subtitle: {
        //     //     text: 'Source: ' +
        //     //         '<a href="https://www.worlddata.info/average-bodyheight.php"' +
        //     //         'target="_blank">WorldData</a>',
        //     //     align: 'left'
        //     // },

        //     xAxis: {
        //         categories: labels
        //     },

        //     yAxis: [{ // Primary axis
        //         className: 'highcharts-color-0',
        //         title: {
        //             text: 'Mendekati Evaluasi'
        //         }
        //     }, 
        //     // { // Secondary axis
        //     //     className: 'highcharts-color-1',
        //     //     opposite: true,
        //     //     title: {
        //     //         text: 'Bisa Terkena Evaluasi'
        //     //     }
        //     // }
        //     ],

        //     plotOptions: {
        //         column: {
        //             borderRadius: 5
        //         }
        //     },

        //     series: [{
        //         name: 'Mendekati Evaluasi',
        //         data: [1, 7, 5, 0, 4, 4],
        //         // tooltip: {
        //         //     valueSuffix: ' kg'
        //         // }
        //     }, {
        //         name: 'Bisa Terkena Evaluasi',
        //         data: [5, 5, 6, 0, 2, 2],
        //         // yAxis: 1
        //     }, {
        //         name: 'Terkena Evaluasi',
        //         data: [6, 1, 17, 0, 6, 2],
        //         // yAxis: 1
        //     }]

        // });

        var options = {
            series: [{
                name: 'Mendekati Evaluasi',
                data: [1, 7, 5, 0, 4, 4]
            }, {
                name: 'Bisa Terkena Evaluasi',
                data: [5, 5, 6, 0, 2, 2]
            }, {
                name: 'Terkena Evaluasi',
                data: [6, 1, 17, 0, 6, 2]
            }],
            chart: {
                foreColor: '#9ba7b2',
                type: 'bar',
                height: 360
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            title: {
                text: 'Mahsiswa Terkena Evaluasi Semester Gasal 2022',
                align: 'left',
                style: {
                    fontSize: '14px'
                }
            },
            colors: ["#7cb5ec", '#90ed7d', '#ffc107'],
            xaxis: {
                categories: labels,
            },
            // yaxis: {
            //     title: {
            //         text: '$ (thousands)'
            //     }
            // },
            fill: {
                opacity: 1
            },
            // tooltip: {
            //     y: {
            //         formatter: function (val) {
            //             return "$ " + val + " thousands"
            //         }
            //     }
            // }
        };
        var chart = new ApexCharts(document.querySelector("#evalusi-mahasiswa-chart"), options);
        chart.render();
    </script>
@stop
