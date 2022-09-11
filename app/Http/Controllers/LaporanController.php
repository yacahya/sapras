<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use Carbon\Carbon;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('laporan.index');
    }
    public function tambah()
    {
        return view('buat-laporan');
    }
    public function riwayat()
    {
        return view('riwayat.index');
    }

    public function simpan(Request $request)
    {
        $data = Laporan::create([
            "tanggal" => Carbon::now(),
            "id_user" => Auth()->user()->id,
            "id_instansi" => $request->id_instansi,
            "id_alat" => $request->id_alat,
            "id_kondisi" => $request->id_kondisi,
            "foto" => 'dasuidsa',
            "keterangan" => $request->keterangan,
        ]);
        return redirect()->back();
        return redirect()->route('laporan-tambah')->withSuccess('Data Berhasil Dikirim');
    }
}
