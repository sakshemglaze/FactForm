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

<?php

  $pdata = $this->admin->getMortgageLoan($last);  

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

          <h4>Section 11: New Mortgage Loan Details</h4>

          <!--========FORM SUB-SECTION HEADING==========-->
          <h5>11.1 Loan Scenario</h5>

          <!--=======FORM STARTS HERE===========-->
          <form id="clientform">

            <!--===== 11.1 LOAN SCENARIO TABLE STARTS HERE=====-->
            <!--TABLE 1 STARTS HERE-->
            <table class="tab-child" style="margin-top:10px;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width: 30%!important;">Client Type</td>
                  <td>
                    <div class="form-check">
                      <label class="ver-check-label" for="">First Time Buyer</label>
                      <input class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_type == "First_Time_Buyer"){ echo "checked"; } ?> type="checkbox" name="client_type" value="First_Time_Buyer" id="">
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Home Owner</label>
                      <input class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_type == "Home_Owner"){ echo "checked"; } ?> type="checkbox" name="client_type" value="Home_Owner" id="">
                    </div>
                  </td>
                </tr>

                <tr>
                  <td style="width: 30%!important;">What is the purpose of the loan? <br/> <span style="font-weight: normal;">(tick all that apply)</span></td>
                  <?php if($pdata != NULL){$b1 = explode(",", $pdata->purpose);} ?>
                  <td>
                    <div class="form-check">
                      <label class="ver-check-label" for="">House Purchase</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "House_Purchase" , $b1 )){echo "checked";} ?> type="checkbox" name="purpose[]" value="House_Purchase" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Bridging Loan</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Bridging_Loan" , $b1 )){echo "checked";} ?> type="checkbox" name="purpose[]" value="Bridging_Loan" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Additional Borrowing</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Additional_Borrowing" , $b1 )){echo "checked";} ?> type="checkbox" name="purpose[]" value="Additional_Borrowing" id="">
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Re-mortgage</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Re-mortgage" , $b1 )){echo "checked";} ?> type="checkbox" name="purpose[]" value="Re-mortgage" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Buy to Let</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Buy_to_Let" , $b1 )){echo "checked";} ?> type="checkbox" name="purpose[]" value="Buy_to_Let" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Let to Buy</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Let_to_Buy" , $b1 )){echo "checked";} ?> type="checkbox" name="purpose[]" value="Let_to_Buy" id="">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table><!---/TABLE 1 ENDS HERE-->
          
            <!-- TABLE 2 STARTS HERE-->
            <table class="table tab-child">
              <thead class="tab-head">
                <th colspan="2" style="text-align: left;padding-left:0.85rem;">Notes</th>
              </thead>
              <tbody class="tab-bordered">
                <tr>
                  <td style="padding-right: 0px;"><textarea style="text-transform: inherit!important;" rows="4" name="scenario_notes" class="form-control" placeholder="Type notes here"><?php if($pdata != NULL){echo $pdata->scenario_notes;} ?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--===== /11.1 LOAN SCENARIO TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">11.2 Mortgage Repayment Method</h5>

            <!--===== 11.2 MORTGAGE RE-PAYMENT METHOD TABLE STARTS HERE=====-->
            
            <!--TABLE 1 STARTS HERE-->
            <table class="tab-child" style="margin-top:10px;">
              <tbody class="table-bordered">
                <tr>
                  <td>Would you prefer to have the certainty that your mortgage loan<br/>is repaid at the end of the term?<br/> <span style="font-weight: normal;">(Repayment)</span></td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->end_of_term == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="end_of_term" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->end_of_term == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="end_of_term" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>Would you prefer to use an alternative method to repay the 
                    <br/>capital outstanding on the mortgage when it is due? <br/> 
                    <span style="font-weight: normal;">(Interest Only)</span>
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->repay_the_capital == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="repay_the_capital" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->repay_the_capital == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="repay_the_capital" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>If yes, what percentage of the mortgage do you wish to have on<br/>an ‘interest only’ basis?</td>
                  <td>
                    <input type="text" name="interest_only" value="<?php if($pdata != NULL){echo $pdata->interest_only;}?>" class="form-control col-md-6 date-input-box" placeholder="Type percentage here"> 
                    <span style="margin:5px;">%</span>
                  </td>
                </tr>

                <tr>
                  <td style="width: 30%!important;">What repayment vehicles are you intending to use to repay the<br/>mortgage?<br/> <span style="font-weight: normal;">(please provide specific details in the Notes below)</span> </td>
                  <?php if($pdata != NULL){$b1 = explode(",", $pdata->intending);} ?>
                  <td>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Investments</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Investments" , $b1 )){echo "checked";} ?> type="checkbox" name="intending[]" value="Investments" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Overpayments</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Overpayments" , $b1 )){echo "checked";} ?> type="checkbox" name="intending[]" value="Overpayments" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Savings</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Flat" , $b1 )){echo "checked";} ?> type="checkbox" name="intending[]" value="Flat" id="">
                    </div>                     
                    <div class="form-check">
                      <label class="ver-check-label" for="">Commonhold</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Commonhold" , $b1 )){echo "checked";} ?> type="checkbox" name="intending[]" value="Commonhold" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Sale of mortgaged property</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Sale of mortgaged property" , $b1 )){echo "checked";} ?> type="checkbox" name="intending[]" value="Sale of mortgaged property" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Sale of other property</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Sale of other property" , $b1 )){echo "checked";} ?> type="checkbox" name="intending[]" value="Sale of other property" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Pension funds</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Pension funds" , $b1 )){echo "checked";} ?> type="checkbox" name="intending[]" value="Pension funds" id="">
                    </div>
                    <div>
                     <label style="margin: 0px;" class="ver-check-label" for="">Other:</label>
                      <input type="text" class="form-control col-md-10 date-input-box" id="">
                      <input type="checkbox" <?php if($pdata != NULL && in_array( "Other" , $b1 )){echo "checked";} ?> style="margin-left: 0.20rem; margin-top:0.55rem;" name="intending[]" value="Other" class="ver-check-input" id="">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="table tab-child">
              <thead class="tab-head">
                <th colspan="2" style="text-align: left;padding-left:0.85rem;">Notes</th>
              </thead>
              <tbody class="tab-bordered">
                <tr>
                  <td style="padding-right: 0px;">
                    <textarea style="text-transform: inherit!important;" rows="4" name="repayment_notes" class="form-control" placeholder="Type notes here..."><?php if($pdata != NULL){echo $pdata->repayment_notes;}?></textarea>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->  

            <!--===== /11.2 MORTGAGE RE-PAYMENT METHOD TABLE ENDS HERE=====-->   

            <!--========FORM SUB-SECTION HEADING==========-->  
            <h5 class="marTP-30">11.3 Mortgage Term</h5>

            <!--===== 11.3 MORTGAGE TERM TABLE STARTS HERE=====-->

            <!--TABLE 1 STARTS HERE-->
            <table class="financial-table" style="margin-top:10px;">
              <tbody class="table-bordered">
                <tr>
                  <td style="text-align: left;padding-left: 0.85rem;">Over what term would you like to repay your mortgage?</td>
                  <td><input type="text" name="repay_your_mortgage" class="form-control" value="<?php if($pdata != NULL){echo $pdata->repay_your_mortgage;}?>" placeholder="Type here"></td>
                </tr>
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->    
            
            <!--TABLE 2 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td style="width:4.4%;text-align: left;padding-left: 0.85rem;">Please provide reasons</td>
                  <td><textarea style="text-transform: inherit!important;" rows="5" name="provide_reasons" class="form-control" placeholder="Type reason here..."><?php if($pdata != NULL){echo $pdata->provide_reasons;}?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->  

            <!--TABLE 3 STARTS HERE-->
            <table class="financial-table">
              <tbody class="tab-bordered">
                <tr>
                  <td style="text-align: left;padding-left: 0.85rem;">Does this term exceed either of your expected retirement age(s)?</td>
                  <td>
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->expected_retirement == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="expected_retirement" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->expected_retirement == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="expected_retirement" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 3 ENDS HERE-->
            
            <!--TABLE 4 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td style="width:4%;text-align: left;padding-left: 0.85rem;">If yes, please provide details of <br/>how you intend to maintain your <br/>mortgage payments in retirement <br/>or repay the mortgage early</td>
                  <td><textarea style="text-transform: inherit!important;" rows="5" name="payments_in" class="form-control" placeholder="Type reason here..."><?php if($pdata != NULL){echo $pdata->payments_in;}?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 4 ENDS HERE-->

            <!--===== /11.3 MORTGAGE TERM TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">11.4 Mortgage Summary</h5>

            <!--===== 11.4 MORTGAGE SUMMARY TABLE STARTS HERE=====-->
            <table class="tab-child">
              <tbody class="table-bordered">
                <tr>
                  <td style="width:4.5%;">Purchase Price / Estimated Value</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" name="estimated_value" class="form-control numcomma" value="<?php if($pdata != NULL){echo $pdata->estimated_value;}?>" placeholder="Type amount here">
                    </div>
                  </td>
                </tr>

                <tr>
                  <td style="width:4.5%;">Loan Amount Required</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" name="loan_amount" class="form-control numcomma" value="<?php if($pdata != NULL){echo $pdata->loan_amount;}?>" placeholder="Type amount here">
                    </div>
                  </td>
                </tr>

                <tr>
                  <td style="width:4.5%;">Loan to Value</td>
                  <td>
                    <div class="input-group">                                              
                      <input type="text" name="loan_to_value" class="form-control" value="<?php if($pdata != NULL){echo $pdata->loan_to_value;}?>" placeholder="Type percentage here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">%</div>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td style="width:4.5%;">Proposed Term</td>
                  <td>
                    <div class="input-group"> 
                      <input type="text" name="proposed_term" class="form-control" value="<?php if($pdata != NULL){echo $pdata->proposed_term;}?>" placeholder="Type proposed term">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Years</div>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <!--===== /11.4 MORTGAGE SUMMARY TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">11.5 Deposit (Purchase Only)</h5>
            <span>A cost breakdown is provided in Section 15 to aid discussions around deposit.</span>

            <!--===== 11.5 DEPOSIT (PURCHASE ONLY) TABLE STARTS HERE=====-->  
            
            <!--TABLE 1 STARTS HERE-->
            <table class="tab-child" style="margin-top:10px;">
              <thead>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <?php if($ftype){ ?><th scope="col" class="hide-col">Client 2</th><?php } ?>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td style="width:4.5%;">Amount</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" name="amount_1" class="form-control numcomma" value="<?php if($pdata != NULL){echo $pdata->amount_1;}?>" placeholder="Type amount here">
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" name="amount_2" class="form-control numcomma" value="<?php if($pdata != NULL){echo $pdata->amount_2;}?>" placeholder="Type amount here">
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td style="width:4.5%;">Source(s)</td>
                  <?php if($pdata != NULL){$b1 = explode(",", $pdata->source_1);} ?>
                  <td>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Gift (family)</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Gift (family)" , $b1 )){echo "checked";} ?> type="checkbox" name="source_1[]" value="Gift (family)" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Gift (other)</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Gift (other)" , $b1 )){echo "checked";} ?> type="checkbox" name="source_1[]" value="Gift (other)" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Savings</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Savings" , $b1 )){echo "checked";} ?> type="checkbox" name="source_1[]" value="Savings" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Inheritance</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Inheritance" , $b1 )){echo "checked";} ?> type="checkbox" name="source_1[]" value="Inheritance" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Sales Proceeds</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Sales Proceeds" , $b1 )){echo "checked";} ?> type="checkbox" name="source_1[]" value="Sales Proceeds" id="">
                    </div>
                    <div>
                      <label style="margin: 0px;" class="ver-check-label" for="">Other:</label>
                      <input type="text" class="form-control col-md-10 date-input-box" id="" placeholder="Other Source">
                      <input type="checkbox" <?php if($pdata != NULL && in_array( "Other" , $b1 )){echo "checked";} ?> style="margin-left: 0.20rem;margin-top:0.55rem;" name="source_1[]" value="Other" class="ver-check-input" id="">
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">
                  <?php if($pdata != NULL){$b2 = explode(",", $pdata->source_2);} ?>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Gift (family)</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Gift (family)" , $b2 )){echo "checked";} ?> type="checkbox" name="source_2[]" value="Gift (family)" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Gift (other)</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Gift (other)" , $b2 )){echo "checked";} ?> type="checkbox" name="source_2[]" value="Gift (other)" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Savings</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Savings" , $b2 )){echo "checked";} ?> type="checkbox" name="source_2[]" value="Savings" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Inheritance</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Inheritance" , $b2 )){echo "checked";} ?> type="checkbox" name="source_2[]" value="Inheritance" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Sales Proceeds</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Sales Proceeds" , $b2 )){echo "checked";} ?> type="checkbox" name="source_2[]" value="Sales Proceeds" id="">
                    </div>
                    <div>
                      <label style="margin: 0px;" class="ver-check-label" for="">Other:</label>
                      <input type="text" class="form-control col-md-10 date-input-box" id="" placeholder="Other Source">
                      <input type="checkbox" <?php if($pdata != NULL && in_array( "Other" , $b2 )){echo "checked";} ?> style="margin-left: 0.20rem;margin-top:0.55rem;" name="source_2[]" value="Other" class="ver-check-input" id="">
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Is this repayable?<br/> <span style="font-weight: normal;">(If yes please provide details)</span></td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->is_this_repayable_1 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="is_this_repayable_1" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->is_this_repayable_1 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="is_this_repayable_1" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->is_this_repayable_2 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="is_this_repayable_2" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->is_this_repayable_2 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="is_this_repayable_2" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <?php } ?>
                </tr>                
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->
        
            <!--TABLE 2 STARTS HERE-->
            <table class="table tab-child">
              <thead class="tab-head">
                <th colspan="2" style="text-align: left;padding-left:0.85rem;">Notes</th>
              </thead>
              <tbody class="tab-bordered">
                <tr>
                  <td style="padding-right: 0px;"><textarea style="text-transform: inherit!important;" rows="4" name="notes" class="form-control" placeholder="Type notes here"><?php if($pdata != NULL){echo $pdata->notes;}?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->

            <!--===== /11.5 DEPOSIT (PURCHASE ONLY) TABLE ENDS HERE=====-->    

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">11.6 Affordable Home Ownership Schemes</h5>

            <!--===== 11.6 AFFORDABLE HOME OWENERSHIP SCHEMES TABLE STARTS HERE=====-->  
            <table class="tab-child" style="margin-top:10px;">
              <tbody class="table-bordered">
                <tr>
                  <td>Is this transaction subject to an affordable<br/>home ownership scheme?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->transaction_subject == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="transaction_subject" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->transaction_subject == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="transaction_subject" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>Schemes Type</td>
                  <?php if($pdata != NULL){$b1 = explode(",", $pdata->scheme_type);} ?>
                  <td>
                    <div class="col-md-6 date-input-box" style="float: left;">
                      <label class="form-check-label text-left" for="">Right to Buy</label>
                      <input class="form-check-input" <?php if($pdata != NULL && in_array( "Right to Buy" , $b1 )){echo "checked";} ?> style="margin-left:2.75rem;" type="checkbox" name="scheme_type[]" value="Right to Buy" id="">
                    </div>

                    <div class="col-md-6 date-input-box" style="float: left;">
                      <label class="form-check-label text-left" for="">Help to Buy 1  <br/> <span style="font-weight: normal;">(Equity Loan)</span></label>
                      <input class="form-check-input" <?php if($pdata != NULL && in_array( "Help to Buy 1" , $b1 )){echo "checked";} ?> style="margin-left:3.45rem;" type="checkbox" name="scheme_type[]" value=">Help to Buy 1" id="">
                    </div>

                    <div class="col-md-6 date-input-box" style="float: left;">
                      <label class="form-check-label text-left" for="">Shared Ownership</label>
                      <input class="form-check-input" <?php if($pdata != NULL && in_array( "Shared Ownership" , $b1 )){echo "checked";} ?> style="margin-left:0.75rem;" type="checkbox" name="scheme_type[]" value="Shared Ownership" id="">
                    </div>

                    <div class="col-md-6 date-input-box" style="float: left;">
                      <label class="form-check-label text-left" for="">Help to Buy 2  <br/> <span style="font-weight: normal;">(Mortgage Guarantee)</span></label>
                      <input class="form-check-input" <?php if($pdata != NULL && in_array( "Help to Buy 2" , $b1 )){echo "checked";} ?> style="margin-left:0.75rem;" type="checkbox" name="scheme_type[]" value="Help to Buy 2" id="">
                    </div>

                    <div class="col-md-6 date-input-box" style="float: left;">
                      <label class="form-check-label text-left" for="">Help to Buy<br/> <span style="font-weight: normal;">(London)</span></label>
                      <input class="form-check-input" <?php if($pdata != NULL && in_array( "Help to Buy_London" , $b1 )){echo "checked";} ?> style="margin-left:2.95rem;" type="checkbox" name="scheme_type[]" value="Help to Buy_London" id="">
                    </div>

                    <div class="col-md-6 date-input-box" style="float: left;">
                      <label class="form-check-label text-left" for="">Help to Buy <br/> <span style="font-weight: normal;">(Armed Forces)</span></label>
                      <input class="form-check-input" <?php if($pdata != NULL && in_array( "Help to Buy_Armed" , $b1 )){echo "checked";} ?> style="margin-left:3.05rem;" type="checkbox" name="scheme_type[]" value="Help to Buy_Armed" id="">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>                            
            <!--===== /11.6 AFFORDABLE HOME OWENERSHIP SCHEMES TABLE ENDS HERE=====-->  

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 10px; padding-left: 0.85rem;">Right to Buy</h6>

            <!--===== RIGHT TO BUY TABLE STARTS HERE=====--> 
            <table class="table" style="margin-top:5px;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width: 60%!important;">What discount are you eligible for?</td>
                  <td><input type="text" value="<?php if($pdata != NULL){echo $pdata->discount;}?>" name="discount" class="form-control" placeholder="Type here"></td>
                </tr>
              </tbody>
            </table> 
            <!--===== /RIGHT TO BUY TABLE ENDS HERE=====--> 

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 10px; padding-left: 0.85rem;">Shared Ownership</h6>

            <!--===== SHARED OWNERSHIP TABLE STARTS HERE=====--> 
            <table class="table" style="margin-top:5px;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width: 60%!important;">Percentage of property to be purchased / re-mortgaged?</td>
                  <td>
                    <div class="input-group">                       
                      <input type="text" name="re_mortgaged" value="<?php if($pdata != NULL){echo $pdata->re_mortgaged;}?>" class="form-control" placeholder="Type percentage here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">%</div>
                      </div> 
                    </div>
                  </td>
                </tr>
                <tr>
                  <td style="width: 60%!important;">Which Shared Ownership body?</td>
                  <td><input type="text" name="ownership_body" value="<?php if($pdata != NULL){echo $pdata->ownership_body;}?>" class="form-control" placeholder="Type here"></td>
                </tr>

                <tr>
                  <td style="width: 60%!important;">Monthly Rent Payment</td>
                  <td>
                    <div class="input-group">  
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                      
                      <input type="text" name="monthly_rent" value="<?php if($pdata != NULL){echo $pdata->monthly_rent;}?>" class="form-control numcomma" placeholder="Type amount here">        
                    </div>
                  </td>
                </tr>
              </tbody>
            </table> 
            <!--===== RIGHT TO BUY/SHARED OWNERSHIP TABLE ENDS HERE=====--> 

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 10px; padding-left: 0.85rem;">Help to Buy</h6>

            <!--===== HELP TO BUY TABLE STARTS HERE=====--> 
            <!--TABLE 1 STARTS HERE-->
            <table class="table" style="margin-top:5px;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width: 60%!important;">Which Help to Buy agency?</td>
                  <td><input type="text" name="buy_agency" class="form-control" value="<?php if($pdata != NULL){echo $pdata->buy_agency;}?>" placeholder="Type here"></td>
                </tr>

                <tr>
                  <td style="width: 60%!important;">Monthly equity loan payment</td>
                  <td>                       
                    <div class="input-group">  
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                      
                      <input type="text" name="monthly_equity" value="<?php if($pdata != NULL){echo $pdata->monthly_equity;}?>" class="form-control numcomma" placeholder="Type amount here">        
                    </div>
                  </td>
                </tr>
              </tbody>
            </table> <!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="table" style="margin-top:15px;">
              <thead class="">
                <tr>
                  <th class="text-left" style="padding-left: 0.85rem;">Additional Notes</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td style="padding-right:0px;"><textarea style="text-transform: inherit!important;" class="form-control" id="" name="additional_notes" rows="4" placeholder="Type additional notes here..."><?php if($pdata != NULL){echo $pdata->additional_notes;}?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->

            <!--===== HELP TO BUY TABLE STARTS HERE=====--> 

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">11.7 Additional Borrowing</h5>

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 10px; padding-left: 0.85rem;">Debt Consolidation</h6>
              
            <!--===== DEBT CONSOLIDATION TABLE STARTS HERE=====--> 
            <table class="tab-child">
              <tbody class="table-bordered">
                <tr>
                  <td style="width:4.5%;">Amount Required</td>
                  <td>
                    <div class="input-group">  
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                      
                      <input type="text" name="debt_amount" value="<?php if($pdata != NULL){echo $pdata->debt_amount;}?>" class="form-control numcomma" placeholder="Type amount here">        
                    </div>
                  </td>
                </tr>

                <tr>
                  <td style="width:4.5%;">Details</td>
                  <td><textarea style="text-transform: inherit!important;" class="form-control" name="debt_details" rows="4" placeholder="Type details here..."><?php if($pdata != NULL){echo $pdata->debt_details;}?></textarea></td>
                </tr>
              </tbody>
            </table>
            <!--===== DEBT CONSOLIDATION TABLE ENDS HERE=====--> 

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 10px; padding-left: 0.85rem;">Home Improvements</h6>
              
            <!--===== HOME IMPROVEMENTS TABLE STARTS HERE=====--> 
            <table class="tab-child">
              <tbody class="table-bordered">
                <tr>
                  <td style="width:4.5%;">Amount Required</td>
                  <td>
                    <div class="input-group">  
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                      
                      <input type="text" name="home_amount" value="<?php if($pdata != NULL){echo $pdata->home_amount;}?>" class="form-control numcomma" placeholder="Type amount here">        
                    </div>
                  </td>
                </tr>

                <tr>
                  <td style="width:4.5%;">Details</td>
                  <td><textarea style="text-transform: inherit!important;" class="form-control" name="home_details" rows="4" placeholder="Type details here..."><?php if($pdata != NULL){echo $pdata->home_details;}?></textarea></td>
                </tr>
              </tbody>
            </table>
            <!--===== /HOME IMPROVEMENTS TABLE ENDS HERE=====--> 

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 10px; padding-left: 0.85rem;">Other</h6>

            <!--===== OTHER TABLE STARTS HERE=====--> 
            <table class="tab-child">
              <tbody class="table-bordered">
                <tr>
                  <td style="width:4.5%;">Amount Required</td>
                  <td>
                    <div class="input-group">  
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                      
                      <input type="text" name="other_amount" value="<?php if($pdata != NULL){echo $pdata->other_amount;}?>" class="form-control numcomma" placeholder="Type amount here">        
                    </div>
                  </td>
                </tr>

                <tr>
                  <td style="width:4.5%;">Details</td>
                  <td><textarea style="text-transform: inherit!important;" class="form-control" name="other_details" rows="4" placeholder="Type details here..."><?php if($pdata != NULL){echo $pdata->other_details;}?></textarea></td>
                </tr>
              </tbody>
            </table>
            <!--===== /OTHER TABLE ENDS HERE=====--> 

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">11.8 For Buy to Let Properties</h5>

            <!--===== 11.8 FOR BUY TO LET PROPWRTIES TABLE STARTS HERE=====-->
            <!--TABLE 1 STARTS HERE-->
            <table class="tab-child" style="margin-top:10px;">
              <tbody class="table-bordered">
                <tr>
                  <td>Is the property currently tenanted?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->currently_tenanted == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="currently_tenanted" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->currently_tenanted == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="currently_tenanted" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>If yes, as these tenants to remain?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->to_remain == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="to_remain" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->to_remain == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="to_remain" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>Does / will the property have an AST in place?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->ast == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="ast" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->ast == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="ast" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>If yes, for how long?</td>
                  <td>
                    <div class="input-group">                        
                      <input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->how_long;}?>" name="how_long" placeholder="Type month here">   
                      <div class="input-group-prepend">
                        <div class="input-group-text">months</div>
                      </div>     
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>What is the maximum number of tenants in the property?</td>
                  <td><input type="text" class="form-control" name="maximum_number" value="<?php if($pdata != NULL){echo $pdata->maximum_number;}?>" placeholder="Type no. here"></td>
                </tr>

                <tr>
                  <td>Are all tenants party to the same agreement?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->tenants_party == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="tenants_party" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->tenants_party == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="tenants_party" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>Is this property subject to a HMO licence?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->hmo_license == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="hmo_license" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->hmo_license == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="hmo_license" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td style="width: 30%!important;">What type of tenants will occupy the property?</td>
                  <?php if($pdata != NULL){$b1 = explode(",", $pdata->tenants_will_occupy);} ?>
                  <td>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Working / Professional</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Working / Professional" , $b1 )){echo "checked";} ?> type="checkbox" name="tenants_will_occupy[]" value="Working / Professional" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Corporate</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Corporate" , $b1 )){echo "checked";} ?> type="checkbox" name="tenants_will_occupy[]" value="Corporate" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">DSS</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "DSS" , $b1 )){echo "checked";} ?> type="checkbox" name="tenants_will_occupy[]" value="DSS" id="">
                    </div>                     
                    <div class="form-check">
                      <label class="ver-check-label" for="">Family Member</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Family Member" , $b1 )){echo "checked";} ?> type="checkbox" name="tenants_will_occupy[]" value="Family Member" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Asylum Seeker</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Asylum Seeker" , $b1 )){echo "checked";} ?> type="checkbox" name="tenants_will_occupy[]" value="Asylum Seeker" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Student</label>
                      <input class="ver-check-input" <?php if($pdata != NULL && in_array( "Student" , $b1 )){echo "checked";} ?> type="checkbox" name="tenants_will_occupy[]" value="Student" id="">
                    </div>
                    <div>
                      <label style="margin: 0px;" class="ver-check-label" for="">Other:</label>
                      <input type="text" class="form-control col-md-9 date-input-box" id="" placeholder="other">
                      <input type="checkbox" <?php if($pdata != NULL && in_array( "Other" , $b1 )){echo "checked";} ?> style="margin-left: 0.20rem; margin-top:0.55rem;" name="tenants_will_occupy[]" value="Other" class="ver-check-input" id="">                      
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>What is the expected / received rental income?</td>
                  <td>
                    <div class="input-group">  
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                      
                      <input type="text" name="rental_income" value="<?php if($pdata != NULL){echo $pdata->rental_income;}?>" class="form-control numcomma" placeholder="Type amount here">   
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.c.m</div>
                      </div>     
                    </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->    

            <!--TABLE 2 STARTS HERE--><table class="tab-child" style="margin-top:10px;">
              <tbody class="table-bordered">
                 <tr>
                  <td style="width: 30%!important;">Is the property fit to be let in its present state?</td>
                  <td class="text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->present_state == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="present_state" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->present_state == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="present_state" value="No" id="">
                    </div>
                  </center>
                </td>
                </tr>              

                <tr>
                  <td style="width: 30%!important;">What is the estimated cost of refurbishment / repairs?</td>
                  <td>
                    <div class="input-group">  
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                      
                      <input type="text" name="refurbishment" value="<?php if($pdata != NULL){echo $pdata->refurbishment;}?>" class="form-control numcomma" placeholder="Type amount here">       
                    </div>
                  </td>
                </tr>

                <tr>
                  <td style="width: 30%!important;">What is the estimated timescale for work to be completed?</td>
                  <td><input type="text" class="form-control" name="estimated_timescale" value="<?php if($pdata != NULL){echo $pdata->estimated_timescale;}?>" placeholder="Type here"></td>
                </tr>
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 3 STARTS HERE--><table class="tab-child" style="margin-top:10px;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width:4.5%;">How are void periods in<br/>rent to be covered for<br/> this property?</td>
                  <td><textarea style="text-transform: inherit!important;" class="form-control" name="void_periods" rows="4" placeholder="Type here..."><?php if($pdata != NULL){echo $pdata->void_periods;}?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 3 ENDS HERE-->      
            <!--===== /11.8 FOR BUY TO LET PROPWRTIES TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">11.9 For Bridging Finance</h5>

            <!--===== 11.9 FOR BRIDGING FINANCE TABLE STARTS HERE=====-->
            <!--TABLE 1 STARTS HERE-->
            <table class="tab-child" style="margin-top:10px;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width: 30%!important;">What is the purpose of the bridging finance?</td>
                  <td>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Property Purchase</label>
                      <input class="ver-check-input checkSelection" type="checkbox" <?php if($pdata != NULL && $pdata->bridging_finance == "Property_Purchase"){ echo "checked"; } ?> name="bridging_finance" value="Property_Purchase" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Renovations / Refurbishment</label>
                      <input class="ver-check-input checkSelection" type="checkbox" <?php if($pdata != NULL && $pdata->bridging_finance == "Renovations_Refurbishment"){ echo "checked"; } ?> name="bridging_finance" value="Renovations_Refurbishment" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Personal</label>
                      <input class="ver-check-input checkSelection" type="checkbox" <?php if($pdata != NULL && $pdata->bridging_finance == "Personal"){ echo "checked"; } ?> name="bridging_finance" value="Personal" id="">
                    </div>                     
                    <div class="form-check">
                      <label class="ver-check-label" for="">Cash Flow (Business)</label>
                      <input class="ver-check-input checkSelection" type="checkbox" <?php if($pdata != NULL && $pdata->bridging_finance == "Cash Flow (Business)"){ echo "checked"; } ?> name="bridging_finance" value="Cash Flow (Business)" id="">
                    </div>
                    <div>
                     <label style="margin: 0px;" class="ver-check-label" for="">Other:</label>
                      <input type="text" class="form-control col-md-10 date-input-box" id="" placeholder="Other purpose">
                      <input type="checkbox" style="margin-left: 0.20rem; margin-top:0.55rem;" name="bridging_finance" <?php if($pdata != NULL && $pdata->bridging_finance == "Other"){ echo "checked"; } ?> value="Other" class="ver-check-input checkSelection" id="">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->  

            <!--TABLE 2 STARTS HERE-->
            <table class="tab-child" style="margin-top:10px;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width: 30%!important;">Will you or an immediate member of your family occupy / intend<br/> to occupy 40% or more of the property (building and land) over<br/> which the bridging company will have a first charge?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" <?php if($pdata != NULL && $pdata->family_occupy == "Yes"){ echo "checked"; } ?> type="checkbox" name="family_occupy" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" <?php if($pdata != NULL && $pdata->family_occupy == "No"){ echo "checked"; } ?> type="checkbox" name="family_occupy" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->  

            <!--TABLE 3 STARTS HERE-->
            <table class="tab-child" style="margin-top:10px;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width: 30%!important;">What is the security for the bridging finance?</td>
                  <td>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Residential (regulated)</label>
                      <input class="ver-check-input checkSelection" type="checkbox" <?php if($pdata != NULL && $pdata->security_for == "Residential (regulated)"){ echo "checked"; } ?> name="security_for" value="Residential (regulated)" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Residential (non-regulated)</label>
                      <input class="ver-check-input checkSelection" type="checkbox" <?php if($pdata != NULL && $pdata->security_for == "Residential (non-regulated)"){ echo "checked"; } ?> name="security_for" value="Residential (non-regulated)" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Commercial</label>
                      <input class="ver-check-input checkSelection" type="checkbox" <?php if($pdata != NULL && $pdata->security_for == "Commercial"){ echo "checked"; } ?> name="security_for" value="Commercial" id="">
                    </div>                     
                    <div class="form-check">
                      <label class="ver-check-label" for="">Semi Commercial</label>
                      <input class="ver-check-input checkSelection" type="checkbox" <?php if($pdata != NULL && $pdata->security_for == "Semi_Commercial"){ echo "checked"; } ?> name="security_for" value="Semi_Commercial" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Land</label>
                      <input class="ver-check-input checkSelection" type="checkbox" <?php if($pdata != NULL && $pdata->security_for == "Land"){ echo "checked"; } ?> name="security_for" value="Land" id="">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 3 ENDS HERE-->  

            <!--TABLE 4 STARTS HERE-->
            <table class="tab-child" style="margin-top:10px;width: 100%;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width: 30%!important;">Charge offered on this property</td>
                  <td>
                    <div class="form-check">
                      <label class="ver-check-label" for="">First Charge</label>
                      <input class="ver-check-input checkSelection" type="checkbox" <?php if($pdata != NULL && $pdata->charge_offered == "First_Charge"){ echo "checked"; } ?> name="charge_offered" value="First_Charge" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Second Charge</label>
                      <input class="ver-check-input checkSelection" type="checkbox" <?php if($pdata != NULL && $pdata->charge_offered == "Second_Charge"){ echo "checked"; } ?> name="charge_offered" value="Second_Charge" id="">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 4 ENDS HERE-->  

            <!--TABLE 5 STARTS HERE-->
            <table class="tab-child" style="margin-top:10px;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width: 30%!important;">Is your current property on the market for sale?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->for_sale == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="for_sale" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->for_sale == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="for_sale" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td style="width: 30%!important;">If yes, have accepted an offer?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->have_accepted == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="have_accepted" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->have_accepted == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="have_accepted" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td style="width: 30%!important;">
                    If an offer has been accepted, how soon do you expect to<br/>exchange contracts and complete the purchase?
                  </td>
                  <td>
                    <div>
                      <div class="input-group">  
                        <div class="input-group-prepend">
                          <div class="input-group-text">Exchange contracts:</div>
                        </div>                      
                        <input type="text" name="exchange_contracts" value="<?php if($pdata != NULL){echo $pdata->exchange_contracts;}?>" class="form-control" placeholder="Type here">   
                      </div>
                      <!-- <span style="font-size: 9pt;">Exchange contracts:</span>
                      <input type="text" class="form-control col-md-6 date-input-box" name="" placeholder="Type here"> -->
                    </div>
                    <div style="margin-top: 5px;">
                      <div class="input-group">  
                        <div class="input-group-prepend">
                          <div class="input-group-text">Complete purchase:</div>
                        </div>                      
                        <input type="text" name="complete_purchase" value="<?php if($pdata != NULL){echo $pdata->complete_purchase;}?>" class="form-control" placeholder="Type here">     
                      </div>
                      <!-- <span>Complete purchase:</span>
                      <input type="text" class="form-control col-md-6 date-input-box" name="" placeholder="Type here"> -->
                    </div>
                  </td>
                </tr>

                <tr>
                  <td style="width: 30%!important;">If you have not accepted an offer, have any offers been made?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" <?php if($pdata != NULL && $pdata->been_made == "Yes"){ echo "checked"; } ?> type="checkbox" name="been_made" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" <?php if($pdata != NULL && $pdata->been_made == "No"){ echo "checked"; } ?> type="checkbox" name="been_made" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 5 ENDS HERE-->  

            <!--TABLE 6 STARTS HERE-->
            <table class="tab-child" style="margin-top:10px;width: 100%;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width: 30%!important;">What is your preferred payment option?</td>
                  <td class="text-center">
                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Serviced</label>
                      <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" <?php if($pdata != NULL && $pdata->preferred_payment == "Yes"){ echo "checked"; } ?> type="checkbox" name="preferred_payment" value="Serviced" id="">
                    </div>
                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Rolled Up</label>
                      <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" <?php if($pdata != NULL && $pdata->preferred_payment == "No"){ echo "checked"; } ?> type="checkbox" name="preferred_payment" value="Rolled Up" id="">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 6 ENDS HERE-->  

            <!--TABLE 7 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td style="width:4.4%;">Reason</td>
                  <td><textarea style="text-transform: inherit!important;" rows="3" name="reason" class="form-control"><?php if($pdata != NULL){echo $pdata->reason;}?></textarea></td>
                </tr>
                <tr>
                  <td style="width:4.4%;">
                    In the short term, how<br/>will you cover the<br/>payments for both your<br/>current and bridging<br/>loans?
                  </td>
                  <td><textarea style="text-transform: inherit!important;" rows="5" name="current_and_bridging" class="form-control" placeholder="Type reason here..."><?php if($pdata != NULL){echo $pdata->current_and_bridging;}?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 7 ENDS HERE-->  

            <!--TABLE 8 STARTS HERE-->
            <table class="tab-child" style="margin-top:10px;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width: 30%!important;">What is the exit strategy for repayment of the finance?</td>
                  <td>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Sale of Property</label>
                      <input class="ver-check-input checkSelection" type="checkbox" <?php if($pdata != NULL && $pdata->exit_strategy == "Sale_of_Property"){ echo "checked"; } ?>  name="exit_strategy" value="Sale_of_Property" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Re-finance</label>
                      <input class="ver-check-input checkSelection" type="checkbox" <?php if($pdata != NULL && $pdata->exit_strategy == "Re-finance"){ echo "checked"; } ?>  name="exit_strategy" value="Re-finance" id="">
                    </div>
                    <div>
                     <label style="margin: 0px;" class="ver-check-label" for="">Other:</label>
                      <input type="text" class="form-control col-md-10 date-input-box" id="" placeholder="other">
                      <input type="checkbox" style="margin-left: 0.20rem; margin-top:0.55rem;" <?php if($pdata != NULL && $pdata->exit_strategy == "Other"){ echo "checked"; } ?>  name="exit_strategy" value="Other" class="ver-check-input checkSelection" id="">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 8 ENDS HERE-->  

            <!--TABLE 9 STARTS HERE-->
            <table class="table" style="margin-top:15px;">
              <thead class="">
                <tr>
                  <th style="padding-left: 0.85rem;">Additional Notes</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td style="padding-right:0px;"> 
                    <textarea style="text-transform: inherit!important;" class="form-control" id="" name="last_notes" rows="6" placeholder="Type additional notes here"><?php if($pdata != NULL){echo $pdata->last_notes;}?></textarea>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 9 ENDS HERE-->  
            <!--===== /11.9 FOR BRIDGING FINANCE TABLE ENDS HERE=====-->

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
    </div><!-- /.container-fluid-->
  </div><!-- /.content-wrapper-->
  <script>
    $('.checkSelection').on('change', function() {
      $('input[name="' + this.name + '"]').not(this).prop('checked', false);
    });

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

    $("#clientform").submit(function(event) {
      event.preventDefault();
    }).validate({
      rules:{

      },
      submitHandler: function(form) { 

        var formData = $("#clientform").serialize();

        $.ajax({
          url:'<?php echo base_url(); ?>add/addMortgageLoan?form_id=<?php echo $last; ?>',
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
      }
    });

    $('#saveback').click(function(){
        var formData = $("#clientform").serialize();

        $.ajax({
          url:'<?php echo base_url(); ?>add/addMortgageLoan?form_id=<?php echo $last; ?>',
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
    });

</script>
