<?php
class Laporan_data_penduduk extends CI_Controller{
    public function index()
    {
        $data['data_penduduk'] = $this->data_penduduk_model->tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/laporan_data_penduduk',$data);
        $this->load->view('template_admin/footer');
    }

    public function print(){
        $data['data_penduduk'] = $this->data_penduduk_model->tampil_data()->result();
        $this->load->view('surat/laporan', $data);
    }
    public function print2($id){
        $data['data_penduduk'] = $this->db->query("select * from data_penduduk where data_penduduk.id_penduduk='$id'")->result();

        $where = array(
            'id_penduduk' => $id,
        );
        $this->load->view('surat/data_diri', $data);
    }
}
?> 
