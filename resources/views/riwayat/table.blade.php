<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length"
                                    aria-controls="dataTable"
                                    class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> entries</label></div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                    class="form-control form-control-sm" placeholder=""
                                    aria-controls="dataTable"></label></div>
                    </div>
                </div>
                <table id="example1" class="table table-bordered table-striped">
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
                        @foreach(App\Models\Laporan::all() as $item)
                        <tr class="text-center">
                            <td>{{$no ++}}</td>
                            <td>{{ Carbon\Carbon::make($item->created_at)->format('d-m-Y') }}</td>
                            <td>{{ $item->instansi->nama_instansi }}</td>
                            <td>{{ $item->alat->nama_alat }}</td>
                            <td>{{ $item->kondisi->nama_kondisi }}</td>
                            <td>
                                @if($item->foto == NULL)
                                <span>Tidak ada foto</span>
                                @else
                                <img src="{{asset('storage/uploads/images/laporan')}}/{{$item->foto}}"
                                    style="height: 30px; width: 50px;" />
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
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to
                            10 of 57 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a
                                        href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0"
                                        class="page-link">Previous</a></li>
                                <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable"
                                        data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
                                        data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
                                        data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
                                        data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
                                        data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
                                        data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                <li class="paginate_button page-item next" id="dataTable_next"><a href="#"
                                        aria-controls="dataTable" data-dt-idx="7" tabindex="0"
                                        class="page-link">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </table>
        </div>
    </div>
</div>