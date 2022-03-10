<?php 
//$page = 'dashboard';
include 'find-fact-header.php'
?>

<style>
  .col-md-10 {
  width: 78%!important;
  }

  .col-md-11 {
    width: 85%!important;
  }
</style>
<?php

$pdata = $this->admin->getExPropMortgage($last); 

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
          <h4>Section 6: Existing Property & Mortgages</h4>

          <!--========FORM SUB-SECTION HEADING==========-->
          <h5>6.1 Summary</h5>
          
          <!--=======FORM STARTS HERE===========-->
          <form id="clientform">

            <!--=====6.1 SUMMARY TABLE STARTS HERE=====-->
            <table class="financial-table" style="margin-top: 20px;">
              <tbody class="table-bordered">
                <tr>
                  <td>How many residential properties do you own?</td>
                  <td>
                    <input type="text" class="form-control" name="summary_1" value="<?php if($pdata != NULL){ echo $pdata->summary_1; } ?>" id="" placeholder="Type no. here">
                  </td>
                </tr>

                <tr>
                  <td>How many buy-to-let properties do you own?</td>
                  <td>
                    <input type="text" class="form-control" name="summary_2" value="<?php if($pdata != NULL){ echo $pdata->summary_2; } ?>" id="" placeholder="Type no. here">              
                  </td>
                </tr>        
              </tbody>
            </table> 
            <!--=====/6.1 SUMMARY TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">6.2 Existing Residential Property</h5>

            <!--=====6.2 EXISTING RESIDENTIAL PROPERTY TABLE STARTS HERE=====-->
            <?php if($pdata != NULL){ $pLoan = json_decode($pdata->res_prop, true); $i = 0; ?>
            <?php foreach($pLoan as $key => $value){ $i = $i+2; ?>
            <?php if($i > 2){ ?>
            <div id="resrem_<?php echo $i; ?>" class="close-btn resRemove"><i class="fas fa-times-circle fa-2x"></i></div>
            <?php } ?>
            <!--TABLE 1 STARTS HERE-->
            <table id="resSec1_<?php echo $i; ?>" class="table">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col">Existing Residential (<?php echo $i-1; ?>)</th>
                  <th scope="col">Existing Residential (<?php echo $i; ?>)</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td>Property Address</td>
                  <td><textarea class="form-control" id="" name="res_propaddress_<?php echo $i-1; ?>" rows="4" placeholder="Type ypur existing property address here..."><?php echo $value["res_propaddress_".($i-1)]; ?></textarea></td>
                  <td><textarea class="form-control" id="" name="res_propaddress_<?php echo $i; ?>" rows="4" placeholder="Type your existing property address here..."><?php echo $value["res_propaddress_".$i]; ?></textarea></td>
                </tr>

                <tr>
                  <td>Owner</td>
                  <?php $b1 = explode(",", $value["res_owner_".($i-1)]); ?>
                  <?php $b2 = explode(",", $value["res_owner_".$i]); ?>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" <?php if(in_array( "Joint" , $b1 )){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="res_owner_<?php echo $i-1; ?>[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" <?php if(in_array( "client_1" , $b1 )){echo "checked";} ?> style="margin-left: -0.15rem;" type="checkbox" name="res_owner_<?php echo $i-1; ?>[]" value="client_1" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" <?php if(in_array( "client_2" , $b1 )){echo "checked";} ?> style="margin-left:-0.15rem;" type="checkbox" name="res_owner_<?php echo $i-1; ?>[]" value="client_2" id="">
                      </div>
                    </center>
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" <?php if(in_array( "Joint" , $b2 )){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="res_owner_<?php echo $i; ?>[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input"  <?php if(in_array( "client_1" , $b2 )){echo "checked";} ?> style="margin-left: -0.15rem;" type="checkbox" name="res_owner_<?php echo $i; ?>[]" value="client_1" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" <?php if(in_array( "client_2" , $b2 )){echo "checked";} ?> style="margin-left:-0.15rem;" type="checkbox" name="res_owner_<?php echo $i; ?>[]" value="client_2" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>Estimated Property Value</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="res_estimatedval_<?php echo $i-1; ?>" value="<?php echo $value["res_estimatedval_".($i-1)]; ?>" placeholder="Type amount here">
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span> -->
                    
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="res_estimatedval_<?php echo $i; ?>" value="<?php echo $value["res_estimatedval_".$i]; ?>" placeholder="Type amount here">
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span> -->
                  </td>
                </tr>

                <tr>
                  <td>If selling, what is the sale price?</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="res_saleprice_<?php echo $i-1; ?>" value="<?php echo $value["res_saleprice_".($i-1)]; ?>" placeholder="Type amount here">
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span> -->
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="res_saleprice_<?php echo $i; ?>" value="<?php echo $value["res_saleprice_".$i]; ?>" placeholder="Type amount here">
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span> -->
                  </td>                  
                </tr>
              </tbody>
            </table>
            <!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table id="resSec2_<?php echo $i; ?>" class="table" style="margin-top: 10px;">
                <tbody class="table-bordered">
                  <tr>
                    <td>Is there a mortgage secured<br/>against this property?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_existingmortgage_".($i-1)]) && $value["client_existingmortgage_".($i-1)] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingmortgage_<?php echo $i-1; ?>" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_existingmortgage_".($i-1)]) && $value["client_existingmortgage_".($i-1)] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingmortgage_<?php echo $i-1; ?>" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_existingmortgage_".$i]) && $value["client_existingmortgage_".$i] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingmortgage_<?php echo $i; ?>" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_existingmortgage_".$i]) && $value["client_existingmortgage_".$i] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingmortgage_<?php echo $i; ?>" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>
                </tbody>
            </table><!--/TABLE 2 ENDS HERE-->

            <!--TABLE 3 STARTS HERE-->
            <table id="resSec3_<?php echo $i; ?>" class="table" style="margin-top: 10px;">
              <tbody class="table-bordered">
                <tr>
                  <td>Lender</td>
                  <td><input type="text" class="form-control" name="res_lender_<?php echo $i-1; ?>" value="<?php echo $value["res_lender_".($i-1)]; ?>" placeholder="Type Lender"></td>
                  <td><input type="text" class="form-control" name="res_lender_<?php echo $i; ?>" value="<?php echo $value["res_lender_".$i]; ?>" placeholder="Type Lender"></td>
                </tr>

                <tr>
                  <td>Mortgage Account Number</td>
                  <td><input type="text" class="form-control" name="res_macctno_<?php echo $i-1; ?>" value="<?php echo $value["res_macctno_".($i-1)]; ?>" placeholder="Mortgage account no."></td>
                  <td><input type="text" class="form-control" name="res_macctno_<?php echo $i; ?>" value="<?php echo $value["res_macctno_".$i]; ?>" placeholder="Mortgage account no."></td>
                </tr>

                <tr>
                  <td>Amount of Loan Outstanding</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="res_loanout_<?php echo $i-1; ?>" value="<?php echo $value["res_loanout_".($i-1)]; ?>" placeholder="Type amount here">
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span> -->
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="res_loanout_<?php echo $i; ?>" value="<?php echo $value["res_loanout_".$i]; ?>" placeholder="Type amount here">
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span> -->
                  </td>
                </tr>

                <tr>
                  <td>Term Remaining</td>
                  <td><input type="text" class="form-control" name="res_termremain_<?php echo $i-1; ?>" value="<?php echo $value["res_termremain_".($i-1)] ?>" placeholder="Type term remaining"></td>
                  <td><input type="text" class="form-control" name="res_termremain_<?php echo $i; ?>" value="<?php echo $value["res_termremain_".$i] ?>" placeholder="Type term remaining"></td>
                </tr>

                <tr>
                  <td>To be Redeemed?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existingredeem_".($i-1)]) && $value["client_existingredeem_".($i-1)] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingredeem_<?php echo $i-1; ?>" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existingredeem_".($i-1)]) && $value["client_existingredeem_".($i-1)] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingredeem_<?php echo $i-1; ?>" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existingredeem_".$i]) && $value["client_existingredeem_".$i] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingredeem_<?php echo $i; ?>" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existingredeem_".$i]) && $value["client_existingredeem_".$i] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingredeem_<?php echo $i; ?>" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 3 ENDS HERE-->

            <!--TABLE 4 STARTS HERE-->
            <table id="resSec4_<?php echo $i; ?>" class="table" style="margin-top: 10px;">
                <tbody class="table-bordered">
                <tr>
                    <td>Current Interest Rate</td>
                    <td>
                    <div class="input-group">                      
                        <input type="text" class="form-control" name="res_currinterest_<?php echo $i-1; ?>" value="<?php echo $value["res_currinterest_".($i-1)] ?>" placeholder="Type current rate">
                        <div class="input-group-prepend">
                        <div class="input-group-text">%</div>
                        </div>
                    </div>
                    <!-- <span class="" style="margin: 5px;"">%</span> -->                    
                    </td>
                    <td>
                    <div class="input-group">                      
                        <input type="text" class="form-control" name="res_currinterest_<?php echo $i; ?>" value="<?php echo $value["res_currinterest_".$i] ?>" placeholder="Type current rate">
                        <div class="input-group-prepend">
                        <div class="input-group-text">%</div>
                        </div>
                    </div>
                    <!-- <span class="" style="margin: 5px;"">%</span> -->                    
                    </td>
                </tr>

                <tr>
                    <td>Monthly Mortgage Payment</td>
                    <td>
                    <span style="margin:0px 5px;">£</span>
                    <input type="text" class="form-control numcomma col-md-10 date-input-box text-right" name="res_monthlymortgage_<?php echo $i-1; ?>" value="<?php echo $value["res_monthlymortgage_".($i-1)] ?>" placeholder="Type amount here">
                    <span style="margin:5px;">p.m.</span>
                    </td>
                    <td>
                    <span style="margin:0px 5px;">£</span>
                    <input type="text" class="form-control numcomma col-md-10 date-input-box text-right" name="res_monthlymortgage_<?php echo $i; ?>" value="<?php echo $value["res_monthlymortgage_".$i] ?>" placeholder="Type amount here">
                    <span style="margin:5px;">p.m.</span>
                    </td>
                </tr>

                <tr>
                    <td>Interest Rate Type</td>
                    <td>
                    <div class="form-check">
                        <label class="ver-check-label" for="">Fixed Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existinginteresttype_".($i-1)]) && $value["client_existinginteresttype_".($i-1)] == "Fixed"){echo "checked";} ?> name="client_existinginteresttype_<?php echo $i-1; ?>" value="Fixed" id="">
                    </div>
                    <div class="form-check">
                        <label class="ver-check-label" for="">Discounted Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existinginteresttype_".($i-1)]) && $value["client_existinginteresttype_".($i-1)] == "Discounted"){echo "checked";} ?> name="client_existinginteresttype_<?php echo $i-1; ?>" value="Discounted" id="">
                    </div>
                    <div class="form-check">
                        <label class="ver-check-label" for="">Capped Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existinginteresttype_".($i-1)]) && $value["client_existinginteresttype_".($i-1)] == "Capped"){echo "checked";} ?> name="client_existinginteresttype_<?php echo $i-1; ?>" value="Capped" id="">
                    </div>
                    <div class="form-check">
                        <label class="ver-check-label" for="">Tracker</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existinginteresttype_".($i-1)]) && $value["client_existinginteresttype_".($i-1)] == "Tracker"){echo "checked";} ?> name="client_existinginteresttype_<?php echo $i-1; ?>" value="Tracker" id="">
                    </div>
                    <div class="form-check">
                        <label class="ver-check-label" for="">Variable Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existinginteresttype_".($i-1)]) && $value["client_existinginteresttype_".($i-1)] == "Variable"){echo "checked";} ?> name="client_existinginteresttype_<?php echo $i-1; ?>" value="Variable" id="">
                    </div>
                    <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input <?php if(isset($value["client_existinginteresttype_".($i-1)]) && $value["client_existinginteresttype_".($i-1)] == "Other"){}else{echo "disabled";} ?> type="text" value="<?php if(isset($value["client_existinginteresttype_".($i-1)]) && $value["client_existinginteresttype_".($i-1)] == "Other"){ echo $value["other_interesttype_".($i-1)]; }else{} ?>" class="form-control col-md-10 date-input-box client_existinginteresttype_<?php echo $i-1; ?>" name="other_interesttype_<?php echo $i-1; ?>" id="" placeholder="other interest rate type">
                        <input type="checkbox" style="margin-left: 1.30rem;" <?php if(isset($value["client_existinginteresttype_".($i-1)]) && $value["client_existinginteresttype_".($i-1)] == "Other"){echo "checked";} ?> name="client_existinginteresttype_<?php echo $i-1; ?>" value="Other" class="ver-check-input checkSelection" id="contactCheck5">
                    </div>
                    </td>
                    <td>
                    <div class="form-check">
                        <label class="ver-check-label" for="">Fixed Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existinginteresttype_".$i]) && $value["client_existinginteresttype_".$i] == "Fixed"){echo "checked";} ?> name="client_existinginteresttype_<?php echo $i; ?>" value="Fixed" id="">
                    </div>
                    <div class="form-check">
                        <label class="ver-check-label" for="">Discounted Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existinginteresttype_".$i]) && $value["client_existinginteresttype_".$i] == "Discounted"){echo "checked";} ?> name="client_existinginteresttype_<?php echo $i; ?>" value="Discounted" id="">
                    </div>
                    <div class="form-check">
                        <label class="ver-check-label" for="">Capped Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existinginteresttype_".$i]) && $value["client_existinginteresttype_".$i] == "Capped"){echo "checked";} ?> name="client_existinginteresttype_<?php echo $i; ?>" value="Capped" id="">
                    </div>
                    <div class="form-check">
                        <label class="ver-check-label" for="">Tracker</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existinginteresttype_".$i]) && $value["client_existinginteresttype_".$i] == "Tracker"){echo "checked";} ?> name="client_existinginteresttype_<?php echo $i; ?>" value="Tracker" id="">
                    </div>
                    <div class="form-check">
                        <label class="ver-check-label" for="">Variable Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existinginteresttype_".$i]) && $value["client_existinginteresttype_".$i] == "Variable"){echo "checked";} ?> name="client_existinginteresttype_<?php echo $i; ?>" value="Variable" id="">
                    </div>
                    <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input <?php if(isset($value["client_existinginteresttype_".$i]) && $value["client_existinginteresttype_".$i] == "Other"){}else{echo "disabled";} ?> type="text" value="<?php if(isset($value["client_existinginteresttype_".$i]) && $value["client_existinginteresttype_".$i] == "Other"){ echo $value["other_interesttype_".$i]; }else{} ?>" class="form-control col-md-10 date-input-box client_existinginteresttype_<?php echo $i; ?>" name="other_interesttype_<?php echo $i; ?>" id="" placeholder="other interest rate type">
                        <input type="checkbox" style="margin-left: 1.30rem;" <?php if(isset($value["client_existinginteresttype_".$i]) && $value["client_existinginteresttype_".$i] == "Other"){echo "checked";} ?> name="client_existinginteresttype_<?php echo $i; ?>" value="Other" class="ver-check-input checkSelection" id="contactCheck5">
                    </div>
                    </td>
                </tr>

                <tr>
                    <td>Rate End Date</td> 
                    <?php $redate1 = false; $redate2 = false; 
                    if($value["res_rateenddate_".($i-1)] != ""){
                        $redate1_data = explode("/", $value["res_rateenddate_".($i-1)]);
                        $redate1 = true;
                    } 

                    if($value["res_rateenddate_".$i] != ""){
                        $redate2_data = explode("/", $value["res_rateenddate_".$i]);
                        $redate2 = true;
                    } 
                    ?>
                    <td class="text-center">
                    <input id="existrate_date_6_2_1_<?php echo $i-1; ?>" value="<?php echo $redate1_data[0]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="existrate_month_6_2_1_<?php echo $i-1; ?>" value="<?php echo $redate1_data[1]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="existrate_year_6_2_1_<?php echo $i-1; ?>" value="<?php echo $redate1_data[2]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="existrate_calendar_6_2_1_<?php echo $i-1; ?>" class="selectDate" />
                    </td>  
                    <td class="text-center">
                    <input id="existrate_date_6_2_1_<?php echo $i; ?>" value="<?php echo $redate2_data[0]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input id="existrate_month_6_2_1_<?php echo $i; ?>" value="<?php echo $redate2_data[1]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input id="existrate_year_6_2_1_<?php echo $i; ?>" value="<?php echo $redate2_data[2]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="existrate_calendar_6_2_1_<?php echo $i; ?>" class="selectDate" />
                    </td>
                </tr>

                <tr>
                    <td>Does an Early Repayment<br/>Charge (ERC) apply?</td>
                    <td class="text-center">
                    <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existingerc_".($i-1)]) && $value["client_existingerc_".($i-1)] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingerc_<?php echo $i-1; ?>" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existingerc_".($i-1)]) && $value["client_existingerc_".($i-1)] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingerc_<?php echo $i-1; ?>" value="No" id="">
                        </div>
                    </center>
                    </td>
                    <td class="text-center">
                    <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existingerc_".$i]) && $value["client_existingerc_".$i] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingerc_<?php echo $i; ?>" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existingerc_".$i]) && $value["client_existingerc_".$i] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingerc_<?php echo $i; ?>" value="No" id="">
                        </div>
                    </center>
                    </td>
                </tr>

                <tr>
                    <td>How much is the ERC?</td>
                    <td>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="res_erc_<?php echo $i-1; ?>" value="<?php echo $value["res_erc_".($i-1)]; ?>" placeholder="Type amount here">
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span> -->
                    </td>
                    <td>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="res_erc_<?php echo $i; ?>" value="<?php echo $value["res_erc_".$i]; ?>" placeholder="Type amount here">
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span> -->
                    </td>
                </tr>

                <tr>
                    <td>Are you prepared to pay this if <br/>you transfer/ repay your current<br/>mortgage?</td>
                    <td class="text-center">
                    <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existingrepay_".($i-1)]) && $value["client_existingrepay_".($i-1)] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingrepay_<?php echo $i-1; ?>" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existingrepay_".($i-1)]) && $value["client_existingrepay_".($i-1)] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingrepay_<?php echo $i-1; ?>" value="No" id="">
                        </div>
                    </center>
                    </td>
                    <td class="text-center">
                    <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existingrepay_".$i]) && $value["client_existingrepay_".$i] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingrepay_<?php echo $i; ?>" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existingrepay_".$i]) && $value["client_existingrepay_".$i] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingrepay_<?php echo $i; ?>" value="No" id="">
                        </div>
                    </center>
                    </td>
                </tr>

                <tr>
                    <td>Are your current mortgage terms<br/>portable to a new property?</td>
                    <td class="text-center">
                    <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existingcurrent_".($i-1)]) && $value["client_existingcurrent_".($i-1)] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingcurrent_<?php echo $i-1; ?>" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existingcurrent_".($i-1)]) && $value["client_existingcurrent_".($i-1)] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingcurrent_<?php echo $i-1; ?>" value="No" id="">
                        </div>
                    </center>
                    </td>
                    <td class="text-center">
                    <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existingcurrent_".$i]) && $value["client_existingcurrent_".$i] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingcurrent_<?php echo $i; ?>" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existingcurrent_".$i]) && $value["client_existingcurrent_".$i] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingcurrent_<?php echo $i; ?>" value="No" id="">
                        </div>
                    </center>
                    </td>
                </tr>
                </tbody>
            </table><!--/TABLE 4 ENDS HERE-->

            <!--TABLE 5 STARTS HERE-->
            <table id="resSec5_<?php echo $i; ?>" class="table" style="margin-top:10px;">
              <tbody class="table-bordered">
                <tr>
                  <td>Repayment method?</td>
                  <td>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Repayment</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existingrepaymethod_".($i-1)]) && $value["client_existingrepaymethod_".($i-1)] == "Repayment"){echo "checked";} ?> name="client_existingrepaymethod_<?php echo $i-1; ?>" value="Repayment" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Interest Only</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existingrepaymethod_".($i-1)]) && $value["client_existingrepaymethod_".($i-1)] == "Interest Only"){echo "checked";} ?> name="client_existingrepaymethod_<?php echo $i-1; ?>" value="Interest Only" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Part & Part </label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existingrepaymethod_".($i-1)]) && $value["client_existingrepaymethod_".($i-1)] == "Part & Part"){echo "checked";} ?> name="client_existingrepaymethod_<?php echo $i-1; ?>" value="Part & Part" id="">
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Repayment</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existingrepaymethod_".$i]) && $value["client_existingrepaymethod_".$i] == "Repayment"){echo "checked";} ?> name="client_existingrepaymethod_<?php echo $i; ?>" value="Repayment" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Interest Only</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existingrepaymethod_".$i]) && $value["client_existingrepaymethod_".$i] == "Interest Only"){echo "checked";} ?> name="client_existingrepaymethod_<?php echo $i; ?>" value="Interest Only" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Part & Part </label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existingrepaymethod_".$i]) && $value["client_existingrepaymethod_".$i] == "Part & Part"){echo "checked";} ?> name="client_existingrepaymethod_<?php echo $i; ?>" value="Part & Part" id="">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 5 ENDS HERE-->

            <!--TABLE 6 STARTS HERE-->
            <table id="resSec6_<?php echo $i; ?>" class="table" style="margin-top:10px; margin-bottom: 10px;">
              <tbody class="table-bordered">
                <tr>
                  <td>If ‘Interest Only’, how do you<br/>intend to repay the capital?</td>
                  <td>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Savings</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existingintend_".($i-1)]) && $value["client_existingintend_".($i-1)] == "Savings"){echo "checked";} ?> name="client_existingintend_<?php echo $i-1; ?>" value="Savings" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Investments</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existingintend_".($i-1)]) && $value["client_existingintend_".($i-1)] == "Investments"){echo "checked";} ?> name="client_existingintend_<?php echo $i-1; ?>" value="Investments" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Sale of mortgaged property</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existingintend_".($i-1)]) && $value["client_existingintend_".($i-1)] == "Sale of mortgaged property"){echo "checked";} ?> name="client_existingintend_<?php echo $i-1; ?>" value="Sale of mortgaged property" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Sale of other property</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existingintend_".($i-1)]) && $value["client_existingintend_".($i-1)] == "Sale of other property"){echo "checked";} ?> name="client_existingintend_<?php echo $i-1; ?>" value="Sale of other property" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Overpayments</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existingintend_".($i-1)]) && $value["client_existingintend_".($i-1)] == "Overpayments"){echo "checked";} ?> name="client_existingintend_<?php echo $i-1; ?>" value="Overpayments" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Pension funds</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existingintend_".($i-1)]) && $value["client_existingintend_".($i-1)] == "Pension funds"){echo "checked";} ?> name="client_existingintend_<?php echo $i-1; ?>" value="Pension funds" id="">
                    </div>
                    <div>
                      <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                      <input <?php if(isset($value["client_existingintend_".($i-1)]) && $value["client_existingintend_".($i-1)] == "Other"){}else{echo "disabled";} ?> value="<?php if(isset($value["client_existingintend_".($i-1)]) && $value["client_existingintend_".($i-1)] == "Other"){echo $value["other_existingintend_".($i-1)];}else{} ?>" type="text" class="form-control col-md-10 date-input-box client_existingintend_<?php echo $i-1; ?>" name="other_existingintend_<?php echo $i-1; ?>" id="">
                      <input type="checkbox" <?php if(isset($value["client_existingintend_".($i-1)]) && $value["client_existingintend_".($i-1)] == "Other"){echo "checked";} ?> style="margin-left: 1.30rem;" name="client_existingintend_<?php echo $i-1; ?>" value="Other" class="ver-check-input checkSelection" id="contactCheck5">
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Savings</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existingintend_".$i]) && $value["client_existingintend_".$i] == "Savings"){echo "checked";} ?> name="client_existingintend_<?php echo ($i+1); ?>" value="Savings" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Investments</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existingintend_".$i]) && $value["client_existingintend_".$i] == "Investments"){echo "checked";} ?> name="client_existingintend_<?php echo ($i+1); ?>" value="Investments" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Sale of mortgaged property</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existingintend_".$i]) && $value["client_existingintend_".$i] == "Sale of mortgaged property"){echo "checked";} ?> name="client_existingintend_<?php echo ($i+1); ?>" value="Sale of mortgaged property" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Sale of other property</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existingintend_".$i]) && $value["client_existingintend_".$i] == "Sale of other property"){echo "checked";} ?> name="client_existingintend_<?php echo ($i+1); ?>" value="Sale of other property" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Overpayments</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existingintend_".$i]) && $value["client_existingintend_".$i] == "Overpayments"){echo "checked";} ?> name="client_existingintend_<?php echo ($i+1); ?>" value="Overpayments" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Pension funds</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_existingintend_".$i]) && $value["client_existingintend_".$i] == "Pension funds"){echo "checked";} ?> name="client_existingintend_<?php echo ($i+1); ?>" value="Pension funds" id="">
                    </div>
                    <div>
                      <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                      <input <?php if(isset($value["client_existingintend_".$i]) && $value["client_existingintend_".$i] == "Other"){}else{echo "disabled";} ?> value="<?php if(isset($value["client_existingintend_".$i]) && $value["client_existingintend_".$i] == "Other"){echo $value["other_existingintend_".$i];}else{} ?>" type="text" class="form-control col-md-10 date-input-box client_existingintend_<?php echo ($i+1); ?>" name="other_existingintend_<?php echo ($i+1); ?>" id="">
                      <input type="checkbox" <?php if(isset($value["client_existingintend_".$i]) && $value["client_existingintend_".$i] == "Other"){echo "checked";} ?> style="margin-left: 1.30rem;" name="client_existingintend_<?php echo ($i+1); ?>" value="Other" class="ver-check-input checkSelection" id="contactCheck5">
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>Details:</td>
                  <td><textarea style="text-transform: inherit!important;" class="form-control" id="" name="res_details_<?php echo $i-1; ?>" rows="4" placeholder="Type details here..."><?php echo $value["res_details_".($i-1)]; ?></textarea></td>
                  <td><textarea style="text-transform: inherit!important;" class="form-control" id="" name="res_details_<?php echo $i; ?>" rows="4" placeholder="Type details here..."><?php echo $value["res_details_".$i]; ?></textarea></td>
                </tr>

                <tr>
                  <td>If part & part, how much is interest only?</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="res_interestonly_<?php echo $i-1; ?>" value="<?php echo $value["res_interestonly_".($i-1)]; ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Interest Only</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>                    
                    <span style="margin:5px;">Interest only</span> -->
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" class="form-control numcomma" name="res_interestonly_<?php echo $i; ?>" value="<?php echo $value["res_interestonly_".$i]; ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Interest Only</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>                    
                    <span style="margin:5px;">Interest only</span> -->
                  </td>
                </tr>

                <tr>
                  <td>Do you want to continue using<br/>repayment option(s) for any new<br/>mortgage arrangement?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existingnew_".($i-1)]) && $value["client_existingnew_".($i-1)] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingnew_<?php echo $i-1; ?>" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existingnew_".($i-1)]) && $value["client_existingnew_".($i-1)] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingnew_<?php echo $i-1; ?>" value="No" id="">
                       </div>
                    </center>
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existingnew_".$i]) && $value["client_existingnew_".$i] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingnew_<?php echo $i; ?>" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existingnew_".$i]) && $value["client_existingnew_".$i] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existingnew_<?php echo $i; ?>" value="No" id="">
                       </div>
                    </center>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 6 ENDS HERE-->
            <?php }}else{ ?>

              <!--TABLE 1 STARTS HERE-->
              <table class="table ">
                <thead class="">
                  <tr>
                    <th scope="col" style="border:0px;background-color:transparent;"></th>
                    <th scope="col">Existing Residential (1)</th>
                    <th scope="col">Existing Residential (2)</th>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <tr>
                    <td>Property Address</td>
                    <td><textarea class="form-control" id="" name="res_propaddress_1" rows="4" placeholder="Type ypur existing property address here..."></textarea></td>
                    <td><textarea class="form-control" id="" name="res_propaddress_2" rows="4" placeholder="Type your existing property address here..."></textarea></td>
                  </tr>

                  <tr>
                    <td>Owner</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Joint</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="res_owner_1[]" value="Joint" id="">
                        </div> / 

                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Client 1</label>
                          <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="res_owner_1[]" value="client_1" id="">
                        </div> / 

                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Client 2</label>
                          <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="res_owner_1[]" value="client_2" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Joint</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="res_owner_2[]" value="Joint" id="">
                        </div> / 

                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Client 1</label>
                          <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="res_owner_2[]" value="client_1" id="">
                        </div> / 

                        <div class="col-md-3 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Client 2</label>
                          <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="res_owner_2[]" value="client_2" id="">
                        </div>
                      </center>
                    </td>
                  </tr>

                  <tr>
                    <td>Estimated Property Value</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="res_estimatedval_1" placeholder="Type amount here">
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span> -->
                      
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="res_estimatedval_2" placeholder="Type amount here">
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span> -->
                    </td>
                  </tr>

                  <tr>
                    <td>If selling, what is the sale price?</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="res_saleprice_1" placeholder="Type amount here">
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span> -->
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="res_saleprice_2" placeholder="Type amount here">
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span> -->
                    </td>                  
                  </tr>
                </tbody>
              </table>
              <!--/TABLE 1 ENDS HERE-->

              <!--TABLE 2 STARTS HERE-->
              <table class="table" style="margin-top: 10px;">
                  <tbody class="table-bordered">
                    <tr>
                      <td>Is there a mortgage secured<br/>against this property?</td>
                      <td class="text-center">
                        <center>
                          <div class="col-md-2 date-input-box" style="padding: 0;">
                            <label class="form-check-label" for="">Yes</label>
                            <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingmortgage_1" value="Yes" id="">
                          </div>
                          <div class="col-md-2 date-input-box" style="padding: 0;">
                            <label class="form-check-label" for="">No</label>
                            <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingmortgage_1" value="No" id="">
                          </div>
                        </center>
                      </td>
                      <td class="text-center">
                        <center>
                          <div class="col-md-2 date-input-box" style="padding: 0;">
                            <label class="form-check-label" for="">Yes</label>
                            <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingmortgage_2" value="Yes" id="">
                          </div>
                          <div class="col-md-2 date-input-box" style="padding: 0;">
                            <label class="form-check-label" for="">No</label>
                            <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingmortgage_2" value="No" id="">
                          </div>
                        </center>
                      </td>
                    </tr>
                  </tbody>
              </table><!--/TABLE 2 ENDS HERE-->

              <!--TABLE 3 STARTS HERE-->
              <table class="table" style="margin-top: 10px;">
                <tbody class="table-bordered">
                  <tr>
                    <td>Lender</td>
                    <td><input type="text" class="form-control" name="res_lender_1" placeholder="Type Lender"></td>
                    <td><input type="text" class="form-control" name="res_lender_2" placeholder="Type Lender"></td>
                  </tr>

                  <tr>
                    <td>Mortgage Account Number</td>
                    <td><input type="text" class="form-control" name="res_macctno_1" placeholder="Mortgage account no."></td>
                    <td><input type="text" class="form-control" name="res_macctno_2" placeholder="Mortgage account no."></td>
                  </tr>

                  <tr>
                    <td>Amount of Loan Outstanding</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="res_loanout_1" placeholder="Type amount here">
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span> -->
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="res_loanout_2" placeholder="Type amount here">
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span> -->
                    </td>
                  </tr>

                  <tr>
                    <td>Term Remaining</td>
                    <td><input type="text" class="form-control" name="res_termremain_1" placeholder="Type term remaining"></td>
                    <td><input type="text" class="form-control" name="res_termremain_2" placeholder="Type term remaining"></td>
                  </tr>

                  <tr>
                    <td>To be Redeemed?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingredeem_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingredeem_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingredeem_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingredeem_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>
                </tbody>
              </table><!--/TABLE 3 ENDS HERE-->

              <!--TABLE 4 STARTS HERE-->
              <table class="table" style="margin-top: 10px;">
                <tbody class="table-bordered">
                  <tr>
                    <td>Current Interest Rate</td>
                    <td>
                      <div class="input-group">                      
                        <input type="text" class="form-control" name="res_currinterest_1" placeholder="Type current rate">
                        <div class="input-group-prepend">
                          <div class="input-group-text">%</div>
                        </div>
                      </div>
                      <!-- <span class="" style="margin: 5px;"">%</span> -->                    
                    </td>
                    <td>
                      <div class="input-group">                      
                        <input type="text" class="form-control" name="res_currinterest_2" placeholder="Type current rate">
                        <div class="input-group-prepend">
                          <div class="input-group-text">%</div>
                        </div>
                      </div>
                      <!-- <span class="" style="margin: 5px;"">%</span> -->                    
                    </td>
                  </tr>

                  <tr>
                    <td>Monthly Mortgage Payment</td>
                    <td>
                      <span style="margin:0px 5px;">£</span>
                      <input type="text" class="form-control numcomma col-md-10 date-input-box text-right" name="res_monthlymortgage_1" placeholder="Type amount here">
                      <span style="margin:5px;">p.m.</span>
                    </td>
                    <td>
                      <span style="margin:0px 5px;">£</span>
                      <input type="text" class="form-control numcomma col-md-10 date-input-box text-right" name="res_monthlymortgage_2" placeholder="Type amount here">
                      <span style="margin:5px;">p.m.</span>
                    </td>
                  </tr>

                  <tr>
                    <td>Interest Rate Type</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Fixed Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existinginteresttype_1" value="Fixed" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Discounted Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existinginteresttype_1" value="Discounted" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Capped Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existinginteresttype_1" value="Capped" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Tracker</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existinginteresttype_1" value="Tracker" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Variable Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existinginteresttype_1" value="Variable" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input disabled type="text" class="form-control col-md-10 date-input-box client_existinginteresttype_1" name="other_interesttype_1" id="" placeholder="other interest rate type">
                        <input type="checkbox" style="margin-left: 1.30rem;" name="client_existinginteresttype_1" value="Other" class="ver-check-input checkSelection" id="contactCheck5">
                      </div>
                    </td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Fixed Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existinginteresttype_2" value="Fixed" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Discounted Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existinginteresttype_2" value="Discounted" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Capped Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existinginteresttype_2" value="Capped" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Tracker</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existinginteresttype_2" value="Tracker" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Variable Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existinginteresttype_2" value="Variable" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input disabled type="text" class="form-control col-md-10 date-input-box client_existinginteresttype_2" name="other_interesttype_2" id="" placeholder="other interest rate type">
                        <input type="checkbox" style="margin-left: 1.30rem;" name="client_existinginteresttype_2" value="Other" class="ver-check-input checkSelection" id="contactCheck5">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Rate End Date</td> 
                    <td class="text-center">
                      <input id="existrate_date_6_2_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input id="existrate_month_6_2_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input id="existrate_year_6_2_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="existrate_calendar_6_2_1_1" class="selectDate" />
                    </td>  
                    <td class="text-center">
                      <input id="existrate_date_6_2_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input id="existrate_month_6_2_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input id="existrate_year_6_2_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="existrate_calendar_6_2_1_2" class="selectDate" />
                    </td>
                  </tr>

                  <tr>
                    <td>Does an Early Repayment<br/>Charge (ERC) apply?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingerc_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingerc_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingerc_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingerc_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>

                  <tr>
                    <td>How much is the ERC?</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="res_erc_1" placeholder="Type amount here">
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span> -->
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="res_erc_2" placeholder="Type amount here">
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span> -->
                    </td>
                  </tr>

                  <tr>
                    <td>Are you prepared to pay this if <br/>you transfer/ repay your current<br/>mortgage?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingrepay_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingrepay_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingrepay_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingrepay_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>

                  <tr>
                    <td>Are your current mortgage terms<br/>portable to a new property?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingcurrent_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingcurrent_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingcurrent_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingcurrent_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>
                </tbody>
              </table><!--/TABLE 4 ENDS HERE-->

              <!--TABLE 5 STARTS HERE-->
              <table class="table" style="margin-top:10px;">
                <tbody class="table-bordered">
                  <tr>
                    <td>Repayment method?</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Repayment</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existingrepaymethod_1" value="Repayment" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Interest Only</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existingrepaymethod_1" value="Interest Only" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Part & Part </label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existingrepaymethod_1" value="Part & Part " id="">
                      </div>
                    </td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Repayment</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existingrepaymethod_2" value="Repayment" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Interest Only</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existingrepaymethod_2" value="Interest Only" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Part & Part </label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existingrepaymethod_2" value="Part & Part " id="">
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table><!--/TABLE 5 ENDS HERE-->

              <!--TABLE 6 STARTS HERE-->
              <table class="table" style="margin-top:10px; margin-bottom: 10px;">
                <tbody class="table-bordered">
                  <tr>
                    <td>If ‘Interest Only’, how do you<br/>intend to repay the capital?</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Savings</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_1" value="Savings" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Investments</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_1" value="Investments" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Sale of mortgaged property</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_1" value="Sale of mortgaged property" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Sale of other property</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_1" value="Sale of other property" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Overpayments</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_1" value="Overpayments" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Pension funds</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_1" value="Pension funds" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input disabled type="text" class="form-control col-md-10 date-input-box client_existingintend_1" name="other_existingintend_1" id="">
                        <input type="checkbox" style="margin-left: 1.30rem;" name="client_existingintend_1" value="Other" class="ver-check-input checkSelection" id="contactCheck5">
                      </div>
                    </td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Savings</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_2" value="Savings" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Investments</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_2" value="Investments" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Sale of mortgaged property</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_2" value="Sale of mortgaged property" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Sale of other property</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_2" value="Sale of other property" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Overpayments</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_2" value="Overpayments" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Pension funds</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_2" value="Pension funds" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input disabled type="text" class="form-control col-md-10 date-input-box client_existingintend_2" name="other_existingintend_2" id="">
                        <input type="checkbox" style="margin-left:1.30rem;" name="client_existingintend_2" value="Other" class="ver-check-input checkSelection" id="contactCheck5">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Details:</td>
                    <td><textarea style="text-transform: inherit!important;" class="form-control" id="" name="res_details_1" rows="4" placeholder="Type details here..."></textarea></td>
                    <td><textarea style="text-transform: inherit!important;" class="form-control" id="" name="res_details_2" rows="4" placeholder="Type details here..."></textarea></td>
                  </tr>

                  <tr>
                    <td>If part & part, how much is interest only?</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="res_interestonly_1" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">Interest Only</div>
                        </div>
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span>                    
                      <span style="margin:5px;">Interest only</span> -->
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="res_interestonly_2" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">Interest Only</div>
                        </div>
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span>                    
                      <span style="margin:5px;">Interest only</span> -->
                    </td>
                  </tr>

                  <tr>
                    <td>Do you want to continue using<br/>repayment option(s) for any new<br/>mortgage arrangement?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingnew_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingnew_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingnew_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingnew_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>
                </tbody>
              </table><!--/TABLE 6 ENDS HERE-->

            <?php } ?>

            <!--=====6.3 EXISTING RESIDENTIAL PROPERTY TABLE ENDS HERE=====-->

            <!--ADD MORE BUTTON-->
            <div>
              <button id="addResidential" type="button" class="btn btn-primary float-right" style="margin:10px 0px;">Add More</button>
            </div>
            <!--/ADD MORE BUTTON-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">6.3 Existing Buy to Let Property </h5>

            <!--=====6.3 EXISTING BUY TO LET PROPERTY TABLE STARTS HERE=====-->

            <?php if($pdata != NULL){ $blProp = json_decode($pdata->buytolet_prop, true); $i = 0; ?>
            <?php foreach($blProp as $key => $value){ $i = $i + 2; ?>
            <?php if($i > 2){ ?>
              <div id="blrem_<?php echo $i; ?>" class="close-btn blRemove"><i class="fas fa-times-circle fa-2x"></i></div>
            <?php } ?>
            <!--TABLE 1 STARTS HERE-->
            <table id="blSec1_<?php echo $i; ?>" class="table ">
                <thead class="">
                  <tr>
                    <th scope="col" style="border:0px;background-color:transparent;"></th>
                    <th scope="col">Existing Residential (<?php echo $i-1; ?>)</th>
                    <th scope="col">Existing Residential (<?php echo $i; ?>)</th>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <tr>
                    <td>Property Address</td>
                    <td><textarea class="form-control" id="" name="buylet_propaddress_<?php echo $i-1; ?>" rows="4" placeholder="Type existing residential address here..."><?php echo $value["buylet_propaddress_".($i-1)]; ?></textarea></td>
                    <td><textarea class="form-control" id="" name="buylet_propaddress_<?php echo $i; ?>" rows="4" placeholder="Type existing residential address here..."><?php echo $value["buylet_propaddress_".$i]; ?></textarea></td>
                  </tr>

                  <tr>
                    <td>Owner</td>
                    <?php $b1 = explode(",", $value["buylet_owner_".($i-1)]); ?>
                    <?php $b2 = explode(",", $value["buylet_owner_".$i]); ?>
                    <td class="text-center">
                      <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" <?php if(in_array( "Joint" , $b1 )){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="buylet_owner_<?php echo $i-1; ?>[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" <?php if(in_array( "client_1" , $b1 )){echo "checked";} ?> style="margin-left: -0.15rem;" type="checkbox" name="buylet_owner_<?php echo $i-1; ?>[]" value="client_1" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" <?php if(in_array( "client_2" , $b1 )){echo "checked";} ?> style="margin-left:-0.15rem;" type="checkbox" name="buylet_owner_<?php echo $i-1; ?>[]" value="client_2" id="">
                      </div>
                    </center>
                    </td>
                    <td class="text-center">
                      <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" <?php if(in_array( "Joint" , $b2 )){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="buylet_owner_<?php echo $i; ?>[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" <?php if(in_array( "client_1" , $b2 )){echo "checked";} ?> style="margin-left: -0.15rem;" type="checkbox" name="" value="buylet_owner_<?php echo $i; ?>[]" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" <?php if(in_array( "client_2" , $b2 )){echo "checked";} ?> style="margin-left:-0.15rem;" type="checkbox" name="" value="buylet_owner_<?php echo $i; ?>[]" id="">
                      </div>
                    </center>
                    </td>
                  </tr>

                  <tr>
                    <td>Estimated Property Value</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="buylet_estimatedval_<?php echo $i-1; ?>" value="<?php echo $value["buylet_estimatedval_".($i-1)]; ?>" placeholder="Type amount here">
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span>-->                      
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="buylet_estimatedval_<?php echo $i; ?>" value="<?php echo $value["buylet_estimatedval_".$i]; ?>" placeholder="Type amount here">
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span>-->
                    </td>
                  </tr>

                  <tr>
                    <td>If selling, what is the sale price?</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="buylet_saleprice_<?php echo $i-1; ?>" value="<?php echo $value["buylet_saleprice_".($i-1)]; ?>" placeholder="Type amount here">
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span>-->
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="buylet_saleprice_<?php echo $i; ?>" value="<?php echo $value["buylet_saleprice_".$i]; ?>" placeholder="Type amount here">
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span>-->
                    </td>
                  </tr>
                </tbody>
            </table><!--TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table id="blSec2_<?php echo $i; ?>" class="table" style="margin-top: 10px;">
                <tbody class="table-bordered">
                  <tr>
                    <td>Is property currently let?</td>
                    <td class="text-center">
                      <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existinglet_".($i-1)]) && $value["client_existinglet_".($i-1)] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existinglet_<?php echo $i-1; ?>" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existinglet_".($i-1)]) && $value["client_existinglet_".($i-1)] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existinglet_<?php echo $i-1; ?>" value="No" id="">
                      </div>
                    </center>
                    </td>
                    <td class="text-center">
                      <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existinglet_".$i]) && $value["client_existinglet_".$i] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existinglet_<?php echo $i; ?>" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if(isset($value["client_existinglet_".$i]) && $value["client_existinglet_".$i] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_existinglet_<?php echo $i; ?>" value="No" id="">
                      </div>
                    </center>
                    </td>
                  </tr>

                  <tr>
                    <td>Tenant Type</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Working / Professional</label>
                        <input type="checkbox" <?php if(isset($value["client_buylettenant_".($i-1)]) && $value["client_buylettenant_".($i-1)] == "Working / Professional"){echo "checked";} ?> class="ver-check-input checkSelection" name="client_buylettenant_<?php echo $i-1; ?>" value="Working / Professional" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Corporate</label>
                        <input type="checkbox" <?php if(isset($value["client_buylettenant_".($i-1)]) && $value["client_buylettenant_".($i-1)] == "Corporate"){echo "checked";} ?> class="ver-check-input checkSelection" name="client_buylettenant_<?php echo $i-1; ?>" value="Corporate" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">DSS</label>
                        <input type="checkbox" <?php if(isset($value["client_buylettenant_".($i-1)]) && $value["client_buylettenant_".($i-1)] == "DSS"){echo "checked";} ?> class="ver-check-input checkSelection" name="client_buylettenant_<?php echo $i-1; ?>" value="DSS" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Family Member</label>
                        <input type="checkbox" <?php if(isset($value["client_buylettenant_".($i-1)]) && $value["client_buylettenant_".($i-1)] == "Family Member"){echo "checked";} ?> class="ver-check-input checkSelection" name="client_buylettenant_<?php echo $i-1; ?>" value="Family Member" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Asylum Seeker</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_<?php echo $i-1; ?>" value="Asylum Seeker" <?php if(isset($value["client_buylettenant_".($i-1)]) && $value["client_buylettenant_".($i-1)] == "Asylum Seeker"){echo "checked";} ?> id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Student</label>
                        <input type="checkbox" <?php if(isset($value["client_buylettenant_".($i-1)]) && $value["client_buylettenant_".($i-1)] == "Student"){echo "checked";} ?> class="ver-check-input checkSelection" name="client_buylettenant_<?php echo $i-1; ?>" value="Student" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input <?php if(isset($value["client_buylettenant_".($i-1)]) && $value["client_buylettenant_".($i-1)] == "Other"){}else{echo "disabled";} ?> type="text" class="form-control col-md-10 date-input-box client_buylettenant_<?php echo $i-1; ?>" name="other_buylettenant_<?php echo $i-1; ?>" id="" placeholder="other tenant type">
                        <input type="checkbox" <?php if(isset($value["client_buylettenant_".($i-1)]) && $value["client_buylettenant_".($i-1)] == "Other"){echo "checked";} ?> style="margin-left: 1.30rem;" name="client_buylettenant_<?php echo $i-1; ?>" value="Other" class="ver-check-input checkSelection" id="contactCheck5">
                      </div>
                    </td>
                    <td>
                    <div class="form-check">
                        <label class="ver-check-label" for="">Working / Professional</label>
                        <input type="checkbox" <?php if(isset($value["client_buylettenant_".$i]) && $value["client_buylettenant_".$i] == "Working / Professional"){echo "checked";} ?> class="ver-check-input checkSelection" name="client_buylettenant_<?php echo $i; ?>" value="Working / Professional" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Corporate</label>
                        <input type="checkbox" <?php if(isset($value["client_buylettenant_".$i]) && $value["client_buylettenant_".$i] == "Corporate"){echo "checked";} ?> class="ver-check-input checkSelection" name="client_buylettenant_<?php echo $i; ?>" value="Corporate" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">DSS</label>
                        <input type="checkbox" <?php if(isset($value["client_buylettenant_".$i]) && $value["client_buylettenant_".$i] == "DSS"){echo "checked";} ?> class="ver-check-input checkSelection" name="client_buylettenant_<?php echo $i; ?>" value="DSS" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Family Member</label>
                        <input type="checkbox" <?php if(isset($value["client_buylettenant_".$i]) && $value["client_buylettenant_".$i] == "Family Member"){echo "checked";} ?> class="ver-check-input checkSelection" name="client_buylettenant_<?php echo $i; ?>" value="Family Member" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Asylum Seeker</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_<?php echo $i; ?>" value="Asylum Seeker" <?php if(isset($value["client_buylettenant_".$i]) && $value["client_buylettenant_".$i] == "Asylum Seeker"){echo "checked";} ?> id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Student</label>
                        <input type="checkbox" <?php if(isset($value["client_buylettenant_".$i]) && $value["client_buylettenant_".$i] == "Student"){echo "checked";} ?> class="ver-check-input checkSelection" name="client_buylettenant_<?php echo $i; ?>" value="Student" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input <?php if(isset($value["client_buylettenant_".$i]) && $value["client_buylettenant_".$i] == "Other"){}else{echo "disabled";} ?> type="text" class="form-control col-md-10 date-input-box client_buylettenant_<?php echo $i; ?>" name="other_buylettenant_<?php echo $i; ?>" id="" placeholder="other tenant type">
                        <input type="checkbox" <?php if(isset($value["client_buylettenant_".$i]) && $value["client_buylettenant_".$i] == "Other"){echo "checked";} ?> style="margin-left: 1.30rem;" name="client_buylettenant_<?php echo $i; ?>" value="Other" class="ver-check-input checkSelection" id="contactCheck5">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Tenancy term</td>
                    <td><input type="text" class="form-control" name="buylet_tenantterm_<?php echo $i-1; ?>" value="<?php echo $value["buylet_tenantterm_".($i-1)]; ?>" placeholder="Type tenancy term"></td>
                    <td><input type="text" class="form-control" name="buylet_tenantterm_<?php echo $i; ?>" value="<?php echo $value["buylet_tenantterm_".$i]; ?>" placeholder="Type tenancy term"></td>
                  </tr>

                  <tr>
                    <td>Rental income (p.c.m.)</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="buylet_rentalincome_<?php echo $i-1; ?>" value="<?php echo $value["buylet_rentalincome_".($i-1)]; ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.c.m.</div>
                        </div>
                      </div>
                      <!-- <span style="margin:0px 5px;">£</span>
                        <span style="margin:5px;">p.c.m.</span>-->
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="buylet_rentalincome_<?php echo $i; ?>" value="<?php echo $value["buylet_rentalincome_".$i]; ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.c.m.</div>
                        </div>
                      </div>
                      <!-- <span style="margin:0px 5px;">£</span>
                        <span style="margin:5px;">p.c.m.</span>-->
                    </td>
                  </tr>
                </tbody>
            </table><!--TABLE 2 ENDS HERE-->

            <!--TABLE 3 STARTS HERE-->
            <table id="blSec3_<?php echo $i; ?>" class="table" style="margin-top: 10px;">
                <tbody class="table-bordered">
                  <tr>
                    <td>Is there a mortgage secured<br/>against this property?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_letsecured_".($i-1)]) && $value["client_letsecured_".($i-1)] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_letsecured_<?php echo $i-1; ?>" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_letsecured_".($i-1)]) && $value["client_letsecured_".($i-1)] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_letsecured_<?php echo $i-1; ?>" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_letsecured_".$i]) && $value["client_letsecured_".$i] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_letsecured_<?php echo $i; ?>" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_letsecured_".$i]) && $value["client_letsecured_".$i] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_letsecured_<?php echo $i; ?>" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>
                </tbody>
            </table><!--/TABLE 3 ENDS HERE-->

            <!--TABLE 4 STARTS HERE-->
            <table id="blSec4_<?php echo $i; ?>" class="table" style="margin-top: 10px;">
                <tbody class="table-bordered">
                  <tr>
                    <td>Lender</td>
                    <td><input type="text" name="buylet_lender_<?php echo $i-1; ?>" value="<?php echo $value["buylet_lender_".($i-1)]; ?>" class="form-control" placeholder="Type Lender"></td>
                    <td><input type="text" name="buylet_lender_<?php echo $i; ?>" value="<?php echo $value["buylet_lender_".$i]; ?>" class="form-control" placeholder="Type Lender"></td>
                  </tr>

                  <tr>
                    <td>Mortgage Account Number</td>
                    <td><input type="text" name="buylet_mortgageaccnt_<?php echo $i-1; ?>" value="<?php echo $value["buylet_mortgageaccnt_".($i-1)]; ?>" class="form-control" placeholder="Mortgage account no."></td>
                    <td><input type="text" name="buylet_mortgageaccnt_<?php echo $i; ?>" value="<?php echo $value["buylet_mortgageaccnt_".$i]; ?>" class="form-control" placeholder="Mortgage account no."></td>
                  </tr>

                  <tr>
                    <td>Amount of Loan Outstanding</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="buylet_loanout_<?php echo $i-1; ?>" value="<?php echo $value["buylet_loanout_".($i-1)]; ?>" placeholder="Type amount here">
                      </div>
                      <!-- <span style="margin:0px 5px;">£</span>-->                      
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="buylet_loanout_<?php echo $i; ?>" value="<?php echo $value["buylet_loanout_".$i]; ?>" placeholder="Type amount here">
                      </div>
                      <!-- <span style="margin:0px 5px;">£</span>-->                      
                    </td>
                  </tr>

                  <tr>
                    <td>Term Remaining</td>
                    <td><input type="text" class="form-control" name="buylet_termremain_<?php echo $i-1; ?>" value="<?php echo $value["buylet_termremain_".($i-1)]; ?>" placeholder="Type term remaining"></td>
                    <td><input type="text" class="form-control" name="buylet_termremain_<?php echo $i; ?>" value="<?php echo $value["buylet_termremain_".$i]; ?>" placeholder="Type term remaining"></td>
                  </tr>

                  <tr>
                    <td>To be Redeemed?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_letredeem_".($i-1)]) && $value["client_letredeem_".($i-1)] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_letredeem_<?php echo $i-1; ?>" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_letredeem_".($i-1)]) && $value["client_letredeem_".($i-1)] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_letredeem_<?php echo $i-1; ?>" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_letredeem_".$i]) && $value["client_letredeem_".$i] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_letredeem_<?php echo $i; ?>" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_letredeem_".$i]) && $value["client_letredeem_".$i] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_letredeem_<?php echo $i; ?>" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>

                  <tr>
                    <td>Current Interest Rate</td>
                    <td>
                      <div class="input-group">                        
                        <input type="text" class="form-control" name="buylet_currinterest_<?php echo $i-1; ?>" value="<?php echo $value["buylet_currinterest_".($i-1)]; ?>" placeholder="Type current rate">
                        <div class="input-group-prepend">
                          <div class="input-group-text">%</div>
                        </div>
                      </div>
                      <!-- <span class="" style="margin:5px;">%</span> -->
                    </td>
                    <td>
                      <div class="input-group">                        
                        <input type="text" class="form-control" name="buylet_currinterest_<?php echo $i; ?>" value="<?php echo $value["buylet_currinterest_".$i]; ?>" placeholder="Type current rate">
                        <div class="input-group-prepend">
                          <div class="input-group-text">%</div>
                        </div>
                      </div>
                      <!-- <span class="" style="margin:5px;">%</span> -->
                    </td>
                  </tr>

                  <tr>
                    <td>Monthly Mortgage Payment</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control numcomma" name="buylet_monthlymortgage_<?php echo $i-1; ?>" value="<?php echo $value["buylet_monthlymortgage_".($i-1)]; ?>" placeholder="Type amount here">
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
                        <input type="text" class="form-control numcomma" name="buylet_monthlymortgage_<?php echo $i; ?>" value="<?php echo $value["buylet_monthlymortgage_".$i]; ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span>                      
                      <span style="margin:5px;">p.m.</span> -->
                    </td>
                  </tr>

                  <tr>
                    <td>Interest Rate Type</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Fixed Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletinterest_".($i-1)]) && $value["client_buyletinterest_".($i-1)] == "Fixed"){echo "checked";} ?> name="client_buyletinterest_<?php echo $i-1; ?>" value="Fixed" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Discounted Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletinterest_".($i-1)]) && $value["client_buyletinterest_".($i-1)] == "Discounted"){echo "checked";} ?> name="client_buyletinterest_<?php echo $i-1; ?>" value="Discounted" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Capped Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletinterest_".($i-1)]) && $value["client_buyletinterest_".($i-1)] == "Capped"){echo "checked";} ?> name="client_buyletinterest_<?php echo $i-1; ?>" value="Capped" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Tracker</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletinterest_".($i-1)]) && $value["client_buyletinterest_".($i-1)] == "Tracker"){echo "checked";} ?> name="client_buyletinterest_<?php echo $i-1; ?>" value="Tracker" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Variable Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletinterest_".($i-1)]) && $value["client_buyletinterest_".($i-1)] == "Variable"){echo "checked";} ?> name="client_buyletinterest_<?php echo $i-1; ?>" value="Variable" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input <?php if(isset($value["client_buyletinterest_".($i-1)]) && $value["client_buyletinterest_".($i-1)] == "Other"){}else{echo "disabled";} ?> type="text" value="<?php if(isset($value["client_buyletinterest_".($i-1)]) && $value["client_buyletinterest_".($i-1)] == "Other"){ echo $value["other_buyletinterest_".($i-1)]; }else{} ?>" class="form-control col-md-10 date-input-box client_buyletinterest_<?php echo $i-1; ?>" name="other_buyletinterest_<?php echo $i-1; ?>" id="" placeholder="other interest rate type">
                        <input type="checkbox" style="margin-left: 1.30rem;" <?php if(isset($value["client_buyletinterest_".($i-1)]) && $value["client_buyletinterest_".($i-1)] == "Other"){echo "checked";} ?> name="client_buyletinterest_<?php echo $i-1; ?>" value="Other" class="ver-check-input checkSelection" id="contactCheck5">
                      </div>
                    </td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Fixed Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletinterest_".$i]) && $value["client_buyletinterest_".$i] == "Fixed"){echo "checked";} ?> name="client_buyletinterest_<?php echo $i; ?>" value="Fixed" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Discounted Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletinterest_".$i]) && $value["client_buyletinterest_".$i] == "Discounted"){echo "checked";} ?> name="client_buyletinterest_<?php echo $i; ?>" value="Discounted" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Capped Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletinterest_".$i]) && $value["client_buyletinterest_".$i] == "Capped"){echo "checked";} ?> name="client_buyletinterest_<?php echo $i; ?>" value="Capped" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Tracker</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletinterest_".$i]) && $value["client_buyletinterest_".$i] == "Tracker"){echo "checked";} ?> name="client_buyletinterest_<?php echo $i; ?>" value="Tracker" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Variable Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletinterest_".$i]) && $value["client_buyletinterest_".$i] == "Variable"){echo "checked";} ?> name="client_buyletinterest_<?php echo $i; ?>" value="Variable" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input <?php if(isset($value["client_buyletinterest_".$i]) && $value["client_buyletinterest_".$i] == "Other"){}else{echo "disabled";} ?> type="text" value="<?php if(isset($value["client_buyletinterest_".$i]) && $value["client_buyletinterest_".$i] == "Other"){ echo $value["other_buyletinterest_".$i]; }else{} ?>" class="form-control col-md-10 date-input-box client_buyletinterest_<?php echo $i; ?>" name="other_buyletinterest_<?php echo $i; ?>" id="" placeholder="other interest rate type">
                        <input type="checkbox" style="margin-left: 1.30rem;" <?php if(isset($value["client_buyletinterest_".$i]) && $value["client_buyletinterest_".$i] == "Other"){echo "checked";} ?> name="client_buyletinterest_<?php echo $i; ?>" value="Other" class="ver-check-input checkSelection" id="contactCheck5">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Rate End Date</td>
                      <?php $bedate1 = false; $bedate2 = false; 
                      if($value["buylet_rateenddate_".($i-1)] != ""){
                        $bedate1_data = explode("/", $value["buylet_rateenddate_".($i-1)]);
                        $bedate1 = true;
                      } 

                      if($value["buylet_rateenddate_".$i] != ""){
                        $bedate2_data = explode("/", $value["buylet_rateenddate_".$i]);
                        $bedate2 = true;
                      } 
                    ?>
                    <td class="text-center">
                      <input id="buyrate_date_6_3_1_<?php echo $i-1; ?>" value="<?php echo $bedate1_data[0]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input id="buyrate_month_6_3_1_<?php echo $i-1; ?>" value="<?php echo $bedate1_data[1]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input id="buyrate_year_6_3_1_<?php echo $i-1; ?>" value="<?php echo $bedate1_data[2]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="buyrate_calendar_6_3_1_<?php echo $i-1; ?>" class="selectDate" />
                    </td>  
                    <td class="text-center">
                      <input id="buyrate_date_6_3_1_<?php echo $i; ?>" value="<?php echo $bedate2_data[0]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input id="buyrate_month_6_3_1_<?php echo $i; ?>" value="<?php echo $bedate2_data[1]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input id="buyrate_year_6_3_1_<?php echo $i; ?>" value="<?php echo $bedate2_data[2]; ?>" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="buyrate_calendar_6_3_1_<?php echo $i; ?>" class="selectDate" />
                    </td>
                  </tr>

                  <tr>
                    <td>Does an Early Repayment<br/>Charge (ERC) apply?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_leterc_".($i-1)]) && $value["client_leterc_".($i-1)] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_leterc_<?php echo $i-1; ?>" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_leterc_".($i-1)]) && $value["client_leterc_".($i-1)] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_leterc_<?php echo $i-1; ?>" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_leterc_".$i]) && $value["client_leterc_".$i] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_leterc_<?php echo $i; ?>" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_leterc_".$i]) && $value["client_leterc_".$i] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_leterc_<?php echo $i; ?>" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>

                  <tr>
                    <td>How much is the ERC?</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control numcomma" name="buylet_erc_<?php echo $i-1; ?>" value="<?php echo $value["buylet_erc_".($i-1)]; ?>" placeholder="Type ERC amount here">
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span>-->
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control numcomma" name="buylet_erc_<?php echo $i; ?>" value="<?php echo $value["buylet_erc_".$i]; ?>" placeholder="Type ERC amount here">
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span>-->
                    </td>
                  </tr>

                  <tr>
                    <td>Are you prepared to pay this if <br/>you transfer/ repay your current<br/>mortgage?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_letrepay_".($i-1)]) && $value["client_letrepay_".($i-1)] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_letrepay_<?php echo $i-1; ?>" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_letrepay_".($i-1)]) && $value["client_letrepay_".($i-1)] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_letrepay_<?php echo $i-1; ?>" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_letrepay_".$i]) && $value["client_letrepay_".$i] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_letrepay_<?php echo $i; ?>" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_letrepay_".$i]) && $value["client_letrepay_".$i] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_letrepay_<?php echo $i; ?>" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>

                  <tr>
                    <td>Are your current mortgage terms<br/>portable to a new property?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_letcurrent_".($i-1)]) && $value["client_letcurrent_".($i-1)] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_letcurrent_<?php echo $i-1; ?>" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_letcurrent_".($i-1)]) && $value["client_letcurrent_".($i-1)] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_letcurrent_<?php echo $i-1; ?>" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_letcurrent_".$i]) && $value["client_letcurrent_".$i] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_letcurrent_<?php echo $i; ?>" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_letcurrent_".$i]) && $value["client_letcurrent_".$i] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_letcurrent_<?php echo $i; ?>" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>

                  <tr>
                    <td>Repayment method?</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Repayment</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletrepay_".($i-1)]) && $value["client_buyletrepay_".($i-1)] == "Repayment"){echo "checked";} ?> name="client_buyletrepay_<?php echo $i-1; ?>" value="Repayment" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Interest Only</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletrepay_".($i-1)]) && $value["client_buyletrepay_".($i-1)] == "Interest Only"){echo "checked";} ?> name="client_buyletrepay_<?php echo $i-1; ?>" value="Interest Only" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Part & Part </label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletrepay_".($i-1)]) && $value["client_buyletrepay_".($i-1)] == "Part & Part"){echo "checked";} ?> name="client_buyletrepay_<?php echo $i-1; ?>" value="Part & Part" id="">
                      </div>
                    </td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Repayment</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletrepay_".$i]) && $value["client_buyletrepay_".$i] == "Repayment"){echo "checked";} ?> name="client_buyletrepay_<?php echo $i; ?>" value="Repayment" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Interest Only</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletrepay_".$i]) && $value["client_buyletrepay_".$i] == "Interest Only"){echo "checked";} ?> name="client_buyletrepay_<?php echo $i; ?>" value="Interest Only" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Part & Part </label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletrepay_".$i]) && $value["client_buyletrepay_".$i] == "Part & Part"){echo "checked";} ?> name="client_buyletrepay_<?php echo $i; ?>" value="Part & Part" id="">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>If ‘Interest Only’, how do you<br/>intend to repay the capital?</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Savings</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletintend_".($i-1)]) && $value["client_buyletintend_".($i-1)] == "Savings"){echo "checked";} ?> name="client_buyletintend_<?php echo $i-1; ?>" value="Savings" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Investments</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletintend_".($i-1)]) && $value["client_buyletintend_".($i-1)] == "Investments"){echo "checked";} ?> name="client_buyletintend_<?php echo $i-1; ?>" value="Investments" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Sale of mortgaged property</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletintend_".($i-1)]) && $value["client_buyletintend_".($i-1)] == "Sale of mortgaged property"){echo "checked";} ?> name="client_buyletintend_<?php echo $i-1; ?>" value="Sale of mortgaged property" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Sale of other property</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletintend_".($i-1)]) && $value["client_buyletintend_".($i-1)] == "Sale of other property"){echo "checked";} ?> name="client_buyletintend_<?php echo $i-1; ?>" value="Sale of other property" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Overpayments</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletintend_".($i-1)]) && $value["client_buyletintend_".($i-1)] == "Overpayments"){echo "checked";} ?> name="client_buyletintend_<?php echo $i-1; ?>" value="Overpayments" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Pension funds</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletintend_".($i-1)]) && $value["client_buyletintend_".($i-1)] == "Pension funds"){echo "checked";} ?> name="client_buyletintend_<?php echo $i-1; ?>" value="Pension funds" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input <?php if(isset($value["client_buyletintend_".($i-1)]) && $value["client_buyletintend_".($i-1)] == "Other"){}else{echo "disabled";} ?> value="<?php if(isset($value["client_buyletintend_".($i-1)]) && $value["client_buyletintend_".($i-1)] == "Other"){echo $value["other_buyletintend_".($i-1)];}else{} ?>" type="text" class="form-control col-md-10 date-input-box client_buyletintend_<?php echo $i-1; ?>" name="other_buyletintend_<?php echo $i-1; ?>" id="">
                        <input type="checkbox" <?php if(isset($value["client_buyletintend_".($i-1)]) && $value["client_buyletintend_".($i-1)] == "Other"){echo "checked";} ?> style="margin-left: 1.30rem;" name="client_buyletintend_<?php echo $i-1; ?>" value="Other" class="ver-check-input checkSelection" id="contactCheck5">
                      </div>
                    </td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Savings</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletintend_".$i]) && $value["client_buyletintend_".$i] == "Savings"){echo "checked";} ?> name="client_buyletintend_<?php echo $i; ?>" value="Savings" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Investments</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletintend_".$i]) && $value["client_buyletintend_".$i] == "Investments"){echo "checked";} ?> name="client_buyletintend_<?php echo $i; ?>" value="Investments" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Sale of mortgaged property</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletintend_".$i]) && $value["client_buyletintend_".$i] == "Sale of mortgaged property"){echo "checked";} ?> name="client_buyletintend_<?php echo $i; ?>" value="Sale of mortgaged property" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Sale of other property</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletintend_".$i]) && $value["client_buyletintend_".$i] == "Sale of other property"){echo "checked";} ?> name="client_buyletintend_<?php echo $i; ?>" value="Sale of other property" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Overpayments</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletintend_".$i]) && $value["client_buyletintend_".$i] == "Overpayments"){echo "checked";} ?> name="client_buyletintend_<?php echo $i; ?>" value="Overpayments" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Pension funds</label>
                        <input type="checkbox" class="ver-check-input checkSelection" <?php if(isset($value["client_buyletintend_".$i]) && $value["client_buyletintend_".$i] == "Pension funds"){echo "checked";} ?> name="client_buyletintend_<?php echo $i; ?>" value="Pension funds" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input <?php if(isset($value["client_buyletintend_".$i]) && $value["client_buyletintend_".$i] == "Other"){}else{echo "disabled";} ?> value="<?php if(isset($value["client_buyletintend_".$i]) && $value["client_buyletintend_".$i] == "Other"){echo $value["other_buyletintend_".$i];}else{} ?>" type="text" class="form-control col-md-10 date-input-box client_buyletintend_<?php echo $i; ?>" name="other_buyletintend_<?php echo $i; ?>" id="">
                        <input type="checkbox" <?php if(isset($value["client_buyletintend_".$i]) && $value["client_buyletintend_".$i] == "Other"){echo "checked";} ?> style="margin-left: 1.30rem;" name="client_buyletintend_<?php echo $i; ?>" value="Other" class="ver-check-input checkSelection" id="contactCheck5">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Details:</td>
                    <td><textarea style="text-transform: inherit!important;" class="form-control" id="" name="buylet_detail_<?php echo $i-1; ?>" rows="4" placeholder="Type details here..."><?php echo $value["buylet_detail_".($i-1)]; ?></textarea></td>
                    <td><textarea style="text-transform: inherit!important;" class="form-control" id="" name="buylet_detail_<?php echo $i; ?>" rows="4" placeholder="Type details here..."><?php echo $value["buylet_detail_".$i]; ?></textarea></td>
                  </tr>

                  <tr>
                    <td>If part & part, how much is interest only?</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control numcomma" name="buylet_interestonly_<?php echo $i-1; ?>" value="<?php echo $value["buylet_interestonly_".($i-1)]; ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">Interest Only</div>
                        </div>
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span>
                           <span style="margin:5px;">Interest only</span>-->
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control numcomma" name="buylet_interestonly_<?php echo $i; ?>" value="<?php echo $value["buylet_interestonly_".$i]; ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">Interest Only</div>
                        </div>
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span>
                           <span style="margin:5px;">Interest only</span>-->
                    </td>
                  </tr>

                  <tr>
                    <td>Do you want to continue using<br/>repayment option(s) for any new<br/>mortgage arrangement?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_letnew_".($i-1)]) && $value["client_letnew_".($i-1)] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_letnew_<?php echo $i-1; ?>" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_letnew_".($i-1)]) && $value["client_letnew_".($i-1)] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_letnew_<?php echo $i-1; ?>" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_letnew_".$i]) && $value["client_letnew_".$i] == "Yes"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_letnew_<?php echo $i; ?>" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" <?php if(isset($value["client_letnew_".$i]) && $value["client_letnew_".$i] == "No"){echo "checked";} ?> style="margin-left: 0.25rem;" type="checkbox" name="client_letnew_<?php echo $i; ?>" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>

                </tbody>
            </table><!--TABLE 4 ENDS HERE-->
            <?php }}else{ ?>
              <!--TABLE 1 STARTS HERE-->
            <table class="table ">
                <thead class="">
                  <tr>
                    <th scope="col" style="border:0px;background-color:transparent;"></th>
                    <th scope="col">Existing Residential (1)</th>
                    <th scope="col">Existing Residential (2)</th>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <tr>
                    <td>Property Address</td>
                    <td><textarea class="form-control" id="" name="buylet_propaddress_1" rows="4" placeholder="Type existing residential address here..."></textarea></td>
                    <td><textarea class="form-control" id="" name="buylet_propaddress_2" rows="4" placeholder="Type existing residential address here..."></textarea></td>
                  </tr>

                  <tr>
                    <td>Owner</td>
                    <td class="text-center">
                      <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="buylet_owner_1[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="buylet_owner_1[]" value="client_1" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="buylet_owner_1[]" value="client_2" id="">
                      </div>
                    </center>
                    </td>
                    <td class="text-center">
                      <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="buylet_owner_2[]" value="Joint" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 1</label>
                        <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="" value="buylet_owner_2[]" id="">
                      </div> / 

                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Client 2</label>
                        <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="" value="buylet_owner_2[]" id="">
                      </div>
                    </center>
                    </td>
                  </tr>

                  <tr>
                    <td>Estimated Property Value</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="buylet_estimatedval_1" placeholder="Type amount here">
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span>-->                      
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="buylet_estimatedval_2" placeholder="Type amount here">
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span>-->
                    </td>
                  </tr>

                  <tr>
                    <td>If selling, what is the sale price?</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="buylet_saleprice_1" placeholder="Type amount here">
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span>-->
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="buylet_saleprice_2" placeholder="Type amount here">
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span>-->
                    </td>
                  </tr>
                </tbody>
            </table><!--TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="table" style="margin-top: 10px;">
                <tbody class="table-bordered">
                  <tr>
                    <td>Is property currently let?</td>
                    <td class="text-center">
                      <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existinglet_1" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existinglet_1" value="No" id="">
                      </div>
                    </center>
                    </td>
                    <td class="text-center">
                      <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existinglet_2" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existinglet_2" value="No" id="">
                      </div>
                    </center>
                    </td>
                  </tr>

                  <tr>
                    <td>Tenant Type</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Working / Professional</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_1" value="Working / Professional" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Corporate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_1" value="Corporate" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">DSS</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_1" value="DSS" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Family Member</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_1" value="Family Member" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Asylum Seeker</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_1" value="Asylum Seeker" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Student</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_1" value="Asylum Seeker" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input disabled type="text" class="form-control col-md-10 date-input-box client_buylettenant_1" name="other_buylettenant_1" id="" placeholder="other tenant type">
                        <input type="checkbox" style="margin-left: 1.30rem;" name="client_buylettenant_1" value="Other" class="ver-check-input checkSelection" id="contactCheck5">
                      </div>
                    </td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Working / Professional</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_2" value="Working / Professional" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Corporate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_2" value="Corporate" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">DSS</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_2" value="DSS" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Family Member</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_2" value="Family Member" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Asylum Seeker</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_2" value="Asylum Seeker" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Student</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_2" value="Asylum Seeker" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input disabled type="text" class="form-control col-md-10 date-input-box client_buylettenant_2" name="other_buylettenant_2" id="" placeholder="other tenant type">
                        <input type="checkbox" style="margin-left: 1.30rem;" name="client_buylettenant_2" value="Other" class="ver-check-input checkSelection" id="contactCheck5">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Tenancy term</td>
                    <td><input type="text" class="form-control" name="buylet_tenantterm_1" placeholder="Type tenancy term"></td>
                    <td><input type="text" class="form-control" name="buylet_tenantterm_2" placeholder="Type tenancy term"></td>
                  </tr>

                  <tr>
                    <td>Rental income (p.c.m.)</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="buylet_rentalincome_1" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.c.m.</div>
                        </div>
                      </div>
                      <!-- <span style="margin:0px 5px;">£</span>
                        <span style="margin:5px;">p.c.m.</span>-->
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="buylet_rentalincome_2" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.c.m.</div>
                        </div>
                      </div>
                      <!-- <span style="margin:0px 5px;">£</span>
                        <span style="margin:5px;">p.c.m.</span>-->
                    </td>
                  </tr>
                </tbody>
            </table><!--TABLE 2 ENDS HERE-->

            <!--TABLE 3 STARTS HERE-->
            <table class="table" style="margin-top: 10px;">
                <tbody class="table-bordered">
                  <tr>
                    <td>Is there a mortgage secured<br/>against this property?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letsecured_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letsecured_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letsecured_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letsecured_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>
                </tbody>
            </table><!--/TABLE 3 ENDS HERE-->

            <!--TABLE 4 STARTS HERE-->
            <table class="table" style="margin-top: 10px;margin-bottom: 10px;">
                <tbody class="table-bordered">
                  <tr>
                    <td>Lender</td>
                    <td><input type="text" name="buylet_lender_1" class="form-control" placeholder="Type Lender"></td>
                    <td><input type="text" name="buylet_lender_2" class="form-control" placeholder="Type Lender"></td>
                  </tr>

                  <tr>
                    <td>Mortgage Account Number</td>
                    <td><input type="text" name="buylet_mortgageaccnt_1" class="form-control" placeholder="Mortgage account no."></td>
                    <td><input type="text" name="buylet_mortgageaccnt_2" class="form-control" placeholder="Mortgage account no."></td>
                  </tr>

                  <tr>
                    <td>Amount of Loan Outstanding</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="buylet_loanout_1" placeholder="Type amount here">
                      </div>
                      <!-- <span style="margin:0px 5px;">£</span>-->                      
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>
                        <input type="text" class="form-control numcomma" name="buylet_loanout_2" placeholder="Type amount here">
                      </div>
                      <!-- <span style="margin:0px 5px;">£</span>-->                      
                    </td>
                  </tr>

                  <tr>
                    <td>Term Remaining</td>
                    <td><input type="text" class="form-control" name="buylet_termremain_1" placeholder="Type term remaining"></td>
                    <td><input type="text" class="form-control" name="buylet_termremain_2" placeholder="Type term remaining"></td>
                  </tr>

                  <tr>
                    <td>To be Redeemed?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letredeem_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letredeem_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letredeem_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letredeem_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>

                  <tr>
                    <td>Current Interest Rate</td>
                    <td>
                      <div class="input-group">                        
                        <input type="text" class="form-control" name="buylet_currinterest_1" placeholder="Type current rate">
                        <div class="input-group-prepend">
                          <div class="input-group-text">%</div>
                        </div>
                      </div>
                      <!-- <span class="" style="margin:5px;">%</span> -->
                    </td>
                    <td>
                      <div class="input-group">                        
                        <input type="text" class="form-control" name="buylet_currinterest_2" placeholder="Type current rate">
                        <div class="input-group-prepend">
                          <div class="input-group-text">%</div>
                        </div>
                      </div>
                      <!-- <span class="" style="margin:5px;">%</span> -->
                    </td>
                  </tr>

                  <tr>
                    <td>Monthly Mortgage Payment</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control numcomma" name="buylet_monthlymortgage_1" placeholder="Type amount here">
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
                        <input type="text" class="form-control numcomma" name="buylet_monthlymortgage_2" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span>                      
                      <span style="margin:5px;">p.m.</span> -->
                    </td>
                  </tr>

                  <tr>
                    <td>Interest Rate Type</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Fixed Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletinterest_1" value="Fixed" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Discounted Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletinterest_1" value="Discounted" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Capped Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletinterest_1" value="Capped" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Tracker</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletinterest_1" value="Tracker" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Variable Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletinterest_1" value="Variable" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input disabled type="text" class="form-control col-md-10 date-input-box client_buyletinterest_1" name="other_buyletinterest_1" id="">
                        <input type="checkbox" style="margin-left: 0.20rem;" name="client_buyletinterest_1" value="Other" class="ver-check-input checkSelection" id="contactCheck5">
                      </div>
                    </td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Fixed Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletinterest_2" value="Fixed" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Discounted Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletinterest_2" value="Discounted" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Capped Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletinterest_2" value="Capped" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Tracker</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletinterest_2" value="Tracker" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Variable Rate</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletinterest_2" value="Variable" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input disabled type="text" class="form-control col-md-10 date-input-box client_buyletinterest_2" name="other_buyletinterest_2" id="">
                        <input type="checkbox" style="margin-left: 0.20rem;" name="client_buyletinterest_2" value="Other" class="ver-check-input checkSelection" id="contactCheck5">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Rate End Date</td>
                    <td class="text-center">
                      <input id="buyrate_date_6_3_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input id="buyrate_month_6_3_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input id="buyrate_year_6_3_1_1" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="buyrate_calendar_6_3_1_1" class="selectDate" />
                    </td>
                    <td class="text-center">
                      <input id="buyrate_date_6_3_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input id="buyrate_month_6_3_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input id="buyrate_year_6_3_1_2" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="buyrate_calendar_6_3_1_2" class="selectDate" />
                    </td>
                  </tr>

                  <tr>
                    <td>Does an Early Repayment<br/>Charge (ERC) apply?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_leterc_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_leterc_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_leterc_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_leterc_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>

                  <tr>
                    <td>How much is the ERC?</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control numcomma" name="buylet_erc_1" placeholder="Type ERC amount here">
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span>-->
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control numcomma" name="buylet_erc_2" placeholder="Type ERC amount here">
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span>-->
                    </td>
                  </tr>

                  <tr>
                    <td>Are you prepared to pay this if <br/>you transfer/ repay your current<br/>mortgage?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letrepay_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letrepay_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letrepay_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letrepay_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>

                  <tr>
                    <td>Are your current mortgage terms<br/>portable to a new property?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letcurrent_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letcurrent_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letcurrent_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letcurrent_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>

                  <tr>
                    <td>Repayment method?</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Repayment</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletrepay_1" value="Repayment" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Interest Only</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletrepay_1" value="Interest Only" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Part & Part </label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletrepay_1" value="Part & Part " id="">
                      </div>
                    </td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Repayment</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletrepay_2" value="Repayment" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Interest Only</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletrepay_2" value="Interest Only" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Part & Part </label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletrepay_2" value="Part & Part " id="">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>If ‘Interest Only’, how do you<br/>intend to repay the capital?</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Savings</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_1" value="Savings" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Investments</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_1" value="Investments" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Sale of mortgaged property</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_1" value="Sale of mortgaged property" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Sale of other property</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_1" value="Sale of other property" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Overpayments</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_1" value="Overpayments" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Pension funds</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_1" value="Pension funds" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input disabled type="text" class="form-control col-md-10 date-input-box client_buyletintend_1" name="buylet_buyletintend_1" id="">
                        <input type="checkbox" style="margin-left: 1.30rem;" name="client_buyletintend_1" value="Other" class="ver-check-input checkSelection" id="contactCheck5">
                      </div>
                    </td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Savings</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_2" value="Savings" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Investments</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_2" value="Investments" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Sale of mortgaged property</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_2" value="Sale of mortgaged property" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Sale of other property</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_2" value="Sale of other property" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Overpayments</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_2" value="Overpayments" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="">Pension funds</label>
                        <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_2" value="Pension funds" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input disabled type="text" class="form-control col-md-10 date-input-box client_buyletintend_2" name="buylet_buyletintend_2" id="">
                        <input type="checkbox" style="margin-left: 1.30rem;" name="client_buyletintend_2" value="Other" class="ver-check-input checkSelection" id="contactCheck5">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Details:</td>
                    <td><textarea style="text-transform: inherit!important;" class="form-control" id="" name="buylet_detail_1" rows="4" placeholder="Type details here..."></textarea></td>
                    <td><textarea style="text-transform: inherit!important;" class="form-control" id="" name="buylet_detail_2" rows="4" placeholder="Type details here..."></textarea></td>
                  </tr>

                  <tr>
                    <td>If part & part, how much is interest only?</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control numcomma" name="buylet_interestonly_1" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">Interest Only</div>
                        </div>
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span>
                           <span style="margin:5px;">Interest only</span>-->
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control numcomma" name="buylet_interestonly_2" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">Interest Only</div>
                        </div>
                      </div>

                      <!-- <span style="margin:0px 5px;">£</span>
                           <span style="margin:5px;">Interest only</span>-->
                    </td>
                  </tr>

                  <tr>
                    <td>Do you want to continue using<br/>repayment option(s) for any new<br/>mortgage arrangement?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letnew_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letnew_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letnew_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letnew_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>

                </tbody>
            </table><!--TABLE 4 ENDS HERE-->
            <?php } ?>
            <!--=====/6.3 EXISTING BUY TO LET PROPERTY TABLE ENDS HERE=====-->

            <!--ADD MORE BUTTON-->
            <div>
              <button id="addbuytoletproperty" class="btn btn-primary float-right" type="button" style="margin:10px 0px;">Add More</button>
            </div> 
            <!--/ADD MORE BUTTON--> 

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">Rental Void Periods</h5>  

            <!--===== RENTAL VOID PERIODS TABLE STARTS HERE=====-->
            <table class="table">
              <tbody class="table-bordered">
                <tr>
                  <td>
                    How do you intend to cover void<br/>
                    periods on your existing<br/>
                    property portfolio?
                  </td>
                  <td style="width:60%; text-transform: inherit!important;">
                    <textarea style="text-transform: inherit!important;" class="form-control" id="" name="rentvoid_period" rows="4" placeholder="Type here..."><?php if($pdata != NULL){ echo $pdata->rentvoid_period; } ?></textarea>
                  </td>
                </tr>
              </tbody>
            </table>    
            <!--=====RENTAL VOID PERIODS TABLE ENDS HERE=====-->  

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
              <!-- <a href="<?php echo base_url(); ?>admin/financial" class="btn btn-primary" style="cursor:pointer;">Back</a> -->
              <button id="saveback" type="button" class="btn btn-primary" style="cursor:pointer;">Save and Back</button>
              <!--/Back button-->

              <button type="submit" class="btn btn-primary" style="cursor:pointer;">Save and Next</button>
              <!-- <button type="submit" class="btn btn-primary" style="cursor:pointer;">Save</button> -->
            </div> 
            <!--=====FORM NEXT/SAVE BUTTONS ENDS HERE=====-->             
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

      if($(this).prop("checked")){
        $('.'+this.name).prop('disabled', false);
      }

      if($(this).prop("checked") == false || $('input[name="' + this.name + '"]').not(this).prop('checked') == false){
        $('.'+this.name).val('');
      }
      if($(this).val() != "Other"){
        
          $('.'+this.name).prop('disabled', true);
      
        
      }
      else if($(this).val() == "Other"){
        if($(this).prop("checked")){
          $('.'+this.name).prop('disabled', false);
        }
        else if($(this).prop("checked") == false){
          $('.'+this.name).prop('disabled', true);
        }
      }
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

  checkSelection();
  selectDate();

  // function checkSelection(){
  //   $('.checkSelection').on('change', function() {
  //     $('input[name="' + this.name + '"]').not(this).prop('checked', false);
  //   });
  // }

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
  

