<?php 
//$page = 'dashboard';
include 'find-fact-header.php';
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
        <div class="col-lg-4 center-block marTP-30 question">
          <div class="card mb-3">
            <div class="card-body">
              <label>Are You ?</label><br/>
              <input class="single" type="checkbox" name="single" value="1" />
              <span class="item-text" style="margin-right:15px;">Single Applicant</span>
              <input class="double" type="checkbox" name="double" value="1" />
              <span class="item-text">Double Applicant</span>
            </div>
          </div><!--/.card mb-3-->
     
        </div><!--/.col-mg-4-->

        <div class="col-lg-12 marTP-30 form-section"> <!--  -->
          <h1 class="heading-large">Mortgage<br/>Questionnaire</h1>

          <!--=====Form Starts Here=====-->
          <form id="clientform">

            <!--=====Table Starts Here=====-->
            <table class="table index-table">
              <tbody class="table-bordered">
                <tr>
                  <td>Client Name(s)</td>
                  <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                  <td>Adviser Name</td>
                  <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                  <td>Date Completed</td>
                  <td><input type="text" class="form-control"></td>
                </tr>
              </tbody><!--/.table-bordered-->
            </table>
            <!--=====/Table Ends Here=====-->
          </form>

          <div class="alert-box col-lg-9 center-block marTP-30">
            <h5>Adviser Note</h5>
            <p>Please complete all the appropriate sections.  If a section is not applicable, 
              then please strike this through and write N/A.  For the avoidance of doubt within 
              this questionnaire, and all supplementary questionnaires, N/A means not applicable.
            </p>
          </div>

          <div class="col-lg-10 center-block marBT-30">          
            <h3 class="marTP-30">Contents</h3>          
            <ul class="index-list">            
              <li>Section 1: Personal & Family Details.............................................................................................................................................................................<span class="float-right">2</span></li>            
              <li>Section 2: Employment Details........................................................................................................................................................................................<span class="float-right">4</span></li>            
              <li>Section 3: Self-Employed Details....................................................................................................................................................................................<span class="float-right">6</span></li>           
              <li>Section 4: Other Income Details.....................................................................................................................................................................................<span class="float-right">7</span></li>
              <li>Section 5: Financial Credit & Commitments..............................................................................................................................................................<span class="float-right">8</span></li>
              <li>Section 6: Existing Property & Mortgages...............................................................................................................................................................<span class="float-right">11</span></li>
              <li>Section 7: Existing Assets................................................................................................................................................................................................<span class="float-right">13</span></li>            
              <li>Section 8: Expenditure & Budget.................................................................................................................................................................................<span class="float-right">14</span></li>            
              <li>Section 9: Credit History..................................................................................................................................................................................................<span class="float-right">17</span></li>            
              <li>Section 10: New Mortgage Property Details...........................................................................................................................................................<span class="float-right">18</span></li>            
              <li>Section 11: New Mortgage Loan Details..................................................................................................................................................................<span class="float-right">19</span></li>            
              <li>Section 12: Mortgage Needs & Preferences...........................................................................................................................................................<span class="float-right">23</span></li>            
              <li>Section 13: Additional Details.......................................................................................................................................................................................<span class="float-right">27</span></li>            
              <li>Section 14: Declaration....................................................................................................................................................................................................<span class="float-right">29</span></li>            
              <li>Section 15: Appendix – Cost Breakdown..................................................................................................................................................................<span class="float-right">30</span></li>          
            </ul>
          </div>

          <h1 style="text-align: center;">PRIVATE & CONFIDENTIAL</h1>

          <div class="" style="text-align: center;margin:20px 0px;">
            <button type="submit" class="btn btn-primary" style="cursor:pointer;">Next</button>
          </div>

        </div><!--/.col-lg-12 .form-section-->

        
      </div><!--/.row-->
    </div>
    <!-- /.container-fluid-->
  </div>
    <!-- /.content-wrapper-->
  
  <script>
     $("#clientform").submit(function(event) {
          event.preventDefault();
      }).validate({
            rules:{
              
            }
          },
          submitHandler: function(form) { 
            location.href="personal-detail";
          }
      });
  </script>

