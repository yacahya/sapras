<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'nik' => 'required|string|max:16',
            'temp_lahir' => 'nullable|string|max:20',
            'tgl_lahir' => 'nullable|string|max:20',
            'alamat' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::user()->id,
            'current_password' => 'nullable|required_with:new_password',
            'new_password' => 'nullable|min:8|max:12|required_with:current_password',
            'password_confirmation' => 'nullable|min:8|max:12|required_with:new_password|same:new_password'
        ]);


        $user = User::findOrFail(Auth::user()->id);
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->nik = $request->input('nik');
        $user->temp_lahir = $request->input('temp_lahir');
        $user->tgl_lahir = $request->input('tgl_lahir');
        $user->alamat = $request->input('alamat');
        $user->email = $request->input('email');

        if (!is_null($request->input('current_password'))) {
            if (Hash::check($request->input('current_password'), $user->password)) {
                $user->password = $request->input('new_password');
            } else {
                return redirect()->back()->withInput();
            }
        }

        $user->save();

        return redirect()->route('profile')->withSuccess('Profile updated successfully.');
    }

    public function updateImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $user = User::findOrFail(Auth::user()->id);
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . "profile" . $file->getClientOriginalName();
          $file->storeAs('public/storage/uploads/images/profile', $filename);
            $user['image'] = $filename;
        }
        $user->save();

        return redirect()->route('profile')->withSuccess('Foto profile updated successfully.');
    }
}
