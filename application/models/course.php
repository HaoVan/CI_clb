<?php

class Course extends CI_Model{
    
    private $tbl_name = "tbl_course";
    
    public function saveData($data=array(),$id=null){
        try{
            if($id==null){
                return $this->db->insert($this->tbl_name,$data);
            }else{
                
            }
        } catch (Exception $ex) {

        }
    }
}