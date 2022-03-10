<style type="text/css">
  #dataTable > tbody > tr > td {
    text-transform: capitalize;
  }
</style>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      
       Example DataTables Card-->
      <div class="card mb-3" style="margin-top: 30px;">
        <div class="card-header">
          <i class="fa fa-table"></i> Received Mortgage Application Data Table</div>
        <div class="card-body">
          <div class="table-responsive" style="font-size:14px;">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>S.No.</th>
                  <th>Client Name(s)<base></base></th>
                  <th>Adviser Name</th>
                  <th>Date Completed</th>
                  <th></th>
                </tr>
              </thead>
              
              <tbody>
                <?php $getAllForms = $this->client->getAllForms(); $i=0; ?> 
                  <?php foreach ($getAllForms['result'] as $client) { $i++; ?>
                    
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $client->client_name; ?></td>
                      <td><?php echo $client->advisor_name; ?></td>
                      <td><?php echo $client->date_completed; ?></td>
                      <td>
                        <a href="personal-detail/<?php echo $client->form_id; ?>" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Edit">
                          <i class="fas fa-pencil-alt"/></i>
                        </a>
                        <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Complete">
                          <i class="fas fa-check"></i>
                        </button>
                        <button id="delclient_<?php echo $client->form_id; ?>" type="button" class="btn btn-light btn-del" data-toggle="tooltip" data-placement="top" title="Delete">
                          <i class="fas fa-trash"></i>
                        </button>
                        <a class="btn btn-danger" target="_blank" href="<?php echo base_url(); ?>report/index?data=<?php echo $client->form_id; ?>" role="button"> 
                          <i class="fas fa-download"></i>
                          Download Pdf
                        </a>
                      </td>
                      <script>
                        $(function () {
                          $('[data-toggle="tooltip"]').tooltip()
                        });
                      </script>
                    </tr> 
                  <?php } ?> 
              </tbody>
            </table>
          </div>
        </div>
        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <script>
    $('.btn-del').click(function(){
      

      if (confirm("Do you really want to delete this record ?") == true) {
        var formid = $(this).attr('id');
        formid = formid.split('_')[1];
        $.ajax({
          url:'<?php echo base_url(); ?>delete/deleteClient?form_id='+formid,
          type:'GET',
          dataType: 'json',
          success:function(as){

              if(as.status){
                alert('Client deleted successfully');
                location.reload();
              }
              else{
                alert(as.message);
              }
          }
        });
	    } else {
	        
	    }
    });
    </script>