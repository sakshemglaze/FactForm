<?php 
//$page = 'dashboard';
include 'find-fact-header.php'
?>
<style>
  .col-md-10 {
  width: 78%!important;
}
</style>
<?php

  $pdata = $this->admin->getOtherIncome($last);

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
        <h4>Section 4: Other Income Details</h4>
        
        <!--=======FORM STARTS HERE===========-->
        <form id="clientform">

          <!--========FORM SUB-SECTION HEADING==========-->
          <h5 class="marTP-30">4.1 Other Gross Income (Annual)</h5>

          <!--=====4.1 OTHER GROSS INCOME TABLE STARTS HERE=====-->
          
          <!--TABLE 1 STARTS HERE-->
          <table class="table">
            <thead class="">
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <?php if($ftype){ ?><th scope="col" class="hide-col">Client 2</th><?php } ?>
              </tr>
            </thead>
            <tbody class="table-bordered">
              <tr>
                <td>Rental Income</td>
                <td>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control text-right gross-income1" name="client_rentalincome_1" value="<?php if($pdata != NULL){ echo $pdata->client_rentalincome_1; } ?>" placeholder="Type amount here">
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
                    <input type="text" class="form-control text-right gross-income2" name="client_rentalincome_2" value="<?php if($pdata != NULL){ echo $pdata->client_rentalincome_2; } ?>" placeholder="Type amount here">
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
                <td>Child Benefit</td>
                <td>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control text-right gross-income1" name="client_childbenefit_1" value="<?php if($pdata != NULL){ echo $pdata->client_childbenefit_1; } ?>" placeholder="Type amount here">
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
                    <input type="text" class="form-control text-right gross-income2" name="client_childbenefit_2" value="<?php if($pdata != NULL){ echo $pdata->client_childbenefit_2; } ?>" placeholder="Type amount here">
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
                <td>Working Tax Credit</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control text-right gross-income1" name="client_workingtaxcredit_1" value="<?php if($pdata != NULL){ echo $pdata->client_workingtaxcredit_1; } ?>" placeholder="Type amount here">
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
                    <input type="text" class="form-control text-right gross-income2" name="client_workingtaxcredit_2" value="<?php if($pdata != NULL){ echo $pdata->client_workingtaxcredit_2; } ?>" placeholder="Type amount here">
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
                <td>Child Tax Credit</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control text-right gross-income1" name="client_childtaxcredit_1" value="<?php if($pdata != NULL){ echo $pdata->client_childtaxcredit_1; } ?>" placeholder="Type amount here">
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
                    <input type="text" class="form-control text-right gross-income2" name="client_childtaxcredit_2" value="<?php if($pdata != NULL){ echo $pdata->client_childtaxcredit_2; } ?>" placeholder="Type amount here">
                    <div class="input-group-prepend">
                      <div class="input-group-text">p.a.</div>
                    </div>
                  </div>

