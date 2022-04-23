@extends('administrator.template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Administrator
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/admin') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nim" class="control-label">Nomor Induk Mahasiswa</label>
                                <input type="text" class="form-control" name="nim">
                            </div>
                            <div class="form-group">
                                <label for="nama" class="control-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <button class="btn btn-dark float-right">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
