<?php if($this->session->userdata('type') == "admin"){ ?>
    <?php $clientList = $this->client->getAllSubadmins(); ?>
  <?php }else{ ?>
    <?php redirect('admin/home'); ?>
  <?php } ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs--
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        
      </ol><li class="breadcrumb-item active">My Dashboard</li>
      
      Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Complete Application Data Table</div>
        <div class="card-body">
          <div class="table-responsive" style="font-size:14px;">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>S.No.</th>
                  <th>Client Name(s)<base></base></th>
                  <th>Username</th>
                  <th>Joined on date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 0; foreach ($clientList as $client) { $i++; ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $client->name; ?></td>
                    <td><?php echo $client->username; ?></td>
                    <td><?php echo $client->created_at; ?></td>
                    <td>
                      <?php if($client->status == "true"){ ?>
                        <button id="active_<?php echo $client->id; ?>" class="btn btn-info btn-status" type="button">Active</button>
                      <?php } ?>
                      <?php if($client->status == "false"){ ?>
                        <button id="deactive_<?php echo $client->id; ?>" class="btn btn-primary btn-status" type="button">Inactive</button>
                      <?php } ?>
                      <button id="del_<?php echo $client->id; ?>" class="btn btn-light btn-del" type="button">Delete</button>
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
    $('.btn-status').click(function(){
      var formid = $(this).attr('id'), sts = "";
      sts = formid.split('_')[0];
      formid = formid.split('_')[1];
      
      var obj = {};
      if(sts == "active"){
        obj = {status: 'false', id: formid}
      }
      else if(sts == "deactive"){
        obj = {status: 'true', id: formid}
      }
      $.ajax({
        url:'<?php echo base_url(); ?>update/userstatus',
        type:'POST',
        data: obj,
        dataType:'json',
        success:function(as){

            if(as.status){
              alert('Client updated successfully');
              location.reload();
            }
            else{
              alert(as.message);
            }
        }
      });
    });

    $('.btn-del').click(function(){
      if (confirm("Do you really want to delete this record ?") == true) {
        var formid = $(this).attr('id');
        formid = formid.split('_')[1];
        $.ajax({
          url:'<?php echo base_url(); ?>delete/user',
          type:'POST',
          data:{id:formid},
          dataType: 'json',
          success:function(as){

              if(as.status){
                alert('User deleted successfully');
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
