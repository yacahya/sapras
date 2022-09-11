@extends('layouts.admin')
@section('title','User')
@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Data User') }}</h1>
@include("user.table")

@endsection