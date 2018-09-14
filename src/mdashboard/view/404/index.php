<?php

use \zil\factory\View;
use \zil\factory\Session;

use \src\mdashboard\config\Config as cfg;

$cfg = new cfg;

$filePath = $cfg->getAppPath();
$absPathForRequest = $cfg->getAppUrl();

$shared = View::getInfo()['SHARED_PATH'];

$routerLink = View::getInfo()['ROUTER_LINK'];


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
    
    <title>Admin - 404 Page not found </title>
   <!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo $absPathForRequest.'view/asset/vendor_components/bootstrap/dist/css/bootstrap.css'; ?>">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="<?php echo $absPathForRequest.'view/asset/css/bootstrap-extend.css'; ?>">
	
	<!-- theme style -->
	<link rel="stylesheet" href="<?php echo $absPathForRequest.'view/asset/css/master_style.css'; ?>">


	<!-- UltimatePro Admin skins -->
	<link rel="stylesheet" href="<?php echo $absPathForRequest.'view/asset/css/skins/_all-skins.css'; ?>">	


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body class="hold-transition">
	
	<section class="error-page bg-secondary h-p100">
		<div class="container h-p100">
		  <div class="row h-p100 align-items-center justify-content-center text-center">
			  <div class="col-lg-7 col-md-10 col-12">
				  <div class="b-double border-gray rounded">
					  <h1 class="text-white font-size-180 font-weight-bold error-page-title"> 404</h1>
					  <h1>Page Not Found !</h1>
					  <h3>looks like, page doesn't exist</h3>
					  <div class="my-30"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/dashboard'; ?>" class="btn btn-danger btn-lg">Back to dashboard</a></div>				  

					  
				  </div>
			  </div>				
		  </div>
		</div>
	</section>


	<!-- jQuery 3 -->
    <script src="<?php echo $absPathForRequest.'view/asset/vendor_components/jquery-3.3.1/jquery-3.3.1.js'; ?>"></script>
	
	<!-- popper -->
	<script src="<?php echo $absPathForRequest.'view/asset/vendor_components/popper/dist/popper.min.js'; ?>"></script>
	
	<!-- Bootstrap 4.0-->
    <script src="<?php echo $absPathForRequest.'view/asset/vendor_components/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>
    

</body>
</html>
