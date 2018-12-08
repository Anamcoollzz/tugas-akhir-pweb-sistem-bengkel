<?php

class ProfilController extends Controller
{

	public function index()
	{
		return view('profil/index');
	}

	public function perbarui()
	{
		extract($_POST);
		$res = $this->model('Akun')->update([
			'username'=>$username,
			'nama'=>$nama,
			'password'=>md5($password),
		], $_SESSION['id']);
		$user = $this->model('Akun')->find($_SESSION['id']);
		$_SESSION['username'] = $user->username;
		$_SESSION['role'] = $user->role;
		$_SESSION['nama'] = $user->nama;
		$_SESSION['id'] = $user->id;
		if($res)
			echo 'success';
		else
			echo 'failed';
	}

}