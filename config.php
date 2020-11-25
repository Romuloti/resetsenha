<?php
	define('HOST','localhost');
	define('USER','id10851258_romulo');
	define('PASS','123456');
	define('BASE','id10851258_login');
	
	$conn = new MySQLi(HOST,USER,PASS,BASE);
	
	if(mysqli_connect_errno()) trigger_error(mysqli_connect_error());
?>