<!DOCTYPE html>
<html lang="id">

<head>
    @include('components.head')
</head>

<body>
    <div class="flex min-h-screen bg-gray-50">
        <div class="flex flex-col flex-1 w-full">
            <header class="z-10 py-4 bg-umby shadow">
                <nav class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
                  
                  <div class="container">
                    <center>
                        <span class="text-2xl font-semibold ">Daftar Modul</span>
                        <div style="float: right;">
                            <button type="button" id="btn_log_out" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Log Out</button>
                        </div>
                    </center>
                  </div>
                </nav>
            </header>
            <br>
            <div class="container relative mx-auto p-6 md:p-6">
                <div class="grid grid-cols-3 gap-4 md:grid-cols-3" style="height: 450px;">
                    @foreach($dataModuls as $modul)
                        <div>
                            <x-card id="modul_{{strtolower($modul['kodemodul'])}}" style="height: 100%;">
                                <center style="margin-top: 34%;">
                                    <img src="{{ URL('assets/icon/akad.png') }}">
                                    <br>
                                    <p><span class="text-2xl font-semibold inline-block align-baseline">{{strtoupper($modul['namamodul'])}}</span></p>
                                    <br>
                                    <button id="btn_{{strtolower($modul['kodemodul'])}}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="margin-top:7%">Pilih Role</button>
                                </center>
                            </x-card>
                            <x-card id="role_{{strtolower($modul['kodemodul'])}}" style="display: none;" title="PILIH ROLE {{strtoupper($modul['namamodul'])}}">
                                @slot('button')
                                    <a href='javascript::void(0)' id="back_modul_{{strtolower($modul['kodemodul'])}}" class="bg-transparent hover:bg-red-400 active:bg-red-400 focus:shadow-outline-gray ml-auto"><i data-feather="x" width="14"></i></a>
                                @endslot
                                <div class="grid grid-cols-1 gap-4 md:grid-cols-1">
                                    @foreach($dataRoles as $role)
                                        @if($modul['kodemodul'] == $role['kodemodul'])
                                            <div>
                                                <a href="javascript::void(0)" id="akad_{{strtolower($role['koderole'])}}" class="bg-transparent hover:bg-gray-400 active:bg-gray-400 focus:shadow-outline-gray">
                                                    <span class="text-sm">{{$role['namarole']}} - {{$role['namaunit']}}</span>
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                    <!-- <div>
                                        <a href="javascript::void(0)" id="akad_pmb" class="bg-transparent hover:bg-gray-400 active:bg-gray-400 focus:shadow-outline-gray">
                                            <span class="text-sm">Admin PMB - Universitas Mercu Buana Yogyakarta</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript::void(0)" id="akad_admin" class="bg-transparent hover:bg-gray-400 active:bg-gray-400 focus:shadow-outline-gray">
                                            <span class="text-sm">Administrator - Universitas Mercu Buana Yogyakarta</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript::void(0)" id="akad_baa" class="bg-transparent hover:bg-gray-400 active:bg-gray-400 focus:shadow-outline-gray">
                                            <span class="text-sm">BAA - Universitas Mercu Buana Yogyakarta</span>
                                        </a>
                                    </div> -->
                                </div>
                            </x-card>
                        </div>
                    @endforeach
                    {{--<div>
                        <x-card id="modul_akad" style="height: 100%;">
                            <center style="margin-top: 34%;">
                                <img src="{{ URL('assets/icon/akad.png') }}">
                                <br>
                                <p><span class="text-2xl font-semibold inline-block align-baseline">AKADEMIK</span></p>
                                <br>
                                <button id="btn_akademik" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="margin-top:7%">Pilih Role</button>
                            </center>
                        </x-card>
                        <x-card id="role_akad" style="display: none;" title="PILIH ROLE AKADEMIK">
                            @slot('button')
                                <a href='javascript::void(0)' id="back_modul_akad" class="bg-transparent hover:bg-red-400 active:bg-red-400 focus:shadow-outline-gray ml-auto"><i data-feather="x" width="14"></i></a>
                            @endslot
                            <div class="grid grid-cols-1 gap-4 md:grid-cols-1">
                                <div>
                                    <a href="javascript::void(0)" id="akad_pmb" class="bg-transparent hover:bg-gray-400 active:bg-gray-400 focus:shadow-outline-gray">
                                        <span class="text-sm">Admin PMB - Universitas Mercu Buana Yogyakarta</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript::void(0)" id="akad_admin" class="bg-transparent hover:bg-gray-400 active:bg-gray-400 focus:shadow-outline-gray">
                                        <span class="text-sm">Administrator - Universitas Mercu Buana Yogyakarta</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript::void(0)" id="akad_baa" class="bg-transparent hover:bg-gray-400 active:bg-gray-400 focus:shadow-outline-gray">
                                        <span class="text-sm">BAA - Universitas Mercu Buana Yogyakarta</span>
                                    </a>
                                </div>
                            </div>
                        </x-card>
                    </div>
                    <div>
                        <x-card id="modul_admin" style="height: 100%;">
                            <center style="margin-top: 30%;">
                                <img src="{{ URL('assets/icon/admin.png') }}">
                                <br>
                                <p><span class="text-2xl font-semibold ">ADMINISTRASI SIM</span></p>
                                <br>
                                <button id="btn_admin" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="margin-top:7%">Pilih Role</button>
                            </center>
                        </x-card>
                        <x-card id="role_admin" style="display: none;" title="PILIH ROLE ADMINISTRASI SIM">
                            @slot('button')
                                <a href='javascript::void(0)' id="back_modul_admin" class="bg-transparent hover:bg-red-400 active:bg-red-400 focus:shadow-outline-gray ml-auto"><i data-feather="x" width="14"></i></a>
                            @endslot
                            <div class="grid grid-cols-1 gap-4 md:grid-cols-1">
                                <div>
                                    <a href="javascript::void(0)" id="admin_admin" class="bg-transparent hover:bg-gray-400 active:bg-gray-400 focus:shadow-outline-gray">
                                        <span class="text-sm">Administrator - Universitas Mercu Buana Yogyakarta</span>
                                    </a>
                                </div>
                            </div>
                        </x-card>
                    </div>--}}
                    <div>
                        <x-card id="modul_user" style="height: 100%;">
                            <center style="margin-top: 34%;">
                                <img src="{{ URL('assets/icon/password.png') }}">
                                <br>
                                <p><span class="text-2xl font-semibold ">PASSWORD & EMAIL</span></p>
                                <button id="btn_user" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="margin-top:14%">Pilih Role</button>
                            </center>
                        </x-card>
                        <x-card id="role_user" style="display: none;" title="GANTI PASSWORD">
                            @slot('button')
                                <a href='javascript::void(0)' id="back_modul_user" class="bg-transparent hover:bg-red-400 active:bg-red-400 focus:shadow-outline-gray ml-auto"><i data-feather="x" width="14"></i></a>
                            @endslot
                            
                        </x-card>
                    </div>
                </div>
            </div>
        </div>
        
        @include('components.footer')
    </div>
