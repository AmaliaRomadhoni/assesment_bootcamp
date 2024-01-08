@extends('layouts.app')
@section('content')

<h1 class="mb-0">Form Create</h1>
<hr />

    <form action="{{ route('student.store') }}" method="POST">
    
     
        @csrf


        
            <div class="form-group" mb-3>
                <label for="title">NPM</label>
                <input type="text" name="npm" class="form-control" placeholder="">
              @error('npm')
              <small>
                {{ $message}}</small>
                @enderror
              </div>

             
  
              <div class="form-group">
                <label for="title">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="">
                @error('nama')
                <small>
                  {{ $message}}</small>
                  @enderror
              </div>
  
              <div class="form-group">
                <label for="title">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="">
                @error('alamat')
                <small>
                  {{ $message}}</small>
                  @enderror
              </div>

              <div class="form-group">
                <label for="title">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" placeholder="">
                @error('description')
                <small>
                  {{ $message}}</small>
                  @enderror
            </div>
       
        
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection