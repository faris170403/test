<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_guru');
    }
    
 public function index()
    {
        $data = array(
            'title'     => 'SMAN Plus Riau',
            'title2'    => 'Data Guru',
            'guru'    => $this->m_guru->get(),
            'isi'  => 'admin/guru/v_list'
        );
           $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function add()
    {
        $data = array(
            'title'     => 'SMAN Plus Riau',
            'title2'    => 'Tambah Data Guru',
            'guru'    => $this->m_guru->get(),
            'isi'  => 'admin/guru/v_add'
        );
           $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function create()
    {
        $data = array(
            'nip' => $this->input->post('nip'),
            'nama_guru' => $this->input->post('nama_guru'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'mapel' => $this->input->post('mapel'),
            'pendidikan' => $this->input->post('pendidikan'),
        );
        
        if (!empty($_FILES['foto']['name'])) {
            $foto = $this->upload_foto();
            $data['foto'] = $foto;
        }
        
        $this->m_guru->insert($data);
        redirect('guru', $data);
    }

    public function edit($id)
    {
        $data = array(
            'title'     => 'SMAN Plus Riau',
            'title2'    => 'Edit Data Guru',
            'guru'    => $this->m_guru->get_by_id($id),
            'isi'  => 'admin/guru/v_edit'
        );
           $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }
    
    public function update()
    {
        $id = $this->input->post('id_guru');
        $nip  = $this->input->post('nip');
        $nama_guru = $this->input->post('nama_guru');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $mapel = $this->input->post('mapel');
        $pendidikan = $this->input->post('pendidikan');

        $data = array(
            'nip' => $nip,
            'nama_guru' => $nama_guru,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'mapel' => $mapel,
            'pendidikan' => $pendidikan,
        );

        if (!empty($_FILES['foto']['name'])) {
            $foto = $this->upload_foto();

            $upload = $this->m_guru->get_by_id($id);
            if (file_exists('assets/foto_guru/'.$upload->foto) && $upload->foto) {
                unlink('assets/foto_guru/'.$upload->foto);
            }

            $data['foto'] = $foto;
        }

        $this->m_guru->update($data, $id);
        redirect('guru');
    }
   

    private function upload_foto()
    {
        $image_name = $_FILES["foto"]['name'];

        $config['upload_path'] 		= 'assets/foto_guru/';
        $config['allowed_types'] 	= 'gif|jpg|png';
        $config['max_size'] 		= 5142;
        $config['max_widht'] 		= 1000;
        $config['max_height']  		= 1000;
       

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
            $this->session->set_flashdata('msg', $this->upload->display_errors('', ''));
            redirect('guru');
        }
        return $this->upload->data('file_name');
    }


    public function delete($id)
    {
        $upload = $this->m_guru->get_by_id($id);
        if (file_exists('assets/foto_guru/'.$upload->foto) && $upload->foto) {
            unlink('assets/foto_guru/'.$upload->foto);
        }
        $this->m_guru->delete($id);
        $this->session->set_flashdata('pesan', 'Data Guru Berhasil di Hapus!!');
        redirect('guru');
    }
}