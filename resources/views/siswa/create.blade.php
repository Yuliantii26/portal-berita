@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Siswa</div>
                <div class="card-body">
                   <form action="{{ route('daftarsiswa.store') }}" method="post">
                   @csrf 
                   <div class = "table-responsive">
                      <div class = "col-md-4">
                         <label for="">Masukan Nama Siswa</label>
                      </div>
                      <div class="col-md=8">
                          <input type="text" name="nama" class="form-control" required>
                      </div>
                      </div>
                    <div class="table-responsive">
                      <div class="col-md=4">
                          <label for="">Masukan Kelas</label>
                      </div>
                      <div class="col-md=8">
                          <input type="text" name="kelas" class="form-control" required>
                    </div>
                   </div>
                   <br>
                   <button class="btn btn-primary" type="submit">Simpan</button>
                   <button class="btn btn-danger" tytpe="reset">Reset</button>
                   </div>
                   </div>
                   </form>
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection