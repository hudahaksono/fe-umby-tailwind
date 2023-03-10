@extends('layouts.default')
@section('title', 'Jurnal Pendapatan Harian')

@section('contents')
    <!-- <x-card class="mb-6">
        FILTER
    </x-card> -->
    <x-card title="Jurnal Pendapatan Harian">
        
        
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
							<td class="px-6 py-4">Tanggal</td>
							<td class="px-6 py-4">
                                <input datepicker datepicker-autohide type="text"  placeholder="Select date">
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
							<td class="px-6 py-4">Jenis Kuliah</td>
							<td class="px-6 py-4" colspan="2">
								<select id="select-jns-kuliah" name="select-kuliah" required
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

var kuliahSelect = {
    placeholder: "--Jenis Kuliah--",
    options: [
        {
            value: "111",
            text: "Reguler Pagi[R1]"
        },
        {
            value: "112",
            text: "Reguler Malam[R2]"
        },
        {
            value: "113",
            text: "Kelas Karyawan[R3]"
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

new TomSelect('#select-format', formatSelect)
new TomSelect('#select-kelas', kelasSelect)
new TomSelect('#select-kampus', kampusSelect)
new TomSelect('#select-jns-kuliah', kuliahSelect)
new TomSelect('#select-periode', periodeSelect)


</script>
@endsection