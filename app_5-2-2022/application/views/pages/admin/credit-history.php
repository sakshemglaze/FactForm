<?php 
//$page = 'dashboard';
include 'find-fact-header.php'
?>
<style type="text/css">
  .financial-table thead th {
    vertical-align: middle;
  }

  .tab-child >.table-bordered > tr >td:First-child {
    background-color: #f2f2f2;
    text-align: right;
    line-height: 1.85em;
    font-weight: bold;
    padding-right: 0.85em;
    font-size: 10pt;
  }

  .tab-child td {
    font-weight: normal;
  }
</style>

<?php

  $pdata = $this->admin->getCreditHistory($last); 

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
          <h4>Section 9: Credit Histroy</h4>
          
          <!--=======FORM STARTS HERE===========-->
          <form id="clientform">

            <!--===== 9 CREDIT HISTORY TABLE STARTS HERE=====-->
            <!--TABLE 1 STARTS HERE-->
            <table class="table" style="margin-top: 20px;">
                <thead>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col">Client 1</th>
                  <?php if($ftype){ ?><th scope="col" class="hide-col">Client 2</th><?php } ?>
                </thead>
                <tbody class="table-bordered">
                  <tr>
                    <td>
                      Have you ever had a judgment for debt or a loan<br/>default registered against you?<br/>
                      <span style="font-weight: normal;">If Yes, please complete section 9.1</span>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_loan_1 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_loan_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_loan_1 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_loan_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_loan_2 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_loan_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_loan_2 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_loan_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>
                      Have you ever been declared bankrupt or made an <br/> arrangement with your creditors?<br/>
                      <span style="font-weight: normal;">If Yes, please complete section 9.2</span>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_bankrupt_1 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_bankrupt_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_bankrupt_1 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_bankrupt_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_bankrupt_2 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_bankrupt_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_bankrupt_2 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_bankrupt_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>
                      Have you ever failed to keep up your payments <br/> under any previous or current mortgage, rental or <br/> loan agreement? <br/>
                      <span style="font-weight: normal;">If Yes, please complete section 9.3</span>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_failed_1 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_failed_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_failed_1 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_failed_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_failed_2 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_failed_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_failed_2 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_failed_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>
                      Have you ever had a property repossessed?<br/>
                      <span style="font-weight: normal;">If Yes, please complete section 9.4</span>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_property_1 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_property_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_property_1 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_property_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_property_2 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_property_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_property_2 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_property_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php } ?>
                  </tr>
                </tbody>
            </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="table" style="margin-top: 10px;">
                <tbody class="table-bordered">
                  <tr>
                    <td>
                      Have you ever a mortgage / loan refused?<br/>
                      <span style="font-weight: normal;">If Yes, please provide details in Notes section</span>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_refused_1 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_refused_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_refused_1 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_refused_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_refused_2 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_refused_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_refused_2 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_refused_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>
                      Have you ever been convicted of, or have any <br/> prosecution pending, for any criminal offence other <br/> than a standard motoring offence?<br/>
                      <span style="font-weight: normal;">If Yes, please provide details in Notes section</span>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_pending_1 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_pending_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_pending_1 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_pending_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_pending_2 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_pending_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_pending_2 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_pending_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>
                      Have you ever had, or do you currently have a <br/> payday loan? <br/>
                      <span style="font-weight: normal;">If Yes, please provide details in Notes section</span>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_payday_1 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_payday_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_payday_1 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_payday_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_payday_2 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_payday_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_payday_2 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_payday_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>
                      Have you ever been in, or are you currently part of <br/> a Debt Management Plan*? <br/>
                      <span style="font-weight: normal;">If Yes, please provide details in Notes section</span>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_plan_1 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_plan_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_plan_1 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_plan_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_plan_2 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_plan_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->credit_plan_2 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="credit_plan_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php } ?>
                  </tr>
                </tbody>
            </table><!--TABLE 2 ENDS HERE-->

            <h5 style="font-size: 9pt;margin-top: 5px;font-style: italic;">*Note: If client(s) responds ‘Yes’ then please refer to Compliance Policy on Debt</h5>
            <!--===== /9 CREDIT HISTORY TABLE ENDS HERE=====-->                      

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">9.1 County Court Judgements / Defaults</h5>

            <!--===== 9.1 COUNTY COURT JUDGEMENTS/ DEFAULTS TABLE STARTS HERE=====-->
            <?php if($pdata != NULL){ $county = json_decode($pdata->county, true); $i = 0; ?>
            <?php foreach($county as $key => $value){ $i = $i + 2; ?>
            <?php if($i > 2){ ?>
              <div id="defrem_<?php echo $i; ?>" class="close-btn defRemove"><i class="fas fa-times-circle fa-2x"></i></div>
            <?php } ?>
            <table id="defSec_<?php echo $i; ?>" class="table " style="margin-bottom: 10px;">
              <thead>
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col">CCJ / Default <?php echo $i-1; ?></th>
                  <th scope="col">CCJ / Default <?php echo $i; ?></th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td>Company</td>
                  <td><input type="text" class="form-control" name="company_county_<?php echo $i-1; ?>" value="<?php echo $value["company_county_".($i-1)]; ?>" placeholder="Type Comapny name"></td>
                  <td><input type="text" class="form-control" name="company_county_<?php echo $i; ?>" value="<?php echo $value["company_county_".$i]; ?>" placeholder="Type Comapny name"></td>
                </tr>

                <tr>
                  <td>Amount</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control numcomma" name="company_amount_<?php echo $i-1; ?>" value="<?php echo $value["company_amount_".($i-1)]; ?>" placeholder="Type amount here">
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control numcomma" name="company_amount_<?php echo $i; ?>" value="<?php echo $value["company_amount_".$i]; ?>" placeholder="Type amount here">
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>Client</td>
                  <?php $b1 = explode(",", $value["company_client_".($i-1)]); ?>
                  <?php $b2 = explode(",", $value["company_client_".$i]); ?>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" <?php if(in_array( "Joint" , $b1 )){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="company_client_<?php echo $i-1; ?>[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" <?php if(in_array( "client_1" , $b1 )){echo "checked";} ?> style="margin-left: -0.15rem;" type="checkbox" name="company_client_<?php echo $i-1; ?>[]" value="client_1" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" <?php if(in_array( "client_2" , $b1 )){echo "checked";} ?> style="margin-left:-0.15rem;" type="checkbox" name="company_client_<?php echo $i-1; ?>[]" value="client_2" id="">
                      </div>
                    </center>
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" <?php if(in_array( "Joint" , $b2 )){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="company_client_<?php echo $i; ?>[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" <?php if(in_array( "client_1" , $b2 )){echo "checked";} ?> style="margin-left: -0.15rem;" type="checkbox" name="company_client_<?php echo $i; ?>[]" value="client_1" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" <?php if(in_array( "client_2" , $b2 )){echo "checked";} ?> style="margin-left:-0.15rem;" type="checkbox" name="company_client_<?php echo $i; ?>[]" value="client_2" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>Date Registered</td>
                  <?php $sdate1 = false; $sdate2 = false; 
                    if($value["county_regdate_".($i-1)] != ""){
                      $sdate1_data = explode("/", $value["county_regdate_".($i-1)]);
                      $sdate1 = true;
                    } 

                    if($value["county_regdate_".$i] != ""){
                      $sdate2_data = explode("/", $value["county_regdate_".$i]);
                      $sdate2 = true;
                    } 
                  ?>
                  <td class="text-center">
                    <input id="reg_date_9_1_1_<?php echo $i-1; ?>" type="text" value="<?php echo $sdate1_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="reg_month_9_1_1_<?php echo $i-1; ?>" type="text" value="<?php echo $sdate1_data[1]; ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="reg_year_9_1_1_<?php echo $i-1; ?>" type="text" value="<?php echo $sdate1_data[2]; ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="reg_calendar_9_1_1_<?php echo $i-1; ?>" class="selectDate" />
                  </td>
                  <td class="text-center">
                    <input id="reg_date_9_1_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="reg_month_9_1_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[1]; ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="reg_year_9_1_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[2]; ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="reg_calendar_9_1_1_<?php echo $i; ?>" class="selectDate" />
                  </td>
                </tr>

                <tr>
                  <td>To be repaid with mortgage?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["county_repaid_".($i-1)]) && $value["county_repaid_".($i-1)] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="county_repaid_<?php echo $i-1; ?>" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["county_repaid_".($i-1)]) && $value["county_repaid_".($i-1)] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="county_repaid_<?php echo $i-1; ?>" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["county_repaid_".$i]) && $value["county_repaid_".$i] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="county_repaid_<?php echo $i; ?>" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["county_repaid_".$i]) && $value["county_repaid_".$i] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="county_repaid_<?php echo $i; ?>" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>Settled?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["county_settle_".($i-1)]) && $value["county_settle_".($i-1)] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="county_settle_<?php echo $i-1; ?>" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["county_settle_".($i-1)]) && $value["county_settle_".($i-1)] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="county_settle_<?php echo $i-1; ?>" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["county_settle_".$i]) && $value["county_settle_".$i] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="county_settle_<?php echo $i; ?>" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["county_settle_".$i]) && $value["county_settle_".$i] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="county_settle_<?php echo $i; ?>" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>Settled Date</td>
                  <?php $sdate1 = false; $sdate2 = false; 
                    if($value["county_setdate_".($i-1)] != ""){
                      $sdate1_data = explode("/", $value["county_setdate_".($i-1)]);
                      $sdate1 = true;
                    } 

                    if($value["county_setdate_".$i] != ""){
                      $sdate2_data = explode("/", $value["county_setdate_".$i]);
                      $sdate2 = true;
                    } 
                  ?>
                  <td class="text-center">
                    <input id="setdate_date_9_1_1_<?php echo $i-1; ?>" type="text" value="<?php echo $sdate1_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="setdate_month_9_1_1_<?php echo $i-1; ?>" value="<?php echo $sdate1_data[1]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="setdate_year_9_1_1_<?php echo $i-1; ?>" value="<?php echo $sdate1_data[2]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="setdate_calendar_9_1_1_<?php echo $i-1; ?>" class="selectDate" />
                  </td>
                  <td class="text-center">
                    <input id="setdate_date_9_1_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="setdate_month_9_1_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[1]; ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="setdate_year_9_1_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[2]; ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="setdate_calendar_9_1_1_<?php echo $i; ?>" class="selectDate" />
                  </td>
                </tr>

                <tr>
                  <td>Category</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">CCJ</label>
                        <input class="form-check-input" style="margin-left: 0.25rem;" <?php if(isset($value["county_category_".($i-1)]) && $value["county_category_".($i-1)] == "CCJ"){echo "checked";} ?> type="checkbox" name="county_category_<?php echo $i-1; ?>" value="CCJ" id="">
                      </div> 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Default</label>
                        <input class="form-check-input" style="margin-left: -0.15rem;" <?php if(isset($value["county_category_".($i-1)]) && $value["county_category_".($i-1)] == "Default"){echo "checked";} ?> type="checkbox" name="county_category_<?php echo $i-1; ?>" value="Default" id="">
                      </div>
                    </center> 
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">CCJ</label>
                        <input class="form-check-input" style="margin-left: 0.25rem;" <?php if(isset($value["county_category_".$i]) && $value["county_category_".$i] == "CCJ"){echo "checked";} ?> type="checkbox" name="county_category_<?php echo $i; ?>" value="CCJ" id="">
                      </div> 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Default</label>
                        <input class="form-check-input" style="margin-left: -0.15rem;" <?php if(isset($value["county_category_".$i]) && $value["county_category_".$i] == "Default"){echo "checked";} ?> type="checkbox" name="county_category_<?php echo $i; ?>" value="Default" id="">
                      </div>
                    </center>
                  </td>
                </tr>
              </tbody>
            </table>
            <?php }}else{ ?>
              <table class="table " style="margin-bottom: 10px;">
                <thead>
                  <tr>
                    <th scope="col" style="border:0px;background-color:transparent;"></th>
                    <th scope="col">CCJ / Default 1</th>
                    <th scope="col">CCJ / Default 2</th>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <tr>
                    <td>Company</td>
                    <td><input type="text" class="form-control" name="company_county_1" placeholder="Type Comapny name"></td>
                    <td><input type="text" class="form-control" name="company_county_2" placeholder="Type Comapny name"></td>
                  </tr>

                  <tr>
                    <td>Amount</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control numcomma" name="company_amount_1" placeholder="Type amount here">
                      </div>
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control numcomma" name="company_amount_2" placeholder="Type amount here">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Client</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Joint</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="company_client_1[]" value="Joint" id="">
                        </div> / 

                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Client 1</label>
                          <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="company_client_1[]" value="client_1" id="">
                        </div> / 

                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Client 2</label>
                          <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="company_client_1[]" value="client_2" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Joint</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="company_client_2[]" value="Joint" id="">
                        </div> / 

                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Client 1</label>
                          <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="company_client_2[]" value="client_1" id="">
                        </div> / 

                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Client 2</label>
                          <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="company_client_2[]" value="client_2" id="">
                        </div>
                      </center>
                    </td>
                  </tr>

                  <tr>
                    <td>Date Registered</td>
                    <td class="text-center">
                      <input id="reg_date_9_1_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input id="reg_month_9_1_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input id="reg_year_9_1_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="reg_calendar_9_1_1_1" class="selectDate" />
                    </td>
                    <td class="text-center">
                      <input id="reg_date_9_1_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input id="reg_month_9_1_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input id="reg_year_9_1_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="reg_calendar_9_1_1_2" class="selectDate" />
                    </td>
                  </tr>

                  <tr>
                    <td>To be repaid with mortgage?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="county_repaid_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="county_repaid_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="county_repaid_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="county_repaid_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>

                  <tr>
                    <td>Settled?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="county_settle_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="county_settle_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="county_settle_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="county_settle_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>

                  <tr>
                    <td>Settled Date</td>
                    <td class="text-center">
                      <input id="setdate_date_9_1_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input id="setdate_month_9_1_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input id="setdate_year_9_1_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="setdate_calendar_9_1_1_1" class="selectDate" />
                    </td>
                    <td class="text-center">
                      <input id="setdate_date_9_1_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input id="setdate_month_9_1_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input id="setdate_year_9_1_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="setdate_calendar_9_1_1_2" class="selectDate" />
                    </td>
                  </tr>

                  <tr>
                    <td>Category</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">CCJ</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="county_category_1" value="CCJ" id="">
                        </div> 

                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Default</label>
                          <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="county_category_1" value="Default" id="">
                        </div>
                      </center> 
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">CCJ</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="county_category_2" value="CCJ" id="">
                        </div> 

                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Default</label>
                          <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="county_category_2" value="Default" id="">
                        </div>
                      </center>
                    </td>
                  </tr>
                </tbody>
              </table>
            <?php } ?>

            <!--ADD MORE BUTTON-->
            <div>
              <button id="addCountry" type="button" class="btn btn-primary float-right" style="margin:10px 0px;">Add More</button>
            </div> 
            <!--/ADD MORE BUTTON-->

            <!--===== 9.1 COUNTY COURT JUDGEMENTS/ DEFAULTS TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">9.2 Bankruptcy / IVA</h5>

            <!--===== 9.2 BANKRUPTCY / IVA TABLE STARTS HERE=====-->
            <?php if($pdata != NULL){ $bankruptcy = json_decode($pdata->bankruptcy, true); $i = 0; ?>
            <?php foreach($bankruptcy as $key => $value){ $i = $i + 2; ?>
            <?php if($i > 2){ ?>
              <div id="bankrem_<?php echo $i; ?>" class="close-btn bankRemove"><i class="fas fa-times-circle fa-2x"></i></div>
            <?php } ?>
            <!--TABLE 1 STARTS HERE-->
            <table id="bankSec1_<?php echo $i; ?>" class="table " >
              <thead>
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col">CCJ / Default <?php echo $i-1; ?></th>
                  <th scope="col">CCJ / Default <?php echo $i; ?></th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td>Bankruptcy Amount</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control numcomma" name="bank_ccjamount_<?php echo $i-1; ?>" value="<?php echo $value["bank_ccjamount_".($i-1)]; ?>" placeholder="Type amount here">
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control numcomma" name="bank_ccjamount_<?php echo $i; ?>" value="<?php echo $value["bank_ccjamount_".$i]; ?>" placeholder="Type amount here">
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>Client</td>
                  <?php $b1 = explode(",", $value["bank_ccjclient_".($i-1)]); ?>
                  <?php $b2 = explode(",", $value["bank_ccjclient_".$i]); ?>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" style="margin-left: 0.25rem;" <?php if(in_array( "Joint" , $b1 )){echo "checked";} ?> type="checkbox" name="bank_ccjclient_<?php echo $i-1; ?>[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" style="margin-left: -0.15rem;" <?php if(in_array( "client_1" , $b1 )){echo "checked";} ?> type="checkbox" name="bank_ccjclient_<?php echo $i-1; ?>[]" value="client_1" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" style="margin-left:-0.15rem;" <?php if(in_array( "client_2" , $b1 )){echo "checked";} ?> type="checkbox" name="bank_ccjclient_<?php echo $i-1; ?>[]" value="client_2" id="">
                      </div>
                    </center>
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" style="margin-left: 0.25rem;" <?php if(in_array( "Joint" , $b2 )){echo "checked";} ?> type="checkbox" name="bank_ccjclient_<?php echo $i; ?>[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" style="margin-left: -0.15rem;" <?php if(in_array( "client_1" , $b2 )){echo "checked";} ?> type="checkbox" name="bank_ccjclient_<?php echo $i; ?>[]" value="client_1" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" style="margin-left:-0.15rem;" <?php if(in_array( "client_2" , $b2 )){echo "checked";} ?> type="checkbox" name="bank_ccjclient_<?php echo $i; ?>[]" value="client_2" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>Bankruptcy Date</td>
                  <?php $sdate1 = false; $sdate2 = false; 
                    if($value["bank_date_".($i-1)] != ""){
                      $sdate1_data = explode("/", $value["bank_date_".($i-1)]);
                      $sdate1 = true;
                    } 

                    if($value["bank_date_".$i] != ""){
                      $sdate2_data = explode("/", $value["bank_date_".$i]);
                      $sdate2 = true;
                    } 
                  ?>
                  <td class="text-center">
                    <input id="bdate_date_9_2_1_<?php echo $i-1; ?>" type="text" value="<?php echo $sdate1_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="bdate_month_9_2_1_<?php echo $i-1; ?>" type="text" value="<?php echo $sdate1_data[1]; ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="bdate_year_9_2_1_<?php echo $i-1; ?>" type="text" value="<?php echo $sdate1_data[2]; ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="bdate_calendar_9_2_1_<?php echo $i-1; ?>" class="selectDate" />
                  </td>
                  <td class="text-center">
                    <input id="bdate_date_9_2_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="bdate_month_9_2_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[1]; ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="bdate_year_9_2_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[2]; ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="bdate_calendar_9_2_1_<?php echo $i; ?>" class="selectDate" />
                  </td>
                </tr>

                <tr>
                  <td>Discharge Date</td>
                  <?php $sdate1 = false; $sdate2 = false; 
                    if($value["bank_disdate_".($i-1)] != ""){
                      $sdate1_data = explode("/", $value["bank_disdate_".($i-1)]);
                      $sdate1 = true;
                    } 

                    if($value["bank_disdate_".$i] != ""){
                      $sdate2_data = explode("/", $value["bank_disdate_".$i]);
                      $sdate2 = true;
                    } 
                  ?>
                  <td class="text-center">
                    <input id="disdate_date_9_2_1_<?php echo $i-1; ?>" type="text" value="<?php echo $sdate1_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="disdate_month_9_2_1_<?php echo $i-1; ?>" type="text" value="<?php echo $sdate1_data[1]; ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="disdate_year_9_2_1_<?php echo $i-1; ?>" type="text" value="<?php echo $sdate1_data[2]; ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="disdate_calendar_9_2_1_<?php echo $i-1; ?>" class="selectDate" />
                  </td>
                  <td class="text-center">
                    <input id="disdate_date_9_2_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="disdate_month_9_2_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[1]; ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="disdate_year_9_2_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[2]; ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="disdate_calendar_9_2_1_<?php echo $i; ?>" class="selectDate" />
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->
          
            <!--TABLE 2 STARTS HERE-->
            <table id="bankSec2_<?php echo $i; ?>" class="table" style="margin-top: 10px; margin-bottom: 10px;">
              <thead>
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col">Individual Voluntary Agreement <br/> <?php echo $i-1; ?></th>
                  <th scope="col">Individual Voluntary Agreement <br/> <?php echo $i; ?></th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td>Client</td>
                  <?php $b1 = explode(",", $value["bank_indclient_".($i-1)]); ?>
                  <?php $b2 = explode(",", $value["bank_indclient_".$i]); ?>
                  <td class="text-center">
                    <center>
                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Joint</label>
                      <input class="form-check-input" style="margin-left: 0.25rem;" <?php if(in_array( "Joint" , $b1 )){echo "checked";} ?> type="checkbox" name="bank_indclient_<?php echo $i-1; ?>[]" value="Joint" id="">
                    </div> / 

                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Client 1</label>
                      <input class="form-check-input" style="margin-left: -0.15rem;" <?php if(in_array( "client_1" , $b1 )){echo "checked";} ?> type="checkbox" name="bank_indclient_<?php echo $i-1; ?>[]" value="client_1" id="">
                    </div> / 

                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Client 2</label>
                      <input class="form-check-input" style="margin-left:-0.15rem;" <?php if(in_array( "client_2" , $b1 )){echo "checked";} ?> type="checkbox" name="bank_indclient_<?php echo $i-1; ?>[]" value="client_2" id="">
                    </div>
                  </center>
                  </td>
                  <td class="text-center">
                    <center>
                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Joint</label>
                      <input class="form-check-input" style="margin-left: 0.25rem;" <?php if(in_array( "Joint" , $b2 )){echo "checked";} ?> type="checkbox" name="bank_indclient_<?php echo $i; ?>[]" value="Joint" id="">
                    </div> / 

                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Client 1</label>
                      <input class="form-check-input" style="margin-left: -0.15rem;" <?php if(in_array( "client_1" , $b2 )){echo "checked";} ?> type="checkbox" name="bank_indclient_<?php echo $i; ?>[]" value="client_1" id="">
                    </div> / 

                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Client 2</label>
                      <input class="form-check-input" style="margin-left:-0.15rem;" <?php if(in_array( "client_2" , $b2 )){echo "checked";} ?> type="checkbox" name="bank_indclient_<?php echo $i; ?>[]" value="client_2" id="">
                    </div>
                  </center>
                  </td>
                </tr>

                <tr>
                  <td>Date Registered</td>
                  <?php $sdate1 = false; $sdate2 = false; 
                    if($value["bank_indregdate_".($i-1)] != ""){
                      $sdate1_data = explode("/", $value["bank_indregdate_".($i-1)]);
                      $sdate1 = true;
                    } 

                    if($value["bank_indregdate_".$i] != ""){
                      $sdate2_data = explode("/", $value["bank_indregdate_".$i]);
                      $sdate2 = true;
                    } 
                  ?>
                  <td class="text-center">
                    <input id="reg_date_9_2_1_<?php echo $i-1; ?>" type="text" value="<?php echo $sdate1_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="reg_month_9_2_1_<?php echo $i-1; ?>" type="text" value="<?php echo $sdate1_data[1]; ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="reg_year_9_2_1_<?php echo $i-1; ?>" type="text" value="<?php echo $sdate1_data[2]; ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="reg_calendar_9_2_1_<?php echo $i-1; ?>" class="selectDate" />
                  </td>
                  <td class="text-center">
                    <input id="reg_date_9_2_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="reg_month_9_2_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[1]; ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="reg_year_9_2_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[2]; ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="reg_calendar_9_2_1_<?php echo $i; ?>" class="selectDate" />
                  </td>
                </tr>

                <tr>
                  <td>Amount</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control numcomma" name="bank_indamount_<?php echo $i-1; ?>" value="<?php echo $value["bank_indamount_".($i-1)]; ?>" placeholder="Type amount here">
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control numcomma" name="bank_indamount_<?php echo $i; ?>" value="<?php echo $value["bank_indamount_".$i]; ?>" placeholder="Type amount here">
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>Date Satisfied</td>
                  <?php $sdate1 = false; $sdate2 = false; 
                    if($value["bank_indsdate_".($i-1)] != ""){
                      $sdate1_data = explode("/", $value["bank_indsdate_".($i-1)]);
                      $sdate1 = true;
                    } 

                    if($value["bank_indsdate_".$i] != ""){
                      $sdate2_data = explode("/", $value["bank_indsdate_".$i]);
                      $sdate2 = true;
                    } 
                  ?>
                  <td class="text-center">
                    <input id="sdate_date_9_2_1_<?php echo $i-1; ?>" type="text" value="<?php echo $sdate1_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="sdate_month_9_2_1_<?php echo $i-1; ?>" type="text" value="<?php echo $sdate1_data[1]; ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="sdate_year_9_2_1_<?php echo $i-1; ?>" type="text" value="<?php echo $sdate1_data[2]; ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="sdate_calendar_9_2_1_<?php echo $i-1; ?>" class="selectDate" />
                  </td>
                  <td class="text-center">
                    <input id="sdate_date_9_2_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="sdate_month_9_2_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[1]; ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="sdate_year_9_2_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[2]; ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="sdate_calendar_9_2_1_<?php echo $i; ?>" class="selectDate" />
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <?php }}else{ ?>
              <table class="table ">
                <thead>
                  <tr>
                    <th scope="col" style="border:0px;background-color:transparent;"></th>
                    <th scope="col">CCJ / Default 1</th>
                    <th scope="col">CCJ / Default 2</th>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <tr>
                    <td>Bankruptcy Amount</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control" name="bank_ccjamount_1" placeholder="Type amount here">
                      </div>
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control" name="bank_ccjamount_2" placeholder="Type amount here">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Client</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Joint</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="bank_ccjclient_1[]" value="Joint" id="">
                        </div> / 

                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Client 1</label>
                          <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="bank_ccjclient_1[]" value="client_1" id="">
                        </div> / 

                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Client 2</label>
                          <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="bank_ccjclient_1[]" value="client_2" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Joint</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="bank_ccjclient_2[]" value="Joint" id="">
                        </div> / 

                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Client 1</label>
                          <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="bank_ccjclient_2[]" value="client_1" id="">
                        </div> / 

                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Client 2</label>
                          <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="bank_ccjclient_2[]" value="client_2" id="">
                        </div>
                      </center>
                    </td>
                  </tr>

                  <tr>
                    <td>Bankruptcy Date</td>
                    <td class="text-center">
                      <input id="bdate_date_9_2_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input id="bdate_month_9_2_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input id="bdate_year_9_2_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="bdate_calendar_9_2_1_1" class="selectDate" />
                    </td>
                    <td class="text-center">
                      <input id="bdate_date_9_2_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input id="bdate_month_9_2_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input id="bdate_year_9_2_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="bdate_calendar_9_2_1_2" class="selectDate" />
                    </td>
                  </tr>

                  <tr>
                    <td>Discharge Date</td>
                    <td class="text-center">
                      <input id="disdate_date_9_2_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input id="disdate_month_9_2_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input id="disdate_year_9_2_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="disdate_calendar_9_2_1_1" class="selectDate" />
                    </td>
                    <td class="text-center">
                      <input id="disdate_date_9_2_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input id="disdate_month_9_2_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input id="disdate_year_9_2_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="disdate_calendar_9_2_1_2" class="selectDate" />
                    </td>
                  </tr>
                </tbody>
              </table><!--/TABLE 1 ENDS HERE-->
              
              <!--TABLE 2 STARTS HERE-->
              <table class="table" style="margin-top: 10px;margin-bottom: 10px;">
                <thead>
                  <tr>
                    <th scope="col" style="border:0px;background-color:transparent;"></th>
                    <th scope="col">Individual Voluntary Agreement <br/> 1</th>
                    <th scope="col">Individual Voluntary Agreement <br/> 2</th>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <tr>
                    <td>Client</td>
                    <td class="text-center">
                      <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="bank_indclient_1[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="bank_indclient_1[]" value="client_1" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="bank_indclient_1[]" value="client_2" id="">
                      </div>
                    </center>
                    </td>
                    <td class="text-center">
                      <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="bank_indclient_2[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="bank_indclient_2[]" value="client_1" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="bank_indclient_2[]" value="client_2" id="">
                      </div>
                    </center>
                    </td>
                  </tr>

                  <tr>
                    <td>Date Registered</td>
                    <td class="text-center">
                      <input id="reg_date_9_2_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input id="reg_month_9_2_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input id="reg_year_9_2_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="reg_calendar_9_2_1_1" class="selectDate" />
                    </td>
                    <td class="text-center">
                      <input id="reg_date_9_2_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input id="reg_month_9_2_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input id="reg_year_9_2_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="reg_calendar_9_2_1_2" class="selectDate" />
                    </td>
                  </tr>

                  <tr>
                    <td>Amount</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control" name="bank_indamount_1" placeholder="Type amount here">
                      </div>
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control" name="bank_indamount_2" placeholder="Type amount here">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Date Satisfied</td>
                    <td class="text-center">
                      <input id="sdate_date_9_2_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input id="sdate_month_9_2_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input id="sdate_year_9_2_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="sdate_calendar_9_2_1_1" class="selectDate" />
                    </td>
                    <td class="text-center">
                      <input id="sdate_date_9_2_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input id="sdate_month_9_2_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input id="sdate_year_9_2_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="sdate_calendar_9_2_1_2" class="selectDate" />
                    </td>
                  </tr>
                </tbody>
              </table><!--/TABLE 2 ENDS HERE-->
            <?php } ?>

            <!--ADD MORE BUTTON-->
            <div>
              <button id="addBankruptcy" type="button" class="btn btn-primary float-right" style="margin:10px 0px;">Add More</button>
            </div> 
            <!--/ADD MORE BUTTON-->

            <!--===== 9.2 BANKRUPTCY / IVA TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">9.3 arrear</h5>

            <!--===== 9.3 arrear TABLE STARTS HERE=====-->
            <?php if($pdata != NULL){ $arrear = json_decode($pdata->arrears, true); $i = 0; ?>
            <?php foreach($arrear as $key => $value){ $i = $i + 2; ?>
            <?php if($i > 2){ ?>
              <div id="arrearrem_<?php echo $i; ?>" class="close-btn arrearRemove"><i class="fas fa-times-circle fa-2x"></i></div>
            <?php } ?>
            <table id="arrearSec_<?php echo $i; ?>" class="table" style="margin-top: 10px;">
              <thead>
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col">arrear <?php echo $i-1; ?></th>
                  <th scope="col">arrear <?php echo $i; ?></th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td>Company</td>
                  <td><input type="text" class="form-control" name="arrear_company_<?php echo $i-1; ?>" value="<?php echo $value["arrear_company_".($i-1)]; ?>" placeholder="Type Company name"></td>
                  <td><input type="text" class="form-control" name="arrear_company_<?php echo $i; ?>" value="<?php echo $value["arrear_company_".$i]; ?>" placeholder="Type Company name"></td>
                </tr>

                <tr>
                  <td>Outstanding Amount</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control numcomma" name="arrear_amount_<?php echo $i-1; ?>" value="<?php echo $value["arrear_amount_".($i-1)]; ?>" placeholder="Type amount here">
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control numcomma" name="arrear_amount_<?php echo $i; ?>" value="<?php echo $value["arrear_amount_".$i]; ?>" placeholder="Type amount here">
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>Client</td>
                  <?php $b1 = explode(",", $value["arrear_client_".($i-1)]); ?>
                  <?php $b2 = explode(",", $value["arrear_client_".$i]); ?>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" style="margin-left: 0.25rem;" <?php if(in_array( "Joint" , $b1 )){echo "checked";} ?> type="checkbox" name="arrear_client_<?php echo $i-1; ?>[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" style="margin-left: -0.15rem;" <?php if(in_array( "client_1" , $b1 )){echo "checked";} ?> type="checkbox" name="arrear_client_<?php echo $i-1; ?>[]" value="client_1" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" style="margin-left:-0.15rem;" <?php if(in_array( "client_2" , $b1 )){echo "checked";} ?> type="checkbox" name="arrear_client_<?php echo $i-1; ?>[]" value="client_2" id="">
                      </div>
                    </center>
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" style="margin-left: 0.25rem;" <?php if(in_array( "Joint" , $b2 )){echo "checked";} ?> type="checkbox" name="arrear_client_<?php echo $i; ?>[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" style="margin-left: -0.15rem;" <?php if(in_array( "client_1" , $b2 )){echo "checked";} ?> type="checkbox" name="arrear_client_<?php echo $i; ?>[]" value="client_1" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" style="margin-left:-0.15rem;" <?php if(in_array( "client_2" , $b2 )){echo "checked";} ?> type="checkbox" name="arrear_client_<?php echo $i; ?>[]" value="client_2" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>Number of missed payments</td>
                  <td><input type="text" class="form-control" value="<?php echo $value["arrear_missedpay_".($i-1)]; ?>" name="arrear_missedpay_<?php echo $i-1; ?>" placeholder="Type no. of missed payments here"></td>
                  <td><input type="text" class="form-control" value="<?php echo $value["arrear_missedpay_".$i]; ?>" name="arrear_missedpay_<?php echo $i; ?>" placeholder="Type no. of missed payments here"></td>
                </tr>

                <tr>
                  <td>Date of last missed</td>
                  <?php $sdate1 = false; $sdate2 = false; 
                    if($value["arrear_misseddate_".($i-1)] != ""){
                      $sdate1_data = explode("/", $value["arrear_misseddate_".($i-1)]);
                      $sdate1 = true;
                    } 

                    if($value["arrear_misseddate_".$i] != ""){
                      $sdate2_data = explode("/", $value["arrear_misseddate_".$i]);
                      $sdate2 = true;
                    } 
                  ?>
                  <td class="text-center">
                    <input id="missed_date_9_3_1_<?php echo $i-1; ?>" type="text" value="<?php echo $sdate1_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="missed_month_9_3_1_<?php echo $i-1; ?>" type="text" value="<?php echo $sdate1_data[1]; ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="missed_year_9_3_1_<?php echo $i-1; ?>" type="text" value="<?php echo $sdate1_data[2]; ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="missed_calendar_9_3_1_<?php echo $i-1; ?>" class="selectDate" />
                  </td>
                  <td class="text-center">
                    <input id="missed_date_9_3_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="missed_month_9_3_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[1]; ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="missed_year_9_3_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[2]; ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="missed_calendar_9_3_1_<?php echo $i; ?>" class="selectDate" />
                  </td>
                </tr>

                <tr>
                  <td>Settled?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["arrear_settle_".($i-1)]) && $value["arrear_settle_".($i-1)] == "Yes" ){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="arrear_settle_<?php echo $i-1; ?>" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["arrear_settle_".($i-1)]) && $value["arrear_settle_".($i-1)] == "No" ){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="arrear_settle_<?php echo $i-1; ?>" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["arrear_settle_".$i]) && $value["arrear_settle_".$i] == "Yes" ){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="arrear_settle_<?php echo $i; ?>" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["arrear_settle_".$i]) && $value["arrear_settle_".$i] == "No" ){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="arrear_settle_<?php echo $i; ?>" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>Date Satisfied</td>
                  <?php $sdate1 = false; $sdate2 = false; 
                    if($value["arrear_dsat_".($i-1)] != ""){
                      $sdate1_data = explode("/", $value["arrear_dsat_".($i-1)]);
                      $sdate1 = true;
                    } 

                    if($value["arrear_dsat_".$i] != ""){
                      $sdate2_data = explode("/", $value["arrear_dsat_".$i]);
                      $sdate2 = true;
                    } 
                  ?>
                  <td class="text-center">
                    <input id="dsat_date_9_3_1_<?php echo $i-1; ?>" type="text" value="<?php echo $sdate1_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="dsat_month_9_3_1_<?php echo $i-1; ?>" type="text" value="<?php echo $sdate1_data[1]; ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="dsat_year_9_3_1_<?php echo $i-1; ?>" type="text" value="<?php echo $sdate1_data[2]; ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="dsat_calendar_9_3_1_<?php echo $i-1; ?>" class="selectDate" />
                  </td>
                  <td class="text-center">
                    <input id="dsat_date_9_3_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[0]; ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="dsat_month_9_3_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[1]; ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="dsat_year_9_3_1_<?php echo $i; ?>" type="text" value="<?php echo $sdate2_data[2]; ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="dsat_calendar_9_3_1_<?php echo $i; ?>" class="selectDate" />
                  </td>
                </tr>
              </tbody>
            </table>
            <?php }}else{ ?>
              <table class="table" style="margin-top: 10px; margin-bottom: 10px;">
                <thead>
                  <tr>
                    <th scope="col" style="border:0px;background-color:transparent;"></th>
                    <th scope="col">arrear 1</th>
                    <th scope="col">arrear 2</th>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <tr>
                    <td>Company</td>
                    <td><input type="text" class="form-control" name="arrear_company_1" placeholder="Type Company name"></td>
                    <td><input type="text" class="form-control" name="arrear_company_2" placeholder="Type Company name"></td>
                  </tr>

                  <tr>
                    <td>Outstanding Amount</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control numcomma" name="arrear_amount_1" placeholder="Type amount here">
                      </div>
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control numcomma" name="arrear_amount_2" placeholder="Type amount here">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Client</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Joint</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="arrear_client_1[]" value="Joint" id="">
                        </div> / 

                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Client 1</label>
                          <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="arrear_client_1[]" value="client_1" id="">
                        </div> / 

                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Client 2</label>
                          <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="arrear_client_1[]" value="client_2" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Joint</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="arrear_client_2[]" value="Joint" id="">
                        </div> / 

                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Client 1</label>
                          <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="arrear_client_2[]" value="client_1" id="">
                        </div> / 

                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Client 2</label>
                          <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="arrear_client_2[]" value="client_2" id="">
                        </div>
                      </center>
                    </td>
                  </tr>

                  <tr>
                    <td>Number of missed payments</td>
                    <td><input type="text" class="form-control" name="arrear_missedpay_1" placeholder="Type no. of missed payments here"></td>
                    <td><input type="text" class="form-control" name="arrear_missedpay_2" placeholder="Type no. of missed payments here"></td>
                  </tr>

                  <tr>
                    <td>Date of last missed</td>
                    <td class="text-center">
                      <input id="missed_date_9_3_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input id="missed_month_9_3_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input id="missed_year_9_3_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="missed_calendar_9_3_1_1" class="selectDate" />
                    </td>
                    <td class="text-center">
                      <input id="missed_date_9_3_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input id="missed_month_9_3_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input id="missed_year_9_3_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="missed_calendar_9_3_1_2" class="selectDate" />
                    </td>
                  </tr>

                  <tr>
                    <td>Settled?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="arrear_settle_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="arrear_settle_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="arrear_settle_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="arrear_settle_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>

                  <tr>
                    <td>Date Satisfied</td>
                    <td class="text-center">
                      <input id="dsat_date_9_3_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input id="dsat_month_9_3_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input id="dsat_year_9_3_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="dsat_calendar_9_3_1_1" class="selectDate" />
                    </td>
                    <td class="text-center">
                      <input id="dsat_date_9_3_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input id="dsat_month_9_3_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input id="dsat_year_9_3_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="dsat_calendar_9_3_1_2" class="selectDate" />
                    </td>
                  </tr>
                </tbody>
              </table>
            <?php } ?>

            <!--ADD MORE BUTTON-->
            <div>
              <button id="addArrear" type="button" class="btn btn-primary float-right" style="margin:10px 0px;">Add More</button>
            </div> 
            <!--/ADD MORE BUTTON-->
            
            <!--===== /9.3 arrear TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">9.4 Repossessions</h5>

            <!--===== 9.4 RESPOSSESSIONS TABLE STARTS HERE=====-->
            <table class="table" style="margin-top: 10px;">
              <thead>
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col">Repossession 1</th>
                  <th scope="col">Repossession 2</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
              <?php if($pdata != NULL){ $reposses = json_decode($pdata->repossessions, 0);  ?>
              <?php $b1 = explode(",", $reposses->reposses_client_1); ?>
              <?php $b2 = explode(",", $reposses->reposses_client_2); } ?>                  
                <tr>
                  <td>Client</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" <?php if($pdata != NULL && in_array( "Joint" , $b1 )){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="reposses_client_1[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" <?php if($pdata != NULL && in_array( "client_1" , $b1 )){echo "checked";} ?> style="margin-left: -0.15rem;" type="checkbox" name="reposses_client_1[]" value="client_1" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" <?php if($pdata != NULL && in_array( "client_2" , $b1 )){echo "checked";} ?> style="margin-left:-0.15rem;" type="checkbox" name="reposses_client_1[]" value="client_2" id="">
                      </div>
                    </center>
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" <?php if($pdata != NULL && in_array( "Joint" , $b2 )){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="reposses_client_2[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" <?php if($pdata != NULL && in_array( "client_1" , $b2 )){echo "checked";} ?> style="margin-left: -0.15rem;" type="checkbox" name="reposses_client_2[]" value="client_1" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" <?php if($pdata != NULL && in_array( "client_2" , $b2 )){echo "checked";} ?> style="margin-left:-0.15rem;" type="checkbox" name="reposses_client_2[]" value="client_2" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>Date Registered</td>
                  <?php if($pdata != NULL){ $sdate1 = false; $sdate2 = false; 
                    if($reposses->reposses_regdate_1 != ""){
                      $sdate1_data = explode("/", $reposses->reposses_regdate_1);
                      $sdate1 = true;
                    } 

                    if($reposses->reposses_regdate_2 != ""){
                      $sdate2_data = explode("/", $reposses->reposses_regdate_2);
                      $sdate2 = true;
                    } 
                  }
                  ?>
                  <td class="text-center">
                    <input id="reg_date_9_4_1_1" type="text" value="<?php if($pdata != NULL){ echo $sdate1_data[0]; } ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="reg_month_9_4_1_1" type="text" value="<?php if($pdata != NULL){ echo $sdate1_data[1]; } ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="reg_year_9_4_1_1" type="text" value="<?php if($pdata != NULL){ echo $sdate1_data[2]; } ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="reg_calendar_9_4_1_1" class="selectDate" />
                  </td>
                  <td class="text-center">
                    <input id="reg_date_9_4_1_2" type="text" value="<?php if($pdata != NULL){ echo $sdate2_data[0]; } ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="reg_month_9_4_1_2" type="text" value="<?php if($pdata != NULL){ echo $sdate2_data[1]; } ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="reg_year_9_4_1_2" type="text" value="<?php if($pdata != NULL){ echo $sdate2_data[2]; } ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="reg_calendar_9_4_1_2" class="selectDate" />
                  </td>
                </tr>

                <tr>
                  <td>Amount</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control numcomma" name="reposses_amount_1" value="<?php if($pdata != NULL){ echo $reposses->reposses_amount_1; } ?>" placeholder="Type amount here">
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control numcomma" name="reposses_amount_2" value="<?php if($pdata != NULL){ echo $reposses->reposses_amount_2; } ?>" placeholder="Type amount here">
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>Date Satisfied</td>
                  <?php if($pdata != NULL){ $sdate1 = false; $sdate2 = false; 
                    if($reposses->reposses_dsat_1 != ""){
                      $sdate1_data = explode("/", $reposses->reposses_dsat_1);
                      $sdate1 = true;
                    } 

                    if($reposses->reposses_dsat_2 != ""){
                      $sdate2_data = explode("/", $reposses->reposses_dsat_2);
                      $sdate2 = true;
                    } 
                  }
                  ?>
                  <td class="text-center">
                    <input id="dsat_date_9_4_1_1" type="text" value="<?php if($pdata != NULL){ echo $sdate1_data[0]; } ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="dsat_month_9_4_1_1" type="text" value="<?php if($pdata != NULL){ echo $sdate1_data[1]; } ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="dsat_year_9_4_1_1" type="text" value="<?php if($pdata != NULL){ echo $sdate1_data[2]; } ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="dsat_calendar_9_4_1_1" class="selectDate" />
                  </td>
                  <td class="text-center">
                    <input id="dsat_date_9_4_1_2" type="text" value="<?php if($pdata != NULL){ echo $sdate2_data[0]; } ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="dsat_month_9_4_1_2" type="text" value="<?php if($pdata != NULL){ echo $sdate2_data[1]; } ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="dsat_year_9_4_1_2" type="text" value="<?php if($pdata != NULL){ echo $sdate2_data[2]; } ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="dsat_calendar_9_4_1_2" class="selectDate" />
                  </td>
                </tr>
              </tbody>
            </table>
            <!--===== /9.4 RESPOSSESSIONS TABLE STARTS HERE=====-->

            <!--===== ADDITIONAL NOTES TABLE STARTS HERE=====-->
            <table class="table marTP-30">
                <thead class="">
                  <tr>
                    <th>Additional Notes</th>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <tr>
                    <td style="padding-right:0px;"><textarea style="text-transform: inherit!important;" class="form-control" id="" name="client_additionalnotes" rows="6" placeholder="Type additional notes here..."><?php if($pdata != NULL){ echo $pdata->client_additionalnotes; }  ?></textarea></td>
                  </tr>
                </tbody>
            </table>
            <!--===== /ADDITIONAL NOTES TABLE ENDS HERE=====-->

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
          <!--=======/FORM ENDS HERE===========-->
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

  var defCount = <?php if($pdata != NULL){ echo sizeof($county)*2; }else{echo "2";} ?>, bankCount = <?php if($pdata != NULL){ echo sizeof($bankruptcy)*2; }else{echo "2";} ?>, arrearCount = <?php if($pdata != NULL){ echo sizeof($arrear)*2; }else{echo "2";} ?>;
  $('.defRemove').unbind().click(function(){

    var addId = $(this).attr('id').split('_');
    defCount = defCount - 2;
    $('#defSec_'+addId[1]).remove();
    $(this).remove();

  });
  $('.bankRemove').unbind().click(function(){

    var addId = $(this).attr('id').split('_');
    bankCount = bankCount - 2;
    $('#bankSec1_'+addId[1]).remove();
    $('#bankSec2_'+addId[1]).remove();
    $(this).remove();

  });
  $('.arrearRemove').unbind().click(function(){

    var addId = $(this).attr('id').split('_');
    arrearCount = arrearCount - 2;
    $('#arrearSec_'+addId[1]).remove();
    $(this).remove();

  });
  $('#addCountry').click(function(){

    var counTxt = '';

    if(defCount < 6){

      defCount = defCount + 2;

      counTxt += '<div id="defrem_'+defCount+'" class="close-btn defRemove"><i class="fas fa-times-circle fa-2x"></i></div><table id="defSec_'+defCount+'" class="table " style="margin-bottom:10px;"> <thead> <tr> <th scope="col" style="border:0px;background-color:transparent;"></th> <th scope="col">CCJ / Default '+(defCount - 1)+'</th> <th scope="col">CCJ / Default '+defCount+'</th> </tr> </thead> <tbody class="table-bordered"> <tr> <td>Company</td> <td><input type="text" class="form-control" name="company_county_'+(defCount - 1)+'" placeholder="Type Company name"></td> <td><input type="text" class="form-control" name="company_county_'+defCount+'" placeholder="Type Company name"></td> </tr> <tr> <td>Amount</td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" class="form-control numcomma" name="company_amount_'+(defCount - 1)+'" placeholder="Type amount here"> </div> </td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" class="form-control numcomma" name="company_amount_'+defCount+'" placeholder="Type amount here"> </div> </td> </tr> <tr> <td>Client</td> <td class="text-center"> <center> <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Joint</label> <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="company_client_'+(defCount - 1)+'[]" value="Joint" id=""> </div> / <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Client 1</label> <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="company_client_'+(defCount - 1)+'[]" value="client_1" id=""> </div> / <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Client 2</label> <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="company_client_'+(defCount - 1)+'[]" value="client_2" id=""> </div> </center> </td> <td class="text-center"> <center> <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Joint</label> <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="company_client_'+defCount+'[]" value="Joint" id=""> </div> / <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Client 1</label> <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="company_client_'+defCount+'[]" value="client_1" id=""> </div> / <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Client 2</label> <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="company_client_'+defCount+'[]" value="client_2" id=""> </div> </center> </td> </tr> <tr> <td>Date Registered</td> <td class="text-center"> <input id="reg_date_9_1_1_'+(defCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / <input id="reg_month_9_1_1_'+(defCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / <input id="reg_year_9_1_1_'+(defCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Year"> <input type="hidden" id="reg_calendar_9_1_1_'+(defCount - 1)+'" class="selectDate" /> </td> <td class="text-center"> <input id="reg_date_9_1_1_'+defCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / <input id="reg_month_9_1_1_'+defCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / <input id="reg_year_9_1_1_'+defCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Year"> <input type="hidden" id="reg_calendar_9_1_1_'+defCount+'" class="selectDate" /> </td> </tr> <tr> <td>To be repaid with mortgage?</td> <td class="text-center"> <center> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Yes</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="county_repaid_'+(defCount - 1)+'" value="Yes" id=""> </div> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">No</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="county_repaid_'+(defCount - 1)+'" value="No" id=""> </div> </center> </td> <td class="text-center"> <center> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Yes</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="county_repaid_'+defCount+'" value="Yes" id=""> </div> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">No</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="county_repaid_'+defCount+'" value="No" id=""> </div> </center> </td> </tr> <tr> <td>Settled?</td> <td class="text-center"> <center> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Yes</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="county_settle_'+(defCount - 1)+'" value="Yes" id=""> </div> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">No</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="county_settle_'+(defCount - 1)+'" value="No" id=""> </div> </center> </td> <td class="text-center"> <center> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Yes</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="county_settle_'+defCount+'" value="Yes" id=""> </div> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">No</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="county_settle_'+defCount+'" value="No" id=""> </div> </center> </td> </tr> <tr> <td>Settled Date</td> <td class="text-center"> <input id="setdate_date_9_1_1_'+(defCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / <input id="setdate_month_9_1_1_'+(defCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / <input id="setdate_year_9_1_1_'+(defCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Year"> <input type="hidden" id="setdate_calendar_9_1_1_'+(defCount - 1)+'" class="selectDate" /> </td> <td class="text-center"> <input id="setdate_date_9_1_1_'+defCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / <input id="setdate_month_9_1_1_'+defCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / <input id="setdate_year_9_1_1_'+defCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Year"> <input type="hidden" id="setdate_calendar_9_1_1_'+defCount+'" class="selectDate" /> </td> </tr> <tr> <td>Category</td> <td class="text-center"> <center> <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">CCJ</label> <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="CCJ" id=""> </div> <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Default</label> <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="" value="Default" id=""> </div> </center> </td> <td class="text-center"> <center> <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">CCJ</label> <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="CCJ" id=""> </div> <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Default</label> <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="" value="Default" id=""> </div> </center> </td> </tr> </tbody> </table>';

      $(counTxt).insertBefore('#addCountry').parent();

      $('.numcomma').keyup(function(){
        $(this).val(function(index, value) {
            value = value.replace(/,/g,'');
            return numberWithCommas(value);
        });
      });

      //To remove section
      $('.defRemove').unbind().click(function(){

        var addId = $(this).attr('id').split('_');
        defCount = defCount - 2;
        $('#defSec_'+addId[1]).remove();
        $(this).remove();

      });

      selectDate();
      checkSelection();

    }

  });


  $('#addBankruptcy').click(function(){

    var bankTxt = "";

    if(bankCount < 6){

      bankCount = bankCount + 2;

      bankTxt += '<div id="bankrem_'+bankCount+'" class="close-btn bankRemove"><i class="fas fa-times-circle fa-2x"></i></div><table id="bankSec1_'+bankCount+'" class="table "> <thead> <tr> <th scope="col" style="border:0px;background-color:transparent;"></th> <th scope="col">CCJ / Default '+(bankCount - 1)+'</th> <th scope="col">CCJ / Default '+bankCount+'</th> </tr> </thead> <tbody class="table-bordered"> <tr> <td>Bankruptcy Amount</td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" class="form-control numcomma" name="bank_ccjamount_'+(bankCount - 1)+'" placeholder="Type amount here"> </div> </td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" class="form-control numcomma" name="bank_ccjamount_'+bankCount+'" placeholder="Type amount here"> </div> </td> </tr> <tr> <td>Client</td> <td class="text-center"> <center> <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Joint</label> <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="bank_ccjclient_'+(bankCount - 1)+'[]" value="Joint" id=""> </div> / <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Client 1</label> <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="bank_ccjclient_'+(bankCount - 1)+'[]" value="client_1" id=""> </div> / <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Client 2</label> <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="bank_ccjclient_'+(bankCount - 1)+'[]" value="client_2" id=""> </div> </center> </td> <td class="text-center"> <center> <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Joint</label> <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="bank_ccjclient_'+bankCount+'[]" value="Joint" id=""> </div> / <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Client 1</label> <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="bank_ccjclient_'+bankCount+'[]" value="client_1" id=""> </div> / <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Client 2</label> <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="bank_ccjclient_'+bankCount+'[]" value="client_2" id=""> </div> </center> </td> </tr> <tr> <td>Bankruptcy Date</td> <td class="text-center"> <input id="bdate_date_9_2_1_'+(bankCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / <input id="bdate_month_9_2_1_'+(bankCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / <input id="bdate_year_9_2_1_'+(bankCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Year"> <input type="hidden" id="bdate_calendar_9_2_1_'+(bankCount - 1)+'" class="selectDate" /> </td> <td class="text-center"> <input id="bdate_date_9_2_1_'+bankCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / <input id="bdate_month_9_2_1_'+bankCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / <input id="bdate_year_9_2_1_'+bankCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Year"> <input type="hidden" id="bdate_calendar_9_2_1_'+bankCount+'" class="selectDate" /> </td> </tr> <tr> <td>Discharge Date</td> <td class="text-center"> <input id="disdate_date_9_2_1_'+(bankCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / <input id="disdate_month_9_2_1_'+(bankCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / <input id="disdate_year_9_2_1_'+(bankCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Year"> <input type="hidden" id="disdate_calendar_9_2_1_'+(bankCount - 1)+'" class="selectDate" /> </td> <td class="text-center"> <input id="disdate_date_9_2_1_'+bankCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / <input id="disdate_month_9_2_1_'+bankCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / <input id="disdate_year_9_2_1_'+bankCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Year"> <input type="hidden" id="disdate_calendar_9_2_1_'+bankCount+'" class="selectDate" /> </td> </tr> </tbody> </table>';

      bankTxt += '<table id="bankSec2_'+bankCount+'" class="table" style="margin-top: 10px;margin-bottom:10px;"> <thead> <tr> <th scope="col" style="border:0px;background-color:transparent;"></th> <th scope="col">Individual Voluntary Agreement <br/> '+(bankCount - 1)+'</th> <th scope="col">Individual Voluntary Agreement <br/> '+bankCount+'</th> </tr> </thead> <tbody class="table-bordered"> <tr> <td>Client</td> <td class="text-center"> <center> <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Joint</label> <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="bank_indclient_'+(bankCount - 1)+'[]" value="Joint" id=""> </div> / <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Client 1</label> <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="bank_indclient_'+(bankCount - 1)+'[]" value="client_1" id=""> </div> / <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Client 2</label> <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="bank_indclient_'+(bankCount - 1)+'[]" value="client_2" id=""> </div> </center> </td> <td class="text-center"> <center> <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Joint</label> <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="bank_indclient_'+bankCount+'[]" value="Joint" id=""> </div> / <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Client 1</label> <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="bank_indclient_'+bankCount+'[]" value="client_1" id=""> </div> / <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Client 2</label> <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="bank_indclient_'+bankCount+'[]" value="client_2" id=""> </div> </center> </td> </tr> <tr> <td>Date Registered</td> <td class="text-center"> <input id="reg_date_9_2_1_'+(bankCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / <input id="reg_month_9_2_1_'+(bankCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / <input id="reg_year_9_2_1_'+(bankCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Year"> <input type="hidden" id="reg_calendar_9_2_1_'+(bankCount - 1)+'" class="selectDate" /> </td> <td class="text-center"> <input id="reg_date_9_2_1_'+bankCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / <input id="reg_month_9_2_1_'+bankCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / <input id="reg_year_9_2_1_'+bankCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Year"> <input type="hidden" id="reg_calendar_9_2_1_'+bankCount+'" class="selectDate" /> </td> </tr> <tr> <td>Amount</td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" class="form-control numcomma" name="bank_indamount_'+(bankCount - 1)+'" placeholder="Type amount here"> </div> </td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" class="form-control numcomma" name="bank_indamount_'+bankCount+'" placeholder="Type amount here"> </div> </td> </tr> <tr> <td>Date Satisfied</td> <td class="text-center"> <input id="sdate_date_9_2_1_'+(bankCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / <input id="sdate_month_9_2_1_'+(bankCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / <input id="sdate_year_9_2_1_'+(bankCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Year"> <input type="hidden" id="sdate_calendar_9_2_1_'+(bankCount - 1)+'" class="selectDate" /> </td> <td class="text-center"> <input id="sdate_date_9_2_1_'+bankCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / <input id="sdate_month_9_2_1_'+bankCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / <input id="sdate_year_9_2_1_'+bankCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Year"> <input type="hidden" id="sdate_calendar_9_2_1_'+bankCount+'" class="selectDate" /> </td> </tr> </tbody> </table>';

      $(bankTxt).insertBefore('#addBankruptcy').parent();

      $('.numcomma').keyup(function(){
        $(this).val(function(index, value) {
            value = value.replace(/,/g,'');
            return numberWithCommas(value);
        });
      });

      //To remove section
      $('.bankRemove').unbind().click(function(){

        var addId = $(this).attr('id').split('_');
        bankCount = bankCount - 2;
        $('#bankSec1_'+addId[1]).remove();
        $('#bankSec2_'+addId[1]).remove();
        $(this).remove();

      });

      selectDate();
      checkSelection();

    }

  });

  $('#addArrear').click(function(){

    var arrTxt = "";

    if(arrearCount < 6){

      arrearCount = arrearCount + 2;

      arrTxt += '<div id="arrearrem_'+arrearCount+'" class="close-btn arrearRemove"><i class="fas fa-times-circle fa-2x"></i></div><table class="table" id="arrearSec_'+arrearCount+'" style="margin-bottom:10px;"> <thead> <tr> <th scope="col" style="border:0px;background-color:transparent;"></th> <th scope="col">arrear '+(arrearCount - 1)+'</th> <th scope="col">arrear '+arrearCount+'</th> </tr> </thead> <tbody class="table-bordered"> <tr> <td>Company</td> <td><input type="text" class="form-control" name="arrear_company_'+(arrearCount - 1)+'" placeholder="Type Company name"></td> <td><input type="text" class="form-control" name="arrear_company_'+arrearCount+'" placeholder="Type Company name"></td> </tr> <tr> <td>Outstanding Amount</td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" class="form-control numcomma" name="arrear_amount_'+(arrearCount - 1)+'" placeholder="Type amount here"> </div> </td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" name="arrear_amount_'+arrearCount+'" class="form-control numcomma" placeholder="Type amount here"> </div> </td> </tr> <tr> <td>Client</td> <td class="text-center"> <center> <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Joint</label> <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="arrear_client_'+(arrearCount - 1)+'[]" value="Joint" id=""> </div> / <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Client 1</label> <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="arrear_client_'+(arrearCount - 1)+'[]" value="client_1" id=""> </div> / <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Client 2</label> <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="arrear_client_'+(arrearCount - 1)+'[]" value="client_2" id=""> </div> </center> </td> <td class="text-center"> <center> <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Joint</label> <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="arrear_client_'+arrearCount+'[]" value="Joint" id=""> </div> / <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Client 1</label> <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="arrear_client_'+arrearCount+'[]" value="client_1" id=""> </div> / <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Client 2</label> <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="arrear_client_'+arrearCount+'[]" value="client_2" id=""> </div> </center> </td> </tr> <tr> <td>Number of missed payments</td> <td><input type="text" class="form-control" name="arrear_missedpay_'+(arrearCount - 1)+'" placeholder="Type no. of missed payments here"></td> <td><input type="text" class="form-control" name="arrear_missedpay_'+arrearCount+'" placeholder="Type no. of missed payments here"></td> </tr> <tr> <td>Date of last missed</td> <td class="text-center"> <input id="missed_date_9_3_1_'+(arrearCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / <input id="missed_month_9_3_1_'+(arrearCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / <input id="missed_year_9_3_1_'+(arrearCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Year"> <input type="hidden" id="missed_calendar_9_3_1_'+(arrearCount - 1)+'" class="selectDate" /> </td> <td class="text-center"> <input id="missed_date_9_3_1_'+arrearCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / <input id="missed_month_9_3_1_'+arrearCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / <input id="missed_year_9_3_1_'+arrearCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Year"> <input type="hidden" id="missed_calendar_9_3_1_'+arrearCount+'" class="selectDate" /> </td> </tr> <tr> <td>Settled?</td> <td class="text-center"> <center> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Yes</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="arrear_settle_'+(arrearCount - 1)+'" value="Yes" id=""> </div> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">No</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="arrear_settle_'+(arrearCount - 1)+'" value="No" id=""> </div> </center> </td> <td class="text-center"> <center> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Yes</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="arrear_settle_'+arrearCount+'" value="Yes" id=""> </div> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">No</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="arrears_settle_2" value="No" id=""> </div> </center> </td> </tr> <tr> <td>Date Satisfied</td> <td class="text-center"> <input id="dsat_date_9_3_1_'+(arrearCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / <input id="dsat_month_9_3_1_'+(arrearCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / <input id="dsat_year_9_3_1_'+(arrearCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Year"> <input type="hidden" id="dsat_calendar_9_3_1_'+(arrearCount - 1)+'" class="selectDate" /> </td> <td class="text-center"> <input id="dsat_date_9_3_1_'+arrearCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / <input id="dsat_month_9_3_1_'+arrearCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / <input id="dsat_year_9_3_1_'+arrearCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Year"> <input type="hidden" id="dsat_calendar_9_3_1_'+arrearCount+'" class="selectDate" /> </td> </tr> </tbody> </table>';

      $(arrTxt).insertBefore('#addArrear').parent();

      $('.numcomma').keyup(function(){
        $(this).val(function(index, value) {
            value = value.replace(/,/g,'');
            return numberWithCommas(value);
        });
      });

      //To remove section
      $('.arrearRemove').unbind().click(function(){

        var addId = $(this).attr('id').split('_');
        arrearCount = arrearCount - 2;
        $('#arrearSec_'+addId[1]).remove();
        $(this).remove();

      });
      selectDate();
      checkSelection();
    
    }

  });


  $("#clientform").submit(function(event) {
      event.preventDefault();
  }).validate({
    rules:{

    },
    submitHandler: function(form) { 

      var formData = $("#clientform").serialize(), countyArr = [], countyObj = {}, bankObj = {}, bankArr = [], arrearObj = {}, arrearArr = [], repossession = {};

      //Default Data
      for(var i = 1; i <= defCount; i++){

        countyObj = {};

        if(i % 2 == 0){

        }
        else{
          var clientArr1 =  document.getElementsByName("company_client_"+i+"[]"), client1 = "";
          var clientArr2 = document.getElementsByName("company_client_"+(i+1)+"[]"), client2 = "";

          for(j = 0; j < clientArr1.length; j++)
          {
              if(clientArr1[j].checked){
                client1 += clientArr1[j].value+",";
              }
          } 

          for(k = 0; k < clientArr2.length; k++)
          {
              if(clientArr2[k].checked){
                client2 += clientArr2[k].value+",";
              }
          } 
          countyObj["company_county_"+i] = $("input[name='company_county_"+i+"']").val();
          countyObj["company_county_"+(i+1)] = $("input[name='company_county_"+(i+1)+"']").val();
          countyObj["company_amount_"+i] = $("input[name='company_amount_"+i+"']").val();
          countyObj["company_amount_"+(i+1)] = $("input[name='company_amount_"+(i+1)+"']").val();
          countyObj["company_client_"+i] = client1;
          countyObj["company_client_"+(i+1)] = client2;
          countyObj["county_regdate_"+i] = $("#reg_date_9_1_1_"+i).val()+"/"+$("#reg_month_9_1_1_"+i).val()+"/"+$("#reg_year_9_1_1_"+i).val();
          countyObj["county_regdate_"+(i+1)] = $("#reg_date_9_1_1_"+(i+1)).val()+"/"+$("#reg_month_9_1_1_"+(i+1)).val()+"/"+$("#reg_year_9_1_1_"+(i+1)).val();
          countyObj["county_repaid_"+i] = $("input[name='county_repaid_"+i+"']:checked").val();
          countyObj["county_repaid_"+(i+1)] = $("input[name='county_repaid_"+(i+1)+"']:checked").val();
          countyObj["county_settle_"+i] = $("input[name='county_settle_"+i+"']:checked").val();
          countyObj["county_settle_"+(i+1)] = $("input[name='county_settle_"+(i+1)+"']:checked").val();
          countyObj["county_setdate_"+i] = $("#setdate_date_9_1_1_"+i).val()+"/"+$("#setdate_month_9_1_1_"+i).val()+"/"+$("#setdate_year_9_1_1_"+i).val();
          countyObj["county_setdate_"+(i+1)] = $("#setdate_date_9_1_1_"+(i+1)).val()+"/"+$("#setdate_month_9_1_1_"+(i+1)).val()+"/"+$("#setdate_year_9_1_1_"+(i+1)).val();
          countyObj["county_category_"+i] = $("input[name='county_category_"+i+"']:checked").val();
          countyObj["county_category_"+(i+1)] = $("input[name='county_category_"+(i+1)+"']:checked").val();

          countyArr.push(countyObj);
        }
      }

      //Bankruptcy
      for(var i = 1; i <= bankCount; i++){

        bankObj = {};

        if(i % 2 == 0){

        }
        else{
          var clientArr1 =  document.getElementsByName("bank_ccjclient_"+i+"[]"), client1 = "";
          var clientArr2 = document.getElementsByName("bank_ccjclient_"+(i+1)+"[]"), client2 = "";

          var bclientArr1 =  document.getElementsByName("bank_indclient_"+i+"[]"), bclient1 = "";
          var bclientArr2 = document.getElementsByName("bank_indclient_"+(i+1)+"[]"), bclient2 = "";

          for(j = 0; j < clientArr1.length; j++)
          {
              if(clientArr1[j].checked){
                client1 += clientArr1[j].value+",";
              }
          } 

          for(k = 0; k < clientArr2.length; k++)
          {
              if(clientArr2[k].checked){
                client2 += clientArr2[k].value+",";
              }
          } 

          for(j = 0; j < bclientArr1.length; j++)
          {
              if(bclientArr1[j].checked){
                bclient1 += bclientArr1[j].value+",";
              }
          } 

          for(k = 0; k < bclientArr2.length; k++)
          {
              if(bclientArr2[k].checked){
                bclient2 += bclientArr2[k].value+",";
              }
          } 

          bankObj["bank_ccjamount_"+i] = $("input[name='bank_ccjamount_"+i+"']").val();
          bankObj["bank_ccjamount_"+(i+1)] = $("input[name='bank_ccjamount_"+(i+1)+"']").val();
          bankObj["bank_ccjclient_"+i] = client1;
          bankObj["bank_ccjclient_"+(i+1)] = client2;
          bankObj["bank_date_"+i] = $("#bdate_date_9_2_1_"+i).val()+"/"+$("#bdate_month_9_2_1_"+i).val()+"/"+$("#bdate_year_9_2_1_"+i).val();
          bankObj["bank_date_"+(i+1)] = $("#bdate_date_9_2_1_"+(i+1)).val()+"/"+$("#bdate_month_9_2_1_"+(i+1)).val()+"/"+$("#bdate_year_9_2_1_"+(i+1)).val();
          bankObj["bank_disdate_"+i] = $("#disdate_date_9_2_1_"+i).val()+"/"+$("#disdate_month_9_2_1_"+i).val()+"/"+$("#disdate_year_9_2_1_"+i).val();
          bankObj["bank_disdate_"+(i+1)] = $("#disdate_date_9_2_1_"+(i+1)).val()+"/"+$("#disdate_month_9_2_1_"+(i+1)).val()+"/"+$("#disdate_year_9_2_1_"+(i+1)).val();

          bankObj["bank_indclient_"+i] = bclient1;
          bankObj["bank_indclient_"+(i+1)] = bclient2;
          bankObj["bank_indregdate_"+i] = $("#reg_date_9_2_1_"+i).val()+"/"+$("#reg_month_9_2_1_"+i).val()+"/"+$("#reg_year_9_2_1_"+i).val();
          bankObj["bank_indregdate_"+(i+1)] = $("#reg_date_9_2_1_"+(i+1)).val()+"/"+$("#reg_month_9_2_1_"+(i+1)).val()+"/"+$("#reg_year_9_2_1_"+(i+1)).val();
          bankObj["bank_indamount_"+i] = $("input[name='bank_indamount_"+i+"']").val();
          bankObj["bank_indamount_"+(i+1)] = $("input[name='bank_indamount_"+(i+1)+"']").val();
          bankObj["bank_indsdate_"+i] = $("#sdate_date_9_2_1_"+i).val()+"/"+$("#sdate_month_9_2_1_"+i).val()+"/"+$("#sdate_year_9_2_1_"+i).val();
          bankObj["bank_indsdate_"+(i+1)] = $("#sdate_date_9_2_1_"+(i+1)).val()+"/"+$("#sdate_month_9_2_1_"+(i+1)).val()+"/"+$("#sdate_year_9_2_1_"+(i+1)).val();

          bankArr.push(bankObj);
          
        }
      }

      //Arrear Data
      for(var i = 1; i <= arrearCount; i++){

        arrearObj = {};

        if(i % 2 == 0){

        }
        else{
          var clientArr1 =  document.getElementsByName("arrear_client_"+i+"[]"), client1 = "";
          var clientArr2 = document.getElementsByName("arrear_client_"+(i+1)+"[]"), client2 = "";

          for(j = 0; j < clientArr1.length; j++)
          {
              if(clientArr1[j].checked){
                client1 += clientArr1[j].value+",";
              }
          } 

          for(k = 0; k < clientArr2.length; k++)
          {
              if(clientArr2[k].checked){
                client2 += clientArr2[k].value+",";
              }
          } 
          arrearObj["arrear_company_"+i] = $("input[name='arrear_company_"+i+"']").val();
          arrearObj["arrear_company_"+(i+1)] = $("input[name='arrear_company_"+(i+1)+"']").val();
          arrearObj["arrear_amount_"+i] = $("input[name='arrear_amount_"+i+"']").val();
          arrearObj["arrear_amount_"+(i+1)] = $("input[name='arrear_amount_"+(i+1)+"']").val();
          arrearObj["arrear_client_"+i] = client1;
          arrearObj["arrear_client_"+(i+1)] = client2;
          arrearObj["arrear_missedpay_"+i] = $("input[name='arrear_missedpay_"+i+"']").val();
          arrearObj["arrear_missedpay_"+(i+1)] = $("input[name='arrear_missedpay_"+(i+1)+"']").val();
          arrearObj["arrear_misseddate_"+i] = $("#missed_date_9_3_1_"+i).val()+"/"+$("#missed_month_9_3_1_"+i).val()+"/"+$("#missed_year_9_3_1_"+i).val();
          arrearObj["arrear_misseddate_"+(i+1)] = $("#missed_date_9_3_1_"+(i+1)).val()+"/"+$("#missed_month_9_3_1_"+(i+1)).val()+"/"+$("#missed_year_9_3_1_"+(i+1)).val();
          arrearObj["arrear_settle_"+i] = $("input[name='arrear_settle_"+i+"']:checked").val();
          arrearObj["arrear_settle_"+(i+1)] = $("input[name='arrear_settle_"+(i+1)+"']:checked").val();
          arrearObj["arrear_dsat_"+i] = $("#dsat_date_9_3_1_"+i).val()+"/"+$("#dsat_month_9_3_1_"+i).val()+"/"+$("#dsat_year_9_3_1_"+i).val();
          arrearObj["arrear_dsat_"+(i+1)] = $("#dsat_date_9_3_1_"+(i+1)).val()+"/"+$("#dsat_month_9_3_1_"+(i+1)).val()+"/"+$("#dsat_year_9_3_1_"+(i+1)).val();
          

          arrearArr.push(arrearObj);
        }
      }

      //Repossession
      var clientArr1 =  document.getElementsByName("reposses_client_1[]"), client1 = "";
      var clientArr2 = document.getElementsByName("reposses_client_2[]"), client2 = "";

      for(j = 0; j < clientArr1.length; j++)
      {
          if(clientArr1[j].checked){
            client1 += clientArr1[j].value+",";
          }
      } 

      for(k = 0; k < clientArr2.length; k++)
      {
          if(clientArr2[k].checked){
            client2 += clientArr2[k].value+",";
          }
      }
      repossession["reposses_client_1"] = client1;
      repossession["reposses_client_2"] = client2;
      repossession["reposses_regdate_1"] = $("#reg_date_9_4_1_1").val()+"/"+$("#reg_month_9_4_1_1").val()+"/"+$("#reg_year_9_4_1_1").val();
      repossession["reposses_regdate_2"] = $("#reg_date_9_4_1_2").val()+"/"+$("#reg_month_9_4_1_2").val()+"/"+$("#reg_year_9_4_1_2").val();
      repossession["reposses_amount_1"] = $("input[name='reposses_amount_1']").val();
      repossession["reposses_amount_2"] = $("input[name='reposses_amount_2']").val();
      repossession["reposses_dsat_1"] = $("#dsat_date_9_4_1_1").val()+"/"+$("#dsat_month_9_4_1_1").val()+"/"+$("#dsat_year_9_4_1_1").val();
      repossession["reposses_dsat_2"] = $("#dsat_date_9_4_1_2").val()+"/"+$("#dsat_month_9_4_1_2").val()+"/"+$("#dsat_year_9_4_1_2").val();

      formData = formData + "&county="+JSON.stringify(countyArr)+"&bankruptcy="+JSON.stringify(bankArr)+"&arrears="+JSON.stringify(arrearArr)+"&repossessions="+JSON.stringify(repossession);


      $.ajax({
        url:'<?php echo base_url(); ?>add/credithistory?form_id=<?php echo $last; ?>',
        type:'POST',
        data: formData,
        dataType: 'json',
        success:function(as){

            if(as.status){
              if(as.action == 'create'){
                location.href="<?php echo base_url(); ?>admin/mortgage-property/"+as.data;
              }
              else if(as.action == 'edit'){
                location.href="<?php echo base_url(); ?>admin/mortgage-property/"+as.data;
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

      var formData = $("#clientform").serialize(), countyArr = [], countyObj = {}, bankObj = {}, bankArr = [], arrearObj = {}, arrearArr = [], repossession = {};

      //Default Data
      for(var i = 1; i <= defCount; i++){

        countyObj = {};

        if(i % 2 == 0){

        }
        else{
          var clientArr1 =  document.getElementsByName("company_client_"+i+"[]"), client1 = "";
          var clientArr2 = document.getElementsByName("company_client_"+(i+1)+"[]"), client2 = "";

          for(j = 0; j < clientArr1.length; j++)
          {
              if(clientArr1[j].checked){
                client1 += clientArr1[j].value+",";
              }
          } 

          for(k = 0; k < clientArr2.length; k++)
          {
              if(clientArr2[k].checked){
                client2 += clientArr2[k].value+",";
              }
          } 
          countyObj["company_county_"+i] = $("input[name='company_county_"+i+"']").val();
          countyObj["company_county_"+(i+1)] = $("input[name='company_county_"+(i+1)+"']").val();
          countyObj["company_amount_"+i] = $("input[name='company_amount_"+i+"']").val();
          countyObj["company_amount_"+(i+1)] = $("input[name='company_amount_"+(i+1)+"']").val();
          countyObj["company_client_"+i] = client1;
          countyObj["company_client_"+(i+1)] = client2;
          countyObj["county_regdate_"+i] = $("#reg_date_9_1_1_"+i).val()+"/"+$("#reg_month_9_1_1_"+i).val()+"/"+$("#reg_year_9_1_1_"+i).val();
          countyObj["county_regdate_"+(i+1)] = $("#reg_date_9_1_1_"+(i+1)).val()+"/"+$("#reg_month_9_1_1_"+(i+1)).val()+"/"+$("#reg_year_9_1_1_"+(i+1)).val();
          countyObj["county_repaid_"+i] = $("input[name='county_repaid_"+i+"']:checked").val();
          countyObj["county_repaid_"+(i+1)] = $("input[name='county_repaid_"+(i+1)+"']:checked").val();
          countyObj["county_settle_"+i] = $("input[name='county_settle_"+i+"']:checked").val();
          countyObj["county_settle_"+(i+1)] = $("input[name='county_settle_"+(i+1)+"']:checked").val();
          countyObj["county_setdate_"+i] = $("#setdate_date_9_1_1_"+i).val()+"/"+$("#setdate_month_9_1_1_"+i).val()+"/"+$("#setdate_year_9_1_1_"+i).val();
          countyObj["county_setdate_"+(i+1)] = $("#setdate_date_9_1_1_"+(i+1)).val()+"/"+$("#setdate_month_9_1_1_"+(i+1)).val()+"/"+$("#setdate_year_9_1_1_"+(i+1)).val();
          countyObj["county_category_"+i] = $("input[name='county_category_"+i+"']:checked").val();
          countyObj["county_category_"+(i+1)] = $("input[name='county_category_"+(i+1)+"']:checked").val();

          countyArr.push(countyObj);
        }
      }

      //Bankruptcy
      for(var i = 1; i <= bankCount; i++){

        bankObj = {};

        if(i % 2 == 0){

        }
        else{
          var clientArr1 =  document.getElementsByName("bank_ccjclient_"+i+"[]"), client1 = "";
          var clientArr2 = document.getElementsByName("bank_ccjclient_"+(i+1)+"[]"), client2 = "";

          var bclientArr1 =  document.getElementsByName("bank_indclient_"+i+"[]"), bclient1 = "";
          var bclientArr2 = document.getElementsByName("bank_indclient_"+(i+1)+"[]"), bclient2 = "";

          for(j = 0; j < clientArr1.length; j++)
          {
              if(clientArr1[j].checked){
                client1 += clientArr1[j].value+",";
              }
          } 

          for(k = 0; k < clientArr2.length; k++)
          {
              if(clientArr2[k].checked){
                client2 += clientArr2[k].value+",";
              }
          } 

          for(j = 0; j < bclientArr1.length; j++)
          {
              if(bclientArr1[j].checked){
                bclient1 += bclientArr1[j].value+",";
              }
          } 

          for(k = 0; k < bclientArr2.length; k++)
          {
              if(bclientArr2[k].checked){
                bclient2 += bclientArr2[k].value+",";
              }
          } 

          bankObj["bank_ccjamount_"+i] = $("input[name='bank_ccjamount_"+i+"']").val();
          bankObj["bank_ccjamount_"+(i+1)] = $("input[name='bank_ccjamount_"+(i+1)+"']").val();
          bankObj["bank_ccjclient_"+i] = client1;
          bankObj["bank_ccjclient_"+(i+1)] = client2;
          bankObj["bank_date_"+i] = $("#bdate_date_9_2_1_"+i).val()+"/"+$("#bdate_month_9_2_1_"+i).val()+"/"+$("#bdate_year_9_2_1_"+i).val();
          bankObj["bank_date_"+(i+1)] = $("#bdate_date_9_2_1_"+(i+1)).val()+"/"+$("#bdate_month_9_2_1_"+(i+1)).val()+"/"+$("#bdate_year_9_2_1_"+(i+1)).val();
          bankObj["bank_disdate_"+i] = $("#disdate_date_9_2_1_"+i).val()+"/"+$("#disdate_month_9_2_1_"+i).val()+"/"+$("#disdate_year_9_2_1_"+i).val();
          bankObj["bank_disdate_"+(i+1)] = $("#disdate_date_9_2_1_"+(i+1)).val()+"/"+$("#disdate_month_9_2_1_"+(i+1)).val()+"/"+$("#disdate_year_9_2_1_"+(i+1)).val();

          bankObj["bank_indclient_"+i] = bclient1;
          bankObj["bank_indclient_"+(i+1)] = bclient2;
          bankObj["bank_indregdate_"+i] = $("#reg_date_9_2_1_"+i).val()+"/"+$("#reg_month_9_2_1_"+i).val()+"/"+$("#reg_year_9_2_1_"+i).val();
          bankObj["bank_indregdate_"+(i+1)] = $("#reg_date_9_2_1_"+(i+1)).val()+"/"+$("#reg_month_9_2_1_"+(i+1)).val()+"/"+$("#reg_year_9_2_1_"+(i+1)).val();
          bankObj["bank_indamount_"+i] = $("input[name='bank_indamount_"+i+"']").val();
          bankObj["bank_indamount_"+(i+1)] = $("input[name='bank_indamount_"+(i+1)+"']").val();
          bankObj["bank_indsdate_"+i] = $("#sdate_date_9_2_1_"+i).val()+"/"+$("#sdate_month_9_2_1_"+i).val()+"/"+$("#sdate_year_9_2_1_"+i).val();
          bankObj["bank_indsdate_"+(i+1)] = $("#sdate_date_9_2_1_"+(i+1)).val()+"/"+$("#sdate_month_9_2_1_"+(i+1)).val()+"/"+$("#sdate_year_9_2_1_"+(i+1)).val();

          bankArr.push(bankObj);
          
        }
      }

      //Arrear Data
      for(var i = 1; i <= arrearCount; i++){

        arrearObj = {};

        if(i % 2 == 0){

        }
        else{
          var clientArr1 =  document.getElementsByName("arrear_client_"+i+"[]"), client1 = "";
          var clientArr2 = document.getElementsByName("arrear_client_"+(i+1)+"[]"), client2 = "";

          for(j = 0; j < clientArr1.length; j++)
          {
              if(clientArr1[j].checked){
                client1 += clientArr1[j].value+",";
              }
          } 

          for(k = 0; k < clientArr2.length; k++)
          {
              if(clientArr2[k].checked){
                client2 += clientArr2[k].value+",";
              }
          } 
          arrearObj["arrear_company_"+i] = $("input[name='arrear_company_"+i+"']").val();
          arrearObj["arrear_company_"+(i+1)] = $("input[name='arrear_company_"+(i+1)+"']").val();
          arrearObj["arrear_amount_"+i] = $("input[name='arrear_amount_"+i+"']").val();
          arrearObj["arrear_amount_"+(i+1)] = $("input[name='arrear_amount_"+(i+1)+"']").val();
          arrearObj["arrear_client_"+i] = client1;
          arrearObj["arrear_client_"+(i+1)] = client2;
          arrearObj["arrear_missedpay_"+i] = $("input[name='arrear_missedpay_"+i+"']").val();
          arrearObj["arrear_missedpay_"+(i+1)] = $("input[name='arrear_missedpay_"+(i+1)+"']").val();
          arrearObj["arrear_misseddate_"+i] = $("#missed_date_9_3_1_"+i).val()+"/"+$("#missed_month_9_3_1_"+i).val()+"/"+$("#missed_year_9_3_1_"+i).val();
          arrearObj["arrear_misseddate_"+(i+1)] = $("#missed_date_9_3_1_"+(i+1)).val()+"/"+$("#missed_month_9_3_1_"+(i+1)).val()+"/"+$("#missed_year_9_3_1_"+(i+1)).val();
          arrearObj["arrear_settle_"+i] = $("input[name='arrear_settle_"+i+"']:checked").val();
          arrearObj["arrear_settle_"+(i+1)] = $("input[name='arrear_settle_"+(i+1)+"']:checked").val();
          arrearObj["arrear_dsat_"+i] = $("#dsat_date_9_3_1_"+i).val()+"/"+$("#dsat_month_9_3_1_"+i).val()+"/"+$("#dsat_year_9_3_1_"+i).val();
          arrearObj["arrear_dsat_"+(i+1)] = $("#dsat_date_9_3_1_"+(i+1)).val()+"/"+$("#dsat_month_9_3_1_"+(i+1)).val()+"/"+$("#dsat_year_9_3_1_"+(i+1)).val();
          

          arrearArr.push(arrearObj);
        }
      }

      //Repossession
      var clientArr1 =  document.getElementsByName("reposses_client_1[]"), client1 = "";
      var clientArr2 = document.getElementsByName("reposses_client_2[]"), client2 = "";

      for(j = 0; j < clientArr1.length; j++)
      {
          if(clientArr1[j].checked){
            client1 += clientArr1[j].value+",";
          }
      } 

      for(k = 0; k < clientArr2.length; k++)
      {
          if(clientArr2[k].checked){
            client2 += clientArr2[k].value+",";
          }
      }
      repossession["reposses_client_1"] = client1;
      repossession["reposses_client_2"] = client2;
      repossession["reposses_regdate_1"] = $("#reg_date_9_4_1_1").val()+"/"+$("#reg_month_9_4_1_1").val()+"/"+$("#reg_year_9_4_1_1").val();
      repossession["reposses_regdate_2"] = $("#reg_date_9_4_1_2").val()+"/"+$("#reg_month_9_4_1_2").val()+"/"+$("#reg_year_9_4_1_2").val();
      repossession["reposses_amount_1"] = $("input[name='reposses_amount_1']").val();
      repossession["reposses_amount_2"] = $("input[name='reposses_amount_2']").val();
      repossession["reposses_dsat_1"] = $("#dsat_date_9_4_1_1").val()+"/"+$("#dsat_month_9_4_1_1").val()+"/"+$("#dsat_year_9_4_1_1").val();
      repossession["reposses_dsat_2"] = $("#dsat_date_9_4_1_2").val()+"/"+$("#dsat_month_9_4_1_2").val()+"/"+$("#dsat_year_9_4_1_2").val();

      formData = formData + "&county="+JSON.stringify(countyArr)+"&bankruptcy="+JSON.stringify(bankArr)+"&arrears="+JSON.stringify(arrearArr)+"&repossessions="+JSON.stringify(repossession);


      $.ajax({
        url:'<?php echo base_url(); ?>add/credithistory?form_id=<?php echo $last; ?>',
        type:'POST',
        data: formData,
        dataType: 'json',
        success:function(as){

            if(as.status){
              if(as.action == 'create'){
                location.href="<?php echo base_url(); ?>admin/expenditure-budget/"+as.data;
              }
              else if(as.action == 'edit'){
                location.href="<?php echo base_url(); ?>admin/expenditure-budget/"+as.data;
              }
            }
            else{
              alert(as.message);
            }
        }
      });

  });


</script>
