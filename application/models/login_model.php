<?php

class Login_Model extends CI_Model {

    public function validate_creds($data) {

        $this->db->select('*');
        $this->db->from('tbl_usr');
        $this->db->where('email_address', $data['user_email']);
        $this->db->or_where('user_name', $data['user_email']);
        $this->db->where('password', md5($data['user_password']));
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }

    
}
?>