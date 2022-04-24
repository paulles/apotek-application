<?php

namespace App\Http\Controllers;

use App\Models\Data_dokter;
use App\Models\User;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    //
    public function create_dokter(){
        $data_dokter = User::all();
        return view('dokter.create_dokter', compact('data_dokter'));
    }

    public function addTambah_dokter(Request $request)
    {
        $tambah1 =new Data_dokter();
        $tambah1->id_dokter=$request->id_dokter;
        $tambah1->nama_dokter=$request->nama_dokter;
        $tambah1->keahlian=$request->keahlian;
        
        // $tambah->user_id=$request->user_id;
        $tambah1->save();

        return redirect()->route('data_dokter');
    }

    public function ubah_dokter($id){
        $data = Data_dokter::findOrFail($id);
        $user = User::all();
        return view('dokter.edit_dokter', compact(['data','user']));
    }  

    public function editSaveDokter(Request $request, $id)
    {
        $tambah=Data_dokter::find($id);
        $tambah->nama_dokter=$request->nama_dokter;
        $tambah->keahlian=$request->keahlian;
        // $tambah->umur=$request->umur;
        // $tambah->user_id=$request->user_id;
        $tambah->save();

        return redirect()->route('data_dokter');        
    }   


    public function editSave_dokter(Request $request, $id)
    {
        $tambah=Data_dokter::find($id);
        $tambah->nama_dokter=$request->nama_dokter;
        $tambah->keahlian=$request->keahlian;
        // $tambah->user_id=$request->user_id;
        $tambah->save();

        return redirect()->route('data_dokter');
    }   
    

    public function delete_dokter($id_dokter){
        $td = Data_dokter::findOrFail($id_dokter);
        $td->delete();
        return redirect()->route('data_dokter');

    }

}