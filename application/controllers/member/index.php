<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('member');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $arr['page'] = 'member';
        $this->load->view('member/management',$arr);
    }

    public function add() {
        $arr['page'] = 'Add new member';
        $this->validation();
        $this->load->view('member/add',$arr);
    }
    public function confirm_add(){
        if($this->validation()==TRUE){
            //du lieu them vao bang thanh vien
           $data = array(
               'full_name'     => $this->input->post('full_name'),
               'email'    => $this->input->post('email'),
               'mobile_phone' => $this->input->post('mobile_phone'),
               'home_number'    => $this->input->post('home_number'),
               'address'    => $this->input->post('address'),
               'social'    => $this->input->post('social'),
               'status'    => $this->input->post('status'),
            );
           //them thanh vien vao trong csdl
           if($this->member->save($data))
           {
                 $this->session->set_flashdata('flash_message', 'Dang ky thanh vien thanh cong');
                 redirect();//chuyen toi trang chu
           }
        }  else {
            echo 'dd';
            $arr['page'] = 'Add new member';
            $this->load->view('member/add',$arr);
        }
        
    }
    public function edit() {
        $arr['page'] = 'member';
        $this->load->view('admin/vwEditUser',$arr);
    }
    
    public function block_member() {
        // Code goes here
    }
    
    public function delete_member($id) {
        $this->member->delete($id);
    }
    
    /*
    * Kiểm tra email đã tồn tại hay chưa
    */
   function check_email()
   {
       $email = $this->input->post('email');
       $where = array();
       $where['email'] = $email;
       //kiểm tra điều kiện email có tồn tại trong csdl hay không
       if($this->member->check_exists($where))
       {
            //trả về thông báo lỗi nếu đã tồn tại email này
        $this->form_validation->set_message(__FUNCTION__, 'Email đã sử dụng');
            return FALSE;
       }
       return TRUE;
   }

    private function validation(){
        $this->form_validation->set_rules('email', $this->lang->line('msg_email_addr'), 'trim|valid_email');
        $this->form_validation->set_rules('full_name', $this->lang->line('msg_pswd'), 'required|trim|alpha_numeric_symbols|max_length[255]');
        $this->form_validation->set_rules('mobile_phone', $this->lang->line('msg_email_addr'), 'required|trim|max_length[255]');
        $this->form_validation->set_rules('home_phone', $this->lang->line('msg_email_addr'), 'trim|max_length[255]');
        $this->form_validation->set_rules('address', $this->lang->line('msg_email_addr'), 'trim|max_length[255]');
        $this->form_validation->set_rules('social', $this->lang->line('msg_email_addr'), 'trim|max_length[255]');
        $this->form_validation->set_message('mail_address', $this->lang->line('msg_valid_email'));
        $this->form_validation->set_message('max_length[256]',$this->lang->line('msg_valid_email'));
        $this->form_validation->set_message('password', $this->lang->line('msg_pswd_incorrect_1'));
        $this->form_validation->set_message('alpha_numeric_symbols', $this->lang->line('msg_pswd_incorrect_1'));
        $this->form_validation->set_message('max_length[40]', $this->lang->line('msg_pswd_incorrect_1'));
        if ($this->form_validation->run() == FALSE)
        {echo 'dd';return FALSE;}
        else
            return TRUE;
    }
    
    
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */