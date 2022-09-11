<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <a href="/instansi/create" class="btn btn-primary">Tambah</a>

            <div class="container-fluid">

                <table id="example1" class="table table-bordered table-striped">
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
                                <a href="/instansi/edit/{{ $item->id }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{ url('instansi') . '/' . $item->id }}" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                        <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                            <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                            <li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>