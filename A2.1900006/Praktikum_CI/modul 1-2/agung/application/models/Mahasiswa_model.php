<?php
class Mahasiswa_model extends CI_Model
{
    public function lihatData()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }

    public function metodeResult()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }

    function metodeRow()
    {
        $query = $this->db->where('id_mahasiswa', 1);
        $query = $this->db->get('mahasiswa');
        return $query->row();
    }

    function metodeResultArray()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
    }

    function metodeRowArray()
    {
        $query = $this->db->where('id_mahasiswa', 1);
        $query = $this->db->get('mahasiswa');
        return $query->row_array();
    }

}