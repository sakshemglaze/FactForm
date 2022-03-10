
<style type="text/css">

    .form-check > img {
       margin-right: 5px;
      margin-top: 5px;
    }
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

    .tab-bordered > tr > td.first-one {
        background-color: #f2f2f2;
        text-align: right; 
        line-height: 1.85em;
        font-weight: bold;
        font-size: 10pt;
        padding-right: 0.85em;
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
            <h4 style="margin-bottom: 0px!important;">Section 11: New Mortgage Loan Details</h4>

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 style="margin-bottom: 0px!important;">11.1 Loan Scenario</h5>
          
            <!--=====Form Starts Here=====-->
            <form id="clientform">

                <!--===== 11.1 LOAN SCENARIO TABLE STARTS HERE=====-->
               
                <!--TABLE 1 STARTS HERE-->
                <table class="table" style="margin-top:10px;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width: 30%!important;">Client Type</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="">First Time Buyer</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Home Owner</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one" style="width: 30%!important;">What is the purpose of the loan? <br/> <span style="font-weight: normal;">(tick all that apply)</span></td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="">House Purchase</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Bridging Loan</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Additional Borrowing</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Re-mortgage</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Buy to Let</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Let to Buy</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!---/TABLE 1 ENDS HERE-->
          
                <!-- TABLE 2 STARTS HERE-->
                <table class="table" style="margin-top:0px!important; margin-bottom: 10px!important;">
                    <thead class="">
                        <tr>
                            <th colspan="5" style="text-align: left; padding:.25em 0.85em;">Notes</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr>
                            <td colspan="5" style="height:70px; padding: 10px; border-right: 1px solid #000000;">
                                <p></p>
                           </td>
                        </tr>
                    </tbody>
                </table>    
                <!--/TABLE 2 ENDS HERE-->

                <!--===== /11.1 LOAN SCENARIO TABLE ENDS HERE=====-->

                <!--========FORM SUB-SECTION HEADING==========-->
                <h5 class="" style="margin-top: 0px!important; margin-bottom: 10px!important;">11.2 Mortgage Repayment Method</h5>

                <!--===== 11.2 MORTGAGE RE-PAYMENT METHOD TABLE STARTS HERE=====-->
            
                <!--TABLE 1 STARTS HERE-->
                <table class="table" style=";margin-bottom: 0px!important;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one">Would you prefer to have the certainty that your mortgage loan<br/>is repaid at the end of the term?<br/> <span style="font-weight: normal;">(Repayment)</span></td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">
                                Would you prefer to use an alternative method to repay the <br/>capital outstanding on the mortgage when it is due? <br/> 
                                <span style="font-weight: normal;">(Interest Only)</span>
                            </td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">
                                If yes, what percentage of the mortgage do you wish to have on<br/>an ‘interest only’ basis?
                            </td>
                            <td>
                                <span style="margin: 0px 5px;"></span>   
                                <span style="margin:5px;">%</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one" style="width: 30%!important;">
                                What repayment vehicles are you intending to use to repay the<br/>mortgage?<br/> 
                                <span style="font-weight: normal;">(please provide specific details in the Notes below)</span> 
                            </td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Investments</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Overpayments</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Savings</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>                    
                                <div class="form-check">
                                    <label class="form-check-label" for="">Commonhold</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Sale of mortgaged property</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Sale of other property</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Pension funds</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>

                                <div style="">
                                    <label style="margin: 0px;" class="form-check-label" for="">Other:</label>
                                    <span></span>
                                    <span class="form-check">
                                        <img class="check-img" style="position: relative; margin-top: -12px;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--/TABLE 1 ENDS HERE-->

                <!--TABLE 2 STARTS HERE-->
                <table class="table" style="margin-top:0px!important;margin-bottom: 10px!important;">
                    <thead class="">
                        <tr>
                            <th colspan="5" style="text-align: left; padding:.25em 0.85em;">Notes</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr>
                            <td colspan="5" style="height:70px; padding: 10px; border-right: 1px solid #000000;">
                                <p></p>
                           </td>
                        </tr>
                    </tbody>
                </table>    
                <!--/TABLE 2 ENDS HERE-->  

                <!--===== /11.2 MORTGAGE RE-PAYMENT METHOD TABLE ENDS HERE=====-->   

                <!--========FORM SUB-SECTION HEADING==========-->
                <h5 class="" style="margin-top: 0px!important; margin-bottom: 10px!important;">11.3 Mortgage Term</h5>

                <!--===== 11.3 MORTGAGE TERM TABLE STARTS HERE=====-->

                <!--TABLE 1 STARTS HERE-->
                <table class="financial-table" style="margin-top:0px;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="text-align: left;padding-left: 0.85rem;">
                                Over what term would you like to repay your mortgage?
                            </td>
                            <td> </td>
                        </tr>
                    </tbody>
                </table>
                <!--/TABLE 1 ENDS HERE-->    
            
                <!--TABLE 2 STARTS HERE-->
                <table class="table">
                    <tbody class="">
                        <tr>
                            <td class="first-one" style="width:4.4%;text-align: left;padding-left: 0.85rem;">Please provide reasons</td>
                            <td style="padding-right:0px; height: 70px; background-color: #ffffff;border-right: 1px solid #000000;"> </td>
                        </tr>
                    </tbody>
                </table>
                <!--/TABLE 2 ENDS HERE-->  

                <!--TABLE 3 STARTS HERE-->
                <table class="financial-table">
                    <tbody class="">
                        <tr>
                            <td class="first-one" style="text-align: left;padding-left: 0.85rem;">Does this term exceed either of your expected retirement age(s)?</td>
                            <td> </td>
                        </tr>
                    </tbody>
                </table>
                <!--/TABLE 3 ENDS HERE-->
            
                <!--TABLE 4 STARTS HERE-->
                <table class="table" style="margin-bottom: 10px!important;">
                    <tbody class="">
                        <tr>
                            <td class="first-one" style="width:4%;text-align: left;padding-left: 0.85rem;">If yes, please provide details of <br/>how you intend to maintain your <br/>mortgage payments in retirement <br/>or repay the mortgage early</td>
                            <td style="padding-right:0px; background-color: #ffffff; border-right: 1px solid #000000;"></td>
                        </tr>
                    </tbody>
                </table>
                <!--/TABLE 4 ENDS HERE-->

                <!--===== /11.3 MORTGAGE TERM TABLE ENDS HERE=====-->

                <!--========FORM SUB-SECTION HEADING==========-->
                <h5 class="" style="margin-top: 0px!important; margin-bottom: 10px!important;">11.4 Mortgage Summary</h5>

                <!--===== 11.4 MORTGAGE SUMMARY TABLE STARTS HERE=====-->
                <table class="table" style="margin-bottom: 10px!important;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width:4.5%;">Purchase Price / Estimated Value</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>          
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one" style="width:4.5%;">Loan Amount Required</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>   
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one" style="width:4.5%;">Loan to Value</td>
                            <td>
                                <span style="margin:0px 5px;"></span>
                                <span>%</span>   
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one" style="width:4.5%;">Proposed Term</td>
                            <td> </td>
                        </tr>
                    </tbody>
                </table>
                <!--===== /11.4 MORTGAGE SUMMARY TABLE ENDS HERE=====-->

                <!--========FORM SUB-SECTION HEADING==========-->
                <h5 class="" style="margin-top: 0px!important; margin-bottom: 0px!important;">11.5 Deposit (Purchase Only)</h5>
                <span style="margin-top: 0px; margin-bottom: 10px!important; font-size: 9pt;">A cost breakdown is provided in Section 15 to aid discussions around deposit.</span>

                <!--===== 11.5 DEPOSIT (PURCHASE ONLY) TABLE STARTS HERE=====-->  
            
                <!--TABLE 1 STARTS HERE-->
                <table class="table" style="margin-top:10px!important;">
                    <thead>
                        <tr>
                            <th scope="col" style="border:0px;background-color:transparent;"></th>
                            <th scope="col">Client 1</th>
                            <th scope="col">Client 2</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width:4.5%;">Amount</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>   
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>   
                            </td>
                        </tr>
    
                        <tr>
                            <td class="first-one" style="width:4.5%;">Source(s)</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Gift (family)</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Gift (other)</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Savings</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Inheritance</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Sales Proceeds</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>

                                <div style="">
                                    <label style="margin: 0px;" class="form-check-label" for="">Other:</label>
                                    <span></span>
                                    <span class="form-check">
                                        <img class="check-img" style="position: relative; margin-top: -12px;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </span>
                                </div>
                            </td>

                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Gift (family)</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Gift (other)</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Savings</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Inheritance</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Sales Proceeds</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>

                               <div style="">
                                    <label style="margin: 0px;" class="form-check-label" for="">Other:</label>
                                    <span></span>
                                    <span class="form-check">
                                        <img class="check-img" style="position: relative; margin-top: -12px;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Is this repayable?<br/> <span style="font-weight: normal;">(If yes please provide details)</span></td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%:">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%:">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                        </tr>                
                    </tbody>
                </table>
                <!--/TABLE 1 ENDS HERE-->
        
                <!--TABLE 2 STARTS HERE-->
                <table class="table" style="margin-bottom: 10px!important;">
                    <thead class="">
                        <tr>
                            <th colspan="5" style="text-align: left;padding-left:0.85rem;">Notes</th>
                        </tr> 
                    </thead>
                    <tbody class="">
                        <tr>
                            <td colspan="5" style="padding-right:0px; height: 80px; background-color: #ffffff; border-right: 1px solid #000000;"></td>
                        </tr>
                    </tbody>
                </table>
                <!--/TABLE 2 ENDS HERE-->
 
                <!--===== /11.5 DEPOSIT (PURCHASE ONLY) TABLE ENDS HERE=====-->  
   
                <!--========FORM SUB-SECTION HEADING==========-->
                <h5 class="" style="margin-top: 0px!important; margin-bottom: 10px!important;">11.6 Affordable Home Ownership Schemes</h5>
  
                <!--===== 11.6 AFFORDABLE HOME OWENERSHIP SCHEMES TABLE STARTS HERE=====-->
                <table class="table" style="margin-bottom: 10px!important;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one">Is this transaction subject to an affordable<br/>home ownership scheme?</td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Schemes Type</td>
                            <td>
                                <table style="width: 100%;">
                                    <tr>
                                        <td>
                                            <span>
                                                <label class="form-check-label" for="">Right to Buy</label>
                                                <img class="check-img" style="margin-left: 40px!important;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            </span>
                                        </td>
                                        <td>
                                            <span>
                                                <label class="form-check-label" for="">Help to Buy 1  <br/> <span style="font-weight: normal;">(Equity Loan)</span></label>
                                                <img class="check-img" style="margin-left: 60px!important; margin-top:-10px; position: relative;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <span>
                                                <label class="form-check-label" for="">Shared Ownership</label>
                                                <img class="check-img" style="margin-left: 10px!important;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            </span>
                                        </td>

                                        <td>
                                            <span>                            
                                                <label class="form-check-label" for="">
                                                    Help to Buy 2  <br/> <span style="font-weight: normal;">(Mortgage Guarantee)</span>
                                                </label>
                                                <img class="check-img" style="margin-left: 15px!important; margin-top:-10px; position: relative;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />                            
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <span>
                                                <label class="form-check-label" for="">Help to Buy<br/> <span style="font-weight: normal;">(London)</span></label>
                                                <img class="check-img" style="margin-left: 55px!important; margin-top:-12px; position: relative;"  src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            </span>
                                        </td>

                                        <td>
                                            <span>
                                                <label class="form-check-label" for="">Help to Buy <br/> <span style="font-weight: normal;">(Armed Forces)</span></label>
                                                <img class="check-img" style="margin-left: 50px!important; margin-top:-12px; position: relative;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            </span>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>                            
                <!--===== /11.6 AFFORDABLE HOME OWENERSHIP SCHEMES TABLE ENDS HERE=====-->  

                <!--========SUB-SECTION SUB-HEADING==========-->
                <h6 style="margin-top: 0px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Right to Buy</h6>

                <!--===== RIGHT TO BUY TABLE STARTS HERE=====-->
                <table class="table" style="margin-top:5px; margin-bottom: 0px!important;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width: 60%!important;">What discount are you eligible for?</td>
                            <td> </td>
                        </tr>
                    </tbody>
                </table> 
                <!--===== /RIGHT TO BUY TABLE ENDS HERE=====--> 

                <!--========SUB-SECTION SUB-HEADING==========-->
                <h6 style="margin-top: 5px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Shared Ownership</h6>

                <!--===== SHARED OWNERSHIP TABLE STARTS HERE=====-->                
                <table class="table" style="margin-top:5px;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width: 60%!important;">Percentage of property to be purchased / re-mortgaged?</td>
                            <td>
                                <span style="margin: 0px 5px;"></span>   
                                <span style="margin:5px;">%</span>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="first-one" style="width: 60%!important;">Which Shared Ownership body?</td>
                            <td> </td>
                        </tr>

                        <tr>
                            <td class="first-one" style="width: 60%!important;">Monthly Rent Payment</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span> 
                            </td>
                        </tr>
                    </tbody>
                </table> 
                <!--===== RIGHT TO BUY/SHARED OWNERSHIP TABLE ENDS HERE=====--> 

                <!--========SUB-SECTION SUB-HEADING==========-->
                <h6 style="margin-top: 5px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Help to Buy</h6>
  
                <!--===== HELP TO BUY TABLE STARTS HERE=====--> 
                <!--TABLE 1 STARTS HERE-->
                <table class="table" style="margin-top:5px;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width: 60%!important;">Which Help to Buy agency?</td>
                            <td> </td>
                        </tr>
 
                        <tr>
                            <td class="first-one" style="width: 60%!important;">Monthly equity loan payment</td>
                            <td>                       
                                <span style="margin:0px 5px;">£</span>
                                <span></span> 
                            </td>
                        </tr>
                    </tbody>
                </table> <!--/TABLE 1 ENDS HERE-->

                <!--TABLE 2 STARTS HERE-->
                <table class="table" style="margin-top:15px; margin-bottom: 10px!important;">
                    <thead class="">
                        <tr>
                            <th class="text-left" style="padding-left: 0.85rem;">Additional Notes</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered">
                        <tr>
                            <td style="padding-right:0px; height: 80px; background-color: #ffffff;"></td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 2 ENDS HERE-->

                <!--===== HELP TO BUY TABLE STARTS HERE=====--> 

                <!--========FORM SUB-SECTION HEADING==========-->
                <h5 class="" style="margin-bottom: 0px;">11.7 Additional Borrowing</h5>

                <!--========SUB-SECTION SUB-HEADING==========-->
                <h6 style="margin-top: 5px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Debt Consolidation</h6>
              
                <!--===== DEBT CONSOLIDATION TABLE STARTS HERE=====-->
                <table class="table" style="margin-top: 5px!important;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width:4.5%;">Amount Required</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>   
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one" style="width:4.5%;">Details</td>
                            <td style="padding-right:0px; height: 80px; background-color: #ffffff;"></td>
                        </tr>
                    </tbody>
                </table>
                <!--===== DEBT CONSOLIDATION TABLE ENDS HERE=====--> 

                <!--========SUB-SECTION SUB-HEADING==========-->
                <h6 style="margin-top: 5px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Home Improvements</h6>
              
                <!--===== HOME IMPROVEMENTS TABLE STARTS HERE=====-->
                <table class="table" style="margin-top: 5px!important;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width:4.5%;">Amount Required</td>
                            <td> 
                                <span style="margin:0px 5px;">£</span>
                                <span></span>   
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one" style="width:4.5%;">Details</td>
                            <td style="padding-right:0px; height: 80px; background-color: #ffffff;"></td>
                        </tr>
                    </tbody>
                </table>
                <!--===== /HOME IMPROVEMENTS TABLE ENDS HERE=====--> 

                <!--========SUB-SECTION SUB-HEADING==========-->
                <h6 style="margin-top: 5px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Other</h6>

                <!--===== OTHER TABLE STARTS HERE=====-->
                <table class="table" style="margin-top: 5px!important; margin-bottom: 10px!important;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width:4.5%;">Amount Required</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span> 
                            </td>                    
                        </tr>

                        <tr>
                            <td class="first-one" style="width:4.5%;">Details</td>
                            <td style="padding-right:0px; height: 80px; background-color: #ffffff;"></td>
                        </tr>
                    </tbody>
                </table>
                <!--===== /OTHER TABLE ENDS HERE=====-->

                <!--========FORM SUB-SECTION HEADING==========-->
                <h5 class="" style="margin-top: 0px!important; margin-bottom: 0px!important;">11.8 For Buy to Let Properties</h5>

                <!--===== 11.8 FOR BUY TO LET PROPWRTIES TABLE STARTS HERE=====-->
                <!--TABLE 1 STARTS HERE-->
                <table class="table" style="margin-top:10px;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one">Is the property currently tenanted?</td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">If yes, as these tenants to remain?</td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Does / will the property have an AST in place?</td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">If yes, for how long?</td>
                            <td>
                                <span style="margin: 0px 5px;"></span>
                                <span>months</span>
                            </td>
                        </tr>
                    
                        <tr>
                            <td class="first-one">What is the maximum number of tenants in the property?</td>
                            <td> </td>
                        </tr>

                        <tr>
                            <td class="first-one">Are all tenants party to the same agreement?</td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Is this property subject to a HMO licence?</td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one" style="width: 30%!important;">What type of tenants will occupy the property?</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Working / Professional</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Corporate</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">DSS</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>                     
                                <div class="form-check">
                                    <label class="form-check-label" for="">Family Member</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Asylum Seeker</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Student</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div style="">
                                    <label style="margin: 0px;" class="form-check-label" for="">Other:</label>
                                    <span></span>

                                    <span class="form-check">
                                        <img class="check-img" style="position: relative; margin-top: -12px;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </span>
                                </div>
                            </td>
                        </tr>
  
                        <tr>
                            <td class="first-one">What is the expected / received rental income?</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>                      
                                <span style="margin: 5px;">p.c.m.</span>
                            </td>                
                        </tr>              
                    </tbody>
                </table><!--/TABLE 1 ENDS HERE-->    

                <!--TABLE 2 STARTS HERE-->
                <table class="table" style="margin-top:10px;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width: 30%!important;">
                                Is the property fit to be let in its present state?
                            </td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                        </tr>              

                        <tr>
                            <td class="first-one" style="width: 30%!important;">
                                What is the estimated cost of refurbishment / repairs?
                            </td>                        
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one" style="width: 30%!important;">
                                What is the estimated timescale for work to be completed?
                            </td>
                            <td> </td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 1 ENDS HERE-->

                <!--TABLE 3 STARTS HERE-->
                <table class="table" style="margin-top:10px; margin-bottom: 10px!important;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width:4.5%;">
                                How are void periods in<br/>rent to be covered for<br/> this property?
                            </td>
                            <td style="padding-right:0px; height: 80px; background-color: #ffffff;"></td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 3 ENDS HERE-->      
                <!--===== /11.8 FOR BUY TO LET PROPWRTIES TABLE ENDS HERE=====-->

                <!--========FORM SUB-SECTION HEADING==========-->
                <h5 class="" style="margin-top: 0px!important; margin-bottom: 0px!important;">11.9 For Bridging Finance</h5>

                <!--===== 11.9 FOR BRIDGING FINANCE TABLE STARTS HERE=====-->
                <!--TABLE 1 STARTS HERE-->
                <table class="table" style="margin-top:10px;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width: 30%!important;">What is the purpose of the bridging finance?</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Property Purchase</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Renovations / Refurbishment</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Personal</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>                     
                                <div class="form-check">
                                    <label class="form-check-label" for="">Cash Flow (Business)</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div style="">
                                    <label style="margin: 0px;" class="form-check-label" for="">Other:</label>
                                    <span style="margin: 0px 5px;"></span>
                                    <img class="check-img" style="position: relative; margin-top: -12px;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 1 ENDS HERE-->  

                <!--TABLE 2 STARTS HERE-->
                <table class="table" style="margin-top:10px;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width: 30%!important;">Will you or an immediate member of your family occupy / intend<br/> to occupy 40% or more of the property (building and land) over<br/> which the bridging company will have a first charge?</td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 2 ENDS HERE-->  

                <!--TABLE 3 STARTS HERE-->
                <table class="table" style="margin-top:10px;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width: 30%!important;">What is the security for the bridging finance?</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Residential (regulated)</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Residential (non-regulated)</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Commercial</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>                     
                                <div class="form-check">
                                    <label class="form-check-label" for="">Semi Commercial</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Land</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 3 ENDS HERE-->  

                <!--TABLE 4 STARTS HERE-->
                <table class="table" style="margin-top:10px;width: 100%;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width: 30%!important;">Charge offered on this property</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="">First Charge</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Second Charge</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 4 ENDS HERE-->  

                <!--TABLE 5 STARTS HERE-->
                <table class="table" style="margin-top:10px;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width: 30%!important;">Is your current property on the market for sale?</td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one" style="width: 30%!important;">If yes, have accepted an offer?</td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                        </tr>
 
                        <tr>
                            <td class="first-one" style="width: 30%!important;">
                                If an offer has been accepted, how soon do you expect to<br/>exchange contracts and complete the purchase?
                            </td>
                            <td>
                                <div>
                                    <span style="margin:0px 5px;font-size: 9pt;">Exchange contracts:</span>
                                    <span style="font-size: 9pt;"></span>
                                </div>

                                <div style="margin-top: 5px;">
                                    <span style=" margin:0px 5px;font-size: 9pt;">Complete purchase:</span>
                                    <span style="font-size: 9pt;"></span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one" style="width: 30%!important;">
                                If you have not accepted an offer, have any offers been made?
                            </td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 5 ENDS HERE-->  

                <!--TABLE 6 STARTS HERE-->
                <table class="table" style="margin-top:10px;width: 100%;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width: 30%!important;">What is your preferred payment option?</td>
                            <td class="text-center">
                                <div class="col-md-4 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">Serviced</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-4 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">Rolled Up</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 6 ENDS HERE-->  

                <!--TABLE 7 STARTS HERE-->
                <table class="table">
                    <tbody class="tab-bordered">
                        <tr>
                            <td class="first-one" style="width:4.4%;">Reason</td>
                            <td style="padding-right:0px; height: 60px; background-color: #ffffff;"></td>
                        </tr>
            
                        <tr>
                            <td class="first-one" style="width:4.4%;">
                                In the short term, how<br/>will you cover the<br/>payments for both your<br/>current and bridging<br/>loans?
                            </td>
                            <td style="padding-right:0px; height: 60px; background-color: #ffffff;"></td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 7 ENDS HERE-->  

                <!--TABLE 8 STARTS HERE-->
                <table class="table" style="margin-top:10px;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width: 30%!important;">
                                What is the exit strategy for repayment of the finance?
                            </td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Sale of Property</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Re-finance</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div>
                                    <label style="margin: 0px;" class="form-check-label" for="">Other:</label>
                                    <span></span>

                                    <span class="form-check">
                                        <img class="check-img" style="position: relative; margin-top: -12px;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 8 ENDS HERE-->  

                <!--TABLE 9 STARTS HERE-->
                <table class="table" style="margin-top:15px;">
                    <thead class="">
                        <tr>
                            <th style="padding-left: 0.85rem;">Additional Notes</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered">
                        <tr>
                            <td style="padding-right:0px; height: 120px; background-color: #ffffff;"></td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 9 ENDS HERE-->  
               <!--===== /11.9 FOR BRIDGING FINANCE TABLE ENDS HERE=====-->

            </form>
            <!--=====/Form Ends Here=====-->
    </div>
    <!--/row-->
</div><!--/container-->
