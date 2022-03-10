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

<?php

  $pdata = $this->admin->getAppendix($last); 

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

        <h4>Section 15: Appendix – Cost Breakdown</h4>
        <p>
          The page is designed to summarise the costs involved in the transaction and consider what deposit may be available once these are accounted for.  Unknown costs can be estimate based on reasonable expectations.
        </p>

        <form id="clientform">

        <!--========FORM SUB-SECTION HEADING==========-->
        <h5 class="marTP-30">15.1 Property Sale less fees (if relevant)</h5>

        <!--===== 15.1 PROPERTY SALE LESS FEES (IF RELEVENT) TABLE STARTS HERE =====-->
        <div class="col-md-11 center-block">
          <table class="table">
            <tbody class="table-bordered">
              <tr>
                <td colspan="2">Sale Price of Property</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input id="salePrice" type="text" class="form-control text-right deduct numcomma" name="sale_price_1" value="<?php if($pdata != NULL){echo $pdata->sale_price_1;} ?>" placeholder="Type amount here" style="font-weight: bold;padding-right: 2.5rem;">
                  </div>
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="sale_price_comment" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->sale_price_comment;} ?></textarea>
                </td>
              </tr>

              <tr>
                <td rowspan="4" style="width: 10%;background-color: #ffffff;padding: .75rem;">
                  <div style="text-align:center;-ms-transform: rotate(450deg); /* IE 9 */ -webkit-transform: rotate(450deg); /* Safari */  transform: rotate(450deg);">
                    Deduct
                  </div>
                </td>
                <td style="background-color: #f2f2f2;font-weight: normal;text-align: right;padding-right: 0.85rem;">Deduct  Outstanding Mortgage Balance</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .375rem .35rem;">- (£</div>
                    </div>
                    <input id="deductBalance" type="text" name="deduct_outstanding_1" value="<?php if($pdata != NULL){echo $pdata->deduct_outstanding_1;} ?>" class="form-control text-right deduct numcomma" placeholder="Type amount here">
                    <div class="input-group-prepend">
                      <div class="input-group-text">)</div>
                    </div>
                  </div>
                  <!-- <span style="margin: 0px 5px;">- (£</span>
                  <input type="text" class="form-control col-md-9 date-input-box text-right" name="">
                  <span style="margin: 5px;">)</span> -->
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="deduct_outstanding_comment" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->deduct_outstanding_comment;} ?></textarea>
                </td>
              </tr>

              <tr>
                <td style="font-weight: normal;">Estate Agent’s Fees</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .375rem .35rem;">- (£</div>
                    </div>
                    <input id="estateFees" type="text" name="estate_fees_1" value="<?php if($pdata != NULL){echo $pdata->estate_fees_1;} ?>" class="form-control text-right deduct numcomma" placeholder="Type amount here">
                    <div class="input-group-prepend">
                      <div class="input-group-text">)</div>
                    </div>
                  </div>
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="estate_fees_2" value="" id="" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->estate_fees_2;} ?></textarea>
                </td>
              </tr>

              <tr>
                <td style="font-weight: normal;">Solicitor’s Fees</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .375rem .35rem;">- (£</div>
                    </div>
                    <input id="solFees" type="text" name="solicitor_fees_1" value="<?php if($pdata != NULL){echo $pdata->solicitor_fees_1;} ?>" class="form-control text-right deduct numcomma" placeholder="Type amount here">
                    <div class="input-group-prepend">
                      <div class="input-group-text">)</div>
                    </div>
                  </div>
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="solicitor_fees_2" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->solicitor_fees_2;} ?></textarea>
                </td>
              </tr>

              <tr>
                <td style="font-weight: normal;">Other costs / Fees</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .375rem .35rem;">- (£</div>
                    </div>
                    <input id="otherFees" type="text" name="other_fees_1" value="<?php if($pdata != NULL){echo $pdata->other_fees_1;} ?>" class="form-control text-right deduct numcomma" placeholder="Type amount here">
                    <div class="input-group-prepend">
                      <div class="input-group-text">)</div>
                    </div>
                  </div>
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="other_fees_2" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->other_fees_2;} ?></textarea>
                </td>
              </tr>

              <tr style="border: 2px solid #000000;">
                <td colspan="2">Balance from Property Sale</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input id="balanceProperty" type="text" name="property_sale_1" value="<?php if($pdata != NULL){echo $pdata->property_sale_1;} ?>" class="form-control text-right" placeholder="Balace from propertry sale" style="font-weight: bold;padding-right: 2.5rem;">
                  </div>
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="property_sale_2" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->property_sale_2;} ?></textarea>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--===== /15.1 PROPERTY SALE LESS FEES (IF RELEVENT) TABLE ENDS HERE =====-->

        <!--========FORM SUB-SECTION HEADING==========-->
        <h5 class="marTP-30">15.2 Other sources of funds</h5>

        <!--===== 15.2 OTHER SOURCES OF FUNDS TABLE STARTS HERE =====-->
        <div class="col-md-11 center-block">
          <table class="table">
            <tbody class="table-bordered">
              <tr>
                <td colspan="2">Balance from Property Sale</td>
                <td style="font-weight: bold;">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input id="balanceProperty1" type="text" class="form-control text-right othersource" name="funds_sale_1" value="<?php if($pdata != NULL){echo $pdata->funds_sale_1;} ?>" placeholder="Type amount here" style="font-weight: bold;">
                  </div>
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="funds_sale_2" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->funds_sale_2;} ?></textarea>
                </td>
              </tr>

              <tr>
                <td rowspan="4" style="width: 10%;background-color: #ffffff;padding: .75rem;">
                  <div style="text-align:center;-ms-transform: rotate(450deg); /* IE 9 */ -webkit-transform: rotate(450deg); /* Safari */  transform: rotate(450deg);">
                    Add
                  </div>
                </td>
                <td style="background-color: #f2f2f2;font-weight: normal;text-align: right;padding-right: 0.85rem;">    Savings 
                </td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .375rem .35rem;">+ £</div>
                    </div>
                    <input type="text" name="savings_1" value="<?php if($pdata != NULL){echo $pdata->savings_1;} ?>" class="form-control text-right othersource numcomma" placeholder="Type amount here">
                  </div>
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="savings_2" value="" id="" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->savings_2;} ?></textarea>
                </td>
              </tr>

              <tr>
                <td style="font-weight: normal;">Gifts</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .375rem .35rem;">+ £</div>
                    </div>
                    <input type="text" name="gifts_1" value="<?php if($pdata != NULL){echo $pdata->gifts_1;} ?>" class="form-control text-right othersource numcomma" placeholder="Type amount here">
                  </div>
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="gifts_2" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->gifts_2;} ?></textarea>
                </td>
              </tr>

              <tr>
                <td style="font-weight: normal;">Inheritance</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .375rem .35rem;">+ £</div>
                    </div>
                    <input type="text" name="inheritance_1" value="<?php if($pdata != NULL){echo $pdata->inheritance_1;} ?>" class="form-control text-right othersource numcomma" placeholder="Type amount here">
                  </div>
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="inheritance_2" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->inheritance_2;} ?></textarea>
                </td>
              </tr>

              <tr>
                <td style="font-weight: normal;">Other</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .375rem .35rem;">+ £</div>
                    </div>
                    <input type="text" name="other_1" value="<?php if($pdata != NULL){echo $pdata->other_1;} ?>" class="form-control text-right othersource numcomma" placeholder="Type amount here">
                  </div>
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="other_2" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->other_2;} ?></textarea>
                </td>
              </tr>

              <tr style="border: 2px solid #000000;">
                <td colspan="2">Total Amount available</td>
                <td style="font-weight: bold;">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input id="othersource_total" name="amount_availabe_1" value="<?php if($pdata != NULL){echo $pdata->amount_availabe_1;} ?>" type="text" class="form-control text-right" placeholder="Total amount" style="font-weight: bold;">
                  </div>
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="amount_availabe_2" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->amount_availabe_2;} ?></textarea>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--===== /15.2 OTHER SOURCES OF FUNDS TABLE ENDS HERE =====-->

        <!--========FORM SUB-SECTION HEADING==========-->
        <h5 class="marTP-30">15.3 Property Purchase Costs</h5>

        <!--===== 15.3 PROPERTY PURCHASE COSTS TABLE STARTS HERE =====-->
        <div class="col-md-11 center-block">
          <table class="table">
            <tbody class="table-bordered">
              <tr>
                <td rowspan="8" style="width: 10%;padding: .75rem;">
                  <div style="text-align:center;-ms-transform: rotate(450deg); /* IE 9 */ -webkit-transform: rotate(450deg); /* Safari */  transform: rotate(450deg);">
                    Add
                  </div>
                </td>
                <td style="background-color: #f2f2f2;font-weight: normal;text-align: right;padding-right: 0.85rem;">    Survey Fees
                </td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .375rem .35rem;">+ £</div>
                    </div>
                    <input type="text" name="purchase_survey_1" value="<?php if($pdata != NULL){echo $pdata->purchase_survey_1;} ?>" class="form-control text-right proppurchase numcomma" placeholder="Type amount here">
                  </div>
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="purchase_survey_2" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->purchase_survey_2;} ?></textarea>
                </td>
              </tr>

              <tr>
                <td style="font-weight: normal;">Solicitor’s Fees</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .375rem .35rem;">+ £</div>
                    </div>
                    <input type="text" name="purchase_solicitor_1" value="<?php if($pdata != NULL){echo $pdata->purchase_solicitor_1;} ?>" class="form-control text-right proppurchase numcomma" placeholder="Type amount here">
                  </div>
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="purchase_solicitor_2" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->purchase_solicitor_2;} ?></textarea>
                </td>
              </tr>

              <tr>
                <td style="font-weight: normal;">Mortgage Fees</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .375rem .35rem;">+ £</div>
                    </div>
                    <input type="text" name="purchase_mortgage_1" value="<?php if($pdata != NULL){echo $pdata->purchase_mortgage_1;} ?>" class="form-control text-right proppurchase numcomma" placeholder="Type amount here">
                  </div>
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="purchase_mortgage_2" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->purchase_mortgage_2;} ?></textarea>
                </td>
              </tr>

              <tr>
                <td style="font-weight: normal;">Stamp Duty Land Tax</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .375rem .35rem;">+ £</div>
                    </div>
                    <input type="text" name="purchase_stamp_1" value="<?php if($pdata != NULL){echo $pdata->purchase_stamp_1;} ?>" class="form-control text-right proppurchase numcomma" placeholder="Type amount here">
                  </div>
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="purchase_stamp_2" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->purchase_stamp_2;} ?></textarea>
                </td>
              </tr>

              <tr>
                <td style="font-weight: normal;">Removal Fees</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .375rem .35rem;">+ £</div>
                    </div>
                    <input type="text" name="purchase_removal_1" value="<?php if($pdata != NULL){echo $pdata->purchase_removal_1;} ?>" class="form-control text-right proppurchase numcomma" placeholder="Type amount here">
                  </div>
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="purchase_removal_2" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->purchase_removal_2;} ?></textarea>
                </td>
              </tr>

              <tr>
                <td style="font-weight: normal;">Home Improvements</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .375rem .35rem;">+ £</div>
                    </div>
                    <input type="text" name="purchase_home_1" value="<?php if($pdata != NULL){echo $pdata->purchase_home_1;} ?>" class="form-control text-right proppurchase numcomma" placeholder="Type amount here">
                  </div>
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="purchase_home_2" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->purchase_home_2;} ?></textarea>
                </td>
              </tr>

              <tr>
                <td style="font-weight: normal;">Furniture</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .375rem .35rem;">+ £</div>
                    </div>
                    <input type="text" name="purchase_furniture_1" value="<?php if($pdata != NULL){echo $pdata->purchase_furniture_1;} ?>" class="form-control text-right proppurchase numcomma" placeholder="Type amount here">
                  </div>
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="purchase_furniture_2" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->purchase_furniture_2;} ?></textarea>
                </td>
              </tr>

              <tr>
                <td style="font-weight: normal;">Other costs / fees</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .375rem .35rem;">+ £</div>
                    </div>
                    <input type="text" name="purchase_other_1" value="<?php if($pdata != NULL){echo $pdata->purchase_other_1;} ?>" class="form-control text-right proppurchase numcomma" placeholder="Type amount here">
                  </div>
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="purchase_other_2" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->purchase_other_2;} ?></textarea>
                </td>
              </tr>

              <tr style="border: 2px solid #000000;">
                <td colspan="2">Total Costs</td>
                <td style="font-weight: bold;">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="color: red;font-weight: bold;">£</div>
                    </div>
                    <input id="proppurchase_total" name="purchase_total_1" value="<?php if($pdata != NULL){echo $pdata->purchase_total_1;} ?>" type="text" class="form-control text-right" placeholder="Total costs" style="font-weight: bold;">
                  </div>
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="purchase_total_2" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->purchase_total_2;} ?></textarea>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--===== /15.3 PROPERTY PURCHASE COSTS TABLE ENDS HERE =====-->

        <!--========FORM SUB-SECTION HEADING==========-->
        <h5 class="marTP-30">15.4 Summary</h5>

        <!--===== 15.4 SUMMARY TABLE STARTS HERE =====-->
        <div class="col-md-11 center-block">
          <table class="table">
            <tbody class="table-bordered">
              <tr>
                <td style="font-weight: normal;">Total Amount available (15.2)</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">£</div>
                    </div>
                    <input id="total_amount_2" name="summary_available_1" value="<?php if($pdata != NULL){echo $pdata->summary_available_1;} ?>" type="text" class="form-control text-right" placeholder="Total amount available" style="padding-right: 2.5rem;">
                  </div>
                  <!-- <span style="margin: 0px 5px;">£</span>
                  <input type="text" class="form-control col-md-11 date-input-box text-right" style="padding-right: 1.55rem;" name="" value=""> -->
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="summary_available_2" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->summary_available_2;} ?></textarea>
                </td>
              </tr>

              <tr>
                <td style="font-weight: normal;">Less Total Costs (15.3)</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="padding: .375rem .35rem;">- (£</div>
                    </div>
                    <input id="total_amount_3" name="summary_less_1" value="<?php if($pdata != NULL){echo $pdata->summary_less_1;} ?>" type="text" class="form-control text-right" placeholder="- Total Costs">
                    <div class="input-group-prepend">
                      <div class="input-group-text">)</div>
                    </div>
                  </div>
                  <!-- <span style="margin: 0px 5px;">- (£</span>
                  <input type="text" class="form-control col-md-10 date-input-box text-right" name="" value="">
                  <span style="margin: 5px;">)</span> -->
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="summary_less_2" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->summary_less_2;} ?></textarea>
                </td>
              </tr>
              
              <tr style="border: 2px solid #000000;">
                <td>Grand Total</td>
                <td>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input id="grand_total" name="summary_grand_1" type="text" value="<?php if($pdata != NULL){echo $pdata->summary_grand_1;} ?>" class="form-control text-right" placeholder="Grand Total" style="font-weight: bold;padding-right: 2.5rem;">                      
                  </div>
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="summary_grand_2" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->summary_grand_2;} ?></textarea>
                </td>
              </tr>

              <tr>
                <td>Assumed Purchase Price</td>
                <td style="font-weight: bold;">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input type="text" name="summary_price_1" value="<?php if($pdata != NULL){echo $pdata->summary_price_1;} ?>" class="form-control text-right" placeholder="Assumed purchase price" style="font-weight: bold;padding-right: 2.5rem;">                      
                  </div>                  
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="summary_price_2" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->summary_price_2;} ?></textarea>
                </td>
              </tr>

              <tr style="border: 2px solid #000000;">
                <td>Amount willing to set aside for deposit</td>
                <td style="font-weight: bold;">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" style="font-weight: bold;">£</div>
                    </div>
                    <input type="text" name="summary_deposit_1" value="<?php if($pdata != NULL){echo $pdata->summary_deposit_1;} ?>" class="form-control text-right" placeholder="Deposit amount" style="font-weight: bold;padding-right: 2.5rem;">                      
                  </div> 
                </td>
                <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" rows="2" name="summary_deposit_2" placeholder="Type comment here" style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->summary_deposit_2;} ?></textarea>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--===== /15.4 SUMMARY TABLE ENDS HERE =====-->

        <!--===== ADDITION OBSERVATION SECTION STARTS HERE=====-->
        <h5 class="marTP-30">Additional observations</h5>

        <!--===== 15.4 SUMMARY TABLE STARTS HERE =====-->
        <table class="table">
          <tbody class="table-bordered">
            <tr>
              <td style="padding-right: 0rem;">
                <textarea style="text-transform: inherit!important;" class="form-control" name="additional_observations" rows="10" placeholder="Type additional observation here..." style="word-break: break-all;"><?php if($pdata != NULL){echo $pdata->additional_observations;} ?></textarea>
              </td>
            </tr>
          </tbody>
        </table>

        <!--=====Table Starts Here=====-->
          <table class="tab-child" style="margin-top: 10px;">
            <tbody class="table-bordered">
              <tr>
                <td style="width: 4.4%;">Adviser Name</td>
                <td><input type="text" name="adviser_name" value="<?php if($pdata != NULL){echo $pdata->adviser_name;} ?>" class="form-control" placeholder="Type adviser name here"></td>
              </tr>
              <tr>
                <td style="width: 4.4%;">Date Completed</td>
                <td><input type="text" name="date_completed" value="<?php if($pdata != NULL){echo $pdata->date_completed;} ?>" class="form-control selectDate" placeholder="Type date when form completed"></td>
              </tr>
            </tbody><!--/.table-bordered-->
          </table>
          <!--=====/Table Ends Here=====-->

                  
        <!--=====FORM NEXT/SAVE BUTTONS STARTS HERE=====-->
        <div class="" style="text-align: center;margin:20px 0px;">

          <!--Back button-->
          <button id="saveback" type="button" class="btn btn-primary" style="cursor:pointer;">Save and Back</button>
            <!--/Back button-->

          <button type="submit" class="btn btn-primary" style="cursor:pointer;">Next</button>
          <!-- <button type="submit" class="btn btn-primary" style="cursor:pointer;">Save</button> -->
        </div>
        <!--=====/FORM NEXT/SAVE BUTTONS ENDS HERE=====-->

        </form>

      </div><!--/.col-lg-12-->
    </div><!--/.row-->
  </div>
  <!-- /.container-fluid-->
