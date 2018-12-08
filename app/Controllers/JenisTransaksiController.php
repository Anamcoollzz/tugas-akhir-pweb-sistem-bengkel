<?php

class JenisTransaksiController extends Controller
{

	public function __construct()
	{
		if(!$_SESSION['username']){
			return redirect('masuk');
		}
	}

	public function index()
	{
		return view('jenis-transaksi/index');
	}

	public function tambah()
	{
		echo $this->model('JenisTransaksi')->create([
			'nama'=>$_POST['jenisTransaksi'],
		]) ? 'success' : 'failed';
	}

	public function tabel()
	{
		$jenisTransaksi = $this->model('JenisTransaksi')->reverse();
		return view('jenis-transaksi/tabel',[
			'jenisTransaksi'=>$jenisTransaksi,
		]);
	}

	public function ubah($id)
	{
		$jenisTransaksi = $this->model('JenisTransaksi')->find($id);
		return view('jenis-transaksi/ubah',[
			'jenisTransaksi'=>$jenisTransaksi,
		]);
	}

	public function perbarui($id)
	{
		echo $this->model('JenisTransaksi')->update([
			'nama'=>$_POST['jenisTransaksi'],
		], $id) ? 'success' : 'failed';
	}

	public function hapus($id)
	{
		echo $this->model('JenisTransaksi')->delete($id) ? 'success' : 'failed';
	}
}
