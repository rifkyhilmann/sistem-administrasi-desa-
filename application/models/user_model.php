<?php
class User_model extends CI_Model{
    public function ambil_data($id)
    {
        $this->db->where('username', $id);
        return $this->db->get('user')->row();
    }
    public function data_penduduk($id)
    {
        $this->db->where('nik', $id);
        return $this->db->get('data_penduduk')->row();
    }
}
?>