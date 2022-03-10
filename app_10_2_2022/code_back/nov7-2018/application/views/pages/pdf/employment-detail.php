  <div class="pdf-container">
    <div class="row">
      <div class="index-section center-block" style="margin-top: 20px!important;">
        <!--========FORM SECTION HEADING==========-->
        <h4>Section 2 : Employment Details</h4>

        <!--========FORM SUB-SECTION HEADING==========-->
        <h5>2.1 Employment Details</h5>

        <!--=====Form Starts Here=====-->
        <form id="clientform">

            <!--=====Table Starts Here=====-->
            <table class="table">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col">Client 1</th>
                  <th scope="col" class="hide-col">Client 2</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
              <?php $estatus1 = explode(",",$client_employmentstatus_1_1); ?>
              <?php $estatus2 = explode(",",$client_employmentstatus_1_2); ?>
                <tr>
                  <td class="first-one" style="padding: 2em .85em;line-height: 1.85em;">Employment Status</td>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label" for="">Employed</label>
                      <?php if(in_array( "Employed" , $estatus1 )){ ?>
                          <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php } else{ ?> 
                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?>               
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="">Self-Employed</label>
                      <?php if(in_array( "Self-Employed" , $estatus1 )){ ?>
                          <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php } else{ ?> 
                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?>                       
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="">Retired</label>
                      <?php if(in_array( "Retired" , $estatus1 )){ ?>
                          <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php } else{ ?> 
                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?> 
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="">Not-Employed</label>
                      <?php if(in_array( "Not-Employed" , $estatus1 )){ ?>
                          <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php } else{ ?> 
                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?> 
                    </div>                
                  </td>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label" for="">Employed</label>
                      <?php if(in_array( "Employed" , $estatus2 )){ ?>
                          <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php } else{ ?> 
                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?>  
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="">Self-Employed</label>
                      <?php if(in_array( "Self-Employed" , $estatus2 )){ ?>
                          <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php } else{ ?> 
                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?>  
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="">Retired</label>
                      <?php if(in_array( "Retired" , $estatus2 )){ ?>
                          <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php } else{ ?> 
                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?>  
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="">Not-Employed</label>
                      <?php if(in_array( "Not-Employed" , $estatus2 )){ ?>
                          <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php } else{ ?> 
                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?>  
                    </div> 
                  </td>
                </tr>

                <tr>
                  <td class="first-one">National Insurance Number</td>
                  <td style="padding:0px 5px!important;">
                    <?php echo $client_insurancenumber_1; ?>
                  </td>
                  <td style="padding:0px 5px!important;">
                    <?php echo $client_insurancenumber_2; ?>
                  </td>
                </tr>               
              </tbody>
            </table>

            <span></span>

            <!--=====/2.1 EMPLOYMENT DETAILS TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">2.2 Employment Details</h5>

            <!--=====2.2 EMPLOYMENT DETAILS TABLE STARTS HERE=====-->
            <table class="table ">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col" class="">Client 1</th>
                  <th scope="col" class="">Client 2</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td class="first-one">Current Employer</td>
                  <td style="padding:0px 5px!important;"><?php echo $client_currentemp_1; ?></td>
                  <td style="padding:0px 5px!important;"><?php echo $client_currentemp_2; ?></td>
                </tr>

                <tr>
                  <td class="first-one">Basis of Employment</td>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label" for="contactCheck1">Full Time</label>
                      <?php if($client_employmentbasis_2_1 == "Full Time"){ ?>
                          <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php } else{ ?> 
                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?> 
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="contactCheck2">
                        Part time (<?php echo $client_parttimehours_2_1; ?>) hrs per wk
                      </label>
                      <?php if($client_employmentbasis_2_1 == "Part time"){ ?>
                          <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php } else{ ?> 
                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?> 
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="contactCheck3">Temporary</label>
                      <?php if($client_employmentbasis_2_1 == "Temporary"){ ?>
                          <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php } else{ ?> 
                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?> 
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="contactCheck3">Contract</label>
                      <?php if($client_employmentbasis_2_1 == "Contract"){ ?>
                          <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php } else{ ?> 
                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?>
                    </div>
                  </td>
                  <td >
                    <div class="form-check">
                      <label class="form-check-label" for="contactCheck1">Full Time</label>
                      <?php if($client_employmentbasis_2_2 == "Full Time"){ ?>
                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php } else{ ?> 
                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?> 
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="contactCheck2">
                        Part time (<?php echo $client_parttimehours_2_2; ?>) hrs per wk
                      </label>
                      <?php if($client_employmentbasis_2_2 == "Part time"){ ?>
                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php } else{ ?> 
                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?> 
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="contactCheck3">Temporary</label>
                      <?php if($client_employmentbasis_2_2 == "Temporary"){ ?>
                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php } else{ ?> 
                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?> 
                    </div>
                    <div class="form-check">
                      <label class="form-check-label" for="contactCheck3">Contract</label>
                      <?php if($client_employmentbasis_2_2 == "Contract"){ ?>
                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php } else{ ?> 
                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?> 
                    </div>
                  </td>
                </tr>

                <tr>
                  <td class="first-one" style="padding: 2em .85em;line-height: 1.85em;">Employer Address</td>
                  <td style="padding:0px 5px!important;">
                    <?php echo $client_employeraddress_1; ?>
                  </td>
                  <td style="padding:0px 5px!important;">
                    <?php echo $client_employeraddress_2; ?>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Employer Post Code</td>
                  <td style="padding:0px 5px!important;">
                    <?php echo $client_emppostcode_1; ?>
                  </td>
                  <td style="padding:0px 5px!important;">
                    <?php echo $client_emppostcode_2; ?>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Telephone Number</td>
                  <td style="padding:0px 5px!important;">
                    <?php echo $client_tel_1; ?>
                  </td>
                  <td style="padding:0px 5px!important;">
                    <?php echo $client_tel_2; ?></div>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Employer Contact Name</td>
                  <td style="padding:0px 5px!important;"><?php echo $client_empcontactname_1; ?></td>
                  <td style="padding:0px 5px!important;"><?php echo $client_empcontactname_2; ?></td>
                </tr>

                <tr>
                  <td class="first-one">Occupation / Job Title</td>
                  <td class="" style="padding:0px 5px!important;">
                    <?php echo $client_occ_1; ?>
                  </td>
                  <td class="" style="padding:0px 5px!important;">
                    <?php echo $client_occ_2; ?>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Start Date</td>
                  <?php $sdate1 = false; $sdate2 = false; 
                    if($client_startdate_1 != ""){
                      $sdate1_data = explode("/", $client_startdate_1);
                      $sdate1 = true;
                    } 

                    if($client_startdate_2 != ""){
                      $sdate2_data = explode("/", $client_startdate_2);
                      $sdate2 = true;
                    } 
                  ?>
                  
                  <td class="text-center">
                    <span><?php if($sdate1){echo $sdate1_data[0];} ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){ echo "/";} ?> <span><?php if($sdate1){echo $sdate1_data[1];} ?></span> <?php if($sdate1 && $sdate1_data[0] != ""){ echo "/";} ?> <span><?php if($sdate1){echo $sdate1_data[2];} ?></span>
                  </td>
                  <td class="text-center">
                    <span><?php if($sdate2){echo $sdate2_data[0];} ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){ echo "/";} ?> <span><?php if($sdate2){echo $sdate2_data[1];} ?></span> <?php if($sdate2 && $sdate2_data[0] != ""){ echo "/";} ?> <span><?php if($sdate2){echo $sdate2_data[2];} ?></span>
                  </td>
                </tr>

                <tr>
                    <td class="first-one">
                        End Date <span style="font-weight: normal;">(if applicable)</span><br/>
                        <span style="font-weight: normal;">
                             (if less than 6 months remaining, please provide further details in the Notes section)
                        </span>                    
                    </td>
                    <?php $edate1 = false; $edate2 = false; 
                      if($client_enddate_1 != ""){
                        $edate1_data = explode("/", $client_enddate_1);
                        $edate1 = true;
                      } 

                      if($client_enddate_2 != ""){
                        $edate2_data = explode("/", $client_enddate_2);
                        $edate2 = true;
                      } 
                    ?>
                    <td class="text-center">
                         <span><?php if($edate1){echo $edate1_data[0];} ?></span> <?php if($edate1 && $edate1_data[0] != ""){ echo "/";} ?> <span><?php if($edate1){echo $edate1_data[1];} ?></span> <?php if($edate1 && $edate1_data[0] != ""){ echo "/";} ?> <span><?php if($edate1){echo $edate1_data[2];} ?></span>
                    </td>
                   <td class="text-center">
                        <span><?php if($edate2){echo $edate2_data[0];} ?></span> <?php if($edate2 && $edate2_data[0] != ""){ echo "/";} ?> <span><?php if($edate2){echo $edate2_data[1];} ?></span> <?php if($edate2 && $edate2_data[0] != ""){ echo "/";} ?> <span><?php if($edate2){echo $edate2_data[2];} ?></span>
                   </td>
                </tr>

                <tr>
                  <td class="first-one">Are you on probation?</td>
                  <td class="text-center condition_client_1">
                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                      <label class="form-check-label" for="">Yes</label>
                      <?php if($client_probation_2_1 == "Yes"){ ?>
                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php }else{ ?>
                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?>
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <?php if($client_probation_2_1 == "No"){ ?>
                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php }else{ ?>
                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?>
                    </div>
                  </td>
                  <td class="text-center condition_client_2">
                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                      <label class="form-check-label" for="">Yes</label>
                      <?php if($client_probation_2_2 == "Yes"){ ?>
                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php }else{ ?>
                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?>
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <?php if($client_probation_2_2 == "No"){ ?>
                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php }else{ ?>
                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?>                        
                    </div>
                  </td>
                </tr>

                <tr>
                    <td class="first-one">Probation End Date</td>
                    <?php $pdate1 = false; $pdate2 = false; 
                      if($client_probenddate_1 != ""){
                        $pdate1_data = explode("/", $client_probenddate_1);
                        $pdate1 = true;
                      }

                      if($client_probenddate_2 != ""){
                        $pdate2_data = explode("/", $client_probenddate_2);
                        $pdate2 = true;
                      }
                    ?>
                  
                    <td class="text-center condition_client_1">
                        <span><?php if($pdate1){echo $pdate1_data[0];} ?></span> <?php if($pdate1 && $pdate1_data[0] != ""){ echo "/";} ?> <span><?php if($pdate1){echo $pdate1_data[1];} ?></span> <?php if($pdate1 && $pdate1_data[0] != ""){ echo "/";} ?> <span><?php if($pdate1){echo $pdate1_data[2];} ?></span>
                    </td>
                    <td class="text-center condition_client_2">
                        <span><?php if($pdate2){echo $pdate2_data[0];} ?></span> <?php if($pdate2 && $pdate2_data[0] != ""){ echo "/";} ?> <span><?php if($pdate2){echo $pdate2_data[1];} ?></span> <?php if($pdate2 && $pdate2_data[0] != ""){ echo "/";} ?> <span><?php if($pdate2){echo $pdate2_data[2];} ?></span>
                    </td>
                </tr>                
              </tbody>
            </table>

            <table class="table" style="margin-top: 10px;width: 100%;">
              <tr>
                  <td class="first-one" style="width: 25%!important;">
                    Do you have any additional<br/>occupation(s)?<br/>
                    <span style="font-weight: normal;">
                    (If Yes, please provide further details in Notes section)
                    </span>
                  </td>
                  <td class="text-center ">
                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%:">
                      <label class="form-check-label" for="">Yes</label>
                      <?php if($client_occupation_2_1 == "Yes"){ ?>
                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php }else{ ?>
                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?>
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <?php if($client_occupation_2_1 == "No"){ ?>
                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php }else{ ?>
                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?>
                    </div>
                  </td>
                  <td class="text-center" style="border-right: 1px solid #000000;">
                    <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                      <label class="form-check-label" for="">Yes</label>
                      <?php if($client_occupation_2_2 == "Yes"){ ?>
                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php }else{ ?>
                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?>
                    </div>
                    <div class="col-md-2 date-input-box" style="padding: 0;">
                      <label class="form-check-label" for="">No</label>
                      <?php if($client_occupation_2_2 == "No"){ ?>
                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                      <?php }else{ ?>
                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                      <?php }?>
                    </div>
                  </td>
                </tr>
            </table>
            <!--=====2.2 EMPLOYMENT DETAILS TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="condition-2" style="font-size: 10pt;margin-top: 5px; margin-bottom: 5px!important;">
                Previous Employer (if less than 12 months with current employer)
            </h5>

            <!--===== PREVIOUS EMPLOYER TABLE STARTS HERE=====-->
            <table class="table condition-2">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col" class="condition_client_1">Client 1</th>
                  <th scope="col" class="hide-col condition_client_2">Client 2</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td class="first-one">Previous Occupation / Job Title</td>
                  <td class="" style="padding:0px 5px!important;"><?php echo $client_prevocc_1; ?></td>
                  <td class="" style="padding:0px 5px!important;"><?php echo $client_prevocc_2; ?></td>
                </tr>

                <tr>
                  <td class="first-one">Previous Employer</td>
                  <td class="condition_client_1" style="padding:0px 5px!important;"><?php echo $client_prevemp_1; ?></td>
                  <td class="condition_client_2" style="padding:0px 5px!important;"><?php echo $client_prevemp_2; ?></td>  
                </tr>

                <tr>
                  <td class="first-one">Previous Start Date</td>
                  <?php $psdate1 = false; $psdate2 = false; 
                    if($client_prevstartdate_1 != ""){
                      $psdate1_data = explode("/", $client_prevstartdate_1);
                      $psdate1 = true;
                    } 

                    if($client_prevstartdate_2 != ""){
                      $psdate2_data = explode("/", $client_prevstartdate_2);
                      $psdate2 = true;
                    } 
                  ?>
                  
                  <td class="text-center condition_client_1">
                       <span><?php if($psdate1){echo $psdate1_data[0];} ?></span> <?php if($psdate1 && $psdate1_data[0] != ""){ echo "/";} ?> <span><?php if($psdate1){echo $psdate1_data[1];} ?></span> <?php if($psdate1 && $psdate1_data[0] != ""){ echo "/";} ?> <span><?php if($psdate1){echo $psdate1_data[2];} ?></span>
                  </td>
                  <td class="text-center condition_client_2">
                       <span><?php if($psdate2){echo $psdate2_data[0];} ?></span> <?php if($psdate2 && $psdate2_data[0] != ""){ echo "/";} ?> <span><?php if($psdate2){echo $psdate2_data[1];} ?></span> <?php if($psdate2 && $psdate2_data[0] != ""){ echo "/";} ?> <span><?php if($psdate2){echo $psdate2_data[2];} ?></span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Previous End Date</td>
                  <?php $pedate1 = false; $pedate2 = false; 
                    if($client_prevenddate_1 != ""){
                      $pedate1_data = explode("/", $client_prevenddate_1);
                      $pedate1 = true;
                    } 

                    if($client_prevenddate_2 != ""){
                      $pedate2_data = explode("/", $client_prevenddate_2);
                      $pedate2 = true;
                    } 
                  ?>
                  <td class="text-center condition_client_1">
                    <span><?php if($pedate1){echo $pedate1_data[0];} ?></span> <?php if($pedate1 && $pedate1_data[0] != ""){ echo "/";} ?> <span><?php if($pedate1){echo $pedate1_data[1];} ?></span> <?php if($pedate1 && $pedate1_data[0] != ""){ echo "/";} ?> <span><?php if($pedate1){echo $pedate1_data[2];} ?></span>
                  </td>
                  <td class="text-center condition_client_2">
                    <span><?php if($pedate2){echo $pedate2_data[0];} ?></span> <?php if($pedate2 && $pedate2_data[0] != ""){ echo "/";} ?> <span><?php if($pedate2){echo $pedate2_data[1];} ?></span> <?php if($pedate2 && $pedate2_data[0] != ""){ echo "/";} ?> <span><?php if($pedate2){echo $pedate2_data[2];} ?></span>
                  </td>
                </tr>
              </tbody>
            </table>
            <!--===== PREVIOUS EMPLOYER TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-20 condition-2" style="margin-bottom: 0px !important;">2.3 Gross Employment Income (Annual)</h5>

            <!--=====2.3 GROSS EMPLOYMENT INCOME TABLE STARTS HERE=====-->

            <!-- TABLE 1 START HERE-->
            <table class="table condition-2" style="margin-top:10px; margin-bottom: 0px!important;">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col" class="condition_client_1">Client 1</th>
                  <th scope="col" class="hide-col condition_client_2">Client 2</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td class="first-one">Basic Salary</td>
                  <td class="condition_client_1">
                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_basicsalary_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                  <td class="hide-col condition_client_2">
                     <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_basicsalary_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Car Allowance</td>
                  <td class="condition_client_1">
                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_carallow_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                  <td class="condition_client_2">
                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_carallow_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Guaranteed Bonus</td>
                  <td class="condition_client_1">
                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_guaranteedbonus_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                  <td class="hide-col condition_client_2">
                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_guaranteedbonus_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Guaranteed Overtime</td>
                  <td class="condition_client_1">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_guaranteedovertime_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                  <td class="hide-col condition_client_2">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_guaranteedovertime_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Guaranteed Shift Allowance</td>
                  <td class="condition_client_1">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_guarshiftallow_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                  <td class="hide-col condition_client_2">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_guarshiftallow_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Regional Weighting</td>
                  <td class="condition_client_1">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_regionalweight_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                  <td class="hide-col condition_client_2">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_regionalweight_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Other</td>
                  <td class="condition_client_1">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_other1_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                  <td class="hide-col condition_client_2">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_other1_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>

                  </td>
                </tr>  
              </tbody>                
            </table> <!-- /.TABLE 1 ENDS HERE-->

            <!-- TABLE 2 STARTS HERE-->
            <table class="table condition-2" style="margin-top: 2px;">
              <tbody class="table-bordered">
                <tr>
                  <td class="first-one" style="width:25%!important;">Bonus/Commission (regular)</td>
                  <td class="condition_client_1">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_commission_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                  <td class="hide-col condition_client_2">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_commission_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one" style="width: 25%!important;">Overtime (regular)</td>
                  <td class="condition_client_1">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_overtime_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                  <td class="hide-col condition_client_2">
                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_overtime_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one" style="width: 25%!important;">Shift Allowance (regular)</td>
                  <td class="condition_client_1">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_shiftallowance_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                  <td class="hide-col condition_client_2">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_shiftallowance_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one" style="width: 25%!important;">Other</td>
                  <td class="condition_client_1">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_other2_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                  <td class="hide-col condition_client_2">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_other2_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                </tr>
              </tbody>
            </table> <!-- /.TABLE 2 ENDS HERE-->

            <!-- TABLE 3 STARTS HERE-->
            <table class="table condition-2" style="margin-top: 10px;">
              <tbody class="table-bordered">
                <tr>
                  <td class="first-one" style="width:25%!important;">Other Earned Income<span style="font-weight:normal;display: block;">(e.g. 2nd Job – provide details Notes)</span></td>
                  <td class="condition_client_1">
                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_otherincome_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                  <td class="hide-col condition_client_2">
                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_otherincome_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                </tr>
              </tbody>
            </table><!-- /.TABLE 3 ENDS HERE -->

            <!-- TABLE 4 STARTS HERE -->
            <table class="table condition-2" style="margin-top: 10px; margin-bottom: 20px!important;">
              <tbody class="table-bordered" style="border:2px solid #000000;">
                <tr>
                  <td class="first-one" style="width: 25%!important;padding: .55em .85em;">Total Employment Income</td>
                  <td class="condition_client_1" style="font-weight: bold;">
                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_totalincome_1; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                  <td class="hide-col condition_client_2" style="font-weight: bold;">

                   <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_totalincome_2; ?></span>
                      
                    <span style="margin: 5px;">p.a.</span>
                  </td>
                </tr>
              </tbody>
            </table> <!-- /.TABLE 4 ENDS HERE -->

            <!--=====/2.3 GROSS EMPLOYMENT INCOME TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="condition-2" style="margin-top:10px!important;margin-bottom: 0px;">2.4 Employment Deductions (Monthly) </h5>

            <!--=====2.4 EMPLOYMENT DEDUCTIONS TABLE STARTS HERE=====-->

            <!-- TABLE 1 STARTS HERE -->
            <table class="table condition-2" style="margin-top: 10px;">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col" class="condition_client_1">Client 1</th>
                  <th scope="col" class="hide-col condition_client_2">Client 2</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td class="first-one">Pension</td>
                  <td class="condition_client_1">
                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_pension_1; ?></span>
                      
                    <span style="margin: 5px;">p.m.</span>

                  </td>
                  <td class="hide-col condition_client_2">

                     <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_pension_2; ?></span>
                      
                    <span style="margin: 5px;">p.m.</span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Childcare Vouchers</td>
                  <td class="condition_client_1">
                     <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_childvoucher_1; ?></span>
                      
                    <span style="margin: 5px;">p.m.</span>
                  </td>
                  
                  <td class="hide-col condition_client_2">
                     <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_childvoucher_2; ?></span>
                      
                    <span style="margin: 5px;">p.m.</span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Student Loan</td>
                  <td class="condition_client_1">

                     <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_studentloan_1; ?></span>
                      
                    <span style="margin: 5px;">p.m.</span>
                  </td>
                  <td class="hide-col condition_client_2">

                     <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_studentloan_2; ?></span>
                      
                    <span style="margin: 5px;">p.m.</span>
                  </td>
                </tr>

                <tr>
                  <td class="first-one">Other <span style="font-weight: normal;">(provide details in Notes)</span></td>
                  <td class="condition_client_1">

                     <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_other3_1; ?></span>
                      
                    <span style="margin: 5px;">p.m.</span>
                  </td>
                  <td class="hide-col condition_client_2">

                     <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_other3_2; ?></span>
                      
                    <span style="margin: 5px;">p.m.</span>
                  </td>
                </tr>
              </tbody>
            </table> <!--/.TABLE 1 STARTS HERE -->

            <!-- TABLE 2 STARTS HERE -->
            <table class="table condition-2" style="margin-top: 10px; margin-bottom: 15px!important;">
              <tbody class="table-bordered" style="border:2px solid #000000;">
                <tr>
                  <td class="first-one" style="width: 25%!important;padding: .55em .85em;">Total Deduction</td>
                  <td class="condition_client_1" style="font-weight: bold;">
                     <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_totaldeduction_1; ?></span>
                      
                    <span style="margin: 5px;">p.m.</span>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin:5px;">p.a.</span> -->
                  </td>
                  <td class="hide-col condition_client_2" style="font-weight: bold!important;">
                     <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_totaldeduction_2; ?></span>
                      
                    <span style="margin: 5px;">p.m.</span>

                    <!-- <span style="margin:0px 5px;">£</span>                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                </tr>
              </tbody>
            </table> <!--/.TABLE 2 ENDS HERE -->

            <!--=====/2.4 EMPLOYMENT DEDUCTIONS TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="condition-2" style="margin-bottom: 0px!important;">2.5 Employed Net Pay (Monthly)</h5>

            <!--=====2.5 EMPLOYED NET PAY TABLE STARTS HERE=====-->
            <table class="table condition-2" style="margin-top: 10px;">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col" class="condition_client_1">Client 1</th>
                  <th scope="col" class="hide-col condition_client_2">Client 2</th>
                </tr>
              </thead>
              <tbody class="table-bordered" style="border:2px solid #000000;">
                <tr>
                  <td class="first-one" style="padding: .55em .85em;">Total Employed Net Pay</td>
                  <td class="condition_client_1" style="font-weight: bold;">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_totalempnetpay_1; ?></span>
                      
                    <span style="margin: 5px;">p.m.</span>

                    <!-- <span style="margin:0px 5px;"></span>
                    
                    <span style="margin:5px;">p.a.</span> -->
                  </td>
                  <td class="hide-col condition_client_2" style="font-weight: bold;">

                    <span style="margin:0px 5px;">£</span>

                    <span><?php echo $client_totalempnetpay_2; ?></span>
                      
                    <span style="margin: 5px;">p.m.</span>

                    <!-- <span style="margin:0px 5px;">£</span>
                    
                    <span style="margin: 5px;">p.a.</span> -->
                  </td>
                </tr>
              </tbody>
            </table>
            <!--=====/2.5 EMPLOYED NET PAY TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="condition-2" style="margin-bottom: 0px!important;">2.6 Future Changes to Employment</h5>

            <!--=====2.6 FUTURE CHANGES TO EMPLOYMENT TABLE STARTS HERE=====-->
            <table class="table condition-2" style="margin-top: 10px;">
              <thead class="">
                <tr>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col" class="condition_client_1">Client 1</th>
                  <th scope="col" class="hide-col condition_client_2">Client 2</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td class="first-one" style="line-height: 1.05em;">Do you expect your employment<br/>circumstances to change?<br/><span style="font-weight: normal;">(If Yes, please provide details in Notes)</span></td>
                  <td class="text-center condition_client_1">
                      <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                        <label class="form-check-label" for="">Yes</label>
                        <?php if($client_circumstances_6_1 == "Yes"){ ?>
                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                        <?php }else{ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                        <?php }?>
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <?php if($client_circumstances_6_1 == "No"){ ?>
                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                        <?php }else{ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                        <?php }?>
                      </div>
                  </td>
                  <td class=" text-center condition_client_2">
                      <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                        <label class="form-check-label" for="">Yes</label>
                        <?php if($client_circumstances_6_2 == "Yes"){ ?>
                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                        <?php }else{ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                        <?php }?>
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <?php if($client_circumstances_6_2 == "No"){ ?>
                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                        <?php }else{ ?>
                          <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                        <?php }?>
                      </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <!--=====/2.6 FUTURE CHANGES TO EMPLOYMENT TABLE ENDS HERE=====-->
            

            <!--=====ADDITION NOTES TABLE STARTS HERE=====-->
             <table class="table marTP-20">
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

        <!--<table style="width: 100%;">-->
        <!--  <tr>-->
        <!--    <td style="text-align: left; padding-left: 0.85em;">-->
        <!--      Page <span>2</span> of <span>30</span>-->
        <!--    </td>-->
        <!--    <td style="text-align: right; padding-right: 0.85em;">-->
        <!--      TS&R MCFF v1.3 June 2016-->
        <!--    </td>-->
        <!--  </tr>-->
        <!--</table>-->
      </div>
    </div>
    <!--/row-->
 </div><!--/container-->
