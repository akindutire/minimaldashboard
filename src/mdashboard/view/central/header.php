<?php

use \zil\factory\View;

$filePath = View::getInfo()[0];
$absPathForRequest = View::getInfo()[1];
$shared = View::getInfo()['SHARED_PATH'];

$routerLink = View::getInfo()['ROUTER_LINK'];

?>
<style type="text/css">
	@import " <?php echo $shared.'asset/css/w3.css'; ?>";
</style>


  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo $routerLink.'dashboard'; ?>" class="logo" style="background: #4a148c;">
      <!-- mini logo -->
	  <div class="logo-mini">
		  <span class="light-logo"><img src="<?php echo $absPathForRequest.'view/asset/img/logo-light.png'; ?>" alt="logo"></span>
	  </div>
      <!-- logo-->
      <div class="logo-lg">
		  <span class="light-logo"><img src="<?php echo $absPathForRequest.'view/asset/img/logo-light-text.png'; ?>" alt="logo"></span>
	  </div>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" style="background: #4a148c;">
      <!-- Sidebar toggle button-->
	  <div>
		  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<i class="ti-align-left"></i>
		  </a>
		  <a id="toggle_res_search" data-toggle="collapse" data-target="#search_form" class="res-only-view" href="javascript:void(0);"><i class="mdi mdi-magnify"></i></a>
     
      <form id="search_form" role="search" class="top-nav-search pull-left collapse ml-20" style="display: none;">
			<div class="input-group">
				<input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
				<span class="input-group-btn">
				<button type="button" class="btn  btn-default" data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="mdi mdi-magnify"></i></button>
				</span>
			</div>
		  </form> 
		
	  </div>
		
      <div class="navbar-custom-menu r-side" style="display: none;">
        <ul class="nav navbar-nav">
		 
		  
		  <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $absPathForRequest.'view/asset/img/1.jpg'; ?>" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu animated flipInX">
              <!-- User image -->
              <li class="user-header bg-img" style="background-image: url(<?php echo $absPathForRequest.'view/asset/img/user-info.jpg'; ?>)" data-overlay="3">
				  <div class="flexbox align-self-center">					  
				  	<img src="<?php echo $absPathForRequest.'view/asset/img/1.jpg'; ?>" class="float-left rounded-circle" alt="User Image">					  
					<h4 class="user-name align-self-center">
					  <span>Samuel Brus</span>
					  <small>samuel@gmail.com</small>
					</h4>
				  </div>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
							
					<a class="dropdown-item" href="<?php echo $routerLink.'home/logout'; ?>"><i class="ion-log-out"></i> Logout</a>
					
              </li>
            </ul>
          </li>	
			
		  
        </ul>
      </div>
    </nav>
  </header>