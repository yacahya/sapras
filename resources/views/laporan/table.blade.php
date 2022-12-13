<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr class="">
            <th>
                No
            </th>
            <th>
                Tanggal
            </th>
            <th>
                Nama Pelapor
            </th>
            <th>
                Instansi
            </th>
            <th>
                Nama Alat
            </th>
            <th>
                Kondisi
            </th>
            <th>
                Foto
            </th>
            <th>
                keterangan
            </th>
            <th>
                Status
            </th>
            <th>
                <center>Action</center>
            </th>
        </tr>
    </thead>
    <tbody>
        @php($no = 1)
        @foreach($data as $item)
        <tr class="">
            <td>{{$no ++}}</td>
            <td>{{ Carbon\Carbon::make($item->created_at ?? Carbon\Carbon::now())->format('d-m-Y') }}</td>
            <td>{{ $item->user->fullName ?? ''}}</td>
            <td>{{ $item->instansi->nama_instansi ?? '' }}</td>
            <td>{{ $item->alat->nama_alat ?? '' }}</td>
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
            <td>
                @if($item->status == 1)
                <a href="{{ url('laporan-proses/') .'/'.$item->id }}" class="btn btn-sm btn-warning">Proses</a>
                @endif
                @if($item->status == 2)
                <a href="{{ url('laporan-terima/') .'/'.$item->id }}" class="btn btn-sm btn-primary">Terima</a>
                @endif
                <!-- <a href="#" class="btn btn-sm btn-danger">Hapus</a> -->
            </td>
        </tr>
        @endforeach
    </tbody>
</table>