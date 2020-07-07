<?php
class LoginModel extends CI_Model
{
    public function checkLogin($email, $password)
    {
        $this->db->select('*');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $result = $this->db->get('users');
        return $result;
      

    }

}
