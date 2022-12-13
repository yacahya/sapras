<a href="/user/create" class="btn btn-primary"><i class="fas fa-plus"></i>Tambah</a>

<br>
<br>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr class="text-center">
            <th>
                <center>No</center>
            </th>
            <th>
                <center>Nama Lengkap</center>
            </th>
            <th>
                <center>Email</center>
            </th>
            <th>
                <center>Level</center>
            </th>
            <th>
                <center>Action</center>
            </th>
        </tr>
    </thead>
    <tbody>
        @php($no = 1)
        @foreach ($data as $item)
        <tr class="text-center">
            <td>{{$no++}}</td>
            <td> {{ $item->fullName}} </td>
            <td> {{ $item->email}} </td>
            <td> {{ $item->level}} </td>
            <td>
                <form method="POST" action="{{ url('user') . '/' . $item->id }}">
                    @csrf
                    <a href="/user/edit/{{ $item->id }}" class="btn btn-sm btn-warning">Edit</a>
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>