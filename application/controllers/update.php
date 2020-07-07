<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Update extends CI_Controller
{

   public function __construct()
    {
        parent::__construct();
        $this->load->model('updatemodel', 'update');
    }
    public function index(){
        $logged_in = $this->session->userdata('logged_in');
        if (!$logged_in) {
            redirect(base_url() . 'login');
        }

        $this->load->view('updateprofile');
        
    }

    public function updateprof()
    {
        
        
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]');
        $this->form_validation->set_message('is_unique', 'Email already exists.');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('contactnumber', 'Contact ', 'required|regex_match[/^[0-9]{11}$/]');
        $this->form_validation->set_rules('cnic', 'CNIC Number ', 'required|regex_match[/^[1-4]{1}[0-9]{4}(-)?[0-9]{7}(-)?[0-9]{1}$/]');
       
        if ($this->form_validation->run() == FALSE) {

            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url() . 'update');
        } else {
            $photo = $_FILES['photo']['name'];
            $new_photo = '';
            if ($photo != '') {

                $photoExt1 = @end(explode('.', $photo));
                $phototest1 = strtolower($photoExt1);
                $new_photo = time() . '.' . $phototest1;
                $photo_path = './uploads/' . $new_photo;
                move_uploaded_file($_FILES['photo']['tmp_name'], $photo_path);
            }
            
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $photo = $new_photo;
            $contactnumber = $this->input->post('contactnumber');
            $cnic = $this->input->post('cnic');
     
            $data = [

                
                'name' => $name,
                'email' => $email,
                'contactnumber' => $contactnumber,
                'photo' =>  $new_photo,
                'cnic' => $cnic,
                'level' => '2',
                'date_time' => date('Y-m-d H:i:s')
            ];

            $update_data = $this->update->update_data($data,$id);

            if ($update_data) {
                $this->session->set_flashdata('msg', 'Successfully Updated');
                redirect(base_url() . '');
            }
            else{
                $this->session->set_flashdata('msg', 'error');
                redirect(base_url() . 'update');
            }
        }
    }

}