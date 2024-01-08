@extends('layouts.app')

@section('content')
    <h1 class="mb-0">Form Edit</h1>
    <hr />
    <form action="{{ route('student.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">NPM</label>
            <input type="text" name="npm" class="form-control" placeholder="" value="{{ $student->npm }}">
        </div>

        <div class="form-group">
            <label for="title">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="" value="{{ $student->nama }}">
        </div>

        <div class="form-group">
            <label for="title">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="" value="{{ $student->alamat }}">
        </div>

        <div class="form-group">
            <label for="title">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" placeholder="" value="{{ $student->jurusan }}">
        </div>


       
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection