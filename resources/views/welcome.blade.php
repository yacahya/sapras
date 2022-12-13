@extends('layouts.admin')
@section('main-content')
<section class="content">
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h2>Hallo, <strong>{{ Auth::user()->fullName }}</strong>!</h2>
        <hr />
        <h4>Selamat datang di Aplikasi Pelaporan Sarana dan Prasarana Disdukcapil Kabupaten Garut.</h4>
        <h5>Silakan adukan permasalahan sarana dan prasarana yang ada di Kecamatan pada aplikasi ini!</h5>
    </div>
</section>
@endsection