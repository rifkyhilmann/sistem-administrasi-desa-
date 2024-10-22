<?php
class M_pos extends CI_Model{
 
    function get_data_surat_byid($nama_penduduk){
        $hsl=$this->db->query("SELECT * FROM data_penduduk WHERE nama_penduduk='$nama_penduduk'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'nama_penduduk' => $data->nama_penduduk,
                    'nik' => $data->nik,
                    'tempat_lahir' => $data->tempat_lahir,
                    'tgl_lahir' => $data->tgl_lahir,
                    'agama' => $data->agama,
                    'jk' => $data->jk,
                    'status' => $data->status,
                    'pekerjaan' => $data->pekerjaan,
                    'alamat' => $data->alamat,
                    );
            }
        }
        return $hasil;
    }
 
}