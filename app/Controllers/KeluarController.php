<?php

class KeluarController extends Controller
{

	public function index()
	{
		session_destroy();
		return redirect('masuk');
	}

}