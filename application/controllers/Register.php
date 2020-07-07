<?php
class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('RegisterModel', 'register');
    }

    public function index()
    {

        if ($this->session->userdata('logged_in')) {

            redirect(base_url() . 'welcome');
        }

        $this->load->view('header');
        $this->load->view('register_page');
        $this->load->view('footer');
    }

    public function doRegister()
    {

        $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]');
        $this->form_validation->set_message('is_unique', 'Email already exists.');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('contactnumber', 'Contact ', 'required|regex_match[/^[0-9]{11}$/]');
        $this->form_validation->set_rules('cnic', 'CNIC Number ', 'required|regex_match[/^[1-4]{1}[0-9]{4}(-)?[0-9]{7}(-)?[0-9]{1}$/]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');

        if ($this->form_validation->run() == FALSE) {

            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url() . 'register');
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
            $gender = $this->input->post('gender');
            $photo = $new_photo;
            $contactnumber = $this->input->post('contactnumber');
            $cnic = $this->input->post('cnic');
            $password = sha1($this->input->post('password'));

            $data = [
                'name' => $name,
                'email' => $email,
                'gender' => $gender,
                'contactnumber' => $contactnumber,
                'photo' =>  $new_photo,
                'cnic' => $cnic,
                'password' => $password,
                'level' => '2',
                'date_time' => date('Y-m-d H:i:s')
            ];

            $insert_data = $this->register->add_user($data);

            if ($insert_data) {
                $this->session->set_flashdata('msg', 'Successfully Register, Login now!');
                redirect(base_url() . 'login');
            }
        }
    }
}
