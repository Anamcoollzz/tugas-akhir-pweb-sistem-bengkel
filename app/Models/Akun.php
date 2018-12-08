<?php

class Akun{
	private $_db;
	protected $table = 'users';

	public function __construct()
	{
		$this->_db = Database::getInstance();
	}

	public function index()
	{
		return $this->_db->index($this->table);
	}

	public function create($data)
	{
		return $this->_db->create($this->table,$data);
	}

	public function reverse()
	{
		return $this->_db->reverse($this->table);
	}

	public function find($id)
	{
		return $this->_db->find($this->table, $id);
	}

	public function update($data, $id)
	{
		return $this->_db->update($this->table,$data, $id);
	}

	public function delete($id)
	{
		return $this->_db->delete($this->table,$id);
	}

	public function cekLogin($username, $password)
	{
		$username = $this->_db->realEscape($username);
		$password = $this->_db->realEscape($password);
		$res = $this->_db->execute("SELECT * FROM `".$this->table."` WHERE `username` = '".$username."' AND `password` = md5('".$password."')");
		if($this->_db->numRows($res) > 0){
			return true;
		}
		return false;
	}

	public function cekUsername($username)
	{
		$username = $this->_db->realEscape($username);
		$res = $this->_db->execute("SELECT * FROM `".$this->table."` WHERE `username` = '".$username."'");
		if($this->_db->numRows($res) > 0){
			return true;
		}
		return false;
	}

	public function byUsername($username)
	{
		$username = $this->_db->realEscape($username);
		$res = $this->_db->execute("SELECT * FROM `".$this->table."` WHERE `username` = '".$username."'");
		if($this->_db->numRows($res) > 0){
			return $res->fetch_object();
		}
		return false;
	}

	public function count()
	{
		return count($this->index());
	}

}
