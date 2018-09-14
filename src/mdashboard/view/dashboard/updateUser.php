<?php

use \zil\factory\View;
use \zil\factory\Session;


$filePath = View::getInfo()[0];
$absPathForRequest = View::getInfo()[1];

$shared = View::getInfo()['SHARED_PATH'];

$routerLink = View::getInfo()['ROUTER_LINK'];

$error = Session::getSession('error');

$key = View::getInfo()['key'];
$user = View::getInfo()['user'][$key];


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo $absPathForRequest.'view/asset/img/fav.png'; ?>">
    
    <title>Dashboard -Update User</title>
    
    <!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo $absPathForRequest.'view/asset/vendor_components/bootstrap/dist/css/bootstrap.css'; ?>">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="<?php echo $absPathForRequest.'view/asset/css/bootstrap-extend.css'; ?>">
	
	<!-- theme style -->
	<link rel="stylesheet" href="<?php echo $absPathForRequest.'view/asset/css/master_style.css'; ?>">

	<!-- UltimatePro Admin skins -->
	<link rel="stylesheet" href="<?php echo $absPathForRequest.'view/asset/css/skins/_all-skins.css'; ?>">	

	
	<!-- daterange picker -->	
	<link rel="stylesheet" href="<?php echo $absPathForRequest.'view/asset/vendor_components/bootstrap-daterangepicker/daterangepicker.css'; ?>">
	
	<!-- bootstrap datepicker -->	
	<link rel="stylesheet" href="<?php echo $absPathForRequest.'view/asset/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'; ?>">
	
	<!-- iCheck for checkboxes and radio inputs -->
	<link rel="stylesheet" href="<?php echo $absPathForRequest.'view/asset/vendor_plugins/iCheck/all.css'; ?>">
	
	<!-- Bootstrap Color Picker -->
	<link rel="stylesheet" href="<?php echo $absPathForRequest.'view/asset/vendor_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css'; ?>">
	
	<!-- Bootstrap time Picker -->
	<link rel="stylesheet" href="<?php echo $absPathForRequest.'view/asset/vendor_plugins/timepicker/bootstrap-timepicker.min.css'; ?>">
	
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="<?php echo $absPathForRequest.'view/asset/vendor_components/bootstrap-select/dist/css/bootstrap-select.css'; ?>">
	
	<!-- Bootstrap tagsinput -->
	<link rel="stylesheet" href="<?php echo $absPathForRequest.'view/asset/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css'; ?>">
	
	<!-- Bootstrap touchspin -->
	<link rel="stylesheet" href="<?php echo $absPathForRequest.'view/asset/vendor_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css'; ?>">
	
	<!-- Select2 -->
	<link rel="stylesheet" href="<?php echo $absPathForRequest.'view/asset/vendor_components/select2/dist/css/select2.min.css'; ?>">


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body class="hold-transition skin-info dark-sidebar sidebar-mini fixed sidebar-collapse">
<div class="wrapper">

    <!-- Header -->
  <?php include_once($filePath.'view/central/header.php'); ?>
  
  <!-- Left side column. contains the logo and sidebar -->
    <?php include_once($filePath.'view/central/menu.php'); ?>
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Dashboard</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">User</li>
								<li class="breadcrumb-item active" aria-current="page">Update</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <div class="row">

			<div class="col-12">
			  <div class="box">
				  
				<div class="box-header">
					<h4 class="box-title">Basic Info</h4>  
                </div>
                
                
				<div class="box-body">

                    <p style="text-align: center; color: #e53935 ; font-size: 2em;"><?php echo $error; @Session::deleteSession('error'); ?></p>

                    <form action="<?php echo $routerLink.'action/updateuser/'.$key; ?>" method="post">
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Fullname</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="fname" maxlength="100" minlength="2" value='<?php echo $user['name']; ?>'>
                                <span class="form-text text-muted"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Address</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="address" maxlength="100" minlength="2" value='<?php echo $user['address']; ?>'>
                                <span class="form-text text-muted"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Phone</label>
                            <div class="col-md-10">
                                <input class="form-control" type="tel" name="phone" maxlength="16" value='<?php echo $user['phone']; ?>'>
                                <span class="form-text text-muted"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Birthday</label>
                            <div class="col-md-10">
                                <input class="form-control" type="month" name="birthday" value='<?php echo $user['birthday']; ?>' required>
                                <span class="form-text text-muted"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">About me</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="aboutme" style="resize: vertical;" maxlength="300"><?php echo $user['about']; ?></textarea>
                                <span class="form-text text-muted"></span>
                            </div>
                        </div>

                        <p class="col-2 offset-lg-6 offset-md-6 text-center">
                            <button type="submit" class="btn btn-info btn-block margin-top-10">Update</button>
                        </p>

                    </form>

                </div>
                    <!-- /.box-body -->
                    
                    				
				
				
			  </div>
			  <!-- /.box -->
			</div>
			<!-- ./col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  	
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        
    </div>
	  &copy; 2018 <a href="#">mDash</a>. All Rights Reserved.
  </footer>

  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="<?php echo $absPathForRequest.'view/asset/vendor_components/jquery-3.3.1/jquery-3.3.1.js'; ?>"></script>
	
	<!-- popper -->
	<script src="<?php echo $absPathForRequest.'view/asset/vendor_components/popper/dist/popper.min.js'; ?>"></script>
	
	<!-- Bootstrap 4.0-->
    <script src="<?php echo $absPathForRequest.'view/asset/vendor_components/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>
    
	<!-- Slimscroll -->
	<script src="<?php echo $absPathForRequest.'view/asset/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js'; ?>"></script>
   
	<!-- Bootstrap Select -->
	<script src="<?php echo $absPathForRequest.'view/asset/vendor_components/bootstrap-select/dist/js/bootstrap-select.js'; ?>"></script>
	
	<!-- Bootstrap tagsinput -->
	<script src="<?php echo $absPathForRequest.'view/asset/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js'; ?>"></script>
	
	<!-- Bootstrap touchspin -->
	<script src="<?php echo $absPathForRequest.'view/asset/vendor_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js'; ?>"></script>
	
	<!-- Select2 -->
	<script src="<?php echo $absPathForRequest.'view/asset/vendor_components/select2/dist/js/select2.full.js'; ?>"></script>
	
	<!-- InputMask -->
	<script src="<?php echo $absPathForRequest.'view/asset/vendor_plugins/input-mask/jquery.inputmask.js'; ?>"></script>
	<script src="<?php echo $absPathForRequest.'view/asset/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js'; ?>"></script>
	<script src="<?php echo $absPathForRequest.'view/asset/vendor_plugins/input-mask/jquery.inputmask.extensions.js'; ?>"></script>
	
	<!-- date-range-picker -->
	<script src="<?php echo $absPathForRequest.'view/asset/vendor_components/moment/min/moment.min.js'; ?>"></script>
	<script src="<?php echo $absPathForRequest.'view/asset/vendor_components/bootstrap-daterangepicker/daterangepicker.js'; ?>"></script>
	
	<!-- bootstrap datepicker -->
	<script src="<?php echo $absPathForRequest.'view/asset/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'; ?>"></script>
	
	<!-- bootstrap color picker -->
	<script src="<?php echo $absPathForRequest.'view/asset/vendor_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js'; ?>"></script>
	
	<!-- bootstrap time picker -->
	<script src="<?php echo $absPathForRequest.'view/asset/vendor_plugins/timepicker/bootstrap-timepicker.min.js'; ?>"></script>
	
	
	<!-- iCheck 1.0.1 -->
	<script src="<?php echo $absPathForRequest.'view/asset/vendor_plugins/iCheck/icheck.min.js'; ?>"></script>
	
	<!-- FastClick -->
	<script src="<?php echo $absPathForRequest.'view/asset/vendor_components/fastclick/lib/fastclick.js'; ?>"></script>
	
	<!-- UltimatePro Admin App -->
	<script src="<?php echo $absPathForRequest.'view/asset/js/template.js'; ?>"></script>
	
	<!-- UltimatePro Admin for demo purposes -->
	<script src="<?php echo $absPathForRequest.'view/asset/js/demo.js'; ?>"></script>
	
	<!-- UltimatePro Admin for advanced form element -->
	<script src="<?php echo $absPathForRequest.'view/asset/js/pages/advanced-form-element.js'; ?>"></script>
	


</body>
</html>