</div>
<!-- /.content-wrapper-->

<script>

var sec2total = 0, sec3total = 0;
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

function removeComma(str){
  return str.split(",").join("");
}

function numberWithCommas(x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return parts.join(".");
}


$('.deduct').on('keyup', function () {
  var diff = 0, salePrice = 0, deductBalance = 0, estateFees = 0, solFees = 0, otherFees = 0;

  salePrice = $('#salePrice').val() == "" ? 0 : parseFloat(removeComma($('#salePrice').val()));
  deductBalance = $('#deductBalance').val() == "" ? 0 : parseFloat(removeComma($('#deductBalance').val()));
  estateFees = $('#estateFees').val() == "" ? 0 : parseFloat(removeComma($('#estateFees').val()));
  solFees = $('#solFees').val() == "" ? 0 : parseFloat(removeComma($('#solFees').val()));
  otherFees = $('#otherFees').val() == "" ? 0 : parseFloat(removeComma($('#otherFees').val()));

  diff = salePrice - deductBalance - estateFees - solFees - otherFees;
  $('#balanceProperty').val(addZeroes(diff+""));
  $('#balanceProperty1').val($('#balanceProperty').val());

  var sum = 0;
  $(this).val(function(index, value) {
      value = value.replace(/,/g,'');
      return numberWithCommas(value);
  });
  $('.othersource').each(function() {
      sum += parseFloat(removeComma($(this).val())) || 0;
  });
  
  $('#othersource_total').val(addZeroes(sum+""));
});

