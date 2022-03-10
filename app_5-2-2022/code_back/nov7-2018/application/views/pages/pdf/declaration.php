
<style type="text/css">
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
        <h4 style="margin-bottom: 0px!important;">Section 14: Declaration</h4>

        <p style="margin-top: 10px!important; line-height: 1.05em; margin-bottom: 0px!important;">
            To be completed by all clients. 
        </p>
        <p style="margin-top: 10px!important; line-height: 1.05em; margin-bottom: 0px!important;">
           Please read this document carefully before signing.
          </p>
        <p style="margin-top: 5px!important; margin-bottom: 0px!important;">
            I confirm that I have provided this information on the understanding that it will be used in the strictest confidence and that it does not place me under any obligation to take up any recommendation that may be made.
        </p>

        <!--=====Form Starts Here=====-->
        <form id="clientform">
          
        <!-- =====/SIGNATURE TABLE 1 ENDS HERE =====-->
        <table class="tab-child" style="width: 100%; margin-top: 20px!important;">
            <thead>
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col" style="width: 40%;">Signature</th>
                <th scope="col" class="hide-col">Date</th>
              </tr>
            </thead>
            <tbody class="table-bordered">
              <?php
                  $end1 = false; $end2 = false; 
                  if($date_1 != ""){
                    $end1_data = explode("/", $date_1);
                    $end1 = true;
                  } 

                  if($date_2 != ""){
                    $end2_data = explode("/", $date_2);
                    $end2 = true;
                  } 
              ?>
              <tr>
                <td class="first-one">Client 1</td>
                <td style="padding-right:0px; height: 80px; background-color: #ffffff;">
                      
                </td>
                <td class="text-center">
                  <span><?php if($end1){echo $end1_data[0];} ?></span> <?php if($end1 && $end1_data[0] != ""){ echo "/"; } ?> <span><?php if($end1){echo $end1_data[1];} ?></span> <?php if($end1 && $end1_data[0] != ""){ echo "/"; } ?> <span><?php if($end1){echo $end1_data[2];} ?></span>
                </td>
              </tr>

              <tr>
                <td class="first-one">Client 2</td>
                <td style="padding-right:0px; height: 80px; background-color: #ffffff;"></td>
                <td class="text-center">
                  <span><?php if($end2){echo $end2_data[0];} ?></span> <?php if($end2 && $end2_data[0] != ""){ echo "/"; } ?> <span><?php if($end2){echo $end2_data[1];} ?></span> <?php if($end2 && $end2_data[0] != ""){ echo "/"; } ?> <span><?php if($end2){echo $end2_data[2];} ?></span>
                </td>
              </tr>
            </tbody>
        </table>
        <!--=====/SIGNATURE TABLE 1 ENDS HERE =====-->

        <!--========FORM SUB-SECTION HEADING==========-->
        <h5 class="" style="margin-bottom: 0px!important;">14.1 Additional Declarations</h5>  
          
        <!--========SUB-SECTION SUB-HEADING==========-->
        <h6 style="margin-bottom: 0px!important; margin-top: 0px!important;">Delete if not applicable</h6>   
  
        <p style="margin-top: 10px!important; margin-bottom: 0px!important;">I further declare that I have withheld certain details and that I am aware that this may prevent my adviser from being able to provide the best possible advice for my circumstances.</p>  

        <!--===== SIGNATURE TABLE 2 STARTS HERE =====-->
        <table class="tab-child" style="width: 100%; margin-top: 20px!important;">
          <thead>
            <tr>
              <th scope="col" style="border:0px;background-color:transparent;"></th>
              <th scope="col" style="width: 40%;">Signature</th>
              <th scope="col" class="hide-col">Date</th>
            </tr>
          </thead>
          <tbody class="table-bordered">
              <?php
                  $end1 = false; $end2 = false; 
                  if($date_3 != ""){
                    $end1_data = explode("/", $date_3);
                    $end1 = true;
                  } 

                  if($date_4 != ""){
                    $end2_data = explode("/", $date_4);
                    $end2 = true;
                  } 
              ?>
            <tr>
              <td class="first-one">Client 1</td>
              <td style="padding-right:0px;background-color: #ffffff;">
                <p style=" height: 80px;"></p>
              </td>
              <td style="padding-right:0px;background-color: #ffffff;">
                <p style=" height: 80px;">
                  <span><?php if($end1){echo $end1_data[0];} ?></span> <?php if($end1 && $end1_data[0] != ""){ echo "/"; } ?> <span><?php if($end1){echo $end1_data[1];} ?></span> <?php if($end1 && $end1_data[0] != ""){ echo "/"; } ?> <span><?php if($end1){echo $end1_data[2];} ?></span>
                </p>
              </td>
            </tr>

            <tr>
              <td class="first-one">Client 2</td>
              <td style="padding-right:0px;background-color: #ffffff;">
                <p style=" height: 80px;"></p>
              </td>
              <td style="padding-right:0px;background-color: #ffffff;">
                <p style=" height: 80px;">
                  <span><?php if($end2){echo $end2_data[0];} ?></span> <?php if($end2 && $end2_data[0] != ""){ echo "/"; } ?> <span><?php if($end2){echo $end2_data[1];} ?></span> <?php if($end2 && $end2_data[0] != ""){ echo "/"; } ?> <span><?php if($end2){echo $end2_data[2];} ?></span>
                </p>
              </td>
            </tr>
          </tbody>
        </table>
          <!--=====/SIGNATURE TABLE 2 ENDS HERE =====-->

          <p style="margin-top:15px;margin-bottom: 15px;">If you would like us to keep in touch after we have arranged your mortgage finances we shall need your permission.  Please certify your authority for us to contact you with details of mortgages and offers which we believe are likely to be of interest to you by signing the declaration below.</p>  

          <!--===== SIGNATURE TABLE 3 STARTS HERE =====-->
          <table class="tab-child" style="width: 100%; margin-top: 0px!important;">
            <thead>
              <tr>
                <th scope="col" style="border:0px;background-color:transparent;"></th>
                <th scope="col" style="width: 40%;">Signature</th>
                <th scope="col" class="hide-col">Date</th>
              </tr>
            </thead>
            <tbody class="table-bordered">
              <?php
                  $end1 = false; $end2 = false; 
                  if($date_5 != ""){
                    $end1_data = explode("/", $date_5);
                    $end1 = true;
                  } 

                  if($date_6 != ""){
                    $end2_data = explode("/", $date_6);
                    $end2 = true;
                  } 
              ?>
              <tr>
                <td class="first-one">Client 1</td>
                <td style="padding-right:0px;background-color: #ffffff;">
                <p style=" height: 80px;"></p>
              </td>
              
              <td style="padding-right:0px;background-color: #ffffff;">
                <p style=" height: 80px;">
                  <span><?php if($end1){echo $end1_data[0];} ?></span> <?php if($end1 && $end1_data[0] != ""){ echo "/"; } ?> <span><?php if($end1){echo $end1_data[1];} ?></span> <?php if($end1 && $end1_data[0] != ""){ echo "/"; } ?> <span><?php if($end1){echo $end1_data[2];} ?></span>
                </p>
              </td>
              
              </tr>

              <tr>
                <td class="first-one">Client 2</td>
                <td style="padding-right:0px;background-color: #ffffff;">
                    <p style=" height: 80px;"></p>
                </td>
                
                <td style="padding-right:0px;background-color: #ffffff;">
                   <p style=" height: 80px;">
                    <span><?php if($end2){echo $end2_data[0];} ?></span> <?php if($end2 && $end2_data[0] != ""){ echo "/"; } ?> <span><?php if($end2){echo $end2_data[1];} ?></span> <?php if($end2 && $end2_data[0] != ""){ echo "/"; } ?> <span><?php if($end2){echo $end2_data[2];} ?></span>
                   </p>
                </td>
                
              </tr>
            </tbody>
          </table>
          <!--=====/SIGNATURE TABLE 3 ENDS HERE =====-->
        </form>

       <!--  <table style="width: 100%;">
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
