<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = Laporan::all();
        return view('laporan.index', compact('data'));
    }
}
