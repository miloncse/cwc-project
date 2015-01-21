<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

session_start();

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $user_id = $this->session->userdata('user_id');
        if ($user_id != NULL) {
            redirect('action', 'refresh');
        }
    }

    public function index() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['content'] = $this->load->view('login_view', '', true);
        $this->load->view('master', $data);
        ;
    }

    public function check_creds() {
        $data = array();
        $data['user_email'] = $this->input->post('user_email', true);
        $data['user_password'] = $this->input->post('user_password', true);
        $result = $this->login_model->validate_creds($data);

        if ($result) {
            $sesion_data = array();
            $sesion_data['user_id'] = $result->user_id;
            $sesion_data['user_name'] = $result->user_name;
            $sesion_data['full_name'] = $result->full_name;
            $this->session->set_userdata($sesion_data);
            redirect('action','refresh');
        } else {
            $ses_data['exception'] = 'Provided username or password is invalid!';
            $this->session->set_userdata($ses_data);

            redirect('login','refresh');
        }
    }

    public function sign_up() {
        $password = $this->input->post('password', true);
        $data = array();
        $data['user_name'] = $this->input->post('username_signup', true);
        $data['email_address'] = $this->input->post('email_address', true);
        $data['password'] = md5($password);
        $data['full_name'] = $this->input->post('full_name', true);
        $data['phone_number'] = $this->input->post('phone_number', true);
        $is_exist_user_name =$this->action_model->check_user_name($this->input->post('username_signup', true));
        $is_exist_user_email =$this->action_model->check_email($this->input->post('email_address', true));
        if($is_exist_user_name || $is_exist_user_email){ 
            $error_message='';
            if($is_exist_user_name){
                $error_message = "User Name Already exist<br>";
            }
            if($is_exist_user_email){
                $error_message.="User Email Address Already exist";
            }
            $data['error_message']=$error_message;
          $this->session->set_userdata($data);  
          redirect('login');
        }else{
            $query = $this->action_model->signup($data);
            if ($query) {
                $user_data = $this->action_model->select_user($data);
                $data['user_id'] = $user_data->user_id;
                $data['user_name'] = $user_data->user_name;
                $data['user_email'] = $user_data->email_address;
                $data['full_name'] = $user_data->full_name;
                $data['phone_number'] = $user_data->phone_number;
                $this->session->set_userdata($data);
                redirect('action','refresh');
            }
        }
        
        
    }
    public function check_user_name($user_name=NULL){
        if($user_name){
           $user_name=$user_name; 
        }else{
            $user_name = $this->input->post('username_signup', true);  
        }        
        $result =$this->action_model->check_user_name($user_name);
        //print_r($result);
        if($result){
            echo "User name exist";
        }else{
            echo "" ;
        }
    }
    public function check_email($email_address=NULL){
        if($email_address ){  
           $email_address=$email_address;
        }else{
            $email_address= $this->input->post('user_email', true);
        }
        //echo $email_address;
        //exit();
        $result=$this->action_model->check_email($email_address);
//        print_r($result);
//        exit();
         if($result){
            echo "Email Address already exist";
        }else{
            echo "" ;
        }
    }
}

?>