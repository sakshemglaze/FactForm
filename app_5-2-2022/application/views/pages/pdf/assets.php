
<style type="text/css">
  .financial-table thead th {
    vertical-align: middle;
  }

  .table td, .table th {
    padding: 0rem;
    width: 20%;
    vertical-align: middle;
  }

  .tab-child {
    margin-bottom: 0rem;
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
            <h4>Section 7: Existing Assets</h4>
            <h5 style="margin-bottom: 0px;">7.1 Emergency Funds</h5>

            <form id="clientform">

            
                <table border="1" cellpadding="0" cellspacing="0" class="table" style="margin-top: 10px!important;">
                    <thead class="">
                        <tr>
                            <th scope="col" style="border:0px;background-color:transparent;"></th>
                            <th scope="col">Client 1</th>
                            <th scope="col">Client 2</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="line-height: 1.25em;">Do you have any savings set<br/>aside for emergencies?<br/><span style="font-weight: normal;">(Please provide details in 7.2)</span></td>
                            <td class="text-center">                             
                                <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if($is_saving_1 == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if($is_saving_1 == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if($is_saving_2 == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if($is_saving_2 == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                            </td>   
                        </tr>

                        <tr>
                            <td class="first-one" style="line-height: 1.25em;">If no, how do you plan to build<br/>up a fund or manage in the<br/>event of financial emergencies?</td>
                            <td>
                                <p style="padding:0px 5px!important;margin: 0px!important;height:40px;"><?php echo $fund_plan_1; ?></p>
                            </td>
                            <td>
                                <p style="padding:0px 5px!important;margin: 0px!important;height:40px;"><?php echo $fund_plan_2; ?></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            
                <h5 class="bank-account" style="margin-bottom: 0px!important;">7.2 Bank Accounts and Other Savings</h5>

                <table border="1" cellpadding="0" cellspacing="0" class="table tab-child bank-account" style="margin-top: 10px;">
                    <thead>
                        <tr>
                            <th>Owner</th>
                            <th>Account Type</th>
                            <th>Provider</th>
                            <th>Current Value</th>
                            <th>Monthly<br/>Contribution</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered" id="bankdetailholder">
                        <?php $pBank = json_decode($bank_savings, true); $i = 0; ?>
                        <?php foreach($pBank as $key => $value){ $i++; ?>
                        <tr>
                            <td style="padding: 0px 5px;"><?php echo $value['ownername_bank_'.$i]; ?></td>
                            <td style="padding: 0px 5px;"><?php echo $value['type_bank_'.$i]; ?></td>
                            <td style="padding: 0px 5px;"><?php echo $value['provider_bank_'.$i]; ?></td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $value['currentvalue_bank_'.$i]; ?></span>   
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $value['monthly_bank_'.$i]; ?></span>                
                                <span style="margin:0px 5px;">p.m.</span>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <table border="1" cellpadding="0" cellspacing="0" class=" table tab-child" style="width: 100%;">            
                    <tbody class="">
                        <tr>                
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <span style="margin: 0px 5px;">£</span>
                                <span>
                                    <?php echo $lower_currentvalue_1; ?>
                                </span>                    
                            </td>

                            <td>
                                <span style="margin: 0px 5px;">£</span>
                                <span>
                                    <?php echo $lower_monthly_1; ?>
                                </span> 
                            </td>              
                        </tr>
                    </tbody>          
                </table>

                <table border="1" cellpadding="0" cellspacing="0" class="table" style="margin-bottom: 10px!important;">
                    <thead class="">
                        <tr>
                            <th colspan="5" style="text-align: left; padding:.25em 0.85em;">Notes</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr>
                            <td colspan="5" style="vertical-align: top!important;border-right: 1px solid #000000;">
                                <p style="padding:0px 5px!important;margin: 0px!important;height:70px;"><?php echo $lower_notes_1; ?></p>
                           </td>
                        </tr>
                    </tbody>
                </table>           
  
            
                <h5 class="" style="margin-bottom: 0px!important;">7.3 Pensions & Investments</h5>

            
                <table border="1" cellpadding="0" cellspacing="0" class="table tab-child bank-account" style="margin-top: 10px;">
                    <thead>
                        <tr>
                            <th>Owner</th>
                            <th>Account Type</th>
                            <th>Provider</th>
                            <th>Amount</th>
                            <th>Monthly<br/>Contribution</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered" id="bankdetailholder">
                    <?php $pPension = json_decode($pension, true); $i = 0; ?>
                    <?php foreach($pPension as $key => $value){ $i++; ?>
                        <tr>
                            <td style="padding: 0px 5px;"><?php echo $value['ownername_pension_'.$i]; ?></td>
                            <td style="padding: 0px 5px;"><?php echo $value['type_pension_'.$i]; ?></td>
                            <td style="padding: 0px 5px;"><?php echo $value['provider_pension_'.$i]; ?></td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $value['amount_pension_'.$i]; ?></span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $value['monthly_pension_'.$i]; ?></span>               
                                <span style="margin:0px 5px;">p.m.</span>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>    

                <table border="1" cellpadding="0" cellspacing="0" class=" table tab-child" style="width: 100%;">            
                    <tbody class="">
                        <tr>                
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <span style="margin: 0px 5px;">£</span>
                                <span>
                                    <?php echo $lower_amount_2; ?>
                                </span>                    
                            </td>

                            <td>
                                <span style="margin: 0px 5px;">£</span>
                                <span>
                                    <?php echo $lower_monthly_2; ?>
                                </span> 
                            </td>              
                        </tr>
                    </tbody>          
                </table>      

                <table border="1" cellpadding="0" cellspacing="0" class="table" style="margin-bottom: 20px;">
                    <thead >
                        <tr>
                            <th colspan="5" style="text-align: left; padding:.25em 0.85em;">Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5" style="vertical-align: top!important;border-right: 1px solid #000000;">
                                <p style="padding:0px 5px!important;margin: 0px!important;height:70px;"><?php echo $lower_notes_2; ?></p>
                            </td>
                        </tr>
                    </tbody>
                </table>   
            </form>

            <!-- <table border="1" cellpadding="0" cellspacing="0" style="width: 100%;">
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
</div>
