<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Client extends CI_Model{ 

        function __construct(){
            parent::__construct();
        }

        public function getAll(){
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('type = "client"');
            $query = $this->db->get();
            return $query->result();
        }

        public function getAllSubadmins(){
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('type = "subadmin"');
            $query = $this->db->get();
            return $query->result();
        }

        public function getAllClientsBysubadminID($user_id){
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('type = "client" and added_by = '.$user_id);
            $query = $this->db->get();
            $data['result'] = $query->result();
            return $data['result'];
        }

        public function addFormDetail($data){
            return $this->db->insert('form_detail',$data) ? true : false ;
        }

        public function addPersonalDetail($data){
            return $this->db->insert('personal_detail',$data) ? true : false ;
        }

        public function addEmploymentDetail($data){
            return $this->db->insert('employment_detail',$data) ? true : false ;
        }

        public function addSelfEmployed($data){
            return $this->db->insert('self_employed',$data) ? true : false ;
        }

        public function addOtherIncome($data){
            return $this->db->insert('other-income',$data) ? true : false ;
        }

        public function addFinancial($data){
            return $this->db->insert('financial',$data) ? true : false ;
        }

        public function addMortgageProperty($data){
            return $this->db->insert('mortgage_property',$data) ? true : false ;
        }

        public function addAssets($data){
            return $this->db->insert('assets',$data) ? true : false ;
        }

        public function addExPropMortgage($data){
            return $this->db->insert('ex_property_mortgage',$data) ? true : false ;
        }

        public function addExpBudget($data){
            return $this->db->insert('expenditure_budget',$data) ? true : false ;
        }

        public function addCreditHistory($data){
            return $this->db->insert('credit_history',$data) ? true : false ;
        }

        public function addMortgageLoan($data){
            return $this->db->insert('mortgage_loan',$data) ? true : false ;
        }

        public function addMortgageNeeds($data){
            return $this->db->insert('mortgage_needs',$data) ? true : false ;
        }

        public function addAdditionalDetails($data){
            return $this->db->insert('additional_details',$data) ? true : false ;
        }

        public function addAppendix($data){
            return $this->db->insert('appendix',$data) ? true : false ;
        }

        public function addDeclaration($data){
            return $this->db->insert('declaration',$data) ? true : false ;
        }

        public function getSection2_5_1($form_id){
            $this->db->select('client_totalempnetpay_1');
            $query = $this->db->get_where('employment_detail', array('form_id' => $form_id))->row();

            if($query != NULL){
                return $query->client_totalempnetpay_1;
            }
            else{
                return 0;
            }
            
        }

        public function getSection2_5_2($form_id){
            $this->db->select('client_totalempnetpay_2');
            $query = $this->db->get_where('employment_detail', array('form_id' => $form_id))->row();
            if($query != NULL){
                return $query->client_totalempnetpay_2;
            }
            else{
                return 0;
            }
        }

        public function getSection5_8_1($form_id){
            $this->db->select('client_finsummary_1');
            $query = $this->db->get_where('financial', array('form_id' => $form_id))->row();
            return $query;
        }

        public function getSection4_3($form_id){
            $this->db->select('client_finsummary_2');
            $query = $this->db->get_where('financial', array('form_id' => $form_id))->row();
            return $query;
        }

        public function getSection5_8_2($form_id){
            $this->db->select('client_finsummary_2');
            $query = $this->db->get_where('financial', array('form_id' => $form_id))->row();
            return $query;
        }

        

        

        public function getAllForms(){
            $this->db->select('*');
            $query = $this->db->get_where('form_detail', array('form_status' => "0"));  // updated by surender before it was 0 value
            $data['result'] = $query->result();
            return $data;
        }

        public function getAllCompletedForms(){
            $this->db->select('*');
            $query = $this->db->get_where('form_detail', array('form_status' => "1"));
            $data['result'] = $query->result();
            return $data;
        }

        public function removeComma($str){ 
            if(empty($str)){ $str = 0; }   // updated by surender for check empty values
            $a = $str;
            $b = str_replace( ',', '', $a );

            if( is_numeric( $b ) ) {
                $a = $b;  
            }
            return $a;
        }

        public function getSectionAnnual4_3_1($form_id, $check3){
            $this->db->select('client_totalothergross_1');
            $query4_1 = $this->db->get_where('other-income', array('form_id' => $form_id))->row();
            if($query4_1 != NULL){
                $data_4_1 = $query4_1->client_totalothergross_1;
            }
            else{
                $data_4_1 = 0;
            }
            
            

            $this->db->select('client_totalincome_1');
            $query3_2 = $this->db->get_where('self_employed', array('form_id' => $form_id))->row();
            if($query3_2 != NULL){
                $data_3_2 = $query3_2->client_totalincome_1;
            }
            else{
                $data_3_2 = 0;
            }
            

            $this->db->select('client_totalincome_1');
            $query2_3 = $this->db->get_where('employment_detail', array('form_id' => $form_id))->row();
            if($query2_3 != NULL){
                $data_2_3 = $query2_3->client_totalincome_1;
            }
            else{
                $data_2_3 = 0;
            }
            

            $finalData = 0;
            if(!$check3){//If section 3 is visible
                $finalData = $this->removeComma($data_4_1) + $this->removeComma($data_3_2) + $this->removeComma($data_2_3);
            }
            else{
                $finalData = $this->removeComma($data_4_1) + $this->removeComma($data_2_3);
            }

            return $finalData;
            
        }

        public function getSectionAnnual4_3_2($form_id, $check3){
            $this->db->select('client_totalothergross_2');
            $query4_1 = $this->db->get_where('other-income', array('form_id' => $form_id))->row();
            if($query4_1 != NULL){
                $data_4_1 = $query4_1->client_totalothergross_2;
            }
            else{
                $data_4_1 = 0;
            }
            

            $this->db->select('client_totalincome_2');
            $query3_2 = $this->db->get_where('self_employed', array('form_id' => $form_id))->row();

            if($query3_2 != NULL){
                $data_3_2 = $query3_2->client_totalincome_2;
            }
            else{
                $data_3_2 = 0;
            }
            

            $this->db->select('client_totalincome_2');
            $query2_3 = $this->db->get_where('employment_detail', array('form_id' => $form_id))->row();
            if($query2_3 != NULL){
                $data_2_3 = $query2_3->client_totalincome_2;
            }
            else{
                $data_2_3 = 0;
            }
            

            $finalData = 0;
            if(!$check3){//If section 3 is visible
                $finalData = $this->removeComma($data_4_1) + $this->removeComma($data_3_2) + $this->removeComma($data_2_3);
            }
            else{
                $finalData = $this->removeComma($data_4_1) + $this->removeComma($data_2_3);
            }

            return $finalData;   
        }

        public function getSectionMonthly4_3_1($form_id, $check3){ 
            $this->db->select('client_totalotherincomenet_1');
            $query4_2 = $this->db->get_where('other-income', array('form_id' => $form_id))->row();
            if($query4_2 != NULL){
                $data_4_2 = $query4_2->client_totalotherincomenet_1;
            }
            else{
                $data_4_2 = 0;
            }
            

            $this->db->select('client_totalnetincome_1');
            $query3_3 = $this->db->get_where('self_employed', array('form_id' => $form_id))->row();

            if($query3_3 != NULL){
                $data_3_3 = $query3_3->client_totalnetincome_1;
            }
            else{
                $data_3_3 = 0;
            }
            

            $this->db->select('client_totalempnetpay_1');
            $query2_5 = $this->db->get_where('employment_detail', array('form_id' => $form_id))->row();
            if($query2_5 != NULL){
                $data_2_5 = $query2_5->client_totalempnetpay_1;
            }
            else{
                $data_2_5 = 0;
            }
            

            $finalData = 0;
            if(!$check3){//If section 3 is visible
                $finalData = $this->removeComma($data_4_2) + $this->removeComma($data_3_3) + $this->removeComma($data_2_5);
            }
            else{
                $finalData = $this->removeComma($data_4_2) + $this->removeComma($data_2_5);
            }

            return $finalData;   
        }

        public function getSectionMonthly4_3_2($form_id, $check3){
            $this->db->select('client_totalotherincomenet_2');
            $query4_2 = $this->db->get_where('other-income', array('form_id' => $form_id))->row();
            if($query4_2 != NULL){
                $data_4_2 = $query4_2->client_totalotherincomenet_2;
            }
            else{
                $data_4_2 = 0;
            }
            

            $this->db->select('client_totalnetincome_2');
            $query3_3 = $this->db->get_where('self_employed', array('form_id' => $form_id))->row();

            if($query3_3 != NULL){
                $data_3_3 = $query3_3->client_totalnetincome_2;
            }
            else{
                $data_3_3 = 0;
            }
            

            $this->db->select('client_totalempnetpay_2');
            $query2_5 = $this->db->get_where('employment_detail', array('form_id' => $form_id))->row();
            if($query2_5 != NULL){
                $data_2_5 = $query2_5->client_totalempnetpay_2;
            }
            else{
                $data_2_5 = 0;
            }
            

            $finalData = 0;
            if(!$check3){//If section 3 is visible
                $finalData = $this->removeComma($data_4_2) + $this->removeComma($data_3_3) + $this->removeComma($data_2_5);
            }
            else{
                $finalData = $this->removeComma($data_4_2) + $this->removeComma($data_2_5);
            }

            return $finalData;   
        }

        public function updateClient($data, $id, $table){
            $this->db->where('form_id', $id);
            return $this->db->update($table, $data) ? true : false;
        }

        public function getTotalSection4_3($form_id, $check3){

            $sec5_1 = 0; $sec5_2 = 0;
            
            $section8_3_1 = $this->getSectionMonthly4_3_1($form_id, $check3) + $this->getSectionMonthly4_3_2($form_id, $check3);


            echo number_format($section8_3_1,2);
            
            //var_dump($section8_3_1);
            //return $section8_3_1;
        }

    }
?>