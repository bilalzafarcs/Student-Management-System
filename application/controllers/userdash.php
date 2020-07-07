<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Userdash extends MY_Controller
{
 
    public function index()
    {
        $this->load->model('usermodel');
        
        $result['data']=$this->usermodel->get();
       
        if ($this->session->userdata('level') === '0') {
           
            $this->load->view('quater1',$result);
           
        } else {
            echo "Access Denied";
        }
    }

    public function quater2(){
        $this->load->model('usermodel');
        $result2['data2']=$this->usermodel->get2();
        if ($this->session->userdata('level') === '0') {
          
            $this->load->view('quater2',$result2);
            
        } else {
            echo "Access Denied";
        }
    }

}