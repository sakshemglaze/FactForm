<?php 
//$page = 'dashboard';
include 'find-fact-header.php'
?>
<style type="text/css">
  .financial-table thead th {
    vertical-align: middle;
  }

  .tab-child >.table-bordered > tr >td:First-child,
  .tab-child >.tab-bordered > tr >td:First-child {
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
  $pdata = $this->admin->getMortgageProperty($last);
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
          <h4>Section 10: New Mortgage Property Details</h4>
          
          <!--=======FORM STARTS HERE===========-->
          <form id="clientform">

            <!--===== 10 NEW MORTGAGE PROPERTY DETAILS TABLE STARTS HERE=====-->
            <!--TABLE 1 STARTS HERE -->
            <table class="table">
              <tbody class="table-bordered">
                <tr>
                  <td>Address</td>
                  <td><textarea rows="4" class="form-control" name="address" placeholder="Type address here"><?php if($pdata != NULL){ echo $pdata->address; } ?></textarea></td>
                </tr>
                <tr>
                  <td>Post Code</td>
                  <td><input type="text" class="form-control" name="postcode" value="<?php if($pdata != NULL){ echo $pdata->postcode; } ?>" placeholder="Postcode"></td>
                </tr>
              </tbody>
            </table><!--/TABLE 1 ENDS HERE -->

            <!--TABLE 2 STARTS HERE -->
            <table class="tab-child" style="margin-top:10px;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width: 30%!important;">Property Type</td>
                  <td>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Detached</label>
                      <input class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_propertytype == "Detached"){ echo "checked"; } ?> type="checkbox" name="client_propertytype" value="Detached" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Semi Detached</label>
                      <input class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_propertytype == "Semi Detached"){ echo "checked"; } ?> type="checkbox" name="client_propertytype" value="Semi Detached" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Flat</label>
                      <input class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_propertytype == "Flat"){ echo "checked"; } ?> type="checkbox" name="client_propertytype" value="Flat" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">End Terrace</label>
                      <input class="ver-check-input  checkSelection" <?php if($pdata != NULL && $pdata->client_propertytype == "End Terrace"){ echo "checked"; } ?> type="checkbox" name="client_propertytype" value="End Terrace" id="">
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Bungalow</label>
                      <input class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_propertytype == "Bungalow"){ echo "checked"; } ?> type="checkbox" name="client_propertytype" value="Bungalow" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Maisonette</label>
                      <input class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_propertytype == "Maisonette"){ echo "checked"; } ?> type="checkbox" name="client_propertytype" value="Maisonette" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Back to Back Terrace</label>
                      <input class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_propertytype == "Back to Back Terrace"){ echo "checked"; } ?> type="checkbox" name="client_propertytype" value="Back to Back Terrace" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Mid Terrace</label>
                      <input class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_propertytype == "Mid Terrace"){ echo "checked"; } ?> type="checkbox" name="client_propertytype" value="Mid Terrace" id="">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE -->

            <!--TABLE 3 STARTS HERE -->
            <table class="tab-child" style="margin-top:10px;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width: 30%!important;">What is the property tenure?</td>
                  <td>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Freehold</label>
                      <input class="ver-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_propertytenure == "Freehold"){ echo "checked"; } ?> type="checkbox" name="client_propertytenure" value="Freehold" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Leasehold</label>
                      <input class="ver-check-input checkSelection" type="checkbox" <?php if($pdata != NULL && $pdata->client_propertytenure == "Leasehold"){ echo "checked"; } ?> name="client_propertytenure" value="Leasehold" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Absolute Ownership <br/> (Feuhold)</label>
                      <input class="ver-check-input checkSelection" type="checkbox" <?php if($pdata != NULL && $pdata->client_propertytenure == "Flat"){ echo "checked"; } ?> name="client_propertytenure" value="Flat" id="">
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Commonhold</label>
                      <input class="ver-check-input checkSelection" type="checkbox" name="client_propertytenure" <?php if($pdata != NULL && $pdata->client_propertytenure == "Commonhold"){ echo "checked"; } ?> value="Commonhold" id="">
                    </div>
                    <div class="form-check">
                      <label class="ver-check-label" for="">Flying freehold</label>
                      <input class="ver-check-input checkSelection" type="checkbox" name="client_propertytenure" <?php if($pdata != NULL && $pdata->client_propertytenure == "Semi Detached"){ echo "checked"; } ?> value="Semi Detached" id="">
                    </div>
                    <div>
                      <label style="margin: 0px;" class="form-check-label" for="">Other:</label>
                      <input type="text" class="form-control col-md-9 date-input-box" id="" placeholder="Type other">
                      <input class="checkSelection" type="checkbox" style="margin-left: 0.50rem; margin-top:0.55rem;" name="client_propertytenure" <?php if($pdata != NULL && $pdata->client_propertytenure == "Other"){ echo "checked"; } ?> value="Other" class="ver-check-input" id="">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 3 ENDS HERE -->

            <!--TABLE 4 STARTS HERE -->
            <table class="tab-child" style="margin-top:10px;">
              <tbody class="table-bordered">
                <tr>
                  <td rowspan="3" style="width: 40%!important;">Accommodation</td>
                  <td class="white-td" style="text-align:right;padding-right: 0.85em;">No. of  Bedrooms :</td>
                  <td style="width:5%!important;"><input type="text" name="no_of_bedrooms" value="<?php if($pdata != NULL){ echo $pdata->no_of_bedrooms; } ?>" class="form-control" placeholder="Type no."></td>
                  <td  class="white-td" style="text-align:right;padding-right: 0.85em;">No. of Living Rooms :</td>
                  <td style="width:5%!important;"><input type="text" name="no_of_livingroom" value="<?php if($pdata != NULL){ echo $pdata->no_of_livingroom; } ?>" class="form-control" placeholder="Type no."></td>
                </tr>

                <tr>                    
                  <td class="white-td" style="text-align:right;padding-right: 0.85em;">No. of Bathrooms :</td>

                  <td style="width:5%!important;"><input type="text" name="no_of_bathroom" value="<?php if($pdata != NULL){ echo $pdata->no_of_bathroom; } ?>" class="form-control" placeholder="Type no."></td>

                  <td class="white-td" style="text-align:right;padding-right: 0.85em;">No. of Kitchens</td>
                    
                  <td style="width:5%!important;"><input name="no_of_kitchen" type="text" value="<?php if($pdata != NULL){ echo $pdata->no_of_kitchen; } ?>" class="form-control" placeholder="Type no."></td>
                </tr>

                <tr>                    
                  <td class="white-td" style="text-align:right;padding-right: 0.85em;">No. of WCs</td>

                  <td style="width:5%!important;"><input type="text" name="no_of_wc" value="<?php if($pdata != NULL){ echo $pdata->no_of_wc; } ?>" class="form-control" placeholder="Type no."></td>

                  <td class="white-td" style="text-align:right;padding-right: 0.85em;">Other : <input type="text" name="other_type" value="<?php if($pdata != NULL){ echo $pdata->other_type; } ?>" class="form-control col-md-8 date-input-box" placeholder="Type other"></td>
                    
                  <td style="width:5%!important;"><input type="text" name="no_of_othertype" value="<?php if($pdata != NULL){ echo $pdata->no_of_othertype; } ?>" class="form-control" placeholder="Type no."></td>
                </tr>
              </tbody>
            </table><!--/TABLE 4 ENDS HERE -->

            <!--TABLE 5 STARTS HERE -->  
            <table class="table" style="margin-top:10px;">
              <tbody class="table-bordered">
                <tr>
                  <td>Is the property ex local authority?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" <?php if($pdata != NULL && $pdata->local_authority == "Yes"){ echo "checked"; } ?> type="checkbox" name="local_authority" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" <?php if($pdata != NULL && $pdata->local_authority == "No"){ echo "checked"; } ?> type="checkbox" name="local_authority" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>

                <tr>
                  <td>Year Built</td>
                  <td><input type="text" name="year_built" value="<?php if($pdata != NULL){ echo $pdata->year_built; } ?>" class="form-control" placeholder="Type Year Built"></td>
                </tr>

                <tr>
                  <td>If new build, please state building guarantee</td>
                  <td><input type="text" name="building_guarantee" value="<?php if($pdata != NULL){ echo $pdata->building_guarantee; } ?>" class="form-control"  placeholder="Type here"></td>
                </tr>
              </tbody>
            </table><!--/TABLE 5 ENDS HERE --> 

            <!--TABLE 6 STARTS HERE -->  
            <table class="table" style="margin-top:10px;">
              <tbody class="table-bordered">
                <tr>
                  <td>If Leasehold, give the term remaining?</td>
                  <td>
                    <div class="input-group">
                      <input type="text" name="term_remaining" value="<?php if($pdata != NULL){ echo $pdata->term_remaining; } ?>" class="form-control" placeholder="Type here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">yrs.</div>
                      </div>                        
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>Ground Rent</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" name="ground_rent" value="<?php if($pdata != NULL){ echo $pdata->ground_rent; } ?>" class="form-control numcomma" placeholder="Type amount here">
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>Service Charge</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" name="service_charge" value="<?php if($pdata != NULL){ echo $pdata->service_charge; } ?>" class="form-control numcomma" placeholder="Type amount here">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 6 ENDS HERE -->

            <!--TABLE 7 STARTS HERE -->  
            <table class="table" style="margin-top:10px;">
              <tbody class="table-bordered">
                <tr>
                  <td>Is the property of standard constructions <br/> <span style="font-weight: normal;">(i.e. bricks walls & tiled roof?)  (If No provide details in Notes)</span></td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->standard_construction == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="standard_construction" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->standard_construction == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="standard_construction" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 7 ENDS HERE -->

            <!--TABLE 8 STARTS HERE -->  
            <table class="table" style="margin-top:10px;">
              <tbody class="table-bordered">
                <tr>
                  <td>If the property is a flat, please state the number<br/>of floors and which floor the flat is on</td>
                  <td><input type="text" name="the_flat" value="<?php if($pdata != NULL){ echo $pdata->the_flat; } ?>" class="form-control" placeholder="Type no. here"></td>
                </tr>
                <tr>
                  <td>Is the property located over a commercial<br/>property (e.g. shop)?<br/> <span style="font-weight: normal;">If Yes, please provide details in Notes</span></td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->commercial_property == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="commercial_property" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->commercial_property == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="commercial_property" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 8 ENDS HERE -->

            <!--TABLE 9 STARTS HERE -->  
            <table class="tab-child" style="margin-top:10px; width: 100%!important;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width: 30%;">For a joint purchase, on what legal basis is the<br/>property being owned?</td>
                  <td colspan="2">
                    <center>
                      <div class="col-md-4 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Joint Tenants</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="joint_purchase" <?php if($pdata != NULL && $pdata->joint_purchase == "Joint_Tenants"){ echo "checked"; } ?> value="Joint_Tenants" id="">
                      </div>
                      <div class="col-md-4 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Tenants In Common</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" name="joint_purchase" <?php if($pdata != NULL && $pdata->joint_purchase == "Tenants_In_Common"){ echo "checked"; } ?> value="Tenants_In_Common" id="">
                      </div>
                    </center>
                  </td>
                </tr>
                <tr>
                  <td>Do you have an up to date will?</td>
                  <td style="padding-left: 0.85em;">
                    <span style="font-size: 9pt;">Client 1: </span>
                    <span>
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->to_date_client1 == "Yes"){ echo "checked"; } ?> type="checkbox" name="to_date_client1" value="Yes" id="">
                    </span>
                    <span>
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->to_date_client1 == "No"){ echo "checked"; } ?> type="checkbox" name="to_date_client1" value="No" id="">
                    </span>                    
                  </td>
                  <td style="padding-left: 0.85em;">
                    <span style="font-size: 9pt;">Client 2: </span>
                    <span>
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" type="checkbox" <?php if($pdata != NULL && $pdata->to_date_client2 == "Yes"){ echo "checked"; } ?> name="to_date_client2" value="Yes" id="">
                    </span>
                    <span>
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" type="checkbox" <?php if($pdata != NULL && $pdata->to_date_client2 == "No"){ echo "checked"; } ?> name="to_date_client2" value="No" id="">
                    </span>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 9 ENDS HERE -->

            <!--TABLE 10 STARTS HERE -->  
            <table class="tab-child" style="margin-top:10px;">
              <tbody class="table-bordered">
                <tr>
                  <td>Will anyone over age 17 be living at the<br/>property (excluding the clients?)</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" <?php if($pdata != NULL && $pdata->living_at == "Yes"){ echo "checked"; } ?> name="living_at" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" type="checkbox" <?php if($pdata != NULL && $pdata->living_at == "No"){ echo "checked"; } ?> name="living_at" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>
              </tbody>                
            </table><!--/TABLE 10 ENDS HERE -->

            <!--TABLE 11 STARTS HERE -->  
            <table class="tab-child">
              <tbody class="tab-bordered">                  
                <tr>
                  <td style="width:2%;">If yes, please<br/>provide their full<br/>names</td>
                  <td><input type="text" name="full_names" value="<?php if($pdata != NULL){ echo $pdata->full_names; } ?>" class="form-control" placeholder="Type here" style="text-transform: inherit!important;"></td>
                </tr>
              </tbody>
            </table><!--/TABLE 11 ENDS HERE -->

            <!--TABLE 12 STARTS HERE -->  
            <table class="tab-child" style="margin-top:10px;">
              <tbody class="table-bordered">
                <tr>
                  <td>Will the property be occupied within 30 days of<br/>completion?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" <?php if($pdata != NULL && $pdata->of_completion == "Yes"){ echo "checked"; } ?> type="checkbox" name="of_completion" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" style="margin-left: 0.25rem;" <?php if($pdata != NULL && $pdata->of_completion == "No"){ echo "checked"; } ?> type="checkbox" name="of_completion" value="No" id="">
                      </div>
                    </center>
                  </td>
                </tr>
              </tbody>                               
            </table><!--/TABLE 12 ENDS HERE -->

            <!--TABLE 13 STARTS HERE -->  
            <table class="table tab-child">
              <thead class="tab-head">
                <th colspan="2" style="text-align: left;padding-left:0.85rem;">Notes</th>
              </thead>
              <tbody class="tab-bordered">
                <tr>
                  <td style="padding-right: 0px;"><textarea style="text-transform: inherit!important;" rows="4" name="notes" class="form-control" placeholder="Type notes here..."><?php if($pdata != NULL){ echo $pdata->notes; } ?></textarea></td>
                </tr>
              </tbody>
            </table> <!--/TABLE 13 ENDS HERE -->     

            <!--===== 10 NEW MORTGAGE PROPERTY DETAILS TABLE STARTS HERE=====-->

            <!--=====FORM NEXT/SAVE BUTTONS STARTS HERE=====-->
            <div class="" style="text-align: center;margin:20px 0px;">

              <!--Back button-->
              <button id="saveback" type="button" class="btn btn-primary" style="cursor:pointer;">Save and Back</button>
              <!--/Back button-->

              <button type="submit" class="btn btn-primary" style="cursor:pointer;">Save and Next</button>
<!--               <button type="submit" class="btn btn-primary" style="cursor:pointer;">Save</button> -->
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

  $('#clientform').submit(function(event) {
      event.preventDefault();
  }).validate({
    rules:{

    },
    submitHandler: function(form) {

      var formData = $('#clientform').serialize();
      $.ajax({
        url:'<?php echo base_url(); ?>add/mortgageproperty?form_id=<?php echo $last; ?>',
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
    }
  });

  $('#saveback').click(function(){
    var formData = $('#clientform').serialize();
    $.ajax({
      url:'<?php echo base_url(); ?>add/mortgageproperty?form_id=<?php echo $last; ?>',
      type:'POST',
      data: formData,
      dataType: 'json',
      success:function(as){

          if(as.status){
            if(as.action == 'create'){
              location.href="<?php echo base_url(); ?>admin/credit-history/"+as.data;
            }
            else if(as.action == 'edit'){
              location.href="<?php echo base_url(); ?>admin/credit-history/"+as.data;
            }
          }
          else{
            alert(as.message);
          }
      }
    });
  });

</script>
