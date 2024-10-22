<?php
class Sk_usaha extends CI_Controller{

    public function index()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'id'       => $data->id, 
            'username' => $data->username,
            'level'    => $data->level,
        );
        $data['sk_usaha'] = $this->sk_usaha_model->tampil_data('sk_usaha')->result();
        $this->load->view('template_user/header');
        $this->load->view('template_user/sidebar');
        $this->load->view('user/sk_usaha',$data);
        $this->load->view('template_user/footer');
    }

    public function tambah_sk_usaha()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'id'       => $data->id, 
            'username' => $data->username,
            'level'    => $data->level,
        );
        $data['data_penduduk'] = $this->sk_usaha_model->tampil_data('data_penduduk')->result();
        $this->load->view('template_user/header');
        $this->load->view('template_user/sidebar');
        $this->load->view('user/sk_usaha_form',$data);
        $this->load->view('template_user/footer');
    }

    public function tambah_sk_usaha_aksi()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'id'       => $data->id, 
            'username' => $data->username,
            'level'    => $data->level,
        );
        $this->_rules();
        if ($this->form_validation->run() == false)
        {
            $this->tambah_sk_usaha();
        } else{
            $nama_penduduk      = $this->input->post('nama_penduduk');
            $id_user            = $this->input->post('id_user');
            $nik                = $this->input->post('nik');
            $tempat_lahir       = $this->input->post('tempat_lahir');
            $tgl_lahir          = $this->input->post('tgl_lahir');
            $jk                 = $this->input->post('jk');
            $alamat             = $this->input->post('alamat');
            $pekerjaan          = $this->input->post('pekerjaan');
            $nama_usaha         = $this->input->post('nama_usaha');
            $jenis_usaha        = $this->input->post('jenis_usaha');
            $luas_usaha         = $this->input->post('luas_usaha');
            $alamat_usaha       = $this->input->post('alamat_usaha');
            $tgl_surat          = $this->input->post('tgl_surat');
            $akses              = $this->input->post('akses');

            $data=array(
                'nama_penduduk' => $nama_penduduk,
                'id_user' => $id_user,
                'nik'           => $nik,
                'tempat_lahir'  => $tempat_lahir,
                'tgl_lahir'     => $tgl_lahir,
                'jk'            => $jk,
                'pekerjaan'     => $pekerjaan,
                'alamat'        => $alamat,
                'nama_usaha'    => $nama_usaha,
                'jenis_usaha'   => $jenis_usaha,
                'luas_usaha'    => $luas_usaha,
                'alamat_usaha'  => $alamat_usaha,
                'tgl_surat'     => $tgl_surat,
                'akses'         => $akses,
            );
            $this->sk_usaha_model->insert_data($data, 'sk_usaha');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Surat Berhasil Ditambahkan !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'); 
            redirect('user/sk_usaha');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_penduduk','Nama Penduduk','required',[
            'required' => 'Kolom Nama Penduduk Wajib Diisi !!!'
        ]);

        $this->form_validation->set_rules('tgl_surat','Tanggal Surat','required',[
            'required' => 'Kolom Tanggal Surat Wajib Diisi !!!'
        ]);
        
        $this->form_validation->set_rules('nama_usaha','Nama Usaha','required',[
            'required' => 'Kolom Nama Usaha Wajib Diisi !!!'
        ]);
        
        $this->form_validation->set_rules('jenis_usaha','jenis Usaha','required',[
            'required' => 'Kolom Jenis Usaha Wajib Diisi !!!'
        ]);
        
        $this->form_validation->set_rules('luas_usaha','Luas Usaha','required',[
            'required' => 'Kolom Luas Tempat Usaha Wajib Diisi !!!'
        ]);
       
        $this->form_validation->set_rules('alamat_usaha','Alamat Usaha','required',[
            'required' => 'Kolom Alamat Tempat Usaha Wajib Diisi !!!'
        ]);
    }

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_pos');
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

    function get_id(){
        $nama_penduduk=$this->input->post('nama_penduduk');
        $data=$this->m_pos->get_data_surat_byid($nama_penduduk);
        echo json_encode($data);
    }

    public function print($id){
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'id'       => $data->id, 
            'username' => $data->username,
            'level'    => $data->level,
        );
        $data['sk_usaha'] = $this->db->query("select * from sk_usaha usaha, data_penduduk dp where usaha.nama_penduduk=dp.nama_penduduk and usaha.id_usaha='$id'")->result();
        $data['data_penduduk'] = $this->sk_kehilangan_model->tampil_data('data_penduduk')->result();
        $where = array(
            'id_usaha' => $id,
        );
        $this->load->view('surat/usaha', $data);
    }

}
?>