<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Str;

class PemilihController extends Controller {

    function index(){
        $data['list_pemilih'] = User::where('status', 'pemilih')->get();
        return view('administrator.pemilih.index', $data);
    }

    function show($id){
		$data['pemilih'] = User::find($id);
		return view('administrator.pemilih.show', $data); 
	}

	function create(){
		return view('administrator.pemilih.create');
	}

    function store(){
		$pemilih = new User;
        $pemilih->nim = request('nim');
		$pemilih->nama = request('nama');
        $pemilih->no_hp = request('no_hp');
		$pemilih->status = 'pemilih';
		$pemilih->save();
		// dd($pemilih);

		return redirect('/admin/pemilih')->with('success', 'Data Berhasil Ditambahkan');
	}

    function edit(User $pemilih){
		$data['pemilih'] = $pemilih;
		return view('administrator.pemilih.edit', $data); 
	}

	function update(User $pemilih){
        $pemilih->nim = request('nim');
		$pemilih->nama = request('nama');
        $pemilih->no_hp = request('no_hp');
		$pemilih->save();
		// dd($pemilih);

		return redirect('admin/pemilih')->with('warning', 'Data Berhasil Diubah');
	}

    function destroy(User $pemilih){
		$pemilih->delete();

		return redirect('admin/pemilih')->with('danger', 'Data Berhasil Dihapus');
	}

}
?>