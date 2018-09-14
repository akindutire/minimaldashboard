<?php

/*	
	Encryption Type: AES
	Author: Akindutire Ayomide Samuel
	Email: akinsamuel33@gmail.com or akindutire33@gmail.com
	Contact: 08107926083
	
*/
	error_reporting(0);
	
	include_once "{$_SERVER['DOCUMENT_ROOT']}/System/vendor/autoload.php";
	include_once "{$_SERVER['DOCUMENT_ROOT']}/vendor/autoload.php";
	include_once "{$_SERVER['DOCUMENT_ROOT']}/System/zil/main.php";	
		
	use zil\App;

	use src\mdashboard\config\config;

	$config = new config;

	/**
	 * @params
	 * WorkSpaceFolder, Database Parameters, special redirects ,Event Logging - true by default
	 */

		$WorkSpace = new App($config->getAppPath(), $config->getDatabaseParams(), $config->redirects(), true);

	/**
	 * @params
	 * 1- allow all, 0- deny all | live - true by default
	 */
    
    	$WorkSpace->start();

		include_once "{$_SERVER['DOCUMENT_ROOT']}/System/zil/error.php";

?>


