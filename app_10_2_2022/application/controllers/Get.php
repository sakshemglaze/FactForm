<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Get extends CI_Controller{

        public function __construct(){
            parent::__construct();
        }

        public function adminLogin(){   
            $_POST['password'] = md5($_POST['password']);
           
            $data = $this->admin->login($_POST);  
           
            if($data != NULL){
               if($data->status == "false"){
                   echo json_encode(['status' => "disabled", 'message' => 'Unsuccessful Login']);
               }
               else if($data->status == "true"){ 
                   $newdata = array(
                       'name'  =>  $data->name,
                       'id'     => $data->id,
                       'type' => $data->type 
                   );
                   $this->session->set_userdata($newdata);   
                   echo json_encode(['status' => true, 'message' => 'Successful Login']);
               }
                
            }
            else{
                echo json_encode(['status' => false, 'message' => 'Unsuccessful Login']);
            }
       }//end-function

       public function getAllForms(){
            $data = $this->client->getAllForms();
            if($data != NULL){
                echo json_encode($data);
            }
            else{
                echo json_encode($data);
            }
    	}
    }//end function

    
?>