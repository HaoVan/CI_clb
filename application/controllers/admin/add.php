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
        }else{
            $data=$this->session->userdata('is_admin_login');
            var_dump($data);die;
        }
        $this->load->view('admin/add', $data);
    }
}