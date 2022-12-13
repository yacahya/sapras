<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr class="text-center">
            <th>
                <center>No</center>
            </th>
            <th>
                <center>Tanggal</center>
            </th>
            <th>
                <center>Instansi</center>
            </th>
            <th>
                <center>Nama Alat</center>
            </th>
            <th>
                <center>Kondisi</center>
            </th>
            <th>
                <center>Image</center>
            </th>
            <th>
                <center>Keterangan</center>
            </th>
            <th>
                <center>Status</center>
            </th>
        </tr>
    </thead>
    <tbody>
        @php($no = 1)
        @foreach(App\Models\Laporan::whereIdUser(auth()->user()->id)->get() as $item)
        <tr class="text-center">
            <td>{{$no ++}}</td>
            <td>{{ Carbon\Carbon::make($item->created_at)->format('d-m-Y') }}</td>
            <td>{{ $item->instansi->nama_instansi }}</td>
            <td>{{ $item->alat->nama_alat }}</td>
            <td>{{ $item->kondisi->nama_kondisi ?? '' }}</td>
            <td>
                @if($item->foto == NULL)
                <span>Tidak ada foto</span>
                @else
                <img src="{{asset('storage/uploads/images/laporan')}}/{{$item->foto}}" style="height: 30px; width: 50px;" />
                @endif
            </td>
            <td>{{ $item->keterangan }}</td>
            <td>
                @if($item->status == 1)
                <span class="font-weight-bold text-primary">Laporan baru </span>
                @elseif($item->status == 2)
                <span class="font-weight-bold text-warning">Laporan diproses </span>
                @elseif($item->status == 3)
                <span class="font-weight-bold text-success">Laporan diterima </span>
                @elseif($item->status == 4)
                <span class="font-weight-bold text-danger">Laporan ditolak </span>
                @else
                <span class="font-weight-bold text-secondary">Laporan tanpa status </span>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>