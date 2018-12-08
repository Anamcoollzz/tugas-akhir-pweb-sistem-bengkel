<?php

class JenisTransaksi{
	private $_db;
	private $table = 'jenis_transaksi';

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

	public function count()
	{
		return count($this->index());
	}

}
