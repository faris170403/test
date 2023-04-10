<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Organisasi extends CI_Controller {

     public function __construct()
    {
        parent::__construct();
        $this->load->model('m_organisasi');
    }
    public function index()
    {
        $data = array(
            'title'     => 'SMAN Plus Riau',
            'title2'    => 'Organisasi',
            'organisasi'    => $this->m_organisasi->get(),
            'isi'  => 'admin/v_organisasi'
        );
           $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

   public function add()
    {
        $data = array(
            'title'     => 'SMAN Plus Riau',
            'title2'    => 'Tambah Data Organisasi',
            'organisasi'    => $this->m_organisasi->get(),
            'isi'  => 'admin/v_add'
        );
           $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function create()
    {
        $data = array(
            'nama_organisasi' => $this->input->post('nama_organisasi'),
            'deskripsi' => $this->input->post('deskripsi'),
        );
        
        if (!empty($_FILES['foto']['name'])) {
            $foto = $this->upload_foto();
            $data['foto'] = $foto;
        }
        
        $this->m_organisasi->insert($data);
        redirect('organisasi', $data);
    }

    public function edit($id)
    {
        $data = array(
            'title'     => 'SMAN Plus Riau',
            'title2'    => 'Edit Data organisasi',
            'organisasi'    => $this->m_organisasi->get_by_id($id),
            'isi'  => 'admin/organisasi/v_edit'
        );
           $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }
    
    public function update()
    {
        $id = $this->input->post('id');
        $nama_organisasi = $this->input->post('nama_organisasi');
        $deskripsi = $this->input->post('deskripsi');
 

        $data = array(
            'nama_organisasi' => $nama_organisasi,
            'deskripsi' => $deskripsi,
          
        );

      if (!empty($_FILES['foto']['name'])) {
            $foto = $this->upload_foto();

            $upload = $this->m_organisasi->get_by_id($id);
            if (file_exists('assets/lambang/'.$upload->foto) && $upload->foto) {
                unlink('assets/lambang/'.$upload->foto);
            }

            $data['foto'] = $foto;
        }


                $this->m_organisasi->update($data, $id);
          $this->session->set_flashdata('pesan', 'Data Berhasil di Ubah!!');
                    redirect('organisasi');
    }


  

    private function upload_foto()
    {
        $image_name = $_FILES["foto"]['name'];

        $config['upload_path'] 		= 'assets/lambang/';
        $config['allowed_types'] 	= 'gif|jpg|png';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
            $this->session->set_flashdata('msg', $this->upload->display_errors('', ''));
            redirect('organisasi');
        }
        return $this->upload->data('file_name');
    }


    public function delete($id)
    {
        $upload = $this->m_organisasi->get_by_id($id);
        if (file_exists('assets/lambang/'.$upload->foto) && $upload->foto) {
            unlink('assets/lambang/'.$upload->foto);
        }
        $this->m_organisasi->delete($id);
        $this->session->set_flashdata('pesan', 'Data organisasi Berhasil di Hapus!!');
        redirect('organisasi');
    }
}