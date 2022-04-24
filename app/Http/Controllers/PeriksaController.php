<?php

namespace App\Http\Controllers;

use App\Models\data_periksa;
use App\Models\User;
use App\Models\Data_dokter;
use App\Models\data_pasien;
use App\Models\Tambah;
use Illuminate\Http\Request;

class PeriksaController extends Controller
{
    //
    public function create_periksa(){
        $data_periksa   = User::all();
        $data_dokter    = Data_dokter::all();
        $data_pasien    = data_pasien::all();
        $data_obat      = Tambah::all();
        return view('pemeriksaan.create_periksa', compact('data_periksa','data_dokter','data_pasien','data_obat'));
    }

    public function addTambah_periksa(Request $request){
        $tambah=new data_periksa();
        $tambah->id_periksa=$request->id_periksa;
        $tambah->tgl_periksa=$request->tgl_periksa;
        $tambah->id_dokter=$request->id_dokter;
        $tambah->id_pasien=$request->id_pasien;
        $tambah->hsl_diagnosa=$request->hsl_diagnosa;
        $tambah->id_obat=$request->id_obat;
        
        
        // $tambah->user_id=$request->user_id;
        $tambah->save();

        return redirect()->route('data_periksa');
    }

    public function ubah_periksa($id){
        $data_periksa = data_periksa::findOrFail($id);
        // $user = User::all();
        $data_user   = User::all();
        $data_dokter    = Data_dokter::all();
        $data_pasien    = data_pasien::all();
        $data_obat      = Tambah::all();
        return view('pemeriksaan.edit_periksa', compact(['data_periksa','data_user','data_dokter','data_pasien','data_obat']));

    }
  
    // public function editSavePeriksa(Request $request, $id){
    //     $tambah=data_pasien::find($id);
    //     $tambah->nama_pasien=$request->nama_pasien;
    //     $tambah->alamat=$request->alamat;
    //     $tambah->umur=$request->umur;
    //     // $tambah->user_id=$request->user_id;
    //     $tambah->save();

    //     return redirect()->route('data_pasien');        
    // }   

    public function delete_periksa($id_periksa){
        $td = data_periksa::findOrFail($id_periksa);
        $td->delete();
        return redirect()->route('data_periksa');

    }

}
