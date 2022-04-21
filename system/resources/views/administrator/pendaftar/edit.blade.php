@extends('administrator.template.base')

@section('content')
	
	<div class="container">
		<div class="row">
            <div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Edit Data Pendaftar {{$pendaftar->id}}
					</div>
					<div class="card-body">
						<form action="{{url('admin/pendaftar', $pendaftar->id)}}" method="post" enctype="multipart/form-data">
							@csrf
							@method("put")
                            <div class="form-group">
                                <label for="nim" class="control-label">Nomor Induk Mahasiswa</label>
                                <input type="text" class="form-control" name="nim" minlength="10" maxlength="10" value="{{$pendaftar->nim}}">
                            </div>
                            <div class="form-group">
                                <label for="nama" class="control-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" value="{{$pendaftar->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="no_hp" class="control-label">Nomor Telepon</label>
                                <input type="text" class="form-control" name="no_hp" value="{{$pendaftar->no_hp}}">
                            </div>
							<button class="btn btn-dark float-right">Simpan</button>
						</form>
					</div>
				</div>
            </div>
		</div>
	</div>


@endsection