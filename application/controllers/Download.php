<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

      public function __construct()
    {
        parent::__construct();
        $this->load->model('m_download');
    }

    public function index()
    {
        $data = array(
            'title'     => 'SMAN Plus Riau',
            'title2'    => 'Daftar Download',
            'download'      => $this->m_download->get(),
            'isi'       => 'admin/download/v_list'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function add()
    {
        $data = array(
            'title'     => 'SMAN Plus Riau',
            'title2'    => 'Tambah Data Download',
            'download'    => $this->m_download->get(),
            'isi'  => 'admin/download/v_add'
        );
           $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function create()
    {
        $data = array(
            'ket_file' => $this->input->post('ket_file'),
            // 'bidang' => $this->input->post('bidang'),
            // 'medali' => $this->input->post('medali'),
            // 'deskripsi' => $this->input->post('deskripsi'),
        );
        
        if (!empty($_FILES['file']['name'])) {
            $file = $this->upload_file();
            $data['file'] = $file;
        }
        
        $this->m_download->insert($data);
          $this->session->set_flashdata('pesan', 'Data Berhasil di Tambahkan!!');
                    redirect('download', $data);
    }

    public function edit($id)
    {
        $data = array(
            'title'     => 'SMAN Plus Riau',
            'title2'    => 'Edit Data download',
            'download'    => $this->m_download->get_by_id($id),
            'isi'  => 'admin/download/v_edit'
        );
           $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }
    
    public function update()
    {
        $id = $this->input->post('id');
        $ket_file  = $this->input->post('ket_file');
        // $bidang = $this->input->post('bidang');
        // $medali = $this->input->post('medali');
        // $deskripsi = $this->input->post('deskripsi');


        $data = array(
            'ket_file' => $ket_file,
            // 'bidang' => $bidang,
            // 'medali' => $medali,
            // 'deskripsi' => $deskripsi,
        );

        if (!empty($_FILES['file']['name'])) {
            $file = $this->upload_file();

            $upload = $this->m_download->get_by_id($id);
            if (file_exists('assets/file/'.$upload->file) && $upload->file) {
                unlink('assets/file/'.$upload->file);
            }

            $data['file'] = $file;
        }

             $this->m_download->update($data, $id);
          $this->session->set_flashdata('pesan', 'Data Berhasil di Ubah!!');
                    redirect('download');
    }
   

    private function upload_file()
    {
        $file_name = $_FILES["file"]['name'];

        $config['upload_path'] 		= 'assets/file/';
        $config['allowed_types'] 	= 'doc|docx|ppt|pptx|pdf|txt';
       
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('file')) {
            $this->session->set_flashdata('msg', $this->upload->display_errors('', ''));
            redirect('download');
        }
        return $this->upload->data('file_name');
    }


    public function delete($id)
    {
        $upload = $this->m_download->get_by_id($id);
        if (file_exists('assets/file/'.$upload->file) && $upload->file) {
            unlink('assets/file/'.$upload->file);
        }
         $this->m_download->delete($id);
        $this->session->set_flashdata('pesan', 'Data download Berhasil di Hapus!!');
        redirect('download');
    }
}