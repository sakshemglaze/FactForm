<style>
     .tab-child > tbody > tr > td.first-one {
    font-size: 8pt;
    font-weight:bold;
  }
</style>
<div class="pdf-container">
    <div class="row">

        <div class="index-section center-block" style="margin-top: 20px!important;"> 
        <!--========FORM SECTION HEADING==========-->
        <h4>Section 13: Additional Details</h4>

        <!--========FORM SUB-SECTION HEADING==========-->
        <h5 style="margin-bottom: 0px!important;">13.1 Bank Details</h5>
          
        <!--=====Form Starts Here=====-->
        <form id="clientform">
            
            <!--===== 13.1 SOLICITOR DETAILS TABLE STARTS HERE =====-->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style="border:0px;background-color:transparent;"></th>
                        <th scope="col">Client 1</th>
                        <th scope="col" class="hide-col">Client 2</th>
                    </tr>
                </thead>
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one">Bank / Building Society</td>
                        <td style="padding: 0px 5px;"> <?php echo $bank_society_1; ?> </td>
                        <td style="padding: 0px 5px;"> <?php echo $bank_society_2; ?> </td>
                    </tr>

                    <tr>
                        <td class="first-one">Address</td>
                        <td style="padding: 0px 5px;"> <?php echo $bank_address_1; ?> </td>
                        <td style="padding: 0px 5px;"> <?php echo $bank_address_2; ?> </td>
                    </tr>

                    <tr>
                        <td class="first-one">Postcode</td>
                        <td style="padding: 0px 5px;"> <?php echo $bank_postcode_1; ?> </td>
                        <td style="padding: 0px 5px;"> <?php echo $bank_postcode_2; ?> </td>
                    </tr>

                    <tr>
                        <td class="first-one">Name(s) of Account Holder(s)</td>
                        <td style="padding: 0px 5px;"> <?php echo $bank_account_holder_1; ?> </td>
                        <td style="padding: 0px 5px;"> <?php echo $bank_account_holder_2; ?> </td>
                    </tr>

                    <tr>
                        <td class="first-one">Sort Code (00-00-00)</td>
                        <td class="text-center">

                            <span>(<?php echo $bank_sortcode1_1; ?>)</span> - <span>(<?php echo $bank_sortcode2_1; ?>)</span> - <span>(<?php echo $bank_sortcode3_1; ?>)</span>
                        </td>
                        <td class="text-center">
                            <span>(<?php echo $bank_sortcode1_2; ?>)</span> - <span>(<?php echo $bank_sortcode2_2; ?>)</span> - <span>(<?php echo $bank_sortcode3_2; ?>)</span>
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one">Account Number</td>
                        <td style="padding: 0px 5px;"> <?php echo $bank_account_number_1; ?> </td>
                        <td style="padding: 0px 5px;"> <?php echo $bank_account_number_2; ?> </td>
                    </tr>

                    <tr>
                        <td class="first-one">How long have you held this account? (years)</td>
                        <td>
                            <span style="margin:0px 5px;"> <?php echo $bank_years_1; ?> </span>
                            <span style="">yrs.</span>
                        </td>
                        <td>
                            <span style="margin:0px 5px;"> <?php echo $bank_years_2; ?> </span>
                            <span style="">yrs.</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--===== /13.1 SOLICITOR DETAILS TABLE ENDS HERE =====-->

            <!--========FORM SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px!important;">13.2 Solicitor Details</h5>           

            <!--===== 13.2 SOLICITOR DETAILS TABLE STARTS HERE =====-->
            <table class="tab-child" style="margin-top: 10px!important;width:100%!important;">
                <tbody class="">
                    <tr>
                        <td class="first-one" style="width:34%!important;">Solicitor</td>
                        <td style="padding: 0px 5px;">
                            <?php echo $solicitor; ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one" style="">Address</td>
                        <td style="padding: 0px 5px;">
                            <?php echo $solicitor_address; ?>
                        </td>
                    </tr>

                    <tr>
                       <td class="first-one" style="">Postcode</td>
                       <td style="padding: 0px 5px;">
                           <?php echo $solicitor_postcode; ?>
                       </td>
                    </tr>

                    <tr>
                        <td class="first-one" style="">Contact Name</td>
                        <td style="padding: 0px 5px;">
                            <?php echo $solicitor_name; ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one" style="">Contact Telephone</td>
                        <td style="padding: 0px 5px;">
                            <?php echo $solicitor_telephone; ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one" style="">Contact Email</td>
                        <td style="padding: 0px 5px;">
                            <?php echo $solicitor_email; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--===== /13.2 SOLICITOR DETAILS TABLE ENDS HERE =====-->

            <!--========FORM SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px!important;">13.3 Estate Agent Details</h5>           

            <!--===== 13.3 STATE AGENT DETAILS TABLE STARTS HERE =====-->
             <table class="tab-child" style="margin-top: 10px!important;width:100%!important;">
                <tbody class="">
                    <tr>
                        <td class="first-one" style="width:34%!important;">Estate Agent</td>
                        <td style="padding: 0px 5px;">
                            <?php echo $estate_agent;?>
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one" style="">Address</td>
                        <td style="padding: 0px 5px;">
                            <?php echo $estate_address;?>
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one" style="">Postcode</td>
                        <td style="padding: 0px 5px;">
                            <?php echo $estate_postcode; ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one" style="">Contact Name</td>
                        <td style="padding: 0px 5px;">
                            <?php echo $estate_name; ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one" style="">Contact Telephone</td>
                        <td style="padding: 0px 5px;">
                            <?php echo $estate_telephone; ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one" style="">Contact Email</td>
                        <td style="padding: 0px 5px;">
                            <?php echo $estate_email; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--===== /13.3 STATE AGENT DETAILS TABLE ENDS HERE =====-->

            <!--========FORM SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px!important;">13.4 Vendor Details (where relevant)</h5>           

            <!--===== 13.4 VENDOR DETAILS (WHERE RELEVANT) TABLE STARTS HERE =====-->
             <table class="tab-child" style="margin-top: 10px!important;width:100%!important;">
                <tbody class="">
                    <tr>
                        <td class="first-one" style="width:34%!important;">Contact Name</td>
                        <td style="padding: 0px 5px;">
                            <?php echo $vendor_name; ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one" style="">Address</td>
                        <td style="padding: 0px 5px;">
                            <?php echo $vendor_address; ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one" style="">Postcode</td>
                        <td style="padding: 0px 5px;">
                            <?php echo $vendor_postcode; ?>
                        </td>
                    </tr>                  

                    <tr>
                        <td class="first-one" style="">Contact Telephone</td>
                        <td style="padding: 0px 5px;">
                            <?php echo $vendor_telephone; ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one" style="">Contact Email</td>
                        <td style="padding: 0px 5px;">
                            <?php echo $vendor_email; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--===== 13.4 VENDOR DETAILS (WHERE RELEVANT) TABLE STARTS HERE =====-->

            <!--========FORM SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px!important;">13.5 Accountant Details</h5>

            <!--===== 13.5 ACCOUNTANT DETAILS TABLE STARTS HERE =====-->
            <table class="table" style="margin-top: 10px!important;">
                <thead>
                    <tr>
                        <th scope="col" style="border:0px;background-color:transparent;"></th>
                        <th scope="col">Client 1</th>
                        <th scope="col">Client 2</th>
                    </tr>
                </thead>
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one">Accountant Name</td>
                        <td style="padding: 0px 5px;"> <?php echo $accountant_name_1; ?></td>
                        <td style="padding: 0px 5px;"> <?php echo $accountant_name_2; ?></td>
                    </tr>

                    <tr>
                        <td class="first-one">Company Name</td>
                        <td style="padding: 0px 5px;"> <?php echo $accountant_company_1; ?> </td>
                        <td style="padding: 0px 5px;"> <?php echo $accountant_company_2; ?> </td>
                    </tr>

                    <tr>
                        <td class="first-one">Address</td>
                        <td style="padding: 0px 5px;"> <?php echo $accountant_address_1; ?> </td>
                        <td style="padding: 0px 5px;"> <?php echo $accountant_address_2; ?> </td>
                    </tr>

                    <tr>
                        <td class="first-one">Postcode</td>
                        <td style="padding: 0px 5px;"> <?php echo $accountant_postcode_1; ?> </td>
                        <td style="padding: 0px 5px;"> <?php echo $accountant_postcode_2; ?> </td>
                    </tr>

                    <tr>
                        <td class="first-one">Telephone Number</td>
                        <td style="padding: 0px 5px;"> <?php echo $accountant_telephone_1; ?> </td>
                        <td style="padding: 0px 5px;"> <?php echo $accountant_telephone_2; ?> </td>
                    </tr>

                    <tr>
                        <td class="first-one">Fax Number</td>
                        <td style="padding: 0px 5px;"> <?php echo $accountant_fax_1; ?> </td>
                        <td style="padding: 0px 5px;"> <?php echo $accountant_fax_2; ?> </td>
                    </tr>

                    <tr>
                        <td class="first-one">Email Address</td>
                        <td style="padding: 0px 5px;"> <?php echo $accountant_email_1; ?> </td>
                        <td style="padding: 0px 5px;"> <?php echo $accountant_email_2; ?> </td>
                    </tr>

                    <tr>
                        <td class="first-one">Qualification(s) of Accountant</td>
                        <td style="padding: 0px 5px;">
                            <?php echo $accountant_qualification_1; ?>
                        </td>
                        <td style="padding: 0px 5px;">
                            <?php echo $accountant_qualification_2; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--===== /13.5 ACCOUNTANT DETAILS TABLE ENDS HERE =====-->

            <!--========FORM SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px!important;">13.6 Contractors</h5>

            <!--===== CURRENT CONTRACTORS TABLE STARTS HERE =====-->
            <table class="table" style="margin-top: 10px!important;">
                <thead> 
                    <tr>
                        <th scope="col" style="border:0px;background-color:transparent;"></th>
                        <th scope="col">Client 1</th>
                        <th scope="col">Client 2</th>
                    </tr>

                    <tr>
                        <th scope="col" style="border-left:0px;border-bottom:0px;border-top:0px;background-color:transparent;"></th>
                        <th scope="col" colspan="2">Current Contract (1)</th>
                    </tr>
                </thead>
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one">Client Name <span style="font-weight: normal;">(Employer)</span></td>
                        <td style="padding: 0px 5px;"><?php echo $current_contract_name_1; ?></td>
                        <td style="padding: 0px 5px;"><?php echo $current_contract_name_2; ?></td>
                    </tr>

                    <?php
                        $start1 = false; $start2 = false; 
                        if($current_contract_start_1 != ""){
                            $start1_data = explode("/", $current_contract_start_1);
                            $start1 = true;
                        } 

                        if($current_contract_start_2 != ""){
                            $start2_data = explode("/", $current_contract_start_2);
                            $start2 = true;
                        } 
                    ?>

                    <tr>
                        <td class="first-one">Start Date</td>
                        <td class="text-center">
                            <span><?php if($start1){echo $start1_data[0];} ?></span> <?php if($start1){ echo "/"; } ?> <span><?php if($start1){echo $start1_data[1];} ?></span> <?php if($start1){ echo "/"; } ?> <span><?php if($start1){echo $start1_data[2];} ?></span>
                        </td>
                        <td class="text-center">
                            <span><?php if($start2){echo $start2_data[0];} ?></span> <?php if($start2){ echo "/"; } ?> <span><?php if($start2){echo $start2_data[1];} ?></span> <?php if($start2){ echo "/"; } ?> <span><?php if($start2){echo $start2_data[2];} ?></span>
                        </td>
                    </tr>

                    <?php
                        $end1 = false; $end2 = false; 
                        if($current_contract_end_1 != ""){
                            $end1_data = explode("/", $current_contract_end_1);
                            $end1 = true;
                        } 

                        if($current_contract_end_2 != ""){
                            $end2_data = explode("/", $current_contract_end_2);
                            $end2 = true;
                        } 
                    ?>

                    <tr>
                        <td class="first-one">End Date</td>
                        <td class="text-center">
                            <span><?php if($end1){echo $end1_data[0];} ?></span> <?php if($end1){ echo "/"; } ?> <span><?php if($end1){echo $end1_data[1];} ?></span> <?php if($end1){ echo "/"; } ?> <span><?php if($end1){echo $end1_data[2];} ?></span>
                        </td>
                        <td class="text-center">
                            <span><?php if($end2){echo $end2_data[0];} ?></span> <?php if($end2){ echo "/"; } ?> <span><?php if($end2){echo $end2_data[1];} ?></span> <?php if($end2){ echo "/"; } ?> <span><?php if($end2){echo $end2_data[2];} ?></span>
                        </td>
                    </tr>

                    <tr>                
                        <td class="first-one">Pay Basis</td>
                        <td class="text-center">
                            <center>
                                <div class="col-md-3 date-input-box" style="padding: 0;margin-left:30px!important;">
                                    <label class="form-check-label" for="" style="">Per Day</label>
                                    <?php if($current_contract_basis_1 == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>

                                <div class="col-md-3 date-input-box" style="padding: 0;margin-left: 10px;">
                                    <label class="form-check-label" for="" style="">Per Hour</label>
                                    <?php if($current_contract_basis_1 == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                            </center>
                        </td>
                        <td class="text-center">
                            <center>
                                <div class="col-md-3 date-input-box" style="padding: 0;margin-left:30px!important;">
                                    <label class="form-check-label" for="" style="">Per Day</label>
                                    <?php if($current_contract_basis_2 == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>

                                <div class="col-md-3 date-input-box" style="padding: 0;margin-left: 10px;">
                                    <label class="form-check-label" for="" style="">Per Hour</label>
                                    <?php if($current_contract_basis_2 == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                            </center>
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one">Pay Rate</td>
                        <td>
                           <span style="margin:0px 5px;">£</span>
                           <span><?php echo $current_contract_rate_1; ?> per week</span> 
                        </td>  
                        <td>
                           <span style="margin:0px 5px;">£</span>
                           <span><?php echo $current_contract_rate_2; ?> per week</span> 
                        </td>  
                    </tr>

                    <tr>
                        <td class="first-one">Min. Days/Hours</td>
                        <td>
                            <span style="margin: 0px 5px;">£</span>
                            <span><?php echo $current_contract_days_1; ?> per week</span>
                        </td>
                        <td>
                            <span style="margin: 0px 5px;">£</span>
                            <span><?php echo $current_contract_days_2; ?> per week</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--=====/.CURRENT CONTRACTORS TABLE ENDS HERE =====-->

            <!--===== PREVIOUS CONTRACTORS TABLE STARTS HERE =====-->
            <?php $pCont = json_decode($previous_contract, true); $i = 0; ?>
            <?php if($pCont != NULL){ foreach($pCont as $key => $value){ $i++; ?>
                <table class="table" style="margin-top: 20px!important;">
                    <thead>
                        <tr>
                            <th scope="col" style="border:0px;background-color:transparent;"></th>
                            <th scope="col">Client 1</th>
                            <th scope="col">Client 2</th>
                        </tr>

                        <tr>
                            <th scope="col" style="border-left:0px;border-bottom:0px;border-top:0px;background-color:transparent;"></th>
                            <th scope="col" colspan="2">Previous Contract (2)</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one">Client Name <span style="font-weight: normal;">(Employer)</span></td>
                            <td style="padding: 0px 5px;"><?php echo $value["previous_contract_name_".$i."_1"]; ?></td>
                            <td style="padding: 0px 5px;"><?php echo $value["previous_contract_name_".$i."_2"]; ?></td>
                        </tr>

                        <?php $sdate1 = false; $sdate2 = false; 
                            if($value["previous_contract_start_".$i."_1"] != ""){
                                $sdate1_data = explode("/", $value["previous_contract_start_".$i."_1"]);
                                $sdate1 = true;
                            } 

                            if($value["previous_contract_start_".$i."_2"] != ""){
                                $sdate2_data = explode("/", $value["previous_contract_start_".$i."_2"]);
                                $sdate2 = true;
                            } 
                        ?>

                        <tr>
                            <td class="first-one">Start Date</td>
                            <td class="text-center">
                                <span><?php echo $sdate1_data[0]; ?></span> <?php if($sdate1_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate1_data[1]; ?></span> <?php if($sdate1_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate1_data[2]; ?></span>
                            </td>
                            <td class="hide-col text-center">
                                <span><?php echo $sdate2_data[0]; ?></span> <?php if($sdate2_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate2_data[1]; ?></span> <?php if($sdate2_data[0] != ""){ echo "/"; } ?> <span><?php echo $sdate2_data[2]; ?></span>
                            </td>
                        </tr>

                        <?php $edate1 = false; $edate2 = false; 
                            if($value["previous_contract_end_".$i."_1"] != ""){
                                $edate1_data = explode("/", $value["previous_contract_end_".$i."_1"]);
                                $edate1 = true;
                            } 

                            if($value["previous_contract_end_".$i."_2"] != ""){
                                $edate2_data = explode("/", $value["previous_contract_end_".$i."_2"]);
                                $edate2 = true;
                            } 
                        ?>

                        <tr>
                            <td class="first-one">End Date</td>
                            <td class="text-center">
                                <span><?php echo $edate1_data[0]; ?></span> <?php if($edate1_data[0] != ""){ echo "/"; } ?> <span><?php echo $edate1_data[1]; ?></span> <?php if($edate1_data[0] != ""){ echo "/"; } ?> <span><?php echo $edate1_data[2]; ?></span>
                            </td>
                            <td class="text-center">
                                <span><?php echo $edate2_data[0]; ?></span> <?php if($edate2_data[0] != ""){ echo "/"; } ?> <span><?php echo $edate2_data[1]; ?></span> <?php if($edate2_data[0] != ""){ echo "/"; } ?> <span><?php echo $edate2_data[2]; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="first-one">Pay Basis</td>
                            <td class="text-center">
                                <div class="col-md-3 date-input-box" style="padding: 0;margin-left:30px!important;">
                                    <label class="form-check-label" for="" style="">Per Day</label>
                                    <?php if(isset($value["previous_contract_basis_".$i."_1"]) && $value["previous_contract_basis_".$i."_1"] == "Per_Day"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>

                                <div class="col-md-3 date-input-box" style="padding: 0;margin-left: 10px;">
                                    <label class="form-check-label" for="" style="">Per Hour</label>
                                    <?php if(isset($value["previous_contract_basis_".$i."_1"]) && $value["previous_contract_basis_".$i."_1"] == "Per_Hour"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                    
                                
                            </td>

                            <td class="text-center">
                                <center>
                                    <div class="col-md-3 date-input-box" style="padding: 0;margin-left:30px!important;">
                                        <label class="form-check-label" for="" style="">Per Day</label>
                                        <?php if(isset($value["previous_contract_basis_".$i."_2"]) && $value["previous_contract_basis_".$i."_2"] == "Per_Day"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>

                                    <div class="col-md-3 date-input-box" style="padding: 0;margin-left:10px; ">
                                        <label class="form-check-label" for="" style="">Per Hour</label>
                                        <?php if(isset($value["previous_contract_basis_".$i."_2"]) && $value["previous_contract_basis_".$i."_2"] == "Per_Hour"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                </center>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Pay Rate</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $value["previous_contract_rate_".$i."_1"]; ?></span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $value["previous_contract_rate_".$i."_2"]; ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Min. Days/Hours</td>
                            <td>
                                <span style="margin: 0px 5px;"></span>
                                <span><?php echo $value["previous_contract_days_".$i."_1"]; ?> per week</span>
                            </td>
                            <td>
                                <span style="margin: 0px 5px;"></span>
                                <span><?php echo $value["previous_contract_days_".$i."_2"]; ?> per week</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <?php }} ?>
            <!--=====/.PREVIOUS CONTRACTORS TABLE ENDS HERE =====-->          

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
