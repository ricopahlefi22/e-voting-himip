<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kandidat;

class KandidatController extends Controller {

    function index(){
        $data['list_kandidat'] = Kandidat::all();
        return view('administrator.kandidat.index', $data);
    }

    function create(){
		return view('administrator.kandidat.create');
	}

    function store(){
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
		$data['kandidat'] = Kandidat::find($id);
		return view('administrator.kandidat.show', $data); 
	}

    function edit(Kandidat $kandidat){
		$data['kandidat'] = $kandidat;
		return view('administrator.kandidat.edit', $data); 
	}

	function update(Kandidat $kandidat){
		$kandidat->nama_pasangan = request('nama_pasangan');
        $kandidat->visi = request('visi');
        $kandidat->misi = request('misi');
		$kandidat->handleUploadFoto();
		$kandidat->save();
		// dd($kandidat);

		return redirect('admin/kandidat')->with('warning', 'Data Berhasil Diubah');
	}

    function destroy(Kandidat $kandidat){
		$kandidat->delete();
		$kandidat->handleDeleteFoto();

		return redirect('admin/kandidat')->with('danger', 'Data Berhasil Dihapus');
	}

}
?>