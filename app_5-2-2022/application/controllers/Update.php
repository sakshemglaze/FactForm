<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Update extends CI_Controller{

        public function __construct(){
            parent::__construct();
        }

        public function changeformstatus(){

            if($this->admin->updateCompleteForm($_POST['status'], $_POST['id'])){  
                echo json_encode(['status' => true, 'message' => "Status updated successfully"]);
            }
            else{
                echo json_encode(['status' => false, 'message' => "Not Updated"]);
            }

        }

        public function userstatus(){

            if($this->admin->updateUserStatus($_POST['status'], $_POST['id'])){  
                echo json_encode(['status' => true, 'message' => "Status updated successfully"]);
            }
            else{
                echo json_encode(['status' => false, 'message' => "Not Updated"]);
            }

        }

    }
?>