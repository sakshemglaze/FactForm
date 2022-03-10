<?php 
//$page = 'dashboard';
include 'find-fact-header.php'
?>
<style type="text/css">
  .financial-table thead th {
    vertical-align: middle;
  }

  .tab-child >.table-bordered > tr >td:First-child,
  .tab-child >.tab-bordered > tr >td:First-child,
  .financial-table > .tab-bordered > tr > td:First-child {
    background-color: #f2f2f2;
    text-align: right;
    line-height: 1.85em;
    font-weight: bold;
    padding-right: 0.85em;
    font-size: 10pt;
  }

  .tab-child th {
    vertical-align: middle;
    border-bottom: 0px;
    border: 1px solid #000000;
    background-color: #f2f2f2;
    font-size: 10pt;
  }

  .tab-child td {
    font-weight: normal;
  }

  .tab-bordered, .tab-bordered td, .tab-bordered th {
    border-bottom: 1px solid #000000;
    border-right: 1px solid #000000;
    border-left: 1px solid #000000;
    border-top: 0px;
  }

  .tab-head, .tab-head td, .tab-head th {
    border-bottom: 1px solid #000000!important;
    border-right: 1px solid #000000!important;
    border-left: 1px solid #000000!important;
    border-top: 0px!important;
  }

</style>
<?php if(!$ftype){ ?>
  <style>
    .hide-col{
      display:none;
    }
  </style>
  
<?php } ?>

<?php

  $pdata = $this->admin->getAdditionalDetails($last); 

?>

