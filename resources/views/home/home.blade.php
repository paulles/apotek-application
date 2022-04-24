@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }} --}}
                    <a href="{{route('create')}}" type="button" class="btn btn-dark mb-4">Tambah data</a>
                    <table class="table table-bordered">
                        <thead>
                          <tr align="center">
                            <th scope="col">Kode Obat</th>
                            <th scope="col">Nama Obat</th>
                            <th scope="col">Jumlah Stok</th>
                            {{-- <th scope="col">Test1</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th> --}}
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $dt)

                            <tr align="center">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <th scope="row">{{ $dt->name }}</th>
                                <th scope="row">{{ $dt->activity }}</th>
                                {{-- <th scope="row">{{ $dt->user->name }}</th>
                                <th scope="row">{{ $dt->name }}</th>
                                <th scope="row">{{ $dt->created_at->format('d M Y') }}</th> --}}
                                <th scope="row"><a href="{{route('edit',$dt->id)}}" class="btn btn-primary btn-sm">Update</a>

                                <form action="{{route('deleteTambah',$dt->id)}}" method="POST" onsubmit=" return confirm('Apakah anda yakin?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button></th>
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
