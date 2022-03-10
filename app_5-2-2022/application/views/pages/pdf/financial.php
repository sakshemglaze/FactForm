<div class="pdf-container">
    <div class="row">
        <div class="index-section center-block" style="margin-top: 20px!important;">
        <!--========FORM SECTION HEADING==========-->
        <h4>Section 5: Financial Credit & Commitments</h4>

        <!--========FORM SUB-SECTION HEADING==========-->
        <h5 style="margin-bottom: 0px!important;">5.1 Existing Credit & Commitments </h5>

        <span>Please tick if you have any of the following and provide further details in the relevant sections.</span>

        <!--=====Form Starts Here=====-->
        <form id="clientform">

            
            <!--=====5.1 EXISTING CREDIT / COMMITMENTS TABLE STARTS HERE=====-->
            <table border="1" cellpadding="0" cellspacing="0" class="financial-table" style="margin-top: 10px;">
                <thead class="">
                    <tr>
                        <th scope="col" style="border:0px;background-color:transparent;"></th>
                        <th scope="col">Client 1</th>
                        <th scope="col">Client 2</th>
                    </tr>
                </thead>
                <?php $existing1 = explode(",",$existing_1); ?>
                <?php $existing2 = explode(",",$existing_2); ?>
                <tbody class="table-bordered">  
                    <tr>
                        <td class="first-one">Personal Loan(s) <span style="font-weight: normal;">(Section 5.2)</span></td>
                        <td>
                            <?php if(in_array( "pl" , $existing1 )){ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />  
                            <?php }else{ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                            <?php } ?>            
                        </td>
                        <td>
                            <?php if(in_array( "pl" , $existing2 )){ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />  
                            <?php }else{ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                            <?php } ?>  
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one">Hire Purchase(s) <span style="font-weight: normal;">(Section 5.3)</span></td>
                        <td>
                            <?php if(in_array( "hp" , $existing1 )){ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />  
                            <?php }else{ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                            <?php } ?>                      
                        </td>
                        <td>
                            <?php if(in_array( "hp" , $existing2 )){ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />  
                            <?php }else{ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                            <?php } ?>  
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one">Credit Card(s) / Store Card(s) / Mail Order(s) <span style="font-weight: normal;">(Section 5.4)</span></td>
                        <td>
                            <?php if(in_array( "cc" , $existing1 )){ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />  
                            <?php }else{ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                            <?php } ?>  
                        </td>
                        <td>
                            <?php if(in_array( "cc" , $existing2 )){ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />  
                            <?php }else{ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                            <?php } ?>  
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one">Overdraft(s) <span style="font-weight: normal;">(Section 5.5)</span></td>
                        <td>
                            <?php if(in_array( "od" , $existing1 )){ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />  
                            <?php }else{ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                            <?php } ?>   
                        </td>
                        <td>
                            <?php if(in_array( "od" , $existing2 )){ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />  
                            <?php }else{ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                            <?php } ?>  
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one">Spousal Maintenance <span style="font-weight: normal;">(Section 5.6)</span></td>
                        <td>
                            <?php if(in_array( "sm" , $existing1 )){ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />  
                            <?php }else{ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                            <?php } ?>        
                        </td>
                        <td>
                            <?php if(in_array( "sm" , $existing2 )){ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />  
                            <?php }else{ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                            <?php } ?>   
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one">Child Maintenance <span style="font-weight: normal;">(Section 5.7)</span></td>
                        <td>
                            <?php if(in_array( "cm" , $existing1 )){ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />  
                            <?php }else{ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                            <?php } ?>   
                        </td>
                        <td>
                            <?php if(in_array( "cm" , $existing2 )){ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />  
                            <?php }else{ ?>
                                <img class="check-img" style="margin-left: 45%;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                            <?php } ?>   
                        </td>
                    </tr>                               
                </tbody>
            </table>
            <!--=====/5.1 EXISTING CREDIT / COMMITMENTS TABLE ENDS HERE=====--> 

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px!important;">5.2 Personal Loan(s)</h5>

            <!--=====5.2 PERSONAL LOAN TABLE STARTS HERE=====-->
            <?php $pLoan = json_decode($personal_loan, true); ?>
            <?php if($pLoan != NULL){ $i = 0; ?>
                <?php foreach($pLoan as $key => $value){ $i = $i + 2; ?>
                    <table border="1" cellpadding="0" cellspacing="0" class="table">
                        <thead class="">
                            <tr>
                                <th scope="col" style="border:0px;background-color:transparent;"></th>
                                <th scope="col"><?php echo $i-1; ?></th>
                                <th scope="col"><?php echo $i; ?></th>
                            </tr>
                        </thead>
                        <tbody class="table-bordered">
                            <tr>
                                <td class="first-one">Lender / Company</td>
                                <td style="padding: 0px 5px;"><?php echo $value["pllender_".($i-1)]; ?></td>
                                <td style="padding: 0px 5px;"php echo $value["pllender_".$i]; ?></td>
                            </tr>
                            <?php $b1 = explode(",", $value["plborrow_".($i-1)]); ?>
                            <?php $b2 = explode(",", $value["plborrow_".$i]); ?>

                            <tr>
                                <td class="first-one">Borrower(s)</td>
                                <td class="text-center">
                                    <center>
                                        <div class="col-md-3 date-input-box" style="padding: 0;">
                                            <label class="form-check-label" for="">Joint</label>
                                            <?php if(in_array( "Joint" , $b1 )){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>
                                       /  </div> 
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

                            <tr class="first-one">
                                <td class="first-one">Purpose</td>
                                <td style="padding: 0px 5px;"><?php echo $value["plpurpose_".($i-1)]; ?></td>
                                <td style="padding: 0px 5px;"><?php echo $value["plpurpose_".$i]; ?></td>
                            </tr>

                            <?php $sdate1 = false; $sdate2 = false; 
                                if($value["plstartdate_".($i-1)] != ""){
                                    $sdate1_data = explode("/", $value["plstartdate_".($i-1)]);
                                    $sdate1 = true;
                                } 

                                if($value["plstartdate_".$i] != ""){
                                    $sdate2_data = explode("/", $value["plstartdate_".$i]);
                                    $sdate2 = true;
                                } 
                            ?>

                            <tr>
                                <td class="first-one">Start Date</td>
                                <td class="text-center">
                                    <span><?php echo $sdate1_data[0]; ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){echo "/";} ?> <span><?php echo $sdate1_data[1]; ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){echo "/";} ?> <span><?php echo $sdate1_data[2]; ?></span>
                                </td>
                                <td class="text-center">
                                    <span><?php echo $sdate2_data[0]; ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){echo "/";} ?> <span><?php echo $sdate2_data[1]; ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){echo "/";} ?> <span><?php echo $sdate2_data[2]; ?></span>
                                </td>
                            </tr>

                            <?php $edate1 = false; $edate2 = false; 
                                if($value["plenddate_".($i-1)] != ""){
                                    $edate1_data = explode("/", $value["plenddate_".($i-1)]);
                                    $edate1 = true;
                                } 

                                if($value["plenddate_".$i] != ""){
                                    $edate2_data = explode("/", $value["plenddate_".$i]);
                                    $edate2 = true;
                                } 
                            ?>

                            <tr>
                                <td class="first-one">End Date</td>
                                <td class="text-center">
                                    <span><?php echo $edate1_data[0]; ?></span> <?php if($edate1 && $edate1_data[0] != ""){echo "/";} ?> <span><?php echo $edate1_data[1]; ?></span> <?php if($edate1 && $edate1_data[0] != ""){echo "/";} ?> <span><?php echo $edate1_data[2]; ?></span>
                                </td>
                                <td class="text-center">
                                    <span><?php echo $edate2_data[0]; ?></span> <?php if($edate2 && $edate2_data[0] != ""){echo "/";} ?> <span><?php echo $edate2_data[1]; ?></span> <?php if($edate2 && $edate2_data[0] != ""){echo "/";} ?> <span><?php echo $edate2_data[2]; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Original Loan</td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>
                                    <span><?php echo $value['ploriginal_'.($i-1)]; ?></span>
                                </td>

                                <td>
                                    <span style="margin:0px 5px;">£</span>
                                    <span><?php echo $value['ploriginal_'.$i]; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Amount Outstanding</td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>
                                    <span><?php echo $value["plamountoutstanding_".($i-1)]; ?></span>
                                </td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>
                                    <span><?php echo $value["plamountoutstanding_".$i]; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Monthly Payment</td>                
                                <td>
                                    <span style="margin:0px 5px;">£</span>

                                    <span><?php echo $value["plmonthlypayment_".($i-1)]; ?></span>
                            
                                    <span style="margin: 5px;">p.m.</span>

                                </td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>

                                    <span><?php echo $value["plmonthlypayment_".$i]; ?></span>
                            
                                    <span style="margin: 5px;">p.m.</span>

                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">A.P.R</td>
                                <td>
                                    <span style="margin: 0px 5px;"><?php echo $value["plapr_".($i-1)]; ?></span>
                                    <span style="margin: 5px;">%</span>
                                </td>
                                <td>
                                    <span style="margin: 0px 5px;"><?php echo $value["plapr_".$i]; ?></span>
                                    <span style="margin: 5px;">%</span>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Is this to be repaid on or before<br/>completion?</td>
                                <td class="text-center">
                                        <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                            <label class="form-check-label" for="">Yes</label>
                                            <?php if(isset($value["plrepaidPersonal_".($i-1)]) && $value["plrepaidPersonal_".($i-1)] == "Yes"){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-2 date-input-box" style="padding: 0;">
                                            <label class="form-check-label" for="">No</label>
                                            <?php if(isset($value["plrepaidPersonal_".($i-1)]) && $value["plrepaidPersonal_".($i-1)] == "No"){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>
                                        </div>
                                </td>
                                <td class="text-center">
                                        <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                            <label class="form-check-label" for="">Yes</label>
                                            <?php if(isset($value["plrepaidPersonal_".$i]) && $value["plrepaidPersonal_".$i] == "Yes"){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-2 date-input-box" style="padding: 0;">
                                            <label class="form-check-label" for="">No</label>
                                            <?php if(isset($value["plrepaidPersonal_".$i]) && $value["plrepaidPersonal_".$i] == "No"){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>
                                        </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Is this to be consolidated?</td>
                                <td class="text-center">
                                        <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                            <label class="form-check-label" for="">Yes</label>
                                            <?php if(isset($value["plconsolidatePersonal_".($i-1)]) && $value["plconsolidatePersonal_".($i-1)] == "Yes"){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-2 date-input-box" style="padding: 0;">
                                            <label class="form-check-label" for="">No</label>
                                            <?php if(isset($value["plconsolidatePersonal_".($i-1)]) && $value["plconsolidatePersonal_".($i-1)] == "No"){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>
                                        </div>
                                </td>
                                <td class="text-center">
                                        <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                            <label class="form-check-label" for="">Yes</label>
                                            <?php if(isset($value["plconsolidatePersonal_".$i]) && $value["plconsolidatePersonal_".$i] == "Yes"){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>                    
                                        </div>

                                        <div class="col-md-2 date-input-box" style="padding: 0;">                      
                                            <label class="form-check-label" for="">No</label>
                                            <?php if(isset($value["plconsolidatePersonal_".$i]) && $value["plconsolidatePersonal_".$i] == "No"){ ?>
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
                <table border="1" cellpadding="0" cellspacing="0" class="table">
                    <thead class="">
                        <tr>
                            <th scope="col" style="border:0px;background-color:transparent;"></th>
                            <th scope="col">1</th>
                            <th scope="col">2</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one">Lender / Company</td>
                            <td style="padding: 0px 5px;"></td>
                            <td style="padding: 0px 5px;"></td>
                        </tr>

                        <tr>
                            <td class="first-one">Borrower(s)</td>
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
                                    /  </div>

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

                        <tr class="first-one">
                            <td class="first-one">Purpose</td>
                            <td style="padding: 0px 5px;"> </td>
                            <td style="padding: 0px 5px;"> </td>
                        </tr>

                        <tr>
                            <td class="first-one">Start Date</td>
                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>
                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">End Date</td>
                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>
                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Original Loan</td>
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
                            <td class="first-one">Amount Outstanding</td>
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
                            <td class="first-one">Monthly Payment</td>                
                            <td>
                                <span style="margin:0px 5px;">£</span>

                                <span></span>
                        
                                <span style="margin: 5px;">p.m.</span>

                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>

                                <span></span>
                        
                                <span style="margin: 5px;">p.m.</span>

                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">A.P.R</td>
                            <td>
                                <span style="margin: 0px 5px;"></span>
                                <span style="margin: 5px;">%</span>
                            </td>
                            <td>
                                <span style="margin: 0px 5px;"></span>
                                <span style="margin: 5px;">%</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Is this to be repaid on or before<br/>completion?</td>
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
                            <td class="first-one">Is this to be consolidated?</td>
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
                    </tbody>          
                </table>
            <?php } ?>
            
            <!--=====/5.2 PERSONAL LOAN TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px!important;">5.3 Hire Purchase & Lease</h5>
  
            <!--=====5.3 HIRE PURCHASES / LEASE TABLE STARTS HERE=====-->
            <?php $pHire = json_decode($hirepurchase, true);  ?>
            <!--TABLE 1 STARTS HERE-->
            <?php if($pHire != NULL){ $i = 0; ?>
                <?php foreach($pHire as $key => $value){ $i = $i + 2; ?>
                    <table border="1" cellpadding="0" cellspacing="0" class="table">
                        <thead class="">
                            <tr>
                                <th scope="col" style="border:0px;background-color:transparent;"></th>
                                <th scope="col"><?php echo $i-1; ?></th>
                                <th scope="col"><?php echo $i; ?></th>
                            </tr>
                        </thead>
                        <tbody class="table-bordered">
                            <tr>
                                <td class="first-one">Lender / Company</td>
                                <td style="padding: 0px 5px;"><?php echo $value["hplender_".($i-1)]; ?></td>
                                <td style="padding: 0px 5px;"><?php echo $value["hplender_".$i]; ?></td>
                            </tr>
                            <?php $h1 = explode(",", $value["hpborrow_".($i-1)]); ?>
                            <?php $h2 = explode(",", $value["hpborrow_".$i]); ?>
                            <tr>
                                <td class="first-one">Borrower(s)</td>
                                <td class="text-center">
                                    <center>
                                        <div class="col-md-3 date-input-box" style="padding: 0;">
                                            <label class="form-check-label" for="">Joint</label>
                                            <?php if(in_array( "Joint" , $h1 )){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>
                                         / </div>

                                        <div class="col-md-3 date-input-box" style="padding: 0;">
                                            <label class="form-check-label" for="">Client 1</label>
                                            <?php if(in_array( "client_1" , $h1 )){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>
                                        </div>

                                        <div class="col-md-3 date-input-box" style="padding: 0;"> / 
                                            <label class="form-check-label" for="">Client 2</label>
                                            <?php if(in_array( "client_2" , $h1 )){ ?>
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
                                            <?php if(in_array( "Joint" , $h2 )){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>
                                         / </div>

                                        <div class="col-md-3 date-input-box" style="padding: 0;">
                                            <label class="form-check-label" for="">Client 1</label>
                                            <?php if(in_array( "client_1" , $h2 )){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>
                                        </div>

                                        <div class="col-md-3 date-input-box" style="padding: 0;"> / 
                                            <label class="form-check-label" for="">Client 2</label>
                                            <?php if(in_array( "client_2" , $h2 )){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>
                                        </div>
                                    </center>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Purpose</td>
                                <td style="padding: 0px 5px;"><?php echo $value["hppurpose_".($i-1)]; ?></td>
                                <td style="padding: 0px 5px;"><?php echo $value["hppurpose_".$i]; ?></td>
                            </tr>

                            <?php $hpsdate1 = false; $hpsdate2 = false; 
                            if($value["hpstartdate_".($i-1)] != ""){
                                $hpsdate1_data = explode("/", $value["hpstartdate_".($i-1)]);
                                $hpsdate1 = true;
                            } 

                            if($value["hpstartdate_".$i] != ""){
                                $hpsdate2_data = explode("/", $value["hpstartdate_".$i]);
                                $hpsdate2 = true;
                            } 
                            ?>

                            <tr>
                                <td class="first-one">Start Date</td>

                                <td class="text-center">
                                    <span><?php echo $hpsdate1_data[0]; ?></span> <?php if($hpsdate1 && $hpsdate1_data[0] != ""){echo "/";} ?> <span><?php echo $hpsdate1_data[1]; ?></span> <?php if($hpsdate1 && $hpsdate1_data[0] != ""){echo "/";} ?> <span><?php echo $hpsdate1_data[2]; ?></span>
                                </td>
                                <td class="text-center">
                                    <span><?php echo $hpsdate2_data[0]; ?></span> <?php if($hpsdate2 && $hpsdate2_data[0] != ""){echo "/";} ?> <span><?php echo $hpsdate2_data[1]; ?></span> <?php if($hpsdate2 && $hpsdate2_data[0] != ""){echo "/";} ?> <span><?php echo $hpsdate2_data[2]; ?></span>
                                </td>
                            </tr>

                            <?php $hpedate1 = false; $hpedate2 = false; 
                            if($value["hpenddate_".($i-1)] != ""){
                                $hpedate1_data = explode("/", $value["hpenddate_".($i-1)]);
                                $hpedate1 = true;
                            } 

                            if($value["hpenddate_".$i] != ""){
                                $hpedate2_data = explode("/", $value["hpenddate_".$i]);
                                $hpedate2 = true;
                            } 
                            ?>

                            <tr>
                                <td class="first-one">End Date</td>
                                <td class="text-center">
                                    <span><?php echo $hpedate1_data[0]; ?></span> <?php if($hpedate1 && $hpedate1_data[0] != ""){echo "/";} ?> <span><?php echo $hpedate1_data[1]; ?></span> <?php if($hpedate1 && $hpedate1_data[0] != ""){echo "/";} ?> <span><?php echo $hpedate1_data[2]; ?></span>
                                </td>
                                <td class="text-center">
                                    <span><?php echo $hpedate2_data[0]; ?></span> <?php if($hpedate2 && $hpedate2_data[0] != ""){echo "/";} ?> <span><?php echo $hpedate2_data[1]; ?></span> <?php if($hpedate2 && $hpedate2_data[0] != ""){echo "/";} ?> <span><?php echo $hpedate2_data[2]; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Original Loan</td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>

                                    <span><?php echo $value["hporiginal_".($i-1)]; ?></span>                   
                                </td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>

                                    <span><?php echo $value["hporiginal_".$i]; ?></span>                   
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Amount Outstanding</td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>

                                    <span><?php echo $value["hpamountoutstanding_".($i-1)]; ?></span>
                                </td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>

                                    <span><?php echo $value["hpamountoutstanding_".$i]; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Monthly Payment</td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>

                                    <span><?php echo $value["hpmonthlypayment_".($i-1)]; ?></span>
                            
                                    <span style="margin: 5px;">p.m.</span>
                                </td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>

                                    <span><?php echo $value["hpmonthlypayment_".$i]; ?></span>
                            
                                    <span style="margin: 5px;">p.m.</span>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">A.P.R</td>
                                <td>
                                    <span style="margin: 0px 5px;"><?php echo $value["hpapr_".($i-1)]; ?></span>                  
                                    <span style="margin: 5px;">%</span>                  
                                </td>
                                <td>
                                    <span style="margin: 0px 5px;"><?php echo $value["hpapr_".$i]; ?></span>                  
                                    <span style="margin: 5px;">%</span> 
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Is this to be repaid on or before<br/>completion?</td>
                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">                      
                                        <label class="form-check-label" for="">Yes</label>
                                        <?php if(isset($value["hprepaidHire_".($i-1)]) && $value["hprepaidHire_".($i-1)] == "Yes") { ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>    
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>        
                                    </div>
                                    <div class="col-md-2 date-input-box" style="padding: 0;">                      
                                        <label class="form-check-label" for="">No</label>
                                        <?php if(isset($value["hprepaidHire_".($i-1)]) && $value["hprepaidHire_".($i-1)] == "No") { ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>    
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>                    
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                        <label class="form-check-label" for="">Yes</label>
                                        <?php if(isset($value["hprepaidHire_".$i]) && $value["hprepaidHire_".$i] == "Yes") { ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>    
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>  
                                    </div>
                                    <div class="col-md-2 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">No</label>
                                        <?php if(isset($value["hprepaidHire_".$i]) && $value["hprepaidHire_".$i] == "No") { ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>    
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>  
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Is this to be consolidated?</td>
                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                        <label class="form-check-label" for="">Yes</label>
                                        <?php if(isset($value["hpconsolidateHire_".($i-1)]) && $value["hpconsolidateHire_".($i-1)] == "Yes") { ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>    
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>  
                                    </div>
                                    <div class="col-md-2 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">No</label>
                                        <?php if(isset($value["hpconsolidateHire_".($i-1)]) && $value["hpconsolidateHire_".($i-1)] == "No") { ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>    
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>  
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                        <label class="form-check-label" for="">Yes</label>
                                        <?php if(isset($value["hpconsolidateHire_".$i]) && $value["hpconsolidateHire_".$i] == "Yes") { ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>    
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>  
                                    </div>
                                    <div class="col-md-2 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">No</label>
                                        <?php if(isset($value["hpconsolidateHire_".$i]) && $value["hpconsolidateHire_".$i] == "No") { ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>    
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>  
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            <!--/TABLE 1 ENDS HERE-->
            <?php }}else{ ?>
                <table border="1" cellpadding="0" cellspacing="0" class="table">
                    <thead class="">
                        <tr>
                            <th scope="col" style="border:0px;background-color:transparent;"></th>
                            <th scope="col">1</th>
                            <th scope="col">2</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one">Lender / Company</td>
                            <td style="padding: 0px 5px;"></td>
                            <td style="padding: 0px 5px;"></td>
                        </tr>

                        <tr>
                            <td class="first-one">Borrower(s)</td>
                            <td class="text-center">
                                <center>
                                    <div class="col-md-3 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">Joint</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                   /  </div> 

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
                                    /  </div>

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
                            <td class="first-one">Purpose</td>
                            <td style="padding: 0px 5px;"></td>
                            <td style="padding: 0px 5px;"></td>
                        </tr>

                        <tr>
                            <td class="first-one">Start Date</td>

                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>

                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">End Date</td>
                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>
                            <td class="text-center">
                                <span></span> / <span></span> / <span></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Original Loan</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>

                                <span>Print amount here</span>                   
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>

                                <span>Print amount here</span>                   
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Amount Outstanding</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>

                                <span>Print amount here</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>

                                <span>Print amount here</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Monthly Payment</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>

                                <span>Print amount here</span>
                        
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>

                                <span>Print amount here</span>
                        
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">A.P.R</td>
                            <td>
                                <span style="margin: 0px 5px;"></span>                  
                                <span style="margin: 5px;">%</span>                  
                            </td>
                            <td>
                                <span style="margin: 0px 5px;"></span>                  
                                <span style="margin: 5px;">%</span> 
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Is this to be repaid on or before<br/>completion?</td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">                      
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />                    
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">                      
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />                    
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
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
                            <td class="first-one">Is this to be consolidated?</td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
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

            <?php } ?>
            <!--TABLE 2 STARTS HERE-->
            <table border="1" cellpadding="0" cellspacing="0" class="table" style="margin-top: 20px;">
                <thead class="">
                    <tr>
                        <th scope="col" style="border:0px;background-color:transparent;"></th>
                        <th scope="col">Client 1</th>
                        <th scope="col" class="">Client 2</th>
                    </tr>
                </thead>
                <tbody class="table-bordered" style="border:2px solid #000000;">
                    <tr>
                        <td class="first-one">Total Monthly HP / Lease Payment to remain</td>
                        <td style="font-weight: bold;">
                            <span style="margin:0px 5px;">£</span>
 
                            <span><?php echo $hptotalmonthly_1; ?></span>
                      
                            <span style="margin: 5px;">p.m.</span>
                        </td>
                        <td style="font-weight: bold;">
                            <span style="margin:0px 5px;">£</span>

                            <span><?php echo $hptotalmonthly_1; ?></span>
                      
                            <span style="margin: 5px;">p.m.</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--/TABLE 2 ENDS HERE-->
            <!--=====/5.3 HIRE PURCHASES / LEASE TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px!important;">5.4 Credit Card / Store Card / Mail Order</h5>

            <!--=====5.4 CREDIT CARD / STORE CARD / MAIL ORDER TABLE STARTS HERE=====-->
          
            <!--TABLE 1 STARTS HERE-->
            <?php $ccData = json_decode($creditcard, true); ?>
            <?php if($ccData != NULL){ $i = 0; ?>
                <?php foreach($ccData as $key => $value){ $i = $i + 2; ?>
                    <table border="1" cellpadding="0" cellspacing="0" class="table" style="margin-top: 10px;">
                        <thead class="">
                            <tr>
                                <th scope="col" style="border:0px;background-color:transparent;"></th>
                                <th scope="col"><?php echo $i-1; ?></th>
                                <th scope="col"><?php echo $i; ?></th>
                            </tr>
                        </thead>
                        <tbody class="table-bordered">
                            <tr>
                                <td class="first-one">Lender / Company</td>
                                <td style="padding: 0px 5px;"><?php echo $value["cclender_".($i-1)]; ?></td>
                                <td style="padding: 0px 5px;"><?php echo $value["cclender_".$i]; ?></td>
                            </tr>

                            <?php $c1 = explode(",", $value["ccborrow_".($i-1)]); ?>
                            <?php $c2 = explode(",", $value["ccborrow_".$i]); ?>

                            <tr>
                                <td class="first-one">Borrower(s)</td>
                                <td class="text-center">
                                    <center>
                                        <div class="col-md-3 date-input-box" style="padding: 0;">
                                            <label class="form-check-label" for="">Joint</label>
                                            <?php if(in_array( "Joint" , $c1 )){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>
                                        /  </div>
                                        <div class="col-md-3 date-input-box" style="padding: 0;">
                                            <label class="form-check-label" for="">Client 1</label>
                                            <?php if(in_array( "client_1" , $c1 )){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-3 date-input-box" style="padding: 0;"> / 
                                            <label class="form-check-label" for="">Client 2</label>
                                            <?php if(in_array( "client_2" , $c1 )){ ?>
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
                                            <?php if(in_array( "Joint" , $c2 )){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>
                                         / </div>
                                        <div class="col-md-3 date-input-box" style="padding: 0;">
                                            <label class="form-check-label" for="">Client 1</label>
                                            <?php if(in_array( "client_1" , $c2 )){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>
                                        </div> 
                                        <div class="col-md-3 date-input-box" style="padding: 0;"> / 
                                            <label class="form-check-label" for="">Client 2</label>
                                            <?php if(in_array( "client_2" , $c2 )){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>
                                        </div>
                                    </center>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Credit Limit</td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>
                                    <span><?php echo $value["cclimit_".($i-1)]; ?>e</span>
                                </td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>
                                    <span><?php echo $value["cclimit_".$i]; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Amount Outstanding</td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>
                                    <span><?php echo $value["ccamountoutstanding_".($i-1)]; ?></span>
                                </td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>
                                    <span><?php echo $value["ccamountoutstanding_".$i]; ?></span>
                                </td>
                            </tr>
        
                            <tr>
                                <td class="first-one">Do you pay the full amount each<br/>month?</td>
                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                        <label class="form-check-label" for="">Yes</label>
                                        <?php if(isset($value["ccpayment_".($i-1)]) && $value["ccpayment_".($i-1)] == "Yes"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                    
                                    <div class="col-md-2 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">No</label>
                                        <?php if(isset($value["ccpayment_".($i-1)]) && $value["ccpayment_".($i-1)] == "No"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                </td>

                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                        <label class="form-check-label" for="">Yes</label>
                                        <?php if(isset($value["ccpayment_".$i]) && $value["ccpayment_".$i] == "Yes"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-2 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">No</label>
                                        <?php if(isset($value["ccpayment_".$i]) && $value["ccpayment_".$i] == "Yes"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">A.P.R</td>
                                <td>
                                    <span><?php echo $value["ccapr_".($i-1)] ?></span>
                                    <span style="margin: 5px;">%</span>
                                </td>
                                <td>
                                    <span><?php echo $value["ccapr_".$i] ?></span>
                                    <span style="margin: 5px;">%</span>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Is this to be repaid on or before<br/>completion?</td>
                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                        <label class="form-check-label" for="">Yes</label>
                                        <?php if(isset($value["ccrepaidOrder_".($i-1)]) && $value["ccrepaidOrder_".($i-1)] == "Yes"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-2 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">No</label>
                                        <?php if(isset($value["ccrepaidOrder_".($i-1)]) && $value["ccrepaidOrder_".($i-1)] == "No"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                        <label class="form-check-label" for="">Yes</label>
                                        <?php if(isset($value["ccrepaidOrder_".$i]) && $value["ccrepaidOrder_".$i] == "Yes"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-2 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">No</label>
                                        <?php if(isset($value["ccrepaidOrder_".$i]) && $value["ccrepaidOrder_".$i] == "No"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Is this to be consolidated?</td>
                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                        <label class="form-check-label" for="">Yes</label>
                                        <?php if(isset($value["ccconsolidateOrder_".($i-1)]) && $value["ccconsolidateOrder_".($i-1)] == "Yes"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-2 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">No</label>
                                        <?php if(isset($value["ccconsolidateOrder_".($i-1)]) && $value["ccconsolidateOrder_".($i-1)] == "No"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                        <label class="form-check-label" for="">Yes</label>
                                        <?php if(isset($value["ccconsolidateOrder_".$i]) && $value["ccconsolidateOrder_".$i] == "Yes"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-2 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">No</label>
                                        <?php if(isset($value["ccconsolidateOrder_".$i]) && $value["ccconsolidateOrder_".$i] == "No"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Balance to Remain</td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>
                                    <span><?php echo $value["ccbalance_".($i-1)]; ?></span>
                                </td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>
                                    <span><?php echo $value["ccbalance_".$i]; ?></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <?php } ?>
            <?php }else{ ?>
                    <table border="1" cellpadding="0" cellspacing="0" class="table" style="margin-top: 10px;">
                        <thead class="">
                            <tr>
                                <th scope="col" style="border:0px;background-color:transparent;"></th>
                                <th scope="col">1</th>
                                <th scope="col">2</th>
                            </tr>
                        </thead>
                        <tbody class="table-bordered">
                            <tr>
                                <td class="first-one">Lender / Company</td>
                                <td style="padding: 0px 5px;"></td>
                                <td style="padding: 0px 5px;"></td>
                            </tr>

                            <tr>
                                <td class="first-one">Borrower(s)</td>
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
                                <td class="first-one">Credit Limit</td>
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
                                <td class="first-one">Amount Outstanding</td>
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
                                <td class="first-one">Do you pay the full amount each<br/>month?</td>
                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                        <label class="form-check-label" for="">Yes</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>
                                    <div class="col-md-2 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">No</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>
                                </td>

                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
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
                                <td class="first-one">A.P.R</td>
                                <td>
                                    <span></span>
                                    <span style="margin: 5px;">%</span>
                                </td>
                                <td>
                                    <span></span>
                                    <span style="margin: 5px;">%</span>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Is this to be repaid on or before<br/>completion?</td>
                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                        <label class="form-check-label" for="">Yes</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>
                                    <div class="col-md-2 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">No</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
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
                                <td class="first-one">Is this to be consolidated?</td>
                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                        <label class="form-check-label" for="">Yes</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>
                                    <div class="col-md-2 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">No</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
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
                                <td class="first-one">Balance to Remain</td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>
                                    <span></span>
                                </td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>
                                    <span></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            <?php } ?>
            <!--TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table border="1" cellpadding="0" cellspacing="0" class="table" style="margin-top: 10px; margin-bottom: 10px!important;">
                <thead class="">
                    <tr>
                        <th scope="col" style="border:0px;background-color:transparent;"></th>
                        <th scope="col">Client 1</th>
                        <th scope="col" class="hide-col">Client 2</th>
                    </tr>
                </thead>
                <tbody class="table-bordered" style="border:2px solid #000000;">
                    <tr>
                        <td class="first-one">Total Monthly Payment to<br/>remain</td>
                        <td style="font-weight: bold;">
                            <span style="margin:0px 5px;">£</span>

                            <span><?php echo $cctotal_1; ?></span>
                      
                            <span style="margin: 5px;">p.m.</span>
                        </td>

                        <td style="font-weight: bold;">
                            <span style="margin:0px 5px;">£</span>

                            <span><?php echo $cctotal_2; ?></span>
                      
                            <span style="margin: 5px;">p.m.</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--TABLE 2 ENDS HERE-->

            <!--=====/5.4 CREDIT CARD / STORE CARD / MAIL ORDER TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px!important;">5.5 Overdraft</h5>

            <!--=====5.5 OVERDRAFT TABLE STARTS HERE=====-->
          
            <!--TABLE 1 STARTS HERE-->
            <?php $odData = json_decode($overdraft, true); $i = 0; ?>
            <?php if($odData != NULL){ $i = 0; ?>
                <?php foreach($odData as $key => $value){ $i = $i + 2; ?>
                    <table border="1" cellpadding="0" cellspacing="0" class="table" style="margin-top: 10px;">
                        <thead class="">
                            <tr>
                                <th scope="col" style="border:0px;background-color:transparent;"></th>
                                <th scope="col"><?php echo $i-1; ?></th>
                                <th scope="col"><?php echo $i; ?></th>
                            </tr>
                        </thead>
                        <tbody class="table-bordered">
                            <tr>
                            <td class="first-one">Lender / Company</td>
                            <td style="padding: 0px 5px;"><?php echo $value["odlender_".($i-1)]; ?></td>
                            <td style="padding: 0px 5px;"><?php echo $value["odlender_".$i]; ?></td>
                            </tr>

                            <?php $od1 = explode(",", $value["odborrow_".($i-1)]); ?>
                            <?php $od2 = explode(",", $value["odborrow_".$i]); ?>

                            <tr>
                                <td class="first-one">Borrower(s)</td>
                                <td class="text-center">
                                    <center>
                                        <div class="col-md-3 date-input-box" style="padding: 0;">
                                            <label class="form-check-label" for="">Joint</label>
                                            <?php if(in_array( "Joint" , $od1 )){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>
                                        / </div> 

                                        <div class="col-md-3 date-input-box" style="padding: 0;">
                                            <label class="form-check-label" for="">Client 1</label>
                                            <?php if(in_array( "client_1" , $od1 )){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>
                                        </div>  

                                        <div class="col-md-3 date-input-box" style="padding: 0;"> / 
                                            <label class="form-check-label" for="">Client 2</label>
                                            <?php if(in_array( "client_2" , $od1 )){ ?>
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
                                            <?php if(in_array( "Joint" , $od2 )){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>
                                         / </div> 
                                        <div class="col-md-3 date-input-box" style="padding: 0;">
                                            <label class="form-check-label" for="">Client 1</label>
                                            <?php if(in_array( "client_1" , $od2 )){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>
                                        </div>  
                                        <div class="col-md-3 date-input-box" style="padding: 0;"> / 
                                            <label class="form-check-label" for="">Client 2</label>
                                            <?php if(in_array( "client_2" , $od2 )){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php }else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php } ?>
                                        </div>
                                    </center>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Overdraft Limit</td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>
                                    <span><?php echo $value["odlimit_".($i-1)]; ?></span>
                                </td>

                                <td>
                                    <span style="margin:0px 5px;">£</span>
                                    <span><?php echo $value["odlimit_".$i]; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Current Balance</td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>
                                    <span><?php echo $value["odcurrentbalance_".($i-1)]; ?></span>
                                </td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>
                                    <span><?php echo $value["odcurrentbalance_".$i]; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Maximum amount overdrawn in<br/>last 3 months</td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>
                                    <span><?php echo $value["odamountdrawn_".($i-1)]; ?></span>
                                </td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>
                                    <span><?php echo $value["odamountdrawn_".$i]; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">A.P.R</td>
                                <td>
                                    <span><?php echo $value["odapr_".($i-1)]; ?></span>
                                    <span style="margin: 5px;">%</span>
                                </td>
                                <td>
                                    <span><?php echo $value["odapr_".$i]; ?></span>
                                    <span style="margin: 5px;">%</span>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Monthly Overdraft Fee</td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>

                                    <span><?php echo $value["odmonthlyfee_".($i-1)]; ?></span>
                            
                                    <span style="margin: 5px;">p.m.</span>
                                </td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>

                                    <span><?php echo $value["odmonthlyfee_".$i]; ?></span>
                            
                                    <span style="margin: 5px;">p.m.</span>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Is this to be repaid on or before<br/>completion?</td>
                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                        <label class="form-check-label" for="">Yes</label>
                                        <?php if(isset($value['odrepaidOverdraft_'.($i-1)]) && $value['odrepaidOverdraft_'.($i-1)]=="Yes"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-2 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">No</label>
                                        <?php if(isset($value['odrepaidOverdraft_'.($i-1)]) && $value['odrepaidOverdraft_'.($i-1)]=="No"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                </td>

                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                        <label class="form-check-label" for="">Yes</label>
                                        <?php if(isset($value['odrepaidOverdraft_'.$i]) && $value['odrepaidOverdraft_'.$i]=="Yes"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-2 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">No</label>
                                        <?php if(isset($value['odrepaidOverdraft_'.$i]) && $value['odrepaidOverdraft_'.$i]=="No"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                </td> 
                            </tr>

                            <tr>
                                <td class="first-one">Balance to Remain</td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>
                                    <span><?php echo $value["odbalance_".($i-1)]; ?></span>
                                </td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>
                                    <span><?php echo $value["odbalance_".$i]; ?></span> 
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Is this to be consolidated?</td>
                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                        <label class="form-check-label" for="">Yes</label>
                                        <?php if(isset($value['odconsolidateOverdraft_'.($i-1)]) && $value['odconsolidateOverdraft_'.($i-1)]=="Yes"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-2 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">No</label>
                                        <?php if(isset($value['odconsolidateOverdraft_'.($i-1)]) && $value['odconsolidateOverdraft_'.($i-1)]=="No"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                </td> 
                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                        <label class="form-check-label" for="">Yes</label>
                                        <?php if(isset($value['odconsolidateOverdraft_'.$i]) && $value['odconsolidateOverdraft_'.$i]=="Yes"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-2 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">No</label>
                                        <?php if(isset($value['odconsolidateOverdraft_'.$i]) && $value['odconsolidateOverdraft_'.$i]=="No"){ ?>
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
                    <table border="1" cellpadding="0" cellspacing="0" class="table" style="margin-top: 10px;">
                        <thead class="">
                            <tr>
                                <th scope="col" style="border:0px;background-color:transparent;"></th>
                                <th scope="col">1</th>
                                <th scope="col">2</th>
                            </tr>
                        </thead>
                        <tbody class="table-bordered">
                            <tr>
                            <td class="first-one">Lender / Company</td>
                            <td style="padding: 0px 5px;"></td>
                            <td style="padding: 0px 5px;"></td>
                            </tr>

                            <tr>
                                <td class="first-one">Borrower(s)</td>
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
                                <td class="first-one">Overdraft Limit</td>
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
                                <td class="first-one">Current Balance</td>
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
                                <td class="first-one">Maximum amount overdrawn in<br/>last 3 months</td>
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
                                <td class="first-one">A.P.R</td>
                                <td>
                                    <span></span>
                                    <span style="margin: 5px;">%</span> -->
                                </td>
                                <td>
                                    <span></span>
                                    <span style="margin: 5px;">%</span>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Monthly Overdraft Fee</td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>

                                    <span></span>
                            
                                    <span style="margin: 5px;">p.m.</span>
                                </td>
                                <td>
                                    <span style="margin:0px 5px;">£</span>

                                    <span></span>
                            
                                    <span style="margin: 5px;">p.m.</span>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">Is this to be repaid on or before<br/>completion?</td>
                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                        <label class="form-check-label" for="">Yes</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>
                                    <div class="col-md-2 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">No</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>
                                </td>

                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
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
                                <td class="first-one">Balance to Remain</td>
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
                                <td class="first-one">Is this to be consolidated?</td>
                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                        <label class="form-check-label" for="">Yes</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>
                                    <div class="col-md-2 date-input-box" style="padding: 0;">
                                        <label class="form-check-label" for="">No</label>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    </div>
                                </td> 
                                <td class="text-center">
                                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
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
            <?php } ?>
            <!--/ TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table border="1" cellpadding="0" cellspacing="0" class="table " style="margin-top: 10px; margin-bottom: 10px!important;">
                <thead class="">
                    <tr>
                        <th scope="col" style="border:0px;background-color:transparent;"></th>
                        <th scope="col">Client 1</th>
                        <th scope="col">Client 2</th>
                    </tr>
                </thead>
                <tbody class="table-bordered" style="border:2px solid #000000;">
                    <tr>
                        <td class="first-one">Total Monthly Overdraft<br/>Payment to remain</td>
                        <td style="font-weight: bold;">
                            <span style="margin:0px 5px;">£</span>

                            <span><?php echo $odtotalmonthly_1; ?></span>
                      
                            <span style="margin: 5px;">p.m.</span>
                        </td>
                        <td style="font-weight: bold;">
                            <span style="margin:0px 5px;">£</span>

                            <span><?php echo $odtotalmonthly_2; ?></span>
                      
                            <span style="margin: 5px;">p.m.</span>
                        </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--=====/5.5 OVERDRAFT TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px!important;">5.6 Spousal Maintenance</h5>


            <!--=====5.6 SPOUSAL MAINTENANCE TABLE STARTS HERE=====-->
            <?php $smData = json_decode($spousal, true); $i = 0; ?>
            <?php if($smData != NULL){ ?>
                <?php foreach($smData as $key => $value){ $i = $i + 2; ?>
                    <table border="1" cellpadding="0" cellspacing="0" class="table" style="margin-top: 10px;">
                        <thead class="">
                            <tr>
                                <th scope="col" style="border:0px;background-color:transparent;"></th>
                                <th scope="col">Client 1</th>
                                <th scope="col" class="hide-col">Client 2</th>
                            </tr>
                        </thead>
                        <tbody class="table-bordered">
                        <?php $smedate1 = false; $smedate2 = false; 
                            if($value["smenddate_".($i-1)] != ""){
                                $smedate1_data = explode("/", $value["smenddate_".($i-1)]);
                                $smedate1 = true;
                            } 

                            if($value["smenddate_".$i] != ""){
                                $smedate2_data = explode("/", $value["smenddate_".$i]);
                                $smedate2 = true;
                            } 
                        ?>
                            <tr>
                                <td class="first-one">End Date</td>
                                <td class="text-center">
                                    <span><?php echo $smedate1_data[0]; ?></span> <?php if($smedate1 && $smedate1_data[0] != ""){echo "/";} ?> <span><?php echo $smedate1_data[1]; ?></span> <?php if($smedate1 && $smedate1_data[0] != ""){echo "/";} ?> <span><?php echo $smedate1_data[2]; ?></span>
                                </td>
                                <td class="text-center">
                                    <span><?php echo $smedate2_data[0]; ?></span> <?php if($smedate2 && $smedate2_data[0] != ""){echo "/";} ?> <span><?php echo $smedate2_data[1]; ?></span> <?php if($smedate2 && $smedate2_data[0] != ""){echo "/";} ?> <span><?php echo $smedate2_data[2]; ?></span>
                                </td>
                            </tr>

                            <tr style="border:2px solid #000000;">
                                <td class="first-one">Amount</td>
                                <td style="font-weight: bold;">
                                    <span style="margin:0px 5px;">£</span>

                                    <span><?php echo $value['smamount_'.($i-1)]; ?></span>
                            
                                    <span style="margin: 5px;">p.m.</span>
                                </td>
                                <td style="font-weight: bold;">
                                    <span style="margin:0px 5px;">£</span>

                                    <span><?php echo $value['smamount_'.$i]; ?></span>
                            
                                    <span style="margin: 5px;">p.m.</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <?php } ?>
            <?php }else{ ?>
                    <table border="1" cellpadding="0" cellspacing="0" class="table" style="margin-top: 10px;">
                        <thead class="">
                            <tr>
                                <th scope="col" style="border:0px;background-color:transparent;"></th>
                                <th scope="col">Client 1</th>
                                <th scope="col" class="hide-col">Client 2</th>
                            </tr>
                        </thead>
                        <tbody class="table-bordered">
                            <tr>
                                <td class="first-one">End Date</td>
                                <td class="text-center">
                                    <span></span> / <span></span> / <span></span>
                                </td>
                                <td class="text-center">
                                    <span></span> / <span></span> / <span></span>
                                </td>
                            </tr>

                            <tr style="border:2px solid #000000;">
                                <td class="first-one">Amount</td>
                                <td style="font-weight: bold;">
                                    <span style="margin:0px 5px;">£</span>

                                    <span></span>
                            
                                    <span style="margin: 5px;">p.m.</span>
                                </td>
                                <td style="font-weight: bold;">
                                    <span style="margin:0px 5px;">£</span>

                                    <span></span>
                            
                                    <span style="margin: 5px;">p.m.</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            <?php } ?>
            <!--=====/5.6 SPOUSAL MAINTENANCE TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px!important;">5.7 Child Maintenance</h5>

            <!--=====5.7 CHILD MAINTENANCE TABLE STARTS HERE=====-->
          
            <!--TABLE 1 STARTS HERE-->
            <?php $cmData = json_decode($childmaintenance, true); $i = 0; ?>

            <?php if($cmData != NULL){ ?>
                <?php foreach($cmData as $key => $value){ $i = $i + 2; ?>
                    <table border="1" cellpadding="0" cellspacing="0" class="table" style="margin-top: 10px;">
                        <thead class="">
                            <tr>
                                <th scope="col" style="border:0px;background-color:transparent;"></th>
                                <th scope="col">Client 1</th>
                                <th scope="col" class="hide-col">Client 2</th>
                            </tr>
                        </thead>
                        <tbody class="table-bordered">
                            <tr>
                                <td class="first-one">Payment</td>
                                <td style="font-weight: bold;">
                                    <span style="margin:0px 5px;">£</span>

                                    <span><?php echo $value['cmpayment_'.($i-1)]; ?></span>
                            
                                    <span style="margin: 5px;">p.m.</span>
                                </td>
                                
                                <td style="font-weight: bold;">
                                    <span style="margin:0px 5px;">£</span>

                                    <span><?php echo $value['cmpayment_'.$i]; ?></span>
                            
                                    <span style="margin: 5px;">p.m.</span>
                                </td>
                            </tr>

                            <?php $cmedate1 = false; $cmedate2 = false; 
                            if($value["cmenddate_".($i-1)] != ""){
                                $cmedate1_data = explode("/", $value["cmenddate_".($i-1)]);
                                $cmedate1 = true;
                            } 

                            if($value["cmenddate_".$i] != ""){
                                $cmedate2_data = explode("/", $value["cmenddate_".$i]);
                                $cmedate2 = true;
                            } 
                            ?>

                            <tr>
                                <td class="first-one">End Date</td>
                                <td class="text-center">
                                    <span><?php echo $cmedate1_data[0]; ?></span> <?php if($cmedate1_data[0] != ""){echo "/";} ?> <span><?php echo $cmedate1_data[1]; ?></span> <?php if($cmedate1_data[0] != ""){echo "/";} ?> <span><?php echo $cmedate1_data[2]; ?></span>
                                </td>
                                <td class="hide-col text-center">
                                    <span><?php echo $cmedate2_data[0]; ?></span> <?php if($cmedate2_data[0] != ""){echo "/";} ?> <span><?php echo $cmedate2_data[1]; ?></span> <?php if($cmedate2_data[0] != ""){echo "/";} ?> <span><?php echo $cmedate2_data[2]; ?></span>
                                </td>
                            </tr>
                        </tbody>
                    </table><!--/TABLE 1 ENDS HERE-->
                <?php } ?>
            <?php }else{ ?>
                    <table border="1" cellpadding="0" cellspacing="0" class="table" style="margin-top: 10px;">
                        <thead class="">
                            <tr>
                                <th scope="col" style="border:0px;background-color:transparent;"></th>
                                <th scope="col">Client 1</th>
                                <th scope="col" class="hide-col">Client 2</th>
                            </tr>
                        </thead>
                        <tbody class="table-bordered">
                            <tr>
                                <td class="first-one">Payment</td>
                                <td style="font-weight: bold;">
                                    <span style="margin:0px 5px;">£</span>

                                    <span></span>
                            
                                    <span style="margin: 5px;">p.m.</span>
                                </td>
                                
                                <td style="font-weight: bold;">
                                    <span style="margin:0px 5px;">£</span>

                                    <span></span>
                            
                                    <span style="margin: 5px;">p.m.</span>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-one">End Date</td>
                                <td class="text-center">
                                    <span></span> / <span></span> / <span></span>
                                </td>
                                <td class="hide-col text-center">
                                    <span></span> / <span></span> / <span></span>
                                </td>
                            </tr>
                        </tbody>
                    </table><!--/TABLE 1 ENDS HERE-->
            <?php } ?>

            <table border="1" cellpadding="0" cellspacing="0" class="table" style="margin-bottom: 10px!important;">
                <tbody class="table-bordered">
                    <tr style="border:2px solid #000000;">
                        <td class="first-one" style="width: 25%!important; padding: .55em .85em;">Total Child Maintenance </td>
                        <td style="font-weight: bold;">
                            <span style="margin:0px 5px;">£</span>

                            <span><?php echo $cmtotalmaintenance_1; ?></span>
                      
                            <span style="margin: 5px;">p.m.</span>
                        </td>

                        <td style="font-weight: bold;">
                            <span style="margin:0px 5px;">£</span>

                            <span><?php echo $cmtotalmaintenance_2; ?></span>
                      
                            <span style="margin: 5px;">p.m.</span>
                        </td>
                    </tr>
                </tbody>
            </table><!--/TABLE 2 ENDS HERE-->
            <!--=====/5.7 CHILD MAINTENANCE TABLE STARTS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px!important;">5.8 Financial Commitment Summary</h5>

            <!--=====5.8 FINANCIAL COMMITMENT SUMMARY TABLE STARTS HERE=====-->
            <table border="1" cellpadding="0" cellspacing="0" class="table" style="margin-top: 10px;">
                <thead class="">
                    <tr>
                        <th scope="col" style="border:0px;background-color:transparent;"></th>
                        <th scope="col">Client 1</th>
                        <th scope="col" class="hide-col">Client 2</th>
                    </tr>
                </thead>
                <tbody class="table-bordered" style="border:2px solid #000000;">
                    <tr>
                        <td class="first-one" style="padding: .55em .85em;">Total Monthly Summary</td>
                        <td style="font-weight: bold;">
                            <span style="margin:0px 5px;">£</span>

                            <span><?php echo $client_finsummary_1; ?></span>
                      
                            <span style="margin: 5px;">p.m.</span>
                        </td>
                        <td style="font-weight: bold;">
                            <span style="margin:0px 5px;">£</span>

                            <span><?php echo $client_finsummary_2; ?></span>
                      
                            <span style="margin: 5px;">p.m.</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--=====5.8 FINANCIAL COMMITMENT SUMMARY TABLE STARTS HERE=====-->

            

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

