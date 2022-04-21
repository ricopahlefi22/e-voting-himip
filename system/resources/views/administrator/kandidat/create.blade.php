@extends('administrator.template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Promotor
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/kandidat') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="foto" class="control-label">Pas Foto Pasangan Calon</label>
                                <input type="file" class="form-control" name="foto" accept="image/*">
                            </div>
                            <div class="form-group">
                                <label for="nama_pasangan" class="control-label">Nama Pasangan Calon</label>
                                <input type="text" class="form-control" name="nama_pasangan">
                            </div>
                            <div class="form-group">
                                <label for="visi" class="control-label">Visi</label>
                                <textarea name="visi" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="misi" class="control-label">Misi</label>
                                <textarea name="misi" class="form-control"></textarea>
                            </div>
                            <button class="btn btn-dark float-right">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
