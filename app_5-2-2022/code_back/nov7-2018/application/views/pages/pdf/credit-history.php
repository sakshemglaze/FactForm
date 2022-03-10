<style type="text/css">
    .table > tbody > tr >td {
        width: 30%!important;
    }
</style>

<div class="pdf-container">
    <div class="row">

        <div class="index-section center-block" style="margin-top: 20px!important;">  


        <!--========FORM SECTION HEADING==========-->
        <h4 style="margin-bottom: 0px!important;">Section 9: Credit Histroy</h4>
           
        <!--=====Form Starts Here=====-->
        <form id="clientform">

            <!--===== 9 CREDIT HISTORY TABLE STARTS HERE=====-->
            <!--TABLE 1 STARTS HERE-->
            <table class="table" style="margin-top: 30px!important;">
                <thead>
                    <tr>
                        <th scope="col" style="border:0px;background-color:transparent;"></th>
                        <th scope="col">Client 1</th>
                        <th scope="col" class="hide-col">Client 2</th>
                    </tr>
                </thead>
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width: 25%!important; line-height: 1.2em;">
                            Have you ever had a judgment for debt or a loan<br/>default registered against you?<br/>
                            <span style="font-weight: normal;">If Yes, please complete section 9.1</span>
                        </td>
                        <td class="text-center">
                            <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                <label class="form-check-label" for="">Yes</label>
                                <?php if($credit_loan_1 == "Yes"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                            <div class="col-md-2 date-input-box" style="padding: 0;">
                                <label class="form-check-label" for="">No</label>
                                <?php if($credit_loan_1 == "No"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                <label class="form-check-label" for="">Yes</label>
                                <?php if($credit_loan_2 == "Yes"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                            <div class="col-md-2 date-input-box" style="padding: 0;">
                                <label class="form-check-label" for="">No</label>
                                <?php if($credit_loan_2 == "No"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one" style=" line-height: 1.2em;">
                            Have you ever been declared bankrupt or made an <br/> arrangement with your creditors?<br/>
                            <span style="font-weight: normal;">If Yes, please complete section 9.2</span>
                        </td>
                        <td class="text-center">
                            <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                <label class="form-check-label" for="">Yes</label>
                                <?php if($credit_bankrupt_1 == "Yes"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                            <div class="col-md-2 date-input-box" style="padding: 0;">
                                <label class="form-check-label" for="">No</label>
                                <?php if($credit_bankrupt_1 == "No"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                <label class="form-check-label" for="">Yes</label>
                                <?php if($credit_bankrupt_2 == "Yes"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                            <div class="col-md-2 date-input-box" style="padding: 0;">
                                <label class="form-check-label" for="">No</label>
                                <?php if($credit_bankrupt_2 == "No"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one" style=" line-height: 1.2em;">
                            Have you ever failed to keep up your payments <br/> under any previous or current mortgage, rental or <br/> loan agreement? <br/>
                            <span style="font-weight: normal;">If Yes, please complete section 9.3</span>
                        </td>
                        <td class="text-center">
                            <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                <label class="form-check-label" for="">Yes</label>
                                <?php if($credit_failed_1 == "Yes"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                            <div class="col-md-2 date-input-box" style="padding: 0;">
                                <label class="form-check-label" for="">No</label>
                                <?php if($credit_failed_1 == "No"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                <label class="form-check-label" for="">Yes</label>
                                <?php if($credit_failed_2 == "Yes"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                            <div class="col-md-2 date-input-box" style="padding: 0;">
                                <label class="form-check-label" for="">No</label>
                                <?php if($credit_failed_2 == "No"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one" style=" line-height: 1.2em;">
                            Have you ever had a property repossessed?<br/>
                            <span style="font-weight: normal;">If Yes, please complete section 9.4</span>
                        </td>
                        <td class="text-center">
                            <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                <label class="form-check-label" for="">Yes</label>
                                <?php if($credit_property_1 == "Yes"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                            <div class="col-md-2 date-input-box" style="padding: 0;">
                                <label class="form-check-label" for="">No</label>
                                <?php if($credit_property_1 == "No"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                <label class="form-check-label" for="">Yes</label>
                                <?php if($credit_property_2 == "Yes"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                            <div class="col-md-2 date-input-box" style="padding: 0;">
                                <label class="form-check-label" for="">No</label>
                                <?php if($credit_property_2 == "No"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="table" style="margin-top: 10px;">
                <tbody class="table-bordered">
                    <tr>
                       <td class="first-one" style="width: 25%!important; line-height: 1.2em;">
                            Have you ever a mortgage / loan refused?<br/>
                            <span style="font-weight: normal;">If Yes, please provide details in Notes section</span>
                        </td>
                        <td class="text-center">
                            <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                <label class="form-check-label" for="">Yes</label>
                                <?php if($credit_refused_1 == "Yes"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                            <div class="col-md-2 date-input-box" style="padding: 0;">
                                <label class="form-check-label" for="">No</label>
                                <?php if($credit_refused_1 == "No"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                <label class="form-check-label" for="">Yes</label>
                                <?php if($credit_refused_2 == "Yes"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                            <div class="col-md-2 date-input-box" style="padding: 0;">
                                <label class="form-check-label" for="">No</label>
                                <?php if($credit_refused_2 == "No"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one" style=" line-height: 1.2em;">
                            Have you ever been convicted of, or have any <br/> prosecution pending, for any criminal offence other <br/> than a standard motoring offence?<br/>
                            <span style="font-weight: normal;">If Yes, please provide details in Notes section</span>
                        </td>
                        <td class="text-center">
                            <center>
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                <label class="form-check-label" for="">Yes</label>
                                <?php if($credit_pending_1 == "Yes"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                            <div class="col-md-2 date-input-box" style="padding: 0;">
                                <label class="form-check-label" for="">No</label>
                                <?php if($credit_pending_1 == "No"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                <label class="form-check-label" for="">Yes</label>
                                <?php if($credit_pending_2 == "Yes"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                            <div class="col-md-2 date-input-box" style="padding: 0;">
                                <label class="form-check-label" for="">No</label>
                                <?php if($credit_pending_2 == "No"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one" style=" line-height: 1.2em;">
                            Have you ever had, or do you currently have a <br/> payday loan? <br/>
                            <span style="font-weight: normal;">If Yes, please provide details in Notes section</span>
                        </td>
                        <td class="text-center">
                            <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                <label class="form-check-label" for="">Yes</label>
                                <?php if($credit_payday_1 == "Yes"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                            <div class="col-md-2 date-input-box" style="padding: 0;">
                                <label class="form-check-label" for="">No</label>
                                <?php if($credit_payday_1 == "No"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                <label class="form-check-label" for="">Yes</label>
                                <?php if($credit_payday_2 == "Yes"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                            <div class="col-md-2 date-input-box" style="padding: 0;">
                                <label class="form-check-label" for="">No</label>
                                <?php if($credit_payday_2 == "No"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one" style=" line-height: 1.2em;">
                            Have you ever been in, or are you currently part of <br/> a Debt Management Plan*? <br/>
                            <span style="font-weight: normal;">If Yes, please provide details in Notes section</span>
                        </td>
                        <td class="text-center">
                            <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                <label class="form-check-label" for="">Yes</label>
                                <?php if($credit_plan_1 == "Yes"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                            <div class="col-md-2 date-input-box" style="padding: 0;">
                                <label class="form-check-label" for="">No</label>
                                <?php if($credit_plan_1 == "No"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                <label class="form-check-label" for="">Yes</label>
                                <?php if($credit_plan_2 == "Yes"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                            <div class="col-md-2 date-input-box" style="padding: 0;">
                                <label class="form-check-label" for="">No</label>
                                <?php if($credit_plan_2 == "No"){ ?>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table><!--TABLE 2 ENDS HERE-->

            <h5 style="font-size: 9pt;margin-top: 5px;font-style: italic; margin-bottom: 0px!important;">*Note: If client(s) responds ‘Yes’ then please refer to Compliance Policy on Debt</h5>
            <!--===== /9 CREDIT HISTORY TABLE ENDS HERE=====-->     

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px;">9.1 County Court Judgements / Defaults</h5>

            <!--===== 9.1 COUNTY COURT JUDGEMENTS/ DEFAULTS TABLE STARTS HERE=====-->
            <?php $county = json_decode($county, true); $i = 0; ?>
            <?php if($county != NULL){ ?>
            <?php foreach($county as $key => $value){ $i = $i + 2; ?>
                <table class="table" style="margin-top: 20px!important;">
                    <thead>
                        <tr>
                            <th scope="col" style="border:0px;background-color:transparent;"></th>
                            <th scope="col">CCJ / Default <?php echo $i-1; ?></th>
                            <th scope="col">CCJ / Default <?php echo $i; ?></th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one">Company</td>
                            <td style="padding: 0px 5px;"><?php echo $value["company_county_".($i-1)]; ?></td>
                            <td style="padding: 0px 5px;"><?php echo $value["company_county_".$i]; ?></td>
                        </tr>

                        <tr>
                            <td class="first-one">Amount</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $value["company_amount_".($i-1)]; ?></span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $value["company_amount_".$i]; ?></span>
                            </td>
                        </tr>

                        <?php $b1 = explode(",", $value["company_client_".($i-1)]); ?>
                        <?php $b2 = explode(",", $value["company_client_".$i]); ?>

                        <tr>
                            <td class="first-one">Client</td>
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

                        <?php $sdate1 = false; $sdate2 = false; 
                            if($value["county_regdate_".($i-1)] != ""){
                            $sdate1_data = explode("/", $value["county_regdate_".($i-1)]);
                            $sdate1 = true;
                            } 

                            if($value["county_regdate_".$i] != ""){
                            $sdate2_data = explode("/", $value["county_regdate_".$i]);
                            $sdate2 = true;
                            } 
                        ?>

                        <tr>
                            <td class="first-one">Date Registered</td>
                            <td class="text-center">
                                <span><?php echo $sdate1_data[0]; ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate1_data[1]; ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){ echo "/"; } ?>  <span><?php echo $sdate1_data[2]; ?></span>
                            </td>
                            <td class="text-center">
                                <span><?php echo $sdate2_data[0]; ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){ echo "/"; } ?>  <span><?php echo $sdate2_data[1]; ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate2_data[2]; ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">To be repaid with mortgage?</td>
                            <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                        <label class="form-check-label" for="">Yes</label>
                                        <?php if(isset($value["county_repaid_".($i-1)]) && $value["county_repaid_".($i-1)] == "Yes"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-2 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">No</label>
                                        <?php if(isset($value["county_repaid_".($i-1)]) && $value["county_repaid_".($i-1)] == "No"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                            </td>
                            <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                        <label class="form-check-label" for="">Yes</label>
                                        <?php if(isset($value["county_repaid_".$i]) && $value["county_repaid_".$i] == "Yes"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-2 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">No</label>
                                        <?php if(isset($value["county_repaid_".$i]) && $value["county_repaid_".$i] == "No"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Settled?</td>
                            <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                        <label class="form-check-label" for="">Yes</label>
                                        <?php if(isset($value["county_settle_".($i-1)]) && $value["county_settle_".($i-1)] == "Yes"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-2 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">No</label>
                                        <?php if(isset($value["county_settle_".($i-1)]) && $value["county_settle_".($i-1)] == "Yes"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                            </td>
                            <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                        <label class="form-check-label" for="">Yes</label>
                                        <?php if(isset($value["county_settle_".$i]) && $value["county_settle_".$i] == "Yes"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-2 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">No</label>
                                        <?php if(isset($value["county_settle_".$i]) && $value["county_settle_".$i] == "No"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                            </td>
                        </tr>

                        <?php $sdate1 = false; $sdate2 = false; 
                            if($value["county_setdate_".($i-1)] != ""){
                            $sdate1_data = explode("/", $value["county_setdate_".($i-1)]);
                            $sdate1 = true;
                            } 

                            if($value["county_setdate_".$i] != ""){
                            $sdate2_data = explode("/", $value["county_setdate_".$i]);
                            $sdate2 = true;
                            } 
                        ?>

                        <tr>
                            <td class="first-one">Settled Date</td>
                            <td class="text-center">
                                <span><?php echo $sdate1_data[0]; ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate1_data[1]; ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){ echo "/"; } ?>  <span><?php echo $sdate1_data[2]; ?></span>
                            </td>
                            <td class="text-center">
                                <span><?php echo $sdate2_data[0]; ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){ echo "/"; } ?>  <span><?php echo $sdate2_data[1]; ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate2_data[2]; ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Category</td>
                            <td class="text-center">
                                    <div class="col-md-3 date-input-box" style="padding: 0; margin-left: 20%:">
                                        <label class="form-check-label" for="">CCJ</label>
                                        <?php if(isset($value["county_category_".($i-1)]) && $value["county_category_".($i-1)] == "CCJ"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div> 

                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Default</label>
                                        <?php if(isset($value["county_category_".($i-1)]) && $value["county_category_".($i-1)] == "Default"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                            </td>
                            <td class="text-center">
                                    <div class="col-md-3 date-input-box" style="padding: 0; margin-left: 20%;">
                                        <label class="form-check-label" for="">CCJ</label>
                                        <?php if(isset($value["county_category_".$i]) && $value["county_category_".$i] == "CCJ"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div> 

                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Default</label>
                                        <?php if(isset($value["county_category_".$i]) && $value["county_category_".$i] == "Default"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <?php } ?>
            <?php }else{ ?>
                <table class="table" style="margin-top: 20px!important;">
                    <thead>
                        <tr>
                            <th scope="col" style="border:0px;background-color:transparent;"></th>
                            <th scope="col">CCJ / Default 1</th>
                            <th scope="col">CCJ / Default 2</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one">Company</td>
                            <td style="padding: 0px 5px;"></td>
                            <td style="padding: 0px 5px;"></td>
                        </tr>

                        <tr>
                            <td class="first-one">Amount</td>
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
                            <td class="first-one">Client</td>
                            <td class="text-center">
                                <center>
                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Joint</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                     / </div> 

                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Client 1</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>

                                    <div class="col-md-3 date-input-box" style="padding: 0;"> / 
                                        <label class="form-check-label" for="">Client 2</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>
                                </center>
                            </td>
                            <td class="text-center">
                                <center>
                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Joint</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                     / </div>

                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Client 1</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div> 

                                    <div class="col-md-3 date-input-box" style="padding: 0;"> / 
                                        <label class="form-check-label" for="">Client 2</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>
                                </center>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Date Registered</td>
                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>
                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>
                        </tr>

                    <tr>
                            <td class="first-one">To be repaid with mortgage?</td>
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
                            <td class="first-one">Settled?</td>
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
                            <td class="first-one">Settled Date</td>
                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>
                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Category</td>
                            <td class="text-center">
                                    <div class="col-md-3 date-input-box" style="padding: 0; margin-left: 20%:">
                                        <label class="form-check-label" for="">CCJ</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div> 

                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Default</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>
                            </td>
                            <td class="text-center">
                                    <div class="col-md-3 date-input-box" style="padding: 0; margin-left: 20%;">
                                        <label class="form-check-label" for="">CCJ</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div> 

                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Default</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <?php } ?>
            <!--===== 9.1 COUNTY COURT JUDGEMENTS/ DEFAULTS TABLE ENDS HERE=====-->                 

            <!--========FORM SUB-SECTION HEADING==========-->
            
            <h5 class="" style="margin-bottom: 0px!important;">9.2 Bankruptcy / IVA</h5>
            
            <!--===== 9.2 BANKRUPTCY / IVA TABLE STARTS HERE=====-->
            <!--TABLE 1 STARTS HERE-->
            <?php $bankruptcy = json_decode($bankruptcy, true); $i = 0; ?>
            <?php if($bankruptcy != NULL){ ?>
            <?php foreach($bankruptcy as $key => $value){ $i = $i + 2; ?>
            <table class="table" style="margin-bottom: 0px!important;">
                <thead>
                    <tr>
                        <th scope="col" style="border:0px;background-color:transparent;"></th>
                        <th scope="col">CCJ / Default <?php echo $i-1; ?></th>
                        <th scope="col">CCJ / Default <?php echo $i; ?></th>
                    </tr>
                </thead>
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one">Bankruptcy Amount</td>
                        <td>
                            <span style="margin:0px 5px;">£</span>
                            <span><?php echo $value["bank_ccjamount_".($i-1)]; ?></span>
                        </td>
                        <td>
                            <span style="margin:0px 5px;">£</span>
                            <span><?php echo $value["bank_ccjamount_".$i]; ?></span>
                        </td>
                    </tr>

                    <?php $b1 = explode(",", $value["bank_ccjclient_".($i-1)]); ?>
                    <?php $b2 = explode(",", $value["bank_ccjclient_".$i]); ?>

                    <tr>
                        <td class="first-one">Client</td>
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

                    <?php $sdate1 = false; $sdate2 = false; 
                        if($value["bank_date_".($i-1)] != ""){
                        $sdate1_data = explode("/", $value["bank_date_".($i-1)]);
                        $sdate1 = true;
                        } 

                        if($value["bank_date_".$i] != ""){
                        $sdate2_data = explode("/", $value["bank_date_".$i]);
                        $sdate2 = true;
                        } 
                    ?>

                    <tr>
                        <td class="first-one">Bankruptcy Date</td>
                        <td class="text-center">
                            <span><?php echo $sdate1_data[0]; ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate1_data[1]; ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){ echo "/"; } ?>  <span><?php echo $sdate1_data[2]; ?></span>
                        </td>
                        <td class="text-center">
                            <span><?php echo $sdate2_data[0]; ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){ echo "/"; } ?>  <span><?php echo $sdate2_data[1]; ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate2_data[2]; ?></span>
                        </td>
                    </tr>

                    <?php $sdate1 = false; $sdate2 = false; 
                        if($value["bank_disdate_".($i-1)] != ""){
                        $sdate1_data = explode("/", $value["bank_disdate_".($i-1)]);
                        $sdate1 = true;
                        } 

                        if($value["bank_disdate_".$i] != ""){
                        $sdate2_data = explode("/", $value["bank_disdate_".$i]);
                        $sdate2 = true;
                        } 
                    ?>

                    <tr>
                        <td class="first-one">Discharge Date</td>
                        <td class="text-center">
                            <span><?php echo $sdate1_data[0]; ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate1_data[1]; ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){ echo "/"; } ?>  <span><?php echo $sdate1_data[2]; ?></span>
                        </td>
                        <td class="text-center">
                            <span><?php echo $sdate2_data[0]; ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){ echo "/"; } ?>  <span><?php echo $sdate2_data[1]; ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate2_data[2]; ?></span>
                        </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
                <table class="table" style="margin-top: 10px!important; margin-bottom: 10px!important;">
                    <thead>
                        <tr>
                            <th scope="col" style="border:0px;background-color:transparent;"></th>
                            <th scope="col">Individual Voluntary Agreement <br/> <?php echo $i-1; ?></th>
                            <th scope="col">Individual Voluntary Agreement <br/> <?php echo $i; ?></th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered">

                        <?php $b1 = explode(",", $value["bank_indclient_".($i-1)]); ?>
                        <?php $b2 = explode(",", $value["bank_indclient_".$i]); ?>

                        <tr>
                            <td class="first-one">Client</td>
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

                        <?php $sdate1 = false; $sdate2 = false; 
                            if($value["bank_indregdate_".($i-1)] != ""){
                            $sdate1_data = explode("/", $value["bank_indregdate_".($i-1)]);
                            $sdate1 = true;
                            } 

                            if($value["bank_indregdate_".$i] != ""){
                            $sdate2_data = explode("/", $value["bank_indregdate_".$i]);
                            $sdate2 = true;
                            } 
                        ?>

                        <tr>
                            <td class="first-one">Date Registered</td>
                            <td class="text-center">
                                <span><?php echo $sdate1_data[0]; ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate1_data[1]; ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){ echo "/"; } ?>  <span><?php echo $sdate1_data[2]; ?></span>
                            </td>
                            <td class="text-center">
                                <span><?php echo $sdate2_data[0]; ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){ echo "/"; } ?>  <span><?php echo $sdate2_data[1]; ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate2_data[2]; ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Amount</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $value["bank_indamount_".($i-1)]; ?></span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $value["bank_indamount_".$i]; ?></span>
                            </td>
                        </tr>

                        <?php $sdate1 = false; $sdate2 = false; 
                            if($value["bank_indsdate_".($i-1)] != ""){
                            $sdate1_data = explode("/", $value["bank_indsdate_".($i-1)]);
                            $sdate1 = true;
                            } 

                            if($value["bank_indsdate_".$i] != ""){
                            $sdate2_data = explode("/", $value["bank_indsdate_".$i]);
                            $sdate2 = true;
                            } 
                        ?>

                        <tr>
                            <td class="first-one">Date Satisfied</td>
                            <td class="text-center">
                                <span><?php echo $sdate1_data[0]; ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate1_data[1]; ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){ echo "/"; } ?>  <span><?php echo $sdate1_data[2]; ?></span>
                            </td>
                            <td class="text-center">
                                <span><?php echo $sdate2_data[0]; ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){ echo "/"; } ?>  <span><?php echo $sdate2_data[1]; ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate2_data[2]; ?></span>
                            </td>
                        </tr>
                    </tbody>
                </table>

            
            <?php }}else{ ?>
                <table class="table" style="margin-bottom: 0px!important;">
                    <thead>
                        <tr>
                            <th scope="col" style="border:0px;background-color:transparent;"></th>
                            <th scope="col">CCJ / Default 1</th>
                            <th scope="col">CCJ / Default 2</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one">Bankruptcy Amount</td>
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
                            <td class="first-one">Client</td>
                            <td class="text-center">
                                <center>
                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Joint</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                     / </div>

                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Client 1</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>

                                    <div class="col-md-3 date-input-box" style="padding: 0;"> / 
                                        <label class="form-check-label" for="">Client 2</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>
                                </center>
                            </td>
                            <td class="text-center">
                                <center>
                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Joint</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                     / </div> 

                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Client 1</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div> 

                                    <div class="col-md-3 date-input-box" style="padding: 0;"> / 
                                        <label class="form-check-label" for="">Client 2</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>
                                </center>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Bankruptcy Date</td>
                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>
                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Discharge Date</td>
                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>
                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 1 ENDS HERE-->

                <!--TABLE 2 STARTS HERE-->
                <table class="table" style="margin-top: 10px!important; margin-bottom: 10px!important;">
                    <thead>
                        <tr>
                            <th scope="col" style="border:0px;background-color:transparent;"></th>
                            <th scope="col">Individual Voluntary Agreement <br/> 1</th>
                            <th scope="col">Individual Voluntary Agreement <br/> 2</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one">Client</td>
                            <td class="text-center">
                                <center>
                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Joint</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                     / </div> 

                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Client 1</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>

                                    <div class="col-md-3 date-input-box" style="padding: 0;"> / 
                                        <label class="form-check-label" for="">Client 2</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>
                                </center>
                            </td>
                            <td class="text-center">
                                <center>
                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Joint</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                     / </div>

                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Client 1</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div> 

                                    <div class="col-md-3 date-input-box" style="padding: 0;"> / 
                                        <label class="form-check-label" for="">Client 2</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>
                                </center>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Date Registered</td>
                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>
                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Amount</td>
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
                            <td class="first-one">Date Satisfied</td>
                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>
                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <?php } ?>
            <!--/TABLE 2 ENDS HERE-->
            <!--===== 9.2 BANKRUPTCY / IVA TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px!important;">9.3 Arrears</h5>

            <!--===== 9.3 ARREARS TABLE STARTS HERE=====-->
            <?php $arrear = json_decode($arrears, true); $i = 0; ?>
            <?php if($arrear != NULL){ ?>
            <?php foreach($arrear as $key => $value){ $i = $i + 2; ?>
            <table class="table" style="">
                <thead>
                    <tr>
                        <th scope="col" style="border:0px;background-color:transparent;"></th>
                        <th scope="col">Arrears <?php echo $i-1; ?></th>
                        <th scope="col">Arrears <?php echo $i; ?></th>
                    </tr>
                </thead>
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one">Company</td>
                        <td style="padding: 0px 5px;"><?php echo $value["arrear_company_".($i-1)]; ?></td>
                        <td style="padding: 0px 5px;"><?php echo $value["arrear_company_".$i]; ?></td>
                    </tr>

                    <tr>
                        <td class="first-one">Outstanding Amount</td>
                        <td>
                            <span style="margin:0px 5px;">£</span>                    
                            <span><?php echo $value["arrear_amount_".($i-1)]; ?></span>
                        </td>     
                        <td>
                            <span style="margin:0px 5px;">£</span>                    
                            <span><?php echo $value["arrear_amount_".$i]; ?></span>
                        </td> 
                    </tr>

                    <?php $b1 = explode(",", $value["arrear_client_".($i-1)]); ?>
                    <?php $b2 = explode(",", $value["arrear_client_".$i]); ?>

                    <tr>
                        <td class="first-one">Client</td>
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
                        <td class="first-one">Number of missed payments</td>
                        <td><?php echo $value["arrear_missedpay_".($i-1)]; ?></td>
                        <td><?php echo $value["arrear_missedpay_".$i]; ?></td>
                    </tr>

                    <?php $sdate1 = false; $sdate2 = false; 
                        if($value["arrear_misseddate_".($i-1)] != ""){
                        $sdate1_data = explode("/", $value["arrear_misseddate_".($i-1)]);
                        $sdate1 = true;
                        } 

                        if($value["arrear_misseddate_".$i] != ""){
                        $sdate2_data = explode("/", $value["arrear_misseddate_".$i]);
                        $sdate2 = true;
                        } 
                    ?>

                    <tr>
                        <td class="first-one">Date of last missed</td>
                        <td class="text-center">
                            <span><?php echo $sdate1_data[0]; ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate1_data[1]; ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){ echo "/"; } ?>  <span><?php echo $sdate1_data[2]; ?></span>
                        </td>
                        <td class="text-center">
                            <span><?php echo $sdate2_data[0]; ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){ echo "/"; } ?>  <span><?php echo $sdate2_data[1]; ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate2_data[2]; ?></span>
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one">Settled?</td>
                        <td class="text-center">
                            <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                <label class="form-check-label" for="">Yes</label>
                                <?php if(isset($value["arrear_settle_".($i-1)]) && $value["arrear_settle_".($i-1)] == "Yes" ){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                            <div class="col-md-2 date-input-box" style="padding: 0;">
                                <label class="form-check-label" for="">No</label>
                                <?php if(isset($value["arrear_settle_".($i-1)]) && $value["arrear_settle_".($i-1)] == "No" ){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                <label class="form-check-label" for="">Yes</label>
                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                            </div>
                            <div class="col-md-2 date-input-box" style="padding: 0;">
                                <label class="form-check-label" for="">No</label>
                                <?php if(isset($value["arrear_settle_".$i]) && $value["arrear_settle_".$i] == "No" ){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                <?php } ?>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <?php $sdate1 = false; $sdate2 = false; 
                            if($value["arrear_dsat_".($i-1)] != ""){
                            $sdate1_data = explode("/", $value["arrear_dsat_".($i-1)]);
                            $sdate1 = true;
                            } 

                            if($value["arrear_dsat_".$i] != ""){
                            $sdate2_data = explode("/", $value["arrear_dsat_".$i]);
                            $sdate2 = true;
                            } 
                        ?>
                        <td class="first-one">Date Satisfied</td>
                        <td class="text-center">
                        <span><?php echo $sdate1_data[0]; ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate1_data[1]; ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){ echo "/"; } ?>  <span><?php echo $sdate1_data[2]; ?></span>
                        </td>
                        <td class="text-center">
                        <span><?php echo $sdate2_data[0]; ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){ echo "/"; } ?>  <span><?php echo $sdate2_data[1]; ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate2_data[2]; ?></span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php }}else{ ?>
                <table class="table" style="">
                    <thead>
                        <tr>
                            <th scope="col" style="border:0px;background-color:transparent;"></th>
                            <th scope="col">Arrears 1</th>
                            <th scope="col">Arrears 2</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one">Company</td>
                            <td style="padding: 0px 5px;"> </td>
                            <td style="padding: 0px 5px;"> </td>
                        </tr>

                        <tr>
                            <td class="first-one">Outstanding Amount</td>
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
                            <td class="first-one">Client</td>
                            <td class="text-center">
                                <center>
                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Joint</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                     / </div> 

                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Client 1</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div> 

                                    <div class="col-md-3 date-input-box" style="padding: 0;"> / 
                                        <label class="form-check-label" for="">Client 2</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>
                                </center>
                            </td>
                            <td class="text-center">
                                <center>
                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Joint</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                     / </div> 

                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Client 1</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>

                                    <div class="col-md-3 date-input-box" style="padding: 0;"> / 
                                        <label class="form-check-label" for="">Client 2</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>
                                </center>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Number of missed payments</td>
                            <td style="padding: 0px 5px;"> </td>
                            <td style="padding: 0px 5px;"> </td>
                        </tr>

                        <tr>
                            <td class="first-one">Date of last missed</td>
                            <td class="text-center">
                                <span></span> / <span></span> /<span></span>
                            </td>
                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Settled?</td>
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
                            <td class="first-one">Date Satisfied</td>
                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>
                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <?php } ?>
            <!--===== /9.3 ARREARS TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px!important;">9.4 Repossessions</h5>

            <!--===== 9.4 RESPOSSESSIONS TABLE STARTS HERE=====-->
            <?php $reposses = json_decode($repossessions, 0); ?>
            <table class="table" style="margin-top: 10px;">
                <thead>
                    <tr>
                        <th scope="col" style="border:0px;background-color:transparent;"></th>
                        <th scope="col">Repossession 1</th>
                        <th scope="col">Repossession 2</th>
                    </tr>
                </thead>
                <?php if($reposses != NULL){ $b1 = explode(",", $reposses->reposses_client_1); ?>
                <?php $b2 = explode(",", $reposses->reposses_client_2); } ?>
                <tbody class="table-bordered">                  
                    <tr>
                        <td class="first-one">Client</td>
                        <td class="text-center">
                            <center>
                                <div class="col-md-3 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">Joint</label>
                                    <?php if($reposses != NULL && in_array( "Joint" , $b1 )){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                 / </div>  

                                <div class="col-md-3 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">Client 1</label>
                                    <?php if($reposses != NULL && in_array( "client_1" , $b1 )){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>  

                                <div class="col-md-3 date-input-box" style="padding: 0;"> / 
                                    <label class="form-check-label" for="">Client 2</label>
                                    <?php if($reposses != NULL && in_array( "client_2" , $b1 )){ ?>
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
                                    <?php if($reposses != NULL && in_array( "Joint" , $b2 )){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                 / </div>  

                                <div class="col-md-3 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">Client 1</label>
                                    <?php if($reposses != NULL && in_array( "client_1" , $b2 )){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>  

                                <div class="col-md-3 date-input-box" style="padding: 0;"> / 
                                    <label class="form-check-label" for="">Client 2</label>
                                    <?php if($reposses != NULL && in_array( "client_2" , $b2 )){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                            </center>
                        </td>
                    </tr>

                    <tr>
                        <?php if($reposses != NULL){ $sdate1 = false; $sdate2 = false; 
                            if($reposses->reposses_regdate_1 != ""){
                            $sdate1_data = explode("/", $reposses->reposses_regdate_1);
                            $sdate1 = true;
                            } 

                            if($reposses->reposses_regdate_2 != ""){
                            $sdate2_data = explode("/", $reposses->reposses_regdate_2);
                            $sdate2 = true;
                            } 
                        }
                        ?>
                        <td class="first-one">Date Registered</td>
                        <td class="text-center">
                        <?php if($reposses != NULL){ ?>
                            <span><?php echo $sdate1_data[0]; ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate1_data[1]; ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){ echo "/"; } ?>  <span><?php echo $sdate1_data[2]; ?></span>
                        <?php } ?>
                        </td>
                        <td class="text-center">
                        <?php if($reposses != NULL){ ?>
                            <span><?php echo $sdate2_data[0]; ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){ echo "/"; } ?>  <span><?php echo $sdate2_data[1]; ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate2_data[2]; ?></span>
                        <?php } ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one">Amount</td>
                        <td>
                            <span style="margin:0px 5px;">£</span>                    
                            <span><?php if($reposses != NULL){ echo $reposses->reposses_amount_1; } ?></span>
                        </td> 
                        <td>
                            <span style="margin:0px 5px;">£</span>                    
                            <span><?php if($reposses != NULL){ echo $reposses->reposses_amount_2; } ?></span>
                        </td> 
                    </tr>

                    <tr>
                        <?php if($reposses != NULL){ $sdate1 = false; $sdate2 = false; 
                            if($reposses->reposses_dsat_1 != ""){
                            $sdate1_data = explode("/", $reposses->reposses_dsat_1);
                            $sdate1 = true;
                            } 

                            if($reposses->reposses_dsat_2 != ""){
                            $sdate2_data = explode("/", $reposses->reposses_dsat_2);
                            $sdate2 = true;
                            } 
                        }
                        ?>
                        <td class="first-one">Date Satisfied</td>
                        <td class="text-center">
                        <?php if($reposses != NULL){ ?>
                            <span><?php echo $sdate1_data[0]; ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate1_data[1]; ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){ echo "/"; } ?>  <span><?php echo $sdate1_data[2]; ?></span>
                        <?php } ?>
                        </td>
                        <td class="text-center">
                        <?php if($reposses != NULL){ ?>
                            <span><?php echo $sdate2_data[0]; ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){ echo "/"; } ?>  <span><?php echo $sdate2_data[1]; ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate2_data[2]; ?></span>
                        <?php } ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--===== /9.4 RESPOSSESSIONS TABLE STARTS HERE=====-->

            <!--=====ADDITION NOTES TABLE STARTS HERE=====-->
            <table class="table marTP-30">
                <thead class="">
                  <tr>
                    <th>Additional Notes</th>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <tr>
                    <td style="vertical-align: top!important;">
                      <p style="padding:0px 5px!important;margin: 0px!important;height:120px;"><?php echo $client_additionalnotes; ?></p>
                    </td>
                  </tr>
                </tbody>
            </table>
            <!--=====/ADDITION NOTES TABLE ENDS HERE=====-->

        </form>
        <!--=====/Form Ends Here=====-->

            <!-- <table style="width: 100%;">
                <tr>
                    <td style="text-align: left; padding-left: 0.85em;">
                        Page <span>2</span> of <span>30</span>
                    </td>
                    <td style="text-align: right; padding-right: 0.85em;">
                        TS&R MCFF v1.3 June 2016
                    </td>
                </tr>
            </table> -->
        </div>
    </div>
    <!--/row-->
</div><!--/container-->
