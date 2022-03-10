
<style type="text/css">
    .tab-child >.table-bordered > tr >td.first-one,
    .tab-child >.tab-bordered > tr >td.first-one {
        background-color: #f2f2f2;
        text-align: right; 
        line-height: 1.85em;
        font-weight: bold;
        font-size: 10pt;
        padding-right: 0.85em;
    }

    .financial-table thead th {
    vertical-align: middle;
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

<div class="pdf-container">
    <div class="row">

        <div class="index-section center-block" style="margin-top: 20px!important;">   
        <!--========FORM SECTION HEADING==========-->

        <h4>Section 15: Appendix - Cost Breakdown</h4>
        <p>
          The page is designed to summarise the costs involved in the transaction and consider what deposit may be available once these are accounted for.  Unknown costs can be estimate based on reasonable expectations.
        </p>

        <!--========FORM SUB-SECTION HEADING==========-->
        <h5 class="" style="margin-bottom: 0px!important;">15.1 Property Sale less fees (if relevant)</h5>
          
        <!--=====Form Starts Here=====-->
        <form id="clientform">
            
            <!--===== 15.1 PROPERTY SALE LESS FEES (IF RELEVENT) TABLE STARTS HERE =====-->
            <!-- <div class="col-md-10 center-block" style="margin-top: 20px!important;margin-left: 16%;">
                <table class="table">
                    <tbody class="table-bordered">
                        <tr>
                            <td colspan="2" class="first-one" style="width: 50%!important; padding: .45em .85em;">Sale Price of Property</td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $sale_price_1; ?></span> 
                            </td>
                        </tr>

                        <tr>
                            <td rowspan="4" style="width: 50px;background-color: #ffffff;padding: .75rem;">
                                <div style="text-align:center!important;-ms-transform: rotate(450deg); /* IE 9 */ -webkit-transform: rotate(450deg); /* Safari */  transform: rotate(450deg); position: relative; margin-left: 50%;">
                                    <span style="margin-left: 16%!important;">Deduct</span>
                                </div>
                            </td>
                            <td class="first-one" style="background-color: #f2f2f2;font-weight: normal;text-align: right;padding-right: 0.85rem;">Deduct  Outstanding Mortgage Balance</td>
                            <td>
                                <span style="margin: 0px 5px;">- (£</span>
                                <span><?php echo $deduct_outstanding_1; ?></span>
                                <span style="margin: 5px;">)</span>
                            </td>                         
                        </tr>

                        <tr>
                            <td class="first-one" style="font-weight: normal;">Estate Agent’s Fees</td>
                            <td>
                                <span style="margin: 0px 5px;">- (£</span>
                                <span><?php echo $estate_fees_1; ?></span>
                                <span style="margin: 5px;">)</span>                
                            </td> 
                        </tr>

                        <tr>
                            <td class="first-one" style="font-weight: normal;">Solicitor's Fees</td>
                            <td>
                                <span style="margin: 0px 5px;">- (£</span>
                                <span><?php echo $solicitor_fees_1; ?></span>
                                <span style="margin: 5px;">)</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one" style="font-weight: normal;">Other costs / Fees</td>
                            <td>
                                <span style="margin: 0px 5px;">- (£</span>
                                <span><?php echo $other_fees_1; ?></span>
                                <span style="margin: 5px;">)</span>                
                            </td>
                        </tr>

                        <tr style="border: 2px solid #000000;">
                            <td colspan="2" class="first-one" style="padding: .45em .85em;">Balance from Property Sale</td>
                            <td style="font-weight: bold;">
                                <span style="margin: 0px 5px;">- (£</span>
                                <span><?php echo $property_sale_1; ?></span>
                                <span style="margin: 5px;">)</span>
                            </td>              
                        </tr>             
                    </tbody>          
                </table>        
            </div> -->
            <!--===== /15.1 PROPERTY SALE LESS FEES (IF RELEVENT) TABLE ENDS HERE =====--> 

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px!important;">15.2 Other sources of funds</h5>

            <!--===== 15.2 OTHER SOURCES OF FUNDS TABLE STARTS HERE =====-->
            <div class="col-md-10 center-block" style="margin-top: 20px!important; margin-left: 16%;">
                <table class="table">
                    <tbody class="table-bordered">
                        <tr>
                            <td colspan="2" class="first-one" style="width: 50%!important;padding: .45em .85em;">Balance from Property Sale</td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $funds_sale_1; ?></span> 
                            </td>              
                        </tr>
 
                        <tr>
                            <td rowspan="4" style="width: 50px;background-color: #ffffff;padding: .75rem;">
                                <div style="text-align:center;-ms-transform: rotate(450deg); /* IE 9 */ -webkit-transform: rotate(450deg); /* Safari */  transform: rotate(450deg);position: relative;margin-left: 50%;">
                                   Add
                                </div>
                            </td>
                            <td class="first-one" style="font-weight: normal;"> 
                               Savings 
                            </td>

                            <td>
                                <span style="margin:0px 5px;">+ £</span>
                                <span><?php echo $savings_1; ?></span>
                            </td>              
                        </tr>
 
                        <tr>
                            <td class="first-one" style="font-weight: normal;">Gifts</td>
                            <td>
                                <span style="margin:0px 5px;">+ £</span>
                                <span><?php echo $gifts_1; ?></span>
                            </td>  
                        </tr> 

                        <tr>
                            <td class="first-one" style="font-weight: normal;">Inheritance</td>
                            <td>
                                <span style="margin:0px 5px;">+ £</span>
                                <span><?php echo $inheritance_1; ?></span>
                            </td>  
                        </tr>

                        <tr>
                            <td class="first-one" style="font-weight: normal;">Other</td>
                            <td>
                                <span style="margin:0px 5px;">+ £</span>
                                <span><?php echo $other_1; ?></span>
                            </td>  
                        </tr>

                        <tr style="border: 2px solid #000000;">
                            <td class="first-one" colspan="2" style="padding: .45em .85em;">Total Amount available</td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">+ £</span>
                                <span><?php echo $amount_availabe_1; ?></span>
                            </td>              
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--===== /15.2 OTHER SOURCES OF FUNDS TABLE ENDS HERE =====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px!important;">15.3 Property Purchase Costs</h5>

            <!--===== 15.3 PROPERTY PURCHASE COSTS TABLE STARTS HERE =====-->
            <div class="col-md-10 center-block" style="margin-top: 20px!important; margin-left: 16%;">
                <table class="table">
                    <tbody class="table-bordered"> 
                        <tr>
                            <td rowspan="8" style="width: 50px;background-color: #f2f2f2;padding: .75rem;">
                                <div style="text-align:center;-ms-transform: rotate(450deg); /* IE 9 */ -webkit-transform: rotate(450deg); /* Safari */  transform: rotate(450deg); position: relative; margin-left: 50%!important;" >
                                   Add
                                </div>
                            </td>
                            <td class="first-one" style="font-weight: normal;width: 25%!important;"> 
                                Survey Fees
                            </td>

                            <td>
                                <span style="margin:0px 5px;">+ £</span>
                                <span><?php echo $purchase_survey_1; ?></span>
                            </td>              
                        </tr>
 
                        <tr>
                            <td class="first-one" style="font-weight: normal;">Solicitor's Fees</td>
                            <td>
                                <span style="margin:0px 5px;">+ £</span>
                                <span><?php echo $purchase_solicitor_1; ?></span>
                            </td>  
                        </tr> 

                        <tr>
                            <td class="first-one" style="font-weight: normal;">Mortgage Fees</td>
                            <td>
                                <span style="margin:0px 5px;">+ £</span>
                                <span><?php echo $purchase_mortgage_1; ?></span>
                            </td>  
                        </tr>

                        <tr>
                            <td class="first-one" style="font-weight: normal;">Stamp Duty Land Tax</td>
                            <td>
                                <span style="margin:0px 5px;">+ £</span>
                                <span><?php echo $purchase_stamp_1; ?></span>
                            </td>  
                        </tr>

                        <tr>
                            <td class="first-one" style="font-weight: normal;">Removal Fees</td>
                            <td>
                                <span style="margin:0px 5px;">+ £</span>
                                <span><?php echo $purchase_removal_1; ?></span>
                            </td>  
                        </tr>

                        <tr>
                            <td class="first-one" style="font-weight: normal;">Home Improvements</td>
                            <td>
                                <span style="margin:0px 5px;">+ £</span>
                                <span><?php echo $purchase_home_1; ?></span>
                            </td>  
                        </tr>

                        <tr>
                            <td class="first-one" style="font-weight: normal;">Furniture</td>
                            <td>
                                <span style="margin:0px 5px;">+ £</span>
                                <span><?php echo $purchase_furniture_1; ?></span>
                            </td>  
                        </tr>

                        <tr>
                            <td class="first-one" style="font-weight: normal;">Other costs / fees</td>
                            <td>
                                <span style="margin:0px 5px;">+ £</span>
                                <span><?php echo $purchase_other_1; ?></span>
                            </td>  
                        </tr>

                        <tr style="border: 2px solid #000000;">
                            <td class="first-one" colspan="2" style="padding: .45em .85em;">Total Costs</td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;color: red">+ £</span>
                                <span><?php echo $purchase_total_1; ?></span>
                            </td>             
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--===== /15.3 PROPERTY PURCHASE COSTS TABLE ENDS HERE =====-->   

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px!important;">15.4 Summary</h5>

            <!--===== 15.4 SUMMARY TABLE STARTS HERE =====-->
            <div class="col-md-10 center-block" style="margin-top: 20px!important; margin-left: 16%;">
                <table class="table" style="width: 85%; border-right: 1px solid #000000;">
                    <tbody>
                        <tr>
                            <td class="first-one" style="font-weight: normal;width: 50%!important;padding: .45em .85em;">Total Amount available (15.2)</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $summary_available_1; ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one" style="font-weight: normal;padding: .45em .85em;">Less Total Costs (15.3)</td>
                            <td>
                                <span style="margin: 0px 5px;">- (£</span>
                                <span><?php echo $summary_less_1; ?></span>
                                <span style="margin: 5px;">)</span>
                            </td>
                        </tr>

                        <tr style=" border: 2px solid #000000;">
                            <td class="first-one" style="padding: .45em .85em;">Grand Total</td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $summary_grand_1; ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one" style="padding: .45em .85em;">Assumed Purchase Price</td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $summary_price_1; ?></span>
                            </td>
                        </tr>

                        <tr style="border: 2px solid #000000;">
                            <td class="first-one" style="padding: .45em .85em;">Amount willing to set aside for deposit</td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $summary_deposit_1; ?></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--===== /15.4 SUMMARY TABLE ENDS HERE =====-->       

        </form>
        <!--=====/Form Ends Here=====-->

            <!-- <table style="width: 100%;">
                <tr>
                    <td style="text-align: left; padding-left: 0.85em; font-size: 9pt;">
                        Page <span>2</span> of <span>30</span>
                    </td>
                    <td style="text-align: right; padding-right: 0.85em;font-size: 9pt;">
                        TS&R MCFF v1.3 June 2016
                    </td>
                </tr>
            </table> -->
        </div>
    </div>
    <!--/row-->
</div><!--/container-->
