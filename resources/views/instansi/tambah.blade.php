@extends('layouts.admin')

@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Tambah Data Instansi') }}</h1>

<div class="row">
    <!-- left column -->
    <div class="col-md-10">
        <!-- general form elements -->
        <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="{{ url('instansi') }}" role="form">
                @csrf
                <div class="box-body">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama Kecamatan</label>
                            <input class="form-control" type="text" name="nama_instansi" placeholder="Nama Kecamatan">
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input class="form-control" type="text" name="alamat" placeholder="Alamat">
                        </div>

                        <div class="form-group">
                            <label>Nama Camat</label>
                            <input class="form-control" type="text" name="nama_camat" placeholder="Nama Camat">
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            <label>Ibukota Kecamatan</label>
                            <input class="form-control" type="text" name="ibukota" placeholder="Ibukota Kecamatan">
                        </div>

                        <div class="form-group">
                            <label>Luas Wilayah</label>
                            <input class="form-control" type="text" name="luas" placeholder="Luas Wilayah">
                        </div>

                        <div class="form-group">
                            <label>Ketinggian</label>
                            <input class="form-control" type="text" name="ketinggian" placeholder="Ketinggian">
                        </div>

                        <div class="form-group">
                            <label>Jumlah Desa</label>
                            <input class="form-control" type="text" name="total_des" placeholder="Jumlah Desa">
                        </div>

                        <div class="form-group">
                            <label>Jumlah Kelurahan</label>
                            <input class="form-control" type="text" name="total_kel" placeholder="Jumlah Kelurahan">
                        </div>

                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection