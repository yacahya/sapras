@extends('layouts.admin')
@section('title','User')
@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Edit Data User') }}</h1>

<div class="row">
    <!-- left column -->
    <div class="col-md-10">
        <!-- general form elements -->
        <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="{{url('user/edit/' . '/' . $data->id)}}" role="form">
                @csrf
                <div class="box-body">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input class="form-control" type="text" name="fullName" value="{{ $data->fullName }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select class="form-control" type="text" name="level" required>
                                <option value="">-- Pilih Level --</option>
                                <option value="Admin">Admin</option>
                                <option value="Operator">Operator</option>
                            </select>
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