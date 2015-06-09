<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

class Admin extends CI_Model{
    
    private $name = "tbl_admin";
    
    public function save($data,$id=null){
        try{
            if($id==null){
                return $this->db->save($this->tbl_name,$data);
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
        $this->db->from($this->name);
        $val = $this->db->get();
        if($val->num_rows()){
            return $val->result_array();
        }else{
            return false;
        }
    }
}