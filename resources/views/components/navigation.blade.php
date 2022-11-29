<?php
// change this for menu navbar
$data_nav = [
    [
        'title' => 'Home',
        'url' => url('/'),
    ],
    [
        'title' => 'Portal',
        'url' => '#',
        'sub_menu' => [
            [
                'title' => 'Mahasiswa',
                'url' => url('/mahasiswa'),
            ],
            [
                'title' => 'Dosen',
                'url' => url('/dosen'),
            ],
            [
                'title' => 'Rekap Status Mahasiswa',
                'url' => url('/rekap-status-mahasiswa'),
            ],
        ],
    ],
    [
        'title' => 'Perkuliahan',
        'url' => url('/'),
        'sub_menu' => [
            [
                'title' => 'Kurikulum',
                'url' => url('/perkuliahan/kurikulum'),
                'sub_menu' => [
                    [
                        'title' => 'Jenis Mata Kuliah',
                        'url' => url('/perkuliahan/kurikulum/jenis-mata-kuliah'),
                    ],
                ],
            ],
            [
                'title' => 'Kelas Kuliah',
                'url' => url('/dosen'),
            ],
            [
                'title' => 'Rekap Status Mahasiswa',
                'url' => url('/rekap-status-mahasiswa'),
            ],
        ],
    ],
    [
        'title' => 'Keuangan',
        'url' => url('/'),
    ],
    [
        'title' => 'Laporan',
        'url' => url('/'),
    ],
    [
        'title' => 'Referensi',
        'url' => url('/'),
    ],
    [
        'title' => 'Setting',
        'url' => url('/'),
    ],
];

?>

<header class="z-10 py-4 bg-white shadow-md">
    <div class="container flex items-center justify-between h-full px-6 mx-auto text-gray-600">
        <nav class="bg-white border-cool-gray-200 px-2 sm:px-4 py-2.5 rounded w-full">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                {{-- UMBY LOGO --}}
                <a href="{{ URL('/') }}" class="flex items-center">
                    <img src="{{ URL('assets/img/logo-siak.png') }}" alt="UMBY Logo" class="h-6 mr-3 sm:h-9">
                    {{-- <span class="self-center text-xl font-semibold whitespace-nowrap">SIA UMBY</span> --}}
                </a>

                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
                        @foreach ($data_nav as $nav)
                            <li>
                                @if (isset($nav['sub_menu']))
                                    <button id="dropdown-{{ $nav['title'] }}-btn"
                                        data-dropdown-toggle="dropdown-{{ $nav['title'] }}"
                                        class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">{{ $nav['title'] }}
                                        <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg></button>

                                    <div id="dropdown-{{ $nav['title'] }}"
                                        class="absolute z-10 font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 hidden">
                                        <ul class="py-1 text-sm text-gray-700"
                                            aria-labelledby="subMenu-{{ $nav['title'] }}">
                                            @forelse ($nav['sub_menu'] as $submenu)
                                                <li class="relative">
                                                    @if (isset($submenu['sub_menu']))
                                                        <button id="doubleDropdownButton"
                                                            data-dropdown-toggle="doubleDropdown"
                                                            data-dropdown-placement="right-start" type="button"
                                                            class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100">Dropdown<svg
                                                                aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg></button>
                                                        <div id="doubleDropdown"
                                                            class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44">
                                                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                                aria-labelledby="doubleDropdownButton">
                                                                @foreach ($submenu['sub_menu'] as $subsubmenu)
                                                                    <li>
                                                                        <a href="#"
                                                                            class="block px-4 py-2 hover:bg-gray-100">Overview</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @else
                                                        <a href="{{ $submenu['url'] }}"
                                                            class="block px-4 py-2 hover:bg-gray-100">{{ $submenu['title'] }}</a>
                                                    @endif
                                                </li>
                                            @empty
                                                <li>
                                                    <span>Tidak ada dropdown</span>
                                                </li>
                                            @endforelse
                                        </ul>
                                    </div>
                                @else
                                    <a href="{{ $nav['url'] }}"
                                        class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-gray-700 hover:text-blue-700 md:p-0">{{ $nav['title'] }}</a>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>


        </nav>
    </div>
</header>
