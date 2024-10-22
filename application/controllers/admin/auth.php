<?php
class Auth extends CI_Controller{
    public function index()
    {
        $this->load->view('template_admin/header');
        $this->load->view('admin/login');
    }
    public function proses_login()
    {
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('template_admin/header');
            $this->load->view('admin/login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $username;
            $pass = md5($password);

            $cek = $this->login_model->cek_login($user, $pass);

            if($cek->num_rows() > 0){

                foreach ($cek->result() as $ck){
                    $sess_data['username'] = $ck->username;
                    $sess_data['email'] = $ck->email;
                    $sess_data['level'] = $ck->level;

                    $this->session->set_userdata($sess_data);
                }
                if($sess_data['level'] == 'Admin'){
                    redirect('admin/dashboard');
                }elseif($sess_data['level'] == 'User'){
                    redirect('user/dashboard');
                } else {
                    $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Username Dan Password Salah !!!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'); 
                    redirect('admin/auth');
                }
                
            } else {
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username Dan Password Salah !!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>'); 
                redirect('admin/auth');
            }
        }
    } 
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/auth');
    }
}
?>