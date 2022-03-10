<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Delete extends CI_Controller{

        public function __construct(){
            parent::__construct();
        }

        public function deleteClient(){
            $form_id = $_GET['form_id'];
            $delFlag = false;
            if($this->admin->isFormExists($form_id, 'form_detail')){
                if($this->admin->deleteClientRecord('form_detail', $form_id)){
                    $delFlag = true;
                }
                else{
                    $delFlag = false;
                }
            }

            if($this->admin->isFormExists($form_id, 'personal_detail')){
                if($this->admin->deleteClientRecord('personal_detail', $form_id)){
                    $delFlag = true;
                }
                else{
                    $delFlag = false;
                }
            }

            if($this->admin->isFormExists($form_id, 'employment_detail')){
                if($this->admin->deleteClientRecord('employment_detail', $form_id)){
                    $delFlag = true;
                }
                else{
                    $delFlag = false;
                }
            }

            if($this->admin->isFormExists($form_id, 'self_employed')){
                if($this->admin->deleteClientRecord('self_employed', $form_id)){
                    $delFlag = true;
                }
                else{
                    $delFlag = false;
                }
            }

            if($this->admin->isFormExists($form_id, 'other-income')){
                if($this->admin->deleteClientRecord('other-income', $form_id)){
                    $delFlag = true;
                }
                else{
                    $delFlag = false;
                }
            }

            if($this->admin->isFormExists($form_id, 'financial')){
                if($this->admin->deleteClientRecord('financial', $form_id)){
                    $delFlag = true;
                }
                else{
                    $delFlag = false;
                }
            }

            if($this->admin->isFormExists($form_id, 'ex_property_mortgage')){
                if($this->admin->deleteClientRecord('ex_property_mortgage', $form_id)){
                    $delFlag = true;
                }
                else{
                    $delFlag = false;
                }
            }

            if($this->admin->isFormExists($form_id, 'assets')){
                if($this->admin->deleteClientRecord('assets', $form_id)){
                    $delFlag = true;
                }
                else{
                    $delFlag = false;
                }
            }

            if($this->admin->isFormExists($form_id, 'expenditure_budget')){
                if($this->admin->deleteClientRecord('expenditure_budget', $form_id)){
                    $delFlag = true;
                }
                else{
                    $delFlag = false;
                }
            }

            if($this->admin->isFormExists($form_id, 'ex_property_mortgage')){
                if($this->admin->deleteClientRecord('ex_property_mortgage', $form_id)){
                    $delFlag = true;
                }
                else{
                    $delFlag = false;
                }
            }

            if($this->admin->isFormExists($form_id, 'credit_history')){
                if($this->admin->deleteClientRecord('credit_history', $form_id)){
                    $delFlag = true;
                }
                else{
                    $delFlag = false;
                }
            }

            if($this->admin->isFormExists($form_id, 'mortgage_property')){
                if($this->admin->deleteClientRecord('mortgage_property', $form_id)){
                    $delFlag = true;
                }
                else{
                    $delFlag = false;
                }
            }

            if($this->admin->isFormExists($form_id, 'mortgage_loan')){
                if($this->admin->deleteClientRecord('mortgage_loan', $form_id)){
                    $delFlag = true;
                }
                else{
                    $delFlag = false;
                }
            }

            if($this->admin->isFormExists($form_id, 'mortgage_needs')){
                if($this->admin->deleteClientRecord('mortgage_needs', $form_id)){
                    $delFlag = true;
                }
                else{
                    $delFlag = false;
                }
            }

            if($this->admin->isFormExists($form_id, 'additional_details')){
                if($this->admin->deleteClientRecord('additional_details', $form_id)){
                    $delFlag = true;
                }
                else{
                    $delFlag = false;
                }
            }

            if($this->admin->isFormExists($form_id, 'appendix')){
                if($this->admin->deleteClientRecord('appendix', $form_id)){
                    $delFlag = true;
                }
                else{
                    $delFlag = false;
                }
            }

            if($delFlag){
                echo json_encode(['status' => true, 'message' => 'Client record deleted successfully']);
            }
            else{
                echo json_encode(['status' => false, 'message' => 'Unable to delete this client record']);
            }
        }

        public function user(){
            if($this->admin->deleteUser($_POST['id'])){
                echo json_encode(['status' => true, 'message' => 'User details deleted successfully']);
            }
            else{
                echo json_encode(['status' => false, 'message' => 'Unable to delete']);
            }
        }
        
    }
?>