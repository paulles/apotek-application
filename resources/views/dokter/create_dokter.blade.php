@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Daftar Data Dokter') }}</div>

                <div class="card-body">
        <form action="{{route('addTambah_dokter')}}" method="post">
            @csrf
            <div class="mb-2">
                <label for="id_dokter">Kode Dokter</label>
                <input type="text" name="id_dokter" class="form-control" id="id_dokter">
            </div>
            
            <div class="mb-2">
                <label for="nama_dokter">Nama Dokter</label>
                <input type="text" name="nama_dokter" class="form-control" id="nama_dokter">
            </div>
             
            <div class="mb-2">
                <label for="keahlian">Keahlian</label>
                <input type="text" name="keahlian" class="form-control" id="keahlian">
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
