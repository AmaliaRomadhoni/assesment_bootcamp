@extends('layouts.app')
@section('content')

<h1 class="mb-0">Form Create</h1>
<hr />

    <form action="{{ route('book.store') }}" method="POST">
    
     
        @csrf


        
            <div class="form-group" mb-3>
                <label for="title">Nama Mata kuliah</label>
                <input type="text" name="name" class="form-control" placeholder="">
              @error('name')
              <small>
                {{ $message}}</small>
                @enderror
              </div>

             
  
              <div class="form-group">
                <label for="title">SKS</label>
                <input type="text" name="author" class="form-control" placeholder="">
                @error('author')
                <small>
                  {{ $message}}</small>
                  @enderror
              </div>
  
              <div class="form-group">
                <label for="title">Semester</label>
                <input type="text" name="year" class="form-control" placeholder="">
                @error('year')
                <small>
                  {{ $message}}</small>
                  @enderror
              </div>

              <div class="form-group">
                <label for="title">Deskripsi</label>
                <input type="text" name="description" class="form-control" placeholder="">
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