<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel', 'login');
      
    }



    public function index()
    {

        $this->load->view('header');
        $this->load->view('login_page');
        $this->load->view('footer');
    }


    public function doLogin()
    {

        $email = $this->input->post('email');
        $password = sha1($this->input->post('password'));

        $validate = $this->login->checkLogin($email, $password);


        if ($validate->num_rows() > 0) {

            $data  = $validate->row_array();
            $id=$data['user_id'];
            $name  = $data['name'];
            $email = $data['email'];
            $cnic = $data['cnic'];
            $contactnumber = $data['contactnumber'];
            $gender = $data['gender'];
            $photo = $data['photo'];
            $date_time = $data['date_time'];
            $level = $data['level'];

            $sesdata = array(
                'user_id'=>$id,
                'name'  => $name,
                'email'     => $email,
                'cnic' => $cnic,
                'contactnumber' => $contactnumber,
                'gender' => $gender,
                'date_time' => $date_time,
                'photo' => $photo,
                'level'     => $level,
                'logged_in' => TRUE
            );

            $this->session->set_userdata($sesdata);
            if($level === '0'){
                redirect(base_url() . 'welcome');         
            }
            elseif($level === '1'){
                redirect(base_url() . 'welcome/admin');  
            }
             elseif($level === '2'){
                 redirect(base_url() . 'welcome/pend');  
             }
        } 
        
        
        else {

            $this->session->set_userdata('logged_in', false);
            $this->session->set_flashdata('msg', 'Username / Password Invalid');
            redirect(base_url() . 'login');
        }
    }


    

  
   

    public function logout()
    {

        $this->session->unset_userdata('logged_in');
        redirect(base_url() . 'login');
    }

    
  } 

