<?php

use \zil\factory\View;

$filePath = View::getInfo()[0];
$absPathForRequest = View::getInfo()[1];
$shared = View::getInfo()['SHARED_PATH'];

$routerLink = View::getInfo()['ROUTER_LINK'];

?>

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
		
		  
	
		  
		  <li>
          
          <a href="<?php echo $routerLink.'dashboard'; ?>">
            <i class="fa fa-home"></i>
			      <span>Home</span>
          </a>

          <a href="<?php echo $routerLink.'home/logout'; ?>">
            <i class="ti-power-off"></i>
			      <span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
  </aside>
