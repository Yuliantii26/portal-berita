@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Siswa</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                 
                   <div class = "card-body">
                      <div class = "form-group">
                      <label for="">Nama Siswa</label>
                      <input type="text" value="{{$siswa->nama}}" readonly name = "nama" class>
                      </div>
                      </div>
                      <div class="form-group">
                          <label for=""> Kelas</label>
                          <input type="text" value="{{$siswa->kelas}}" readonly name = "nama" class>
                          </div>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection