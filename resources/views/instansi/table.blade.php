<a href="/instansi/create" class="btn btn-primary"><i class="fas fa-plus"></i>Tambah</a>

<br>
<br>
<table id="example" class="table table-striped table-bordered" style="width:100%">

    <thead>
        <tr class="text-center">
            <th>
                <center>No</center>
            </th>
            <th>
                <center>Nama Instansi</center>
            </th>
            <th>
                <center>Alamat</center>
            </th>
            <th>
                <center>Nama Camat</center>
            </th>
            <th>
                <center>Ibukota Kecamatan</center>
            </th>
            <th>
                <center>Luas Wilayah</center>
            </th>
            <th>
                <center>Ketinggian</center>
            </th>
            <th>
                <center>Jumlah Desa</center>
            </th>
            <th>
                <center>Jumlah Kelurahan</center>
            </th>
            <th>
                <center>Action</center>
            </th>
        </tr>
    </thead>
    <tbody>
        @php($no =1)
        @foreach($data as $item)
        <tr class="text-center">
            <td>{{$no++}}</td>
            <td> {{ $item->nama_instansi  }} </td>
            <td> {{ $item->alamat  }} </td>
            <td> {{ $item->nama_camat  }} </td>
            <td> {{ $item->ibukota  }} </td>
            <td> {{ $item->luas  }} </td>
            <td> {{ $item->ketinggian  }} </td>
            <td> {{ $item->total_des }} </td>
            <td> {{ $item->total_kel }} </td>
            <td>
                <form method="POST" action="{{ url('instansi') . '/' . $item->id }}">
                    @csrf
                    <a href="/instansi/edit/{{ $item->id }}" class="btn btn-sm btn-warning">Edit</a>
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>