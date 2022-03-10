<?php 
	
	if($this->session->has_userdata('type') == true){
		if($this->session->userdata('type') == "admin"){
			
		}
  }
  else{
		redirect('login');
	}
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Master Admin - Find Fact Form</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/fontawesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/css/sb-admin.css?v=0.01" rel="stylesheet">

  <link href="<?php echo base_url(); ?>assets/css/jquery-ui.css" rel="stylesheet">

  <style>
    label.error{
      color:red;
      font-size:10px;
    }
  </style>
     <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <!--<script src="vendor/chart.js/Chart.min.js"></script>-->
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url(); ?>assets/js/sb-admin-datatables.min.js"></script>
    <!--<script src="js/sb-admin-charts.min.js"></script>-->

    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/additional-methods.min.js"></script>

     <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script> 
  
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top header-1" id="mainNav">
    <a class="navbar-brand" href="<?php echo base_url(); ?>admin/home">
      <img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="logo" height="40px">
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="" title="">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/home">
            <i class="fas fa-tachometer-alt"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="" title="">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/personal-detail">
            <i class="fas fa-table"></i>
            <span class="nav-link-text">New Fact Form</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="" title="">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/complete-process">
            <i class="fas fa-clipboard-list"></i>
            <span class="nav-link-text">Complete Process</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="" title="">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/register">
            <i class="fas fa-user-plus"></i>
            <span class="nav-link-text">Client Registration</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="" title="">
          <a class="nav-link" href="<?php echo base_url(); ?>admin/client-list">
            <i class="fas fa-list-ol"></i>
            <span class="nav-link-text">Registered Client's Lists</span>
          </a>
        </li>

        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Example Pages</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="login">Login Page</a>
            </li>
            
            <li>
              <a href="forgot-password">Forgot Password Page</a>
            </li>
            <li>
              <a href="blank">Blank Page</a>
            </li>
          </ul>
        </li> -->
      </ul>

      

      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link">
            Admin Email id
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>