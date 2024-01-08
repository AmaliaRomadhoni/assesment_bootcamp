@extends('layouts.app')
@section('content')

<h1 class="mb-0">Form Create</h1>
<hr />

    <form action="{{ route('teacher.store') }}" method="POST">
    
     
        @csrf


        
            <div class="form-group" mb-3>
                <label for="title">Nomor Induk Pegawai</label>
                <input type="text" name="nip" class="form-control" placeholder="">
              @error('nip')
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
                <label for="title">Gelar</label>
                <input type="text" name="gelar" class="form-control" placeholder="">
                @error('gelar')
                <small>
                  {{ $message}}</small>
                  @enderror
              </div>

              <div class="form-group">
                <label for="title">Jabatan</label>
                <input type="text" name="jabatan" class="form-control" placeholder="">
                @error('jabatan')
                <small>
                  {{ $message}}</small>
                  @enderror
              </div>

             
            <div class="form-group">
                <label for="title">Fakultas</label>
                <input type="text" name="fakultas" class="form-control" placeholder="">
                @error('fakultas')
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
                <label for="title">Telepoon</label>
                <input type="text" name="telepon" class="form-control" placeholder="">
                @error('telepon')
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