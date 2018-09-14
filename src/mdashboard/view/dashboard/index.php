<?php

use \zil\factory\View;

$filePath = View::getInfo()[0];
$absPathForRequest = View::getInfo()[1];

$shared = View::getInfo()['SHARED_PATH'];




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

    <title>Admin - Dashboard</title>
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo $absPathForRequest.'view/asset/vendor_components/bootstrap/dist/css/bootstrap.css'; ?>">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="<?php echo $absPathForRequest.'view/asset/css/bootstrap-extend.css'; ?>">
	
	<!-- theme style -->
	<link rel="stylesheet" href="<?php echo $absPathForRequest.'view/asset/css/master_style.css'; ?>">

	<!-- UltimatePro Admin skins -->
	<link rel="stylesheet" href="<?php echo $absPathForRequest.'view/asset/css/skins/_all-skins.css'; ?>">	

    <!-- c3 CSS -->
    <link rel="stylesheet" type="text/css" href=""<?php echo $absPathForRequest.'view/asset/vendor_components/c3/c3.min.css'; ?>">
	
	<!-- Bootstrap switch-->
	<link rel="stylesheet" href=""<?php echo $absPathForRequest.'view/asset/vendor_components/bootstrap-switch/switch.css'; ?>">
	
	<!-- Morris charts -->
	<link rel="stylesheet" href=""<?php echo $absPathForRequest.'view/asset/vendor_components/morris.js/morris.css'; ?>">
	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

     
  </head>

