
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

            
                <table class="table" style="margin-top: 10px!important;">
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

                        <tr>
                            <td class="first-one" style="line-height: 1.25em;">If no, how do you plan to build<br/>up a fund or manage in the<br/>event of financial emergencies?</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            
                <h5 class="bank-account" style="margin-bottom: 0px!important;">7.2 Bank Accounts and Other Savings</h5>

                <table class="table tab-child bank-account" style="margin-top: 10px;">
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
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>   
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>                
                                <span style="margin:0px 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>   
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>                
                                <span style="margin:0px 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>   
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>                
                                <span style="margin:0px 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>   
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>                
                                <span style="margin:0px 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>   
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>                
                                <span style="margin:0px 5px;">p.m.</span>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="table" style="margin-bottom: 10px!important;">
                    <thead class="">
                        <tr>
                            <th colspan="5" style="text-align: left; padding:.25em 0.85em;">Notes</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr>
                            <td colspan="5" style="height:70px; padding: 10px; border-right: 1px solid #000000;">
                                <p></p>
                           </td>
                        </tr>
                    </tbody>
                </table>           
  
            
                <h5 class="" style="margin-bottom: 0px!important;">7.3 Pensions & Investments</h5>

            
                <table class="table tab-child bank-account" style="margin-top: 10px;">
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
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>               
                                <span style="margin:0px 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>               
                                <span style="margin:0px 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>               
                                <span style="margin:0px 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>               
                                <span style="margin:0px 5px;">p.m.</span>
                            </td>
                        </tr>

                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>
                            </td>
                            <td>
                                <span style="margin:0px 5px;">£</span>
                                <span></span>               
                                <span style="margin:0px 5px;">p.m.</span>
                            </td>
                        </tr>
                    </tbody>
                </table>          

                <table class="table" style="margin-bottom: 20px;">
                    <thead >
                        <tr>
                            <th colspan="5" style="text-align: left; padding:.25em 0.85em;">Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5" style="height:70px; padding: 10px; border-right: 1px solid #000000;">
                                <p></p>
                            </td>
                        </tr>
                    </tbody>
                </table>   
            </form>
        </div>
    </div>
</div>
