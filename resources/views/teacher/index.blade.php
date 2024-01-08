@extends('layouts.app')
@section('content')



<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <td class="align-middle"><h3>Data Dosen</h3></h3>
 
            <div class="card-tools">
           

              <td><div>  <a href="{{ route('teacher.create') }}" button class="btn btn-primary">Add</a>
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
                <th>NIP</th>
                <th>Nama</th>
                <th>Gelar</th>
                <th>Jabatan</th>
                <th>Fakultas</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($teachers->count() > 0)
                @foreach($teachers as $teacher)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $teacher->nip }}</td>
                        <td class="align-middle">{{ $teacher->nama }}</td>
                        <td class="align-middle">{{ $teacher->gelar }}</td>
                        <td class="align-middle">{{ $teacher->jabatan }}</td>  
                        <td class="align-middle">{{ $teacher->fakultas }}</td>
                        <td class="align-middle">{{ $teacher->alamat }}</td>
                        <td class="align-middle">{{ $teacher->telepon }}</td>
                        <td class="align-middle">
                            
                                <div class="btn-group" role="group" aria-label="Basic example">
                                  <a href="{{ route('teacher.edit', $teacher->id)}}" class="btn btn-success"><i class="fas fa-pen"></i></a>
                                    <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST" type="button" class="nav-link text-danger  p-0" onsubmit="return confirm('Delete?')">
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