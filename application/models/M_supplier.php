<?php
defined('BASEPATH') or exit('No direct script access allowed');
  
class M_supplier extends CI_Model
{
	// nama tabel
    private $_table = "supplier";

	// fungsi untuk mengambil semua data hasil query
	public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
	// fungsi untuk tampil data berdasarkan id
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["kode_supplier" => $id])->row();
    }

	// fungsi tambah data
	public function insert()
    {
        $post = $this->input->post();
        $this->kode_supplier = $post["kodesupplier"];
        $this->nama_supplier = $post["namasupplier"];
        $this->no_telp = $post["notelp"];
		$this->alamat = $post["alamat"];
        return $this->db->insert($this->_table, $this);
    }

	// fungsi update data
    public function update()
    {
        $post = $this->input->post();
        $this->kode_supplier = $post["kodesupplier"];
        $this->nama_supplier = $post["namasupplier"];
        $this->no_telp = $post["notelp"];
		$this->alamat = $post["alamat"];
        return $this->db->update($this->_table, $this, array('kode_supplier' => $post['kodesupplier']));
    }

	// fungsi delete
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kode_supplier" => $id));
    }
}