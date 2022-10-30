<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_barang');

	}
	
	public function index()
	{
		$data['groups'] = $this->m_barang->getNamasupplier();
        $data["data_barang"] = $this->m_barang->getAll();
		$data['contents'] = 'admin/barang';
		$this->load->view('template/index',$data);
	}

    //method add digunakan untuk menampilkan form tambah data mahasiswa
    public function add()
    {
        $barang = $this->m_barang; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($barang->rules()); //menerapkan rules validasi pada mahasiswa_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada mahasiswa_model
        if ($validation->run()) {
            $barang->save();
            $this->session->set_flashdata('message', 'Data barang berhasil disimpan');
            redirect("barang");
        }
    }

    public function update($id = null)
    {
        if (!isset($id)) redirect('barang');

        $barang = $this->m_barang;
        $validation = $this->form_validation;
        $validation->set_rules($barang->rules());

        if ($validation->run()) {
            $barang->update();
            $this->session->set_flashdata('message', 'Data barang berhasil disimpan');
            redirect("barang");
        }
		$data["data_barang"] = $barang->getById($id);
        if (!$data["data_barang"]) show_404();
		$this->load->view("admin/edit_barang", $data);
    }

	public function delete($id=null)
	{
		$result	= $this->m_barang->delete($id);
		redirect(base_url('barang'));
	}
}