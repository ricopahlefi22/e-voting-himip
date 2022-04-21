@extends('administrator.template.base')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-3 mt-5">
				<div class="card">
					<div class="card-header">
						Pas Foto Kandidat
					</div>
					<div class="card-body">
						<img src="{{url('public')}}/{{$kandidat->foto}}" class="img-fluid rounded">
					</div>
				</div>
			</div>
			<div class="col-md-9 mt-5">
				<div class="card">
					<div class="card-header">
						Edit Data Kandidat
					</div>
					<div class="card-body">
						<form action="{{url('admin/kandidat', $kandidat->id)}}" method="post" enctype="multipart/form-data">
							@csrf
							@method("PUT")
                            <div class="form-group">
                                <label for="foto" class="control-label">Pas Foto Pasangan Calon</label>
                                <input type="file" class="form-control" name="foto" accept="image/*">
                            </div>
                            <div class="form-group">
                                <label for="nama_pasangan" class="control-label">Nama Pasangan Calon</label>
                                <input type="text" class="form-control" name="nama_pasangan" value="{{$kandidat->nama_pasangan}}">
                            </div>
                            <div class="form-group">
                                <label for="visi" class="control-label">Visi</label>
                                <textarea name="visi" class="form-control">{{$kandidat->visi}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="misi" class="control-label">Misi</label>
                                <textarea name="misi" class="form-control">{{$kandidat->misi}}</textarea>
                            </div>
							<button class="btn btn-dark float-right">Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection