<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;


class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('laporan.status');
    }

    public function table($status)
    {
        $data = Laporan::whereStatus($status)->get();
        return view('laporan.index', compact('data'));
    }

    public function tambah()
    {
        return view('laporan-bulanan');
    }

    public function darurat()
    {
        return view('laporan-darurat');
    }

    public function proses($id)
    {
        $data = Laporan::find($id);
        $data->update([
            'status' => 2
        ]);
        Alert::success('Berhasil', 'Data Berhasil Diupdate');


        return redirect()->route('laporan')->withSuccess('Data Berhasil Diupdate');
    }

    public function terima($id)
    {
        $data = Laporan::find($id);
        $data->update([
            'status' => 3
        ]);
        Alert::success('Berhasil', 'Data Berhasil Diterima');
        return redirect()->back();
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
            $file->storeAs('storage/uploads/images/laporan/', $filename);
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
