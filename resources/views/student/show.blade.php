@extends('layouts.app')

@section('content')

<h1 class="mb-0">Form Show</Form></h1>
   

    

    <div class="form-group">
        <label for="title">NPM</label>
        <input type="text" name="npm" class="form-control" placeholder="" value="{{ $student->npm }}" readonly>
    </div>

    <div class="form-group">
        <label for="title">Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="" value="{{ $student->nama }}" readonly>
    </div>

    <div class="form-group">
        <label for="title">Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="" value="{{ $student->alamat }}" readonly>
    </div>
    <div class="form-group">
        <label for="title">Jurusan</label>
        <input type="text" name="jurusan" class="form-control" placeholder="" value="{{ $student->jurusan }}" readonly>
    </div>
    
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $student->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $student->updated_at }}" readonly>
        </div>
    </div>
        
   
          

            <div class="row">
                <div class="d-grid">
                    <a href="{{ route('student.index') }}" button class="btn btn-secondary">Back</a>
                </div>
            </div>
    </form>
   
      
@endsection