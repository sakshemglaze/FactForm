
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
         <h4 style="margin-bottom: 0px!important;">Section 12: Mortgage Needs & Preferences</h4>

        <!--========FORM SUB-SECTION HEADING==========-->
        <h5 style="margin-bottom: 10px!important;">12.1 Client Needs & Circumstances</h5>
          
        <!--=====Form Starts Here=====-->
        <form id="clientform">

            <!--======== 12.1 CLIENT NEEDS / CIRCUMSTANCES TABLE STARTS HERE==========-->
            <!--TABLE 1 STARTS HERE-->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-left" style="padding-left: 0.85rem;">Are there any specific requirements or concerns that you have that could influence your choice of mortgage?</th>
                    </tr>                  
                </thead>
                <tbody class="table-bordered">
                    <tr>
                        <td style="padding-right:0px; height: 80px; background-color: #ffffff;">

                        </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 1 ENDS HERE-->

                <!--TABLE 2 STARTS HERE-->
                <table class="table" style="margin-top:10px;width: 100%;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width: 30%!important;">How concerned are you about the<br/> possibility of interest rate increases?</td>
                            <td class="text-center" style="vertical-align: middle!important;">
                              <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Very concerned</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Moderately Concerned</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Not Concerned</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>  
                            </td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 2 ENDS HERE-->

            <!--TABLE 3 STARTS HERE-->
            <table class="table" style="margin-bottom: 10px!important;">
                <tbody class="tab-bordered">
                    <tr>
                        <td class="first-one" style="width:4.4%;">Reason</td>
                        <td style="padding-right:0px; height: 80px; background-color: #ffffff;"></td>
                    </tr>
                </tbody>
            </table><!--/TABLE 3 ENDS HERE-->

            <!--======== /12.1 CLIENT NEEDS / CIRCUMSTANCES TABLE ENDS HERE==========-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px!important;">12.2 New Mortgage Product Preferences</h5>

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 5px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Fixed Rate</h6>

            <!--======== FIXED RATE TABLE STARTS HERE==========-->
            <!--TABLE 1 STARTS HERE-->
                <table class="table" style="margin-top:10px;width: 100%;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width: 30%!important;">
                                How important is it to have certainty of<br/>the exact repayment amount for a<br/>period of time?
                            </td>
                            <td class="text-center" style="vertical-align: middle!important;">
                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Very important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Moderately important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Not important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">If so, over what period?</td>
                            <td> </td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="table" style="margin-bottom: 10px!important;">
                <tbody class="tab-bordered">
                    <tr>
                        <td class="first-one" style="width:4.4%;">Reason</td>
                        <td style="padding-right:0px; height: 80px; background-color: #ffffff;"> </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--======== /FIXED RATE TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 0px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Variable Rate</h6>

                <!--======== VARIABLE RATE TABLE STARTS HERE==========-->
                <!--TABLE 1 STARTS HERE-->
                <table class="table" style="margin-top:10px;width: 100%;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width: 30%!important;">
                                How important is it for the interest rate<br/>to be managed by the BoE / LIBOR as
                                <br/>opposed to the lender?
                            </td>
                            <td class="text-center" style="vertical-align: middle!important;">
                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Very important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Moderately important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Not important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>
                            </td>
                       </tr>

                       <tr>
                            <td class="first-one">If so, over what period?</td>
                            <td> </td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="table">
                <tbody class="tab-bordered">
                    <tr>
                        <td class="first-one" style="width:4.4%;">Reason</td>
                        <td style="padding-right:0px; height: 80px; background-color: #ffffff;"> </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--======== /VARIABLE RATE TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 0px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Capped Rate</h6>

                <!--======== CAPPED RATE TABLE STARTS HERE==========-->
                <!--TABLE 1 STARTS HERE-->
                <table class="table" style="margin-top:10px;width: 100%;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width: 30%!important;">
                                How important is it to have certainty of<br/>the maximum repayment amount for a
                                <br/>period of time? 
                            </td>
                            <td class="text-center" style="vertical-align: middle!important;">
                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Very important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Moderately important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Not important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>
                            </td>
                        </tr>
                
                        <tr>
                            <td class="first-one">If so, over what period?</td>
                            <td > </td>                  
                        </tr>
                    </tbody>
                </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="table" style="margin-bottom: 10px!important;">
              <tbody class="tab-bordered">
                <tr>
                  <td class="first-one" style="width:4.4%;">Reason</td>
                  <td style="padding-right:0px; height: 80px; background-color: #ffffff;"> </td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--======== /CAPPED RATE TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 0px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Rate Preferences</h6>

                <!--======== RATE PREFERENCES TABLE STARTS HERE==========-->
                <!--TABLE 1 STARTS HERE-->
                <table class="table" style="margin-top:10px;width: 100%;">
                    <tbody class="table-bordered">
                         <tr>
                            <td class="first-one" style="width: 30%!important;">
                                Where you have not indicated any particular preference for a rate type, how important is it to you to secure the lowest total cost over a specified period of time, accepting the rate/payment may fluctuate? 
                            </td>
                            <td class="text-center" style="vertical-align: middle!important;">
                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Very important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Moderately important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Not important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>
                            </td>            
                        </tr>

                        <tr>                 
                            <td class="first-one">If so, over what period?</td>
                            <td> </td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="table">
              <tbody class="tab-bordered">
                <tr>
                  <td class="first-one" style="width:4.4%;">Reason</td>
                  <td style="padding-right:0px; height: 80px; background-color: #ffffff;"> </td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--======== /RATE PREFERENCES TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 0px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Early Repayment Charges</h6>

            <!--======== EARLY REPAYMENT CHARGES TABLE STARTS HERE==========-->
            <!--TABLE 1 STARTS HERE-->
            <table class="table" style="margin-top:10px;width: 100%;">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width: 30%!important;">Do you expect to pay off part, or all, of <br/>your mortgage early?</td>
                        <td class="text-center">
                            <center>
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </center>
                        </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="table">
                <tbody class="tab-bordered">
                    <tr>
                        <td class="first-one" style="width:4.4%;">If Yes,<br/>please<br/>provide<br/>details</td>
                        <td style="padding-right:0px; height: 80px; background-color: #ffffff;"></td>
                    </tr>
                </tbody>
            </table><!--/TABLE 2 ENDS HERE-->

            <!--TABLE 3 STARTS HERE-->
            <table class="table">
                <tbody class="tab-bordered">
                    <tr>
                        <td class="first-one" style="width: 30%!important;">Do you expect to move again?</td>
                        <td class="text-center">
                            <center>
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </center>
                        </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 3 ENDS HERE-->

            <!--TABLE 4 STARTS HERE-->
            <table class="table">
                <tbody class="tab-bordered">
                    <tr>
                        <td class="first-one" style="width:4.4%;">If Yes,<br/>please<br/>provide<br/>details</td>
                        <td style="padding-right:0px; height: 80px; background-color: #ffffff;"></td>
                    </tr>
                </tbody>
            </table><!--/TABLE 4 ENDS HERE-->

            <!--TABLE 5 STARTS HERE-->
            <table class="table">
                <tbody class="tab-bordered">
                    <tr>
                        <td class="first-one" style="width: 30%!important">
                            How important is it to NOT be subject to <br/> an Early Repayment Charge (ERC)?                    
                        </td>
                        <td class="text-center" style="vertical-align: middle!important;">
                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Very important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Moderately important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Not important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>
                            </td>
                    </tr>
                    <tr>
                        <td class="first-one">What is the maximum ERC period you <br/> would consider?</td>
                        <td> </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 5 ENDS HERE-->

            <!--TABLE 6 STARTS HERE-->
            <table class="table">
              <tbody class="tab-bordered">
                <tr>
                  <td class="first-one" style="width:4.4%;">Reason</td>
                  <td style="padding-right:0px; height: 80px; background-color: #ffffff;"> </td>
                </tr>
              </tbody>
            </table><!--/TABLE 6 ENDS HERE-->
            <!--======== /EARLY REPAYMENT CHARGES TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 0px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Priorities</h6>
            <span style="font-size: 9pt; margin-bottom: 0px!important;">From your indicated preferences, please confirm your top 5 priorities with the most important priority being number 1:</span>

            <!--======== PRIORITIES TABLE STARTS HERE==========-->
            <table class="table" style="margin-top: 10px; width: 100%;">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="text-align: center;padding-right: 0rem;">1</td>
                        <td style="width: 100%!important;">  </td>
                    </tr>
                    <tr>
                        <td class="first-one" style="text-align: center;padding-right: 0rem;">2</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td class="first-one" style="text-align: center;padding-right: 0rem;">3</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td class="first-one" style="text-align: center;padding-right: 0rem;">4</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td class="first-one" style="text-align: center;padding-right: 0rem;">5</td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>
            <!--======== /PRIORITIES TABLE ENDS HERE==========-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px!important;">12.3 New Mortgage Feature Preferences</h5>

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 0px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Overpayments</h6>

            <!--======== OVERPAYMENTS TABLE STARTS HERE==========-->
            
            <!--TABLE 1 STARTS HERE-->
            <table class="table" style="margin-top: 10px;width: 100%;">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width: 30%!important;">
                             How important is it to have the facility to<br/> make overpayments on your mortgage?
                        </td>
                        <td class="text-center" style="vertical-align: middle!important;">
                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Very important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Moderately important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Not important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>
                            </td>
                    </tr>
                    <tr>
                        <td class="first-one">If so, would up to 10% per annum be<br/> sufficient to meet your needs?</td>
                        <td class="text-center">
                            <center>
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </center>
                        </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 1 ENDS HERE-->
              
            <!--TABLE 2 STARTS HERE-->
            <table class="table">
                <tbody class="tab-bordered">
                    <tr>
                        <td class="first-one" style="width:4.4%;">Reason</td>
                        <td style="padding-right:0px; height: 80px; background-color: #ffffff;"> </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--======== /OVERPAYMENTS TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 0px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Underpayments & Payment Holidays</h6>

            <!--======== UNDERPAYMENTS / PAYMENT HOLIDAYS TABLE STARTS HERE==========-->
            <!--TABLE 1 STARTS HERE-->
            <table class="table" style="margin-top: 10px;width: 100%;">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width: 30%!important;">
                            How important is it to have the facility to <br/>make underpayments on your <br/>mortgage?
                        </td>
                            <td class="text-center" style="vertical-align: middle!important;">
                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Very important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Moderately important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Not important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>
                            </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 1 ENDS HERE-->
              
            <!--TABLE 2 STARTS HERE-->
            <table class="table">
                <tbody class="tab-bordered">
                    <tr>
                        <td class="first-one" style="width:4.4%;">Reason</td>
                        <td style="padding-right:0px; height: 80px; background-color: #ffffff;"> </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 2 ENDS HERE-->

            <!--TABLE 3 STARTS HERE-->
            <table class="table" style="margin-top: 10px;width: 100%;">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width: 30%!important;">
                            How important is it to have the facility to <br/>take payment holidays on your <br/>mortgage?
                        </td>
                        <td class="text-center" style="vertical-align: middle!important;">
                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Very important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Moderately important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Not important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>
                            </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 3 ENDS HERE-->
              
            <!--TABLE 4 STARTS HERE-->
            <table class="table">
              <tbody class="tab-bordered">
                <tr>
                  <td class="first-one" style="width:4.4%;">Reason</td>
                  <td style="padding-right:0px; height: 80px; background-color: #ffffff;"> </td>
                </tr>
              </tbody>
            </table><!--/TABLE 4 ENDS HERE-->
            <!--======== /UNDERPAYMENTS / PAYMENT HOLIDAYS TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 0px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Offset</h6>

            <!--======== OFFSET TABLE STARTS HERE==========-->
            <!--TABLE 1 STARTS HERE-->
            <table class="table" style="margin-top: 10px;width: 100%;">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width: 30%!important;">
                             How important is it to have the facility to <br/>offset your savings against your <br/>mortgage?
                        </td>
                        <td class="text-center" style="vertical-align: middle!important;">
                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Very important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Moderately important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Not important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>
                            </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 1 ENDS HERE-->
              
            <!--TABLE 2 STARTS HERE-->
            <table class="table">
                <tbody class="tab-bordered">
                    <tr>
                        <td class="first-one" style="width:4.4%;">Reason</td>
                        <td style="padding-right:0px; height: 80px; background-color: #ffffff;"> </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 2 ENDS HERE-->

            <!--======== /OFFSET TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 0px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Additional Secured Borrowing</h6>

            <!--======== ADDITIONAL SECURED BORROWING TABLE STARTS HERE==========--> 
            <!--TABLE 1 STARTS HERE-->
            <table class="table" style="margin-top: 10px;width: 100%;">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width: 30%!important;">
                            How important is it to have the facility to<br/> borrow additional monies on your <br/>mortgage?
                        </td>
                            <td class="text-center" style="vertical-align: middle!important;">
                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Very important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Moderately important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Not important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>
                            </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 1 ENDS HERE-->
              
            <!--TABLE 2 STARTS HERE-->
            <table class="table">
                <tbody class="tab-bordered">
                    <tr>
                        <td class="first-one" style="width:4.4%;">Reason</td>
                        <td style="padding-right:0px; height: 80px; background-color: #ffffff;"> </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--======== /ADDITIONAL SECURED BORROWING TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 0px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Portability</h6>

            <!--======== PORTABILITY TABLE STARTS HERE==========--> 
            
            <!--TABLE 1 STARTS HERE-->
            <table class="table" style="margin-top: 10px;width: 100%;">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width: 30%!important;">
                            How important is it to be able to port <br/> your mortgage terms a new property?
                        </td>
                        <td class="text-center" style="vertical-align: middle!important;">
                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Very important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Moderately important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Not important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>
                            </td> 
                    </tr>
                </tbody>
            </table><!--/TABLE 2 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="table">
                <tbody class="tab-bordered">
                    <tr>
                        <td class="first-one" style="width:4.4%;">Reason</td>
                        <td style="padding-right:0px; height: 80px; background-color: #ffffff;"> </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--======== /PORTABILITY TABLE ENDS HERE==========--> 

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 0px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Fees</h6>

            <!--======== FEES TABLE STARTS HERE==========--> 
            <!--TABLE 1 STARTS HERE-->
            <table class="table" style="margin-top: 10px;width: 100%;">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width:60%!important;">Do you have funds available to pay the product / arrangement fees up front?</td>
                        <td class="text-center">
                            <center>
                                <div class="col-md-3 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-3 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </center>
                        </td>
                    </tr>                  
                </tbody>
            </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="table">
                <tbody class="tab-bordered">
                    <tr>
                        <td class="first-one" style="width: 30%!important;">
                            How important is it to be able to add the <br/> fees to the loan?
                        </td>
                        <td class="text-center" style="vertical-align: middle!important;">
                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Very important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Moderately important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Not important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>
                            </td> 
                    </tr>
                </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
              
            <!--TABLE 3 STARTS HERE-->
            <table class="table">
                <tbody class="tab-bordered">
                    <tr>
                        <td class="first-one" style="width:4.4%;">Reason</td>
                        <td style="padding-right:0px; height: 80px; background-color: #ffffff;"> </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 3 ENDS HERE-->     

            <!--TABLE 4 STARTS HERE-->
            <table class="table" style="margin-top: 10px;width: 100%;">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width:60%!important;">Do you have funds available to pay the valuation / booking fees up front?</td>
                        <td class="text-center">
                            <center>
                                <div class="col-md-3 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-3 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </center>
                        </td>
                    </tr>                  
                </tbody>
            </table><!--/TABLE 4 ENDS HERE-->

            <!--TABLE 5 STARTS HERE-->
            <table class="table">
                <tbody class="tab-bordered">
                    <tr>
                        <td class="first-one" style="width: 30%!important;">
                            How important is it for the lender to <br/>cover the fees?
                        </td>
                        <td class="text-center" style="vertical-align: middle!important;">
                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Very important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Moderately important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Not important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>
                            </td> 
                    </tr>
                </tbody>
            </table><!--/TABLE 5 ENDS HERE-->
              
            <!--TABLE 6 STARTS HERE-->
            <table class="table">
                <tbody class="tab-bordered">
                    <tr>
                        <td class="first-one" style="width:4.4%;">Reason</td>
                        <td style="padding-right:0px; height: 80px; background-color: #ffffff;"> </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 6 ENDS HERE-->
              
            <!--TABLE 7 STARTS HERE-->
            <table class="table" style="margin-top: 10px;width: 100%;">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width:60%!important;">Do you have funds available to pay the legal fees up front?</td>
                        <td class="text-center">
                            <center>
                                <div class="col-md-3 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-3 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </center>
                        </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 7 ENDS HERE-->

            <!--TABLE 8 STARTS HERE-->
            <table class="table">
                <tbody class="tab-bordered">
                    <tr>
                        <td class="first-one" style="width: 30%!important;">
                            How important is it for the lender to <br/> cover the legal fees? 
                        </td>
                        <td class="text-center" style="vertical-align: middle!important;">
                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Very important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Moderately important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Not important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>
                            </td> 
                    </tr>
                </tbody>
            </table><!--/TABLE 8 ENDS HERE-->
              
            <!--TABLE 9 STARTS HERE-->
            <table class="table">
                <tbody class="tab-bordered">
                    <tr>
                        <td class="first-one" style="width:4.4%;">Reason</td>
                        <td style="padding-right:0px; height: 80px; background-color: #ffffff;"> </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 9 ENDS HERE-->
            <!--======== /FEES TABLE ENDS HERE==========--> 

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 0px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Completion Timescales</h6>

            <!--======== COMPLETION TIMESCALES TABLE STARTS HERE==========--> 
            <!--TABLE 1 STARTS HERE-->
            <table class="table" style="margin-top: 10px;width: 100%;">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width: 30%!important;">
                            How important is it to for the mortgage <br/> to be competed as quickly as possible?
                        </td>
                        <td class="text-center" style="vertical-align: middle!important;">
                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Very important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Moderately important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>

                                <span class="date-input-box" style="float: left;">
                                    <label class="form-check-label text-left" for="">Not important</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </span>
                            </td>  
                    </tr>
                </tbody>
            </table><!--/TABLE 1 ENDS HERE-->
              
            <!--TABLE 2 STARTS HERE-->
            <table class="table">
            <tbody class="tab-bordered">
                <tr>
                    <td class="first-one" style="width:4.4%;">Reason</td>
                    <td style="padding-right:0px; height: 80px; background-color: #ffffff;"> </td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--======== /COMPLETION TIMESCALES TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 0px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Priorities</h6>

            <span style="font-size: 9pt; padding-left: 0.85rem;">
              I may not be able to meet all your mortgage features preferences within one product, but your most important priorities will enable me to recommend the most suitable product.
            </span>

            <span style="font-size: 9pt;margin-top: 15px; padding-left: 0.85rem;">From your indicated preferences, please confirm your top 5 priorities with the most important priority being number 1:</span>

            <!--======== PRIORITIES TABLE STARTS HERE==========-->
            <table class="table" style="margin-top: 10px;">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="text-align: center;padding-right: 0rem;">1</td>
                        <td style="width: 90%;"></td>
                    </tr>
                    <tr>
                        <td class="first-one" style="text-align: center;padding-right: 0rem;">2</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td class="first-one" style="text-align: center;padding-right: 0rem;">3</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td class="first-one" style="text-align: center;padding-right: 0rem;">4</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td class="first-one" style="text-align: center;padding-right: 0rem;">5</td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>
            <!--======== /PRIORITIES TABLE ENDS HERE==========-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px!important;">12.4 Protecting Your Mortgage, House & Contents</h5>
            
            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 0px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Death, Critical Illness or Long Term Illness</h6>

            <!--======== DEATH, CRITICAL ILLNESS OR LONG TERM ILLNESS TABLE STARTS HERE==========-->
            <!--TABLE 1 STARTS HERE-->
            <table class="table" style="margin-top: 10px;width: 100%;">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width:60%!important;">
                            Would all of your mortgages and debts be cleared if you were to die or <br/>suffer from a critical illness?
                        </td>
                        <td class="text-center">
                            <center>
                                <div class="col-md-3 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-3 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </center>
                        </td>
                    </tr>   
                    <tr>
                        <td class="first-one" style="width:60%!important;">
                            Would you, or your remaining dependents, be able to cover any <br/>remaining outgoings if you were to die or suffer from a critical, or long <br/>term illness (more than 1-2 years)?
                        </td>
                        <td class="text-center">
                            <center>
                                <div class="col-md-3 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-3 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td class="first-one" style="width:60%!important;">
                            Do you wish to review this area of your finances?
                        </td>
                        <td class="text-center">
                            <center>
                                <div class="col-md-3 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-3 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </center>
                        </td>
                    </tr>                    
                </tbody>
            </table><!--/TABLE 2 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="table">
                <thead class="">
                    <tr>
                        <th colspan="2">
                            If ‘Yes’ to the above question, please use ‘Supplementary Questionnaire - Personal Protection’
                        </th>
                    </tr>
                </thead>
                <tbody class="tab-bordered">
                    <tr>
                        <td class="first-one" style="width: 4.4%!important;">If not reviewing now, reason <br/> for not reviewing?</td>
                        <td style="padding-right:0px; height: 150px; background-color: #ffffff;">
                        </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--======== /DEATH, CRITICAL ILLNESS OR LONG TERM ILLNESS TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 0px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Buildings and Contents</h6>

            <span style="margin-bottom: 0px;font-size: 9pt; padding-left: 0.85rem;">
              NB – It will be a condition of any mortgage offer that the property to be mortgaged has adequate insurance cover
            </span>

            <!--======== BUILDINGS AND CONTENTS TABLE STARTS HERE==========-->
            
            <!--TABLE 1 STARTS HERE-->
            <table class="table" style="margin-top: 10px;width: 100%;">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width:60%!important;">
                            Do you require advice in arranging adequate Buildings and/or Contents <br/>cover?
                        </td>
                        <td class="text-center">
                            <center>
                                <div class="col-md-3 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-3 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </center>
                        </td>
                    </tr>            
                </tbody>
            </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="table">
                <thead class="">
                    <tr>
                        <th colspan="2">
                            If ‘yes’ to the above question, please use ‘Statement of Fact – Building & Contents’
                        </th>
                    </tr>
                </thead>
                <tbody class="tab-bordered">
                    <tr>
                        <td class="first-one" style="width: 4.4%!important;">If not reviewing now, reason <br/> for not reviewing?</td>
                        <td style="padding-right:0px; height: 150px; background-color: #ffffff;">
                        </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--======== /BUILDINGS AND CONTENTS TABLE ENDS HERE==========-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 style="margin-top: 0px!important; margin-bottom: 0px!important; padding-left: 0.85rem;">Accident, Sickness and Unemployment</h6>

            <!--======== ACCIDENT , SICKNESS AND UNEMPLOYMENT TABLE STARTS HERE==========-->
            <!--TABLE 1 STARTS HERE-->
            <table class="table" style="margin-top: 10px;width: 100%;">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width:60%!important;">
                            Would you be able to cover any mortgage related outgoings if you were <br/>to suffer from a short term illness?
                        </td>
                        <td class="text-center">
                            <center>
                                <div class="col-md-3 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-3 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </center>
                        </td>
                    </tr>   
                    <tr>
                        <td class="first-one" style="width:60%!important;">
                            Would you be able to cover any mortgage related outgoings if you were <br/>made unemployed?
                        </td>
                        <td class="text-center">
                            <center>
                                <div class="col-md-3 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-3 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td class="first-one" style="width:60%!important;">
                            Do you wish to review this area of your finances?
                        </td>
                        <td class="text-center">
                                <div class="col-md-3 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-3 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                        </td>
                    </tr>                    
                </tbody>
            </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="table">
                <thead class="">
                    <tr>
                        <th colspan="2">
                            If 'yes' to the above question, please use ‘Statement of Fact – ASU’
                        </th>
                    </tr>
                </thead>
                <tbody class="tab-bordered"> 
                    <tr>
                        <td class="first-one" style="width: 4.4%!important;">
                            If not reviewing now, reason <br/> for not reviewing?
                        </td>
                        <td style="padding-right:0px; height: 120px; background-color: #ffffff;">
                        </td>
                    </tr>
                </tbody>
            </table><!--TABLE 2 ENDS HERE-->
            <!--======== /ACCIDENT , SICKNESS AND UNEMPLOYMENT TABLE ENDS HERE==========-->

        </form>
        <!--=====/Form Ends Here=====-->

           
        </div>
    </div>
    <!--/row-->
</div><!--/container-->
