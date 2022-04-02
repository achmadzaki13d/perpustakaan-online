@extends('layout.app')
@section('title', 'List Buku')
@section('page-title', 'List Buku')
@section('breadcrumb', 'Buku')
@section('content')
<table id="basic-datatable" class="table dt-responsive nowrap w-100">
    <!-- Standard modal -->
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#standard-modal">Tambah</button>
    <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">Modal Heading</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <thead>
        <tr>
            <th>Cover Buku</th>
            <th>Kode Buku</th>
            <th>Nama Buku</th>
            <th>Tahun</th>
            <th>Stok</th>
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
            <td>$320,800</td>
        </tr>
    </tbody>
</table>

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