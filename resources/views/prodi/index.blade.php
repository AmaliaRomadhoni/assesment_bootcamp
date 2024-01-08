@extends('layouts.app')
@section('content')



<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <td class="align-middle"><h3>Data Prodi</h3></h3>
 
            <div class="card-tools">
           

              <td><div>  <a href="{{ route('prodi.create') }}" button class="btn btn-primary">Add</a>
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
                <th>Kode Prodi</th>
                <th>Nama Prodi</th>
                <th>Fakultas</th>
                <th>Akreditasi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($prodis->count() > 0)
                @foreach($prodis as $prodi)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $prodi->kode_prodi }}</td>
                        <td class="align-middle">{{ $prodi->nama_prodi }}</td>
                        <td class="align-middle">{{ $prodi->fakultas }}</td>
                        <td class="align-middle">{{ $prodi->akreditasi }}</td>
                        <td class="align-middle">
                            
                                <div class="btn-group" role="group" aria-label="Basic example">
                                         <a href="{{ route('prodi.edit', $prodi->id)}}" class="btn btn-success"><i class="fas fa-pen"></i></a>
                                    <form action="{{ route('prodi.destroy', $prodi->id) }}" method="POST" type="button" class="nav-link text-danger  p-0" onsubmit="return confirm('Delete?')">
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