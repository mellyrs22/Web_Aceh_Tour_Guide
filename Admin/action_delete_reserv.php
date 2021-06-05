<?php
	include "koneksi.php";
	$no_reserv = $_GET ['no_reserv'];
	$sql = "delete from reserv Where no_reserv = '$no_reserv' ";
	mysql_query($sql);
	header("location: report2.php?offset=0");
	?>