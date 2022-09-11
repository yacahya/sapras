<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('user.index', compact('data'));
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
}
