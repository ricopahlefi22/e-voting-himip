<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kandidat;
use App\Models\User;


class UserController extends Controller {

	function beranda(){
		return view('user.beranda');
	}

	function pendaftaran(){
		return view('user.pendaftaran');
	}

	function store(){
		$pendaftar = new User;
        $pendaftar->nim = request('nim');
		$pendaftar->nama = request('nama');
        $pendaftar->no_hp = request('no_hp');
		$pendaftar->kelas = request('kelas');
		$pendaftar->status = 'pendaftar';
		$pendaftar->save();

		return redirect('/masuk')->with('success', 'Pendaftaran Berhasil');
	}

	function masuk(){
		return view('user.masuk');
	}
	
	function pemilihan(){
		$data['list_kandidat'] = Kandidat::all();
		return view('user.pemilihan', $data);
	}
    // function index(){
    //     $data['list_pemilih'] = User::where('status', 'pemilih')->get();
    //     return view('administrator.pemilih.index', $data);
    // }

    // function show($id){
	// 	$data['pemilih'] = User::find($id);
	// 	return view('administrator.pemilih.show', $data); 
	// }

	// function create(){
	// 	return view('administrator.pemilih.create');
	// }

    // function store(){
	// 	$pemilih = new User;
    //     $pemilih->nim = request('nim');
	// 	$pemilih->nama = request('nama');
    //     $pemilih->no_hp = request('no_hp');
	// 	$pemilih->status = 'pemilih';
	// 	$pemilih->save();
	// 	// dd($pemilih);

	// 	return redirect('/admin/pemilih')->with('success', 'Data Berhasil Ditambahkan');
	// }

    // function edit(User $pemilih){
	// 	$data['pemilih'] = $pemilih;
	// 	return view('administrator.pemilih.edit', $data); 
	// }

	// function update(User $pemilih){
    //     $pemilih->nim = request('nim');
	// 	$pemilih->nama = request('nama');
    //     $pemilih->no_hp = request('no_hp');
	// 	$pemilih->save();
	// 	// dd($pemilih);

	// 	return redirect('admin/pemilih')->with('warning', 'Data Berhasil Diubah');
	// }

    // function destroy(User $pemilih){
	// 	$pemilih->delete();

	// 	return redirect('admin/pemilih')->with('danger', 'Data Berhasil Dihapus');
	// }

}
?>