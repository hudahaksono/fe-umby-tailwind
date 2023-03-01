@extends('layouts.default')
@section('title', 'Portal Mahasiswa')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Cari Pembayaran Per Periode Tagihan">
        <div class="flex flex-row mb-2">
            <div class="flex">
            </div>
        </div>
        <x-card class="w-full mx-auto col-span-3">
            <form>
                <td>Pencarian</td>
                <br>
                <table cellspacing="0" cellpadding="4">
                    <tbody>
                        <tr>
                            <td>(Calon) Mahasiswa</td>
                            <td><strong>:</strong></td>
                            <td width="260px">
                                <select id="select-mhs" name="select-mhs" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>Periode Tagihan</td>
                            <td><strong>:</strong></td>
                            <td width="260px">
                                <select id="select-tagihan" name="select-tagihan" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                            
                            <td width="260px">
                                <select id="select-tagihan2" name="select-tagihan2" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Periode Bayar</td>
                            <td><strong>:</strong></td>
                            <td width="260px">
                                <select id="select-periode" name="select-periode" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                            
                            <td width="260px">
                                <select id="select-periode2" name="select-periode2" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal Bayar</td>
                            <td><strong>:</strong></td>
                            <td width="100px">
                                <select id="select-tglbyr" name="select-tglbyr" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Angkatan</td>
                            <td><strong>:</strong></td>
                            <td width="260px">
                                <select id="select-angkatan" name="select-angkatan" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Cara Bayar</td>
                            <td><strong>:</strong></td>
                            <td width="260px">
                                <select id="select-bayar" name="select-bayar" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded">
                                </select>
                            </td>
                        </tr>
                        <td width="210px">
                            <x-button size="sm" color="blue" as-link={{ true }} href="#" class="inline-flex mx-2 text-white"><i data-feather="search" width="16"></i>&nbsp;Cari</x-button>
                        </div>
                    </td>
                    </tbody>
                </table>
            </form>

        </x-card>
        <br>

        <div class="flex flex-row mb-2">
            <div class="w-full">
                <table id="mahasiswa-table" class="hover cell-border stripe  order-column">
                </table>
            </div>
        </div>

    </x-card>
@endsection