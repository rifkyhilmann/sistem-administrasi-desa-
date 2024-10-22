<?php 
class Data_penduduk_model extends CI_Model{
    public function tampil_data()
    {
       return $this->db->get('data_penduduk');
    }
    
    public function input_data($data)
    {
        $this->db->insert('data_penduduk', $data);
    }

    public function edit_data($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function ambil_id_data_penduduk($id)
    {
        $result = $this->db->where('id_penduduk', $id)->get('data_penduduk');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }

}
?>