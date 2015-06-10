<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Admin extends CI_Model{
    
    private $tbl_name = "tbl_admin";
    
    public function __construct() {
        parent::__construct();
    }

    public function savedata($data=array(),$id=null){
        try{
            if($id==null){
                unset($data['re_password']);
                $data['password'] = md5($data['password']);
                return $this->db->insert($this->tbl_name,$data);
            }else{
                $data['modified_date']=  date('Y-m-d H:i:s');
                $this->db->where('id',$id);
                return $this->db->update($this->tbl_name,$data);
            }
        }  catch (Exception $e){
            log_message($e);
        }
    }
    
    public function validateLogin($email,$pass){
        $this->db->where('email',$email);
        $this->db->where('password',$pass);
        $this->db->from($this->tbl_name);
        $val = $this->db->get();
        if($val->num_rows()){
            return $val->result_array();
        }else{
            return false;
        }
    }
    
    public function getListAdmin($limit = 30,$offset=0,$status = 0){
        try{
            $this->db->where('block',$status);
            $query = $this->db->get($this->tbl_name, $limit, $offset);
            return $query->result();
        }catch (Exception $e){
            log_message($e);
        }
    }
    
    public function checkEmail($email){
        try{
            $this->db->where('email',$email);
            $query = $this->db->get($this->tbl_name);
            return $query->result();
        }catch (Exception $e){
            log_message($e);
        }
    }
}