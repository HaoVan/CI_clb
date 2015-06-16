<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {
    
    private $data;
    
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('member');
        if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
        
        $this->data['page'] = "member";
    }

    public function index() {

        $this->data['header'] = 'member';
        $list = $this->member->getlist();
        if($list){
            $this->data['list'] = $list;
        }
        $this->load->view('member/management',$this->data);
    }

    public function add() {

        $this->data['header'] = 'Add new member';
        if($this->input->post()){
            $this->validation();
            if ($this->form_validation->run()){
                $this->data['header'] = "Confirm add new member";
                $this->data['member'] = $this->input->post();
                $this->session->set_userdata('member',$this->data['member']);
                return $this->load->view('member/confirm',$this->data);
            }
        }
        
        $this->load->view('member/add',$this->data);
    }
    public function confirm(){
        $member = $this->session->userdata('member');
        $member['modified_date'] = date("Y-m-d H:m:s");
        $rs = $this->member->save($member); 
        if($rs){
            $this->session->set_flashdata('message_success','Member was successfully saved');
            redirect('member/index');
        }
        $this->session->set_flashdata('message_error','Cannot save member data');
        redirect('member/index/add');
        
    }
    public function edit() {
        $arr['page'] = 'member';
        $this->load->view('admin/vwEditUser',$arr);
    }
    
    public function search(){
        
        $this->data['header'] = 'member';
        $name = $this->input->post('search');
        $list = $this->member->getByName($name);
        if($list){
            $this->data['list'] = $list;
        }
        $this->load->view('member/management',$this->data);

    }
    
    public function detail($id){
        
        if(!is_numeric($id)){
            redirect('member/index');
        }
        $data = $this->member->getById($id);
        
        if(!$data){
            $this->session->set_flashdata("message_error","The member not exist");
            redirect('member/index');
        }
        $this->data['header'] = "Member infomation";
        $this->data['member'] = $data;
        $this->load->view("member/detail",$this->data);
        
 
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
        $this->form_validation->set_rules('email', '', 'trim|valid_email');
        $this->form_validation->set_rules('full_name', '', 'required|trim|alpha_numeric_symbols|max_length[255]');
        $this->form_validation->set_rules('mobile_phone', '' , 'required|trim|max_length[255]|min_length[8]');
        $this->form_validation->set_rules('home_phone', '' , 'trim|max_length[255]|min_length[8]');
        $this->form_validation->set_rules('address', '', 'trim|max_length[255]');
        $this->form_validation->set_rules('social', '', 'trim|max_length[255]');
        
    }
    
    
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */