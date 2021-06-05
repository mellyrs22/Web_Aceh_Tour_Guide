<?php 
	$host= "localhost";
	$user= "root";
	$pass= "";
	$db = "tour";
	$koneksi = mysql_connect($host, $user, $pass);
	mysql_select_db ($db, $koneksi);
	
?> 