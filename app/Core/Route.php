<?php

class Route{

  protected $controller = 'homeController';
  protected $method     = 'index';
  protected $params     = [];

  public function __construct(){

    if(isset($_GET['url'])){
      $url    = explode('/', filter_var(trim($_GET['url']), FILTER_SANITIZE_URL));
      $c = explode('-', $url[0]);
      $controller = '';
      foreach($c as $a){
        $controller .= ucwords($a);
      }
      $url[0] = $controller .'Controller';
    }else{
      $url[0] = 'HomeController';
    }

      //ngecek file controller
    // try{
    if( file_exists('../app/controllers/'. $url[0] .'.php') ){
      $this->controller = $url[0];
    }else{
      return require_once '../app/Views/Error/404.php';
    } 
    // }catch(Exception $e){
      // return 'File Controller tidak ditemukan';
    // }

    require_once '../app/controllers/'. $this->controller .'.php';
    $this->controller = new $this->controller;

    if(isset($url[1])){
      $this->method = $url[1];
    }else{
      $this->method = 'index';
    }
    unset($url[0]);
    unset($url[1]);
    $this->params = $url;
    if(method_exists($this->controller, $this->method)){
      call_user_func_array([$this->controller, $this->method], $this->params);  
    }else{
      return require_once '../app/Views/Error/404.php';
    }



  }
}
