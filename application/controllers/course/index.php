<?php

class Index extends CI_Controller{
    
    private $data;
    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('is_admin_login')){
            redirect('admin/index');
        }
        $this->load->library('form_validation');
        $this->load->model('course');
        $this->load->model('member');
    }
    
    public function index(){
        $this->data['list'] = $this->course->getList();
        $this->data['header'] = "List courses";
        $this->load->view('course/list',$this->data);
    }
    
    public function add(){

        if($this->input->post()){
            $this->validation();
            if($this->form_validation->run()){
                $data = $this->input->post();
                $data['time'] = $this->input->post("start_time")." - ". $this->input->post("end_time"); 
                unset($data['start_time']);
                unset($data['end_time']);
                $rs = $this->course->saveData($data);
            }
        }
        $this->data['teachers'] = $this->member->getlist(2);
        $this->data['header'] = "Add new course";
        $this->load->view('course/add',$this->data);
    }
    
    private function validation(){
        $this->form_validation->set_rules('name','','trim|required');
        $this->form_validation->set_rules('day','','trim|required');
        $this->form_validation->set_rules('level','','trim|required');
        $this->form_validation->set_rules('price','','trim|required|greater_than[0]');
        $this->form_validation->set_rules('opened_date','','trim|required');
        $this->form_validation->set_rules('teacher_id','','trim|required|is_natural_no_zero');
        $this->form_validation->set_rules('status','','trim|required');
    }
}
