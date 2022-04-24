<?php

namespace App\Http\Controllers;

use App\Models\Tambah;
use App\Models\User;
use Illuminate\Http\Request;

class TambahController extends Controller
{
    //  
    public function create()
    {
        $data = User::all();
        return view('home.create', compact('data'));
    }

    
    public function addTambah(Request $request)
    {
        $tambah=new Tambah();
        $tambah->name=$request->name;
        $tambah->activity=$request->activity;
        // $tambah->user_id=$request->user_id;
        $tambah->save();

        return redirect()->route('home');
    }

    public function edit($id)
    {
        $data = Tambah::findOrFail($id);
        $user = User::all();
        return view('home.edit', compact(['data','user']));
    }

    
    public function editTambah(Request $request, $id)
    {
        $tambah=Tambah::find($id);
        $tambah->name=$request->name;
        $tambah->activity=$request->activity;
        // $tambah->user_id=$request->user_id;
        $tambah->save();

        return redirect()->route('home');
    }   

    public function deleteTambah($id){
        $td = Tambah::find($id);
        $td->delete();
        return redirect()->route('home');

    }

}