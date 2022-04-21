<?php 

namespace App\Http\Controllers;


use App\Models\User;


class AdminController extends Controller{
	function beranda(){
		$data['pemilih'] = User::where('status', 'pemilih')->get()->count();
		$data['pendaftar'] = User::where('status', 'pendaftar')->get()->count();
		$data['user'] = User::all()->count();
		// dd($data);
		return view('administrator.beranda', $data);
	}

	function index(){
        $data['list_admin'] = Admin::all();
        return view('administrator.admin.index', $data);
    }

    function create(){
		return view('administrator.admin.create');
	}

    function store(){
		$admin = new Admin;
		$admin->nama = request('nama');
		$admin->email = request('email');
        $admin->password = bcrypt(request('password'));
		$admin->jabatan = request('jabatan');
		$admin->handleUploadFoto();
		$admin->save();
		// dd($admin);

		return redirect('/admin/admin')->with('success', 'Data Berhasil Ditambahkan');
	}

    function show($id){
		$data['admin'] = Admin::find($id);
		return view('administrator.admin.show', $data); 
	}

    function edit(Admin $admin){
		$data['admin'] = $admin;
		// dd($data);
		return view('administrator.admin.edit', $data); 
	}

	function update(Admin $admin){
		$admin->nama = request('nama');
		$admin->email = request('email');
        $admin->password = request('password');
		$admin->jabatan = request('jabatan');
		$admin->handleUploadFoto();
		$admin->save();
		// dd($admin);

		return redirect('admin/admin')->with('warning', 'Data Berhasil Diubah');
	}

    function destroy(Admin $admin){
		$admin->delete();
		$admin->handleDeleteFoto();

		return redirect('admin/admin')->with('danger', 'Data Berhasil Dihapus');
	}
}
 ?>