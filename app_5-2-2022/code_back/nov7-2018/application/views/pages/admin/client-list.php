  <?php $clientList = $this->client->getAll(); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs--
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      
      <!-- Example DataTables Card-->
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
                      <?php if($client->status == "false"){ ?>
                        <a class="btn btn-info" href="" role="button">Active</a>
                      <?php } ?>

                      <?php if($client->status == "true"){ ?>
                        <a class="btn btn-primary" href="" role="button">Inactive</a>
                      <?php } ?>
                      
                      <a class="btn btn-light" href="" role="button">Delete</a>
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
