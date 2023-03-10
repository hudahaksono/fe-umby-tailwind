@extends('layouts.default')
@section('title', 'Laporan Matrix Jadwal Kuliah')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="LAPORAN MATRIX JADWAL KULIAH">
        
        
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
							<td class="px-6 py-4">Periode</td>
							<td class="px-6 py-4">
								<select id="select-periode" name="select-periode" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </td>
                            <td class="px-6 py-4">
								<select id="select-tahun" name="select-tahun" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </td>
						</tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
							<td class="px-6 py-4">Sistem Kuliah</td>
							<td class="px-6 py-4" colspan="2">
								<select id="select-sistem-kuliah" name="select-kuliah" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </td>
						</tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
							<td class="px-6 py-4">Prog. Pend.</td>
							<td class="px-6 py-4" colspan="2">
								<select id="select-prog-pend" name="select-progpend" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </td>
						</tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
							<td class="px-6 py-4">Gedung</td>
							<td class="px-6 py-4" colspan="2">
								<select id="select-gedung" name="select-gedung" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </td>
						</tr>
						<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
							<td class="px-6 py-4">Hari</td>
							<td class="px-6 py-4" colspan="2">
								<select id="select-hari" name="select-hari" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </td>
						</tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
							<td class="px-6 py-4">Format</td>
							<td class="px-6 py-4" colspan="2">
								<select id="select-format" name="select-format" required
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
        <center>
        <x-button size="sm" color="blue" as-link={{ true }} href="#" class="mx-2 text-white"><i
            data-feather="file" width="16"></i>&nbsp;Tampilkan Laporan</x-button>
         </center>
    </x-card>
@endsection



@section('scripts')
<script>

var periodeSelect = {
    placeholder: "Gasal...",
    options: [
        {
            value: "111",
            text: "Gasal Pendek"
        },
        {
            value: "112",
            text: "Genap"
        },
        {
            value: "113",
            text: "Genap Pendek"
        },
    ],
}

var tahunSelect = {
    placeholder: "2024/2025...",
    options: [
        {
            value: "1",
            text: "2023/2024"
        },
        {
            value: "2",
            text: "2022/2023"
        },
        {
            value: "3",
            text: "2021/2022"
        },
    ],
}

var kuliahSelect = {
    placeholder: "--Semua Kelas--",
    options: [
        {
            value: "111",
            text: "UKT"
        },
        {
            value: "112",
            text: "SPP Tetap"
        },
    ],
}

var progpendSelect = {
    placeholder: "Diploma",
    options: [
        {
            value: "111",
            text: "Profesi"
        },
        {
            value: "112",
            text: "Sarjana"
        },
        {
            value: "113",
            text: "Pasca Sarjana"
        },
    ],
}



var gedungSelect = {
    placeholder: "Gedung A",
    options: [
        {
            value: "111",
            text: "Gedung B"
        },
        {
            value: "112",
            text: "Gedung C"
        },
        {
            value: "113",
            text: "Gedung D"
        },
    ],
}

var hariSelect = {
    placeholder: "Senin",
    options: [
        {
            value: "111",
            text: "Selasa"
        },
        {
            value: "112",
            text: "Rabu"
        },
        {
            value: "113",
            text: "Kamis"
        },
    ],
}



var formatSelect = {
    placeholder: "HTML...",
    options: [
        {
            value: "1",
            text: "DOC"
        },
        {
            value: "2",
            text: "EXCEL"
        },
        {
            value: "3",
            text: "PDF"
        },
    ],
}

new TomSelect('#select-periode', periodeSelect)
new TomSelect('#select-tahun', tahunSelect)
new TomSelect('#select-sistem-kuliah', kuliahSelect)
new TomSelect('#select-prog-pend', progpendSelect)
new TomSelect('#select-gedung', gedungSelect)
new TomSelect('#select-hari', hariSelect)

new TomSelect('#select-format', formatSelect)

</script>
@endsection