<?php
class Sk_kematian extends CI_Controller{

    public function index()
    {
        $data['sk_kematian'] = $this->sk_kematian_model->tampil_data('sk_kematian')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/sk_kematian',$data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_sk_kematian()
    {
        $data['data_penduduk']  = $this->sk_kematian_model->tampil_data('data_penduduk')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/sk_kematian_form',$data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_sk_kematian_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == false)
        {
            $this->tambah_sk_kematian();
        } else{
            $nama_penduduk = $this->input->post('nama_penduduk');
            $id_user = $this->input->post('id_user');
            $nik = $this->input->post('nik');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $agama = $this->input->post('agama');
            $jk = $this->input->post('jk');
            $alamat = $this->input->post('alamat');
            $pekerjaan = $this->input->post('pekerjaan');
            $status = $this->input->post('status');
            $tgl_meninggal = $this->input->post('tgl_meninggal');
            $tempat = $this->input->post('tempat');
            $sebab = $this->input->post('sebab');
            $akses = $this->input->post('akses');
            $tgl_surat = $this->input->post('tgl_surat');

            $data=array(
                'nama_penduduk' => $nama_penduduk,
                'id_user' => $id_user,
                'nik' => $nik,
                'tempat_lahir' => $tempat_lahir,
                'tgl_lahir' => $tgl_lahir,
                'agama' => $agama,
                'jk' => $jk,
                'pekerjaan' => $pekerjaan,
                'alamat' => $alamat,
                'status' => $status,
                'tgl_meninggal' => $tgl_meninggal,
                'tempat_kematian' => $tempat,
                'sebab' => $sebab,
                'akses' => $akses,
                'tgl_surat' => $tgl_surat,
            );
            $this->sk_kematian_model->insert_data($data, 'sk_kematian');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Surat Berhasil Ditambahkan !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'); 
            redirect('admin/sk_kematian');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_penduduk','Nama Penduduk','required',[
            'required' => 'Kolom Nama Penduduk Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('tgl_meninggal','Tanggal Meninggal','required',[
            'required' => 'Tanggal Kematian Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('tempat','Tempat Meniggal','required',[
            'required' => 'Kolom Tempat Meninggal Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('sebab','Penyebab','required',[
            'required' => 'Penyabab Kematian Wajib Diisi !!!'
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

    public function update($id)
    {
        $where = array('id_kematian' => $id);
        

        $data['sk_kematian'] = $this->db->query("select * from sk_kematian sk_mati, data_penduduk dp where sk_mati.nama_penduduk=dp.nama_penduduk and sk_mati.id_kematian='$id'")->result();
        $data['data_penduduk'] = $this->sk_kematian_model->tampil_data('data_penduduk')->result();

        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/sk_kematian_update',$data);
        $this->load->view('template_admin/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_kematian');
        $nama_penduduk = $this->input->post('nama_penduduk');
        $id_user = $this->input->post('id_user');
        $nik = $this->input->post('nik');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $agama = $this->input->post('agama');
        $jk = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');
        $status = $this->input->post('status');
        $tgl_meninggal = $this->input->post('tgl_meninggal');
        $tempat = $this->input->post('tempat');
        $sebab = $this->input->post('sebab');
        $akses = $this->input->post('akses');
        $tgl_surat = $this->input->post('tgl_surat');

        $data=array(
            'nama_penduduk' => $nama_penduduk,
            'id_user' => $id_user,
            'nik' => $nik,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'agama' => $agama,
            'jk' => $jk,
            'pekerjaan' => $pekerjaan,
            'alamat' => $alamat,
            'status' => $status,
            'tgl_meninggal' => $tgl_meninggal,
            'tempat_kematian' => $tempat,
            'sebab' => $sebab,
            'akses' => $akses,
            'tgl_surat' => $tgl_surat
        );
        
        $where = array(
            'id_kematian' => $id,
        );

        $this->sk_kematian_model->update_data($where,$data,'sk_kematian');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Surat Berhasil Diupdate !!!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>'); 
        redirect('admin/sk_kematian');
    }

    public function delete($id)
    {
        $where = array('id_kematian' => $id);
        $this->sk_kematian_model->hapus_data($where,'sk_kematian');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Surat Berhasil Dihapus !!!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>'); 
        redirect('admin/sk_kematian');
    }

    public function permohonan(){
        $data['sk_kematian'] = $this->sk_kematian_model->tampil_data('sk_kematian')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('permohonan_surat/sk_kematian',$data);
        $this->load->view('template_admin/footer');
    }

    public function approve($id){
        $where = array('id_kematian' => $id);

        $data['sk_kematian'] = $this->db->query("select * from sk_kematian sk_mati, data_penduduk dp where sk_mati.nama_penduduk=dp.nama_penduduk and sk_mati.id_kematian='$id'")->result();
        $data['data_penduduk'] = $this->sk_kematian_model->tampil_data('data_penduduk')->result();

        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('permohonan_surat/sk_kematian_approve',$data);
        $this->load->view('template_admin/footer');
    }

    public function approve_aksi(){
        $id = $this->input->post('id_kematian');
        $nama_penduduk = $this->input->post('nama_penduduk');
        $id_user = $this->input->post('id_user');
        $nik = $this->input->post('nik');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $agama = $this->input->post('agama');
        $jk = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');
        $status = $this->input->post('status');
        $tgl_meninggal = $this->input->post('tgl_meninggal');
        $tempat = $this->input->post('tempat');
        $sebab = $this->input->post('sebab');
        $akses = $this->input->post('akses');
        $tgl_surat = $this->input->post('tgl_surat');

        $data=array(
            'nama_penduduk' => $nama_penduduk,
            'id_user' => $id_user,
            'nik' => $nik,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'agama' => $agama,
            'jk' => $jk,
            'pekerjaan' => $pekerjaan,
            'alamat' => $alamat,
            'status' => $status,
            'tgl_meninggal' => $tgl_meninggal,
            'tempat_kematian' => $tempat,
            'sebab' => $sebab,
            'akses' => $akses,
            'tgl_surat' => $tgl_surat
        );
        
        $where = array(
            'id_kematian' => $id,
        );

        $this->sk_kematian_model->update_data($where,$data,'sk_kematian');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Surat Berhasil Disetujui !!!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>'); 
        redirect('admin/sk_kematian/permohonan');
    }
    
    public function print($id){
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'id'       => $data->id, 
            'username' => $data->username,
            'level'    => $data->level,
        );
        $data['sk_kematian'] = $this->db->query("select * from sk_kematian sk_mati, data_penduduk dp where sk_mati.nama_penduduk=dp.nama_penduduk and sk_mati.id_kematian='$id'")->result();
        $data['data_penduduk'] = $this->sk_kematian_model->tampil_data('data_penduduk')->result();
        $where = array(
            'id_kematian' => $id,
        );
        $this->load->view('surat/kematian', $data);
    }
}

?>