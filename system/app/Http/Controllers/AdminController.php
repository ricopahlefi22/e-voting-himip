<?php 

namespace App\Http\Controllers;


use App\Models\User;


class AdminController extends Controller{
	function beranda(){
		$loggedUser = request()->user();
        if($loggedUser->status !='admin') return abort(404,'Anda Tidak Punya Akses');

		$data['pemilih'] = User::where('status', 'pemilih')->get()->count();
		$data['pendaftar'] = User::where('status', 'pendaftar')->get()->count();
		$data['user'] = User::all()->count();
		$data['visitors'] = User::all()->count();
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