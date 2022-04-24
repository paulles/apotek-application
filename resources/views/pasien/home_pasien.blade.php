@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Pasien') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }} --}}
                    <a href="{{route('create_pasien')}}" type="button" class="btn btn-dark mb-4">Tambah data pasien</a>
                    <table class="table table-bordered">
                        <thead>
                          <tr align="center">
                            <th scope="col">No</th>  
                            <th scope="col">Kode Pasien</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Alamat</th>                            
                            {{-- <th scope="col">Test1</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th> --}}
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($data_pasien as $key => $dt_pasien)

                            <tr align="center">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <th scope="row">{{ $dt_pasien->id_pasien }}</th>
                                <th scope="row">{{ $dt_pasien->nama_pasien }}</th>
                                <th scope="row">{{ $dt_pasien->umur }}</th>
                                <th scope="row">{{ $dt_pasien->alamat }}</th>
                                {{-- <th scope="row">{{ $dt->user->name }}</th>
                                <th scope="row">{{ $dt->name }}</th>
                                <th scope="row">{{ $dt->created_at->format('d M Y') }}</th> --}}
                                <th scope="row">
                                <a href="{{route('ubah_pasien',$dt_pasien->id)}}" class="btn btn-warning btn-sm">Update</a> 
                                <form action="{{route('delete_pasien',$dt_pasien->id)}}" method="POST" onsubmit=" return confirm('Apakah anda yakin?');">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </th>
                            </tr>
    
                            @endforeach
                        </tbody>
                      </table>

                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
