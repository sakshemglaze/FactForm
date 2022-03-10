<?php 
//$page = 'dashboard';
include 'find-fact-header.php' 
?>
<style>
input[type='number'] {
    -moz-appearance:textfield;
}
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
.selectDate{
  cursor:pointer;
}

.col-md-10 {
  width: 78%!important;
}
</style>
<?php

  $pdata = $this->admin->getEmployementDetailData($last); 

?>
<?php 
if($pdata != NULL){
  if($ftype){
    $e_status1 = explode(",",$pdata->client_employmentstatus_1_1);
    $e_status2 = explode(",",$pdata->client_employmentstatus_1_2);
    if(in_array( "Employed" , $e_status1 ) && !in_array( "Self-Employed" , $e_status1 ) && in_array( "Self-Employed" , $e_status2 ) && !in_array( "Employed" , $e_status2 )){
    
?>
<style>
.condition_client_2{ 
  display:none;
}
.hideclient_copy{
  display:none;
}
</style>
<?php
    }
    else if(in_array( "Employed" , $e_status1 ) && in_array( "Employed" , $e_status2 )){
?>

<?php 
    }
    else if(!in_array( "Employed" , $e_status1 ) && !in_array( "Self-Employed" , $e_status1 ) && !in_array( "Self-Employed" , $e_status2 ) && in_array( "Employed" , $e_status2 )){
?>
<style>
.condition_client_1{ 
  display:none;
}
.hideclient_copy{
  display:none;
}
</style>
<?php 
    }
    else if(!in_array( "Employed" , $e_status1 ) && (!in_array( "Self-Employed" , $e_status1 ) || in_array( "Self-Employed" , $e_status1 )) && (!in_array( "Self-Employed" , $e_status2 ) || in_array( "Self-Employed" , $e_status2 )) && !in_array( "Employed" , $e_status2 )){
?>
<style>
.condition_client_1{ 
  display:none;
}
.condition_client_2{ 
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
    <!-- Breadcrumbs-->
    <!-- <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Find Fact Form</li>
    </ol> -->
    <div class="row">
      <div class="col-lg-12 marTP-30"> <!-- Kindly Put This "form-section" class with col-lg-12 to hide complete section-->

        <!--========FORM SECTION HEADING==========-->
        <h4>Section 2 : Employment Details</h4>

        <!--========FORM SUB-SECTION HEADING==========-->
        <h5>2.1 Employment Details</h5>

        <!--=======FORM STARTS HERE===========-->
          <form id="clientform">

            <!--=====2.1 EMPLOYMENT DETAILS TABLE STARTS HERE=====-->
            <table class="table">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col">Client 1</th>
                  <?php if($ftype){ ?><th scope="col" class="hide-col">Client 2</th><?php } ?>
                </tr>
              </thead>
              <tbody class="table-bordered">
              <?php if($pdata != NULL){ $estatus1 = explode(",",$pdata->client_employmentstatus_1_1); } ?>
              <?php if($pdata != NULL){ $estatus2 = explode(",",$pdata->client_employmentstatus_1_2); } ?>
                <tr>
                  <td style="padding: 2em .85em;line-height: 1.85em;">Employment Status</td>
                  <td>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Employed</label>
                      <input type="checkbox" class="ver-check-input empStatus" <?php if($pdata != NULL && in_array( "Employed" , $estatus1 ) ){ echo "checked"; }?> name="client_employmentstatus_1_1[]" value="Employed" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Self-Employed</label>
                      <input type="checkbox" class="ver-check-input empStatus" <?php if($pdata != NULL && in_array( "Self-Employed" , $estatus1 ) ){ echo "checked"; }?> name="client_employmentstatus_1_1[]" value="Self-Employed" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Retired</label>
                      <input type="checkbox" class="ver-check-input empStatus" <?php if($pdata != NULL && in_array( "Retired" , $estatus1 ) ){ echo "checked"; }?> name="client_employmentstatus_1_1[]" value="Retired" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Not-Employed</label>
                      <input type="checkbox" class="ver-check-input empStatus" <?php if($pdata != NULL && in_array( "Not-Employed" , $estatus1 ) ){ echo "checked"; }?> name="client_employmentstatus_1_1[]" value="Not-Employed" id="">
                    </div>                
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">
                    <div class="form-check">
                      <label class="ver-check-label" for="">Employed</label>
                      <input type="checkbox" class="ver-check-input empStatus" <?php if($pdata != NULL && in_array( "Employed" , $estatus2 ) ){ echo "checked"; }?> name="client_employmentstatus_1_2[]" value="Employed" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Self-Employed</label>
                      <input type="checkbox" class="ver-check-input empStatus" <?php if($pdata != NULL && in_array( "Self-Employed" , $estatus2 ) ){ echo "checked"; }?> name="client_employmentstatus_1_2[]" value="Self-Employed" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Retired</label>
                      <input type="checkbox" class="ver-check-input empStatus" <?php if($pdata != NULL && in_array( "Retired" , $estatus2 ) ){ echo "checked"; }?> name="client_employmentstatus_1_2[]" value="Retired" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Not-Employed</label>
                      <input type="checkbox" class="ver-check-input empStatus" <?php if($pdata != NULL && in_array( "Not-Employed" , $estatus2 ) ){ echo "checked"; }?> name="client_employmentstatus_1_2[]" value="Not-Employed" id="">
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <!-- <tr>
                  <td>Pr</td>
                  <td>
                    <input type="text" class="form-control" name="" value="">
                  </td>
                  <td class="hide-col">
                    <input type="text" class="form-control" name="" value="">
                  </td>
                </tr> -->

                <tr>
                  <td>National Insurance Number</td>
                  <td>
                    <input type="text" class="form-control" name="client_insurancenumber_1" value="<?php if($pdata != NULL){ echo $pdata->client_insurancenumber_1; } ?>" placeholder="Type national insurance no.">
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col">
                    <input type="text" class="form-control" name="client_insurancenumber_2" value="<?php if($pdata != NULL){ echo $pdata->client_insurancenumber_2; } ?>" placeholder="Type national insurance no.">
                  </td>
                  <?php } ?>
                </tr>               
              </tbody>
            </table>

            <span>If you are Retired or Not Employed, please move to Section 4.</span>

            <!--=====/2.1 EMPLOYMENT DETAILS TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30 condition-2">2.2 Employment Details</h5>

            <!--=====2.2 EMPLOYMENT DETAILS TABLE STARTS HERE=====-->
            <table class="table condition-2">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col" class="condition_client_1">Client 1</th>
                  <?php if($ftype){ ?><th scope="col" class="hide-col condition_client_2">Client 2</th><?php } ?>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td>Current Employer</td>
                  <td class="condition_client_1"><input type="text" name="client_currentemp_1" class="form-control" value="<?php if($pdata != NULL){ echo $pdata->client_currentemp_1; } ?>" placeholder="Type current employer"></td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">
                    <input type="text" name="client_currentemp_2" class="form-control" value="<?php if($pdata != NULL){ echo $pdata->client_currentemp_2; } ?>" placeholder="Type current employer">
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Basis of Employment</td>
                  <td class="condition_client_1">
                    <div class="form-check">
                      <label class="ver-check-label" for="contactCheck1">Full Time</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_employmentbasis_2_1 == "Full Time"){ echo "checked"; } ?> name="client_employmentbasis_2_1" value="Full Time" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="contactCheck2" style="margin: 0px 24px;">
                        Part time (<input <?php if($pdata != NULL && $pdata->client_employmentbasis_2_1 == "Part time"){ }else{echo "disabled";} ?> type="text" class="form-control col-md-3 date-input-box client_employmentbasis_2_1" value="<?php if($pdata != NULL){ echo $pdata->client_parttimehours_2_1; } ?>" id="parttimetext_2_1" name="client_parttimehours_2_1" placeholder="Type hrs.">) hrs per wk
                      </label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_employmentbasis_2_1 == "Part time"){ echo "checked"; } ?> name="client_employmentbasis_2_1" value="Part time" id="parttime_2_1" style="margin-top: .65rem;">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="contactCheck3">Temporary</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_employmentbasis_2_1 == "Temporary"){ echo "checked"; } ?> name="client_employmentbasis_2_1" value="Temporary" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="contactCheck3">Contract</label>
                      <input type="checkbox" class="ver-check-input checkSelection" name="client_employmentbasis_2_1" <?php if($pdata != NULL && $pdata->client_employmentbasis_2_1 == "Contract"){ echo "checked"; } ?> value="Contract" id="">
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">
                    <div class="form-check">
                      <label class="ver-check-label" for="contactCheck1">Full Time</label>
                      <input type="checkbox" class="ver-check-input checkSelection" name="client_employmentbasis_2_2" <?php if($pdata != NULL && $pdata->client_employmentbasis_2_2 == "Full Time"){ echo "checked"; } ?> value="Full Time" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="contactCheck2" style="margin: 0px 24px;">
                        Part time (<input <?php if($pdata != NULL && $pdata->client_employmentbasis_2_2 == "Part time"){ }else{echo "disabled";} ?> type="text" class="form-control col-md-3 date-input-box client_employmentbasis_2_2" value="<?php if($pdata != NULL){ echo $pdata->client_parttimehours_2_2; } ?>" name="client_parttimehours_2_2" id="parttimetext_2_2" placeholder="Type hrs.">) hrs per wk
                      </label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_employmentbasis_2_2 == "Part time"){ echo "checked"; } ?> name="client_employmentbasis_2_2" value="Part time" id="parttime_2_2" style="margin-top: .65rem;">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="contactCheck3">Temporary</label>
                      <input type="checkbox" class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_employmentbasis_2_2 == "Temporary"){ echo "checked"; } ?> name="client_employmentbasis_2_2" value="Temporary" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="contactCheck3">Contract</label>
                      <input type="checkbox" class="ver-check-input checkSelection" name="client_employmentbasis_2_2" <?php if($pdata != NULL && $pdata->client_employmentbasis_2_2 == "Contract"){ echo "checked"; } ?> value="Contract" id="">
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td style="padding: 2em .85em;line-height: 1.85em;">Employer Address</td>
                  <td class="condition_client_1">
                    <textarea class="form-control" name="client_employeraddress_1" rows="3" placeholder="Type your employer address here..."><?php if($pdata != NULL){ echo $pdata->client_employeraddress_1; } ?></textarea>
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">
                    <textarea class="form-control" name="client_employeraddress_2" rows="3" placeholder="Type your employer address here..."><?php if($pdata != NULL){ echo $pdata->client_employeraddress_2; } ?></textarea>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Employer Post Code</td>
                  <td class="condition_client_1">
                    <input type="text" name="client_emppostcode_1" value="<?php if($pdata != NULL){ echo $pdata->client_emppostcode_1; } ?>" class="form-control" placeholder="Employer Postcode" style="text-transform: uppercase;">
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">
                    <input type="text" name="client_emppostcode_2" value="<?php if($pdata != NULL){ echo $pdata->client_emppostcode_2; } ?>" class="form-control" placeholder="Employer Postcode" style="text-transform: uppercase;">
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Telephone Number <br/>
                    <span style="color:#555555;font-size: 12px;font-style: italic;">*Please enter 11 digits beginning with 0 but without spaces</span>
                  </td>
                  <td class="condition_client_1">
                      <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">+44</div>
                      </div>
                      <input type="text" class="form-control" name="client_tel_1" value="<?php if($pdata != NULL){ echo $pdata->client_tel_1; } ?>" placeholder="07423165897">
                    </div> 
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">+44</div>
                      </div>
                      <input type="text" class="form-control" name="client_tel_2" value="<?php if($pdata != NULL){ echo $pdata->client_tel_2; } ?>" placeholder="07423165897">
                    </div> 
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Employer Contact Name</td>
                  <td class="condition_client_1">
                    <input name="client_empcontactname_1" value="<?php if($pdata != NULL){ echo $pdata->client_empcontactname_1; } ?>" type="text" class="form-control" placeholder="Type employer contact name">
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">
                    <input name="client_empcontactname_2" value="<?php if($pdata != NULL){ echo $pdata->client_empcontactname_2; } ?>" type="text" class="form-control" placeholder="Type employer contact name">
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Occupation / Job Title</td>
                  <td class="condition_client_1">
                    <input type="text" name="client_occ_1" value="<?php if($pdata != NULL){ echo $pdata->client_occ_1; } ?>" class="form-control" placeholder="Type occupation / job title">
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">
                    <input type="text" name="client_occ_2" value="<?php if($pdata != NULL){ echo $pdata->client_occ_2; } ?>" class="form-control" placeholder="Type occupation / job title">
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Start Date</td>
                  <?php $sdate1 = false; $sdate2 = false; 
                    if($pdata != NULL && $pdata->client_startdate_1 != ""){
                      $sdate1_data = explode("/", $pdata->client_startdate_1);
                      $sdate1 = true;
                    } 

                    if($pdata != NULL && $pdata->client_startdate_2 != ""){
                      $sdate2_data = explode("/", $pdata->client_startdate_2);
                      $sdate2 = true;
                    } 
                  ?>
                  <td class="text-center condition_client_1">
                    <input disabled id="date_2_2_1_1" type="text" value="<?php if($sdate1){echo $sdate1_data[0];} ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input disabled id="month_2_2_1_1" type="text" value="<?php if($sdate1){echo $sdate1_data[1];} ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input disabled id="year_2_2_1_1" type="text" value="<?php if($sdate1){echo $sdate1_data[2];} ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="calendar_2_2_1_1" class="selectDate" />
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col text-center condition_client_2">
                    <input disabled id="date_2_2_2_1" type="text" value="<?php if($sdate2){echo $sdate2_data[0];} ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input disabled id="month_2_2_2_1" type="text" value="<?php if($sdate2){echo $sdate2_data[1];} ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input disabled id="year_2_2_2_1" type="text" value="<?php if($sdate2){echo $sdate2_data[2];} ?>" class="form-control col-md-3 date-input-box" placeholder="year">
                    <input type="hidden" id="calendar_2_2_2_1" class="selectDate" />
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>
                    End Date <span style="font-weight: normal;">(if applicable)</span><br/>
                    <span style="font-weight: normal;">
                    (if less than 6 months remaining, please provide further details in the Notes section)
                    </span>
                    <?php $edate1 = false; $edate2 = false; 
                      if($pdata != NULL && $pdata->client_enddate_1 != ""){
                        $edate1_data = explode("/", $pdata->client_enddate_1);
                        $edate1 = true;
                      } 

                      if($pdata != NULL && $pdata->client_enddate_2 != ""){
                        $edate2_data = explode("/", $pdata->client_enddate_2);
                        $edate2 = true;
                      } 
                    ?>
                  </td>
                  <td class="text-center condition_client_1">
                    <input disabled id="date_2_2_1_2" type="text" value="<?php if($edate1){echo $edate1_data[0];} ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input disabled id="month_2_2_1_2" type="text" value="<?php if($edate1){echo $edate1_data[1];} ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input disabled id="year_2_2_1_2" type="text" value="<?php if($edate1){echo $edate1_data[2];} ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="calendar_2_2_1_2" class="selectDate" />
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col text-center condition_client_2">
                    <input disabled id="date_2_2_2_2" type="text" value="<?php if($edate2){echo $edate2_data[0];} ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input disabled id="month_2_2_2_2" type="text" value="<?php if($edate2){echo $edate2_data[1];} ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input disabled id="year_2_2_2_2" type="text" value="<?php if($edate2){echo $edate2_data[2];} ?>" class="form-control col-md-3 date-input-box" placeholder="year">
                    <input type="hidden" id="calendar_2_2_2_2" class="selectDate" />
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Are you on probation?</td>
                  <td class="text-center condition_client_1">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_probation_2_1 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_probation_2_1" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_probation_2_1 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_probation_2_1" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col text-center condition_client_2">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_probation_2_2 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_probation_2_2" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_probation_2_2 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_probation_2_2" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Probation End Date</td>
                  <?php $pdate1 = false; $pdate2 = false; 
                    if($pdata != NULL && $pdata->client_probenddate_1 != ""){
                      $pdate1_data = explode("/", $pdata->client_probenddate_1);
                      $pdate1 = true;
                    } 

                    if($pdata != NULL && $pdata->client_probenddate_2 != ""){
                      $pdate2_data = explode("/", $pdata->client_probenddate_2);
                      $pdate2 = true;
                    } 
                  ?>
                  <td class="text-center condition_client_1">
                    <input disabled id="date_2_2_1_3" type="text" value="<?php if($pdate1){echo $pdate1_data[0];} ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input disabled id="month_2_2_1_3" type="text" value="<?php if($pdate1){echo $pdate1_data[1];} ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input disabled id="year_2_2_1_3" type="text" value="<?php if($pdate1){echo $pdate1_data[2];} ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="calendar_2_2_1_3" class="selectDate" />
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col text-center condition_client_2">
                    <input disabled id="date_2_2_2_3" type="text" value="<?php if($pdate2){echo $pdate2_data[0];} ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input disabled id="month_2_2_2_3" type="text" value="<?php if($pdate2){echo $pdate2_data[1];} ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input disabled id="year_2_2_2_3" type="text" value="<?php if($pdate2){echo $pdate2_data[2];} ?>" class="form-control col-md-3 date-input-box" placeholder="year">
                    <input type="hidden" id="calendar_2_2_2_3" class="selectDate" />
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>
                    Do you have any additional<br/>occupation(s)?<br/>
                    <span style="font-weight: normal;">
                    (If Yes, please provide further details in Notes section)
                    </span>
                  </td>
                  <td class="text-center condition_client_1">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_occupation_2_1 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_occupation_2_1" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_occupation_2_1 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_occupation_2_1" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col text-center condition_client_2">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_occupation_2_2 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_occupation_2_2" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_occupation_2_2 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_occupation_2_2" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <?php } ?>
                </tr>
              </tbody>
            </table>
            <!--=====2.2 EMPLOYMENT DETAILS TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="condition-2" style="font-size: 10pt;margin-top: 15px;">
                Previous Employer (if less than 12 months with current employer)
            </h5>

            <!--===== PREVIOUS EMPLOYER TABLE STARTS HERE=====-->
            <table class="table condition-2">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col" class="condition_client_1">Client 1</th>
                  <?php if($ftype){ ?><th scope="col" class="hide-col condition_client_2">Client 2</th><?php } ?>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td>Previous Occupation / Job Title</td>
                  <td class="condition_client_1"><input type="text" name="client_prevocc_1" value="<?php if($pdata != NULL){ echo $pdata->client_prevocc_1; } ?>" class="form-control" placeholder="Type previous occupation / job title"></td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">
                    <input type="text" name="client_prevocc_2" value="<?php if($pdata != NULL){ echo $pdata->client_prevocc_2; } ?>" class="form-control" placeholder="Type previous occupation / job title">
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Previous Employer</td>
                  <td class="condition_client_1"><input type="text" name="client_prevemp_1" value="<?php if($pdata != NULL){ echo $pdata->client_prevemp_1; } ?>" class="form-control" placeholder="Type previous employer"></td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">
                    <input type="text" name="client_prevemp_2" value="<?php if($pdata != NULL){ echo $pdata->client_prevemp_2; } ?>" class="form-control" placeholder="Type previous employer">
                  </td> 
                  <?php } ?> 
                </tr>

                <tr>
                  <td>Previous Start Date</td>
                  <?php $psdate1 = false; $psdate2 = false; 
                    if($pdata != NULL && $pdata->client_prevstartdate_1 != ""){
                      $psdate1_data = explode("/", $pdata->client_prevstartdate_1);
                      $psdate1 = true;
                    } 

                    if($pdata != NULL && $pdata->client_prevstartdate_2 != ""){
                      $psdate2_data = explode("/", $pdata->client_prevstartdate_2);
                      $psdate2 = true;
                    } 
                  ?>
                  <td class="text-center condition_client_1">
                    <input disabled id="date_2_2_1_4" type="text" value="<?php if($psdate1){echo $psdate1_data[0];} ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input disabled id="month_2_2_1_4" type="text" value="<?php if($psdate1){echo $psdate1_data[1];} ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input disabled id="year_2_2_1_4" type="text" value="<?php if($psdate1){echo $psdate1_data[2];} ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="calendar_2_2_1_4" class="selectDate" />
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col text-center condition_client_2">
                    <input disabled id="date_2_2_2_4" type="text" value="<?php if($psdate2){echo $psdate2_data[0];} ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input disabled id="month_2_2_2_4" type="text" value="<?php if($psdate2){echo $psdate2_data[1];} ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input disabled id="year_2_2_2_4" type="text" value="<?php if($psdate2){echo $psdate2_data[2];} ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="calendar_2_2_2_4" class="selectDate" />
                  </td>
                  <?php } ?> 
                </tr>

                <tr>
                  <td>Previous End Date</td>
                  <?php $pedate1 = false; $pedate2 = false; 
                    if($pdata != NULL && $pdata->client_prevenddate_1 != ""){
                      $pedate1_data = explode("/", $pdata->client_prevenddate_1);
                      $pedate1 = true;
                    } 

                    if($pdata != NULL && $pdata->client_prevenddate_2 != ""){
                      $pedate2_data = explode("/", $pdata->client_prevenddate_2);
                      $pedate2 = true;
                    } 
                  ?>
                  <td class="text-center condition_client_1">
                    <input disabled id="date_2_2_1_5" type="text" value="<?php if($pedate1){echo $pedate1_data[0];} ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input disabled id="month_2_2_1_5" type="text" value="<?php if($pedate1){echo $pedate1_data[1];} ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input disabled id="year_2_2_1_5" type="text" value="<?php if($pedate1){echo $pedate1_data[2];} ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="calendar_2_2_1_5" class="selectDate" />
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col text-center condition_client_2">
                    <input disabled id="date_2_2_2_5" type="text" value="<?php if($pedate2){echo $pedate2_data[0];} ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                    <input disabled id="month_2_2_2_5" type="text" value="<?php if($pedate2){echo $pedate2_data[1];} ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                    <input disabled id="year_2_2_2_5" type="text" value="<?php if($pedate2){echo $pedate2_data[2];} ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                    <input type="hidden" id="calendar_2_2_2_5" class="selectDate" />
                  </td>
                  <?php } ?> 
                </tr>
              </tbody>
            </table>
            <!--===== PREVIOUS EMPLOYER TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30 condition-2">2.3 Gross Employment Income (Annual)</h5>

            <!--=====2.3 GROSS EMPLOYMENT INCOME TABLE STARTS HERE=====-->

            <!-- TABLE 1 START HERE-->
            <table class="table marTP-30 condition-2">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col" class="condition_client_1">Client 1</th>
                  <?php if($ftype){ ?><th scope="col" class="hide-col condition_client_2">Client 2</th><?php } ?>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td>Basic Salary</td>
                  <td class="condition_client_1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_basicsalary_1" value="<?php if($pdata != NULL){ echo $pdata->client_basicsalary_1; } ?>" class="form-control text-right gross-income1" placeholder="Type amount here...">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>
                    <!-- <span style="margin:0px 5px;"></span>
                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">
                     <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_basicsalary_2" value="<?php if($pdata != NULL){ echo $pdata->client_basicsalary_2; } ?>" class="form-control text-right gross-income2" placeholder="Type amount here...">
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
                  <td>Car Allowance</td>
                  <td class="condition_client_1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_carallow_1" value="<?php if($pdata != NULL){ echo $pdata->client_carallow_1; } ?>" class="form-control text-right gross-income1" placeholder="Type amount here...">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>
                    <!-- <span style="margin:0px 5px;">£</span>                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_carallow_2" value="<?php if($pdata != NULL){ echo $pdata->client_carallow_2; } ?>"  class="form-control text-right gross-income2" placeholder="Type amount here...">
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
                  <td>Guaranteed Bonus</td>
                  <td class="condition_client_1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_guaranteedbonus_1" value="<?php if($pdata != NULL){ echo $pdata->client_guaranteedbonus_1; } ?>"  class="form-control text-right gross-income1" placeholder="Type amount here...">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div> 
                      <input type="text" name="client_guaranteedbonus_2" value="<?php if($pdata != NULL){ echo $pdata->client_guaranteedbonus_2; } ?>" class="form-control text-right gross-income2" placeholder="Type amount here...">
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
                  <td>Guaranteed Overtime</td>
                  <td class="condition_client_1">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_guaranteedovertime_1" value="<?php if($pdata != NULL){ echo $pdata->client_guaranteedovertime_1; } ?>" class="form-control text-right gross-income1" placeholder="Type amount here...">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_guaranteedovertime_2" value="<?php if($pdata != NULL){ echo $pdata->client_guaranteedovertime_2; } ?>" class="form-control text-right gross-income2" placeholder="Type amount here...">
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
                  <td>Guaranteed Shift Allowance</td>
                  <td class="condition_client_1">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_guarshiftallow_1" value="<?php if($pdata != NULL){ echo $pdata->client_guarshiftallow_1; } ?>" class="form-control text-right gross-income1" placeholder="Type amount here...">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_guarshiftallow_2" value="<?php if($pdata != NULL){ echo $pdata->client_guarshiftallow_2; } ?>" class="form-control text-right gross-income2" placeholder="Type amount here...">
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
                  <td>Regional Weighting</td>
                  <td class="condition_client_1">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_regionalweight_1" value="<?php if($pdata != NULL){ echo $pdata->client_regionalweight_1; } ?>" class="form-control text-right gross-income1" placeholder="Type amount here...">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_regionalweight_2" value="<?php if($pdata != NULL){ echo $pdata->client_regionalweight_2; } ?>" class="form-control text-right gross-income2" placeholder="Type amount here...">
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
                  <td>Other</td>
                  <td class="condition_client_1">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_other1_1" value="<?php if($pdata != NULL){ echo $pdata->client_other1_1; } ?>" class="form-control text-right gross-income1" placeholder="Type amount here...">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_other1_2" value="<?php if($pdata != NULL){ echo $pdata->client_other1_2; } ?>" class="form-control text-right gross-income2" placeholder="Type amount here...">
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
            </table> <!-- /.TABLE 1 ENDS HERE-->

            <!-- TABLE 2 STARTS HERE-->
            <table class="table condition-2" style="margin-top: 10px;">
              <tbody class="table-bordered">
                <tr>
                  <td>Bonus/Commission (regular)</td>
                  <td class="condition_client_1">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_commission_1" value="<?php if($pdata != NULL){ echo $pdata->client_commission_1; } ?>" class="form-control text-right gross-income1" placeholder="Type amount here...">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_commission_2" value="<?php if($pdata != NULL){ echo $pdata->client_commission_2; } ?>" class="form-control text-right gross-income2" placeholder="Type amount here...">
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
                  <td>Overtime (regular)</td>
                  <td class="condition_client_1">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_overtime_1" value="<?php if($pdata != NULL){ echo $pdata->client_overtime_1; } ?>" class="form-control text-right gross-income1" placeholder="Type amount here...">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_overtime_2" value="<?php if($pdata != NULL){ echo $pdata->client_overtime_2; } ?>" class="form-control text-right gross-income2" placeholder="Type amount here...">
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
                  <td>Shift Allowance (regular)</td>
                  <td class="condition_client_1">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_shiftallowance_1" value="<?php if($pdata != NULL){ echo $pdata->client_shiftallowance_1; } ?>" class="form-control text-right gross-income1" placeholder="Type amount here...">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_shiftallowance_2" value="<?php if($pdata != NULL){ echo $pdata->client_shiftallowance_2; } ?>" class="form-control text-right gross-income2" placeholder="Type amount here...">
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
                  <td>Other</td>
                  <td class="condition_client_1">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_other2_1"  value="<?php if($pdata != NULL){ echo $pdata->client_other2_1; } ?>"  class="form-control text-right gross-income1" placeholder="Type amount here...">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_other2_2" class="form-control text-right gross-income2" value="<?php if($pdata != NULL){ echo $pdata->client_other2_2; } ?>"  placeholder="Type amount here...">
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
            </table> <!-- /.TABLE 2 ENDS HERE-->

            <!-- TABLE 3 STARTS HERE-->
            <table class="table condition-2" style="margin-top: 10px;">
              <tbody class="table-bordered">
                <tr>
                  <td>Other Earned Income <br/><span style="font-weight:normal;">(e.g. 2nd Job – provide details Notes)</span></td>
                  <td class="condition_client_1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="padding: 0.635rem .75rem">£</div>
                      </div>
                      <input type="text" name="client_otherincome_1"  value="<?php if($pdata != NULL){ echo $pdata->client_otherincome_1; } ?>"  class="form-control text-right gross-income1" placeholder="Type amount here...">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="padding: 0.635rem .75rem">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="padding: 0.635rem .75rem">£</div>
                      </div>
                      <input type="text" name="client_otherincome_2"  value="<?php if($pdata != NULL){ echo $pdata->client_otherincome_2; } ?>"  class="form-control text-right gross-income2" placeholder="Type amount here...">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="padding: 0.635rem .75rem">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php } ?>
                </tr>
              </tbody>
            </table><!-- /.TABLE 3 ENDS HERE -->

            <!-- TABLE 4 STARTS HERE -->
            <table class="table condition-2" style="margin-top: 10px;">
              <tbody class="table-bordered" style="border:2px solid #000000;">
                <tr>
                  <td>Total Employment Income</td>
                  <td class="condition_client_1" style="font-weight: bold;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>
                      <input id="total_gross_1" name="client_totalincome_1" type="text" value="<?php if($pdata != NULL){ echo $pdata->client_totalincome_1; } ?>"  class="form-control text-right" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2" style="font-weight: bold;">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>
                      <input id="total_gross_2" name="client_totalincome_2" type="text" value="<?php if($pdata != NULL){ echo $pdata->client_totalincome_2; } ?>" class="form-control text-right" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.a.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php } ?>
                </tr>
              </tbody>
            </table> <!-- /.TABLE 4 ENDS HERE -->

            <!--=====/2.3 GROSS EMPLOYMENT INCOME TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30 condition-2">2.4 Employment Deductions (Monthly) </h5>

            <!--=====2.4 EMPLOYMENT DEDUCTIONS TABLE STARTS HERE=====-->

            <!-- TABLE 1 STARTS HERE -->
            <table class="table condition-2" style="margin-top: 10px;">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col" class="condition_client_1">Client 1</th>
                  <?php if($ftype){ ?><th scope="col" class="hide-col condition_client_2">Client 2</th><?php } ?>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td>Pension</td>
                  <td class="condition_client_1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_pension_1" value="<?php if($pdata != NULL){ echo $pdata->client_pension_1; } ?>" class="form-control text-right empDeduction1" placeholder="Type amount here...">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_pension_2" value="<?php if($pdata != NULL){ echo $pdata->client_pension_2; } ?>"  class="form-control text-right empDeduction2" placeholder="Type amount here...">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Childcare Vouchers</td>
                  <td class="condition_client_1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_childvoucher_1" value="<?php if($pdata != NULL){ echo $pdata->client_childvoucher_1; } ?>"  class="form-control text-right empDeduction1" placeholder="Type amount here...">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" value="<?php if($pdata != NULL){ echo $pdata->client_childvoucher_2; } ?>" name="client_childvoucher_2" class="form-control text-right empDeduction2" placeholder="Type amount here...">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Student Loan</td>
                  <td class="condition_client_1">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_studentloan_1" value="<?php if($pdata != NULL){ echo $pdata->client_studentloan_1; } ?>" class="form-control text-right empDeduction1" placeholder="Type amount here...">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_studentloan_2" value="<?php if($pdata != NULL){ echo $pdata->client_studentloan_2; } ?>" class="form-control text-right empDeduction2" placeholder="Type amount here...">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Other <span style="font-weight: normal;">(provide details in Notes)</span></td>
                  <td class="condition_client_1">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_other3_1" value="<?php if($pdata != NULL){ echo $pdata->client_other3_1; } ?>"  class="form-control text-right empDeduction1" placeholder="Type amount here...">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>
                      <input type="text" name="client_other3_2" value="<?php if($pdata != NULL){ echo $pdata->client_other3_2; } ?>" class="form-control text-right empDeduction2" placeholder="Type amount here...">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php } ?>
                </tr>
              </tbody>
            </table> <!--/.TABLE 1 STARTS HERE -->

            <!-- TABLE 2 STARTS HERE -->
            <table class="table condition-2" style="margin-top: 10px;">
              <tbody class="table-bordered" style="border:2px solid #000000;">
                <tr>
                  <td>Total Deduction</td>
                  <td class="condition_client_1" style="font-weight: bold;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>
                      <input id="total_deduction_1" name="client_totaldeduction_1" value="<?php if($pdata != NULL){ echo $pdata->client_totaldeduction_1; } ?>"  type="text" class="form-control text-right" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin:5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2" style="font-weight: bold!important;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>
                      <input id="total_deduction_2" name="client_totaldeduction_2" value="<?php if($pdata != NULL){ echo $pdata->client_totaldeduction_2; } ?>" type="text" class="form-control text-right" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php } ?>
                </tr>
              </tbody>
            </table> <!--/.TABLE 2 ENDS HERE -->

            <!--=====/2.4 EMPLOYMENT DEDUCTIONS TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30 condition-2">2.5 Employed Net Pay (Monthly)</h5>

            <!--=====2.5 EMPLOYED NET PAY TABLE STARTS HERE=====-->
            <table class="table condition-2" style="margin-top: 10px;">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col" class="condition_client_1">Client 1</th>
                  <?php if($ftype){ ?><th scope="col" class="hide-col condition_client_2">Client 2</th><?php } ?>
                </tr>
              </thead>
              <tbody class="table-bordered" style="border:2px solid #000000;">
                <tr>
                  <td>Total Employed Net Pay</td>
                  <td class="condition_client_1" style="font-weight: bold;">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>
                      <input type="text" name="client_totalempnetpay_1" value="<?php if($pdata != NULL){ echo $pdata->client_totalempnetpay_1; } ?>" class="form-control text-right total_pay" placeholder="Type amount here..." style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin:5px;">p.a.</span> -->
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col condition_client_2" style="font-weight: bold;">

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>
                      <input type="text" name="client_totalempnetpay_2" value="<?php if($pdata != NULL){ echo $pdata->client_totalempnetpay_2; } ?>" class="form-control text-right" placeholder="Type amount here..." style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                  <?php } ?>
                </tr>
              </tbody>
            </table>
            <!--=====/2.5 EMPLOYED NET PAY TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30 condition-2">2.6 Future Changes to Employment</h5>

            <!--=====2.6 FUTURE CHANGES TO EMPLOYMENT TABLE STARTS HERE=====-->
            <table class="table condition-2" style="margin-top: 10px;">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col" class="condition_client_1">Client 1</th>
                  <?php if($ftype){ ?><th scope="col" class="hide-col condition_client_2">Client 2</th><?php } ?>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td>Do you expect your employment<br/>circumstances to change?<br/><span style="font-weight: normal;">(If Yes, please provide details in Notes)</span></td>
                  <td class="text-center condition_client_1">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_circumstances_6_1=="Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_circumstances_6_1" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_circumstances_6_1=="No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_circumstances_6_1" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col text-center condition_client_2">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_circumstances_6_2=="Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_circumstances_6_2" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_circumstances_6_2=="No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_circumstances_6_2" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <?php } ?>
                </tr>
              </tbody>
            </table>
            <!--=====/2.6 FUTURE CHANGES TO EMPLOYMENT TABLE ENDS HERE=====-->

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
                    <textarea  style="text-transform: inherit!important;" class="form-control" name="client_additionalnotes" id="notes" name="" rows="6" placeholder="Type additional note here..."><?php if($pdata != NULL){echo $pdata->client_additionalnotes;} ?></textarea>
                  </td>
                </tr>
              </tbody>
            </table>
            <!--=====/ADDITIONAL NOTES TABLE ENDS HERE=====-->

            <!--=====FORM NEXT/SAVE BUTTONS STARTS HERE=====-->
            <div class="" style="text-align: center;margin:20px 0px;">

              <!--Back button-->
              <!-- <a href="<?php echo base_url(); ?>admin/personal-detail<?php if($formExist){ echo "/".$last; } ?>" class="btn btn-primary" style="cursor:pointer;">Save and Back</a> -->
              <button id="saveback" type="button" class="btn btn-primary" style="cursor:pointer;">Save and Back</button>
              <!--/Back button-->

              <button type="submit" class="btn btn-primary" style="cursor:pointer;">Save and Next</button>

              <!-- <button type="submit" class="btn btn-primary" style="cursor:pointer;">Save</button> -->
            </div>
            <!--=====/FORM NEXT/SAVE BUTTONS ENDS HERE=====-->

            
          </form>
        <!--=======FORM ENDS HERE===========-->
      </div><!--/.col-lg-12-->
    </div><!--/.row-->
  </div>
  <!-- /.container-fluid-->