<div class="content-wrapper">
  <div class="container-fluid">
    
    <!-- Breadcrumbs-->
    <!-- <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Find Fact Form</li>
    </ol> -->
    <div class="row">
      <div class="col-lg-12 marTP-30"><!-- Kindly Put This "form-section" class with col-lg-12 to hide complete section-->

        <!--========FORM SECTION HEADING==========-->
        <h4>Section 13: Additional Details</h4>

        <!--========FORM SUB-SECTION HEADING==========-->
        <h5>13.1 Bank Details</h5>

        <!--========FORM STARTS HERE ==========-->
        <form id="clientform">

          <!--===== 13.2 SOLICITOR DETAILS TABLE STARTS HERE =====-->
          <table class="table">
            <thead>
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <?php if($ftype){ ?><th scope="col" class="hide-col">Client 2</th><?php } ?>
              </tr>
            </thead>
            <tbody class="table-bordered">
              <tr>
                <td>Bank / Building Society</td>
                <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->bank_society_1;} ?>" name="bank_society_1" placeholder="Type here Bank / Building Society here "></td>
                <?php if($ftype){ ?>
                <td class="hide-col">
                  <input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->bank_society_2;} ?>" name="bank_society_2" placeholder="Type here Bank / Building Society here ">
                </td>
                <?php } ?>
              </tr>

              <tr>
                <td>Address</td>
                <td><textarea class="form-control" name="bank_address_1" rows="4" placeholder="Type address here..."><?php if($pdata != NULL){echo $pdata->bank_address_1;} ?></textarea></td>
                <?php if($ftype){ ?>
                <td class="hide-col"><textarea class="form-control" name="bank_address_2" rows="4" placeholder="Type address here..."><?php if($pdata != NULL){echo $pdata->bank_address_2;} ?></textarea></td>
                <?php } ?>
              </tr>

              <tr>
                <td>Postcode</td>
                <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->bank_postcode_1;} ?>" name="bank_postcode_1" placeholder="Postcode"></td>
                <?php if($ftype){ ?>
                <td class="hide-col"><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->bank_postcode_2;} ?>" name="bank_postcode_2" placeholder="Postcode"></td>
                <?php } ?>
              </tr>

              <tr>
                <td>Name(s) of Account Holder(s)</td>
                <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->bank_account_holder_1;} ?>" name="bank_account_holder_1" placeholder="Type a/c holder's name"></td>
                <?php if($ftype){ ?>
                <td class="hide-col"><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->bank_account_holder_2;} ?>" name="bank_account_holder_2" placeholder="Type a/c holder's name"></td>
                <?php } ?>
              </tr>

              <tr>
                <td>Sort Code (00-00-00)</td>
                <td class="text-center">
                  <span>(<input type="text" class="form-control col-md-2 date-input-box text-center" name="bank_sortcode1_1" value="<?php if($pdata != NULL){echo $pdata->bank_sortcode1_1;} ?>" placeholder="00">)</span> - 
                  <span>(<input type="text" class="form-control col-md-2 date-input-box text-center" name="bank_sortcode2_1" value="<?php if($pdata != NULL){echo $pdata->bank_sortcode2_1;} ?>" placeholder="00">)</span> - 
                  <span>(<input type="text" class="form-control col-md-2 date-input-box text-center" name="bank_sortcode3_1" value="<?php if($pdata != NULL){echo $pdata->bank_sortcode3_1;} ?>" placeholder="00">)</span>
                </td>
                <?php if($ftype){ ?>
                <td class="text-center hide-col">
                  <span>(<input type="text" class="form-control col-md-2 date-input-box text-center" name="bank_sortcode1_2" value="<?php if($pdata != NULL){echo $pdata->bank_sortcode1_2;} ?>" placeholder="00">)</span> - 
                  <span>(<input type="text" class="form-control col-md-2 date-input-box text-center" name="bank_sortcode2_2" value="<?php if($pdata != NULL){echo $pdata->bank_sortcode2_2;} ?>" placeholder="00">)</span> - 
                  <span>(<input type="text" class="form-control col-md-2 date-input-box text-center" name="bank_sortcode3_2" value="<?php if($pdata != NULL){echo $pdata->bank_sortcode3_2;} ?>" placeholder="00">)</span>
                </td>
                <?php } ?>
              </tr>

              <tr>
                <td>Account Number</td>
                <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->bank_account_number_1;} ?>" name="bank_account_number_1" placeholder="Type account no."></td>
                <?php if($ftype){ ?>
                <td class="hide-col"><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->bank_account_number_2;} ?>" name="bank_account_number_2" placeholder="Type account no."></td>
                <?php } ?>
              </tr>

              <tr>
                <td>How long have you held this account? (years)</td>
                <td>
                  <div class="input-group">                                              
                    <input type="text" class="form-control" name="bank_years_1" value="<?php if($pdata != NULL){echo $pdata->bank_years_1;} ?>" placeholder="Type years here">   
                    <div class="input-group-prepend">
                      <div class="input-group-text">yrs.</div>
                    </div> 
                  </div>
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col">
                  <div class="input-group">                                              
                    <input type="text" class="form-control" name="bank_years_2" value="<?php if($pdata != NULL){echo $pdata->bank_years_2;} ?>" placeholder="Type years here">   
                    <div class="input-group-prepend">
                      <div class="input-group-text">yrs.</div>
                    </div> 
                  </div>
                </td>
                <?php } ?>
              </tr>
            </tbody>
          </table>
          <!--===== /13.2 SOLICITOR DETAILS TABLE ENDS HERE =====-->

          <!--========FORM SECTION HEADING==========-->
          <h5 class="marTP-30">13.2 Solicitor Details</h5>           

          <!--===== 13.2 SOLICITOR DETAILS TABLE STARTS HERE =====-->
          <table class="table">
            <tbody class="table-bordered">
              <tr>
                <td style="width: 15%;">Solicitor</td>
                <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->solicitor;} ?>" name="solicitor" placeholder="Type solicitor"></td>
              </tr>

              <tr>
                <td style="width: 15%;">Address</td>
                <td><textarea class="form-control" name="solicitor_address" rows="4" placeholder="Type address here"><?php if($pdata != NULL){echo $pdata->solicitor_address;} ?></textarea></td>
              </tr>

              <tr>
                <td style="width: 15%;">Postcode</td>
                <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->solicitor_postcode;} ?>" name="solicitor_postcode" placeholder="Type Postcode"></td>
              </tr>

              <tr>
                <td style="width: 15%;">Contact Name</td>
                <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->solicitor_name;} ?>" name="solicitor_name" placeholder="Type Contact Name"></td>
              </tr>

              <tr>
                <td style="width: 15%;">Contact Telephone <br/>
                    <span style="color:#555555;font-size: 12px;font-style: italic;">*Please enter 11 digits beginning with 0 but without spaces</span>
                </td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">+44</div>
                    </div>
                    <input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->solicitor_telephone;} ?>" name="solicitor_telephone" placeholder="07456123890">
                  </div>        
                </td>          
              </tr>

              <tr>
                <td style="width: 15%;">Contact Email</td>
                <td><input type="email" class="form-control" value="<?php if($pdata != NULL){echo $pdata->solicitor_email;} ?>" name="solicitor_email" placeholder="Type Contact Email" style="text-transform: none!important;"></td>
              </tr>
            </tbody>
          </table>
          <!--===== /13.2 SOLICITOR DETAILS TABLE ENDS HERE =====-->

          <!--========FORM SECTION HEADING==========-->
          <h5 class="marTP-30">13.3 Estate Agent Details</h5>           

          <!--===== 13.3 STATE AGENT DETAILS TABLE STARTS HERE =====-->
          <table class="table">
            <tbody class="table-bordered">
              <tr>
                <td style="width: 15%;">Estate Agent</td>
                <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->estate_agent;} ?>" name="estate_agent" placeholder="Type estate agent name"></td>
              </tr>

              <tr>
                <td style="width: 15%;">Address</td>
                <td><textarea class="form-control" rows="4" name="estate_address" placeholder="Type address here..."><?php if($pdata != NULL){echo $pdata->estate_address;} ?></textarea></td>
              </tr>

              <tr>
                <td style="width: 15%;">Postcode</td>
                <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->estate_postcode;} ?>" name="estate_postcode" placeholder="Type Postcode"></td>
              </tr>

              <tr>
                <td style="width: 15%;">Contact Name</td>
                <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->estate_name;} ?>" name="estate_name" placeholder="Type Contact Name"></td>
              </tr>

              <tr>
                <td style="width: 15%;">Contact Telephone <br/>
                  <span style="color:#555555;font-size: 12px;font-style: italic;">*Please enter 11 digits beginning with 0 but without spaces</span>
                </td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">+44</div>
                    </div>
                    <input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->estate_telephone;} ?>" name="estate_telephone" placeholder="07456123890">
                  </div>
                </td>
              </tr>

              <tr>
                <td style="width: 15%;">Contact Email</td>
                <td><input type="email" class="form-control" value="<?php if($pdata != NULL){echo $pdata->estate_email;} ?>" name="estate_email" placeholder="Type Contact Email" style="text-transform: none!important;"></td>
              </tr>
            </tbody>
          </table>
          <!--===== /13.3 STATE AGENT DETAILS TABLE ENDS HERE =====-->

          <!--========FORM SECTION HEADING==========-->
          <h5 class="marTP-30">13.4 Vendor Details (where relevant)</h5>           

          <!--===== 13.4 VENDOR DETAILS (WHERE RELEVANT) TABLE STARTS HERE =====-->
          <table class="table">
            <tbody class="table-bordered">
              <tr>
                <td style="width: 15%;">Contact Name</td>
                <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->vendor_name;} ?>" name="vendor_name" placeholder="Type contact name"></td>
              </tr>

              <tr>
                <td style="width: 15%;">Address</td>
                <td><textarea class="form-control" rows="4" name="vendor_address" placeholder="Type address here..."><?php if($pdata != NULL){echo $pdata->vendor_address;} ?></textarea></td>
              </tr>

              <tr>
                <td style="width: 15%;">Postcode</td>
                <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->vendor_postcode;} ?>" name="vendor_postcode" placeholder="Type Postcode"></td>
              </tr>                  

              <tr>
                <td style="width: 15%;">Contact Telephone <br/>
                  <span style="color:#555555;font-size: 12px;font-style: italic;">*Please enter 11 digits beginning with 0 but without spaces</span>
                </td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">+44</div>
                    </div>
                    <input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->vendor_telephone;} ?>" name="vendor_telephone" placeholder="07456123890">
                  </div>     
                </td>             
              </tr>

              <tr>
                <td style="width: 15%;">Contact Email</td>
                <td><input type="email" class="form-control" value="<?php if($pdata != NULL){echo $pdata->vendor_email;} ?>" name="vendor_email" placeholder="Type Contact Email" style="text-transform: none!important;"></td>
              </tr>
            </tbody>
          </table>
          <!--===== 13.4 VENDOR DETAILS (WHERE RELEVANT) TABLE STARTS HERE =====-->

          <!--========FORM SECTION HEADING==========-->
          <h5 class="marTP-30">13.5 Accountant Details</h5>

          <!--===== 13.5 ACCOUNTANT DETAILS TABLE STARTS HERE =====-->
          <table class="table">
            <thead>
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <?php if($ftype){ ?><th scope="col" class="hide-col">Client 2</th><?php } ?>
              </tr>
            </thead>
            <tbody class="table-bordered">
              <tr>
                <td>Accountant Name</td>
                <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->accountant_name_1;} ?>" name="accountant_name_1" placeholder="Type accountant name"></td>
                <?php if($ftype){ ?>
                <td class="hide-col"><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->accountant_name_2;} ?>" name="accountant_name_2" placeholder="Type accountant name"></td>
                <?php } ?>
              </tr>

              <tr>
                <td>Company Name</td>
                <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->accountant_company_1;} ?>" name="accountant_company_1" placeholder="Type company name"></td>
                <?php if($ftype){ ?>
                <td class="hide-col"><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->accountant_company_2;} ?>" name="accountant_company_2" placeholder="Type company name"></td>
                <?php } ?>
              </tr>

              <tr>
                <td>Address</td>
                <td><textarea class="form-control" rows="4" name="accountant_address_1" placeholder="Type address here..."><?php if($pdata != NULL){echo $pdata->accountant_address_1;} ?></textarea></td>
                <?php if($ftype){ ?>
                <td class="hide-col"><textarea class="form-control" rows="4" name="accountant_address_2" placeholder="Type address here..."><?php if($pdata != NULL){echo $pdata->accountant_address_2;} ?></textarea></td>
                <?php } ?>
              </tr>

              <tr>
                <td>Postcode</td>
                <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->accountant_postcode_1;} ?>" name="accountant_postcode_1" placeholder="Type Postcode"></td>
                <?php if($ftype){ ?>
                <td class="hide-col"><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->accountant_postcode_2;} ?>" name="accountant_postcode_2" placeholder="Type Postcode"></td>
                <?php } ?>
              </tr>

              <tr>
                <td>Telephone Number<br/>
                  <span style="color:#555555;font-size: 12px;font-style: italic;">*Please enter 11 digits beginning with 0 but without spaces</span>
                </td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">+44</div>
                    </div>
                    <input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->accountant_telephone_1;} ?>" name="accountant_telephone_1" placeholder="07456123890">
                  </div> 
                </td>

                  
                <?php if($ftype){ ?>
                <td class="hide-col">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">+44</div>
                    </div>
                    <input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->accountant_telephone_2;} ?>" name="accountant_telephone_2" placeholder="07456123890">
                  </div> 
                </td>
                <?php } ?>
              </tr>

              <tr>
                <td>Fax Number</td>
                <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->accountant_fax_1;} ?>" name="accountant_fax_1" placeholder="Type Fax No."></td>
                <?php if($ftype){ ?>
                <td class="hide-col"><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->accountant_fax_2;} ?>" name="accountant_fax_2" placeholder="Type Fax No."></td>
                <?php } ?>
              </tr>

              <tr>
                <td>Email Address</td>
                <td><input type="email" class="form-control" value="<?php if($pdata != NULL){echo $pdata->accountant_email_1;} ?>" name="accountant_email_1" placeholder="Type Email Address"></td>
                <?php if($ftype){ ?>
                <td class="hide-col"><input type="email" class="form-control" value="<?php if($pdata != NULL){echo $pdata->accountant_email_2;} ?>" name="accountant_email_2" placeholder="Type Email Address"></td>
                <?php } ?>
              </tr>

              <tr>
                <td>Qualification(s) of Accountant</td>
                <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->accountant_qualification_1;} ?>" name="accountant_qualification_1" placeholder="Type here"></td>
                <?php if($ftype){ ?>
                <td class="hide-col"><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->accountant_qualification_2;} ?>" name="accountant_qualification_2" placeholder="Type here"></td>
                <?php } ?>
              </tr>
            </tbody>
          </table>
          <!--===== /13.5 ACCOUNTANT DETAILS TABLE ENDS HERE =====-->

          <!--========FORM SECTION HEADING==========-->
          <h5 class="marTP-30">13.6 Contractors</h5>

          <!--===== CURRENT CONTRACTORS TABLE STARTS HERE =====-->
          <table class="table">
            <thead>
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <?php if($ftype){ ?><th scope="col" class="hide-col">Client 2</th><?php } ?>
              </tr>

              <tr>
                <th scope="col" style="border-left:0px;border-bottom:0px;border-top:0px;background-color:transparent;"></th>
                <th scope="col" colspan="2">Current Contract (1)</th>
              </tr>
            </thead> 
            <tbody class="table-bordered">
              <tr>
                <td>Client Name <span style="font-weight: normal;">(Employer)</span></td>
                <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->current_contract_name_1;} ?>" name="current_contract_name_1" placeholder="Type client name"></td>
                <?php if($ftype){ ?>
                <td class="hide-col"><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->current_contract_name_2;} ?>" name="current_contract_name_2" placeholder="Type client name"></td>
                <?php } ?>
              </tr>

              <tr>
                <td>Start Date</td>
                <?php
                  $start1 = false; $start2 = false; 
                  if($pdata != NULL && $pdata->current_contract_start_1 != ""){
                    $start1_data = explode("/", $pdata->current_contract_start_1);
                    $start1 = true;
                  } 

                  if($pdata != NULL && $pdata->current_contract_start_2 != ""){
                    $start2_data = explode("/", $pdata->current_contract_start_2);
                    $start2 = true;
                  } 
                ?>
                <td class="text-center">
                  <input id="scurr_date_13_6_1_1" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php if($start1){echo $start1_data[0];} ?>" placeholder="Date"> / 
                  <input id="scurr_month_13_6_1_1" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php if($start1){echo $start1_data[1];} ?>" placeholder="Month"> / 
                  <input id="scurr_year_13_6_1_1" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php if($start1){echo $start1_data[2];} ?>" placeholder="Year">
                  <input type="hidden" id="scurr_calendar_13_6_1_1" class="selectDate" />
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col text-center">
                  <input id="scurr_date_13_6_1_2" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php if($start2){echo $start2_data[0];} ?>" placeholder="Date"> / 
                  <input id="scurr_month_13_6_1_2" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php if($start2){echo $start2_data[1];} ?>" placeholder="Month"> / 
                  <input id="scurr_year_13_6_1_2" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php if($start2){echo $start2_data[2];} ?>" placeholder="Year">
                  <input type="hidden" id="scurr_calendar_13_6_1_2" class="selectDate" />
                </td>
                <?php } ?>
              </tr>

              <tr>
                <td>End Date</td>
                <?php
                  $end1 = false; $end2 = false; 
                  if($pdata != NULL && $pdata->current_contract_end_1 != ""){
                    $end1_data = explode("/", $pdata->current_contract_end_1);
                    $end1 = true;
                  } 

                  if($pdata != NULL && $pdata->current_contract_end_2 != ""){
                    $end2_data = explode("/", $pdata->current_contract_end_2);
                    $end2 = true;
                  } 
                ?>
                <td class="text-center">
                  <input id="ecurr_date_13_6_1_1" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php if($end1){echo $end1_data[0];} ?>" placeholder="Date"> / 
                  <input id="ecurr_month_13_6_1_1" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php if($end1){echo $end1_data[1];} ?>" placeholder="Month"> / 
                  <input id="ecurr_year_13_6_1_1" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php if($end1){echo $end1_data[2];} ?>" placeholder="Year">
                  <input type="hidden" id="ecurr_calendar_13_6_1_1" class="selectDate" />
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col text-center">
                  <input id="ecurr_date_13_6_1_2" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php if($end2){echo $end2_data[0];} ?>" placeholder="Date"> / 
                  <input id="ecurr_month_13_6_1_2" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php if($end2){echo $end2_data[1];} ?>" placeholder="Month"> / 
                  <input id="ecurr_year_13_6_1_2" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php if($end2){echo $end2_data[2];} ?>" placeholder="Year">
                  <input type="hidden" id="ecurr_calendar_13_6_1_2" class="selectDate" />
                </td>
                <?php } ?>
              </tr>

              <tr>
                <td>Pay Basis</td>
                <td class="text-center">
                  <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="" style="margin: 0px 12px 0px 0px;">Per Day</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->current_contract_basis_1 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;margin-top: .25rem;" type="checkbox" name="current_contract_basis_1" value="Per_Day" id="">
                      </div>

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="" style="margin: 0px 12px 0px 0px;">Per Hour</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->current_contract_basis_1 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;margin-top: .25rem;" type="checkbox" name="current_contract_basis_1" value="Per_Hour" id="">
                      </div>
                    </center>
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col text-center">
                  <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="" style="margin: 0px 12px 0px 0px;">Per Day</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->current_contract_basis_2 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;margin-top: .25rem;" type="checkbox" name="current_contract_basis_2" value="Per_Day" id="">
                      </div>

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="" style="margin: 0px 12px 0px 0px;">Per Hour</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->current_contract_basis_2 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;margin-top: .25rem;" type="checkbox" name="current_contract_basis_2" value="Per_Hour" id="">
                      </div>
                    </center>
                </td>
                <?php } ?>
              </tr>

              <tr>
                <td>Pay Rate</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div> 
                    <input type="text" class="form-control numcomma" value="<?php if($pdata != NULL){echo $pdata->current_contract_rate_1;} ?>" name="current_contract_rate_1" placeholder="Type amount here">  
                  </div>
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div> 
                    <input type="text" class="form-control numcomma" value="<?php if($pdata != NULL){echo $pdata->current_contract_rate_2;} ?>" name="current_contract_rate_2" placeholder="Type amount here">  
                  </div>
                </td>
                <?php } ?>
              </tr>

              <tr>
                <td>Min. Days/Hours</td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->current_contract_days_1;} ?>" name="current_contract_days_1" placeholder="Type min. days/hrs. here"> 
                    <div class="input-group-prepend">
                      <div class="input-group-text">per week</div>
                    </div> 
                  </div>
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col">
                  <div class="input-group">
                    <input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->current_contract_days_2;} ?>" name="current_contract_days_2" placeholder="Type min. days/hrs. here"> 
                    <div class="input-group-prepend">
                      <div class="input-group-text">per week</div>
                    </div> 
                  </div>
                </td>
                <?php } ?>
              </tr>
            </tbody>
          </table>
          <!--=====/.CURRENT CONTRACTORS TABLE ENDS HERE =====-->

          <!--===== PREVIOUS CONTRACTORS TABLE STARTS HERE =====-->
          <?php if($pdata != NULL){ $pCont = json_decode($pdata->previous_contract, true); $i = 0; ?>
          <?php foreach($pCont as $key => $value){ $i++; ?>
          <?php if($i > 1){ ?>
            <div id="prevrem_<?php echo $i; ?>" class="close-btn prevRemove"><i class="fas fa-times-circle fa-2x"></i></div>
          <?php } ?>
          <table id="prevSec_<?php echo $i; ?>" class="table marTP-30" style="margin-bottom: 30px;">
            <thead>
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <?php if($ftype){ ?><th scope="col" class="hide-col">Client 2</th><?php } ?>
              </tr>

              <tr>
                <th scope="col" style="border-left:0px;border-bottom:0px;border-top:0px;background-color:transparent;"></th>
                <th scope="col" colspan="2">Previous Contract (2)</th>
              </tr>
            </thead>
            <tbody class="table-bordered">
              <tr>
                <td>Client Name <span style="font-weight: normal;">(Employer)</span></td>
                <td><input type="text" class="form-control" value="<?php echo $value["previous_contract_name_".$i."_1"]; ?>" name="previous_contract_name_<?php echo $i; ?>_1" placeholder="Type client name"></td>
                <?php if($ftype){ ?>
                <td class="hide-col"><input type="text" class="form-control" value="<?php echo $value["previous_contract_name_".$i."_2"]; ?>" name="previous_contract_name_<?php echo $i; ?>_2" placeholder="Type client name"></td>
                <?php } ?>
              </tr>

              <tr>
                <td>Start Date</td>
                <?php $sdate1 = false; $sdate2 = false; 
                  if($value["previous_contract_start_".$i."_1"] != ""){
                      $sdate1_data = explode("/", $value["previous_contract_start_".$i."_1"]);
                      $sdate1 = true;
                  } 

                  if($value["previous_contract_start_".$i."_2"] != ""){
                      $sdate2_data = explode("/", $value["previous_contract_start_".$i."_2"]);
                      $sdate2 = true;
                  } 
                ?>
                <td class="text-center">
                  <input id="sprev_date_13_6_<?php echo $i; ?>_1" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php echo $sdate1_data[0]; ?>" placeholder="Date"> / 
                  <input id="sprev_month_13_6_<?php echo $i; ?>_1" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php echo $sdate1_data[1]; ?>" placeholder="Month"> / 
                  <input id="sprev_year_13_6_<?php echo $i; ?>_1" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php echo $sdate1_data[2]; ?>" placeholder="Year">
                  <input type="hidden" id="sprev_calendar_13_6_<?php echo $i; ?>_1" class="selectDate" />
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col text-center">
                  <input id="sprev_date_13_6_<?php echo $i; ?>_2" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php echo $sdate2_data[0]; ?>" placeholder="Date"> / 
                  <input id="sprev_month_13_6_<?php echo $i; ?>_2" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php echo $sdate2_data[1]; ?>" placeholder="Month"> / 
                  <input id="sprev_year_13_6_<?php echo $i; ?>_2" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php echo $sdate2_data[2]; ?>" placeholder="Year">
                  <input type="hidden" id="sprev_calendar_13_6_<?php echo $i; ?>_2" class="selectDate" />
                </td>
                <?php } ?>
              </tr>

              <tr>
                <td>End Date</td>
                <?php $edate1 = false; $edate2 = false; 
                  if($value["previous_contract_end_".$i."_1"] != ""){
                      $edate1_data = explode("/", $value["previous_contract_end_".$i."_1"]);
                      $edate1 = true;
                  } 

                  if($value["previous_contract_end_".$i."_2"] != ""){
                      $edate2_data = explode("/", $value["previous_contract_end_".$i."_2"]);
                      $edate2 = true;
                  } 
                ?>
                <td class="text-center">
                  <input id="eprev_date_13_6_<?php echo $i; ?>_1" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php echo $edate1_data[0]; ?>" placeholder="Date"> / 
                  <input id="eprev_month_13_6_<?php echo $i; ?>_1" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php echo $edate1_data[1]; ?>" placeholder="Month"> / 
                  <input id="eprev_year_13_6_<?php echo $i; ?>_1" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php echo $edate1_data[2]; ?>" placeholder="Year">
                  <input type="hidden" id="eprev_ecalendar_13_6_<?php echo $i; ?>_1" class="selectDate" />
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col text-center">
                  <input id="eprev_date_13_6_<?php echo $i; ?>_2" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php echo $edate2_data[0]; ?>" placeholder="Date"> / 
                  <input id="eprev_month_13_6_<?php echo $i; ?>_2" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php echo $edate2_data[1]; ?>" placeholder="Month"> / 
                  <input id="eprev_year_13_6_<?php echo $i; ?>_2" type="text" class="form-control col-md-3 date-input-box text-center" value="<?php echo $edate2_data[2]; ?>" placeholder="Year">
                  <input type="hidden" id="eprev_calendar_13_6_<?php echo $i; ?>_2" class="selectDate" />
                </td>
                <?php } ?>
              </tr>

              <tr>
                <td>Pay Basis</td>
                <td class="text-center">
                  <center>
                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="" style="margin: 0px 12px 0px 0px;">Per Day</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["previous_contract_basis_".$i."_1"]) && $value["previous_contract_basis_".$i."_1"] == "Per_Day"){ echo "checked"; } ?> style="margin-left: 0.25rem;margin-top: .25rem;" type="checkbox" name="previous_contract_basis_<?php echo $i; ?>_1" value="Per_Day" id="">
                    </div>

                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="" style="margin: 0px 12px 0px 0px;">Per Hour</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["previous_contract_basis_".$i."_1"]) && $value["previous_contract_basis_".$i."_1"] == "Per_Hour"){ echo "checked"; } ?> style="margin-left: 0.25rem;margin-top: .25rem;" type="checkbox" name="previous_contract_basis_<?php echo $i; ?>_1" value="Per_Hour" id="">
                    </div>
                  </center>
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col text-center">
                  <center>
                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="" style="margin: 0px 12px 0px 0px;">Per Day</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["previous_contract_basis_".$i."_2"]) && $value["previous_contract_basis_".$i."_2"] == "Per_Day"){ echo "checked"; } ?> style="margin-left: 0.25rem;margin-top: .25rem;" type="checkbox" name="previous_contract_basis_<?php echo $i; ?>_2" value="Per_Day" id="">
                    </div>

                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="" style="margin: 0px 12px 0px 0px;">Per Hour</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["previous_contract_basis_".$i."_2"]) && $value["previous_contract_basis_".$i."_2"] == "Per_Hour"){ echo "checked"; } ?> style="margin-left: 0.25rem;margin-top: .25rem;" type="checkbox" name="previous_contract_basis_<?php echo $i; ?>_2" value="Per_Hour" id="">
                    </div>
                  </center>
                </td>
                <?php } ?>
              </tr>

              <tr>
                <td>Pay Rate</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control numcomma" name="previous_contract_rate_<?php echo $i; ?>_1" value="<?php echo $value["previous_contract_rate_".$i."_1"]; ?>" placeholder="Type amount here">
                  </div>
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control numcomma" name="previous_contract_rate_<?php echo $i; ?>_2" value="<?php echo $value["previous_contract_rate_".$i."_2"]; ?>" placeholder="Type amount here">
                  </div>
                </td>
                <?php } ?>
              </tr>

              <tr>
                <td>Min. Days/Hours</td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control" name="previous_contract_days_<?php echo $i; ?>_1" value="<?php echo $value["previous_contract_days_".$i."_1"]; ?>" placeholder="Type min. days/hrs. here"> 
                    <div class="input-group-prepend">
                      <div class="input-group-text">per week</div>
                    </div> 
                  </div>
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col">
                  <div class="input-group">
                    <input type="text" class="form-control" name="previous_contract_days_<?php echo $i; ?>_2" value="<?php echo $value["previous_contract_days_".$i."_2"]; ?>" placeholder="Type min. days/hrs. here"> 
                    <div class="input-group-prepend">
                      <div class="input-group-text">per week</div>
                    </div> 
                  </div>
                </td>
                <?php } ?>
              </tr>
            </tbody>
          </table>
          <?php }}else{ ?>
            <table class="table marTP-30">
              <thead>
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col">Client 1</th>
                  <?php if($ftype){ ?><th scope="col" class="hide-col">Client 2</th> <?php } ?>
                </tr>

                <tr>
                  <th scope="col" style="border-left:0px;border-bottom:0px;border-top:0px;background-color:transparent;"></th>
                  <th scope="col" colspan="2">Previous Contract (2)</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td>Client Name <span style="font-weight: normal;">(Employer)</span></td>
                  <td><input type="text" class="form-control" value="" name="previous_contract_name_1_1" placeholder="Type client name"></td>
                  <?php if($ftype){ ?>
                  <td class="hide-col"><input type="text" class="form-control" value="" name="previous_contract_name_1_2" placeholder="Type client name"></td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Start Date</td>
                  <td class="text-center">
                    <input id="sprev_date_13_6_1_1" type="text" class="form-control col-md-3 date-input-box text-center" value="" placeholder="Date"> / 
                    <input id="sprev_month_13_6_1_1" type="text" class="form-control col-md-3 date-input-box text-center" value="" placeholder="Month"> / 
                    <input id="sprev_year_13_6_1_1" type="text" class="form-control col-md-3 date-input-box text-center" value="" placeholder="Year">
                    <input type="hidden" id="sprev_calendar_13_6_1_1" class="selectDate" />
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col text-center">
                    <input id="sprev_date_13_6_1_2" type="text" class="form-control col-md-3 date-input-box text-center" value="" placeholder="Date"> / 
                    <input id="sprev_month_13_6_1_2" type="text" class="form-control col-md-3 date-input-box text-center" value="" placeholder="Month"> / 
                    <input id="sprev_year_13_6_1_2" type="text" class="form-control col-md-3 date-input-box text-center" value="" placeholder="Year">
                    <input type="hidden" id="sprev_calendar_13_6_1_2" class="selectDate" />
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>End Date</td>
                  <td class="text-center">
                    <input id="eprev_date_13_6_1_1" type="text" class="form-control col-md-3 date-input-box text-center" value="" placeholder="Date"> / 
                    <input id="eprev_month_13_6_1_1" type="text" class="form-control col-md-3 date-input-box text-center" value="" placeholder="Month"> / 
                    <input id="eprev_year_13_6_1_1" type="text" class="form-control col-md-3 date-input-box text-center" value="" placeholder="Year">
                    <input type="hidden" id="eprev_ecalendar_13_6_1_1" class="selectDate" />
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col text-center">
                    <input id="eprev_date_13_6_1_2" type="text" class="form-control col-md-3 date-input-box text-center" value="" placeholder="Date"> / 
                    <input id="eprev_month_13_6_1_2" type="text" class="form-control col-md-3 date-input-box text-center" value="" placeholder="Month"> / 
                    <input id="eprev_year_13_6_1_2" type="text" class="form-control col-md-3 date-input-box text-center" value="" placeholder="Year">
                    <input type="hidden" id="eprev_calendar_13_6_1_2" class="selectDate" />
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Pay Basis</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="" style="margin: 0px 12px 0px 0px;">Per Day</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;margin-top: .25rem;" type="checkbox" name="previous_contract_basis_1_1" value="Per_Day" id="">
                      </div>

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="" style="margin: 0px 12px 0px 0px;">Per Hour</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;margin-top: .25rem;" type="checkbox" name="previous_contract_basis_1_1" value="Per_Hour" id="">
                      </div>
                    </center>
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="" style="margin: 0px 12px 0px 0px;">Per Day</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;margin-top: .25rem;" type="checkbox" name="previous_contract_basis_1_2" value="Per_Day" id="">
                      </div>

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="" style="margin: 0px 12px 0px 0px;">Per Hour</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;margin-top: .25rem;" type="checkbox" name="previous_contract_basis_1_2" value="Per_Hour" id="">
                      </div>
                    </center>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Pay Rate</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control" name="previous_contract_rate_1_1" placeholder="Type amount here">
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control" name="previous_contract_rate_1_2" placeholder="Type amount here">
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Min. Days/Hours</td>
                  <td>
                    <div class="input-group">
                      <input type="text" class="form-control" name="previous_contract_days_1_1" placeholder="Type min. days/hrs. here"> 
                      <div class="input-group-prepend">
                        <div class="input-group-text">per week</div>
                      </div> 
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">
                    <div class="input-group">
                      <input type="text" class="form-control" name="previous_contract_days_1_2" placeholder="Type min. days/hrs. here"> 
                      <div class="input-group-prepend">
                        <div class="input-group-text">per week</div>
                      </div> 
                    </div>
                  </td>
                  <?php } ?>
                </tr>
              </tbody>
            </table>
          <?php } ?>


          <!--ADD MORE BUTTON-->
          <div>
            <button id="addPrevContractor" type="button" class="btn btn-primary float-right" style="margin:10px 0px;">Add More</button>
          </div><!--/ADD MORE BUTTON-->

          <!--=====/.PREVIOUS CONTRACTORS TABLE ENDS HERE =====-->          

          <!--=====FORM NEXT/SAVE BUTTONS STARTS HERE=====-->
          <div class="" style="text-align: center;margin:20px 0px;">

            <!--Back button-->
            <button id="saveback" type="button" class="btn btn-primary" style="cursor:pointer;">Save and Back</button>
            <!--/Back button-->

            <button type="submit" class="btn btn-primary" style="cursor:pointer;">Save and Next</button>
            <!-- <button type="submit" class="btn btn-primary" style="cursor:pointer;">Save</button> -->
          </div>
          <!--=====/FORM NEXT/SAVE BUTTONS ENDS HERE=====-->
            
        </form>
        <!--========FORM STARTS HERE ==========-->
      </div><!--/.col-lg-12-->
    </div><!--/.row-->
  </div>
  <!-- /.container-fluid-->
