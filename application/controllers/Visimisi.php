<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Visimisi extends CI_Controller {

     public function __construct()
    {
        parent::__construct();
        $this->load->model('m_visimisi');
    }
    public function index()
    {
        $data = array(
            'title'     => 'SMAN Plus Riau',
            'title2'    => 'Data visimisi',
            'visimisi'    => $this->m_visimisi->get(),
            'isi'  => 'admin/visimisi/v_list'
        );
           $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function edit($id)
    {
        $data = array(
            'title'     => 'SMAN Plus Riau',
            'title2'    => 'Edit Data visimisi',
            'visimisi'    => $this->m_visimisi->get_by_id($id),
            'isi'  => 'admin/visimisi/v_edit'
        );
           $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $visi = $this->input->post('visi');
        $misi = $this->input->post('misi');

        $data = array(
            'visi' => $visi,
            'misi' => $misi
        );
        $this->m_visimisi->update($data, $id);
        $this->session->set_flashdata('pesan', 'Data Berhasil di Ubah!!');
                    redirect('visimisi');
    }
}