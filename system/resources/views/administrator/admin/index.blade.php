@extends('administrator.template.base')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Tabel Data Administrator
						<a href="{{url('admin/admin/create')}}" class="btn btn-dark float-right"><i class="fas fa-plus"></i>  Tambah</a>
					</div>
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>NO</th>
									<th>Aksi</th>
									<th>Nama</th>
								</tr>
							</thead>
							<tbody>
								@foreach($list_admin as $admin)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
											<a href="{{url('admin/admin', $admin->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<form action="{{url('admin/admin', $admin->id)}}" method="post" class="form-inline" onsubmit="return confirm('Yakin akan menghapus data ini???')">
												@csrf
												@method("delete")
												<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
											</form>	
										</div>
									</td>
									<td>{{$admin->nama}}</td>
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