@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Siswa</div>

                <div class="card-body">
                    <a href="{{ route('daftarsiswa.create') }}" class = "btn btn-outline-primary float-right">
                        Tambah Siswa
                        </a>

                    <table class="table-responsive">
                    <table class ="table">
                    <thead>
                           <th> Nama Siswa</th>
                           <th> Kelas</th>
                           <th>Action</th>
                    </thead>
                    <tbody>
                       @foreach ($data as $item )
                       <tr>
                       <td> {{ $item->nama}} </td>
                       <td> {{ $item->kelas }} </td>
                       <form action = "{{route('daftarsiswa.destroy',$item->id)}}" method = "post">
                       @csrf
                       @method('DELETE')
                       <td> 
                       <a class = "btn btn-outline-info" href = "{{ route('daftarsiswa.show',$item->id)}}">Lihat</a> |
                       <a class = "btn btn-outline-warning " href = "{{ route('daftarsiswa.edit',$item->id)}}">Edit</a> | 
                       <button type = "submit" class="btn btn-outline-danger">Delete</button>     
                       </form>                
                        </td>
                    </tr>
                       @endforeach
                    </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection