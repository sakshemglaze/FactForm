<?php 
//$page = 'dashboard';
include 'find-fact-header.php'
?>
<style type="text/css">
  .financial-table thead th {
    vertical-align: middle;
  }

  .table td, .table th {
    padding: 0rem;
    width: 20%;
    vertical-align: middle;
  }

  .tab-head, .tab-head td, .tab-head th {
    border-bottom: 1px solid #000000!important;
    border-right: 1px solid #000000!important;
    border-left: 1px solid #000000!important;
    border-top: 0px!important;
  } 
</style>

<?php 
  $pdata = $this->admin->getAssets($last);
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
        <h4>Section 7: Existing Assets</h4>

        <!--========FORM SUB-SECTION HEADING==========-->
        <h5>7.1 Emergency Funds</h5>
        
        <!--=======FORM STARTS HERE===========-->
        <form id="clientform">

          <!--=====7.1 EMERGENCY FUNDS TABLE STARTS HERE=====-->
          <table class="table ">
            <thead class="">
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <?php if($ftype){ ?><th scope="col">Client 2</th><?php } ?>
              </tr>
            </thead>
            <tbody class="table-bordered">
              <tr>
                <td>Do you have any savings set<br/>aside for emergencies?<br/><span style="font-weight: normal;">(Please provide details in 7.2)</span></td>
                <td class="text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->is_saving_1 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="is_saving_1" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->is_saving_1 == "No"){ echo "checked"; } ?>  style="margin-left: 0.25rem;" type="checkbox" name="is_saving_1" value="No" id="">
                    </div>
                  </center>
                </td>
                <?php if($ftype){ ?>
                <td class="text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->is_saving_2 == "Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="is_saving_2" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->is_saving_2 == "No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="is_saving_2" value="No" id="">
                    </div>
                  </center>
                </td> 
                <?php } ?>               
              </tr>

              <tr>
                <td>If no, how do you plan to build<br/>up a fund or manage in the<br/>event of financial emergencies?</td>
                <td><textarea style="text-transform: inherit!important;padding-top: 2px;" class="form-control" name="fund_plan_1" rows="2" placeholder="Type here..."><?php if($pdata != NULL){echo $pdata->fund_plan_1;} ?></textarea></td>
                <?php if($ftype){ ?>
                <td>
                  <textarea style="text-transform: inherit!important;padding-top:2px;" class="form-control" name="fund_plan_2" rows="2" placeholder="Type here..."><?php if($pdata != NULL){echo $pdata->fund_plan_2;} ?></textarea></td>
                <?php } ?>  
              </tr>
            </tbody>
          </table>
          <!--=====/7.1 EMERGENCY FUNDS TABLE ENDS HERE=====-->      

          <!--========FORM SUB-SECTION HEADING==========-->
          <h5 class="marTP-30 bank-account">7.2 Bank Accounts and Other Savings</h5>

          <!--=====7.2 BANK ACCOUNTS / OTHER SAVINGS TABLE STARTS HERE=====-->
          <table class="table tab-child bank-account" style="margin-top: 20px; width: 95%;">
            <thead>
              <th>Owner</th>
              <th>Account Type</th>
              <th>Provider</th>
              <th>Current Value</th>
              <th>Monthly<br/>Contribution</th>
            </thead>
            <tbody class="table-bordered" id="bankdetailholder">
            <?php if($pdata != NULL){ $pBank = json_decode($pdata->bank_savings, true); $i = 0; ?>
            <?php foreach($pBank as $key => $value){ $i++; ?>
              <tr id="bnk_<?php echo $i; ?>">
                <td><input type="text" name="ownername_bank_<?php echo $i; ?>" value="<?php echo $value['ownername_bank_'.$i]; ?>" class="form-control" placeholder="Type Owner name here"></td>
                <td><input type="text" name="type_bank_<?php echo $i; ?>" value="<?php echo $value['type_bank_'.$i]; ?>"  class="form-control" placeholder="Type Account type here"></td>
                <td><input type="text" name="provider_bank_<?php echo $i; ?>" value="<?php echo $value['provider_bank_'.$i]; ?>" class="form-control" placeholder="Type provider here"></td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>                        
                    <input type="text" name="currentvalue_bank_<?php echo $i; ?>" value="<?php echo $value['currentvalue_bank_'.$i]; ?>" class="form-control text-right currentbankamount numcomma" placeholder="Type amount here">
                  </div>                    
                </td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>                        
                    <input type="text" name="monthly_bank_<?php echo $i; ?>" value="<?php echo $value['monthly_bank_'.$i]; ?>" class="form-control text-right monthlybankamount numcomma" placeholder="Type amount here">
                    <div class="input-group-prepend">
                      <div class="input-group-text">p.m.</div>
                    </div>
                  </div>
                  <?php if($i > 4){ ?>
                  <span id="bnkspn_<?php echo $i; ?>" class="close-btn bnkRemove" style="right:45px; margin-top:-30px;"><i class="fas fa-times-circle fa-lg"></i></span>
                  <?php } ?>
                </td>
              </tr>
            <?php }}else{ ?>
              <?php $initBankSize = 4; ?>
              <?php for($i = 1; $i <= $initBankSize; $i++){ ?>
              <tr>
                <td><input type="text" name="ownername_bank_<?php echo $i; ?>" class="form-control" placeholder="Type Owner name here"></td>
                <td><input type="text" name="type_bank_<?php echo $i; ?>" class="form-control" placeholder="Type Account type here"></td>
                <td><input type="text" name="provider_bank_<?php echo $i; ?>" class="form-control" placeholder="Type provider here"></td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>                        
                    <input type="text" name="currentvalue_bank_<?php echo $i; ?>" class="form-control text-right currentbankamount numcomma" placeholder="Type amount here">
                  </div>                    
                </td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>                        
                    <input type="text" name="monthly_bank_<?php echo $i; ?>" class="form-control text-right monthlybankamount numcomma" placeholder="Type amount here">
                    <div class="input-group-prepend">
                      <div class="input-group-text">p.m.</div>
                    </div>
                  </div>
                  
                </td>
              </tr>
              <?php } ?>
              <?php } ?>
            </tbody>
          </table>

          <!--ADD MORE BUTTON-->
          <div class="bank-account">
            <button id="addBankdetail" type="button" class="btn btn-primary float-right" style="margin:10px 0px;">Add More</a>
          </div>
          <!--/ADD MORE BUTTON-->

          <table class=" table tab-child" style="width: 95%;">
            <tbody class="table-bordered">
              <tr>
                <td><input type="text" name="lower_owner_1" value="<?php if($pdata != NULL){ echo $pdata->lower_owner_1; } ?>" class="form-control"></td>
                <td><input type="text" name="lower_type_1" value="<?php if($pdata != NULL){ echo $pdata->lower_type_1; } ?>" class="form-control"></td>
                <td><input type="text" name="lower_provider_1" value="<?php if($pdata != NULL){ echo $pdata->lower_provider_1; } ?>" class="form-control"></td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>                        
                    <input id="total_currentbankamount" type="text" name="lower_currentvalue_1" value="<?php if($pdata != NULL){ echo $pdata->lower_currentvalue_1; } ?>" class="form-control text-right" placeholder="Autosum amount here" style="font-weight: bold;">
                  </div>
                  <!-- <span style="margin:0px 5px;">£</span>-->                    
                </td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>                        
                    <input id="total_monthlybankamount" type="text" name="lower_monthly_1" value="<?php if($pdata != NULL){ echo $pdata->lower_monthly_1; } ?>" class="form-control text-right" placeholder="Autosum amount here" style="font-weight: bold;">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                    </div>
                  </div>
                  <!-- <span style="margin:0px 5px;">£</span>                    
                  <span style="margin: 5px;">p.m.</span>-->
                </td>
              </tr>
            </tbody>
          </table>

          <table class="table tab-child" style="width: 95%;">
            <thead class="tab-head">
              <tr>
                <th colspan="5" style="text-align: left;padding:0em 0.85em">Notes</th>
              </tr>
            </thead>
            <tbody class="table-bordered">
              <tr>
                <td colspan="5"><textarea style="text-transform: inherit!important;" class="form-control" id="" name="lower_notes_1" rows="4" placeholder="Type notes here..."><?php if($pdata != NULL){ echo $pdata->lower_notes_1; } ?></textarea></td>
              </tr>
            </tbody>
          </table>
          <!--=====/7.2 BANK ACCOUNTS / OTHER SAVINGS TABLE ENDS HERE=====-->

          

          <!--========FORM SUB-SECTION HEADING==========-->
          <h5 class="marTP-30">7.3 Pensions & Investments</h5>

          <!--=====7.3 PENSIONS / INVESTMENTS TABLE STARTS HERE=====-->
          <table class="table tab-child" style="margin-top: 20px;width: 95%;">
            <thead>
              <th>Owner</th>
              <th>Type</th>
              <th>Provider</th>
              <th>Amount</th>
              <th>Monthly<br/>Contribution</th>
            </thead>
            <tbody class="table-bordered" id="pensiondetailholder">
            <?php if($pdata != NULL){ $pPension = json_decode($pdata->pension, true); $i = 0; ?>
            <?php foreach($pPension as $key => $value){ $i++; ?>
              <tr id="pension_<?php echo $i; ?>">
                <td><input type="text" name="ownername_pension_<?php echo $i; ?>" value="<?php echo $value['ownername_pension_'.$i]; ?>" class="form-control" placeholder="Type Owner name here"></td>
                <td><input type="text" name="type_pension_<?php echo $i; ?>" value="<?php echo $value['type_pension_'.$i]; ?>" class="form-control" placeholder="Type Account type here"></td>
                <td><input type="text" name="provider_pension_<?php echo $i; ?>" value="<?php echo $value['provider_pension_'.$i]; ?>" class="form-control" placeholder="Type provider here"></td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>                        
                    <input type="text" name="amount_pension_<?php echo $i; ?>" class="form-control text-right currentpensionamount numcomma" value="<?php echo $value['amount_pension_'.$i]; ?>" placeholder="Type amount here">
                  </div>
                  <!-- <span style="margin:0px 5px;">£</span>-->                    
                </td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>                        
                    <input type="text" name="monthly_pension_<?php echo $i; ?>" class="form-control text-right monthlypensionamount numcomma" value="<?php echo $value['monthly_pension_'.$i]; ?>" placeholder="Type amount here">
                    <div class="input-group-prepend">
                      <div class="input-group-text">p.m.</div>
                    </div>
                  </div>
                  <?php if($i > 4){ ?>
                  <span id="pen_<?php echo $i; ?>" class="close-btn penRemove" style="right:45px; margin-top:-30px;"><i class="fas fa-times-circle fa-lg"></i></span>
                  <?php } ?>
                </td>
              </tr>
            <?php }}else{ ?>
            <?php $initPensionSize = 4; ?>
            <?php for($i = 1; $i <= $initPensionSize; $i++){ ?>
              <tr>
                <td><input type="text" name="ownername_pension_<?php echo $i; ?>" class="form-control" placeholder="Type Owner name here"></td>
                <td><input type="text" name="type_pension_<?php echo $i; ?>" class="form-control" placeholder="Type Account type here"></td>
                <td><input type="text" name="provider_pension_<?php echo $i; ?>" class="form-control" placeholder="Type provider here"></td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>                        
                    <input type="text" name="amount_pension_<?php echo $i; ?>" class="form-control text-right currentpensionamount numcomma" placeholder="Type amount here">
                  </div>
                  <!-- <span style="margin:0px 5px;">£</span>-->                    
                </td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>                        
                    <input type="text" name="monthly_pension_<?php echo $i; ?>" class="form-control text-right monthlypensionamount numcomma" placeholder="Type amount here">
                    <div class="input-group-prepend">
                      <div class="input-group-text">p.m.</div>
                    </div>
                  </div>
                  <!-- <span style="margin:0px 5px;">£</span>                    
                  <span style="margin: 5px;">p.m.</span>-->
                </td>
              </tr>
            <?php }} ?>

            </tbody>
          </table>

          <!--ADD MORE BUTTON-->
          <div>
            <button id="addPensiondetail" type="button" class="btn btn-primary float-right" style="margin:10px 0px;">Add More</button>
          </div> 
          <!--/ADD MORE BUTTON-->

          <table class=" table tab-child" style="width: 95%;">
            <tbody class="table-bordered">
              <tr>
                <td><input type="text" name="lower_owner_2" value="<?php if($pdata != NULL){ echo $pdata->lower_owner_2; } ?>" class="form-control"></td>
                <td><input type="text" name="lower_type_2" value="<?php if($pdata != NULL){ echo $pdata->lower_type_2; } ?>" class="form-control"></td>
                <td><input type="text" name="lower_provider_2" value="<?php if($pdata != NULL){ echo $pdata->lower_provider_2; } ?>" class="form-control"></td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>                        
                    <input id="total_currentpensionamount" type="text" name="lower_amount_2" value="<?php if($pdata != NULL){ echo $pdata->lower_amount_2; } ?>" class="form-control text-right" placeholder="Autosum amount here" style="font-weight: bold;">
                  </div>
                  <!-- <span style="margin:0px 5px;">£</span>-->                    
                </td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>                        
                    <input id="total_monthlypensionamount" type="text" name="lower_monthly_2" value="<?php if($pdata != NULL){ echo $pdata->lower_monthly_2; } ?>" class="form-control text-right" placeholder="Autosum amount here" style="font-weight: bold;">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                    </div>
                  </div>
                  <!-- <span style="margin:0px 5px;">£</span>                    
                  <span style="margin: 5px;">p.m.</span>-->
                </td>
              </tr>
            </tbody>
          </table>

          <table class="table tab-child" style="width: 95%;">
            <thead class="tab-head">
              <tr>
                <th colspan="5" style="text-align: left;padding:0em 0.85em">Notes</th>
              </tr>
            </thead>
            <tbody class="table-bordered">
              <tr>
                <td colspan="5"><textarea style="text-transform: inherit!important;" class="form-control" id="" name="lower_notes_2" rows="4" placeholder="Type notes here..."><?php if($pdata != NULL){ echo $pdata->lower_notes_2; } ?></textarea></td>
              </tr>
            </tbody>
          </table>
          <!--=====/7.3 PENSIONS / INVESTMENTS TABLE ENDS HERE=====-->

            

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
  var yes1 = false, yes2 = false, no1 = false, no2 = false, bankcount = <?php if($pdata != NULL){ echo sizeof($pBank); }else{ ?>4<?php } ?>, pensioncount = <?php if($pdata != NULL){ echo sizeof($pPension); }else{ ?>4<?php } ?>;
  function addZeroes(num){
    if(num != "NaN"){
      var value = parseFloat(num);
      var res = num.split(".");
      if(res.length == 1 || (res[1].length < 3)) {
        value = value.toFixed(2);
      }
      var parts = (+value).toFixed(2).split(".");
      var nam = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts[1] ? "." + parts[1] : ".00");
      return nam;
    }
    else{
      return "";
    }
    
  }

  $('.checkSelection').on('change', function() {
    var secSelected = $(this).attr('name').split('_')[2];
    $('input[name="' + this.name + '"]').not(this).prop('checked', false);

    if(secSelected == "1" && $(this).val()=="Yes"){
      yes1 = true;
      no1 = false;
    }
    else if(secSelected == "1" && $(this).val()=="No" && $(this).prop('checked') == true){
      yes1 = false;
      no1 = true;
    }
    else if(secSelected == "1" && $(this).val()=="No" && $(this).prop('checked') == false){
      no1 = false;
    }

    if(secSelected == "2" && $(this).val()=="Yes"){
      yes2 = true;
      no2 = false;
    }
    else if(secSelected == "2" && $(this).val()=="No" && $(this).prop('checked') == true){
      yes2 = false;
      no2 = true;
    }
    else if(secSelected == "2" && $(this).val()=="No" && $(this).prop('checked') == false){
      no2 = false;
    }

    if(no1 == true || no2 == true){
      $('.bank-account').hide();
    }
    else if(no1 == false && no2 == false){
      $('.bank-account').show();
    }
  });

  function numberWithCommas(x) {
      var parts = x.toString().split(".");
      parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      return parts.join(".");
  }

  //Remove comma
  function removeComma(str){
    return str.replace (/,/g, "");
  }

  function autosum(){
    $('.currentbankamount,.monthlybankamount,.currentpensionamount,.monthlypensionamount').keyup(function(){
      var getType = $(this).attr('class').split(' ')[2];

      var sum = 0;
      $(this).val(function(index, value) {
          value = value.replace(/,/g,'');
          return numberWithCommas(value);
      });
      $('.'+getType).each(function() {
          sum += parseFloat(removeComma($(this).val())) || 0;
      });

      $('#total_'+getType).val(addZeroes(sum+""));
    });

    $('.numcomma').keyup(function(){
      $(this).val(function(index, value) {
          value = value.replace(/,/g,'');
          return numberWithCommas(value);
      });
    });
  }

  autosum();


  $('.bnkRemove').unbind().click(function(){
    var bnkId = $(this).attr('id').split('_');
    $('#bnk_'+bnkId[1]).remove();
    bankcount--;
  });
  $('.penRemove').unbind().click(function(){
    var bnkId = $(this).attr('id').split('_');
    $('#pension_'+bnkId[1]).remove();
    pensioncount--;
  });

  $('#addBankdetail').click(function(){
    var bankrow = "";

    if(bankcount < 10){

      bankcount++;

      bankrow += '<tr id="bnk_'+bankcount+'"> <td><input type="text" name="ownername_bank_'+bankcount+'" class="form-control" placeholder="Type Owner name here"></td> <td><input type="text" name="type_bank_'+bankcount+'" class="form-control" placeholder="Type Account type here"></td> <td><input type="text" class="form-control" name="provider_bank_'+bankcount+'" placeholder="Type provider here"></td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" name="currentvalue_bank_'+bankcount+'" class="form-control text-right currentbankamount numcomma" placeholder="Type amount here"> </div> </td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" name="monthly_bank_'+bankcount+'" class="form-control text-right monthlybankamount numcomma" placeholder="Type amount here"> <div class="input-group-prepend"> <div class="input-group-text">p.m.</div> </div> </div><span id="bnkspn_'+bankcount+'" class="close-btn bnkRemove" style="right:45px; margin-top:-30px;"><i class="fas fa-times-circle fa-lg"></i></span> </td> </tr>';
      
      $('#bankdetailholder').append(bankrow);
      autosum();

      $('.bnkRemove').unbind().click(function(){
        var bnkId = $(this).attr('id').split('_');
        $('#bnk_'+bnkId[1]).remove();
        bankcount--;
      });

    }

  });

  $('#addPensiondetail').click(function(){
    var pensionrow = "";

    if(pensioncount < 10){

      pensioncount++;

      pensionrow += '<tr id="pension_'+pensioncount+'"> <td><input type="text" name="ownername_pension_'+pensioncount+'" class="form-control" placeholder="Type Owner name here"></td> <td><input type="text" name="type_pension_'+pensioncount+'" class="form-control" placeholder="Type Account type here"></td> <td><input type="text" name="provider_pension_'+pensioncount+'" class="form-control" placeholder="Type provider here"></td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" name="amount_pension_'+pensioncount+'" class="form-control text-right currentpensionamount numcomma" placeholder="Type amount here"> </div> </td> <td> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text">£</div> </div> <input type="text" class="form-control text-right monthlypensionamount numcomma" name="monthly_pension_'+pensioncount+'" placeholder="Type amount here"> <div class="input-group-prepend"> <div class="input-group-text">p.m.</div> </div> </div> <span id="pen_'+pensioncount+'" class="close-btn penRemove" style="right:45px; margin-top:-30px;"><i class="fas fa-times-circle fa-lg"></i></span></td> </tr>';
      
      $('#pensiondetailholder').append(pensionrow);
      autosum();
      $('.penRemove').unbind().click(function(){
        var bnkId = $(this).attr('id').split('_');
        $('#pen_'+bnkId[1]).remove();
        pensioncount--;
      });
    }

  });

  $('#clientform').submit(function(event) {
      event.preventDefault();
  }).validate({
    rules:{

    },
    submitHandler: function(form) {

      var formData = $('#clientform').serialize(), bankObj = {}, bankArr = [], pensionObj = {}, pensionArr = [];

      //Dependent Data
      for(var i = 1; i <= bankcount; i++){

        bankObj = {};

        bankObj["ownername_bank_"+i] = $('input[name="ownername_bank_'+i+'"]').val();
        bankObj["type_bank_"+i] = $('input[name="type_bank_'+i+'"]').val();
        bankObj["provider_bank_"+i] = $('input[name="provider_bank_'+i+'"]').val();
        bankObj["currentvalue_bank_"+i] = $('input[name="currentvalue_bank_'+i+'"]').val();
        bankObj["monthly_bank_"+i] = $('input[name="monthly_bank_'+i+'"]').val();

        bankArr.push(bankObj);

      }

      for(var i = 1; i <= pensioncount; i++){

        pensionObj = {};

        pensionObj["ownername_pension_"+i] = $('input[name="ownername_pension_'+i+'"]').val();
        pensionObj["type_pension_"+i] = $('input[name="type_pension_'+i+'"]').val();
        pensionObj["provider_pension_"+i] = $('input[name="provider_pension_'+i+'"]').val();
        pensionObj["amount_pension_"+i] = $('input[name="amount_pension_'+i+'"]').val();
        pensionObj["monthly_pension_"+i] = $('input[name="monthly_pension_'+i+'"]').val();

        pensionArr.push(pensionObj);

      }

      formData = formData + "&bank_savings="+JSON.stringify(bankArr)+"&pension="+JSON.stringify(pensionArr);


      $.ajax({
        url:'<?php echo base_url(); ?>add/assets?form_id=<?php echo $last; ?>',
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
    }
  });

  $('#saveback').click(function(){
    var formData = $('#clientform').serialize(), bankObj = {}, bankArr = [], pensionObj = {}, pensionArr = [];

    //Dependent Data
    for(var i = 1; i <= bankcount; i++){

      bankObj = {};

      bankObj["ownername_bank_"+i] = $('input[name="ownername_bank_'+i+'"]').val();
      bankObj["type_bank_"+i] = $('input[name="type_bank_'+i+'"]').val();
      bankObj["provider_bank_"+i] = $('input[name="provider_bank_'+i+'"]').val();
      bankObj["currentvalue_bank_"+i] = $('input[name="currentvalue_bank_'+i+'"]').val();
      bankObj["monthly_bank_"+i] = $('input[name="monthly_bank_'+i+'"]').val();

      bankArr.push(bankObj);

    }

    for(var i = 1; i <= pensioncount; i++){

      pensionObj = {};

      pensionObj["ownername_pension_"+i] = $('input[name="ownername_pension_'+i+'"]').val();
      pensionObj["type_pension_"+i] = $('input[name="type_pension_'+i+'"]').val();
      pensionObj["provider_pension_"+i] = $('input[name="provider_pension_'+i+'"]').val();
      pensionObj["amount_pension_"+i] = $('input[name="amount_pension_'+i+'"]').val();
      pensionObj["monthly_pension_"+i] = $('input[name="monthly_pension_'+i+'"]').val();

      pensionArr.push(pensionObj);

    }

    formData = formData + "&bank_savings="+JSON.stringify(bankArr)+"&pension="+JSON.stringify(pensionArr);


    $.ajax({
      url:'<?php echo base_url(); ?>add/assets?form_id=<?php echo $last; ?>',
      type:'POST',
      data: formData,
      dataType: 'json',
      success:function(as){

          if(as.status){
            if(as.action == 'create'){
              location.href="<?php echo base_url(); ?>admin/ex-property-mortgage/"+as.data;
            }
            else if(as.action == 'edit'){
              location.href="<?php echo base_url(); ?>admin/ex-property-mortgage/"+as.data;
            }
          }
          else{
            alert(as.message);
          }
      }
    });
  });

</script>
