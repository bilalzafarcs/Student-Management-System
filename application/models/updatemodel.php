<?php
class Updatemodel extends CI_Model
{

    public function update_data($data,$id){
        
      
        $this->db->where('user_id', $id);
        $this->db->update('users', $data);
    
    }
       
}
