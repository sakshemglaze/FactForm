<style type="text/css">
.form-check > img {
    margin: 3px 0px 0px 5px;
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
        <h4>Section 10: New Mortgage Property Details</h4>
          
        <!--=====Form Starts Here=====-->
        <form id="clientform">
            
            <!--===== 10 NEW MORTGAGE PROPERTY DETAILS TABLE STARTS HERE=====-->
            <!--TABLE 1 STARTS HERE -->
            <table class="table" style="margin-top: 20px!important;">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width: 30%!important;">Address</td>
                        <td style="padding: 0px 5px;"><?php echo $address; ?></td>
                    </tr>
                    <tr>
                        <td class="first-one">Post Code</td>
                        <td style="padding: 0px 5px;"><?php echo $postcode; ?></td>
                    </tr>
                </tbody>
            </table><!--/TABLE 1 ENDS HERE -->

            <!--TABLE 2 STARTS HERE -->
            <table class="table" style="margin-top:10px;" border="1" cellpadding="0" cellspacing="0">
                <tbody class="table-bordered">
                    <tr>
                        <td style="width: 60%!important;" class="first-one">Property Type</td>
                        <td style="padding: 2px 0px!important;">
                            <div class="form-check">
                                <label class="form-check-label" for="">Detached</label>
                                <?php if($client_propertytype == "Detached"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                <?php } ?>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="">Semi Detached</label>
                                <?php if($client_propertytype == "Semi Detached"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                <?php } ?>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="">Flat</label>
                                <?php if($client_propertytype == "Flat"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                <?php } ?>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="">End Terrace</label>
                                <?php if($client_propertytype == "End Terrace"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                <?php } ?>
                            </div>
                        </td>
                        
                        <td style="padding: 2px 0px!important;">
                            <div class="form-check">
                                <label class="form-check-label" for="">Bungalow</label>
                                <?php if($client_propertytype == "Bungalow"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                <?php } ?>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="">Maisonette</label>
                                <?php if($client_propertytype == "Maisonette"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                <?php } ?>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="">Back to Back Terrace</label>
                                <?php if($client_propertytype == "Back to Back Terrace"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                <?php } ?>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="">Mid Terrace</label>
                                <?php if($client_propertytype == "Mid Terrace"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                <?php } ?>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!--TABLE 3 STARTS HERE -->
            <table class="table" style="margin-top:10px; width: 100%;" border="1" cellpadding="0" cellspacing="0">
                <tbody class="table-bordered">
                    <tr>
                        <td style="width: 57.5%!important;font-weight: bold;" class="first-one">What is the property tenure?</td>
                        <td style="font-size: 8pt!important; width: 23%!important;">
                            <div class="form-check">
                                <label class="form-check-label" for="">Freehold</label>
                                <?php if($client_propertytenure == "Freehold"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                <?php } ?>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="">Leasehold</label>
                                <?php if($client_propertytenure == "Leasehold"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                <?php } ?>
                            </div>
                            <div class="">
                                <label class="form-check-label" for="" >
                                    <span style="margin-left: 22px; position: relative;">Absolute Ownership <br/> (Feuhold)</span>
                                </label>
                                <span class="form-check">
                                <?php if($client_propertytenure == "Flat"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;position: relative;margin-top: -30px!important;" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;position: relative;margin-top: -30px!important;" />
                                <?php } ?>
                                </span>
                            </div>
                        </td>
                        <td style="font-size: 8pt;">
                            <div class="form-check" style="margin-top: -18px;">
                                <label class="form-check-label" for="">Commonhold</label>
                                <?php if($client_propertytenure == "Commonhold"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                <?php } ?>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="">Flying freehold</label>
                                <?php if($client_propertytenure == "Semi Detached"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                <?php } ?>
                            </div>
                            <div class="">
                                <label class="form-check-label" for="" >
                                    Other : 
                                </label>
                                <span></span>
                                <span class="form-check">
                                <?php if($client_propertytenure == "Other"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;position: relative;margin-top: -30px!important;" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;position: relative;margin-top: -30px!important;" />
                                <?php } ?>
                                </span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--/TABLE 3 ENDS HERE -->

            <!--TABLE 4 STARTS HERE -->
            <table class="table" style="margin-top:10px; width: 100%;" border="1" cellpadding="0" cellspacing="0">
                <tbody class="table-bordered">
                    <tr>
                        <td rowspan="3" style="width: 70.5%!important;" class="first-one">Accommodation</td>
                        <td class="white-td" style="text-align:right;padding-right: 0.85em;">No. of  Bedrooms :</td>
                        <td style="width:5%!important;"><?php echo $no_of_bedrooms; ?></td>
                        <td  class="white-td" style="text-align:right;padding-right: 0.85em;">No. of Living Rooms :</td>
                        <td style="width:5%!important;"><?php echo $no_of_livingroom; ?></td>
                    </tr>

                    <tr>                    
                        <td class="white-td" style="text-align:right;padding-right: 0.85em;">No. of Bathrooms :</td>
  
                        <td style="width:5%!important;"><?php echo $no_of_bathroom; ?></td>

                        <td class="white-td" style="text-align:right;padding-right: 0.85em;">No. of Kitchens</td>
                    
                        <td style="width:5%!important;"><?php echo $no_of_kitchen; ?></td>
                    </tr>

                    <tr>                    
                        <td class="white-td" style="text-align:right;padding-right: 0.85em;">No. of WCs</td>

                        <td style="width:5%!important;"><?php echo $no_of_wc; ?></td>

                        <td class="white-td" style="text-align:right;padding-right: 0.85em;">Other :  </td>
                    
                        <td style="width:5%!important;"><?php echo $other_type; ?></td>
                    </tr>
                </tbody>
            </table>
            <!--/TABLE 4 ENDS HERE -->

            <!--TABLE 5 STARTS HERE -->  
            <table class="table" style="margin-top:10px;" border="1" cellpadding="0" cellspacing="0">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width: 30%!important;">Is the property ex local authority?</td>
                        <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if($local_authority == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if($local_authority == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                    <?php } ?>
                                </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one">Year Built</td>
                        <td style="padding: 0px 5px;"><?php echo $year_built; ?></td>
                    </tr>

                    <tr>
                        <td class="first-one">If new build, please state building guarantee</td>
                        <td style="padding: 0px 5px;"><?php echo $building_guarantee; ?></td>
                    </tr>
                </tbody>
            </table>
            <!--/TABLE 5 ENDS HERE --> 

            <!--TABLE 6 STARTS HERE -->  
            <table class="table" style="margin-top:10px;" border="1" cellpadding="0" cellspacing="0">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width: 30%!important;">If Leasehold, give the term remaining?</td>
                        <td>
                            <span style="margin:0px 5px;"><?php echo $term_remaining; ?></span>    
                            <span style="margin:0px 5px;">yrs.</span>                          
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one">Ground Rent</td>
                        <td>
                            <span style="margin:0px 5px;">£</span>    
                            <span><?php echo $ground_rent; ?></span>    
                        </td>
                    </tr>

                    <tr>
                        <td class="first-one">Service Charge</td>
                        <td>
                            <span style="margin:0px 5px;">£</span>    
                            <span><?php echo $service_charge; ?></span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--/TABLE 6 ENDS HERE -->

            <!--TABLE 7 STARTS HERE -->  
            <table class="table" style="margin-top:10px;" border="1" cellpadding="0" cellspacing="0">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width: 30%!important; line-height: 1.25em;">Is the property of standard constructions <br/> <span style="font-weight: normal;">(i.e. bricks walls & tiled roof?)  (If No provide details in Notes)</span></td>
                        <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if($standard_construction == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if($standard_construction == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                    <?php } ?>
                                </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--/TABLE 7 ENDS HERE -->

            <!--TABLE 8 STARTS HERE -->  
            <table class="table" style="margin-top:10px;" border="1" cellpadding="0" cellspacing="0">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width: 30%!important;">If the property is a flat, please state the number<br/>of floors and which floor the flat is on</td>
                        <td><?php echo $the_flat; ?></td>
                    </tr>
                    <tr>
                        <td class="first-one">Is the property located over a commercial<br/>property (e.g. shop)?<br/> <span style="font-weight: normal;">If Yes, please provide details in Notes</span></td>
                        <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if($commercial_property == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if($commercial_property == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                    <?php } ?>
                                </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--/TABLE 8 ENDS HERE -->

            <!--TABLE 9 STARTS HERE -->  
            <table class="table" style="margin-top:10px;width: 100%;" border="1" cellpadding="0" cellspacing="0">
                <tbody class="table-bordered">
                    <tr>
                        <td style="width: 60%!important;" class="first-one">For a joint purchase, on what legal basis is the<br/>property being owned?</td>
                        <td colspan="2">
                                <div class="col-md-4 date-input-box" style="padding: 0; margin-left: 20%;">
                                    <label class="form-check-label" for="">Joint Tenants</label>
                                    <?php if($joint_purchase == "Joint_Tenants"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-4 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">Tenants In Common</label>
                                    <?php if($joint_purchase == "Tenants_In_Common"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                    <?php } ?>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="first-one">Do you have an up to date will?</td>
                        <td style="padding-left: 0.85em;">
                            <span style="font-size: 9pt;">Client 1: </span>
                            <span>
                                <label class="form-check-label" for="">Yes</label>
                                <?php if($to_date_client1 == "Yes"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                <?php } ?>
                            </span>
                            <span>
                                <label class="form-check-label" for="">No</label>
                                <?php if($to_date_client1 == "No"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                <?php } ?>
                            </span>                    
                        </td>
                        <td style="padding-left: 0.85em;">
                            <span style="font-size: 9pt;">Client 2: </span>
                            <span>
                                <label class="form-check-label" for="">Yes</label>
                                <?php if($to_date_client2 == "Yes"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                <?php } ?>
                            </span>
                            <span>
                                <label class="form-check-label" for="">No</label>
                                <?php if($to_date_client2 == "No"){ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                <?php }else{ ?>
                                    <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                <?php } ?>
                            </span> 
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--/TABLE 9 ENDS HERE -->

            <!--TABLE 10 STARTS HERE -->  
            <table class="table" style="margin-top:10px;width: 100%;" border="1" cellpadding="0" cellspacing="0">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width: 30%!important;">Will anyone over age 17 be living at the<br/>property (excluding the clients?)</td>
                        <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if($living_at == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if($living_at == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                    <?php } ?>
                                </div>
                        </td>
                    </tr>
                </tbody>                
            </table>
            <!--/TABLE 10 ENDS HERE -->

            <!--TABLE 11 STARTS HERE -->  
            <table class="table" border="1" cellpadding="0" cellspacing="0">
                <tbody class="tab-bordered">                  
                    <tr>
                        <td style="width:6%!important;" class="first-one">If yes, please<br/>provide their full<br/>names</td>
                        <td colspan="2">
                            <p style="padding:0px 5px!important;margin: 0px!important;height:40px;width: 100%!important; display: block;"><?php echo $full_names; ?></p> 
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--/TABLE 11 ENDS HERE -->

            <!--TABLE 12 STARTS HERE -->  
            <table class="table" style="margin-top:10px;" border="1" cellpadding="0" cellspacing="0">
                <tbody class="table-bordered">
                    <tr>
                        <td class="first-one" style="width: 30%!important;">Will the property be occupied within 30 days of<br/>completion?</td>
                        <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if($of_completion == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if($of_completion == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" style="margin-right: 5px!important;" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" style="margin-right: 5px!important;" />
                                    <?php } ?>
                                </div>
                        </td>
                    </tr>
                </tbody>                               
            </table>
            <!--/TABLE 12 ENDS HERE -->

            <!--TABLE 13 STARTS HERE -->  
            <table class="table" border="1" cellpadding="0" cellspacing="0">
                <thead class="">
                    <tr>
                        <th colspan="2" style="text-align: left;padding-left:0.85rem;">Notes</th>
                    </tr>
                </thead>
                <tbody class="">
                    <tr>
                        <td colspan="2" style="vertical-align: top!important;">
                            <p style="padding:0px 5px!important;margin: 0px!important;height:100px;"><?php echo $notes; ?></p>
                        </td>
                    </tr>
                </tbody>
            </table> 
            <!--/TABLE 13 ENDS HERE -->     
            <!--===== 10 NEW MORTGAGE PROPERTY DETAILS TABLE STARTS HERE=====-->

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
