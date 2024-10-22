<?php
class Sktm extends CI_Controller{

    public function index()
    {
        $data['sktm'] = $this->sktm_model->tampil_data('sktm')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/sktm',$data);
        $this->load->view('template_admin/footer');
    }
    
    public function tambah_sktm()
    {

        $data['data_penduduk']  = $this->sktm_model->tampil_data('data_penduduk')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/sktm_form',$data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_sktm_aksi()
    {


        $this->_rules();
        if ($this->form_validation->run() == false)
        {
            $this->tambah_sktm();
        } else{
            $nama_penduduk      = $this->input->post('nama_penduduk');
            $id_user            = $this->input->post('id_user');
            $nik                = $this->input->post('nik');
            $tempat_lahir       = $this->input->post('tempat_lahir');
            $tgl_lahir          = $this->input->post('tgl_lahir');
            $jk                 = $this->input->post('jk');
            $agama              = $this->input->post('agama');
            $alamat             = $this->input->post('alamat');
            $pekerjaan          = $this->input->post('pekerjaan');
            $tgl_surat          = $this->input->post('tgl_surat');
            $akses              = $this->input->post('akses');

            $data=array(
                'nama_penduduk' => $nama_penduduk,
                'id_user'       => $id_user,
                'nik'           => $nik,
                'tempat_lahir'  => $tempat_lahir,
                'tgl_lahir'     => $tgl_lahir,
                'jk'            => $jk,
                'agama'         => $agama,
                'pekerjaan'     => $pekerjaan,
                'alamat'        => $alamat,
                'tgl_surat'     => $tgl_surat,
                'akses'         => $akses,
            );

            $this->sktm_model->insert_data($data, 'sktm');

            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Surat Berhasil Ditambahkan !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'); 
            redirect('admin/sktm');
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

    public function update($id)
    {

        $where = array('id_sktm' => $id);

        $data['sktm'] = $this->db->query("select * from sktm stm, data_penduduk dp where stm.nama_penduduk=dp.nama_penduduk and stm.id_sktm='$id'")->result();
        $data['data_penduduk'] = $this->sktm_model->tampil_data('data_penduduk')->result();

        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/sktm_update',$data);
        $this->load->view('template_admin/footer');
    }

    public function update_aksi()
    {


        $id                     = $this->input->post('id_sktm');
        $nama_penduduk      = $this->input->post('nama_penduduk');
        $id_user            = $this->input->post('id_user');
        $nik                = $this->input->post('nik');
        $tempat_lahir       = $this->input->post('tempat_lahir');
        $tgl_lahir          = $this->input->post('tgl_lahir');
        $jk                 = $this->input->post('jk');
        $agama                 = $this->input->post('agama');
        $alamat             = $this->input->post('alamat');
        $pekerjaan          = $this->input->post('pekerjaan');
        $tgl_surat          = $this->input->post('tgl_surat');
        $akses              = $this->input->post('akses');

        $data=array(
            'nama_penduduk' => $nama_penduduk,
            'id_user'       => $id_user,
            'nik'           => $nik,
            'tempat_lahir'  => $tempat_lahir,
            'tgl_lahir'     => $tgl_lahir,
            'jk'            => $jk,
            'agama'            => $agama,
            'pekerjaan'     => $pekerjaan,
            'alamat'        => $alamat,
            'tgl_surat'     => $tgl_surat,
            'akses'         => $akses,
        );
        
        $where = array(
            'id_sktm' => $id,
        );

        $this->sktm_model->update_data($where,$data,'sktm');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Surat Berhasil Diupdate !!!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>'); 
        redirect('admin/sktm');
    }

    public function delete($id)
    {
        $where = array('id_sktm' => $id);
        $this->sktm_model->hapus_data($where,'sktm');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Surat Berhasil Dihapus !!!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>'); 
        redirect('admin/sktm');
    }


    public function permohonan(){
        $data['sktm'] = $this->sktm_model->tampil_data('sktm')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('permohonan_surat/sktm',$data);
        $this->load->view('template_admin/footer');
    }

    public function approve($id){

        $where = array('id_sktm' => $id);

        $data['sktm'] = $this->db->query("select * from sktm stm, data_penduduk dp where stm.nama_penduduk=dp.nama_penduduk and stm.id_sktm='$id'")->result();
        $data['data_penduduk'] = $this->sktm_model->tampil_data('data_penduduk')->result();

        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('permohonan_surat/sktm_approve',$data);
        $this->load->view('template_admin/footer');
    }

    public function approve_aksi(){


        $id                     = $this->input->post('id_sktm');
        $nama_penduduk      = $this->input->post('nama_penduduk');
        $id_user            = $this->input->post('id_user');
        $nik                = $this->input->post('nik');
        $tempat_lahir       = $this->input->post('tempat_lahir');
        $tgl_lahir          = $this->input->post('tgl_lahir');
        $jk                 = $this->input->post('jk');
        $agama                 = $this->input->post('agama');
        $alamat             = $this->input->post('alamat');
        $pekerjaan          = $this->input->post('pekerjaan');
        $tgl_surat          = $this->input->post('tgl_surat');
        $akses              = $this->input->post('akses');

        $data=array(
            'nama_penduduk' => $nama_penduduk,
            'id_user'       => $id_user,
            'nik'           => $nik,
            'tempat_lahir'  => $tempat_lahir,
            'tgl_lahir'     => $tgl_lahir,
            'jk'            => $jk,
            'agama'            => $agama,
            'pekerjaan'     => $pekerjaan,
            'alamat'        => $alamat,
            'tgl_surat'     => $tgl_surat,
            'akses'         => $akses,
        );
        
        $where = array(
            'id_sktm' => $id,
        );

        $this->sktm_model->update_data($where,$data,'sktm');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Surat Berhasil Disetujui !!!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>'); 
        redirect('admin/sktm/permohonan');
    }

    public function print($id){
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'id'       => $data->id, 
            'username' => $data->username,
            'level'    => $data->level,
        );
        $data['sktm'] = $this->db->query("select * from sktm stm, data_penduduk dp where stm.nama_penduduk=dp.nama_penduduk and stm.id_sktm='$id'")->result();
        $data['data_penduduk'] = $this->sktm_model->tampil_data('data_penduduk')->result();
        // $data['judul'] = "Cetak Data Mutasi";
        // $data['mutasi']  = $this->mutasiModel->join3table($id);
        // $data['mutasi4']  = $this->mutasiModel->join3table2($id);
        // $data['mutasi2']  = $this->mutasiModel->join3table5($id);
        // $data['mutasi3']  = $this->mutasiModel->join3table4($id);
        $where = array(
            'id_sktm' => $id,
        );
        $this->load->view('surat/sktm', $data);
    }

}
?>