</body>
<script>
    $('#btn_akad').click(function(event) {
        $('#modul_akad').hide('slow')
        $('#role_akad').show('slow')

        $('#modul_admin').show('slow')
        $('#role_admin').hide('slow')

        $('#modul_user').show('slow')
        $('#role_user').hide('slow')
    });
    $('#back_modul_akad').click(function(event) {
        $('#modul_akad').show('slow')
        $('#role_akad').hide('slow')
    });

    $('#btn_admin').click(function(event) {
        $('#modul_akad').show('slow')
        $('#role_akad').hide('slow')

        $('#modul_admin').hide('slow')
        $('#role_admin').show('slow')

        $('#modul_user').show('slow')
        $('#role_user').hide('slow')
    });
    $('#back_modul_admin').click(function(event) {
        $('#modul_admin').show('slow')
        $('#role_admin').hide('slow')
    });

    $('#btn_user').click(function(event) {
        $('#modul_akad').show('slow')
        $('#role_akad').hide('slow')

        $('#modul_admin').show('slow')
        $('#role_admin').hide('slow')
        
        $('#modul_user').hide('slow')
        $('#role_user').show('slow')
    });
    $('#back_modul_user').click(function(event) {
        $('#modul_user').show('slow')
        $('#role_user').hide('slow')
    });

    $('#btn_log_out').click(function(event) {
        window.location.href = '/logout';
    });
</script>
</html>