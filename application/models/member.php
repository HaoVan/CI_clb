<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

// Member Class is working as a model for tbl_Member Table
Class Member extends CI_Model {
    
    private $tbl_name ="tbl_member";
    
    public function save($data,$id=null){
        if($id==null){
            return $this->db->insert($this->tbl_name,$data);
        }else{
            $data['modified_date']=  date('Y-m-d H:i:s');
            $this->db->where('id',$id);
            return $this->db->update($this->tbl_name,$data);
        }
    }
    
    public function delete($id){
        $this->db->delete($this->tbl_name, array('id' => $id));
    }
    
    public function getbyId($id){
        $this->db->select('*')->from($this->tbl_name)->where('id', $id);
        $query = $this->db->get();
        return $query;
    }
    public function getlist(){
        $query = $this->db->get();
        return $query;
    }
    public function check_exists($email_arr){
        
        $this->db->where_in('email', $email_arr);
        $query = $this->db->get($this->tbl_name);
        if($query)
            return 1;
        return 0;
    }
}

