@extends('administrator.template.base')


@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Tabel Data Kandidat
						<a href="{{url('admin/kandidat/create')}}" class="btn btn-dark float-right"><i class="fas fa-plus"></i>  Tambah</a>
					</div>
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>NO</th>
									<th>Aksi</th>
									<th>Nomor Urut</th>
									<th>Nama Pasangan Calon</th>
									<th>Foto</th>
								</tr>
							</thead>
							<tbody>
								@foreach($list_kandidat as $kandidat)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
											<a href="{{url('admin/kandidat', $kandidat->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
											<a href="{{url('admin/kandidat', $kandidat->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<form action="{{url('admin/kandidat', $kandidat->id)}}" method="post" class="form-inline" onsubmit="return confirm('Yakin akan menghapus data ini???')">
												@csrf
												@method("delete")
												<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
											</form>	
										</div>
									</td>
									<td>{{$kandidat->no_urut}}</td>
									<td>{{$kandidat->nama_pasangan}}</td>
									<td><img src="{{url('public')}}/{{$kandidat->foto}}" width="100"></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
@endsection