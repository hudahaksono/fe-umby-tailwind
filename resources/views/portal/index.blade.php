@extends('layouts.default')

@section('title', 'Portal Home')

@section('contents')
    <h2 class="mb-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Selamat datang, Username
    </h2>

    <x-card title="Perkuliahan">
        <table id="perkuliahan" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr>
                    <th data-priority="1">Name</th>
                    <th data-priority="2">Position</th>
                    <th data-priority="3">Office</th>
                    <th data-priority="4">Age</th>
                    <th data-priority="5">Start date</th>
                    <th data-priority="6">Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>Donna Snider</td>
                    <td>Customer Support</td>
                    <td>New York</td>
                    <td>27</td>
                    <td>2011/01/25</td>
                    <td>$112,000</td>
                </tr>
            </tbody>
        </table>
    </x-card>
@stop

@section('script')
<script>
    $(document).ready(function() {
        $('#perkuliahan').DataTable();
    });
</script>
@stop
