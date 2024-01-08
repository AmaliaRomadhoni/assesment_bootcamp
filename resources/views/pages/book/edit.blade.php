@extends('layouts.app')

@section('content')
    <h1 class="mb-0">Form Edit</h1>
    <hr />
    <form action="{{ route('book.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Nama Mata Kuliah</label>
            <input type="text" name="name" class="form-control" placeholder="" value="{{ $book->name }}">
        </div>

        <div class="form-group">
            <label for="title">SKS</label>
            <input type="text" name="author" class="form-control" placeholder="" value="{{ $book->author }}">
        </div>

        <div class="form-group">
            <label for="title">Semester</label>
            <input type="text" name="year" class="form-control" placeholder="" value="{{ $book->year }}">
        </div>

        <div class="form-group">
            <label for="title">Desripsi</label>
            <input type="text" name="description" class="form-control" placeholder="" value="{{ $book->description }}">
        </div>


       
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection