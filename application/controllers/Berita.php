<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_berita');
    }
    
    public function index()
    {
        $data = array(
            'title'     => 'SMAN Plus Riau',
            'title2'    => 'Daftar Berita',
            'berita'      => $this->m_berita->list(),
            'isi'       => 'admin/berita/v_list'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function add()
    {
         $data = array(
            'title'     => 'SMAN Plus Riau',
            'title2'    => 'Daftar Berita',
            'berita'      => $this->m_berita->list(),
            'isi'       => 'admin/berita/v_add'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function create()
    {
        $data = array(
            'judul_berita' => $this->input->post('judul_berita'),
            'slug_berita' => url_title($this->input->post('judul_berita'),'dash',TRUE),
            'isi_berita' => $this->input->post('isi_berita'),
            'id_user' => $this->session->userdata('id_user'),
            'tgl_berita' => date("Y-m-d H:i:s")
        );
        
        if (!empty($_FILES['foto']['name'])) {
            $foto = $this->upload_foto();
            $data['foto'] = $foto;
        }
        
        $this->m_berita->insert($data);
          $this->session->set_flashdata('pesan', 'Data Berhasil di Tambahkan!!');
                    redirect('berita', $data);
      
    }

    public function edit($id)
    {
         $data = array(
            'title'     => 'SMAN Plus Riau',
            'title2'    => 'Daftar Berita',
            'berita'      => $this->m_berita->get_by_id($id),
            'isi'       => 'admin/berita/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $judul_berita = $this->input->post('judul_berita');
        $isi_berita = $this->input->post('isi_berita');
        $tgl_berita = date("Y-m-d H:i:s");

        $data = array(
            'judul_berita' => $judul_berita,
            'isi_berita' => $isi_berita,
            'tgl_berita' => $tgl_berita
        );

      if (!empty($_FILES['foto']['name'])) {
            $foto = $this->upload_foto();

            $upload = $this->m_berita->get_by_id($id);
            if (file_exists('assets/foto_berita/'.$upload->foto) && $upload->foto) {
                unlink('assets/foto_berita/'.$upload->foto);
            }

            $data['foto'] = $foto;
        }


                $this->m_berita->update($data, $id);
          $this->session->set_flashdata('pesan', 'Data Berhasil di Ubah!!');
                    redirect('berita');
    }

    private function upload_foto()
    {
             $image_name = $_FILES["foto"]['name'];

        $config['upload_path']      = 'assets/foto_berita/';
        $config['allowed_types']    = 'gif|jpg|png|webp/jpeg';
    

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
            $this->session->set_flashdata('msg', $this->upload->display_errors('', ''));
            redirect('berita');
        }
        return $this->upload->data('file_name');
    }


    
    public function delete($id)
    {
        $upload = $this->m_berita->get_by_id($id);
        if (file_exists('assets/foto_berita/'.$upload->foto) && $upload->foto) {
            unlink('assets/foto_berita/'.$upload->foto);
        }
        $this->m_berita->delete($id);
        $this->session->set_flashdata('pesan', 'Data Berita Berhasil di Hapus!!');
        redirect('berita');
    }



}