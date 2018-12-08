<?php

class AkunController extends Controller
{

  public function __construct()
  {
    if(!$_SESSION['username']){
      return redirect('masuk');
    }
  }
  
  public function index()
  {
    return view('akun/index');
  }

  public function tambah()
  {
  	echo $this->model('Akun')->create([
  		'nama'=>$_POST['nama'],
      'username'=>$_POST['username'],
      'password'=>md5($_POST['password']),
      'role'=>$_POST['role'],
    ]) ? 'success' : 'failed';
  }

  public function tabel()
  {
  	$akun = $this->model('Akun')->reverse();
  	return view('akun/tabel',[
  		'akun'=>$akun,
  	]);
  }

  public function ubah($id)
  {
  	$akun = $this->model('Akun')->find($id);
  	return view('akun/ubah',[
  		'akun'=>$akun,
  	]);
  }

  public function perbarui($id)
  {
  	echo $this->model('Akun')->update([
  		'nama'=>$_POST['nama'],
      'username'=>$_POST['username'],
      'password'=>md5($_POST['password']),
      'role'=>$_POST['role'],
    ], $id) ? 'success' : 'failed';
  }

  public function hapus($id)
  {
  	echo $this->model('Akun')->delete($id) ? 'success' : 'failed';
  }
}
