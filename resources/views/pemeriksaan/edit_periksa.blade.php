@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Daftar Pemeriksaan') }}</div>

                <div class="card-body">
        <form action="{{route('editSavePeriksa',$data_pasien->id)}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$data_pasien->id}}">
            <div class="mb-2">
                <label for="id_periksa">Kode Pemeriksaan</label>
                <input type="text" name="id_periksa" class="form-control" id="id_periksa" value="{{ $data_pasien->id_pasien }}">
            </div>
            <div class="mb-2">
                <label for="tgl_periksa">Tanggal Pemeriksaan</label>
                <input type="text" name="tgl_periksa" class="form-control" id="tgl_periksa" value="{{ $data_pasien->nama_pasien }}">
            </div>
            <label for="id_dokter">Kode Dokter</label>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="id_dokter" placeholder="id_dokter" name="umur" value="{{ $data_pasien->umur }}">
            </div>
            
            <div class="mb-2">
                <label for="id_pasien">Kode Pasien</label>
                <input type="text" name="id_pasien" class="form-control" id="id_pasien" value="{{ $data_pasien->alamat }}">
            </div>
            
            <div class="mb-2">
                <label for="hsl_diagnosa">Hasil Diagnosa</label>
                <input type="text" name="hsl_diagnosa" class="form-control" id="hsl_diagnosa" value="{{ $data_pasien->alamat }}">
            </div>

            <div class="mb-2">
                <label for="id_obat">Kode Obat</label>
                <input type="text" name="id_obat" class="form-control" id="id_obat" value="{{ $data_pasien->alamat }}">
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
