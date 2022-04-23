<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kandidat;

class KandidatController extends Controller {

    function index(){
		$loggedUser = request()->user();
        if($loggedUser->status !='admin') return abort(404,'Anda Tidak Punya Akses');
        $data['list_kandidat'] = Kandidat::all();
        return view('administrator.kandidat.index', $data);
    }

    function create(){
		$loggedUser = request()->user();
        if($loggedUser->status !='admin') return abort(404,'Anda Tidak Punya Akses');
		return view('administrator.kandidat.create');
	}

    function store(){
		$loggedUser = request()->user();
        if($loggedUser->status !='admin') return abort(404,'Anda Tidak Punya Akses');
		$kandidat = new Kandidat;
		$kandidat->nama_pasangan = request('nama_pasangan');
        $kandidat->visi = request('visi');
        $kandidat->misi = request('misi');
		$kandidat->handleUploadFoto();
		$kandidat->save();
		// dd($kandidat);

		return redirect('/admin/kandidat')->with('success', 'Data Berhasil Ditambahkan');
	}

    function show($id){
		$loggedUser = request()->user();
        if($loggedUser->status !='admin') return abort(404,'Anda Tidak Punya Akses');
		$data['kandidat'] = Kandidat::find($id);
		return view('administrator.kandidat.show', $data); 
	}

    function edit(Kandidat $kandidat){
		$loggedUser = request()->user();
        if($loggedUser->status !='admin') return abort(404,'Anda Tidak Punya Akses');
		$data['kandidat'] = $kandidat;
		return view('administrator.kandidat.edit', $data); 
	}

	function update(Kandidat $kandidat){
		$loggedUser = request()->user();
        if($loggedUser->status !='admin') return abort(404,'Anda Tidak Punya Akses');
		$kandidat->nama_pasangan = request('nama_pasangan');
        $kandidat->visi = request('visi');
        $kandidat->misi = request('misi');
		$kandidat->handleUploadFoto();
		$kandidat->save();
		// dd($kandidat);

		return redirect('admin/kandidat')->with('warning', 'Data Berhasil Diubah');
	}

    function destroy(Kandidat $kandidat){
		$loggedUser = request()->user();
        if($loggedUser->status !='admin') return abort(404,'Anda Tidak Punya Akses');
		$kandidat->delete();
		$kandidat->handleDeleteFoto();

		return redirect('admin/kandidat')->with('danger', 'Data Berhasil Dihapus');
	}

}
?>