@extends('layout.app')
@section('title', 'Denda Buku')
@section('page-title', 'Daftar Denda Buku')
@section('breadcrumb', 'Denda')
@section('content')
<!-- <table id="basic-datatable" class="table dt-responsive nowrap w-100">
    <thead>
        <tr>
            <th>Cover Buku</th>
            <th>Kode Buku</th>
            <th>Nama Buku</th>
            <th>Tanggal Di Pinjam</th>
            <th>Denda</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
        </tr>
    </tbody>
</table> -->

@livewire('test')

@push('data-tables')
<!-- Datatables js -->
<script src="{{ asset('template/assets/js/vendor/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('template/assets/js/vendor/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('template/assets/js/vendor/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('template/assets/js/vendor/responsive.bootstrap5.min.js') }}"></script>

<!-- Datatable Init js -->
<script src="{{ asset('template/assets/js/pages/demo.datatable-init.js') }}"></script>
@endpush
@endsection