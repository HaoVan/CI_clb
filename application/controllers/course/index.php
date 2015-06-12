<?php

class Index extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('course');
        $this->load->model('member');
    }
    
    public function index(){
        
    }
    
    public function add(){
        if(!$this->session->userdata('is_admin_login')){
            redirect('admin/index');
        }
        
        if($this->input->post()){
            if($this->form_validation->run()){
                
            }
        }
        $data['header'] = "Add new course";
        $this->load->view('course/add',$data);
    }
    
    private function validation($is_new=true){
        
    }
}
