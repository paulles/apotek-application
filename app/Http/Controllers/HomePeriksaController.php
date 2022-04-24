<?php

namespace App\Http\Controllers;

use App\Models\data_periksa;
use Illuminate\Http\Request;

class HomePeriksaController extends Controller
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
        $data_periksa = data_periksa::all();
        return view('pemeriksaan.home_periksa', compact('data_periksa'));
    }
}
