@extends('administrator.template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Pendaftar
                        <a href="{{url('admin/pendaftar/create')}}" class="btn btn-dark float-right"><i class="fas fa-plus"></i>  Tambah</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/pendaftar') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nim" class="control-label">Nomor Induk Mahasiswa</label>
                                <input type="text" class="form-control" name="nim" minlength="10" maxlength="10">
                            </div>
                            <div class="form-group">
                                <label for="nama" class="control-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="no_hp" class="control-label">Nomor Telepon</label>
                                <input type="text" class="form-control" name="no_hp">
                            </div>
                            <div class="form-group">
                                <label for="kelas" class="control-label">Kelas</label>
                                <input type="text" class="form-control" name="kelas">
                            </div>
                            <button class="btn btn-dark float-right">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
