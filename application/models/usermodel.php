<?php
class Usermodel extends CI_Model
{
    public function get()
    {
        $query = $this->db->get_where('files',array('quater'=>'1'));
        return $query;
    }

    public function get2()
    {
        $query = $this->db->get_where('files',array('quater'=>'2'));
        return $query;
    }

}