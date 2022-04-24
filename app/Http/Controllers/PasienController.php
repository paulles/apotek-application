<?php

namespace App\Http\Controllers;

use App\Models\data_pasien;
use App\Models\User;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    //
    public function create_pasien(){
        $data_pasien = User::all();
        return view('pasien.create_pasien', compact('data_pasien'));
    }

    public function edit_rev(){
        $data_pasien = User::all();
        return view('pasien.create_pasien', compact('data_pasien'));
    }

    public function addTambah_pasien(Request $request){
        $tambah=new data_pasien();
        $tambah->id_pasien=$request->id_pasien;
        $tambah->nama_pasien=$request->nama_pasien;
        $tambah->umur=$request->umur;
        $tambah->alamat=$request->alamat;
        
        // $tambah->user_id=$request->user_id;
        $tambah->save();

        return redirect()->route('data_pasien');
    }

    public function ubah_pasien($id){
        $data_pasien = data_pasien::findOrFail($id);
        $user = User::all();
        return view('pasien.edit_pasien', compact(['data_pasien','user']));

    }
  
    public function editSavePasien(Request $request, $id){
        $tambah=data_pasien::find($id);
        $tambah->nama_pasien=$request->nama_pasien;
        $tambah->alamat=$request->alamat;
        $tambah->umur=$request->umur;
        // $tambah->user_id=$request->user_id;
        $tambah->save();

        return redirect()->route('data_pasien');        
    }   

    public function delete_pasien($id_pasien){
        $td = data_pasien::findOrFail($id_pasien);
        $td->delete();
        return redirect()->route('data_pasien');

    }

}
