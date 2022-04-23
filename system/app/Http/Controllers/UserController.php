<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kandidat;
use App\Models\User;


class UserController extends Controller {

	function beranda(){
		$data['dua'] = User::where('kelas', 'Teknik Informatika 2A')->orwhere('kelas','Teknik Informatika 2B')->count();
		$data['empat'] = User::where('kelas', 'Teknik Informatika 4A')->orwhere('kelas','Teknik Informatika 4B')->count();
		$data['enam'] = User::where('kelas', 'Teknik Informatika 6A')->orwhere('kelas','Teknik Informatika 6B')->count();
		$data['sudah_memilih'] = User::where('status', 'pemilih')->whereNotNull('pilihan')->count();
		return view('user.beranda', $data);
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
		$data['dua'] = User::where('kelas', 'Teknik Informatika 2A')->orwhere('kelas','Teknik Informatika 2B')->count();
		$data['empat'] = User::where('kelas', 'Teknik Informatika 4A')->orwhere('kelas','Teknik Informatika 4B')->count();
		$data['enam'] = User::where('kelas', 'Teknik Informatika 6A')->orwhere('kelas','Teknik Informatika 6B')->count();
		$data['sudah_memilih'] = User::where('status', 'pemilih')->whereNotNull('pilihan')->count();
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