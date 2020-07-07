<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Uploadedcont extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('uploadedmodel');
    }


    public function index()
    { 
        
        $result['data']=$this->uploadedmodel->getfiles();
        
        if ($this->session->userdata('level') === '1'){
      
        $this->load->view('uploaded',$result);
       
        }
        else{
            echo "Access Denied";
        }
    }

    public function download($id){
        $this->load->helper('download');
        $fileinfo = $this->uploadedmodel->download($id);
        $file = 'uploads/'.$fileinfo['file_name'];
        force_download($file, NULL);
    }
    
    public function delete($id)
    {
       
        $this->uploadedmodel->deletefile($id);
        redirect('welcome/admin');
    }

    
}