$('.othersource, .proppurchase').on('keyup', function () {
  var sectionName = $(this).attr('class').split(" ")[2];
  var sum = 0;
  $(this).val(function(index, value) {
      value = value.replace(/,/g,'');
      return numberWithCommas(value);
  });
  $('.'+sectionName).each(function() {
      sum += parseFloat(removeComma($(this).val())) || 0;
  });
  
  if(sectionName == "othersource"){
    sec2total = sum;
    $("#total_amount_2").val(addZeroes(sec2total+""));
  }
  else if(sectionName == "proppurchase"){
    sec3total = sum;
    $("#total_amount_3").val(addZeroes(sec3total+""));
  }

  var grand_total = sec2total-sec3total;
  $('#grand_total').val(addZeroes(grand_total+""));
  $('#'+sectionName+'_total').val(addZeroes(sum+""));
});

$( ".selectDate" ).datepicker({
  changeMonth: true,
  changeYear: true,
  dateFormat: "yy-mm-dd",
  yearRange: "-70:+20"
});

  $('#clientform').submit(function(event) {
      event.preventDefault();
  }).validate({
    rules:{

    },
    submitHandler: function(form) {

      var formData = $('#clientform').serialize();

      $.ajax({
        url:'<?php echo base_url(); ?>add/addAppendix?form_id=<?php echo $last; ?>',
        type:'POST',
        data: formData,
        dataType: 'json',
        success:function(as){

            if(as.status){
              if(as.action == 'create'){
                location.reload();
              }
              else if(as.action == 'edit'){
                alert('Section updated successfully');
                location.reload();
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
        url:'<?php echo base_url(); ?>add/addAppendix?form_id=<?php echo $last; ?>',
        type:'POST',
        data: formData,
        dataType: 'json',
        success:function(as){

            if(as.status){
              if(as.action == 'create'){
                location.href="<?php echo base_url(); ?>admin/declaration/"+as.data;
              }
              else if(as.action == 'edit'){
                location.href="<?php echo base_url(); ?>admin/declaration/"+as.data;
              }
            }
            else{
              alert(as.message);
            }
        }
      });
  });


</script>
