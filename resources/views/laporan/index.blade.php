@extends('layouts.admin')
@section('title','Laporan')
@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Data Laporan') }}</h1>
@include("laporan.table")

<script src="{{ url('sbadmin') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('sbadmin') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{ url('sbadmin') }}/js/demo/datatables-demo.js"></script>
<script src="{{ url('sbadmin') }}/vendor/jquery/jquery.min.js"></script>
<script src="{{ url('sbadmin') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{ url('sbadmin') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{ url('sbadmin') }}/js/sb-admin-2.min.js"></script>
@endsection