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

  h6 {
    padding-left: 0.85rem; 
  }

</style>

<?php

  $pdata = $this->admin->getMortgageNeeds($last); 

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
          <h4>Section 12: Mortgage Needs & Preferences</h4>

          <!--========FORM SUB-SECTION HEADING==========-->
          <h5>12.1 Client Needs & Circumstances</h5>

          <!--========FORM STARTS HERE ==========-->
          <form id="clientform">

            <!--======== 12.1 CLIENT NEEDS / CIRCUMSTANCES TABLE STARTS HERE==========-->
            <!--TABLE 1 STARTS HERE-->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="text-left" style="padding-left: 0.85rem;">Are there any specific requirements or concerns that you have that could influence your choice of mortgage?</th>
                </tr>                  
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td style="padding-right:0rem!important;">
                    <textarea style="text-transform: inherit!important;" class="form-control" rows="6" name="specific_requirements" placeholder="Type here"><?php if($pdata != NULL){echo $pdata->specific_requirements;} ?></textarea>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="tab-child" style="margin-top:10px;width: 100%;">
              <tbody class="table-bordered">
                <tr>
                  <td>How concerned are you about the<br/> possibility of interest rate increases?</td>
                  <td class="text-center">
                    <div class="col-md-3 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Very concerned</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->rate_increases == "Very_concerned"){ echo "checked"; } ?> style="margin-left:0.35rem; margin-top: .45rem;" type="checkbox" name="rate_increases" value="Very_concerned" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Moderately Concerned</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->rate_increases == "Moderately_Concerned"){ echo "checked"; } ?> style="margin-left:0.35rem; margin-top: .45rem;" type="checkbox" name="rate_increases" value="Moderately_Concerned" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Not Concerned</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->rate_increases == "Not_Concerned"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="rate_increases" value="Not_Concerned" id="">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->

            <!--TABLE 3 STARTS HERE-->  
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td style="width:4.4%;">Reason</td>
                  <td><textarea style="text-transform: inherit!important;" rows="2" class="form-control" name="client_reason" placeholder="Type reason here..."><?php if($pdata != NULL){echo $pdata->client_reason;} ?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 3 ENDS HERE-->

            <!--======== /12.1 CLIENT NEEDS / CIRCUMSTANCES TABLE ENDS HERE==========-->

            <!--========FORM SUB-SECTION HEADING==========--> 
            <h5 class="marTP-30">12.2 New Mortgage Product Preferences</h5>

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6>Fixed Rate</h6>

            <!--======== FIXED RATE TABLE STARTS HERE==========-->
            <!--TABLE 1 STARTS HERE-->
            <table class="tab-child" style="margin-top:10px;width: 100%;">
              <tbody class="table-bordered">
                <tr>
                  <td>
                    How important is it to have certainty of<br/>the exact repayment amount for a<br/>period of time?
                  </td>
                  <td class="text-center">
                    <div class="col-md-3 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Very important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->exact_repayment == "Very_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="exact_repayment" value="Very_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Moderately important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->exact_repayment == "Moderately_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="exact_repayment" value="Moderately_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Not important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->exact_repayment == "Not_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="exact_repayment" value="Not_important" id="">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>If so, over what period?</td>
                  <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->over_what_period;} ?>" name="over_what_period" placeholder="Type here"></td>
                </tr>
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td style="width:4.4%;">Reason</td>
                  <td><textarea style="text-transform: inherit!important;" rows="2" class="form-control" name="fixed_reason" placeholder="Type reason here..."><?php if($pdata != NULL){echo $pdata->fixed_reason;} ?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--======== /FIXED RATE TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 10px;">Variable Rate</h6>

            <!--======== VARIABLE RATE TABLE STARTS HERE==========-->
            <!--TABLE 1 STARTS HERE--> 
            <table class="tab-child" style="margin-top:10px;width: 100%;">
              <tbody class="table-bordered">
                <tr>
                  <td>
                    How important is it for the interest rate<br/>to be managed by the BoE / LIBOR as
                    <br/>opposed to the lender?
                  </td>
                  <td class="text-center">
                    <div class="col-md-3 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Very important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->the_boe == "Very_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="the_boe" value="Very_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Moderately important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->the_boe == "Moderately_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="the_boe" value="Moderately_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Not important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->the_boe == "Not_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="the_boe" value="Not_important" id="">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>If so, over what period?</td>
                  <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->variable_period;} ?>" name="variable_period" placeholder="Type here"></td>
                </tr>
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td style="width:4.4%;">Reason</td>
                  <td><textarea style="text-transform: inherit!important;" rows="2" class="form-control" name="variable_reason" placeholder="Type reason here..."><?php if($pdata != NULL){echo $pdata->variable_reason;} ?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--======== /VARIABLE RATE TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 10px;">Capped Rate</h6>

            <!--======== CAPPED RATE TABLE STARTS HERE==========-->
            <!--TABLE 1 STARTS HERE-->
            <table class="tab-child" style="margin-top:10px;width: 100%;">
              <tbody class="table-bordered">
                <tr>
                  <td>
                    How important is it to have certainty of<br/>the maximum repayment amount for a
                    <br/>period of time? 
                  </td>
                  <td class="text-center">
                    <div class="col-md-3 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Very important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->capped_repayment == "Very_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="capped_repayment" value="Very_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Moderately important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->capped_repayment == "Moderately_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="capped_repayment" value="Moderately_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Not important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->capped_repayment == "Not_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="capped_repayment" value="Not_important" id="">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>If so, over what period?</td>
                  <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->capped_period;} ?>" name="capped_period" placeholder="Type here"></td>                  
                </tr>
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td style="width:4.4%;">Reason</td>
                  <td><textarea style="text-transform: inherit!important;" rows="2" class="form-control" name="capped_reason" placeholder="Type reason here..."><?php if($pdata != NULL){echo $pdata->capped_reason;} ?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--======== /CAPPED RATE TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->  
            <h6 style="margin-top: 10px;">Rate Preferences</h6>

            <!--======== RATE PREFERENCES TABLE STARTS HERE==========-->
            <!--TABLE 1 STARTS HERE-->
            <table class="tab-child" style="margin-top:10px;width: 100%;">
              <tbody class="table-bordered">
                <tr>
                  <td>
                    Where you have not indicated any particular preference for a rate type, how important is it to you to secure the lowest total cost over a specified period of time, accepting the rate/payment may fluctuate? 
                  </td>
                  <td class="text-center">
                    <div class="col-md-3 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Very important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->rate_repayment == "Very_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="rate_repayment" value="Very_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Moderately important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->rate_repayment == "Moderately_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="rate_repayment" value="Moderately_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Not important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->rate_repayment == "Not_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="rate_repayment" value="Not_important" id="">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>If so, over what period?</td>
                  <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->rate_period;} ?>" name="rate_period" placeholder="Type here"></td>
                </tr>
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td style="width:4.4%;">Reason</td>
                  <td><textarea style="text-transform: inherit!important;" rows="2" class="form-control" name="rate_reason" placeholder="Type reason here..."><?php if($pdata != NULL){echo $pdata->rate_reason;} ?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--======== /RATE PREFERENCES TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 10px;">Early Repayment Charges</h6>

            <!--======== EARLY REPAYMENT CHARGES TABLE STARTS HERE==========-->
            <!--TABLE 1 STARTS HERE-->
            <table class="tab-child" style="margin-top:10px;width: 100%;">
              <tbody class="table-bordered">
                <tr>
                  <td>Do you expect to pay off part, or all, of <br/>your mortgage early?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->early_pay == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="early_pay" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->early_pay == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="early_pay" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td style="width:4.4%;">If Yes,<br/>please<br/>provide<br/>details</td>
                  <td style="padding: 0px!important;"><textarea style="text-transform: inherit!important;" rows="5" class="form-control" name="early_pay_details" placeholder="Type details here.."><?php if($pdata != NULL){echo $pdata->early_pay_details;} ?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->

            <!--TABLE 3 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td>Do you expect to move again?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->early_move == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="early_move" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->early_move == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="early_move" value="No" id="">
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
                  <td style="width:4.4%;">If Yes,<br/>please<br/>provide<br/>details</td>
                  <td><textarea style="text-transform: inherit!important;" rows="5" class="form-control" name="early_move_details" placeholder="Type details here"><?php if($pdata != NULL){echo $pdata->early_move_details;} ?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 4 ENDS HERE-->

            <!--TABLE 5 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td>
                    How important is it to NOT be subject to <br/> an Early Repayment Charge (ERC)?                    
                  </td>
                  <td>
                    <div class="col-md-3 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Very important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->erc == "Very_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="erc" value="Very_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Moderately important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->erc == "Moderately_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="erc" value="Moderately_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Not important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->erc == "Not_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="erc" value="Not_important" id="">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>What is the maximum ERC period you <br/> would consider?</td>
                  <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->erc_period;} ?>" name="erc_period" placeholder="Type here"></td>
                </tr>
              </tbody>
            </table><!--/TABLE 5 ENDS HERE-->

            <!--TABLE 6 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td style="width:4.4%;">Reason</td>
                  <td><textarea style="text-transform: inherit!important;" rows="2" class="form-control" name="erc_reason" placeholder="Type reason here..."><?php if($pdata != NULL){echo $pdata->erc_reason;} ?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 6 ENDS HERE-->
            <!--======== /EARLY REPAYMENT CHARGES TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 10px;">Priorities</h6>
            <span style="font-size: 10pt;">From your indicated preferences, please confirm your top 5 priorities with the most important priority being number 1:</span>

            <!--======== PRIORITIES TABLE STARTS HERE==========-->
            <table class="financial-table" style="margin-top: 10px;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width:4.4%;text-align: center;padding-right: 0rem;">1</td>
                  <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->priorities_1;} ?>" name="priorities_1" placeholder="Type here"></td>
                </tr>
                <tr>
                  <td style="width:4.4%;text-align: center;padding-right: 0rem;">2</td>
                  <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->priorities_2;} ?>" name="priorities_2" placeholder="Type here"></td>
                </tr>
                <tr>
                  <td style="width:4.4%;text-align: center;padding-right: 0rem;">3</td>
                  <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->priorities_3;} ?>" name="priorities_3" placeholder="Type here"></td>
                </tr>
                <tr>
                  <td style="width:4.4%;text-align: center;padding-right: 0rem;">4</td>
                  <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->priorities_4;} ?>" name="priorities_4" placeholder="Type here"></td>
                </tr>
                <tr>
                  <td style="width:4.4%;text-align: center;padding-right: 0rem;">5</td>
                  <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->priorities_5;} ?>" name="priorities_5" placeholder="Type here"></td>
                </tr>
              </tbody>
            </table>
            <!--======== /PRIORITIES TABLE ENDS HERE==========-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">12.3 New Mortgage Feature Preferences</h5>

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6>Overpayments</h6>

            <!--======== OVERPAYMENTS TABLE STARTS HERE==========-->
            
            <!--TABLE 1 STARTS HERE-->
            <table class="tab-child" style="margin-top: 10px;width: 100%;">
              <tbody class="table-bordered">
                <tr>
                  <td>
                    How important is it to have the facility to<br/> make overpayments on your mortgage?
                  </td>
                  <td class="text-center">
                    <div class="col-md-3 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Very important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->overpayment_facility == "Very_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="overpayment_facility" value="Very_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Moderately important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->overpayment_facility == "Moderately_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="overpayment_facility" value="Moderately_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Not important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->overpayment_facility == "Not_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="overpayment_facility" value="Not_important" id="">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>If so, would up to 10% per annum be<br/> sufficient to meet your needs?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->new_annum == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="new_annum" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->new_annum == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="new_annum" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->
              
            <!--TABLE 2 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td style="width:4.4%;">Reason</td>
                  <td><textarea style="text-transform: inherit!important;" rows="2" class="form-control" name="overpayment_reason" placeholder="Type reason here..."><?php if($pdata != NULL){echo $pdata->overpayment_reason;} ?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--======== /OVERPAYMENTS TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 10px;">Underpayments & Payment Holidays</h6>

            <!--======== UNDERPAYMENTS / PAYMENT HOLIDAYS TABLE STARTS HERE==========-->
            <!--TABLE 1 STARTS HERE-->
            <table class="tab-child" style="margin-top: 10px;width: 100%;">
              <tbody class="table-bordered">
                <tr>
                  <td>
                    How important is it to have the facility to <br/>make underpayments on your <br/>mortgage?
                  </td>
                  <td class="text-center">
                    <div class="col-md-3 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Very important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->underpayment == "Very_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="underpayment" value="Very_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Moderately important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->underpayment == "Moderately_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="underpayment" value="Moderately_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Not important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->underpayment == "Not_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="underpayment" value="Not_important" id="">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->
              
            <!--TABLE 2 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td style="width:4.4%;">Reason</td>
                  <td><textarea style="text-transform: inherit!important;" rows="2" class="form-control" name="underpayment_reason" placeholder="Type reason here..."><?php if($pdata != NULL){echo $pdata->underpayment_reason;} ?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->

            <!--TABLE 3 STARTS HERE-->
            <table class="tab-child" style="margin-top: 10px;width: 100%;">
              <tbody class="table-bordered">
                <tr>
                  <td>
                    How important is it to have the facility to <br/>take payment holidays on your <br/>mortgage?
                  </td>
                  <td class="text-center">
                    <div class="col-md-3 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Very important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->holiday == "Very_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="holiday" value="Very_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Moderately important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->holiday == "Moderately_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="holiday" value="Moderately_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Not important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->holiday == "Not_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="holiday" value="Not_important" id="">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 3 ENDS HERE-->
              
            <!--TABLE 4 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td style="width:4.4%;">Reason</td>
                  <td><textarea style="text-transform: inherit!important;" rows="2" class="form-control" name="holiday_reason" placeholder="Type reason here..."><?php if($pdata != NULL){echo $pdata->holiday_reason;} ?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 4 ENDS HERE-->
            <!--======== /UNDERPAYMENTS / PAYMENT HOLIDAYS TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 10px;">Offset</h6>

            <!--======== OFFSET TABLE STARTS HERE==========-->
            <!--TABLE 1 STARTS HERE-->
            <table class="tab-child" style="margin-top: 10px;width: 100%;">
              <tbody class="table-bordered">
                <tr>
                  <td>
                    How important is it to have the facility to <br/>offset your savings against your <br/>mortgage?
                  </td>
                  <td class="text-center">
                    <div class="col-md-3 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Very important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->offset == "Very_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="offset" value="Very_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Moderately important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->offset == "Moderately_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="offset" value="Moderately_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Not important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->offset == "Not_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="offset" value="Not_important" id="">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->
              
            <!--TABLE 2 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td style="width:4.4%;">Reason</td>
                  <td><textarea style="text-transform: inherit!important;" rows="2" class="form-control" name="offset_reason" placeholder="Type reason here..."><?php if($pdata != NULL){echo $pdata->offset_reason;} ?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->

            <!--======== /OFFSET TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 10px;">Additional Secured Borrowing</h6>

            <!--======== ADDITIONAL SECURED BORROWING TABLE STARTS HERE==========--> 
            <!--TABLE 1 STARTS HERE-->
            <table class="tab-child" style="margin-top: 10px;width: 100%;">
              <tbody class="table-bordered">
                <tr>
                  <td>
                   How important is it to have the facility to<br/> borrow additional monies on your <br/>mortgage?
                  </td>
                  <td class="text-center">
                    <div class="col-md-3 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Very important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->borrowing_facility == "Very_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="borrowing_facility" value="Very_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Moderately important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->borrowing_facility == "Moderately_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="borrowing_facility" value="Moderately_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Not important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->borrowing_facility == "Not_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="borrowing_facility" value="Not_important" id="">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->
              
            <!--TABLE 2 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td style="width:4.4%;">Reason</td>
                  <td><textarea style="text-transform: inherit!important;" rows="2" class="form-control" name="borrowing_reason" placeholder="Type reason here..."><?php if($pdata != NULL){echo $pdata->borrowing_reason;} ?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--======== /ADDITIONAL SECURED BORROWING TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 10px;">Portability</h6>

            <!--======== PORTABILITY TABLE STARTS HERE==========--> 
            
            <!--TABLE 1 STARTS HERE-->
            <table class="tab-child" style="margin-top: 10px;width: 100%;">
              <tbody class="table-bordered">
                <tr>
                  <td>
                   How important is it to be able to port <br/> your mortgage terms a new property?
                  </td>
                  <td class="text-center">
                    <div class="col-md-3 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Very important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->portability == "Very_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="portability" value="Very_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Moderately important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->portability == "Moderately_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="portability" value="Moderately_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Not important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->portability == "Not_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="portability" value="Not_important" id="">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td style="width:4.4%;">Reason</td>
                  <td><textarea style="text-transform: inherit!important;" rows="2" class="form-control" name="portability_reason" placeholder="Type reason here..."><?php if($pdata != NULL){echo $pdata->portability_reason;} ?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--======== /PORTABILITY TABLE ENDS HERE==========--> 

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 10px;">Fees</h6>

            <!--======== FEES TABLE STARTS HERE==========--> 
            <!--TABLE 1 STARTS HERE-->
            <table class="tab-child" style="margin-top: 10px;width: 100%;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width:60%!important;">Do you have funds available to pay the product / arrangement fees up front?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->fees_product == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="fees_product" value="Yes" id="">
                      </div>
                      <div class="col-md-6 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->fees_product == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="fees_product" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>                  
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td>
                   How important is it to be able to add the <br/> fees to the loan?
                  </td>
                  <td class="text-center">
                    <div class="col-md-3 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Very important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->fees_loan == "Very_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="fees_loan" value="Very_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Moderately important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->fees_loan == "Moderately_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="fees_loan" value="Moderately_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Not important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->fees_loan == "Not_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="fees_loan" value="Not_important" id="">
                    </div>
                  </td>                  
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
              
            <!--TABLE 3 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td style="width:4.4%;">Reason</td>
                  <td><textarea style="text-transform: inherit!important;" rows="2" class="form-control" name="fees_loan_reason" placeholder="Type reason here..."><?php if($pdata != NULL){echo $pdata->fees_loan_reason;} ?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 3 ENDS HERE-->     

            <!--TABLE 4 STARTS HERE-->
            <table class="tab-child" style="margin-top: 10px;width: 100%;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width:60%!important;">Do you have funds available to pay the valuation / booking fees up front?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->fees_valuation == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="fees_valuation" value="Yes" id="">
                      </div>
                      <div class="col-md-6 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->fees_valuation == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="fees_valuation" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>                  
              </tbody>
            </table><!--/TABLE 4 ENDS HERE-->

            <!--TABLE 5 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td>
                   How important is it for the lender to <br/>cover the fees?
                  </td>
                  <td class="text-center">
                    <div class="col-md-3 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Very important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->fees_lender == "Very_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="fees_lender" value="Very_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Moderately important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->fees_lender == "Moderately_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="fees_lender" value="Moderately_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Not important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->fees_lender == "Not_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="fees_lender" value="Not_important" id="">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 5 ENDS HERE-->
              
            <!--TABLE 6 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td style="width:4.4%;">Reason</td>
                  <td><textarea style="text-transform: inherit!important;" rows="2" class="form-control" name="fees_lender_reason" placeholder="Type reason here..."><?php if($pdata != NULL){echo $pdata->fees_lender_reason;} ?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 6 ENDS HERE-->
              
            <!--TABLE 7 STARTS HERE-->
            <table class="tab-child" style="margin-top: 10px;width: 100%;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width:60%!important;">Do you have funds available to pay the legal fees up front?</td>
                  <td class="text-center">
                    <center>
                    <div class="col-md-3 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->fees_legal == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="fees_legal" value="Yes" id="">
                    </div>
                    <div class="col-md-6 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->fees_legal == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="fees_legal" value="No" id="">
                    </div>
                  </center>
                </td>
                </tr>
              </tbody>
            </table><!--/TABLE 7 ENDS HERE-->

            <!--TABLE 8 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td>
                   How important is it for the lender to <br/> cover the legal fees? 
                  </td>
                  <td class="text-center">                      
                    <div class="col-md-3 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Very important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->legal_fees == "Very_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;margin-top: .45rem;" type="checkbox" name="legal_fees" value="Very_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Moderately important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->legal_fees == "Moderately_important"){ echo "checked"; } ?> style="margin-left:0.35rem;margin-top: .45rem;" type="checkbox" name="legal_fees" value="Moderately_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Not important</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->legal_fees == "Not_important"){ echo "checked"; } ?> style="margin-left:-0.35rem;margin-top: .45rem;" type="checkbox" name="legal_fees" value="Not_important" id="">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 8 ENDS HERE-->
              
            <!--TABLE 9 STARTS HERE-->
            <table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td style="width:4.4%;">Reason</td>
                  <td><textarea style="text-transform: inherit!important;" rows="2" class="form-control" name="legal_fees_reason" placeholder="Type reason here..."><?php if($pdata != NULL){echo $pdata->legal_fees_reason;} ?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 9 ENDS HERE-->
            <!--======== /FEES TABLE ENDS HERE==========--> 

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 10px;">Completion Timescales</h6>

            <!--======== COMPLETION TIMESCALES TABLE STARTS HERE==========--> 
            <!--TABLE 1 STARTS HERE-->
            <table class="tab-child" style="margin-top: 10px;width: 100%;">
              <tbody class="table-bordered">
                <tr>
                  <td>
                   How important is it to for the mortgage <br/> to be competed as quickly as possible?
                  </td>
                  <td class="text-center">
                    <div class="col-md-3 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Very important</label>
                      <input class="form-check-input checkSelection" style="margin-left:0.35rem;margin-top: .45rem;" <?php if($pdata != NULL && $pdata->completion_timescale == "Very_important"){ echo "checked"; } ?> type="checkbox" name="completion_timescale" value="Very_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Moderately important</label>
                      <input class="form-check-input checkSelection" style="margin-left:0.35rem;margin-top: .45rem;" <?php if($pdata != NULL && $pdata->completion_timescale == "Moderately_important"){ echo "checked"; } ?> type="checkbox" name="completion_timescale" value="Moderately_important" id="">
                    </div>

                    <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                      <label class="form-check-label text-left" for="">Not important</label>
                      <input class="form-check-input checkSelection" style="margin-left:0.35rem;margin-top: .45rem;" <?php if($pdata != NULL && $pdata->completion_timescale == "Not_important"){ echo "checked"; } ?> type="checkbox" name="completion_timescale" value="Not_important" id="">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->
              
            <!--TABLE 2 STARTS HERE--><table class="tab-child">
              <tbody class="tab-bordered">
                <tr>
                  <td style="width:4.4%;">Reason</td>
                  <td><textarea style="text-transform: inherit!important;" rows="2" class="form-control" name="completion_timescale_reason" placeholder="Type reason here..."><?php if($pdata != NULL){echo $pdata->completion_timescale_reason;} ?></textarea></td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--======== /COMPLETION TIMESCALES TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 10px;">Priorities</h6>

            <span style="font-size: 10pt; padding-left: 0.85rem;">
              I may not be able to meet all your mortgage features preferences within one product, but your most important priorities will enable me to recommend the most suitable product.
            </span>

            <span style="font-size: 10pt;margin-top: 15px; padding-left: 0.85rem;">From your indicated preferences, please confirm your top 5 priorities with the most important priority being number 1:</span>

            <!--======== PRIORITIES TABLE STARTS HERE==========-->
            <table class="financial-table" style="margin-top: 10px;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width:4.4%;text-align: center;padding-right: 0rem;">1</td>
                  <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->priorities_a;} ?>" name="priorities_a" placeholder="Type here"></td>
                </tr>
                <tr>
                  <td style="width:4.4%;text-align: center;padding-right: 0rem;">2</td>
                  <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->priorities_b;} ?>" name="priorities_b" placeholder="Type here"></td>
                </tr>
                <tr>
                  <td style="width:4.4%;text-align: center;padding-right: 0rem;">3</td>
                  <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->priorities_c;} ?>" name="priorities_c" placeholder="Type here"></td>
                </tr>
                <tr>
                  <td style="width:4.4%;text-align: center;padding-right: 0rem;">4</td>
                  <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->priorities_d;} ?>" name="priorities_d" placeholder="Type here"></td>
                </tr>
                <tr>
                  <td style="width:4.4%;text-align: center;padding-right: 0rem;">5</td>
                  <td><input type="text" class="form-control" value="<?php if($pdata != NULL){echo $pdata->priorities_e;} ?>" name="priorities_e" placeholder="Type here"></td>
                </tr>
              </tbody>
            </table>
            <!--======== /PRIORITIES TABLE ENDS HERE==========-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">12.4 Protecting Your Mortgage, House & Contents</h5>
            
            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6>Death, Critical Illness or Long Term Illness</h6>

            <!--======== DEATH, CRITICAL ILLNESS OR LONG TERM ILLNESS TABLE STARTS HERE==========-->
            <!--TABLE 1 STARTS HERE-->
            <table class="tab-child" style="margin-top: 10px;width: 100%;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width:60%!important;">
                    Would all of your mortgages and debts be cleared if you were to die or <br/>suffer from a critical illness?
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" <?php if($pdata != NULL && $pdata->critical_illness == "Yes"){ echo "checked"; } ?> name="critical_illness" value="Yes" id="">
                      </div>
                      <div class="col-md-6 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" <?php if($pdata != NULL && $pdata->critical_illness == "No"){ echo "checked"; } ?> name="critical_illness" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>   
                <tr>
                  <td style="width:60%!important;">
                    Would you, or your remaining dependents, be able to cover any <br/>remaining outgoings if you were to die or suffer from a critical, or long <br/>term illness (more than 1-2 years)?
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" <?php if($pdata != NULL && $pdata->term_illness == "Yes"){ echo "checked"; } ?> name="term_illness" value="Yes" id="">
                      </div>
                      <div class="col-md-6 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" <?php if($pdata != NULL && $pdata->term_illness == "No"){ echo "checked"; } ?> name="term_illness" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>
                <tr>
                  <td style="width:60%!important;">
                    Do you wish to review this area of your finances?
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" <?php if($pdata != NULL && $pdata->your_finances == "Yes"){ echo "checked"; } ?> name="your_finances" value="Yes" id="">
                      </div>
                      <div class="col-md-6 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" <?php if($pdata != NULL && $pdata->your_finances == "No"){ echo "checked"; } ?> name="your_finances" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>                    
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="tab-child">
              <thead class="tab-head">
                <tr>
                  <th colspan="2">
                    If ‘Yes’ to the above question, please use ‘Supplementary Questionnaire – Personal Protection’
                  </th>
                </tr>
              </thead>
              <tbody class="tab-bordered">
                <tr>
                  <td style="width: 4.4%!important;">If not reviewing now, reason <br/> for not reviewing?</td>
                  <td>
                    <textarea style="text-transform: inherit!important;" class="form-control" rows="4" name="illness_reason" placeholder="Type here..."><?php if($pdata != NULL){echo $pdata->illness_reason;} ?></textarea>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--======== /DEATH, CRITICAL ILLNESS OR LONG TERM ILLNESS TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 10px;">Buildings and Contents</h6>

            <span style="font-size: 10pt; padding-left: 0.85rem;">
              NB – It will be a condition of any mortgage offer that the property to be mortgaged has adequate insurance cover
            </span>

            <!--======== BUILDINGS AND CONTENTS TABLE STARTS HERE==========-->
            
            <!--TABLE 1 STARTS HERE-->
            <table class="tab-child" style="margin-top: 10px;width: 100%;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width:60%!important;">
                    Do you require advice in arranging adequate Buildings and/or Contents <br/>cover?
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" <?php if($pdata != NULL && $pdata->adequate_buildings == "Yes"){ echo "checked"; } ?> name="adequate_buildings" value="Yes" id="">
                      </div>
                      <div class="col-md-6 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" <?php if($pdata != NULL && $pdata->adequate_buildings == "No"){ echo "checked"; } ?> name="adequate_buildings" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>            
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="tab-child">
              <thead class="tab-head">
                <tr>
                  <th colspan="2">
                    If ‘yes’ to the above question, please use ‘Statement of Fact – Building & Contents’
                  </th>
                </tr>
              </thead>
              <tbody class="tab-bordered">
                <tr>
                  <td style="width: 4.4%!important;">If not reviewing now, reason <br/> for not reviewing?</td>
                  <td>
                    <textarea style="text-transform: inherit!important;" class="form-control" rows="4" name="building_reason" placeholder="Type here..."><?php if($pdata != NULL){echo $pdata->building_reason;} ?></textarea>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--======== /BUILDINGS AND CONTENTS TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 10px;">Accident, Sickness and Unemployment</h6>

            <!--======== ACCIDENT , SICKNESS AND UNEMPLOYMENT TABLE STARTS HERE==========-->
            <!--TABLE 1 STARTS HERE-->
            <table class="tab-child" style="margin-top: 10px;width: 100%;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width:60%!important;">
                    Would you be able to cover any mortgage related outgoings if you were <br/>to suffer from a short term illness?
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="accident_illness" <?php if($pdata != NULL && $pdata->accident_illness == "Yes"){ echo "checked"; } ?> value="Yes" id="">
                      </div>
                      <div class="col-md-6 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="accident_illness" <?php if($pdata != NULL && $pdata->accident_illness == "No"){ echo "checked"; } ?> value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>   
                <tr>
                  <td style="width:60%!important;">
                    Would you be able to cover any mortgage related outgoings if you were <br/>made unemployed?
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="accident_unemployed" <?php if($pdata != NULL && $pdata->accident_unemployed == "Yes"){ echo "checked"; } ?> value="Yes" id="">
                      </div>
                      <div class="col-md-6 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="accident_unemployed" <?php if($pdata != NULL && $pdata->accident_unemployed == "No"){ echo "checked"; } ?> value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>
                <tr>
                  <td style="width:60%!important;">
                    Do you wish to review this area of your finances?
                  </td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-3 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="accident_finances" <?php if($pdata != NULL && $pdata->accident_finances == "Yes"){ echo "checked"; } ?> value="Yes" id="">
                      </div>
                      <div class="col-md-6 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="accident_finances" <?php if($pdata != NULL && $pdata->accident_finances == "No"){ echo "checked"; } ?> value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>                    
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="tab-child">
              <thead class="tab-head">
                <tr>
                  <th colspan="2">
                    If ‘yes’ to the above question, please use ‘Statement of Fact – ASU’
                  </th>
                </tr>
              </thead>
              <tbody class="tab-bordered"> 
                <tr>
                  <td style="width: 4.4%!important;">
                    If not reviewing now, reason <br/> for not reviewing?
                  </td>
                  <td>
                    <textarea style="text-transform: inherit!important;" class="form-control" rows="4" name="accident_reason" placeholder="Type here..."><?php if($pdata != NULL){echo $pdata->accident_reason;} ?></textarea>
                  </td>
                </tr>
              </tbody>
            </table><!--TABLE 2 ENDS HERE-->
            <!--======== /ACCIDENT , SICKNESS AND UNEMPLOYMENT TABLE ENDS HERE==========-->

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
    $('.checkSelection').on('change', function() {
      $('input[name="' + this.name + '"]').not(this).prop('checked', false);
    });

    $("#clientform").submit(function(event) {
      event.preventDefault();
    }).validate({
      rules:{

      },
      submitHandler: function(form) { 

        var formData = $("#clientform").serialize();

        $.ajax({
          url:'<?php echo base_url(); ?>add/addMortgageNeeds?form_id=<?php echo $last; ?>',
          type:'POST',
          data: formData,
          dataType: 'json',
          success:function(as){

              if(as.status){
                if(as.action == 'create'){
                  location.href="<?php echo base_url(); ?>admin/additional-details/"+as.data;
                }
                else if(as.action == 'edit'){
                  location.href="<?php echo base_url(); ?>admin/additional-details/"+as.data;
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
          url:'<?php echo base_url(); ?>add/addMortgageNeeds?form_id=<?php echo $last; ?>',
          type:'POST',
          data: formData,
          dataType: 'json',
          success:function(as){

              if(as.status){
                if(as.action == 'create'){
                  location.href="<?php echo base_url(); ?>admin/mortgage-loan/"+as.data;
                }
                else if(as.action == 'edit'){
                  location.href="<?php echo base_url(); ?>admin/mortgage-loan/"+as.data;
                }
              }
              else{
                alert(as.message);
              }
          }
        });
    });

</script>