var resCount = <?php if($pdata != NULL){echo sizeof($pLoan)*2; }else{ ?>2<?php } ?>, buyletpropCount = <?php if($pdata != NULL){echo sizeof($blProp)*2;}else{ ?>2<?php } ?>;
  //To remove section
  $('.resRemove').unbind().click(function(){

    var addId = $(this).attr('id').split('_');
    resCount = resCount - 2;
    $('#resSec1_'+addId[1]).remove();
    $('#resSec2_'+addId[1]).remove();
    $('#resSec3_'+addId[1]).remove();
    $('#resSec4_'+addId[1]).remove();
    $('#resSec5_'+addId[1]).remove();
    $('#resSec6_'+addId[1]).remove();
    $(this).remove();

  });

  $('.blRemove').unbind().click(function(){

    var addId = $(this).attr('id').split('_');
    buyletpropCount = buyletpropCount - 2;
    $('#blSec1_'+addId[1]).remove();
    $('#blSec2_'+addId[1]).remove();
    $('#blSec3_'+addId[1]).remove();
    $('#blSec4_'+addId[1]).remove();
    $(this).remove();

  });

  //Done till table 1
  $('#addResidential').click(function(){

    var resInc = "";

    if(resCount < 6){


      resCount = resCount + 2;
    
      resInc += '<div id="resrem_'+resCount+'" class="close-btn resRemove"><i class="fas fa-times-circle fa-2x"></i></div><table id="resSec1_'+resCount+'" class="table"><thead class=""><tr><th scope="col" style="border:0px;background-color:transparent;"></th>';
      resInc += '<th scope="col">Existing Residential ('+(resCount -1)+')</th><th scope="col">Existing Residential ('+resCount+')</th></tr></thead>';
      resInc += '<tbody class="table-bordered"><tr><td>Property Address</td><td>';
      resInc += '<textarea class="form-control" id="" name="res_propaddress_'+(resCount -1)+'" rows="4" placeholder="Type ypur existing property address here..."></textarea>';
      resInc += '</td><td>';
      resInc += '<textarea class="form-control" id="" name="res_propaddress_'+resCount+'" rows="4" placeholder="Type your existing property address here..."></textarea>';
      resInc += '</td></tr><tr><td>Owner</td><td class="text-center"><center><div class="col-md-3 date-input-box" style="padding: 0;">';
      resInc += '<label class="form-check-label" for="">Joint</label>';
      resInc += '<input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="res_owner_'+(resCount -1)+'[]" value="Joint" id=""></div> /';
      resInc += '<div class="col-md-3 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Client 1</label>';
      resInc += '<input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="res_owner_'+(resCount -1)+'[]" value="client_1" id=""></div> /';
      resInc += '<div class="col-md-3 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Client 2</label>';
      resInc += '<input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="res_owner_'+(resCount -1)+'[]" value="client_2" id=""></div>';
      resInc += '</center></td><td class="text-center"><center><div class="col-md-3 date-input-box" style="padding: 0;">';
      resInc += '<label class="form-check-label" for="">Joint</label>';
      resInc += '<input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="res_owner_'+resCount+'[]" value="Joint" id=""></div> /';
      resInc += '<div class="col-md-3 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Client 1</label>';
      resInc += '<input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="res_owner_'+resCount+'[]" value="client_1" id=""></div> /';
      resInc += '<div class="col-md-3 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Client 2</label>';
      resInc += '<input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="res_owner_'+resCount+'[]" value="client_2" id=""></div></center>';
      resInc += '</td></tr><tr><td>Estimated Property Value</td><td><div class="input-group"><div class="input-group-prepend"><div class="input-group-text">£</div>';
      resInc += '</div><input type="text" class="form-control numcomma" name="res_estimatedval_'+(resCount -1)+'" placeholder="Type amount here"></div></td><td><div class="input-group">';
      resInc += '<div class="input-group-prepend"><div class="input-group-text">£</div></div>';
      resInc += '<input type="text" class="form-control numcomma" name="res_estimatedval_'+resCount+'" placeholder="Type amount here"></div></td></tr><tr>';
      resInc += '<td>If selling, what is the sale price?</td><td><div class="input-group"><div class="input-group-prepend">';
      resInc += '<div class="input-group-text">£</div></div><input type="text" class="form-control numcomma" name="res_saleprice_'+(resCount -1)+'" placeholder="Type amount here">';
      resInc += '</div></td><td><div class="input-group"><div class="input-group-prepend"><div class="input-group-text">£</div>';
      resInc += '</div><input type="text" class="form-control numcomma" name="res_saleprice_'+resCount+'" placeholder="Type amount here"></div></td></tr></tbody></table>';

      //Table 2
      resInc += '<table id="resSec2_'+resCount+'" class="table" style="margin-top: 10px;"><tbody class="table-bordered"><tr>';
      resInc += '<td>Is there a mortgage secured<br/>against this property?</td><td class="text-center"><center>';
      resInc += '<div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Yes</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingmortgage_'+(resCount - 1)+'" value="Yes" id="">';
      resInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingmortgage_'+(resCount - 1)+'" value="No" id="">';
      resInc += '</div></center></td><td class="text-center"><center><div class="col-md-2 date-input-box" style="padding: 0;">';
      resInc += '<label class="form-check-label" for="">Yes</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingmortgage_'+resCount+'" value="Yes" id="">';
      resInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingmortgage_'+resCount+'" value="No" id="">';
      resInc += '</div></center></td></tr></tbody></table>';

      //Table 3
      resInc += '<table id="resSec3_'+resCount+'" class="table" style="margin-top: 10px;"><tbody class="table-bordered"><tr><td>Lender</td>';
      resInc += '<td><input type="text" class="form-control" name="res_lender_'+(resCount -1)+'" placeholder="Type Lender"></td>';
      resInc += '<td><input type="text" class="form-control" name="res_lender_'+resCount+'" placeholder="Type Lender"></td></tr><tr><td>Mortgage Account Number</td>';
      resInc += '<td><input type="text" class="form-control" name="res_macctno_'+(resCount -1)+'" placeholder="Mortgage account no."></td>';
      resInc += '<td><input type="text" class="form-control" name="res_macctno_'+resCount+'" placeholder="Mortgage account no."></td></tr><tr>';
      resInc += '<td>Amount of Loan Outstanding</td><td><div class="input-group"><div class="input-group-prepend">';
      resInc += '<div class="input-group-text">£</div></div><input type="text" name="res_loanout_'+(resCount -1)+'" class="form-control numcomma" placeholder="Type amount here">';
      resInc += '</div></td><td><div class="input-group"><div class="input-group-prepend"><div class="input-group-text">£</div>';
      resInc += '</div><input type="text" name="res_loanout_'+resCount+'" class="form-control numcomma" placeholder="Type amount here"></div></td></tr><tr><td>Term Remaining</td>';
      resInc += '<td><input type="text" class="form-control" name="res_termremain_'+(resCount -1)+'" placeholder="Type term remaining"></td>';
      resInc += '<td><input type="text" class="form-control" name="res_termremain_'+resCount+'" placeholder="Type term remaining"></td></tr><tr><td>To be Redeemed?</td>';
      resInc += '<td class="text-center"><center><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Yes</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingredeem_'+(resCount - 1)+'" value="Yes" id="">';
      resInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingredeem_'+(resCount - 1)+'" value="No" id="">';
      resInc += '</div></center></td><td class="text-center"><center><div class="col-md-2 date-input-box" style="padding: 0;">';
      resInc += '<label class="form-check-label" for="">Yes</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingredeem_'+resCount+'" value="Yes" id="">';
      resInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingredeem_'+resCount+'" value="No" id="">';
      resInc += '</div></center></td></tr></tbody></table>';

      //Table 4
      resInc += '<table id="resSec4_'+resCount+'" class="table" style="margin-top: 10px;"><tbody class="table-bordered"><tr><td>Current Interest Rate</td>';
      resInc += '<td><div class="input-group"><input type="text" name="res_currinterest_'+(resCount -1)+'" class="form-control" placeholder="Type current rate"><div class="input-group-prepend">';
      resInc += '<div class="input-group-text">%</div></div></div></td><td><div class="input-group">';
      resInc += '<input type="text" name="res_currinterest_'+resCount+'" class="form-control" placeholder="Type current rate"><div class="input-group-prepend">';
      resInc += '<div class="input-group-text">%</div></div></div></td></tr><tr><td>Monthly Mortgage Payment</td><td><span style="margin:0px 5px;">£</span>';
      resInc += '<input type="text" name="res_monthlymortgage_'+(resCount -1)+'" class="form-control numcomma col-md-10 date-input-box text-right" placeholder="Type amount here">';
      resInc += '<span style="margin:5px;">p.m.</span></td><td><span style="margin:0px 5px;">£</span>';
      resInc += '<input type="text" name="res_monthlymortgage_'+resCount+'" class="form-control numcomma col-md-10 date-input-box text-right" placeholder="Type amount here">';
      resInc += '<span style="margin:5px;">p.m.</span></td></tr><tr><td>Interest Rate Type</td><td><div class="form-check">';
      resInc += '<label class="ver-check-label" for="">Fixed Rate</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existinginteresttype_'+(resCount - 1)+'" value="Fixed" id="">';
      resInc += '</div><div class="form-check"><label class="ver-check-label" for="">Discounted Rate</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existinginteresttype_'+(resCount - 1)+'" value="Discounted" id="">';
      resInc += '</div><div class="form-check"><label class="ver-check-label" for="">Capped Rate</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existinginteresttype_'+(resCount - 1)+'" value="Capped" id="">';
      resInc += '</div><div class="form-check"><label class="ver-check-label" for="">Tracker</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existinginteresttype_'+(resCount - 1)+'" value="Tracker" id="">';
      resInc += '</div><div class="form-check"><label class="ver-check-label" for="">Variable Rate</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existinginteresttype_'+(resCount - 1)+'" value="Variable" id="">';
      resInc += '</div><div><label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>';
      resInc += '<input disabled type="text" class="form-control col-md-10 date-input-box client_existinginteresttype_'+(resCount - 1)+'" id="" placeholder="other interest rate type">';
      resInc += '<input type="checkbox" style="margin-left: 1.30rem;" name="client_existinginteresttype_'+(resCount - 1)+'" value="Other" class="ver-check-input checkSelection" id="contactCheck5">';
      resInc += '</div></td><td><div class="form-check"><label class="ver-check-label" for="">Fixed Rate</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existinginteresttype_'+resCount+'" value="Fixed" id="">';
      resInc += '</div><div class="form-check"><label class="ver-check-label" for="">Discounted Rate</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existinginteresttype_'+resCount+'" value="Discounted" id="">';
      resInc += '</div><div class="form-check"><label class="ver-check-label" for="">Capped Rate</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existinginteresttype_'+resCount+'" value="Capped" id="">';
      resInc += '</div><div class="form-check"><label class="ver-check-label" for="">Tracker</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existinginteresttype_'+resCount+'" value="Tracker" id="">';
      resInc += '</div><div class="form-check"><label class="ver-check-label" for="">Variable Rate</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existinginteresttype_'+resCount+'" value="Variable" id="">';
      resInc += '</div><div><label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>';
      resInc += '<input disabled type="text" class="form-control col-md-10 date-input-box client_existinginteresttype_'+resCount+'" id="" placeholder="other interest rate type">';
      resInc += '<input type="checkbox" style="margin-left: 1.30rem;" name="client_existinginteresttype_'+resCount+'" value="Other" class="ver-check-input checkSelection" id="contactCheck5">';
      resInc += '</div></td></tr><tr><td>Rate End Date</td><td class="text-center">';
      resInc += '<input id="existrate_date_6_2_1_'+(resCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> /';
      resInc += '<input id="existrate_month_6_2_1_'+(resCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> /';
      resInc += '<input id="existrate_year_6_2_1_'+(resCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">';
      resInc += '<input type="hidden" id="existrate_calendar_6_2_1_'+(resCount - 1)+'" class="selectDate" />';
      resInc += '</td><td class="text-center">';
      resInc += '<input id="existrate_date_6_2_1_'+resCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> /';
      resInc += '<input id="existrate_month_6_2_1_'+resCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> /';
      resInc += '<input id="existrate_year_6_2_1_'+resCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Year">';
      resInc += '<input type="hidden" id="existrate_calendar_6_2_1_'+resCount+'" class="selectDate" />';
      resInc += '</td></tr><tr><td>Does an Early Repayment<br/>Charge (ERC) apply?</td><td class="text-center"><center>';
      resInc += '<div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Yes</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingerc_'+(resCount - 1)+'" value="Yes" id="">';
      resInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingerc_'+(resCount - 1)+'" value="No" id="">';
      resInc += '</div></center></td><td class="text-center"><center><div class="col-md-2 date-input-box" style="padding: 0;">';
      resInc += '<label class="form-check-label" for="">Yes</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingerc_'+resCount+'" value="Yes" id="">';
      resInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingerc_'+resCount+'" value="No" id="">';
      resInc += '</div></center></td></tr><tr><td>How much is the ERC?</td><td><div class="input-group"><div class="input-group-prepend">';
      resInc += '<div class="input-group-text">£</div></div><input type="text" name="res_erc_'+(resCount - 1)+'" class="form-control numcomma" placeholder="Type amount here">';
      resInc += '</div></td><td><div class="input-group"><div class="input-group-prepend"><div class="input-group-text">£</div></div>';
      resInc += '<input type="text" name="res_erc_'+resCount+'" class="form-control numcomma" placeholder="Type amount here"></div></td></tr><tr>';
      resInc += '<td>Are you prepared to pay this if <br/>you transfer/ repay your current<br/>mortgage?</td><td class="text-center">';
      resInc += '<center><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">Yes</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingrepay_'+(resCount - 1)+'" value="Yes" id="">';
      resInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingrepay_'+(resCount - 1)+'" value="No" id="">';
      resInc += '</div></center></td><td class="text-center"><center><div class="col-md-2 date-input-box" style="padding: 0;">';
      resInc += '<label class="form-check-label" for="">Yes</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingrepay_'+resCount+'" value="Yes" id="">';
      resInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingrepay_'+resCount+'" value="No" id="">';
      resInc += '</div></center></td></tr><tr><td>Are your current mortgage terms<br/>portable to a new property?</td>';
      resInc += '<td class="text-center"><center><div class="col-md-2 date-input-box" style="padding: 0;">';
      resInc += '<label class="form-check-label" for="">Yes</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingcurrent_'+(resCount - 1)+'" value="Yes" id="">';
      resInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingcurrent_'+(resCount - 1)+'" value="No" id="">';
      resInc += '</div></center></td><td class="text-center"><center><div class="col-md-2 date-input-box" style="padding: 0;">';
      resInc += '<label class="form-check-label" for="">Yes</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingcurrent_'+resCount+'" value="Yes" id="">';
      resInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingcurrent_'+resCount+'" value="No" id="">';
      resInc += '</div></center></td></tr></tbody></table>';

      //Table 5
      resInc += '<table id="resSec5_'+resCount+'" class="table" style="margin-top:10px;"><tbody class="table-bordered"><tr><td>Repayment method?</td>';
      resInc += '<td><div class="form-check"><label class="ver-check-label" for="">Repayment</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existingrepaymethod_'+(resCount - 1)+'" value="Repayment" id="">';
      resInc += '</div><div class="form-check"><label class="ver-check-label" for="">Interest Only</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existingrepaymethod_'+(resCount - 1)+'" value="Interest Only" id="">';
      resInc += '</div><div class="form-check"><label class="ver-check-label" for="">Part & Part </label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existingrepaymethod_'+(resCount - 1)+'" value="Part & Part " id="">';
      resInc += '</div></td><td><div class="form-check"><label class="ver-check-label" for="">Repayment</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existingrepaymethod_'+resCount+'" value="Repayment" id="">';
      resInc += '</div><div class="form-check"><label class="ver-check-label" for="">Interest Only</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existingrepaymethod_'+resCount+'" value="Interest Only" id="">';
      resInc += '</div><div class="form-check"><label class="ver-check-label" for="">Part & Part </label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existingrepaymethod_'+resCount+'" value="Part & Part " id="">';
      resInc += '</div></td></tr></tbody></table>';

      //Table 6
      resInc += '<table id="resSec6_'+resCount+'" class="table" style="margin-top:10px; margin-bottom:10px;"><tbody class="table-bordered"><tr>';
      resInc += '<td>If ‘Interest Only’, how do you<br/>intend to repay the capital?</td><td><div class="form-check">';
      resInc += '<label class="ver-check-label" for="">Savings</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_'+(resCount - 1)+'" value="Savings" id="">';
      resInc += '</div><div class="form-check"><label class="ver-check-label" for="">Investments</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_'+(resCount - 1)+'" value="Investments" id="">';
      resInc += '</div><div class="form-check"><label class="ver-check-label" for="">Sale of mortgaged property</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_'+(resCount - 1)+'" value="Sale of mortgaged property" id="">';
      resInc += '</div><div class="form-check"><label class="ver-check-label" for="">Sale of other property</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_'+(resCount - 1)+'" value="Sale of other property" id="">';
      resInc += '</div><div class="form-check"><label class="ver-check-label" for="">Overpayments</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_'+(resCount - 1)+'" value="Overpayments" id="">';
      resInc += '</div>';
      resInc += '<div class="form-check">'
      resInc += '<label class="ver-check-label" for="">Pension funds</label>'
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_'+(resCount - 1)+'" value="Pension funds" id=""></div>';
      resInc += '<div><label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>';
      resInc += '<input disabled type="text" class="form-control col-md-10 date-input-box client_existingintend_'+(resCount - 1)+'" id="">';
      resInc += '<input type="checkbox" style="margin-left: 1.30rem;" name="client_existingintend_'+(resCount - 1)+'" value="Other" class="ver-check-input checkSelection" id="contactCheck5">';
      resInc += '</div></td><td><div class="form-check"><label class="ver-check-label" for="">Savings</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_'+resCount+'" value="Savings" id="">';
      resInc += '</div><div class="form-check"><label class="ver-check-label" for="">Investments</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_'+resCount+'" value="Investments" id="">';
      resInc += '</div><div class="form-check"><label class="ver-check-label" for="">Sale of mortgaged property</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_'+resCount+'" value="Sale of mortgaged property" id="">';
      resInc += '</div><div class="form-check"><label class="ver-check-label" for="">Sale of other property</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_'+resCount+'" value="Sale of other property" id="">';
      resInc += '</div><div class="form-check"><label class="ver-check-label" for="">Overpayments</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_'+resCount+'" value="Overpayments" id="">';
      resInc += '</div><div class="form-check"><label class="ver-check-label" for="">Pension funds</label>';
      resInc += '<input type="checkbox" class="ver-check-input checkSelection" name="client_existingintend_'+resCount+'" value="Pension funds" id="">';
      resInc += '</div><div><label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>';
      resInc += '<input disabled type="text" class="form-control col-md-10 date-input-box client_existingintend_'+resCount+'" id="">';
      resInc += '<input type="checkbox" style="margin-left:1.30rem;" name="client_existingintend_'+resCount+'" value="Other" class="ver-check-input checkSelection" id="contactCheck5">';
      resInc += '</div></td></tr><tr><td>Details:</td>';
      resInc += '<td><textarea style="text-transform: inherit!important;" class="form-control" id="" name="res_details_'+(resCount - 1)+'" rows="4" placeholder="Type details here..."></textarea></td>';
      resInc += '<td><textarea style="text-transform: inherit!important;" style="text-transform: inherit!important;" class="form-control" id="" name="res_details_'+resCount+'" rows="4" placeholder="Type details here..."></textarea></td>';
      resInc += '</tr><tr><td>If part & part, how much is interest only?</td><td><div class="input-group"><div class="input-group-prepend">';
      resInc += '<div class="input-group-text">£</div></div>';
      resInc += '<input type="text" name="res_interestonly_'+(resCount - 1)+'" class="form-control numcomma" placeholder="Type amount here">';
      resInc += '<div class="input-group-prepend"><div class="input-group-text">Interest Only</div></div>';
      resInc += '</div></td><td><div class="input-group"><div class="input-group-prepend"><div class="input-group-text">£</div>';
      resInc += '</div><input type="text" name="res_interestonly_'+resCount+'" class="form-control numcomma" placeholder="Type amount here"><div class="input-group-prepend">';
      resInc += '<div class="input-group-text">Interest Only</div></div></div>';
      resInc += '</td></tr><tr><td>Do you want to continue using<br/>repayment option(s) for any new<br/>mortgage arrangement?</td>';
      resInc += '<td class="text-center"><center><div class="col-md-2 date-input-box" style="padding: 0;">';
      resInc += '<label class="form-check-label" for="">Yes</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingnew_'+(resCount - 1)+'" value="Yes" id="">';
      resInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingnew_'+(resCount - 1)+'" value="No" id="">';
      resInc += '</div></center></td><td class="text-center"><center><div class="col-md-2 date-input-box" style="padding: 0;">';
      resInc += '<label class="form-check-label" for="">Yes</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingnew_'+resCount+'" value="Yes" id="">';
      resInc += '</div><div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
      resInc += '<input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existingnew_'+resCount+'" value="No" id="">';
      resInc += '</div></center></td></tr></tbody></table>';

      $(resInc).insertBefore('#addResidential').parent();

      $('.numcomma').keyup(function(){
        $(this).val(function(index, value) {
            value = value.replace(/,/g,'');
            return numberWithCommas(value);
        });
      });

      //To remove section
      $('.resRemove').unbind().click(function(){

        var addId = $(this).attr('id').split('_');
        resCount = resCount - 2;
        $('#resSec1_'+addId[1]).remove();
        $('#resSec2_'+addId[1]).remove();
        $('#resSec3_'+addId[1]).remove();
        $('#resSec4_'+addId[1]).remove();
        $('#resSec5_'+addId[1]).remove();
        $('#resSec6_'+addId[1]).remove();
        $(this).remove();

      });
      checkSelection();
      selectDate();

    }

  });


  $('#addbuytoletproperty').click(function(){

    var propInc = "";

    if(buyletpropCount < 6){

      buyletpropCount = buyletpropCount + 2;

      //Table 1
      propInc += '<div id="blrem_'+buyletpropCount+'" class="close-btn blRemove"><i class="fas fa-times-circle fa-2x"></i></div><table id="blSec1_'+buyletpropCount+'" class="table "> <thead class=""> <tr> <th scope="col" style="border:0px;background-color:transparent;"></th> <th scope="col">Existing Residential ('+(buyletpropCount - 1)+')</th> <th scope="col">Existing Residential ('+buyletpropCount+')</th> </tr> </thead> <tbody class="table-bordered"> <tr> <td>Property Address</td> <td><textarea class="form-control" id="" name="buylet_propaddress_'+(buyletpropCount - 1)+'" rows="4" placeholder="Type existing residential address here..."></textarea></td> <td><textarea class="form-control" id="" name="buylet_propaddress_'+buyletpropCount+'" rows="4" placeholder="Type existing residential address here..."></textarea></td> </tr> <tr> <td>Owner</td> <td class="text-center"> <center> <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Joint</label> <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="buylet_owner_'+(buyletpropCount - 1)+'[]" value="Joint" id=""> </div> / <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Client 1</label> <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="buylet_owner_'+(buyletpropCount - 1)+'[]" value="client_1" id=""> </div> / <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Client 2</label> <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="buylet_owner_'+(buyletpropCount - 1)+'[]" value="client_2" id=""> </div> </center> </td> <td class="text-center"> <center> <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Joint</label> <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="buylet_owner_'+buyletpropCount+'[]" value="Joint" id=""> </div> / <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Client 1</label> <input class="form-check-input" style="margin-left: -0.15rem;" type="checkbox" name="buylet_owner_'+buyletpropCount+'[]" value="client_1" id=""> </div> / <div class="col-md-3 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Client 2</label> <input class="form-check-input" style="margin-left:-0.15rem;" type="checkbox" name="buylet_owner_'+buyletpropCount+'[]" value="client_2" id=""> </div> </center> </td> </tr> <tr> <td>Estimated Property Value</td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" name="buylet_estimatedval_'+(buyletpropCount - 1)+'" class="form-control numcomma" placeholder="Type amount here"> </div> </td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" name="buylet_estimatedval_'+buyletpropCount+'" class="form-control numcomma" placeholder="Type amount here"> </div> </td> </tr> <tr> <td>If selling, what is the sale price?</td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" name="buylet_saleprice_'+(buyletpropCount - 1)+'" class="form-control numcomma" placeholder="Type amount here"> </div> </td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" class="form-control numcomma" name="buylet_saleprice_'+buyletpropCount+'" placeholder="Type amount here"> </div> </td> </tr> </tbody></table>';


      //Table 2
      propInc += '<table id="blSec2_'+buyletpropCount+'" class="table" style="margin-top: 10px;"> <tbody class="table-bordered"> <tr> <td>Is property currently let?</td> <td class="text-center"> <center> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Yes</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existinglet_'+(buyletpropCount - 1)+'" value="Yes" id=""> </div> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">No</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existinglet_'+(buyletpropCount - 1)+'" value="No" id=""> </div> </center> </td> <td class="text-center"> <center> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Yes</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existinglet_'+buyletpropCount+'" value="Yes" id=""> </div> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">No</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_existinglet_'+buyletpropCount+'" value="No" id=""> </div> </center> </td> </tr> <tr> <td>Tenant Type</td> <td> <div class="form-check"> <label class="ver-check-label" for="">Working / Professional</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_'+(buyletpropCount - 1)+'" value="Working / Professional" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Corporate</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_'+(buyletpropCount - 1)+'" value="Corporate" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">DSS</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_'+(buyletpropCount - 1)+'" value="DSS" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Family Member</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_'+(buyletpropCount - 1)+'" value="Family Member" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Asylum Seeker</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_'+(buyletpropCount - 1)+'" value="Asylum Seeker" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Student</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_'+(buyletpropCount - 1)+'" value="Asylum Seeker" id=""> </div> <div> <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label> <input disabled type="text" class="form-control col-md-10 date-input-box client_buylettenant_'+(buyletpropCount - 1)+'" id="" placeholder="other tenant type"> <input type="checkbox" style="margin-left: 1.30rem;" name="client_buylettenant_'+(buyletpropCount - 1)+'" value="Other" class="ver-check-input checkSelection" id="contactCheck5"> </div> </td> <td> <div class="form-check"> <label class="ver-check-label" for="">Working / Professional</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_'+buyletpropCount+'" value="Working / Professional" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Corporate</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_'+buyletpropCount+'" value="Corporate" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">DSS</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_'+buyletpropCount+'" value="DSS" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Family Member</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_'+buyletpropCount+'" value="Family Member" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Asylum Seeker</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_'+buyletpropCount+'" value="Asylum Seeker" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Student</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buylettenant_'+buyletpropCount+'" value="Asylum Seeker" id=""> </div> <div> <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label> <input disabled type="text" class="form-control col-md-10 date-input-box client_buylettenant_'+buyletpropCount+'" id="" placeholder="other tenant type"> <input type="checkbox" style="margin-left: 1.30rem;" name="client_buylettenant_'+buyletpropCount+'" value="Other" class="ver-check-input checkSelection" id="contactCheck5"> </div> </td> </tr> <tr> <td>Tenancy term</td> <td><input type="text" class="form-control" name="buylet_tenantterm_'+(buyletpropCount - 1)+'" placeholder="Type tenancy term"></td> <td><input type="text" name="buylet_tenantterm_'+buyletpropCount+'" class="form-control" placeholder="Type tenancy term"></td> </tr> <tr> <td>Rental income (p.c.m.)</td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" name="buylet_rentalincome_'+(buyletpropCount - 1)+'" class="form-control numcomma" placeholder="Type amount here"> <div class="input-group-prepend"> <div class="input-group-text">p.c.m.</div> </div> </div> </td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" name="buylet_rentalincome_'+buyletpropCount+'" class="form-control numcomma" placeholder="Type amount here"> <div class="input-group-prepend"> <div class="input-group-text">p.c.m.</div> </div> </div> </td> </tr> </tbody> </table>';

      //Table 3
      propInc += '<table id="blSec3_'+buyletpropCount+'" class="table" style="margin-top: 10px;"> <tbody class="table-bordered"> <tr> <td>Is there a mortgage secured<br/>against this property?</td> <td class="text-center"> <center> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Yes</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letsecured_'+(buyletpropCount - 1)+'" value="Yes" id=""> </div> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">No</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letsecured_'+(buyletpropCount - 1)+'" value="No" id=""> </div> </center> </td> <td class="text-center"> <center> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Yes</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letsecured_'+buyletpropCount+'" value="Yes" id=""> </div> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">No</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letsecured_'+buyletpropCount+'" value="No" id=""> </div> </center> </td> </tr> </tbody> </table>';

      propInc += '<table id="blSec4_'+buyletpropCount+'" class="table" style="margin-top: 10px;margin-bottom:10px;"> <tbody class="table-bordered"> <tr> <td>Lender</td> <td><input type="text" class="form-control" name="buylet_lender_'+(buyletpropCount - 1)+'" placeholder="Type Lender"></td> <td><input type="text" name="buylet_lender_'+buyletpropCount+'" class="form-control" placeholder="Type Lender"></td> </tr> <tr> <td>Mortgage Account Number</td> <td><input type="text" class="form-control" name="buylet_mortgageaccnt_'+(buyletpropCount - 1)+'" placeholder="Mortgage account no."></td> <td><input type="text" name="buylet_mortgageaccnt_'+buyletpropCount+'" class="form-control" placeholder="Mortgage account no."></td> </tr> <tr> <td>Amount of Loan Outstanding</td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" class="form-control numcomma" name="buylet_loanout_'+(buyletpropCount - 1)+'" placeholder="Type amount here"> </div> </td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" name="buylet_loanout_'+buyletpropCount+'" class="form-control numcomma" placeholder="Type amount here"> </div> </td> </tr> <tr> <td>Term Remaining</td> <td><input type="text" class="form-control" name="buylet_termremain_'+(buyletpropCount - 1)+'" placeholder="Type term remaining"></td> <td><input type="text" name="buylet_termremain_'+buyletpropCount+'" class="form-control" placeholder="Type term remaining"></td> </tr> <tr> <td>To be Redeemed?</td> <td class="text-center"> <center> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Yes</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letredeem_'+(buyletpropCount - 1)+'" value="Yes" id=""> </div> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">No</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letredeem_'+(buyletpropCount - 1)+'" value="No" id=""> </div> </center> </td> <td class="text-center"> <center> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Yes</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letredeem_'+buyletpropCount+'" value="Yes" id=""> </div> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">No</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letredeem_'+buyletpropCount+'" value="No" id=""> </div> </center> </td> </tr> <tr> <td>Current Interest Rate</td> <td> <div class="input-group"> <input type="text" name="buylet_currinterest_'+(buyletpropCount - 1)+'" class="form-control" placeholder="Type current rate"> <div class="input-group-prepend"> <div class="input-group-text">%</div> </div> </div> </td> <td> <div class="input-group"> <input type="text" class="form-control" name="buylet_currinterest_'+buyletpropCount+'" placeholder="Type current rate"> <div class="input-group-prepend"> <div class="input-group-text">%</div> </div> </div> </td> </tr> <tr> <td>Monthly Mortgage Payment</td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" name="buylet_monthlymortgage_'+(buyletpropCount - 1)+'" class="form-control numcomma" placeholder="Type amount here"> <div class="input-group-prepend"> <div class="input-group-text">p.m.</div> </div> </div> </td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" name="buylet_monthlymortgage_'+buyletpropCount+'" class="form-control numcomma" placeholder="Type amount here"> <div class="input-group-prepend"> <div class="input-group-text">p.m.</div> </div> </div> </td> </tr> <tr> <td>Interest Rate Type</td> <td> <div class="form-check"> <label class="ver-check-label" for="">Fixed Rate</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletinterest_'+(buyletpropCount - 1)+'" value="Fixed" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Discounted Rate</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletinterest_'+(buyletpropCount - 1)+'" value="Discounted" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Capped Rate</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletinterest_'+(buyletpropCount - 1)+'" value="Capped" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Tracker</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletinterest_'+(buyletpropCount - 1)+'" value="Tracker" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Variable Rate</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletinterest_'+(buyletpropCount - 1)+'" value="Variable" id=""> </div> <div> <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label> <input disabled type="text" class="form-control col-md-10 date-input-box client_buyletinterest_'+(buyletpropCount - 1)+'" id=""> <input type="checkbox" style="margin-left: 0.20rem;" name="client_buyletinterest_'+(buyletpropCount - 1)+'" value="Other" class="ver-check-input checkSelection" id="contactCheck5"> </div> </td> <td> <div class="form-check"> <label class="ver-check-label" for="">Fixed Rate</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletinterest_'+buyletpropCount+'" value="Fixed" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Discounted Rate</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletinterest_'+buyletpropCount+'" value="Discounted" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Capped Rate</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletinterest_'+buyletpropCount+'" value="Capped" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Tracker</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletinterest_'+buyletpropCount+'" value="Tracker" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Variable Rate</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletinterest_'+buyletpropCount+'" value="Variable" id=""> </div> <div> <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label> <input disabled type="text" class="form-control col-md-10 date-input-box client_buyletinterest_'+buyletpropCount+'" id=""> <input type="checkbox" style="margin-left: 0.20rem;" name="client_buyletinterest_'+buyletpropCount+'" value="Other" class="ver-check-input checkSelection" id="contactCheck5"> </div> </td> </tr> <tr> <td>Rate End Date</td> <td class="text-center"> <input id="buyrate_date_6_3_1_'+(buyletpropCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / <input id="buyrate_month_6_3_1_'+(buyletpropCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / <input id="buyrate_year_6_3_1_'+(buyletpropCount - 1)+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Year"> <input type="hidden" id="buyrate_calendar_6_3_1_'+(buyletpropCount - 1)+'" class="selectDate" /> </td> <td class="text-center"> <input id="buyrate_date_6_3_1_'+buyletpropCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / <input id="buyrate_month_6_3_1_'+buyletpropCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / <input id="buyrate_year_6_3_1_'+buyletpropCount+'" type="text" class="form-control col-md-3 date-input-box" placeholder="Year"> <input type="hidden" id="buyrate_calendar_6_3_1_'+buyletpropCount+'" class="selectDate" /> </td> </tr> <tr> <td>Does an Early Repayment<br/>Charge (ERC) apply?</td> <td class="text-center"> <center> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Yes</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_leterc_'+(buyletpropCount - 1)+'" value="Yes" id=""> </div> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">No</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_leterc_'+(buyletpropCount - 1)+'" value="No" id=""> </div> </center> </td> <td class="text-center"> <center> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Yes</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_leterc_'+buyletpropCount+'" value="Yes" id=""> </div> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">No</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_leterc_'+buyletpropCount+'" value="No" id=""> </div> </center> </td> </tr> <tr> <td>How much is the ERC?</td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" name="buylet_erc_'+(buyletpropCount - 1)+'" class="form-control numcomma" placeholder="Type ERC amount here"> </div> </td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" name="buylet_erc_'+buyletpropCount+'" class="form-control numcomma" placeholder="Type ERC amount here"> </div> </td> </tr> <tr> <td>Are you prepared to pay this if <br/>you transfer/ repay your current<br/>mortgage?</td> <td class="text-center"> <center> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Yes</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letrepay_'+(buyletpropCount - 1)+'" value="Yes" id=""> </div> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">No</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letrepay_'+(buyletpropCount - 1)+'" value="No" id=""> </div> </center> </td> <td class="text-center"> <center> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Yes</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letrepay_'+buyletpropCount+'" value="Yes" id=""> </div> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">No</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letrepay_'+buyletpropCount+'" value="No" id=""> </div> </center> </td> </tr> <tr> <td>Are your current mortgage terms<br/>portable to a new property?</td> <td class="text-center"> <center> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Yes</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letcurrent_'+(buyletpropCount - 1)+'" value="Yes" id=""> </div> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">No</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letcurrent_'+(buyletpropCount - 1)+'" value="No" id=""> </div> </center> </td> <td class="text-center"> <center> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Yes</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letcurrent_'+buyletpropCount+'" value="Yes" id=""> </div> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">No</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letcurrent_'+buyletpropCount+'" value="No" id=""> </div> </center> </td> </tr> <tr> <td>Repayment method?</td> <td> <div class="form-check"> <label class="ver-check-label" for="">Repayment</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletrepay_'+(buyletpropCount - 1)+'" value="Repayment" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Interest Only</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletrepay_'+(buyletpropCount - 1)+'" value="Interest Only" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Part & Part </label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletrepay_'+(buyletpropCount - 1)+'" value="Part & Part " id=""> </div> </td> <td> <div class="form-check"> <label class="ver-check-label" for="">Repayment</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletrepay_'+buyletpropCount+'" value="Repayment" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Interest Only</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletrepay_'+buyletpropCount+'" value="Interest Only" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Part & Part </label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletrepay_'+buyletpropCount+'" value="Part & Part " id=""> </div> </td> </tr> <tr> <td>If ‘Interest Only’, how do you<br/>intend to repay the capital?</td> <td> <div class="form-check"> <label class="ver-check-label" for="">Savings</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_'+(buyletpropCount - 1)+'" value="Savings" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Investments</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_'+(buyletpropCount - 1)+'" value="Investments" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Sale of mortgaged property</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_'+(buyletpropCount - 1)+'" value="Sale of mortgaged property" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Sale of other property</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_'+(buyletpropCount - 1)+'" value="Sale of other property" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Overpayments</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_'+(buyletpropCount - 1)+'" value="Overpayments" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Pension funds</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_'+(buyletpropCount - 1)+'" value="Pension funds" id=""> </div> <div> <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label> <input disabled type="text" class="form-control col-md-10 date-input-box client_buyletintend_'+(buyletpropCount - 1)+'" id=""> <input type="checkbox" style="margin-left: 1.30rem;" name="client_buyletintend_'+(buyletpropCount - 1)+'" value="Other" class="ver-check-input checkSelection" id="contactCheck5"> </div> </td> <td> <div class="form-check"> <label class="ver-check-label" for="">Savings</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_'+buyletpropCount+'" value="Savings" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Investments</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_'+buyletpropCount+'" value="Investments" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Sale of mortgaged property</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_'+buyletpropCount+'" value="Sale of mortgaged property" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Sale of other property</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_'+buyletpropCount+'" value="Sale of other property" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Overpayments</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_'+buyletpropCount+'" value="Overpayments" id=""> </div> <div class="form-check"> <label class="ver-check-label" for="">Pension funds</label> <input type="checkbox" class="ver-check-input checkSelection" name="client_buyletintend_'+buyletpropCount+'" value="Pension funds" id=""> </div> <div> <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label> <input disabled type="text" class="form-control col-md-10 date-input-box client_buyletintend_'+buyletpropCount+'" id=""> <input type="checkbox" style="margin-left: 1.30rem;" name="client_buyletintend_'+buyletpropCount+'" value="Other" class="ver-check-input checkSelection" id="contactCheck5"> </div> </td> </tr> <tr> <td>Details:</td> <td><textarea style="text-transform: inherit!important;" class="form-control" id="" name="buylet_detail_'+(buyletpropCount - 1)+'" rows="4" placeholder="Type details here..."></textarea></td> <td><textarea style="text-transform:inherit!important;" class="form-control" id="" name="buylet_detail_'+buyletpropCount+'" rows="4" placeholder="Type details here..."></textarea></td> </tr> <tr> <td>If part & part, how much is interest only?</td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" name="buylet_interestonly_'+(buyletpropCount - 1)+'" class="form-control numcomma" placeholder="Type amount here"> <div class="input-group-prepend"> <div class="input-group-text">Interest Only</div> </div> </div> </td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" class="form-control numcomma" name="buylet_interestonly_'+buyletpropCount+'" placeholder="Type amount here"> <div class="input-group-prepend"> <div class="input-group-text">Interest Only</div> </div> </div> </td> </tr> <tr> <td>Do you want to continue using<br/>repayment option(s) for any new<br/>mortgage arrangement?</td> <td class="text-center"> <center> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Yes</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letnew_'+(buyletpropCount - 1)+'" value="Yes" id=""> </div> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">No</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letnew_'+(buyletpropCount - 1)+'" value="No" id=""> </div> </center> </td> <td class="text-center"> <center> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">Yes</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letnew_'+buyletpropCount+'" value="Yes" id=""> </div> <div class="col-md-2 date-input-box" style="padding: 0;"> <label class="form-check-label" for="">No</label> <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="client_letnew_'+buyletpropCount+'" value="No" id=""> </div> </center> </td> </tr> </tbody> </table>';

      $(propInc).insertBefore('#addbuytoletproperty').parent();

      $('.numcomma').keyup(function(){
        $(this).val(function(index, value) {
            value = value.replace(/,/g,'');
            return numberWithCommas(value);
        });
      });

      //To remove section
      $('.blRemove').unbind().click(function(){

        var addId = $(this).attr('id').split('_');
        buyletpropCount = buyletpropCount - 2;
        $('#blSec1_'+addId[1]).remove();
        $('#blSec2_'+addId[1]).remove();
        $('#blSec3_'+addId[1]).remove();
        $('#blSec4_'+addId[1]).remove();
        $(this).remove();

      });
      checkSelection();
      selectDate();

    }

  });

  $('#clientform').submit(function(event) {
      event.preventDefault();
  }).validate({
    rules:{

    },
    submitHandler: function(form) {

      var formData = $('#clientform').serialize(), res_prop = {}, respropArr = [], blObj = {}, blArr = [];
      
      for(var i = 1; i <= resCount; i++){

        res_prop = {};
        if(i % 2 == 0){

        }
        else{
          var ownerArr1 =  document.getElementsByName("res_owner_"+i+"[]"), owner1 = "";
          var ownerArr2 = document.getElementsByName("res_owner_"+(i+1)+"[]"), owner2 = "";

          for(j = 0; j < ownerArr1.length; j++)
          {
              if(ownerArr1[j].checked){
                owner1 += ownerArr1[j].value+",";
              }
          } 

          for(k = 0; k < ownerArr2.length; k++)
          {
              if(ownerArr2[k].checked){
                owner2 += ownerArr2[k].value+",";
              }
          } 
          res_prop["res_propaddress_"+i] = $("textarea[name='res_propaddress_"+i+"']").val();
          res_prop["res_propaddress_"+(i+1)] = $("textarea[name='res_propaddress_"+(i+1)+"']").val();
          res_prop["res_owner_"+i] = owner1;
          res_prop["res_owner_"+(i+1)] = owner2;
          res_prop["res_estimatedval_"+i] = $("input[name='res_estimatedval_"+i+"']").val();
          res_prop["res_estimatedval_"+(i+1)] = $("input[name='res_estimatedval_"+(i+1)+"']").val();
          res_prop["res_saleprice_"+i] = $("input[name='res_saleprice_"+i+"']").val();
          res_prop["res_saleprice_"+(i+1)] = $("input[name='res_saleprice_"+(i+1)+"']").val();
          res_prop["client_existingmortgage_"+i] = $("input[name='client_existingmortgage_"+i+"']:checked").val();
          res_prop["client_existingmortgage_"+(i+1)] = $("input[name='client_existingmortgage_"+(i+1)+"']:checked").val();
          res_prop["res_lender_"+i] = $("input[name='res_lender_"+i+"']").val();
          res_prop["res_lender_"+(i+1)] = $("input[name='res_lender_"+(i+1)+"']").val();
          res_prop["res_macctno_"+i] = $("input[name='res_macctno_"+i+"']").val();
          res_prop["res_macctno_"+(i+1)] = $("input[name='res_macctno_"+(i+1)+"']").val();

          res_prop["res_loanout_"+i] = $("input[name='res_loanout_"+i+"']").val();
          res_prop["res_loanout_"+(i+1)] = $("input[name='res_loanout_"+(i+1)+"']").val();
          res_prop["res_termremain_"+i] = $("input[name='res_termremain_"+i+"']").val();
          res_prop["res_termremain_"+(i+1)] = $("input[name='res_termremain_"+(i+1)+"']").val();

          res_prop["client_existingredeem_"+i] = $("input[name='client_existingredeem_"+i+"']:checked").val();
          res_prop["client_existingredeem_"+(i+1)] = $("input[name='client_existingredeem_"+(i+1)+"']:checked").val();
          res_prop["res_currinterest_"+i] = $("input[name='res_currinterest_"+i+"']").val();
          res_prop["res_currinterest_"+(i+1)] = $("input[name='res_currinterest_"+(i+1)+"']").val();
          res_prop["res_monthlymortgage_"+i] = $("input[name='res_monthlymortgage_"+i+"']").val();
          res_prop["res_monthlymortgage_"+(i+1)] = $("input[name='res_monthlymortgage_"+(i+1)+"']").val();

          res_prop["client_existinginteresttype_"+i] = $("input[name='client_existinginteresttype_"+i+"']:checked").val();
          res_prop["client_existinginteresttype_"+(i+1)] = $("input[name='client_existinginteresttype_"+(i+1)+"']:checked").val();
          res_prop["other_interesttype_"+i] = $("input[name='other_interesttype_"+i+"']").val();
          res_prop["other_interesttype_"+(i+1)] = $("input[name='other_interesttype_"+(i+1)+"']").val();

          res_prop["res_rateenddate_"+i] = $("#existrate_date_6_2_1_"+i).val()+"/"+$("#existrate_month_6_2_1_"+i).val()+"/"+$("#existrate_year_6_2_1_"+i).val();
          res_prop["res_rateenddate_"+(i+1)] = $("#existrate_date_6_2_1_"+(i+1)).val()+"/"+$("#existrate_month_6_2_1_"+(i+1)).val()+"/"+$("#existrate_year_6_2_1_"+(i+1)).val();

          res_prop["client_existingerc_"+i] = $("input[name='client_existingerc_"+i+"']:checked").val();
          res_prop["client_existingerc_"+(i+1)] = $("input[name='client_existingerc_"+(i+1)+"']:checked").val();

          res_prop["res_erc_"+i] = $("input[name='res_erc_"+i+"']").val();
          res_prop["res_erc_"+(i+1)] = $("input[name='res_erc_"+(i+1)+"']").val();

          res_prop["client_existingrepay_"+i] = $("input[name='client_existingrepaymethod_"+i+"']:checked").val();
          res_prop["client_existingrepay_"+(i+1)] = $("input[name='client_existingrepaymethod_"+(i+1)+"']:checked").val();

          res_prop["client_existingcurrent_"+i] = $("input[name='client_existingcurrent_"+i+"']:checked").val();
          res_prop["client_existingcurrent_"+(i+1)] = $("input[name='client_existingcurrent_"+(i+1)+"']:checked").val();

          res_prop["client_existingrepaymethod_"+i] = $("input[name='client_existingrepaymethod_"+i+"']:checked").val();
          res_prop["client_existingrepaymethod_"+(i+1)] = $("input[name='client_existingrepaymethod_"+(i+1)+"']:checked").val();

          res_prop["client_existingintend_"+i] = $("input[name='client_existingintend_"+i+"']:checked").val();
          res_prop["client_existingintend_"+(i+1)] = $("input[name='client_existingintend_"+(i+1)+"']:checked").val();

          res_prop["other_existingintend_"+i] = $("input[name='other_existingintend_"+i+"']:checked").val();
          res_prop["other_existingintend_"+(i+1)] = $("input[name='other_existingintend_"+(i+1)+"']:checked").val();

          res_prop["res_details_"+i] = $("textarea[name='res_details_"+i+"']").val();
          res_prop["res_details_"+(i+1)] = $("textarea[name='res_details_"+(i+1)+"']").val();

          res_prop["res_interestonly_"+i] = $("input[name='res_interestonly_"+i+"']").val();
          res_prop["res_interestonly_"+(i+1)] = $("input[name='res_interestonly_"+(i+1)+"']").val();

          res_prop["client_existingnew_"+i] = $("input[name='client_existingnew_"+i+"']:checked").val();
          res_prop["client_existingnew_"+(i+1)] = $("input[name='client_existingnew_"+(i+1)+"']:checked").val();

          respropArr.push(res_prop);

        }
      }


      for(var i = 1; i <= buyletpropCount; i++){

        blObj = {};
        if(i % 2 == 0){

        }
        else{

          var ownerArr1 =  document.getElementsByName("buylet_owner_"+i+"[]"), owner1 = "";
          var ownerArr2 = document.getElementsByName("buylet_owner_"+(i+1)+"[]"), owner2 = "";

          for(j = 0; j < ownerArr1.length; j++)
          {
              if(ownerArr1[j].checked){
                owner1 += ownerArr1[j].value+",";
              }
          } 

          for(k = 0; k < ownerArr2.length; k++)
          {
              if(ownerArr2[k].checked){
                owner2 += ownerArr2[k].value+",";
              }
          } 
          blObj["buylet_propaddress_"+i] = $("textarea[name='buylet_propaddress_"+i+"']").val();
          blObj["buylet_propaddress_"+(i+1)] = $("textarea[name='buylet_propaddress_"+(i+1)+"']").val();
          blObj["buylet_owner_"+i] = owner1;
          blObj["buylet_owner_"+(i+1)] = owner2;
          blObj["buylet_estimatedval_"+i] = $("input[name='buylet_estimatedval_"+i+"']").val();
          blObj["buylet_estimatedval_"+(i+1)] = $("input[name='buylet_estimatedval_"+(i+1)+"']").val();
          blObj["buylet_saleprice_"+i] = $("input[name='buylet_saleprice_"+i+"']").val();
          blObj["buylet_saleprice_"+(i+1)] = $("input[name='buylet_saleprice_"+(i+1)+"']").val();
          blObj["client_existinglet_"+i] = $("input[name='client_existinglet_"+i+"']:checked").val();
          blObj["client_existinglet_"+(i+1)] = $("input[name='client_existinglet_"+(i+1)+"']:checked").val();
          blObj["client_buylettenant_"+i] = $("input[name='client_buylettenant_"+i+"']:checked").val();
          blObj["client_buylettenant_"+(i+1)] = $("input[name='client_buylettenant_"+(i+1)+"']:checked").val();
          blObj["buylet_tenantterm_"+i] = $("input[name='buylet_tenantterm_"+i+"']").val();
          blObj["buylet_tenantterm_"+(i+1)] = $("input[name='buylet_tenantterm_"+(i+1)+"']").val();
          blObj["buylet_rentalincome_"+i] = $("input[name='buylet_rentalincome_"+i+"']").val();
          blObj["buylet_rentalincome_"+(i+1)] = $("input[name='buylet_rentalincome_"+(i+1)+"']").val();
          blObj["client_letsecured_"+i] = $("input[name='client_letsecured_"+i+"']:checked").val();
          blObj["client_letsecured_"+(i+1)] = $("input[name='client_letsecured_"+(i+1)+"']:checked").val();
          blObj["buylet_lender_"+i] = $("input[name='buylet_lender_"+i+"']").val();
          blObj["buylet_lender_"+(i+1)] = $("input[name='buylet_lender_"+(i+1)+"']").val();
          blObj["buylet_mortgageaccnt_"+i] = $("input[name='buylet_mortgageaccnt_"+i+"']").val();
          blObj["buylet_mortgageaccnt_"+(i+1)] = $("input[name='buylet_mortgageaccnt_"+(i+1)+"']").val();
          blObj["buylet_loanout_"+i] = $("input[name='buylet_loanout_"+i+"']").val();
          blObj["buylet_loanout_"+(i+1)] = $("input[name='buylet_loanout_"+(i+1)+"']").val();
          blObj["buylet_termremain_"+i] = $("input[name='buylet_termremain_"+i+"']").val();
          blObj["buylet_termremain_"+(i+1)] = $("input[name='buylet_termremain_"+(i+1)+"']").val();
          blObj["client_letredeem_"+i] = $("input[name='client_letredeem_"+i+"']:checked").val();
          blObj["client_letredeem_"+(i+1)] = $("input[name='client_letredeem_"+(i+1)+"']:checked").val();
          blObj["buylet_currinterest_"+i] = $("input[name='buylet_currinterest_"+i+"']").val();
          blObj["buylet_currinterest_"+(i+1)] = $("input[name='buylet_currinterest_"+(i+1)+"']").val();
          blObj["buylet_monthlymortgage_"+i] = $("input[name='buylet_monthlymortgage_"+i+"']").val();
          blObj["buylet_monthlymortgage_"+(i+1)] = $("input[name='buylet_monthlymortgage_"+(i+1)+"']").val();
          blObj["client_buyletinterest_"+i] = $("input[name='client_buyletinterest_"+i+"']:checked").val();
          blObj["client_buyletinterest_"+(i+1)] = $("input[name='client_buyletinterest_"+(i+1)+"']:checked").val();
          blObj["buylet_rateenddate_"+i] = $("#buyrate_date_6_3_1_"+i).val()+"/"+$("#buyrate_month_6_3_1_"+i).val()+"/"+$("#buyrate_year_6_3_1_"+i).val();
          blObj["buylet_rateenddate_"+(i+1)] = $("#buyrate_date_6_3_1_"+(i+1)).val()+"/"+$("#buyrate_month_6_3_1_"+(i+1)).val()+"/"+$("#buyrate_year_6_3_1_"+(i+1)).val();
          blObj["client_leterc_"+i] = $("input[name='client_leterc_"+i+"']:checked").val();
          blObj["client_leterc_"+(i+1)] = $("input[name='client_leterc_"+(i+1)+"']:checked").val();
          blObj["buylet_erc_"+i] = $("input[name='buylet_erc_"+i+"']").val();
          blObj["buylet_erc_"+(i+1)] = $("input[name='buylet_erc_"+(i+1)+"']").val();
          blObj["client_letrepay_"+i] = $("input[name='client_letrepay_"+i+"']:checked").val();
          blObj["client_letrepay_"+(i+1)] = $("input[name='client_letrepay_"+(i+1)+"']:checked").val();
          blObj["client_letcurrent_"+i] = $("input[name='client_letcurrent_"+i+"']:checked").val();
          blObj["client_letcurrent_"+(i+1)] = $("input[name='client_letcurrent_"+(i+1)+"']:checked").val();
          blObj["client_buyletrepay_"+i] = $("input[name='client_buyletrepay_"+i+"']").val();
          blObj["client_buyletrepay_"+(i+1)] = $("input[name='client_buyletrepay_"+(i+1)+"']").val();
          blObj["client_buyletintend_"+i] = $("input[name='client_buyletintend_"+i+"']:checked").val();
          blObj["client_buyletintend_"+(i+1)] = $("input[name='client_buyletintend_"+(i+1)+"']:checked").val();
          blObj["buylet_detail_"+i] = $("textarea[name='buylet_detail_"+i+"']").val();
          blObj["buylet_detail_"+(i+1)] = $("textarea[name='buylet_detail_"+(i+1)+"']").val();
          blObj["buylet_interestonly_"+i] = $("input[name='buylet_interestonly_"+i+"']").val();
          blObj["buylet_interestonly_"+(i+1)] = $("input[name='buylet_interestonly_"+(i+1)+"']").val();
          blObj["client_letnew_"+i] = $("input[name='client_letnew_"+i+"']:checked").val();
          blObj["client_letnew_"+(i+1)] = $("input[name='client_letnew_"+(i+1)+"']:checked").val();

          blArr.push(blObj);

        }
      }

      formData = formData + "&res_prop="+JSON.stringify(respropArr)+"&buytolet_prop="+JSON.stringify(blArr);


      $.ajax({
        url:'<?php echo base_url(); ?>add/expropmortgage?form_id=<?php echo $last; ?>',
        type:'POST',
        data: formData,
        dataType: 'json',
        success:function(as){

            if(as.status){
              if(as.action == 'create'){
                location.href="<?php echo base_url(); ?>admin/assets/"+as.data;
              }
              else if(as.action == 'edit'){
                location.href="<?php echo base_url(); ?>admin/assets/"+as.data;
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
      var formData = $('#clientform').serialize(), res_prop = {}, respropArr = [], blObj = {}, blArr = [];
      
      for(var i = 1; i <= resCount; i++){

        res_prop = {};
        if(i % 2 == 0){

        }
        else{
          var ownerArr1 =  document.getElementsByName("res_owner_"+i+"[]"), owner1 = "";
          var ownerArr2 = document.getElementsByName("res_owner_"+(i+1)+"[]"), owner2 = "";

          for(j = 0; j < ownerArr1.length; j++)
          {
              if(ownerArr1[j].checked){
                owner1 += ownerArr1[j].value+",";
              }
          } 

          for(k = 0; k < ownerArr2.length; k++)
          {
              if(ownerArr2[k].checked){
                owner2 += ownerArr2[k].value+",";
              }
          } 
          res_prop["res_propaddress_"+i] = $("textarea[name='res_propaddress_"+i+"']").val();
          res_prop["res_propaddress_"+(i+1)] = $("textarea[name='res_propaddress_"+(i+1)+"']").val();
          res_prop["res_owner_"+i] = owner1;
          res_prop["res_owner_"+(i+1)] = owner2;
          res_prop["res_estimatedval_"+i] = $("input[name='res_estimatedval_"+i+"']").val();
          res_prop["res_estimatedval_"+(i+1)] = $("input[name='res_estimatedval_"+(i+1)+"']").val();
          res_prop["res_saleprice_"+i] = $("input[name='res_saleprice_"+i+"']").val();
          res_prop["res_saleprice_"+(i+1)] = $("input[name='res_saleprice_"+(i+1)+"']").val();
          res_prop["client_existingmortgage_"+i] = $("input[name='client_existingmortgage_"+i+"']:checked").val();
          res_prop["client_existingmortgage_"+(i+1)] = $("input[name='client_existingmortgage_"+(i+1)+"']:checked").val();
          res_prop["res_lender_"+i] = $("input[name='res_lender_"+i+"']").val();
          res_prop["res_lender_"+(i+1)] = $("input[name='res_lender_"+(i+1)+"']").val();
          res_prop["res_macctno_"+i] = $("input[name='res_macctno_"+i+"']").val();
          res_prop["res_macctno_"+(i+1)] = $("input[name='res_macctno_"+(i+1)+"']").val();

          res_prop["res_loanout_"+i] = $("input[name='res_loanout_"+i+"']").val();
          res_prop["res_loanout_"+(i+1)] = $("input[name='res_loanout_"+(i+1)+"']").val();
          res_prop["res_termremain_"+i] = $("input[name='res_termremain_"+i+"']").val();
          res_prop["res_termremain_"+(i+1)] = $("input[name='res_termremain_"+(i+1)+"']").val();

          res_prop["client_existingredeem_"+i] = $("input[name='client_existingredeem_"+i+"']:checked").val();
          res_prop["client_existingredeem_"+(i+1)] = $("input[name='client_existingredeem_"+(i+1)+"']:checked").val();
          res_prop["res_currinterest_"+i] = $("input[name='res_currinterest_"+i+"']").val();
          res_prop["res_currinterest_"+(i+1)] = $("input[name='res_currinterest_"+(i+1)+"']").val();
          res_prop["res_monthlymortgage_"+i] = $("input[name='res_monthlymortgage_"+i+"']").val();
          res_prop["res_monthlymortgage_"+(i+1)] = $("input[name='res_monthlymortgage_"+(i+1)+"']").val();

          res_prop["client_existinginteresttype_"+i] = $("input[name='client_existinginteresttype_"+i+"']:checked").val();
          res_prop["client_existinginteresttype_"+(i+1)] = $("input[name='client_existinginteresttype_"+(i+1)+"']:checked").val();
          res_prop["other_interesttype_"+i] = $("input[name='other_interesttype_"+i+"']").val();
          res_prop["other_interesttype_"+(i+1)] = $("input[name='other_interesttype_"+(i+1)+"']").val();

          res_prop["res_rateenddate_"+i] = $("#existrate_date_6_2_1_"+i).val()+"/"+$("#existrate_month_6_2_1_"+i).val()+"/"+$("#existrate_year_6_2_1_"+i).val();
          res_prop["res_rateenddate_"+(i+1)] = $("#existrate_date_6_2_1_"+(i+1)).val()+"/"+$("#existrate_month_6_2_1_"+(i+1)).val()+"/"+$("#existrate_year_6_2_1_"+(i+1)).val();

          res_prop["client_existingerc_"+i] = $("input[name='client_existingerc_"+i+"']:checked").val();
          res_prop["client_existingerc_"+(i+1)] = $("input[name='client_existingerc_"+(i+1)+"']:checked").val();

          res_prop["res_erc_"+i] = $("input[name='res_erc_"+i+"']").val();
          res_prop["res_erc_"+(i+1)] = $("input[name='res_erc_"+(i+1)+"']").val();

          res_prop["client_existingrepay_"+i] = $("input[name='client_existingrepaymethod_"+i+"']:checked").val();
          res_prop["client_existingrepay_"+(i+1)] = $("input[name='client_existingrepaymethod_"+(i+1)+"']:checked").val();

          res_prop["client_existingcurrent_"+i] = $("input[name='client_existingcurrent_"+i+"']:checked").val();
          res_prop["client_existingcurrent_"+(i+1)] = $("input[name='client_existingcurrent_"+(i+1)+"']:checked").val();

          res_prop["client_existingrepaymethod_"+i] = $("input[name='client_existingrepaymethod_"+i+"']:checked").val();
          res_prop["client_existingrepaymethod_"+(i+1)] = $("input[name='client_existingrepaymethod_"+(i+1)+"']:checked").val();

          res_prop["client_existingintend_"+i] = $("input[name='client_existingintend_"+i+"']:checked").val();
          res_prop["client_existingintend_"+(i+1)] = $("input[name='client_existingintend_"+(i+1)+"']:checked").val();

          res_prop["other_existingintend_"+i] = $("input[name='other_existingintend_"+i+"']:checked").val();
          res_prop["other_existingintend_"+(i+1)] = $("input[name='other_existingintend_"+(i+1)+"']:checked").val();

          res_prop["res_details_"+i] = $("textarea[name='res_details_"+i+"']").val();
          res_prop["res_details_"+(i+1)] = $("textarea[name='res_details_"+(i+1)+"']").val();

          res_prop["res_interestonly_"+i] = $("input[name='res_interestonly_"+i+"']").val();
          res_prop["res_interestonly_"+(i+1)] = $("input[name='res_interestonly_"+(i+1)+"']").val();

          res_prop["client_existingnew_"+i] = $("input[name='client_existingnew_"+i+"']:checked").val();
          res_prop["client_existingnew_"+(i+1)] = $("input[name='client_existingnew_"+(i+1)+"']:checked").val();

          respropArr.push(res_prop);

        }
      }


      for(var i = 1; i <= buyletpropCount; i++){

        blObj = {};
        if(i % 2 == 0){

        }
        else{

          var ownerArr1 =  document.getElementsByName("buylet_owner_"+i+"[]"), owner1 = "";
          var ownerArr2 = document.getElementsByName("buylet_owner_"+(i+1)+"[]"), owner2 = "";

          for(j = 0; j < ownerArr1.length; j++)
          {
              if(ownerArr1[j].checked){
                owner1 += ownerArr1[j].value+",";
              }
          } 

          for(k = 0; k < ownerArr2.length; k++)
          {
              if(ownerArr2[k].checked){
                owner2 += ownerArr2[k].value+",";
              }
          } 
          blObj["buylet_propaddress_"+i] = $("textarea[name='buylet_propaddress_"+i+"']").val();
          blObj["buylet_propaddress_"+(i+1)] = $("textarea[name='buylet_propaddress_"+(i+1)+"']").val();
          blObj["buylet_owner_"+i] = owner1;
          blObj["buylet_owner_"+(i+1)] = owner2;
          blObj["buylet_estimatedval_"+i] = $("input[name='buylet_estimatedval_"+i+"']").val();
          blObj["buylet_estimatedval_"+(i+1)] = $("input[name='buylet_estimatedval_"+(i+1)+"']").val();
          blObj["buylet_saleprice_"+i] = $("input[name='buylet_saleprice_"+i+"']").val();
          blObj["buylet_saleprice_"+(i+1)] = $("input[name='buylet_saleprice_"+(i+1)+"']").val();
          blObj["client_existinglet_"+i] = $("input[name='client_existinglet_"+i+"']:checked").val();
          blObj["client_existinglet_"+(i+1)] = $("input[name='client_existinglet_"+(i+1)+"']:checked").val();
          blObj["client_buylettenant_"+i] = $("input[name='client_buylettenant_"+i+"']:checked").val();
          blObj["client_buylettenant_"+(i+1)] = $("input[name='client_buylettenant_"+(i+1)+"']:checked").val();
          blObj["buylet_tenantterm_"+i] = $("input[name='buylet_tenantterm_"+i+"']").val();
          blObj["buylet_tenantterm_"+(i+1)] = $("input[name='buylet_tenantterm_"+(i+1)+"']").val();
          blObj["buylet_rentalincome_"+i] = $("input[name='buylet_rentalincome_"+i+"']").val();
          blObj["buylet_rentalincome_"+(i+1)] = $("input[name='buylet_rentalincome_"+(i+1)+"']").val();
          blObj["client_letsecured_"+i] = $("input[name='client_letsecured_"+i+"']:checked").val();
          blObj["client_letsecured_"+(i+1)] = $("input[name='client_letsecured_"+(i+1)+"']:checked").val();
          blObj["buylet_lender_"+i] = $("input[name='buylet_lender_"+i+"']").val();
          blObj["buylet_lender_"+(i+1)] = $("input[name='buylet_lender_"+(i+1)+"']").val();
          blObj["buylet_mortgageaccnt_"+i] = $("input[name='buylet_mortgageaccnt_"+i+"']").val();
          blObj["buylet_mortgageaccnt_"+(i+1)] = $("input[name='buylet_mortgageaccnt_"+(i+1)+"']").val();
          blObj["buylet_loanout_"+i] = $("input[name='buylet_loanout_"+i+"']").val();
          blObj["buylet_loanout_"+(i+1)] = $("input[name='buylet_loanout_"+(i+1)+"']").val();
          blObj["buylet_termremain_"+i] = $("input[name='buylet_termremain_"+i+"']").val();
          blObj["buylet_termremain_"+(i+1)] = $("input[name='buylet_termremain_"+(i+1)+"']").val();
          blObj["client_letredeem_"+i] = $("input[name='client_letredeem_"+i+"']:checked").val();
          blObj["client_letredeem_"+(i+1)] = $("input[name='client_letredeem_"+(i+1)+"']:checked").val();
          blObj["buylet_currinterest_"+i] = $("input[name='buylet_currinterest_"+i+"']").val();
          blObj["buylet_currinterest_"+(i+1)] = $("input[name='buylet_currinterest_"+(i+1)+"']").val();
          blObj["buylet_monthlymortgage_"+i] = $("input[name='buylet_monthlymortgage_"+i+"']").val();
          blObj["buylet_monthlymortgage_"+(i+1)] = $("input[name='buylet_monthlymortgage_"+(i+1)+"']").val();
          blObj["client_buyletinterest_"+i] = $("input[name='client_buyletinterest_"+i+"']:checked").val();
          blObj["client_buyletinterest_"+(i+1)] = $("input[name='client_buyletinterest_"+(i+1)+"']:checked").val();
          blObj["buylet_rateenddate_"+i] = $("#buyrate_date_6_3_1_"+i).val()+"/"+$("#buyrate_month_6_3_1_"+i).val()+"/"+$("#buyrate_year_6_3_1_"+i).val();
          blObj["buylet_rateenddate_"+(i+1)] = $("#buyrate_date_6_3_1_"+(i+1)).val()+"/"+$("#buyrate_month_6_3_1_"+(i+1)).val()+"/"+$("#buyrate_year_6_3_1_"+(i+1)).val();
          blObj["client_leterc_"+i] = $("input[name='client_leterc_"+i+"']:checked").val();
          blObj["client_leterc_"+(i+1)] = $("input[name='client_leterc_"+(i+1)+"']:checked").val();
          blObj["buylet_erc_"+i] = $("input[name='buylet_erc_"+i+"']").val();
          blObj["buylet_erc_"+(i+1)] = $("input[name='buylet_erc_"+(i+1)+"']").val();
          blObj["client_letrepay_"+i] = $("input[name='client_letrepay_"+i+"']:checked").val();
          blObj["client_letrepay_"+(i+1)] = $("input[name='client_letrepay_"+(i+1)+"']:checked").val();
          blObj["client_letcurrent_"+i] = $("input[name='client_letcurrent_"+i+"']:checked").val();
          blObj["client_letcurrent_"+(i+1)] = $("input[name='client_letcurrent_"+(i+1)+"']:checked").val();
          blObj["client_buyletrepay_"+i] = $("input[name='client_buyletrepay_"+i+"']").val();
          blObj["client_buyletrepay_"+(i+1)] = $("input[name='client_buyletrepay_"+(i+1)+"']").val();
          blObj["client_buyletintend_"+i] = $("input[name='client_buyletintend_"+i+"']:checked").val();
          blObj["client_buyletintend_"+(i+1)] = $("input[name='client_buyletintend_"+(i+1)+"']:checked").val();
          blObj["buylet_detail_"+i] = $("textarea[name='buylet_detail_"+i+"']").val();
          blObj["buylet_detail_"+(i+1)] = $("textarea[name='buylet_detail_"+(i+1)+"']").val();
          blObj["buylet_interestonly_"+i] = $("input[name='buylet_interestonly_"+i+"']").val();
          blObj["buylet_interestonly_"+(i+1)] = $("input[name='buylet_interestonly_"+(i+1)+"']").val();
          blObj["client_letnew_"+i] = $("input[name='client_letnew_"+i+"']:checked").val();
          blObj["client_letnew_"+(i+1)] = $("input[name='client_letnew_"+(i+1)+"']:checked").val();

          blArr.push(blObj);

        }
      }

      formData = formData + "&res_prop="+JSON.stringify(respropArr)+"&buytolet_prop="+JSON.stringify(blArr);


      $.ajax({
        url:'<?php echo base_url(); ?>add/expropmortgage?form_id=<?php echo $last; ?>',
        type:'POST',
        data: formData,
        dataType: 'json',
        success:function(as){

            if(as.status){
              if(as.action == 'create'){
                location.href="<?php echo base_url(); ?>admin/financial/"+as.data;
              }
              else if(as.action == 'edit'){
                location.href="<?php echo base_url(); ?>admin/financial/"+as.data;
              }
            }
            else{
              alert(as.message);
            }
        }
      });
  });
</script> 

  