<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Supplier extends CI_Controller {

	// method yang pertama kali diakses
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_supplier');
        $this->load->library('form_validation');

	} 

	public function index()
	{
		$data["supplier"] = $this->m_supplier->getAll();
		$data['contents'] = 'admin/supplier';
		$this->load->view('template/index',$data);
	}

	public function insert()
	{
		$result	= $this->m_supplier->insert();
		if ($result) {
			$this->session->set_flashdata('success_msg', 'Data berhasil ditambah');
		} else {
			$this->session->set_flashdata('error_msg', 'Gagal menambah data');
		}
		redirect(base_url('Supplier'));
	}

	public function update($id)
	{
		if (!isset($id)) redirect('admin/supplier');
       
        $supplier = $this->m_supplier;
        $validation = $this->form_validation;

        if ($validation->run()) {
            $supplier->update();
            $this->session->set_flashdata('success_msg', 'Berhasil disimpan');
        }

        $data["data_supplier"] = $supplier->getById($id);
        if (!$data["data_supplier"]) show_404();
        
		$this->load->view("admin/edit_supplier", $data);
	}

	public function delete($id=null)
	{
		$result	= $this->m_supplier->delete($id);
		redirect(base_url('Supplier'));
	}
}