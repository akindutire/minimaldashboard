<?php

use \zil\factory\View;

$absPathForRequest = View::getInfo()[1];
$shared = View::getInfo()['SHARED_PATH'];

$filePath = View::getInfo()[0];


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Notif</title>

<meta name="keywords" content="" />
<meta name="description" content="" />


<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->



<script src="<?php echo "{$shared}asset/js/jquery-3.3.1.min.js"; ?>"></script>

</head>

<body style="width:auto;">
    
    <?php
        include_once("{$filePath}view/central/nav.php");
    ?>
    
    <div class="valign-wrapper" style="height:400px; width:100%;">
		<div class="container">
        <div class="row">
				
                <p class="flow-text small col xl10 l10 m12 s12 offset-xl2 offset-l2" style="color: <?php echo View::getInfo()['color']; ?>"><?php echo View::getInfo()['msg'] ?></p>
			</div>
		</div>
    </div>  

   <?php
        include_once("{$filePath}view/central/footer.php");
   ?>


<script src="<?php echo "{$shared}asset/js/materialize.min.js"; ?>"></script>
<script src="<?php echo "{$absPathForRequest}view/asset/js/init.js"; ?>"></script>


</body>
</html>
