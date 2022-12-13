<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Laporan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::count();
        $laporan = Laporan::count();

        $widget = [
            'users' => $users,
            'laporan' => $laporan,
        ];

        return view('home', compact('widget'));
    }

    public function welcome()
    {
        return view('welcome');
    }
}
