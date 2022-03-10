<style type="text/css">
  @font-face {
    font-family: "mvboli";
    font-style: normal;
    src: url('<?php echo base_url(); ?>assets/font/mvboli.ttf');
  }
</style>

<div class="pdf-container">
  <div class="row">
    <h1 class="pdf-heading" style="font-family: 'mvboli'!important;">OPTIMAL FINANCIAL SERVICES LIMITED</h1>
    <h1 class="heading-large" style="margin-top: 80px;">Mortgage<br/>Questionnaire</h1>

    <!--=====Form Starts Here=====-->
    <form id="clientform">

      <!--=====Table Starts Here=====-->
      <table class="table index-table">
        <tbody class="table-bordered">
          <tr>
            <td class="first-one">Client Name(s)</td>
            <!-- <td><span>Client 1 Name</span> and <span>Client 2 Name</span></td> -->
            <td style=""><span><?php echo $client_name; ?></span></td>
          </tr>
          <tr>
            <td class="first-one">Adviser Name</td>
            <td style=""><span><?php echo $advisor_name; ?></span></td>
          </tr>
          <tr>
            <td class="first-one">Date Completed</td>
            <!-- <td><span>Date</span> / <span>Month</span> / <span>Year</span></td> -->
            <td style=""><span><?php echo $date_completed; ?></span></td> 
          </tr>
        </tbody><!--/.table-bordered-->
      </table>
      <!--=====/Table Ends Here=====-->
    </form>

    <div class="alert-box center-block" style="margin-top: 20px!important; margin-bottom: 10px!important;">
      <h5 style="margin-bottom: 0px;font-family:helvetica!important;">Adviser Note</h5>
      <p style="margin-top: .5px; padding: .5px 10px;font-size: 10pt;">Please complete all the appropriate sections.  If a section is not applicable, 
        then please strike this through and write N/A.  For the avoidance of doubt within 
        this questionnaire, and all supplementary questionnaires, N/A means not applicable.
      </p>
    </div>

    <div class="index-section center-block">          
      <h3 class="" style="margin-top:10px!important;margin-bottom: 10px!important;">Contents</h3>         
      <ul class="index-list">            
        <li>Section 1: Personal & Family Details................................................................................................................... <span class="float-right">2</span></li>            
        <li>Section 2: Employment Details............................................................................................................................ <span class="float-right">4</span></li>            
        <li>Section 3: Self-Employed Details......................................................................................................................... <span class="float-right">6</span></li>           
        <li>Section 4: Other Income Details........................................................................................................................... <span class="float-right">7</span></li>
        <li>Section 5: Financial Credit & Commitments......................................................................................................... <span class="float-right">8</span></li>
        <li>Section 6: Existing Property & Mortgages.......................................................................................................... <span class="float-right">11</span></li>
        <li>Section 7: Existing Assets.................................................................................................................................. <span class="float-right">13</span></li>      
        <li>Section 8: Expenditure & Budget....................................................................................................................... <span class="float-right">14</span></li>            
        <li>Section 9: Credit History.................................................................................................................................... <span class="float-right">17</span></li>
        <li>Section 10: New Mortgage Property Details...................................................................................................... <span class="float-right">18</span></li>            
        <li>Section 11: New Mortgage Loan Details........................................................................................................... <span class="float-right">19</span></li>            
        <li>Section 12: Mortgage Needs & Preferences..................................................................................................... <span class="float-right">23</span></li>            
        <li>Section 13: Additional Details............................................................................................................................ <span class="float-right">27</span></li>            
        <li>Section 14: Declaration..................................................................................................................................... <span class="float-right">29</span></li>
        <li>Section 15: Appendix - Cost Breakdown.......................................................................................................... <span class="float-right">30</span></li>          
      </ul>
    </div>

    <h1 style="text-align: center;margin-top: 40px;margin-bottom: 0px!important;font-size: 20pt!important;">PRIVATE & CONFIDENTIAL</h1>
  </div><!--/.row-->
</div>
<!-- /.container-fluid-->