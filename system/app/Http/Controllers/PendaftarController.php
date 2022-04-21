<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Str;

class PendaftarController extends Controller {

    function index(){
        $data['list_pendaftar'] = User::where('status', 'pendaftar')->get();
        return view('administrator.pendaftar.index', $data);
    }

    function show($id){
		$data['pendaftar'] = User::find($id);
		return view('administrator.pendaftar.show', $data); 
	}

	function create(){
		return view('administrator.pendaftar.create');
	}

    function store(){
		$pendaftar = new User;
        $pendaftar->nim = request('nim');
		$pendaftar->nama = request('nama');
        $pendaftar->no_hp = request('no_hp');
		$pendaftar->status = 'pendaftar';
		$pendaftar->save();
		// dd($pendaftar);

		return redirect('/admin/pendaftar')->with('success', 'Data Berhasil Ditambahkan');
	}

    function edit(User $pendaftar){
		$data['pendaftar'] = $pendaftar;
		return view('administrator.pendaftar.edit', $data); 
	}

	function update(User $pendaftar){
        $pendaftar->nim = request('nim');
		$pendaftar->nama = request('nama');
        $pendaftar->no_hp = request('no_hp');
		$pendaftar->save();
		// dd($pendaftar);

		return redirect('admin/pendaftar')->with('warning', 'Data Berhasil Diubah');
	}

	function verifikasi(User $pendaftar){
		$kodeakses = Str::random(5);
		$pendaftar->kode_akses = $kodeakses;
		$pendaftar->status = 'pemilih';
		$pendaftar->save();
		// dd($pendaftar);

		return redirect('admin/pendaftar')->with('warning', 'Data Berhasil Diubah');
	}

    function destroy(User $pendaftar){
		$pendaftar->delete();

		return redirect('admin/pendaftar')->with('danger', 'Data Berhasil Dihapus');
	}

}
?>