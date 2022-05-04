<?php 

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Kandidat;


class AdminController extends Controller{
	function beranda(){
		$loggedUser = request()->user();
        if($loggedUser->status !='admin') return abort(404,'Anda Tidak Punya Akses');

		$data['pemilih'] = User::where('status', 'pemilih')->get()->count();
		$data['pendaftar'] = User::where('status', 'pendaftar')->get()->count();
		$data['golput'] = User::where('status', 'pemilih')->where('pilihan', null)->get()->count();
		$data['satu'] = User::where('pilihan', 1)->get()->count();
		$data['dua'] = User::where('pilihan', 2)->get()->count();
		$data['duaAsatu'] = User::where('pilihan', 1)->where('kelas', 'Teknik Informatika 2A')->get()->count();
		$data['duaAdua'] = User::where('pilihan', 2)->where('kelas', 'Teknik Informatika 2A')->get()->count();
		$data['duaBsatu'] = User::where('pilihan', 1)->where('kelas', 'Teknik Informatika 2B')->get()->count();
		$data['duaBdua'] = User::where('pilihan', 2)->where('kelas', 'Teknik Informatika 2B')->get()->count();
		$data['empatAsatu'] = User::where('pilihan', 1)->where('kelas', 'Teknik Informatika 4A')->get()->count();
		$data['empatAdua'] = User::where('pilihan', 2)->where('kelas', 'Teknik Informatika 4A')->get()->count();
		$data['empatBsatu'] = User::where('pilihan', 1)->where('kelas', 'Teknik Informatika 4B')->get()->count();
		$data['empatBdua'] = User::where('pilihan', 2)->where('kelas', 'Teknik Informatika 4B')->get()->count();
		$data['enamAsatu'] = User::where('pilihan', 1)->where('kelas', 'Teknik Informatika 6A')->get()->count();
		$data['enamAdua'] = User::where('pilihan', 2)->where('kelas', 'Teknik Informatika 6A')->get()->count();
		$data['enamBsatu'] = User::where('pilihan', 1)->where('kelas', 'Teknik Informatika 6B')->get()->count();
		$data['enamBdua'] = User::where('pilihan', 2)->where('kelas', 'Teknik Informatika 6B')->get()->count();
		$data['user'] = $data['pemilih'] + $data['pendaftar'];
		$data['kandidat'] = Kandidat::all();

		// dd($data);
		return view('administrator.beranda', $data);
	}

	function index(){
		$loggedUser = request()->user();
        if($loggedUser->status !='admin') return abort(404,'Anda Tidak Punya Akses');
        $data['list_admin'] = User::where('status', 'admin')->get();
        return view('administrator.admin.index', $data);
    }

    function create(){
		return view('administrator.admin.create');
	}

    function store(){
		$loggedUser = request()->user();
        if($loggedUser->status !='admin') return abort(404,'Anda Tidak Punya Akses');
		$admin = new User;
		$admin->nim = request('nim');
		$admin->nama = request('nama');
        $admin->password = bcrypt(request('password'));
		$admin->status = 'admin';
		$admin->save();
		// dd($admin);

		return redirect('/admin/admin')->with('success', 'Data Berhasil Ditambahkan');
	}

    function show($id){
		$loggedUser = request()->user();
        if($loggedUser->status !='admin') return abort(404,'Anda Tidak Punya Akses');
		$data['admin'] = User::find($id);
		return view('administrator.admin.show', $data); 
	}

    function edit(User $admin){
		$loggedUser = request()->user();
        if($loggedUser->status !='admin') return abort(404,'Anda Tidak Punya Akses');
		$data['admin'] = $admin;
		// dd($data);
		return view('administrator.admin.edit', $data); 
	}

	function update(User $admin){
		$loggedUser = request()->user();
        if($loggedUser->status !='admin') return abort(404,'Anda Tidak Punya Akses');
		$admin->nim = request('nim');
		$admin->nama = request('nama');
        $admin->password = bcrypt(request('password'));
		$admin->save();
		// dd($admin);

		return redirect('admin/admin')->with('warning', 'Data Berhasil Diubah');
	}

    function destroy(User $admin){
		$loggedUser = request()->user();
        if($loggedUser->status !='admin') return abort(404,'Anda Tidak Punya Akses');
		$admin->delete();
		$admin->handleDeleteFoto();

		return redirect('admin/admin')->with('danger', 'Data Berhasil Dihapus');
	}
}
 ?>