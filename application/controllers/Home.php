<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
    }
    
    public function index()
    {
        $data = array(
            'title' => 'Web Sekolah',
            'isi' => 'v_home'
        );
        $this->load->view('layout/v_wrapper',$data, FALSE);
    }

    public function download()
    {
        $data = array(
            'title' => 'Download',
            'download' => $this->m_home->download(),
            'isi' => 'v_download'
        );
        $this->load->view('layout/v_wrapper',$data, FALSE);
    }

    public function guru()
    {
        $this->load->library('pagination');
        $config['base_url'] = base_url('home/guru');
        // $config['total_rows'] = count($this->m_home->total_berita());
        $config['per_page'] = 8;
        $config['uri_segmen'] = 3;
        //start dan limit

            $limit = $config['per_page'];
            $start = ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
        //----------s
        $config['first_link']   = 'First';
        $config['last_link']   = 'Last';
        $config['next_link']   = 'Next';
        $config['prev_link']   = 'Prev';
        $config['full_tag_open']   = '<div class="pg-pagina"><ul class="pagination">';
        $config['num_tag_open']   = '<li>';
        $config['num_tag_close']   = '</li>';
        $config['cur_tag_open']   = '<li class="active"><a>';
        $config['cur_tag_close']   = '</a></li>';
        $config['next_tag_open']   = '<li>';
        $config['next_tag_close']   = '</li>';
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']   = '</li>';
        $config['first_tag_open']   = '<li>';
        $config['first_tag_close']   = '</li>';
        $config['last_tag_open']   = '<li>';
        $config['last_tag_close']   = '</li>';
        $config['full_tag_close']   = '</ul></div>';
        //----------
        $this->pagination->initialize($config);
        
        $data = array(
        'paginasi' => $this->pagination->create_links(),
        'guru' => $this->m_home->guru($limit,$start),
        'title' => 'Guru',
        'isi' => 'v_guru'
        );
        $this->load->view('layout/v_wrapper',$data, FALSE);
        }

    public function berita()
    {
        $this->load->library('pagination');
        $config['base_url'] = base_url('home/berita');
        $config['total_rows'] = count($this->m_home->total_berita());
        $config['per_page'] = 8;
        $config['uri_segmen'] = 3;
        //start dan limit

            $limit = $config['per_page'];
            $start = ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
        //----------s
        $config['first_link']   = 'First';
        $config['last_link']   = 'Last';
        $config['next_link']   = 'Next';
        $config['prev_link']   = 'Prev';
        $config['full_tag_open']   = '<div class="pg-pagina"><ul class="pagination">';
        $config['num_tag_open']   = '<li>';
        $config['num_tag_close']   = '</li>';
        $config['cur_tag_open']   = '<li class="active"><a>';
        $config['cur_tag_close']   = '</a></li>';
        $config['next_tag_open']   = '<li>';
        $config['next_tag_close']   = '</li>';
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']   = '</li>';
        $config['first_tag_open']   = '<li>';
        $config['first_tag_close']   = '</li>';
        $config['last_tag_open']   = '<li>';
        $config['last_tag_close']   = '</li>';
        $config['full_tag_close']   = '</ul></div>';
        //----------
        $this->pagination->initialize($config);
        
        $data = array(
        'paginasi' => $this->pagination->create_links(),
        'berita' => $this->m_home->berita($limit,$start),
        'title' => 'Berita',
        'isi' => 'v_berita'
        );
        $this->load->view('layout/v_wrapper',$data, FALSE);
        }

    public function prestasi()
    {
        $data = array(
            'title' => 'Prestasi',
            'prestasi' => $this->m_home->prestasi(),
            'isi' => 'v_prestasi'
        );
        $this->load->view('layout/v_wrapper',$data, FALSE);
}

    public function organisasi()
    {
        $data = array(
            'title' => 'Organisasi',
            'organisasi' => $this->m_home->organisasi(),
            'isi' => 'v_organisasi'
        );
        $this->load->view('layout/v_wrapper',$data, FALSE);
}

  public function galeri()
    {
        $data = array(
            'title' => 'Galeri',
            'galeri' => $this->m_home->galeri(),
            'isi' => 'v_galeri'
        );
        $this->load->view('layout/v_wrapper',$data, FALSE);
}

 public function kontak()
    {
        $data = array(
            'title' => 'Kontak',
           
            'isi' => 'v_kontak'
        );
        $this->load->view('layout/v_wrapper',$data, FALSE);
}

public function visimisi()
    {
        $data = array(
            'title' => 'Visi dan Misi',
             'visimisi' => $this->m_home->visimisi(),
            'isi' => 'v_visimisi'
        );
        $this->load->view('layout/v_wrapper',$data, FALSE);
}
public function kurikulum()
    {
        $data = array(
            'title' => 'Kurikulum',
             'kurikulum' => $this->m_home->kurikulum(),
            'isi' => 'v_kurikulum'
        );
        $this->load->view('layout/v_wrapper',$data, FALSE);
}
}