@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Daftar Data Pasien') }}</div>

                <div class="card-body">
        <form action="{{route('addTambah_pasien')}}" method="post">
            @csrf
            
            <div class="mb-2">
                <label for="id_pasien">Kode Pasien</label>
                <input type="text" name="id_pasien" class="form-control" id="id_pasien">
            </div>
            
            <div class="mb-2">
                <label for="nama_pasien">Nama Pasien</label>
                <input type="text" name="nama_pasien" class="form-control" id="nama_pasien">
            </div>
            
            <label for="umur">Umur</label>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="umur" placeholder="umur" name="umur">
            </div>

            <div class="mb-2">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat">
            </div>
            
            {{-- <div class="mb-2"></div>
            <label for="users">test Nama Obat</label>
            <select class="form-select" aria-label="Default select example" id="users" name="user_id">
                <option selected>Open this select menu</option>
                @foreach ($data as $key => $dt)
                    <option value="{{ $dt->id }}">{{$dt->name}}</option>                            
                @endforeach
            </select>
            --}}
            <button class="btn btn-primary mt-2">Tambah Data</button>

        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
