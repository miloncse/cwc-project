<?php

class Action_Model extends CI_Model {

    public function signup($data) {
        $query = $this->db->insert('tbl_usr', $data);
        return $query;
    }

    public function select_user($data) {
        $this->db->select('*');
        $this->db->from('tbl_usr');
        $this->db->where('email_address', $data['email_address']);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }

    public function select_user_by_id($user_id) {
        $this->db->select('*');
        $this->db->from('tbl_usr');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }

    public function update_profile_by_id($user_id) {
        $password = $this->input->post('password', true);
        $data = array();
        $data['full_name'] = $this->input->post('full_name', true);
        $data['password'] = md5($password);
        $data['phone_number'] = $this->input->post('phone_number', true);
        $this->db->where('user_id', $user_id);
        $qurey = $this->db->update('tbl_usr', $data);
        return $qurey; 
    }
   public function check_user_name($user_name) {
        $this->db->select('user_name');
        $this->db->from('tbl_usr');
        $this->db->where('user_name', $user_name);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    } 
     public function check_email($email_address) {
        $this->db->select('email_address');
        $this->db->from('tbl_usr');
        $this->db->where('email_address', $email_address);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    } 

}
