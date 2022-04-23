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
    
	function pilih(User $user){

		$user->pilihan = request('pilihan');
		$user->save();
		// dd($kandidat);
		return back()->with('success', 'Terima Kasih telah memilih');
	}

}
?>