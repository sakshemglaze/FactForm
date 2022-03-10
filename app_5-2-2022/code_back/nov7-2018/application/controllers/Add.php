<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Add extends CI_Controller{

        public function __construct(){
            parent::__construct();
        }

        public function clientRegistration(){
            unset($_POST['cpassword']);
            $_POST['type'] = "client";
            $_POST['status'] = "true";
            $_POST['password'] = md5($_POST['password']);
            if($this->admin->registerClient($_POST)){
                echo json_encode(['status' => true, 'message' => 'Client added']);
            }
        }

        public function createForm(){
            $formData = array();
            $form_id = rand(1111111111,9999999999);
            $formData['form_id'] = $form_id;
            $formData['form_status'] = 0;
            $formData['form_type'] = $_POST['type'];
            $isFormRegistered = $this->client->addFormDetail($formData);
            if($isFormRegistered){
                echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'create']);
            }
            else{
                echo json_encode(['status' => false]);
            }
            
        }

        public function addPersonalDetail(){
            
            $form_id = $_GET['form_id'];
            
            if($this->admin->isFormExists($form_id, 'personal_detail')){

                $formData = array();
                $prevResData = json_decode($_POST['client_previousaddress']);

                for($i = 1; $i <= sizeof($prevResData); $i++){
                    unset($_POST['client_prevaddress'.$i.'_1']);
                    unset($_POST['client_prevaddress'.$i.'_2']);
                    unset($_POST['client_prevpostcode'.$i.'_1']);
                    unset($_POST['client_prevpostcode'.$i.'_2']);
                    unset($_POST['client_previousResidence'.$i.'_1']);
                    unset($_POST['client_previousResidence'.$i.'_2']);
                    unset($_POST['client_otherpreviousresidence'.$i.'_1']);
                    unset($_POST['client_otherpreviousresidence'.$i.'_2']);
                    unset($_POST['client_prelectoralRoll'.$i.'_1']);
                    unset($_POST['client_prelectoralRoll'.$i.'_2']);
                }

                //Dependent Unset
                $depData = json_decode($_POST['client_childrensection']);

                for($i = 1; $i <= sizeof($depData); $i++){
                    unset($_POST["dependent_upon_".$i]);
                    unset($_POST["dependent_name_".$i]);
                    unset($_POST["client_dependentage_".$i]);
                    unset($_POST["relationship_".$i]);
                    unset($_POST["client_FinanciallyDependent_".$i]);
                    unset($_POST["client_anticipitated_".$i]);
                }
                
                if(!empty($_POST['client_contactmethod_1'])) {
                    $contactmethod1 = "";
                    foreach($_POST['client_contactmethod_1'] as $cm1) {
                        $contactmethod1 .= $cm1.",";
                    } 
                    $_POST['client_contactmethod_1'] = substr($contactmethod1, 0, -1);
                }
        
                if(!empty($_POST['client_contactmethod_2'])) {
                    $contactmethod2 = "";
                    foreach($_POST['client_contactmethod_2'] as $cm2) {
                        $contactmethod2 .= $cm2.",";
                    } 
                    $_POST['client_contactmethod_2'] = substr($contactmethod2, 0, -1);
                }

                $_POST['form_id'] = $form_id;
                $_POST['form_status'] = 1;
                $form_type = "";
                $ftype = true;
                if($this->admin->isFormExists($form_id, "form_detail")){
                    $formExist = true;
                    $form_type = $this->admin->getFormDetails($form_id, "form_detail")->form_type;
                }
            
                if($form_type == "single"){
                    $ftype = false;
                }

                if($ftype == false){
                    $formData['client_name'] = $_POST['client_firstname_1']." ".$_POST['client_surname_1'];
                }
                else{
                    $formData['client_name'] = $_POST['client_firstname_1']." ".$_POST['client_surname_1']." and ".$_POST['client_firstname_2']." ".$_POST['client_surname_2'];
                }
                $this->client->updateClient($formData, $form_id, 'form_detail');
                $data = $this->client->updateClient($_POST, $form_id, 'personal_detail');

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'edit']);
                }
                else{
                    echo json_encode(['status' => false]);
                }

            }
            else if(!($this->admin->isFormExists($form_id, 'personal_detail')) && ($this->admin->isFormExists($form_id, 'form_detail'))){
                // $formData = array();
                // $form_id = rand(1111111111,9999999999);
                // $formData['form_id'] = $form_id;
                // $formData['client_name'] = $_POST['client_firstname_1']." ".$_POST['client_surname_1'];
                // $formData['form_status'] = 0;
                // $isFormRegistered = $this->client->addFormDetail($formData);

                // if($isFormRegistered){
                    $prevResData = json_decode($_POST['client_previousaddress']);

                    for($i = 1; $i <= sizeof($prevResData); $i++){
                        unset($_POST['client_prevaddress'.$i.'_1']);
                        unset($_POST['client_prevaddress'.$i.'_2']);
                        unset($_POST['client_prevpostcode'.$i.'_1']);
                        unset($_POST['client_prevpostcode'.$i.'_2']);
                        unset($_POST['client_previousResidence'.$i.'_1']);
                        unset($_POST['client_previousResidence'.$i.'_2']);
                        unset($_POST['client_otherpreviousresidence'.$i.'_1']);
                        unset($_POST['client_otherpreviousresidence'.$i.'_2']);
                        unset($_POST['client_prelectoralRoll'.$i.'_1']);
                        unset($_POST['client_prelectoralRoll'.$i.'_2']);
                    }

                    //Dependent Unset
                    $depData = json_decode($_POST['client_childrensection']);

                    for($i = 1; $i <= sizeof($depData); $i++){
                        unset($_POST["dependent_upon_".$i]);
                        unset($_POST["dependent_name_".$i]);
                        unset($_POST["client_dependentage_".$i]);
                        unset($_POST["relationship_".$i]);
                        unset($_POST["client_FinanciallyDependent_".$i]);
                        unset($_POST["client_anticipitated_".$i]);
                    }


                    if(!empty($_POST['client_contactmethod_1'])) {
                        $contactmethod1 = "";
                        foreach($_POST['client_contactmethod_1'] as $cm1) {
                            $contactmethod1 .= $cm1.",";
                        } 
                        $_POST['client_contactmethod_1'] = substr($contactmethod1, 0, -1);
                    }
            
                    if(!empty($_POST['client_contactmethod_2'])) {
                        $contactmethod2 = "";
                        foreach($_POST['client_contactmethod_2'] as $cm2) {
                            $contactmethod2 .= $cm2.","; 
                        } 
                        $_POST['client_contactmethod_2'] = substr($contactmethod2, 0, -1);
                    }

                    $_POST['form_id'] = $form_id;

                    $data = $this->client->addPersonalDetail($_POST);
                    $form_type = "";
                    $ftype = true;
                    if($this->admin->isFormExists($form_id, "form_detail")){
                        $formExist = true;
                        $form_type = $this->admin->getFormDetails($form_id, "form_detail")->form_type;
                    }
                
                    if($form_type == "single"){
                        $ftype = false;
                    }

                    if($ftype == false){
                        $formData['client_name'] = $_POST['client_firstname_1']." ".$_POST['client_surname_1'];
                    }
                    else{
                        $formData['client_name'] = $_POST['client_firstname_1']." ".$_POST['client_surname_1'].", ".$_POST['client_firstname_2']." ".$_POST['client_surname_2'];
                    }
                    
                    $this->client->updateClient($formData, $form_id, 'form_detail');

                    if($data){
                        echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'create']);
                    }
                    else{
                        echo json_encode(['status' => false]);
                    }
                //}
            }
            else if(!($this->admin->isFormExists($form_id, 'personal_detail')) && !($this->admin->isFormExists($form_id, 'form_detail'))){
                echo json_encode(['status' => false, 'message' => 'Error, please fill the personal details first']);
            }
        }

        public function addEmploymentDetail(){

            $form_id = $_GET['form_id'];
            
            if($this->admin->isFormExists($form_id, 'employment_detail')){
                //For Edit functionality
                $_POST['form_status'] = 1;

                if(!empty($_POST['client_employmentstatus_1_1'])) {
                    $contactemploymentstatus1 = "";
                    foreach($_POST['client_employmentstatus_1_1'] as $cm1) {
                        $contactemploymentstatus1 .= $cm1.",";
                    } 
                    $_POST['client_employmentstatus_1_1'] = substr($contactemploymentstatus1, 0, -1);
                }

                if(!empty($_POST['client_employmentstatus_1_2'])) {
                    $contactemploymentstatus2 = "";
                    foreach($_POST['client_employmentstatus_1_2'] as $cm1) {
                        $contactemploymentstatus2 .= $cm1.",";
                    } 
                    $_POST['client_employmentstatus_1_2'] = substr($contactemploymentstatus2, 0, -1);
                }

                $_POST['form_id'] = $form_id;

                $data = array();

                $data = $this->client->updateClient($_POST, $form_id, 'employment_detail');

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'edit']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }
            }
            else if(!($this->admin->isFormExists($form_id, 'employment_detail')) && ($this->admin->isFormExists($form_id, 'form_detail'))){

                $_POST['form_status'] = 0;

                if(!empty($_POST['client_employmentstatus_1_1'])) {
                    $contactemploymentstatus1 = "";
                    foreach($_POST['client_employmentstatus_1_1'] as $cm1) {
                        $contactemploymentstatus1 .= $cm1.",";
                    } 
                    $_POST['client_employmentstatus_1_1'] = substr($contactemploymentstatus1, 0, -1);
                }

                if(!empty($_POST['client_employmentstatus_1_2'])) {
                    $contactemploymentstatus2 = "";
                    foreach($_POST['client_employmentstatus_1_2'] as $cm1) {
                        $contactemploymentstatus2 .= $cm1.",";
                    } 
                    $_POST['client_employmentstatus_1_2'] = substr($contactemploymentstatus2, 0, -1);
                }

                $_POST['form_id'] = $form_id;

                $data = array();

                $data = $this->client->addEmploymentDetail($_POST);

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'create']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }

            }
            else if(!($this->admin->isFormExists($form_id, 'employment_detail')) && !($this->admin->isFormExists($form_id, 'form_detail'))){
                echo json_encode(['status' => false, 'message' => 'Error, please fill the personal details first']);
            }

        }


        //Self Employed
        public function addSelfEmployed(){

            $form_id = $_GET['form_id'];
            
            if($this->admin->isFormExists($form_id, 'self_employed')){
                //For Edit functionality
                $_POST['form_status'] = 1;

                $_POST['form_id'] = $form_id;

                $data = array();

                $data = $this->client->updateClient($_POST, $form_id, 'self_employed');

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'edit']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }
            }
            else if(!($this->admin->isFormExists($form_id, 'self_employed')) && ($this->admin->isFormExists($form_id, 'form_detail'))){

                $_POST['form_status'] = 0;

                $_POST['form_id'] = $form_id;

                $data = array();

                $data = $this->client->addSelfEmployed($_POST);

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'create']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }

            }
            else if(!($this->admin->isFormExists($form_id, 'self_employed')) && !($this->admin->isFormExists($form_id, 'form_detail'))){
                echo json_encode(['status' => false, 'message' => 'Error, please fill the personal details first']);
            }

        }

        //Other Income
        public function otherincome(){

            $form_id = $_GET['form_id'];

            if($this->admin->isFormExists($form_id, 'other-income')){
                //For Edit functionality
                $_POST['form_status'] = 1;
                $_POST['form_id'] = $form_id;

                $data = array();

                $data = $this->client->updateClient($_POST, $form_id, 'other-income');

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'edit']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }

            }
            else if(!($this->admin->isFormExists($form_id, 'other-income')) && ($this->admin->isFormExists($form_id, 'form_detail'))){

                $_POST['form_status'] = 0;

                $_POST['form_id'] = $form_id;

                $data = array();

                $data = $this->client->addOtherIncome($_POST);

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'create']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }

            }
            else if(!($this->admin->isFormExists($form_id, 'other-income')) && !($this->admin->isFormExists($form_id, 'form_detail'))){
                echo json_encode(['status' => false, 'message' => 'Error, please fill the personal details first']);
            }

        }

        //Financial
        public function financial(){

            $form_id = $_GET['form_id'];

            if($this->admin->isFormExists($form_id, 'financial')){
                //For Edit functionality
                $_POST['form_status'] = 1;

                $plData = json_decode($_POST['personal_loan']); 
                $hpData = json_decode($_POST['hirepurchase']);
                $ccData = json_decode($_POST['creditcard']);
                $odData = json_decode($_POST['overdraft']);
                $smData = json_decode($_POST['spousal']);
                $cmData = json_decode($_POST['childmaintenance']);

                //Unsetting PL Data
                for($i = 0; $i < sizeof($plData); $i++){
                    foreach(json_decode(json_encode($plData[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                //Unsetting HP Data
                for($i = 0; $i < sizeof($hpData); $i++){
                    foreach(json_decode(json_encode($hpData[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                //Unsetting CC Data
                for($i = 0; $i < sizeof($ccData); $i++){
                    foreach(json_decode(json_encode($ccData[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                //Unsetting OD Data
                for($i = 0; $i < sizeof($odData); $i++){
                    foreach(json_decode(json_encode($odData[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                //Unsetting SM Data
                for($i = 0; $i < sizeof($smData); $i++){
                    foreach(json_decode(json_encode($smData[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                //Unsetting CM Data
                for($i = 0; $i < sizeof($cmData); $i++){
                    foreach(json_decode(json_encode($cmData[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                if(!empty($_POST['exist_1'])) {
                    $existing1 = "";
                    foreach($_POST['exist_1'] as $e1) {
                        $existing1 .= $e1.",";
                    } 
                    $_POST['existing_1'] = substr($existing1, 0, -1);
                    unset($_POST['exist_1']);
                }

                if(!empty($_POST['exist_2'])) {
                    $existing2 = "";
                    foreach($_POST['exist_2'] as $e2) {
                        $existing2 .= $e2.",";
                    } 
                    $_POST['existing_2'] = substr($existing2, 0, -1);
                    unset($_POST['exist_2']);
                }

                $_POST['form_id'] = $form_id;

                $data = array();

                $data = $this->client->updateClient($_POST, $form_id, 'financial');

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'edit']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }

            }
            else if(!($this->admin->isFormExists($form_id, 'financial')) && ($this->admin->isFormExists($form_id, 'form_detail'))){

                $_POST['form_status'] = 0;

                $plData = json_decode($_POST['personal_loan']); 
                $hpData = json_decode($_POST['hirepurchase']);
                $ccData = json_decode($_POST['creditcard']);
                $odData = json_decode($_POST['overdraft']);
                $smData = json_decode($_POST['spousal']);
                $cmData = json_decode($_POST['childmaintenance']);

                //Unsetting PL Data
                for($i = 0; $i < sizeof($plData); $i++){
                    foreach(json_decode(json_encode($plData[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                //Unsetting HP Data
                for($i = 0; $i < sizeof($hpData); $i++){
                    foreach(json_decode(json_encode($hpData[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                //Unsetting CC Data
                for($i = 0; $i < sizeof($ccData); $i++){
                    foreach(json_decode(json_encode($ccData[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                //Unsetting OD Data
                for($i = 0; $i < sizeof($odData); $i++){
                    foreach(json_decode(json_encode($odData[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                //Unsetting SM Data
                for($i = 0; $i < sizeof($smData); $i++){
                    foreach(json_decode(json_encode($smData[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                //Unsetting CM Data
                for($i = 0; $i < sizeof($cmData); $i++){
                    foreach(json_decode(json_encode($cmData[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                if(!empty($_POST['exist_1'])) {
                    $existing1 = "";
                    foreach($_POST['exist_1'] as $e1) {
                        $existing1 .= $e1.",";
                    } 
                    $_POST['existing_1'] = substr($existing1, 0, -1);
                    unset($_POST['exist_1']);
                }

                if(!empty($_POST['exist_2'])) {
                    $existing2 = "";
                    foreach($_POST['exist_2'] as $e2) {
                        $existing2 .= $e2.",";
                    } 
                    $_POST['existing_2'] = substr($existing2, 0, -1);
                    unset($_POST['exist_2']);
                }

                $_POST['form_id'] = $form_id;

                $data = array();

                $data = $this->client->addFinancial($_POST);

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'create']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }

            }
            else if(!($this->admin->isFormExists($form_id, 'other-income')) && !($this->admin->isFormExists($form_id, 'form_detail'))){
                echo json_encode(['status' => false, 'message' => 'Error, please fill the personal details first']);
            }

        }

        //Mortgage Property
        public function mortgageproperty(){

            $form_id = $_GET['form_id'];

            if($this->admin->isFormExists($form_id, 'mortgage_property')){
                //For Edit functionality
                $_POST['form_status'] = 1;
                $_POST['form_id'] = $form_id;

                $data = array();

                $data = $this->client->updateClient($_POST, $form_id, 'mortgage_property');

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'edit']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }

            }
            else if(!($this->admin->isFormExists($form_id, 'mortgage_property')) && ($this->admin->isFormExists($form_id, 'form_detail'))){

                $_POST['form_status'] = 0;

                $_POST['form_id'] = $form_id;

                $data = array();

                $data = $this->client->addMortgageProperty($_POST);

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'create']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }

            }
            else if(!($this->admin->isFormExists($form_id, 'mortgage_property')) && !($this->admin->isFormExists($form_id, 'form_detail'))){
                echo json_encode(['status' => false, 'message' => 'Error, please fill the personal details first']);
            }

        }

        public function assets(){

            $form_id = $_GET['form_id'];

            if($this->admin->isFormExists($form_id, 'assets')){
                //For Edit functionality
                $_POST['form_status'] = 1;
                $_POST['form_id'] = $form_id;

                $data = array();

                $bankData = json_decode($_POST['bank_savings']);

                $pData = json_decode($_POST['pension']);

                for($i = 1; $i <= sizeof($bankData); $i++){
                    unset($_POST['ownername_bank_'.$i]);
                    unset($_POST['type_bank_'.$i]);
                    unset($_POST['provider_bank_'.$i]);
                    unset($_POST['currentvalue_bank_'.$i]);
                    unset($_POST['monthly_bank_'.$i]);
                }

                for($i = 1; $i <= sizeof($pData); $i++){
                    unset($_POST['ownername_pension_'.$i]);
                    unset($_POST['type_pension_'.$i]);
                    unset($_POST['provider_pension_'.$i]);
                    unset($_POST['amount_pension_'.$i]);
                    unset($_POST['monthly_pension_'.$i]);
                }

                $data = $this->client->updateClient($_POST, $form_id, 'assets');

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'edit']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }

            }
            else if(!($this->admin->isFormExists($form_id, 'assets')) && ($this->admin->isFormExists($form_id, 'form_detail'))){

                $_POST['form_status'] = 0;

                $_POST['form_id'] = $form_id;

                $data = array();

                $bankData = json_decode($_POST['bank_savings']);

                $pData = json_decode($_POST['pension']);

                for($i = 1; $i <= sizeof($bankData); $i++){
                    unset($_POST['ownername_bank_'.$i]);
                    unset($_POST['type_bank_'.$i]);
                    unset($_POST['provider_bank_'.$i]);
                    unset($_POST['currentvalue_bank_'.$i]);
                    unset($_POST['monthly_bank_'.$i]);
                }

                for($i = 1; $i <= sizeof($pData); $i++){
                    unset($_POST['ownername_pension_'.$i]);
                    unset($_POST['type_pension_'.$i]);
                    unset($_POST['provider_pension_'.$i]);
                    unset($_POST['amount_pension_'.$i]);
                    unset($_POST['monthly_pension_'.$i]);
                }

                $data = $this->client->addAssets($_POST);

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'create']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }

            }
            else if(!($this->admin->isFormExists($form_id, 'assets')) && !($this->admin->isFormExists($form_id, 'form_detail'))){
                echo json_encode(['status' => false, 'message' => 'Error, please fill the personal details first']);
            }

        }

        public function expropmortgage(){

            $form_id = $_GET['form_id'];

            if($this->admin->isFormExists($form_id, 'ex_property_mortgage')){
                //For Edit functionality
                $_POST['form_status'] = 1;
                $_POST['form_id'] = $form_id;

                $data = array();

                $res_prop = json_decode($_POST['res_prop']);

                $blPropData = json_decode($_POST['buytolet_prop']);


                for($i = 0; $i < sizeof($res_prop); $i++){
                    foreach(json_decode(json_encode($res_prop[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                for($i = 0; $i < sizeof($blPropData); $i++){
                    foreach(json_decode(json_encode($blPropData[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                $data = $this->client->updateClient($_POST, $form_id, 'ex_property_mortgage');

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'edit']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }

            }
            else if(!($this->admin->isFormExists($form_id, 'ex_property_mortgage')) && ($this->admin->isFormExists($form_id, 'form_detail'))){

                $_POST['form_status'] = 0;

                $_POST['form_id'] = $form_id;

                $data = array();

                $res_prop = json_decode($_POST['res_prop']);

                $blPropData = json_decode($_POST['buytolet_prop']);

                for($i = 0; $i < sizeof($res_prop); $i++){
                    foreach(json_decode(json_encode($res_prop[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                for($i = 0; $i < sizeof($blPropData); $i++){
                    foreach(json_decode(json_encode($blPropData[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }


                $data = $this->client->addExPropMortgage($_POST);

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'create']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }

            }
            else if(!($this->admin->isFormExists($form_id, 'ex_property_mortgage')) && !($this->admin->isFormExists($form_id, 'form_detail'))){
                echo json_encode(['status' => false, 'message' => 'Error, please fill the personal details first']);
            }

        }

        public function expbudget(){
            $form_id = $_GET['form_id'];

            if($this->admin->isFormExists($form_id, 'expenditure_budget')){
                //For Edit functionality
                $_POST['form_status'] = 1;
                $_POST['form_id'] = $form_id;

                foreach(json_decode($_POST["utility"], true) as $var => $value) {
                    unset($_POST[$var]);
                }

                foreach(json_decode($_POST["general_costs"], true) as $var => $value) {
                    unset($_POST[$var]);
                }

                foreach(json_decode($_POST["transport"], true) as $var => $value) {
                    unset($_POST[$var]);
                }

                foreach(json_decode($_POST["investments"], true) as $var => $value) {
                    unset($_POST[$var]);
                }

                foreach(json_decode($_POST["other_costs"], true) as $var => $value) {
                    unset($_POST[$var]);
                }

                foreach(json_decode($_POST["budget"], true) as $var => $value) {
                    unset($_POST[$var]);
                }

                $data = array();

                $data = $this->client->updateClient($_POST, $form_id, 'expenditure_budget');

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'edit']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }

            }
            else if(!($this->admin->isFormExists($form_id, 'expenditure_budget')) && ($this->admin->isFormExists($form_id, 'form_detail'))){

                $_POST['form_status'] = 0;

                $_POST['form_id'] = $form_id;

               // var_dump($_POST);
                foreach(json_decode($_POST["utility"], true) as $var => $value) {
                    unset($_POST[$var]);
                }

                foreach(json_decode($_POST["general_costs"], true) as $var => $value) {
                    unset($_POST[$var]);
                }

                foreach(json_decode($_POST["transport"], true) as $var => $value) {
                    unset($_POST[$var]);
                }

                foreach(json_decode($_POST["investments"], true) as $var => $value) {
                    unset($_POST[$var]);
                }

                foreach(json_decode($_POST["other_costs"], true) as $var => $value) {
                    unset($_POST[$var]);
                }

                foreach(json_decode($_POST["budget"], true) as $var => $value) {
                    unset($_POST[$var]);
                }

                $data = array();

                $data = $this->client->addExpBudget($_POST);

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'create']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }

            }
            else if(!($this->admin->isFormExists($form_id, 'expenditure_budget')) && !($this->admin->isFormExists($form_id, 'form_detail'))){
                echo json_encode(['status' => false, 'message' => 'Error, please fill the personal details first']);
            }
        }

        public function credithistory(){

            $form_id = $_GET['form_id'];

            if($this->admin->isFormExists($form_id, 'credit_history')){
                //For Edit functionality
                $_POST['form_status'] = 1;
                $_POST['form_id'] = $form_id;

                $data = array();

                $county = json_decode($_POST['county']);
                $bankruptcy = json_decode($_POST['bankruptcy']);
                $arrear = json_decode($_POST['arrears']);

                //County
                for($i = 0; $i < sizeof($county); $i++){
                    foreach(json_decode(json_encode($county[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                //bankruptcy
                for($i = 0; $i < sizeof($bankruptcy); $i++){
                    foreach(json_decode(json_encode($bankruptcy[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                //Arrear
                for($i = 0; $i < sizeof($arrear); $i++){
                    foreach(json_decode(json_encode($arrear[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                //repossession
                unset($_POST["reposses_client_1"]);
                unset($_POST["reposses_client_2"]);
                unset($_POST["reposses_amount_1"]);
                unset($_POST["reposses_amount_2"]);

               
                $data = $this->client->updateClient($_POST, $form_id, 'credit_history');

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'edit']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }

            }
            else if(!($this->admin->isFormExists($form_id, 'credit_history')) && ($this->admin->isFormExists($form_id, 'form_detail'))){

                $_POST['form_status'] = 0;

                $_POST['form_id'] = $form_id;

                $data = array();

                $county = json_decode($_POST['county']);
                $bankruptcy = json_decode($_POST['bankruptcy']);
                $arrear = json_decode($_POST['arrears']);

                //County
                for($i = 0; $i < sizeof($county); $i++){
                    foreach(json_decode(json_encode($county[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                

                //bankruptcy
                for($i = 0; $i < sizeof($bankruptcy); $i++){
                    foreach(json_decode(json_encode($bankruptcy[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                //Arrear
                for($i = 0; $i < sizeof($arrear); $i++){
                    foreach(json_decode(json_encode($arrear[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                //repossession
                unset($_POST["reposses_client_1"]);
                unset($_POST["reposses_client_2"]);
                unset($_POST["reposses_amount_1"]);
                unset($_POST["reposses_amount_2"]);


                $data = $this->client->addCreditHistory($_POST);

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'create']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }

            }
            else if(!($this->admin->isFormExists($form_id, 'credit_history')) && !($this->admin->isFormExists($form_id, 'form_detail'))){
                echo json_encode(['status' => false, 'message' => 'Error, please fill the personal details first']);
            }

        }

        public function addMortgageLoan(){

            $form_id = $_GET['form_id'];
            
            if($this->admin->isFormExists($form_id, 'mortgage_loan')){
                //For Edit functionality
                $_POST['form_status'] = 1;

                if(!empty($_POST['purpose'])) {
                    $purpose = "";
                    foreach($_POST['purpose'] as $cm1) {
                        $purpose .= $cm1.",";
                    } 
                    $_POST['purpose'] = substr($purpose, 0, -1);
                }

                if(!empty($_POST['intending'])) {
                    $intending = "";
                    foreach($_POST['intending'] as $cm1) {
                        $intending .= $cm1.",";
                    } 
                    $_POST['intending'] = substr($intending, 0, -1);
                }

                if(!empty($_POST['source_1'])) {
                    $source_1 = "";
                    foreach($_POST['source_1'] as $cm1) {
                        $source_1 .= $cm1.",";
                    } 
                    $_POST['source_1'] = substr($source_1, 0, -1);
                }

                if(!empty($_POST['source_2'])) {
                    $source_2 = "";
                    foreach($_POST['source_2'] as $cm1) {
                        $source_2 .= $cm1.",";
                    } 
                    $_POST['source_2'] = substr($source_2, 0, -1);
                }

                if(!empty($_POST['scheme_type'])) {
                    $scheme_type = "";
                    foreach($_POST['scheme_type'] as $cm1) {
                        $scheme_type .= $cm1.",";
                    } 
                    $_POST['scheme_type'] = substr($scheme_type, 0, -1);
                }

                if(!empty($_POST['tenants_will_occupy'])) {
                    $tenants_will_occupy = "";
                    foreach($_POST['tenants_will_occupy'] as $cm1) {
                        $tenants_will_occupy .= $cm1.",";
                    } 
                    $_POST['tenants_will_occupy'] = substr($tenants_will_occupy, 0, -1);
                }

                $_POST['form_id'] = $form_id;

                $data = array();

                $data = $this->client->updateClient($_POST, $form_id, 'mortgage_loan');

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'edit']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }
            }
            else if(!($this->admin->isFormExists($form_id, 'mortgage_loan')) && ($this->admin->isFormExists($form_id, 'form_detail'))){

                $_POST['form_status'] = 0;

                if(!empty($_POST['purpose'])) {
                    $purpose = "";
                    foreach($_POST['purpose'] as $cm1) {
                        $purpose .= $cm1.",";
                    } 
                    $_POST['purpose'] = substr($purpose, 0, -1);
                }

                if(!empty($_POST['intending'])) {
                    $intending = "";
                    foreach($_POST['intending'] as $cm1) {
                        $intending .= $cm1.",";
                    } 
                    $_POST['intending'] = substr($intending, 0, -1);
                }

                if(!empty($_POST['source_1'])) {
                    $source_1 = "";
                    foreach($_POST['source_1'] as $cm1) {
                        $source_1 .= $cm1.",";
                    } 
                    $_POST['source_1'] = substr($source_1, 0, -1);
                }

                if(!empty($_POST['source_2'])) {
                    $source_2 = "";
                    foreach($_POST['source_2'] as $cm1) {
                        $source_2 .= $cm1.",";
                    } 
                    $_POST['source_2'] = substr($source_2, 0, -1);
                }

                if(!empty($_POST['scheme_type'])) {
                    $scheme_type = "";
                    foreach($_POST['scheme_type'] as $cm1) {
                        $scheme_type .= $cm1.",";
                    } 
                    $_POST['scheme_type'] = substr($scheme_type, 0, -1);
                }

                if(!empty($_POST['tenants_will_occupy'])) {
                    $tenants_will_occupy = "";
                    foreach($_POST['tenants_will_occupy'] as $cm1) {
                        $tenants_will_occupy .= $cm1.",";
                    } 
                    $_POST['tenants_will_occupy'] = substr($tenants_will_occupy, 0, -1);
                }

                $_POST['form_id'] = $form_id;

                $data = array();

                $data = $this->client->addMortgageLoan($_POST);

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'create']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }

            }
            else if(!($this->admin->isFormExists($form_id, 'mortgage_loan')) && !($this->admin->isFormExists($form_id, 'form_detail'))){
                echo json_encode(['status' => false, 'message' => 'Error, please fill the personal details first']);
            }

        }

        public function addMortgageNeeds(){

            $form_id = $_GET['form_id'];
            
            if($this->admin->isFormExists($form_id, 'mortgage_needs')){
                //For Edit functionality
                $_POST['form_status'] = 1;

                $_POST['form_id'] = $form_id;

                $data = array();

                $data = $this->client->updateClient($_POST, $form_id, 'mortgage_needs');

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'edit']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }
            }
            else if(!($this->admin->isFormExists($form_id, 'mortgage_needs')) && ($this->admin->isFormExists($form_id, 'form_detail'))){

                $_POST['form_status'] = 0;

                $_POST['form_id'] = $form_id;

                $data = array();

                $data = $this->client->addMortgageNeeds($_POST);

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'create']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }

            }
            else if(!($this->admin->isFormExists($form_id, 'mortgage_needs')) && !($this->admin->isFormExists($form_id, 'form_detail'))){
                echo json_encode(['status' => false, 'message' => 'Error, please fill the personal details first']);
            }

        }

        public function addAdditionalDetails(){

            $form_id = $_GET['form_id'];
            
            if($this->admin->isFormExists($form_id, 'additional_details')){
                //For Edit functionality
                $_POST['form_status'] = 1;

                $_POST['form_id'] = $form_id;

                $prev_contr = json_decode($_POST["previous_contract"]);
                for($i = 0; $i < sizeof($prev_contr); $i++){
                    foreach(json_decode(json_encode($prev_contr[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                $data = array();

                $data = $this->client->updateClient($_POST, $form_id, 'additional_details');

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'edit']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }
            }
            else if(!($this->admin->isFormExists($form_id, 'additional_details')) && ($this->admin->isFormExists($form_id, 'form_detail'))){

                $_POST['form_status'] = 0;

                $_POST['form_id'] = $form_id;

                $prev_contr = json_decode($_POST["previous_contract"]);
                for($i = 0; $i < sizeof($prev_contr); $i++){
                    foreach(json_decode(json_encode($prev_contr[$i])) as $var => $value) {
                        unset($_POST[$var]);
                    }
                }

                $data = array();

                $data = $this->client->addAdditionalDetails($_POST);

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'create']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }

            }
            else if(!($this->admin->isFormExists($form_id, 'additional_details')) && !($this->admin->isFormExists($form_id, 'form_detail'))){
                echo json_encode(['status' => false, 'message' => 'Error, please fill the personal details first']);
            }

        }

        public function addAppendix(){

            $form_id = $_GET['form_id'];
            
            if($this->admin->isFormExists($form_id, 'appendix')){

                $formData = array();
                //For Edit functionality
                $_POST['form_status'] = 1;

                $_POST['form_id'] = $form_id;

                $data = array();

                $data = $this->client->updateClient($_POST, $form_id, 'appendix');

                $formData['advisor_name'] = $_POST['adviser_name'];
                $formData['date_completed'] = $_POST['date_completed'];
                $this->client->updateClient($formData, $form_id, 'form_detail');

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'edit']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }
            }
            else if(!($this->admin->isFormExists($form_id, 'appendix')) && ($this->admin->isFormExists($form_id, 'form_detail'))){

                $formData = array();
                $_POST['form_status'] = 0;

                $_POST['form_id'] = $form_id;

                $data = array();

                $data = $this->client->addAppendix($_POST);

                $formData['advisor_name'] = $_POST['adviser_name'];
                $formData['date_completed'] = $_POST['date_completed'];
                $this->client->updateClient($formData, $form_id, 'form_detail');

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'create']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }

            }
            else if(!($this->admin->isFormExists($form_id, 'appendix')) && !($this->admin->isFormExists($form_id, 'form_detail'))){
                echo json_encode(['status' => false, 'message' => 'Error, please fill the personal details first']);
            }

        }

        public function addDeclaration(){
            $form_id = $_GET['form_id'];
            
            if($this->admin->isFormExists($form_id, 'declaration')){
                //For Edit functionality
                $_POST['form_status'] = 1;

                $_POST['form_id'] = $form_id;

                $data = array();

                $data = $this->client->updateClient($_POST, $form_id, 'declaration');

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'edit']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }
            }
            else if(!($this->admin->isFormExists($form_id, 'declaration')) && ($this->admin->isFormExists($form_id, 'form_detail'))){

                $_POST['form_status'] = 0;

                $_POST['form_id'] = $form_id;

                $data = array();

                $data = $this->client->addDeclaration($_POST);

                if($data){
                    echo json_encode(['status' => true, 'data' => $form_id, 'action' => 'create']);
                }
                else{
                    echo json_encode(['status' => false, 'message' => 'Error occured']);
                }

            }
            else if(!($this->admin->isFormExists($form_id, 'declaration')) && !($this->admin->isFormExists($form_id, 'form_detail'))){
                echo json_encode(['status' => false, 'message' => 'Error, please fill the personal details first']);
            }
        }
    }
?>