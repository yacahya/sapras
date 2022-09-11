@extends('layouts.admin')
@section('title','Riwayat')
@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Riwayat Laporan') }}</h1>
@include("riwayat.table")


@endsection