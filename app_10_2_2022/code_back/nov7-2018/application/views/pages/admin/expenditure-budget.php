F<?php 
//$page = 'dashboard';
include 'find-fact-header.php'
?>
<style type="text/css">
  .financial-table thead th {
    vertical-align: middle;
  }

  .tab-child >.table-bordered > tr >td:First-child {
    background-color: #f2f2f2;
    text-align: right;
    line-height: 1.85em;
    font-weight: bold;
    padding-right: 0.85em;
    font-size: 10pt;
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

<?php

  $pdata = $this->admin->getExpBudget($last);

?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <!-- <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Find Fact Form</li>
      </ol> -->
      <div class="row">
        <div class="col-lg-12 marTP-30"><!-- Kindly Put This "form-section" class with col-lg-12 to hide complete section-->

          <!--========FORM SECTION HEADING==========-->
          <h4>Section 8: Expenditure & Budget</h4>

          <!--========FORM SUB-SECTION HEADING==========-->
          <h5>8.1 Budget Planner</h5>
          <span>
            Please note, that where a new house is being purchased, any house related costs should reflect those of 
            the new property where relevant e.g. council tax. Any changes to desirable expenditure e.g. entertainment 
            should also be considered.
          </span>
          
          <!--=======FORM STARTS HERE===========-->
          <form id="clientform">

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 class="marTP-30">Utility & Other Bills</h6>

            <!--===== UTILITY / OTHER BILLS TABLE STARTS HERE=====-->
            <table class="table tab-child">
                <thead>
                  <th scope="col" style="border:0px;background-color:transparent;"></th>
                  <th scope="col">Client 1</th>
                  <?php if($ftype){ ?><th scope="col">Client 2</th><?php } ?>
                  <?php if($ftype){ ?><th scope="col">Joint</th><?php } ?>
                </thead>
                <tbody class="table-bordered">
                <?php if($pdata != NULL){ $utility = json_decode($pdata->utility, 0); } ?>
                  <tr>
                    <td>Gas / Other Heating</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utility1_1 numcomma numcomma" name="utility_gas_1" value="<?php if($pdata != NULL){ echo $utility->utility_gas_1; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                      <!-- <span style="margin:0px 5px;">£</span>                    
                      <span style="margin: 5px;">p.m.</span>-->
                    </td>
                    <?php if($ftype){ ?>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utility2_2 numcomma numcomma" name="utility_gas_2" value="<?php if($pdata != NULL){ echo $utility->utility_gas_2; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                      <!-- <span style="margin:0px 5px;">£</span>                    
                      <span style="margin: 5px;">p.m.</span>-->
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utilityjoint_joint numcomma numcomma" name="utility_gas_joint" value="<?php if($pdata != NULL){ echo $utility->utility_gas_joint; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                      <!-- <span style="margin:0px 5px;">£</span>                    
                      <span style="margin: 5px;">p.m.</span>-->
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>Electricity</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utility1_1 numcomma numcomma" name="utility_electric_1" value="<?php if($pdata != NULL){ echo $utility->utility_electric_1; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <?php if($ftype){ ?>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utility2_2 numcomma numcomma" name="utility_electric_2" value="<?php if($pdata != NULL){ echo $utility->utility_electric_2; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utilityjoint_joint numcomma numcomma" name="utility_electric_joint" value="<?php if($pdata != NULL){ echo $utility->utility_electric_joint; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>Water</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utility1_1 numcomma numcomma" name="utility_water_1" value="<?php if($pdata != NULL){ echo $utility->utility_water_1; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <?php if($ftype){ ?>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utility2_2 numcomma numcomma" name="utility_water_2" value="<?php if($pdata != NULL){ echo $utility->utility_water_2; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utilityjoint_joint numcomma numcomma" name="utility_water_joint" value="<?php if($pdata != NULL){ echo $utility->utility_water_joint; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>Telephone / Broadband</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utility1_1 numcomma numcomma" name="utility_tel_1" value="<?php if($pdata != NULL){ echo $utility->utility_tel_1; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <?php if($ftype){ ?>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utility2_2 numcomma numcomma" name="utility_tel_2" value="<?php if($pdata != NULL){ echo $utility->utility_tel_2; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utilityjoint_joint numcomma numcomma" value="<?php if($pdata != NULL){ echo $utility->utility_tel_joint; } ?>" name="utility_tel_joint" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>Digital / Cable TV</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utility1_1 numcomma numcomma" name="utility_digital_1" value="<?php if($pdata != NULL){ echo $utility->utility_digital_1; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <?php if($ftype){ ?>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utility2_2 numcomma numcomma" name="utility_digital_2" value="<?php if($pdata != NULL){ echo $utility->utility_digital_2; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utilityjoint_joint numcomma numcomma" name="utility_digital_joint" value="<?php if($pdata != NULL){ echo $utility->utility_digital_joint; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>TV Licence</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utility1_1 numcomma numcomma" name="utility_tv_1" value="<?php if($pdata != NULL){ echo $utility->utility_tv_1; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <?php if($ftype){ ?>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utility2_2 numcomma numcomma" name="utility_tv_2" value="<?php if($pdata != NULL){ echo $utility->utility_tv_2; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utilityjoint_joint numcomma numcomma" name="utility_tv_joint" value="<?php if($pdata != NULL){ echo $utility->utility_tv_joint; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>Council Tax</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utility1_1 numcomma numcomma" name="utility_council_1" value="<?php if($pdata != NULL){ echo $utility->utility_council_1; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <?php if($ftype){ ?>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utility2_2 numcomma numcomma" name="utility_council_2" value="<?php if($pdata != NULL){ echo $utility->utility_council_2; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utilityjoint_joint numcomma numcomma" name="utility_council_joint" value="<?php if($pdata != NULL){ echo $utility->utility_council_joint; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>Ground Rent</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utility1_1 numcomma" name="utility_grouprent_1" value="<?php if($pdata != NULL){ echo $utility->utility_grouprent_1; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <?php if($ftype){ ?>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utility2_2 numcomma" name="utility_grouprent_2" value="<?php if($pdata != NULL){ echo $utility->utility_grouprent_2; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utilityjoint_joint numcomma" name="utility_grouprent_joint" value="<?php if($pdata != NULL){ echo $utility->utility_grouprent_joint; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>Service Charge</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utility1_1 numcomma" name="utility_service_1" value="<?php if($pdata != NULL){ echo $utility->utility_service_1; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <?php if($ftype){ ?>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utility2_2 numcomma" name="utility_service_2" value="<?php if($pdata != NULL){ echo $utility->utility_service_2; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utilityjoint_joint numcomma" name="utility_service_joint" value="<?php if($pdata != NULL){ echo $utility->utility_service_joint; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>Other</td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utility1_1 numcomma" name="utility_other_1" value="<?php if($pdata != NULL){ echo $utility->utility_other_1; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <?php if($ftype){ ?>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utility2_2 numcomma" name="utility_other_2" value="<?php if($pdata != NULL){ echo $utility->utility_other_2; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">£</div>
                        </div>                        
                        <input type="text" class="form-control text-right utilityjoint_joint numcomma" name="utility_other_joint" value="<?php if($pdata != NULL){ echo $utility->utility_other_joint; } ?>" placeholder="Type amount here">
                        <div class="input-group-prepend">
                          <div class="input-group-text">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <?php } ?>
                  </tr>

                  <tr style="border: 2px solid #000000;">
                    <td>Utility and Other Bills Total</td>
                    <td style="font-weight: bold;">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text" style="font-weight: bold;">£</div>
                        </div>                        
                        <input id="total_utility1_1" type="text" name="utility_totalbill_1" value="<?php if($pdata != NULL){ echo $utility->utility_totalbill_1; } ?>" class="form-control text-right" placeholder="Total here" style="font-weight: bold;">
                        <div class="input-group-prepend">
                          <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <?php if($ftype){ ?>
                    <td style="font-weight: bold;">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text" style="font-weight: bold;">£</div>
                        </div>                        
                        <input id="total_utility2_2" type="text" name="utility_totalbill_2" value="<?php if($pdata != NULL){ echo $utility->utility_totalbill_2; } ?>" class="form-control text-right" placeholder="Total here" style="font-weight: bold;">
                        <div class="input-group-prepend">
                          <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <td style="font-weight: bold;">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text" style="font-weight: bold;">£</div>
                        </div>                        
                        <input id="total_utilityjoint_joint" type="text" name="utility_totalbill_joint" value="<?php if($pdata != NULL){ echo $utility->utility_totalbill_joint; } ?>" class="form-control text-right" placeholder="Total here" style="font-weight: bold;">
                        <div class="input-group-prepend">
                          <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                        </div>
                      </div>
                    </td>
                    <?php } ?>
                  </tr>
                </tbody>
            </table>
            <!--===== /UTILITY / OTHER BILLS TABLE ENDS HERE=====-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 class="marTP-30">General Living Costs</h6>

            <!--===== GENERAL LIVING COSTS TABLE STARTS HERE=====-->
            <table class="table tab-child">
              <thead>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <?php if($ftype){ ?><th scope="col">Client 2</th>
                <th scope="col">Joint</th><?php } ?>
              </thead>
              <tbody class="table-bordered">
                <?php if($pdata != NULL){ $general = json_decode($pdata->general_costs, 0); } ?>
                <tr>
                  <td>Food</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right general1_1 numcomma" name="general_food_1" value="<?php if($pdata != NULL){ echo $general->general_food_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right general2_2 numcomma" name="general_food_2" value="<?php if($pdata != NULL){ echo $general->general_food_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right generaljoint_joint numcomma" name="general_food_joint" value="<?php if($pdata != NULL){ echo $general->general_food_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Clothing</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right general1_1 numcomma" name="general_clothing_1" value="<?php if($pdata != NULL){ echo $general->general_clothing_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right general2_2 numcomma" name="general_clothing_2" value="<?php if($pdata != NULL){ echo $general->general_clothing_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right generaljoint_joint numcomma" name="general_clothing_joint" value="<?php if($pdata != NULL){ echo $general->general_clothing_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Personal Goods <span style="font-weight: normal;">(e.g. toiletries)</span></td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right general1_1 numcomma" name="general_personal_1" value="<?php if($pdata != NULL){ echo $general->general_personal_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right general2_2 numcomma" name="general_personal_2" value="<?php if($pdata != NULL){ echo $general->general_personal_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right generaljoint_joint numcomma" name="general_personal_joint" value="<?php if($pdata != NULL){ echo $general->general_personal_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Mobile Phone</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right general1_1 numcomma" name="general_mobile_1" value="<?php if($pdata != NULL){ echo $general->general_mobile_1; } ?>" placeholder="Type amount here">
                      <d1iv class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right general2_2 numcomma" name="general_mobile_2" value="<?php if($pdata != NULL){ echo $general->general_mobile_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right generaljoint_joint numcomma" name="general_mobile_joint" value="<?php if($pdata != NULL){ echo $general->general_mobile_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Household Goods <span style="font-weight: normal;">(e.g. furniture)</span></td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right general1_1 numcomma" name="general_household_1" value="<?php if($pdata != NULL){ echo $general->general_household_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right general2_2 numcomma" name="general_household_2" value="<?php if($pdata != NULL){ echo $general->general_household_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right generaljoint_joint numcomma" name="general_household_joint" value="<?php if($pdata != NULL){ echo $general->general_household_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Repairs</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right general1_1 numcomma" name="general_repair_1" value="<?php if($pdata != NULL){ echo $general->general_repair_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>                      
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right general2_2 numcomma" name="general_repair_2" value="<?php if($pdata != NULL){ echo $general->general_repair_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right generaljoint_joint numcomma" name="general_repair_joint" value="<?php if($pdata != NULL){ echo $general->general_repair_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>School / Child Minding Fees</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right general1_1 numcomma" name="general_schoolfees_1" value="<?php if($pdata != NULL){ echo $general->general_schoolfees_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right general2_2 numcomma" name="general_schoolfees_2" value="<?php if($pdata != NULL){ echo $general->general_schoolfees_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right generaljoint_joint numcomma" name="general_schoolfees_joint" value="<?php if($pdata != NULL){ echo $general->general_schoolfees_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Entertainment / Recreation</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right general1_1 numcomma" name="general_entertainment_1" value="<?php if($pdata != NULL){ echo $general->general_entertainment_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right general2_2 numcomma" name="general_entertainment_2" value="<?php if($pdata != NULL){ echo $general->general_entertainment_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right generaljoint_joint numcomma" name="general_entertainment_joint" value="<?php if($pdata != NULL){ echo $general->general_entertainment_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Alcohol / Tobacco</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right general1_1 numcomma" name="general_alcohol_1" value="<?php if($pdata != NULL){ echo $general->general_alcohol_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right general2_2 numcomma" name="general_alcohol_2" value="<?php if($pdata != NULL){ echo $general->general_alcohol_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right generaljoint_joint numcomma" name="general_alcohol_joint" value="<?php if($pdata != NULL){ echo $general->general_alcohol_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Holidays</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right general1_1 numcomma" name="general_holidays_1" value="<?php if($pdata != NULL){ echo $general->general_holidays_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right general2_2 numcomma" name="general_holidays_2" value="<?php if($pdata != NULL){ echo $general->general_holidays_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right generaljoint_joint numcomma" name="general_holidays_joint" value="<?php if($pdata != NULL){ echo $general->general_holidays_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Other</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right general1_1 numcomma" name="general_other_1" value="<?php if($pdata != NULL){ echo $general->general_other_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right general2_2 numcomma" name="general_other_2" value="<?php if($pdata != NULL){ echo $general->general_other_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right generaljoint_joint numcomma" name="general_other_joint" value="<?php if($pdata != NULL){ echo $general->general_other_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr style="border: 2px solid #000000;">
                  <td>General Living Costs Total</td>
                  <td style="font-weight: bold;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>                        
                      <input id="total_general1_1" type="text" class="form-control text-right" name="general_totalbill_1" value="<?php if($pdata != NULL){ echo $general->general_totalbill_1; } ?>" placeholder="Total here" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td style="font-weight: bold;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>                        
                      <input id="total_general2_2" type="text" class="form-control text-right" name="general_totalbill_2" value="<?php if($pdata != NULL){ echo $general->general_totalbill_2; } ?>" placeholder="Total here" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td style="font-weight: bold;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>                        
                      <input id="total_generaljoint_joint" type="text" class="form-control text-right" name="general_totalbill_joint" value="<?php if($pdata != NULL){ echo $general->general_totalbill_joint; } ?>" placeholder="Total here" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>
              </tbody>
            </table> 
            <!--===== GENERAL LIVING COSTS TABLE ENDS HERE=====-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 class="marTP-30">Transport</h6>

            <!--===== TRANSPORTS TABLE STARTS HERE=====-->
            <table class="table tab-child">
              <thead>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <?php if($ftype){ ?><th scope="col">Client 2</th>
                <th scope="col">Joint</th><?php } ?>
              </thead>
              <tbody class="table-bordered">
                <?php if($pdata != NULL){ $transport = json_decode($pdata->transport, 0); } ?>
                <tr>
                  <td>Fuel</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right transport1_1 numcomma" name="transport_fuel_1" value="<?php if($pdata != NULL){ echo $transport->transport_fuel_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right transport2_2 numcomma" name="transport_fuel_2" value="<?php if($pdata != NULL){ echo $transport->transport_fuel_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right transportjoint_joint numcomma" name="transport_fuel_joint" value="<?php if($pdata != NULL){ echo $transport->transport_fuel_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Road Tax</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right transport1_1 numcomma" name="transport_roadtax_1" value="<?php if($pdata != NULL){ echo $transport->transport_roadtax_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right transport2_2 numcomma" name="transport_roadtax_2" value="<?php if($pdata != NULL){ echo $transport->transport_roadtax_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right transportjoint_joint numcomma" name="transport_roadtax_joint" value="<?php if($pdata != NULL){ echo $transport->transport_roadtax_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Insurance</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right transport1_1 numcomma" name="transport_insurance_1" value="<?php if($pdata != NULL){ echo $transport->transport_insurance_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right transport2_2 numcomma" name="transport_insurance_2" value="<?php if($pdata != NULL){ echo $transport->transport_insurance_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right transportjoint_joint numcomma" name="transport_insurance_joint" value="<?php if($pdata != NULL){ echo $transport->transport_insurance_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Servicing</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right transport1_1 numcomma" name="transport_servicing_1" value="<?php if($pdata != NULL){ echo $transport->transport_servicing_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right transport2_2 numcomma" name="transport_servicing_2" value="<?php if($pdata != NULL){ echo $transport->transport_servicing_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right transportjoint_joint numcomma" name="transport_servicing_joint" value="<?php if($pdata != NULL){ echo $transport->transport_servicing_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Parking</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right transport1_1 numcomma" name="transport_parking_1" value="<?php if($pdata != NULL){ echo $transport->transport_parking_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right transport2_2 numcomma" name="transport_parking_2" value="<?php if($pdata != NULL){ echo $transport->transport_parking_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>                    
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right transportjoint_joint numcomma" name="transport_parking_joint" value="<?php if($pdata != NULL){ echo $transport->transport_parking_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Fares <span style="font-weight: normal;">(e.g. travel card)</span></td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right transport1_1 numcomma" name="transport_fare_1" value="<?php if($pdata != NULL){ echo $transport->transport_fare_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right transport2_2 numcomma" name="transport_fare_2" value="<?php if($pdata != NULL){ echo $transport->transport_fare_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right transportjoint_joint numcomma" name="transport_fare_joint" value="<?php if($pdata != NULL){ echo $transport->transport_fare_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Other</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right transport1_1 numcomma" name="transport_other_1" value="<?php if($pdata != NULL){ echo $transport->transport_other_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right transport2_2 numcomma" name="transport_other_2" value="<?php if($pdata != NULL){ echo $transport->transport_other_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right transportjoint_joint numcomma" name="transport_other_joint" value="<?php if($pdata != NULL){ echo $transport->transport_other_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr style="border: 2px solid #000000;">
                  <td>Transport Total</td>
                  <td style="font-weight: bold;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>                        
                      <input id="total_transport1_1" type="text" class="form-control text-right" name="transport_total_1" value="<?php if($pdata != NULL){ echo $transport->transport_total_1; } ?>" placeholder="Total here" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td style="font-weight: bold;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>                        
                      <input id="total_transport2_2" type="text" class="form-control text-right" name="transport_total_2" value="<?php if($pdata != NULL){ echo $transport->transport_total_2; } ?>" placeholder="Total here" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td style="font-weight: bold;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>                        
                      <input id="total_transportjoint_joint" type="text" class="form-control text-right" name="transport_total_joint" value="<?php if($pdata != NULL){ echo $transport->transport_total_joint; } ?>" placeholder="Total here" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>
              </tbody>
            </table> 
            <!--===== /TRANSPORTS TABLE ENDS HERE=====-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 class="marTP-30">Investments & Insurance</h6>

            <!--===== INVESTMENTS / INSURANCE TABLE STARTS HERE=====-->
            <table class="table tab-child">
              <thead>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <?php if($ftype){ ?><th scope="col">Client 2</th>
                <th scope="col">Joint</th><?php } ?>
              </thead>
              <tbody class="table-bordered">
              <?php if($pdata != NULL){ $invest = json_decode($pdata->investments, 0); } ?>
                <tr>
                  <td>Private Pensions</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right investment1_1 numcomma" name="investment_private_1" value="<?php if($pdata != NULL){ echo $invest->investment_private_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right investment2_2 numcomma" name="investment_private_2" value="<?php if($pdata != NULL){ echo $invest->investment_private_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right investmentjoint_joint numcomma" name="investment_private_joint" value="<?php if($pdata != NULL){ echo $invest->investment_private_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Insurances <span style="font-weight: normal;">(e.g. home, life, pet, travel)</span></td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right investment1_1 numcomma" name="investment_insurance_1" value="<?php if($pdata != NULL){ echo $invest->investment_insurance_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right investment2_2 numcomma" name="investment_insurance_2" value="<?php if($pdata != NULL){ echo $invest->investment_insurance_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right investmentjoint_joint numcomma" name="investment_insurance_joint" value="<?php if($pdata != NULL){ echo $invest->investment_insurance_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Savings / Investment</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right investment1_1 numcomma" name="investment_saving_1" value="<?php if($pdata != NULL){ echo $invest->investment_saving_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right investment2_2 numcomma" name="investment_saving_2" value="<?php if($pdata != NULL){ echo $invest->investment_saving_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right investmentjoint_joint numcomma" name="investment_saving_joint" value="<?php if($pdata != NULL){ echo $invest->investment_saving_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr style="border: 2px solid #000000;">
                  <td>Investments & Ins Total</td>
                  <td style="font-weight: bold;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>                        
                      <input id="total_investment1_1" type="text" class="form-control text-right" name="investment_total_1" value="<?php if($pdata != NULL){ echo $invest->investment_total_1; } ?>" placeholder="Total here" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td style="font-weight: bold;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>                        
                      <input id="total_investment2_2" type="text" class="form-control text-right" name="investment_total_2" value="<?php if($pdata != NULL){ echo $invest->investment_total_2; } ?>" placeholder="Total here" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td style="font-weight: bold;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>                        
                      <input id="total_investmentjoint_joint" type="text" class="form-control text-right" name="investment_total_joint" value="<?php if($pdata != NULL){ echo $invest->investment_total_joint; } ?>" placeholder="Total here" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>
                    <?php } ?>
                  </td>
                </tr>
              </tbody>
            </table> 
            <!--===== INVESTMENTS / INSURANCE TABLE ENDS HERE=====-->

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6 class="marTP-30">Other Costs</h6>

            <!--===== OTHER COSTS TABLE STARTS HERE=====-->
            <table class="table tab-child">
              <thead>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <?php if($ftype){ ?><th scope="col">Client 2</th>
                <th scope="col">Joint</th><?php } ?>
              </thead>
              <tbody class="table-bordered">
              <?php if($pdata != NULL){ $other = json_decode($pdata->other_costs, 0); } ?>
                <tr>
                  <td style="padding:0px;">
                    <input type="text" class="form-control" placeholder="Type your text here" name="other_text1_text" value="<?php if($pdata != NULL){ echo $other->other_text1_text; } ?>" style="padding:1rem .75rem;text-align: right;">
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right other1_1 numcomma" name="other_text1_1" value="<?php if($pdata != NULL){ echo $other->other_text1_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right other2_2 numcomma" name="other_text1_2" value="<?php if($pdata != NULL){ echo $other->other_text1_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right otherjoint_joint numcomma" name="other_text1_joint" value="<?php if($pdata != NULL){ echo $other->other_text1_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td style="padding:0px;">
                    <input type="text" class="form-control" placeholder="Type your text here" name="other_text2_text" value="<?php if($pdata != NULL){ echo $other->other_text2_text; } ?>" style="padding:1rem .75rem;text-align: right;">
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right other1_1 numcomma" name="other_text2_1" value="<?php if($pdata != NULL){ echo $other->other_text2_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right other2_2 numcomma" name="other_text2_2" value="<?php if($pdata != NULL){ echo $other->other_text2_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right otherjoint_joint numcomma" name="other_text2_joint" value="<?php if($pdata != NULL){ echo $other->other_text2_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td style="padding:0px;">
                    <input type="text" class="form-control" placeholder="Type your text here" name="other_text3_text" value="<?php if($pdata != NULL){ echo $other->other_text3_text; } ?>" style="padding:1rem .75rem;text-align: right;">
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right other1_1 numcomma" name="other_text3_1" value="<?php if($pdata != NULL){ echo $other->other_text3_1; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right other2_2 numcomma" name="other_text3_2" value="<?php if($pdata != NULL){ echo $other->other_text3_2; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right otherjoint_joint numcomma" name="other_text3_joint" value="<?php if($pdata != NULL){ echo $other->other_text3_joint; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr style="border: 2px solid #000000;">
                  <td>Other Costs Total</td>
                  <td style="font-weight: bold;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>                        
                      <input id="total_other1_1" type="text" class="form-control text-right" name="other_total_1" value="<?php if($pdata != NULL){ echo $other->other_total_1; } ?>" placeholder="Total here" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td style="font-weight: bold;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>                        
                      <input id="total_other2_2" type="text" class="form-control text-right" name="other_total_2" value="<?php if($pdata != NULL){ echo $other->other_total_2; } ?>" placeholder="Total here" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td style="font-weight: bold;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>                        
                      <input id="total_otherjoint_joint" type="text" class="form-control text-right" name="other_total_joint" value="<?php if($pdata != NULL){ echo $other->other_total_joint; } ?>" placeholder="Total here" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>
              </tbody>
            </table> 
            <!--===== /OTHER COSTS TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">8.2 Expenditure Summary</h5>

            <!--========SUB-SECTION SUB-HEADING==========-->
            <h6>Household Costs Summary</h6>

            <!--===== HOUSEHOLD COSTS SUMMARY TABLE STARTS HERE=====-->
            <table class="table tab-child">
              <thead>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <?php if($ftype){ ?><th scope="col">Client 2</th>
                <th scope="col">Joint</th><?php } ?>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td>Total Monthly Financial<br/>Commitments <span style="font-weight: normal;">(from Section 5.8</span></td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="padding: .935rem .75rem">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right total_exp_1 numcomma" value="<?php if($this->client->getSection5_8_1($last) != NULL){echo $this->client->getSection5_8_1($last)->client_finsummary_1;} ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="padding: .935rem .75rem">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="padding: .935rem .75rem">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right total_exp_2 numcomma" value="<?php if($this->client->getSection5_8_2($last) != NULL){echo $this->client->getSection5_8_2($last)->client_finsummary_2;} ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="padding: .935rem .75rem">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="padding: .935rem .75rem">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right total_exp_joint numcomma" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="padding: .935rem .75rem">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Utility & Other Bills Total</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input id="sec2_utility1_1" type="text" class="form-control text-right total_exp_1 numcomma" value="<?php if($pdata != NULL){ echo $this->client->removeComma($utility->utility_totalbill_1); } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input id="sec2_utility2_2" type="text" class="form-control text-right total_exp_2 numcomma" value="<?php if($pdata != NULL){ echo $this->client->removeComma($utility->utility_totalbill_2); } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input id="sec2_utilityjoint_joint" type="text" class="form-control text-right total_exp_joint numcomma" value="<?php if($pdata != NULL){ echo $this->client->removeComma($utility->utility_totalbill_joint); } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>General Living Costs Total</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input id="sec2_general1_1" type="text" class="form-control text-right total_exp_1 numcomma" value="<?php if($pdata != NULL){ echo $this->client->removeComma($general->general_totalbill_1); } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input id="sec2_general2_2" type="text" class="form-control text-right total_exp_2 numcomma" value="<?php if($pdata != NULL){ echo $this->client->removeComma($general->general_totalbill_2); } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input id="sec2_generaljoint_joint" type="text" class="form-control text-right total_exp_joint numcomma" value="<?php if($pdata != NULL){ echo $this->client->removeComma($general->general_totalbill_joint); } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Transport Total</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input id="sec2_transport1_1" type="text" class="form-control text-right total_exp_1 numcomma" value="<?php if($pdata != NULL){ echo $this->client->removeComma($transport->transport_total_1); } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input id="sec2_transport2_2" type="text" class="form-control text-right total_exp_2 numcomma" value="<?php if($pdata != NULL){ echo $this->client->removeComma($transport->transport_total_2); } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input id="sec2_transportjoint_joint" type="text" class="form-control text-right total_exp_joint numcomma" value="<?php if($pdata != NULL){ echo $this->client->removeComma($transport->transport_total_joint); } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Investments & Ins Total</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input id="sec2_investment1_1" type="text" class="form-control text-right total_exp_1 numcomma" value="<?php if($pdata != NULL){ echo $this->client->removeComma($invest->investment_total_1); } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input id="sec2_investment2_2" type="text" class="form-control text-right total_exp_2 numcomma" value="<?php if($pdata != NULL){ echo $this->client->removeComma($invest->investment_total_2); } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input id="sec2_investmentjoint_joint" type="text" class="form-control text-right total_exp_joint numcomma" value="<?php if($pdata != NULL){ echo $this->client->removeComma($invest->investment_total_joint); } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <tr>
                  <td>Other Costs Total</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input id="sec2_other1_1" type="text" class="form-control text-right total_exp_1 numcomma" value="<?php if($pdata != NULL){ echo $this->client->removeComma($other->other_total_1); } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input id="sec2_other2_2" type="text" class="form-control text-right total_exp_2 numcomma" value="<?php if($pdata != NULL){ echo $this->client->removeComma($other->other_total_2); } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input id="sec2_otherjoint_joint" type="text" class="form-control text-right total_exp_joint numcomma" value="<?php if($pdata != NULL){ echo $this->client->removeComma($other->other_total_joint); } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>

                <?php
                  if($pdata != NULL){

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

                    if($this->client->getSection5_8_1($last) == NULL){
                      $sec5_8_1 = 0;
                    }
                    else{
                      $sec5_8_1 = $this->client->getSection5_8_1($last)->client_finsummary_1;
                    }

                    if($this->client->getSection5_8_2($last) == NULL){
                      $sec5_8_2 = 0;
                    }
                    else{
                      $sec5_8_2 = $this->client->getSection5_8_2($last)->client_finsummary_2;
                    }

                    $household_total1 = $sec5_8_1 + $util_bill1 + $gen_bill1 + $t_bill1 + $i_bill1 + $o_bill1;

                    $household_total2 = $sec5_8_2 + $util_bill2 + $gen_bill2 + $t_bill2 + $i_bill2 + $o_bill2;

                    $household_total_joint = $util_billjoint + $gen_billjoint + $t_billjoint + $i_billjoint + $o_billjoint;
                  }
                ?>

                <tr style="border: 2px solid #000000;">
                  <td>Household Costs Total</td>
                  <td style="font-weight: bold;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>                        
                      <input id="total_exp_1" type="text" class="form-control text-right" value="<?php if($pdata != NULL){echo $household_total1;} ?>" placeholder="Total here" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php if($ftype){ ?>
                  <td style="font-weight: bold;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>                        
                      <input id="total_exp_2" type="text" class="form-control text-right" value="<?php if($pdata != NULL){echo $household_total2;} ?>" placeholder="Total here" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <td style="font-weight: bold;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>                        
                      <input id="total_exp_joint" type="text" class="form-control text-right" value="<?php if($pdata != NULL){echo $household_total_joint;} ?>" placeholder="Total here" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>
                  </td>
                  <?php } ?>
                </tr>
              </tbody>
            </table> 
            <!--===== /HOUSEHOLD COSTS SUMMARY TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">8.3 Overall Summary</h5>

            <!--===== 8.3 OVERALL SUMMARY TABLE STARTS HERE=====-->
            <table class="table">
              <tbody class="table-bordered">
                <tr>
                  <td colspan="1">
                    Total Net Household Income 
                    <span style="font-weight: normal;">(from Section 4.3)</span>
                  </td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div> 
                      </div>                        
                      <input id="sec4_3_total" type="text" class="form-control text-right" value="<?php echo $this->client->getTotalSection4_3($last, $lineCheck); ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td colspan="1">Less Household Costs Total</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right" name="less_household_costs" value="<?php if($pdata != NULL){ echo $pdata->less_household_costs; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr style="border: 2px solid #000000;">
                 <td>Disposable Income</td>
                  <td style="font-weight: bold;">
                    <div class="input-group">
                       <div class="input-group-prepend">
                         <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right" name="disposable_income" placeholder="Disposable Income" value="<?php if($pdata != NULL){ echo $pdata->disposable_income; } ?>" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <!--===== /8.3 OVERALL SUMMARY TABLE ENDS HERE=====-->

            <!--========FORM SUB-SECTION HEADING==========-->
            <h5 class="marTP-30">8.4 Budget</h5>

            <!--===== 8.4 BUDGET TABLE STARTS HERE=====-->

            <!--TABLE 1 STARTS HERE-->
            <table class="table">
              <thead>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col">Client 1</th>
                <?php if($ftype){ ?><th scope="col" class="hide-col">Client 2</th><?php } ?>
              </thead>
              <tbody class="table-bordered">
              <?php if($pdata != NULL){ $budget = json_decode($pdata->budget, 0); } ?>
                <tr>
                  <td class="text-center">Do you expect your regular outgoings to change significantly in the foreseeable future?</td>
                  <td class="text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL){ if(isset($budget->budget_future_1) && $budget->budget_future_1 == "Yes"){echo "checked";} } ?> style="margin-left: 0.25rem;" type="checkbox" name="budget_future_1" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL){ if(isset($budget->budget_future_1) && $budget->budget_future_1 == "No"){echo "checked";} } ?> style="margin-left: 0.25rem;" type="checkbox" name="budget_future_1" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <?php if($ftype){ ?>
                  <td class="hide-col text-center">
                    <center>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">Yes</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL){ if(isset($budget->budget_future_2) && $budget->budget_future_2 == "Yes"){echo "checked";} } ?> style="margin-left: 0.25rem;" type="checkbox" name="budget_future_2" value="Yes" id="">
                      </div>
                      <div class="col-md-2 date-input-box" style="padding: 0;">
                        <label class="form-check-label" for="">No</label>
                        <input class="form-check-input checkSelection" <?php if($pdata != NULL){ if(isset($budget->budget_future_2) && $budget->budget_future_2 == "No"){echo "checked";} } ?> style="margin-left: 0.25rem;" type="checkbox" name="budget_future_2" value="No" id="">
                      </div>
                    </center>
                  </td>
                  <?php } ?>
                </tr>
                
                <tr>
                  <td>If Yes, please provide details</td>
                  <td>
                  <textarea style="text-transform: inherit!important;" class="form-control" id="" name="budget_detail_1" rows="2" placeholder="Type here..."><?php if($pdata != NULL){ echo $budget->budget_detail_1; } ?></textarea></td>
                  <?php if($ftype){ ?>
                  <td>
                    <textarea style="text-transform: inherit!important;" class="form-control" id="" name="budget_detail_2" rows="2" placeholder="Type here..."><?php if($pdata != NULL){ echo $budget->budget_detail_2; } ?></textarea>
                  </td>
                  <?php } ?>
                </tr>
              </tbody>
            </table><!--/TABLE 1 ENDS HERE-->

            <!--TABLE 2 STARTS HERE-->
            <table class="financial-table" style="margin-top: 10px;">
              <tbody class="table-bordered">
                <tr>
                  <td style="width: 67%;">What is the maximum monthly payment you are prepared to set to meet<br/>your mortgage needs?</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right budget numcomma" name="mortgage_needs" value="<?php if($pdata != NULL){ echo $budget->mortgage_needs; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td style="width: 67%;">What is the maximum monthly payment you are prepared to set aside<br/>to meet your protection needs?</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right budget numcomma" name="protection_needs" value="<?php if($pdata != NULL){ echo $budget->protection_needs; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td style="width: 67%;">What is the maximum monthly payment you are prepared to set aside <br/>to meet your home insurance needs?</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right budget numcomma" name="insurance_needs" value="<?php if($pdata != NULL){ echo $budget->insurance_needs; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td style="width: 67%;">What is the maximum monthly payment you are prepared to set aside<br/>to meet your accident, sickness and unemployment needs?</td>
                  <td>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">£</div>
                      </div>                        
                      <input type="text" class="form-control text-right budget numcomma" name="unemployed_needs" value="<?php if($pdata != NULL){ echo $budget->unemployed_needs; } ?>" placeholder="Type amount here">
                      <div class="input-group-prepend">
                        <div class="input-group-text">p.m.</div>
                      </div>
                    </div>
                  </td>
                </tr>
                
                <?php
                $total_budget8_4 = 0;

                if($pdata != NULL){
                  $total_budget8_4 = $budget->mortgage_needs + $budget->protection_needs + $budget->insurance_needs + $budget->unemployed_needs;
                }
                ?>
                <tr style="border:2px solid #000000;">
                  <td style="width: 67%;">Total Budget</td>
                  <td style="font-weight: bold;">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">£</div>
                      </div>                        
                      <input id="total_budget" type="text" class="form-control text-right" value="<?php echo $total_budget8_4; ?>" placeholder="Total Budget" style="font-weight: bold;">
                      <div class="input-group-prepend">
                        <div class="input-group-text" style="font-weight: bold;">p.m.</div>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table><!--/TABLE 2 ENDS HERE-->

            <!--===== 8.4 BUDGET TABLE ENDS HERE=====-->

            <!--===== ADDITIONAL NOTES TABLE STARTS HERE=====-->
            <table class="table marTP-30">
              <thead class="">
                <tr>
                  <th>Additional Notes</th>
                </tr>
              </thead>
              <tbody class="table-bordered">
                <tr>
                  <td style="padding-right:0px;"><textarea style="text-transform: inherit!important;" class="form-control" id="" name="client_additionalnotes" rows="6" placeholder="Type additional notes here..."><?php if($pdata != NULL){ echo $pdata->client_additionalnotes; } ?></textarea></td>
                </tr>
              </tbody>
            </table>
            <!--===== /ADDITIONAL NOTES TABLE ENDS HERE=====-->

            <!--=====FORM NEXT/SAVE BUTTONS STARTS HERE=====-->
            <div class="" style="text-align: center;margin:20px 0px;">

              <!--Back button-->
              <button id="saveback" type="button" class="btn btn-primary" style="cursor:pointer;">Save and Back</button>
              <!--/Back button-->

              <button type="submit" class="btn btn-primary" style="cursor:pointer;">Save and Next</button>
              <!-- <button type="submit" class="btn btn-primary" style="cursor:pointer;">Save</button> -->
            </div>
            <!--=====/FORM NEXT/SAVE BUTTONS ENDS HERE=====-->              
          </form>
          <!--=======/FORM ENDS HERE===========-->
        </div><!--/.col-lg-12-->
      </div><!--/.row-->
    </div>
    <!-- /.container-fluid-->
  </div>
    <!-- /.content-wrapper-->
<script>
     var isSingle = false;
     <?php if(!$ftype){ ?>
     isSingle = true;
     <?php } ?>
     function addZeroes(num){
      if(num != "NaN"){
        var value = parseFloat(num);
        var res = num.split(".");
        if(res.length == 1 || (res[1].length < 3)) {
          value = value.toFixed(2);
        }
        var parts = (+value).toFixed(2).split(".");
        var nam = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (+parts[1] ? "." + parts[1] : ".00");
        return nam;
      }
      else{
        return "";
      }
    }

    function numberWithCommas(x) {
        var parts = x.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return parts.join(".");
    }

    //Remove comma
    function removeComma(str){
      return str.replace (/,/g, "");
    }

    $('.checkSelection').on('change', function() {
      $('input[name="' + this.name + '"]').not(this).prop('checked', false);
    });

    var disIncome = parseFloat(removeComma($('#sec4_3_total').val())) - parseFloat(removeComma($('input[name="less_household_costs"]').val()));
    $('input[name="disposable_income"]').val(addZeroes(disIncome+""));

    //Adding functionality
    $('.utility1_1,.utility2_2,.utilityjoint_joint,.general1_1,.general2_2,.generaljoint_joint,.transport1_1,.transport2_2,.transportjoint_joint,.investment1_1,.investment2_2,.investmentjoint_joint,.other1_1,.other2_2,.otherjoint_joint').unbind().on('keyup', function () {
      
      var sectionName = $(this).attr('class').split(" ")[2];
      var sum = 0, expSum = 0;
      $(this).val(function(index, value) {
          value = value.replace(/,/g,'');
          return numberWithCommas(value);
      });
      $('.'+sectionName).each(function() {
          sum += parseFloat(removeComma($(this).val())) || 0;
      });
      
      $('#total_'+sectionName).val(addZeroes(sum+""));
      $('#sec2_'+sectionName).val(addZeroes(sum+""));

      $('.total_exp_'+sectionName.split('_')[1]).each(function(){
        expSum += parseFloat(removeComma($(this).val())) || 0;
      });

      $('#total_exp_'+sectionName.split('_')[1]).val(addZeroes(expSum+""));
      if(isSingle){
        var lessHouseHold = ($('#total_exp_1').val() == "" ? 0 : parseFloat(removeComma($('#total_exp_1').val())));
      }
      else{
        var lessHouseHold = ($('#total_exp_1').val() == "" ? 0 : parseFloat(removeComma($('#total_exp_1').val()))) + ($('#total_exp_2').val() == "" ? 0 : parseFloat(removeComma($('#total_exp_2').val()))) + ($('#total_exp_joint').val() == "" ? 0 : parseFloat(removeComma($('#total_exp_joint').val())));
      }
      
      $('input[name="less_household_costs"]').val(addZeroes(lessHouseHold+""));

      var disIncome = parseFloat(removeComma($('#sec4_3_total').val())) - parseFloat(removeComma($('input[name="less_household_costs"]').val()));
      $('input[name="disposable_income"]').val(addZeroes(disIncome+""));
     
    });


    $('.budget').on('keyup', function () {
      var sectionName = $(this).attr('class').split(" ")[2];
      var sum = 0;
      $(this).val(function(index, value) {
          value = value.replace(/,/g,'');
          return numberWithCommas(value);
      });
      $('.'+sectionName).each(function() {
          sum += parseFloat(removeComma($(this).val())) || 0;
      });
      
      $('#total_'+sectionName).val(addZeroes(sum+""));
    });

    $('#clientform').submit(function(event) {
      event.preventDefault();
    }).validate({
      rules:{

      },
      submitHandler: function(form) {
        var utilArr = [], utilObj = {}, genArr = [], genObj = {}, tArr = [], tObj = {}, investObj = {}, investArr = [], otherObj = {}, otherArr = [], budgetObj = {};
        utilArr = [
          "gas",
          "electric",
          "water",
          "tel",
          "digital",
          "tv",
          "council",
          "grouprent",
          "service",
          "other",
          "totalbill"
        ];

        genArr = ["food", "clothing", "personal", "mobile", "household", "repair", "schoolfees", "entertainment", "alcohol", "holidays", "other", "totalbill"];
        tArr = ["fuel", "roadtax", "insurance", "servicing", "parking", "fare", "other", "total"];
        investArr = ["private", "insurance", "saving", "total"];
        otherArr = ["text1", "text2", "text3", "total"];


        //Creating utility json
        for(var i = 0; i < utilArr.length; i++){
          utilObj["utility_"+utilArr[i]+"_1"] = $("input[name='utility_"+utilArr[i]+"_1']").val();
          utilObj["utility_"+utilArr[i]+"_2"] = $("input[name='utility_"+utilArr[i]+"_2']").val();
          utilObj["utility_"+utilArr[i]+"_joint"] = $("input[name='utility_"+utilArr[i]+"_joint']").val();
        }

        //Creating General json
        for(var i = 0; i < genArr.length; i++){
          genObj["general_"+genArr[i]+"_1"] = $("input[name='general_"+genArr[i]+"_1']").val();
          genObj["general_"+genArr[i]+"_2"] = $("input[name='general_"+genArr[i]+"_2']").val();
          genObj["general_"+genArr[i]+"_joint"] = $("input[name='general_"+genArr[i]+"_joint']").val();
        }

        //Creating Transport json
        for(var i = 0; i < tArr.length; i++){
          tObj["transport_"+tArr[i]+"_1"] = $("input[name='transport_"+tArr[i]+"_1']").val();
          tObj["transport_"+tArr[i]+"_2"] = $("input[name='transport_"+tArr[i]+"_2']").val();
          tObj["transport_"+tArr[i]+"_joint"] = $("input[name='transport_"+tArr[i]+"_joint']").val();
        }

        //Creating Investment json
        for(var i = 0; i < investArr.length; i++){
          investObj["investment_"+investArr[i]+"_1"] = $("input[name='investment_"+investArr[i]+"_1']").val();
          investObj["investment_"+investArr[i]+"_2"] = $("input[name='investment_"+investArr[i]+"_2']").val();
          investObj["investment_"+investArr[i]+"_joint"] = $("input[name='investment_"+investArr[i]+"_joint']").val();
        }

        //Creating Other json
        for(var i = 0; i < otherArr.length; i++){
          if(i < 3){
            otherObj["other_"+otherArr[i]+"_text"] = $("input[name='other_"+otherArr[i]+"_text']").val();
          }
          otherObj["other_"+otherArr[i]+"_1"] = $("input[name='other_"+otherArr[i]+"_1']").val();
          otherObj["other_"+otherArr[i]+"_2"] = $("input[name='other_"+otherArr[i]+"_2']").val();
          otherObj["other_"+otherArr[i]+"_joint"] = $("input[name='other_"+otherArr[i]+"_joint']").val();
        }

        //Budget
        budgetObj["budget_future_1"] = $('input[name="budget_future_1"]:checked').val();
        budgetObj["budget_future_2"] = $('input[name="budget_future_2"]:checked').val();
        budgetObj["budget_detail_1"] = $('textarea[name="budget_detail_1"]').val();
        budgetObj["budget_detail_2"] = $('textarea[name="budget_detail_2"]').val();
        budgetObj["mortgage_needs"] = $('input[name="mortgage_needs"]').val();
        budgetObj["protection_needs"] = $('input[name="protection_needs"]').val();
        budgetObj["insurance_needs"] = $('input[name="insurance_needs"]').val();
        budgetObj["unemployed_needs"] = $('input[name="unemployed_needs"]').val();

        var formData = $('#clientform').serialize();

        formData = formData + "&utility="+JSON.stringify(utilObj)+"&general_costs="+JSON.stringify(genObj)+"&transport="+JSON.stringify(tObj)+"&investments="+JSON.stringify(investObj)+"&other_costs="+JSON.stringify(otherObj)+"&budget="+JSON.stringify(budgetObj);

        $.ajax({
          url:'<?php echo base_url(); ?>add/expbudget?form_id=<?php echo $last; ?>',
          type:'POST',
          data: formData,
          dataType: 'json',
          success:function(as){

              if(as.status){
                if(as.action == 'create'){
                  location.href="<?php echo base_url(); ?>admin/credit-history/"+as.data;
                }
                else if(as.action == 'edit'){
                  location.href="<?php echo base_url(); ?>admin/credit-history/"+as.data;
                }
              }
              else{
                alert(as.message);
              }
          }
        });

      }
    });

    $('#saveback').click(function(){

        var utilArr = [], utilObj = {}, genArr = [], genObj = {}, tArr = [], tObj = {}, investObj = {}, investArr = [], otherObj = {}, otherArr = [], budgetObj = {};
        utilArr = [
          "gas",
          "electric",
          "water",
          "tel",
          "digital",
          "tv",
          "council",
          "grouprent",
          "service",
          "other",
          "totalbill"
        ];

        genArr = ["food", "clothing", "personal", "mobile", "household", "repair", "schoolfees", "entertainment", "alcohol", "holidays", "other", "totalbill"];
        tArr = ["fuel", "roadtax", "insurance", "servicing", "parking", "fare", "other", "total"];
        investArr = ["private", "insurance", "saving", "total"];
        otherArr = ["text1", "text2", "text3", "total"];


        //Creating utility json
        for(var i = 0; i < utilArr.length; i++){
          utilObj["utility_"+utilArr[i]+"_1"] = $("input[name='utility_"+utilArr[i]+"_1']").val();
          utilObj["utility_"+utilArr[i]+"_2"] = $("input[name='utility_"+utilArr[i]+"_2']").val();
          utilObj["utility_"+utilArr[i]+"_joint"] = $("input[name='utility_"+utilArr[i]+"_joint']").val();
        }

        //Creating General json
        for(var i = 0; i < genArr.length; i++){
          genObj["general_"+genArr[i]+"_1"] = $("input[name='general_"+genArr[i]+"_1']").val();
          genObj["general_"+genArr[i]+"_2"] = $("input[name='general_"+genArr[i]+"_2']").val();
          genObj["general_"+genArr[i]+"_joint"] = $("input[name='general_"+genArr[i]+"_joint']").val();
        }

        //Creating Transport json
        for(var i = 0; i < tArr.length; i++){
          tObj["transport_"+tArr[i]+"_1"] = $("input[name='transport_"+tArr[i]+"_1']").val();
          tObj["transport_"+tArr[i]+"_2"] = $("input[name='transport_"+tArr[i]+"_2']").val();
          tObj["transport_"+tArr[i]+"_joint"] = $("input[name='transport_"+tArr[i]+"_joint']").val();
        }

        //Creating Investment json
        for(var i = 0; i < investArr.length; i++){
          investObj["investment_"+investArr[i]+"_1"] = $("input[name='investment_"+investArr[i]+"_1']").val();
          investObj["investment_"+investArr[i]+"_2"] = $("input[name='investment_"+investArr[i]+"_2']").val();
          investObj["investment_"+investArr[i]+"_joint"] = $("input[name='investment_"+investArr[i]+"_joint']").val();
        }

        //Creating Other json
        for(var i = 0; i < otherArr.length; i++){
          if(i < 3){
            otherObj["other_"+otherArr[i]+"_text"] = $("input[name='other_"+otherArr[i]+"_text']").val();
          }
          otherObj["other_"+otherArr[i]+"_1"] = $("input[name='other_"+otherArr[i]+"_1']").val();
          otherObj["other_"+otherArr[i]+"_2"] = $("input[name='other_"+otherArr[i]+"_2']").val();
          otherObj["other_"+otherArr[i]+"_joint"] = $("input[name='other_"+otherArr[i]+"_joint']").val();
        }

        //Budget
        budgetObj["budget_future_1"] = $('input[name="budget_future_1"]:checked').val();
        budgetObj["budget_future_2"] = $('input[name="budget_future_2"]:checked').val();
        budgetObj["budget_detail_1"] = $('textarea[name="budget_detail_1"]').val();
        budgetObj["budget_detail_2"] = $('textarea[name="budget_detail_2"]').val();
        budgetObj["mortgage_needs"] = $('input[name="mortgage_needs"]').val();
        budgetObj["protection_needs"] = $('input[name="protection_needs"]').val();
        budgetObj["insurance_needs"] = $('input[name="insurance_needs"]').val();
        budgetObj["unemployed_needs"] = $('input[name="unemployed_needs"]').val();

        var formData = $('#clientform').serialize();

        formData = formData + "&utility="+JSON.stringify(utilObj)+"&general_costs="+JSON.stringify(genObj)+"&transport="+JSON.stringify(tObj)+"&investments="+JSON.stringify(investObj)+"&other_costs="+JSON.stringify(otherObj)+"&budget="+JSON.stringify(budgetObj);

        $.ajax({
          url:'<?php echo base_url(); ?>add/expbudget?form_id=<?php echo $last; ?>',
          type:'POST',
          data: formData,
          dataType: 'json',
          success:function(as){

              if(as.status){
                if(as.action == 'create'){
                  location.href="<?php echo base_url(); ?>admin/assets/"+as.data;
                }
                else if(as.action == 'edit'){
                  location.href="<?php echo base_url(); ?>admin/assets/"+as.data;
                }
              }
              else{
                alert(as.message);
              }
          }
        });

    });

</script>

