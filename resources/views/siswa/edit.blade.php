@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Siswa</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                   <form action="{{ route('daftarsiswa.update',$siswa->id) }}" method="POST">
                   @csrf 
                   @method('PUT')
                   
                   <div class = "form-group">
                      <label for=""> Nama Siswa</label>
                      <input type="text" name="nama" value="{{$siswa->nama}}"  class="form-control">
                      </div>

                      <div class="form-group">
                          <label for=""> Kelas</label>
                          <input type="text" name = "kelas" value="{{$siswa->kelas}}"  class="form-control">
                      </div>
                      
                   </div>
                   <button class="btn btn-outline-danger" type="submit">Simpan</button>
                   
                   </div>
                   </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection