<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Admin extends CI_Model{ 

        function __construct(){
            parent::__construct();
        }

        public function login($data){
            $this->db->select('id, name, type, status');
            $query = $this->db->get_where('user', array('email' => $data['email'], 'password' => $data['password']))->row();
            return $query;
        }

        public function registerClient($data){
            return $this->db->insert('user',$data) ? true : false ;
        }

        public function isFormExists($form_id, $table){
            $this->db->select('*');
            $query = $this->db->get_where($table, array(
                'form_id' => $form_id
            ));
            return $query->num_rows();
        }

        public function getFormDetails($form_id, $table){
            $this->db->select('*');
            $query = $this->db->get_where($table, array(
                'form_id' => $form_id
            ));
            return $query->row();
        }

        public function getPersonalDetailData($form_id){
            $this->db->select('*');
            $query = $this->db->get_where('personal_detail', array(
                'form_id' => $form_id
            ));
            return $query->row();
        }

        public function getEmployementDetailData($form_id){
            $this->db->select('*');
            $query = $this->db->get_where('employment_detail', array(
                'form_id' => $form_id
            ));
            return $query->row();
        }

        public function getSelfEmployedData($form_id){
            $this->db->select('*');
            $query = $this->db->get_where('self_employed', array(
                'form_id' => $form_id
            ));
            return $query->row();
        }

        public function getOtherIncome($form_id){
            $this->db->select('*');
            $query = $this->db->get_where('other-income', array(
                'form_id' => $form_id
            ));
            return $query->row();
        }

        public function getFinancial($form_id){
            $this->db->select('*');
            $query = $this->db->get_where('financial', array(
                'form_id' => $form_id
            ));
            return $query->row();
        }

        public function getMortgageProperty($form_id){
            $this->db->select('*');
            $query = $this->db->get_where('mortgage_property', array(
                'form_id' => $form_id
            ));
            return $query->row();
        }

        public function getAssets($form_id){
            $this->db->select('*');
            $query = $this->db->get_where('assets', array(
                'form_id' => $form_id
            ));
            return $query->row();
        }

        public function getExPropMortgage($form_id){
            $this->db->select('*');
            $query = $this->db->get_where('ex_property_mortgage', array(
                'form_id' => $form_id
            ));
            return $query->row();
        }

        public function getExpBudget($form_id){
            $this->db->select('*');
            $query = $this->db->get_where('expenditure_budget', array(
                'form_id' => $form_id
            ));
            return $query->row();
        }

        public function getCreditHistory($form_id){
            $this->db->select('*');
            $query = $this->db->get_where('credit_history', array(
                'form_id' => $form_id
            ));
            return $query->row();
        }

        public function getMortgageLoan($form_id){
            $this->db->select('*');
            $query = $this->db->get_where('mortgage_loan', array(
                'form_id' => $form_id
            ));
            return $query->row();
        }

        public function getMortgageNeeds($form_id){
            $this->db->select('*');
            $query = $this->db->get_where('mortgage_needs', array(
                'form_id' => $form_id
            ));
            return $query->row();
        }

        public function getAppendix($form_id){
            $this->db->select('*');
            $query = $this->db->get_where('appendix', array(
                'form_id' => $form_id
            ));
            return $query->row();
        }

        public function getAdditionalDetails($form_id){
            $this->db->select('*');
            $query = $this->db->get_where('additional_details', array(
                'form_id' => $form_id
            ));
            return $query->row();
        }

        public function getDeclaration($form_id){
            $this->db->select('*');
            $query = $this->db->get_where('declaration', array(
                'form_id' => $form_id
            ));
            return $query->row();
        }

        public function deleteClientRecord($table,$form_id){
            $res = $this->db->delete($table, array('form_id' => $form_id));
            return $res; 
        }
    }
?>