<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Report extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function index()
  {
    $this->load->library('pdfgenerator');

    $indx = $this->admin->getFormDetails($_GET['data'],'form_detail');

    $d1 = $this->admin->getPersonalDetailData($_GET['data']);
    $d2 = $this->admin->getEmployementDetailData($_GET['data']); 
    $d3 = $this->admin->getSelfEmployedData($_GET['data']);
    $d4 = $this->admin->getOtherIncome($_GET['data']);
    $d5 = $this->admin->getFinancial($_GET['data']);
    $d6 = $this->admin->getExPropMortgage($_GET['data']);
    $d7 = $this->admin->getAssets($_GET['data']);
    $d8 = $this->admin->getExpBudget($_GET['data']);
    $d9 = $this->admin->getCreditHistory($_GET['data']);
    $d10 = $this->admin->getMortgageProperty($_GET['data']);
    $d11 = $this->admin->getMortgageLoan($_GET['data']);
    $d12 = $this->admin->getMortgageNeeds($_GET['data']);
    $d13 = $this->admin->getAdditionalDetails($_GET['data']);
    $d14 = $this->admin->getDeclaration($_GET['data']);
    $d15 = $this->admin->getAppendix($_GET['data']);

    $view = $this->load->view('common/pdfheader',array(),TRUE);
    $view .= $this->load->view('pages/pdf/indexpage', $indx , TRUE );
    // $view .= $this->load->view('pages/pdf/blankpdf/01-output', array() , TRUE );
    // $view .= $this->load->view('pages/pdf/blankpdf/02-output', array() , TRUE );
    // $view .= $this->load->view('pages/pdf/blankpdf/03-output', array() , TRUE );
    // $view .= $this->load->view('pages/pdf/blankpdf/04-output', array() , TRUE );
    // $view .= $this->load->view('pages/pdf/blankpdf/05-output', array() , TRUE );
    // $view .= $this->load->view('pages/pdf/blankpdf/06-output', array() , TRUE );    
    // $view .= $this->load->view('pages/pdf/blankpdf/07-output', array() , TRUE );
    // $view .= $this->load->view('pages/pdf/blankpdf/08-output', array() , TRUE );
    // $view .= $this->load->view('pages/pdf/blankpdf/09-output', array() , TRUE );
    // $view .= $this->load->view('pages/pdf/blankpdf/10-output', array() , TRUE );
    // $view .= $this->load->view('pages/pdf/blankpdf/11-output', array() , TRUE );
    // $view .= $this->load->view('pages/pdf/blankpdf/12-output', array() , TRUE );
    // $view .= $this->load->view('pages/pdf/blankpdf/13-output', array() , TRUE );
    // $view .= $this->load->view('pages/pdf/blankpdf/14-output', array() , TRUE );
    // $view .= $this->load->view('pages/pdf/blankpdf/15-output', array() , TRUE );
    if($d1 != NULL){
      $view .= $this->load->view('pages/pdf/personal-detail', $d1 , TRUE );
    }
    else{
      $view .= $this->load->view('pages/pdf/blankpdf/01-output', array() , TRUE );
    }

    if($d2 != NULL){
      $view .= $this->load->view('pages/pdf/employment-detail', $d2 , TRUE );
    }
    else{
      $view .= $this->load->view('pages/pdf/blankpdf/02-output', array() , TRUE );
    }

    if($d3 != NULL){
      $view .= $this->load->view('pages/pdf/self-employed', $d3 , TRUE );
    }
    else{
      $view .= $this->load->view('pages/pdf/blankpdf/03-output', array() , TRUE );
    }

    if($d4 != NULL){
      $view .= $this->load->view('pages/pdf/other-income', $d4 , TRUE );
    }
    else{
      $view .= $this->load->view('pages/pdf/blankpdf/04-output', array() , TRUE );
    }

    if($d5 != NULL){
      $view .= $this->load->view('pages/pdf/financial', $d5 , TRUE );
    }
    else{
      $view .= $this->load->view('pages/pdf/blankpdf/05-output', array() , TRUE );
    }

    if($d6 != NULL){
      $view .= $this->load->view('pages/pdf/ex-property-mortgage', $d6 , TRUE );
    }
    else{
      $view .= $this->load->view('pages/pdf/blankpdf/06-output', array() , TRUE );
    }

    if($d7 != NULL){
      $view .= $this->load->view('pages/pdf/assets', $d7 , TRUE );
    }
    else{
      $view .= $this->load->view('pages/pdf/blankpdf/07-output', array() , TRUE );
    }

    if($d8 != NULL){
      $view .= $this->load->view('pages/pdf/expenditure-budget', $d8 , TRUE );
    }
    else{
      $view .= $this->load->view('pages/pdf/blankpdf/08-output', array() , TRUE );
    }

    if($d9 != NULL){
      $view .= $this->load->view('pages/pdf/credit-history', $d9 , TRUE );
    }
    else{
      $view .= $this->load->view('pages/pdf/blankpdf/09-output', array() , TRUE );
    }

    if($d10 != NULL){
      $view .= $this->load->view('pages/pdf/mortgage-property', $d10 , TRUE );
    }
    else{
      $view .= $this->load->view('pages/pdf/blankpdf/10-output', array() , TRUE );
    }

    if($d11 != NULL){
      $view .= $this->load->view('pages/pdf/mortgage-loan', $d11 , TRUE );
    }
    else{
      $view .= $this->load->view('pages/pdf/blankpdf/11-output', array() , TRUE );
    }

    if($d12 != NULL){
      $view .= $this->load->view('pages/pdf/mortgage-need', $d12 , TRUE );
    }
    else{
      $view .= $this->load->view('pages/pdf/blankpdf/12-output', array() , TRUE );
    }

    if($d13 != NULL){
      $view .= $this->load->view('pages/pdf/additional-details', $d13 , TRUE );
    }
    else{
      $view .= $this->load->view('pages/pdf/blankpdf/13-output', array() , TRUE );
    }

    if($d14 != NULL){
      $view .= $this->load->view('pages/pdf/declaration', $d14 , TRUE );
    }
    else{
      $view .= $this->load->view('pages/pdf/blankpdf/14-output', array() , TRUE );
    }


    if($d15 != NULL){
      $view .= $this->load->view('pages/pdf/cost-broken', $d15 , TRUE );
    }
    else{
      $view .= $this->load->view('pages/pdf/blankpdf/15-output', array() , TRUE );
    }


    //$view .= $this->load->view('pages/pdf/financial', array() , TRUE );
    //$view .= $this->load->view('pages/pdf/ex-property-mortgage', array() , TRUE );
    //$view .= $this->load->view('pages/pdf/assets', array() , TRUE );
    // $view .= $this->load->view('pages/pdf/expenditure-budget', array() , TRUE );
    // $view .= $this->load->view('pages/pdf/credit-history', array() , TRUE );
    // $view .= $this->load->view('pages/pdf/mortgage-property', array() , TRUE );
    // $view .= $this->load->view('pages/pdf/mortgage-loan', array() , TRUE );
    // $view .= $this->load->view('pages/pdf/mortgage-need', array() , TRUE );
    // $view .= $this->load->view('pages/pdf/additional-details', array() , TRUE );
    // $view .= $this->load->view('pages/pdf/declaration', array() , TRUE );
    // $view .= $this->load->view('pages/pdf/cost-broken', array() , TRUE );

    $view .= $this->load->view('common/pdffooter',array(),TRUE);
    $filename = 'report_'.time();
    $this->pdfgenerator->generate($view, $filename, true, 'A4', 'portrait');
    exit();
  }
}