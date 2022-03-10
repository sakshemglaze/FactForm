<?php 
//$page = 'dashboard';
include 'find-fact-header.php'
?>
<style type="text/css">
  p {
    margin-bottom: 10px;
    font-size: 10pt;
  }

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

<?php $pdata = $this->admin->getDeclaration($last); ?>

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
          <h4>Section 14: Declaration</h4>

          <p>
            To be completed by all clients. 
          </p>
          <p>
            Please read this document carefully before signing.
          </p>
          <p>
            I confirm that I have provided this information on the understanding that it will be used in the strictest confidence and that it does not place me under any obligation to take up any recommendation that may be made.
          </p>

          <!--=====/SIGNATURE TABLE 1 ENDS HERE =====-->
          <table class="tab-child" style="width: 100%;">
            <thead>
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col" style="width: 40%;">Signature</th>
                <th scope="col" class="hide-col">Date</th>
              </tr>
            </thead>
            <tbody class="table-bordered">
              <?php
                  $end1 = false; $end2 = false; 
                  if($pdata != NULL && $pdata->date_1 != ""){
                    $end1_data = explode("/", $pdata->date_1);
                    $end1 = true;
                  } 

                  if($pdata != NULL && $pdata->date_2 != ""){
                    $end2_data = explode("/", $pdata->date_2);
                    $end2 = true;
                  } 
              ?>
              <tr>
                <td>Client 1</td>
                <td><textarea class="form-control" rows="4"></textarea></td>
                <td class="text-center">
                  <input id="date_date_14_0_1_1" type="text" class="form-control col-md-3 date-input-box" name="" value="<?php if($end1){echo $end1_data[0];} ?>" placeholder="Date"> / 
                  <input id="date_month_14_0_1_1" type="text" class="form-control col-md-3 date-input-box" name="" value="<?php if($end1){echo $end1_data[1];} ?>" placeholder="Month"> / 
                  <input id="date_year_14_0_1_1" type="text" class="form-control col-md-3 date-input-box" name="" value="<?php if($end1){echo $end1_data[2];} ?>" placeholder="Year">
                  <input type="hidden" id="date_calendar_14_0_1_1" class="selectDate" />
                </td>
              </tr>

              <tr>
                <td>Client 2</td>
                <td><textarea class="form-control" rows="4"></textarea></td>
                <td class="text-center">
                  <input id="date_date_14_0_1_2" type="text" class="form-control col-md-3 date-input-box" name="" value="<?php if($end2){echo $end2_data[0];} ?>" placeholder="Date"> / 
                  <input id="date_month_14_0_1_2" type="text" class="form-control col-md-3 date-input-box" name="" value="<?php if($end2){echo $end2_data[1];} ?>" placeholder="Month"> / 
                  <input id="date_year_14_0_1_2" type="text" class="form-control col-md-3 date-input-box" name="" value="<?php if($end2){echo $end2_data[2];} ?>" placeholder="Year">
                  <input type="hidden" id="date_calendar_14_0_1_2" class="selectDate" />
                </td>
              </tr>
            </tbody>
          </table>
          <!--=====/SIGNATURE TABLE 1 ENDS HERE =====-->

          <!--========FORM SUB-SECTION HEADING==========-->
          <h5 class="marTP-30">14.1 Additional Declarations</h5>  
          
          <!--========SUB-SECTION SUB-HEADING==========-->
          <h6>Delete if not applicable</h6>   
  
          <p>I further declare that I have withheld certain details and that I am aware that this may prevent my adviser from being able to provide the best possible advice for my circumstances.</p>  

          <!--===== SIGNATURE TABLE 2 STARTS HERE =====-->
          <table class="tab-child" style="width: 100%;">
            <thead>
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col" style="width: 40%;">Signature</th>
                <th scope="col" class="hide-col">Date</th>
              </tr>
            </thead>
            <tbody class="table-bordered">
              <?php
                  $end1 = false; $end2 = false; 
                  if($pdata != NULL && $pdata->date_3 != ""){
                    $end1_data = explode("/", $pdata->date_3);
                    $end1 = true;
                  } 

                  if($pdata != NULL && $pdata->date_4 != ""){
                    $end2_data = explode("/", $pdata->date_4);
                    $end2 = true;
                  } 
              ?>
              <tr>
                <td>Client 1</td>
                <td><textarea class="form-control" rows="4"></textarea></td>
                <td class="text-center">
                  <input id="date_date_14_1_1_1" type="text" class="form-control col-md-3 date-input-box" name="" value="<?php if($end1){echo $end1_data[0];} ?>" placeholder="Date"> / 
                  <input id="date_month_14_1_1_1" type="text" class="form-control col-md-3 date-input-box" name="" value="<?php if($end1){echo $end1_data[1];} ?>" placeholder="Month"> / 
                  <input id="date_year_14_1_1_1" type="text" class="form-control col-md-3 date-input-box" name="" value="<?php if($end1){echo $end1_data[2];} ?>" placeholder="Year">
                  <input type="hidden" id="date_calendar_14_1_1_1" class="selectDate" />
                </td>
              </tr>

              <tr>
                <td>Client 2</td>
                <td><textarea class="form-control" rows="4"></textarea></td>
                <td class="text-center">
                  <input id="date_date_14_1_1_2" type="text" class="form-control col-md-3 date-input-box" name="" value="<?php if($end2){echo $end2_data[0];} ?>" placeholder="Date"> / 
                  <input id="date_month_14_1_1_2" type="text" class="form-control col-md-3 date-input-box" name="" value="<?php if($end2){echo $end2_data[1];} ?>" placeholder="Month"> / 
                  <input id="date_year_14_1_1_2" type="text" class="form-control col-md-3 date-input-box" name="" value="<?php if($end2){echo $end2_data[2];} ?>" placeholder="Year">
                  <input type="hidden" id="date_calendar_14_1_1_2" class="selectDate" />
                </td>
              </tr>
            </tbody>
          </table>
          <!--=====/SIGNATURE TABLE 2 ENDS HERE =====-->

          <p style="margin-top:15px;margin-bottom: 15px;">If you would like us to keep in touch after we have arranged your mortgage finances we shall need your permission.  Please certify your authority for us to contact you with details of mortgages and offers which we believe are likely to be of interest to you by signing the declaration below.</p>  

          <!--===== SIGNATURE TABLE 3 STARTS HERE =====-->
          <table class="tab-child" style="width: 100%;">
            <thead>
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col" style="width: 40%;">Signature</th>
                <th scope="col" class="hide-col">Date</th>
              </tr>
            </thead>
            <tbody class="table-bordered">
              <?php
                  $end1 = false; $end2 = false; 
                  if($pdata != NULL && $pdata->date_5 != ""){
                    $end1_data = explode("/", $pdata->date_5);
                    $end1 = true;
                  } 

                  if($pdata != NULL && $pdata->date_6 != ""){
                    $end2_data = explode("/", $pdata->date_6);
                    $end2 = true;
                  } 
              ?>
              <tr>
                <td>Client 1</td>
                <td><textarea class="form-control" rows="4"></textarea></td>
                <td class="text-center">
                  <input id="date_date_14_2_1_1" type="text" class="form-control col-md-3 date-input-box" name="" value="<?php if($end1){echo $end1_data[0];} ?>" placeholder="Date"> / 
                  <input id="date_month_14_2_1_1" type="text" class="form-control col-md-3 date-input-box" name="" value="<?php if($end1){echo $end1_data[1];} ?>" placeholder="Month"> / 
                  <input id="date_year_14_2_1_1" type="text" class="form-control col-md-3 date-input-box" name="" value="<?php if($end1){echo $end1_data[2];} ?>" placeholder="Year">
                  <input type="hidden" id="date_calendar_14_2_1_1" class="selectDate" />
                </td>
              </tr>

              <tr>
                <td>Client 2</td>
                <td><textarea class="form-control" rows="4"></textarea></td>
                <td class="text-center">
                  <input id="date_date_14_2_1_2" type="text" class="form-control col-md-3 date-input-box" name="" value="<?php if($end2){echo $end2_data[0];} ?>" placeholder="Date"> / 
                  <input id="date_month_14_2_1_2" type="text" class="form-control col-md-3 date-input-box" name="" value="<?php if($end2){echo $end2_data[1];} ?>" placeholder="Month"> / 
                  <input id="date_year_14_2_1_2" type="text" class="form-control col-md-3 date-input-box" name="" value="<?php if($end2){echo $end2_data[2];} ?>" placeholder="Year">
                  <input type="hidden" id="date_calendar_14_2_1_2" class="selectDate" />
                </td>
              </tr>
            </tbody>
          </table>
          <!--=====/SIGNATURE TABLE 3 ENDS HERE =====-->

          <!--=====FORM NEXT/SAVE BUTTONS STARTS HERE=====-->      
          <div class="" style="text-align: center;margin:20px 0px;">

            <!--Back button-->
              <!-- <a href="<?php echo base_url(); ?>admin/additional-details<?php if($formExist){ echo "/".$last; } ?>" class="btn btn-primary" style="cursor:pointer;">Back</a> -->
              <!--/Back button-->

              <!-- <a href="<?php echo base_url(); ?>admin/cost-broken<?php if($formExist){ echo "/".$last; } ?>" class="btn btn-primary" style="cursor:pointer;">Next</a> -->
            <button id="saveback" type="button" class="btn btn-primary" style="cursor:pointer;">Save and Back</button>
            <button id="savenext" type="button" class="btn btn-primary" style="cursor:pointer;">Save and Next</button>
          </div>
          <!--=====/FORM NEXT/SAVE BUTTONS ENDS HERE=====-->
          
        </div><!--/.col-lg-12-->
      </div><!--/.row-->
    </div>
    <!-- /.container-fluid-->
  </div>
    <!-- /.content-wrapper-->
  <script>
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

    $('#savenext').click(function(){
        
        var formData = "", date_1 = "", date_2 = "", date_3 = "", date_4 = "", date_5 = "", date_6 = "";

        date_1 = $('#date_date_14_0_1_1').val()+"/"+$('#date_month_14_0_1_1').val()+"/"+$('#date_year_14_0_1_1').val();
        date_2 = $('#date_date_14_0_1_2').val()+"/"+$('#date_month_14_0_1_2').val()+"/"+$('#date_year_14_0_1_2').val();

        date_3 = $('#date_date_14_1_1_1').val()+"/"+$('#date_month_14_1_1_1').val()+"/"+$('#date_year_14_1_1_1').val();
        date_4 = $('#date_date_14_1_1_2').val()+"/"+$('#date_month_14_1_1_2').val()+"/"+$('#date_year_14_1_1_2').val();

        date_5 = $('#date_date_14_2_1_1').val()+"/"+$('#date_month_14_2_1_1').val()+"/"+$('#date_year_14_2_1_1').val();
        date_6 = $('#date_date_14_2_1_2').val()+"/"+$('#date_month_14_2_1_2').val()+"/"+$('#date_year_14_2_1_2').val();

        formData = "date_1="+date_1+"&date_2="+date_2+"&date_3="+date_3+"&date_4="+date_4+"&date_5="+date_5+"&date_6="+date_6;

        $.ajax({
          url:'<?php echo base_url(); ?>add/addDeclaration?form_id=<?php echo $last; ?>',
          type:'POST',
          data: formData,
          dataType: 'json',
          success:function(as){

              if(as.status){
                if(as.action == 'create'){
                  location.href="<?php echo base_url(); ?>admin/cost-broken/"+as.data;
                }
                else if(as.action == 'edit'){
                  location.href="<?php echo base_url(); ?>admin/cost-broken/"+as.data;
                }
              }
              else{
                alert(as.message);
              }
          }
        });
    });

    $('#saveback').click(function(){
        var formData = "", date_1 = "", date_2 = "", date_3 = "", date_4 = "", date_5 = "", date_6 = "";

        date_1 = $('#date_date_14_0_1_1').val()+"/"+$('#date_month_14_0_1_1').val()+"/"+$('#date_year_14_0_1_1').val();
        date_2 = $('#date_date_14_0_1_2').val()+"/"+$('#date_month_14_0_1_2').val()+"/"+$('#date_year_14_0_1_2').val();

        date_3 = $('#date_date_14_1_1_1').val()+"/"+$('#date_month_14_1_1_1').val()+"/"+$('#date_year_14_1_1_1').val();
        date_4 = $('#date_date_14_1_1_2').val()+"/"+$('#date_month_14_1_1_2').val()+"/"+$('#date_year_14_1_1_2').val();

        date_5 = $('#date_date_14_2_1_1').val()+"/"+$('#date_month_14_2_1_1').val()+"/"+$('#date_year_14_2_1_1').val();
        date_6 = $('#date_date_14_2_1_2').val()+"/"+$('#date_month_14_2_1_2').val()+"/"+$('#date_year_14_2_1_2').val();

        formData = "date_1="+date_1+"&date_2="+date_2+"&date_3="+date_3+"&date_4="+date_4+"&date_5="+date_5+"&date_6="+date_6;

        $.ajax({
          url:'<?php echo base_url(); ?>add/addDeclaration?form_id=<?php echo $last; ?>',
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
    });
  </script>