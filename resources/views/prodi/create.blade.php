@extends('layouts.app')
@section('content')

<h1 class="mb-0">Form Create</h1>
<hr />

    <form action="{{ route('prodi.store') }}" method="POST">
    
     
        @csrf


        
            <div class="form-group" mb-3>
                <label for="title">Kode Prodi</label>
                <input type="text" name="kode_prodi" class="form-control" placeholder="">
              @error('npm')
              <small>
                {{ $message}}</small>
                @enderror
              </div>

             
  
              <div class="form-group">
                <label for="title">Nama Prodi</label>
                <input type="text" name="nama_prodi" class="form-control" placeholder="">
                @error('nama')
                <small>
                  {{ $message}}</small>
                  @enderror
              </div>
  
              <div class="form-group">
                <label for="title">Fakultas</label>
                <input type="text" name="fakultas" class="form-control" placeholder="">
                @error('alamat')
                <small>
                  {{ $message}}</small>
                  @enderror
              </div>

              <div class="form-group">
                <label for="title">Akreditasi</label>
                <input type="text" name="akreditasi" class="form-control" placeholder="">
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