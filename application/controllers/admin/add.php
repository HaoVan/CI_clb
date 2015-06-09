<?php

class Add extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('admin');
    }
    
    public function index(){
        if(!$this->session->userdata('is_admin_login')){
            redirect('admin/index');
        }
        if($this->input->post()){
            $this->validate();
            if($this->form_validation->run()){
                
            }else{
                $data['infor'] = $this->input->post();
            }
        }
        $this->load->view('admin/add', $data);
    }
    
    private function validate(){
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|alpha_numeric_symbols|max_length[255]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|alpha_numeric_symbols|max_length[255]');
        $this->form_validation->set_rules('re-password', 'Re-password', 'required|trim|alpha_numeric_symbols|max_length[255]');
        $this->form_validation->set_rules('address', 'Address', 'required|trim|alpha_numeric_symbols|max_length[255]');
        $this->form_validation->set_rules('mobile_phone', 'Re-password', 'required|trim|is_natural|max_length[255]');
        $this->form_validation->set_rules('block', 'Block', 'required|trim|is_natural|max_length[2]');
        $this->form_validation->set_rules('user_type', 'User_type', 'required|trim|max_length[2]');

    }
}