@extends('layouts.app')
@section('content')



<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <td class="align-middle"><h3>Data Mahasiswa</h3></h3>
 
            <div class="card-tools">
           

              <td><div>  <a href="{{ route('student.create') }}" button class="btn btn-primary">Add</a>
        </div></td>
              
            </div>
          </div>
        </div>


 <!-- /.card-header -->
 <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <thead>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
                <th>No</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jurusan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($students->count() > 0)
                @foreach($students as $student)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $student->npm }}</td>
                        <td class="align-middle">{{ $student->nama }}</td>
                        <td class="align-middle">{{ $student->alamat }}</td>
                        <td class="align-middle">{{ $student->jurusan }}</td>
                        <td class="align-middle">
                            
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('student.show', $student->id)}}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('student.edit', $student->id)}}" class="btn btn-success"><i class="fas fa-pen"></i></a>
                                    <form action="{{ route('student.destroy', $student->id) }}" method="POST" type="button" class="nav-link text-danger  p-0" onsubmit="return confirm('Delete?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="nav-link text-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                        </tr>
                @endforeach
            @else 
                <tr>
                    <td class="text-center" colspan="5">Book not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection