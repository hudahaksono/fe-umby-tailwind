@extends('layouts.default')
@section('title', 'Portal Mahasiswa KRS Diisi')

@section('contents')
	<x-card title="LAPORAN IPK MAHASISWA PER SEMESTER">
		<div class="flex flex-row">
			<!-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg"> -->
			<div class="basis-2/3 md:basis-1/2">
				<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
					<thead class="text-xs text-white uppercase bg-umby dark:bg-gray-700 dark:text-gray-400">
						<tr>
							<th scope="col" class="px-6 py-3" colspan="3">Parameter Laporan</th>
						</tr>
					</thead>
					<tbody>
						<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
							<td class="px-6 py-4">Unit</td>
							<td class="px-6 py-4" colspan="2">
								<select id="select-jurusan" name="ststus_mhs" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </td>
						</tr>
						<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
							<td class="px-6 py-4">Periode</td>
							<td class="px-6 py-4">
								<select id="select-jurusan" name="ststus_mhs" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </td>
                            <td class="px-6 py-4">
								<select id="select-jurusan" name="ststus_mhs" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="basis-1/3 md:basis-1/2 ml-1">
				<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
					<thead class="text-xs text-white uppercase bg-umby dark:bg-gray-700 dark:text-gray-400">
						<tr>
							<th scope="col" class="px-6 py-3" colspan="2">Preview</th>
						</tr>
					</thead>
					<tbody>
						<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
							<!-- <td class="px-6 py-4">Unit</td>
							<td class="px-6 py-4">Kode</td> -->
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		
	</x-card>
@endsection

@section('scripts')

@endsection
