<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {

      public function __construct()
    {
        parent::__construct();
        $this->load->model('m_prestasi');
    }

    public function index()
    {
        $data = array(
            'title'     => 'SMAN Plus Riau',
            'title2'    => 'Prestasi Sekolah',
            'prestasi'    => $this->m_prestasi->get(),
            'isi'  => 'admin/prestasi/v_list'
        );
           $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function add()
    {
        $data = array(
            'title'     => 'SMAN Plus Riau',
            'title2'    => 'Tambah Data Prestasi',
            'prestasi'    => $this->m_prestasi->get(),
            'isi'  => 'admin/prestasi/v_add'
        );
           $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function create()
    {
        $data = array(
            'nama_murid' => $this->input->post('nama_murid'),
            'bidang' => $this->input->post('bidang'),
            'medali' => $this->input->post('medali'),
            'deskripsi' => $this->input->post('deskripsi'),
            'tanggal' => $this->input->post('tanggal'),
        );
        
        if (!empty($_FILES['foto']['name'])) {
            $foto = $this->upload_foto();
            $data['foto'] = $foto;
        }
        
        $this->m_prestasi->insert($data);
        redirect('prestasi', $data);
    }

    public function edit($id)
    {
        $data = array(
            'title'     => 'SMAN Plus Riau',
            'title2'    => 'Edit Data Prestasi',
            'prestasi'    => $this->m_prestasi->get_by_id($id),
            'isi'  => 'admin/prestasi/v_edit'
        );
           $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }
    
    public function update()
    {
        $id = $this->input->post('id');
        $nama_murid  = $this->input->post('nama_murid');
        $bidang = $this->input->post('bidang');
        $medali = $this->input->post('medali');
        $deskripsi = $this->input->post('deskripsi');
        $tanggal = $this->input->post('tanggal');


        $data = array(
            'nama_murid' => $nama_murid,
            'bidang' => $bidang,
            'medali' => $medali,
            'deskripsi' => $deskripsi,
            'tanggal' => $tanggal,
        );

        if (!empty($_FILES['foto']['name'])) {
            $foto = $this->upload_foto();

            $upload = $this->m_prestasi->get_by_id($id);
            if (file_exists('assets/foto_prestasi/'.$upload->foto) && $upload->foto) {
                unlink('assets/foto_prestasi/'.$upload->foto);
            }

            $data['foto'] = $foto;
        }

        $this->m_prestasi->update($data, $id);
        redirect('prestasi');
    }
   

    private function upload_foto()
    {
        $image_name = $_FILES["foto"]['name'];

        $config['upload_path'] 		= 'assets/foto_prestasi/';
        $config['allowed_types'] 	= 'gif|jpg|png|jpeg';
       
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
            $this->session->set_flashdata('msg', $this->upload->display_errors('', ''));
            redirect('prestasi');
        }
        return $this->upload->data('file_name');
    }


    public function delete($id)
    {
        $upload = $this->m_prestasi->get_by_id($id);
        if (file_exists('assets/foto_prestasi/'.$upload->foto) && $upload->foto) {
            unlink('assets/foto_prestasi/'.$upload->foto);
        }
        $this->m_prestasi->delete($id);
        redirect('prestasi');
    }
}