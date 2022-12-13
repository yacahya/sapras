@extends('layouts.admin')
@section('title','Laporan')
@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Data Laporan Sarana dan Prasarana') }}</h1>
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body"style="cursor: pointer; padding: 20px; background: !importan; color: #fff; text-align: left;" onclick="window.location.href='{{url("laporan/1")}}'">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Baru</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ App\Models\Laporan::whereStatus(1)->count() }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body" style="cursor: pointer; padding: 20px; background: !importan; color: #fff; text-align: left;" onclick="window.location.href='{{url("laporan/2")}}'">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Laporan Proses</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ App\Models\Laporan::whereStatus(2)->count() }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-edit fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body" style="cursor: pointer; padding: 20px; background: !importan; color: #fff; text-align: left;" onclick="window.location.href='{{url("laporan/3")}}'">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Laporan Selesai</div>
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ App\Models\Laporan::whereStatus(3)->count() }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-fw fa-solid fa-check-double fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

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