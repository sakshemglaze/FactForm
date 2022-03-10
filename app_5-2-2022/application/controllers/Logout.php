<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Logout extends CI_Controller{

        public function __construct(){
            parent::__construct();
        }

        public function logout(){
        
            $this->session->unset_userdata('type');
            $this->session->unset_userdata('name');
            $this->session->unset_userdata('id');
    		redirect('login'); 
        
        }
    }
?>