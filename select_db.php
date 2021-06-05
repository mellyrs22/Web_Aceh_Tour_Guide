<?php 
	include ("koneksi.php");
	$db = "tour";
	
	$select_db = mysql_select_db ($db);
	if (!$select_db) {
		die ("Database tidak terseleksi");
	}
	
?> 