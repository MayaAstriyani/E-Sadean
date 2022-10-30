<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_barang extends CI_Model
{

    private $table = 'barang';

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'kodebarang',  //samakan dengan atribute name pada tags input
                'label' => 'Kode Barang',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'namasupplier',
                'label' => 'Nama Supplier',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'namabarang',
                'label' => 'Nama Barang',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'stok',
                'label' => 'Stok',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'hargabeli',
                'label' => 'Harga Beli',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'hargajual',
                'label' => 'Harga Jual',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'tglinput',
                'label' => 'Tanggal Input',
                'rules' => 'trim|required'
            ]
        ];
    }

    //menampilkan data barang berdasarkan id barang
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["kode_barang" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from barang where kode_barang='$id'
    }

    //menampilkan semua data mahasiswa
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("kode_barang", "desc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from barang order by kode_barang desc
    }

    //menyimpan data barang
    public function save()
    {
        $data = array(
            "kode_barang" => $this->input->post('kodebarang'),
            "nama_supplier" => $this->input->post('namasupplier'),
            "nama_barang" => $this->input->post('namabarang'),
            "stok" => $this->input->post('stok'),
            "satuan" => $this->input->post('satuan'),
            "harga_beli" => $this->input->post('hargabeli'),
            "harga_jual" => $this->input->post('hargajual'),
            "tgl_input" => $this->input->post('tglinput')
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data mahasiswa
    public function update()
    {
        $data = array(
            "kode_barang" => $this->input->post('kodebarang'),
            "nama_supplier" => $this->input->post('namasupplier'),
            "nama_barang" => $this->input->post('namabarang'),
            "stok" => $this->input->post('stok'),
            "satuan" => $this->input->post('satuan'),
            "harga_beli" => $this->input->post('hargabeli'),
            "harga_jual" => $this->input->post('hargajual'),
            "tgl_input" => $this->input->post('tglinput')
        );
        return $this->db->update($this->table, $data, array('kode_barang' => $this->input->post('kodebarang')));
    }

    //hapus data mahasiswa
    public function delete($id)
    {
        return $this->db->delete($this->table, array("kode_barang" => $id));
    }

    public function getNamasupplier()
    {
        $query = $this->db->query('SELECT nama_supplier FROM supplier');

        return $query->result();
    }
}