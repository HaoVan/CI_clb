<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $arr['page'] = 'student';
        $this->load->view('student/management',$arr);
    }

    public function add() {
        $arr['page'] = 'Add new student';
        $this->validation();
        $this->load->view('student/add',$arr);
    }

    public function edit() {
        $arr['page'] = 'student';
        $this->load->view('admin/vwEditUser',$arr);
    }
    
    public function block_student() {
        // Code goes here
    }
    
    public function delete_student() {
        // Code goes here
    }
    
    private function validation(){
        $this->form_validation->set_rules('email', $this->lang->line('msg_email_addr'), 'trim|max_length[255]');
        $this->form_validation->set_rules('full_name', $this->lang->line('msg_pswd'), 'required|trim|alpha_numeric_symbols|max_length[255]');
        $this->form_validation->set_rules('mobile_phone', $this->lang->line('msg_email_addr'), 'trim|max_length[255]');
        $this->form_validation->set_rules('home_phone', $this->lang->line('msg_email_addr'), 'trim|max_length[255]');
        $this->form_validation->set_rules('address', $this->lang->line('msg_email_addr'), 'trim|max_length[255]');
        $this->form_validation->set_rules('social', $this->lang->line('msg_email_addr'), 'trim|max_length[255]');
        $this->form_validation->set_message('mail_address', $this->lang->line('msg_valid_email'));
        $this->form_validation->set_message('max_length[256]',$this->lang->line('msg_valid_email'));
        $this->form_validation->set_message('password', $this->lang->line('msg_pswd_incorrect_1'));
        $this->form_validation->set_message('alpha_numeric_symbols', $this->lang->line('msg_pswd_incorrect_1'));
        $this->form_validation->set_message('max_length[40]', $this->lang->line('msg_pswd_incorrect_1'));
    }
    
    
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */