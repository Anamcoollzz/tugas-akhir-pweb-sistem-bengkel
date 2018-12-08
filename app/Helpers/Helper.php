<?php 

function base_url($path = '')
{
	return $GLOBALS['_config']['base_url'].$path;
}

function redirect($path = '')
{
	if(trim($path) == ''){
		$path = base_url('');
	}
	header('location:'.$path);
}

function dd($var)
{
	var_dump($var);
	die;
}

function view($file, $data = []){
	extract($data);
	require_once '../app/Views/'.$file.'.php';
}

function is_digit($var)
{
	if (ctype_digit($var)) {
		return true;
	} 
	return false;
}