</div>
<!-- /.content-wrapper-->


<script>
  var statusEmployed1 = <?php if($pdata != NULL && in_array( "Employed" , $estatus1 ) ){?>true<?php }else{ ?>false<?php } ?>, 
  statusSelfEmployed1 = <?php if($pdata != NULL && in_array( "Self-Employed" , $estatus1 ) ){?>true<?php }else{ ?>false<?php } ?>, 
  statusRetired1 = <?php if($pdata != NULL && in_array( "Retired" , $estatus1 ) ){ ?>true<?php }else{ ?>false<?php } ?>, 
  statusNotEmployed1 = <?php if($pdata != NULL && in_array( "Not-Employed" , $estatus1 ) ){ ?>true<?php }else{ ?>false<?php } ?>,
  statusEmployed2 = <?php if($pdata != NULL && in_array( "Employed" , $estatus2 ) ){ ?>true<?php }else{ ?>false<?php } ?>, 
  statusSelfEmployed2 = <?php if($pdata != NULL && in_array( "Self-Employed" , $estatus2 ) ){ ?>true<?php }else{ ?>false<?php } ?>, 
  statusRetired2 = <?php if($pdata != NULL && in_array( "Retired" , $estatus2 ) ){ ?>true<?php }else{ ?>false<?php } ?>, 
  statusNotEmployed2 = <?php if($pdata != NULL && in_array( "Not-Employed" , $estatus2 ) ){ ?>true<?php }else{ ?>false<?php } ?>;

  var isSingle = false;

  <?php if(!$ftype){ ?>
    isSingle = true;
  <?php } ?>

  var name1 = "client_employmentstatus_1_1[]", name2 = "client_employmentstatus_1_2[]", value1 = "Employed", value2 = "Self-Employed", value3 = "Retired", value4 = "Not-Employed";

  var totalIncome_2_3_1 = 0, totalIncome_2_3_2 = 0;

  $('.checkSelection').on('change', function() {
      $('input[name="' + this.name + '"]').not(this).prop('checked', false);

      if($(this).val() != "Part time"){
        $('.'+this.name).prop('disabled', true);
      }

      if(this.name == "client_probation_2_1" && $(this).val() == "Yes"){
        $('#calendar_2_2_1_3').datepicker( "option", "disabled", false );
      }
      else if(this.name == "client_probation_2_1" && $(this).val() == "No"){
        $('#calendar_2_2_1_3').datepicker( "option", "disabled", true );
      }

      if(this.name == "client_probation_2_2" && $(this).val() == "Yes"){
        $('#calendar_2_2_2_3').datepicker( "option", "disabled", false );
      }
      else if(this.name == "client_probation_2_2" && $(this).val() == "No"){
        $('#calendar_2_2_2_3').datepicker( "option", "disabled", true );
      }
  });

  $('#parttime_2_1, #parttime_2_2').on('change', function() {
    var pcmId = $(this).attr('id');
    pcmId = pcmId.split('_');
    if($(this).prop('checked')){
      $('#parttimetext_'+pcmId[1]+'_'+pcmId[2]).prop('disabled', false);
    }
    else{
      $('#parttimetext_'+pcmId[1]+'_'+pcmId[2]).prop('disabled', true);
    }
  });

  $('.empStatus').on('change', function(){
    
    //Employed Status
    if($(this).prop('checked') && $(this).val() == value1 && this.name == name1){
      statusEmployed1 = true;
    }
    else if(!$(this).prop('checked') && $(this).val() == value1 && this.name == name1){
      statusEmployed1 = false;
    }

    if($(this).prop('checked') && $(this).val() == value1 && this.name == name2){
      statusEmployed2 = true;
    }
    else if(!$(this).prop('checked') && $(this).val() == value1 && this.name == name2){
      statusEmployed2 = false;
    }

    //Self Employed Status
    if($(this).prop('checked') && $(this).val() == value2 && this.name == name1){
      statusSelfEmployed1 = true;
    }
    else if(!$(this).prop('checked') && $(this).val() == value2 && this.name == name1){
      statusSelfEmployed1 = false;
    }

    if($(this).prop('checked') && $(this).val() == value2 && this.name == name2){
      statusSelfEmployed2 = true;
    }
    else if(!$(this).prop('checked') && $(this).val() == value2 && this.name == name2){
      statusSelfEmployed2 = false;
    }

    //Retired Status
    if($(this).prop('checked') && $(this).val() == value3 && this.name == name1){
      statusRetired1 = true;
    }
    else if(!$(this).prop('checked') && $(this).val() == value3 && this.name == name1){
      statusRetired1 = false;
    }

    if($(this).prop('checked') && $(this).val() == value3 && this.name == name2){
      statusRetired2 = true;
    }
    else if(!$(this).prop('checked') && $(this).val() == value3 && this.name == name2){
      statusRetired2 = false;
    }

    //Not Employed Status
    if($(this).prop('checked') && $(this).val() == value4 && this.name == name1){
      statusNotEmployed1 = true;
    }
    else if(!$(this).prop('checked') && $(this).val() == value4 && this.name == name1){
      statusNotEmployed1 = false;
    }

    if($(this).prop('checked') && $(this).val() == value4 && this.name == name2){
      statusNotEmployed2 = true;
    }
    else if(!$(this).prop('checked') && $(this).val() == value4 && this.name == name2){
      statusNotEmployed2 = false;
    }

    if(isSingle){
      if(!statusEmployed1 && statusSelfEmployed1 && !statusEmployed2 && !statusSelfEmployed2){
        location.href = "<?php echo base_url(); ?>admin/self-employed<?php if($formExist){ echo "/".$last; } ?>";
      }
    }

    //Start Applying Conditions (Self Employed)
    if(statusSelfEmployed1 && !statusSelfEmployed2){
      if(isSingle){
          $('.condition-2').hide();
      }
      else{
          $('.condition-2').show();
          $('.condition_client_1').hide();
          $('.condition_client_2').show();
      }
    }
    else if(!statusSelfEmployed1 && statusSelfEmployed2){
      $('.condition-2').show();
      $('.condition_client_1').show();
      $('.condition_client_2').hide();
    }
    else if(!statusSelfEmployed1 && !statusSelfEmployed2){
      $('.condition-2').show();
      $('.condition_client_1').show();
      $('.condition_client_2').show();
    }

    //Employed and Self Employed
    if(statusEmployed1 && statusSelfEmployed1 && statusEmployed2 && statusSelfEmployed2){
      $('.condition-2').show();
      $('.condition_client_1').show();
      $('.condition_client_2').show();
      $('#self_employed_link').attr('href', '<?php echo base_url(); ?>admin/self-employed<?php if($formExist){ echo "/".$last; } ?>');
      $('#self_employed_link span').removeClass('lineThrough');
    }
    else if(!statusEmployed1 && statusSelfEmployed1 && !statusEmployed2 && statusSelfEmployed2){
      $('.condition-2').hide();
      location.href = "<?php echo base_url(); ?>admin/self-employed<?php if($formExist){ echo "/".$last; } ?>";
    }
    else if(statusEmployed1 && statusSelfEmployed1 && !statusEmployed2 && !statusSelfEmployed2){
      $('.condition-2').show();
      $('.condition_client_1').show();
      $('#self_employed_link').attr('href', '<?php echo base_url(); ?>admin/self-employed<?php if($formExist){ echo "/".$last; } ?>');
      $('#self_employed_link span').removeClass('lineThrough');
    }
    else if(!statusEmployed1 && !statusSelfEmployed1 && statusEmployed2 && statusSelfEmployed2){
      $('.condition-2').show();
      $('.condition_client_2').show();
      $('#self_employed_link').attr('href', '<?php echo base_url(); ?>admin/self-employed<?php if($formExist){ echo "/".$last; } ?>');
      $('#self_employed_link span').removeClass('lineThrough');
    }
    else if(!statusEmployed1 && statusSelfEmployed1 && statusEmployed2 && statusSelfEmployed2){
      $('.condition-2').show();
      $('.condition_client_2').show();
      $('.condition_client_1').hide();
      $('#self_employed_link').attr('href', '<?php echo base_url(); ?>admin/self-employed<?php if($formExist){ echo "/".$last; } ?>');
      $('#self_employed_link span').removeClass('lineThrough');
    }
    else if(statusEmployed1 && statusEmployed2 && ((statusSelfEmployed1 && !statusSelfEmployed2) || (!statusSelfEmployed1 && statusSelfEmployed2))){
      $('.condition-2').show();
      $('.condition_client_1').show();
      $('.condition_client_2').show();
      $('#self_employed_link').attr('href', '<?php echo base_url(); ?>admin/self-employed<?php if($formExist){ echo "/".$last; } ?>');
      $('#self_employed_link span').removeClass('lineThrough');
    }
    else if(statusEmployed1 && statusSelfEmployed1 && !statusEmployed2 && statusSelfEmployed2){
      $('.condition-2').show();
      $('.condition_client_1').show();
      $('.condition_client_2').hide();
      $('#self_employed_link').attr('href', '<?php echo base_url(); ?>admin/self-employed<?php if($formExist){ echo "/".$last; } ?>');
      $('#self_employed_link span').removeClass('lineThrough');
    }
    else if((statusEmployed1 && statusSelfEmployed2) || (statusEmployed2 && statusSelfEmployed1)){//work here
      $('.condition-2').show();
      if(statusEmployed1 && statusSelfEmployed2){
        $('.condition_client_1').show();
        $('.condition_client_2').hide();
      }
      else if(statusEmployed2 && statusSelfEmployed1){
        $('.condition_client_1').hide();
        $('.condition_client_2').show();
      }
      
      $('#self_employed_link').attr('href', '<?php echo base_url(); ?>admin/self-employed<?php if($formExist){ echo "/".$last; } ?>');
      $('#self_employed_link span').removeClass('lineThrough');
    }
    else if(!statusEmployed1 && statusSelfEmployed1 && statusEmployed2 && statusSelfEmployed2){
      $('.condition-2').show();
      $('.condition_client_1').hide();
      $('.condition_client_2').show();
      $('#self_employed_link').attr('href', '<?php echo base_url(); ?>admin/self-employed<?php if($formExist){ echo "/".$last; } ?>');
      $('#self_employed_link span').removeClass('lineThrough');
    }
    else if((statusEmployed1 || statusEmployed2) && !statusSelfEmployed1 && !statusSelfEmployed2){
      $('#self_employed_link').removeAttr('href');
      $('#self_employed_link span').addClass('lineThrough');
    }
    else if(!statusEmployed1 && !statusSelfEmployed1 && !statusEmployed2 && !statusSelfEmployed2){
      $('#self_employed_link span').removeClass('lineThrough');
    }

    //Retired or Not Employed
    if((statusNotEmployed1 && statusNotEmployed2)){

      if (confirm('Are you sure of selection retired or not employed?')) {

        if (confirm('Mortgage will be hard to obtain. You still want to proceed ?')) {
          location.href="<?php echo base_url(); ?>admin/other-income<?php if($formExist){ echo "/".$last; } ?>";
        } else {
            // Do nothing!
        }

      } else {
          // Do nothing!
      }
    }

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

  function numberWithCommas(x) {
      var parts = x.toString().split(".");
      parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      return parts.join(".");
  }

  //Remove comma
  function removeComma(str){
    return str.replace (/,/g, "");
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
    totalIncome_2_3_1 = sum;
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
    totalIncome_2_3_2 = sum;
    $('#total_gross_2').val(addZeroes(sum+""));
  });

  //AutoSum for Employment Deduction Income
  $('.empDeduction1').on('keyup', function () {
    
    var sum = 0;
    $(this).val(function(index, value) {
        value = value.replace(/,/g,'');
        return numberWithCommas(value);
    });
    $('.empDeduction1').each(function() {
        sum += parseFloat(removeComma($(this).val())) || 0;
    });

    $('#total_deduction_1').val(addZeroes(sum+""));
  });

  $('.empDeduction2').on('keyup', function () {
    
    var sum = 0;
    $(this).val(function(index, value) {
        value = value.replace(/,/g,'');
        return numberWithCommas(value);
    });
    $('.empDeduction2').each(function() {
        sum += parseFloat(removeComma($(this).val())) || 0;
    });

    $('#total_deduction_2').val(addZeroes(sum+""));
  });

  $('input[name="client_totalempnetpay_1"], input[name="client_totalempnetpay_2"]').on('keyup', function () {
    $(this).val(function(index, value) {
        value = value.replace(/,/g,'');
        return numberWithCommas(value);
    });
  });

  $("#notes").on('keyup', function() {
    var words = this.value.match(/\S+/g).length;

    if (words > 500) {
      // Split the string on first 200 words and rejoin on spaces
      var trimmed = $(this).val().split(/\s+/, 500).join(" ");
      // Add a space at the end to make sure more typing creates new words
      $(this).val(trimmed + " ");
    }
    else {
      //$('#display_count').text(words);
      //$('#word_left').text(200-words);
    }
  });

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
      $('#date_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[2]);
      $('#month_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[1]);
      $('#year_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[0]);
    }
  });

  $("#clientform").submit(function(event) {
      event.preventDefault();
  }).validate({
      rules: {
        client_tel_1: {
          minlength: 11,
          maxlength: 11,
          number: true
        },
        client_tel_2: {
          minlength: 11,
          maxlength: 11,
          number: true
        }
      },
      submitHandler: function(form) { 

        if(isSingle){
          if(!statusEmployed1 && !statusSelfEmployed1 && !statusRetired1 && !statusNotEmployed1){
            alert("You haven't selected any of the options in section 2.1, please select accordingly");
            return false;
          }
        }
        else{
          if(!statusEmployed1 && !statusSelfEmployed1 && !statusRetired1 && !statusNotEmployed1 && !statusEmployed2 && !statusSelfEmployed2 && !statusRetired2 && !statusNotEmployed2){
            alert("You haven't selected any of the options in section 2.1, please select accordingly");
            return false;
          }
        }
        
        var startdate1 = $('#date_2_2_1_1').val()+"/"+$('#month_2_2_1_1').val()+"/"+$('#year_2_2_1_1').val();
        var startdate2 = $('#date_2_2_2_1').val()+"/"+$('#month_2_2_2_1').val()+"/"+$('#year_2_2_2_1').val();

        var enddate1 = $('#date_2_2_1_2').val()+"/"+$('#month_2_2_1_2').val()+"/"+$('#year_2_2_1_2').val();
        var enddate2 = $('#date_2_2_2_2').val()+"/"+$('#month_2_2_2_2').val()+"/"+$('#year_2_2_2_2').val();

        var probdate1 = $('#date_2_2_1_3').val()+"/"+$('#month_2_2_1_3').val()+"/"+$('#year_2_2_1_3').val();
        var probdate2 = $('#date_2_2_2_3').val()+"/"+$('#month_2_2_2_3').val()+"/"+$('#year_2_2_2_3').val();

        var prevsdate1 = $('#date_2_2_1_4').val()+"/"+$('#month_2_2_1_4').val()+"/"+$('#year_2_2_1_4').val();
        var prevsdate2 = $('#date_2_2_2_4').val()+"/"+$('#month_2_2_2_4').val()+"/"+$('#year_2_2_2_4').val();

        var prevedate1 = $('#date_2_2_1_5').val()+"/"+$('#month_2_2_1_5').val()+"/"+$('#year_2_2_1_5').val();
        var prevedate2 = $('#date_2_2_2_5').val()+"/"+$('#month_2_2_2_5').val()+"/"+$('#year_2_2_2_5').val();

        var formData = $("#clientform").serialize();

        formData = formData + "&client_startdate_1="+startdate1+"&client_startdate_2="+startdate2+"&client_enddate_1="+enddate1+"&client_enddate_2="+enddate2+"&client_probenddate_1="+probdate1+"&client_probenddate_2="+probdate2+"&client_prevstartdate_1="+prevsdate1+"&client_prevstartdate_2="+prevsdate2+"&client_prevenddate_1="+prevedate1+"&client_prevenddate_2="+prevedate2;

        $.ajax({
          url:'<?php echo base_url(); ?>add/addEmploymentDetail?form_id=<?php echo $last; ?>',
          type:'POST',
          data: formData,
          dataType: 'json',
          success:function(as){

              if(as.status){
                if(!statusSelfEmployed1 && !statusSelfEmployed2){
                  localStorage.setItem("totalIncome_2_3_1", totalIncome_2_3_1);
                  localStorage.setItem("totalIncome_2_3_2", totalIncome_2_3_2);
                  if(as.action == 'create'){
                    location.href="<?php echo base_url(); ?>admin/other-income/"+as.data;
                  }
                  else if(as.action == 'edit'){
                    location.href="<?php echo base_url(); ?>admin/other-income/"+as.data;
                  }  
                }
                else{
                  totalIncome_2_3_1 = 0;
                  totalIncome_2_3_2 = 0;
                  localStorage.setItem("totalIncome_2_3_1", 0);
                  localStorage.setItem("totalIncome_2_3_2", 0);
                  if(as.action == 'create'){
                    location.href="<?php echo base_url(); ?>admin/self-employed/"+as.data;
                  }
                  else if(as.action == 'edit'){
                    location.href="<?php echo base_url(); ?>admin/self-employed/"+as.data;
                  } 
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

    if(isSingle){
      if(!statusEmployed1 && !statusSelfEmployed1 && !statusRetired1 && !statusNotEmployed1){
        alert("You haven't selected any of the options in section 2.1, please select accordingly");
        return false;
      }
    }
    else{
      if(!statusEmployed1 && !statusSelfEmployed1 && !statusRetired1 && !statusNotEmployed1 && !statusEmployed2 && !statusSelfEmployed2 && !statusRetired2 && !statusNotEmployed2){
        alert("You haven't selected any of the options in section 2.1, please select accordingly");
        return false;
      }
    }
    
    var startdate1 = $('#date_2_2_1_1').val()+"/"+$('#month_2_2_1_1').val()+"/"+$('#year_2_2_1_1').val();
    var startdate2 = $('#date_2_2_2_1').val()+"/"+$('#month_2_2_2_1').val()+"/"+$('#year_2_2_2_1').val();

    var enddate1 = $('#date_2_2_1_2').val()+"/"+$('#month_2_2_1_2').val()+"/"+$('#year_2_2_1_2').val();
    var enddate2 = $('#date_2_2_2_2').val()+"/"+$('#month_2_2_2_2').val()+"/"+$('#year_2_2_2_2').val();

    var probdate1 = $('#date_2_2_1_3').val()+"/"+$('#month_2_2_1_3').val()+"/"+$('#year_2_2_1_3').val();
    var probdate2 = $('#date_2_2_2_3').val()+"/"+$('#month_2_2_2_3').val()+"/"+$('#year_2_2_2_3').val();

    var prevsdate1 = $('#date_2_2_1_4').val()+"/"+$('#month_2_2_1_4').val()+"/"+$('#year_2_2_1_4').val();
    var prevsdate2 = $('#date_2_2_2_4').val()+"/"+$('#month_2_2_2_4').val()+"/"+$('#year_2_2_2_4').val();

    var prevedate1 = $('#date_2_2_1_5').val()+"/"+$('#month_2_2_1_5').val()+"/"+$('#year_2_2_1_5').val();
    var prevedate2 = $('#date_2_2_2_5').val()+"/"+$('#month_2_2_2_5').val()+"/"+$('#year_2_2_2_5').val();

    var formData = $("#clientform").serialize();
    console.log(prevsdate1);

    formData = formData + "&client_startdate_1="+startdate1+"&client_startdate_2="+startdate2+"&client_enddate_1="+enddate1+"&client_enddate_2="+enddate2+"&client_probenddate_1="+probdate1+"&client_probenddate_2="+probdate2+"&client_prevstartdate_1="+prevsdate1+"&client_prevstartdate_2="+prevsdate2+"&client_prevenddate_1="+prevedate1+"&client_prevenddate_2="+prevedate2;

    $.ajax({
      url:'<?php echo base_url(); ?>add/addEmploymentDetail?form_id=<?php echo $last; ?>',
      type:'POST',
      data: formData,
      dataType: 'json',
      success:function(as){

          if(as.status){
            if(as.action == 'create'){
              location.href="<?php echo base_url(); ?>admin/personal-detail/"+as.data;
            }
            else if(as.action == 'edit'){
              location.href="<?php echo base_url(); ?>admin/personal-detail/"+as.data;
            }  
          }
          else{
            alert(as.message);
          }
      }
    });
  });
</script>
  