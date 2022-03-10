<div class="pdf-container">
    <div class="row">
        <div class="index-section center-block">
            <h4>Section 1 : Personal & Family Details</h4>
            <h5 style="margin-bottom: 10px;">1.1 Personal Details</h5>

            <!--=====Form Starts Here=====-->
            <form id="clientform">

                <!--=====Table Starts Here=====-->
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" style="border:0px;background-color:transparent;"></th>
                            <th scope="col">Client 1</th>
                            <th scope="col">Client 2</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="padding: 0.85em;line-height: 1.85em;">Title</td>
                            <td style="padding: 2px 0px">
                                <ul class="title-list">
                                    <li>
                                        <span>
                                            <label class="form-check-label" for="">Mr</label>
                                            <?php if($client_title_1 == "Mr"){ ?>
                                                <img class="check-img" style="margin-left: 5px;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php } else{ ?> 
                                                <img class="check-img" style="margin-left: 5px;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php }?>
                                        </span>
                                    </li>
                                    <li>
                                        <span >
                                            <label class="form-check-label" for="defaultCheck1">Mrs</label>
                                            <?php if($client_title_1 == "Mrs"){ ?>
                                                <img class="check-img" style="margin-left: 2px;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php } else{ ?> 
                                                <img class="check-img" style="margin-left: 2px;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php }?>
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <label class="form-check-label" for="defaultCheck1">Ms</label>
                                            <?php if($client_title_1 == "Ms"){ ?>
                                                <img class="check-img" style="position:absolute;margin-left: 15px;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php } else{ ?> 
                                                <img class="check-img" style="position: absolute; margin-left: 15px;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php }?>
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <label class="form-check-label" for="defaultCheck1" style="margin-left: 5px;">Miss</label>
                                            <?php if($client_title_1 == "Miss"){ ?>
                                                <img class="check-img" style="position:relative;margin-left: 12px;margin-bottom: 2px;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php } else{ ?> 
                                                <img class="check-img" style="position:relative;margin-left: 12px;margin-bottom: 2px;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php }?> 
                                        </span>
                                    </li>
                                    <li>
                                        <span class="span">
                                            <label class="form-check-label" for="defaultCheck1">Dr</label>
                                            <?php if($client_title_1 == "Dr"){ ?>
                                                <img class="check-img" style="margin-left: -2px;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php } else{ ?> 
                                                <img class="check-img" style="margin-left: -2px;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php }?>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="span">
                                            <label class="form-check-label" for="defaultCheck1">Prof</label>
                                            <?php if($client_title_1 == "Prof"){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php } else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php }?>
                                        </span>
                                    </li>
                                    <li style="width: 100%;display: block;">
                                        <span>
                                            <label class="form-check-label" for="defaultCheck1" style="margin-left: -12px;">Other</label>
                                            <?php if($client_title_1 == "Other"){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php } else{ ?> 
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin:0px 5px;/*float:none; margin: 0px 0px 0px 37px;*/" />                                       
                                            <?php }?>  : 
                                            <span>
                                                <?php echo $client_othertitle_1; ?>
                                            </span>
                                        </span>           
                                    </li>
                                </ul>
                            </td> 

                            <td style="padding: 2px 0px">
                                <ul class="title-list">
                                    <li>
                                        <span>
                                            <label class="form-check-label" for="">Mr</label>
                                            <?php if($client_title_2 == "Mr"){ ?>
                                                <img class="check-img" style="margin-left: 5px;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php } else{ ?> 
                                                <img class="check-img" style="margin-left: 5px;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php }?>
                                        </span>
                                    </li>
                                    <li>
                                        <span >
                                            <label class="form-check-label" for="defaultCheck1">Mrs</label>
                                            <?php if($client_title_2 == "Mrs"){ ?>
                                                <img class="check-img" style="margin-left: 2px;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php } else{ ?> 
                                                <img class="check-img" style="margin-left: 2px;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php }?>
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <label class="form-check-label" for="defaultCheck1">Ms</label>
                                            <?php if($client_title_2 == "Ms"){ ?>
                                                <img class="check-img" style="position:absolute;margin-left: 15px;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php } else{ ?> 
                                                <img class="check-img" style="position: absolute; margin-left: 15px;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php }?>
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <label class="form-check-label" for="defaultCheck1" style="margin-left: 5px;">Miss</label>
                                            <?php if($client_title_2 == "Miss"){ ?>
                                                <img class="check-img"  style="position:relative;margin-left: 12px;margin-bottom: 2px;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php } else{ ?> 
                                                <img class="check-img" style="position:relative;margin-left: 12px;margin-bottom: 2px;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php }?> 
                                        </span>
                                    </li>
                                    <li>
                                        <span class="span">
                                            <label class="form-check-label" for="defaultCheck1">Dr</label>
                                            <?php if($client_title_2 == "Dr"){ ?>
                                                <img class="check-img" style="margin-left: -2px;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php } else{ ?> 
                                                <img class="check-img" style="margin-left: -2px;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php }?>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="span">
                                            <label class="form-check-label" for="defaultCheck1">Prof</label>
                                            <?php if($client_title_2 == "Prof"){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php } else{ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                            <?php }?>
                                        </span>
                                    </li>
                                    <li style="width: 100%;display: block;">
                                        <span>
                                            <label class="form-check-label" for="defaultCheck1" style="margin-left: -12px;">Other</label>
                                            <?php if($client_title_2 == "Other"){ ?>
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                            <?php } else{ ?> 
                                                <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin:0px 5px;/*float:none; margin: 0px 0px 0px 37px;*/" />                                       
                                            <?php }?>  : 
                                            <span>
                                                <?php echo $client_othertitle_2; ?>
                                            </span>
                                        </span>           
                                    </li>
                                </ul>                                
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">First Name</td>
                            <td style="padding:0px 5px!important;">
                                <?php echo $client_firstname_1; ?> 
                            </td>

                            <td style="padding:0px 5px!important;">
                                <?php echo $client_firstname_2; ?>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Middle Name(s)</td>
                            <td style="padding:0px 5px!important;">
                                <?php echo $client_middlename_1; ?> 
                            </td>

                            <td style="padding:0px 5px!important;">
                                <?php echo $client_middlename_2; ?>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Surname</td>
                            <td style="padding:0px 5px!important;">
                                <?php echo $client_surname_1; ?>
                            </td>

                            <td style="padding:0px 5px!important;">
                                <?php echo $client_surname_2; ?>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Previous / Maiden Name</td>
                            <td style="padding:0px 5px!important;">
                                <?php echo $client_maidenname_1; ?>
                            </td>
                            <td style="padding:0px 5px!important;">
                                <?php echo $client_maidenname_2; ?>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one" style="padding: 1.55em 0.85em;">Current Address</td>
                            <td style="padding:0px 5px!important;">
                                <?php echo $client_address_1; ?>
                            </td>
                            <td style="padding:0px 5px!important;">
                                <?php echo $client_address_2; ?>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Post Code</td>
                            <td style="padding:0px 5px!important;">
                                <?php echo $client_postcode_1; ?>
                            </td>
                            <td style="padding:0px 5px!important;">
                                <?php echo $client_postcode_2; ?>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Gender</td>
                            <td style="padding:0px 5px!important;">
                                <?php echo $client_gender_1; ?>
                            </td>

                            <td style="padding:0px 5px!important;">
                                <?php echo $client_gender_2; ?>
                            </td>
                        </tr>
            
                         
                        <tr>
                            <td class="first-one">Date of Birth</td>                            
                            <?php $dob1 = false; $dob2 = false; 
                            if($client_dob_1 != ""){
                            $dob1_data = explode("/", $client_dob_1);
                            $dob1 = true;
                            } 

                            if($client_dob_2 != ""){
                                $dob2_data = explode("/", $client_dob_2);
                                $dob2 = true;
                            } 
                            ?>
                            <td class="text-center" style="vertical-align: middle!important;">
                                <span><?php if($dob1){echo $dob1_data[0];} ?></span> / <span><?php if($dob1){echo $dob1_data[1];} ?></span> / <span><?php if($dob1){echo $dob1_data[2];} ?></span>
                            </td>
                            <td class="text-center" style="vertical-align: middle!important;">
                                <span><?php if($dob2){echo $dob2_data[0];} ?></span> / <span><?php if($dob2){echo $dob2_data[1];} ?></span> / <span><?php if($dob2){echo $dob2_data[2];} ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Home Telephone</td>
                            <td style="padding:0px 5px!important;">
                                <?php echo $client_hometel_1; ?>
                            </td>
                            <td style="padding:0px 5px!important;">
                                <?php echo $client_hometel_2; ?>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Mobile Telephone</td>
                            <td style="padding:0px 5px!important;">
                                <?php echo $client_mobile_1; ?>
                            </td>
                            <td style="padding:0px 5px!important;">
                                <?php echo $client_mobile_2; ?>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Work Telephone</td>
                            <td style="padding:0px 5px!important;">
                                <?php echo $client_worktel_1; ?>
                            </td>
                            <td style="padding:0px 5px!important;">
                                <?php echo $client_worktel_2; ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="first-one" style="padding: 0.45em 0.85rem;line-height: 1.85em;">Email Address</td>
                            <td style="padding:0px 5px!important;">
                                <?php echo $client_email_1; ?>
                            </td>
                            <td style="padding:0px 5px!important;">
                                <?php echo $client_email_2; ?>
                            </td>
                        </tr>

                    
                        <?php $contactMethod = explode(",",$client_contactmethod_1); ?>
                        <?php $contactMethod2 = explode(",",$client_contactmethod_2); ?>
                    

                        <tr>
                            <td class="first-one" style="padding: 2em .85em;line-height: 1.85em;">Preferred Contact Method(s)</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck1">Letter</label>
                                    <?php if( in_array( "Letter" , $contactMethod ) ){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck2">Telephone</label>
                                    <?php if( in_array( "Telephone" , $contactMethod ) ){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck3">Email</label>
                                    <?php if( in_array( "Email" , $contactMethod ) ){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck4">Text</label>
                                    <?php if( in_array( "Text" , $contactMethod ) ){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="">
                                    <label class="form-check-label" for="contactCheck4"  style="padding:0px 5px!important;">Other :</label>
                                    <span>
                                        <?php echo $client_othercontactmethod_1; ?>
                                    </span>

                                    <span class="form-check">
                                        <?php if( in_array( "Other" , $contactMethod ) ){ ?>
                                            <img class="check-img" style="position: relative;margin-top: -16px;margin-right: 5px!important;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php } else{ ?>
                                            <img class="check-img" style="position: relative;margin-top: -16px;margin-right: 5px!important;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </span>
                                </div>
                            </td>

                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck1">Letter</label>
                                    <?php if( in_array( "Letter" , $contactMethod2 ) ){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck2">Telephone</label>
                                    <?php if( in_array( "Telephone" , $contactMethod2 ) ){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck3">Email</label>
                                    <?php if( in_array( "Email" , $contactMethod2 ) ){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck4">Text</label>
                                    <?php if( in_array( "Text" , $contactMethod2 ) ){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div>
                                    <label class="form-check-label" for="contactCheck4"  style="padding:0px 5px!important;">Other</label>

                                    <span>
                                        <?php echo $client_othercontactmethod_2; ?>
                                    </span>

                                    <span class="form-check">
                                        <?php if( in_array( "Other" , $contactMethod2 ) ){ ?>
                                            <img class="check-img" style="position: relative;margin-top: -16px;margin-right: 5px!important;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php } else{ ?>
                                            <img class="check-img" style="position: relative;margin-top: -16px;margin-right: 5px!important;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php } ?>
                                    </span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Preferred Contact Time</td>
                            <td style="padding:0px 5px!important;">
                                <?php echo $client_contacttime_1; ?>
                            </td>

                            <td style="padding:0px 5px!important;">
                                <?php echo $client_contacttime_2; ?>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one" style="padding: 2em .85em;line-height: 1.85em;">Marital Status</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck1">Married</label>
                                    <?php if($client_marital_1 == "Married"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck2">Single</label>
                                    <?php if($client_marital_1 == "Single"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck3">Divorced</label>
                                   <?php if($client_marital_1 == "Divorced"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck4">Widower</label>
                                    <?php if($client_marital_1 == "Widower"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck4">Co-habiting</label>
                                    <?php if($client_marital_1 == "Co-habiting"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck4">Civil Partnership</label>
                                    <?php if($client_marital_1 == "Civil Partnership"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                            </td>

                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck1">Married</label>
                                    <?php if($client_marital_2 == "Married"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck2">Single</label>
                                    <?php if($client_marital_2 == "Single"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck3">Divorced</label>
                                    <?php if($client_marital_2 == "Divorced"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck4">Widower</label>
                                    <?php if($client_marital_2 == "Widower"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck4">Co-habiting</label>
                                    <?php if($client_marital_2 == "Co-habiting"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck4">Civil Partnership</label>
                                    <?php if($client_marital_2 == "Civil Partnership"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one" style="padding: 2em .85em;line-height: 1.85em;">Relationship to Other Client</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck1">Spouse</label>
                                    <?php if($client_relationship_1 == "Spouse"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck2">Civil Partner</label>
                                    <?php if($client_relationship_1 == "Civil Partner"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck3">Partner</label>
                                    <?php if($client_relationship_1 == "Partner"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck4">Son</label>
                                    <?php if($client_relationship_1 == "Son"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck4">Daughter</label>
                                    <?php if($client_relationship_1 == "Daughter"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck4">Mother</label>
                                    <?php if($client_relationship_1 == "Mother"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?> 
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck4">Father</label>
                                    <?php if($client_relationship_1 == "Father"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div>
                                    <label class="form-check-label" for="contactCheck4" style="padding:0px 5px!important;">Other:</label>

                                    <span>
                                        <?php echo $client_otherrelationship_1; ?>
                                    </span>

                                    <span class="form-check">
                                        <?php if($client_relationship_1 == "Other"){ ?>
                                           <img class="check-img" style="position: relative;margin-top: -16px;margin-right: 5px!important;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php } else{ ?>
                                            <img class="check-img" style="position: relative;margin-top: -16px;margin-right: 5px!important;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php }?>
                                    </span>
                                </div>
                            </td>

                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck1">Spouse</label>
                                    <?php if($client_relationship_2 == "Spouse"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck2">Civil Partner</label>
                                    <?php if($client_relationship_2 == "Civil Partner"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck3">Partner</label>
                                    <?php if($client_relationship_2 == "Partner"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck4">Son</label>
                                    <?php if($client_relationship_2 == "Son"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?> -->
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck4">Daughter</label>
                                    <?php if($client_relationship_2 == "Daughter"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck4">Mother</label>
                                     <?php if($client_relationship_2 == "Mother"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?> 
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck4">Father</label>
                                    <?php if($client_relationship_2 == "Father"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?> 
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div>
                                    <label class="form-check-label" for="contactCheck4" style="padding:0px 5px!important;">Other:</label>

                                    <span>
                                        <?php echo $client_otherrelationship_2; ?>
                                    </span>

                                    <span class="form-check">
                                        <?php if($client_relationship_2 == "Other"){ ?>
                                           <img class="check-img" style="position: relative;margin-top: -16px;margin-right: 5px!important;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php } else{ ?>
                                           <img class="check-img" style="position: relative;margin-top: -16px;margin-right: 5px!important;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php }?>
                                    </span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one" style="padding: 2em .85em;line-height: 1.85em;">Tax Rate</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck1">Non Tax Payer (0%)</label>
                                    <?php if($client_taxrate_1 == "0%"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck2">Basic Rate (20%)</label>
                                    <?php if($client_taxrate_1 == "20%"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck3">Higher Rate (40%)</label>
                                    <?php if($client_taxrate_1 == "40%"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck4">Additional Rate (45%)</label>
                                    <?php if($client_taxrate_1 == "45%"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                            </td>

                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck1">Non Tax Payer (0%)</label>
                                    <?php if($client_taxrate_2 == "0%"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck2">Basic Rate (20%)</label>
                                    <?php if($client_taxrate_2 == "20%"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck3">Higher Rate (40%)</label>
                                    <?php if($client_taxrate_2 == "40%"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck4">Additional Rate (45%)</label>
                                    <?php if($client_taxrate_2 == "45%"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Nationality</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck1">British</label>
                                    <?php if($client_nationality_1 == "British"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div>
                                    <label class="form-check-label" for="contactCheck1" style="padding:0px 5px!important;">Other : </label>

                                    <span>
                                        <?php echo $client_othernationality_1; ?>
                                    </span>

                                    <span class="form-check">
                                        <?php if($client_nationality_1 == "Other"){ ?>
                                            <img class="check-img" style="position: relative;margin-top: -16px;margin-right: 5px!important;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php } else{ ?>
                                            <img class="check-img" style="position: relative;margin-top: -16px;margin-right: 5px!important;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php }?>
                                    </span>
                                </div>
                            </td>

                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck1">British</label>
                                    <?php if($client_nationality_2 == "British"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div>
                                    <label class="form-check-label" for="contactCheck1" style="padding:0px 5px!important;">Other : </label>

                                    <span>
                                        <?php echo $client_othernationality_2; ?>
                                    </span>

                                    <span class="form-check">
                                        <?php if($client_nationality_2 == "Other"){ ?>
                                            <img class="check-img" style="position: relative;margin-top: -16px;margin-right: 5px!important;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php } else{ ?>
                                            <img class="check-img" style="position: relative;margin-top: -16px;margin-right: 5px!important;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php }?>
                                    </span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Country of Residence</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck1">United Kingdom</label>
                                    <?php if($client_country_1 == "United Kingdom"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div>
                                    <label class="form-check-label" for="contactCheck1" style="padding:0px 5px!important;">Other : </label>

                                    <span>
                                        <?php echo $client_othercountry_1; ?>
                                    </span>

                                    <span class="form-check">
                                        <?php if($client_country_1 == "Other"){ ?>
                                            <img class="check-img" style="position: relative;margin-top: -16px;margin-right: 5px!important;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php } else{ ?>
                                            <img class="check-img" style="position: relative;margin-top: -16px;margin-right: 5px!important;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php }?>
                                    </span>
                                </div>
                            </td>

                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck1">United Kingdom</label>
                                    <?php if($client_country_2 == "United Kingdom"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php } else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div>
                                    <label class="form-check-label" for="contactCheck1" style="padding:0px 5px!important;">Other : </label>

                                    <span>
                                        <?php echo $client_othercountry_2; ?>
                                    </span>

                                    <span class="form-check">
                                        <?php if($client_country_2 == "Other"){ ?>
                                            <img class="check-img" style="position: relative;margin-top: -16px;margin-right: 5px!important;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php } else{ ?>
                                            <img class="check-img" style="position: relative;margin-top: -16px;margin-right: 5px!important;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php }?>
                                    </span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!--=====/Table Ends Here=====-->

                <!--========FORM SUB-SECTION HEADING==========-->
                <h5 class="" style="margin-top:30px;margin-bottom: 0px!important;">1.2 Current Residence</h5>

                <!--=====1.2 CURRENT RESIDENCE TABLE STARTS HERE=====-->
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
                            <td class="first-one">Date Moved into Current Address</td>
                            <?php $cdate1 = false; $cdate2 = false; 
                                if($client_currentmoveddate_1 != ""){
                                    $cdate1_data = explode("/", $client_currentmoveddate_1);
                                    $cdate1 = true;
                                } 

                                if($client_currentmoveddate_2 != ""){
                                    $cdate2_data = explode("/", $client_currentmoveddate_2);
                                    $cdate2 = true;
                                } 
                            ?>            
                            <td class="text-center">
                                <span><?php if($cdate1){echo $cdate1_data[0];} ?></span> / <span><?php if($cdate1){echo $cdate1_data[1];} ?></span> / <span><?php if($cdate1){echo $cdate1_data[2];} ?></span>
                            </td>
                            <td class="text-center">
                                <span><?php if($cdate2){echo $cdate2_data[0];} ?></span> / <span><?php if($cdate2){echo $cdate2_data[1];} ?></span> / <span><?php if($cdate2){echo $cdate2_data[2];} ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Current Residential Status</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck1">Owner</label>
                                    <?php if($client_residentialstatus_1 == "Owner"){ ?>
                                    <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck2">Tenant</label>
                                    <?php if($client_residentialstatus_1 == "Tenant"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck3">Living With Parents</label>
                                    <?php if($client_residentialstatus_1 == "Living With Parents"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div>
                                    <label style="margin: 0px;padding: 0px 5px;" class="form-check-label" for="">Other:</label>

                                    <span>
                                        <?php echo $client_otherresidentialstatus_1; ?>
                                    </span>

                                    <span class="form-check">
                                        <?php if($client_residentialstatus_1 == "Other"){ ?>
                                            <img class="check-img" style="position: relative;margin-top: -16px;margin-right: 5px;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" style="position: relative;margin-top: -16px;margin-right: 5px;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php }?>
                                    </span>
                                </div>
                            </td>

                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck1">Owner</label>
                                    <?php if($client_residentialstatus_2 == "Owner"){ ?>
                                    <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                    <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck2">Tenant</label>
                                    <?php if($client_residentialstatus_2 == "Tenant"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck3">Living With Parents</label>
                                    <?php if($client_residentialstatus_2 == "Living With Parents"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div>
                                    <label style="margin: 0px; padding: 0px 5px;" class="form-check-label" for="">Other:</label>

                                    <span>
                                        <?php echo $client_otherresidentialstatus_2; ?>
                                    </span>

                                    <span class="form-check">
                                        <?php if($client_residentialstatus_2 == "Other"){ ?>
                                            <img class="check-img" style="position: relative;margin-top: -16px;margin-right: 5px;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" style="position: relative;margin-top: -16px;margin-right: 5px;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php }?>
                                    </span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Are you on the Electoral Roll?</td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if($client_electoralroll_1 == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if($client_electoralroll_1 == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if($client_electoralroll_2 == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if($client_electoralroll_2 == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">If renting – how much do you pay?</td>
                            <td>
                                <span style="margin:0px 5px;"> £ <?php echo $client_currentrenting_1; ?></span>
                            </td>
                            <td>
                                <span style="margin: 0px 5px;"> £ <?php echo $client_currentrenting_2; ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one" style="padding-right:0.85em;line-height: .85rem">Are you leaving rental<br/>accommodation when the new<br/>mortgage completes?</td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if($client_rentalaccom_1 == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if($client_rentalaccom_1 == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if($client_rentalaccom_2 == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if($client_rentalaccom_2 == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--=====1.2 CURRENT RESIDENCE TABLE ENDS HERE=====-->

                <!--========FORM SUB-SECTION HEADING==========-->
                <h5 class="less-3" style="margin-top: 20px; margin-bottom: 0px;">1.3 Previous Residences</h5>
                <span class="less-3" style="margin-bottom: 10px!important;">If you have lived at your current address for less than three years, please complete this section.</span>

                <!--=====1.3 PREVIOUS RESIDENCE TABLESTARTS HERE=====-->
                <?php $prevAdd = json_decode($client_previousaddress, true); $i = 0;  ?>
                <?php foreach($prevAdd as $key => $value){ $i++; ?>
              
                <table class="table less-3" style="margin-bottom: 10px !important;">
                    <thead class="">
                        <tr>
                            <th scope="col" style="border:0px;background-color:transparent;"></th>
                            <th scope="col" class="hideclient_1">Client 1</th>
                            <th scope="col" class="hide-col hideclient_2">Client 2</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one" style="padding: 1.25em 0.85em;line-height: 1.85em;">Previous Address <?php echo $i; ?></td>
                            <td class="" style="padding:0px 5px!important;"><?php echo $value["client_prevaddress".$i."_1"]; ?></td>
                            <td class="" style="padding:0px 5px!important;"><?php echo $value["client_prevaddress".$i."_2"]; ?></td>
                        </tr>

                        <tr>
                        <td class="first-one">Postcode</td>
                            <td class="" style="padding:0px 5px!important;"><?php echo $value["client_prevpostcode".$i."_1"]; ?></td>
                            <td class="" style="padding:0px 5px!important;"><?php echo $value["client_prevpostcode".$i."_2"]; ?></td>
                        </tr>

                        <tr>
                            <?php $mdate1 = false; $mdate2 = false; 
                                if($value["client_prevmovedindate".$i."_1"] != ""){
                                $mdate1_data = explode("/", $value["client_prevmovedindate".$i."_1"]);
                                $mdate1 = true;
                                } 

                                if($value["client_prevmovedindate".$i."_2"] != ""){
                                $mdate2_data = explode("/", $value["client_prevmovedindate".$i."_2"]);
                                $mdate2 = true;
                                } 
                            ?>
                            <td class="first-one">Date Moved In</td>
                            <td class="text-center">
                                <span><?php if($mdate1){echo $mdate1_data[0];} ?></span> <?php if($mdate1 && $mdate1_data[0] != ""){ echo "/";} ?> <span><?php if($mdate1){echo $mdate1_data[1];} ?></span> <?php if($mdate1 && $mdate1_data[0] != ""){ echo "/";} ?>  <span><?php if($mdate1){echo $mdate1_data[2];} ?></span>
                            </td>
                            <td class="text-center">
                                <span><?php if($mdate2){echo $mdate2_data[0];} ?></span> <?php if($mdate2 && $mdate2_data[0] != ""){ echo "/";} ?>  <span><?php if($mdate2){echo $mdate2_data[1];} ?></span> <?php if($mdate2 && $mdate2_data[0] != ""){ echo "/";} ?> <span><?php if($mdate2){echo $mdate2_data[2];} ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Date Moved Out</td>
                            <?php $modate1 = false; $modate2 = false; 
                                if($value["client_prevmovedoutdate".$i."_1"] != ""){
                                $modate1_data = explode("/", $value["client_prevmovedoutdate".$i."_1"]);
                                $modate1 = true;
                                } 

                                if($value["client_prevmovedoutdate".$i."_2"] != ""){
                                $modate2_data = explode("/", $value["client_prevmovedoutdate".$i."_2"]);
                                $modate2 = true;
                                } 
                            ?>
                            <td class="text-center">
                                <span><?php if($modate1){echo $modate1_data[0];} ?></span> <?php if($modate1 && $modate1_data[0] != ""){ echo "/";} ?> <span><?php if($modate1){echo $modate1_data[1];} ?></span> <?php if($mdate1 && $mdate1_data[0] != ""){ echo "/";} ?> <span><?php if($modate1){echo $modate1_data[2];} ?></span>
                            </td>
                            <td class="text-center">
                                <span><?php if($modate2){echo $modate2_data[0];} ?></span> <?php if($modate2 && $modate2_data[0] != ""){ echo "/";} ?> <span><?php if($modate2){echo $modate2_data[1];} ?></span> <?php if($modate2 && $modate2_data[0] != ""){ echo "/";} ?> <span><?php if($modate2){echo $modate2_data[2];} ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Occupancy Status</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck1">Owner</label>
                                    <?php if(isset($value["client_previousResidence".$i."_1"]) && $value["client_previousResidence".$i."_1"]=="Owner"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck2">Tenant</label>
                                    <?php if(isset($value["client_previousResidence".$i."_1"]) && $value["client_previousResidence".$i."_1"]=="Tenant"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck3">Living With Parents</label>
                                    <?php if(isset($value["client_previousResidence".$i."_1"]) && $value["client_previousResidence".$i."_1"]=="Living With Parents"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div>
                                    <label style="margin: 0px;padding: 0px 5px;" class="ver-check-label" for="">Other:</label>

                                    <span>
                                        <?php echo $value["client_otherpreviousresidence".$i."_1"]; ?>
                                    </span>

                                    <span class="form-check">
                                        <?php if(isset($value["client_previousResidence".$i."_1"]) && $value["client_previousResidence".$i."_1"]=="Other"){ ?>
                                             <img class="check-img" style="position: relative;margin-top: -16px;margin-right:5px; " src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" style="position: relative;margin-top: -16px; margin-right: 5px;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php }?>
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck1">Owner</label>
                                    <?php if(isset($value["client_previousResidence".$i."_2"]) && $value["client_previousResidence".$i."_2"]=="Owner"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck2">Tenant</label>
                                    <?php if(isset($value["client_previousResidence".$i."_2"]) && $value["client_previousResidence".$i."_2"]=="Tenant"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="contactCheck3">Living With Parents</label>
                                    <?php if(isset($value["client_previousResidence".$i."_2"]) && $value["client_previousResidence".$i."_2"]=="Living With Parents"){ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img style="margin-right: 5px!important;" class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </div>
                                <div>
                                    <label style="margin: 0px;padding: 0px 5px;" class="ver-check-label" for="">Other:</label>

                                    <span>
                                        <?php echo $value["client_otherpreviousresidence".$i."_2"]; ?>
                                    </span>

                                    <span class="form-check">
                                        <?php if(isset($value["client_previousResidence".$i."_2"]) && $value["client_previousResidence".$i."_2"]=="Other"){ ?>
                                            <img class="check-img" style="position: relative;margin-top: -16px; margin-right: 5px;" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img" style="position: relative;margin-top: -16px; margin-right: 5px;" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php }?>
                                    </span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">On Electoral Roll</td>
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
                <!--/PREVIOUS ADDRESS 1 TABLE -->
                <?php }  ?>
                

                <!--=====1.3 PREVIOUS RESIDENCE TABLESTARTS HERE=====-->

                <!--========FORM SUB-SECTION HEADING==========-->
                <h5 style="margin-top: 20px!important;">1.4 Children & Dependants</h5>

                <!--=====1.4 CHILDREN / DEPENDANTS TABLE STARTS HERE=====-->
                <table class="tab-child" style="width: 100%;">
                    <thead class="">
                        <tr>
                            <th scope="col" style="width: 25%;">Name</th>
                            <th scope="col" style="width: 25%;">Dependent Upon</th>
                            <th scope="col" style="width: 5%;">Age</th>
                            <th scope="col">Relationship to<br/>Client(s)</th>
                            <th scope="col">Financially<br/>Dependent<br/>?</th>
                            <th scope="col">Anticipated<br/>length of<br/>dependency</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered" id="child_dependent">
                    <?php $childSec = json_decode($client_childrensection, true); $i = 0;  ?>
                    <?php foreach($childSec as $key => $value){ $i++; ?>
                        <tr>
                            <td style="padding:0px 5px!important;font-size: 8pt;"><?php echo $value["dependent_name_".$i]; ?></td>
                            <?php $depUpon = explode(",",$value["dependent_upon_".$i]); ?>
                            <td class="">
                                <span>
                                    <label class="form-check-label" for="">Joint</label>
                                    <?php if(in_array( "Joint" , $depUpon ) ){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </span>
                                <span>
                                     <label class="form-check-label" for="">CL2</label>
                                     <?php if(in_array( "CL1" , $depUpon ) ){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </span>
                                <span> 
                                    <label class="form-check-label" for="">CL3</label>
                                    <?php if(in_array( "CL2" , $depUpon ) ){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php }?>
                                </span>                              
                            </td>

                            <td style="padding:0px 5px!important; font-size: 8pt;text-align: center;"><?php echo $value["client_dependentage_".$i]; ?></td>

                            <td style="padding:0px 5px!important; font-size: 8pt;"><?php echo $value["relationship_".$i]; ?></td>

                            <td class="text-center">
                                    <span>
                                        <label class="form-check-label" for="">Y</label>
                                        <?php if(isset($value["client_FinanciallyDependent_".$i]) && $value["client_FinanciallyDependent_".$i]=="Yes"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img float-none" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php }?>
                                    </span>
                                    <span>
                                        <label class="form-check-label" for="">N</label>
                                        <?php if(isset($value["client_FinanciallyDependent_".$i]) && $value["client_FinanciallyDependent_".$i]=="No"){ ?>
                                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                        <?php }else{ ?>
                                            <img class="check-img float-none" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                        <?php }?>
                                    </span>                                                                  
                            </td>

                            <td  style="padding:0px 5px!important; font-size: 8pt;"><?php echo $value["client_anticipitated_".$i]; ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <!--=====/1.4 CHILDREN / DEPENDANTS TABLE ENDS HERE=====-->

                <!--========FORM SUB-SECTION HEADING==========-->
              <h5 style="margin-top: 10px!important;margin-bottom: 0px!important;">1.5 Health Details</h5>

              <!--=====1.5 HEALTH DETAILS TABLE STARTS HERE=====-->
              <table class="table" style="margin-top: 10px!important;">
                <thead class="">
                  <tr>
                    <th scope="col" style="border:0px;background-color:transparent;"></th>
                    <th scope="col">Client 1</th>
                    <th scope="col" class="hide-col">Client 2</th>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <tr>
                    <td class="first-one">Are you in good health? <br/> <span style="font-weight: normal;">If No, please provide further details in Notes</span></td>
                    <td class="text-center">
                        <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                          <label class="form-check-label" for="">Yes</label>
                          <?php if($client_healthstatus_1 == "Yes"){ ?>
                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                          <?php }else{ ?>
                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                          <?php } ?>
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <?php if($client_healthstatus_1 == "No"){ ?>
                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                          <?php }else{ ?>
                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                          <?php } ?>
                        </div>
                    </td>
                    <td class="hide-col text-center">
                        <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                          <label class="form-check-label" for="">Yes</label>
                          <?php if($client_healthstatus_2 == "Yes"){ ?>
                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                          <?php }else{ ?>
                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                          <?php } ?>
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <?php if($client_healthstatus_2 == "No"){ ?>
                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                          <?php }else{ ?>
                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                          <?php } ?>
                        </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!--=====/1.5 HEALTH DETAILS TABLE ENDS HERE=====-->

              <!--========FORM SUB-SECTION HEADING==========-->
              <h5 style="margin-top: 10px!important;margin-bottom: 0px!important;">1.6 Religious Details</h5>

              <!--=====1.6 RELIGIOUS DETAILS TABLE STARTS HERE=====-->
              <table class="table" style="margin-top: 10px!important;">
                <thead class="">
                  <tr>
                    <th scope="col" style="border:0px;background-color:transparent;"></th>
                    <th scope="col">Client 1</th>
                    <th scope="col" class="hide-col">Client 2</th>
                  </tr>
                </thead>
                <tbody class="table-bordered">
                  <tr>
                    <td class="first-one" style="line-height: 1.05em;">Do you have any religious beliefs<br/>that could affect mortgage<br/>planning? <br/> <span style="font-weight: normal;">e.g. Sharia compliant mortgage required.<br/>Please provide further details in Notes</span></td>
                    <td class="text-center">
                        <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                          <label class="form-check-label" for="">Yes</label>
                          <?php if($client_religiousbelief_1 == "Yes"){ ?>
                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                          <?php }else{ ?>
                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                          <?php } ?>
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <?php if($client_religiousbelief_1 == "No"){ ?>
                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                          <?php }else{ ?>
                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                          <?php } ?>
                        </div>
                    </td>
                    <td class="text-center">
                        <div class="col-md-2 date-input-box" style="padding: 0;margin-left: 30%;">
                          <label class="form-check-label" for="">Yes</label>
                          <?php if($client_religiousbelief_2 == "Yes"){ ?>
                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                          <?php }else{ ?>
                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                          <?php } ?>
                        </div>
                        <div class="col-md-2 date-input-box" style="padding: 0;">
                          <label class="form-check-label" for="">No</label>
                          <?php if($client_religiousbelief_1 == "No"){ ?>
                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                          <?php }else{ ?>
                            <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                          <?php } ?>
                        </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!--=====/1.6 RELIGIOUS DETAILS TABLE ENDS HERE=====-->

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
                        <p style="padding:0px 5px!important;margin: 0px!important;height:120px;"><?php echo $client_additionaldetail; ?></p>
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
    </div>
    <!--/container-->