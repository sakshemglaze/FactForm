<?php 
//$page = 'dashboard';
include 'find-fact-header.php'
?>

<style>
  .col-md-10 {
  width: 78%!important;
  }

  label.error {
    color: red;
    font-size: 14px;
    background-color: #ffffff;
    position: absolute;
    top: -40px;
    right: 5px;
    padding: 10px 15px;
    box-shadow: 1px 0px 5px #00000042;
  }
</style>
<?php

$pdata = $this->admin->getSelfEmployedData($last);
$edata = $this->admin->getEmployementDetailData($last); 

?>
<?php 
if($edata != NULL){
  if($ftype){
    $estatus1 = explode(",",$edata->client_employmentstatus_1_1);
    $estatus2 = explode(",",$edata->client_employmentstatus_1_2);
    if(in_array( "Self-Employed" , $estatus1 ) && !in_array( "Self-Employed" , $estatus2 )){
    
?>
<style>
.hide-col{
  display:none;
}
.hideclient_copy{
  display:none;
}
</style>
<?php
    }
    else if(!in_array( "Self-Employed" , $estatus1 ) && in_array( "Self-Employed" , $estatus2 )){
?>
<style>
.hideclient_1{
  display:none;
}
.hideclient_copy{
  display:none;
}
</style>
<?php 
    }
  }
}
?>
<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 marTP-30"><!-- Kindly Put This "form-section" class with col-lg-12 to hide complete section-->

        <!--========FORM SECTION HEADING==========-->
        <h4>Section 3: Self-Employed Details</h4>

        <!--========FORM SUB-SECTION HEADING==========-->
        <h5>3.1 Business Details</h5>

        <!--=======FORM STARTS HERE===========-->
          <form id="clientform">

            <!--=====3.1 BUSINESS DETAILS TABLE STARTS HERE=====-->
            <!-- TABLE 1 STARTS HERE-->
            <table class="table"> 
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col" class="hideclient_1">Client 1</th>
                  <?php if($ftype){ ?><th scope="col" class="hide-col">Client 2</th><?php } ?>
                </tr>
              </thead>
              <tbody class="table-bordered"> 
                <?php if($ftype){ ?>
                <!--===COPY NAME BUTTON===-->
                <tr class="hideclient_copy">
                  <td colspan="3">
                    <div class="text-right">
                      <button type="button" class="btn btn-primary btn-copy" onclick="copy('1', '2', 'businessname', 'input')">
                        Copy Here
                      </button><br/>
                      <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                        *You can copy same name of business on client 2 column.
                      </p>             
                    </div>
                  </td>
                </tr><!--===/COPY NAME BUTTON===-->
                <?php } ?>

                <tr>
                  <td>Name of Business</td>
                  <td class="hideclient_1">
                    <input type="text" class="form-control" name="client_businessname_1" value="<?php if($pdata != NULL){ echo $pdata->client_businessname_1; } ?>" placeholder="Name of Business">
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">
                    <input type="text" class="form-control"name="client_businessname_2" value="<?php if($pdata != NULL){ echo $pdata->client_businessname_2; } ?>" placeholder="Name of Business">
                  </td>
                  <?php } ?>
                </tr>

                <?php if($ftype){ ?>
                <!--===COPY ADDRESS BUTTON===-->
                <tr class="hideclient_copy">
                  <td colspan="3">
                    <div class="text-right">
                    <button type="button" class="btn btn-primary btn-copy" onclick="copy('1', '2', 'businessaddress', 'textarea')">
                      Copy Here
                    </button><br/>
                      <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                        *You can copy same address on client 2 column.
                      </p>
                    </div>
                  </td>
                </tr><!--===/COPY ADDRESS BUTTON===-->
                <?php } ?>

                <tr>
                  <td>Address</td>
                  <td class="hideclient_1"><textarea class="form-control" id="" rows="4" name="client_businessaddress_1" placeholder="Type address here..."><?php if($pdata != NULL){ echo $pdata->client_businessaddress_1; } ?></textarea></td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">
                    <textarea class="form-control" id="" rows="4" name="client_businessaddress_2" placeholder="Type address here..."><?php if($pdata != NULL){ echo $pdata->client_businessaddress_2; } ?></textarea>
                  </td>
                  <?php } ?>
                </tr>

                <?php if($ftype){ ?>
                <!--===COPY POSTCODE BUTTON===-->
                <tr class="hideclient_copy">
                  <td colspan="3">
                    <div class="text-right">
                      <button type="button" class="btn btn-primary btn-copy" onclick="copy('1', '2', 'businesspostcode', 'input')">
                        Copy Here
                      </button><br/>
                      <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                        *You can copy same postcode on client 2 column.
                      </p>             
                    </div>
                  </td>
                </tr><!--===/COPY POSTCODE BUTTON===-->
                <?php } ?>

                <tr>
                  <td>Postcode</td>
                  <td class="hideclient_1">
                    <input type="text" class="form-control" name="client_businesspostcode_1" value="<?php if($pdata != NULL){ echo $pdata->client_businesspostcode_1; } ?>" placeholder="Postcode" style="text-transform: uppercase;">
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">
                    <input type="text" class="form-control" name="client_businesspostcode_2" value="<?php if($pdata != NULL){ echo $pdata->client_businesspostcode_2; } ?>" placeholder="Postcode" style="text-transform: uppercase;">
                  </td>
                  <?php } ?>
                </tr>

                <?php if($ftype){ ?>
                <!--===COPY NUMBER BUTTON===-->
                <tr class="hideclient_copy">
                  <td colspan="3">
                    <div class="text-right">
                      <button type="button" class="btn btn-primary btn-copy" onclick="copy('1', '2', 'businessphone', 'input')">
                        Copy Here
                      </button><br/>
                      <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                        *You can copy same telephone no. on client 2 column.
                      </p>             
                    </div>
                  </td>
                </tr><!--===/COPY NUMBER BUTTON===-->
                <?php } ?>

                <tr>
                  <td>Telephone Number <br/>
                    <span style="color:#555555;font-size: 12px;font-style: italic;">*Please enter 11 digits beginning with 0 but without spaces</span>
                  </td>>
                  <td class="hideclient_1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">+44</div>
                      </div>
                      <input type="text" class="form-control" name="client_businessphone_1" value="<?php if($pdata != NULL){ echo $pdata->client_businessphone_1; } ?>" placeholder="07423165897">
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">+44</div>
                      </div>
                      <input type="text" class="form-control" name="client_businessphone_2" value="<?php if($pdata != NULL){ echo $pdata->client_businessphone_2; } ?>" placeholder="07423165897">
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <?php if($ftype){ ?>
                <!--===COPY EMAIL ADDRESS BUTTON===-->
                <tr class="hideclient_copy">
                  <td colspan="3">
                    <div class="text-right">
                      <button type="button" class="btn btn-primary btn-copy" onclick="copy('1', '2', 'businessemail', 'input')">
                        Copy Here
                      </button><br/>
                      <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                        *You can copy same email address on client 2 column.
                      </p>             
                    </div>
                  </td>
                </tr><!--===/COPY ADDRESS BUTTON===-->
                <?php } ?>

                <tr>
                  <td>Email Address</td>
                  <td class="hideclient_1">
                    <input type="email" class="form-control" name="client_businessemail_1" value="<?php if($pdata != NULL){ echo $pdata->client_businessemail_1; } ?>" placeholder="Email Address" style="text-transform: none;">
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">
                    <input type="email" class="form-control" name="client_businessemail_2" value="<?php if($pdata != NULL){ echo $pdata->client_businessemail_2; } ?>" placeholder="Email Address" style="text-transform: none;">
                  </td>
                  <?php } ?>
                </tr>

                <?php if($ftype){ ?>
                <!--===COPY TYPE OF BUSINESS BUTTON===-->
                <tr class="hideclient_copy">
                  <td colspan="3">
                    <div class="text-right">
                      <button type="button" class="btn btn-primary btn-copy" onclick="copy('1', '2', 'businesstype', 'input')">
                        Copy Here
                      </button><br/>
                      <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                        *You can copy same type of business on client 2 column.
                      </p>             
                    </div>
                  </td>
                </tr><!--===/COPY TYPE OF BUSINESS BUTTON===-->
                <?php } ?>

                <tr>
                  <td>Type of Business</td>
                  <td class="hideclient_1">
                    <input type="text" class="form-control" name="client_businesstype_1" value="<?php if($pdata != NULL){ echo $pdata->client_businesstype_1; } ?>" placeholder="Type of Business">
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">
                    <input type="text" class="form-control" name="client_businesstype_2" value="<?php if($pdata != NULL){ echo $pdata->client_businesstype_1; } ?>" placeholder="Type of Business">
                  </td>
                  <?php } ?>
                </tr>
                    
                <?php if($ftype){ ?>
                <!--===COPY OCCUPATION/JOB TITLE BUTTON===-->
                <tr class="hideclient_copy">
                  <td colspan="3">
                    <div class="text-right">
                      <button type="button" class="btn btn-primary btn-copy" onclick="copy('1', '2', 'businessoccupation', 'input')">
                        Copy Here
                      </button><br/>
                      <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                        *You can copy same occupation / job title on client 2 column.
                      </p>             
                    </div>
                  </td>
                </tr><!--===/COPY ADDRESS BUTTON===-->
                <?php } ?>

                <tr>
                  <td>Occupation / Job Title</td>
                  <td class="hideclient_1">
                    <input type="text" class="form-control" name="client_businessoccupation_1" value="<?php if($pdata != NULL){ echo $pdata->client_businessoccupation_1; } ?>" placeholder="Type Occupation / Job Title">
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">
                    <input type="text" class="form-control" name="client_businessoccupation_2" value="<?php if($pdata != NULL){ echo $pdata->client_businessoccupation_2; } ?>" placeholder="Type Occupation / Job Title">
                  </td>
                  <?php } ?>
                </tr>


                <?php if($ftype){ ?>
                <!--===COPY DATE BUTTON===-->
                <tr class="hideclient_copy">
                  <td colspan="3">
                    <div class="text-right">
                      <button type="button" id="copyDate" class="btn btn-primary btn-copy">
                        Copy Here
                      </button><br/>
                      <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                        *You can copy same date business started / holding acquired on client 2 column.
                      </p>             
                    </div>
                  </td>
                </tr><!--===/COPY DATE BUTTON===-->
                <?php } ?>

                <tr>
                  <td>Date Business Started / Holding<br/>Acquired<br/>
                    <span style="font-weight: normal;line-height: 0.2rem!important;">
                      (if less than 1 year, please provide<br/>
                      previous employment details in the Notes<br/>section)
                    </span>
                  </td>

                  <?php $bdate1 = false; $bdate2 = false; 
                    if($pdata != NULL && $pdata->client_businessdate_1 != ""){
                      $bdate1_data = explode("/", $pdata->client_businessdate_1);
                      $bdate1 = true;
                    } 

                    if($pdata != NULL && $pdata->client_businessdate_2 != ""){
                      $bdate2_data = explode("/", $pdata->client_businessdate_2);
                      $bdate2 = true;
                    } 
                  ?>

                  <td class="hideclient_1 text-center">
                    <input disabled id="date_3_1_1_1" type="text" value="<?php if($bdate1){echo $bdate1_data[0];} ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input disabled id="month_3_1_1_1" type="text" value="<?php if($bdate1){echo $bdate1_data[1];} ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input disabled id="year_3_1_1_1" type="text" value="<?php if($bdate1){echo $bdate1_data[2];} ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="calendar_3_1_1_1" class="selectDate" />
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col text-center">
                    <input disabled id="date_3_1_2_1" type="text" value="<?php if($bdate2){echo $bdate2_data[0];} ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input disabled id="month_3_1_2_1" type="text" value="<?php if($bdate2){echo $bdate2_data[1];} ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input disabled id="year_3_1_2_1" type="text" value="<?php if($bdate2){echo $bdate2_data[2];} ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="calendar_3_1_2_1" class="selectDate" />
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Business Status</td>
                  <td class="hideclient_1">
                    <div class="form-check">
                      <label class="ver-check-label" for="">Sole Trader</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_businessstatus_1 == "Sole Trader"){ echo "checked"; } ?> name="client_businessstatus_1" value="Sole Trader" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Limited Company</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_businessstatus_1 == "Limited Company"){ echo "checked"; } ?> name="client_businessstatus_1" value="Limited Company" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Partnership</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_businessstatus_1 == "Partnership"){ echo "checked"; } ?> name="client_businessstatus_1" value="Partnership" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Limited Liability Partnership</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_businessstatus_1 == "Limited Liability Partnership"){ echo "checked"; } ?> name="client_businessstatus_1" value="Limited Liability Partnership" id="">
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">
                    <div class="form-check">
                      <label class="ver-check-label" for="">Sole Trader</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_businessstatus_2 == "Sole Trader"){ echo "checked"; } ?> name="client_businessstatus_2" value="Sole Trader" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Limited Company</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_businessstatus_2 == "Limited Company"){ echo "checked"; } ?> name="client_businessstatus_2" value="Limited Company" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Partnership</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_businessstatus_2 == "Partnership"){ echo "checked"; } ?> name="client_businessstatus_2" value="Partnership" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Limited Liability Partnership</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_businessstatus_2 == "Limited Liability Partnership"){ echo "checked"; } ?> name="client_businessstatus_2" value="Limited Liability Partnership" id="">
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <?php if($ftype){ ?>
                <!--===COPY REG. NO. BUTTON===-->
                <tr class="hideclient_copy">
                  <td colspan="3">
                    <div class="text-right">
                      <button type="button" class="btn btn-primary btn-copy" onclick="copy('1', '2', 'compregno', 'input')">
                        Copy Here
                      </button><br/>
                      <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                        *You can copy same company registration no. on client 2 column.
                      </p>             
                    </div>
                  </td>
                </tr><!--===/COPY REG NO. BUTTON===-->
                <?php } ?>

                <tr>
                  <td>Company Registration No</td>
                  <td class="hideclient_1">
                    <input type="text" name="client_compregno_1" class="form-control" value="<?php if($pdata != NULL){ echo $pdata->client_compregno_1; } ?>" placeholder="Company Reg. No.">
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">
                    <input type="text" name="client_compregno_2" class="form-control" value="<?php if($pdata != NULL){ echo $pdata->client_compregno_2; } ?>" placeholder="Company Reg. No.">
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Percentage Shareholding in<br/>Business</td>
                  <td class="hideclient_1">
                    <input type="text" name="client_businessper_1" value="<?php if($pdata != NULL){ echo $pdata->client_businessper_1; } ?>" class="form-control col-md-11 date-input-box" placeholder="Type percentage of Shareholding"> 
                    <span>%</span>
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">
                    <input type="text" name="client_businessper_2" value="<?php if($pdata != NULL){ echo $pdata->client_businessper_2; } ?>" class="form-control col-md-11 date-input-box" placeholder="Type percentage of Shareholding">
                    <span>%</span>
                  </td>
                  <?php } ?>
                </tr>
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE -->
            <table class="table" style="margin-top: 10px;">
              <tbody class="table-bordered">
                <tr>
                  <td>Are you a Contractor?<br/><span style="font-weight: normal;">(If Yes, please complete section 13)</span></td>
                  <td class="hideclient_1 text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" <?php if($pdata != NULL && $pdata->client_contractstatus_1 == "Yes"){ echo "checked"; } ?> type="checkbox" name="client_contractstatus_1" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" <?php if($pdata != NULL && $pdata->client_contractstatus_1 == "No"){ echo "checked"; } ?> type="checkbox" name="client_contractstatus_1" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" <?php if($pdata != NULL && $pdata->client_contractstatus_2 == "Yes"){ echo "checked"; } ?> type="checkbox" name="client_contractstatus_2" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" <?php if($pdata != NULL && $pdata->client_contractstatus_2 == "No"){ echo "checked"; } ?> type="checkbox" name="client_contractstatus_2" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <?php } ?>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->

            <!--TABLE 3 STARTS HERE -->
            <table class="table" style="margin-top: 10px;">
              <tbody class="table-bordered">
                <tr>
                  <td>Do you have an Accountant?<br/><span style="font-weight: normal;">(If Yes, please complete section 14)</span></td>
                  <td class="hideclient_1 text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" <?php if($pdata != NULL && $pdata->client_accountantstatus_1 == "Yes"){ echo "checked"; } ?> type="checkbox" name="client_accountantstatus_1" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" <?php if($pdata != NULL && $pdata->client_accountantstatus_1 == "No"){ echo "checked"; } ?> type="checkbox" name="client_accountantstatus_1" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" <?php if($pdata != NULL && $pdata->client_accountantstatus_2 == "Yes"){ echo "checked"; } ?> name="client_accountantstatus_2" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" <?php if($pdata != NULL && $pdata->client_accountantstatus_2 == "Yes"){ echo "checked"; } ?> name="client_accountantstatus_2" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <?php } ?>
                </tr>
              </tbody>
            </table><!--/TABLE 3 ENDS HERE -->
            <!--=====/3.1 BUSINESS DETAILS TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">3.2 Self Employed Income</h5>

            <!--=====3.2 SELF EMPLOYED INCOME TABLE STARTS HERE=====-->
            <!-- TABLE 1 STARTS HERE-->
            <table class="table">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col" class="hideclient_1">Client 1</th>
                  <?php if($ftype){ ?><th scope="col" class="hide-col">Client 2</th><?php } ?>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td>Number of Years’ Accounts / <br/>Self-Assessment Available</td>
                  <td class="hideclient_1">
                    <input type="text" name="client_accountyear_1" class="form-control" value="<?php if($pdata != NULL){ echo $pdata->client_accountyear_1; } ?>" placeholder="no. of years' accounts"></td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">
                    <input type="text" name="client_accountyear_2" class="form-control" value="<?php if($pdata != NULL){ echo $pdata->client_accountyear_2; } ?>" placeholder="no. of years' accounts">
                  </td>
                  <?php } ?>
                </tr>
              </tbody>
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col" colspan="2">Latest Year (1)</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td>Year End</td>
                  <?php $ye1date1 = false; $ye1date2 = false; 
                    if($pdata != NULL && $pdata->client_yearend1_1 != ""){
                      $ye1date1_data = explode("/", $pdata->client_yearend1_1);
                      $ye1date1 = true;
                    } 

                    if($pdata != NULL && $pdata->client_yearend1_2 != ""){
                      $ye1date2_data = explode("/", $pdata->client_yearend1_2);
                      $ye1date2 = true;
                    } 
                  ?>
                  <td class="hideclient_1 text-center">
                    <input disabled id="date_3_2_1_2" type="text" value="<?php if($ye1date1){echo $ye1date1_data[0];} ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input disabled id="month_3_2_1_2" type="text" value="<?php if($ye1date1){echo $ye1date1_data[1];} ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input disabled id="year_3_2_1_2" type="text" value="<?php if($ye1date1){echo $ye1date1_data[2];} ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="calendar_3_2_1_2" class="selectDate" />
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col text-center">
                    <input disabled id="date_3_2_2_2" type="text" value="<?php if($ye1date2){echo $ye1date2_data[0];} ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input disabled id="month_3_2_2_2" type="text" value="<?php if($ye1date2){echo $ye1date2_data[1];} ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input disabled id="year_3_2_2_2" type="text" value="<?php if($ye1date2){echo $ye1date2_data[2];} ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="calendar_3_2_2_2" class="selectDate" />
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Net Profit (before taxation)</td>
                  <td class="hideclient_1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_netprofit1_1" class="form-control text-right gross-income1" value="<?php if($pdata != NULL){ echo $pdata->client_netprofit1_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    <span style="margin:5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_netprofit1_2" class="form-control text-right gross-income2" value="<?php if($pdata != NULL){ echo $pdata->client_netprofit1_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>                    
                    <span style="margin:5px;">p.a.</span> -->
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Net Dividend <span style="font-weight: normal;">(if Ltd)</span></td>
                  <td class="hideclient_1">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_netdividend1_1" class="form-control text-right gross-income1" value="<?php if($pdata != NULL){ echo $pdata->client_netdividend1_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_netdividend1_2" class="form-control text-right gross-income2" value="<?php if($pdata != NULL){ echo $pdata->client_netdividend1_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Director’s Remuneration <span style="font-weight: normal;">(if Ltd)</span></td>
                  <td class="hideclient_1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_renumeration1_1" class="form-control text-right gross-income1" value="<?php if($pdata != NULL){ echo $pdata->client_renumeration1_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_renumeration1_2" class="form-control text-right gross-income2" value="<?php if($pdata != NULL){ echo $pdata->client_renumeration1_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php } ?>
                </tr>
              </tbody>
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col" colspan="2">Previous Year (2)</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td>Year End</td>
                  <?php $ye2date1 = false; $ye2date2 = false; 
                    if($pdata != NULL && $pdata->client_yearend2_1 != ""){
                      $ye2date1_data = explode("/", $pdata->client_yearend2_1);
                      $ye2date1 = true;
                    } 

                    if($pdata != NULL && $pdata->client_yearend2_2 != ""){
                      $ye2date2_data = explode("/", $pdata->client_yearend2_2);
                      $ye2date2 = true;
                    } 
                  ?>
                  <td class="hideclient_1 text-center">
                    <input disabled id="date_3_2_1_3" type="text" value="<?php if($ye2date1){echo $ye2date1_data[0];} ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input disabled id="month_3_2_1_3" type="text" value="<?php if($ye2date1){echo $ye2date1_data[1];} ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input disabled id="year_3_2_1_3" type="text" value="<?php if($ye2date1){echo $ye2date1_data[2];} ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="calendar_3_2_1_3" class="selectDate" />
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col text-center">
                    <input disabled id="date_3_2_2_3" type="text" value="<?php if($ye2date2){echo $ye2date2_data[0];} ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input disabled id="month_3_2_2_3" type="text" value="<?php if($ye2date2){echo $ye2date2_data[1];} ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input disabled id="year_3_2_2_3" type="text" value="<?php if($ye2date2){echo $ye2date2_data[2];} ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="calendar_3_2_2_3" class="selectDate" />
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Net Profit (before taxation)</td>
                  <td class="hideclient_1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_netprofit2_1" class="form-control text-right gross-income1" value="<?php if($pdata != NULL){ echo $pdata->client_netprofit2_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>                    
                    <span style="margin:5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_netprofit2_2" class="form-control text-right gross-income2" value="<?php if($pdata != NULL){ echo $pdata->client_netprofit2_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Net Dividend <span style="font-weight: normal;">(if Ltd)</span></td>
                  <td class="hideclient_1">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_netdividend2_1" class="form-control text-right gross-income1" value="<?php if($pdata != NULL){ echo $pdata->client_netdividend2_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin:5px;">p.a.</span>-->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_netdividend2_2" class="form-control text-right gross-income2" value="<?php if($pdata != NULL){ echo $pdata->client_netdividend2_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin:5px;">p.a.</span> -->
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Director’s Remuneration <span style="font-weight: normal;">(if Ltd)</span></td>
                  <td class="hideclient_1">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_renumeration2_1" class="form-control text-right gross-income1" value="<?php if($pdata != NULL){ echo $pdata->client_renumeration2_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>                    
                    <span style="margin:5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_renumeration2_2" class="form-control text-right gross-income2" value="<?php if($pdata != NULL){ echo $pdata->client_renumeration2_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>                    
                    <span style="margin:5px;">p.a.</span> -->
                  </td>
                  <?php } ?>
                </tr>
              </tbody> 
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col" colspan="2">Previous Year (3)</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td>Year End</td>
                  <?php $ye3date1 = false; $ye3date2 = false; 
                    if($pdata != NULL && $pdata->client_yearend3_1 != ""){
                      $ye3date1_data = explode("/", $pdata->client_yearend3_1);
                      $ye3date1 = true;
                    } 

                    if($pdata != NULL && $pdata->client_yearend3_2 != ""){
                      $ye3date2_data = explode("/", $pdata->client_yearend3_2);
                      $ye3date2 = true;
                    } 
                  ?>
                  <td class="hideclient_1 text-center">
                    <input disabled id="date_3_2_1_4" type="text" value="<?php if($ye3date1){echo $ye3date1_data[0];} ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input disabled id="month_3_2_1_4" type="text" value="<?php if($ye3date1){echo $ye3date1_data[1];} ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input disabled id="year_3_2_1_4" type="text" value="<?php if($ye3date1){echo $ye3date1_data[2];} ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="calendar_3_2_1_4" class="selectDate" />
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col text-center">
                    <input disabled id="date_3_2_2_4" type="text" value="<?php if($ye3date2){echo $ye3date2_data[0];} ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input disabled id="month_3_2_2_4" type="text" value="<?php if($ye3date2){echo $ye3date2_data[1];} ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input disabled id="year_3_2_2_4" type="text" value="<?php if($ye3date2){echo $ye3date2_data[2];} ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="calendar_3_2_2_4" class="selectDate" />
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Net Profit (before taxation)</td>
                  <td class="hideclient_1">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_netprofit3_1" class="form-control text-right gross-income1" value="<?php if($pdata != NULL){ echo $pdata->client_netprofit3_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin:5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_netprofit3_2" class="form-control text-right gross-income2" value="<?php if($pdata != NULL){ echo $pdata->client_netprofit3_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin:5px;">p.a.</span> -->
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Net Dividend <span style="font-weight: normal;">(if Ltd)</span></td>
                  <td class="hideclient_1">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_netdividend3_1" value="<?php if($pdata != NULL){ echo $pdata->client_netdividend3_1; } ?>" class="form-control text-right gross-income1" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin:5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_netdividend3_2" value="<?php if($pdata != NULL){ echo $pdata->client_netdividend3_2; } ?>" class="form-control text-right gross-income2" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin:5px;">p.a.</span> -->
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Director’s Remuneration <span style="font-weight: normal;">(if Ltd)</span></td>
                  <td class="hideclient_1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_renumeration3_1" class="form-control text-right gross-income1" value="<?php if($pdata != NULL){ echo $pdata->client_renumeration3_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin:5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_renumeration3_2" class="form-control text-right gross-income2" value="<?php if($pdata != NULL){ echo $pdata->client_renumeration3_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin:5px;">p.a.</span> -->
                  </td>
                  <?php } ?>
                </tr>
              </tbody>              
            </table><!-- /TABLE 1 ENDS HERE-->

            <!-- TABLE 2 STARTS HERE-->
            <table class="table" style="margin-top: 10px;">
              <tbody class="table-bordered" style="border:2px solid #000000;">
                <tr>
                  <td>Total Self Employed Income<br/><span style="font-weight: normal;">(Use appropriate figure for affordability purposes.)   </span></td>
                  <td class="hideclient_1" style="font-weight: bold;">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="padding: .635rem .75rem; font-weight: bold;">£</div>
                      </div>
                      <input id="total_gross_1" name="client_totalincome_1" value="<?php if($pdata != NULL){ echo $pdata->client_totalincome_1; } ?>" type="text" class="form-control text-right" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="padding: .635rem .75rem; font-weight: bold;">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin:5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col" style="font-weight: bold;">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="padding: .635rem .75rem; font-weight: bold;">£</div>
                      </div>
                      <input id="total_gross_2" name="client_totalincome_2" value="<?php if($pdata != NULL){ echo $pdata->client_totalincome_2; } ?>" type="text" class="form-control col-md-10 date-input-box text-right" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="padding: .635rem .75rem; font-weight: bold;">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin:5px;">p.a.</span> -->
                  </td>
                  <?php } ?>
                </tr>
              </tbody>
            </table><!-- TABLE 2 ENDS HERE-->
            <!--=====/3.2 SELF EMPLOYED INCOME TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">3.3 Self Employed Net Pay (Monthly)</h5>

            <!--=====3.3 SELF EMPLOYED NET PAY TABLE STARTS HERE=====-->
            <table class="table" style="margin-top: 10px;">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col" class="hideclient_1">Client 1</th>
                  <?php if($ftype){ ?><th scope="col" class="hide-col">Client 2</th><?php } ?>
                </tr>
              </thead>
              <tbody class="table-bordered" style="border:2px solid #000000;">
                <tr>
                  <td>Total Self Employed Net Pay<br/><span style="font-weight: normal;">(take-home pay)</span></td>
                  <td class="hideclient_1" style="font-weight: bold;">
                    
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="padding:.635rem .75rem; font-weight: bold;">£</div>
                      </div>
                      <input type="text" name="client_totalnetincome_1" value="<?php if($pdata != NULL){ echo $pdata->client_totalnetincome_1; } ?>" class="form-control text-right" placeholder="Type amount here" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin:5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col" style="font-weight: bold;">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="padding:.635rem .75rem; font-weight: bold;">£</div>
                      </div>
                      <input type="text" name="client_totalnetincome_2" value="<?php if($pdata != NULL){ echo $pdata->client_totalnetincome_2; } ?>" class="form-control text-right" placeholder="Type amount here" style="font-weight: bold;">                      
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin:5px;">p.a.</span> -->
                  </td>
                  <?php } ?>
                </tr>
              </tbody>
            </table>
            <!--=====/3.3 SELF EMPLOYED NET PAY TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">3.4 Future Changes to Employment</h5>

            <!--=====3.4 FUTURE CHANGES TO EMPLOYMENT TABLE STARTS HERE=====-->
            <table class="table" style="margin-top: 10px;">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col" class="hideclient_1">Client 1</th>
                  <?php if($ftype){ ?><th scope="col" class="hide-col">Client 2</th><?php } ?>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td>Do you expect your employment<br/>circumstances to change?<br/><span style="font-weight: normal;">(If Yes, please provide details in Notes)</span></td>
                  <td class="hideclient_1 text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_empcircumstatus_1 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_empcircumstatus_1" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection <?php if($pdata != NULL && $pdata->client_empcircumstatus_1 == "No"){ echo "checked"; } ?>" style="margin-left: 0.25rem;" type="checkbox" name="client_empcircumstatus_1" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_empcircumstatus_2 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_empcircumstatus_2" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_empcircumstatus_2 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_empcircumstatus_2" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <?php } ?>
                </tr>
              </tbody>
            </table>
            <!--=====/3.4 FUTURE CHANGES TO EMPLOYMENT TABLE ENDS HERE=====-->

            <!--=====ADDITIONAL NOTES TABLE STARTS HERE=====-->
            <table class="table marTP-30">
              <thead class="">
                <tr>
                  <th>Additional Notes</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td style="padding-right:0px;">
                    <textarea style="text-transform: inherit!important;" class="form-control" id="" name="client_additionalnotes" rows="6" placeholder="Type additional notes here..."><?php if($pdata != NULL){echo $pdata->client_additionalnotes;} ?></textarea>
                  </td>
                </tr>
              </tbody>
            </table>
            <!--=====/ADDITIONAL NOTES TABLE ENDS HERE=====-->

            <!--=====FORM NEXT/SAVE BUTTONS STARTS HERE=====-->
            <div class="" style="text-align: center;margin:20px 0px;">

              <!--Back button-->
              <button id="saveback" type="button" class="btn btn-primary" style="cursor:pointer;">Save and Back</button>
              <!--/Back button-->

              <button type="submit" class="btn btn-primary" style="cursor:pointer;">Save and Next</button>
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
  var totalIncome_3_2_1 = 0, totalIncome_3_2_2 = 0;

  function copy(from, to, type, elem){
    $(elem+'[name=client_'+type+'_'+to+']').val($(elem+'[name=client_'+type+'_'+from+']').val());
  }

  //Function to get the difference between two dates in years
  function diff_years(dt2, dt1) 
  {

    var diff =(dt2.getTime() - dt1.getTime()) / 1000;
    diff /= (60 * 60 * 24);
    return Math.abs(Math.round(diff/365.25));
    
  }

  function numberWithCommas(x) {
      var parts = x.toString().split(".");
      parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      return parts.join(".");
  }

  //Remove comma
  function removeComma(str){
    return str.replace (/,/g, "");
  }

  var dtflag = true;
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
      var curr_dt = new Date(), curr_year = curr_dt.getYear();
      if(dtSection[4] == "2" && diff_years(new Date(curr_dt), new Date(dateText)) == 0){
          dtflag = true;       
      }
      else if(dtSection[4] == "2" && diff_years(new Date(curr_dt), new Date(dateText)) != 0){
        dtflag = false;
        alert("End date should be current year");
      }

      if(dtSection[4] == "3" && diff_years(new Date(curr_dt), new Date(dateText)) == 1){
          dtflag = true;       
      }
      else if(dtSection[4] == "3" && diff_years(new Date(curr_dt), new Date(dateText)) != 1){
        dtflag = false;
        alert("End date should be of previous year");
      }

      if(dtSection[4] == "4" && diff_years(new Date(curr_dt), new Date(dateText)) == 2){
          dtflag = true;       
      }
      else if(dtSection[4] == "4" && diff_years(new Date(curr_dt), new Date(dateText)) != 2){
        dtflag = false;
        alert("End date should be of 2 years back");
      }

      if(dtflag){
        $('#date_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[2]);
        $('#month_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[1]);
        $('#year_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[0]);
      }
      
    }
  });

  $('.checkSelection').on('change', function() {
      $('input[name="' + this.name + '"]').not(this).prop('checked', false);
  });

  //function to copy dates
  $('#copyDate').click(function(){
    $('#date_3_1_2_1').val($('#date_3_1_1_1').val());
    $('#month_3_1_2_1').val($('#month_3_1_1_1').val());
    $('#year_3_1_2_1').val($('#year_3_1_1_1').val());
  });

  function addZeroes(num){
    var value = parseFloat(num);
    var res = num.split(".");
    if(res.length == 1 || (res[1].length < 3)) {
      value = value.toFixed(2);
    }
    var parts = (+value).toFixed(2).split(".");
    var nam = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts[1] ? "." + parts[1] : ".00");
    return nam; 
  }

  //AutoSum for  Gross Employment Income
  
  $('.gross-income1').on('keyup', function () {
    
    var sum = 0;
    $(this).val(function(index, value) {
        value = value.replace(/,/g,'');
        return numberWithCommas(value);
    });
    $('.gross-income1').each(function() {
        sum += parseFloat(removeComma($(this).val())) || 0;
    });
    totalIncome_3_2_1 = sum;
    $('#total_gross_1').val(addZeroes(sum+""));
  });

  $('.gross-income2').on('keyup', function () {
    
    var sum = 0;
    $(this).val(function(index, value) {
        value = value.replace(/,/g,'');
        return numberWithCommas(value);
    });
    $('.gross-income2').each(function() {
        sum += parseFloat(removeComma($(this).val())) || 0;
    });

    totalIncome_3_2_2 = sum;
    $('#total_gross_2').val(addZeroes(sum+""));
  });

  $('input[name="client_totalnetincome_2"], input[name="client_totalnetincome_2"]').on('keyup', function () {
    $(this).val(function(index, value) {
        value = value.replace(/,/g,'');
        return numberWithCommas(value);
    });
  });

  $("#clientform").submit(function(event) {
      event.preventDefault();
  }).validate({
      rules: {
        client_businessphone_1: {
          minlength: 11,
          maxlength: 11,
          number: true
        },
        client_businessphone_2: {
          minlength: 11,
          maxlength: 11,
          number: true
        }
      },
      submitHandler: function(form) {

        var client_businessdate_1 = $('#date_3_1_1_1').val()+"/"+$('#month_3_1_1_1').val()+"/"+$('#year_3_1_1_1').val();
        var client_businessdate_2 = $('#date_3_1_2_1').val()+"/"+$('#month_3_1_2_1').val()+"/"+$('#year_3_1_2_1').val();

        var year1end1 = $('#date_3_2_1_2').val()+"/"+$('#month_3_2_1_2').val()+"/"+$('#year_3_2_1_2').val();
        var year1end2 = $('#date_3_2_2_2').val()+"/"+$('#month_3_2_2_2').val()+"/"+$('#year_3_2_2_2').val();

        var year2end1 = $('#date_3_2_1_3').val()+"/"+$('#month_3_2_1_3').val()+"/"+$('#year_3_2_1_3').val();
        var year2end2 = $('#date_3_2_2_3').val()+"/"+$('#month_3_2_2_3').val()+"/"+$('#year_3_2_2_3').val();

        var year3end1 = $('#date_3_2_1_4').val()+"/"+$('#month_3_2_1_4').val()+"/"+$('#year_3_2_1_4').val();
        var year3end2 = $('#date_3_2_2_4').val()+"/"+$('#month_3_2_2_4').val()+"/"+$('#year_3_2_2_4').val();

        var formData = $("#clientform").serialize(); 

        formData = formData + "&client_businessdate_1="+client_businessdate_1+"&client_businessdate_2="+client_businessdate_1+"&client_yearend1_1="+year1end1+"&client_yearend1_2="+year1end2+"&client_yearend2_1="+year2end1+"&client_yearend2_2="+year2end2+"&client_yearend3_1="+year3end1+"&client_yearend3_2="+year3end2;
        $.ajax({
          url:'<?php echo base_url(); ?>add/addSelfEmployed?form_id=<?php echo $last; ?>',
          type:'POST',
          data: formData,
          dataType: 'json',
          success:function(as){

              if(as.status){
                //localStorage.setItem("totalIncome_3_2_1", totalIncome_3_2_1);
                //localStorage.setItem("totalIncome_3_2_2", totalIncome_3_2_2);
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
      }
  });

  $('#saveback').click(function(){
    var client_businessdate_1 = $('#date_3_1_1_1').val()+"/"+$('#month_3_1_1_1').val()+"/"+$('#year_3_1_1_1').val();
    var client_businessdate_2 = $('#date_3_1_2_1').val()+"/"+$('#month_3_1_2_1').val()+"/"+$('#year_3_1_2_1').val();

    var year1end1 = $('#date_3_2_1_2').val()+"/"+$('#month_3_2_1_2').val()+"/"+$('#year_3_2_1_2').val();
    var year1end2 = $('#date_3_2_2_2').val()+"/"+$('#month_3_2_2_2').val()+"/"+$('#year_3_2_2_2').val();

    var year2end1 = $('#date_3_2_1_3').val()+"/"+$('#month_3_2_1_3').val()+"/"+$('#year_3_2_1_3').val();
    var year2end2 = $('#date_3_2_2_3').val()+"/"+$('#month_3_2_2_3').val()+"/"+$('#year_3_2_2_3').val();

    var year3end1 = $('#date_3_2_1_4').val()+"/"+$('#month_3_2_1_4').val()+"/"+$('#year_3_2_1_4').val();
    var year3end2 = $('#date_3_2_2_4').val()+"/"+$('#month_3_2_2_4').val()+"/"+$('#year_3_2_2_4').val();

    var formData = $("#clientform").serialize(); 

    formData = formData + "&client_businessdate_1="+client_businessdate_1+"&client_businessdate_2="+client_businessdate_1+"&client_yearend1_1="+year1end1+"&client_yearend1_2="+year1end2+"&client_yearend2_1="+year2end1+"&client_yearend2_2="+year2end2+"&client_yearend3_1="+year3end1+"&client_yearend3_2="+year3end2;
    $.ajax({
      url:'<?php echo base_url(); ?>add/addSelfEmployed?form_id=<?php echo $last; ?>',
      type:'POST',
      data: formData,
      dataType: 'json',
      success:function(as){

          if(as.status){
            //localStorage.setItem("totalIncome_3_2_1", totalIncome_3_2_1);
            //localStorage.setItem("totalIncome_3_2_2", totalIncome_3_2_2);
            if(as.action == 'create'){
              location.href="<?php echo base_url(); ?>admin/employment-detail/"+as.data;
            }
            else if(as.action == 'edit'){
              location.href="<?php echo base_url(); ?>admin/employment-detail/"+as.data;
            }
          }
          else{
            alert(as.message);
          }
      }
    });
  });
</script>