</div>
<!-- /.content-wrapper-->

<script>
  function checkSelection(){
    $('.checkSelection').on('change', function() {
      $('input[name="' + this.name + '"]').not(this).prop('checked', false);
    });
  }

  function selectDate(){
    //To Select Dates
    $( ".selectDate" ).datepicker({
      showOn: "button",
      buttonImage: "<?php echo base_url(); ?>assets/img/calendar.gif",
      buttonImageOnly: true,
      changeMonth: true,
      changeYear: true,
      dateFormat: "yy-mm-dd",
      yearRange: "-70:+20",
      onSelect: function(dateText, inst) {
        var dtSection = $(this).attr('id');
        dtSection = dtSection.split("_");

        var dt = dateText.split("-");
        $('#'+dtSection[0]+'_date_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]+'_'+dtSection[5]).val(dt[2]);
        $('#'+dtSection[0]+'_month_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]+'_'+dtSection[5]).val(dt[1]);
        $('#'+dtSection[0]+'_year_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]+'_'+dtSection[5]).val(dt[0]);
      }
    });
  }

  selectDate();
  checkSelection();

  function numberWithCommas(x) {
      var parts = x.toString().split(".");
      parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      return parts.join(".");
  }

  $('.numcomma').keyup(function(){
    $(this).val(function(index, value) {
        value = value.replace(/,/g,'');
        return numberWithCommas(value);
    });
  });

  var prevCount = <?php if($pdata != NULL){echo sizeof($pCont);}else{echo "1";} ?>;
  $('.prevRemove').unbind().click(function(){

    var addId = $(this).attr('id').split('_');
    prevCount = prevCount - 1;
    $('#prevSec_'+addId[1]).remove();
    $(this).remove();

  });
  $('#addPrevContractor').click(function(){

    var prevTxt = "";

    if(prevCount < 5){

      prevCount = prevCount + 1;
      prevTxt += '<div id="prevrem_'+prevCount+'" class="close-btn prevRemove"><i class="fas fa-times-circle fa-2x"></i></div><table id="prevSec_'+prevCount+'" class="table" style="margin-bottom:30px;"> <thead> <tr> <th scope="col" style="border:0px;background-color:transparent;"></th> <th scope="col">Client 1</th> <th scope="col" class="hide-col">Client 2</th> </tr> <tr> <th scope="col" style="border-left:0px;border-bottom:0px;border-top:0px;background-color:transparent;"></th> <th scope="col" colspan="2">Previous Contract (2)</th> </tr> </thead> <tbody class="table-bordered"> <tr> <td>Client Name <span style="font-weight: normal;">(Employer)</span></td> <td><input type="text" class="form-control" value="" name="previous_contract_name_'+prevCount+'_1" placeholder="Type client name"></td> <td class="hide-col"><input type="text" class="form-control" value="" name="previous_contract_name_'+prevCount+'_2" placeholder="Type client name"></td> </tr> <tr> <td>Start Date</td> <td class="text-center"> <input id="sprev_date_13_6_'+prevCount+'_1" type="text" class="form-control col-md-3 date-input-box text-center" name="" value="" placeholder="Date"> / <input id="sprev_month_13_6_'+prevCount+'_1" type="text" class="form-control col-md-3 date-input-box text-center" name="" value="" placeholder="Month"> / <input id="sprev_year_13_6_'+prevCount+'_1" type="text" class="form-control col-md-3 date-input-box text-center" name="" value="" placeholder="Year"> <input type="hidden" id="sprev_calendar_13_6_'+prevCount+'_1" class="selectDate" /> </td> <td class="hide-col text-center"> <input id="sprev_date_13_6_'+prevCount+'_2" type="text" class="form-control col-md-3 date-input-box text-center" name="" value="" placeholder="Date"> / <input id="sprev_month_13_6_'+prevCount+'_2" type="text" class="form-control col-md-3 date-input-box text-center" name="" value="" placeholder="Month"> / <input id="sprev_year_13_6_'+prevCount+'_2" type="text" class="form-control col-md-3 date-input-box text-center" name="" value="" placeholder="Year"> <input type="hidden" id="sprev_calendar_13_6_'+prevCount+'_2" class="selectDate" /> </td> </tr> <tr> <td>End Date</td> <td class="text-center"> <input id="eprev_date_13_6_'+prevCount+'_1" type="text" class="form-control col-md-3 date-input-box text-center" name="" value="" placeholder="Date"> / <input id="eprev_month_13_6_'+prevCount+'_1" type="text" class="form-control col-md-3 date-input-box text-center" name="" value="" placeholder="Month"> / <input id="eprev_year_13_6_'+prevCount+'_1" type="text" class="form-control col-md-3 date-input-box text-center" name="" value="" placeholder="Year"> <input type="hidden" id="eprev_ecalendar_13_6_'+prevCount+'_1" class="selectDate" /> </td> <td class="hide-col text-center"> <input id="eprev_date_13_6_'+prevCount+'_2" type="text" class="form-control col-md-3 date-input-box text-center" name="" value="" placeholder="Date"> / <input id="eprev_month_13_6_'+prevCount+'_2" type="text" class="form-control col-md-3 date-input-box text-center" name="" value="" placeholder="Month"> / <input id="eprev_year_13_6_'+prevCount+'_2" type="text" class="form-control col-md-3 date-input-box text-center" name="" value="" placeholder="Year"> <input type="hidden" id="eprev_calendar_13_6_'+prevCount+'_2" class="selectDate" /> </td> </tr> <tr> <td>Pay Basis</td> <td class="text-center"> <center> <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="" style="margin: 0px 12px 0px 0px;">Per Day</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;margin-top: .25rem;" type="checkbox" name="previous_contract_basis_'+prevCount+'_1" value="Per_Day" id=""> </div> <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="" style="margin: 0px 12px 0px 0px;">Per Hour</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;margin-top: .25rem;" type="checkbox" name="previous_contract_basis_'+prevCount+'_1" value="Per_Hour" id=""> </div> </center> </td> <td class="hide-col text-center"> <center> <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="" style="margin: 0px 12px 0px 0px;">Per Day</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;margin-top: .25rem;" type="checkbox" name="previous_contract_basis_'+prevCount+'_2" value="Per_Day" id=""> </div> <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="" style="margin: 0px 12px 0px 0px;">Per Hour</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;margin-top: .25rem;" type="checkbox" name="previous_contract_basis_'+prevCount+'_2" value="Per_Hour" id=""> </div> </center> </td> </tr> <tr> <td>Pay Rate</td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" class="form-control numcomma" name="previous_contract_rate_'+prevCount+'_1" placeholder="Type amount here"> </div> </td> <td class="hide-col"> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" name="previous_contract_rate_'+prevCount+'_2" class="form-control numcomma" placeholder="Type amount here"> </div> </td> </tr> <tr> <td>Min. Days/Hours</td> <td> <div class="input-group"> <input type="text" name="previous_contract_days_'+prevCount+'_1" class="form-control" placeholder="Type min. days/hrs. here"> <div class="input-group-prepend"> <div class="input-group-text">per week</div> </div> </div> </td> <td class="hide-col"> <div class="input-group"> <input type="text" name="previous_contract_days_'+prevCount+'_2" class="form-control" placeholder="Type min. days/hrs. here"> <div class="input-group-prepend"> <div class="input-group-text">per week</div> </div> </div> </td> </tr> </tbody> </table>';

      $(prevTxt).insertBefore('#addPrevContractor').parent();

      $('.numcomma').keyup(function(){
        $(this).val(function(index, value) {
            value = value.replace(/,/g,'');
            return numberWithCommas(value);
        });
      });
      //To remove section
      $('.prevRemove').unbind().click(function(){

        var addId = $(this).attr('id').split('_');
        prevCount = prevCount - 1;
        $('#prevSec_'+addId[1]).remove();
        $(this).remove();

      });

      selectDate();
      checkSelection();
    }

  });


  $('#clientform').submit(function(event) {
      event.preventDefault();
  }).validate({
    rules:{

    },
    submitHandler: function(form) {

      var formData = $('#clientform').serialize(), prev_contr = {}, prevArr = [], current_contract_start_1 = "", current_contract_start_2 = "", current_contract_end_1 = "", current_contract_end_2 = "";

        for(var i = 1; i <= prevCount; i++){

          prev_contr = {};
          prev_contr['previous_contract_name_'+i+'_1'] = $('input[name="previous_contract_name_'+i+'_1"]').val();
          prev_contr['previous_contract_name_'+i+'_2'] = $('input[name="previous_contract_name_'+i+'_2"]').val();
          prev_contr['previous_contract_start_'+i+'_1'] = $('#sprev_date_13_6_'+i+'_1').val()+"/"+$('#sprev_month_13_6_'+i+'_1').val()+"/"+$('#sprev_year_13_6_'+i+'_1').val();
          prev_contr['previous_contract_start_'+i+'_2'] = $('#sprev_date_13_6_'+i+'_2').val()+"/"+$('#sprev_month_13_6_'+i+'_2').val()+"/"+$('#sprev_year_13_6_'+i+'_2').val();
          prev_contr['previous_contract_end_'+i+'_1'] = $('#eprev_date_13_6_'+i+'_1').val()+"/"+$('#eprev_month_13_6_'+i+'_1').val()+"/"+$('#eprev_year_13_6_'+i+'_1').val();
          prev_contr['previous_contract_end_'+i+'_2'] = $('#eprev_date_13_6_'+i+'_2').val()+"/"+$('#eprev_month_13_6_'+i+'_2').val()+"/"+$('#eprev_year_13_6_'+i+'_2').val();
          prev_contr['previous_contract_basis_'+i+'_1'] = $('input[name="previous_contract_basis_'+i+'_1"]:checked').val();
          prev_contr['previous_contract_basis_'+i+'_2'] = $('input[name="previous_contract_basis_'+i+'_2"]:checked').val();
          prev_contr['previous_contract_rate_'+i+'_1'] = $('input[name="previous_contract_rate_'+i+'_1"]').val();
          prev_contr['previous_contract_rate_'+i+'_2'] = $('input[name="previous_contract_rate_'+i+'_2"]').val();
          prev_contr['previous_contract_days_'+i+'_1'] = $('input[name="previous_contract_days_'+i+'_1"]').val();
          prev_contr['previous_contract_days_'+i+'_2'] = $('input[name="previous_contract_days_'+i+'_2"]').val();

          prevArr.push(prev_contr);

        }

        current_contract_start_1 = $('#scurr_date_13_6_1_1').val()+"/"+$('#scurr_month_13_6_1_1').val()+"/"+$('#scurr_year_13_6_1_1').val();
        current_contract_start_2 = $('#scurr_date_13_6_1_2').val()+"/"+$('#scurr_month_13_6_1_2').val()+"/"+$('#scurr_year_13_6_1_2').val();
        current_contract_end_1 = $('#ecurr_date_13_6_1_1').val()+"/"+$('#ecurr_month_13_6_1_1').val()+"/"+$('#ecurr_year_13_6_1_1').val();
        current_contract_end_2 = $('#ecurr_date_13_6_1_2').val()+"/"+$('#ecurr_month_13_6_1_2').val()+"/"+$('#ecurr_year_13_6_1_2').val();

        formData = formData + "&previous_contract="+JSON.stringify(prevArr)+"&current_contract_start_1="+current_contract_start_1+"&current_contract_start_2="+current_contract_start_2+"&current_contract_end_1="+current_contract_end_1+"&current_contract_end_2="+current_contract_end_2;

        $.ajax({
          url:'<?php echo base_url(); ?>add/addAdditionalDetails?form_id=<?php echo $last; ?>',
          type:'POST',
          data: formData,
          dataType: 'json',
          success:function(as){

              if(as.status){
                if(as.action == 'create'){
                  location.href="<?php echo base_url(); ?>admin/declaration/"+as.data;
                }
                else if(as.action == 'edit'){
                  location.href="<?php echo base_url(); ?>admin/declaration/"+as.data;
                }
              }
              else{
                alert(as.message);
              }
          }
        });

    }
  });

  $('#saveback').click(function(){
    var formData = $('#clientform').serialize(), prev_contr = {}, prevArr = [], current_contract_start_1 = "", current_contract_start_2 = "", current_contract_end_1 = "", current_contract_end_2 = "";

    for(var i = 1; i <= prevCount; i++){

      prev_contr = {};
      prev_contr['previous_contract_name_'+i+'_1'] = $('input[name="previous_contract_name_'+i+'_1"]').val();
      prev_contr['previous_contract_name_'+i+'_2'] = $('input[name="previous_contract_name_'+i+'_2"]').val();
      prev_contr['previous_contract_start_'+i+'_1'] = $('#sprev_date_13_6_'+i+'_1').val()+"/"+$('#sprev_month_13_6_'+i+'_1').val()+"/"+$('#sprev_year_13_6_'+i+'_1').val();
      prev_contr['previous_contract_start_'+i+'_2'] = $('#sprev_date_13_6_'+i+'_2').val()+"/"+$('#sprev_month_13_6_'+i+'_2').val()+"/"+$('#sprev_year_13_6_'+i+'_2').val();
      prev_contr['previous_contract_end_'+i+'_1'] = $('#eprev_date_13_6_'+i+'_1').val()+"/"+$('#eprev_month_13_6_'+i+'_1').val()+"/"+$('#eprev_year_13_6_'+i+'_1').val();
      prev_contr['previous_contract_end_'+i+'_2'] = $('#eprev_date_13_6_'+i+'_2').val()+"/"+$('#eprev_month_13_6_'+i+'_2').val()+"/"+$('#eprev_year_13_6_'+i+'_2').val();
      prev_contr['previous_contract_basis_'+i+'_1'] = $('input[name="previous_contract_basis_'+i+'_1"]:checked').val();
      prev_contr['previous_contract_basis_'+i+'_2'] = $('input[name="previous_contract_basis_'+i+'_2"]:checked').val();
      prev_contr['previous_contract_rate_'+i+'_1'] = $('input[name="previous_contract_rate_'+i+'_1"]').val();
      prev_contr['previous_contract_rate_'+i+'_2'] = $('input[name="previous_contract_rate_'+i+'_2"]').val();
      prev_contr['previous_contract_days_'+i+'_1'] = $('input[name="previous_contract_days_'+i+'_1"]').val();
      prev_contr['previous_contract_days_'+i+'_2'] = $('input[name="previous_contract_days_'+i+'_2"]').val();

      prevArr.push(prev_contr);

    }

    current_contract_start_1 = $('#scurr_date_13_6_1_1').val()+"/"+$('#scurr_month_13_6_1_1').val()+"/"+$('#scurr_year_13_6_1_1').val();
    current_contract_start_2 = $('#scurr_date_13_6_1_2').val()+"/"+$('#scurr_month_13_6_1_2').val()+"/"+$('#scurr_year_13_6_1_2').val();
    current_contract_end_1 = $('#ecurr_date_13_6_1_1').val()+"/"+$('#ecurr_month_13_6_1_1').val()+"/"+$('#ecurr_year_13_6_1_1').val();
    current_contract_end_2 = $('#ecurr_date_13_6_1_2').val()+"/"+$('#ecurr_month_13_6_1_2').val()+"/"+$('#ecurr_year_13_6_1_2').val();

    formData = formData + "&previous_contract="+JSON.stringify(prevArr)+"&current_contract_start_1="+current_contract_start_1+"&current_contract_start_2="+current_contract_start_2+"&current_contract_end_1="+current_contract_end_1+"&current_contract_end_2="+current_contract_end_2;

    $.ajax({
      url:'<?php echo base_url(); ?>add/addAdditionalDetails?form_id=<?php echo $last; ?>',
      type:'POST',
      data: formData,
      dataType: 'json',
      success:function(as){

          if(as.status){
            if(as.action == 'create'){
              location.href="<?php echo base_url(); ?>admin/mortgage-need/"+as.data;
            }
            else if(as.action == 'edit'){
              location.href="<?php echo base_url(); ?>admin/mortgage-need/"+as.data;
            }
          }
          else{
            alert(as.message);
          }
      }
    });
  });
</script>

