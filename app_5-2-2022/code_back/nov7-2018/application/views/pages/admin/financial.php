<?php 
include 'find-fact-header.php'
?>

<style>
  .col-md-10 {
  width: 78%!important;
  }

  .col-md-11 {
    width: 85%!important;
  }

  .hidePl, .hideHp, .hideCc, .hideOd, .hideSm, .hideCm{
    display:none;
  }

  .hidePl, .hideHp, .hideCc, .hideOd, .hideSm, .hideCm {
    margin-bottom:20px!important;
  }
</style>

<?php

  $pdata = $this->admin->getFinancial($last);

?>

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
<!--       <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Find Fact Form</li>
    </ol> -->
    <div class="row">
      <div class="col-lg-12 marTP-30"><!-- Kindly Put This "form-section" class with col-lg-12 to hide complete section-->
        
        <!--========FORM SECTION HEADING==========-->
        <h4>Section 5: Financial Credit & Commitments</h4>

        <!--========FORM SUB-SECTION HEADING==========-->
        <h5>5.1 Existing Credit & Commitments </h5>

        <span>Please tick if you have any of the following and provide further details in the relevant sections.</span>
        
        <!--=======FORM STARTS HERE===========-->
        <form id="clientform">

          <!--=====5.1 EXISTING CREDIT / COMMITMENTS TABLE STARTS HERE=====-->
          <table class="financial-table" style="margin-top: 20px;">
            <thead class="">
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <?php if($ftype){ ?><th scope="col" class="hide-col">Client 2</th><?php } ?>
              </tr>
            </thead>
            <?php if($pdata != NULL){ $existing1 = explode(",",$pdata->existing_1); ?>
            <?php $existing2 = explode(",",$pdata->existing_2); } ?>
            <tbody class="table-bordered">
              <tr>
                <td>Personal Loan(s) <span style="font-weight: normal;">(Section 5.2)</span></td>
                <td>
                  <div class="form-check">
                    <input type="checkbox" <?php if($pdata != NULL && in_array( "pl" , $existing1 ) ){ echo "checked"; }?> class="form-check-input financial-check-input existingstatus" name="exist_1[]" attr-name="pl" value="pl" id="">
                  </div>                
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col">
                  <div class="form-check">
                    <input type="checkbox" <?php if($pdata != NULL && in_array( "pl" , $existing2 ) ){ echo "checked"; }?> class="form-check-input financial-check-input existingstatus" name="exist_2[]" attr-name="pl" value="pl" id="">
                  </div>
                </td>
                <?php } ?>
              </tr>

              <tr>
                <td>Hire Purchase(s) <span style="font-weight: normal;">(Section 5.3)</span></td>
                <td>
                  <div class="form-check">
                    <input type="checkbox" <?php if($pdata != NULL && in_array( "hp" , $existing1 ) ){ echo "checked"; }?> class="form-check-input financial-check-input existingstatus" name="exist_1[]" attr-name="hp" value="hp" id="">
                  </div>                                    
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col">
                  <div class="form-check">
                    <input type="checkbox" <?php if($pdata != NULL && in_array( "hp" , $existing2 ) ){ echo "checked"; }?> class="form-check-input financial-check-input existingstatus" name="exist_2[]" attr-name="hp" value="hp" id="">
                  </div>
                </td>
                <?php } ?>
              </tr>

              <tr>
                <td>Credit Card(s) / Store Card(s) / Mail Order(s) <span style="font-weight: normal;">(Section 5.4)</span></td>
                <td>
                  <div class="form-check">
                    <input type="checkbox" <?php if($pdata != NULL && in_array( "cc" , $existing1 ) ){ echo "checked"; }?> class="form-check-input financial-check-input existingstatus" name="exist_1[]" attr-name="cc" value="cc" id="">
                  </div>                
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col">
                  <div class="form-check">
                    <input type="checkbox" <?php if($pdata != NULL && in_array( "cc" , $existing2 ) ){ echo "checked"; }?> class="form-check-input financial-check-input existingstatus" name="exist_2[]" attr-name="cc" value="cc" id="">
                  </div>
                </td>
                <?php } ?>
              </tr>

              <tr>
                <td>Overdraft(s) <span style="font-weight: normal;">(Section 5.5)</span></td>
                <td>
                  <div class="form-check">
                    <input type="checkbox" <?php if($pdata != NULL && in_array( "od" , $existing1 ) ){ echo "checked"; }?> class="form-check-input financial-check-input existingstatus" name="exist_1[]" attr-name="od" value="od" id="">
                  </div>                
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col">
                  <div class="form-check">
                    <input type="checkbox" <?php if($pdata != NULL && in_array( "od" , $existing2 ) ){ echo "checked"; }?> class="form-check-input financial-check-input existingstatus" name="exist_2[]" attr-name="od" value="od" id="">
                  </div>
                </td>
                <?php } ?>
              </tr>

              <tr>
                <td>Spousal Maintenance <span style="font-weight: normal;">(Section 5.6)</span></td>
                <td>
                  <div class="form-check">
                    <input type="checkbox" <?php if($pdata != NULL && in_array( "sm" , $existing1 ) ){ echo "checked"; }?> class="form-check-input financial-check-input existingstatus" name="exist_1[]" attr-name="sm" value="sm" id="">
                  </div>                
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col">
                  <div class="form-check">
                    <input type="checkbox" <?php if($pdata != NULL && in_array( "sm" , $existing2 ) ){ echo "checked"; }?> class="form-check-input financial-check-input existingstatus" name="exist_2[]" attr-name="sm" value="sm" id="">
                  </div>
                </td>
                <?php } ?>
              </tr>

              <tr> 
                <td>Child Maintenance <span style="font-weight: normal;">(Section 5.7)</span></td>
                <td>
                  <div class="form-check">
                    <input type="checkbox" <?php if($pdata != NULL && in_array( "cm" , $existing1 ) ){ echo "checked"; }?> class="form-check-input financial-check-input existingstatus" name="exist_1[]" attr-name="cm" value="cm" id="">
                  </div>                
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col">
                  <div class="form-check">
                    <input type="checkbox" <?php if($pdata != NULL && in_array( "cm" , $existing2 ) ){ echo "checked"; }?> class="form-check-input financial-check-input existingstatus" name="exist_2[]" attr-name="cm" value="cm" id="">
                  </div>
                </td>
                <?php } ?>
              </tr>                               
            </tbody>
          </table>
          <!--=====/5.1 EXISTING CREDIT / COMMITMENTS TABLE ENDS HERE=====-->

          <!--========FORM SUB-SECTION HEADING==========-->
          <h5 class="marTP-30 hidePl" style="<?php if($pdata != NULL && (in_array( "pl" , $existing1 ) || in_array( "pl" , $existing2 )) ){ echo "display:block;"; } ?>">5.2 Personal Loan(s)</h5>

          <!--=====5.2 PERSONAL LOAN TABLE STARTS HERE=====-->
          <?php if($pdata != NULL){ $pLoan = json_decode($pdata->personal_loan, true); $i = 0; ?>
          <?php foreach($pLoan as $key => $value){ $i = $i + 2; ?>
          <?php if($i > 2){ ?>
          <div id="plrem_<?php echo $i; ?>" class="close-btn plRemove"><i class="fas fa-times-circle fa-2x"></i></div>
          <?php } ?>
          <table id="plSec_<?php echo $i; ?>" class="table hidePl" style="<?php if($pdata != NULL && (in_array( "pl" , $existing1 ) || in_array( "pl" , $existing2 )) ){ echo "display:block;"; } ?>">
            <thead class="">
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col"><?php echo $i-1; ?></th>
                <th scope="col"><?php echo $i; ?></th>
              </tr>
            </thead>
            <tbody class="table-bordered">

              
              <tr>
                <td>Lender / Company</td>
                <td><input type="text" class="form-control" name="pllender_<?php echo $i-1; ?>" value="<?php echo $value["pllender_".($i-1)]; ?>" placeholder="Type Lender / Company"></td>
                <td><input type="text" class="form-control" name="pllender_<?php echo $i; ?>" value="<?php echo $value["pllender_".$i]; ?>" placeholder="Type Lender / Company"></td>
              </tr>
              <?php $b1 = explode(",", $value["plborrow_".($i-1)]); ?>
              <?php $b2 = explode(",", $value["plborrow_".$i]); ?>
              <tr>
                <td>Borrower(s)</td>
                <td class="text-center">
                  <center>
                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Joint</label>
                      <input class="form-check-input" <?php if(in_array( "Joint" , $b1 )){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="plborrow_<?php echo $i-1; ?>[]" value="Joint" id="">
                    </div> / 

                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Client 1</label>
                      <input class="form-check-input" <?php if(in_array( "client_1" , $b1 )){echo "checked";} ?> style="margin-left: -0.15rem;" type="checkbox" name="plborrow_<?php echo $i-1; ?>[]" value="client_1" id="">
                    </div> / 

                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Client 2</label>
                      <input class="form-check-input" <?php if(in_array( "client_2" , $b1 )){echo "checked";} ?> style="margin-left:-0.15rem;" type="checkbox" name="plborrow_<?php echo $i-1; ?>[]" value="client_2" id="">
                    </div>
                  </center>
                </td>
                <td class="text-center">
                  <center>
                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Joint</label>
                      <input class="form-check-input" <?php if(in_array( "Joint" , $b2 )){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="plborrow_<?php echo $i; ?>[]" value="Joint" id="">
                    </div> / 

                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Client 1</label>
                      <input class="form-check-input" <?php if(in_array( "client_1" , $b2 )){echo "checked";} ?> style="margin-left: -0.15rem;" type="checkbox" name="plborrow_<?php echo $i; ?>[]" value="client_1" id="">
                    </div> / 

                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Client 2</label>
                      <input class="form-check-input" <?php if(in_array( "client_2" , $b2 )){echo "checked";} ?>style="margin-left:-0.15rem;" type="checkbox" name="plborrow_<?php echo $i; ?>[]" value="client_2" id="">
                    </div>
                  </center>
                </td>
              </tr>

              <tr>
                <td>Purpose</td>
                <td><input type="text" class="form-control" name="plpurpose_<?php echo $i-1; ?>" value="<?php echo $value["plpurpose_".($i-1)]; ?>"  placeholder="Type Purpose"></td>
                <td><input type="text" class="form-control" name="plpurpose_<?php echo $i; ?>" value="<?php echo $value["plpurpose_".$i]; ?>" placeholder="Type Purpose"></td>
              </tr>

              <tr>
                <td>Start Date</td>
                <?php $sdate1 = false; $sdate2 = false; 
                  if($value["plstartdate_".($i-1)] != ""){
                    $sdate1_data = explode("/", $value["plstartdate_".($i-1)]);
                    $sdate1 = true;
                  } 

                  if($value["plstartdate_".$i] != ""){
                    $sdate2_data = explode("/", $value["plstartdate_".$i]);
                    $sdate2 = true;
                  } 
                ?>
                <td class="text-center">
                  <input id="sdate_5_2_<?php echo $i-1; ?>_1" type="text" value="<?php echo $sdate1_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                  <input id="smonth_5_2_<?php echo $i-1; ?>_1" type="text" value="<?php echo $sdate1_data[1]; ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                  <input id="syear_5_2_<?php echo $i-1; ?>_1" type="text" value="<?php echo $sdate1_data[2]; ?>" class="form-control col-md-3 date-input-box" placeholder="Year"> 
                  <input type="hidden" id="startDate_5_2_<?php echo $i-1; ?>_1" class="selectDate" />
                </td>
                <td class="text-center">
                  <input id="sdate_5_2_<?php echo $i; ?>_1" type="text" value="<?php echo $sdate2_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                  <input id="smonth_5_2_<?php echo $i; ?>_1" type="text" value="<?php echo $sdate2_data[1]; ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                  <input id="syear_5_2_<?php echo $i; ?>_1" type="text" value="<?php echo $sdate2_data[2]; ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                  <input type="hidden" id="startDate_5_2_<?php echo $i; ?>_1" class="selectDate" />
                </td>
              </tr>

              <tr>
                <td>End Date</td>
                <?php $edate1 = false; $edate2 = false; 
                  if($value["plenddate_".($i-1)] != ""){
                    $edate1_data = explode("/", $value["plenddate_".($i-1)]);
                    $edate1 = true;
                  } 

                  if($value["plenddate_".$i] != ""){
                    $edate2_data = explode("/", $value["plenddate_".$i]);
                    $edate2 = true;
                  } 
                ?>
                <td class="text-center">
                  <input id="edate_5_2_<?php echo $i-1; ?>_1" type="text" value="<?php echo $edate1_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                  <input id="emonth_5_2_<?php echo $i-1; ?>_1" type="text" value="<?php echo $edate1_data[1]; ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                  <input id="eyear_5_2_<?php echo $i-1; ?>_1" type="text" value="<?php echo $edate1_data[2]; ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                  <input type="hidden" id="endDate_5_2_<?php echo $i-1; ?>_1" class="selectDate" />
                </td>
                <td class="text-center">
                  <input id="edate_5_2_<?php echo $i; ?>_1" type="text" value="<?php echo $edate2_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                  <input id="emonth_5_2_<?php echo $i; ?>_1" type="text" value="<?php echo $edate2_data[1]; ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                  <input id="eyear_5_2_<?php echo $i; ?>_1" type="text" value="<?php echo $edate2_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                  <input type="hidden" id="endDate_5_2_<?php echo $i; ?>_1" class="selectDate" />
                </td>
              </tr>

              <tr>
                <td>Original Loan</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                    </div>
                    <input type="text" name="ploriginal_<?php echo $i-1; ?>" value="<?php echo $value['ploriginal_'.($i-1)]; ?>" class="form-control numcomma" placeholder="Type amount here">
                  </div>
                  <!-- <span style="margin:0px 5px;">£</span> -->
                  
                </td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                    </div>
                    <input type="text" name="ploriginal_<?php echo $i; ?>" value="<?php echo $value['ploriginal_'.$i]; ?>" class="form-control numcomma" placeholder="Type amount here">
                  </div>
                  <!-- <span style="margin:0px 5px;">£</span> -->
                  
                </td>                  
              </tr>

              <tr>
                <td>Amount Outstanding</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                    </div>
                    <input type="text" name="plamountoutstanding_<?php echo $i-1; ?>" value="<?php echo $value["plamountoutstanding_".($i-1)]; ?>" class="form-control numcomma" placeholder="Type amount here">
                  </div>
                  <!-- <span style="margin:0px 5px;">£</span> -->
                  
                </td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                    </div>
                    <input type="text" name="plamountoutstanding_<?php echo $i; ?>" value="<?php echo $value["plamountoutstanding_".$i]; ?>" class="form-control numcomma" placeholder="Type amount here">
                  </div>
                  <!-- <span style="margin:0px 5px;">£</span> -->
                  
                </td>
              </tr>

              <tr>
                <td>Monthly Payment</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" name="plmonthlypayment_<?php echo $i-1; ?>" value="<?php echo $value["plmonthlypayment_".($i-1)]; ?>" class="form-control numcomma" placeholder="Type amount here">
                    <div class="input-group-prepend">
                      <div class="input-group-text">p.m.</div>
                    </div>
                  </div>

                <!-- <span style="margin:0px 5px;">£</span>
                  
                  <span style="margin: 5px;">p.m.</span> -->                  
                </td>
                <td>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" name="plmonthlypayment_<?php echo $i; ?>" value="<?php echo $value["plmonthlypayment_".$i]; ?>" class="form-control numcomma" placeholder="Type amount here">
                    <div class="input-group-prepend">
                      <div class="input-group-text">p.m.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                  
                  <span style="margin: 5px;">p.m.</span>
-->              </td>
              </tr>

              <tr>
                <td>A.P.R</td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control" name="plapr_<?php echo $i-1; ?>" value="<?php echo $value["plapr_".($i-1)]; ?>" placeholder="Type A.P.R">
                    <div class="input-group-prepend">
                      <div class="input-group-text">%</div>
                    </div>
                  </div>                   
                  <!-- <span style="margin: 5px;">%</span> -->
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control" name="plapr_<?php echo $i; ?>" value="<?php echo $value["plapr_".$i]; ?>" placeholder="Type A.P.R">
                    <div class="input-group-prepend">
                      <div class="input-group-text">%</div>
                    </div>
                  </div>                   
                  <!-- <span style="margin: 5px;">%</span> -->
                </td>
              </tr>

              <tr>
                <td>Is this to be repaid on or before<br/>completion?</td>
                <td class="text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["plrepaidPersonal_".($i-1)]) && $value["plrepaidPersonal_".($i-1)] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="plrepaidPersonal_<?php echo $i-1; ?>" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["plrepaidPersonal_".($i-1)]) && $value["plrepaidPersonal_".($i-1)] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="plrepaidPersonal_<?php echo $i-1; ?>" value="No" id="">
                    </div>
                  </center>
                </td>
                <td class="text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["plrepaidPersonal_".$i]) && $value["plrepaidPersonal_".$i] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="plrepaidPersonal_<?php echo $i; ?>" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["plrepaidPersonal_".$i]) && $value["plrepaidPersonal_".$i] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="plrepaidPersonal_<?php echo $i; ?>" value="No" id="">
                    </div>
                  </center>
                </td>
              </tr>

              <tr>
                <td>Is this to be consolidated?</td>
                <td class="text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["plconsolidatePersonal_".($i-1)]) && $value["plconsolidatePersonal_".($i-1)] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="plconsolidatePersonal_<?php echo $i-1; ?>" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["plconsolidatePersonal_".($i-1)]) && $value["plconsolidatePersonal_".($i-1)] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="plconsolidatePersonal_<?php echo $i-1; ?>" value="No" id="">
                    </div>
                  </center>
                </td>
                <td class="text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["plconsolidatePersonal_".$i]) && $value["plconsolidatePersonal_".$i] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="plconsolidatePersonal_<?php echo $i; ?>" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["plconsolidatePersonal_".$i]) && $value["plconsolidatePersonal_".$i] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="plconsolidatePersonal_<?php echo $i; ?>" value="No" id="">
                    </div>
                  </center>
                </td>
              </tr>
            </tbody>
          </table>
          <?php }}else{ ?>
            <table class="table hidePl" style="<?php if($pdata != NULL && (in_array( "pl" , $existing1 ) || in_array( "pl" , $existing2 )) ){ echo "display:block;"; } ?>">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col">1</th>
                  <th scope="col">2</th>
                </tr>
              </thead>
              <tbody class="table-bordered">

                
                <tr>
                  <td>Lender / Company</td>
                  <td><input type="text" class="form-control" name="pllender_1" value="" placeholder="Type Lender / Company"></td>
                  <td><input type="text" class="form-control" name="pllender_2" value="" placeholder="Type Lender / Company"></td>
                </tr>

                <tr>
                  <td>Borrower(s)</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="plborrow_1[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="plborrow_1[]" value="client_1" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="plborrow_1[]" value="client_2" id="">
                      </div>
                    </center>
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="plborrow_2[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="plborrow_2[]" value="client_1" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="plborrow_2[]" value="client_2" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>Purpose</td>
                  <td><input type="text" class="form-control" name="plpurpose_1" placeholder="Type Purpose"></td>
                  <td><input type="text" class="form-control" name="plpurpose_2" placeholder="Type Purpose"></td>
                </tr>

                <tr>
                  <td>Start Date</td>
                  <td class="text-center">
                    <input id="sdate_5_2_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="smonth_5_2_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="syear_5_2_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year"> 
                    <input type="hidden" id="startDate_5_2_1_1" class="selectDate" />
                  </td>
                  <td class="text-center">
                    <input id="sdate_5_2_2_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="smonth_5_2_2_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="syear_5_2_2_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="startDate_5_2_2_1" class="selectDate" />
                  </td>
                </tr>

                <tr>
                  <td>End Date</td>
                  <td class="text-center">
                    <input id="edate_5_2_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="emonth_5_2_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="eyear_5_2_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="endDate_5_2_1_1" class="selectDate" />
                  </td>
                  <td class="text-center">
                    <input id="edate_5_2_2_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="emonth_5_2_2_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="eyear_5_2_2_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="endDate_5_2_2_1" class="selectDate" />
                  </td>
                </tr>

                <tr>
                  <td>Original Loan</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="ploriginal_1" class="form-control numcomma" placeholder="Type amount here">
                    </div>
                    <!-- <span style="margin:0px 5px;">£</span> -->
                    
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="ploriginal_2" class="form-control numcomma" placeholder="Type amount here">
                    </div>
                    <!-- <span style="margin:0px 5px;">£</span> -->
                    
                  </td>                  
                </tr>

                <tr>
                  <td>Amount Outstanding</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="plamountoutstanding_1" class="form-control numcomma" placeholder="Type amount here">
                    </div>
                    <!-- <span style="margin:0px 5px;">£</span> -->
                    
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="plamountoutstanding_2" class="form-control numcomma" placeholder="Type amount here">
                    </div>
                    <!-- <span style="margin:0px 5px;">£</span> -->
                    
                  </td>
                </tr>

                <tr>
                  <td>Monthly Payment</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="plmonthlypayment_1" class="form-control numcomma" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin: 5px;">p.m.</span> -->                  
                  </td>
                  <td>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="plmonthlypayment_2" class="form-control numcomma" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin: 5px;">p.m.</span>
  -->              </td>
                </tr>

                <tr>
                  <td>A.P.R</td>
                  <td>
                    <div class="input-group">
                      <input type="text" class="form-control" name="plapr_1" placeholder="Type A.P.R">
                      <div class="input-group-prepend">
                        <div class="input-group-text">%</div>
                      </div>
                    </div>                   
                    <!-- <span style="margin: 5px;">%</span> -->
                  </td>
                  <td>
                    <div class="input-group">
                      <input type="text" class="form-control" name="plapr_2" placeholder="Type A.P.R">
                      <div class="input-group-prepend">
                        <div class="input-group-text">%</div>
                      </div>
                    </div>                   
                    <!-- <span style="margin: 5px;">%</span> -->
                  </td>
                </tr>

                <tr>
                  <td>Is this to be repaid on or before<br/>completion?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="plrepaidPersonal_1" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="plrepaidPersonal_1" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="plrepaidPersonal_2" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="plrepaidPersonal_2" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>Is this to be consolidated?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="plconsolidatePersonal_1" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="plconsolidatePersonal_1" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="plconsolidatePersonal_2" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="plconsolidatePersonal_2" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>
              </tbody>
            </table>
          <?php } ?>

          <!--ADD MORE BUTTON-->
            <div class="hidePl" style="<?php if($pdata != NULL && (in_array( "pl" , $existing1 ) || in_array( "pl" , $existing2 )) ){ echo "display:block;"; } ?>">
              <button id="addPersonalLoan" type="button" class="btn btn-primary float-right" style="margin:10px 0px;">Add More</button>
            </div>
          <!--/ADD MORE BUTTON-->

          <!--=====/5.2 PERSONAL LOAN TABLE ENDS HERE=====-->

          <!--========FORM SUB-SECTION HEADING==========-->
          <h5 class="marTP-30 hideHp" style="<?php if($pdata != NULL && (in_array( "hp" , $existing1 ) || in_array( "hp" , $existing2 )) ){ echo "display:block;"; } ?>">5.3 Hire Purchase & Lease</h5>

          <!--=====5.3 HIRE PURCHASES / LEASE TABLE STARTS HERE=====-->

          <!--TABLE 1 STARTS HERE-->
          <?php if($pdata != NULL){ $pHire = json_decode($pdata->hirepurchase, true); $i = 0; ?>
          <?php foreach($pHire as $key => $value){ $i = $i+2; ?>
          <?php if($i > 2){ ?>
            <div id="hprem_<?php echo $i; ?>" class="close-btn hpRemove"><i class="fas fa-times-circle fa-2x"></i></div>
          <?php } ?>
          <table id="hpSec_<?php echo $i; ?>" class="table hideHp" style="<?php if($pdata != NULL && (in_array( "hp" , $existing1 ) || in_array( "hp" , $existing2 )) ){ echo "display:block;"; } ?>">
            <thead class="">
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col"><?php echo $i-1; ?></th>
                <th scope="col"><?php echo $i; ?></th>
              </tr>
            </thead>
            <tbody class="table-bordered">
              <tr>
                <td>Lender / Company</td>
                <td><input type="text" class="form-control" name="hplender_<?php echo $i-1; ?>" value="<?php echo $value["hplender_".($i-1)]; ?>" placeholder="Type Lender / Company"></td>
                <td><input type="text" class="form-control" name="hplender_<?php echo $i; ?>" value="<?php echo $value["hplender_".$i]; ?>" placeholder="Type Lender / Company"></td>
              </tr>

              <tr>
                <td>Borrower(s)</td>
                <?php $h1 = explode(",", $value["hpborrow_".($i-1)]); ?>
                <?php $h2 = explode(",", $value["hpborrow_".$i]); ?>
                <td class="text-center">
                  <center>
                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Joint</label>
                      <input class="form-check-input" style="margin-left: 0.25rem;" <?php if(in_array( "Joint" , $h1 )){echo "checked";} ?> type="checkbox" name="hpborrow_<?php echo $i-1; ?>[]" value="Joint" id="">
                    </div> / 

                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Client 1</label>
                      <input class="form-check-input" style="margin-left: -0.15rem;" <?php if(in_array( "client_1" , $h1 )){echo "checked";} ?> type="checkbox" name="hpborrow_<?php echo $i-1; ?>[]" value="client_1" id="">
                    </div> / 

                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Client 2</label>
                      <input class="form-check-input" style="margin-left:-0.15rem;" <?php if(in_array( "client_2" , $h1 )){echo "checked";} ?> type="checkbox" name="hpborrow_<?php echo $i-1; ?>[]" value="client_2" id="">
                    </div>
                  </center>
                </td>
                <td class="text-center">
                  <center>
                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Joint</label>
                      <input class="form-check-input" style="margin-left: 0.25rem;" <?php if(in_array( "Joint" , $h2 )){echo "checked";} ?> type="checkbox" name="hpborrow_<?php echo $i; ?>[]" value="Joint" id="">
                    </div> / 

                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Client 1</label>
                      <input class="form-check-input" style="margin-left: -0.15rem;" <?php if(in_array( "client_1" , $h2 )){echo "checked";} ?> type="checkbox" name="hpborrow_<?php echo $i; ?>[]" value="client_1" id="">
                    </div> / 

                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Client 2</label>
                      <input class="form-check-input" style="margin-left:-0.15rem;" <?php if(in_array( "client_2" , $h2 )){echo "checked";} ?> type="checkbox" name="hpborrow_<?php echo $i; ?>[]" value="client_2" id="">
                    </div>
                  </center>
                </td>
              </tr>

              <tr>
                <td>Purpose</td>
                <td><input type="text" name="hppurpose_<?php echo $i-1; ?>" value="<?php echo $value["hppurpose_".($i-1)]; ?>" class="form-control" placeholder="Type Purpose"></td>
                <td><input type="text" name="hppurpose_<?php echo $i; ?>" value="<?php echo $value["hppurpose_".$i]; ?>" class="form-control" placeholder="Type Purpose"></td>
              </tr>

              <tr>
                <td>Start Date</td>
                <?php $hpsdate1 = false; $hpsdate2 = false; 
                  if($value["hpstartdate_".($i-1)] != ""){
                    $hpsdate1_data = explode("/", $value["hpstartdate_".($i-1)]);
                    $hpsdate1 = true;
                  } 

                  if($value["hpstartdate_".$i] != ""){
                    $hpsdate2_data = explode("/", $value["hpstartdate_".$i]);
                    $hpsdate2 = true;
                  } 
                ?>
                <td class="text-center">
                  <input id="sdate_5_3_<?php echo $i-1; ?>_1" type="text" value="<?php echo $hpsdate1_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                  <input id="smonth_5_3_<?php echo $i-1; ?>_1" type="text" value="<?php echo $hpsdate1_data[1]; ?>"  class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                  <input id="syear_5_3_<?php echo $i-1; ?>_1" type="text" value="<?php echo $hpsdate1_data[2]; ?>"  class="form-control col-md-3 date-input-box" placeholder="Year">
                  <input type="hidden" id="startDate_5_3_<?php echo $i-1; ?>_1" class="selectDate" />
                </td>
                <td>
                  <input id="sdate_5_3_<?php echo $i; ?>_1" type="text" value="<?php echo $hpsdate2_data[0]; ?>"  class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                  <input id="smonth_5_3_<?php echo $i; ?>_1" type="text" value="<?php echo $hpsdate2_data[1]; ?>"  class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                  <input id="syear_5_3_<?php echo $i; ?>_1" type="text" value="<?php echo $hpsdate2_data[2]; ?>"  class="form-control col-md-3 date-input-box" placeholder="Year">
                  <input type="hidden" id="startDate_5_3_<?php echo $i; ?>_1" class="selectDate" />

                </td>
              </tr>

              <tr>
                <td>End Date</td>
                <?php $hpedate1 = false; $hpedate2 = false; 
                  if($value["hpenddate_".($i-1)] != ""){
                    $hpedate1_data = explode("/", $value["hpenddate_".($i-1)]);
                    $hpedate1 = true;
                  } 

                  if($value["hpenddate_".$i] != ""){
                    $hpedate2_data = explode("/", $value["hpenddate_".$i]);
                    $hpedate2 = true;
                  } 
                ?>
                <td class="text-center">
                  <input id="edate_5_3_<?php echo $i-1; ?>_1" type="text" value="<?php echo $hpedate1_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                  <input id="emonth_5_3_<?php echo $i-1; ?>_1" type="text" value="<?php echo $hpedate1_data[1]; ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                  <input id="eyear_5_3_<?php echo $i-1; ?>_1" type="text" value="<?php echo $hpedate1_data[2]; ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                  <input type="hidden" id="endDate_5_3_<?php echo $i-1; ?>_1" class="selectDate" />
                </td>
                <td class="text-center">
                  <input id="edate_5_3_<?php echo $i; ?>_1" type="text" value="<?php echo $hpedate2_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                  <input id="emonth_5_3_<?php echo $i; ?>_1" type="text" value="<?php echo $hpedate2_data[1]; ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                  <input id="eyear_5_3_<?php echo $i; ?>_1" type="text" value="<?php echo $hpedate2_data[2]; ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                  <input type="hidden" id="endDate_5_3_<?php echo $i; ?>_1" class="selectDate" />
                </td>
              </tr>

              <tr>
                <td>Original Loan</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" name="hporiginal_<?php echo $i-1; ?>" value="<?php echo $value["hporiginal_".($i-1)]; ?>" class="form-control numcomma col-md-11 date-input-box" placeholder="Type amount here">                      
                  </div>                   
                  <!-- <span style="margin:0px 5px;">£</span> -->
                  
                </td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" name="hporiginal_<?php echo $i; ?>" value="<?php echo $value["hporiginal_".$i]; ?>" class="form-control numcomma col-md-11 date-input-box" placeholder="Type amount here">                      
                  </div>                   
                  <!-- <span style="margin:0px 5px;">£</span> -->
                </td>
              </tr>

              <tr>
                <td>Amount Outstanding</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control numcomma col-md-11 date-input-box" name="hpamountoutstanding_<?php echo $i-1; ?>" value="<?php echo $value["hpamountoutstanding_".($i-1)]; ?>" placeholder="Type amount here">                      
                  </div>                   
                  <!-- <span style="margin:0px 5px;">£</span> -->
                </td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control numcomma col-md-11 date-input-box" name="hpamountoutstanding_<?php echo $i; ?>" value="<?php echo $value["hpamountoutstanding_".$i]; ?>" placeholder="Type amount here">                      
                  </div>                   
                  <!-- <span style="margin:0px 5px;">£</span> -->
                </td>
              </tr>

              <tr>
                <td>Monthly Payment</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" name="hpmonthlypayment_<?php echo $i-1; ?>" value="<?php echo $value["hpmonthlypayment_".($i-1)]; ?>" class="form-control numcomma" placeholder="Type amount here">
                    <div class="input-group-prepend">
                      <div class="input-group-text">p.m.</div>
                    </div>
                  </div>

                <!-- <span style="margin:0px 5px;">£</span>
                  
                  <span style="margin: 5px;">p.m.</span> -->
                </td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" name="hpmonthlypayment_<?php echo $i; ?>" value="<?php echo $value["hpmonthlypayment_".$i]; ?>" class="form-control numcomma" placeholder="Type amount here">
                    <div class="input-group-prepend">
                      <div class="input-group-text">p.m.</div>
                    </div>
                  </div>

                <!-- <span style="margin:0px 5px;">£</span>
                  
                  <span style="margin: 5px;">p.m.</span> -->
                </td>
              </tr>

              <tr>
                <td>A.P.R</td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control" name="hpapr_<?php echo $i-1; ?>" value="<?php echo $value["hpapr_".($i-1)]; ?>" placeholder="Type A.P.R">
                    <div class="input-group-prepend">
                      <div class="input-group-text">%</div>
                    </div>
                  </div>                   
                  <!-- <span style="margin: 5px;">%</span> -->                  
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control" name="hpapr_<?php echo $i; ?>" value="<?php echo $value["hpapr_".$i]; ?>" placeholder="Type A.P.R">
                    <div class="input-group-prepend">
                      <div class="input-group-text">%</div>
                    </div>
                  </div>                   
                  <!-- <span style="margin: 5px;">%</span> -->
                </td>
              </tr>

              <tr>
                <td>Is this to be repaid on or before<br/>completion?</td>
                <td class="text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["hprepaidHire_".($i-1)]) && $value["hprepaidHire_".($i-1)] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="hprepaidHire_<?php echo $i-1; ?>" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["hprepaidHire_".($i-1)]) && $value["hprepaidHire_".($i-1)] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="hprepaidHire_<?php echo $i-1; ?>" value="No" id="">
                    </div>
                  </center>
                </td>
                <td class="text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["hprepaidHire_".$i]) && $value["hprepaidHire_".$i] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="hprepaidHire_<?php echo $i; ?>" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["hprepaidHire_".$i]) && $value["hprepaidHire_".$i] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="hprepaidHire_<?php echo $i; ?>" value="No" id="">
                    </div>
                  </center>
                </td>
              </tr>

              <tr>
                <td>Is this to be consolidated?</td>
                <td class="text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["hpconsolidateHire_".($i-1)]) && $value["hpconsolidateHire_".($i-1)] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="hpconsolidateHire_<?php echo $i-1; ?>" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["hpconsolidateHire_".($i-1)]) && $value["hpconsolidateHire_".($i-1)] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="hpconsolidateHire_<?php echo $i-1; ?>" value="No" id="">
                    </div>
                  </center>
                </td>
                <td class="text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["hpconsolidateHire_".$i]) && $value["hpconsolidateHire_".$i] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="hpconsolidateHire_<?php echo $i; ?>" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["hpconsolidateHire_".$i]) && $value["hpconsolidateHire_".$i] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="hpconsolidateHire_<?php echo $i; ?>" value="No" id="">
                    </div>
                  </center>
                </td>
              </tr>
            </tbody>
          </table>
          <?php }}else{ ?>
            <table class="table hideHp" style="<?php if($pdata != NULL && (in_array( "hp" , $existing1 ) || in_array( "hp" , $existing2 )) ){ echo "display:block;"; } ?>">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col">1</th>
                  <th scope="col">2</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td>Lender / Company</td>
                  <td><input type="text" class="form-control" name="hplender_1" placeholder="Type Lender / Company"></td>
                  <td><input type="text" class="form-control" name="hplender_2" placeholder="Type Lender / Company"></td>
                </tr>

                <tr>
                  <td>Borrower(s)</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="hpborrow_1[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="hpborrow_1[]" value="client_1" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="hpborrow_1[]" value="client_2" id="">
                      </div>
                    </center>
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="hpborrow_2[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="hpborrow_2[]" value="client_1" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="hpborrow_2[]" value="client_2" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>Purpose</td>
                  <td><input type="text" name="hppurpose_1" class="form-control" placeholder="Type Purpose"></td>
                  <td><input type="text" name="hppurpose_2" class="form-control" placeholder="Type Purpose"></td>
                </tr>

                <tr>
                  <td>Start Date</td>
                  <td class="text-center">
                    <input id="sdate_5_3_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="smonth_5_3_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="syear_5_3_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="startDate_5_3_1_1" class="selectDate" />
                  </td>
                  <td>
                    <input id="sdate_5_3_2_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="smonth_5_3_2_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="syear_5_3_2_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="startDate_5_3_2_1" class="selectDate" />

                  </td>
                </tr>

                <tr>
                  <td>End Date</td>
                  <td class="text-center">
                    <input id="edate_5_3_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="emonth_5_3_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="eyear_5_3_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="endDate_5_3_1_1" class="selectDate" />
                  </td>
                  <td class="text-center">
                    <input id="edate_5_3_2_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="emonth_5_3_2_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="eyear_5_3_2_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="endDate_5_3_2_1" class="selectDate" />
                  </td>
                </tr>

                <tr>
                  <td>Original Loan</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="hporiginal_1" class="form-control numcomma col-md-11 date-input-box" placeholder="Type amount here">                      
                    </div>                   
                    <!-- <span style="margin:0px 5px;">£</span> -->
                    
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="hporiginal_2" class="form-control numcomma col-md-11 date-input-box" placeholder="Type amount here">                      
                    </div>                   
                    <!-- <span style="margin:0px 5px;">£</span> -->
                  </td>
                </tr>

                <tr>
                  <td>Amount Outstanding</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma col-md-11 date-input-box" name="hpamountoutstanding_1" placeholder="Type amount here">                      
                    </div>                   
                    <!-- <span style="margin:0px 5px;">£</span> -->
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma col-md-11 date-input-box" name="hpamountoutstanding_2" placeholder="Type amount here">                      
                    </div>                   
                    <!-- <span style="margin:0px 5px;">£</span> -->
                  </td>
                </tr>

                <tr>
                  <td>Monthly Payment</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="hpmonthlypayment_1" class="form-control numcomma" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin: 5px;">p.m.</span> -->
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="hpmonthlypayment_2" class="form-control numcomma" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin: 5px;">p.m.</span> -->
                  </td>
                </tr>

                <tr>
                  <td>A.P.R</td>
                  <td>
                    <div class="input-group">
                      <input type="text" class="form-control" name="hpapr_1" placeholder="Type A.P.R">
                      <div class="input-group-prepend">
                        <div class="input-group-text">%</div>
                      </div>
                    </div>                   
                    <!-- <span style="margin: 5px;">%</span> -->                  
                  </td>
                  <td>
                    <div class="input-group">
                      <input type="text" class="form-control" name="hpapr_2" placeholder="Type A.P.R">
                      <div class="input-group-prepend">
                        <div class="input-group-text">%</div>
                      </div>
                    </div>                   
                    <!-- <span style="margin: 5px;">%</span> -->
                  </td>
                </tr>

                <tr>
                  <td>Is this to be repaid on or before<br/>completion?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="hprepaidHire_1" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="hprepaidHire_1" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="hprepaidHire_2" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="hprepaidHire_2" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>Is this to be consolidated?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="hpconsolidateHire_1" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="hpconsolidateHire_1" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="hpconsolidateHire_2" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="hpconsolidateHire_2" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>
              </tbody>
            </table>
          <?php } ?>

          <!--ADD MORE BUTTON-->
            <div class="hideHp" style="<?php if($pdata != NULL && (in_array( "hp" , $existing1 ) || in_array( "hp" , $existing2 )) ){ echo "display:block;"; } ?>">
              <button id="addHirePurchase" type="button" class="btn btn-primary float-right" style="margin:10px 0px;">Add More</button>
            </div>
          <!--/ADD MORE BUTTON-->

          <!--/TABLE 1 ENDS HERE-->

          <!--TABLE 2 STARTS HERE-->
          
          <table class="table hideHp" style="margin-top: 20px;<?php if($pdata != NULL && (in_array( "hp" , $existing1 ) || in_array( "hp" , $existing2 )) ){ echo "display:table;"; } ?>">
            <thead class="">
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <th scope="col" class="hide-col">Client 2</th>
              </tr>
            </thead>
            <tbody class="table-bordered" style="border:2px solid #000000;">
              <tr>
                <td>Total Monthly HP / Lease Payment to remain</td>
                <td style="font-weight: bold;">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input type="text" name="hptotalmonthly_1" value="<?php if($pdata != NULL){ echo $pdata->hptotalmonthly_1; }  ?>" class="form-control numcomma" style="font-weight: bold;">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                  
                  <span style="margin: 5px;">p.m.</span> -->
                </td>
                <td class="hide-col" style="font-weight: bold;">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input type="text" name="hptotalmonthly_2" value="<?php if($pdata != NULL){ echo $pdata->hptotalmonthly_2; }  ?>" class="form-control numcomma" style="font-weight: bold;">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table><!--/TABLE 2 ENDS HERE-->

          <!--=====/5.3 HIRE PURCHASES / LEASE TABLE ENDS HERE=====-->

          <!--========FORM SUB-SECTION HEADING==========-->
          <h5 class="marTP-30 hideCc" style="<?php if($pdata != NULL && (in_array( "cc" , $existing1 ) || in_array( "cc" , $existing2 )) ){ echo "display:block;"; } ?>">5.4 Credit Card / Store Card / Mail Order</h5>

          <!--=====5.4 CREDIT CARD / STORE CARD / MAIL ORDER TABLE STARTS HERE=====-->
          
          <!--TABLE 1 STARTS HERE-->
          <?php if($pdata != NULL){ $ccData = json_decode($pdata->creditcard, true); $i = 0; ?>
          <?php foreach($ccData as $key => $value){ $i = $i + 2; ?>
          <?php if($i > 2){ ?>
            <div id="odrem_<?php echo $i; ?>" class="close-btn odRemove"><i class="fas fa-times-circle fa-2x"></i></div>
          <?php } ?>
          <table id="odSec_<?php echo $i; ?>" class="table hideCc" style="width:100%!important;<?php if($pdata != NULL && (in_array( "cc" , $existing1 ) || in_array( "cc" , $existing2 )) ){ echo "display:block;"; } ?>">
            <thead class="">
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col"><?php echo $i-1; ?></th>
                <th scope="col"><?php echo $i; ?></th>
              </tr>
            </thead>
            <tbody class="table-bordered">
              <tr>
                <td>Lender / Company</td>
                <td><input type="text" class="form-control" name="cclender_<?php echo $i-1; ?>" value="<?php echo $value["cclender_".($i-1)]; ?>" placeholder="Type Lender / Company"></td>
                <td><input type="text" class="form-control" name="cclender_<?php echo $i; ?>" value="<?php echo $value["cclender_".$i]; ?>" placeholder="Type Lender / Company"></td>
              </tr>

              <tr>
                <td>Borrower(s)</td>
                <?php $c1 = explode(",", $value["ccborrow_".($i-1)]); ?>
                <?php $c2 = explode(",", $value["ccborrow_".$i]); ?>
                <td class="text-center">
                  <center>
                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Joint</label>
                      <input class="form-check-input" <?php if(in_array( "Joint" , $c1 )){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="ccborrow_<?php echo $i-1; ?>[]" value="Joint" id="">
                    </div> / 

                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Client 1</label>
                      <input class="form-check-input" <?php if(in_array( "client_1" , $c1 )){echo "checked";} ?> style="margin-left: -0.15rem;" type="checkbox" name="ccborrow_<?php echo $i-1; ?>[]" value="client_1" id="">
                    </div> / 

                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Client 2</label>
                      <input class="form-check-input" <?php if(in_array( "client_2" , $c1 )){echo "checked";} ?> style="margin-left:-0.15rem;" type="checkbox" name="ccborrow_<?php echo $i-1; ?>[]" value="client_2" id="">
                    </div>
                  </center>
                </td>
                <td class="text-center">
                  <center>
                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Joint</label>
                      <input class="form-check-input" <?php if(in_array( "Joint" , $c2 )){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="ccborrow_<?php echo $i; ?>[]" value="Joint" id="">
                    </div> / 

                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Client 1</label>
                      <input class="form-check-input" <?php if(in_array( "client_1" , $c2 )){echo "checked";} ?> style="margin-left: -0.15rem;" type="checkbox" name="ccborrow_<?php echo $i; ?>[]" value="client_1" id="">
                    </div> / 

                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Client 2</label>
                      <input class="form-check-input" <?php if(in_array( "client_2" , $c2 )){echo "checked";} ?> style="margin-left:-0.15rem;" type="checkbox" name="ccborrow_<?php echo $i; ?>[]" value="client_2" id="">
                    </div>
                  </center>
                </td>
              </tr>

              <tr>
                <td>Credit Limit</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control numcomma" name="cclimit_<?php echo $i-1; ?>" value="<?php echo $value["cclimit_".($i-1)]; ?>" placeholder="Type amount here">
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span> -->
                </td>
                <td>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control numcomma" name="cclimit_<?php echo $i; ?>" value="<?php echo $value["cclimit_".$i]; ?>" placeholder="Type amount here">
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span> -->
                </td>
              </tr>

              <tr>
                <td>Amount Outstanding</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control numcomma" name="ccamountoutstanding_<?php echo $i-1; ?>" value="<?php echo $value["ccamountoutstanding_".($i-1)]; ?>" placeholder="Type amount here">
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span> -->
                </td>
                <td>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control numcomma" name="ccamountoutstanding_<?php echo $i; ?>" value="<?php echo $value["ccamountoutstanding_".$i]; ?>" placeholder="Type amount here">
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span> -->
                </td>
              </tr>

              <tr>
                <td>Do you pay the full amount each<br/>month?</td>
                <td class="text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["ccpayment_".($i-1)]) && $value["ccpayment_".($i-1)] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="ccpayment_<?php echo $i-1; ?>" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["ccpayment_".($i-1)]) && $value["ccpayment_".($i-1)] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="ccpayment_<?php echo $i-1; ?>" value="No" id="">
                    </div>
                  </center>
                </td>
                <td class="text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["ccpayment_".$i]) && $value["ccpayment_".$i] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="ccpayment_<?php echo $i; ?>" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["ccpayment_".$i]) && $value["ccpayment_".$i] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="ccpayment_<?php echo $i; ?>" value="No" id="">
                    </div>
                  </center>
                </td>
              </tr>

              <tr>
                <td>A.P.R</td>
                <td>

                  <div class="input-group">
                    <input type="text" class="form-control" name="ccapr_<?php echo $i-1; ?>" value="<?php echo $value["ccapr_".($i-1)] ?>" placeholder="Type A.P.R">
                    <div class="input-group-prepend">
                      <div class="input-group-text">%</div>
                    </div>
                  </div>
                  
                  <!-- <span style="margin: 5px;">%</span> -->
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control" name="ccapr_<?php echo $i; ?>" value="<?php echo $value["ccapr_".$i] ?>" placeholder="Type A.P.R">
                    <div class="input-group-prepend">
                      <div class="input-group-text">%</div>
                    </div>
                  </div>
                  
                  <!-- <span style="margin: 5px;">%</span> -->

                </td>
              </tr>

              <tr>
                <td>Is this to be repaid on or before<br/>completion?</td>
                <td class="text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["ccrepaidOrder_".($i-1)]) && $value["ccrepaidOrder_".($i-1)] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="ccrepaidOrder_<?php echo $i-1; ?>" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["ccrepaidOrder_".($i-1)]) && $value["ccrepaidOrder_".($i-1)] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="ccrepaidOrder_<?php echo $i-1; ?>" value="No" id="">
                    </div>
                  </center>
                </td>
                <td class="text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["ccrepaidOrder_".$i]) && $value["ccrepaidOrder_".$i] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="ccrepaidOrder_<?php echo $i; ?>" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["ccrepaidOrder_".$i]) && $value["ccrepaidOrder_".$i] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="ccrepaidOrder_<?php echo $i; ?>" value="No" id="">
                    </div>
                  </center>
                </td>
              </tr>

              <tr>
                <td>Is this to be consolidated?</td>
                <td class="text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["ccconsolidateOrder_".($i-1)]) && $value["ccconsolidateOrder_".($i-1)] == "Yes"){echo "checked";} ?>  style="margin-left: 0.25rem;" type="checkbox" name="ccconsolidateOrder_<?php echo $i-1; ?>" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["ccconsolidateOrder_".($i-1)]) && $value["ccconsolidateOrder_".($i-1)] == "No"){echo "checked";} ?>  style="margin-left: 0.25rem;" type="checkbox" name="ccconsolidateOrder_<?php echo $i-1; ?>" value="No" id="">
                    </div>
                  </center>
                </td>
                <td class="text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["ccconsolidateOrder_".$i]) && $value["ccconsolidateOrder_".$i] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="ccconsolidateOrder_<?php echo $i; ?>" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value["ccconsolidateOrder_".$i]) && $value["ccconsolidateOrder_".$i] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="ccconsolidateOrder_<?php echo $i; ?>" value="No" id="">
                    </div>
                  </center>
                </td>
              </tr>

              <tr>
                <td>Balance to Remain</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control numcomma" name="ccbalance_<?php echo $i-1; ?>" value="<?php echo $value["ccbalance_".($i-1)]; ?>" placeholder="Type amount here">
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span> -->
                </td>
                <td>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control numcomma" name="ccbalance_<?php echo $i; ?>" value="<?php echo $value["ccbalance_".$i]; ?>" placeholder="Type amount here">
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span> -->
                  
                </td>
              </tr>
            </tbody>
          </table>
          <?php }}else{ ?>
            <table class="table hideCc" style="<?php if($pdata != NULL && (in_array( "cc" , $existing1 ) || in_array( "cc" , $existing2 )) ){ echo "display:block;"; } ?>">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col">1</th>
                  <th scope="col">2</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td>Lender / Company</td>
                  <td><input type="text" class="form-control" name="cclender_1" placeholder="Type Lender / Company"></td>
                  <td><input type="text" class="form-control" name="cclender_2" placeholder="Type Lender / Company"></td>
                </tr>

                <tr>
                  <td>Borrower(s)</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="ccborrow_1[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="ccborrow_1[]" value="client_1" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="ccborrow_1[]" value="client_2" id="">
                      </div>
                    </center>
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="ccborrow_2[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="ccborrow_2[]" value="client_1" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="ccborrow_2[]" value="client_2" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>Credit Limit</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="cclimit_1" placeholder="Type amount here">
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span> -->
                  </td>
                  <td>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="cclimit_2" placeholder="Type amount here">
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span> -->
                  </td>
                </tr>

                <tr>
                  <td>Amount Outstanding</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="ccamountoutstanding_1" placeholder="Type amount here">
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span> -->
                  </td>
                  <td>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="ccamountoutstanding_2" placeholder="Type amount here">
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span> -->
                  </td>
                </tr>

                <tr>
                  <td>Do you pay the full amount each<br/>month?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccpayment_1" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccpayment_1" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccpayment_2" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccpayment_2" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>A.P.R</td>
                  <td>

                    <div class="input-group">
                      <input type="text" class="form-control" name="ccapr_1" placeholder="Type A.P.R">
                      <div class="input-group-prepend">
                        <div class="input-group-text">%</div>
                      </div>
                    </div>
                    
                    <!-- <span style="margin: 5px;">%</span> -->
                  </td>
                  <td>
                    <div class="input-group">
                      <input type="text" class="form-control" name="ccapr_2" placeholder="Type A.P.R">
                      <div class="input-group-prepend">
                        <div class="input-group-text">%</div>
                      </div>
                    </div>
                    
                    <!-- <span style="margin: 5px;">%</span> -->

                  </td>
                </tr>

                <tr>
                  <td>Is this to be repaid on or before<br/>completion?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccrepaidOrder_1" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccrepaidOrder_1" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccrepaidOrder_2" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccrepaidOrder_2" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>Is this to be consolidated?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccconsolidateOrder_1" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccconsolidateOrder_1" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccconsolidateOrder_2" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccconsolidateOrder_2" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>Balance to Remain</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="ccbalance_1" placeholder="Type amount here">
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span> -->
                  </td>
                  <td>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="ccbalance_2" placeholder="Type amount here">
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span> -->
                    
                  </td>
                </tr>
              </tbody>
            </table>
          <?php } ?>

          <!--ADD MORE BUTTON-->
            <div class="hideCc" style="<?php if($pdata != NULL && (in_array( "cc" , $existing1 ) || in_array( "cc" , $existing2 )) ){ echo "display:block;"; } ?>">
              <button id="addOrder" type="button" class="btn btn-primary float-right" style="margin:10px 0px;">Add More</button>
            </div>
          <!--/ADD MORE BUTTON-->

          <!--TABLE 1 ENDS HERE-->

          <!--TABLE 2 STARTS HERE-->
          <table class="table hideCc" style="margin-top: 20px;<?php if($pdata != NULL && (in_array( "cc" , $existing1 ) || in_array( "cc" , $existing2 )) ){ echo "display:block;"; } ?>">
            <thead class="">
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <th scope="col" class="hide-col">Client 2</th>
              </tr>
            </thead>
            <tbody class="table-bordered" style="border:2px solid #000000;">
              <tr>
                <td>Total Monthly Payment to<br/>remain</td>
                <td style="font-weight: bold;">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input type="text" class="form-control numcomma" name="cctotal_1" value="<?php if($pdata!= NULL){ echo $pdata->cctotal_1; } ?>" placeholder="Type amount here" style="font-weight: bold;">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                  
                  <span style="margin: 5px;">p.m.</span> -->
                </td>
                <td class="hide-col" style="font-weight: bold;">

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input type="text" class="form-control numcomma" name="cctotal_2" value="<?php if($pdata!= NULL){ echo $pdata->cctotal_2; } ?>" placeholder="Type amount here" style="font-weight: bold;">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                  
                  <span style="margin: 5px;">p.m.</span> -->
                </td>
              </tr>
            </tbody>
          </table>

          <!--TABLE 2 ENDS HERE-->

          <!--=====/5.4 CREDIT CARD / STORE CARD / MAIL ORDER TABLE ENDS HERE=====-->

          <!--========FORM SUB-SECTION HEADING==========-->
          <h5 class="marTP-30 hideOd" style="<?php if($pdata != NULL && (in_array( "od" , $existing1 ) || in_array( "od" , $existing2 )) ){ echo "display:block;"; } ?>">5.5 Overdraft</h5>

          <!--=====5.5 OVERDRAFT TABLE STARTS HERE=====-->
          
          <!--TABLE 1 STARTS HERE-->
          <?php if($pdata != NULL){ $odData = json_decode($pdata->overdraft, true); $i = 0; ?>
          <?php foreach($odData as $key => $value){ $i = $i + 2; ?>
          <?php if($i > 2){ ?>
            <div id="odrftrem_<?php echo $i; ?>" class="close-btn odrftRemove"><i class="fas fa-times-circle fa-2x"></i></div>
          <?php } ?>
          <table id="odrftSec_<?php echo $i; ?>" class="table hideOd" style="<?php if($pdata != NULL && (in_array( "od" , $existing1 ) || in_array( "od" , $existing2 )) ){ echo "display:table;"; } ?>">
            <thead class="">
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col"><?php echo $i-1; ?></th>
                <th scope="col"><?php echo $i; ?></th>
              </tr>
            </thead>
            <tbody class="table-bordered">
              <tr>
                <td>Lender / Company</td>
                <td><input type="text" class="form-control" name="odlender_<?php echo $i-1; ?>" value="<?php echo $value["odlender_".($i-1)]; ?>" placeholder="Type Lender / Company"></td>
                <td><input type="text" class="form-control" name="odlender_<?php echo $i; ?>" value="<?php echo $value["odlender_".$i]; ?>" placeholder="Type Lender / Company"></td>
              </tr>

              <tr>
                <td>Borrower(s)</td>
                <?php $od1 = explode(",", $value["odborrow_".($i-1)]); ?>
                <?php $od2 = explode(",", $value["odborrow_".$i]); ?>
                <td class="text-center">
                  <center>
                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Joint</label>
                      <input class="form-check-input" <?php if(in_array( "Joint" , $od1 )){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="odborrow_<?php echo $i-1; ?>[]" value="Joint" id="">
                    </div> / 

                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Client 1</label>
                      <input class="form-check-input" <?php if(in_array( "client_1" , $od1 )){echo "checked";} ?> style="margin-left: -0.15rem;" type="checkbox" name="odborrow_<?php echo $i-1; ?>[]" value="client_1" id="">
                    </div> / 

                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Client 2</label>
                      <input class="form-check-input" <?php if(in_array( "client_2" , $od1 )){echo "checked";} ?> style="margin-left:-0.15rem;" type="checkbox" name="odborrow_<?php echo $i-1; ?>[]" value="client_2" id="">
                    </div>
                  </center>
                </td>
                <td class="text-center">
                  <center>
                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Joint</label>
                      <input class="form-check-input" <?php if(in_array( "Joint" , $od2 )){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="odborrow_<?php echo $i; ?>[]" value="Joint" id="">
                    </div> / 

                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Client 1</label>
                      <input class="form-check-input" <?php if(in_array( "client_1" , $od2 )){echo "checked";} ?> style="margin-left: -0.15rem;" type="checkbox" name="odborrow_<?php echo $i; ?>[]" value="client_1" id="">
                    </div> / 

                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Client 2</label>
                      <input class="form-check-input" <?php if(in_array( "client_2" , $od2 )){echo "checked";} ?> style="margin-left:-0.15rem;" type="checkbox" name="odborrow_<?php echo $i; ?>[]" value="client_2" id="">
                    </div>
                  </center>
                </td>
              </tr>

              <tr>
                <td>Overdraft Limit</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control numcomma" name="odlimit_<?php echo $i-1; ?>" value="<?php echo $value["odlimit_".($i-1)]; ?>" placeholder="Type amount here">             
                  </div>
                  <!-- <span style="margin:0px 5px;">£</span> -->
                </td>
                <td>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control numcomma" name="odlimit_<?php echo $i; ?>" value="<?php echo $value["odlimit_".$i]; ?>" placeholder="Type amount here">             
                  </div>
                  <!-- <span style="margin:0px 5px;">£</span> -->
                </td>
              </tr>

              <tr>
                <td>Current Balance</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control numcomma" name="odcurrentbalance_<?php echo $i-1; ?>" value="<?php echo $value["odcurrentbalance_".($i-1)]; ?>" placeholder="Type amount here">             
                  </div>
                  <!-- <span style="margin:0px 5px;">£</span> -->
                </td>
                <td>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control numcomma" name="odcurrentbalance_<?php echo $i; ?>" value="<?php echo $value["odcurrentbalance_".$i]; ?>" placeholder="Type amount here">             
                  </div>
                  <!-- <span style="margin:0px 5px;">£</span> -->
                </td>
              </tr>

              <tr>
                <td>Maximum amount overdrawn in<br/>last 3 months</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control numcomma" name="odamountdrawn_<?php echo $i-1; ?>" value="<?php echo $value["odamountdrawn_".($i-1)]; ?>" placeholder="Type amount here">             
                  </div>
                  <!-- <span style="margin:0px 5px;">£</span> -->
                </td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control numcomma" name="odamountdrawn_<?php echo $i; ?>" value="<?php echo $value["odamountdrawn_".$i]; ?>" placeholder="Type amount here">             
                  </div>
                  <!-- <span style="margin:0px 5px;">£</span> -->
                  
                </td>
              </tr>

              <tr>
                <td>A.P.R</td>
                <td>
                  <div class="input-group">                      
                    <input type="text" class="form-control text-right" name="odapr_<?php echo $i-1; ?>" value="<?php echo $value["odapr_".($i-1)]; ?>" placeholder="Type A.P.R">
                    <div class="input-group-prepend">
                      <div class="input-group-text">%</div>
                    </div>
                  </div>                    
                  <!-- <span style="margin: 5px;">%</span> -->
                </td>
                <td>

                  <div class="input-group">                      
                    <input type="text" class="form-control text-right" name="odapr_<?php echo $i; ?>" value="<?php echo $value["odapr_".$i]; ?>" placeholder="Type A.P.R">
                    <div class="input-group-prepend">
                      <div class="input-group-text">%</div>
                    </div>
                  </div>                    
                  <!-- <span style="margin: 5px;">%</span> -->
                </td>
              </tr>

              <tr>
                <td>Monthly Overdraft Fee</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control numcomma" name="odmonthlyfee_<?php echo $i-1; ?>" value="<?php echo $value["odmonthlyfee_".($i-1)]; ?>" placeholder="Type amount here">
                    <div class="input-group-prepend">
                      <div class="input-group-text">p.m.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                  
                  <span style="margin:5px;">p.m.</span> -->
                </td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control numcomma" name="odmonthlyfee_<?php echo $i; ?>" value="<?php echo $value["odmonthlyfee_".$i]; ?>" placeholder="Type amount here">
                    <div class="input-group-prepend">
                      <div class="input-group-text">p.m.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                  
                  <span style="margin: 5px;">p.m.</span> -->
                </td>
              </tr>

              <tr>
                <td>Is this to be repaid on or before<br/>completion?</td>
                <td class="text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value['odrepaidOverdraft_'.($i-1)]) && $value['odrepaidOverdraft_'.($i-1)]=="Yes"){echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="odrepaidOverdraft_<?php echo $i-1; ?>" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value['odrepaidOverdraft_'.($i-1)]) && $value['odrepaidOverdraft_'.($i-1)]=="No"){echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="odrepaidOverdraft_<?php echo $i-1; ?>" value="No" id="">
                    </div>
                  </center>
                </td>

                <td class="text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value['odrepaidOverdraft_'.$i]) && $value['odrepaidOverdraft_'.$i]=="Yes"){echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="odrepaidOverdraft_<?php echo $i; ?>" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value['odrepaidOverdraft_'.$i]) && $value['odrepaidOverdraft_'.$i]=="No"){echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="odrepaidOverdraft_<?php echo $i; ?>" value="No" id="">
                    </div>
                  </center>
                </td>

              </tr>

              <tr>
                <td>Balance to Remain</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control numcomma" name="odbalance_<?php echo $i-1; ?>" value="<?php echo $value["odbalance_".($i-1)]; ?>" placeholder="Type amount here">
                    
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span> -->
                </td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control numcomma" name="odbalance_<?php echo $i; ?>" value="<?php echo $value["odbalance_".$i]; ?>" placeholder="Type amount here">                    
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span> -->
                  
                </td>
              </tr>

              <tr>
                <td>Is this to be consolidated?</td>
                <td class="text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value['odconsolidateOverdraft_'.($i-1)]) && $value['odconsolidateOverdraft_'.($i-1)]=="Yes"){echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="odconsolidateOverdraft_<?php echo $i-1; ?>" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value['odconsolidateOverdraft_'.($i-1)]) && $value['odconsolidateOverdraft_'.($i-1)]=="No"){echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="odconsolidateOverdraft_<?php echo $i-1; ?>" value="No" id="">
                    </div>
                  </center>
                </td>

                <td class="text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value['odconsolidateOverdraft_'.$i]) && $value['odconsolidateOverdraft_'.$i]=="Yes"){echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="odconsolidateOverdraft_<?php echo $i; ?>" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if(isset($value['odconsolidateOverdraft_'.$i]) && $value['odconsolidateOverdraft_'.$i]=="No"){echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="odconsolidateOverdraft_<?php echo $i; ?>" value="No" id="">
                    </div>
                  </center>
                </td>
              </tr>
            </tbody>
          </table>
          <?php }}else{ ?>
            <table class="table hideOd" style="<?php if($pdata != NULL && (in_array( "od" , $existing1 ) || in_array( "od" , $existing2 )) ){ echo "display:table;"; } ?>">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col">1</th>
                  <th scope="col">2</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td>Lender / Company</td>
                  <td><input type="text" class="form-control" name="odlender_1" placeholder="Type Lender / Company"></td>
                  <td><input type="text" class="form-control" name="odlender_2" placeholder="Type Lender / Company"></td>
                </tr>

                <tr>
                  <td>Borrower(s)</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="odborrow_1[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="odborrow_1[]" value="client_1" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="odborrow_1[]" value="client_2" id="">
                      </div>
                    </center>
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="odborrow_2[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="odborrow_2[]" value="client_1" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="odborrow_2[]" value="client_2" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>Overdraft Limit</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="odlimit_1" placeholder="Type amount here">             
                    </div>
                    <!-- <span style="margin:0px 5px;">£</span> -->
                  </td>
                  <td>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="odlimit_2" placeholder="Type amount here">             
                    </div>
                    <!-- <span style="margin:0px 5px;">£</span> -->
                  </td>
                </tr>

                <tr>
                  <td>Current Balance</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="odcurrentbalance_1" placeholder="Type amount here">             
                    </div> 
                    <!-- <span style="margin:0px 5px;">£</span> -->
                  </td>
                  <td>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="odcurrentbalance_2" placeholder="Type amount here">             
                    </div>
                    <!-- <span style="margin:0px 5px;">£</span> -->
                  </td>
                </tr>

                <tr>
                  <td>Maximum amount overdrawn in<br/>last 3 months</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="odamountdrawn_1" placeholder="Type amount here">             
                    </div>
                    <!-- <span style="margin:0px 5px;">£</span> -->
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="odamountdrawn_2" placeholder="Type amount here">             
                    </div>
                    <!-- <span style="margin:0px 5px;">£</span> -->
                    
                  </td>
                </tr>

                <tr>
                  <td>A.P.R</td>
                  <td>
                    <div class="input-group">                      
                      <input type="text" class="form-control text-right" name="odapr_1" placeholder="Type A.P.R">
                      <div class="input-group-prepend">
                        <div class="input-group-text">%</div>
                      </div>
                    </div>                    
                    <!-- <span style="margin: 5px;">%</span> -->
                  </td>
                  <td>

                    <div class="input-group">                      
                      <input type="text" class="form-control text-right" name="odapr_2" placeholder="Type A.P.R">
                      <div class="input-group-prepend">
                        <div class="input-group-text">%</div>
                      </div>
                    </div>                    
                    <!-- <span style="margin: 5px;">%</span> -->
                  </td>
                </tr>

                <tr>
                  <td>Monthly Overdraft Fee</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="odmonthlyfee_1" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin:5px;">p.m.</span> -->
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="odmonthlyfee_2" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin: 5px;">p.m.</span> -->
                  </td>
                </tr>

                <tr>
                  <td>Is this to be repaid on or before<br/>completion?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="odrepaidOverdraft_1" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="odrepaidOverdraft_1" value="No" id="">
                      </div>
                    </center>
                  </td>

                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="odrepaidOverdraft_2" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="odrepaidOverdraft_2" value="No" id="">
                      </div>
                    </center>
                  </td>

                </tr>

                <tr>
                  <td>Balance to Remain</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="odbalance_1" placeholder="Type amount here">
                      
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span> -->
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="odbalance_2" placeholder="Type amount here">                    
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span> -->
                    
                  </td>
                </tr>

                <tr>
                  <td>Is this to be consolidated?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="odconsolidateOverdraft_1" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="odconsolidateOverdraft_1" value="No" id="">
                      </div>
                    </center>
                  </td>

                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="odconsolidateOverdraft_2" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="odconsolidateOverdraft_2" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>
              </tbody>
            </table>
          <?php } ?>

          <!--ADD MORE BUTTON-->
            <div class="hideOd" style="<?php if($pdata != NULL && (in_array( "od" , $existing1 ) || in_array( "od" , $existing2 )) ){ echo "display:block;"; } ?>">
              <button id="addOverdraft" type="button" class="btn btn-primary float-right" style="margin:10px 0px;">Add More</button>
            </div>
          <!--/ADD MORE BUTTON-->

          <!--/ TABLE 1 ENDS HERE-->

          <!--TABLE 2 STARTS HERE-->
          <table class="table hideOd" style="margin-top: 20px;<?php if($pdata != NULL && (in_array( "od" , $existing1 ) || in_array( "od" , $existing2 )) ){ echo "display:table;"; } ?>">
            <thead class="">
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <th scope="col" class="hide-col">Client 2</th>
              </tr>
            </thead>
            <tbody class="table-bordered" style="border:2px solid #000000;">
              <tr>
                <td>Total Monthly Overdraft<br/>Payment to remain</td>
                <td style="font-weight: bold;">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input type="text" name="odtotalmonthly_1" value="<?php if($pdata != NULL){echo $pdata->odtotalmonthly_1;} ?>" class="form-control numcomma" placeholder="Type amount here" style="font-weight: bold;">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>                    
                  <span style="margin: 5px;">p.m.</span> -->
                </td>
                <td class="hide-col" style="font-weight: bold;">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input type="text" name="odtotalmonthly_2" value="<?php if($pdata != NULL){echo $pdata->odtotalmonthly_2;} ?>" class="form-control numcomma" placeholder="Type amount here" style="font-weight: bold;">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>                    
                  <span style="margin: 5px;">p.m.</span> -->
                </td>
              </tr>
            </tbody>
          </table><!--/TABLE 2 ENDS HERE-->

          <!--=====/5.5 OVERDRAFT TABLE ENDS HERE=====-->

          <!--========FORM SUB-SECTION HEADING==========-->
          <h5 class="marTP-30 hideSm" style="<?php if($pdata != NULL && (in_array( "sm" , $existing1 ) || in_array( "sm" , $existing2 )) ){ echo "display:block;"; } ?>">5.6 Spousal Maintenance</h5>

          <!--=====5.6 SPOUSAL MAINTENANCE TABLE STARTS HERE=====-->
          <?php if($pdata != NULL){ $smData = json_decode($pdata->spousal, true); $i = 0; ?>
          <?php foreach($smData as $key => $value){ $i = $i + 2; ?>
          <?php if($i > 2){ ?>
            <div id="sprem_<?php echo $i; ?>" class="close-btn spRemove"><i class="fas fa-times-circle fa-2x"></i></div>
          <?php } ?>
          <table id="spSec_<?php echo $i; ?>" class="table hideSm" style="margin-top: 10px;<?php if($pdata != NULL && (in_array( "sm" , $existing1 ) || in_array( "sm" , $existing2 )) ){ echo "display:block;"; } ?>">
            <thead class="">
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <th scope="col" class="hide-col">Client 2</th>
              </tr>
            </thead>
            <tbody class="table-bordered">
              <tr>
                <td>End Date</td>
                <?php $smedate1 = false; $smedate2 = false; 
                  if($value["smenddate_".($i-1)] != ""){
                    $smedate1_data = explode("/", $value["smenddate_".($i-1)]);
                    $smedate1 = true;
                  } 

                  if($value["smenddate_".$i] != ""){
                    $smedate2_data = explode("/", $value["smenddate_".$i]);
                    $smedate2 = true;
                  } 
                ?>
                <td class="text-center">
                  <input id="edate_5_6_<?php echo $i-1; ?>_1" value="<?php echo $smedate1_data[0]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                  <input id="emonth_5_6_<?php echo $i-1; ?>_1" value="<?php echo $smedate1_data[1]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                  <input id="eyear_5_6_<?php echo $i-1; ?>_1" value="<?php echo $smedate1_data[2]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                  <input type="hidden" id="endDate_5_6_<?php echo $i-1; ?>_1" class="selectDate" />
                </td>
                <td class="hide-col text-center">
                  <input id="edate_5_6_<?php echo $i; ?>_1" value="<?php echo $smedate2_data[0]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                  <input id="emonth_5_6_<?php echo $i; ?>_1" type="text" value="<?php echo $smedate2_data[1]; ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                  <input id="eyear_5_6_<?php echo $i; ?>_1" type="text" value="<?php echo $smedate2_data[2]; ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                  <input type="hidden" id="endDate_5_6_<?php echo $i; ?>_1" class="selectDate" />
                </td>
              </tr>
              <tr style="border:2px solid #000000;">
                <td>Amount</td>
                <td style="font-weight: bold;">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                      <input type="text" name="smamount_<?php echo $i-1; ?>" value="<?php echo $value['smamount_'.($i-1)]; ?>" class="form-control numcomma text-right" placeholder="Type amount here" style="font-weight: bold;">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>                   
                  <span style="margin: 5px;">p.m.</span> -->
                </td>
                <td class="hide-col" style="font-weight: bold;">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input type="text" name="smamount_<?php echo $i; ?>" value="<?php echo $value['smamount_'.$i]; ?>" class="form-control numcomma text-right" placeholder="Type amount here" style="font-weight: bold;">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                  
                  <span style="margin:5px;">p.m.</span> -->
                </td>
              </tr>
            </tbody>
          </table>
          <?php }}else{ ?>
            <table class="table hideSm" style="margin-top: 10px;<?php if($pdata != NULL && (in_array( "sm" , $existing1 ) || in_array( "sm" , $existing2 )) ){ echo "display:block;"; } ?>">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col">Client 1</th>
                  <th scope="col" class="hide-col">Client 2</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td>End Date</td>
                  <td class="text-center">
                    <input id="edate_5_6_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="emonth_5_6_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="eyear_5_6_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="endDate_5_6_1_1" class="selectDate" />
                  </td>
                  <td class="hide-col text-center">
                    <input id="edate_5_6_2_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="emonth_5_6_2_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="eyear_5_6_2_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="endDate_5_6_2_1" class="selectDate" />
                  </td>
                </tr>
                <tr style="border:2px solid #000000;">
                  <td>Amount</td>
                  <td style="font-weight: bold;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>
                        <input type="text" name="smamount_1" class="form-control text-right numcomma" placeholder="Type amount here" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>                   
                    <span style="margin: 5px;">p.m.</span> -->
                  </td>
                  <td class="hide-col" style="font-weight: bold;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>
                      <input type="text" name="smamount_2" class="form-control text-right numcomma" placeholder="Type amount here" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin:5px;">p.m.</span> -->
                  </td>
                </tr>
              </tbody>
            </table>
          <?php } ?>

          <!--ADD MORE BUTTON-->
            <div class="hideSm" style="<?php if($pdata != NULL && (in_array( "sm" , $existing1 ) || in_array( "sm" , $existing2 )) ){ echo "display:block;"; } ?>">
              <button id="addSpousal" type="button" class="btn btn-primary float-right" style="margin:10px 0px;">Add More</button>
            </div>
          <!--/ADD MORE BUTTON-->
          <!--=====/5.6 SPOUSAL MAINTENANCE TABLE ENDS HERE=====-->

          <!--========FORM SUB-SECTION HEADING==========-->
          <h5 class="marTP-30 hideCm" style="<?php if($pdata != NULL && (in_array( "cm" , $existing1 ) || in_array( "cm" , $existing2 )) ){ echo "display:block;"; } ?>">5.7 Child Maintenance</h5>

          <!--=====5.7 CHILD MAINTENANCE TABLE STARTS HERE=====-->
          
          <!--TABLE 1 STARTS HERE-->
          <?php if($pdata != NULL){ $cmData = json_decode($pdata->childmaintenance, true); $i = 0; ?>
          <?php foreach($cmData as $key => $value){ $i = $i + 2; ?>
          <?php if($i > 2){ ?>
            <div id="cmrem_<?php echo $i; ?>" class="close-btn cmRemove"><i class="fas fa-times-circle fa-2x"></i></div>
          <?php } ?>
          <table id="cmSec_<?php echo $i; ?>" class="table hideCm" style="margin-top: 10px;<?php if($pdata != NULL && (in_array( "cm" , $existing1 ) || in_array( "cm" , $existing2 )) ){ echo "display:block;"; } ?>">
            <thead class="">
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <th scope="col" class="hide-col">Client 2</th>
              </tr>
            </thead>
            <tbody class="table-bordered">
              <tr>
                <td>Payment</td>
                <td style="font-weight: bold;">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input type="text" name="cmpayment_<?php echo $i-1; ?>" value="<?php echo $value['cmpayment_'.($i-1)]; ?>" class="form-control numcomma text-right" placeholder="Type amount here" style="font-weight: bold;">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>                    
                  <span style="margin:5px;">p.m.</span> -->
                </td>
                <td class="hide-col" style="font-weight: bold;">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input type="text" name="cmpayment_<?php echo $i; ?>" value="<?php echo $value['cmpayment_'.$i]; ?>" class="form-control numcomma text-right" placeholder="Type amount here" style="font-weight: bold;">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                  
                  <span style="margin:5px;">p.m.</span> -->
                </td>
              </tr>

              <tr>
                <td>End Date</td>
                <?php $cmedate1 = false; $cmedate2 = false; 
                  if($value["cmenddate_".($i-1)] != ""){
                    $cmedate1_data = explode("/", $value["cmenddate_".($i-1)]);
                    $cmedate1 = true;
                  } 

                  if($value["cmenddate_".$i] != ""){
                    $cmedate2_data = explode("/", $value["cmenddate_".$i]);
                    $cmedate2 = true;
                  } 
                ?>
                <td class="text-center">
                  <input id="edate_5_7_<?php echo $i-1; ?>_1" value="<?php echo $cmedate1_data[0]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                  <input id="emonth_5_7_<?php echo $i-1; ?>_1" value="<?php echo $cmedate1_data[1]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                  <input id="eyear_5_7_<?php echo $i-1; ?>_1" value="<?php echo $cmedate1_data[2]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                  <input type="hidden" id="endDate_5_7_<?php echo $i-1; ?>_1" class="selectDate" />
                </td>
                <td class="hide-col text-center">
                  <input id="edate_5_7_<?php echo $i; ?>_1" value="<?php echo $cmedate2_data[0]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                  <input id="emonth_5_7_<?php echo $i; ?>_1" value="<?php echo $cmedate2_data[1]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                  <input id="eyear_5_7_<?php echo $i; ?>_1" value="<?php echo $cmedate2_data[2]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                  <input type="hidden" id="endDate_5_7_<?php echo $i; ?>_1" class="selectDate" />
                </td>
              </tr>
            </tbody>
          </table><!--/TABLE 1 ENDS HERE-->
          <?php }}else{ ?>
            <table class="table hideCm" style="margin-top: 10px;<?php if($pdata != NULL && (in_array( "cm" , $existing1 ) || in_array( "cm" , $existing2 )) ){ echo "display:block;"; } ?>">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col">Client 1</th>
                  <th scope="col" class="hide-col">Client 2</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td>Payment</td>
                  <td style="font-weight: bold;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>
                      <input type="text" name="cmpayment_1" class="form-control text-right numcomma" placeholder="Type amount here" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>                    
                    <span style="margin:5px;">p.m.</span> -->
                  </td>
                  <td class="hide-col" style="font-weight: bold;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>
                      <input type="text" name="cmpayment_2" class="form-control text-right numcomma" placeholder="Type amount here" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin:5px;">p.m.</span> -->
                  </td>
                </tr>

                <tr>
                  <td>End Date</td>
                  <td class="text-center">
                    <input id="edate_5_7_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="emonth_5_7_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="eyear_5_7_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="endDate_5_7_1_1" class="selectDate" />
                  </td>
                  <td class="hide-col text-center">
                    <input id="edate_5_7_2_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="emonth_5_7_2_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="eyear_5_7_2_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="endDate_5_7_2_1" class="selectDate" />
                  </td>
                </tr>
              </tbody>
            </table>
          <?php } ?>
          

          <!--ADD MORE BUTTON-->
            <div class="hideCm" style="<?php if($pdata != NULL && (in_array( "cm" , $existing1 ) || in_array( "cm" , $existing2 )) ){ echo "display:block;"; } ?>">
              <button id="addChild" type="button" class="btn btn-primary float-right" style="margin:10px 0px;">Add More</button>
            </div>
          <!--/ADD MORE BUTTON-->

          <table class="table hideCm" style="<?php if($pdata != NULL && (in_array( "cm" , $existing1 ) || in_array( "cm" , $existing2 )) ){ echo "display:table;"; } ?>">
            <tbody class="table-bordered">
              <tr style="border:2px solid #000000;">
                <td>Total Child Maintenance </td>
                <td style="font-weight: bold;">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input type="text" name="cmtotalmaintenance_1" value="<?php if($pdata != NULL){echo $pdata->cmtotalmaintenance_1;} ?>" class="form-control numcomma text-right" placeholder="Type amount here" style="font-weight: bold;">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                  
                  <span style="margin:5px;">p.m.</span> -->
                </td>
                <td class="hide-col" style="font-weight: bold;">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input type="text" name="cmtotalmaintenance_2" value="<?php if($pdata != NULL){echo $pdata->cmtotalmaintenance_2;} ?>" class="form-control numcomma text-right" placeholder="Type amount here" style="font-weight: bold;">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                  
                  <span style="margin:5px;">p.m.</span> -->
                </td>
              </tr>
            </tbody>
          </table><!--/TABLE 2 ENDS HERE-->

          <!--=====/5.7 CHILD MAINTENANCE TABLE STARTS HERE=====-->

          <!--========FORM SUB-SECTION HEADING==========-->
          <h5 class="marTP-30">5.8 Financial Commitment Summary</h5>

          <!--=====5.8 FINANCIAL COMMITMENT SUMMARY TABLE STARTS HERE=====-->
          <table class="table" style="margin-top: 10px;">
            <thead class="">
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <?php if($ftype){ ?><th scope="col" class="hide-col">Client 2</th><?php } ?>
              </tr>
            </thead>
            <tbody class="table-bordered" style="border:2px solid #000000;">
              <tr>
                <td>Total Monthly Summary</td>
                <td style="font-weight: bold;">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input type="text" class="form-control numcomma text-right" name="client_finsummary_1" value="<?php if($pdata != NULL){echo $pdata->client_finsummary_1;} ?>" placeholder="Type amount here" style="font-weight: bold;">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                  
                  <span style="margin:5px;">p.m.</span> -->
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col" style="font-weight: bold;">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input type="text" class="form-control numcomma" name="client_finsummary_2" value="<?php if($pdata != NULL){echo $pdata->client_finsummary_2;} ?>" placeholder="Type amount here" style="font-weight: bold;">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                  
                  <span style="margin:5px;">p.m.</span> -->
                </td>
                <?php } ?>
              </tr>
            </tbody>
          </table>
          <!--=====5.8 FINANCIAL COMMITMENT SUMMARY TABLE STARTS HERE=====-->

          <!--=====ADDITIONAL NOTES TABLE STARTS HERE=====-->
          <table class="table marTP-30">
            <thead class="">
              <tr>
                <th>Additional Notes</th>
              </tr>
            </thead>
            <tbody class="table-bordered">
              <tr>
                <td style="padding-right:0px;"><textarea style="text-transform: inherit!important;" class="form-control" id="" name="client_additionalnotes" rows="6" placeholder="Type additional notes here..."><?php if($pdata != NULL){echo $pdata->client_additionalnotes;} ?></textarea></td>
              </tr>
            </tbody>
          </table>
          <!--=====/ADDITIONAL NOTES TABLE ENDS HERE=====-->

          <!--=====FORM NEXT/SAVE BUTTONS STARTS HERE=====-->
          <div class="" style="text-align: center;margin:20px 0px;">

            <!--Back button-->
            <!-- <a href="<?php echo base_url(); ?>admin/other-income" class="btn btn-primary" style="cursor:pointer;">Back</a> -->
            <button id="saveback" type="button" class="btn btn-primary" style="cursor:pointer;">Save and Back</button>
            <!--/Back button-->

            <button type="submit" class="btn btn-primary" style="cursor:pointer;">Save and Next</button>
            <!-- <button type="submit" class="btn btn-primary" style="cursor:pointer;">Save</button> -->
          </div> 
          <!--=====/FORM NEXT/SAVE BUTTONS ENDS HERE=====-->   
        </form>
        <!--=====/Form Ends Here=====-->
      </div><!--/.col-lg-12-->
    </div><!--/.row-->
  </div>
  <!-- /.container-fluid-->
</div>
<!-- /.content-wrapper-->

<script>

  var plflag = false, hpflag = false, ccflag = false, odflag = false, smflag = false, cmflag = false, plCnt = 0, hpCnt = 0, ccCnt = 0, odCnt = 0, smCnt = 0, cmCnt = 0;

  <?php if($pdata != NULL && (in_array( "pl" , $existing1 ) || in_array( "pl" , $existing2 )) ){ ?>
    plflag = true;
    plCnt++;
  <?php } ?>

  <?php if($pdata != NULL && (in_array( "hp" , $existing1 ) || in_array( "hp" , $existing2 )) ){ ?>
    hpflag = true;
    hpCnt++;
  <?php } ?>

  <?php if($pdata != NULL && (in_array( "cc" , $existing1 ) || in_array( "cc" , $existing2 )) ){ ?>
    ccflag = true;
    ccCnt++;
  <?php } ?>

  <?php if($pdata != NULL && (in_array( "od" , $existing1 ) || in_array( "od" , $existing2 )) ){ ?>
    odflag = true;
    odCnt++;
  <?php } ?>

  <?php if($pdata != NULL && (in_array( "sm" , $existing1 ) || in_array( "sm" , $existing2 )) ){ ?>
    smflag = true;
    smCnt++;
  <?php } ?>

  <?php if($pdata != NULL && (in_array( "cm" , $existing1 ) || in_array( "cm" , $existing2 )) ){ ?>
    cmflag = true;
    cmCnt++;
  <?php } ?>

  $('.existingstatus').on('change', function(){

    var name = $(this).attr('attr-name');

    //personal loan
    if($(this).prop('checked') && name == "pl"){
      plflag = true;
      plCnt++;
    }
    else if(!$(this).prop('checked') && name == "pl"){
      plflag = false;
      plCnt--;
    }

    //Hire Purchase
    if($(this).prop('checked') && name == "hp"){
      hpflag = true;
      hpCnt++;
    }
    else if(!$(this).prop('checked') && name == "hp"){
      hpflag = false;
      hpCnt--;
    }

    //Credit Card
    if($(this).prop('checked') && name == "cc"){
      ccflag = true;
      ccCnt++;
    }
    else if(!$(this).prop('checked') && name == "cc"){
      ccflag = false;
      ccCnt--;
    }

    //Overdraft
    if($(this).prop('checked') && name == "od"){
      odflag = true;
      odCnt++;
    }
    else if(!$(this).prop('checked') && name == "od"){
      odflag = false;
      odCnt--;
    }

    //Spousal Maintenance
    if($(this).prop('checked') && name == "sm"){
      smflag = true;
      smCnt++;
    }
    else if(!$(this).prop('checked') && name == "sm"){
      smflag = false;
      smCnt--;
    }

    //Child Maintenance
    if($(this).prop('checked') && name == "cm"){
      cmflag = true;
      cmCnt++;
    }
    else if(!$(this).prop('checked') && name == "cm"){
      cmflag = false;
      cmCnt--;
    }

    if(plflag && (plCnt > 0)){
      $('.hidePl').show();
    }
    else if(!plflag && (plCnt == 0)){
      $('.hidePl').hide();
    }

    if(hpflag && (hpCnt > 0)){
      $('.hideHp').show();
    }
    else if(!hpflag && (hpCnt == 0)){
      $('.hideHp').hide();
    }

    if(ccflag && (ccCnt > 0)){
      $('.hideCc').show();
    }
    else if(!ccflag && (ccCnt == 0)){
      $('.hideCc').hide();
    }

    if(odflag && (odCnt > 0)){
      $('.hideOd').show();
    }
    else if(!odflag && (odCnt == 0)){
      $('.hideOd').hide();
    }

    if(smflag && (smCnt > 0)){
      $('.hideSm').show();
    }
    else if(!smflag && (smCnt == 0)){
      $('.hideSm').hide();
    }

    if(cmflag && (cmCnt > 0)){
      $('.hideCm').show();
    }
    else if(!cmflag && (cmCnt == 0)){
      $('.hideCm').hide();
    }

  });

  function checkSelection(){
    $('.checkSelection').on('change', function() {
      $('input[name="' + this.name + '"]').not(this).prop('checked', false);
    });
  }

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
        if(dtSection[0]=="startDate"){
          $('#sdate_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[2]);
          $('#smonth_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[1]);
          $('#syear_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[0]);
        }
        else if(dtSection[0]=="endDate"){
          var dt1 = $('#sdate_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val();
          var mt1 = $('#smonth_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val();
          var yr1 = $('#syear_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val();

          var sDate = yr1+"-"+mt1+"-"+dt1;

          if(new Date(dateText) < new Date(sDate)){
            alert("Your enter date is incorrect. Please enter correct date.");
          }
          else{
            $('#edate_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[2]);
            $('#emonth_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[1]);
            $('#eyear_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[0]);
          }
          
        }
        
      }
    });
  }

  checkSelection();
  selectDate();

  //To remove section
  $('.plRemove').unbind().click(function(){

    var addId = $(this).attr('id').split('_');
    plCount = plCount - 2;
    $('#plSec_'+addId[1]).remove();
    $(this).remove();
  });
  $('.hpRemove').unbind().click(function(){

    var addId = $(this).attr('id').split('_');
    plCount = plCount - 2;
    $('#hpSec_'+addId[1]).remove();
    $(this).remove();
  });
  $('.odRemove').unbind().click(function(){

    var addId = $(this).attr('id').split('_');
    odCount = odCount - 2;
    $('#odSec_'+addId[1]).remove();
    $(this).remove();

  });
  $('.spRemove').unbind().click(function(){

    var addId = $(this).attr('id').split('_');
    spCount = spCount - 2;
    $('#spSec_'+addId[1]).remove();
    $(this).remove();

  });

  $('.cmRemove').unbind().click(function(){

    var addId = $(this).attr('id').split('_');
    cmCount = cmCount - 2;
    $('#cmSec_'+addId[1]).remove();
    $(this).remove();

  });

  $('.odrftRemove').unbind().click(function(){

    var addId = $(this).attr('id').split('_');
    odrftCount = odrftCount - 2;
    $('#odrftSec_'+addId[1]).remove();
    $(this).remove();

  });
  

  var plCount = <?php if($pdata != NULL){ echo sizeof($pLoan)*2; }else{echo "2";} ?>, hpCount = <?php if($pdata != NULL){ echo sizeof($pHire)*2; }else{echo "2";} ?>, odCount = <?php if($pdata != NULL){ echo sizeof($ccData)*2; }else{echo "2";} ?>, spCount = <?php if($pdata != NULL){ echo sizeof($smData)*2; }else{echo "2";} ?>, cmCount = <?php if($pdata != NULL){ echo sizeof($cmData)*2; }else{echo "2";} ?>, odrftCount = <?php if($pdata != NULL){ echo sizeof($odData)*2; }else{echo "2";} ?>;
  $('#addPersonalLoan').click(function(){
    var pLInc = "";

    if(plCount < 6){

      plCount = plCount + 2;

      pLInc += '<div id="plrem_'+plCount+'" class="close-btn plRemove"><i class="fas fa-times-circle fa-2x"></i></div><table id="plSec_'+plCount+'" class="table hidePl" style="margin-bottom:20px;"><thead class=""><tr><th scope="col" style="border:0px;background-color:transparent;"></th>';
      pLInc += '<th scope="col">'+(plCount - 1)+'</th><th scope="col">'+plCount+'</th></tr></thead><tbody class="table-bordered"><tr><td>Lender / Company</td>';
      pLInc += '<td><input type="text" class="form-control" name="pllender_'+(plCount - 1)+'" placeholder="Type Lender / Company"></td>';
      pLInc += '<td><input type="text" class="form-control" name="pllender_'+plCount+'" placeholder="Type Lender / Company"></td></tr>';
      pLInc += '<tr><td>Borrower(s)</td><td class="text-center"><center><div class="col-md-3 date-input-box" style="padding: 0;">';
      pLInc += '<label class="form-check-label" for="">Joint</label>';
      pLInc += '<input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="plborrow_'+(plCount - 1)+'[]" value="Joint" id="">';
      pLInc += '</div> / <div class="col-md-3 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Client 1</label>';
      pLInc += '<input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="plborrow_'+(plCount - 1)+'[]" value="client_1" id=""></div> /';
      pLInc += '<div class="col-md-3 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Client 2</label>';
      pLInc += '<input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="plborrow_'+(plCount - 1)+'[]" value="client_2" id="">';
      pLInc += '</div></center></td><td class="text-center"><center><div class="col-md-3 date-input-box" style="padding: 0;">';
      pLInc += '<label class="form-check-label" for="">Joint</label><input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="plborrow_'+plCount+'[]" value="Joint" id="">';
      pLInc += '</div> /<div class="col-md-3 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Client 1</label>';
      pLInc += '<input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="plborrow_'+plCount+'[]" value="client_1" id="">';
      pLInc += '</div> / <div class="col-md-3 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Client 2</label>';
      pLInc += '<input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="plborrow_'+plCount+'[]" value="client_2" id=""></div>';
      pLInc += '</center></td></tr><tr><td>Purpose</td><td><input type="text" class="form-control" name="plpurpose_'+(plCount - 1)+'" placeholder="Type Purpose"></td>';
      pLInc += '<td><input type="text" class="form-control" name="plpurpose_'+plCount+'"  placeholder="Type Purpose"></td></tr><tr><td>Start Date</td><td class="text-center">';
      pLInc += '<input id="sdate_5_2_'+(plCount - 1)+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / ';
      pLInc += '<input id="smonth_5_2_'+(plCount - 1)+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / ';
      pLInc += '<input id="syear_5_2_'+(plCount - 1)+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year"> ';
      pLInc += '<input type="hidden" id="startDate_5_2_'+(plCount - 1)+'_1" class="selectDate" /></td><td class="text-center">';
      pLInc += '<input id="sdate_5_2_'+plCount+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / ';
      pLInc += '<input id="smonth_5_2_'+plCount+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / ';
      pLInc += '<input id="syear_5_2_'+plCount+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">';
      pLInc += '<input type="hidden" id="startDate_5_2_'+plCount+'_1" class="selectDate" />';
      pLInc += '</td></tr><tr><td>End Date</td><td class="text-center">';
      pLInc += '<input id="edate_5_2_'+(plCount - 1)+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / ';
      pLInc += '<input id="emonth_5_2_'+(plCount - 1)+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / ';
      pLInc += '<input id="eyear_5_2_'+(plCount - 1)+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">';
      pLInc += '<input type="hidden" id="endDate_5_2_'+(plCount - 1)+'_1" class="selectDate" /></td>';
      pLInc += '<td class="text-center"><input id="edate_5_2_'+plCount+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / ';
      pLInc += '<input id="emonth_5_2_'+plCount+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / ';
      pLInc += '<input id="eyear_5_2_'+plCount+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">';
      pLInc += '<input type="hidden" id="endDate_5_2_'+plCount+'_1" class="selectDate" /></td></tr><tr><td>Original Loan</td><td>';
      pLInc += '<div class="input-group"><div class="input-group-prepend"><div class="input-group-text">£</div></div>';
      pLInc += '<input type="text" class="form-control numcomma" name="ploriginal_'+(plCount - 1)+'" placeholder="Type amount here"></div></td>';
      pLInc += '<td><div class="input-group"><div class="input-group-prepend"><div class="input-group-text">£</div>';
      pLInc += '</div><input type="text" class="form-control numcomma" name="ploriginal_'+plCount+'" placeholder="Type amount here"></div></td></tr>';
      pLInc += '<tr><td>Amount Outstanding</td><td><div class="input-group"><div class="input-group-prepend">';
      pLInc += '<div class="input-group-text">£</div></div><input type="text" name="plamountoutstanding_'+(plCount - 1)+'" class="form-control numcomma" placeholder="Type amount here">';
      pLInc += '</div></td><td><div class="input-group"><div class="input-group-prepend"><div class="input-group-text">£</div>';
      pLInc += '</div><input type="text" class="form-control numcomma" name="plamountoutstanding_'+plCount+'" placeholder="Type amount here"></div></td></tr>';
      pLInc += '<tr><td>Monthly Payment</td><td><div class="input-group"><div class="input-group-prepend">';
      pLInc += '<div class="input-group-text">£</div></div><input type="text" name="plmonthlypayment_'+(plCount - 1)+'" class="form-control numcomma" placeholder="Type amount here">';
      pLInc += '<div class="input-group-prepend"><div class="input-group-text">p.m.</div></div></div></td>';
      pLInc += '<td><div class="input-group"><div class="input-group-prepend"><div class="input-group-text">£</div>';
      pLInc += '</div><input type="text" name="plmonthlypayment_'+plCount+'" class="form-control numcomma" placeholder="Type amount here"><div class="input-group-prepend">';
      pLInc += '<div class="input-group-text">p.m.</div></div></div></td></tr><tr><td>A.P.R</td><td><div class="input-group">';
      pLInc += '<input type="text" name="plapr_'+(plCount - 1)+'" class="form-control" placeholder="Type A.P.R"><div class="input-group-prepend">';
      pLInc += '<div class="input-group-text">%</div></div></div></td><td><div class="input-group"><input type="text" name="plapr_'+plCount+'" class="form-control " placeholder="Type A.P.R">';
      pLInc += '<div class="input-group-prepend"><div class="input-group-text">%</div></div></div></td></tr><tr>';
      pLInc += '<td>Is this to be repaid on or before<br/>completion?</td><td class="text-center"><center>';
      pLInc += '<div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Yes</label>';
      pLInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="plrepaidPersonal_'+(plCount - 1)+'" value="Yes" id="">';
      pLInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      pLInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="plrepaidPersonal_'+(plCount - 1)+'" value="No" id="">';
      pLInc += '</div></center></td><td class="text-center"><center><div class="col-md-2 date-input-box" style="padding: 0;">';
      pLInc += '<label class="form-check-label" for="">Yes</label>';
      pLInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="plrepaidPersonal_'+plCount+'" value="Yes" id="">';
      pLInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      pLInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="plrepaidPersonal_'+plCount+'" value="No" id="">';
      pLInc += '</div></center></td></tr><tr><td>Is this to be consolidated?</td><td class="text-center"><center>';
      pLInc += '<div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Yes</label>';
      pLInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="plconsolidatePersonal_'+(plCount - 1)+'" value="Yes" id="">';
      pLInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      pLInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="plconsolidatePersonal_'+(plCount - 1)+'" value="No" id="">';
      pLInc += '</div></center></td><td class="text-center"><center><div class="col-md-2 date-input-box" style="padding: 0;">';
      pLInc += '<label class="form-check-label" for="">Yes</label>';
      pLInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="plconsolidatePersonal_'+plCount+'" value="Yes" id="">';
      pLInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      pLInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="plconsolidatePersonal_'+plCount+'" value="No" id="">';
      pLInc += '</div></center></td></tr></tbody></table>';

      $(pLInc).insertBefore('#addPersonalLoan').parent();

      //To remove section
      $('.plRemove').unbind().click(function(){

        var addId = $(this).attr('id').split('_');
        plCount = plCount - 2;
        $('#plSec_'+addId[1]).remove();
        $(this).remove();
      });

      $('.numcomma').keyup(function(){
        $(this).val(function(index, value) {
            value = value.replace(/,/g,'');
            return numberWithCommas(value);
        });
      });

      if(plflag && (plCnt > 0)){
        $('.hidePl').show();
      }
      else if(!plflag && (plCnt == 0)){
        $('.hidePl').hide();
      }

      checkSelection();
      selectDate();

    }

  });

  //Hire Purchase Add
  $('#addHirePurchase').click(function(){

    var pLInc = "";

    if(hpCount < 6){

      hpCount = hpCount + 2;

      pLInc += '<div id="hprem_'+hpCount+'" class="close-btn hpRemove"><i class="fas fa-times-circle fa-2x"></i></div><table id="hpSec_'+hpCount+'" class="table hideHp" style="margin-bottom:20px;"><thead class=""><tr><th scope="col" style="border:0px;background-color:transparent;"></th>';
      pLInc += '<th scope="col">'+(hpCount - 1)+'</th><th scope="col">'+hpCount+'</th></tr></thead><tbody class="table-bordered"><tr><td>Lender / Company</td>';
      pLInc += '<td><input type="text" name="hplender_'+(hpCount - 1)+'" class="form-control" placeholder="Type Lender / Company"></td>';
      pLInc += '<td><input type="text" name="hplender_'+hpCount+'" class="form-control" placeholder="Type Lender / Company"></td></tr>';
      pLInc += '<tr><td>Borrower(s)</td><td class="text-center"><center><div class="col-md-3 date-input-box" style="padding: 0;">';
      pLInc += '<label class="form-check-label" for="">Joint</label>';
      pLInc += '<input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="hpborrow_'+(hpCount - 1)+'[]" value="Joint" id="">';
      pLInc += '</div> / <div class="col-md-3 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Client 1</label>';
      pLInc += '<input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="hpborrow_'+(hpCount - 1)+'[]" value="client_1" id=""></div> /';
      pLInc += '<div class="col-md-3 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Client 2</label>';
      pLInc += '<input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="hpborrow_'+(hpCount - 1)+'[]" value="client_2" id="">';
      pLInc += '</div></center></td><td class="text-center"><center><div class="col-md-3 date-input-box" style="padding: 0;">';
      pLInc += '<label class="form-check-label" for="">Joint</label><input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="hpborrow_'+hpCount+'[]" value="Joint" id="">';
      pLInc += '</div> /<div class="col-md-3 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Client 1</label>';
      pLInc += '<input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="hpborrow_'+hpCount+'[]" value="client_1" id="">';
      pLInc += '</div> / <div class="col-md-3 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Client 2</label>';
      pLInc += '<input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="hpborrow_'+hpCount+'[]" value="client_2" id=""></div>';
      pLInc += '</center></td></tr><tr><td>Purpose</td><td><input type="text" class="form-control" name="hppurpose_'+(hpCount - 1)+'" placeholder="Type Purpose"></td>';
      pLInc += '<td><input type="text" class="form-control" name="hppurpose_'+hpCount+'" placeholder="Type Purpose"></td></tr><tr><td>Start Date</td><td class="text-center">';
      pLInc += '<input id="sdate_5_3_'+(hpCount - 1)+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / ';
      pLInc += '<input id="smonth_5_3_'+(hpCount - 1)+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / ';
      pLInc += '<input id="syear_5_3_'+(hpCount - 1)+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year"> ';
      pLInc += '<input type="hidden" id="startDate_5_3_'+(hpCount - 1)+'_1" class="selectDate" /></td><td class="text-center">';
      pLInc += '<input id="sdate_5_3_'+hpCount+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / ';
      pLInc += '<input id="smonth_5_3_'+hpCount+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / ';
      pLInc += '<input id="syear_5_3_'+hpCount+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">';
      pLInc += '<input type="hidden" id="startDate_5_3_'+hpCount+'_1" class="selectDate" />';
      pLInc += '</td></tr><tr><td>End Date</td><td class="text-center">';
      pLInc += '<input id="edate_5_3_'+(hpCount - 1)+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / ';
      pLInc += '<input id="emonth_5_3_'+(hpCount - 1)+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / ';
      pLInc += '<input id="eyear_5_3_'+(hpCount - 1)+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">';
      pLInc += '<input type="hidden" id="endDate_5_3_'+(hpCount - 1)+'_1" class="selectDate" /></td>';
      pLInc += '<td class="text-center"><input id="edate_5_3_'+hpCount+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / ';
      pLInc += '<input id="emonth_5_3_'+hpCount+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / ';
      pLInc += '<input id="eyear_5_3_'+hpCount+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">';
      pLInc += '<input type="hidden" id="endDate_5_3_'+hpCount+'_1" class="selectDate" /></td></tr><tr><td>Original Loan</td><td>';
      pLInc += '<div class="input-group"><div class="input-group-prepend"><div class="input-group-text">£</div></div>';
      pLInc += '<input type="text" class="form-control numcomma" name="hporiginal_'+(hpCount - 1)+'" placeholder="Type amount here"></div></td>';
      pLInc += '<td><div class="input-group"><div class="input-group-prepend"><div class="input-group-text">£</div>';
      pLInc += '</div><input type="text" class="form-control numcomma" name="hporiginal_'+hpCount+'" placeholder="Type amount here"></div></td></tr>';
      pLInc += '<tr><td>Amount Outstanding</td><td><div class="input-group"><div class="input-group-prepend">';
      pLInc += '<div class="input-group-text">£</div></div><input type="text" class="form-control numcomma" name="hpamountoutstanding_'+(hpCount - 1)+'" placeholder="Type amount here">';
      pLInc += '</div></td><td><div class="input-group"><div class="input-group-prepend"><div class="input-group-text">£</div>';
      pLInc += '</div><input type="text" class="form-control numcomma" name="hpamountoutstanding_'+hpCount+'" placeholder="Type amount here"></div></td></tr>';
      pLInc += '<tr><td>Monthly Payment</td><td><div class="input-group"><div class="input-group-prepend">';
      pLInc += '<div class="input-group-text">£</div></div><input type="text" name="hpmonthlypayment_'+(hpCount - 1)+'" class="form-control numcomma" placeholder="Type amount here">';
      pLInc += '<div class="input-group-prepend"><div class="input-group-text">p.m.</div></div></div></td>';
      pLInc += '<td><div class="input-group"><div class="input-group-prepend"><div class="input-group-text">£</div>';
      pLInc += '</div><input type="text" name="hpmonthlypayment_'+hpCount+'" class="form-control numcomma" placeholder="Type amount here"><div class="input-group-prepend">';
      pLInc += '<div class="input-group-text">p.m.</div></div></div></td></tr><tr><td>A.P.R</td><td><div class="input-group">';
      pLInc += '<input type="text" class="form-control" name="hpapr_'+(hpCount - 1)+'" placeholder="Type A.P.R"><div class="input-group-prepend">';
      pLInc += '<div class="input-group-text">%</div></div></div></td><td><div class="input-group"><input type="text" name="hpapr_'+hpCount+'" class="form-control " placeholder="Type A.P.R">';
      pLInc += '<div class="input-group-prepend"><div class="input-group-text">%</div></div></div></td></tr><tr>';
      pLInc += '<td>Is this to be repaid on or before<br/>completion?</td><td class="text-center"><center>';
      pLInc += '<div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Yes</label>';
      pLInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="hprepaidHire_'+(hpCount - 1)+'" value="Yes" id="">';
      pLInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      pLInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="hprepaidHire_'+(hpCount - 1)+'" value="No" id="">';
      pLInc += '</div></center></td><td class="text-center"><center><div class="col-md-2 date-input-box" style="padding: 0;">';
      pLInc += '<label class="form-check-label" for="">Yes</label>';
      pLInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="hprepaidHire_'+hpCount+'" value="Yes" id="">';
      pLInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      pLInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="hprepaidHire_'+hpCount+'" value="No" id="">';
      pLInc += '</div></center></td></tr><tr><td>Is this to be consolidated?</td><td class="text-center"><center>';
      pLInc += '<div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Yes</label>';
      pLInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="hpconsolidateHire_'+(hpCount - 1)+'" value="Yes" id="">';
      pLInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      pLInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="hpconsolidateHire_'+(hpCount - 1)+'" value="No" id="">';
      pLInc += '</div></center></td><td class="text-center"><center><div class="col-md-2 date-input-box" style="padding: 0;">';
      pLInc += '<label class="form-check-label" for="">Yes</label>';
      pLInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="hpconsolidateHire_'+hpCount+'" value="Yes" id="">';
      pLInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      pLInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="hpconsolidateHire_'+hpCount+'" value="No" id="">';
      pLInc += '</div></center></td></tr></tbody></table>';

      $(pLInc).insertBefore('#addHirePurchase').parent();

      $('.numcomma').keyup(function(){
        $(this).val(function(index, value) {
            value = value.replace(/,/g,'');
            return numberWithCommas(value);
        });
      });

      //To remove section
      $('.hpRemove').unbind().click(function(){

        var addId = $(this).attr('id').split('_');
        hpCount = hpCount - 2;
        $('#hpSec_'+addId[1]).remove();
        $(this).remove();

      });

      if(hpflag && (hpCnt > 0)){
        $('.hideHp').show();
      }
      else if(!hpflag && (hpCnt == 0)){
        $('.hideHp').hide();
      }

      checkSelection();
      selectDate();
    }

  });


  //To add order
  $('#addOrder').click(function(){

    var ordInc = "";

    if(odCount < 6){
      
      odCount = odCount + 2;

      ordInc = '<div id="odrem_'+odCount+'" class="close-btn odRemove"><i class="fas fa-times-circle fa-2x"></i></div><table id="odSec_'+odCount+'" class="table hideCc" style="margin-bottom:20px;"><thead class=""><tr><th scope="col" style="border:0px;background-color:transparent;"></th>';
      ordInc += '<th scope="col">'+(odCount - 1)+'</th><th scope="col">'+odCount+'</th></tr></thead><tbody class="table-bordered"><tr><td>Lender / Company</td>';
      ordInc += '<td><input type="text" class="form-control" name="cclender_'+(odCount - 1)+'" placeholder="Type Lender / Company"></td>';
      ordInc += '<td><input type="text" class="form-control" name="cclender_'+odCount+'" placeholder="Type Lender / Company"></td></tr>';
      ordInc += '<tr><td>Borrower(s)</td><td class="text-center"><center><div class="col-md-3 date-input-box" style="padding: 0;">';
      ordInc += '<label class="form-check-label" for="">Joint</label>';
      ordInc += '<input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="ccborrow_'+(odCount - 1)+'[]" value="Joint" id=""></div> /';
      ordInc += '<div class="col-md-3 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Client 1</label>';
      ordInc += '<input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="ccborrow_'+(odCount - 1)+'[]" value="client_1" id=""></div> /';
      ordInc += '<div class="col-md-3 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Client 2</label>';
      ordInc += '<input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="ccborrow_'+(odCount - 1)+'[]" value="client_2" id="">';
      ordInc += '</div></center></td><td class="text-center"><center><div class="col-md-3 date-input-box" style="padding: 0;">';
      ordInc += '<label class="form-check-label" for="">Joint</label>';
      ordInc += '<input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="ccborrow_'+odCount+'[]" value="Joint" id=""></div> /';
      ordInc += '<div class="col-md-3 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Client 1</label>';
      ordInc += '<input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="ccborrow_'+odCount+'[]" value="client_1" id="">';
      ordInc += '</div> /<div class="col-md-3 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Client 2</label>';
      ordInc += '<input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="ccborrow_'+odCount+'[]" value="client_2" id=""></div>';
      ordInc += '</center></td></tr><tr><td>Credit Limit</td><td><div class="input-group"><div class="input-group-prepend">';
      ordInc += '<div class="input-group-text">£</div></div><input type="text" name="cclimit_'+(odCount - 1)+'" class="form-control numcomma" placeholder="Type amount here">';
      ordInc += '</div></td><td><div class="input-group"><div class="input-group-prepend"><div class="input-group-text">£</div>';
      ordInc += '</div><input type="text" name="cclimit_'+odCount+'" class="form-control numcomma" placeholder="Type amount here"></div></td></tr><tr><td>Amount Outstanding</td>';
      ordInc += '<td><div class="input-group"><div class="input-group-prepend"><div class="input-group-text">£</div></div>';
      ordInc += '<input type="text" name="ccamountoutstanding_'+(odCount - 1)+'" class="form-control numcomma" placeholder="Type amount here"></div></td>';
      ordInc += '<td><div class="input-group"><div class="input-group-prepend"><div class="input-group-text">£</div></div>';
      ordInc += '<input type="text" name="ccamountoutstanding_'+odCount+'" class="form-control numcomma" placeholder="Type amount here"></div></td></tr>';
      ordInc += '<tr><td>Do you pay the full amount each<br/>month?</td><td class="text-center"><center>';
      ordInc += '<div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Yes</label>';
      ordInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccpayment_'+(odCount - 1)+'" value="Yes" id="">';
      ordInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      ordInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccpayment_'+(odCount - 1)+'" value="No" id="">';
      ordInc += '</div></center></td><td class="text-center"><center><div class="col-md-2 date-input-box" style="padding: 0;">';
      ordInc += '<label class="form-check-label" for="">Yes</label>';
      ordInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccpayment_'+odCount+'" value="Yes" id="">';
      ordInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      ordInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccpayment_'+odCount+'" value="No" id="">';
      ordInc += '</div></center></td></tr><tr><td>A.P.R</td><td><div class="input-group"><input type="text" name="ccapr_'+(odCount - 1)+'" class="form-control" placeholder="Type A.P.R">';
      ordInc += '<div class="input-group-prepend"><div class="input-group-text">%</div></div></div></td><td><div class="input-group">';
      ordInc += '<input type="text" name="ccapr_'+odCount+'" class="form-control" placeholder="Type A.P.R"><div class="input-group-prepend"><div class="input-group-text">%</div>';
      ordInc += '</div></div></td></tr><tr><td>Is this to be repaid on or before<br/>completion?</td><td class="text-center"><center>';
      ordInc += '<div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Yes</label>';
      ordInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccrepaidOrder_'+(odCount - 1)+'" value="Yes" id="">';
      ordInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      ordInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccrepaidOrder_'+(odCount - 1)+'" value="No" id="">';
      ordInc += '</div></center></td><td class="text-center"><center><div class="col-md-2 date-input-box" style="padding: 0;">';
      ordInc += '<label class="form-check-label" for="">Yes</label>';
      ordInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccrepaidOrder_'+odCount+'" value="Yes" id="">';
      ordInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      ordInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccrepaidOrder_'+odCount+'" value="No" id="">';
      ordInc += '</div></center></td></tr><tr><td>Is this to be consolidated?</td><td class="text-center"><center>';
      ordInc += '<div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Yes</label>';
      ordInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccconsolidateOrder_'+(odCount - 1)+'" value="Yes" id="">';
      ordInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      ordInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccconsolidateOrder_'+(odCount - 1)+'" value="No" id="">';
      ordInc += '</div></center></td><td class="text-center"><center><div class="col-md-2 date-input-box" style="padding: 0;">';
      ordInc += '<label class="form-check-label" for="">Yes</label>';
      ordInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccconsolidateOrder_'+odCount+'" value="Yes" id="">';
      ordInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      ordInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="ccconsolidateOrder_'+odCount+'" value="No" id="">';
      ordInc += '</div></center></td></tr><tr><td>Balance to Remain</td><td><div class="input-group"><div class="input-group-prepend">';
      ordInc += '<div class="input-group-text">£</div></div><input type="text" name="ccbalance_'+(odCount - 1)+'" class="form-control numcomma" placeholder="Type amount here">';
      ordInc += '</div></td><td><div class="input-group"><div class="input-group-prepend"><div class="input-group-text">£</div></div>';
      ordInc += '<input type="text" name="ccbalance_'+odCount+'" class="form-control numcomma" placeholder="Type amount here"></div></td></tr></tbody></table>';

      $(ordInc).insertBefore('#addOrder').parent();

      $('.numcomma').keyup(function(){
        $(this).val(function(index, value) {
            value = value.replace(/,/g,'');
            return numberWithCommas(value);
        });
      });

      //To remove section
      $('.odRemove').unbind().click(function(){

        var addId = $(this).attr('id').split('_');
        odCount = odCount - 2;
        $('#odSec_'+addId[1]).remove();
        $(this).remove();

      });

      if(ccflag && (ccCnt > 0)){
        $('.hideCc').show();
      }
      else if(!ccflag && (ccCnt == 0)){
        $('.hideCc').hide();
      }

      checkSelection();

    }

  });

  //To add spousal
  $('#addSpousal').click(function(){

    var spInc = "";
    spCount = spCount + 2;
    
    if(spCount < 6){

      spInc = '<div id="sprem_'+spCount+'" class="close-btn spRemove"><i class="fas fa-times-circle fa-2x"></i></div><table id="spSec_'+spCount+'" class="table hideSm" style="margin-top: 10px;"><thead class=""><tr>';
      spInc += '<th scope="col" style="border:0px;background-color:transparent;"></th>';
      spInc += '<th scope="col">Client 1</th><th scope="col" class="hide-col">Client 2</th></tr></thead>';
      spInc += '<tbody class="table-bordered"><tr><td>End Date</td><td class="text-center">';
      spInc += '<input id="edate_5_6_'+(spCount - 1)+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> /';
      spInc += '<input id="emonth_5_6_'+(spCount - 1)+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> /';
      spInc += '<input id="eyear_5_6_'+(spCount - 1)+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">';
      spInc += '<input type="hidden" id="endDate_5_6_'+(spCount - 1)+'_1" class="selectDate" /></td><td class="hide-col text-center">';
      spInc += '<input id="edate_5_6_'+spCount+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> /';
      spInc += '<input id="emonth_5_6_'+spCount+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> /';
      spInc += '<input id="eyear_5_6_'+spCount+'_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">';
      spInc += '<input type="hidden" id="endDate_5_6_'+spCount+'_1" class="selectDate" /></td></tr>';
      spInc += '<tr style="border:2px solid #000000;"><td>Amount</td><td style="font-weight: bold;"><div class="input-group">';
      spInc += '<div class="input-group-prepend"><div class="input-group-text" style="font-weight: bold;">£</div></div>';
      spInc += '<input type="text" name="smamount_'+(spCount - 1)+'" class="form-control numcomma text-right" placeholder="Type amount here" style="font-weight: bold;">';
      spInc += '<div class="input-group-prepend"><div class="input-group-text" style="font-weight: bold;">p.m.</div></div></div>';
      spInc += '</td><td class="hide-col" style="font-weight: bold;"><div class="input-group"><div class="input-group-prepend">';
      spInc += '<div class="input-group-text" style="font-weight: bold;">£</div></div>';
      spInc += '<input type="text" name="smamount_'+spCount+'" class="form-control numcomma text-right" placeholder="Type amount here" style="font-weight: bold;">';
      spInc += '<div class="input-group-prepend"><div class="input-group-text" style="font-weight: bold;">p.m.</div></div></div>';
      spInc += '</td></tr></tbody></table>';

      $(spInc).insertBefore('#addSpousal').parent();

      $('.numcomma').keyup(function(){
        $(this).val(function(index, value) {
            value = value.replace(/,/g,'');
            return numberWithCommas(value);
        });
      });

      //To remove section
      $('.spRemove').unbind().click(function(){

        var addId = $(this).attr('id').split('_');
        spCount = spCount - 2;
        $('#spSec_'+addId[1]).remove();
        $(this).remove();

      });

      if(smflag && (smCnt > 0)){
        $('.hideSm').show();
      }
      else if(!smflag && (smCnt == 0)){
        $('.hideSm').hide();
      }

      selectDate();

    }

  });

  //To Add Child
  $('#addChild').click(function(){

    var cmInc = "";

    if(cmCount < 6){
      cmCount = cmCount + 2;
    
      cmInc = '<div id="cmrem_'+cmCount+'" class="close-btn cmRemove"><i class="fas fa-times-circle fa-2x"></i></div><table id="cmSec_'+cmCount+'" class="table hideCm" style="margin-bottom: 10px;"><tbody class="table-bordered"><tr><td>Payment</td>';
      cmInc += '<td style="font-weight: bold;"><div class="input-group"><div class="input-group-prepend">';
      cmInc += '<div class="input-group-text" style="font-weight: bold;">£</div></div>';
      cmInc += '<input type="text" name="cmpayment_'+(cmCount - 1)+'" class="form-control numcomma text-right" placeholder="Type amount here" style="font-weight: bold;">';
      cmInc += '<div class="input-group-prepend"><div class="input-group-text" style="font-weight: bold;">p.m.</div></div></div>';
      cmInc += '</td><td class="hide-col" style="font-weight: bold;"><div class="input-group"><div class="input-group-prepend">';
      cmInc += '<div class="input-group-text" style="font-weight: bold;">£</div></div>';
      cmInc += '<input name="cmpayment_'+cmCount+'" type="text" class="form-control numcomma text-right" placeholder="Type amount here" style="font-weight: bold;">';
      cmInc += '<div class="input-group-prepend"><div class="input-group-text" style="font-weight: bold;">p.m.</div>';
      cmInc += '</div></div></td></tr><tr><td>End Date</td><td class="text-center">';
      cmInc += '<input id="edate_5_7_'+(cmCount - 1)+'_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / ';
      cmInc += '<input id="emonth_5_7_'+(cmCount - 1)+'_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / ';
      cmInc += '<input id="eyear_5_7_'+(cmCount - 1)+'_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">';
      cmInc += '<input type="hidden" id="endDate_5_7_'+(cmCount - 1)+'_2" class="selectDate" /></td>';
      cmInc += '<td class="hide-col text-center">';
      cmInc += '<input id="endDate_5_7_'+cmCount+'_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / ';
      cmInc += '<input id="endDate_5_7_'+cmCount+'_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / ';
      cmInc += '<input id="endDate_5_7_'+cmCount+'_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">';
      cmInc += '<input type="hidden" id="endDate_5_7_'+cmCount+'_2" class="selectDate" />';
      cmInc += '</td></tr></tbody></table>';

      $(cmInc).insertBefore('#addChild').parent();

      $('.numcomma').keyup(function(){
        $(this).val(function(index, value) {
            value = value.replace(/,/g,'');
            return numberWithCommas(value);
        });
      });

      //To remove section
      $('.cmRemove').unbind().click(function(){

        var addId = $(this).attr('id').split('_');
        cmCount = cmCount - 2;
        $('#cmSec_'+addId[1]).remove();
        $(this).remove();

      });

      if(cmflag && (cmCnt > 0)){
        $('.hideCm').show();
      }
      else if(!cmflag && (cmCnt == 0)){
        $('.hideCm').hide();
      }

      selectDate();

    }

  });

  $('#addOverdraft').click(function(){

    var odtInc = "";
    
    if(odrftCount < 6){


      odrftCount = odrftCount + 2;

      odtInc = '<div id="odrftrem_'+odrftCount+'" class="close-btn odrftRemove"><i class="fas fa-times-circle fa-2x"></i></div><table id="odrftSec_'+odrftCount+'" class="table" style="margin-bottom:20px;"><thead class=""><tr><th scope="col" style="border:0px;background-color:transparent;"></th>';
      odtInc += '<th scope="col">'+(odrftCount - 1)+'</th><th scope="col">'+odrftCount+'</th></tr></thead><tbody class="table-bordered"><tr><td>Lender / Company</td>';
      odtInc += '<td><input type="text" name="odlender_'+(odrftCount - 1)+'" class="form-control" placeholder="Type Lender / Company"></td>';
      odtInc += '<td><input type="text" name="odlender_'+odrftCount+'" class="form-control" placeholder="Type Lender / Company"></td></tr>';
      odtInc += '<tr><td>Borrower(s)</td><td class="text-center"><center><div class="col-md-3 date-input-box" style="padding: 0;">';
      odtInc += '<label class="form-check-label" for="">Joint</label>';
      odtInc += '<input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="odborrow_'+(odrftCount - 1)+'[]" value="Joint" id="">';
      odtInc += '</div> /<div class="col-md-3 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Client 1</label>';
      odtInc += '<input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="odborrow_'+(odrftCount - 1)+'[]" value="client_1" id=""></div> /';
      odtInc += '<div class="col-md-3 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Client 2</label>';
      odtInc += '<input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="odborrow_'+(odrftCount - 1)+'[]" value="client_2" id=""></div>';
      odtInc += '</center></td><td class="text-center"><center><div class="col-md-3 date-input-box" style="padding: 0;">';
      odtInc += '<label class="form-check-label" for="">Joint</label>';
      odtInc += '<input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="odborrow_'+odrftCount+'[]" value="Joint" id=""></div> /';
      odtInc += '<div class="col-md-3 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Client 1</label>';
      odtInc += '<input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="odborrow_'+odrftCount+'[]" value="client_1" id=""></div> /';
      odtInc += '<div class="col-md-3 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Client 2</label>';
      odtInc += '<input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="odborrow_'+odrftCount+'[]" value="client_2" id=""></div>';
      odtInc += '</center></td></tr><tr><td>Overdraft Limit</td><td><div class="input-group"><div class="input-group-prepend">';
      odtInc += '<div class="input-group-text">£</div></div><input type="text" name="odlimit_'+(odrftCount - 1)+'" class="form-control numcomma" placeholder="Type amount here">';
      odtInc += '</div></td><td><div class="input-group"><div class="input-group-prepend"><div class="input-group-text">£</div></div>';
      odtInc += '<input type="text" name="odlimit_'+odrftCount+'" class="form-control numcomma" placeholder="Type amount here"></div></td></tr><tr><td>Current Balance</td>';
      odtInc += '<td><div class="input-group"><div class="input-group-prepend"><div class="input-group-text">£</div></div>';
      odtInc += '<input type="text" name="odcurrentbalance_'+(odrftCount - 1)+'" class="form-control numcomma" placeholder="Type amount here"></div></td><td><div class="input-group">';
      odtInc += '<div class="input-group-prepend"><div class="input-group-text">£</div></div>';
      odtInc += '<input type="text" name="odcurrentbalance_'+odrftCount+'" class="form-control numcomma" placeholder="Type amount here"></div></td></tr><tr>';
      odtInc += '<td>Maximum amount overdrawn in<br/>last 3 months</td><td><div class="input-group"><div class="input-group-prepend">';
      odtInc += '<div class="input-group-text">£</div></div><input type="text" name="odamountdrawn_'+(odrftCount - 1)+'" class="form-control numcomma" placeholder="Type amount here"></div>';
      odtInc += '</td><td><div class="input-group"><div class="input-group-prepend"><div class="input-group-text">£</div></div>';
      odtInc += '<input type="text" class="form-control numcomma" name="odamountdrawn_'+odrftCount+'" placeholder="Type amount here"></div></td></tr><tr><td>A.P.R</td><td>';
      odtInc += '<div class="input-group"><input type="text" name="odapr_'+(odrftCount - 1)+'" class="form-control text-right" placeholder="Type A.P.R">';
      odtInc += '<div class="input-group-prepend"><div class="input-group-text">%</div></div></div></td><td><div class="input-group">';
      odtInc += '<input type="text" name="odapr_'+odrftCount+'" class="form-control text-right" placeholder="Type A.P.R"><div class="input-group-prepend">';
      odtInc += '<div class="input-group-text">%</div></div></div></td></tr><tr><td>Monthly Overdraft Fee</td><td><div class="input-group">';
      odtInc += '<div class="input-group-prepend"><div class="input-group-text">£</div></div><input type="text" name="odmonthlyfee_'+(odrftCount - 1)+'" class="form-control numcomma" placeholder="Type amount here">';
      odtInc += '<div class="input-group-prepend"><div class="input-group-text">p.m.</div></div></div>';
      odtInc += '</td><td><div class="input-group"><div class="input-group-prepend"><div class="input-group-text">£</div>';
      odtInc += '</div><input type="text" name="odmonthlyfee_'+odrftCount+'" class="form-control numcomma" placeholder="Type amount here"><div class="input-group-prepend">';
      odtInc += '<div class="input-group-text">p.m.</div></div></div></td></tr><tr><td>Is this to be repaid on or before<br/>completion?</td>';
      odtInc += '<td class="text-center"><center><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Yes</label>';
      odtInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="odrepaidOverdraft_'+(odrftCount - 1)+'" value="Yes" id="">';
      odtInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      odtInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="odrepaidOverdraft_'+(odrftCount - 1)+'" value="No" id="">';
      odtInc += '</div></center></td><td class="text-center"><center><div class="col-md-2 date-input-box" style="padding: 0;">';
      odtInc += '<label class="form-check-label" for="">Yes</label>';
      odtInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="odrepaidOverdraft_'+odrftCount+'" value="Yes" id="">';
      odtInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      odtInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="odrepaidOverdraft_'+odrftCount+'" value="No" id="">';
      odtInc += '</div></center></td></tr><tr><td>Balance to Remain</td><td><div class="input-group"><div class="input-group-prepend">';
      odtInc += '<div class="input-group-text">£</div></div><input type="text" name="odbalance_'+(odrftCount - 1)+'" class="form-control numcomma" placeholder="Type amount here"></div>';
      odtInc += '</td><td><div class="input-group"><div class="input-group-prepend"><div class="input-group-text">£</div></div>';
      odtInc += '<input type="text" name="odbalance_'+odrftCount+'" class="form-control numcomma" placeholder="Type amount here">';
      odtInc += '</div></td></tr><tr><td>Is this to be consolidated?</td><td class="text-center"><center>';
      odtInc += '<div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Yes</label>';
      odtInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="odconsolidateOverdraft_'+(odrftCount - 1)+'" value="Yes" id="">';
      odtInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      odtInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="odconsolidateOverdraft_'+(odrftCount - 1)+'" value="No" id="">';
      odtInc += '</div></center></td><td class="text-center"><center><div class="col-md-2 date-input-box" style="padding: 0;">';
      odtInc += '<label class="form-check-label" for="">Yes</label>';
      odtInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="odconsolidateOverdraft_'+odrftCount+'" value="Yes" id="">';
      odtInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      odtInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="odconsolidateOverdraft_'+odrftCount+'" value="No" id="">';
      odtInc += '</div></center></td></tr></tbody></table>';

      $('.numcomma').keyup(function(){
        $(this).val(function(index, value) {
            value = value.replace(/,/g,'');
            return numberWithCommas(value);
        });
      });

      $(odtInc).insertBefore('#addOverdraft').parent();
      //To remove section
      $('.odrftRemove').unbind().click(function(){

        var addId = $(this).attr('id').split('_');
        odrftCount = odrftCount - 2;
        $('#odrftSec_'+addId[1]).remove();
        $(this).remove();

      });
      checkSelection();

    }

  });



  $('#clientform').submit(function(event) {
      event.preventDefault();
  }).validate({
    rules:{

    },
    submitHandler: function(form) {

      var formData = $("#clientform").serialize(), existArr = [], existObj = {}, hpArr = [], hpObj = {}, ccArr = [], ccObj = {}, odObj = {}, odArr = [], spObj = {}, spArr = [], cmObj = {}, cmArr = [];

      //Dependent Data
      for(var i = 1; i <= plCount; i++){

        existObj = {};

        if(i % 2 == 0){

        }
        else{
          var borrowArr1 =  document.getElementsByName("plborrow_"+i+"[]"), plborrow1 = "";
          var borrowArr2 = document.getElementsByName("plborrow_"+(i+1)+"[]"), plborrow2 = "";

          for(j = 0; j < borrowArr1.length; j++)
          {
              if(borrowArr1[j].checked){
                plborrow1 += borrowArr1[j].value+",";
              }
          } 

          for(k = 0; k < borrowArr2.length; k++)
          {
              if(borrowArr2[k].checked){
                plborrow2 += borrowArr2[k].value+",";
              }
          } 

          existObj["pllender_"+i] = $('input[name="pllender_'+i+'"]').val();
          existObj["pllender_"+(i+1)] = $('input[name="pllender_'+(i+1)+'"]').val();
          existObj["plborrow_"+i] =  plborrow1.replace(/,\s*$/, "");
          existObj["plborrow_"+(i+1)] = plborrow2.replace(/,\s*$/, "");
          existObj["plpurpose_"+i] = $('input[name="plpurpose_'+i+'"]').val();
          existObj["plpurpose_"+(i+1)] = $('input[name="plpurpose_'+(i+1)+'"]').val();
          existObj["plstartdate_"+i] = $('#sdate_5_2_'+i+'_1').val()+"/"+$('#smonth_5_2_'+i+'_1').val()+"/"+$('#syear_5_2_'+i+'_1').val();
          existObj["plstartdate_"+(i+1)] = $('#sdate_5_2_'+(i+1)+'_1').val()+"/"+$('#smonth_5_2_'+(i+1)+'_1').val()+"/"+$('#syear_5_2_'+(i+1)+'_1').val();
          existObj["plenddate_"+i] = $('#edate_5_2_'+i+'_1').val()+"/"+$('#emonth_5_2_'+i+'_1').val()+"/"+$('#eyear_5_2_'+i+'_1').val();
          existObj["plenddate_"+(i+1)] = $('#edate_5_2_'+(i+1)+'_1').val()+"/"+$('#emonth_5_2_'+(i+1)+'_1').val()+"/"+$('#syear_5_2_'+(i+1)+'_1').val();
          existObj["ploriginal_"+i] = $('input[name="ploriginal_'+i+'"]').val();
          existObj["ploriginal_"+(i+1)] = $('input[name="ploriginal_'+(i+1)+'"]').val();
          existObj["plamountoutstanding_"+i] = $('input[name="plamountoutstanding_'+i+'"]').val();
          existObj["plamountoutstanding_"+(i+1)] = $('input[name="plamountoutstanding_'+(i+1)+'"]').val();
          existObj["plmonthlypayment_"+i] = $('input[name="plmonthlypayment_'+i+'"]').val();
          existObj["plmonthlypayment_"+(i+1)] = $('input[name="plmonthlypayment_'+(i+1)+'"]').val();
          existObj["plapr_"+i] = $('input[name="plapr_'+i+'"]').val();
          existObj["plapr_"+(i+1)] = $('input[name="plapr_'+(i+1)+'"]').val();
          existObj["plrepaidPersonal_"+i] = $('input[name="plrepaidPersonal_'+i+'"]:checked').val();
          existObj["plrepaidPersonal_"+(i+1)] = $('input[name="plrepaidPersonal_'+(i+1)+'"]:checked').val();
          existObj["plconsolidatePersonal_"+i] = $('input[name="plconsolidatePersonal_'+i+'"]:checked').val();
          existObj["plconsolidatePersonal_"+(i+1)] = $('input[name="plconsolidatePersonal_'+(i+1)+'"]:checked').val();

          existArr.push(existObj);
        }
        
      }

      //Hire Purchase & Lease
      for(var i = 1; i <= hpCount; i++){

        hpObj = {};

        if(i % 2 == 0){

        }
        else{
          var borrowArr1 =  document.getElementsByName("hpborrow_"+i+"[]"), hpborrow1 = "";
          var borrowArr2 = document.getElementsByName("hpborrow_"+(i+1)+"[]"), hpborrow2 = "";

          for(j = 0; j < borrowArr1.length; j++)
          {
              if(borrowArr1[j].checked){
                hpborrow1 += borrowArr1[j].value+",";
              }
          } 

          for(k = 0; k < borrowArr2.length; k++)
          {
              if(borrowArr2[k].checked){
                hpborrow2 += borrowArr2[k].value+",";
              }
          } 

          hpObj["hplender_"+i] = $('input[name="hplender_'+i+'"]').val();
          hpObj["hplender_"+(i+1)] = $('input[name="hplender_'+(i+1)+'"]').val();
          hpObj["hpborrow_"+i] =  hpborrow1.replace(/,\s*$/, "");
          hpObj["hpborrow_"+(i+1)] = hpborrow2.replace(/,\s*$/, "");
          hpObj["hppurpose_"+i] = $('input[name="hppurpose_'+i+'"]').val();
          hpObj["hppurpose_"+(i+1)] = $('input[name="hppurpose_'+(i+1)+'"]').val();
          hpObj["hpstartdate_"+i] = $('#sdate_5_3_'+i+'_1').val()+"/"+$('#smonth_5_3_'+i+'_1').val()+"/"+$('#syear_5_3_'+i+'_1').val();
          hpObj["hpstartdate_"+(i+1)] = $('#sdate_5_3_'+(i+1)+'_1').val()+"/"+$('#smonth_5_3_'+(i+1)+'_1').val()+"/"+$('#syear_5_3_'+(i+1)+'_1').val();
          hpObj["hpenddate_"+i] = $('#edate_5_3_'+i+'_1').val()+"/"+$('#emonth_5_3_'+i+'_1').val()+"/"+$('#eyear_5_3_'+i+'_1').val();
          hpObj["hpenddate_"+(i+1)] = $('#edate_5_3_'+(i+1)+'_1').val()+"/"+$('#emonth_5_3_'+(i+1)+'_1').val()+"/"+$('#syear_5_3_'+(i+1)+'_1').val();
          hpObj["hporiginal_"+i] = $('input[name="hporiginal_'+i+'"]').val();
          hpObj["hporiginal_"+(i+1)] = $('input[name="hporiginal_'+(i+1)+'"]').val();
          hpObj["hpamountoutstanding_"+i] = $('input[name="hpamountoutstanding_'+i+'"]').val();
          hpObj["hpamountoutstanding_"+(i+1)] = $('input[name="hpamountoutstanding_'+(i+1)+'"]').val();
          hpObj["hpmonthlypayment_"+i] = $('input[name="hpmonthlypayment_'+i+'"]').val();
          hpObj["hpmonthlypayment_"+(i+1)] = $('input[name="hpmonthlypayment_'+(i+1)+'"]').val();
          hpObj["hpapr_"+i] = $('input[name="hpapr_'+i+'"]').val();
          hpObj["hpapr_"+(i+1)] = $('input[name="hpapr_'+(i+1)+'"]').val();
          hpObj["hprepaidHire_"+i] = $('input[name="hprepaidHire_'+i+'"]:checked').val();
          hpObj["hprepaidHire_"+(i+1)] = $('input[name="hprepaidHire_'+(i+1)+'"]:checked').val();
          hpObj["hpconsolidateHire_"+i] = $('input[name="hpconsolidateHire_'+i+'"]:checked').val();
          hpObj["hpconsolidateHire_"+(i+1)] = $('input[name="hpconsolidateHire_'+(i+1)+'"]:checked').val();

          hpArr.push(hpObj);
        }
      }

      //Credit Card / Store Card / Mail Order
      for(var i = 1; i <= odCount; i++){

        ccObj = {};

        if(i % 2 == 0){

        }
        else{
          var borrowArr1 =  document.getElementsByName("ccborrow_"+i+"[]"), ccborrow1 = "";
          var borrowArr2 = document.getElementsByName("ccborrow_"+(i+1)+"[]"), ccborrow2 = "";

          for(j = 0; j < borrowArr1.length; j++)
          {
              if(borrowArr1[j].checked){
                ccborrow1 += borrowArr1[j].value+",";
              }
          } 

          for(k = 0; k < borrowArr2.length; k++)
          {
              if(borrowArr2[k].checked){
                ccborrow2 += borrowArr2[k].value+",";
              }
          } 

          ccObj["cclender_"+i] = $('input[name="cclender_'+i+'"]').val();
          ccObj["cclender_"+(i+1)] = $('input[name="cclender_'+(i+1)+'"]').val();
          ccObj["ccborrow_"+i] =  ccborrow1.replace(/,\s*$/, "");
          ccObj["ccborrow_"+(i+1)] = ccborrow2.replace(/,\s*$/, "");
          ccObj["cclimit_"+i] = $('input[name="cclimit_'+i+'"]').val();
          ccObj["cclimit_"+(i+1)] = $('input[name="cclimit_'+(i+1)+'"]').val();
        
          ccObj["ccamountoutstanding_"+i] = $('input[name="ccamountoutstanding_'+i+'"]').val();
          ccObj["ccamountoutstanding_"+(i+1)] = $('input[name="ccamountoutstanding_'+(i+1)+'"]').val();
          ccObj["ccpayment_"+i] = $('input[name="ccpayment_'+i+'"]:checked').val();
          ccObj["ccpayment_"+(i+1)] = $('input[name="ccpayment_'+(i+1)+'"]:checked').val();
          ccObj["ccapr_"+i] = $('input[name="ccapr_'+i+'"]').val();
          ccObj["ccapr_"+(i+1)] = $('input[name="ccapr_'+(i+1)+'"]').val();
          ccObj["ccrepaidOrder_"+i] = $('input[name="ccrepaidOrder_'+i+'"]:checked').val();
          ccObj["ccrepaidOrder_"+(i+1)] = $('input[name="ccrepaidOrder_'+(i+1)+'"]:checked').val();
          ccObj["ccconsolidateOrder_"+i] = $('input[name="ccconsolidateOrder_'+i+'"]:checked').val();
          ccObj["ccconsolidateOrder_"+(i+1)] = $('input[name="ccconsolidateOrder_'+(i+1)+'"]:checked').val();
          ccObj["ccbalance_"+i] = $('input[name="ccbalance_'+i+'"]').val();
          ccObj["ccbalance_"+(i+1)] = $('input[name="ccbalance_'+(i+1)+'"]').val();

          ccArr.push(ccObj);
        }
      }

      //Overdraft
      for(var i = 1; i <= odrftCount; i++){

        ccObj = {};

        if(i % 2 == 0){

        }
        else{
          var borrowArr1 =  document.getElementsByName("odborrow_"+i+"[]"), odborrow1 = "";
          var borrowArr2 = document.getElementsByName("odborrow_"+(i+1)+"[]"), odborrow2 = "";

          for(j = 0; j < borrowArr1.length; j++)
          {
              if(borrowArr1[j].checked){
                odborrow1 += borrowArr1[j].value+",";
              }
          } 

          for(k = 0; k < borrowArr2.length; k++)
          {
              if(borrowArr2[k].checked){
                odborrow2 += borrowArr2[k].value+",";
              }
          } 

          odObj["odlender_"+i] = $('input[name="odlender_'+i+'"]').val();
          odObj["odlender_"+(i+1)] = $('input[name="odlender_'+(i+1)+'"]').val();
          odObj["odborrow_"+i] =  odborrow1.replace(/,\s*$/, "");
          odObj["odborrow_"+(i+1)] = odborrow2.replace(/,\s*$/, "");
          odObj["odlimit_"+i] = $('input[name="odlimit_'+i+'"]').val();
          odObj["odlimit_"+(i+1)] = $('input[name="odlimit_'+(i+1)+'"]').val();
          odObj["odcurrentbalance_"+i] = $('input[name="odcurrentbalance_'+i+'"]').val();
          odObj["odcurrentbalance_"+(i+1)] = $('input[name="odcurrentbalance_'+(i+1)+'"]').val();
          odObj["odamountdrawn_"+i] = $('input[name="odamountdrawn_'+i+'"]').val();
          odObj["odamountdrawn_"+(i+1)] = $('input[name="odamountdrawn_'+(i+1)+'"]').val();

          odObj["odapr_"+i] = $('input[name="odapr_'+i+'"]').val();
          odObj["odapr_"+(i+1)] = $('input[name="odapr_'+(i+1)+'"]').val();

          odObj["odmonthlyfee_"+i] = $('input[name="odmonthlyfee_'+i+'"]').val();
          odObj["odmonthlyfee_"+(i+1)] = $('input[name="odmonthlyfee_'+(i+1)+'"]').val();
          odObj["odrepaidOverdraft_"+i] = $('input[name="odrepaidOverdraft_'+i+'"]:checked').val();
          odObj["odrepaidOverdraft_"+(i+1)] = $('input[name="odrepaidOverdraft_'+(i+1)+'"]:checked').val();
          odObj["odbalance_"+i] = $('input[name="odbalance_'+i+'"]').val();
          odObj["odbalance_"+(i+1)] = $('input[name="odbalance_'+(i+1)+'"]').val();

          odObj["odconsolidateOverdraft_"+i] = $('input[name="odconsolidateOverdraft_'+i+'"]:checked').val();
          odObj["odconsolidateOverdraft_"+(i+1)] = $('input[name="odconsolidateOverdraft_'+(i+1)+'"]:checked').val();
          

          odArr.push(odObj);
        }
      }

      //Spousal
      for(var i = 1; i <= spCount; i++){

        spObj = {};
        if(i % 2 == 0){
        }
        else{

          spObj["smenddate_"+i] = $('#edate_5_6_'+i+'_1').val()+"/"+$('#emonth_5_6_'+i+'_1').val()+"/"+$('#eyear_5_6_'+i+'_1').val();
          spObj["smenddate_"+(i+1)] = $('#edate_5_6_'+(i+1)+'_1').val()+"/"+$('#emonth_5_6_'+(i+1)+'_1').val()+"/"+$('#syear_5_6_'+(i+1)+'_1').val();
          spObj['smamount_'+i] = $('input[name="smamount_'+i+'"]').val();
          spObj['smamount_'+(i+1)] = $('input[name="smamount_'+(i+1)+'"]').val();


          spArr.push(spObj);

        }

      }

      //Child Maintenance
      for(var i = 1; i <= cmCount; i++){

        cmObj = {};
        if(i % 2 == 0){
        }
        else{

          cmObj["cmenddate_"+i] = $('#edate_5_7_'+i+'_1').val()+"/"+$('#emonth_5_7_'+i+'_1').val()+"/"+$('#eyear_5_7_'+i+'_1').val();
          cmObj["cmenddate_"+(i+1)] = $('#edate_5_7_'+(i+1)+'_1').val()+"/"+$('#emonth_5_7_'+(i+1)+'_1').val()+"/"+$('#syear_5_7_'+(i+1)+'_1').val();
          cmObj['cmpayment_'+i] = $('input[name="cmpayment_'+i+'"]').val();
          cmObj['cmpayment_'+(i+1)] = $('input[name="cmpayment_'+(i+1)+'"]').val();


          cmArr.push(cmObj);

        }

      }

      formData = formData + "&personal_loan="+JSON.stringify(existArr)+"+&hirepurchase="+JSON.stringify(hpArr)+"&creditcard="+JSON.stringify(ccArr)+"&overdraft="+JSON.stringify(odArr)+"&spousal="+JSON.stringify(spArr)+"&childmaintenance="+JSON.stringify(cmArr);

      $.ajax({
          url:'<?php echo base_url(); ?>add/financial?form_id=<?php echo $last; ?>',
          type:'POST',
          data: formData,
          dataType: 'json',
          success:function(as){

            if(as.status){
              if(as.action == 'create'){
                location.href="<?php echo base_url(); ?>admin/ex-property-mortgage/"+as.data;
              }
              else if(as.action == 'edit'){
                location.href="<?php echo base_url(); ?>admin/ex-property-mortgage/"+as.data;
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
    var formData = $("#clientform").serialize(), existArr = [], existObj = {}, hpArr = [], hpObj = {}, ccArr = [], ccObj = {}, odObj = {}, odArr = [], spObj = {}, spArr = [], cmObj = {}, cmArr = [];

    //Dependent Data
    for(var i = 1; i <= plCount; i++){

      existObj = {};

      if(i % 2 == 0){

      }
      else{
        var borrowArr1 =  document.getElementsByName("plborrow_"+i+"[]"), plborrow1 = "";
        var borrowArr2 = document.getElementsByName("plborrow_"+(i+1)+"[]"), plborrow2 = "";

        for(j = 0; j < borrowArr1.length; j++)
        {
            if(borrowArr1[j].checked){
              plborrow1 += borrowArr1[j].value+",";
            }
        } 

        for(k = 0; k < borrowArr2.length; k++)
        {
            if(borrowArr2[k].checked){
              plborrow2 += borrowArr2[k].value+",";
            }
        } 

        existObj["pllender_"+i] = $('input[name="pllender_'+i+'"]').val();
        existObj["pllender_"+(i+1)] = $('input[name="pllender_'+(i+1)+'"]').val();
        existObj["plborrow_"+i] =  plborrow1.replace(/,\s*$/, "");
        existObj["plborrow_"+(i+1)] = plborrow2.replace(/,\s*$/, "");
        existObj["plpurpose_"+i] = $('input[name="plpurpose_'+i+'"]').val();
        existObj["plpurpose_"+(i+1)] = $('input[name="plpurpose_'+(i+1)+'"]').val();
        existObj["plstartdate_"+i] = $('#sdate_5_2_'+i+'_1').val()+"/"+$('#smonth_5_2_'+i+'_1').val()+"/"+$('#syear_5_2_'+i+'_1').val();
        existObj["plstartdate_"+(i+1)] = $('#sdate_5_2_'+(i+1)+'_1').val()+"/"+$('#smonth_5_2_'+(i+1)+'_1').val()+"/"+$('#syear_5_2_'+(i+1)+'_1').val();
        existObj["plenddate_"+i] = $('#edate_5_2_'+i+'_1').val()+"/"+$('#emonth_5_2_'+i+'_1').val()+"/"+$('#eyear_5_2_'+i+'_1').val();
        existObj["plenddate_"+(i+1)] = $('#edate_5_2_'+(i+1)+'_1').val()+"/"+$('#emonth_5_2_'+(i+1)+'_1').val()+"/"+$('#syear_5_2_'+(i+1)+'_1').val();
        existObj["ploriginal_"+i] = $('input[name="ploriginal_'+i+'"]').val();
        existObj["ploriginal_"+(i+1)] = $('input[name="ploriginal_'+(i+1)+'"]').val();
        existObj["plamountoutstanding_"+i] = $('input[name="plamountoutstanding_'+i+'"]').val();
        existObj["plamountoutstanding_"+(i+1)] = $('input[name="plamountoutstanding_'+(i+1)+'"]').val();
        existObj["plmonthlypayment_"+i] = $('input[name="plmonthlypayment_'+i+'"]').val();
        existObj["plmonthlypayment_"+(i+1)] = $('input[name="plmonthlypayment_'+(i+1)+'"]').val();
        existObj["plapr_"+i] = $('input[name="plapr_'+i+'"]').val();
        existObj["plapr_"+(i+1)] = $('input[name="plapr_'+(i+1)+'"]').val();
        existObj["plrepaidPersonal_"+i] = $('input[name="plrepaidPersonal_'+i+'"]:checked').val();
        existObj["plrepaidPersonal_"+(i+1)] = $('input[name="plrepaidPersonal_'+(i+1)+'"]:checked').val();
        existObj["plconsolidatePersonal_"+i] = $('input[name="plconsolidatePersonal_'+i+'"]:checked').val();
        existObj["plconsolidatePersonal_"+(i+1)] = $('input[name="plconsolidatePersonal_'+(i+1)+'"]:checked').val();

        existArr.push(existObj);
      }
      
    }

    //Hire Purchase & Lease
    for(var i = 1; i <= hpCount; i++){

      hpObj = {};

      if(i % 2 == 0){

      }
      else{
        var borrowArr1 =  document.getElementsByName("hpborrow_"+i+"[]"), hpborrow1 = "";
        var borrowArr2 = document.getElementsByName("hpborrow_"+(i+1)+"[]"), hpborrow2 = "";

        for(j = 0; j < borrowArr1.length; j++)
        {
            if(borrowArr1[j].checked){
              hpborrow1 += borrowArr1[j].value+",";
            }
        } 

        for(k = 0; k < borrowArr2.length; k++)
        {
            if(borrowArr2[k].checked){
              hpborrow2 += borrowArr2[k].value+",";
            }
        } 

        hpObj["hplender_"+i] = $('input[name="hplender_'+i+'"]').val();
        hpObj["hplender_"+(i+1)] = $('input[name="hplender_'+(i+1)+'"]').val();
        hpObj["hpborrow_"+i] =  hpborrow1.replace(/,\s*$/, "");
        hpObj["hpborrow_"+(i+1)] = hpborrow2.replace(/,\s*$/, "");
        hpObj["hppurpose_"+i] = $('input[name="hppurpose_'+i+'"]').val();
        hpObj["hppurpose_"+(i+1)] = $('input[name="hppurpose_'+(i+1)+'"]').val();
        hpObj["hpstartdate_"+i] = $('#sdate_5_3_'+i+'_1').val()+"/"+$('#smonth_5_3_'+i+'_1').val()+"/"+$('#syear_5_3_'+i+'_1').val();
        hpObj["hpstartdate_"+(i+1)] = $('#sdate_5_3_'+(i+1)+'_1').val()+"/"+$('#smonth_5_3_'+(i+1)+'_1').val()+"/"+$('#syear_5_3_'+(i+1)+'_1').val();
        hpObj["hpenddate_"+i] = $('#edate_5_3_'+i+'_1').val()+"/"+$('#emonth_5_3_'+i+'_1').val()+"/"+$('#eyear_5_3_'+i+'_1').val();
        hpObj["hpenddate_"+(i+1)] = $('#edate_5_3_'+(i+1)+'_1').val()+"/"+$('#emonth_5_3_'+(i+1)+'_1').val()+"/"+$('#syear_5_3_'+(i+1)+'_1').val();
        hpObj["hporiginal_"+i] = $('input[name="hporiginal_'+i+'"]').val();
        hpObj["hporiginal_"+(i+1)] = $('input[name="hporiginal_'+(i+1)+'"]').val();
        hpObj["hpamountoutstanding_"+i] = $('input[name="hpamountoutstanding_'+i+'"]').val();
        hpObj["hpamountoutstanding_"+(i+1)] = $('input[name="hpamountoutstanding_'+(i+1)+'"]').val();
        hpObj["hpmonthlypayment_"+i] = $('input[name="hpmonthlypayment_'+i+'"]').val();
        hpObj["hpmonthlypayment_"+(i+1)] = $('input[name="hpmonthlypayment_'+(i+1)+'"]').val();
        hpObj["hpapr_"+i] = $('input[name="hpapr_'+i+'"]').val();
        hpObj["hpapr_"+(i+1)] = $('input[name="hpapr_'+(i+1)+'"]').val();
        hpObj["hprepaidHire_"+i] = $('input[name="hprepaidHire_'+i+'"]:checked').val();
        hpObj["hprepaidHire_"+(i+1)] = $('input[name="hprepaidHire_'+(i+1)+'"]:checked').val();
        hpObj["hpconsolidateHire_"+i] = $('input[name="hpconsolidateHire_'+i+'"]:checked').val();
        hpObj["hpconsolidateHire_"+(i+1)] = $('input[name="hpconsolidateHire_'+(i+1)+'"]:checked').val();

        hpArr.push(hpObj);
      }
    }

    //Credit Card / Store Card / Mail Order
    for(var i = 1; i <= odCount; i++){

      ccObj = {};

      if(i % 2 == 0){

      }
      else{
        var borrowArr1 =  document.getElementsByName("ccborrow_"+i+"[]"), ccborrow1 = "";
        var borrowArr2 = document.getElementsByName("ccborrow_"+(i+1)+"[]"), ccborrow2 = "";

        for(j = 0; j < borrowArr1.length; j++)
        {
            if(borrowArr1[j].checked){
              ccborrow1 += borrowArr1[j].value+",";
            }
        } 

        for(k = 0; k < borrowArr2.length; k++)
        {
            if(borrowArr2[k].checked){
              ccborrow2 += borrowArr2[k].value+",";
            }
        } 

        ccObj["cclender_"+i] = $('input[name="cclender_'+i+'"]').val();
        ccObj["cclender_"+(i+1)] = $('input[name="cclender_'+(i+1)+'"]').val();
        ccObj["ccborrow_"+i] =  ccborrow1.replace(/,\s*$/, "");
        ccObj["ccborrow_"+(i+1)] = ccborrow2.replace(/,\s*$/, "");
        ccObj["cclimit_"+i] = $('input[name="cclimit_'+i+'"]').val();
        ccObj["cclimit_"+(i+1)] = $('input[name="cclimit_'+(i+1)+'"]').val();
      
        ccObj["ccamountoutstanding_"+i] = $('input[name="ccamountoutstanding_'+i+'"]').val();
        ccObj["ccamountoutstanding_"+(i+1)] = $('input[name="ccamountoutstanding_'+(i+1)+'"]').val();
        ccObj["ccpayment_"+i] = $('input[name="ccpayment_'+i+'"]:checked').val();
        ccObj["ccpayment_"+(i+1)] = $('input[name="ccpayment_'+(i+1)+'"]:checked').val();
        ccObj["ccapr_"+i] = $('input[name="ccapr_'+i+'"]').val();
        ccObj["ccapr_"+(i+1)] = $('input[name="ccapr_'+(i+1)+'"]').val();
        ccObj["ccrepaidOrder_"+i] = $('input[name="ccrepaidOrder_'+i+'"]:checked').val();
        ccObj["ccrepaidOrder_"+(i+1)] = $('input[name="ccrepaidOrder_'+(i+1)+'"]:checked').val();
        ccObj["ccconsolidateOrder_"+i] = $('input[name="ccconsolidateOrder_'+i+'"]:checked').val();
        ccObj["ccconsolidateOrder_"+(i+1)] = $('input[name="ccconsolidateOrder_'+(i+1)+'"]:checked').val();
        ccObj["ccbalance_"+i] = $('input[name="ccbalance_'+i+'"]').val();
        ccObj["ccbalance_"+(i+1)] = $('input[name="ccbalance_'+(i+1)+'"]').val();

        ccArr.push(ccObj);
      }
    }

    //Overdraft
    for(var i = 1; i <= odrftCount; i++){

      ccObj = {};

      if(i % 2 == 0){

      }
      else{
        var borrowArr1 =  document.getElementsByName("odborrow_"+i+"[]"), odborrow1 = "";
        var borrowArr2 = document.getElementsByName("odborrow_"+(i+1)+"[]"), odborrow2 = "";

        for(j = 0; j < borrowArr1.length; j++)
        {
            if(borrowArr1[j].checked){
              odborrow1 += borrowArr1[j].value+",";
            }
        } 

        for(k = 0; k < borrowArr2.length; k++)
        {
            if(borrowArr2[k].checked){
              odborrow2 += borrowArr2[k].value+",";
            }
        } 

        odObj["odlender_"+i] = $('input[name="odlender_'+i+'"]').val();
        odObj["odlender_"+(i+1)] = $('input[name="odlender_'+(i+1)+'"]').val();
        odObj["odborrow_"+i] =  odborrow1.replace(/,\s*$/, "");
        odObj["odborrow_"+(i+1)] = odborrow2.replace(/,\s*$/, "");
        odObj["odlimit_"+i] = $('input[name="odlimit_'+i+'"]').val();
        odObj["odlimit_"+(i+1)] = $('input[name="odlimit_'+(i+1)+'"]').val();
        odObj["odcurrentbalance_"+i] = $('input[name="odcurrentbalance_'+i+'"]').val();
        odObj["odcurrentbalance_"+(i+1)] = $('input[name="odcurrentbalance_'+(i+1)+'"]').val();
        odObj["odamountdrawn_"+i] = $('input[name="odamountdrawn_'+i+'"]').val();
        odObj["odamountdrawn_"+(i+1)] = $('input[name="odamountdrawn_'+(i+1)+'"]').val();

        odObj["odapr_"+i] = $('input[name="odapr_'+i+'"]').val();
        odObj["odapr_"+(i+1)] = $('input[name="odapr_'+(i+1)+'"]').val();

        odObj["odmonthlyfee_"+i] = $('input[name="odmonthlyfee_'+i+'"]').val();
        odObj["odmonthlyfee_"+(i+1)] = $('input[name="odmonthlyfee_'+(i+1)+'"]').val();
        odObj["odrepaidOverdraft_"+i] = $('input[name="odrepaidOverdraft_'+i+'"]:checked').val();
        odObj["odrepaidOverdraft_"+(i+1)] = $('input[name="odrepaidOverdraft_'+(i+1)+'"]:checked').val();
        odObj["odbalance_"+i] = $('input[name="odbalance_'+i+'"]').val();
        odObj["odbalance_"+(i+1)] = $('input[name="odbalance_'+(i+1)+'"]').val();

        odObj["odconsolidateOverdraft_"+i] = $('input[name="odconsolidateOverdraft_'+i+'"]:checked').val();
        odObj["odconsolidateOverdraft_"+(i+1)] = $('input[name="odconsolidateOverdraft_'+(i+1)+'"]:checked').val();
        

        odArr.push(odObj);
      }
    }

    //Spousal
    for(var i = 1; i <= spCount; i++){

      spObj = {};
      if(i % 2 == 0){
      }
      else{

        spObj["smenddate_"+i] = $('#edate_5_6_'+i+'_1').val()+"/"+$('#emonth_5_6_'+i+'_1').val()+"/"+$('#eyear_5_6_'+i+'_1').val();
        spObj["smenddate_"+(i+1)] = $('#edate_5_6_'+(i+1)+'_1').val()+"/"+$('#emonth_5_6_'+(i+1)+'_1').val()+"/"+$('#syear_5_6_'+(i+1)+'_1').val();
        spObj['smamount_'+i] = $('input[name="smamount_'+i+'"]').val();
        spObj['smamount_'+(i+1)] = $('input[name="smamount_'+(i+1)+'"]').val();


        spArr.push(spObj);

      }

    }

    //Child Maintenance
    for(var i = 1; i <= cmCount; i++){

      cmObj = {};
      if(i % 2 == 0){
      }
      else{

        cmObj["cmenddate_"+i] = $('#edate_5_7_'+i+'_1').val()+"/"+$('#emonth_5_7_'+i+'_1').val()+"/"+$('#eyear_5_7_'+i+'_1').val();
        cmObj["cmenddate_"+(i+1)] = $('#edate_5_7_'+(i+1)+'_1').val()+"/"+$('#emonth_5_7_'+(i+1)+'_1').val()+"/"+$('#syear_5_7_'+(i+1)+'_1').val();
        cmObj['cmpayment_'+i] = $('input[name="cmpayment_'+i+'"]').val();
        cmObj['cmpayment_'+(i+1)] = $('input[name="cmpayment_'+(i+1)+'"]').val();


        cmArr.push(cmObj);

      }

    }

    formData = formData + "&personal_loan="+JSON.stringify(existArr)+"+&hirepurchase="+JSON.stringify(hpArr)+"&creditcard="+JSON.stringify(ccArr)+"&overdraft="+JSON.stringify(odArr)+"&spousal="+JSON.stringify(spArr)+"&childmaintenance="+JSON.stringify(cmArr);

    $.ajax({
        url:'<?php echo base_url(); ?>add/financial?form_id=<?php echo $last; ?>',
        type:'POST',
        data: formData,
        dataType: 'json',
        success:function(as){

          if(as.status){
            if(as.action == 'create'){
              location.href="<?php echo base_url(); ?>admin/other-income/"+as.data;
            }
            else if(as.action == 'edit'){
              location.href="<?php echo base_url(); ?>admin/other-income/"+as.data;
            }
          }
          else{
            alert(as.message); 
          }

        }
    });
  });
</script>
