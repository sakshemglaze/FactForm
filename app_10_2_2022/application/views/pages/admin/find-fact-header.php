<link href="<?php echo base_url(); ?>assets/css/form-style.css?v=1.1.4" rel="stylesheet">
<style type="text/css">
  .header-1 {
    display: none;
  }
  
  .lineThrough{
    text-decoration: line-through !important;
  }

  

  @media (min-width: 992px) {
    #form_Accordion {
      overflow-y: scroll!important;
    }

    #mainNav .navbar-collapse #form_Accordion > .nav-item > .nav-link {
      padding: 10px 15px!important;
      font-size: 14px;
    }

    #mainNav .navbar-collapse #form_Accordion {
      margin-top: 66px!important;
    }

    #mainNav .navbar-collapse .navbar-sidenav > .nav-item {
      width: 235px;
    }

    #mainNav.fixed-top .navbar-sidenav {
    height: calc(100vh - 65px);
}
  }

</style>
<?php
    $url = $_SERVER['REQUEST_URI'];
    $last = basename(parse_url($url, PHP_URL_PATH));

    $formExist = false;
    $lineCheck = false;
    $form_type = "";
    $ftype = true;

    if($this->admin->isFormExists($last, "form_detail")){
      $formExist = true;
      $form_type = $this->admin->getFormDetails($last, "form_detail")->form_type;
    }

    if($form_type == "single"){
      $ftype = false;
    }

    $pdata = $this->admin->getEmployementDetailData($last); 
    $cData = $this->admin->getPersonalDetailData($last);

    //Birthday check
    $curr_date = date("d/m/Y");
    if($cData != NULL){
      $c1Bday = $cData->client_dob_1;
      $c2Bday = $cData->client_dob_2;

      if($c1Bday != ""){
        $dtC1 = explode("/", $c1Bday);
        if($dtC1[0] != ""){
          $myDateTime = date_format(date_create_from_format('d/m/Y', $c1Bday), 'Y-m-d');
          $d1 = new DateTime(Date('Y-m-d'));
          $d2 = new DateTime($myDateTime);
          $diff = $d2->diff($d1);
          $c1Bday = $diff->y + 1;
        }
        else if($dtC1[0] == ""){
          $c1Bday = "";
        }
      }

      if($c2Bday != ""){
        $dtC2 = explode("/", $c2Bday);
        if($dtC2[0] != "undefined"){
          if(!empty($dtC2[0])){
            $myDateTime = date_format(date_create_from_format('d/m/Y', $c2Bday), 'Y-m-d');
            $d1 = new DateTime(Date('Y-m-d'));
            $d2 = new DateTime($myDateTime);
            $diff = $d2->diff($d1);
            $c2Bday = $diff->y + 1;
          } 
          else{
            $c2Bday = "";
          }
        }
        else if($dtC2[0] == ""){
          $c2Bday = "";
        }
      }
    }

    if($pdata != NULL){
      if($ftype){
        $estatus1 = explode(",",$pdata->client_employmentstatus_1_1);
        $estatus2 = explode(",",$pdata->client_employmentstatus_1_2);
        if(!in_array( "Self-Employed" , $estatus1 ) && !in_array( "Self-Employed" , $estatus2 )){
          $lineCheck = true;
        }
      }
      else{
        $estatus1 = explode(",",$pdata->client_employmentstatus_1_1);
        if(!in_array( "Self-Employed" , $estatus1 )){
          $lineCheck = true;
        }
      }
    }
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo base_url(); ?>admin/home">
      <img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="logo" height="40px">
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#form_navbar" aria-controls="form_navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="form_navbar">
    <?php if($formExist){ ?>
      <ul class="navbar-nav navbar-sidenav" id="form_Accordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="">
          <a class="nav-link">
            <span class="nav-link-text">Age Next Birthday</span><br/>

            <span class="nav-link-text">Applicant 1</span> 

            <input type="text" value="<?php if($cData != NULL){ echo $c1Bday; } ?>" class="form-control date-input-box col-md-3" style="margin: 10px 0px;"><br/>

  <?php if($ftype){ ?><span class="nav-link-text">Applicant 2</span> <input type="text" value="<?php if($cData != NULL){ echo $c2Bday; } ?>" class="form-control date-input-box col-md-3"><?php } ?>
          </a>
        </li>
        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" style="margin-top: 30px;">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/form-index">
            <span class="nav-link-text">Index</span>
          </a>
        </li> -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/personal-detail<?php if($formExist){ echo "/".$last; } ?>">
            <span class="nav-link-text">Section 1 : Personal & Family Details</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/employment-detail<?php if($formExist){ echo "/".$last; } ?>">
            <span class="nav-link-text">Section 2: Employment Details</span>
          </a>
        </li>  
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="">
  <a id="self_employed_link" class="nav-link" <?php if(!$lineCheck){ ?>href="<?php echo base_url(); ?>admin/self-employed<?php if($formExist){ echo "/".$last; } ?>" <?php } ?>>
            <span class="nav-link-text <?php if($lineCheck){echo "lineThrough";} ?>">Section 3 : Self-Employed Details</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/other-income<?php if($formExist){ echo "/".$last; } ?>">
            <span class="nav-link-text">Section 4: Other Income Details</span>
          </a>
        </li>  
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/financial<?php if($formExist){ echo "/".$last; } ?>">
            <span class="nav-link-text">Section 5 : Financial Credit & Commitments</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/ex-property-mortgage<?php if($formExist){ echo "/".$last; } ?>"> 
            <span class="nav-link-text">Section 6: Existing Property & Mortgages</span>
          </a>
        </li>  
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/assets<?php if($formExist){ echo "/".$last; } ?>">
            <span class="nav-link-text">Section 7 : Existing Assets</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/expenditure-budget<?php if($formExist){ echo "/".$last; } ?>">      
            <span class="nav-link-text">Section 8: Expenditure & Budget</span>
          </a>
        </li>  
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/credit-history<?php if($formExist){ echo "/".$last; } ?>">      
            <span class="nav-link-text">Section 9: Credit History</span>
          </a>
        </li>  
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/mortgage-property<?php if($formExist){ echo "/".$last; } ?>">      
            <span class="nav-link-text">Section 10: New Mortgage Property Details</span>
          </a>
        </li> 
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/mortgage-loan<?php if($formExist){ echo "/".$last; } ?>">      
            <span class="nav-link-text">Section 11: New Mortgage Loan Details</span>
          </a>
        </li>   
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/mortgage-need<?php if($formExist){ echo "/".$last; } ?>">      
            <span class="nav-link-text">Section 12: Mortgage Needs & Preferences</span>
          </a>
        </li>  
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/additional-details<?php if($formExist){ echo "/".$last; } ?>">      
            <span class="nav-link-text">Section 13: Additional Details</span>
          </a>
        </li> 
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/declaration<?php if($formExist){ echo "/".$last; } ?>">      
            <span class="nav-link-text">Section 14: Declaration</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/cost-broken<?php if($formExist){ echo "/".$last; } ?>">      
            <span class="nav-link-text">Section 15: Appendix – Cost Breakdown</span>
          </a>
        </li> 
      </ul>
    <?php } ?>

      

     
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="btn btn-info" href="<?php echo base_url(); ?>admin/home" role="button" style="margin-right: 15px;">Go to Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>

