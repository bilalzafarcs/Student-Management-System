<?php
class Uploadedmodel extends CI_Model
{

    public function getfiles()
    {
        // $query = $this->db->get('files');
        // return $query;
        $query=$this->db->query("select * from files");
	return $query;
    }


    public function download($id){
        $query = $this->db->get_where('files',array('id'=>$id));
        return $query->row_array();
    }


    public function deletefile($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('files');
    }
  
}

?>