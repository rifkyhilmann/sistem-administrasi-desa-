<?php
class Dashboard extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        if(!isset($this->session->userdata['username'])){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/auth');
        }
    }

    public function index()
    {
        $penduduk = $this->db->query("SELECT * FROM data_penduduk");
        $data2['penduduk']=$penduduk->num_rows();
        $sktm = $this->db->query("SELECT * FROM sktm");
        $data2['sktm']=$sktm->num_rows();
        $sk_hilang = $this->db->query("SELECT * FROM sk_kehilangan");
        $data2['sk_hilang']=$sk_hilang->num_rows();
        $sk_lahir = $this->db->query("SELECT * FROM sk_kelahiran");
        $data2['sk_lahir']=$sk_lahir->num_rows();
        $sk_usaha = $this->db->query("SELECT * FROM sk_usaha");
        $data2['sk_usaha']=$sk_usaha->num_rows();
        $sk_mati = $this->db->query("SELECT * FROM sk_kematian");
        $data2['sk_mati']=$sk_mati->num_rows();

        $p_usaha = $this->db->query("SELECT * FROM sk_usaha where akses = 'N'");
        $data2['p_usaha']=$p_usaha->num_rows();
        $p_hilang = $this->db->query("SELECT * FROM sk_kehilangan where akses = 'N'");
        $data2['p_hilang']=$p_hilang->num_rows();
        $p_lahir = $this->db->query("SELECT * FROM sk_kelahiran where akses = 'N'");
        $data2['p_lahir']=$p_lahir->num_rows();
        $p_sktm = $this->db->query("SELECT * FROM sktm where akses = 'N'");
        $data2['p_sktm']=$p_sktm->num_rows();
        $p_mati = $this->db->query("SELECT * FROM sk_kematian where akses = 'N'");
        $data2['p_mati']=$p_mati->num_rows();

        
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'level'    => $data->level,
            'id'       => $data->id,
        );
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('admin/dashboard',$data2);
        $this->load->view('template_admin/footer');
    }
}
?>