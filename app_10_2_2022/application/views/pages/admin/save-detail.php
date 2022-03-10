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
</style>
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="text-right" style="margin: 30px 0px;">
        <a class="btn btn-info" href="#" role="button">Edit Section</a>
      </div>
      <!-- Breadcrumbs--
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Find Fact Form</li>
      </ol>
      <div class="row">        
        <div class="col-lg-12"> <!-- Kindly Put This "form-section" class with col-lg-12 to hide complete section-->
          
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
                    <th scope="col" class="hide-col">Client 2</th>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <tr>
                    <td style="padding: 0.85em;line-height: 1.85em;">Title</td>
                    <td>
                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Mr</label>
                        <input class="form-check-input" type="checkbox" name="client_title_1" value="Mr" id="defaultCheck1">
                      </div>

                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Mrs</label>
                        <input class="form-check-input" type="checkbox" name="client_title_1" value="Mrs" id="defaultCheck1">
                      </div>

                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Ms</label>
                        <input class="form-check-input" type="checkbox" name="client_title_1" value="Ms" id="defaultCheck1">
                      </div>

                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Miss</label>
                        <input class="form-check-input" type="checkbox" name="client_title_1" value="Miss" id="defaultCheck1" style="margin-left: 0.75rem;">
                      </div>

                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Dr</label>
                        <input class="form-check-input" type="checkbox" name="client_title_1" value="Dr" id="defaultCheck1" style="margin-left: 1.68rem;">
                      </div>

                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Prof</label>
                        <input class="form-check-input" type="checkbox" name="client_title_1" value="Prof" id="defaultCheck1" style="margin-left: 0.89rem;">
                      </div>

                      <div class="col-md-12 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Other</label>
                        <input class="form-check-input" type="checkbox" name="client_title_1" value="Other" id="defaultCheck1" style="margin-left: 0.35rem;">
                        <input type="text" class="form-control col-md-8 date-input-box float-right" id=""  placeholder="other:">
                      </div>
                    </td>

                    <td class="hide-col">
                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Mr</label>
                        <input class="form-check-input" type="checkbox" name="client_title_2" value="Mr" id="defaultCheck1">
                      </div>             

                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Mrs</label>
                        <input class="form-check-input" type="checkbox" name="client_title_2" value="Mrs" id="defaultCheck1">
                      </div>

                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Ms</label>
                        <input class="form-check-input" type="checkbox" name="client_title_2" value="Ms" id="defaultCheck1">
                      </div>

                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Miss</label>
                        <input class="form-check-input" type="checkbox" name="client_title_2" value="Miss" id="defaultCheck1" style="margin-left: 0.75rem;">
                      </div>

                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Dr</label>
                        <input class="form-check-input" type="checkbox" name="client_title_2" value="Dr" id="defaultCheck1" style="margin-left: 1.68rem;">
                      </div>

                      <div class="col-md-4 date-input-box" style="float: left;padding: 0;">
                        <label class="form-check-label" for="defaultCheck1">Prof</label>
                        <input class="form-check-input" type="checkbox" name="client_title_2" value="Prof" id="defaultCheck1" style="margin-left: 0.89rem;">
                      </div>

                      <div class="col-md-12 date-input-box" style="float: left;padding: 0;">                      
                        <label class="form-check-label" for="defaultCheck1">Other</label>
                        <input class="form-check-input" type="checkbox" name="client_title_2" value="Other" id="defaultCheck1" style="margin-left: 0.35rem;">
                        <input type="text" class="form-control col-md-8 date-input-box float-right" id="" placeholder="other:">
                      </div>
                    </td>
                  </tr>
                  
                  <tr>
                    <td>First Name</td>
                    <td>
                      <input type="text" class="form-control" name="client_firstname_1" value="" placeholder="First Name">
                    </td>
                    <td class="hide-col">
                      <input type="text" class="form-control" name="client_firstname_2" value="" placeholder="First Name">
                    </td>      
                  </tr>

                  <tr>
                    <td>Middle Name(s)</td>
                    <td>
                      <input type="text" class="form-control" name="client_middlename_1" value="" placeholder="Middle Name">
                    </td>
                    <td class="hide-col">
                      <input type="text" class="form-control" name="client_middlename_2" value="" placeholder="Middle Name">
                    </td>
                  </tr>

                  <tr>
                    <td>Surname</td>
                    <td>
                      <input type="text" class="form-control" name="client_surname_1" value="" placeholder="Surname">
                    </td>
                    <td class="hide-col">
                      <input type="text" class="form-control" name="client_surname_2" value="" placeholder="Surname">
                    </td>
                  </tr>

                  <tr>
                    <td>Previous / Maiden Name</td>
                    <td>
                      <input type="text" class="form-control" name="client_maidenname_1" value="" placeholder="Previous/Maiden Name">
                    </td>
                    <td class="hide-col">
                      <input type="text" class="form-control" name="client_maidenname_2" value="" placeholder="Previous/Maiden Name">
                    </td>
                  </tr>

                  <!--===COPY ADDRESS BUTTON===-->
                  <tr>
                    <td colspan="3">
                      <div class="text-right">
                        <a class="btn btn-primary btn-copy " href="#" role="button">
                          Copy Here
                        </a><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same current address on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr><!--===/COPY ADDRESS BUTTON===-->

                  <tr>
                    <td style="padding: 2em 0.85em;line-height: 1.85em;">Current Address</td>
                    <td>                      
                      <textarea class="form-control" id="" name="client_address_1" rows="4"></textarea>
                    </td>
                    <td class="hide-col">                      
                      <textarea class="form-control" id="" name="client_address_2" rows="4"></textarea>
                    </td>
                  </tr>

                  <!--===COPY POSTCODE BUTTON===-->
                  <tr>
                    <td colspan="3">
                      <div class="text-right">
                        <a class="btn btn-primary btn-copy " href="#" role="button">
                          Copy Here
                        </a><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same postcode on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr><!--===/COPY POSTCODE BUTTON===-->

                  <tr>
                    <td>Post Code</td>
                    <td>
                      <input type="text" class="form-control" name="client_postcode_1" value="" placeholder="Postcode">
                    </td>
                    <td class="hide-col">
                      <input type="text" class="form-control" name="client_postcode_2" value="" placeholder="Postcode">
                    </td>
                  </tr>

                  <tr>
                    <td>Gender</td>
                    <td>
                      <select class="form-control" name="client_gender_1" id="">
                        <option selected disabled>Choose</option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </td>
                    <td class="hide-col">
                      <select class="form-control" name="client_gender_2" id="">
                        <option selected disabled>Choose</option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </td>
                  </tr>

                  <tr>
                    <td>Date of Birth</td>
                    <td class="text-center">
                      <input type="text" class="form-control col-md-3 date-input-box" name="client_dob_1" value="" placeholder="Date"> / 
                      <input type="text" class="form-control col-md-3 date-input-box" name="client_dob_1" value="" placeholder="Month"> / 
                      <input type="text" class="form-control col-md-3 date-input-box" name="client_dob_1" value="" placeholder="Year">
                    </td>
                    <td class="hide-col text-center">
                      <input type="text" class="form-control col-md-3 date-input-box" name="client_dob_1" value="" placeholder="Date"> / 
                      <input type="text" class="form-control col-md-3 date-input-box" name="client_dob_1" value="" placeholder="Month"> / 
                      <input type="text" class="form-control col-md-3 date-input-box" name="client_dob_1" value="" placeholder="Year">
                    </td>
                  </tr>

                  <!--===COPY HOME TELEPHONE BUTTON===-->
                  <tr>
                    <td colspan="3">
                      <div class="text-right">
                        <a class="btn btn-primary btn-copy " href="#" role="button">
                          Copy Here
                        </a><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same home telephone no. on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr><!--===/COPY HOME TELEPHONE BUTTON===-->

                  <tr>
                    <td>Home Telephone</td>
                    <td>
                      <input type="text" class="form-control" name="client_hometel_1" value="" placeholder="">
                    </td>
                    <td class="hide-col">
                      <input type="text" class="form-control" name="client_hometel_2" value="" placeholder="">
                    </td>
                  </tr>

                  <!--===COPY MOBILE TELEPHONE BUTTON===--><tr>
                    <td colspan="3">
                      <div class="text-right">
                        <a class="btn btn-primary btn-copy " href="#" role="button">
                          Copy Here
                        </a><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same mobile telephone no. on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr><!--===/COPY MOBILE TELEPHONE BUTTON===-->

                  <tr>
                    <td>Mobile Telephone</td>
                    <td>
                      <input type="text" class="form-control" name="client_mobile_1" value="" placeholder="">
                    </td>
                    <td class="hide-col">
                      <input type="text" class="form-control" name="client_mobile_2" value="" placeholder="">
                    </td>
                  </tr>

                  <!--===COPY WORK TELEPHONE BUTTON===--><tr>
                    <td colspan="3">
                      <div class="text-right">
                        <a class="btn btn-primary btn-copy " href="#" role="button">
                          Copy Here
                        </a><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same work telephone no. on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr><!--===COPY WORK TELEPHONE BUTTON===-->

                  <tr>
                    <td>Work Telephone</td>
                    <td>
                      <input type="text" class="form-control" name="client_worktel_1" value="" placeholder="">
                    </td>
                    <td class="hide-col">
                      <input type="text" class="form-control" name="client_worktel_2" value="" placeholder="">
                    </td>
                  </tr>

                  <!--===COPY EMAIL ADDRESS BUTTON===-->
                  <tr>
                    <td colspan="3">
                      <div class="text-right">
                        <a class="btn btn-primary btn-copy " href="#" role="button">
                          Copy Here
                        </a><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same email address on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr><!--===COPY EMAIL ADDRESS BUTTON===-->

                  <tr>
                    <td style="padding: 0.85em;line-height: 1.85em;">Email Address</td>
                    <td>
                      <input type="email" class="form-control" name="client_email_1" value="" placeholder="Email Address">
                    </td>
                    <td class="hide-col">
                      <input type="email" class="form-control" name="client_email_2" value="" placeholder="Email Address">
                    </td>
                  </tr>

                  <tr>
                    <td style="padding: 3em .85em;line-height: 1.85em;">Preferred Contact Method(s)</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Letter</label>
                        <input type="checkbox" class="ver-check-input" name="client_contactmethod_1[]" value="Letter" id="contactCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Telephone</label>
                        <input type="checkbox" class="ver-check-input" name="client_contactmethod_1[]" value="Telephone" id="contactCheck2">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Email</label>
                        <input type="checkbox" class="ver-check-input" name="client_contactmethod_1[]" value="Email" id="contactCheck3">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Text</label>
                        <input type="checkbox" class="ver-check-input" name="client_contactmethod_1[]" value="Text" id="contactCheck4">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input type="text" style="width:80%;display: inline-block;" class="form-control" id="" placeholder="other">
                        <input type="checkbox" style="margin-left: 0.95rem;" name="client_contactmethod_1[]" value="Other" class="ver-check-input" id="contactCheck5">
                      </div>
                    </td>
                    <td class="hide-col">
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Letter</label>
                        <input type="checkbox" class="ver-check-input" name="client_contactmethod_2[]" value="Letter" id="contactCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Telephone</label>
                        <input type="checkbox" class="ver-check-input" name="client_contactmethod_2[]" value="Telephone" id="contactCheck2">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Email</label>
                        <input type="checkbox" class="ver-check-input" name="client_contactmethod_2[]" value="Email" id="contactCheck3">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Text</label>
                        <input type="checkbox" class="ver-check-input" name="client_contactmethod_2[]" value="Text" id="contactCheck4">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input type="text" style="width:80%;display: inline-block;" class="form-control" id="" placeholder="other">
                        <input type="checkbox" style="margin-left: 0.95rem;" name="client_contactmethod_2[]" value="Other" class="ver-check-input" id="contactCheck5">
                      </div>
                    </td>
                  </tr>

                  <!--===COPY PREFERRED CONTACT TIME BUTTON===-->
                  <tr>
                    <td colspan="3">
                      <div class="text-right">
                        <a class="btn btn-primary btn-copy " href="#" role="button">
                          Copy Here
                        </a><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same contact time on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr><!--===/COPY PREFERRED CONTACT TIME BUTTON===-->

                  <tr>
                    <td>Preferred Contact Time</td>
                    <td>
                      <input type="text" class="form-control" name="client_contacttime_1" value="" placeholder="Type preferred contact time">
                    </td>
                    <td class="hide-col">
                      <input type="text" class="form-control" name="client_contacttime_2" value="" placeholder="Type preferred contact time">
                    </td>
                  </tr>

                  <tr>
                    <td style="padding: 3em .85em;line-height: 1.85em;">Marital Status</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Married</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_1" value="Married" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Single</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_1" value="Single" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Divorced</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_1" value="Divorced" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Widower</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_1" value="Widower" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Co-habiting</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_1" value="Co-habiting" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Civil Partnership</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_1" value="Civil Partnership" id="statusCheck1">
                      </div>
                    </td>
                    <td class="hide-col">
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Married</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_2" value="Married" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Single</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_2" value="Single" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Divorced</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_2" value="Divorced" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Widower</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_2" value="Widower" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Co-habiting</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_2" value="Co-habiting" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Civil Partnership</label>
                        <input type="checkbox" class="ver-check-input" name="client_marital_2" value="Civil Partnership" id="statusCheck1">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td style="padding: 3em .85em;line-height: 1.85em;">Relationship to Other Client</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Spouse</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_1" value="Spouse" id="contactCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Civil Partner</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_1" value="Civil Partner" id="contactCheck2">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Partner</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_1" value="Partner" id="contactCheck3">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Son</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_1" value="Son" id="contactCheck4">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Daughter</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_1" value="Daughter" id="contactCheck4">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Mother</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_1" value="Mother" id="contactCheck4">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Father</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_1" value="Father" id="contactCheck4">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input type="text" class="form-control col-md-10 date-input-box" id="" placeholder="other">
                        <input type="checkbox" style="margin-left: 0.20rem;" name="client_relationship_1" value="Other" class="ver-check-input" id="contactCheck5">
                      </div>
                    </td>
                    <td class="hide-col">
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Spouse</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_2" value="Spouse" id="contactCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Civil Partner</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_2" value="Civil Partner" id="contactCheck2">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Partner</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_2" value="Partner" id="contactCheck3">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Son</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_2" value="Son" id="contactCheck4">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Daughter</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_2" value="Daughter" id="contactCheck4">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Mother</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_2" value="Mother" id="contactCheck4">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Father</label>
                        <input type="checkbox" class="ver-check-input" name="client_relationship_2" value="Father" id="contactCheck4">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input type="text" class="form-control col-md-10 date-input-box" id="" placeholder="other">
                        <input type="checkbox" style="margin-left: 0.20rem;" name="client_relationship_2" value="Other" class="ver-check-input" id="contactCheck5">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td style="padding: 2em .85em;line-height: 1.85em;">Tax Rate</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Non Tax Payer (0%)</label>
                        <input type="checkbox" class="ver-check-input" value="0%" name="client_taxrate_1" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Basic Rate (20%)</label>
                        <input type="checkbox" class="ver-check-input" value="20%" name="client_taxrate_1" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Higher Rate (40%)</label>
                        <input type="checkbox" class="ver-check-input" value="40%" name="client_taxrate_1" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Additional Rate (45%)</label>
                        <input type="checkbox" class="ver-check-input" value="45%" name="client_taxrate_1" id="statusCheck1">
                      </div>
                    </td>
                    <td class="hide-col">
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Non Tax Payer (0%)</label>
                        <input type="checkbox" class="ver-check-input" value="0%" name="client_taxrate_2" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Basic Rate (20%)</label>
                        <input type="checkbox" class="ver-check-input" value="20%" name="client_taxrate_2" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Higher Rate (40%)</label>
                        <input type="checkbox" class="ver-check-input" value="40%" name="client_taxrate_2" id="statusCheck1">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck4">Additional Rate (45%)</label>
                        <input type="checkbox" class="ver-check-input" value="45%" name="client_taxrate_2" id="statusCheck1">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Nationality</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">British</label>
                        <input type="checkbox" class="ver-check-input" value="British" name="client_nationality_1" id="statusCheck1">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input type="text" class="form-control col-md-10 date-input-box" id="" placeholder="other nationality">
                        <input type="checkbox" value="Other" name="client_nationality_1" style="margin-left: 0.20rem;" class="ver-check-input" id="contactCheck5">
                      </div>
                    </td>
                    <td class="hide-col">
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">British</label>
                        <input type="checkbox" class="ver-check-input" value="British" name="client_nationality_2" id="statusCheck1">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input type="text" class="form-control col-md-10 date-input-box" id="" placeholder="other nationality">
                        <input type="checkbox" value="Other" name="client_nationality_2" style="margin-left: 0.20rem;" class="ver-check-input" id="contactCheck5">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Country of Residence</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">United Kingdom</label>
                        <input type="checkbox" value="United Kingdom" name="client_country_1" class="ver-check-input" id="statusCheck1">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input type="text" class="form-control col-md-10 date-input-box" id="" placeholder="other country of residence">
                        <input type="checkbox" style="margin-left: 0.20rem;" value="Other" name="client_country_1" class="ver-check-input" id="contactCheck5">
                      </div>
                    </td>
                    <td class="hide-col">
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">United Kingdom</label>
                        <input type="checkbox" value="United Kingdom" name="client_country_2" class="ver-check-input" id="statusCheck1">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="contactCheck5">Other:</label>
                        <input type="text" class="form-control col-md-10 date-input-box" id="" placeholder="other country of residence">
                        <input type="checkbox" style="margin-left: 0.20rem;" value="Other" name="client_country_2" class="ver-check-input" id="contactCheck5">
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!--=====/1.1 PERSONAL DETAIL TABLE ENDS HERE=====-->

              <!--========FORM SUB-SECTION HEADING==========-->
              <h5 class="marTP-30">1.2 Current Residence</h5>

              <!--=====1.2 CURRENT RESIDENCE TABLE STARTS HERE=====-->
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" style="border:0px;background-color:transparent;"></th>
                    <th scope="col">Client 1</th>
                    <th scope="col" class="hide-col">Client 2</th>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <tr>
                    <td>Date Moved into Current Address</td>
                    <td class="text-center">
                      <input type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                    </td>
                    <td class="hide-col text-center">
                      <input type="text" class="form-control col-md-3 date-input-box" placeholder="Date"> / 
                      <input type="text" class="form-control col-md-3 date-input-box" placeholder="Month"> / 
                      <input type="text" class="form-control col-md-3 date-input-box" placeholder="Year">
                    </td>
                  </tr>

                  <tr>
                    <td>Current Residential Status</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Owner</label>
                        <input type="checkbox" class="ver-check-input" name="" value="Owener" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Tenant</label>
                        <input type="checkbox" class="ver-check-input" name="" value="Tenant" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Living With Parents</label>
                        <input type="checkbox" class="ver-check-input" name="" value="Living With Parents" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="">Other:</label>
                        <input type="text" class="form-control col-md-10 date-input-box" id="" placeholder="other staus">
                        <input type="checkbox" style="margin-left: 0.20rem;" value="Other" name="" class="ver-check-input" id="">
                      </div>
                    </td>
                    <td class="hide-col">
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Owner</label>
                        <input type="checkbox" class="ver-check-input" name="" value="Owener" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Tenant</label>
                        <input type="checkbox" class="ver-check-input" name="" value="Tenant" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Living With Parents</label>
                        <input type="checkbox" class="ver-check-input" name="" value="Living With Parents" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="">Other:</label>
                        <input type="text" class="form-control col-md-10 date-input-box" id="" placeholder="other staus">
                        <input type="checkbox" style="margin-left: 0.20rem;" value="Other" name="" class="ver-check-input" id="">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Are you on the Electoral Roll?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="hide-col text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>

                  <tr>
                    <td>If renting – how much do you pay?</td>
                    <td>
                      <span>£</span>
                      <input type="text" class="form-control col-md-7 date-input-box" style="text-align: right;">
                      <select class="form-control col-md-4 date-input-box">
                        <option selected>per month</option>
                        <option>per year</option>
                      </select>
                    </td>
                    <td class="hide-col">
                      <span>£</span>
                      <input type="text" class="form-control col-md-7 date-input-box" style="text-align: right;">
                      <select class="form-control col-md-4 date-input-box">
                        <option selected>per month</option>
                        <option>per year</option>
                      </select>
                    </td>
                  </tr>

                  <tr>
                    <td>Are you leaving rental<br/>accommodation when the new<br/>mortgage completes?</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="hide-col text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!--=====1.2 CURRENT RESIDENCE TABLE ENDS HERE=====-->

              <!--========FORM SUB-SECTION HEADING==========-->
              <h5 class="marTP-30">1.3 Previous Residences</h5>
              <span>If you have lived at your current address for less than three years, please complete this section.</span>

              <!--=====1.3 PREVIOUS RESIDENCE TABLESTARTS HERE=====-->

              <!--PREVIOUS ADDRESS 1 TABLE -->
              <table class="table marTP-30">
                <thead class="">
                  <tr>
                    <th scope="col" style="border:0px;background-color:transparent;"></th>
                    <th scope="col">Client 1</th>
                    <th scope="col" class="hide-col">Client 2</th>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <!--===COPY ADDRESS BUTTON===-->
                  <tr>
                    <td colspan="3">
                      <div class="text-right">
                        <a class="btn btn-primary btn-copy " href="#" role="button">
                          Copy Here
                        </a><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same previous address on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr><!--===/COPY ADDRESS BUTTON===-->

                  <tr>
                    <td style="padding: 2em 0.85em;line-height: 1.85em;">Previous Address 1</td>
                    <td>
                      <textarea class="form-control" id="" name="" rows="4"></textarea>
                    </td>
                    <td class="hide-col">
                      <textarea class="form-control" id="" name="" rows="4"></textarea>
                    </td>
                  </tr>

                  <!--===COPY POSTCODE BUTTON===-->
                  <tr>
                    <td colspan="3">
                      <div class="text-right">
                        <a class="btn btn-primary btn-copy " href="#" role="button">
                          Copy Here
                        </a><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same postcode on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr><!--===/COPY POSTCODE BUTTON===-->

                  <tr>
                    <td>Postcode</td>
                    <td>
                      <input type="text" class="form-control">
                    </td>
                    <td class="hide-col">
                      <input type="text" class="form-control">
                    </td>
                  </tr>

                  <!--===COPY DATE BUTTON===-->
                  <tr>
                    <td colspan="3">
                      <div class="text-right">
                        <a class="btn btn-primary btn-copy " href="#" role="button">
                          Copy Here
                        </a><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same moved-in date on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr><!--===/COPY DATE BUTTON===-->

                  <tr>
                    <td>Date Moved In</td>
                    <td class="text-center">
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Date"> / 
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Month"> / 
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Year">
                    </td>
                    <td class="hide-col text-center">
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Date"> / 
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Month"> / 
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Year">
                    </td>
                  </tr>

                  <!--===COPY DATE BUTTON===-->
                  <tr>
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
                  </tr><!--===/COPY DATE BUTTON===-->

                  <tr>
                    <td>Date Moved Out</td>
                    <td class="text-center">
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Date"> / 
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Month"> / 
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Year">
                    </td>
                    <td class="hide-col text-center">
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Date"> / 
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Month"> / 
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Year">
                    </td>
                  </tr>

                  <tr>
                    <td>Occupancy Status</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Owner</label>
                        <input type="checkbox" class="ver-check-input" name="" value="Owener" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Tenant</label>
                        <input type="checkbox" class="ver-check-input" name="" value="Tenant" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Living With Parents</label>
                        <input type="checkbox" class="ver-check-input" name="" value="Living With Parents" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="">Other:</label>
                        <input type="text" class="form-control col-md-10 date-input-box" id="" placeholder="other status">
                        <input type="checkbox" style="margin-left: 0.20rem;" value="Other" name="" class="ver-check-input" id="">
                      </div>
                    </td>
                    <td class="hide-col">
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Owner</label>
                        <input type="checkbox" class="ver-check-input" name="" value="Owener" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Tenant</label>
                        <input type="checkbox" class="ver-check-input" name="" value="Tenant" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Living With Parents</label>
                        <input type="checkbox" class="ver-check-input" name="" value="Living With Parents" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="">Other:</label>
                        <input type="text" class="form-control col-md-10 date-input-box" id="" placeholder="other status">
                        <input type="checkbox" style="margin-left: 0.20rem;" value="Other" name="" class="ver-check-input" id="">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>On Electoral Roll</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="hide-col text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!--/PREVIOUS ADDRESS 1 TABLE -->
              
              <!--PREVIOUS ADDRESS 2 TABLE -->
              <table class="table marTP-30">
                <thead class="">
                  <tr>
                    <th scope="col" style="border:0px;background-color:transparent;"></th>
                    <th scope="col">Client 1</th>
                    <th scope="col" class="hide-col">Client 2</th>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <!--===COPY ADDRESS BUTTON===-->
                  <tr>
                    <td colspan="3">
                      <div class="text-right">
                        <a class="btn btn-primary btn-copy " href="#" role="button">
                          Copy Here
                        </a><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same previous address on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr><!--===/COPY ADDRESS BUTTON===-->

                  <tr>
                    <td style="padding: 2em 0.85em;line-height: 1.85em;">Previous Address 2</td>
                    <td>
                      <textarea class="form-control" id="" name="" rows="4"></textarea>
                    </td>
                    <td class="hide-col">
                      <textarea class="form-control" id="" name="" rows="4"></textarea>
                    </td>
                  </tr>

                  <!--===COPY POSTCODE BUTTON===-->
                  <tr>
                    <td colspan="3">
                      <div class="text-right">
                        <a class="btn btn-primary btn-copy " href="#" role="button">
                          Copy Here
                        </a><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same postcode on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr><!--===/COPY POSTCODE BUTTON===-->

                  <tr>
                    <td>Postcode</td>
                    <td>
                      <input type="text" class="form-control">
                    </td>
                    <td class="hide-col">
                      <input type="text" class="form-control">
                    </td>
                  </tr>

                  <!--===COPY DATE BUTTON===-->
                  <tr>
                    <td colspan="3">
                     <div class="text-right">
                        <a class="btn btn-primary btn-copy " href="#" role="button">
                          Copy Here
                        </a><br/>
                        <p class="text-right float-right" style="font-size: 9pt; font-style: italic; font-weight: bold;margin-right: 10px;"> 
                          *You can copy same moved-in date on client 2 column.
                        </p>             
                      </div>
                    </td>
                  </tr><!--===/COPY DATE BUTTON===-->

                  <tr>
                    <td>Date Moved In</td>
                    <td class="text-center">
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Date"> / 
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Month"> / 
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Year">
                    </td>
                    <td class="hide-col text-center">
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Date"> / 
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Month"> / 
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Year">
                    </td>
                  </tr>

                  <!--===COPY DATE BUTTON===-->
                  <tr>
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
                  </tr><!--===/COPY DATE BUTTON===-->

                  <tr>
                    <td>Date Moved Out</td>
                    <td class="text-center">
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Date"> / 
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Month"> / 
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Year">
                    </td>
                    <td class="hide-col text-center">
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Date"> / 
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Month"> / 
                      <input type="text" class="form-control col-lg-3 date-input-box" placeholder="Year">
                    </td>
                  </tr>

                  <tr>
                    <td>Occupancy Status</td>
                    <td>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Owner</label>
                        <input type="checkbox" class="ver-check-input" name="" value="Owener" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Tenant</label>
                        <input type="checkbox" class="ver-check-input" name="" value="Tenant" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Living With Parents</label>
                        <input type="checkbox" class="ver-check-input" name="" value="Living With Parents" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="">Other:</label>
                        <input type="text" class="form-control col-md-10 date-input-box" id="" placeholder="other status">
                        <input type="checkbox" style="margin-left: 0.20rem;" value="Other" name="" class="ver-check-input" id="">
                      </div>
                    </td>
                    <td class="hide-col">
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck1">Owner</label>
                        <input type="checkbox" class="ver-check-input" name="" value="Owener" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck2">Tenant</label>
                        <input type="checkbox" class="ver-check-input" name="" value="Tenant" id="">
                      </div>
                      <div class="form-check">
                        <label class="ver-check-label" for="contactCheck3">Living With Parents</label>
                        <input type="checkbox" class="ver-check-input" name="" value="Living With Parents" id="">
                      </div>
                      <div>
                        <label style="margin: 0px;" class="ver-check-label" for="">Other:</label>
                        <input type="text" class="form-control col-md-10 date-input-box" id="" placeholder="other status">
                        <input type="checkbox" style="margin-left: 0.20rem;" value="Other" name="" class="ver-check-input" id="">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>On Electoral Roll</td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="hide-col text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="No" id="">
                        </div>
                      </center>
                    </td>
                  </tr>
                </tbody>
              </table><!--/PREVIOUS ADDRESS 2 TABLE -->

              <!--ADD MORE BUTTON-->
              <div>
                <a class="btn btn-primary float-right" href="#" role="button" style="margin:10px 0px;">Add More</a>
              </div>
              <!--/ADD MORE BUTTON-->

              <!--=====/1.3 PREVIOUS RESIDENCE TABLE ENDS HERE=====-->
              
              <!--========FORM SUB-SECTION HEADING==========-->
              <h5 class="marTP-30">1.4 Children & Dependants</h5>

              <!--=====1.4 CHILDREN / DEPENDANTS TABLE STARTS HERE=====-->
              <table class="tab-child marTP-30">
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
                <tbody class="table-bordered">
                  <tr>
                    <td><input type="text" class="form-control"></td>
                  
                    <td class="text-center">
                      <span>
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" type="checkbox" name="" value="Joint" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">CL1</label>
                        <input class="form-check-input" type="checkbox" name="" value="CL1" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">CL2</label>
                        <input class="form-check-input" type="checkbox" name="" value="CL2" id="">
                      </span>
                    </td>

                    <td><input type="text" class="form-control"></td>

                    <td><input type="text" class="form-control"></td>

                    <td class="text-center">
                      <span>
                        <label class="form-check-label" for="">Y</label>
                        <input class="form-check-input" type="checkbox" name="" value="Yes" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">N</label>
                        <input class="form-check-input" type="checkbox" name="" value="No" id="">
                      </span>
                    </td>

                    <td><input type="text" class="form-control"></td>
                  </tr>
                  
                  <tr>
                    <td><input type="text" class="form-control"></td>
                  
                    <td class="text-center">
                      <span>
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" type="checkbox" name="" value="Joint" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">CL1</label>
                        <input class="form-check-input" type="checkbox" name="" value="CL1" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">CL2</label>
                        <input class="form-check-input" type="checkbox" name="" value="CL2" id="">
                      </span>
                    </td>

                    <td><input type="text" class="form-control"></td>

                    <td><input type="text" class="form-control"></td>

                    <td class="text-center">
                      <span>
                        <label class="form-check-label" for="">Y</label>
                        <input class="form-check-input" type="checkbox" name="" value="Yes" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">N</label>
                        <input class="form-check-input" type="checkbox" name="" value="No" id="">
                      </span>
                    </td>

                    <td><input type="text" class="form-control"></td>
                  </tr>

                  <tr>
                    <td><input type="text" class="form-control"></td>
                  
                    <td class="text-center">
                      <span>
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" type="checkbox" name="" value="Joint" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">CL1</label>
                        <input class="form-check-input" type="checkbox" name="" value="CL1" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">CL2</label>
                        <input class="form-check-input" type="checkbox" name="" value="CL2" id="">
                      </span>
                    </td>

                    <td><input type="text" class="form-control"></td>

                    <td><input type="text" class="form-control"></td>

                    <td class="text-center">
                      <span>
                        <label class="form-check-label" for="">Y</label>
                        <input class="form-check-input" type="checkbox" name="" value="Yes" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">N</label>
                        <input class="form-check-input" type="checkbox" name="" value="No" id="">
                      </span>
                    </td>

                    <td><input type="text" class="form-control"></td>
                  </tr>

                  <tr>
                    <td><input type="text" class="form-control"></td>
                  
                    <td class="text-center">
                      <span>
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" type="checkbox" name="" value="Joint" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">CL1</label>
                        <input class="form-check-input" type="checkbox" name="" value="CL1" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">CL2</label>
                        <input class="form-check-input" type="checkbox" name="" value="CL2" id="">
                      </span>
                    </td>

                    <td><input type="text" class="form-control"></td>

                    <td><input type="text" class="form-control"></td>

                    <td class="text-center">
                      <span>
                        <label class="form-check-label" for="">Y</label>
                        <input class="form-check-input" type="checkbox" name="" value="Yes" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">N</label>
                        <input class="form-check-input" type="checkbox" name="" value="No" id="">
                      </span>
                    </td>

                    <td><input type="text" class="form-control"></td>
                  </tr>

                  <tr>
                    <td><input type="text" class="form-control"></td>
                  
                    <td class="text-center">
                      <span>
                        <label class="form-check-label" for="">Joint</label>
                        <input class="form-check-input" type="checkbox" name="" value="Joint" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">CL1</label>
                        <input class="form-check-input" type="checkbox" name="" value="CL1" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">CL2</label>
                        <input class="form-check-input" type="checkbox" name="" value="CL2" id="">
                      </span>
                    </td>

                    <td><input type="text" class="form-control"></td>

                    <td><input type="text" class="form-control"></td>

                    <td class="text-center">
                      <span>
                        <label class="form-check-label" for="">Y</label>
                        <input class="form-check-input" type="checkbox" name="" value="Yes" id="">
                      </span>
                      <span>
                        <label class="form-check-label" for="">N</label>
                        <input class="form-check-input" type="checkbox" name="" value="No" id="">
                      </span>
                    </td>

                    <td><input type="text" class="form-control"></td>
                  </tr>
                </tbody>
              </table>

              <!--ADD MORE BUTTON-->
              <div>
                <a class="btn btn-primary float-right" href="#" role="button" style="margin:10px 0px;">Add More</a>
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
                    <th scope="col" class="hide-col">Client 2</th>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <tr>
                    <td>Are you in good health? <br/> <span style="font-weight: normal;">If No, please provide further details in Notes</span></td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="hide-col text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="No" id="">
                        </div>
                      </center>
                    </td>
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
                    <th scope="col" class="hide-col">Client 2</th>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <tr>
                    <td>Do you have any religious beliefs<br/>that could affect mortgage<br/>planning? <br/> <span style="font-weight: normal;">e.g. Sharia compliant mortgage required.<br/>Please provide further details in Notes</span></td>
                    <td class="text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="No" id="">
                        </div>
                      </center>
                    </td>
                    <td class="hide-col text-center">
                      <center>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">Yes</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="Yes" id="">
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <input class="form-check-input" style="margin-left: 0.25rem;" type="checkbox" name="" value="No" id="">
                        </div>
                      </center>
                    </td>
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
                    <td style="padding-right:0px;"><textarea class="form-control" id="" name="" rows="6"></textarea></td>
                  </tr>
                </tbody>
              </table>
              <!--=====/ADDITION NOTES TABLE ENDS HERE=====-->



              <!--=====FORM NEXT/SAVE BUTTONS STARTS HERE=====-->
              <div class="" style="text-align: center;margin:20px 0px;">
                <button type="submit" class="btn btn-primary" style="cursor:pointer;">Next</button>

                <button type="submit" class="btn btn-primary" style="cursor:pointer;">Save</button>
              </div>
              <!--=====/FORM NEXT/SAVE BUTTONS ENDS HERE=====-->

              
            </form>
          <!--=======FORM ENDS HERE===========-->
        </div><!--/.col-lg-12-->
      </div><!--/.row-->
    </div><!-- /.container-fluid-->
  </div><!-- /.content-wrapper-->

