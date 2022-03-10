<div class="pdf-container">
    <div class="row">
        <div class="index-section center-block" style="margin-top: 20px!important;">
        <!--========FORM SECTION HEADING==========-->
        <h4>Section 6: Existing Property & Mortgages</h4>

        <!--========FORM SUB-SECTION HEADING==========-->
        <h5 style="margin-bottom: 0px;">6.1 Summary</h5>

        <!--=====Form Starts Here=====-->
        <form id="clientform">

            <!--=====6.1 SUMMARY TABLE STARTS HERE=====-->
            <table border="1" cellpadding="0" cellspacing="0" class="financial-table" style="margin-top: 20px;">
              <tbody class="table-bordered">
                <tr>
                  <td class="first-one">How many residential properties do you own?</td>
                  <td style="padding: 0px 5px;"><?php echo $summary_1; ?></td>
                </tr>
 
                <tr>
                  <td class="first-one">How many buy-to-let properties do you own?</td>
                  <td style="padding: 0px 5px;"><?php echo $summary_2; ?></td>
                </tr>        
              </tbody>
            </table>
            <!--=====/6.1 SUMMARY TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px;">6.2 Existing Residential Property</h5>

            <!--=====6.2 EXISTING RESIDENTIAL PROPERTY TABLE STARTS HERE=====--> 
            
            <!--TABLE 1 STARTS HERE-->
            <?php $pLoan = json_decode($res_prop, true); $i = 0; ?>
            <?php foreach($pLoan as $key => $value){ $i = $i+2; ?>
                <table border="1" cellpadding="0" cellspacing="0" class="table " style="margin-top: 10px;">
                    <thead class="">
                        <tr>
                            <th scope="col" style="border:0px;background-color:transparent;"></th>
                            <th scope="col">Existing Residential (<?php echo $i-1; ?>)</th>
                            <th scope="col">Existing Residential (<?php echo $i; ?>)</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one">Property Address</td>
                            <td style="padding: 0px 5px;"><?php echo $value["res_propaddress_".($i-1)]; ?></td>
                            <td style="padding: 0px 5px;"><?php echo $value["res_propaddress_".$i]; ?></td>
                        </tr>
                        <?php $b1 = explode(",", $value["res_owner_".($i-1)]); ?>
                        <?php $b2 = explode(",", $value["res_owner_".$i]); ?>
                        <tr>
                            <td class="first-one">Owner</td>
                            <td class="text-center">
                                <center>
                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Joint</label>
                                        <?php if(in_array( "Joint" , $b1 )){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                     / </div> 

                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Client 1</label>
                                        <?php if(in_array( "client_1" , $b1 )){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div> 

                                    <div class="col-md-3 date-input-box" style="padding: 0;"> / 
                                        <label class="form-check-label" for="">Client 2</label>
                                        <?php if(in_array( "client_2" , $b1 )){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                </center>
                            </td>
                            <td class="text-center">
                                <center>
                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Joint</label>
                                        <?php if(in_array( "Joint" , $b2 )){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                   / </div>

                                    <div class="col-md-3 date-input-box" style="padding: 0;"> 
                                        <label class="form-check-label" for="">Client 1</label>
                                        <?php if(in_array( "client_1" , $b2 )){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>

                                    <div class="col-md-3 date-input-box" style="padding: 0;"> / 
                                        <label class="form-check-label" for="">Client 2</label>
                                        <?php if(in_array( "client_2" , $b2 )){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                </center>
                            </td>
                        </tr>

                        <tr>
                        <td class="first-one">Estimated Property Value</td>
                        <td>
                            <span style="margin:0px 5px;">£</span>
                            <span><?php echo $value["res_estimatedval_".($i-1)]; ?></span>
                            
                        </td>
                        <td>
                            <span style="margin:0px 5px;">£</span>
                            <span><?php echo $value["res_estimatedval_".$i]; ?></span>
                        </td>
                        </tr>

                        <tr>
                        <td class="first-one">If selling, what is the sale price?</td>
                        <td>
                            <span style="margin:0px 5px;">£</span>
                            <span><?php echo $value["res_saleprice_".($i-1)]; ?></span>
                        </td>
                        <td>
                            <span style="margin:0px 5px;">£</span>
                            <span><?php echo $value["res_saleprice_".$i]; ?></span>
                        </td>                  
                        </tr>
                    </tbody>
                </table>
                 <!--/TABLE 1 ENDS HERE-->

                <!--TABLE 2 STARTS HERE-->
                <table border="1" cellpadding="0" cellspacing="0" class="table" style="margin-top: 10px;">
                    <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width: 25%!important;">Is there a mortgage secured<br/>against this property?</td>
                        <td class="text-center">
                            <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                <label class="form-check-label" for="">Yes</label>
                                <?php if(isset($value["client_existingmortgage_".($i-1)]) && $value["client_existingmortgage_".($i-1)] == "Yes"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                            <div class="col-md-2 date-input-box" style="padding: 0;">
                                <label class="form-check-label" for="">No</label>
                                <?php if(isset($value["client_existingmortgage_".($i-1)]) && $value["client_existingmortgage_".($i-1)] == "No"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                <label class="form-check-label" for="">Yes</label>
                                <?php if(isset($value["client_existingmortgage_".$i]) && $value["client_existingmortgage_".$i] == "Yes"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                            <div class="col-md-2 date-input-box" style="padding: 0;">
                                <label class="form-check-label" for="">No</label>
                                <?php if(isset($value["client_existingmortgage_".$i]) && $value["client_existingmortgage_".$i] == "No"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table><!--/TABLE 2 ENDS HERE-->

                <!--TABLE 3 STARTS HERE-->
                <table border="1" cellpadding="0" cellspacing="0" class="table" style="margin-top: 10px;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width: 25%!important;">Lender</td>
                            <td style="padding: 0px 5px;"><?php echo $value["res_lender_".($i-1)]; ?></td>
                            <td style="padding: 0px 5px;"><?php echo $value["res_lender_".$i]; ?></td>
                        </tr>

                        <tr>
                            <td class="first-one">Mortgage Account Number</td>
                            <td style="padding: 0px 5px;"><?php echo $value["res_macctno_".($i-1)]; ?></td>
                            <td style="padding: 0px 5px;"><?php echo $value["res_macctno_".$i]; ?></td>
                        </tr>

                        <tr>
                            <td class="first-one">Amount of Loan Outstanding</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $value["res_loanout_".($i-1)]; ?></span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $value["res_loanout_".$i]; ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Term Remaining</td>
                            <td style="padding: 0px 5px;"><?php echo $value["res_termremain_".($i-1)] ?></td>
                            <td style="padding: 0px 5px;"><?php echo $value["res_termremain_".$i] ?></td>
                        </tr>

                        <tr>
                            <td class="first-one">To be Redeemed?</td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%!important;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if(isset($value["client_existingredeem_".($i-1)]) && $value["client_existingredeem_".($i-1)] == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if(isset($value["client_existingredeem_".($i-1)]) && $value["client_existingredeem_".($i-1)] == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if(isset($value["client_existingredeem_".$i]) && $value["client_existingredeem_".$i] == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if(isset($value["client_existingredeem_".$i]) && $value["client_existingredeem_".$i] == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 3 ENDS HERE-->

                <!--TABLE 4 STARTS HERE-->
                <table border="1" cellpadding="0" cellspacing="0" class="table" style="margin-top: 10px;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width:25%!important;">Current Interest Rate</td>
                            <td>
                                <span style="margin: 0px 5px;"><?php echo $value["res_currinterest_".($i-1)] ?></span>
                                <span class="" style="margin: 5px;">%</span>                   
                            </td>
                            <td>
                                <span style="margin: 0px 5px;"><?php echo $value["res_currinterest_".$i] ?></span>
                                <span class="" style="margin: 5px;">%</span>                   
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Monthly Mortgage Payment</td>
                            <td>
                                <span style="margin:0px 5px;">£</span> 
                                <span><?php echo $value["res_monthlymortgage_".($i-1)] ?></span>
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span> 
                                <span><?php echo $value["res_monthlymortgage_".$i] ?></span>
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Interest Rate Type</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Fixed Rate</label>
                                    <?php if(isset($value["client_existinginteresttype_".($i-1)]) && $value["client_existinginteresttype_".($i-1)] == "Fixed"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Discounted Rate</label>
                                    <?php if(isset($value["client_existinginteresttype_".($i-1)]) && $value["client_existinginteresttype_".($i-1)] == "Discounted"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Capped Rate</label>
                                    <?php if(isset($value["client_existinginteresttype_".($i-1)]) && $value["client_existinginteresttype_".($i-1)] == "Capped"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Tracker</label>
                                    <?php if(isset($value["client_existinginteresttype_".($i-1)]) && $value["client_existinginteresttype_".($i-1)] == "Tracker"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Variable Rate</label>
                                    <?php if(isset($value["client_existinginteresttype_".($i-1)]) && $value["client_existinginteresttype_".($i-1)] == "Variable"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div style="">
                                    <label style="margin: 0px; padding: 0px 5px;" class="form-check-label" for="contactCheck5">Other:</label>
                                    <span class="form-check">
                                    <?php if(isset($value["client_existinginteresttype_".($i-1)]) && $value["client_existinginteresttype_".($i-1)] == "Other"){ ?>
                                        <img style="margin-right: 5px;position: relative;margin-top: -16px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;position: relative;margin-top: -16px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Fixed Rate</label>
                                    <?php if(isset($value["client_existinginteresttype_".$i]) && $value["client_existinginteresttype_".$i] == "Fixed"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Discounted Rate</label>
                                    <?php if(isset($value["client_existinginteresttype_".$i]) && $value["client_existinginteresttype_".$i] == "Discounted"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Capped Rate</label>
                                    <?php if(isset($value["client_existinginteresttype_".$i]) && $value["client_existinginteresttype_".$i] == "Capped"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Tracker</label>
                                    <?php if(isset($value["client_existinginteresttype_".$i]) && $value["client_existinginteresttype_".$i] == "Tracker"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Variable Rate</label>
                                    <?php if(isset($value["client_existinginteresttype_".$i]) && $value["client_existinginteresttype_".$i] == "Variable"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div style="">
                                    <label style="margin: 0px; padding: 0px 5px;" class="form-check-label" for="contactCheck5">Other:</label>
                                    <span class="form-check">
                                    <?php if(isset($value["client_existinginteresttype_".$i]) && $value["client_existinginteresttype_".$i] == "Other"){ ?>
                                        <img style="margin-right: 5px;position: relative;margin-top: -16px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;position: relative;margin-top: -16px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                    </span>
                                </div>
                            </td>
                        </tr>
                        <?php $redate1 = false; $redate2 = false; 
                            if($value["res_rateenddate_".($i-1)] != ""){
                                $redate1_data = explode("/", $value["res_rateenddate_".($i-1)]);
                                $redate1 = true;
                            } 

                            if($value["res_rateenddate_".$i] != ""){
                                $redate2_data = explode("/", $value["res_rateenddate_".$i]);
                                $redate2 = true;
                            } 
                        ?>

                        <tr>
                            <td class="first-one">Rate End Date</td> 
                            <td class="text-center">
                                <span><?php echo $redate1_data[0]; ?></span> <?php if($redate1 && $redate1_data[0] != ""){echo "/";} ?> <span><?php echo $redate1_data[1]; ?></span> <?php if($redate1 && $redate1_data[0] != ""){echo "/";} ?> <span><?php echo $redate1_data[2]; ?></span>
                            </td>  
                            <td class="text-center">
                                <span><?php echo $redate2_data[0]; ?></span> <?php if($redate2 && $redate2_data[0] != ""){echo "/";} ?> <span><?php echo $redate2_data[1]; ?></span> <?php if($redate2 && $redate2_data[0] != ""){echo "/";} ?> <span><?php echo $redate2_data[2]; ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Does an Early Repayment<br/>Charge (ERC) apply?</td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if(isset($value["client_existingerc_".($i-1)]) && $value["client_existingerc_".($i-1)] == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?> 
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if(isset($value["client_existingerc_".($i-1)]) && $value["client_existingerc_".($i-1)] == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?> 
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if(isset($value["client_existingerc_".$i]) && $value["client_existingerc_".$i] == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?> 
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if(isset($value["client_existingerc_".$i]) && $value["client_existingerc_".$i] == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?> 
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">How much is the ERC?</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $value["res_erc_".($i-1)]; ?></span>                  
                            </td> 
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $value["res_erc_".$i]; ?></span>
                            </td>
                        </tr>

                    <tr>
                            <td class="first-one">
                                Are you prepared to pay this if <br/>you transfer/ repay your current<br/>mortgage?
                            </td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if(isset($value["client_existingrepay_".($i-1)]) && $value["client_existingrepay_".($i-1)] == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if(isset($value["client_existingrepay_".($i-1)]) && $value["client_existingrepay_".($i-1)] == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if(isset($value["client_existingrepay_".$i]) && $value["client_existingrepay_".$i] == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?> 
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if(isset($value["client_existingrepay_".$i]) && $value["client_existingrepay_".$i] == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?> 
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Are your current mortgage terms<br/>portable to a new property?</td>
                            <td class="text-center">
                                <center>
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if(isset($value["client_existingcurrent_".($i-1)]) && $value["client_existingcurrent_".($i-1)] == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>  
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if(isset($value["client_existingcurrent_".($i-1)]) && $value["client_existingcurrent_".($i-1)] == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>  
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if(isset($value["client_existingcurrent_".$i]) && $value["client_existingcurrent_".$i] == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?> 
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if(isset($value["client_existingcurrent_".$i]) && $value["client_existingcurrent_".$i] == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?> 
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 4 ENDS HERE-->

                <!--TABLE 5 STARTS HERE-->
                <table border="1" cellpadding="0" cellspacing="0" class="table" style="margin-top:10px;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width: 25%!important;">Repayment method?</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Repayment</label>
                                    <?php if(isset($value["client_existingrepaymethod_".($i-1)]) && $value["client_existingrepaymethod_".($i-1)] == "Repayment"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?> 
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Interest Only</label>
                                    <?php if(isset($value["client_existingrepaymethod_".($i-1)]) && $value["client_existingrepaymethod_".($i-1)] == "Interest Only"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?> 
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Part & Part </label>
                                    <?php if(isset($value["client_existingrepaymethod_".($i-1)]) && $value["client_existingrepaymethod_".($i-1)] == "Part & Part"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?> 
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Repayment</label>
                                    <?php if(isset($value["client_existingrepaymethod_".$i]) && $value["client_existingrepaymethod_".$i] == "Repayment"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?> 
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Interest Only</label>
                                    <?php if(isset($value["client_existingrepaymethod_".$i]) && $value["client_existingrepaymethod_".$i] == "Interest Only"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?> 
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Part & Part </label>
                                    <?php if(isset($value["client_existingrepaymethod_".$i]) && $value["client_existingrepaymethod_".$i] == "Part & Part"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?> 
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 5 ENDS HERE-->

                <!--TABLE 6 STARTS HERE-->
                <table border="1" cellpadding="0" cellspacing="0" class="table" style="margin-top:10px;">
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="width: 25%!important;">If ‘Interest Only’, how do you<br/>intend to repay the capital?</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Savings</label>
                                    <?php if(isset($value["client_existingintend_".($i-1)]) && $value["client_existingintend_".($i-1)] == "Savings"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?> 
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Investments</label>
                                    <?php if(isset($value["client_existingintend_".($i-1)]) && $value["client_existingintend_".($i-1)] == "Investments"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?> 
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Sale of mortgaged property</label>
                                    <?php if(isset($value["client_existingintend_".($i-1)]) && $value["client_existingintend_".($i-1)] == "Sale of mortgaged property"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?> 
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Sale of other property</label>
                                    <?php if(isset($value["client_existingintend_".($i-1)]) && $value["client_existingintend_".($i-1)] == "Sale of other property"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?> 
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Overpayments</label>
                                    <?php if(isset($value["client_existingintend_".($i-1)]) && $value["client_existingintend_".($i-1)] == "Overpayments"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?> 
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Pension funds</label>
                                    <?php if(isset($value["client_existingintend_".($i-1)]) && $value["client_existingintend_".($i-1)] == "Pension funds"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?> 
                                </div>
                                <div style="">
                                    <label style="margin: 0px; padding: 0px 5px;" class="form-check-label" for="contactCheck5">Other:</label>
                                    <span class="form-check">
                                    <?php if(isset($value["client_existingintend_".($i-1)]) && $value["client_existingintend_".($i-1)] == "Other"){ ?>
                                        <img style="margin-right: 5px;position: relative;margin-top: -16px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;position: relative;margin-top: -16px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?> 
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Savings</label>
                                    <?php if(isset($value["client_existingintend_".$i]) && $value["client_existingintend_".$i] == "Savings"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Investments</label>
                                    <?php if(isset($value["client_existingintend_".$i]) && $value["client_existingintend_".$i] == "Investments"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Sale of mortgaged property</label>
                                    <?php if(isset($value["client_existingintend_".$i]) && $value["client_existingintend_".$i] == "Sale of mortgaged property"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Sale of other property</label>
                                    <?php if(isset($value["client_existingintend_".$i]) && $value["client_existingintend_".$i] == "Sale of other property"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Overpayments</label>
                                    <?php if(isset($value["client_existingintend_".$i]) && $value["client_existingintend_".$i] == "Overpayments"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="">Pension funds</label>
                                    <?php if(isset($value["client_existingintend_".$i]) && $value["client_existingintend_".$i] == "Pension funds"){ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div style="">
                                    <label style="margin: 0px;padding: 0px 5px;" class="form-check-label" for="contactCheck5">Other:</label>
                                    <span class="form-check">
                                    <?php if(isset($value["client_existingintend_".$i]) && $value["client_existingintend_".$i] == "Other"){ ?>
                                        <img style="margin-right: 5px;position: relative;margin-top: -16px;" class="check-img" style="position: relative; margin-top: -16px;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px;position: relative;margin-top: -16px;" class="check-img" style="position: relative; margin-top: -16px;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                        
                                    </span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Details:</td>
                            <td>
                                <p style="padding:0px 5px!important;margin: 0px!important;height:40px;"><?php echo $value["res_details_".($i-1)]; ?></p>
                            </td>
                            <td>
                                <p style="padding:0px 5px!important;margin: 0px!important;height:40px;"><?php echo $value["res_details_".$i]; ?></p>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">If part & part, how much is interest only?</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>    
                                <span><?php echo $value["res_interestonly_".($i-1)]; ?></span>                
                                <span style="margin:5px;">Interest only</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>    
                                <span><?php echo $value["res_interestonly_".$i]; ?></span>                
                                <span style="margin:5px;">Interest only</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Do you want to continue using<br/>repayment option(s) for any new<br/>mortgage arrangement?</td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if(isset($value["client_existingnew_".($i-1)]) && $value["client_existingnew_".($i-1)] == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if(isset($value["client_existingnew_".($i-1)]) && $value["client_existingnew_".($i-1)] == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if(isset($value["client_existingnew_".$i]) && $value["client_existingnew_".$i] == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if(isset($value["client_existingnew_".$i]) && $value["client_existingnew_".$i] == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 6 ENDS HERE-->
            <?php } ?>

            <!--=====6.3 EXISTING RESIDENTIAL PROPERTY TABLE ENDS HERE=====-->

            <!--=====ADDITION NOTES TABLE STARTS HERE=====-->
             <table border="1" cellpadding="0" cellspacing="0" class="table marTP-30">
                <thead class="">
                  <tr>
                    <th>Additional Notes</th>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <tr>
                    <td style="vertical-align: top!important;">
                      <p style="padding:0px 5px!important;margin: 0px!important;height:120px;">
                        <?php echo $client_additionalnotes; ?></p>
                    </td>
                  </tr>
                </tbody>
             </table>
             <!--=====/ADDITION NOTES TABLE ENDS HERE=====-->
        </form>
        <!--=====/Form Ends Here=====-->

        <!--<table border="1" cellpadding="0" cellspacing="0" style="width: 100%;">-->
        <!--    <tr>-->
        <!--        <td style="text-align: left; padding-left: 0.85em;">-->
        <!--           Page <span>2</span> of <span>30</span>-->
        <!--        </td>-->
        <!--        <td style="text-align: right; padding-right: 0.85em;">-->
        <!--           TS&R MCFF v1.3 June 2016-->
        <!--        </td>-->
        <!--    </tr>-->
        <!--</table>-->
    </div>
    </div>
    <!--/row-->
</div><!--/container-->
