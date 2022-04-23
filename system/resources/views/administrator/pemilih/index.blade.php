@extends('administrator.template.base')

@push('script')
<script>
	$(function () {
	  $("#example1").DataTable({
		"responsive": true, "lengthChange": false, "autoWidth": false,
		"buttons": ["print","pdf","csv","colvis"]
	  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
	  $('#example2').DataTable({
		"paging": true,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": true,
		"autoWidth": true,
		"responsive": true,
	  });
	});
  </script>
@endpush

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Tabel Data Pemilih
					</div>
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>NO</th>
									<th>Aksi</th>
									<th>NIM</th>
									<th>Kode Akses</th>
									<th>Nama</th>
									<th>No Handphone</th>
									<th>Kelas</th>
									<th>Dibuat</th>
								</tr>
							</thead>
							<tbody>
								@foreach($list_pemilih as $pemilih)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
											<a href="{{url('admin/pemilih', $pemilih->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<form action="{{url('admin/pemilih', $pemilih->id)}}" method="post" class="form-inline" onsubmit="return confirm('Yakin akan menghapus data ini???')">
												@csrf
												@method("delete")
												<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
											</form>	
											<a href="https://api.whatsapp.com/send?phone=62{{$pemilih->no_hp}}&text=Halo {{$pemilih->nama}}! Silahkan Lakukan Pemilihan Calon Ketua dan Wakil Ketua HIMIP 2022/2023 di evoting-himip.com ! %0A%0ANIM : {{$pemilih->nim}} %0AKode Akses : {{$pemilih->kode_akses}} " target="/blank" class="btn btn-success">WA</a>

										</div>
									</td>
									<td>{{$pemilih->nim}}</td>
									<td>
										{{$pemilih->kode_akses}}
										{{-- <form action="{{url('admin/refresh', $pemilih->id)}}" method="post" class="form-inline" onsubmit="return confirm('Yakin akan menghapus data ini???')">
											@csrf
											@method("delete")
											<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
										</form>	 --}}
									</td>
									<td>{{$pemilih->nama}}</td>
									<td>{{$pemilih->no_hp}}</td>
									<td>{{$pemilih->kelas}}</td>
									<td>{{$pemilih->created_at}}</td>
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