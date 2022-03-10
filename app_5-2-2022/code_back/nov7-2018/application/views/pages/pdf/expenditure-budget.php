
<style type="text/css">
    .financial-table thead th {
        vertical-align: middle;
    }

    .tab-child td {
        font-weight: normal;
    }

    .table td, .table th {
        padding: 0rem;
        width: 25%;
        vertical-align: middle;
    } 
</style>


<div class="pdf-container">
    <div class="row">

        <div class="index-section center-block" style="margin-top: 20px!important;">   

            <!--========FORM SECTION HEADING==========-->
            <h4>Section 8: Expenditure & Budget</h4>

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 style="margin-bottom: 0px!important;">8.1 Budget Planner</h5>
            <span style="font-size: 8pt; line-height: 1.45em; margin-bottom: 0px!important;">
                Please note, that where a new house is being purchased, any house related costs should reflect those of the new property where relevant e.g. council tax. Any changes to desirable expenditure e.g. entertainment should also be considered.
            </span>
          
            <!--=====Form Starts Here=====-->
            <form id="clientform">
          
                <!--========SUB-SECTION SUB-HEADING==========-->
                <h6 class="" style="margin-top: 0px!important; margin-bottom: 0px!important;">Utility & Other Bills</h6>

                <!--===== UTILITY / OTHER BILLS TABLE STARTS HERE=====-->
                <table class="table" style="margin-bottom: 0px!important;">
                    <thead>
                        <tr>
                            <th scope="col" style="border:0px;background-color:transparent;"></th>
                            <th scope="col">Client 1</th>
                            <th scope="col">Client 2</th>
                            <th scope="col">Joint</th>
                        </tr> 
                    </thead>
                    <?php $utility = json_decode($utility, 0); ?>
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one">Gas / Other Heating</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_gas_1; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_gas_2; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_gas_joint; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Electricity</td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_electric_1; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_electric_2; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_electric_joint; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Water</td>
                            
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_water_1; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_water_2; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_water_joint; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Telephone / Broadband</td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_tel_1; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_tel_2; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_tel_joint; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Digital / Cable TV</td>
                           
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_digital_1; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_digital_2; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_digital_joint; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">TV Licence</td>
                    
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_tv_1; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_tv_2; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_tv_joint; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Council Tax</td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_council_1; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_council_2; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_council_joint; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Ground Rent</td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_grouprent_1; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_grouprent_2; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_grouprent_joint; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Service Charge</td>
                            
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_service_1; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_service_2; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_service_joint; ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Other</td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_other_1;  ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_other_2;  ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_other_joint;  ?></span>                 
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr style="border: 2px solid #000000;">
                            <td class="first-one" style="padding: .55em .85em;">Utility and Other Bills Total</td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_totalbill_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_totalbill_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $utility->utility_totalbill_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--===== /UTILITY / OTHER BILLS TABLE ENDS HERE=====-->

                <!--========SUB-SECTION SUB-HEADING==========-->
                <h6 class="" style="margin-top: 10px; margin-bottom: 0px;">General Living Costs</h6>

                <!--===== GENERAL LIVING COSTS TABLE STARTS HERE=====-->
                <?php $general = json_decode($general_costs, 0); ?>
                <table class="table" style="margin-top: 10px!important;">
                    <thead>
                        <tr>
                            <th scope="col" style="border:0px;background-color:transparent;"></th>
                            <th scope="col">Client 1</th>
                            <th scope="col">Client 2</th>
                             <th scope="col">Joint</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one">Food</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_food_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_food_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_food_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>
 
                        <tr>
                            <td class="first-one">Clothing</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_clothing_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_clothing_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_clothing_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>                   
                        </tr>

                        <tr>
                            <td class="first-one">Personal Goods <span style="font-weight: normal;">
                                (e.g. toiletries)</span></td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_personal_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_personal_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_personal_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Mobile Phone</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_mobile_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_mobile_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_mobile_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Household Goods <span style="font-weight: normal;">
                                (e.g. furniture)</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_household_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_household_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_household_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Repairs</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_repair_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_repair_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_repair_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td> 
                        </tr>

                        <tr>
                            <td class="first-one">School / Child Minding Fees</td>
                            <td>   
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_schoolfees_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_schoolfees_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_schoolfees_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>
 
                        <tr>
                            <td class="first-one">Entertainment / Recreation</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_entertainment_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_entertainment_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_entertainment_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                       <tr>
                            <td class="first-one">Alcohol / Tobacco</td>
                          
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_alcohol_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_alcohol_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_alcohol_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Holidays</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_holidays_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_holidays_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_holidays_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Other</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_other_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_other_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_other_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td> 
                        </tr>

                        <tr style="border: 2px solid #000000;">
                            <td class="first-one" style="padding: .55em .85em;">General Living Costs Total</td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_totalbill_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_totalbill_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $general->general_totalbill_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>           
                        </tr>
                    </tbody>
                </table> 
                <!--===== GENERAL LIVING COSTS TABLE ENDS HERE=====-->  

                <!--========SUB-SECTION SUB-HEADING==========-->
                <h6 class="" style="margin-top: 10px; margin-bottom: 0px!important;">Transport</h6>

                <!--===== TRANSPORTS TABLE STARTS HERE=====-->
                <?php $transport = json_decode($transport, 0); ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="border:0px;background-color:transparent;"></th>
                            <th scope="col">Client 1</th>
                            <th scope="col">Client 2</th>
                            <th scope="col">Joint</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one">Fuel</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_fuel_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_fuel_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_fuel_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td> 
                        </tr>

                        <tr>
                            <td class="first-one">Road Tax</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_roadtax_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_roadtax_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_roadtax_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td> 
                        </tr>

                        <tr>
                            <td class="first-one">Insurance</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_insurance_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_insurance_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_insurance_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td> 
                        </tr>

                        <tr>
                            <td class="first-one">Servicing</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_servicing_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>

                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_servicing_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>                        
                            </td>


                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_servicing_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td> 
                        </tr>

                        <tr>
                            <td class="first-one">Parking</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_parking_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_parking_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_parking_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td> 
                        </tr>

                        <tr>
                            <td class="first-one">Fares <span style="font-weight: normal;">(e.g. travel card)</span></td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_fare_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_fare_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_fare_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td> 
                        </tr>

                        <tr>
                            <td class="first-one">Other</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_other_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_other_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_other_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td> 
                        </tr>

                        <tr style="border: 2px solid #000000;">
                            <td class="first-one" style="padding: .55em .85em;">Transport Total</td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_total_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_total_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>  
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $transport->transport_total_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>
                    </tbody>
                </table> 
                <!--===== /TRANSPORTS TABLE ENDS HERE=====-->  

                <!--========SUB-SECTION SUB-HEADING==========-->
                <h6 class="" style="margin-top: 10px; margin-bottom: 0px!important;">Investments & Insurance</h6>

                <!--===== INVESTMENTS / INSURANCE TABLE STARTS HERE=====-->
                <?php $invest = json_decode($investments, 0); ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="border:0px;background-color:transparent;"></th>
                            <th scope="col">Client 1</th>
                            <th scope="col">Client 2</th>
                            <th scope="col">Joint</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one">Private Pensions</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $invest->investment_private_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $invest->investment_private_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $invest->investment_private_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td> 
                        </tr>

                        <tr>
                            <td class="first-one">Insurances <span style="font-weight: normal;">(e.g. home, life, pet, travel)</span></td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $invest->investment_insurance_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $invest->investment_insurance_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $invest->investment_insurance_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td> 
                        </tr>

                        <tr>
                            <td class="first-one">Savings / Investment</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $invest->investment_saving_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $invest->investment_saving_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $invest->investment_saving_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td> 
                        </tr>
   
                        <tr style="border: 2px solid #000000;">
                            <td class="first-one" style="padding: .55em .85em;">Investments & Ins Total</td>                        
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $invest->investment_total_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $invest->investment_total_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $invest->investment_total_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>
                    </tbody>
                </table>  
                <!--===== INVESTMENTS / INSURANCE TABLE ENDS HERE=====-->       

                <!--========SUB-SECTION SUB-HEADING==========-->
                <h6 class="" style="margin-top: 10px; margin-bottom: 0px!important;">Other Costs</h6>

                <!--===== OTHER COSTS TABLE STARTS HERE=====-->
                <?php $other = json_decode($other_costs, 0); ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="border:0px;background-color:transparent;"></th>
                            <th scope="col">Client 1</th>
                            <th scope="col">Client 2</th>
                            <th scope="col">Joint</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered">
                        <tr>
                            <td style="padding:15px;">
                                <?php echo $other->other_text1_text; ?>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $other->other_text1_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $other->other_text1_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $other->other_text1_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td style="padding:15px;">
                                <?php echo $other->other_text2_text; ?>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $other->other_text2_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $other->other_text2_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $other->other_text2_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td style="padding:15px;">
                                <?php echo $other->other_text3_text; ?>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $other->other_text3_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $other->other_text3_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $other->other_text3_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr style="border: 2px solid #000000;">
                            <td class="first-one" style="padding: .55em .85em;">Other Costs Total</td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $other->other_total_1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $other->other_total_2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $other->other_total_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>
                    </tbody>
                </table> 
                <!--===== /OTHER COSTS TABLE ENDS HERE=====-->

                <!--========FORM SUB-SECTION HEADING==========-->
                <h5 class="" style="margin-top: 10px; margin-bottom: 0px!important;">8.2 Expenditure Summary</h5>

                <!--========SUB-SECTION SUB-HEADING==========-->
                <h6 style="margin-top: 10px; margin-bottom: 0px!important;">Household Costs Summary</h6>

                <!--===== HOUSEHOLD COSTS SUMMARY TABLE STARTS HERE=====-->
                <table class="table" style="margin-top: 10px!important;">
                    <thead>
                        <tr>
                            <th scope="col" style="border:0px;background-color:transparent;"></th>
                            <th scope="col">Client 1</th>
                            <th scope="col">Client 2</th>
                            <th scope="col">Joint</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered">
                        <tr>
                            <td class="first-one">
                                Total Monthly Financial<br/>Commitments <span style="font-weight: normal;">(from Section 5.8)</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php if($this->client->getSection5_8_1($_GET['data']) != NULL){echo $this->client->getSection5_8_1($_GET['data'])->client_finsummary_1;} ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php if($this->client->getSection5_8_2($_GET['data']) != NULL){echo $this->client->getSection5_8_2($_GET['data'])->client_finsummary_2;} ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Utility & Other Bills Total</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $this->client->removeComma($utility->utility_totalbill_1); ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $this->client->removeComma($utility->utility_totalbill_2); ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $this->client->removeComma($utility->utility_totalbill_joint); ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>                
                        </tr>

                        <tr>
                            <td class="first-one">General Living Costs Total</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $this->client->removeComma($general->general_totalbill_1); ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $this->client->removeComma($general->general_totalbill_2); ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $this->client->removeComma($general->general_totalbill_joint); ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Transport Total</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $this->client->removeComma($transport->transport_total_1); ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $this->client->removeComma($transport->transport_total_2); ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $this->client->removeComma($transport->transport_total_joint); ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Investments & Ins Total</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $this->client->removeComma($invest->investment_total_1); ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $this->client->removeComma($invest->investment_total_2); ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $this->client->removeComma($invest->investment_total_joint); ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="first-one">Other Costs Total</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $this->client->removeComma($other->other_total_1); ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $this->client->removeComma($other->other_total_2); ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $this->client->removeComma($other->other_total_joint); ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <?php 
                            //Client 2 Check
                            if(isset($utility->utility_totalbill_2)){
                                $util_bill2 = $this->client->removeComma($utility->utility_totalbill_2);
                            }
                            else{
                                $util_bill2 = 0;
                            }
        
                            if(isset($general->general_totalbill_2)){
                                $gen_bill2 = $this->client->removeComma($general->general_totalbill_2);
                            }
                            else{
                                $gen_bill2 = 0;
                            }
        
                            if(isset($transport->transport_total_2)){
                                $t_bill2 = $this->client->removeComma($transport->transport_total_2);
                            }
                            else{
                                $t_bill2 = 0;
                            }
        
                            if(isset($invest->investment_total_2)){
                                $i_bill2 = $this->client->removeComma($invest->investment_total_2);
                            }
                            else{
                                $i_bill2 = 0;
                            }
        
                            if(isset($other->other_total_2)){
                                $o_bill2 = $this->client->removeComma($other->other_total_2);
                            }
                            else{
                                $o_bill2 = 0;
                            }
        
                            //Client Joint Check
                            if(isset($utility->utility_totalbill_joint)){
                                $util_billjoint = $this->client->removeComma($utility->utility_totalbill_joint);
                            }
                            else{
                                $util_billjoint = 0;
                            }
        
                            if(isset($general->general_totalbill_joint)){
                                $gen_billjoint = $this->client->removeComma($general->general_totalbill_joint);
                            }
                            else{
                                $gen_billjoint = 0;
                            }
        
                            if(isset($transport->transport_total_joint)){
                                $t_billjoint = $this->client->removeComma($transport->transport_total_joint);
                            }
                            else{
                                $t_billjoint = 0;
                            }
        
                            if(isset($invest->investment_total_joint)){
                                $i_billjoint = $this->client->removeComma($invest->investment_total_joint);
                            }
                            else{
                                $i_billjoint = 0;
                            }
        
                            if(isset($other->other_total_joint)){
                                $o_billjoint = $this->client->removeComma($other->other_total_joint);
                            }
                            else{
                                $o_billjoint = 0;
                            }
        
                            //Client 1 Check
                            if(isset($utility->utility_totalbill_1)){
                                $util_bill1 = $this->client->removeComma($utility->utility_totalbill_1);
                            }
                            else{
                                $util_bill1 = 0;
                            }
        
                            if(isset($general->general_totalbill_1)){
                                $gen_bill1 = $this->client->removeComma($general->general_totalbill_1);
                            }
                            else{
                                $gen_bill1 = 0;
                            }
        
                            if(isset($transport->transport_total_1)){
                                $t_bill1 = $this->client->removeComma($transport->transport_total_1);
                            }
                            else{
                                $t_bill1 = 0;
                            }
        
                            if(isset($invest->investment_total_1)){
                                $i_bill1 = $this->client->removeComma($invest->investment_total_1);
                            }
                            else{
                                $i_bill1 = 0;
                            }
        
                            if(isset($other->other_total_1)){
                                $o_bill1 = $this->client->removeComma($other->other_total_1);
                            }
                            else{
                                $o_bill1 = 0;
                            }
        
                            if($this->client->getSection5_8_1($_GET['data']) == NULL){
                                $sec5_8_1 = 0;
                            }
                            else{
                                $sec5_8_1 = $this->client->getSection5_8_1($_GET['data'])->client_finsummary_1;
                            }
        
                            if($this->client->getSection5_8_2($_GET['data']) == NULL){
                                $sec5_8_2 = 0;
                            }
                            else{
                                $sec5_8_2 = $this->client->getSection5_8_2($_GET['data'])->client_finsummary_2;
                            }
        
                            $household_total1 = $sec5_8_1 + $util_bill1 + $gen_bill1 + $t_bill1 + $i_bill1 + $o_bill1;
        
                            $household_total2 = $sec5_8_2 + $util_bill2 + $gen_bill2 + $t_bill2 + $i_bill2 + $o_bill2;
        
                            $household_total_joint = $util_billjoint + $gen_billjoint + $t_billjoint + $i_billjoint + $o_billjoint;
                        ?>

                        <tr style="border: 2px solid #000000;">
                            <td class="first-one" style="padding: .55em .85em;">Household Costs Total</td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $household_total1; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $household_total2; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $household_total_joint; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>
                    </tbody>
                </table> 
                <!--===== /HOUSEHOLD COSTS SUMMARY TABLE ENDS HERE=====-->

                <!--========FORM SUB-SECTION HEADING==========-->
                <h5 class="" style="margin-top: 10px; margin-bottom: 0px!important;">8.3 Overall Summary</h5>

                <!--===== 8.3 OVERALL SUMMARY TABLE STARTS HERE=====-->
                <table class="table" style="margin-top: 10px!important;">
                    <tbody class="table-bordered">
                        <tr>
                            <td colspan="1" class="first-one" style="width: 70%!important;">
                                Total Net Household Income 
                                <span style="font-weight: normal;">(from Section 4.3)</span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $this->client->getTotalSection4_3($_GET['data'], true); ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="first-one">Less Household Costs Total</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $less_household_costs; ?></span>
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr style="border: 2px solid #000000;">
                            <td class="first-one" style="padding: .55em .85em;">Disposable Income</td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $disposable_income; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--===== /8.3 OVERALL SUMMARY TABLE ENDS HERE=====-->

                <!--========FORM SUB-SECTION HEADING==========-->
                <h5 class="" style="margin-bottom: 0px!important;">8.4 Budget</h5>

                <!--===== 8.4 BUDGET TABLE STARTS HERE=====-->

                <!--TABLE 1 STARTS HERE-->
                <?php $budget = json_decode($budget, 0); ?>
                <table class="table" style="margin-top: 20px!important;">
                    <thead>
                        <tr>
                            <th scope="col" style="border:0px;background-color:transparent;"></th>
                            <th scope="col">Client 1</th>
                            <th scope="col" class="hide-col">Client 2</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered">
                        <tr>
                            <td class="text-center first-one" style="line-height: 1.25em;">Do you expect your regular outgoings to change significantly in the foreseeable future?</td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if(isset($budget->budget_future_1) && $budget->budget_future_1 == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if(isset($budget->budget_future_1) && $budget->budget_future_1 == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="col-md-2 date-input-box" style="padding: 0; margin-left: 30%;">
                                    <label class="form-check-label" for="">Yes</label>
                                    <?php if(isset($budget->budget_future_2) && $budget->budget_future_2 == "Yes"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                                <div class="col-md-2 date-input-box" style="padding: 0;">
                                    <label class="form-check-label" for="">No</label>
                                    <?php if(isset($budget->budget_future_2) && $budget->budget_future_2 == "No"){ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/tick-box.jpg" />
                                    <?php }else{ ?>
                                        <img class="check-img" src="<?php echo getcwd(); ?>/assets/images/blank-box.jpg" />
                                    <?php } ?>
                                </div>
                            </td>
                        </tr>
                
                        <tr>
                            <td class="first-one">If Yes, please provide details</td>
                            <td><?php echo $budget->budget_detail_1; ?></td>
                            <td><?php echo $budget->budget_detail_2; ?></td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 1 ENDS HERE-->

                <!--TABLE 2 STARTS HERE-->
                <table class="financial-table" style="margin-top: 10px;">
                    <tbody class="table-bordered">
                        <tr>
                            <td style="width: 65%;" class="first-one">What is the maximum monthly payment you are prepared to set to meet<br/>your mortgage needs?</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $budget->mortgage_needs; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td style="width: 65%;" class="first-one">What is the maximum monthly payment you are prepared to set aside<br/>to meet your protection needs?</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $budget->protection_needs; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td style="width: 65%;" class="first-one">What is the maximum monthly payment you are prepared to set aside <br/>to meet your home insurance needs?</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $budget->insurance_needs; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td style="width: 65%;" class="first-one">What is the maximum monthly payment you are prepared to set aside<br/>to meet your accident, sickness and unemployment needs?</td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $budget->unemployed_needs; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>
                        <?php
                            $total_budget8_4 = 0;
                            $total_budget8_4 = $budget->mortgage_needs + $budget->protection_needs + $budget->insurance_needs + $budget->unemployed_needs;
                        ?>
                        <tr style="border:2px solid #000000;">
                            <td style="width: 65%; padding: .55em .85em;" class="first-one">Total Budget</td>
                            <td style="font-weight: bold;">
                                <span style="margin:0px 5px;">£</span>
                                <span><?php echo $total_budget8_4; ?></span>                      
                                <span style="margin: 5px;">p.m.</span>
                            </td>
                        </tr>
                    </tbody>
                </table><!--/TABLE 2 ENDS HERE-->
                <!--===== 8.4 BUDGET TABLE ENDS HERE=====-->

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
