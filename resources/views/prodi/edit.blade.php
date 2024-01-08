@extends('layouts.app')

@section('content')
    <h1 class="mb-0">Form Edit</h1>
    <hr />
    <form action="{{ route('prodi.update', $prodi->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Kode Prodi</label>
            <input type="text" name="kode_prodi" class="form-control" placeholder="" value="{{ $prodi->kode_prodi }}">
        </div>

        <div class="form-group">
            <label for="title">Nama Prodi</label>
            <input type="text" name="nama_prodi" class="form-control" placeholder="" value="{{ $prodi->nama_prodi }}">
        </div>

        <div class="form-group">
            <label for="title">Fakultas</label>
            <input type="text" name="fakultas" class="form-control" placeholder="" value="{{ $prodi->fakultas }}">
        </div>

        <div class="form-group">
            <label for="title">Akreditasi</label>
            <input type="text" name="akreditas" class="form-control" placeholder="" value="{{ $prodi->akreditasi }}">
        </div>


       
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection