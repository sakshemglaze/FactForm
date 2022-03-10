<?php 
//$page = 'dashboard';
include 'find-fact-header.php'
?>
<style type="text/css">
  .tab-child th {
    vertical-align: middle;
    border-bottom: 0px;
    border: 1px solid #000000;
    background-color: #f2f2f2;
    font-size: 10pt;
  }


  .ui-datepicker-trigger{
    cursor:pointer;
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

  .res-add-err, .prev-add-err{
    color: red;
    font-size: 16px;
    padding: 10px 15px;
    background-color: #fff;
    /*border: 1px solid #b9b9b9;
    border-radius: 4px;*/
    margin: 10px 0px;
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
  $countryDetails =  file_get_contents(realpath('assets/countries.json'));
  $countryDetails = json_decode($countryDetails, true);

  $tflag1 = true; $tflag2 = true;

  $pdata = $this->admin->getPersonalDetailData($last);

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
        <?php if(!$formExist){ ?>
        <div class="col-lg-4 center-block marTP-30 question">
          <div class="card mb-3">
            <div class="card-body">
              <label>Are You ?</label><br/>
              <input class="single" type="checkbox" name="single" value="1" />
              <span class="item-text" style="margin-right:15px;">Single Applicant</span>
              <input class="double" type="checkbox" name="double" value="1" />
              <span class="item-text">Double Applicant</span>
            </div>
          </div>
     
        </div><!--/.col-mg-4 -->
        <?php } ?>
        <div class="col-lg-12 marTP-30 <?php if(!$formExist){ ?>form-section<?php } ?>"> <!-- Kindly Put This "form-section" class with col-lg-12 to hide complete section-->
          
          <!--========FORM SECTION HEADING==========-->
          <h4>Section 1 : Personal & Family Details</h4>

          <!--========FORM SUB-SECTION HEADING==========-->
          <h5>1.1 Personal Details</h5>

          <!--=======FORM STARTS HERE===========-->
            <form id="clientform">

              <!--=====1.1 PERSONAL DETAIL TABLE STARTS HERE=====-->
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
                    <td style="padding: 0.85em;line-height: 1.85em;">Title</td>
                    <td>
                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Mr</label>
                        <input class="form-check-input" <?php if($pdata != NULL && $pdata->client_title_1 == "Mr"){ echo "checked"; $tflag1=false; } ?> type="checkbox" name="client_title_1" value="Mr" id="defaultCheck1">
                      </div>

                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Mrs</label>
                        <input class="form-check-input" type="checkbox" <?php if($pdata != NULL && $pdata->client_title_1 == "Mrs"){ echo "checked"; $tflag1=false;} ?> name="client_title_1" value="Mrs" id="defaultCheck1">
                      </div>

                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Ms</label>
                        <input class="form-check-input" type="checkbox" <?php if($pdata != NULL && $pdata->client_title_1 == "Ms"){ echo "checked"; $tflag1=false;} ?> name="client_title_1" value="Ms" id="defaultCheck1">
                      </div>

                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Miss</label>
                        <input class="form-check-input" type="checkbox" <?php if($pdata != NULL && $pdata->client_title_1 == "Miss"){ echo "checked";$tflag1=false;} ?> name="client_title_1" value="Miss" id="defaultCheck1" style="margin-left: 0.75rem;">
                      </div>

                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Dr</label>
                        <input class="form-check-input" type="checkbox" <?php if($pdata != NULL && $pdata->client_title_1 == "Dr"){ echo "checked"; $tflag1=false;} ?> name="client_title_1" value="Dr" id="defaultCheck1" style="margin-left: 1.68rem;">
                      </div>

                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Prof</label>
                        <input class="form-check-input" type="checkbox" <?php if($pdata != NULL && $pdata->client_title_1 == "Prof"){ echo "checked"; $tflag1=false;} ?> name="client_title_1" value="Prof" id="defaultCheck1" style="margin-left: 0.89rem;">
                      </div>

                      <div class="col-md-12 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Other</label>
                        <input class="form-check-input" type="checkbox" <?php if($pdata != NULL && $pdata->client_title_1 == "Other"){ echo "checked";} ?> name="client_title_1" value="Other" id="checkTitle_1_1_1" style="margin-left: 0.35rem;">
                        <input <?php if($pdata != NULL && $pdata->client_title_1 == "Other"){ echo ""; }else{ echo "disabled"; } ?> type="text" value="<?php if($pdata != NULL && $pdata->client_title_1 == "Other"){ echo $pdata->client_othertitle_1; } ?>" class="form-control col-md-8 date-input-box float-right client_title_1" id="title_1_1_1" name="client_othertitle_1" placeholder="other:">
                      </div>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col">
                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Mr</label>
                        <input class="form-check-input" type="checkbox" <?php if($pdata != NULL && $pdata->client_title_2 == "Mr"){ echo "checked"; $tflag2=false; } ?> name="client_title_2" value="Mr" id="defaultCheck1">
                      </div>             

                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Mrs</label>
                        <input class="form-check-input" type="checkbox" <?php if($pdata != NULL && $pdata->client_title_2 == "Mrs"){ echo "checked"; $tflag2=false; } ?> name="client_title_2" value="Mrs" id="defaultCheck1">
                      </div>

                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Ms</label>
                        <input class="form-check-input" <?php if($pdata != NULL && $pdata->client_title_2 == "Ms"){ echo "checked"; $tflag2=false; } ?> type="checkbox" name="client_title_2" value="Ms" id="defaultCheck1">
                      </div>

                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Miss</label>
                        <input class="form-check-input" type="checkbox" <?php if($pdata != NULL && $pdata->client_title_2 == "Miss"){ echo "checked"; $tflag2=false; } ?> name="client_title_2" value="Miss" id="defaultCheck1" style="margin-left: 0.75rem;">
                      </div>

                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Dr</label>
                        <input class="form-check-input" type="checkbox" <?php if($pdata != NULL && $pdata->client_title_2 == "Dr"){ echo "checked"; $tflag2=false; } ?> name="client_title_2" value="Dr" id="defaultCheck1" style="margin-left: 1.68rem;">
                      </div>

                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Prof</label>
                        <input class="form-check-input" type="checkbox" <?php if($pdata != NULL && $pdata->client_title_2 == "Prof"){ echo "checked"; $tflag2=false; } ?> name="client_title_2" value="Prof" id="defaultCheck1" style="margin-left: 0.89rem;">
                      </div>

                      <div class="col-md-12 date-input-box" style="float: left;padding: 0;">                      
                        <label class="form-check-label" for="defaultCheck1">Other</label>

                        <input class="form-check-input" type="checkbox" <?php if($pdata != NULL && $pdata->client_title_2 == "Other"){ echo "checked"; } ?> name="client_title_2" value="Other" id="checkTitle_1_1_2" style="margin-left: 0.35rem;">

                        <input disabled type="text" value="<?php if($pdata != NULL && $pdata->client_title_2 == "Other"){ echo $pdata->client_othertitle_2; } ?>" class="form-control col-md-8 date-input-box float-right client_title_2" id="title_1_1_2" placeholder="other:" name="client_othertitle_2">
                      </div>
                    </td>
                    <?php } ?>
                  </tr>
                  
                  <tr>
                    <td>First Name</td>
                    <td>
                      <input type="text" class="form-control" name="client_firstname_1" value="<?php if($pdata != NULL){echo $pdata->client_firstname_1;} ?>" placeholder="First Name">
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col">
                      <input type="text" class="form-control" name="client_firstname_2" value="<?php if($pdata != NULL){echo $pdata->client_firstname_2;} ?>" placeholder="First Name">
                    </td> 
                    <?php } ?>     
                  </tr>

                  <tr>
                    <td>Middle Name(s)</td>
                    <td>
                      <input type="text" class="form-control" name="client_middlename_1" value="<?php if($pdata != NULL){echo $pdata->client_middlename_1;} ?>" placeholder="Middle Name">
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col">
                      <input type="text" class="form-control" name="client_middlename_2" value="<?php if($pdata != NULL){echo $pdata->client_middlename_2;} ?>" placeholder="Middle Name">
                    </td>
                    <?php } ?> 
                  </tr>

                  <tr>
                    <td>Surname</td>
                    <td>
                      <input type="text" class="form-control" name="client_surname_1" value="<?php if($pdata != NULL){echo $pdata->client_surname_1;} ?>" placeholder="Surname">
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col">
                      <input type="text" class="form-control" name="client_surname_2" value="<?php if($pdata != NULL){echo $pdata->client_surname_2;} ?>" placeholder="Surname">
                    </td>
                    <?php } ?> 
                  </tr>

                  <tr>
                    <td>Previous / Maiden Name</td>
                    <td>
                      <input type="text" class="form-control" name="client_maidenname_1" value="<?php if($pdata != NULL){echo $pdata->client_maidenname_1;} ?>" placeholder="Previous/Maiden Name">
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col">
                      <input type="text" class="form-control" name="client_maidenname_2" value="<?php if($pdata != NULL){echo $pdata->client_maidenname_2;} ?>" placeholder="Previous/Maiden Name">
                    </td>
                    <?php } ?> 
                  </tr>
                    
                  <?php if($ftype){ ?>
                  <!--===COPY ADDRESS BUTTON===-->
                  <tr class="hide-col">
                    <td colspan="3">
                      <div class="text-right">
                        <button onclick="copy('1', '2', 'address', 'textarea')" type="button" class="btn btn-primary btn-copy">
                          Copy Here
                        </button><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same current address on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr><!--===/COPY ADDRESS BUTTON===-->
                  <?php } ?> 

                  <tr>
                    <td style="padding: 2em 0.85em;line-height: 1.85em;">Current Address</td>
                    <td>                      
                      <textarea class="form-control" id="" name="client_address_1" rows="4" placeholder="Type your current address here..."><?php if($pdata != NULL){echo $pdata->client_address_1;} ?></textarea>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col">                      
                      <textarea class="form-control" id="" name="client_address_2" rows="4" placeholder="Type your current address here..."><?php if($pdata != NULL){echo $pdata->client_address_2;} ?></textarea>
                    </td>
                    <?php } ?>
                  </tr>

                  <?php if($ftype){ ?>
                  <!--===COPY POSTCODE BUTTON===-->
                  <tr class="hide-col">
                    <td colspan="3">
                      <div class="text-right">
                        <button type="button" onclick="copy('1', '2', 'postcode', 'input')" class="btn btn-primary btn-copy">
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
                    <td>Post Code</td>
                    <td>
                      <input type="text" class="form-control" name="client_postcode_1" value="<?php if($pdata != NULL){echo $pdata->client_postcode_1;} ?>" placeholder="Postcode" style="text-transform: uppercase;">
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col">
                      <input type="text" class="form-control" name="client_postcode_2" value="<?php if($pdata != NULL){echo $pdata->client_postcode_2;} ?>" placeholder="Postcode" style="text-transform: uppercase;">
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>Gender</td>
                    <td>
                      <select class="form-control" name="client_gender_1" id="">
                        <option <?php if($pdata != NULL && $pdata->client_gender_1 == ""){echo "selected";} ?> disabled>Choose</option>
                        <option <?php if($pdata != NULL && $pdata->client_gender_1 == "Male"){echo "selected";} ?> value="Male">Male</option>
                        <option <?php if($pdata != NULL && $pdata->client_gender_1 == "Female"){echo "selected";} ?> value="Female">Female</option>
                      </select>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col">
                      <select class="form-control" name="client_gender_2" id="">
                        <option <?php if($pdata != NULL && $pdata->client_gender_2 == ""){echo "selected";} ?> disabled>Choose</option>
                        <option <?php if($pdata != NULL && $pdata->client_gender_2 == "Male"){echo "selected";} ?> value="Male">Male</option>
                        <option <?php if($pdata != NULL && $pdata->client_gender_2 == "Female"){echo "selected";} ?> value="Female">Female</option>
                      </select>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>Date of Birth</td>
                    <?php $dob1 = false; $dob2 = false; 
                      if($pdata != NULL && $pdata->client_dob_1 != ""){
                        $dob1_data = explode("/", $pdata->client_dob_1);
                        $dob1 = true;
                      } 

                      if($pdata != NULL && $pdata->client_dob_2 != ""){
                        $dob2_data = explode("/", $pdata->client_dob_2);
                        $dob2 = true;
                      } 
                    ?>
                    <td class="text-center">
                      <input disabled type="text" id="date_1_1_1" class="form-control col-md-3 date-input-box" value="<?php if($dob1){echo $dob1_data[0];} ?>" placeholder="Date"> / 
                      <input disabled type="text" id="month_1_1_1" class="form-control col-md-3 date-input-box" value="<?php if($dob1){echo $dob1_data[1];} ?>" placeholder="Month"> / 
                      <input disabled type="text" id="year_1_1_1" class="form-control col-md-3 date-input-box" value="<?php if($dob1){echo $dob1_data[2];} ?>" placeholder="Year">
                      <input type="hidden" id="calendar_1_1_1" />
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col text-center">
                      <input disabled type="text" id="date_1_1_2" class="form-control col-md-3 date-input-box" value="<?php if($dob2){echo $dob2_data[0];} ?>" placeholder="Date"> / 
                      <input disabled type="text" id="month_1_1_2" class="form-control col-md-3 date-input-box" value="<?php if($dob2){echo $dob2_data[1];} ?>" placeholder="Month"> / 
                      <input disabled type="text" id="year_1_1_2" class="form-control col-md-3 date-input-box" value="<?php if($dob2){echo $dob2_data[2];} ?>" placeholder="Year">
                      <input type="hidden" id="calendar_1_1_2" />
                    </td>
                    <?php } ?>
                  </tr>

                  <?php if($ftype){ ?>
                  <!--===COPY HOME TELEPHONE BUTTON===-->
                  <tr class="hide-col">
                    <td colspan="3">
                      <div class="text-right">
                        <button type="button" onclick="copy('1', '2', 'hometel', 'input')" class="btn btn-primary btn-copy">
                          Copy Here
                        </button><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same home telephone no. on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr><!--===/COPY HOME TELEPHONE BUTTON===-->
                  <?php } ?>

                  <tr>
                    <td>Home Telephone <br/>
                      <span style="color:#555555;font-size: 12px;font-style: italic;">*Please enter 11 digits beginning with 0 but without spaces</span>
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">+44</div>
                        </div>
                        <input type="number" class="form-control"  name="client_hometel_1" value="<?php if($pdata != NULL){echo $pdata->client_hometel_1;} ?>" placeholder="04455665545">
                      </div>                      
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">+44</div>
                        </div>
                        <input type="number" class="form-control" name="client_hometel_2" value="<?php if($pdata != NULL){echo $pdata->client_hometel_2;} ?>" placeholder="04455665545">
                      </div>                      
                    </td>
                    <?php } ?>
                  </tr>
                  
                  <?php if($ftype){ ?>
                  <!--===COPY MOBILE TELEPHONE BUTTON===-->
                  <tr class="hide-col">
                    <td colspan="3">
                      <div class="text-right">
                        <button type="button" onclick="copy('1', '2', 'mobile', 'input')" class="btn btn-primary btn-copy">
                          Copy Here
                        </button><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same mobile telephone no. on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr><!--===/COPY MOBILE TELEPHONE BUTTON===-->

                  <?php } ?>

                  <tr>
                    <td>Mobile Telephone <br/>
                      <span style="color:#555555;font-size: 12px;font-style: italic;">*Please enter 11 digits beginning with 0 but without spaces</span>
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">+44</div>
                        </div>  
                        <input type="number" class="form-control" name="client_mobile_1" value="<?php if($pdata != NULL){echo $pdata->client_mobile_1;} ?>" placeholder="04455665545">                      
                      </div>                      
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">+44</div>
                        </div>
                        <input type="number" class="form-control" name="client_mobile_2" value="<?php if($pdata != NULL){echo $pdata->client_mobile_2;} ?>" placeholder="04455665545">
                      </div>                      
                    </td>
                    <?php } ?>
                  </tr>

                  <?php if($ftype){ ?>
                  <!--===COPY WORK TELEPHONE BUTTON===-->
                  <tr class="hide-col">
                    <td colspan="3">
                      <div class="text-right">
                        <button type="button" onclick="copy('1', '2', 'worktel', 'input')" class="btn btn-primary btn-copy">
                          Copy Here
                        </button><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same work telephone no. on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr><!--===COPY WORK TELEPHONE BUTTON===-->
                  <?php } ?>

                  <tr>
                    <td>Work Telephone <br/>
                      <span style="color:#555555;font-size: 12px;font-style: italic;">*Please enter 11 digits beginning with 0 but without spaces</span>
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">+44</div>
                        </div>
                        <input type="number" class="form-control" name="client_worktel_1" value="<?php if($pdata != NULL){echo $pdata->client_worktel_1;} ?>" placeholder="04455665545">
                      </div>                      
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">+44</div>
                        </div>
                        <input type="number" class="form-control" name="client_worktel_2" value="<?php if($pdata != NULL){echo $pdata->client_worktel_2;} ?>" placeholder="04455665545">
                      </div> 
                    </td>
                    <?php } ?>
                  </tr>
                  
                  <?php if($ftype){ ?>
                  <!--===COPY EMAIL ADDRESS BUTTON===-->
                  <tr class="hide-col">
                    <td colspan="3">
                      <div class="text-right">
                        <button type="button" onclick="copy('1', '2', 'email', 'input')" class="btn btn-primary btn-copy">
                          Copy Here
                        </button><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same email address on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr><!--===COPY EMAIL ADDRESS BUTTON===-->
                  <?php } ?>

                  <tr>
                    <td style="padding: 0.85em;line-height: 1.85em;">Email Address</td>
                    <td>
                      <input type="email" class="form-control" name="client_email_1" value="<?php if($pdata != NULL){echo $pdata->client_email_1;} ?>" placeholder="Email Address" style="text-transform: none;">
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col">
                      <input type="email" class="form-control" name="client_email_2" value="<?php if($pdata != NULL){echo $pdata->client_email_2;} ?>" placeholder="Email Address" style="text-transform: none;">
                    </td>
                    <?php } ?>
                  </tr>

                  <?php if($pdata != NULL){ $contactMethod = explode(",",$pdata->client_contactmethod_1); ?>
                  <?php $contactMethod2 = explode(",",$pdata->client_contactmethod_2); } ?>
                  <tr>
                    <td style="padding: 3em .85em;line-height: 1.85em;">Preferred Contact Method(s)</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Letter</label>
                        <input type="checkbox" <?php if($pdata != NULL && in_array( "Letter" , $contactMethod ) ){ echo "checked"; }?> class="ver-check-input" name="client_contactmethod_1[]" value="Letter" id="contactCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Telephone</label>
                        <input type="checkbox" <?php if($pdata != NULL && in_array( "Telephone" , $contactMethod ) ){ echo "checked"; }?> class="ver-check-input" name="client_contactmethod_1[]" value="Telephone" id="contactCheck2">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Email</label>
                        <input type="checkbox" <?php if($pdata != NULL && in_array( "Email" , $contactMethod ) ){ echo "checked"; }?> class="ver-check-input" name="client_contactmethod_1[]" value="Email" id="contactCheck3">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Text</label>
                        <input type="checkbox" <?php if($pdata != NULL && in_array( "Text" , $contactMethod ) ){ echo "checked"; }?> class="ver-check-input" name="client_contactmethod_1[]" value="Text" id="contactCheck4">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input type="text" <?php if($pdata != NULL && in_array( "Other" , $contactMethod ) ){ }else{ echo "disabled";}?> style="width:80%;display: inline-block;" name="client_othercontactmethod_1" class="form-control" id="contact_1_1_1" value="<?php if($pdata != NULL && in_array( "Other" , $contactMethod ) ){ echo $pdata->client_othercontactmethod_1; }?>" placeholder="other">
                        <input type="checkbox" <?php if($pdata != NULL && in_array( "Other" , $contactMethod ) ){ echo "checked"; }?> style="margin-left: 0.95rem;" name="client_contactmethod_1[]" value="Other" class="ver-check-input" id="checkContact_1_1_1">
                      </div>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col">
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Letter</label>
                        <input type="checkbox" <?php if($pdata != NULL && in_array( "Letter" , $contactMethod2 ) ){ echo "checked"; }?>  class="ver-check-input" name="client_contactmethod_2[]" value="Letter" id="contactCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Telephone</label>
                        <input type="checkbox" <?php if($pdata != NULL && in_array( "Telephone" , $contactMethod2 ) ){ echo "checked"; }?> class="ver-check-input" name="client_contactmethod_2[]" value="Telephone" id="contactCheck2">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Email</label>
                        <input type="checkbox" <?php if($pdata != NULL && in_array( "Email" , $contactMethod2 ) ){ echo "checked"; }?> class="ver-check-input" name="client_contactmethod_2[]" value="Email" id="contactCheck3">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Text</label>
                        <input type="checkbox" <?php if($pdata != NULL && in_array( "Text" , $contactMethod2 ) ){ echo "checked"; }?> class="ver-check-input" name="client_contactmethod_2[]" value="Text" id="contactCheck4">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input type="text" <?php if($pdata != NULL && in_array( "Other" , $contactMethod2 ) ){ }else{ echo "disabled";}?>  style="width:80%;display: inline-block;" class="form-control" name="client_othercontactmethod_2" id="contact_1_1_2" value="<?php if($pdata != NULL && in_array( "Other" , $contactMethod2 ) ){ echo $pdata->client_othercontactmethod_2; }?>" placeholder="other">
                        <input type="checkbox" <?php if($pdata != NULL && in_array( "Other" , $contactMethod2 ) ){ echo "checked"; }?> style="margin-left: 0.95rem;" name="client_contactmethod_2[]" value="Other" class="ver-check-input" id="checkContact_1_1_2">
                      </div>
                    </td>
                    <?php } ?>
                  </tr>
                  
                  <?php if($ftype){ ?>
                  <!--===COPY PREFERRED CONTACT TIME BUTTON===-->
                  <tr class="hide-col">
                    <td colspan="3">
                      <div class="text-right">
                        <button type="button" onclick="copy('1', '2', 'contacttime', 'input')" class="btn btn-primary btn-copy">
                          Copy Here
                        </button><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same contact time on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr><!--===/COPY PREFERRED CONTACT TIME BUTTON===-->
                  <?php } ?>

                  <tr>
                    <td>Preferred Contact Time</td>
                    <td>
                      <input type="text" class="form-control" name="client_contacttime_1" value="<?php if($pdata != NULL){echo $pdata->client_contacttime_1;} ?>" placeholder="Type preferred contact time">
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col">
                      <input type="text" class="form-control" name="client_contacttime_2" value="<?php if($pdata != NULL){echo $pdata->client_contacttime_2;} ?>" placeholder="Type preferred contact time">
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td style="padding: 3em .85em;line-height: 1.85em;">Marital Status</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Married</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_1" <?php if($pdata != NULL && $pdata->client_marital_1 == "Married"){ echo "checked"; } ?> value="Married" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Single</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_1" <?php if($pdata != NULL && $pdata->client_marital_1 == "Single"){ echo "checked"; } ?> value="Single" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Divorced</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_1" <?php if($pdata != NULL && $pdata->client_marital_1 == "Divorced"){ echo "checked"; } ?> value="Divorced" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Widower</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_1" <?php if($pdata != NULL && $pdata->client_marital_1 == "Widower"){ echo "checked"; } ?> value="Widower" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Co-habiting</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_1" <?php if($pdata != NULL && $pdata->client_marital_1 == "Co-habiting"){ echo "checked"; } ?> value="Co-habiting" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Civil Partnership</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_1" <?php if($pdata != NULL && $pdata->client_marital_1 == "Civil Partnership"){ echo "checked"; } ?> value="Civil Partnership" id="statusCheck1">
                      </div>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col">
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Married</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_2" <?php if($pdata != NULL && $pdata->client_marital_2 == "Married"){ echo "checked"; } ?> value="Married" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Single</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_2" <?php if($pdata != NULL && $pdata->client_marital_2 == "Single"){ echo "checked"; } ?> value="Single" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Divorced</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_2" <?php if($pdata != NULL && $pdata->client_marital_2 == "Divorced"){ echo "checked"; } ?> value="Divorced" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Widower</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_2" <?php if($pdata != NULL && $pdata->client_marital_2 == "Widower"){ echo "checked"; } ?> value="Widower" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Co-habiting</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_2" <?php if($pdata != NULL && $pdata->client_marital_2 == "Co-habiting"){ echo "checked"; } ?> value="Co-habiting" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Civil Partnership</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_2" <?php if($pdata != NULL && $pdata->client_marital_2 == "Civil Partnership"){ echo "checked"; } ?> value="Civil Partnership" id="statusCheck1">
                      </div>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td style="padding: 3em .85em;line-height: 1.85em;">Relationship to Other Client</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Spouse</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_1" <?php if($pdata != NULL && $pdata->client_relationship_1 == "Spouse"){ echo "checked"; } ?> value="Spouse" id="contactCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Civil Partner</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_1" <?php if($pdata != NULL && $pdata->client_relationship_1 == "Civil Partner"){ echo "checked"; } ?> value="Civil Partner" id="contactCheck2">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Partner</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_1" <?php if($pdata != NULL && $pdata->client_relationship_1 == "Partner"){ echo "checked"; } ?> value="Partner" id="contactCheck3">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Son</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_1" <?php if($pdata != NULL && $pdata->client_relationship_1 == "Son"){ echo "checked"; } ?> value="Son" id="contactCheck4">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Daughter</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_1" <?php if($pdata != NULL && $pdata->client_relationship_1 == "Daughter"){ echo "checked"; } ?> value="Daughter" id="contactCheck4">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Mother</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_1" <?php if($pdata != NULL && $pdata->client_relationship_1 == "Mother"){ echo "checked"; } ?> value="Mother" id="contactCheck4">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Father</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_1" <?php if($pdata != NULL && $pdata->client_relationship_1 == "Father"){ echo "checked"; } ?> value="Father" id="contactCheck4">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input <?php if($pdata != NULL && $pdata->client_relationship_1 == "Other"){ }else{ echo "disabled";}?> type="text" class="form-control col-md-10 date-input-box client_relationship_1" id="relation_1_1_1" value="<?php if($pdata != NULL && $pdata->client_relationship_1 == "Other"){ echo $pdata->client_otherrelationship_1; }?>" name="client_otherrelationship_1" placeholder="type your relationship">
                        <input type="checkbox" style="margin-left: 0.20rem;" name="client_relationship_1" <?php if($pdata != NULL && $pdata->client_relationship_1 == "Other"){ echo "checked"; } ?> value="Other" class="ver-check-input" id="checkRelation_1_1_1">
                      </div>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col">
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Spouse</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_2" <?php if($pdata != NULL && $pdata->client_relationship_2 == "Spouse"){ echo "checked"; } ?> value="Spouse" id="contactCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Civil Partner</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_2" <?php if($pdata != NULL && $pdata->client_relationship_2 == "Civil Partner"){ echo "checked"; } ?> value="Civil Partner" id="contactCheck2">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Partner</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_2" <?php if($pdata != NULL && $pdata->client_relationship_2 == "Partner"){ echo "checked"; } ?> value="Partner" id="contactCheck3">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Son</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_2" <?php if($pdata != NULL && $pdata->client_relationship_2 == "Son"){ echo "checked"; } ?> value="Son" id="contactCheck4">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Daughter</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_2" <?php if($pdata != NULL && $pdata->client_relationship_2 == "Daughter"){ echo "checked"; } ?> value="Daughter" id="contactCheck4">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Mother</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_2" <?php if($pdata != NULL && $pdata->client_relationship_2 == "Mother"){ echo "checked"; } ?> value="Mother" id="contactCheck4">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Father</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_2" <?php if($pdata != NULL && $pdata->client_relationship_2 == "Father"){ echo "checked"; } ?> value="Father" id="contactCheck4">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input <?php if($pdata != NULL && $pdata->client_relationship_2 == "Other"){ }else{ echo "disabled";}?> type="text" class="form-control col-md-10 date-input-box client_relationship_2" id="relation_1_1_2" value="<?php if($pdata != NULL && $pdata->client_relationship_2 == "Other"){ echo $pdata->client_otherrelationship_2; }?>" name="client_otherrelationship_2" placeholder="type your relationship">
                        <input type="checkbox" style="margin-left: 0.20rem;" name="client_relationship_2" <?php if($pdata != NULL && $pdata->client_relationship_2 == "Other"){ echo "checked"; } ?> value="Other" id="checkRelation_1_1_2" class="ver-check-input" id="contactCheck5">
                      </div>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td style="padding: 2em .85em;line-height: 1.85em;">Tax Rate</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Non Tax Payer (0%)</label>
                        <input type="checkbox" class="ver-check-input" value="0%" name="client_taxrate_1" <?php if($pdata != NULL && $pdata->client_taxrate_1 == "0%"){ echo "checked"; } ?> id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Basic Rate (20%)</label>
                        <input type="checkbox" class="ver-check-input" value="20%" name="client_taxrate_1" <?php if($pdata != NULL && $pdata->client_taxrate_1 == "20%"){ echo "checked"; } ?> id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Higher Rate (40%)</label>
                        <input type="checkbox" class="ver-check-input" value="40%" name="client_taxrate_1" <?php if($pdata != NULL && $pdata->client_taxrate_1 == "40%"){ echo "checked"; } ?> id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Additional Rate (45%)</label>
                        <input type="checkbox" class="ver-check-input" value="45%" name="client_taxrate_1" <?php if($pdata != NULL && $pdata->client_taxrate_1 == "45%"){ echo "checked"; } ?> id="statusCheck1">
                      </div>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col">
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Non Tax Payer (0%)</label>
                        <input type="checkbox" class="ver-check-input" value="0%" name="client_taxrate_2" <?php if($pdata != NULL && $pdata->client_taxrate_2 == "0%"){ echo "checked"; } ?> id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Basic Rate (20%)</label>
                        <input type="checkbox" class="ver-check-input" value="20%" name="client_taxrate_2" <?php if($pdata != NULL && $pdata->client_taxrate_2 == "20%"){ echo "checked"; } ?> id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Higher Rate (40%)</label>
                        <input type="checkbox" class="ver-check-input" value="40%" name="client_taxrate_2" <?php if($pdata != NULL && $pdata->client_taxrate_2 == "40%"){ echo "checked"; } ?> id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Additional Rate (45%)</label>
                        <input type="checkbox" class="ver-check-input" value="45%" name="client_taxrate_2" <?php if($pdata != NULL && $pdata->client_taxrate_2 == "45%"){ echo "checked"; } ?> id="statusCheck1">
                      </div>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>Nationality</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">British</label>
                        <input type="checkbox" class="ver-check-input" value="British" name="client_nationality_1" <?php if($pdata != NULL && $pdata->client_nationality_1 == "British"){ echo "checked"; } ?> id="nationality_main_1">
                      </div>
                      <div>
                        <label style="margin: 0px;float:left;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <select id="nationality_1" name="client_othernationality_1" class="form-control" <?php if($pdata != NULL && $pdata->client_nationality_1 == "Other"){  }else{echo "disabled";} ?> style="width: 85%; float:left;">
                          <option <?php if($pdata != NULL && $pdata->client_nationality_1 == "Other"){  }else{echo "selected disabled";} ?>>Select Nationality</option>
                          <?php foreach($countryDetails as $country){ ?>
                            <option <?php if($pdata != NULL && $pdata->client_othernationality_1 == $country['nationality']){ echo "selected"; } ?> value="<?php echo $country['nationality']; ?>"><?php echo $country['nationality']; ?></option>
                          <?php } ?>
                        </select>
                        <input type="checkbox" <?php if($pdata != NULL && $pdata->client_nationality_1 == "Other"){ echo "checked"; } ?> value="Other" name="client_nationality_1" style="margin-left: 0.20rem;" class="ver-check-input" id="nationality_other_1">
                      </div>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col">
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">British</label>
                        <input type="checkbox" class="ver-check-input" value="British" name="client_nationality_2" <?php if($pdata != NULL && $pdata->client_nationality_2 == "British"){ echo "checked"; } ?> id="nationality_main_2">
                      </div>
                      <div>
                        <label style="margin: 0px; float:left;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <select id="nationality_2" name="client_othernationality_2" class="form-control" <?php if($pdata != NULL && $pdata->client_nationality_2 == "Other"){  }else{echo "disabled";} ?> style="width: 85%; float:left;">
                          <option <?php if($pdata != NULL && $pdata->client_nationality_2 == "Other"){  }else{echo "selected disabled";} ?>>Select Nationality</option>
                          <?php foreach($countryDetails as $country){ ?>
                            <option <?php if($pdata != NULL && $pdata->client_othernationality_2 == $country['nationality']){ echo "selected"; } ?> value="<?php echo $country['nationality']; ?>"><?php echo $country['nationality']; ?></option>
                          <?php } ?>
                        </select>
                        <input type="checkbox" <?php if($pdata != NULL && $pdata->client_nationality_2 == "Other"){ echo "checked"; } ?> value="Other" name="client_nationality_2" style="margin-left: 0.20rem;" class="ver-check-input" id="nationality_other_2">
                      </div>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>Country of Residence</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">United Kingdom</label>
                        <input type="checkbox" value="United Kingdom" name="client_country_1" <?php if($pdata != NULL && $pdata->client_country_1 == "United Kingdom"){ echo "checked"; } ?> class="ver-check-input" id="country_main_1">
                      </div>
                      <div>
                        <label style="margin: 0px;float:left;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <select id="country_1" name="client_othercountry_1" class="form-control" <?php if($pdata != NULL && $pdata->client_country_1 == "Other"){  }else{echo "disabled";} ?> style="width: 85%; float:left;">
                          <option <?php if($pdata != NULL && $pdata->client_country_1 == "Other"){  }else{echo "selected disabled";} ?>>Select Country</option>
                          <?php foreach($countryDetails as $country){ ?>
                            <option <?php if($pdata != NULL && $pdata->client_othercountry_1 == $country['en_short_name']){ echo "selected"; } ?> value="<?php echo $country['en_short_name']; ?>"><?php echo $country['en_short_name']; ?></option>
                          <?php } ?>
                        </select>
                        <input type="checkbox" <?php if($pdata != NULL && $pdata->client_country_1 == "Other"){ echo "checked"; } ?> style="margin-left: 0.20rem;" value="Other" name="client_country_1" class="ver-check-input" id="country_other_1">
                      </div>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col">
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">United Kingdom</label>
                        <input type="checkbox" value="United Kingdom" name="client_country_2" <?php if($pdata != NULL && $pdata->client_country_2 == "United Kingdom"){ echo "checked"; } ?> class="ver-check-input" id="country_main_2">
                      </div>
                      <div>
                        <label style="margin: 0px;float:left;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <select id="country_2" name="client_othercountry_2" class="form-control" <?php if($pdata != NULL && $pdata->client_country_2 == "Other"){  }else{echo "disabled";} ?> style="width: 85%; float:left;">
                          <option <?php if($pdata != NULL && $pdata->client_country_2 == "Other"){  }else{echo "selected disabled";} ?>>Select Country</option>
                          <?php foreach($countryDetails as $country){ ?>
                            <option <?php if($pdata != NULL && $pdata->client_othercountry_2 == $country['en_short_name']){ echo "selected"; } ?> value="<?php echo $country['en_short_name']; ?>"><?php echo $country['en_short_name']; ?></option>
                          <?php } ?>
                        </select>
                        <input type="checkbox" <?php if($pdata != NULL && $pdata->client_country_2 == "Other"){ echo "checked"; } ?> style="margin-left: 0.20rem;" value="Other" name="client_country_2" class="ver-check-input" id="country_other_2">
                      </div>
                    </td>
                    <?php } ?>
                  </tr>
                </tbody>
              </table>
              <!--=====/1.1 PERSONAL DETAIL TABLE ENDS HERE=====-->

              <!--========FORM SUB-SECTION HEADING==========-->
              <h5 class="marTP-30">1.2 Current Residence</h5>

              <!--=====1.2 CURRENT RESIDENCE TABLE STARTS HERE=====-->
              <table class="table">
                <thead class="">
                  <tr>
                    <th scope="col" style="border:0px;background-color:transparent;"></th>
                    <th scope="col">Client 1</th>
                    <?php if($ftype){ ?><th scope="col" class="hide-col">Client 2</th><?php } ?>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <?php if($ftype){ ?>
                  <!--===COPY ADDRESS BUTTON===-->
                  <tr class="hide-col">
                    <td colspan="3">
                      <div class="text-right">
                        <button type="button" id="copyDate" class="btn btn-primary btn-copy">
                          Copy Here
                        </button><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same moved in date on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr><!--===/COPY ADDRESS BUTTON===-->
                  <?php } ?>
                  <tr>
                    <td>Date Moved into Current Address</td>
                    <?php $cdate1 = false; $cdate2 = false; 
                    if($pdata != NULL && $pdata->client_currentmoveddate_1 != ""){
                      $cdate1_data = explode("/", $pdata->client_currentmoveddate_1);
                      $cdate1 = true;
                    } 

                    if($pdata != NULL && $pdata->client_currentmoveddate_2 != ""){
                      $cdate2_data = explode("/", $pdata->client_currentmoveddate_2);
                      $cdate2 = true;
                    } 
                    ?>
                    <td class="text-center">
                      <input type="text" id="client_moved_date_1" disabled value="<?php if($cdate1){echo $cdate1_data[0];} ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input type="text" id="client_moved_month_1" disabled value="<?php if($cdate1){echo $cdate1_data[1];} ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input type="text" id="client_moved_year_1" disabled value="<?php if($cdate1){echo $cdate1_data[2];} ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="calendar_1_2_1" />
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col text-center">
                      <input type="text" id="client_moved_date_2" disabled value="<?php if($cdate2){echo $cdate2_data[0];} ?>" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input type="text" id="client_moved_month_2" disabled value="<?php if($cdate2){echo $cdate2_data[1];} ?>" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input type="text" id="client_moved_year_2" disabled value="<?php if($cdate2){echo $cdate2_data[2];} ?>" class="form-control col-md-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="calendar_1_2_2" />
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>Current Residential Status</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Owner</label>
                        <input type="checkbox" class="ver-check-input" name="client_residentialstatus_1" <?php if($pdata != NULL && $pdata->client_residentialstatus_1 == "Owner" ){ echo "checked"; }?> value="Owner" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Tenant</label>
                        <input type="checkbox" class="ver-check-input" name="client_residentialstatus_1" <?php if($pdata != NULL && $pdata->client_residentialstatus_1 == "Tenant" ){ echo "checked"; }?> value="Tenant" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Living With Parents</label>
                        <input type="checkbox" class="ver-check-input" name="client_residentialstatus_1" <?php if($pdata != NULL && $pdata->client_residentialstatus_1 == "Living With Parents" ){ echo "checked"; }?> value="Living With Parents" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="">Other:</label>
                        <input type="text" <?php if($pdata != NULL && $pdata->client_residentialstatus_1 == "Other" ){ }else{echo "disabled";}?> class="form-control col-md-10 date-input-box client_residentialstatus_1" value="<?php if($pdata != NULL && $pdata->client_residentialstatus_1 == "Other" ){ echo $pdata->client_otherresidentialstatus_1; }?>" name="client_otherresidentialstatus_1" id="crs_1_2_1" placeholder="other status">
                        <input type="checkbox" style="margin-left: 0.20rem;" <?php if($pdata != NULL && $pdata->client_residentialstatus_1 == "Other" ){ echo "checked"; }?> value="Other" name="client_residentialstatus_1" class="ver-check-input" id="checkcrs_1_2_1">
                      </div>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col">
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Owner</label>
                        <input type="checkbox" class="ver-check-input" name="client_residentialstatus_2" <?php if($pdata != NULL && $pdata->client_residentialstatus_2 == "Owner" ){ echo "checked"; }?> value="Owner" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Tenant</label>
                        <input type="checkbox" class="ver-check-input" name="client_residentialstatus_2" <?php if($pdata != NULL && $pdata->client_residentialstatus_2 == "Tenant" ){ echo "checked"; }?> value="Tenant" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Living With Parents</label>
                        <input type="checkbox" class="ver-check-input" name="client_residentialstatus_2" <?php if($pdata != NULL && $pdata->client_residentialstatus_2 == "Living With Parents" ){ echo "checked"; }?> value="Living With Parents" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="">Other:</label>
                        <input type="text" <?php if($pdata != NULL && $pdata->client_residentialstatus_2 == "Other" ){ }else{echo "disabled";}?> class="form-control col-md-10 date-input-box client_residentialstatus_2" value="<?php if($pdata != NULL && $pdata->client_residentialstatus_2 == "Other" ){ echo $pdata->client_otherresidentialstatus_2; }?>" name="client_otherresidentialstatus_2" id="crs_1_2_2" placeholder="other status">
                        <input type="checkbox" style="margin-left: 0.20rem;" <?php if($pdata != NULL && $pdata->client_residentialstatus_2 == "Other" ){ echo "checked"; }?> value="Other" name="client_residentialstatus_2" class="ver-check-input" id="checkcrs_1_2_2">
                      </div>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>Are you on the Electoral Roll?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" <?php if($pdata != NULL && $pdata->client_electoralroll_1 == "Yes" ){ echo "checked"; }?> style="margin-left: 0.25rem;" type="checkbox" name="client_electoralroll_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" <?php if($pdata != NULL && $pdata->client_electoralroll_1 == "No" ){ echo "checked"; }?> style="margin-left: 0.25rem;" type="checkbox" name="client_electoralroll_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" <?php if($pdata != NULL && $pdata->client_electoralroll_2 == "Yes" ){ echo "checked"; }?> style="margin-left: 0.25rem;" type="checkbox" name="client_electoralroll_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" <?php if($pdata != NULL && $pdata->client_electoralroll_2 == "No" ){ echo "checked"; }?> style="margin-left: 0.25rem;" type="checkbox" name="client_electoralroll_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>If renting – how much do you pay?</td>
                    <td>
                      <span>£</span>
                      <input type="text" name="client_currentrenting_1" value="<?php if($pdata != NULL){ echo $pdata->client_currentrenting_1; }?>" class="form-control col-md-7 date-input-box" style="text-align: right;" placeholder="Type amount here">
                      <select name="client_currentrentingtype_1" class="form-control col-md-4 date-input-box">
                        <option <?php if($pdata != NULL && $pdata->client_currentrentingtype_1=="per month"){ echo "selected"; }?> value="per month">per month</option>
                        <option <?php if($pdata != NULL && $pdata->client_currentrentingtype_1=="per year"){ echo "selected"; }?> value="per year">per year</option>
                      </select>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col">
                      <span>£</span>
                      <input type="text" name="client_currentrenting_2" value="<?php if($pdata != NULL){ echo $pdata->client_currentrenting_2; }?>" class="form-control col-md-7 date-input-box" style="text-align: right;" placeholder="Type amount here">
                      <select name="client_currentrentingtype_2" class="form-control col-md-4 date-input-box">
                        <option <?php if($pdata != NULL && $pdata->client_currentrentingtype_2=="per month"){ echo "selected"; }?> value="per month">per month</option>
                        <option <?php if($pdata != NULL && $pdata->client_currentrentingtype_2=="per year"){ echo "selected"; }?> value="per year">per year</option>
                      </select>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>Are you leaving rental<br/>accommodation when the new<br/>mortgage completes?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" <?php if($pdata != NULL && $pdata->client_rentalaccom_1 == "Yes" ){ echo "checked"; }?> style="margin-left: 0.25rem;" type="checkbox" name="client_rentalaccom_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" <?php if($pdata != NULL && $pdata->client_rentalaccom_1 == "No" ){ echo "checked"; }?> style="margin-left: 0.25rem;" type="checkbox" name="client_rentalaccom_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" <?php if($pdata != NULL && $pdata->client_rentalaccom_2 == "Yes" ){ echo "checked"; }?>  style="margin-left: 0.25rem;" type="checkbox" name="client_rentalaccom_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" <?php if($pdata != NULL && $pdata->client_rentalaccom_2 == "No" ){ echo "checked"; }?>  style="margin-left: 0.25rem;" type="checkbox" name="client_rentalaccom_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php } ?>
                  </tr>
                </tbody>
              </table>
              <!--=====1.2 CURRENT RESIDENCE TABLE ENDS HERE=====-->
              <!-- ==== Condition Message -->
              <div class="res-add-err"></div>
              <!-- ./==== Condition Message -->

              <!--========FORM SUB-SECTION HEADING==========-->
              <h5 class="marTP-30 less-3">1.3 Previous Residences</h5>
              <span class="less-3">If you have lived at your current address for less than three years, please complete this section.</span>

              <!--=====1.3 PREVIOUS RESIDENCE TABLESTARTS HERE=====-->
              <?php if($pdata != NULL){ $prevAdd = json_decode($pdata->client_previousaddress, true); $i = 0;  ?>
              
              <?php foreach($prevAdd as $key => $value){ $i++; ?>
              <?php if($i > 2){ ?><img id="prevAddrem_<?php echo $i; ?>" src="<?php echo base_url(); ?>assets/img/close.png" class="close-btn" /><?php } ?>
                <table id="prevAdd<?php echo $i; ?>Sec" class="table marTP-30 less-3">
                  <thead class="">
                    <tr>
                      <th scope="col" style="border:0px;background-color:transparent;"></th>
                      <th scope="col" class="hideclient_1">Client 1</th>
                      <?php if($ftype){ ?><th scope="col" class="hide-col hideclient_2">Client 2</th><?php } ?>
                    </tr>
                  </thead>
                  <tbody class="table-bordered">
                    <?php if($ftype){ ?>
                    <!--===COPY ADDRESS BUTTON===-->
                    <tr class="hide-col hideclient_copy">
                      <td colspan="3">
                        <div class="text-right">
                          <button type="button" onclick="copy('1', '2', 'prevaddress<?php echo $i; ?>', 'textarea')" class="btn btn-primary btn-copy">
                            Copy Here
                          </button><br/>
                          <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                            *You can copy same previous address on client 2 column.
                          </p>             
                        </div>
                      </td>
                    </tr><!--===/COPY ADDRESS BUTTON===-->
                    <?php } ?>

                    <tr>
                      <td style="padding: 2em 0.85em;line-height: 1.85em;">Previous Address <?php echo $i; ?></td>
                      <td class="hideclient_1">
                        <textarea class="form-control" id="" name="client_prevaddress<?php echo $i; ?>_1" rows="4" placeholder="Type your previous address <?php echo $i; ?> here"><?php echo $value["client_prevaddress".$i."_1"]; ?></textarea>
                      </td>
                      <?php if($ftype){ ?>
                      <td class="hide-col hideclient_2">
                        <textarea class="form-control" id="" name="client_prevaddress<?php echo $i; ?>_2" rows="4" placeholder="Type your previous address <?php echo $i; ?> here"><?php echo $value["client_prevaddress".$i."_2"]; ?></textarea>
                      </td>
                      <?php } ?>
                    </tr>
                    
                    <?php if($ftype){ ?>
                    <!--===COPY POSTCODE BUTTON===-->
                    <tr class="hide-col hideclient_copy">
                      <td colspan="3">
                        <div class="text-right">
                          <button type="button" onclick="copy('1', '2', 'prevpostcode<?php echo $i; ?>', 'input')" class="btn btn-primary btn-copy">
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
                        <input type="text" class="form-control" name="client_prevpostcode<?php echo $i; ?>_1" value="<?php echo $value["client_prevpostcode".$i."_1"]; ?>" placeholder="Postcode" style="text-transform: uppercase;">
                      </td>
                      <?php if($ftype){ ?>
                      <td class="hide-col hideclient_2">
                        <input type="text" class="form-control" name="client_prevpostcode<?php echo $i; ?>_2" value="<?php echo $value["client_prevpostcode".$i."_2"]; ?>" placeholder="Postcode" style="text-transform: uppercase;">
                      </td>
                      <?php } ?>
                    </tr>

                    <?php if($ftype){ ?>
                    <!--===COPY DATE BUTTON===-->
                    <tr class="hide-col">
                      <td colspan="3">
                        <div class="text-right">
                          <button type="button" id="prevadddate<?php echo $i; ?>copy" class="btn btn-primary btn-copy">
                            Copy Here
                          </button><br/>
                          <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                            *You can copy same moved-in date on client 2 column.
                          </p>             
                        </div>
                      </td>
                    </tr>
                    <!--===/COPY DATE BUTTON===-->
                    <?php } ?>

                    <tr>
                      <td>Date Moved In</td>
                      <?php $mdate1 = false; $mdate2 = false; 
                        if($value["client_prevmovedindate".$i."_1"] != ""){
                          $mdate1_data = explode("/", $value["client_prevmovedindate".$i."_1"]);
                          $mdate1 = true;
                        } 

                        if($value["client_prevmovedindate".$i."_2"] != ""){
                          $mdate2_data = explode("/", $value["client_prevmovedindate".$i."_2"]);
                          $mdate2 = true;
                        } 
                      ?>
                      <td class="text-center hideclient_1">
                        <input type="text" disabled name="datemovedin_1_3_<?php echo $i; ?>_1" id="datemovedin_1_3_<?php echo $i; ?>_1" value="<?php if($mdate1){echo $mdate1_data[0];} ?>" class="form-control col-lg-3 date-input-box" placeholder="Date"> / 
                        <input type="text" disabled name="monthmovedin_1_3_<?php echo $i; ?>_1" id="monthmovedin_1_3_<?php echo $i; ?>_1" value="<?php if($mdate1){echo $mdate1_data[1];} ?>" class="form-control col-lg-3 date-input-box" placeholder="Month"> / 
                        <input type="text" disabled name="yearmovedin_1_3_<?php echo $i; ?>_1" id="yearmovedin_1_3_<?php echo $i; ?>_1" value="<?php if($mdate1){echo $mdate1_data[2];} ?>" class="form-control col-lg-3 date-input-box" placeholder="Year">
                        <input type="hidden" id="calendar_1_3_<?php echo $i; ?>_1" />
                      </td>
                      <?php if($ftype){ ?>
                      <td class="hide-col text-center hideclient_2">
                        <input type="text" disabled name="datemovedin_1_3_<?php echo $i; ?>_2" id="datemovedin_1_3_<?php echo $i; ?>_2" value="<?php if($mdate2){echo $mdate2_data[0];} ?>" class="form-control col-lg-3 date-input-box" placeholder="Date"> / 
                        <input type="text" disabled name="monthmovedin_1_3_<?php echo $i; ?>_2" id="monthmovedin_1_3_<?php echo $i; ?>_2" value="<?php if($mdate2){echo $mdate2_data[1];} ?>" class="form-control col-lg-3 date-input-box" placeholder="Month"> / 
                        <input type="text" disabled name="yearmovedin_1_3_<?php echo $i; ?>_2" id="yearmovedin_1_3_<?php echo $i; ?>_2" value="<?php if($mdate2){echo $mdate2_data[2];} ?>" class="form-control col-lg-3 date-input-box" placeholder="Year">
                        <input type="hidden" id="calendar_1_3_<?php echo $i; ?>_2" />
                      </td>
                      <?php } ?>
                    </tr>

                    <!--===COPY DATE BUTTON===-->
                    <!-- <tr class="hide-col">
                      <td colspan="3">
                        <div class="text-right">
                          <a class="btn btn-primary btn-copy " href="#" role="button">
                            Copy Here
                          </a><br/>
                          <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                            *You can copy same moved-out date on client 2 column.
                          </p>             
                        </div>
                      </td>
                    </tr> -->
                    
                    <!--===/COPY DATE BUTTON===-->

                    <tr>
                      <td>Date Moved Out</td>
                      <?php $modate1 = false; $modate2 = false; 
                        if($value["client_prevmovedoutdate".$i."_1"] != ""){
                          $modate1_data = explode("/", $value["client_prevmovedoutdate".$i."_1"]);
                          $modate1 = true;
                        } 

                        if($value["client_prevmovedoutdate".$i."_2"] != ""){
                          $modate2_data = explode("/", $value["client_prevmovedoutdate".$i."_2"]);
                          $modate2 = true;
                        } 
                      ?>
                      <td class="text-center hideclient_1">
                        <input disabled type="text" id="prev_add_movedout_date<?php echo $i; ?>_1" value="<?php if($modate1){echo $modate1_data[0];} ?>" class="form-control col-lg-3 date-input-box" placeholder="Date"> / 
                        <input disabled type="text" id="prev_add_movedout_month<?php echo $i; ?>_1" value="<?php if($modate1){echo $modate1_data[1];} ?>" class="form-control col-lg-3 date-input-box" placeholder="Month"> / 
                        <input disabled type="text" id="prev_add_movedout_year<?php echo $i; ?>_1" value="<?php if($modate1){echo $modate1_data[2];} ?>" class="form-control col-lg-3 date-input-box" placeholder="Year">
                      </td>
                      <?php if($ftype){ ?>
                      <td class="hide-col text-center hideclient_2">
                        <input disabled type="text" id="prev_add_movedout_date<?php echo $i; ?>_2" value="<?php if($modate2){echo $modate2_data[0];} ?>" class="form-control col-lg-3 date-input-box" placeholder="Date"> / 
                        <input disabled type="text" id="prev_add_movedout_month<?php echo $i; ?>_2" value="<?php if($modate2){echo $modate2_data[1];} ?>" class="form-control col-lg-3 date-input-box" placeholder="Month"> / 
                        <input disabled type="text" id="prev_add_movedout_year<?php echo $i; ?>_2" value="<?php if($modate2){echo $modate2_data[2];} ?>" class="form-control col-lg-3 date-input-box" placeholder="Year">
                      </td>
                      <?php } ?>
                    </tr>

                    <tr>
                      <td>Occupancy Status</td>
                      <td class="hideclient_1">
                        <div class="form-check">
                          <label class="ver-check-label" for="contactCheck1">Owner</label>
                          <input type="checkbox" class="ver-check-input prev_occstatus" name="client_previousResidence<?php echo $i; ?>_1" <?php if(isset($value["client_previousResidence".$i."_1"]) && $value["client_previousResidence".$i."_1"]=="Owner"){ echo "checked"; } ?> value="Owner" id="occstatus_1_3_1">
                        </div>
                        <div class="form-check">
                          <label class="ver-check-label" for="contactCheck2">Tenant</label>
                          <input type="checkbox" class="ver-check-input prev_occstatus" name="client_previousResidence<?php echo $i; ?>_1" <?php if(isset($value["client_previousResidence".$i."_1"]) && $value["client_previousResidence".$i."_1"]=="Tenant"){ echo "checked"; } ?> value="Tenant" id="">
                        </div>
                        <div class="form-check">
                          <label class="ver-check-label" for="contactCheck3">Living With Parents</label>
                          <input type="checkbox" class="ver-check-input prev_occstatus" name="client_previousResidence<?php echo $i; ?>_1" <?php if(isset($value["client_previousResidence".$i."_1"]) && $value["client_previousResidence".$i."_1"]=="Living With Parents"){ echo "checked"; } ?> value="Living With Parents" id="">
                        </div>
                        <div>
                          <label style="margin: 0px;" class="ver-check-label" for="">Other:</label>
                          <input <?php if(isset($value["client_previousResidence".$i."_1"]) && $value["client_previousResidence".$i."_1"]=="Other"){ }else{ echo "disabled"; } ?> value="<?php if(isset($value["client_previousResidence".$i."_1"]) && $value["client_previousResidence".$i."_1"]=="Other"){ echo $value["client_otherpreviousresidence".$i."_1"]; } ?>" name="client_otherpreviousresidence<?php echo $i; ?>_1" type="text" class="form-control col-md-10 date-input-box client_previousResidence<?php echo $i; ?>_1" id="occst_previousResidence<?php echo $i; ?>_1" placeholder="other status">
                          <input <?php if(isset($value["client_previousResidence".$i."_1"]) && $value["client_previousResidence".$i."_1"]=="Other"){ echo "checked"; } ?> type="checkbox" style="margin-left: 0.20rem;" value="Other" name="client_previousResidence<?php echo $i; ?>_1" class="ver-check-input prev_occstatus" id="previousResidence<?php echo $i; ?>_1">
                        </div>
                      </td>
                      <?php if($ftype){ ?>
                      <td class="hide-col hideclient_2">
                        <div class="form-check">
                          <label class="ver-check-label" for="contactCheck1">Owner</label>
                          <input type="checkbox" class="ver-check-input" name="client_previousResidence<?php echo $i; ?>_2" <?php if(isset($value["client_previousResidence".$i."_2"]) && $value["client_previousResidence".$i."_2"]=="Owner"){ echo "checked"; } ?> value="Owner" id="">
                        </div>
                        <div class="form-check">
                          <label class="ver-check-label" for="contactCheck2">Tenant</label>
                          <input type="checkbox" class="ver-check-input" name="client_previousResidence<?php echo $i; ?>_2" <?php if(isset($value["client_previousResidence".$i."_2"]) && $value["client_previousResidence".$i."_2"]=="Tenant"){ echo "checked"; } ?> value="Tenant" id="">
                        </div>
                        <div class="form-check">
                          <label class="ver-check-label" for="contactCheck3">Living With Parents</label>
                          <input type="checkbox" class="ver-check-input" name="client_previousResidence<?php echo $i; ?>_2" <?php if(isset($value["client_previousResidence".$i."_2"]) && $value["client_previousResidence".$i."_2"]=="Living With Parents"){ echo "checked"; } ?> value="Living With Parents" id="">
                        </div>
                        <div>
                          <label style="margin: 0px;" class="ver-check-label" for="">Other:</label>
                          <input <?php if(isset($value["client_previousResidence".$i."_2"]) && $value["client_previousResidence".$i."_2"]=="Other"){ }else{ echo "disabled"; } ?> value="<?php if(isset($value["client_previousResidence".$i."_2"]) && $value["client_previousResidence".$i."_2"]=="Other"){ echo $value["client_otherpreviousresidence".$i."_2"]; } ?>" name="client_otherpreviousresidence<?php echo $i; ?>_2" type="text" class="form-control col-md-10 date-input-box client_previousResidence<?php echo $i; ?>_2" id="occst_previousResidence<?php echo $i; ?>_2" placeholder="other status">
                          <input <?php if(isset($value["client_previousResidence".$i."_2"]) && $value["client_previousResidence".$i."_2"]=="Other"){ echo "checked"; } ?> type="checkbox" style="margin-left: 0.20rem;" value="Other" name="client_previousResidence<?php echo $i; ?>_2" class="ver-check-input" id="previousResidence<?php echo $i; ?>_2">
                        </div>
                      </td>
                      <?php } ?>
                    </tr>

                    <tr>
                      <td>On Electoral Roll</td>
                      <td class="text-center hideclient_1">
                        <center>
                          <div class="col-md-2 date-input-box" style="padding: 0;">
                            <label class="form-check-label" for="">Yes</label>
                            <input class="form-check-input" <?php if(isset($value["client_prelectoralRoll".$i."_1"]) && $value["client_prelectoralRoll".$i."_1"]=="Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_prelectoralRoll<?php echo $i; ?>_1" value="Yes" id="">
                          </div>
                          <div class="col-md-2 date-input-box" style="padding: 0;">
                            <label class="form-check-label" for="">No</label>
                            <input class="form-check-input" <?php if(isset($value["client_prelectoralRoll".$i."_1"]) && $value["client_prelectoralRoll".$i."_1"]=="No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_prelectoralRoll<?php echo $i; ?>_1" value="No" id="">
                          </div>
                        </center>
                      </td>
                      <?php if($ftype){ ?>
                      <td class="hide-col text-center hideclient_2">
                        <center>
                          <div class="col-md-2 date-input-box" style="padding: 0;">
                            <label class="form-check-label" for="">Yes</label>
                            <input class="form-check-input" <?php if(isset($value["client_prelectoralRoll".$i."_2"]) && $value["client_prelectoralRoll".$i."_2"]=="Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_prelectoralRoll<?php echo $i; ?>_2" value="Yes" id="">
                          </div>
                          <div class="col-md-2 date-input-box" style="padding: 0;">
                            <label class="form-check-label" for="">No</label>
                            <input class="form-check-input" <?php if(isset($value["client_prelectoralRoll".$i."_2"]) && $value["client_prelectoralRoll".$i."_2"]=="No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_prelectoralRoll<?php echo $i; ?>_2" value="No" id="">
                          </div>
                        </center>
                      </td>
                      <?php } ?>
                    </tr>
                  </tbody>
                </table>
                <div id="prev<?php echo $i + 1; ?>-add-err" class="prev-add-err"></div>

              <?php } ?>

              <?php }else{ ?>

              
              <!--PREVIOUS ADDRESS 1 TABLE -->
              <table id="prevAdd1Sec" class="table marTP-30 less-3">
                <thead class="">
                  <tr>
                    <th scope="col" style="border:0px;background-color:transparent;"></th>
                    <th scope="col" class="hideclient_1 hideclient_1_1">Client 1</th>
                    <?php if($ftype){ ?><th scope="col" class="hide-col hideclient_2 hideclient_2_1">Client 2</th><?php } ?>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <?php if($ftype){ ?>
                  <!--===COPY ADDRESS BUTTON===-->
                  <tr class="hide-col hideclient_copy hideclient_copy_1">
                    <td colspan="3">
                      <div class="text-right">
                        <button type="button" onclick="copy('1', '2', 'prevaddress1', 'textarea')" class="btn btn-primary btn-copy">
                          Copy Here
                        </button><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same previous address on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr><!--===/COPY ADDRESS BUTTON===-->
                  <?php } ?>

                  <tr>
                    <td style="padding: 2em 0.85em;line-height: 1.85em;">Previous Address 1</td>
                    <td class="hideclient_1 hideclient_1_1">
                      <textarea class="form-control" id="" name="client_prevaddress1_1" rows="4" placeholder="Type your previous address 1 here"></textarea>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col hideclient_2 hideclient_2_1">
                      <textarea class="form-control" id="" name="client_prevaddress1_2" rows="4" placeholder="Type your previous address 1 here"></textarea>
                    </td>
                    <?php } ?>
                  </tr>
                  
                  <?php if($ftype){ ?>
                  <!--===COPY POSTCODE BUTTON===-->
                  <tr class="hide-col hideclient_copy hideclient_copy_1">
                    <td colspan="3">
                      <div class="text-right">
                        <button type="button" onclick="copy('1', '2', 'prevpostcode1', 'input')" class="btn btn-primary btn-copy">
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
                    <td class="hideclient_1 hideclient_1_1">
                      <input type="text" class="form-control" name="client_prevpostcode1_1" placeholder="Postcode" style="text-transform: uppercase;">
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col hideclient_2 hideclient_2_1">
                      <input type="text" class="form-control" name="client_prevpostcode1_2" placeholder="Postcode" style="text-transform: uppercase;">
                    </td>
                    <?php } ?>
                  </tr>
                  
                  <?php if($ftype){ ?>
                  <!--===COPY DATE BUTTON===-->
                  <tr class="hide-col hideclient_copy hideclient_copy_1">
                    <td colspan="3">
                      <div class="text-right">
                        <button type="button" id="prevadddate1copy" class="btn btn-primary btn-copy">
                          Copy Here
                        </button><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same moved-in date on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr>
                  <!--===/COPY DATE BUTTON===-->
                  <?php } ?>

                  <tr>
                    <td>Date Moved In</td>
                    <td class="text-center hideclient_1 hideclient_1_1">
                      <input type="text" disabled name="datemovedin_1_3_1_1" id="datemovedin_1_3_1_1" class="form-control col-lg-3 date-input-box" placeholder="Date"> / 
                      <input type="text" disabled name="monthmovedin_1_3_1_1" id="monthmovedin_1_3_1_1" class="form-control col-lg-3 date-input-box" placeholder="Month"> / 
                      <input type="text" disabled name="yearmovedin_1_3_1_1" id="yearmovedin_1_3_1_1" class="form-control col-lg-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="calendar_1_3_1_1" />
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col text-center hideclient_2 hideclient_2_1">
                      <input type="text" disabled name="datemovedin_1_3_1_2" id="datemovedin_1_3_1_2" class="form-control col-lg-3 date-input-box" placeholder="Date"> / 
                      <input type="text" disabled name="monthmovedin_1_3_1_2" id="monthmovedin_1_3_1_2" class="form-control col-lg-3 date-input-box" placeholder="Month"> / 
                      <input type="text" disabled name="yearmovedin_1_3_1_2" id="yearmovedin_1_3_1_2" class="form-control col-lg-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="calendar_1_3_1_2" />
                    </td>
                    <?php } ?>
                  </tr>

                  <!--===COPY DATE BUTTON===-->
                  <!-- <tr class="hide-col">
                    <td colspan="3">
                      <div class="text-right">
                        <a class="btn btn-primary btn-copy " href="#" role="button">
                          Copy Here
                        </a><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same moved-out date on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr> -->
                  
                  <!--===/COPY DATE BUTTON===-->

                  <tr>
                    <td>Date Moved Out</td>
                    <td class="text-center hideclient_1 hideclient_1_1">
                      <input type="text" id="prev_add_movedout_date1_1" class="form-control col-lg-3 date-input-box" placeholder="Date"> / 
                      <input type="text" id="prev_add_movedout_month1_1" class="form-control col-lg-3 date-input-box" placeholder="Month"> / 
                      <input type="text" id="prev_add_movedout_year1_1" class="form-control col-lg-3 date-input-box" placeholder="Year">
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col text-center hideclient_2 hideclient_2_1">
                      <input type="text" id="prev_add_movedout_date1_2" class="form-control col-lg-3 date-input-box" placeholder="Date"> / 
                      <input type="text" id="prev_add_movedout_month1_2" class="form-control col-lg-3 date-input-box" placeholder="Month"> / 
                      <input type="text" id="prev_add_movedout_year1_2" class="form-control col-lg-3 date-input-box" placeholder="Year">
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>Occupancy Status</td>
                    <td class="hideclient_1 hideclient_1_1">
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Owner</label>
                        <input type="checkbox" class="ver-check-input prev_occstatus" name="client_previousResidence1_1" value="Owner" id="occstatus_1_3_1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Tenant</label>
                        <input type="checkbox" class="ver-check-input prev_occstatus" name="client_previousResidence1_1" value="Tenant" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Living With Parents</label>
                        <input type="checkbox" class="ver-check-input prev_occstatus" name="client_previousResidence1_1" value="Living With Parents" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="">Other:</label>
                        <input disabled type="text" name="client_otherpreviousresidence1_1" class="form-control col-md-10 date-input-box client_previousResidence1_1" id="occst_previousResidence1_1" placeholder="other status">
                        <input type="checkbox" style="margin-left: 0.20rem;" value="Other" name="client_previousResidence1_1" class="ver-check-input prev_occstatus" id="previousResidence1_1">
                      </div>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col hideclient_2 hideclient_2_1">
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Owner</label>
                        <input type="checkbox" class="ver-check-input" name="client_previousResidence1_2" value="Owener" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Tenant</label>
                        <input type="checkbox" class="ver-check-input" name="client_previousResidence1_2" value="Tenant" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Living With Parents</label>
                        <input type="checkbox" class="ver-check-input" name="client_previousResidence1_2" value="Living With Parents" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="">Other:</label>
                        <input disabled type="text" name="client_otherpreviousresidence1_2" class="form-control col-md-10 date-input-box client_previousResidence1_2" id="occst_previousResidence1_2" placeholder="other status">
                        <input type="checkbox" style="margin-left: 0.20rem;" value="Other" name="client_previousResidence1_2" class="ver-check-input" id="previousResidence1_2">
                      </div>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>On Electoral Roll</td>
                    <td class="text-center hideclient_1 hideclient_1_1">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="client_prelectoralRoll1_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="client_prelectoralRoll1_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col text-center hideclient_2 hideclient_2_1">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="client_prelectoralRoll1_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="client_prelectoralRoll1_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php } ?>
                  </tr>
                </tbody>
              </table>
              <div id="prev2-add-err" class="prev-add-err">
                <div id="prev2-add-err-1" class=""></div>
                <div id="prev2-add-err-2" class=""></div>
              </div>
              <!--/PREVIOUS ADDRESS 1 TABLE -->
              
              <!--PREVIOUS ADDRESS 2 TABLE -->
              <table id="prevAdd2Sec" class="table marTP-30 less-3">
                <thead class="">
                  <tr>
                    <th scope="col" style="border:0px;background-color:transparent;"></th>
                    <th scope="col" class="hideclient_1 hideclient_1_2">Client 1</th>
                    <?php if($ftype){ ?><th scope="col" class="hide-col hideclient_2 hideclient_2_2">Client 2</th><?php } ?>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <?php if($ftype){ ?>
                  <!--===COPY ADDRESS BUTTON===-->
                  <tr class="hide-col hideclient_copy hideclient_copy_2">
                    <td colspan="3">
                      <div class="text-right">
                        <button type="button" class="btn btn-primary btn-copy" onclick="copy('1', '2', 'prevaddress2', 'textarea')">
                          Copy Here
                        </button><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same previous address on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr><!--===/COPY ADDRESS BUTTON===-->
                  <?php } ?>

                  <tr>
                    <td style="padding: 2em 0.85em;line-height: 1.85em;">Previous Address 2</td>
                    <td class="hideclient_1 hideclient_1_2">
                      <textarea class="form-control" id="" name="client_prevaddress2_1" rows="4" placeholder="Type your previous address 2 here"></textarea>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col hideclient_2 hideclient_2_2">
                      <textarea class="form-control" id="" name="client_prevaddress2_2" rows="4" placeholder="Type your previous address 2 here"></textarea>
                    </td>
                    <?php } ?>
                  </tr>

                  <?php if($ftype){ ?>
                  <tr class="hide-col hideclient_copy hideclient_copy_2">
                    <td colspan="3">
                      <div class="text-right">
                        <button type="button" onclick="copy('1', '2', 'prevpostcode2', 'input')" class="btn btn-primary btn-copy">
                          Copy Here
                        </button><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same postcode on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr>
                  <?php } ?>
                  
                  <!--===/COPY POSTCODE BUTTON===-->

                  <tr>
                    <td>Postcode</td>
                    <td class="hideclient_1 hideclient_1_2">
                      <input type="text" class="form-control" name="client_prevpostcode2_1" placeholder="Postcode" style="text-transform: uppercase;">
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col hideclient_2 hideclient_2_2">
                      <input type="text" class="form-control" name="client_prevpostcode2_2" placeholder="Postcode" style="text-transform: uppercase;">
                    </td>
                    <?php } ?>
                  </tr>
                    
                  <?php if($ftype){ ?>
                  <!--===COPY DATE BUTTON===-->
                  <tr class="hide-col hideclient_copy hideclient_copy_2">
                    <td colspan="3">
                     <div class="text-right">
                        <button type="button" id="prevadddate2copy" class="btn btn-primary btn-copy">
                          Copy Here
                        </button><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same moved-in date on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr>
                  <?php } ?>
                  
                  <!--===/COPY DATE BUTTON===-->

                  <tr>
                    <td>Date Moved In</td>
                    <td class="text-center hideclient_1 hideclient_1_2">
                      <input disabled type="text" id="datemovedin_1_3_2_1" class="form-control col-lg-3 date-input-box" placeholder="Date"> / 
                      <input disabled type="text" id="monthmovedin_1_3_2_1" class="form-control col-lg-3 date-input-box" placeholder="Month"> / 
                      <input disabled type="text" id="yearmovedin_1_3_2_1" class="form-control col-lg-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="calendar_1_3_2_1" />
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col text-center hideclient_2 hideclient_2_2">
                      <input disabled type="text" id="datemovedin_1_3_2_2" class="form-control col-lg-3 date-input-box" placeholder="Date"> / 
                      <input disabled type="text" id="monthmovedin_1_3_2_2" class="form-control col-lg-3 date-input-box" placeholder="Month"> / 
                      <input disabled type="text" id="yearmovedin_1_3_2_2" class="form-control col-lg-3 date-input-box" placeholder="Year">
                      <input type="hidden" id="calendar_1_3_2_2" />
                    </td>
                    <?php } ?>
                  </tr>

                  <!--===COPY DATE BUTTON===-->
                  <!-- <tr class="hide-col">
                    <td colspan="3">
                      <div class="text-right">
                        <a class="btn btn-primary btn-copy " href="#" role="button">
                          Copy Here
                        </a><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same moved-out on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr> -->
                  
                  <!--===/COPY DATE BUTTON===-->

                  <tr>
                    <td>Date Moved Out</td>
                    <td class="text-center hideclient_1 hideclient_1_2">
                      <input type="text" id="prev_add_movedout_date2_1" class="form-control col-lg-3 date-input-box" placeholder="Date"> / 
                      <input type="text" id="prev_add_movedout_month2_1" class="form-control col-lg-3 date-input-box" placeholder="Month"> / 
                      <input type="text" id="prev_add_movedout_year2_1" class="form-control col-lg-3 date-input-box" placeholder="Year">
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col text-center hideclient_2 hideclient_2_2">
                      <input type="text" id="prev_add_movedout_date2_2" class="form-control col-lg-3 date-input-box" placeholder="Date"> / 
                      <input type="text" id="prev_add_movedout_month2_2" class="form-control col-lg-3 date-input-box" placeholder="Month"> / 
                      <input type="text" id="prev_add_movedout_year2_2" class="form-control col-lg-3 date-input-box" placeholder="Year">
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>Occupancy Status</td>
                    <td class="hideclient_1 hideclient_1_2">
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Owner</label>
                        <input type="checkbox" class="ver-check-input" name="client_previousResidence2_1" value="Owener" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Tenant</label>
                        <input type="checkbox" class="ver-check-input" name="client_previousResidence2_1" value="Tenant" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Living With Parents</label>
                        <input type="checkbox" class="ver-check-input" name="client_previousResidence2_1" value="Living With Parents" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="">Other:</label>
                        <input disabled type="text" name="client_otherpreviousresidence2_1" class="form-control col-md-10 date-input-box client_previousResidence2_1" id="occst_previousResidence2_1" placeholder="other status">
                        <input type="checkbox" style="margin-left: 0.20rem;" value="Other" name="client_previousResidence2_1" class="ver-check-input" id="previousResidence2_1">
                      </div>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col hideclient_2 hideclient_2_2">
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Owner</label>
                        <input type="checkbox" class="ver-check-input" name="client_previousResidence2_2" value="Owener" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Tenant</label>
                        <input type="checkbox" class="ver-check-input" name="client_previousResidence2_2" value="Tenant" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Living With Parents</label>
                        <input type="checkbox" class="ver-check-input" name="client_previousResidence2_2" value="Living With Parents" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="">Other:</label>
                        <input disabled type="text" name="client_otherpreviousresidence2_2" class="form-control col-md-10 date-input-box client_previousResidence2_2" id="occst_previousResidence2_2" placeholder="other status">
                        <input type="checkbox" style="margin-left: 0.20rem;" value="Other" name="client_previousResidence2_2" class="ver-check-input" id="previousResidence2_2">
                      </div>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>On Electoral Roll</td>
                    <td class="text-center hideclient_1 hideclient_1_2">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="client_prelectoralRoll2_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="client_prelectoralRoll2_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col text-center hideclient_2 hideclient_2_2">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="client_prelectoralRoll2_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="client_prelectoralRoll2_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php } ?>
                  </tr>
                </tbody>
              </table><!--/PREVIOUS ADDRESS 2 TABLE -->
              <div id="prev3-add-err" class="prev-add-err">
                <div id="prev3-add-err-1" class=""></div>
                <div id="prev3-add-err-2" class=""></div>
              </div>

              <?php } //Else end ?>
              <!--ADD MORE BUTTON-->
              <div id="addMorePrevRes">
                <button id="addPrevRes" disabled type="button" class="btn btn-primary float-right less-3" style="margin:10px 0px;">Add More</button>
              </div>
              <!--/ADD MORE BUTTON-->

              <!--=====/1.3 PREVIOUS RESIDENCE TABLE ENDS HERE=====-->
              
              <!--========FORM SUB-SECTION HEADING==========-->
              <h5 class="marTP-30">1.4 Children & Dependants</h5>

              <!--=====1.4 CHILDREN / DEPENDANTS TABLE STARTS HERE=====-->
              <table class="tab-child marTP-30" style="width: 95%;">
                <thead class="">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Dependent Upon</th>
                    <th scope="col">Age</th>
                    <th scope="col">Relationship to<br/>Client(s)</th>
                    <th scope="col">Financially<br/>Dependent<br/>?</th>
                    <th scope="col">Anticipated<br/>length of<br/>dependency</th>
                  </tr>
                </thead>
                <tbody class="table-bordered" id="child_dependent">
                <?php if($pdata != NULL){ $childSec = json_decode($pdata->client_childrensection, true); $i = 0;  ?>
              
                <?php foreach($childSec as $key => $value){ $i++; ?>
                  <tr id="child_row_<?php echo $i; ?>">
                    <td>
                      <input type="text" class="form-control" name="dependent_name_<?php echo $i; ?>" value="<?php echo $value["dependent_name_".$i]; ?>" placeholder="Name of child & dependant">
                    </td>
                    <?php $depUpon = explode(",",$value["dependent_upon_".$i]); ?>
                    <td class="">
                      <span>
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" <?php if(in_array( "Joint" , $depUpon ) ){ echo "checked"; }?>  type="checkbox" name="dependent_upon_<?php echo $i; ?>[]" value="Joint" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">CL1</label>
                        <input class="form-check-input" <?php if(in_array( "CL1" , $depUpon ) ){ echo "checked"; }?> type="checkbox" name="dependent_upon_<?php echo $i; ?>[]" value="CL1" id="">
                      </span>
                      
                      <span>
                        <label class="form-check-label" for="">CL2</label>
                        <input class="form-check-input" <?php if(in_array( "CL2" , $depUpon ) ){ echo "checked"; }?> type="checkbox" name="dependent_upon_<?php echo $i; ?>[]" value="CL2" id="">
                      </span>
                      
                    </td>

                    <td><input type="text" class="form-control" id="client_dependentage_<?php echo $i; ?>" name="client_dependentage_<?php echo $i; ?>" value="<?php echo $value["client_dependentage_".$i]; ?>" placeholder="Type age here"></td>

                    <td><input type="text" class="form-control" name="relationship_<?php echo $i; ?>" value="<?php echo $value["relationship_".$i]; ?>" placeholder="Type relationship here"></td>

                    <td class="text-center">
                      <span>
                        <label class="form-check-label" for="">Y</label>
                        <input class="form-check-input financial-dependent" <?php if(isset($value["client_FinanciallyDependent_".$i]) && $value["client_FinanciallyDependent_".$i]=="Yes"){ echo "checked"; } ?> type="checkbox" name="client_FinanciallyDependent_<?php echo $i; ?>" value="Yes" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">N</label>
                        <input class="form-check-input financial-dependent" <?php if(isset($value["client_FinanciallyDependent_".$i]) && $value["client_FinanciallyDependent_".$i]=="No"){ echo "checked"; } ?> type="checkbox" name="client_FinanciallyDependent_<?php echo $i; ?>" value="No" id="">
                      </span>
                    </td>

                    <td><input id="client_anticipitated_<?php echo $i; ?>" name="client_anticipitated_<?php echo $i; ?>" value="<?php echo $value["client_anticipitated_".$i]; ?>" type="text" class="form-control"><?php if($i > 5){?><div id="childrem_<?php echo $i; ?>" class="close-btn childRemove" style="right:45px; margin-top:-25px;"><i class="fas fa-times-circle fa-lg"></i></div><?php } ?></td>
                  </tr>
                <?php } ?>
                <?php }else{ ?>
                
                  <tr>
                    <td>
                      <input type="text" class="form-control" name="dependent_name_1" placeholder="Name of child & dependant">
                    </td>
                  
                    <td class="">
                      <span>
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" type="checkbox" name="dependent_upon_1[]" value="Joint" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">CL1</label>
                        <input class="form-check-input" type="checkbox" name="dependent_upon_1[]" value="CL1" id="">
                      </span>
                      
                      <span>
                        <label class="form-check-label" for="">CL2</label>
                        <input class="form-check-input" type="checkbox" name="dependent_upon_1[]" value="CL2" id="">
                      </span>
                      
                    </td>

                    <td><input type="text" class="form-control" id="client_dependentage_1" name="client_dependentage_1" placeholder="Type age here"></td>

                    <td><input type="text" class="form-control" name="relationship_1" placeholder="Type relationship here"></td>

                    <td class="text-center">
                      <span>
                        <label class="form-check-label" for="">Y</label>
                        <input class="form-check-input financial-dependent" type="checkbox" name="client_FinanciallyDependent_1" value="Yes" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">N</label>
                        <input class="form-check-input financial-dependent" type="checkbox" name="client_FinanciallyDependent_1" value="No" id="">
                      </span>
                    </td>

                    <td><input id="client_anticipitated_1" name="client_anticipitated_1" type="text" class="form-control"></td>
                  </tr>
                  
                  <tr>
                    <td>
                      <input type="text" class="form-control" name="dependent_name_2" placeholder="Name of child & dependant">
                    </td>
                  
                    <td class="">
                      <span>
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" type="checkbox" name="dependent_upon_2[]" value="Joint" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">CL1</label>
                        <input class="form-check-input" type="checkbox" name="dependent_upon_2[]" value="CL1" id="">
                      </span>
                      
                      <span>
                        <label class="form-check-label" for="">CL2</label>
                        <input class="form-check-input" type="checkbox" name="dependent_upon_2[]" value="CL2" id="">
                      </span>
                      
                    </td>

                    <td><input type="text" class="form-control" id="client_dependentage_2" name="client_dependentage_2" placeholder="Type age here"></td>

                    <td><input type="text" class="form-control" name="relationship_2" placeholder="Type relationship here"></td>

                    <td class="text-center">
                      <span>
                        <label class="form-check-label" for="">Y</label>
                        <input class="form-check-input financial-dependent" type="checkbox" name="client_FinanciallyDependent_2" value="Yes" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">N</label>
                        <input class="form-check-input financial-dependent" type="checkbox" name="client_FinanciallyDependent_2" value="No" id="">
                      </span>
                    </td>

                    <td><input id="client_anticipitated_2" name="client_anticipitated_2" type="text" class="form-control"></td>
                  </tr>

                  <tr>
                    <td>
                      <input type="text" class="form-control" name="dependent_name_3" placeholder="Name of child & dependant">
                    </td>
                  
                    <td class="">
                      <span>
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" type="checkbox" name="dependent_upon_3[]" value="Joint" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">CL1</label>
                        <input class="form-check-input" type="checkbox" name="dependent_upon_3[]" value="CL1" id="">
                      </span>
                      
                      <span>
                        <label class="form-check-label" for="">CL2</label>
                        <input class="form-check-input" type="checkbox" name="dependent_upon_3[]" value="CL2" id="">
                      </span>
                      
                    </td>

                    <td><input type="text" class="form-control" id="client_dependentage_3" name="client_dependentage_3" placeholder="Type age here"></td>

                    <td><input type="text" class="form-control" name="relationship_3" placeholder="Type relationship here"></td>

                    <td class="text-center">
                      <span>
                        <label class="form-check-label" for="">Y</label>
                        <input class="form-check-input financial-dependent" type="checkbox" name="client_FinanciallyDependent_3" value="Yes" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">N</label>
                        <input class="form-check-input financial-dependent" type="checkbox" name="client_FinanciallyDependent_3" value="No" id="">
                      </span>
                    </td>

                    <td><input id="client_anticipitated_3" name="client_anticipitated_3" type="text" class="form-control"></td>
                  </tr>

                  <tr>
                    <td>
                      <input type="text" class="form-control" name="dependent_name_4" placeholder="Name of child & dependant">
                    </td>
                  
                    <td class="">
                      <span>
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" type="checkbox" name="dependent_upon_4[]" value="Joint" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">CL1</label>
                        <input class="form-check-input" type="checkbox" name="dependent_upon_4[]" value="CL1" id="">
                      </span>
                      
                      <span>
                        <label class="form-check-label" for="">CL2</label>
                        <input class="form-check-input" type="checkbox" name="dependent_upon_4[]" value="CL2" id="">
                      </span>
                     
                    </td>

                    <td><input type="text" class="form-control" id="client_dependentage_4" name="client_dependentage_4" placeholder="Type age here"></td>

                    <td><input type="text" class="form-control" name="relationship_4" placeholder="Type relationship here"></td>

                    <td class="text-center">
                      <span>
                        <label class="form-check-label" for="">Y</label>
                        <input class="form-check-input financial-dependent" type="checkbox" name="client_FinanciallyDependent_4" value="Yes" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">N</label>
                        <input class="form-check-input financial-dependent" type="checkbox" name="client_FinanciallyDependent_4" value="No" id="">
                      </span>
                    </td>

                    <td><input id="client_anticipitated_4" name="client_anticipitated_4" type="text" class="form-control"></td>
                  </tr>

                  <tr>
                    <td>
                      <input type="text" class="form-control" name="dependent_name_5" placeholder="Name of child & dependant">
                    </td>
                  
                    <td class="">
                      <span>
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" type="checkbox" name="dependent_upon_5[]" value="Joint" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">CL1</label>
                        <input class="form-check-input" type="checkbox" name="dependent_upon_5[]" value="CL1" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">CL2</label>
                        <input class="form-check-input" type="checkbox" name="dependent_upon_5[]" value="CL2" id="">
                      </span>
                    </td>

                    <td><input type="text" class="form-control" id="client_dependentage_5" name="client_dependentage_5" placeholder="Type age here"></td>

                    <td><input type="text" class="form-control" name="relationship_5" placeholder="Type relationship here"></td>

                    <td class="text-center">
                      <span>
                        <label class="form-check-label" for="">Y</label>
                        <input class="form-check-input financial-dependent" type="checkbox" name="client_FinanciallyDependent_5" value="Yes" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">N</label>
                        <input class="form-check-input financial-dependent" type="checkbox" name="client_FinanciallyDependent_5" value="No" id="">
                      </span>
                    </td>

                    <td><input id="client_anticipitated_5" name="client_anticipitated_5" type="text" class="form-control"></td>
                  </tr>
                
                <?php } ?>
                </tbody>
              </table>

              <!--ADD MORE BUTTON-->
              <div>
                <button type="button" onclick="addChildrenSection()" class="btn btn-primary float-right" style="margin:10px 0px;">Add More</button>
              </div>
              <!--/ADD MORE BUTTON-->
              <!--=====/1.4 CHILDREN / DEPENDANTS TABLE ENDS HERE=====-->

              <!--========FORM SUB-SECTION HEADING==========-->
              <h5 class="marTP-30">1.5 Health Details</h5>

              <!--=====1.5 HEALTH DETAILS TABLE STARTS HERE=====-->
              <table class="table marTP-30">
                <thead class="">
                  <tr>
                    <th scope="col" style="border:0px;background-color:transparent;"></th>
                    <th scope="col">Client 1</th>
                    <?php if($ftype){ ?><th scope="col" class="hide-col">Client 2</th><?php } ?>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <tr>
                    <td>Are you in good health? <br/> <span style="font-weight: normal;">If No, please provide further details in Notes</span></td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" <?php if($pdata != NULL && $pdata->client_healthstatus_1 == "Yes"){ echo "checked"; } ?> name="client_healthstatus_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" <?php if($pdata != NULL && $pdata->client_healthstatus_1 == "No"){ echo "checked"; } ?> name="client_healthstatus_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" <?php if($pdata != NULL && $pdata->client_healthstatus_2 == "Yes"){ echo "checked"; } ?> name="client_healthstatus_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" <?php if($pdata != NULL && $pdata->client_healthstatus_2 == "No"){ echo "checked"; } ?> name="client_healthstatus_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php } ?>
                  </tr>
                </tbody>
              </table>
              <!--=====/1.5 HEALTH DETAILS TABLE ENDS HERE=====-->

              <!--========FORM SUB-SECTION HEADING==========-->
              <h5 class="marTP-30">1.6 Religious Details</h5>

              <!--=====1.6 RELIGIOUS DETAILS TABLE STARTS HERE=====-->
              <table class="table marTP-30">
                <thead class="">
                  <tr>
                    <th scope="col" style="border:0px;background-color:transparent;"></th>
                    <th scope="col">Client 1</th>
                    <?php if($ftype){ ?><th scope="col" class="hide-col">Client 2</th><?php } ?>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <tr>
                    <td>Do you have any religious beliefs<br/>that could affect mortgage<br/>planning? <br/> <span style="font-weight: normal;">e.g. Sharia compliant mortgage required.<br/>Please provide further details in Notes</span></td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" <?php if($pdata != NULL && $pdata->client_religiousbelief_1 == "Yes"){ echo "checked"; } ?> name="client_religiousbelief_1" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" <?php if($pdata != NULL && $pdata->client_religiousbelief_1 == "No"){ echo "checked"; } ?> name="client_religiousbelief_1" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php if($ftype){ ?>
                    <td class="hide-col text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" <?php if($pdata != NULL && $pdata->client_religiousbelief_2 == "Yes"){ echo "checked"; } ?> name="client_religiousbelief_2" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" <?php if($pdata != NULL && $pdata->client_religiousbelief_2 == "No"){ echo "checked"; } ?> name="client_religiousbelief_2" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <?php } ?>
                  </tr>
                </tbody>
              </table>
              <!--=====/1.6 RELIGIOUS DETAILS TABLE ENDS HERE=====-->

              <!--=====ADDITION NOTES TABLE STARTS HERE=====-->
              <table class="table marTP-30">
                <thead class="">
                  <tr>
                    <th>Additional Notes</th>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <tr>
                    <td style="padding-right:0px;">
                      <textarea style="text-transform: inherit!important;" class="form-control" id="" name="client_additionaldetail" rows="6" placeholder="Type additional notes here..."><?php if($pdata != NULL){echo $pdata->client_additionaldetail;}  ?></textarea>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!--=====/ADDITION NOTES TABLE ENDS HERE=====-->



              <!--=====FORM NEXT/SAVE BUTTONS STARTS HERE=====-->
              <div class="" style="text-align: center;margin:20px 0px;">
                <button type="submit" class="btn btn-primary" style="cursor:pointer;">Save and Next</button>

                <!-- <button type="submit" class="btn btn-primary" style="cursor:pointer;">Save</button> -->
              </div>
              <!--=====/FORM NEXT/SAVE BUTTONS ENDS HERE=====-->

              
            </form>
          <!--=======FORM ENDS HERE===========-->
        </div><!--/.col-lg-12-->
      </div><!--/.row-->
    </div><!-- /.container-fluid-->
  </div><!-- /.content-wrapper-->

  <!-- Making personal details functioning -->
  <script>
  //Setting current Dates while edit
 

    var client1 = false, client2 = false, isSingle = false;
    var prev1_1 = false, prev1_2 = false, prev2_1 = false, prev2_2 = false, sec1 = false, sec2 = false;
    var currDate1 = "", currDate2 = "", flag3year1 = false, flag3year2 = false;
    //Generic function to copy data
    function copy(from, to, type, elem){
      $(elem+'[name=client_'+type+'_'+to+']').val($(elem+'[name=client_'+type+'_'+from+']').val());
    }

    function copyDateValidation(sec){
      var dtSection = "datemovedin_1_3_"+sec+"_2";
      dtSection = dtSection.split("_");
      var dateText = $('#yearmovedin_1_3_'+sec+'_1').val() +"-"+ $('#monthmovedin_1_3_'+sec+'_1').val() +"-"+ $('#datemovedin_1_3_'+sec+'_1').val();
      var dt = dateText.split("-");
      var secDate = $('#prev_add_movedout_year'+dtSection[3]+'_'+dtSection[4]).val() + "-"+ $('#prev_add_movedout_month'+dtSection[3]+'_'+dtSection[4]).val() + "-" + $('#prev_add_movedout_date'+dtSection[3]+'_'+dtSection[4]).val();
      var curDate = dt[0] + "-"+ dt[1] + "-"+ dt[2];
      var diff = "", appliedDate = ""; 
      
      if(dtSection[3] == "1"){
        if($('#client_moved_date_'+dtSection[4]).val() == ""){
          alert("Please select current residence moved in date for client "+dtSection[4]);
          return false;
        }
        appliedDate = currDate1;
      }
      else if(parseInt(dtSection[3]) > 1){
        if($('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_1_'+dtSection[4]).val() == ""){
          alert("Please select previous address 1 date for client "+dtSection[4]);
          return false;
        }
        if(dtSection[4] == "1"){
          appliedDate = currDate1;
        }
        else if(dtSection[4] == "2"){
          appliedDate = $('#client_moved_year_'+dtSection[4]).val() +"-"+ $('#client_moved_month_'+dtSection[4]).val() +"-"+ $('#client_moved_date_'+dtSection[4]).val();
        }
        
      }

      diff = diff_years(new Date(dateText), new Date(appliedDate));

      if(diff < 3){
        if(date_diff_indays(curDate, secDate) >= 1 ){
          $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]+', #prev_add_movedout_date'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val(dt[2]);
          $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]+', #prev_add_movedout_month'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val(dt[1]);
          $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]+', #prev_add_movedout_year'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val(dt[0]);

          if(dtSection[4] == "1"){
            $('#prev'+dtSection[3]+'-add-err-1').html("");
            $('#prev'+(parseInt(dtSection[3])+1)+'-add-err-1').html("Applicant 1 , your 3 year address is not completed yet. Please enter previous address "+(parseInt(dtSection[3])+1)+" history.");
            flag3year1 = false;
          }
          else if(dtSection[4] == "2"){
            $('#prev'+dtSection[3]+'-add-err-2').html("");
            $('#prev'+(parseInt(dtSection[3])+1)+'-add-err-2').html("Applicant 2 , your 3 year address is not completed yet. Please enter previous address "+(parseInt(dtSection[3])+1)+" history.");
            flag3year2 = false;
          }
        }
        else{
          alert("Your move in date is after move out date. Please input correct date");
        }
      }
      else if(diff == 3){

        if(date_diff_indays(curDate, secDate) >= 1 ){
          $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[2]);
          $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[1]);
          $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[0]);

          $('#prev_add_movedout_date'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val("");
          $('#prev_add_movedout_month'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val("");
          $('#prev_add_movedout_month'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val("");

          if(dtSection[4] == "1"){
            $('#prev'+dtSection[3]+'-add-err-1').html("");
            $('#prev'+(parseInt(dtSection[3])+1)+'-add-err-1').html("Applicant 1 , your 3 year address data is completed. Kindly move to next section 1.4");
            flag3year1 = true;
          }
          else if(dtSection[4] == "2"){
            $('#prev'+dtSection[3]+'-add-err-2').html("");
            $('#prev'+(parseInt(dtSection[3])+1)+'-add-err-2').html("Applicant 2 , your 3 year address data is completed. Kindly move to next section 1.4");
            flag3year2 = true;
          }
        }
        else{
          alert("Your move in date is after move out date. Please input correct date");
        }
      }
      else{//If moved in date more than 3
        $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[2]);
        $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[1]);
        $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[0]);

        $('#prev_add_movedout_date'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val("");
        $('#prev_add_movedout_month'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val("");
        $('#prev_add_movedout_month'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val("");
        if(dtSection[4] == "1"){
          $('#prev'+dtSection[3]+'-add-err-1').html("");
          $('#prev'+(parseInt(dtSection[3])+1)+'-add-err-1').html("Applicant 1 , your 3 year address data is completed. Kindly move to next section 1.4");
          flag3year1 = true;
        }
        else if(dtSection[4] == "2"){
          $('#prev'+dtSection[3]+'-add-err-2').html("");
          $('#prev'+(parseInt(dtSection[3])+1)+'-add-err-2').html("Applicant 2 , your 3 year address data is completed. Kindly move to next section 1.4");
          flag3year2 = true;
        }
      }

  
      if(flag3year1 && flag3year2){
        if(dtSection[3] == "1"){
          if(dtSection[4] == "1"){
            for(var i = 1; i <= prevResCount; i++){
              if(i > parseInt(dtSection[3])){
                $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                $('.hideclient_1_'+i).hide();
                $('.hideclient_copy_'+i).hide();
                $('#prev'+i+'-add-err-1').html("");
              }
            }
            c1f = true;
          }
          else if(dtSection[4] == "2"){
            for(var i = 1; i <= prevResCount; i++){
              if(i > parseInt(dtSection[3])){
                $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                $('.hideclient_2_'+i).hide();
                $('.hideclient_copy_'+i).hide();
                $('#prev'+i+'-add-err-2').html("");
              }
            }
            c2f = true;
          }
          if(c1f && c2f){
            var prCount = 0;
            $('#prevAdd2Sec').hide();
            for(var i = 1; i <= prevResCount; i++){
              if(i > parseInt(dtSection[3])){
                $('#prevAdd'+i+'Sec').remove();
                $('#prev'+(i+1)+'-add-err').remove();
                prCount++;
              }
            }
            prevResCount = prevResCount - prCount;
          }
        }
        else if(dtSection[3] != "1"){
          $('#prevAdd2Sec').show();
          var prCount = 0;
          for(var i = 1; i <= prevResCount; i++){
            if(i > parseInt(dtSection[3])){
              $('#prevAdd'+i+'Sec').remove();
              $('#prev'+(i+1)+'-add-err').remove();
              prCount++;
            }
          }
          prevResCount = prevResCount - prCount;
        }
        $('#addPrevRes').prop('disabled', true);
      }
      else if(!flag3year1 && flag3year2){
        for(var i = 1; i <= prevResCount; i++){
          if(i > parseInt(dtSection[3])){
            $('.hideclient_1_'+i).show();
            $('.hideclient_2_'+i).hide();
            $('.hideclient_copy_'+i).hide();
            if(!isSingle){
                
              $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
              $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
              $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");

              $('#prevAdd'+i+'Sec').show();

            }
          }
        }
        
        $('#addPrevRes').prop('disabled', false);
      }
      else if(flag3year1 && !flag3year2){
        for(var i = 1; i <= prevResCount; i++){
          if(i > parseInt(dtSection[3])){
            $('.hideclient_1_'+i).hide();
            $('.hideclient_2_'+i).show();
            $('.hideclient_copy_'+i).hide();

            if(!isSingle){
                
              $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
              $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
              $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");

              $('#prevAdd'+i+'Sec').show();

            }
          }
        }
        $('#addPrevRes').prop('disabled', false);
      }
      else{
        //$('#prevAdd2Sec').show();
        for(var i = 1; i <= prevResCount; i++){
          if(i > parseInt(dtSection[3])){
            $('.hideclient_1_'+i).show();
            $('.hideclient_2_'+i).show();
            $('.hideclient_copy_'+i).show();
          }
        }
        $('#addPrevRes').prop('disabled', false);
      }
      
    }

  

    //function to copy dates
    $('#copyDate').click(function(){

      if($('#client_moved_date_1').val() == "" && $('#client_moved_month_1').val() == "" && $('#client_moved_year_1').val() == ""){
        alert("Please select client 1 date");
        return false;
      }

      $('#client_moved_date_2').val($('#client_moved_date_1').val());
      $('#client_moved_month_2').val($('#client_moved_month_1').val());
      $('#client_moved_year_2').val($('#client_moved_year_1').val());

      var todayDate = new Date().toJSON().slice(0,10);
      var diff = diff_years(new Date(todayDate), new Date($('#client_moved_year_2').val()+"-"+$('#client_moved_month_2').val()+"-"+$('#client_moved_date_2').val()));
      if(diff >= 3){
        client2 = true;
        $('.hideclient_2').hide();
        $('.hideclient_copy').hide();
      }
      else{
        client2 = false;
        $('.hideclient_2').show();
        $('#prev_add_movedout_date1_2').val($('#client_moved_date_1').val());
        $('#prev_add_movedout_month1_2').val($('#client_moved_month_1').val());
        $('#prev_add_movedout_year1_2').val($('#client_moved_year_1').val()); 
      }

      if(client1 && client2){
        $('.less-3').hide();
        $('.res-add-err').html("Applicant 1 & 2 current address more than 3 years. Please fill section 1.4.");
      }
      else if(!client1 && client2){
        $('.less-3').show();
        $('.res-add-err').html("Applicant 2 current address more than 3 years. Please fill section 1.4.<br>Applicant 1 current address less than 3 years. Please enter previous address 1 history.");
      }
      else if(client1 && !client2){
        $('.less-3').show();
        $('.res-add-err').html("Applicant 1 current address more than 3 years. Please fill section 1.4.<br>Applicant 2 current address less than 3 years. Please enter previous address 1 history.");
      }
      else if(!client1 && !client2){
        $('.less-3').show();
        $('.res-add-err').html("Applicant 1 & 2 current address less than 3 years.  Please enter previous address 1 history.");
      }
    });

    $('#prevadddate1copy').click(function(){
      $('#datemovedin_1_3_1_2').val($('#datemovedin_1_3_1_1').val());
      $('#monthmovedin_1_3_1_2').val($('#monthmovedin_1_3_1_1').val());
      $('#yearmovedin_1_3_1_2').val($('#yearmovedin_1_3_1_1').val());

      $('#prev_add_movedout_date2_2').val($('#datemovedin_1_3_1_2').val());
      $('#prev_add_movedout_month2_2').val($('#monthmovedin_1_3_1_2').val());
      $('#prev_add_movedout_year2_2').val($('#yearmovedin_1_3_1_2').val()); 

      copyDateValidation(1);
    });

    $('#prevadddate2copy').click(function(){
      $('#datemovedin_1_3_2_2').val($('#datemovedin_1_3_2_1').val());
      $('#monthmovedin_1_3_2_2').val($('#monthmovedin_1_3_2_1').val());
      $('#yearmovedin_1_3_2_2').val($('#yearmovedin_1_3_2_1').val());

      $('#prev_add_movedout_date3_2').val($('#datemovedin_1_3_2_2').val());
      $('#prev_add_movedout_month3_2').val($('#monthmovedin_1_3_2_2').val());
      $('#prev_add_movedout_year3_2').val($('#yearmovedin_1_3_2_2').val());

      copyDateValidation(2);
    });

    $('input[name="client_title_1"], input[name="client_title_2"], input[name="client_marital_1"], input[name="client_marital_2"], input[name="client_relationship_1"], input[name="client_relationship_2"], input[name="client_residentialstatus_1"], input[name="client_residentialstatus_2"], input[name="client_electoralroll_1"], input[name="client_electoralroll_2"], input[name="client_rentalaccom_1"], input[name="client_rentalaccom_2"], input[name="client_healthstatus_1"], input[name="client_healthstatus_2"], input[name="client_religiousbelief_1"], input[name="client_religiousbelief_2"], input[name="client_previousResidence1_1"], input[name="client_previousResidence1_2"], input[name="client_prelectoralRoll1_1"], input[name="client_prelectoralRoll1_2"], input[name="client_previousResidence2_1"], input[name="client_previousResidence2_2"], input[name="client_prelectoralRoll2_1"], input[name="client_prelectoralRoll2_2"], input[name="client_FinanciallyDependent_1"], input[name="client_FinanciallyDependent_2"], input[name="client_FinanciallyDependent_3"], input[name="client_FinanciallyDependent_4"], input[name="client_FinanciallyDependent_5"]').on('change', function() {
        $('input[name="' + this.name + '"]').not(this).prop('checked', false);
        if($(this).prop("checked") == false || $('input[name="' + this.name + '"]').not(this).prop('checked') == false){
          $('.'+this.name).val('');
        }
        if($(this).val() != "Other"){
          $('.'+this.name).prop('disabled', true);
        }
    });

    //Function to add more children dependent

    //Check Anticipated Length

    function checkDependentAge(){
      $('.financial-dependent').click(function(){
        var fdId = $(this).attr('name');
        fdId = fdId.split('_');
        if($(this).val() == "Yes"){
          if($('#client_dependentage_'+fdId[2]).val() != ""){
            var ageDiff = 21 -parseInt($('#client_dependentage_'+fdId[2]).val());
            if(ageDiff < 0){
              $('#client_anticipitated_'+fdId[2]).val("0");
            }
            else{
              $('#client_anticipitated_'+fdId[2]).val(ageDiff);
            }
          }
        }
        else if($(this).val() == "No"){
          $('#client_anticipitated_'+fdId[2]).val("");
        }
        
      });
    }

    $('.childRemove').unbind().click(function(){
      var chId = $(this).attr('id').split('_');
      $('#child_row_'+chId[1]).remove();
    });

    checkDependentAge();

    var childCount = <?php if($pdata != NULL){echo sizeof($childSec);}else{ ?>5<?php }?>;

    function addChildrenSection(){
      childCount++;
      var addData = "";
      addData += '<tr id="child_row_'+childCount+'">';
      addData += '<td><input type="text" class="form-control" name="dependent_name_'+childCount+'" placeholder="Name of child & dependant"></td>';
      addData += '<td class=""><span><label class="form-check-label" for="">Joint</label>';
      addData += '<input class="form-check-input" type="checkbox" name="dependent_upon_'+childCount+'[]" value="Joint" id=""></span>';        
      addData += '<span><label class="form-check-label" for="">CL1</label><input class="form-check-input" type="checkbox" name="dependent_upon_'+childCount+'[]" value="CL1" id=""></span>';

      addData += '<span><label class="form-check-label" for="">CL2</label>';
      addData += '<input class="form-check-input" type="checkbox" name="dependent_upon_'+childCount+'[]" value="CL2" id=""></span>';
      
      addData += '</td><td><input type="text" class="form-control" id="client_dependentage_'+childCount+'" name="client_dependentage_'+childCount+'" placeholder="Type age here"></td>';
      addData += '<td><input type="text" class="form-control" name="relationship_'+childCount+'" placeholder="Type relationship here"></td>';
      addData += '<td class="text-center"><span><label class="form-check-label" for="">Y</label>';
      addData += '<input class="form-check-input financial-dependent" type="checkbox" name="client_FinanciallyDependent_'+childCount+'" value="Yes" id=""></span>';
      addData += '<span><label class="form-check-label" for="">N</label>';
      addData += '<input class="form-check-input financial-dependent" type="checkbox" name="client_FinanciallyDependent_'+childCount+'" value="No" id="">';          
      addData += '</span></td><td><input id="client_anticipitated_'+childCount+'" type="text" name="client_anticipitated_'+childCount+'" class="form-control"><div id="childrem_'+childCount+'" class="close-btn childRemove" style="right:45px; margin-top:-25px;"><i class="fas fa-times-circle fa-lg"></i></div></td>';
      addData += '</tr>';   
      
      $('#child_dependent').append(addData);

      $('input[name="client_FinanciallyDependent_'+childCount+'"]').on('change', function() {
          $('input[name="' + this.name + '"]').not(this).prop('checked', false);
      });

      checkDependentAge();

      $('.childRemove').unbind().click(function(){
        var chId = $(this).attr('id').split('_');
        $('#child_row_'+chId[1]).remove();
      });


    }

    //Function to get the difference between two dates in days
    var date_diff_indays = function(date1, date2) {
      dt1 = new Date(date1);
      dt2 = new Date(date2);
      return Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate()) ) /(1000 * 60 * 60 * 24));
    }


    //Function to get the difference between two dates in years
    function diff_years(dt2, dt1) 
    {

      var diff =(dt2.getTime() - dt1.getTime()) / 1000;
      diff /= (60 * 60 * 24);
      return Math.abs(diff/365.25);
      
    }

    $('#nationality_main_1').on('change', function() {
        if($(this).prop('checked')){
          $('#nationality_other_1').prop('checked', false);
          $('#nationality_1').prop('disabled', true);
          $('#nationality_1').val("");
        }
    });

    $('#nationality_main_2').on('change', function() {
        if($(this).prop('checked')){
          $('#nationality_other_2').prop('checked', false);
          $('#nationality_2').prop('disabled', true);
          $('#nationality_2').val("");
        }
    });

    $('#country_main_1').on('change', function() {
        if($(this).prop('checked')){
          $('#country_other_1').prop('checked', false);
          $('#country_1').prop('disabled', true);
          $('#country_1').val("");
        }
    });

    $('#country_main_2').on('change', function() {
        if($(this).prop('checked')){
          $('#country_other_2').prop('checked', false);
          $('#country_2').prop('disabled', true);
          $('#country_2').val("");
        }
    });

    $('#nationality_other_1').on('change', function() {
        if($(this).prop('checked')){
          $('#nationality_main_1').prop('checked', false);
          $('#nationality_1').prop('disabled', false);
        }
        else{
          $('#nationality_1').prop('disabled', true);
        }
    });

    $('#nationality_other_2').on('change', function() {
        if($(this).prop('checked')){
          $('#nationality_main_2').prop('checked', false);
          $('#nationality_2').prop('disabled', false);
        }
        else{
          $('#nationality_2').prop('disabled', true);
        }
    });

    $('#country_other_1').on('change', function() {
        if($(this).prop('checked')){
          $('#country_main_1').prop('checked', false);
          $('#country_1').prop('disabled', false);
        }
        else{
          $('#country_1').prop('disabled', true);
        }
    });

    $('#country_other_2').on('change', function() {
        if($(this).prop('checked')){
          $('#country_main_2').prop('checked', false);
          $('#country_2').prop('disabled', false);
        }
        else{
          $('#country_2').prop('disabled', true);
        }
    });

    $('#previousResidence1_1, #previousResidence1_2, #previousResidence2_1, #previousResidence2_2').change(function(){
      var ocId = $(this).attr('id');
      ocId = ocId.split('_');

      var ocMiddle = ocId[0];
      ocMiddle = ocMiddle.split("");

      if($(this).prop('checked')){
        $('#occst_previousResidence'+ocMiddle[17]+'_'+ocId[1]).prop('disabled', false);
      }
      else{
        $('#occst_previousResidence'+ocMiddle[17]+'_'+ocId[1]).prop('disabled', true);
      }

    });
    var prevResCount = <?php if($pdata != NULL){echo sizeof($prevAdd);}else{ ?>2 <?php }?>, errordiv = <?php if($pdata != NULL){echo sizeof($prevAdd);}else{ ?>2 <?php }?>; //Initial count of sections
    <?php if(!$ftype){ ?>
    isSingle = true;
    <?php } ?>
    var c1f = false, c2f = false;

    $('.prev-add-close').unbind().click(function(){
      
      var addId = $(this).attr('id').split('_');
      $('#prevAdd'+addId[1]+'Sec').remove();
      $(this).remove();
      $('#prev'+(parseInt(addId[1])+1)+'-add-err').remove();
      prevResCount--;
    });
    
    //To hide/unhide sec 1.3 client1
    $( "#calendar_1_2_1" ).datepicker({
      showOn: "button",
      buttonImage: "<?php echo base_url(); ?>assets/img/calendar.gif",
      buttonImageOnly: true,
      changeMonth: true,
      changeYear: true,
      dateFormat: "yy-mm-dd",
      maxDate: new Date(),
      yearRange: "-60:+0",
      onSelect: function(dateText, inst) {
        var dt = dateText.split("-");
        $('#client_moved_date_1').val(dt[2]);
        $('#client_moved_month_1').val(dt[1]);
        $('#client_moved_year_1').val(dt[0]);

        var todayDate = new Date().toJSON().slice(0,10);
        var diff = diff_years(new Date(todayDate), new Date(dateText));
        console.log(diff);
        if(diff >= 3){
          client1 = true;
          if(isSingle){
              var prCount = 0;
              for(var i=1;i<=prevResCount;i++){
                  $('#datemovedin_1_3_'+i+'_1').val("");
                  $('#monthmovedin_1_3_'+i+'_1').val("");
                  $('#yearmovedin_1_3_'+i+'_1').val("");

                  $('#prev'+(i+1)+'-add-err-1').html("");
                  
                  if(i > 2){
                      prCount++;
                      $('#prevAdd'+i+'Sec').remove();
                      $('#prev'+i+'-add-err').remove();
                  }
                  else{
                      $('#prevAdd'+i+'Sec').hide();
                  }
              }
              prevResCount =  prevResCount - prCount;
              errordiv = prevResCount;
            $('.hideclient_1').hide();
            $('.hideclient_copy').hide();
            $('.less-3').hide();
            $('#addPrevRes').prop('disabled', true);
          }
          else{
            $('.hideclient_1').hide();
            $('.hideclient_copy').hide();
            flag3year1 = true;
            c1f = true;
            if(flag3year1 && flag3year2){
              for(var i=1;i<=prevResCount;i++){
                $('#prevAdd'+i+'Sec').hide();
              }
            }

          }
        }
        else{
          client1 = false;
          if(isSingle){
            for(var i=1;i<=prevResCount;i++){
                $('#datemovedin_1_3_'+i+'_1').val("");
                $('#monthmovedin_1_3_'+i+'_1').val("");
                $('#yearmovedin_1_3_'+i+'_1').val("");

              if(i > 1){
                $('#prev_add_movedout_date'+i+'_1').val("");
                $('#prev_add_movedout_month'+i+'_1').val("");
                $('#prev_add_movedout_year'+i+'_1').val("");
              }
                
                
                $('#prevAdd'+i+'Sec').show();
                $('.less-3').show();
                $('#addPrevRes').prop('disabled', true);
            }
          }
          $('.hideclient_1').show();
          $('#prev_add_movedout_date1_1').val(dt[2]);
          $('#prev_add_movedout_month1_1').val(dt[1]);
          $('#prev_add_movedout_year1_1').val(dt[0]);
          currDate1 = dt[0] + "-"+ dt[1] + "-"+ dt[2];
          flag3year1 = false;
          c2f = true;
          if(!isSingle){
            for(var i=1;i<=prevResCount;i++){
              $('#prevAdd'+i+'Sec').show();
            }
          }
        }

        if(client1 && client2){
          $('.res-add-err').html("Applicant 1 & 2 current address more than 3 years. Please fill section 1.4.");
        }
        else if(!client1 && client2){
          $('.res-add-err').html("Applicant 2 current address more than 3 years. Please fill client 1 section.");
        }
        else if(client1 && !client2){
          if(isSingle){
            $('.res-add-err').html("Applicant 1 current address more than 3 years. Please fill section 1.4.");
          }
          else{
            $('.res-add-err').html("Applicant 1 current address more than 3 years. Please fill client 2 section.");
          } 
        }
        else if(!client1 && !client2){
          if(isSingle){
            $('.res-add-err').html("Applicant 1 current address less than 3 years. Please enter previous address 1 history.");
          }
          else{
            $('.res-add-err').html("Applicant 1 & 2 current address less than 3 years.  Please enter previous address 1 history.");
          }
          
        }
      }
    });

    //To client2
    $( "#calendar_1_2_2" ).datepicker({
      showOn: "button",
      buttonImage: "<?php echo base_url(); ?>assets/img/calendar.gif",
      buttonImageOnly: true,
      changeMonth: true,
      changeYear: true,
      dateFormat: "yy-mm-dd",
      maxDate: new Date(),
      yearRange: "-60:+0",
      onSelect: function(dateText, inst) {
        var dt = dateText.split("-");
        $('#client_moved_date_2').val(dt[2]);
        $('#client_moved_month_2').val(dt[1]);
        $('#client_moved_year_2').val(dt[0]);

       

        var todayDate = new Date().toJSON().slice(0,10);
        var diff = diff_years(new Date(todayDate), new Date(dateText));
        if(diff >= 3){
          client2 = true;
          $('.hideclient_2').hide();
          $('.hideclient_copy').hide();
          flag3year2 = true;
        }
        else{
          client2 = false;
          $('.hideclient_2').show();
          $('#prev_add_movedout_date1_2').val(dt[2]);
          $('#prev_add_movedout_month1_2').val(dt[1]);
          $('#prev_add_movedout_year1_2').val(dt[0]);
          currDate2 = dt[0] + "-"+ dt[1] + "-"+ dt[2];
          flag3year2 = false;
        }

        if(client1 && client2){
          $('.less-3').hide();
          $('.res-add-err').html("Applicant 1 & 2 current address more than 3 years. Please fill section 1.4.");
        }
        else if(!client1 && client2){
          $('.less-3').show();
          $('.res-add-err').html("Applicant 2 current address more than 3 years. Please fill section 1.4.<br>Applicant 1 current address less than 3 years. Please enter previous address 1 history.");
        }
        else if(client1 && !client2){
          $('.less-3').show();
          $('.res-add-err').html("Applicant 1 current address more than 3 years. Please fill section 1.4.<br>Applicant 2 current address less than 3 years. Please enter previous address 1 history.");
        }
        else if(!client1 && !client2){
          $('.less-3').show();
          $('.res-add-err').html("Applicant 1 & 2 current address less than 3 years.  Please enter previous address 1 history.");
        }
      }
    });

    //To select DOB
    $( "#calendar_1_1_1, #calendar_1_1_2" ).datepicker({
      showOn: "button",
      buttonImage: "<?php echo base_url(); ?>assets/img/calendar.gif",
      buttonImageOnly: true,
      changeMonth: true,
      changeYear: true,
      dateFormat: "yy-mm-dd",
      yearRange: "-60:+7",
      onSelect: function(dateText, inst) {
        var todayDate = new Date().toJSON().slice(0,10);
        var diff = diff_years(new Date(todayDate), new Date(dateText));
        if(diff < 18){
          alert('Age should not be less than 18');
        }
        else{
          var dtSection = $(this).attr('id');
          dtSection = dtSection.split("_");

          var dt = dateText.split("-");
          $('#date_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]).val(dt[2]);
          $('#month_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]).val(dt[1]);
          $('#year_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]).val(dt[0]);
        }  
      }
    });

    //To add a new previous residence
    
    //To select previous residence moved in date
    $( "#calendar_1_3_1_1, #calendar_1_3_1_2, #calendar_1_3_2_1, #calendar_1_3_2_2" ).datepicker({
      showOn: "button",
      buttonImage: "<?php echo base_url(); ?>assets/img/calendar.gif",
      buttonImageOnly: true,
      changeMonth: true,
      changeYear: true,
      dateFormat: "yy-mm-dd",
      yearRange: "-60:+0",
      onSelect: function(dateText, inst) {
        var dtSection = $(this).attr('id');
        dtSection = dtSection.split("_");

        var dt = dateText.split("-");
        var secDate = $('#prev_add_movedout_year'+dtSection[3]+'_'+dtSection[4]).val() + "-"+ $('#prev_add_movedout_month'+dtSection[3]+'_'+dtSection[4]).val() + "-" + $('#prev_add_movedout_date'+dtSection[3]+'_'+dtSection[4]).val();
        var curDate = dt[0] + "-"+ dt[1] + "-"+ dt[2];
        var diff = "", appliedDate = ""; 
        
        if(dtSection[3] == "1"){
          if($('#client_moved_date_'+dtSection[4]).val() == ""){
            alert("Please select current residence moved in date for client "+dtSection[4]);
            return false;
          }
          if(dtSection[4] == "1"){
            appliedDate = currDate1;
          }
          else if(dtSection[4] == "2"){
            appliedDate = currDate2;
          }
        }
        else if(dtSection[3] == "2"){
          if($('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_1_'+dtSection[4]).val() == ""){
            alert("Please select previous address 1 date for client "+dtSection[4]);
            return false;
          }
          if(dtSection[4] == "1"){
            appliedDate = currDate1;
          }
          else if(dtSection[4] == "2"){
            appliedDate = currDate2;
          }
          
        }

        diff = diff_years(new Date(dateText), new Date(appliedDate));

        if(diff < 3){
          if(date_diff_indays(curDate, secDate) >= 1 ){
            $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]+', #prev_add_movedout_date'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val(dt[2]);
            $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]+', #prev_add_movedout_month'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val(dt[1]);
            $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]+', #prev_add_movedout_year'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val(dt[0]);

            if(dtSection[4] == "1"){//Client 1
              $('#prev'+dtSection[3]+'-add-err-1').html("");
              $('#prev'+(parseInt(dtSection[3])+1)+'-add-err-1').html("Applicant 1 , your 3 year address is not completed yet. Please enter previous address "+(parseInt(dtSection[3])+1)+" history.");
              flag3year1 = false;

              if(isSingle){
                var prCount = 0;
                //Unsetting prev address 2 datevalues
                for(var i = 1; i <= prevResCount; i++){
                  if(dtSection[3] == "1"){
                    if(i > 1){
                      $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                      $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                      $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                      $('#prev'+(i+1)+'-add-err-1').html("");
                      $('#prevAdd'+i+'Sec').show();
                    }

                    if(i > 2){
                      $('#prevAdd'+i+'Sec').remove();
                      $('#prev'+(i+1)+'-add-err').remove();
                      prCount++; //Maintaining count of added tables
                    }
                  }
                  else if(parseInt(dtSection[3]) == 2){
                    if(i > 2){
                      $('#prevAdd'+i+'Sec').remove();
                      $('#prev'+(i+1)+'-add-err').remove();
                      prCount++; //Maintaining count of added tables
                    }
                  }
                }
                prevResCount = prevResCount - prCount;
                errordiv = prevResCount;
              }
              else{
                // for(var i = 1; i <= prevResCount; i++){
                //   if(i > 1){

                //     $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                //     $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                //     $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                //     $('#prev'+(i+1)+'-add-err-1').html("");
                //     $('#prevAdd'+i+'Sec').show();
                    
                //   } 
                // }
              }
              
            }
            else if(dtSection[4] == "2"){//Client 2
              $('#prev'+dtSection[3]+'-add-err-2').html("");
              $('#prev'+(parseInt(dtSection[3])+1)+'-add-err-2').html("Applicant 2 , your 3 year address is not completed yet. Please enter previous address "+(parseInt(dtSection[3])+1)+" history.");
              flag3year2 = false;
            }
          }
          else{
            alert("Your move in date is after move out date. Please input correct date");
          }
        }
        else if(diff == 3){

          if(date_diff_indays(curDate, secDate) >= 1 ){
            $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[2]);
            $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[1]);
            $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[0]);

            $('#prev_add_movedout_date'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val("");
            $('#prev_add_movedout_month'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val("");
            $('#prev_add_movedout_year'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val("");

            if(dtSection[4] == "1"){
              $('#prev'+dtSection[3]+'-add-err-1').html("");
              $('#prev'+(parseInt(dtSection[3])+1)+'-add-err-1').html("Applicant 1 , your 3 year address data is completed. Kindly move to next section 1.4");
              flag3year1 = true;

              if(isSingle){
                var prCount = 0;
                //Unsetting prev address 2 datevalues
                console.log(prevResCount);
                for(var i = 1; i <= prevResCount; i++){
                  if(dtSection[3] == "1"){
                    if(i > 1){
                      $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                      $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                      $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                      $('#prev'+(i+1)+'-add-err-1').html("");
                      $('#prevAdd'+i+'Sec').hide();
                    }

                    if(i > 2){
                      $('#prevAdd'+i+'Sec').remove();
                      $('#prev'+(i+1)+'-add-err').remove();
                      prCount++; //Maintaining count of added tables
                    }
                  }
                  else if(parseInt(dtSection[3]) == 2){
                    if(i > 2){
                      $('#prevAdd'+i+'Sec').remove();
                      $('#prev'+(i+1)+'-add-err').remove();
                      prCount++; //Maintaining count of added tables
                    }
                  }
                }
                prevResCount = prevResCount - prCount;
                errordiv = prevResCount;
              }
            }
            else if(dtSection[4] == "2"){
              $('#prev'+dtSection[3]+'-add-err-2').html("");
              $('#prev'+(parseInt(dtSection[3])+1)+'-add-err-2').html("Applicant 2 , your 3 year address data is completed. Kindly move to next section 1.4");
              flag3year2 = true;
            }
          }
          else{
            alert("Your move in date is after move out date. Please input correct date");
          }
        }
        else{//If moved in date more than 3
          $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[2]);
          $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[1]);
          $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[0]);

          $('#prev_add_movedout_date'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val("");
          $('#prev_add_movedout_month'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val("");
          $('#prev_add_movedout_month'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val("");
          if(dtSection[4] == "1"){
            $('#prev'+dtSection[3]+'-add-err-1').html("");
            $('#prev'+(parseInt(dtSection[3])+1)+'-add-err-1').html("Applicant 1 , your 3 year address data is completed. Kindly move to next section 1.4");
            flag3year1 = true;
            var prCount = 0;
            if(isSingle){
              //Unsetting prev address 2 datevalues
              console.log(prevResCount);
              for(var i = 1; i <= prevResCount; i++){
                if(dtSection[3] == "1"){
                  if(i > 1){
                    $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                    $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                    $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                    $('#prev'+(i+1)+'-add-err-1').html("");
                    $('#prevAdd'+i+'Sec').hide();
                  }

                  if(i > 2){
                    $('#prevAdd'+i+'Sec').remove();
                    $('#prev'+(i+1)+'-add-err').remove();
                    prCount++; //Maintaining count of added tables
                  }
                }
                else if(parseInt(dtSection[3]) == 2){
                  if(i > 2){
                    $('#prevAdd'+i+'Sec').remove();
                    $('#prev'+(i+1)+'-add-err').remove();
                    prCount++; //Maintaining count of added tables
                  }
                }
              }
              prevResCount = prevResCount - prCount;
              console.log(prevResCount);
            }
          }
          else if(dtSection[4] == "2"){
            $('#prev'+dtSection[3]+'-add-err-2').html("");
            $('#prev'+(parseInt(dtSection[3])+1)+'-add-err-2').html("Applicant 2 , your 3 year address data is completed. Kindly move to next section 1.4");
            flag3year2 = true;
          }
        }
        
        if(isSingle){
          if(flag3year1){
            $('#addPrevRes').prop('disabled', true);
          }
          else if(!flag3year1 && (dtSection[3] == "1")){
            $('#addPrevRes').prop('disabled', true);
          }
          else if(!flag3year1 && (dtSection[3] == "2")){
            $('#addPrevRes').prop('disabled', false);
          }
        }
        else{
          if(flag3year1 && flag3year2){
            if(dtSection[3] == "1"){
              if(dtSection[4] == "1"){
                for(var i = 1; i <= prevResCount; i++){
                  if(i > 1){
                    $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                    $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                    $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                    $('.hideclient_1_'+i).hide();
                    $('.hideclient_copy_'+i).hide();
                    $('#prev'+(i+1)+'-add-err-1').html("");
                  }
                }
                c1f = true;
              }
              else if(dtSection[4] == "2"){
                for(var i = 1; i <= prevResCount; i++){
                  if(i > 1){
                    $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                    $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                    $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                    $('.hideclient_2_'+i).hide();
                    $('.hideclient_copy_'+i).hide();
                    $('#prev'+(i+1)+'-add-err-2').html("");
                  }
                }
                c2f = true;
              }
              if(c1f && c2f){
                var prCount = 0;
                $('#prevAdd2Sec').hide();
                for(var i = 1; i <= prevResCount; i++){
                  if(i > 2){
                    $('#prevAdd'+i+'Sec').remove();
                    $('#prev'+(i+1)+'-add-err').remove();
                    prCount++;
                  }
                }
                prevResCount = prevResCount - prCount;
              }
            }
            else if(dtSection[3] != "1"){
              $('#prevAdd2Sec').show();
              var prCount = 0;
              for(var i = 1; i <= prevResCount; i++){
                if(i > 2){
                  $('#prevAdd'+i+'Sec').remove();
                  $('#prev'+(i+1)+'-add-err').remove();
                  prCount++;
                }
              }
              prevResCount = prevResCount - prCount;
            }
            $('#addPrevRes').prop('disabled', true);
          }
          else if(!flag3year1 && flag3year2){
            for(var i = 1; i <= prevResCount; i++){
              if(i > parseInt(dtSection[3])){
                $('.hideclient_1_'+i).show();
                $('.hideclient_2_'+i).hide();
                $('.hideclient_copy_'+i).hide();
                if(!isSingle){
                    
                  $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                  $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                  $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");

                  $('#prevAdd'+i+'Sec').show();
   
                }
              }
            }
            
            $('#addPrevRes').prop('disabled', false);
          }
          else if(flag3year1 && !flag3year2){
            for(var i = 1; i <= prevResCount; i++){
              if(i > parseInt(dtSection[3])){
                $('.hideclient_1_'+i).hide();
                $('.hideclient_2_'+i).show();
                $('.hideclient_copy_'+i).hide();

                if(!isSingle){
                    
                  $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                  $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                  $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");

                  $('#prevAdd'+i+'Sec').show();
    
                }
              }
            }
            $('#addPrevRes').prop('disabled', false);
          }
          else{
            //$('#prevAdd2Sec').show();
            for(var i = 1; i <= prevResCount; i++){
              if(prevResCount > parseInt(dtSection[3])){
                $('.hideclient_1_'+i).show();
                $('.hideclient_2_'+i).show();
                $('.hideclient_copy_'+i).show();
              }
            }
            $('#addPrevRes').prop('disabled', false);
          }
        }
        
      }
    });

    //To enable/disable preferred contact
    $('#checkContact_1_1_1, #checkContact_1_1_2').on('change', function() {
      var pcmId = $(this).attr('id');
      pcmId = pcmId.split('_');
      if($(this).prop('checked')){
        $('#contact_'+pcmId[1]+'_'+pcmId[2]+'_'+pcmId[3]).prop('disabled', false);
      }
      else{
        $('#contact_'+pcmId[1]+'_'+pcmId[2]+'_'+pcmId[3]).prop('disabled', true);
        $('#contact_'+pcmId[1]+'_'+pcmId[2]+'_'+pcmId[3]).val('');
      }
    });

    $('#checkRelation_1_1_1, #checkRelation_1_1_2').on('change', function() {
      var pcmId = $(this).attr('id');
      pcmId = pcmId.split('_');
      if($(this).prop('checked')){
        $('#relation_'+pcmId[1]+'_'+pcmId[2]+'_'+pcmId[3]).prop('disabled', false);
      }
      else{
        $('#relation_'+pcmId[1]+'_'+pcmId[2]+'_'+pcmId[3]).prop('disabled', true);
      }
    });

    $('#checkTitle_1_1_1, #checkTitle_1_1_2').on('change', function() {
      var pcmId = $(this).attr('id');
      pcmId = pcmId.split('_');
      if($(this).prop('checked')){
        $('#title_'+pcmId[1]+'_'+pcmId[2]+'_'+pcmId[3]).prop('disabled', false);
      }
      else{
        $('#title_'+pcmId[1]+'_'+pcmId[2]+'_'+pcmId[3]).prop('disabled', true);
      }
    });

    //To enable/disable residential address
    $('#checkcrs_1_2_1, #checkcrs_1_2_2').on('change', function() {
      var rsId = $(this).attr('id');
      rsId = rsId.split('_');
      if($(this).prop('checked')){
        $('#crs_'+rsId[1]+'_'+rsId[2]+'_'+rsId[3]).prop('disabled', false);
      }
      else{
        $('#crs_'+rsId[1]+'_'+rsId[2]+'_'+rsId[3]).prop('disabled', true);
      }
    });


      

      $('#addPrevRes').click(function(){

        if(errordiv < 5){
          errordiv++;
        }
        if(prevResCount < 4){
          prevResCount++;
          var newSec = "";
          newSec += '<div id="prevAddrem_'+prevResCount+'" class="close-btn prev-add-close" style="margin-top:-5px; right:25px;"><i class="fas fa-times-circle fa-2x"></i></div><table id="prevAdd'+prevResCount+'Sec" class="table marTP-30 less-3"><thead class=""><tr><th scope="col" style="border:0px;background-color:transparent;"></th>';
          newSec += '<th scope="col" class="hideclient_1 hideclient_1_'+prevResCount+'">Client 1</th><th scope="col" class="hide-col hideclient_2 hideclient_2_'+prevResCount+'">Client 2</th></tr></thead>';
          newSec += '<tbody class="table-bordered"><tr class="hide-col hideclient_copy"><td colspan="3"><div class="text-right">';
          newSec += '<button type="button" id="addCopy_'+prevResCount+'" class="btn btn-primary btn-copy">Copy Here</button><br/>';
          newSec += '<p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;">*You can copy same previous address on client 2 column.</p></div></td></tr>';
          newSec += '<tr><td style="padding: 2em 0.85em;line-height: 1.85em;">Previous Address '+prevResCount+'</td><td class="hideclient_1 hideclient_1_'+prevResCount+'">';

          //Textbox for address
          newSec += '<textarea class="form-control" id="client_prevaddress'+prevResCount+'_1" name="client_prevaddress'+prevResCount+'_1" rows="4" placeholder="Type your previous address 2 here"></textarea></td>';
          newSec += '<td class="hide-col hideclient_2 hideclient_2_'+prevResCount+'"><textarea class="form-control" id="client_prevaddress'+prevResCount+'_2" name="client_prevaddress'+prevResCount+'_2" rows="4" placeholder="Type your previous address 2 here"></textarea></td></tr>';

          //Copy Code
          //newSec += '<tr class="hide-col"><td colspan="3"><div class="text-right">';
          //newSec += '<a class="btn btn-primary btn-copy " href="#" role="button">Copy Here</a><br/>';
          //newSec += '<p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;">*You can copy same postcode on client 2 column.</p></div></td></tr>';    
          newSec += '<tr class="hide-col hideclient_copy hideclient_copy_2"><td colspan="3"><div class="text-right">';
          newSec += '<button type="button" class="btn btn-primary btn-copy">Copy Here';
          newSec += '</button><br/>';
          newSec += '<p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;">';
          newSec += '*You can copy same postcode on client 2 column.</p></div></td></tr>';

          //Postcode Section
          newSec += '<tr><td>Postcode</td><td class="hideclient_1 hideclient_1_'+prevResCount+'"><input type="text" class="form-control" name="client_prevpostcode'+prevResCount+'_1" placeholder="Postcode" style="text-transform: uppercase;"></td>';
          newSec += '<td class="hide-col hideclient_2 hideclient_2_'+prevResCount+'"><input type="text" class="form-control" name="client_prevpostcode'+prevResCount+'_2" placeholder="Postcode" style="text-transform: uppercase;"></td>';
          newSec += '</tr>';

          //Copy Code
          newSec += '<tr class="hide-col"><td colspan="3"><div class="text-right">';
          newSec += '<button type="button" id="prevadddate'+prevResCount+'copy" class="btn btn-primary btn-copy">Copy Here</button><br/>';
          newSec += '<p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;">*You can copy same move-in date on client 2 column.</p></div></td></tr>';

          //Date Moved in
          newSec += '<tr><td>Date Moved In</td><td class="text-center hideclient_1 hideclient_1_'+prevResCount+'">';
          newSec += '<input disabled type="text" id="datemovedin_1_3_'+prevResCount+'_1" class="form-control col-lg-3 date-input-box" placeholder="Date"> /';
          newSec += '<input disabled type="text" id="monthmovedin_1_3_'+prevResCount+'_1" class="form-control col-lg-3 date-input-box" placeholder="Month"> /';
          newSec += '<input disabled type="text" id="yearmovedin_1_3_'+prevResCount+'_1" class="form-control col-lg-3 date-input-box" placeholder="Year">';
          newSec += '<input type="hidden" id="calendar_1_3_'+prevResCount+'_1" />';
          newSec += '</td><td class="hide-col text-center hideclient_2 hideclient_2_'+prevResCount+'">';
          newSec += '<input disabled type="text" id="datemovedin_1_3_'+prevResCount+'_2" class="form-control col-lg-3 date-input-box" placeholder="Date"> /';
          newSec += '<input disabled type="text" id="monthmovedin_1_3_'+prevResCount+'_2" class="form-control col-lg-3 date-input-box" placeholder="Month"> /';
          newSec += '<input disabled type="text" id="yearmovedin_1_3_'+prevResCount+'_2" class="form-control col-lg-3 date-input-box" placeholder="Year">';
          newSec += '<input type="hidden" id="calendar_1_3_'+prevResCount+'_2" /></td></tr>';

          //Date Moved Out
          newSec += '<tr><td>Date Moved Out</td><td class="text-center hideclient_1 hideclient_1_'+prevResCount+'">';
          newSec += '<input type="text" id="prev_add_movedout_date'+prevResCount+'_1" class="form-control col-lg-3 date-input-box" placeholder="Date"> /';
          newSec += '<input type="text" id="prev_add_movedout_month'+prevResCount+'_1" class="form-control col-lg-3 date-input-box" placeholder="Month"> /';
          newSec += '<input type="text" id="prev_add_movedout_year'+prevResCount+'_1" class="form-control col-lg-3 date-input-box" placeholder="Year"></td>';
          newSec += '<td class="hide-col text-center hideclient_2 hideclient_2_'+prevResCount+'">';
          newSec += '<input type="text" id="prev_add_movedout_date'+prevResCount+'_2" class="form-control col-lg-3 date-input-box" placeholder="Date"> /';
          newSec += '<input type="text" id="prev_add_movedout_month'+prevResCount+'_2" class="form-control col-lg-3 date-input-box" placeholder="Month"> /';
          newSec += '<input type="text" id="prev_add_movedout_year'+prevResCount+'_2" class="form-control col-lg-3 date-input-box" placeholder="Year">';
          newSec += '</td></tr>';

          //Occupancy Status
          newSec += '<tr><td>Occupancy Status</td><td class="hideclient_1 hideclient_1_'+prevResCount+'"><div class="form-check">';
          newSec += '<label class="ver-check-label" for="contactCheck1">Owner</label>';
          newSec += '<input type="checkbox" class="ver-check-input" name="client_previousResidence'+prevResCount+'_1" value="Owner" id="">';
          newSec += '</div>';

          //Tenant
          newSec += '<div class="form-check"><label class="ver-check-label" for="contactCheck2">Tenant</label>';
          newSec += '<input type="checkbox" class="ver-check-input" name="client_previousResidence'+prevResCount+'_1" value="Tenant" id=""></div>';

          //Living with Parents
          newSec += '<div class="form-check"><label class="ver-check-label" for="contactCheck3">Living With Parents</label>';
          newSec += '<input type="checkbox" class="ver-check-input" name="client_previousResidence'+prevResCount+'_1" value="Living With Parents" id=""></div>';

          //Other
          newSec += '<div><label style="margin: 0px;" class="ver-check-label" for="">Other:</label>';
          newSec += '<input disabled name="client_otherpreviousresidence'+prevResCount+'_1" type="text" class="form-control col-md-10 date-input-box" id="occst_previousResidence'+prevResCount+'_1" placeholder="other status">';
          newSec += '<input type="checkbox" style="margin-left: 0.20rem;" value="Other" name="client_previousResidence'+prevResCount+'_1" class="ver-check-input" id=""></div></td>';

          //Occupancy client 2
          newSec += '<td class="hide-col hideclient_2 hideclient_2_'+prevResCount+'"><div class="form-check"><label class="ver-check-label" for="contactCheck1">Owner</label>';
          newSec += '<input type="checkbox" class="ver-check-input" name="client_previousResidence'+prevResCount+'_2" value="Owner" id=""></div>';

          //Tenant client 2
          newSec += '<div class="form-check"><label class="ver-check-label" for="contactCheck2">Tenant</label>';
          newSec += '<input type="checkbox" class="ver-check-input" name="client_previousResidence'+prevResCount+'_2" value="Tenant" id=""></div>';

          //Living with parents client 2
          newSec += '<div class="form-check"><label class="ver-check-label" for="contactCheck3">Living With Parents</label>';
          newSec += '<input type="checkbox" class="ver-check-input" name="client_previousResidence'+prevResCount+'_2" value="Living With Parents" id=""></div>';

          //Other client 2
          newSec += '<div><label style="margin: 0px;" class="ver-check-label" for="">Other:</label>';
          newSec += '<input disabled name="client_otherpreviousresidence'+prevResCount+'_2" type="text" class="form-control col-md-10 date-input-box" id="occst_previousResidence'+prevResCount+'_2" placeholder="other status">';
          newSec += '<input type="checkbox" style="margin-left: 0.20rem;" value="Other" name="client_previousResidence'+prevResCount+'_2" class="ver-check-input" id="">';
          newSec += '</div></td></tr>';

          //On Electoral Roll
          newSec += '<tr><td>On Electoral Roll</td><td class="text-center hideclient_1 hideclient_1_'+prevResCount+'"><center>';
          newSec += '<div class="col-md-2 date-input-box" style="padding: 0;">';
          newSec += '<label class="form-check-label" for="">Yes</label>';
          newSec += '<input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="client_prelectoralRoll'+prevResCount+'_1" value="Yes" id=""></div>';

          newSec += '<div class="col-md-2 date-input-box" style="padding: 0;"><label class="form-check-label" for="">No</label>';
          newSec += '<input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="client_prelectoralRoll'+prevResCount+'_1" value="No" id=""></div></center></td>';

          newSec += '<td class="hide-col text-center hideclient_2 hideclient_2_'+prevResCount+'"><center><div class="col-md-2 date-input-box" style="padding: 0;">';
          newSec += '<label class="form-check-label" for="">Yes</label>';
          newSec += '<input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="client_prelectoralRoll'+prevResCount+'_2" value="Yes" id=""></div>';

          newSec += '<div class="col-md-2 date-input-box" style="padding: 0;">';
          newSec += '<label class="form-check-label" for="">No</label>';
          newSec += '<input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="client_prelectoralRoll'+prevResCount+'_2" value="No" id="">';
          newSec += '</div></center></td></tr></tbody></table><div id="prev'+(errordiv+1)+'-add-err" class="prev-add-err"><div id="prev'+(errordiv+1)+'-add-err-1" class=""></div><div id="prev'+(errordiv+1)+'-add-err-2" class=""></div></div>';

          $(newSec).insertBefore('#addMorePrevRes');

          //To hide clients if the above section is hidden
          if(flag3year1){
            $(".hideclient_1_"+prevResCount).hide();
          }
          
          $('.prev-add-close').unbind().click(function(){
            var addId = $(this).attr('id').split('_');
            console.log('Clicked: prevAdd'+addId[1]+'Sec');
            $('#prevAdd'+addId[1]+'Sec').remove();
            $(this).remove();
            $('#prev'+(parseInt(addId[1])+1)+'-add-err').remove();
            prevResCount--;
          });

          if(flag3year2){
            $(".hideclient_2_"+prevResCount).hide();
          }

          //Setting Moved out Dates 1
          if($('#datemovedin_1_3_'+(prevResCount-1)+'_1').val() == ""){

          }
          else if($('#datemovedin_1_3_'+(prevResCount-1)+'_1').val() != ""){
            $('#prev_add_movedout_date'+prevResCount+'_1').val($('#datemovedin_1_3_'+(prevResCount-1)+'_1').val());
            $('#prev_add_movedout_month'+prevResCount+'_1').val($('#monthmovedin_1_3_'+(prevResCount-1)+'_1').val());
            $('#prev_add_movedout_year'+prevResCount+'_1').val($('#yearmovedin_1_3_'+(prevResCount-1)+'_1').val());
          }
          

          //Setting Moved out Dates 2
          if($('#datemovedin_1_3_'+(prevResCount-1)+'_2').val() == ""){

          }
          else if($('#datemovedin_1_3_'+(prevResCount-1)+'_2').val() != ""){
            $('#prev_add_movedout_date'+prevResCount+'_2').val($('#datemovedin_1_3_'+(prevResCount-1)+'_2').val());
            $('#prev_add_movedout_month'+prevResCount+'_2').val($('#monthmovedin_1_3_'+(prevResCount-1)+'_2').val());
            $('#prev_add_movedout_year'+prevResCount+'_2').val($('#yearmovedin_1_3_'+(prevResCount-1)+'_2').val());
          }

          $('#addCopy_'+prevResCount).click(function(){
            $('#client_prevaddress'+prevResCount+'_2').val($('#client_prevaddress'+prevResCount+'_1').val());
          });
          
          var prev4_1 = false, prev4_2 = false, sec4 = false;
          //To select previous residence moved in date
          $( "#calendar_1_3_3_1, #calendar_1_3_3_2, #calendar_1_3_4_1, #calendar_1_3_4_2" ).datepicker({
            showOn: "button",
            buttonImage: "<?php echo base_url(); ?>assets/img/calendar.gif",
            buttonImageOnly: true,
            changeMonth: true,
            changeYear: true,
            dateFormat: "yy-mm-dd",
            yearRange: "-60:+0",
            onSelect: function(dateText, inst) {
              var dtSection = $(this).attr('id');
              dtSection = dtSection.split("_");
              

              var dt = dateText.split("-");
              var secDate = $('#prev_add_movedout_year'+dtSection[3]+'_'+dtSection[4]).val() + "-"+ $('#prev_add_movedout_month'+dtSection[3]+'_'+dtSection[4]).val() + "-" + $('#prev_add_movedout_date'+dtSection[3]+'_'+dtSection[4]).val();
              var curDate = dt[0] + "-"+ dt[1] + "-"+ dt[2];

              var diff = "", appliedDate = ""; 
        

              //Setting current dates
              if($('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+(prevResCount-1)+'_'+dtSection[4]).val() == ""){
                alert("Please select current residence moved in date for client "+dtSection[4]);
                return false;
              }
              else if($('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+(prevResCount-1)+'_'+dtSection[4]).val() != ""){

                if(dtSection[4] == "1"){
                  // if(flag3year1){
                  //   return false;
                  // }
                  appliedDate = currDate1;
                }
                else if(dtSection[4] == "2"){
                  // if(flag3year2){
                  //   return false;
                  // }
                  appliedDate = currDate2;
                }
              }
                


              diff = diff_years(new Date(dateText), new Date(appliedDate));

              if(diff < 3){
                if(date_diff_indays(curDate, secDate) >= 1 ){
                  $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]+', #prev_add_movedout_date'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val(dt[2]);
                  $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]+', #prev_add_movedout_month'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val(dt[1]);
                  $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]+', #prev_add_movedout_year'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val(dt[0]);

                  if(dtSection[4] == "1"){
                    $('#prev'+dtSection[3]+'-add-err-1').html("");
                    $('#prev'+(parseInt(dtSection[3])+1)+'-add-err-1').html("Applicant 1 , your 3 year address is not completed yet. Please enter previous address "+(parseInt(dtSection[3])+1)+" history.");
                    flag3year1 = false;

                    if(isSingle){

                      var prCount = 0;
                      //Unsetting prev address 2 datevalues
                      for(var i = 1; i <= prevResCount; i++){
        
                        if(i == parseInt(dtSection[3])){
                          if(i > parseInt(dtSection[3])){
                            $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                            $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                            $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                            $('#prev'+(i+1)+'-add-err-1').html("");
                            $('#prevAdd'+i+'Sec').show();
                          }
                          
                        }
                        else if(i > parseInt(dtSection[3])){
                          
                            $('#prevAdd'+i+'Sec').remove();
                            $('#prev'+(i+1)+'-add-err').remove();
                            prCount++; //Maintaining count of added tables
                          
                        }
                      }
                      prevResCount = prevResCount - prCount;
                      errordiv = prevResCount;
                    }
                  }
                  else if(dtSection[4] == "2"){
                    $('#prev'+dtSection[3]+'-add-err-2').html("");
                    $('#prev'+(parseInt(dtSection[3])+1)+'-add-err-2').html("Applicant 2 , your 3 year address is not completed yet. Please enter previous address "+(parseInt(dtSection[3])+1)+" history.");
                    flag3year2 = false;
                  }
                }
                else{
                  alert("Your move in date is after move out date. Please input correct date");
                }
              }
              else if(diff == 3){

                if(date_diff_indays(curDate, secDate) >= 1 ){
                  $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[2]);
                  $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[1]);
                  $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[0]);

                  $('#prev_add_movedout_date'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val("");
                  $('#prev_add_movedout_month'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val("");
                  $('#prev_add_movedout_month'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val("");

                  if(dtSection[4] == "1"){
                    $('#prev'+dtSection[3]+'-add-err-1').html("");
                    $('#prev'+(parseInt(dtSection[3])+1)+'-add-err-1').html("Applicant 1 , your 3 year address data is completed. Kindly move to next section 1.4");
                    flag3year1 = true;

                    if(isSingle){
                      var prCount = 0;
                      //Unsetting prev address 2 datevalues
                      console.log(prevResCount);
                      for(var i = 1; i <= prevResCount; i++){
                        if(dtSection[3] == "1"){
                          if(i > 1){
                            $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                            $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                            $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                            $('#prev'+(i+1)+'-add-err-1').html("");
                            $('#prevAdd'+i+'Sec').hide();
                          }

                          if(i > 2){
                            $('#prevAdd'+i+'Sec').remove();
                            $('#prev'+(i+1)+'-add-err').remove();
                            prCount; //Maintaining count of added tables
                          }
                        }
                        else if(parseInt(dtSection[3]) == 2){
                          if(i > 2){
                            $('#prevAdd'+i+'Sec').remove();
                            $('#prev'+(i+1)+'-add-err').remove();
                            prCount; //Maintaining count of added tables
                          }
                        }
                      }
                      prevResCount = prevResCount - prCount;
                      errordiv = prevResCount;
                    }
                  }
                  else if(dtSection[4] == "2"){
                    $('#prev'+dtSection[3]+'-add-err-2').html("");
                    $('#prev'+(parseInt(dtSection[3])+1)+'-add-err-2').html("<br>Applicant 2 , your 3 year address data is completed. Kindly move to next section 1.4");
                    flag3year2 = true;
                  }
                }
                else{
                  alert("Your move in date is after move out date. Please input correct date");
                }
              }
              else{//If moved in date more than 3
                $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[2]);
                $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[1]);
                $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+dtSection[3]+'_'+dtSection[4]).val(dt[0]);

                $('#prev_add_movedout_date'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val("");
                $('#prev_add_movedout_month'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val("");
                $('#prev_add_movedout_month'+(parseInt(dtSection[3])+1)+'_'+dtSection[4]).val("");
                if(dtSection[4] == "1"){
                  $('#prev'+dtSection[3]+'-add-err-1').html("");
                  $('#prev'+(parseInt(dtSection[3])+1)+'-add-err-1').html("Applicant 1 , your 3 year address data is completed. Kindly move to next section 1.4");
                  flag3year1 = true;

                  if(isSingle){
                    var prCount = 0;
                    //Unsetting prev address 2 datevalues
                    for(var i = 1; i <= prevResCount; i++){
      
                      if(i == parseInt(dtSection[3])){
                        if(i > parseInt(dtSection[3])){
                          $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                          $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                          $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                          $('#prev'+(i+1)+'-add-err-1').html("");
                          $('#prevAdd'+i+'Sec').show();
                        }
                        
                      }
                      else if(i > parseInt(dtSection[3])){
                        
                          $('#prevAdd'+i+'Sec').remove();
                          $('#prev'+(i+1)+'-add-err').remove();
                          prCount++;//Maintaining count of added tables
                        
                      }
                    }
                    prevResCount = prevResCount - prCount;
                    errordiv = prevResCount;
                  }
                }
                else if(dtSection[4] == "2"){
                  $('#prev'+dtSection[3]+'-add-err-2').html("");
                  $('#prev'+(parseInt(dtSection[3])+1)+'-add-err-2').html("<br>Applicant 2 , your 3 year address data is completed. Kindly move to next section 1.4");
                  flag3year2 = true;
                }
              }

              if(isSingle){
                if(flag3year1){
                  $('#addPrevRes').prop('disabled', true);
                }
                else if(!flag3year1){
                  $('#addPrevRes').prop('disabled', false);
                }
              }
              else{
                if(flag3year1 && flag3year2){
                  var c1f = false, c2f = false;
                  if(dtSection[3] == "1"){
                    if(dtSection[4] == "1"){
                      for(var i = 1; i <= prevResCount; i++){
                        if(i > parseInt(dtSection[3])){
                          $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                          $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                          $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                          $('.hideclient_1_'+i).hide();
                          $('.hideclient_copy_'+i).hide();
                          $('#prev'+i+'-add-err-1').html("");
                        }
                      }
                      c1f = true;
                    }
                    else if(dtSection[4] == "2"){
                      for(var i = 1; i <= prevResCount; i++){
                        if(i > parseInt(dtSection[3])){
                          $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                          $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                          $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                          $('.hideclient_2_'+i).hide();
                          $('.hideclient_copy_'+i).hide();
                          $('#prev'+i+'-add-err-2').html("");
                        }
                      }
                      c2f = true;
                    }
                    if(c1f && c2f){
                      var prCount = 0;
                      $('#prevAdd2Sec').hide();
                      for(var i = 1; i <= prevResCount; i++){
                        if(i > parseInt(dtSection[3])){
                          $('#prevAdd'+i+'Sec').remove();
                          $('#prev'+i+'-add-err').remove();
                          prCount++;
                        }
                      }
                      prevResCount = prevResCount - prCount;
                      errordiv = prevResCount;
                    }
                  }
                  else if(dtSection[3] != "1"){
                    $('#prevAdd2Sec').show();
                    var prCount = 0;
                    for(var i = 1; i <= prevResCount; i++){
                      if(i > parseInt(dtSection[3])){
                        $('#prevAdd'+i+'Sec').remove();
                        $('#prev'+i+'-add-err').remove();
                        prCount++;
                      }
                    }
                    prevResCount = prevResCount - prCount;
                    errordiv = prevResCount;
                  }
                  $('#addPrevRes').prop('disabled', true);
                }
                else if(!flag3year1 && flag3year2){
                  for(var i = 1; i <= prevResCount; i++){
                    if(i > parseInt(dtSection[3])){
                      $('.hideclient_1_'+i).show();
                      $('.hideclient_2_'+i).hide();
                      $('.hideclient_copy_'+i).hide();
                      if(!isSingle){
                          
                        $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                        $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                        $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
      
                        $('#prevAdd'+i+'Sec').show();
         
                      }
                    }
                  }
                  
                  $('#addPrevRes').prop('disabled', false);
                }
                else if(flag3year1 && !flag3year2){
                  for(var i = 1; i <= prevResCount; i++){
                    if(i > parseInt(dtSection[3])){
                      $('.hideclient_1_'+i).hide();
                      $('.hideclient_2_'+i).show();
                      $('.hideclient_copy_'+i).hide();
      
                      if(!isSingle){
                          
                        $('#datemovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                        $('#monthmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
                        $('#yearmovedin_'+dtSection[1]+'_'+dtSection[2]+'_'+i+'_'+dtSection[4]).val("");
      
                        $('#prevAdd'+i+'Sec').show();
          
                      }
                    }
                  }
                  $('#addPrevRes').prop('disabled', false);
                }
                else{
                  //$('#prevAdd2Sec').show();
                  for(var i = 1; i <= prevResCount; i++){
                    if(i > parseInt(dtSection[3])){
                      $('.hideclient_1_'+i).show();
                      $('.hideclient_2_'+i).show();
                      $('.hideclient_copy_'+i).show();
                    }
                  }
                  $('#addPrevRes').prop('disabled', false);
                }
              }

              
            }
          });

          $('input[name="client_previousResidence'+prevResCount+'_1"], input[name="client_previousResidence'+prevResCount+'_2"], input[name="client_prelectoralRoll'+prevResCount+'_1"], input[name="client_prelectoralRoll'+prevResCount+'_2"]').on('change', function() {
              $('input[name="' + this.name + '"]').not(this).prop('checked', false);
          });


          $('input[name="client_previousResidence'+prevResCount+'_1"], input[name="client_previousResidence'+prevResCount+'_2"]').change(function(){
            var ocId = $(this).attr('name');
            ocId = ocId.split('_');

            var ocMiddle = ocId[1];
            ocMiddle = ocMiddle.split("");

            if($(this).prop('checked')){
              $('#occst_previousResidence'+ocMiddle[17]+'_'+ocId[2]).prop('disabled', false);
            }
            else{
              $('#occst_previousResidence'+ocMiddle[17]+'_'+ocId[2]).prop('disabled', true);
            }

          });

          $('#prevadddate'+prevResCount+'copy').click(function(){
            $('#datemovedin_1_3_'+prevResCount+'_2').val($('#datemovedin_1_3_'+prevResCount+'_1').val());
            $('#monthmovedin_1_3_'+prevResCount+'_2').val($('#monthmovedin_1_3_'+prevResCount+'_1').val());
            $('#yearmovedin_1_3_'+prevResCount+'_2').val($('#yearmovedin_1_3_'+prevResCount+'_1').val());

            $('#prev_add_movedout_date'+(prevResCount + 1)+'_2').val($('#datemovedin_1_3_'+prevResCount+'_2').val());
            $('#prev_add_movedout_month'+(prevResCount + 1)+'_2').val($('#monthmovedin_1_3_'+prevResCount+'_2').val());
            $('#prev_add_movedout_year'+(prevResCount + 1)+'_2').val($('#yearmovedin_1_3_'+prevResCount+'_2').val()); 
            copyDateValidation(prevResCount);
          });
        }
        else if(prevResCount >= 4){
          $('#addPrevRes').prop('disabled', true);
        }
      });    

      $("#clientform").submit(function(event) {
          event.preventDefault();
      }).validate({
          rules: {
            client_hometel_1: {
              minlength: 11,
              maxlength: 11
            },
            client_hometel_2: {
              minlength: 11,
              maxlength: 11
            },
            client_mobile_1: {
              minlength: 11,
              maxlength: 11
            },
            client_mobile_2: {
              minlength: 11,
              maxlength: 11
            },
            client_worktel_1: {
              minlength: 11,
              maxlength: 11
            },
            client_worktel_2: {
              minlength: 11,
              maxlength: 11
            }
          },
          submitHandler: function(form) { 
            var clientFormData = $('#clientform').serialize();
            var prevAddArr = [], prevAddObj = {}, depArr = [], depObj = {};
            var clientDOB1 = $('#date_1_1_1').val()+"/"+$('#month_1_1_1').val()+"/"+$('#year_1_1_1').val();
            var clientDOB2 = "";
            <?php if($ftype){ ?>
           clientDOB2 = $('#date_1_1_2').val()+"/"+$('#month_1_1_2').val()+"/"+$('#year_1_1_2').val();
            <?php } ?>

            var clientCurrentMovedDate1 = $('#client_moved_date_1').val()+"/"+$('#client_moved_month_1').val()+"/"+$('#client_moved_year_1').val();
            var clientCurrentMovedDate2 = "";
            <?php if($ftype){ ?>
              clientCurrentMovedDate2 = $('#client_moved_date_2').val()+"/"+$('#client_moved_month_2').val()+"/"+$('#client_moved_year_2').val();
            <?php } ?>

              //Previous Address Data
            for(var i = 1; i <= prevResCount; i++){
              prevAddObj = {};
              prevAddObj["client_prevaddress"+i+"_1"] = $('textarea[name="client_prevaddress'+i+'_1"]').val();
              prevAddObj["client_prevaddress"+i+"_2"] = $('textarea[name="client_prevaddress'+i+'_2"]').val();
              prevAddObj["client_prevpostcode"+i+"_1"] = $('input[name="client_prevpostcode'+i+'_1"]').val();
              prevAddObj["client_prevpostcode"+i+"_2"] = $('input[name="client_prevpostcode'+i+'_2"]').val();
              prevAddObj["client_prevmovedindate"+i+"_1"] = $('#datemovedin_1_3_'+i+'_1').val()+"/"+$('#monthmovedin_1_3_'+i+'_1').val()+"/"+$('#yearmovedin_1_3_'+i+'_1').val();
              prevAddObj["client_prevmovedindate"+i+"_2"] = $('#datemovedin_1_3_'+i+'_2').val()+"/"+$('#monthmovedin_1_3_'+i+'_2').val()+"/"+$('#yearmovedin_1_3_'+i+'_2').val();
              prevAddObj["client_prevmovedoutdate"+i+"_1"] = $('#prev_add_movedout_date'+i+'_1').val()+"/"+$('#prev_add_movedout_month'+i+'_1').val()+"/"+$('#prev_add_movedout_year'+i+'_1').val();
              prevAddObj["client_prevmovedoutdate"+i+"_2"] = $('#prev_add_movedout_date'+i+'_2').val()+"/"+$('#prev_add_movedout_month'+i+'_2').val()+"/"+$('#prev_add_movedout_year'+i+'_2').val(),
              prevAddObj["client_previousResidence"+i+"_1"] = $('input[name="client_previousResidence'+i+'_1"]:checked').val(),
              prevAddObj["client_previousResidence"+i+"_2"] = $('input[name="client_previousResidence'+i+'_2"]:checked').val(),
              prevAddObj["client_otherpreviousresidence"+i+"_1"] = $('input[name="client_otherpreviousresidence'+i+'_1"]').val(),
              prevAddObj["client_otherpreviousresidence"+i+"_2"] = $('input[name="client_otherpreviousresidence'+i+'_2"]').val(),
              prevAddObj["client_prelectoralRoll"+i+"_1"] = $('input[name="client_prelectoralRoll'+i+'_1"]:checked').val(),
              prevAddObj["client_prelectoralRoll"+i+"_2"] = $('input[name="client_prelectoralRoll'+i+'_2"]:checked').val();

              prevAddArr.push(prevAddObj);
            }

            //Dependent Data
            for(var i = 1; i <= childCount; i++){

              depObj = {};
              var depUponArr =  document.getElementsByName("dependent_upon_"+i+"[]"), depUpon = "";

              for(j = 0; j < depUponArr.length; j++)
              {
                  if(depUponArr[j].checked){
                    depUpon += depUponArr[j].value+",";
                  }
              } 

              depObj["dependent_upon_"+i] = depUpon.replace(/,\s*$/, "");
              depObj["dependent_name_"+i] = $('input[name="dependent_name_'+i+'"]').val();
              depObj["client_dependentage_"+i] = $('input[name="client_dependentage_'+i+'"]').val();
              depObj["relationship_"+i] = $('input[name="relationship_'+i+'"]').val();
              depObj["client_FinanciallyDependent_"+i] = $('input[name="client_FinanciallyDependent_'+i+'"]:checked').val();
              depObj["client_anticipitated_"+i] = $('input[name="client_anticipitated_'+i+'"]').val();
              
              depArr.push(depObj);
              

            }

            clientFormData = clientFormData + "&client_dob_1="+clientDOB1+"&client_dob_2="+clientDOB2+"&client_currentmoveddate_1="+clientCurrentMovedDate1+"&client_currentmoveddate_2="+clientCurrentMovedDate2+"&client_previousaddress="+JSON.stringify(prevAddArr)+"&client_childrensection="+JSON.stringify(depArr);
            $.ajax({
                url:'<?php echo base_url(); ?>add/addPersonalDetail?form_id=<?php echo $last; ?>',
                type:'POST',
                data: clientFormData,
                dataType: 'json',
                success:function(as){

                    if(as.status){
                      if(as.action == 'create'){
                        location.href="<?php echo base_url(); ?>admin/employment-detail/"+as.data;
                      }
                      else if(as.action == 'edit'){
                        location.href="<?php echo base_url(); ?>admin/employment-detail/"+as.data;
                      }  
                    }
                    else{
                      alert("Problem occured while saving");
                    }

                }
            });
          }
      });           
      
  </script>

