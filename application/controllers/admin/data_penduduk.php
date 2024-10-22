<?php 
class Data_penduduk extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if(!isset($this->session->userdata['username'])){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Login Dulu !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/auth');
        }
    }

    public function index()
    {
        $data['data_penduduk'] = $this->data_penduduk_model->tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/data_penduduk',$data);
        $this->load->view('template_admin/footer');
    }

    public function input()
    {
        $data = array(
            'id_penduduk'           => set_value('id_penduduk'),
            'nama_penduduk'         => set_value('nama_penduduk'),
            'jk'                    => set_value('jk'),
            'nik'                   => set_value('nik'),
            'no_kk'                 => set_value('no_kk'),
            'tempat_lahir'          => set_value('tempat_lahir'),
            'tgl_lahir'             => set_value('tgl_lahir'),
            'agama'                 => set_value('agama'),
            'status'                => set_value('status'),
            'pendidikan_terakhir'   => set_value('pendidikan_terakhir'),
            'pekerjaan'             => set_value('pekerjaan'),
            'no_telepon'            => set_value('no_telepon'),
            'alamat'                => set_value('alamat'),           
        );
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/data_penduduk_form',$data);
        $this->load->view('template_admin/footer');
    }

    public function input_aksi()
    {
        $this->_rules();

        if($this->form_validation->run() == false){
            $this->input();
        } else {

            $username           = $this->input->post('nik');
            $password           = $this->input->post('password');
            $pass               = md5($password);
            $level              = $this->input->post('level');

            $data2=array(
                'username' => $username,
                'password' => $pass,
                'level' => $level,
            );

            $data = array(
                'nama_penduduk'         => $this->input->post('nama_penduduk',true),
                'jk'                    => $this->input->post('jk',true),
                'nik'                   => $this->input->post('nik',true),
                'no_kk'                 => $this->input->post('no_kk',true),
                'tempat_lahir'          => $this->input->post('tempat_lahir',true),
                'tgl_lahir'             => $this->input->post('tgl_lahir',true),
                'agama'                 => $this->input->post('agama',true),
                'status'                => $this->input->post('status',true),
                'pendidikan_terakhir'   => $this->input->post('pendidikan_terakhir',true),
                'pekerjaan'             => $this->input->post('pekerjaan',true),
                'no_telepon'            => $this->input->post('no_telepon',true),
                'alamat'                => $this->input->post('alamat',true),  
            );
            $this->data_penduduk_model->input_data($data);
            $this->sktm_model->insert_data($data2, 'user');

            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Ditambahkan !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>'); 
            redirect('admin/data_penduduk');

        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_penduduk','Nama Penduduk','required',[
            'required' => 'Kolom Nama Penduduk Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('jk','Jenis Kelamin','required',[
            'required' => 'Kolom Jenis Kelamin Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('nik','NIK','required',[
            'required' => 'Kolom NIK Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('no_kk','No. KK','required',[
            'required' => 'Kolom No. KK Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required',[
            'required' => 'Kolom Tempat Lahir Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('tgl_lahir','Tanggal Lahir','required',[
            'required' => 'Kolom Tanggal Lahir Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('agama','Agama','required',[
            'required' => 'Kolom Agama Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('status','Status','required',[
            'required' => 'Kolom Status Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('pendidikan_terakhir','Pendidikan Terakhir','required',[
            'required' => 'Kolom Pendidikan Terakhir Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('pekerjaan','Pekerjaan','required',[
            'required' => 'Kolom Pekerjaan Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('no_telepon','Nomor Telepon','required',[
            'required' => 'Kolom Nomor Telepon Wajib Diisi !!!'
        ]);
        $this->form_validation->set_rules('alamat','Alamat','required',[
            'required' => 'Kolom Alamat Wajib Diisi !!!'
        ]);
    }

    public function update($id)
    {
        $where = array('id_penduduk' => $id);
        $data['data_penduduk'] = $this->data_penduduk_model->edit_data($where,'data_penduduk')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/data_penduduk_update',$data);
        $this->load->view('template_admin/footer');
    }
    public function update_aksi()
    {
        $id                     = $this->input->post('id_penduduk');
        $nama_penduduk          = $this->input->post('nama_penduduk');
        $jk                     = $this->input->post('jk');
        $nik                    = $this->input->post('nik');
        $no_kk                  = $this->input->post('no_kk');
        $tempat_lahir           = $this->input->post('tempat_lahir');
        $tgl_lahir              = $this->input->post('tgl_lahir');
        $agama                  = $this->input->post('agama');
        $status                 = $this->input->post('status');
        $pendidikan_terakhir    = $this->input->post('pendidikan_terakhir');
        $pekerjaan              = $this->input->post('pekerjaan');
        $no_telepon             = $this->input->post('no_telepon');
        $alamat                 = $this->input->post('alamat');

        $data = array(
            'nama_penduduk'         => $nama_penduduk,
            'jk'                    => $jk,
            'nik'                   => $nik,
            'no_kk'                 => $no_kk,
            'tempat_lahir'          => $tempat_lahir,
            'tgl_lahir'             => $tgl_lahir,
            'agama'                 => $agama,
            'status'                => $status,
            'pendidikan_terakhir'   => $pendidikan_terakhir,
            'pekerjaan'             => $pekerjaan,
            'no_telepon'            => $no_telepon,
            'alamat'                => $alamat,
        );
        
        $where = array(
            'id_penduduk' => $id,
        );

        $this->data_penduduk_model->update_data($where,$data,'data_penduduk');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Diupdate !!!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>'); 
        redirect('admin/data_penduduk');

    }

    public function delete($id)
    {
        $where = array('id_penduduk' => $id);
        $this->data_penduduk_model->hapus_data($where,'data_penduduk');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil Dihapus !!!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>'); 
        redirect('admin/data_penduduk');
    }

    public function detail($id)
    {
        $data['detail'] = $this->data_penduduk_model->ambil_id_data_penduduk($id);
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/data_penduduk_detail',$data);
        $this->load->view('template_admin/footer');
    }
    
}
?>