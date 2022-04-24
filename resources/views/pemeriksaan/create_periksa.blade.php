@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Daftar Data Pemeriksaan') }}</div>

                <div class="card-body">
        <form action="{{route('addTambah_periksa')}}" method="post">
            @csrf
            
            <div class="mb-2">
                <label for="id_periksa">Kode Pemeriksaan</label>
                <input type="text" name="id_periksa" class="form-control" id="id_periksa">
            </div>
            
            <div class="mb-2">
                <label for="tgl_periksa">Tanggal Pemeriksaan</label>
                <input type="text" name="tgl_periksa" class="form-control" id="tgl_periksa">
            </div>
            
            {{-- <label for="id_dokter">Kode Dokter</label>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="id_dokter" placeholder="id_dokter" name="id_dokter">
            </div> --}}

            <div class="mb-2"></div>
            <label for="id_dokter">Nama Dokter</label>
            <select class="form-select" aria-label="Default select example" id="id_dokter" name="id_dokter">
                <option selected>Pilihan nama dokter</option>
                @foreach ($data_dokter as $key => $dt)
                    <option value="{{ $dt->id }}">{{$dt->nama_dokter}}</option>                            
                @endforeach
            </select>
           

            {{-- <div class="mb-2">
                <label for="id_pasien">Nama Pasien</label>
                <input type="text" name="id_pasien" class="form-control" id="id_pasien">
            </div> --}}
            
            <div class="mb-2"></div>
            <label for="id_pasien">Nama Pasien</label>
            <select class="form-select" aria-label="Default select example" id="id_pasien" name="id_pasien">
                <option selected>Pilihan nama pasien</option>
                @foreach ($data_pasien as $key => $dt)
                    <option value="{{ $dt->id}}">{{$dt->nama_pasien}}</option>                            
                @endforeach
            </select>
           
            <div class="mb-2">
                <label for="hsl_diagnosa">Hasil Diagnosa</label>
                <input type="text" name="hsl_diagnosa" class="form-control" id="hsl_diagnosa">
            </div>

            <div class="mb-2"></div>
            <label for="user_id">Nama Obat</label>
            <select class="form-select" aria-label="Default select example" id="id_obat" name="id_obat">
                <option selected>Pilihan nama obat</option>
                @foreach ($data_obat as $key => $dt)
                    <option value="{{ $dt->id }}">{{$dt->name}}</option>                            
                @endforeach
            </select>
            
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
