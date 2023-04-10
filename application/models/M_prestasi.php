<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_prestasi extends CI_Model {

    private $table = 'tbl_prestasi';
    private $id = 'tbl_prestasi.id_prestasi';
    
    public function get()
    {
        $this->db->from($this->table);
        $this->db->order_by($this->id,'DESC');
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