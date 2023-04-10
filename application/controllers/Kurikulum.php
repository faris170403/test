<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurikulum extends CI_Controller {

     public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kurikulum');
    }
    public function index()
    {
        $data = array(
            'title'     => 'SMAN Plus Riau',
            'title2'    => 'Data Kurikulum',
            'kurikulum'    => $this->m_kurikulum->get(),
            'isi'  => 'admin/kurikulum/v_list'
        );
           $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function edit($id)
    {
        $data = array(
            'title'     => 'SMAN Plus Riau',
            'title2'    => 'Edit Data kurikulum',
            'kurikulum'    => $this->m_kurikulum->get_by_id($id),
            'isi'  => 'admin/kurikulum/v_edit'
        );
           $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama_kurikulum = $this->input->post('nama_kurikulum');
        $waktu = $this->input->post('waktu');
        $deskripsi = $this->input->post('deskripsi');

        $data = array(
            'nama_kurikulum' => $nama_kurikulum,
            'waktu' => $waktu,
            'deskripsi' => $deskripsi
        );
        $this->m_kurikulum->update($data, $id);
        $this->session->set_flashdata('pesan', 'Data Berhasil di Ubah!!');
                    redirect('kurikulum');
    }
}