<body class="hold-transition skin-success dark-sidebar sidebar-mini fixed sidebar-collapse">
<div class="wrapper">

	<?php include_once($filePath.'view/central/header.php'); ?>
  
  <!-- Left side column. contains the logo and sidebar -->
	<?php include_once($filePath.'view/central/menu.php'); ?>
	
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container">
		<!-- Content Header (Page header) -->  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto w-p50">
					<h3 class="page-title">Dashboard</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">Control</li>
							</ol>
						</nav>
					</div>
				</div>
				<!-- <div class="right-title w-170">
					<span class="subheader_daterange font-weight-600" id="dashboard_daterangepicker">
						<span class="subheader_daterange-label">
							<span class="subheader_daterange-title"></span>
							<span class="subheader_daterange-date text-primary"></span>
						</span>
						<a href="#" class="btn btn-sm btn-primary">
							<i class="fa fa-angle-down"></i>
						</a>
					</span>
				</div> -->
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			
		  <div class="row">
			  
			<div class="col-12 col-md-6 col-xl-6" onclick="window.location= '<?php echo $routerLink.'dashboard/view'; ?>'; " style="cursor: pointer; ">
				<div class="flexbox flex-justified text-center mb-30 bg-primary">
				  <div class="no-shrink py-30">
					<span class="fa fa-users font-size-50"></span>
				  </div>

				  <div class="py-30 bg-white text-dark">
					<div class="font-size-30"><?php echo View::getInfo()['allcount']; ?></div>
					<span>Users</span>
				  </div>
				</div>
			</div>
			  
			<div class="col-12 col-md-6 col-xl-6" onclick="window.location= '<?php echo $routerLink.'dashboard/add'; ?>'; " style="cursor: pointer; ">
				<div class="flexbox flex-justified text-center mb-30 bg-danger">
				  <div class="no-shrink py-30">
					<span class="fa fa-plus font-size-50"></span>
				  </div>

				  <div class="py-30 bg-white text-dark">
					<div class="font-size-30">Add</div>
					<span>User</span>
				  </div>
				</div>
			</div>
			  
           
            
		  </div>	
			
          <!-- /.row -->
          
          <div class='row'>

        <div class="col-12 col-xl-12">
			  <div class="box">
				<div class="box-body">
				  <h4 class="box-title">Recently Added</h4>
					<div class="table-responsive">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th class="bb-2">Name</th>
									<th class="bb-2">Email</th>
									<th class="bb-2">Phone</th>
									<th class="bb-2">Address</th>
									<th class="bb-2">Birthday</th>
									<th class="bb-2">Gender</th>
									<th class="bb-2">Aboutme</th>
									<th class="bb-2">Action</th>
								</tr>
							</thead>
							<tbody>

								<?php
								
								foreach (View::getInfo()['user'] as  $key => $info){

									echo "
									<tr>
										<td>{$info['name']}</td>
										<td>{$info['email']}</td>
										<td>{$info['phone']}</td>
										<td>{$info['address']}</td>
										<td>{$info['birthday']}</td>
										<td>{$info['gender']}</td>
										<td class='text-truncate'>{$info['about']}</td>
										<td><a href='{$routerLink}dashboard/update/{$key}' target='_new' style='padding: 4px; border-radius: 4px; border: 1px solid grey;'><span style='font-size: 12px;'><i class='fa fa-refresh' style='color: green; margin-right: 4px;'></i>Update</span></a> | <a href='{$routerLink}action/deleteuser/{$key}' style='padding: 4px; border-radius: 4px; border: 1px solid grey;'><span style=' font-size: 12px;'><i class='fa fa-times' style='color: red; margin-right: 4px;'></i>Delete</span></a></td>
									</tr>
									";
								}
								
								?>
								<!-- <tr>
									<td>Blood Count</td>
									<td>Microbiology</td>
									<td><span class="badge badge-warning">Law</span></td>
									<td>N500</td>
									<td>Johen Doe</td>
									<td>5.45pm 11/05</td>
									<td><span class="badge badge-success">Result Added</span></td>
									<td><a href="#" data-toggle="modal" data-target="#result" class="text-info">Result  </a>
										<a href="#" data-toggle="modal" data-target="#comment-dialog" class="text-info">Comment  </a>
									</td>
									<td><button type="button" class="btn btn-sm btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
										<div class="handle"></div>
										</button>
									</td>
								</tr> -->
															
							</tbody>
						  </table>
					</div>				
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>


          </div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
	
	<!--Model Popup Area-->
  	
	

	<!-- comment modal content -->
	<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="comment-popup" aria-hidden="true" style="display: none;" id="comment-dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="comment-popup">Update</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<div class="row justify-content-between">
						<div class="col-12">
						  <h4>Comment</h4>
						</div>
					</div>
					<form>
					  <div class="form-group">
						<textarea class="form-control" id="comment-area" rows="3"></textarea>
					  </div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-success pull-right mr-10">Save</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	
	
	
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        
    </div>
	  &copy; 2018 <a href="#">mDash</a>. All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
  
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
	<script src="<?php echo $absPathForRequest.'view/asset/vendor_components/jquery-slimscroll/jquery.slimscroll.js'; ?>"></script>
	
	
	<!-- Morris.js charts -->
	<script src="<?php echo $absPathForRequest.'view/asset/vendor_components/raphael/raphael.min.js'; ?>"></script>
	<script src="<?php echo $absPathForRequest.'view/asset/vendor_components/morris.js/morris.min.js'; ?>"></script>
	
	<!-- Sparkline -->
	<script src="<?php echo $absPathForRequest.'view/asset/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js'; ?>"></script>

	
    <!-- C3 Plugins -->
    <script src="<?php echo $absPathForRequest.'view/asset/vendor_components/c3/d3.min.js'; ?>"></script>
    <script src="<?php echo $absPathForRequest.'view/asset/vendor_components/c3/c3.min.js'; ?>"></script>
	
    <!-- eChart Plugins -->
    <script src="<?php echo $absPathForRequest.'view/asset/vendor_components/echarts/dist/echarts-en.min.js'; ?>"></script>
	
	<!-- FastClick -->
	<script src="<?php echo $absPathForRequest.'view/asset/vendor_components/fastclick/lib/fastclick.js'; ?>"></script>
	
	<!-- UltimatePro Admin App -->
	<script src="<?php echo $absPathForRequest.'view/asset/js/template.js'; ?>"></script>
	
	<!-- UltimatePro Admin dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo $absPathForRequest.'view/asset/js/pages/dashboard4.js'; ?>"></script>
	
	<!-- UltimatePro Admin for demo purposes -->
	<script src="<?php echo $absPathForRequest.'view/asset/js/demo.js'; ?>"></script>	
	
	
</body>
</html>
