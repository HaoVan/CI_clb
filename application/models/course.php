<?php

class Course extends CI_Model{
    
    private $tbl_name = "tbl_course";
    
    public function saveData($data=array(),$id=null){
        try{
            if($id==null){
                return $this->db->insert($this->tbl_name,$data);
            }else{
                $this->db->where('id',$id);
                return $this->db->update($this->tbl_name,$data);
            }
        } catch (Exception $ex) {

        }
    }
    
    public function getList($status=0,$limit=30,$offset=0){
        
        $this->db->where('status',$status);
        $query = $this->db->get($this->tbl_name,$limit,$offset);
        if($query !== false){
            return $query->result_array();
        }else{
            return false;
        }
    }
    
    
}