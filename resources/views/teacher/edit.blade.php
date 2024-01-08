@extends('layouts.app')

@section('content')
    <h1 class="mb-0">Form Edit</h1>
    <hr />
    <form action="{{ route('teacher.update', $teacher->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">NIP</label>
            <input type="text" name="nip" class="form-control" placeholder="" value="{{ $teacher->nip }}">
        </div>

        <div class="form-group">
            <label for="title">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="" value="{{ $teacher->nama }}">
        </div>

        <div class="form-group">
            <label for="title">Gelar</label>
            <input type="text" name="gelar" class="form-control" placeholder="" value="{{ $teacher->gelar }}">
        </div>

        <div class="form-group">
            <label for="title">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" placeholder="" value="{{ $teacher->jabatan }}">
        </div>

       
        <div class="form-group">
            <label for="title">Fakultas</label>
            <input type="text" name="fakultas" class="form-control" placeholder="" value="{{ $teacher->fakultas}}">
        </div>

        <div class="form-group">
            <label for="title">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="" value="{{ $teacher->alamat }}">
        </div>

        <div class="form-group">
            <label for="title">Telepon</label>
            <input type="text" name="telepon" class="form-control" placeholder="" value="{{ $teacher->telepon }}">
        </div>


       
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection