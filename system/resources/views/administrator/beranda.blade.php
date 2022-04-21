@extends('administrator.template.base')

@section('content')
	
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Selamat datang !
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-3 col-6">
							  <div class="small-box bg-info">
								<div class="inner">
								  <h3>{{$pemilih}}</h3>
				  
								  <p>Data Promotor</p>
								</div>
								<div class="icon">
								  <i class="fa fa-user"></i>
								</div>
								{{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
							  </div>
							</div>
							<div class="col-lg-3 col-6">
							  <div class="small-box bg-success">
								<div class="inner">
								  <h3>{{$pendaftar}}</h3>
				  
								  <p>Data Pendaftar</p>
								</div>
								<div class="icon">
								  <i class="fa fa-user-ninja"></i>
								</div>
								{{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
							  </div>
							</div>
							<div class="col-lg-3 col-6">
							  <div class="small-box bg-warning">
								<div class="inner">
								  <h3 class="text-white">{{$user}}</h3>
				  
								  <p class="text-white">Pengguna</p>
								</div>
								<div class="icon">
								  <i class="fa fa-comment"></i>
								</div>
								{{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
							  </div>
							</div>
							<div class="col-lg-3 col-6">
							  <div class="small-box bg-danger">
								<div class="inner">
								  <h3>65</h3>
				  
								  <p>Unique Visitors</p>
								</div>
								<div class="icon">
								  <i class="fa fa-birthday-cake"></i>
								</div>
								{{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
							  </div>
							</div>
						  </div>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection