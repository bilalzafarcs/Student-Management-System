<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Upload_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dashboardmodel');
    }
    public function index()
    {
        if ($this->session->userdata('level') === '1'){
       
        $this->load->view('uploadpage', array('error' => ' '));
       
        }
        else{
            echo "Access Denied";
        }
    }

    public function do_upload()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]');
        $this->form_validation->set_rules('quater', 'quater', 'required');
        $image = $_FILES['image']['name'];
        $photoExt1 = @end(explode('.', $image));
                $phototest1 = strtolower($photoExt1);
                $new_photo = time() . '.' . $phototest1;
                $photo_path = './uploads/' . $new_photo;
                move_uploaded_file($_FILES['image']['tmp_name'], $photo_path);
        $config = array(
            'upload_path' => "uploads/",
            'allowed_types' => "gif|jpg|png|jpeg|pdf|txt|doc",
            'overwrite' => TRUE,
            'max_size' => "10048000", 
            'max_height' => "768",
            'max_width' => "1024"
        );
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload()) {
            $data = array('upload_data' => $this->upload->data());

            $file_name =  $data['upload_data']['raw_name'] . $data['upload_data']['file_ext'];
            $image = $new_photo;
            $name = $this->input->post('name');
            
            $quater = $this->input->post('quater');
            
            $insert_data = array(
                'file_name' => $file_name,
                'name' => $name,
                'quater'=>$quater,
                'image' =>  $new_photo,
                'created_date' => date('Y-m-d H:i:s')
            );
            $this->dashboardmodel->file_insert($insert_data);
            if ($insert_data) {
              
                $this->load->view('upload_success', $data);
              
            }
        } else {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('uploadpage', $error);
        }
    }
}
