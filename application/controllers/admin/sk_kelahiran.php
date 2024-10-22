<?php
class Sk_kelahiran extends CI_Controller{

    public function index()
    {
        $data['sk_kelahiran'] = $this->sk_kelahiran_model->tampil_data('sk_kelahiran')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/sk_kelahiran',$data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_sk_kelahiran()
    {
        $data['data_penduduk'] = $this->sk_kelahiran_model->tampil_data('data_penduduk')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/sk_kelahiran_form',$data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_sk_kelahiran_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == false)
        {
            $this->tambah_sk_kelahiran();
        } else{
            $nama_ibu           = $this->input->post('nama_ibu');
            $umur_ibu           = $this->input->post('umur_ibu');
            $id_user           = $this->input->post('id_user');
            $pekerjaan_ibu      = $this->input->post('pekerjaan_ibu');
            $alamat_ibu         = $this->input->post('alamat_ibu');
            $nama_bapak         = $this->input->post('nama_bapak');
            $umur_bapak         = $this->input->post('umur_bapak');
            $pekerjaan_bapak    = $this->input->post('pekerjaan_bapak');
            $alamat_bapak       = $this->input->post('alamat_bapak');
            $nama_anak          = $this->input->post('nama_anak');
            $tgl_lahir_anak     = $this->input->post('tgl_lahir_anak');
            $jk_anak            = $this->input->post('jk_anak');
            $tgl_surat          = $this->input->post('tgl_surat');
            $akses              = $this->input->post('akses');

            $data=array(
                'nama_ibu'          => $nama_ibu,
                'umur_ibu'          => $umur_ibu,
                'id_user'          => $id_user,
                'pekerjaan_ibu'     => $pekerjaan_ibu,
                'alamat_ibu'        => $alamat_ibu,
                'nama_bapak'        => $nama_bapak,
                'umur_bapak'        => $umur_bapak,
                'pekerjaan_bapak'   => $pekerjaan_bapak,
                'alamat_bapak'      => $alamat_bapak,
                'nama_anak'         => $nama_anak,
                'tgl_lahir_anak'    => $tgl_lahir_anak,
                'jk_anak'          => $jk_anak,
                'akses'             => $akses,
                'tgl_surat'         => $tgl_surat,
            );
            $this->sk_kelahiran_model->insert_data($data, 'sk_kelahiran');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Surat Berhasil Ditambahkan !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'); 
            redirect('admin/sk_kelahiran');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_ibu','Umur Ibu','required',[
            'required' => 'Kolom Nama Ibu Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('nama_bapak','Umur Ibu','required',[
            'required' => 'Kolom Nama Bapak Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('umur_ibu','Umur Ibu','required',[
            'required' => 'Kolom Umur Ibu Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('umur_bapak','Umur Bapak','required',[
            'required' => 'Kolom Umur Bapak Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('nama_anak','Nama Anak','required',[
            'required' => 'Kolom Nama Anak Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('tgl_lahir_anak','Tanggal Lahir Anak','required',[
            'required' => 'Tanggal Lahir Anak Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('jk_anak','Jenis Kelamin Anak','required',[
            'required' => 'Kolom Jenis Kelamin Anak Wajib Diisi !!!'
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
        $where = array('id_lahir' => $id);

        $data['sk_kelahiran'] = $this->db->query("select * from sk_kelahiran sk_lahir, data_penduduk dp where sk_lahir.nama_ibu=dp.nama_penduduk and sk_lahir.id_lahir='$id'")->result();
        $data['data_penduduk'] = $this->sk_kelahiran_model->tampil_data('data_penduduk')->result();

        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/sk_kelahiran_update',$data);
        $this->load->view('template_admin/footer');
    }

    public function update_aksi()
    {
        $id                 = $this->input->post('id_lahir');
        $nama_ibu           = $this->input->post('nama_ibu');
        $umur_ibu           = $this->input->post('umur_ibu');
        $id_user           = $this->input->post('id_user');
        $pekerjaan_ibu      = $this->input->post('pekerjaan_ibu');
        $alamat_ibu         = $this->input->post('alamat_ibu');
        $nama_bapak         = $this->input->post('nama_bapak');
        $umur_bapak         = $this->input->post('umur_bapak');
        $pekerjaan_bapak    = $this->input->post('pekerjaan_bapak');
        $alamat_bapak       = $this->input->post('alamat_bapak');
        $nama_anak          = $this->input->post('nama_anak');
        $tgl_lahir_anak     = $this->input->post('tgl_lahir_anak');
        $jk_anak            = $this->input->post('jk_anak');
        $tgl_surat          = $this->input->post('tgl_surat');
        $akses              = $this->input->post('akses');

        $data=array(
            'nama_ibu'          => $nama_ibu,
            'umur_ibu'          => $umur_ibu,
            'id_user'          => $id_user,
            'pekerjaan_ibu'     => $pekerjaan_ibu,
            'alamat_ibu'        => $alamat_ibu,
            'nama_bapak'        => $nama_bapak,
            'umur_bapak'        => $umur_bapak,
            'pekerjaan_bapak'   => $pekerjaan_bapak,
            'alamat_bapak'      => $alamat_bapak,
            'nama_anak'         => $nama_anak,
            'tgl_lahir_anak'    => $tgl_lahir_anak,
            'jk_anak'          => $jk_anak,
            'akses'             => $akses,
            'tgl_surat'         => $tgl_surat,
        );
        
        $where = array(
            'id_lahir' => $id,
        );
        $this->sk_kelahiran_model->update_data($where, $data,'sk_kelahiran');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Surat Berhasil Diupdate !!!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>'); 
        redirect('admin/sk_kelahiran');
    }

    public function delete($id)
    {
        $where = array('id_lahir' => $id);
        $this->sk_kelahiran_model->hapus_data($where,'sk_kelahiran');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Surat Berhasil Dihapus !!!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>'); 
        redirect('admin/sk_kelahiran');
    }

    public function permohonan(){
        $data['sk_kelahiran'] = $this->sk_kelahiran_model->tampil_data('sk_kelahiran')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('permohonan_surat/sk_kelahiran',$data);
        $this->load->view('template_admin/footer');
    }

    public function approve($id){
        $where = array('id_lahir' => $id);

        $data['sk_kelahiran'] = $this->db->query("select * from sk_kelahiran sk_lahir, data_penduduk dp where sk_lahir.nama_ibu=dp.nama_penduduk and sk_lahir.id_lahir='$id'")->result();
        $data['data_penduduk'] = $this->sk_kelahiran_model->tampil_data('data_penduduk')->result();

        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('permohonan_surat/sk_kelahiran_approve',$data);
        $this->load->view('template_admin/footer');
    }

    public function approve_aksi(){
        $id                 = $this->input->post('id_lahir');
        $nama_ibu           = $this->input->post('nama_ibu');
        $umur_ibu           = $this->input->post('umur_ibu');
        $id_user           = $this->input->post('id_user');
        $pekerjaan_ibu      = $this->input->post('pekerjaan_ibu');
        $alamat_ibu         = $this->input->post('alamat_ibu');
        $nama_bapak         = $this->input->post('nama_bapak');
        $umur_bapak         = $this->input->post('umur_bapak');
        $pekerjaan_bapak    = $this->input->post('pekerjaan_bapak');
        $alamat_bapak       = $this->input->post('alamat_bapak');
        $nama_anak          = $this->input->post('nama_anak');
        $tgl_lahir_anak     = $this->input->post('tgl_lahir_anak');
        $jk_anak            = $this->input->post('jk_anak');
        $tgl_surat          = $this->input->post('tgl_surat');
        $akses              = $this->input->post('akses');

        $data=array(
            'nama_ibu'          => $nama_ibu,
            'umur_ibu'          => $umur_ibu,
            'id_user'          => $id_user,
            'pekerjaan_ibu'     => $pekerjaan_ibu,
            'alamat_ibu'        => $alamat_ibu,
            'nama_bapak'        => $nama_bapak,
            'umur_bapak'        => $umur_bapak,
            'pekerjaan_bapak'   => $pekerjaan_bapak,
            'alamat_bapak'      => $alamat_bapak,
            'nama_anak'         => $nama_anak,
            'tgl_lahir_anak'    => $tgl_lahir_anak,
            'jk_anak'          => $jk_anak,
            'akses'             => $akses,
            'tgl_surat'         => $tgl_surat,
        );
        
        $where = array(
            'id_lahir' => $id,
        );

        $this->sk_kelahiran_model->update_data($where,$data,'sk_kelahiran');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Surat Berhasil Disetujui !!!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>'); 
        redirect('admin/sk_kelahiran/permohonan');
    }

    public function print($id){
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'id'       => $data->id, 
            'username' => $data->username,
            'level'    => $data->level,
        );
        $data['sk_kelahiran'] = $this->db->query("select * from sk_kelahiran sk_lahir, data_penduduk dp where sk_lahir.nama_ibu=dp.nama_penduduk and sk_lahir.id_lahir='$id'")->result();
        $data['data_penduduk'] = $this->sk_kelahiran_model->tampil_data('data_penduduk')->result();
        $where = array(
            'id_lahir' => $id,
        );
        $this->load->view('surat/kelahiran', $data);
    }
}
?>