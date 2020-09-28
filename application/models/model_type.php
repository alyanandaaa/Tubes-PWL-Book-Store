<?php 

class Model_type extends CI_Model{
	public function biografi()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'biografi'));
	}

	public function nonfiksi()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'nonfiksi'));
	}

	public function fiksi()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'fiksi'));
	}

	public function romance()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'romance'));
	}

	public function horror()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'horror'));
	}

	public function thriller()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'thriller'));
	}
}

 ?>