@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Pemeriksaan') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }} --}}
                    <a href="{{route('create_periksa')}}" type="button" class="btn btn-dark mb-4">Tambah data pasien</a>
                    <table class="table table-bordered">
                        <thead>
                          <tr align="center">
                            <th scope="col">No</th>  
                            <th scope="col">Kode Pemeriksaan</th>
                            <th scope="col">Tanggal Pemeriksaan</th>
                            <th scope="col">Kode Dokter</th>
                            <th scope="col">Kode Pasien</th>                            
                            <th scope="col">Hasil Diagnosa</th>                            
                            <th scope="col">Kode Obat</th>                            
                            
                            {{-- <th scope="col">Test1</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th> --}}
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($data_periksa as $key => $dt_periksa)

                            <tr align="center">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <th scope="row">{{ $dt_periksa->id_periksa }}</th>
                                <th scope="row">{{ $dt_periksa->tgl_periksa }}</th>
                                <th scope="row">{{ $dt_periksa->id_dokter }}</th>
                                <th scope="row">{{ $dt_periksa->id_pasien }}</th>
                                <th scope="row">{{ $dt_periksa->hsl_diagnosa }}</th>
                                <th scope="row">{{ $dt_periksa->id_obat }}</th>

                                {{-- <th scope="row">{{ $dt->user->name }}</th>
                                <th scope="row">{{ $dt->name }}</th>
                                <th scope="row">{{ $dt->created_at->format('d M Y') }}</th> --}}
                                <th scope="row">
                                {{-- <a href="{{route('ubah_periksa',$dt_periksa->id)}}" class="btn btn-warning btn-sm">Update</a>  --}}
                                <form action="{{route('delete_periksa',$dt_periksa->id)}}" method="POST" onsubmit=" return confirm('Apakah anda yakin?');">
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
