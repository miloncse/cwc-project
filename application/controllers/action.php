<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

session_start();

class Action extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $user_id = $this->session->userdata('user_id');
        //echo $user_id;
        //exit();
        if ($user_id == NULL) {
            redirect('login', 'refresh');
        }
    }

    public function index() {
        //echo $user_id;
        //exit();
        $data = array();
        //$data['user_id'] = $this->user_id;        
        $data['left_sidebar'] = TRUE;
        $data['content'] = $this->load->view('welcome', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('full_name');

        $ses_data = array();
        $ses_data['message'] = "You Have logged out!";
        $this->session->set_userdata($ses_data);

        redirect('login');
    }

    public function view_profile($user_id) {
        $user_data = $this->action_model->select_user_by_id($user_id);
        $data = array();
        $data['user_name'] = $user_data->user_name;
        $data['full_name'] = $user_data->full_name;
        $data['email_address'] = $user_data->email_address;
        $data['phone_number'] = $user_data->phone_number;
        $data['user_id'] = $this->session->userdata('user_id');
        $data['user_name'] = $this->session->userdata('user_name');
        $data['content'] = $this->load->view('view_profile', $data, true);
        $this->load->view('master', $data);
    }

    public function edit_profile($user_id) {
        $user_data = $this->action_model->select_user_by_id($user_id);
        $data = array();
        $data['full_name'] = $user_data->full_name;
        $data['phone_number'] = $user_data->phone_number;
        $data['user_id'] = $this->session->userdata('user_id');
        $data['content'] = $this->load->view('edit_profile_info', $data, true);
        $this->load->view('master', $data);
    }

    public function update_profile($user_id) {
        $qurey = $this->action_model->update_profile_by_id($user_id);
        if ($qurey) {
            $ses_data = array();
            $ses_data['message'] = "Profile updated successfully!";
            $this->session->set_userdata($ses_data);


            $user_data = $this->action_model->select_user_by_id($user_id);
            $data = array();
            $data['user_name'] = $user_data->user_name;
            $data['full_name'] = $user_data->full_name;
            $data['email_address'] = $user_data->email_address;
            $data['phone_number'] = $user_data->phone_number;
            $data['user_id'] = $this->session->userdata('user_id');
            $data['content'] = $this->load->view('view_profile', $data, true);
            $this->load->view('master', $data);
        }
    }

}
