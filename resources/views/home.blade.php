@extends('layouts.admin')
@section('title','Dashboard')
@section('main-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Dashboard') }}</h1>

@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('status'))
<div class="alert alert-success border-left-success" role="alert">
    {{ session('status') }}
</div>
@endif

<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Baru</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ App\Models\Laporan::whereStatus(1)->count() }}</div>
                    </div>
                    <div class="col-auto">
                        <a class="fas fa-list fa-2x text-gray-300"></a>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <a href='{{url("laporan/1")}}' class="text-xs font-weight-bold text-primary text-uppercase mb-1">selengkapnya</a>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Laporan Proses</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ App\Models\Laporan::whereStatus(2)->count() }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-edit fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <a href='{{url("laporan/2")}}' class="text-xs font-weight-bold text-primary text-uppercase mb-1">selengkapnya</a>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Laporan Selesai</div>
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ App\Models\Laporan::whereStatus(3)->count() }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-fw fa-solid fa-check-double fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <a href='{{url("laporan/2")}}' class="text-xs font-weight-bold text-primary text-uppercase mb-1">selengkapnya</a>
            </div>
        </div>
    </div>

    <!-- Users -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">{{ __('Users') }}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $widget['users'] }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <a href='{{url("user")}}' class="text-xs font-weight-bold text-primary text-uppercase mb-1">selengkapnya</a>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <!-- Content Column -->
    <div class="col-lg-6 mb-4">



    </div>
</div>
@endsection