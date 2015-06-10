<?php

class Add extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("admin");
    }
    
    public function index(){
        if(!$this->session->userdata('is_admin_login')){
            redirect('admin/index');
        }
        $data['header'] = "Add New Admin";
        if($this->input->post()){
            $this->validate();
            if($this->form_validation->run()){
                $data=$this->input->post();
                $rs = $this->admin->savedata($data);
                if($rs == false){
                    $this->session->set_flashdata("message_error", "Cannot add new admin");
                    $this->load->view('admin/add');
                }else{
                    $this->session->set_flashdata('message_success','Successfully Adding new admin');
                    redirect('admin/index/listview');
                }
            }
        }
        $this->load->view('admin/add',$data);
    }
    
    private function validate(){
        $this->form_validation->set_rules('email', '', 'required|trim|valid_email|callback_email_check');
        $this->form_validation->set_rules('username', '', 'required|trim|alpha_numeric|max_length[255]');
        $this->form_validation->set_rules('password', '', 'required|trim|alpha_numeric|max_length[255]');
        $this->form_validation->set_rules('re_password', '', 'required|trim|alpha_numeric|max_length[255]|callback_password_confirm');
        $this->form_validation->set_rules('address', '', 'required|trim|max_length[255]');
        $this->form_validation->set_rules('mobile_phone', '', 'required|trim|is_natural|max_length[255]|min_length[10]');
        $this->form_validation->set_rules('block', '', 'required|trim|is_natural|max_length[2]');
        $this->form_validation->set_rules('user_type', '', 'required|trim|alpha|max_length[2]');

    }
    
    public function password_confirm(){
        $password = $this->input->post('password');
        $re_password = $this->input->post('re_password');
        if(!empty($re_password) && !empty($re_password) && $password != $re_password){
            $this->form_validation->set_message('password_confirm','Password and Re-Password are not math');
            return false;
        }
    }
    
    public function email_check(){
        $email = $this->input->post('email');
        $rs = $this->admin->checkEmail($email);
        if(count($rs)){
            $this->form_validation->set_message('email_check','Email already exist');
            return false;
        }
    }
}