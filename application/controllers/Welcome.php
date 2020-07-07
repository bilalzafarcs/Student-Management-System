<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Welcome extends MY_Controller
{
 
    public function index()
    {
        if ($this->session->userdata('level') === '0') {
          
            $this->load->view('userdashboard');
           
        } else {
            echo "Access Denied";
        }
    }

    public function userprofile(){
       
            $this->load->view('welcome_message');
           
    
    }


    


    public function pend(){
        if ($this->session->userdata('level') === '2') {
            $this->load->view('header');
            $this->load->view('pending');
            $this->load->view('footer');
        } else {
            echo "Access Denied";
        }
    }



   

    public function admin()
    {
        $this->load->model('dashboardmodel', 'dash');
        
        $userdata['users'] = $this->dash->getdata();
        $userdata2['users2'] = $this->dash->getdata2();

        if ($this->session->userdata('level') === '1') {
 
            $this->load->view('dashboard',$userdata+$userdata2);
          
        }
       
        else {
            echo "Access Denied";
        }
      
    }

    public function regusers(){
        $this->load->model('dashboardmodel', 'dash');
        
        $userdata['users'] = $this->dash->getdata();

        if ($this->session->userdata('level') === '1') {
 
            $this->load->view('regusers',$userdata);
          
        }
       
        else {
            echo "Access Denied";
        }
      
    }

    public function pendusers(){
        $this->load->model('dashboardmodel', 'dash');
        
        $userdata2['users2'] = $this->dash->getdata2();

        if ($this->session->userdata('level') === '1') {
 
            $this->load->view('pendusers',$userdata2);
          
        }
       
        else {
            echo "Access Denied";
        }
      
    }

    public function delete($id)
    {
        $this->load->model('dashboardmodel', 'dash');
        $this->dash->deleteuser($id);
        redirect('welcome/admin');
    }


    public function updatelevel($id){
        $this->load->model('dashboardmodel', 'dash');
        $this->dash->updatestatus($id);
        redirect('welcome/admin');
    }

    public function updatedata()
    {
        $id = $this->input->get('user_id');
        $this->load->model('dashboardmodel', 'dash');
        $result['data'] = $this->dash->recordbyid($id);
        $this->load->view('header');
        $this->load->view('update', $result);
        $this->load->view('footer');
    }


  
}

