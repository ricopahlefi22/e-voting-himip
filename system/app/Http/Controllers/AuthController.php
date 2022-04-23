<?php

namespace App\Http\Controllers;

use Auth;

// use App\Models\User;

class AuthController extends Controller
{
  function login()
  {
    return view('login');
  }

  function loginProcess()
  {
    // dd(request()->all());
    if(Auth::attempt(['nim' => request('nim'), 'password' => request('password'), 'status' => 'pemilih'])){
      return redirect('pemilihan')->with('success', 'Selamat datang di E-Voting HIMIP');
    } else if(Auth::attempt(['nim' => request('nim'), 'password' => request('password'),'status' => 'admin'])){
      return redirect('admin/beranda')->with('success', 'Selamat datang Administrator');
    } else if(['nim' => request('nim'), 'status' => 'pendaftar']){
      return back()->with('danger', 'Login gagal. Akun anda belum di Verifikasi!');
    } else {
      return back()->with('danger', 'Login gagal. Silahkan cek NIM dan Kode Akses anda!');
    }
  }


  function logout()
  {
    Auth::logout();
    return redirect('/')->with('success', 'Anda berhasil logout');
  }
}
