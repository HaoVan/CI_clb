<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

// Member Class is working as a model for tbl_Member Table
Class Member extends CI_Model {
    
    private $tbl_name =" tbl_member";
    
    public function save($data,$id=null){
        if($id==null){
            return $this->db->save($this->tbl_name,$data);
        }else{
            $data['modified_date']=  date('Y-m-d H:i:s');
            $this->db->where('id',$id);
            return $this->db->update($this->tbl_name,$data);
        }
    }
    

}

