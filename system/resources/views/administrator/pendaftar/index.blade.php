@extends('administrator.template.base')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Tabel Data Pendaftar
						<a href="{{url('admin/pendaftar/create')}}" class="btn btn-dark float-right"><i class="fas fa-plus"></i>  Tambah</a>
					</div>
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>NO</th>
									<th>Aksi</th>
									<th>Nama</th>
									<th>Nomor Telepon</th>
								</tr>
							</thead>
							<tbody>
								@foreach($list_pendaftar as $pendaftar)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
											<a href="{{url('admin/pendaftar', $pendaftar->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<form action="{{url('admin/pendaftar', $pendaftar->id)}}" method="post" class="form-inline" onsubmit="return confirm('Yakin akan menghapus data ini???')">
												@csrf
												@method("delete")
												<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
											</form>	
										</div><br>
										<div class="btn-group mt-2">
											<form action="{{url('admin/pendaftar/verifikasi', $pendaftar->id)}}" method="post" class="form-inline" onsubmit="return confirm('Yakin Menerima {{$pendaftar->nama}} sebagai Promotor ?')">
												@csrf
												@method("put")
												<button class="btn btn-success">Verifikasi &nbsp;<i class="fa fa-check"></i></button>
											</form>	
										</div>
										<div class="btn-group mt-2">
											<a class="btn btn-danger" >Tolak &nbsp;X</a>
										</div>
									</td>
									<td>{{$pendaftar->nama}}</td>
									<td>{{$pendaftar->no_hp}}</td>
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