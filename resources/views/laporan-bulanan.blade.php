@extends('layouts.admin')
@section('title','Laporan')
@section('main-content')
<h1 class="h3 mb-4 text-gray-800">{{ __('Laporan Bulanan Sarana Prasarana') }}</h1>
@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="card shadow mb-4">
    <div class="card-body">
        <!-- left column -->
        <!-- general form elements -->
        <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="{{ url('laporan-tambah') }}" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="form-group row">
                                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal<span class="small text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <h3>{{ Carbon\Carbon::now()->format('d-m-Y') }}</h3>
                                </div>
                                @error('tanggal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Pelapor<span class="small text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="{{ Auth()->user()->fullName }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Instansi<span class="small text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" type="text" name="id_instansi">
                                        <option value="">-- Pilih kecamatan --</option>
                                        @foreach(App\Models\Instansi::all() as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_instansi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_alat" class="col-sm-2 col-form-label">Nama Alat<span class="small text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" type="text" name="id_alat">
                                        <option value="">-- Pilih alat --</option>
                                        @foreach(App\Models\Alat::all() as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_alat }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="kondisi" class="col-sm-2 col-form-label">Kondisi<span class="small text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" type="text" name="id_kondisi">
                                        <option value="">-- Pilih Kondisi --</option>
                                        @foreach(App\Models\Kondisi::all() as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_kondisi ?? '' }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">Foto<span class="small text-danger">*</span></div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="foto_bukti">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan<span class="small text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" type="text" name="keterangan" placeholder="Keterangan" rows="3"></textarea>
                                    @error('keterangan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- /.box-body -->

    <div class="form-group row justify-content-end">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Kirim</button>
        </div>

        </form>
    </div>
</div>
@endsection