<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    public function download()
    {
        $this->db->select('*');
        $this->db->from('tbl_file');
        $this->db->order_by('id','desc');
         return $this->db->get()->result();
    }

    public function guru($limit,$start)
    {
        $this->db->select('*');
        $this->db->from('tbl_guru');
        $this->db->order_by('id_guru','desc');
        $this->db->limit($limit,$start);
        return $this->db->get()->result();
    }

    public function berita($limit,$start)
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->order_by('id_berita','desc');
        $this->db->limit($limit,$start);
        return $this->db->get()->result();
    }

    public function total_berita()
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->order_by('id_berita','desc');
        return $this->db->get()->result();
    }

    public function prestasi()
    {
        $this->db->select('*');
        $this->db->from('tbl_prestasi');
        $this->db->order_by('id_prestasi','desc');

        return $this->db->get()->result();
    }

    public function organisasi()
    {
        $this->db->select('*');
        $this->db->from('tbl_organisasi');
        $this->db->order_by('id','desc');

        return $this->db->get()->result();
    }

      public function galeri()
    {
        $this->db->select('*');
        $this->db->from('tbl_galeri');
        $this->db->order_by('id_galeri','desc');

        return $this->db->get()->result();
    }

       public function visimisi()
    {
        $this->db->select('*');
        $this->db->from('tbl_visimisi');
        $this->db->order_by('id','desc');

        return $this->db->get()->result();
    }

      public function kurikulum()
    {
        $this->db->select('*');
        $this->db->from('tbl_kurikulum');
        $this->db->order_by('id','desc');

        return $this->db->get()->result();
    }

}