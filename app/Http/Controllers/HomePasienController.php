<?php

namespace App\Http\Controllers;

use App\Models\data_pasien;
use Illuminate\Http\Request;

class HomePasienController extends Controller
{
    //
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
        $data_pasien = data_pasien::all();
        return view('pasien.home_pasien', compact('data_pasien'));
    }
}
