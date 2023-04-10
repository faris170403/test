<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model {

    private $table = 'tbl_berita';
    private $id = 'tbl_berita.id_berita';


    public function get()
    {
        $this->db->from($this->table);
        $this->db->order_by($this->id,'DESC');
        return $this->db->get()->result();
    }

        public function list()
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user','tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->order_by('id_berita','DESC');
        return $this->db->get()->result();
    }

    public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where($this->id, $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function update($data, $id)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);

        return $this->db->affected_rows();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }
    
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }


}