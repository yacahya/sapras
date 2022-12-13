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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Nama Kecamatan</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="nama_instansi" placeholder="Nama Kecamatan">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="alamat" placeholder="Alamat">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Nama Camat</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="nama_camat" placeholder="Nama Camat">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Ibukota Kecamatan</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="ibukota" placeholder="Ibukota Kecamatan">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Luas Wilayah</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="luas" placeholder="Luas Wilayah">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Ketinggian</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="ketinggian" placeholder="Ketinggian">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Jumlah Desa</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="total_des" placeholder="Jumlah Desa">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Jumlah Kelurahan</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="total_kel" placeholder="Jumlah Kelurahan">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Kontak Darurat</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="kontak_darurat" placeholder="Kontak Darurat">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection