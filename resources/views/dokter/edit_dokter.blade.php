@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Daftar Obat') }}</div>

                <div class="card-body">
        <form action="{{route('editSave_dokter',$data->id)}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$data->id}}">
            <div class="mb-2">
                <label for="nama_dokter">Nama Dokter</label>
                <input type="text" name="nama_dokter" class="form-control" id="name_dokter" value="{{ $data->nama_dokter}}">
            </div>
            <div class="mb-2">
                <label for="keahlian">Keahlian</label>
                <input type="text" name="keahlian" class="form-control" id="keahlian" value="{{ $data->keahlian}}">
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
            <button class="btn btn-primary mt-2">Edit Data</button>

        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