<!--                   <span style="margin:0px 5px;">£</span>                  
                  <span style="margin: 5px;">p.a.</span> -->
                </td>
                <?php } ?>
              </tr>

              <tr>
                <td>Disability Benefits <span style="font-weight: normal;">(e.g. DLA, PIP etc)</span></td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control text-right gross-income1" name="client_disbenefit_1" value="<?php if($pdata != NULL){ echo $pdata->client_disbenefit_1; } ?>" placeholder="Type amount here">
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
                    <input type="text" class="form-control text-right gross-income2" name="client_disbenefit_2" value="<?php if($pdata != NULL){ echo $pdata->client_disbenefit_2; } ?>" placeholder="Type amount here">
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
                <td>Pension (State)</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control text-right gross-income1" name="client_statepension_1" value="<?php if($pdata != NULL){ echo $pdata->client_statepension_1; } ?>" placeholder="Type amount here">
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
                    <input type="text" class="form-control text-right gross-income2" name="client_statepension_2" value="<?php if($pdata != NULL){ echo $pdata->client_statepension_2; } ?>" placeholder="Type amount here">
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
                <td>Pension (Private)</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control text-right gross-income1" name="client_privatepension_1" value="<?php if($pdata != NULL){ echo $pdata->client_privatepension_1; } ?>" placeholder="Type amount here">
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
                    <input type="text" class="form-control text-right gross-income2" name="client_privatepension_2" value="<?php if($pdata != NULL){ echo $pdata->client_privatepension_1; } ?>" placeholder="Type amount here">
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
                <td>Investment</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control text-right gross-income1" name="client_investment_1" value="<?php if($pdata != NULL){ echo $pdata->client_investment_1; } ?>" placeholder="Type amount here">
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
                    <input type="text" class="form-control text-right gross-income2" name="client_investment_2" value="<?php if($pdata != NULL){ echo $pdata->client_investment_2; } ?>" placeholder="Type amount here">
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
                <td>Other : <span style="font-weight: normal;">(please provide details in Notes)</span></td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input type="text" class="form-control text-right gross-income1" name="client_other_1" value="<?php if($pdata != NULL){ echo $pdata->client_other_1; } ?>" placeholder="Type amount here">
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
                    <input type="text" class="form-control text-right gross-income2" name="client_other_2" value="<?php if($pdata != NULL){ echo $pdata->client_other_2; } ?>" placeholder="Type amount here">
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
          </table>
          <!--/TABLE 1 ENDS HERE-->

          <!--TABLE 2 STARTS HERE-->
          <table class="table" style="margin-top: 10px;">
            <tbody class="table-bordered" style="border:2px solid #000000;">
              <tr>
                <td>Total Other Gross Income</td>
                <td style="font-weight: bold;">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input id="total_gross_1" type="text" class="form-control text-right" name="client_totalothergross_1" value="<?php if($pdata != NULL){ echo $pdata->client_totalothergross_1; } ?>" style="font-weight: bold;">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">p.a.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                  
                  <span style="margin: 5px;">p.a.</span> -->
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col" style="font-weight: bold;">

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input id="total_gross_2" type="text" class="form-control text-right" name="client_totalothergross_2" value="<?php if($pdata != NULL){ echo $pdata->client_totalothergross_2; } ?>" style="font-weight: bold;">
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
          </table>
          <!--/TABLE 2 ENDS HERE-->

          <!--=====/4.1 OTHER GROSS INCOME TABLE STARTS HERE=====-->

          <!--========FORM SUB-SECTION HEADING==========-->
          <h5 class="marTP-30">4.2 Other Income Net (Monthly)</h5>

          <!--=====4.2 OTHER INCOME NET TABLE STARTS HERE=====-->
          <table class="table" style="margin-top: 10px;">
            <thead class="">
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <?php if($ftype){ ?><th scope="col" class="hide-col">Client 2</th><?php } ?>
              </tr>
            </thead>
            <tbody class="table-bordered" style="border:2px solid #000000;">
              <tr>
                <td>Total Other Income Net</td>
                <td style="font-weight: bold;">

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                   <input type="text" class="form-control text-right" name="client_totalotherincomenet_1" value="<?php if($pdata != NULL){ echo $pdata->client_totalotherincomenet_1; } ?>" placeholder="Type amount here" style="font-weight: bold;">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                  
                  <span style="margin:5px;">p.m.</span> -->
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col" style="font-weight: bold;">

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input type="text" class="form-control text-right" name="client_totalotherincomenet_2" value="<?php if($pdata != NULL){ echo $pdata->client_totalotherincomenet_2; } ?>" placeholder="Type amount here" style="font-weight: bold;">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                  
                  <span style="margin:5px;">p.m.</span> -->
                </td>
                <?php } ?>
              </tr>
            </tbody>
          </table>
          <!--=====/4.2 OTHER INCOME NET TABLE ENDS HERE=====-->

          <!--========FORM SUB-SECTION HEADING==========-->
          <h5 class="marTP-30">4.3 Income Summary</h5>

          <!--=====4.3 INCOME SUMMARY TABLE STARTS HERE=====-->
          <table class="table" style="margin-top: 10px;">
            <thead class="">
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <?php if($ftype){ ?><th scope="col" class="hide-col">Client 2</th><?php } ?>
              </tr>
            </thead>
            <tbody class="table-bordered">
              <tr>
                <td>Total Annual Gross Income from<br/><u>all</u> sources</td>
                <?php 
                  if(is_numeric($last))
                  {
                    $annual_4_3_1 = $this->client->getSectionAnnual4_3_1($last, $lineCheck);
                    $annual_4_3_2 = $this->client->getSectionAnnual4_3_2($last, $lineCheck);

                    $monthly_4_3_1 = $this->client->getSectionMonthly4_3_1($last, $lineCheck);
                    $monthly_4_3_2 = $this->client->getSectionMonthly4_3_2($last, $lineCheck);
                  }
                  else{
                    
                  }
                
                ?>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .635rem .75rem;">£</div>
                    </div>
                    <input id="annualgross_4_3_1" name="client_annualgrossincome_1" value="<?php if(is_numeric($last) && $annual_4_3_1 != NULL){echo number_format($annual_4_3_1, 2);} ?>" type="text" class="form-control text-right">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .635rem .75rem;">p.a.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>

                  <span style="margin: 5px;">p.a.</span> -->
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col">

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .635rem .75rem;">£</div>
                    </div>
                    <input id="annualgross_4_3_2" name="client_annualgrossincome_2" value="<?php if(is_numeric($last)){echo number_format($annual_4_3_2, 2);} ?>" type="text" class="form-control text-right">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .635rem .75rem;">p.a.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                  
                  <span style="margin: 5px;">p.a.</span> -->
                </td>
                <?php } ?>
              </tr>

              <tr>
                <td>Total Net Monthly Income from<br/><u>all</u> sources</td>
                <td>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .635rem .75rem;">£</div>
                    </div>
                    <input id="netmonthly_4_3_1" name="client_netmonthlyincome_1" value="<?php if(is_numeric($last)){echo number_format($monthly_4_3_1, 2);} ?>" type="text" class="form-control text-right">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .635rem .65rem;">p.m.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                  <input type="text" class="form-control col-md-10 date-input-box text-right">
                  <span style="margin:5px;">p.m.</span> -->
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col">

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .635rem .75rem;">£</div>
                    </div>
                    <input id="netmonthly_4_3_2" name="client_netmonthlyincome_2" value="<?php if(is_numeric($last)){echo number_format($monthly_4_3_2, 2);} ?>" type="text" class="form-control text-right">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .635rem .65rem;">p.m.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                  
                  <span style="margin:5px;">p.m.</span> -->
                </td>
                <?php } ?>
              </tr>
            </tbody>
          </table>
          <!--=====/4.3 INCOME SUMMARY TABLE ENDS HERE=====-->

          <!--========FORM SUB-SECTION HEADING==========-->
          <h5 class="marTP-30">4.4 Future Changes to Income & Retirement</h5>

          <!--=====4.4 FUTURE CHANGES TO INCOME & RETIREMENT TABLE STARTS HERE=====-->
          <table class="table" style="margin-top: 10px;">
            <thead class="">
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <?php if($ftype){ ?><th scope="col" class="hide-col">Client 2</th><?php } ?>
              </tr>
            </thead>
            <tbody class="table-bordered">
              <tr>
                <td>Do you expect your income to<br/>change in the foreseeable<br/>future?</td>
                <td class="text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_incomeexpt_1=="Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_incomeexpt_1" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_incomeexpt_1=="No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_incomeexpt_1" value="No" id="">
                    </div>
                  </center>
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col text-center">
                  <center>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">Yes</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_incomeexpt_2=="Yes"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_incomeexpt_2" value="Yes" id="">
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <input class="form-check-input checkSelection" <?php if($pdata != NULL && $pdata->client_incomeexpt_2=="No"){ echo "checked"; } ?> style="margin-left: 0.25rem;" type="checkbox" name="client_incomeexpt_2" value="No" id="">
                    </div>
                  </center>
                </td>
                <?php } ?>
              </tr>

              <tr>
                <td>What is your State Pension Age?</td>
                <td><input type="text" class="form-control" value="<?php if($pdata != NULL){ echo $pdata->client_statepensionage_1; } ?>" name="client_statepensionage_1" placeholder="Type your pension age"></td>
                <?php if($ftype){ ?>
                <td class="hide-col">
                  <input type="text" class="form-control" value="<?php if($pdata != NULL){ echo $pdata->client_statepensionage_2; } ?>" name="client_statepensionage_2" placeholder="Type your pension age">
                </td>
                <?php } ?>
              </tr>

              <tr>
                <td>What is your expected<br/>retirement age?</td>
                <td>
                  <input type="text" name="client_exretireage_1" class="form-control" value="<?php if($pdata != NULL){ echo $pdata->client_exretireage_1; } ?>" placeholder="Type your expected retirement age">
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col">
                  <input type="text" name="client_exretireage_2" class="form-control" value="<?php if($pdata != NULL){ echo $pdata->client_exretireage_2; } ?>" placeholder="Type your expected retirement age">
                </td>
                <?php } ?>
              </tr>

              <tr>
                <td>What is your expected<br/>Retirement Income <span style="font-weight: normal;">(if relevant)</span></td>
                <td>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .635rem .75rem;">£</div>
                    </div>
                    <input type="text" name="client_exretireincome_1" value="<?php if($pdata != NULL && $pdata->client_exretireincome_1 != ""){ echo number_format($pdata->client_exretireincome_1, 2); } ?>" class="form-control text-right"  placeholder="Type amount here">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .635rem .65rem;">p.a.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                  
                  <span style="margin: 5px;">p.a.</span> -->
                </td>
                <?php if($ftype){ ?>
                <td class="hide-col">

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .635rem .75rem;">£</div>
                    </div>
                    <input type="text" name="client_exretireincome_2" value="<?php if($pdata != NULL && $pdata->client_exretireincome_2 != ""){ echo $pdata->client_exretireincome_2; } ?>" class="form-control text-right" placeholder="Type amount here">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .635rem .65rem;">p.a.</div>
                    </div>
                  </div>

                  <!-- <span style="margin:0px 5px;">£</span>
                  
                  <span style="margin: 5px;">p.a.</span> -->
                </td>
                <?php } ?> 
              </tr>
            </tbody>
          </table>
          <!--=====4.4 FUTURE CHANGES TO INCOME & RETIREMENT TABLE ENDS HERE=====-->

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
                  <textarea style="text-transform: inherit!important;" class="form-control" id="" name="client_additionalnotes" rows="6" placeholder="Type additional notes here..."><?php if($pdata != NULL){ echo $pdata->client_additionalnotes; } ?></textarea>
                </td>
              </tr>
            </tbody>
          </table>
          <!--=====ADDITIONAL NOTES TABLE ENDS HERE=====-->

          <!--=====FORM NEXT/SAVE BUTTONS STARTS HERE=====-->
          <div class="" style="text-align: center;margin:20px 0px;">

            <!--Back button-->
            <!-- <a href="<?php echo base_url(); ?>admin/self-employed<?php if($formExist){ echo "/".$last; } ?>" class="btn btn-primary" style="cursor:pointer;">Back</a> -->
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
  var totalIncome_4_1_1 = 0, totalIncome_4_1_2 = 0, monthlyIncome1 = 0, monthlyIncome2 = 0;
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

  function numberWithCommas(x) {
      var parts = x.toString().split(".");
      parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      return parts.join(".");
  }

  //Remove comma
  function removeComma(str){
    return str.replace (/,/g, "");
  }

  $('.checkSelection').on('change', function() {
      $('input[name="' + this.name + '"]').not(this).prop('checked', false);
  });

  //AutoSum for  Gross Employment Income
  // if(localStorage.getItem('totalIncome_3_2_1') == undefined){
  //   totalIncome_4_1_1 = parseFloat(localStorage.getItem('totalIncome_2_3_1')); 
  // }
  // else{
  //   totalIncome_4_1_1 = parseFloat(localStorage.getItem('totalIncome_2_3_1')) + parseFloat(localStorage.getItem('totalIncome_3_2_1'));
  // }
  // monthlyIncome1 = totalIncome_4_1_1 / 12;
  // $('#annualgross_4_3_1').val(addZeroes(totalIncome_4_1_1+""));
  // $('#netmonthly_4_3_1').val(addZeroes(monthlyIncome1+""));

  // if(localStorage.getItem('totalIncome_3_2_2') == undefined){
  //   totalIncome_4_1_2 = parseFloat(localStorage.getItem('totalIncome_2_3_2'));
  // }
  // else{
  //   totalIncome_4_1_2 = parseFloat(localStorage.getItem('totalIncome_2_3_2')) + parseFloat(localStorage.getItem('totalIncome_3_2_2'));
  // }
  // monthlyIncome2 = totalIncome_4_1_2 / 12;
  // $('#annualgross_4_3_2').val(addZeroes(totalIncome_4_1_2+""));
  // $('#netmonthly_4_3_2').val(addZeroes(monthlyIncome2+""));
  
  $('.gross-income1').on('keyup', function () {
    
    var sum = 0;
    $(this).val(function(index, value) {
        value = value.replace(/,/g,'');
        return numberWithCommas(value);
    });
    $('.gross-income1').each(function() {
        sum += parseFloat(removeComma($(this).val())) || 0;
    });

    totalIncome_4_1_1 = sum + <?php 
      if(is_numeric($last))
      {
        echo $this->client->getSectionAnnual4_3_1($last, $lineCheck);
      }
    
    ?>;
    
    totalIncome_4_1_1 = totalIncome_4_1_1 - <?php if($pdata != NULL){ if($this->client->removeComma($pdata->client_totalothergross_1) == ""){echo "0";}else{ echo $this->client->removeComma($pdata->client_totalothergross_1); } }else{echo "0";} ?>;

 
    
    $('#total_gross_1').val(addZeroes(sum+""));
    //Setting annual gross income
    $('#annualgross_4_3_1').val(addZeroes(totalIncome_4_1_1+""));
    
  });

  $('input[name="client_totalotherincomenet_1"]').keyup(function(){
    $(this).val(function(index, value) {
        value = value.replace(/,/g,'');
        return numberWithCommas(value);
    });
    monthlyIncome1 = parseFloat(removeComma($(this).val())) + <?php 
      if(is_numeric($last))
      {
        echo $this->client->getSectionMonthly4_3_1($last, $lineCheck);
      }
    
    ?>;
    monthlyIncome1 = monthlyIncome1 - <?php if($pdata != NULL){ if($this->client->removeComma($pdata->client_totalotherincomenet_1) == ""){echo "0";}else{echo $this->client->removeComma($pdata->client_totalotherincomenet_1);} }else{echo "0";} ?>;
    $('#netmonthly_4_3_1').val(addZeroes(monthlyIncome1+""));
  });

  $('input[name="client_totalotherincomenet_2"]').keyup(function(){
    $(this).val(function(index, value) {
        value = value.replace(/,/g,'');
        return numberWithCommas(value);
    });
    monthlyIncome2 = parseFloat(removeComma($(this).val())) + <?php 
      if(is_numeric($last))
      {
        echo $this->client->getSectionMonthly4_3_2($last, $lineCheck);
      }
    
    ?>;
    monthlyIncome2 = monthlyIncome2 - <?php if($pdata != NULL){ if($this->client->removeComma($pdata->client_totalotherincomenet_2) == ""){echo "0";}else{echo $this->client->removeComma($pdata->client_totalotherincomenet_2);} }else{echo "0";} ?>;
    $('#netmonthly_4_3_2').val(addZeroes(monthlyIncome2+""));
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

    totalIncome_4_1_2 = sum + <?php 
      if(is_numeric($last))
      {
        echo $this->client->getSectionAnnual4_3_2($last, $lineCheck);
      }
    
    ?>;
    totalIncome_4_1_2 = totalIncome_4_1_2 - <?php if($pdata != NULL){ if($this->client->removeComma($pdata->client_totalothergross_2) == ""){echo "0";}else{ echo $this->client->removeComma($pdata->client_totalothergross_2); } }{echo "0";} ?>;

    $('#total_gross_2').val(addZeroes(sum+""));
    $('#annualgross_4_3_2').val(addZeroes(totalIncome_4_1_2+""));
  });

  $('#clientform').submit(function(event) {
      event.preventDefault();
  }).validate({
    rules:{

    },
    submitHandler: function(form) {

      var formData = $("#clientform").serialize();

      $.ajax({
          url:'<?php echo base_url(); ?>add/otherincome?form_id=<?php echo $last; ?>',
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
    }
  });

  $('#saveback').click(function(){
    var formData = $("#clientform").serialize();

    $.ajax({
        url:'<?php echo base_url(); ?>add/otherincome?form_id=<?php echo $last; ?>',
        type:'POST',
        data: formData,
        dataType: 'json',
        success:function(as){

          if(as.status){
            if(as.action == 'create'){
              location.href = document.referrer;
            }
            else if(as.action == 'edit'){
              location.href = document.referrer;
            }
          }
          else{
            alert(as.message);
          }

        }
    });
  });
</script>
