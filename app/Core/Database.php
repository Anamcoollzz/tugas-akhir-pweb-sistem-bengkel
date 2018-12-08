<?php

class Database{

  private static $_instance = null;
  private $mysqli;
  private $error;

  public function __construct(){
    $this->mysqli = new mysqli('localhost', 'root', '', 'kuliah_pweb_sistem_bengkel') or die('ada error koneksi');
  }

  public static function getInstance(){
    if(!isset(self::$_instance)){
      self::$_instance = new Database();
    }

    return self::$_instance;
  }

  public function index($table){
    $reply  = [];
    $query  = "SELECT * FROM $table";
    $result = $this->mysqli->query($query);

    while($row = $result->fetch_object())
      $reply[] = $row;

    return $reply;
  }

  public function create($table, $data)
  {
    $query = "INSERT INTO `".$table."` (";
    foreach ($data as $column => $value) {
      $query .= "`".$column."`,";
    }
    $query = rtrim($query,',');
    $query .= ") VALUES (";
    foreach ($data as $column => $value) {
      if(is_digit($value)){
        $query .= $column.',';
      }else{
        $query .= "'".$value."',";
      }
    }
    $query = rtrim($query,',');
    $query .= ");";
    // dd($query);
    // dd($query);
    $results = $this->mysqli->query($query);
    if($results){
      return true;
    }else{
      return $this->mysqli->error;
    }
  }

  public function reverse($table){
    $reply  = [];
    $query  = "SELECT * FROM $table ORDER BY id DESC";
    $result = $this->mysqli->query($query);

    while($row = $result->fetch_object())
      $reply[] = $row;

    return $reply;
  }

  public function find($table, $id){
    $reply  = [];
    $query  = "SELECT * FROM $table WHERE id = ".$id;
    $result = $this->mysqli->query($query);

    while($row = $result->fetch_object())
      $reply[] = $row;

    return $reply[0];
  }

  public function update($table, $data, $id)
  {
    $query = "UPDATE `".$table."` SET ";
    foreach ($data as $column => $value) {
      if(is_digit($value)){
        $query .= $column." = ".$value.',';
      }else{
        $query .= $column." = '".$value."',";
      }
    }
    $query = rtrim($query,',');
    $query .= " WHERE id = ".$id.";";
    // dd($query);
    $results = $this->mysqli->query($query);
    if($results){
      return true;
    }else{
      return $this->mysqli->error;
    }
  }

  public function delete($table, $id)
  {
    $query = "DELETE FROM `".$table."` WHERE id = ".$id.";";
    $results = $this->mysqli->query($query);
    if($results){
      return true;
    }else{
      return $this->mysqli->error;
    }
  }

  public function execute($query)
  {
    $results = $this->mysqli->query($query);
    if($results){
      return $results;
    }else{
      $this->error = $this->mysqli->error;
      return $results;
    }
  }

  public function numRows($results)
  {
    return mysqli_num_rows($results);
  }

  public function realEscape($var)
  {
    return $this->mysqli->escape_string($var);
  }

  //fungsi fungsi CRUD

}
