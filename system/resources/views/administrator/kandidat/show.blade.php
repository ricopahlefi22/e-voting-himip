@extends('administrator.template.base')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Kandidat
						<a href="{{url('admin/kandidat')}}" class="btn btn-dark float-right"><i class="fas fa-arrow-left"></i>  Kembali</a>
					</div>
					<div class="card-body">
						<div class="container row">
							<div class="col-md-1"></div>
							<div class="col-md-4">
								<img class="img-rounded" src="{{url('public')}}/{{$kandidat->foto}}" alt="Pas Foto Promotor" width="200">
							</div>
							<div class="col-md-6">
								<h1 class="text-center text-bold">{{$kandidat->no_urut}}</h1>
								<hr>
								<table>
									<tr>
										<th>
											Nama Pasangan Calon &nbsp;
										</th>
										<td>
											:
										</td>
										<td>
											&nbsp; &nbsp; {{$kandidat->nama_pasangan}}
										</td>
									</tr>
									<tr>
										<th>
											Visi &nbsp;
										</th>
										<td>
											:
										</td>
										<td>
											&nbsp; &nbsp; {{$kandidat->visi}}
										</td>
									</tr>
									<tr>
										<th>
											Alamat &nbsp;
										</th>
										<td>
											:
										</td>
										<td>
											&nbsp; &nbsp; {{$kandidat->misi}}
										</td>
									</tr>
								</table>
								<br>
								<p>"{{$kandidat->deskripsi}}"</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection