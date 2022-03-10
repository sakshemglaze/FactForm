
<div class="pdf-container">
  <div class="row">
    <div class="index-section center-block" style="margin-top: 20px!important;">
        <!--========FORM SECTION HEADING==========-->
        <h4>Section 3: Self-Employed Details</h4>

        <!--========FORM SUB-SECTION HEADING==========-->
        <h5 style="margin-bottom: 30px!important;">3.1 Business Details</h5>

        <!--=====Form Starts Here=====-->
        <form id="clientform">

            <!--=====3.1 BUSINESS DETAILS TABLE STARTS HERE=====-->
            <!-- TABLE 1 STARTS HERE-->
            <table class="table">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col">Client 1</th>
                  <th scope="col" class="hide-col">Client 2</th>
                </tr>
              </thead>
              <tbody class="table-bordered"> 
                
                <tr>
                  <td class="first-one">Name of Business</td>
                  <td style="padding:0px 5px!important;">
                    <?php echo $client_businessname_1; ?>
                  </td>
                  <td style="padding:0px 5px!important;">
                    <?php echo $client_businessname_2; ?>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Address</td>
                  <td style="padding:0px 5px!important;"><?php echo $client_businessaddress_1; ?></td>
                  <td style="padding:0px 5px!important;"><?php echo $client_businessaddress_2; ?></td>
                </tr>                

                <tr>
                  <td class="first-one">Postcode</td>
                  <td style="padding:0px 5px!important;">
                    <?php echo $client_businesspostcode_1; ?>
                  </td>
                  <td style="padding:0px 5px!important;">
                    <?php echo $client_businesspostcode_2; ?>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Telephone Number</td>
                  <td style="padding:0px 5px!important;">
                    <?php echo $client_businessphone_1; ?>
                  </td>
                  <td style="padding:0px 5px!important;">
                    <?php echo $client_businessphone_2; ?>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Email Address</td>
                  <td style="padding:0px 5px!important;">
                    <?php echo $client_businessemail_1; ?>
                  </td>
                  <td style="padding:0px 5px!important;">
                    <?php echo $client_businessemail_2; ?>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Type of Business</td>
                  <td style="padding:0px 5px!important;">
                    <?php echo $client_businesstype_1; ?>
                  </td>
                  <td style="padding:0px 5px!important;">
                    <?php echo $client_businesstype_2; ?>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Occupation / Job Title</td>
                  <td style="padding:0px 5px!important;">
                    <?php echo $client_businessoccupation_1; ?>
                  </td>
                  <td style="padding:0px 5px!important;">
                    <?php echo $client_businessoccupation_2; ?>
                  </td>
                </tr>

                <tr>
                  <td class="first-one" style="line-height: 1.05em;">Date Business Started / Holding<br/>Acquired<br/>
                    <span style="font-weight: normal;line-height: 1.05em!important;">
                      (if less than 1 year, please provide<br/>
                      previous employment details in the Notes<br/>section)
                    </span>
                  </td>          

                  <?php $bdate1 = false; $bdate2 = false; 
                    if($client_businessdate_1 != ""){
                      $bdate1_data = explode("/", $client_businessdate_1);
                      $bdate1 = true;
                    } 

                    if($client_businessdate_2 != ""){
                      $bdate2_data = explode("/", $client_businessdate_2);
                      $bdate2 = true;
                    } 
                  ?>        

                  <td class="text-center">
                      <span><?php if($bdate1){echo $bdate1_data[0];} ?></span> <?php if($bdate1 && $bdate1_data[0] != ""){ echo "/";} ?> <span><?php if($bdate1){echo $bdate1_data[1];} ?></span> <?php if($bdate1 && $bdate1_data[0] != ""){ echo "/";} ?> <span><?php if($bdate1){echo $bdate1_data[2];} ?></span>
                  </td>

                  <td class="hide-col text-center">
                      <span><?php if($bdate2){echo $bdate2_data[0];} ?></span> <?php if($bdate2 && $bdate2_data[0] != ""){ echo "/";} ?> <span><?php if($bdate2){echo $bdate2_data[1];} ?></span> <?php if($bdate2 && $bdate2_data[0] != ""){ echo "/";} ?> <span><?php if($bdate2){echo $bdate2_data[2];} ?></span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Business Status</td>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label" for="">Sole Trader</label>
                      <?php if($client_businessstatus_1 == "Sole Trader"){ ?>
                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php }else{ ?>
                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php } ?>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="">Limited Company</label>
                      <?php if($client_businessstatus_1 == "Limited Company"){ ?>
                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php }else{ ?>
                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php } ?>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="">Partnership</label>
                      <?php if($client_businessstatus_1 == "Partnership"){ ?>
                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php }else{ ?>
                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" /> style="margin-right: 5px;"
                      <?php } ?>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="">Limited Liability Partnership</label>
                      <?php if($client_businessstatus_1 == "Limited Liability Partnership"){ ?>
                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php }else{ ?>
                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php } ?>
                    </div>
                  </td>
                  <td class="">
                    <div class="form-check">
                      <label class="form-check-label" for="">Sole Trader</label>
                      <?php if($client_businessstatus_2 == "Sole Trader"){ ?>
                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php }else{ ?>
                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php } ?>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="">Limited Company</label>
                      <?php if($client_businessstatus_2 == "Limited Company"){ ?>
                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php }else{ ?>
                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php } ?>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="">Partnership</label>
                      <?php if($client_businessstatus_2 == "Partnership"){ ?>
                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php }else{ ?>
                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php } ?>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="">Limited Liability Partnership</label>
                      <?php if($client_businessstatus_2 == "Limited Liability Partnership"){ ?>
                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php }else{ ?>
                        <img style="margin-right: 5px;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php } ?>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Company Registration No</td>
                  <td style="padding:0px 5px!important;">
                    <?php echo $client_compregno_1; ?>
                  </td>
                  <td style="padding:0px 5px!important;">
                    <?php echo $client_compregno_2; ?>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Percentage Shareholding in<br/>Business</td>
                  <td>
                    <span style="margin: 0px 5px;"><?php echo $client_businessper_1; ?></span> 
                    <span style="margin: 0px 5px;">%</span>
                  </td>
                  <td class="">
                    <span style="margin:0px 5px;"><?php echo $client_businessper_2; ?></span> 
                    <span style="margin: 0px 5px;">%</span>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE -->
            <table class="table" style="margin-top: 10px;">
              <tbody class="table-bordered">
                <tr>
                  <td class="first-one" style="width: 25%!important;">Are you a Contractor?<br/><span style="font-weight: normal;">(If Yes, please complete section 13)</span></td>
                  <td class="text-center">
                      <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                        <label class="form-check-label" for="">Yes</label>
                        <?php if($client_contractstatus_1 == "Yes"){ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                        <?php }else{ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                        <?php } ?>
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <?php if($client_contractstatus_1 == "No"){ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                        <?php }else{ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                        <?php } ?>
                      </div>
                  </td>
                  <td class="text-center">
                      <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                        <label class="form-check-label" for="">Yes</label>
                        <?php if($client_contractstatus_2 == "Yes"){ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                        <?php }else{ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                        <?php } ?>
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <?php if($client_contractstatus_2 == "No"){ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                        <?php }else{ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                        <?php } ?>
                      </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->

            <!--TABLE 3 STARTS HERE -->
            <table class="table" style="margin-bottom: 10px!important;">
              <tbody class="table-bordered">
                <tr>
                  <td class="first-one" style="width: 25%!important;">Do you have an Accountant?<br/><span style="font-weight: normal;">(If Yes, please complete section 14)</span></td>
                  <td class="text-center">
                      <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                        <label class="form-check-label" for="">Yes</label>
                        <?php if($client_accountantstatus_1 == "Yes"){ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                        <?php }else{ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                        <?php } ?>
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <?php if($client_accountantstatus_1 == "No"){ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                        <?php }else{ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                        <?php } ?>
                      </div>
                  </td>
                  <td class="text-center">
                      <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                        <label class="form-check-label" for="">Yes</label>
                        <?php if($client_accountantstatus_2 == "Yes"){ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                        <?php }else{ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                        <?php } ?>
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <?php if($client_accountantstatus_2 == "No"){ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                        <?php }else{ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                        <?php } ?>
                      </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 3 ENDS HERE -->
            <!--=====/3.1 BUSINESS DETAILS TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="">3.2 Self Employed Income</h5>

            <!--=====3.2 SELF EMPLOYED INCOME TABLE STARTS HERE=====-->
            <!-- TABLE 1 STARTS HERE-->
            <table class="table">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col">Client 1</th>
                  <th scope="col" class="hide-col">Client 2</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td class="first-one">Number of Years’ Accounts / <br/>Self-Assessment Available</td>
                  <td style="padding:0px 5px!important;"><?php echo $client_accountyear_1; ?></td>
                  <td style="padding:0px 5px!important;"><?php echo $client_accountyear_2; ?></td>
                </tr>
              </tbody>
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col" colspan="2">Latest Year (1)</th>
                </tr>
              </thead>
              <?php $ye1date1 = false; $ye1date2 = false; 
                if($client_yearend1_1 != ""){
                  $ye1date1_data = explode("/", $client_yearend1_1);
                  $ye1date1 = true;
                } 

                if($client_yearend1_2 != ""){
                  $ye1date2_data = explode("/", $client_yearend1_2);
                  $ye1date2 = true;
                } 
              ?>
              <tbody class="table-bordered">
                <tr>
                  <td class="first-one">Year End</td>
                  
                  <td class="text-center">
                      <span><?php if($ye1date1){echo $ye1date1_data[0];} ?></span> <?php if($ye1date1 && $ye1date1_data[0] != ""){ echo "/";} ?> <span><?php if($ye1date1){echo $ye1date1_data[1];} ?></span> <?php if($ye1date1 && $ye1date1_data[0] != ""){ echo "/";} ?> <span><?php if($ye1date1){echo $ye1date1_data[2];} ?></span>
                  </td>
                  <td class="text-center">
                       <span><?php if($ye1date2){echo $ye1date2_data[0];} ?></span> <?php if($ye1date2 && $ye1date2_data[0] != ""){ echo "/";} ?> <span><?php if($ye1date2){echo $ye1date2_data[1];} ?></span> <?php if($ye1date2 && $ye1date2_data[0] != ""){ echo "/";} ?> <span><?php if($ye1date2){echo $ye1date2_data[2];} ?></span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Net Profit (before taxation)</td>
                  <td>
                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_netprofit1_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                  <td class="">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_netprofit1_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Net Dividend <span style="font-weight: normal;">(if Ltd)</span></td>
                  <td>

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_netdividend1_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>

                  </td>
                  <td class="">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_netdividend1_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Director’s Remuneration <span style="font-weight: normal;">(if Ltd)</span></td>
                  <td>
                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_renumeration1_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                  <td class="">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_renumeration1_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                </tr>
              </tbody>
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col" colspan="2">Previous Year (2)</th>
                </tr>
              </thead>
              <?php $ye2date1 = false; $ye2date2 = false; 
                if($client_yearend2_1 != ""){
                  $ye2date1_data = explode("/", $client_yearend2_1);
                  $ye2date1 = true;
                } 

                if($client_yearend2_2 != ""){
                  $ye2date2_data = explode("/", $client_yearend2_2);
                  $ye2date2 = true;
                } 
              ?>
              <tbody class="table-bordered">
                <tr>
                  <td class="first-one">Year End</td>
                  
                  <td class="text-center">
                      <span><?php if($ye2date1){echo $ye2date1_data[0];} ?></span> <?php if($ye2date1 && $ye2date1_data[0] != ""){ echo "/";} ?> <span><?php if($ye2date1){echo $ye2date1_data[1];} ?></span> <?php if($ye2date1 && $ye2date1_data[0] != ""){ echo "/";} ?> <span><?php if($ye2date1){echo $ye2date1_data[2];} ?></span>
                  </td>
                  <td class="hide-col text-center">
                  <span><?php if($ye2date2){echo $ye2date2_data[0];} ?></span> <?php if($ye2date2 && $ye2date2_data[0] != ""){ echo "/";} ?> <span><?php if($ye2date2){echo $ye2date2_data[0];} ?></span> <?php if($ye2date2 && $ye2date2_data[0] != ""){ echo "/";} ?> <span><?php if($ye2date2){echo $ye2date2_data[0];} ?></span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Net Profit (before taxation)</td>
                  <td>
                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_netprofit2_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                  <td class="">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_netprofit2_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Net Dividend <span style="font-weight: normal;">(if Ltd)</span></td>
                  <td>

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_netdividend2_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                  <td class="">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_netdividend2_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Director’s Remuneration <span style="font-weight: normal;">(if Ltd)</span></td>
                  <td>

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_renumeration2_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>

                  </td>
                  <td class="">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_renumeration2_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                </tr>
              </tbody> 
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col" colspan="2">Previous Year (3)</th>
                </tr>
              </thead>
              <?php $ye3date1 = false; $ye3date2 = false; 
                if($client_yearend3_1 != ""){
                  $ye3date1_data = explode("/", $client_yearend3_1);
                  $ye3date1 = true;
                } 

                if($client_yearend3_2 != ""){
                  $ye3date2_data = explode("/", $client_yearend3_2);
                  $ye3date2 = true;
                } 
              ?>
              <tbody class="table-bordered">
                <tr>
                  <td class="first-one">Year End</td>
                 
                  <td class="text-center">
                      <span><?php if($ye3date1){echo $ye3date1_data[0];} ?></span> <?php if($ye3date1 && $ye3date1_data[0] != ""){ echo "/";} ?> <span><?php if($ye3date1){echo $ye3date1_data[1];} ?></span> <?php if($ye3date1 && $ye3date1_data[0] != ""){ echo "/";} ?> <span><?php if($ye3date1){echo $ye3date1_data[2];} ?></span>
                  </td>
                  <td class="hide-col text-center">
                       <span><?php if($ye3date2){echo $ye3date2_data[0];} ?></span> <?php if($ye3date2 && $ye3date2_data[0] != ""){ echo "/";} ?> <span><?php if($ye3date2){echo $ye3date2_data[1];} ?></span> <?php if($ye3date2 && $ye3date2_data[0] != ""){ echo "/";} ?> <span><?php if($ye3date2){echo $ye3date2_data[2];} ?></span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Net Profit (before taxation)</td>
                  <td>

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_netprofit3_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                  <td class="hide-col">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_netprofit3_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Net Dividend <span style="font-weight: normal;">(if Ltd)</span></td>
                  <td>

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_netdividend3_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                  <td class="hide-col">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_netdividend3_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Director’s Remuneration <span style="font-weight: normal;">(if Ltd)</span></td>
                  <td>
                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_renumeration3_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                  <td class="hide-col">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_renumeration3_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                </tr>
              </tbody>              
            </table><!-- /TABLE 1 ENDS HERE-->

            <!-- TABLE 2 STARTS HERE-->
            <table class="table" style="margin-top: 10px; margin-bottom: 10px!important;">
              <tbody class="table-bordered" style="border:2px solid #000000;">
                <tr>
                  <td class="first-one" style="width: 25%!important; line-height: 1.05em;">Total Self Employed Income<br/><span style="font-weight: normal;">(Use appropriate figure for affordability purposes.)   </span></td>
                  <td style="font-weight: bold;">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_totalincome_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>

                  </td>
                  <td class="hide-col" style="font-weight: bold;">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_totalincome_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>

                  </td>
                </tr>
              </tbody>
            </table><!-- TABLE 2 ENDS HERE-->
            <!--=====/3.2 SELF EMPLOYED INCOME TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px!important;">3.3 Self Employed Net Pay (Monthly)</h5>

            <!--=====3.3 SELF EMPLOYED NET PAY TABLE STARTS HERE=====-->
            <table class="table" style="margin-top: 20px;margin-bottom: 20px;">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col">Client 1</th>
                  <th scope="col" class="hide-col">Client 2</th>
                </tr>
              </thead>
              <tbody class="table-bordered" style="border:2px solid #000000;">
                <tr>
                  <td class="first-one">Total Self Employed Net Pay<br/><span style="font-weight: normal;">(take-home pay)</span></td>
                  <td style="font-weight: bold;">
                     
                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_totalnetincome_1; ?></span>
                      
                    <span style="margin: 5px;">p.m.</span>
                  </td>
                  <td class="hide-col" style="font-weight: bold;">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_totalnetincome_2; ?></span>
                      
                    <span style="margin: 5px;">p.m.</span>
                  </td>
                </tr>
              </tbody>
            </table>
            <!--=====/3.3 SELF EMPLOYED NET PAY TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="" style="margin-bottom: 0px!important;">3.4 Future Changes to Employment</h5>

            <!--=====3.4 FUTURE CHANGES TO EMPLOYMENT TABLE STARTS HERE=====-->
            <table class="table" style="margin-top: 20px;">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col">Client 1</th>
                  <th scope="col" class="hide-col">Client 2</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td class="first-one">Do you expect your employment<br/>circumstances to change?<br/><span style="font-weight: normal;">(If Yes, please provide details in Notes)</span></td>
                  <td class="text-center">
                      <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                        <label class="form-check-label" for="">Yes</label>
                        <?php if($client_empcircumstatus_1 == "Yes"){ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                        <?php }else{ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                        <?php } ?>
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <?php if($client_empcircumstatus_1 == "No"){ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                        <?php }else{ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                        <?php } ?>
                      </div>
                  </td>
                  <td class="hide-col text-center">
                      <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                        <label class="form-check-label" for="">Yes</label>
                        <?php if($client_empcircumstatus_2 == "Yes"){ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                        <?php }else{ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                        <?php } ?>
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <?php if($client_empcircumstatus_2 == "No"){ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                        <?php }else{ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                        <?php } ?>
                      </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <!--=====/3.4 FUTURE CHANGES TO EMPLOYMENT TABLE ENDS HERE=====-->

            

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
                      <p style="padding:0px 5px!important;margin: 0px!important;height:120px;">
                        <?php echo $client_additionalnotes; ?></p>
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
        
      </div><!--/index-section-->
    </div>
    <!--/row-->
</div><!--/container-->

