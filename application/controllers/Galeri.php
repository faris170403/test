<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {


     public function __construct()
    {
        parent::__construct();
        $this->load->model('m_galeri');
    }
    
    public function index()
    {
        $data = array(
            'title'     => 'SMAN Plus Riau',
            'title2'    => 'Galeri Foto',
            'galeri'      => $this->m_galeri->lists(),
            'isi'       => 'admin/galeri/v_list'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function add()
    {
        $data = array(
            'title'     => 'SMAN Plus Riau',
            'title2'    => 'Tambah Galeri',
            'galeri'    => $this->m_galeri->lists(),
            'isi'  => 'admin/galeri/v_add'
        );
           $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function create()
    {
        $this->form_validation->set_rules('nama_galeri', 'Nama Galeri', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/sampul/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('sampul')) {
                $data = array(
                    'title' => 'SMAN Plus Riau',
                    'title2' => 'Edit Galeri',
                    'error' => $this->upload->display_errors(),
                    'isi' => 'admin/galeri/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/sampul/' . $upload_data['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $data = array(
                    'nama_galeri' => $this->input->post('nama_galeri'),
                    'sampul' => $upload_data['file_name']
                );
                $this->m_galeri->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil di Tambahkan!!');
                redirect('galeri');
            }
        } else {
            $data = array(
                'title' => 'SMAN Plus Riau',
                'title2' => 'Edit Galeri',
                'galeri' => $this->m_galeri->lists(),
                'isi' => 'admin/galeri/v_list'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
        }
    }

    public function edit($id_galeri)
    {
        $this->form_validation->set_rules('nama_galeri', 'Nama Galeri', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/sampul/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('sampul')) {
                $data = array(
                    'title' => 'SMAN Plus Riau',
                    'title2' => 'Edit Galeri',
                    'error' => $this->upload->display_errors(),
                    'galeri' => $this->m_galeri->detail($id_galeri),
                    'isi' => 'admin/galeri/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {

                //hapus foto lama 
                $galeri=$this->m_galeri->detail($id_galeri);
                if ($galeri->sampul !="") {
                    unlink('./assets/sampul/'.$galeri->sampul);
                }
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/sampul/' . $upload_data['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $data = array(
                    'id_galeri' => $id_galeri,
                    'nama_galeri' => $this->input->post('nama_galeri'),
                    'sampul' => $upload_data['file_name']
                    
                );
                $this->m_galeri->edit($data);
                $this->session->set_flashdata('pesan', 'Data Galeri Berhasil di Edit!!');
                redirect('galeri');
            }
            $data = array(
                'id_galeri' => $id_galeri,
                'nama_galeri' => $this->input->post('nama_galeri'),
                
                
            );
            $this->m_galeri->edit($data);
            $this->session->set_flashdata('pesan', 'Data Galeri Berhasil di Edit!!');
            redirect('galeri');
        } 
            $data = array(
                'title' => 'SMAN Plus Riau',
                'title2' => 'Edit Galeri',
                'galeri' => $this->m_galeri->detail($id_galeri),
                'isi' => 'admin/galeri/v_edit'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
        
    }

    public function add_foto($id_galeri)
    {
        $this->form_validation->set_rules('keterangan', 'Nama Galeri', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/foto/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) 
            {
                $galeri = $this->m_galeri->detail($id_galeri);
                $data = array(
                    'title' => 'SMAN Plus Riau',
                    'title2' => 'Add Foto Galeri : '.$galeri->nama_galeri,
                    'error' => $this->upload->display_errors(),
                    'galeri' =>$galeri,
                    'foto' => $this->m_galeri->lists_foto($id_galeri),
                    'isi' => 'admin/galeri/v_Add_foto'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {

               
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/foto/' . $upload_data['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $data = array(
                    'id_galeri' => $id_galeri,
                    'keterangan' => $this->input->post('keterangan'),
                    'foto' => $upload_data['file_name']
                    
                );
                $this->m_galeri->add_foto($data);
                $this->session->set_flashdata('pesan', 'Foto Berhasil Ditambahkan!!');
                redirect('galeri/add_foto/'.$id_galeri);
            }
         
        } 
         $galeri = $this->m_galeri->detail($id_galeri);
        $data = array(
                'title' => 'SMAN Plus Riau',
                'title2' => 'Add Foto Galeri : '.$galeri->nama_galeri,
                'galeri' => $galeri,
                'foto' => $this->m_galeri->lists_foto($id_galeri),
                'isi' => 'admin/galeri/v_add_foto'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
    


    public function delete($id_galeri)
    {
         //hapus foto lama 
         $galeri=$this->m_galeri->detail($id_galeri);
         if ($galeri->sampul !="") {
             unlink('./assets/sampul/'.$galeri->sampul);
         }

         $data = array('id_galeri' => $id_galeri);
         $this->m_galeri->delete($data);
         $this->session->set_flashdata('pesan', 'Data Galeri Berhasil di Hapus!!');
            redirect('galeri');
                         
    }

    public function delete_foto($id_galeri,$id_foto)
    {
         //hapus foto lama 
         $foto=$this->m_galeri->detail($id_galeri);
         if ($foto->foto !="") {
             unlink('./assets/foto/'.$foto->foto);
         }

         $data = array('id_foto' => $id_foto);
         $this->m_galeri->delete_foto($data);
         $this->session->set_flashdata('pesan', 'Foto Berhasil di Hapus!!');
            redirect('galeri/add_foto/'.$id_galeri);
                         
    }

}