<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = User::all();
        return view('user.index', compact('data'));
    }

    public function create()
    {
        return view('user.tambah');
    }

    public function simpan(Request  $request)
    {
        User::create([
            "name" => $request->name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "password" => $request->password,
        ]);
        Alert::success('Berhasil', 'Data User Berhasil Ditambah');
        return redirect("user");
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('user.edit', compact("data"));
    }

    public function editsimpan(Request $request, $id)
    {
        $data = User::find($id);
        $data->update([
            "level" => $request->level,
        ]);
        return redirect('user');
    }

    public function delete($id)
    {
        $data = User::find($id)->delete();
        return redirect()->back();
    }
}
