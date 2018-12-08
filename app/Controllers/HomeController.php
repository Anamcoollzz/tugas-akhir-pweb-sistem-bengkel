<?php

class HomeController extends Controller
{
  public function index()
  {
  	if($_SESSION['role'] == "Kasir")
  		return redirect('profil');
    return view('dasbor/index',[
    	'jmlAkun'=>$this->model('Akun')->count(),
    	'jmlJenisTransaksi'=>$this->model('JenisTransaksi')->count(),
    ]);
  }

  
}
