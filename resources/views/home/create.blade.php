@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Daftar Obat') }}</div>

                <div class="card-body">
        <form action="{{route('addTambah')}}" method="post">
            @csrf
            <div class="mb-2">
                <label for="nameActivity">Nama Obat</label>
                <input type="text" name="name" class="form-control" id="nameActivity">
            </div>
            
            <label for="floatingInput">Jumlah Stok</label>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingInput" placeholder="Jumlah Stok" name="activity">
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
