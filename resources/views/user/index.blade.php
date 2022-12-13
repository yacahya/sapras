@extends('layouts.admin')
@section('title','User')
@section('main-content')
<!-- Page Heading -->

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{ __('Data User') }}</h6>
    </div>
    @if (session('success'))
    <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="card-body">
        <div class="table-responsive">
            @include("user.table")

        </div>
    </div>
</div>

@endsection