<?php

namespace App\Http\Controllers;

use App\Models\Data_dokter;
use Illuminate\Http\Request;

class HomeDokterController extends Controller
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
        $data_dokter = Data_dokter::all();
        return view('dokter.home_dokter', compact('data_dokter'));
    }

}
