<?php

class MasukController extends Controller
{

	public function index()
	{
		return view('masuk/index');
	}

	public function proses()
	{
		extract($_POST);
		if($this->model('Akun')->cekUsername($username)){
			if($this->model('Akun')->cekLogin($username, $password)){
				$user = $this->model('Akun')->byUsername($username);
				$_SESSION['username'] = $user->username;
				$_SESSION['role'] = $user->role;
				$_SESSION['nama'] = $user->nama;
				$_SESSION['id'] = $user->id;
				echo 'success';
			}else{
				echo 'Password salah';
			}
		}else{
			echo 'User tidak ada';
		}
	}

}