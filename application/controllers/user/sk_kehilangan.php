<?php
class Sk_kehilangan extends CI_Controller{

    public function index()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'id'       => $data->id, 
            'username' => $data->username,
            'level'    => $data->level,
        );
        $data['sk_kehilangan'] = $this->sk_kehilangan_model->tampil_data('sk_kehilangan')->result();
        $this->load->view('template_user/header');
        $this->load->view('template_user/sidebar');
        $this->load->view('user/sk_kehilangan',$data);
        $this->load->view('template_user/footer');
    }

    public function tambah_sk_kehilangan()
    {
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'id'       => $data->id, 
            'username' => $data->username,
            'level'    => $data->level,
        );
        $data['data_penduduk']  = $this->sk_kehilangan_model->tampil_data('data_penduduk')->result();
        $this->load->view('template_user/header');
        $this->load->view('template_user/sidebar');
        $this->load->view('user/sk_kehilangan_form',$data);
        $this->load->view('template_user/footer');
    }

    public function tambah_sk_kehilangan_aksi()
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
            $this->tambah_sk_kehilangan();
        } else{
            $nama_penduduk = $this->input->post('nama_penduduk');
            $id_user           = $this->input->post('id_user');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $agama = $this->input->post('agama');
            $jk = $this->input->post('jk');
            $alamat = $this->input->post('alamat');
            $pekerjaan = $this->input->post('pekerjaan');
            $nama_barang = $this->input->post('nama_barang');
            $hari_hilang = $this->input->post('hari_hilang');
            $tgl_hilang = $this->input->post('tgl_hilang');
            $tgl_surat = $this->input->post('tgl_surat');
            $akses  = $this->input->post('akses');

            $data=array(
                'nama_penduduk' => $nama_penduduk,
                'id_user' => $id_user,
                'tempat_lahir' => $tempat_lahir,
                'tgl_lahir' => $tgl_lahir,
                'agama' => $agama,
                'jk' => $jk,
                'pekerjaan' => $pekerjaan,
                'alamat' => $alamat,
                'nama_barang' => $nama_barang,
                'hari_hilang' => $hari_hilang,
                'tgl_hilang' => $tgl_hilang,
                'tgl_surat' => $tgl_surat,
                'akses'                 => $akses,
            );
            $this->sk_kehilangan_model->insert_data($data, 'sk_kehilangan');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Surat Berhasil Ditambahkan !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'); 
            redirect('user/sk_kehilangan');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_penduduk','Nama Penduduk','required',[
            'required' => 'Kolom Nama Penduduk Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('nama_barang','Nama Barang','required',[
            'required' => 'Kolom Barang Yang Hilang Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('hari_hilang','Hari Hilang','required',[
            'required' => 'Kolom Hari Kehilangan Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('tgl_hilang','Tanggal Kehilangan','required',[
            'required' => 'Tanggal Kehilangan Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('tgl_surat','Tanggal Surat','required',[
            'required' => 'Tanggal Surat Wajib Diisi !!!'
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
        $data['sk_kehilangan'] = $this->db->query("select * from sk_kehilangan sk_hilang, data_penduduk dp where sk_hilang.nama_penduduk=dp.nama_penduduk and sk_hilang.id_kehilangan='$id'")->result();
        $data['data_penduduk'] = $this->sk_kehilangan_model->tampil_data('data_penduduk')->result();
        $where = array(
            'id_kehilangan' => $id,
        );
        $this->load->view('surat/kehilangan', $data);
    }
}

?>