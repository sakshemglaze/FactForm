
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs--
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      
       Example DataTables Card-->
      <?php $getAllForms = $this->client->getAllCompletedForms(); ?>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Complete Process Data Table</div>
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
                <?php $i = 0; foreach ($getAllForms['result'] as $client) { $i++; ?>
                <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $client->client_name; ?></td>
                <td><?php echo $client->advisor_name; ?></td>
                <td><?php echo $client->date_completed; ?></td>
                  <td>
                    <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="View">
                      <i class="fas fa-eye"></i>
                    </button>

                    <button type="button" class="btn btn-primary">
                        Incomplete
                    </button>
                   
                    <button id="delclient_<?php echo $client->form_id; ?>" type="button" class="btn btn-light btn-del" data-toggle="tooltip" data-placement="top" title="Delete">
                      <i class="fas fa-trash"></i>
                    </button>
                    
                  </td>
                </tr>
                <?php } ?>              
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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