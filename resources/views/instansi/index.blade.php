@extends('layouts.admin')
@section('title', 'Instansi')
@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Data Instansi') }}</h1>
@include("instansi.table")

<script src="{{ url('sbadmin') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>
@endsection