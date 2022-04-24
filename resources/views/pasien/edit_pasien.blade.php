@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Daftar Pasien') }}</div>

                <div class="card-body">
        <form action="{{route('editSavePasien',$data_pasien->id)}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$data_pasien->id}}">
            <div class="mb-2">
                <label for="id_pasien">Kode Pasien</label>
                <input type="text" name="id_pasien" class="form-control" id="id_pasien" value="{{ $data_pasien->id_pasien }}">
            </div>
            <div class="mb-2">
                <label for="nama_pasien">Nama Pasien</label>
                <input type="text" name="nama_pasien" class="form-control" id="nama_pasien" value="{{ $data_pasien->nama_pasien }}">
            </div>
            <label for="umur">Umur</label>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="umur" placeholder="umur" name="umur" value="{{ $data_pasien->umur }}">
            </div>
            
            <div class="mb-2">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $data_pasien->alamat }}">
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
            <button class="btn btn-primary mt-2">Ubah Data</button>

        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
