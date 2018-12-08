<?php

class Controller{

  public function view($file, $data = []){
  	extract($data);
    require_once '../app/Views/'.$file.'.php';
  }

  public function model($file){
    require_once '../app/Models/'.$file.'.php';
    return new $file();
  }

}
