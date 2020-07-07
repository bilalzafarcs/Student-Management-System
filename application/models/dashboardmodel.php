<?php
class Dashboardmodel extends CI_Model
{
   
    public function file_insert($data)
    {  
       return  $this->db->insert('files', $data);
    
    }

    public function getdata()
    {
        $query = $this->db->get_where('users', array('level ' => '0'));
        return $query;
    }

    public function getdata2()
    {
        $query = $this->db->get_where('users', array('level ' => '2'));
        return $query;
    }

    public function deleteuser($id)
    {
        $this->db->where('user_id', $id);
        return $this->db->delete('users');
    }

    public function updatestatus($id){
        $data = array( 
        'level'=>0
        );
    $this->db->where('user_id', $id);
    $this->db->update('users', $data);

      
    }

    public function recordbyid($id){
        $query = $this->db->get_where('users', array('user_id' => $id));
        return $query->result();
    }
}
