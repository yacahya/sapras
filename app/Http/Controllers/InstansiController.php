<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instansi;
use RealRashid\SweetAlert\Facades\Alert;

class InstansiController extends Controller
{
    public function index()
    {
        $data = Instansi::all();
        return view('instansi.index', compact('data'));
    }

    public function create()
    {
        return view('instansi.tambah');
    }

    public function simpan(Request  $request)
    {
        Instansi::create([
            "nama_instansi" => $request->nama_instansi,
            "alamat" => $request->alamat,
            "nama_camat" => $request->nama_camat,
            "ibukota" => $request->ibukota,
            "luas" => $request->luas,
            "ketinggian" => $request->ketinggian,
            "total_des" => $request->total_des,
            "total_kel" => $request->total_kel,
            "telpon" => $request->telpon,
        ]);
        Alert::success('Berhasil', 'Data Instansi Berhasil Ditambah');
        return redirect("instansi");
    }

    public function edit($id)
    {
        $data = Instansi::find($id);
        return view('instansi.edit', compact("data"));
    }

    public function editsimpan(Request $request, $id)
    {
        $data = Instansi::find($id);
        $data->update([
            'nama_instansi' => $request->nama_instansi,
            "alamat" => $request->alamat,
            "nama_camat" => $request->nama_camat,
            "ibukota" => $request->ibukota,
            "luas" => $request->luas,
            "ketinggian" => $request->ketinggian,
            "total_des" => $request->total_des,
            "total_kel" => $request->total_kel,
            "telpon" => $request->telpon,
        ]);
        Alert::success('Berhasil', 'Data Berhasil Diupdate');
        return redirect("instansi");
    }

    public function delete($id)
    {
        $instansi = Instansi::find($id)->delete();
        return redirect()->back();
    }
}
