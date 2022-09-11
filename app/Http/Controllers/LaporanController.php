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
        $request->validate([
            'id_instansi' => 'required',
            'id_alat' => 'required',
            'id_kondisi' => 'required',
            'foto_bukti' => 'required|image|mimes:jpg,png,jpeg|max:5120',
            'keterangan' => 'required|string|max:255'
        ]);

        if ($request->file('foto_bukti')) {
            $file = $request->file('foto_bukti');
            $filename = date('YmdHi') . "laporan" . $file->getClientOriginalName();
            $file->storeAs('public/uploads/images/laporan/', $filename);
        }

        $data = Laporan::create([
            "tanggal" => Carbon::now(),
            "id_user" => Auth()->user()->id,
            "id_instansi" => $request->id_instansi,
            "id_alat" => $request->id_alat,
            "id_kondisi" => $request->id_kondisi,
            "foto" => $filename,
            "keterangan" => $request->keterangan,
            "status" => 1,
        ]);
        return redirect()->route('laporan-tambah')->withSuccess('Data Berhasil Dikirim');
    }
}
