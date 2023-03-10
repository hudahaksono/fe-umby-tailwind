@extends('layouts.default')
@section('title', 'Laporan Mahasiswa Tidak Hadir 4x Berturut-Turut')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="LAPORAN MAHASISWA TIDAK HADIR 4X BERTURUT-TURUT">
        
        
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
								<select id="select-unit" name="select-unit" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </td>
						</tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
							<td class="px-6 py-4">Kampus</td>
							<td class="px-6 py-4" colspan="2">
								<select id="select-kampus" name="select-kampus" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </td>
						</tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
							<td class="px-6 py-4">Kelas</td>
							<td class="px-6 py-4" colspan="2">
								<select id="select-kelas" name="select-kelas" required
                                    class="block w-full mt-1 text-sm focus:border-blue-400 border-gray-200 focus:outline-none focus:shadow-outline-blue rounded ml-4">
                                </select>
                            </td>
						</tr>
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

var unitSelect = {
    placeholder: "Universitas Mercu Buana Yogyakarta...",
    options: [
        {
            value: "111",
            text: "Psikolog"
        },
        {
            value: "112",
            text: "S1 Psikolog"
        },
        {
            value: "113",
            text: "S2 Magister Psikolog"
        },
    ],
}

var kampusSelect = {
    placeholder: "--Semua Kampus--",
    options: [
        {
            value: "111",
            text: "Kampus Pusat"
        },
        {
            value: "112",
            text: "Kampus Gejayaan"
        },
        {
            value: "113",
            text: "Kampus Gejayaan Ring Road"
        },
    ],
}

var kelasSelect = {
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




var angkatanSelect = {
    placeholder: "--Semua Angkatan--",
    options: [
        {
            value: "111",
            text: "2022"
        },
        {
            value: "112",
            text: "2021"
        },
        {
            value: "113",
            text: "2019"
        },
    ],
}

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

new TomSelect('#select-unit', unitSelect)
new TomSelect('#select-kampus', kampusSelect)
new TomSelect('#select-kelas', kelasSelect)
new TomSelect('#select-periode', periodeSelect)
new TomSelect('#select-tahun', tahunSelect)
new TomSelect('#select-format', formatSelect)

</script>
@endsection