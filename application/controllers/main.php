<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');


class Main extends CI_Controller {
    
        public function index() {

            $data = array();
            $data['slider']=TRUE;
            $data['left_sidebar']=TRUE;
            $data['content'] = $this->load->view('home_content',$data, true);
            $this->load->view('master',$data);
        }

}
