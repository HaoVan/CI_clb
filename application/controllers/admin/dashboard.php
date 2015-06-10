<?php
/**
 * ark Admin Panel for Codeigniter 
 * Author: Abhishek R. Kaushik
 * downloaded from http://devzone.co.in
 *
 */
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    private $data;
    
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $this->data['header'] = "Dashboard";
        $this->data['page']='dash';
        $this->load->view('admin/vwDashboard',$this->data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */