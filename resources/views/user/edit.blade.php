@extends('layouts.admin')
@section('title', 'User')
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
                <form method="post" action="{{ url('user/update/' . $data->id) }}" role="form">
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="fullName"
                                            value="{{ $data->fullName }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Level</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" type="text" name="level" required>
                                            <option value="">-- Pilih Level --</option>
                                            <option value="Admin" {{ $data->level == 'Admin' ? 'selected' : '' }}>Admin
                                            </option>
                                            <option value="Operator" {{ $data->level == 'Operator' ? 'selected' : '' }}>
                                                Operator</option>
                                        </select>
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
