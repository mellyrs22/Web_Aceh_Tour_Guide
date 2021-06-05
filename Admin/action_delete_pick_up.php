<?php
	include "koneksi.php";
	$id_pick_up = $_GET ['id_pick_up'];
	$sql = "delete from pick_up Where id_pick_up = '$id_pick_up' ";
	mysql_query($sql);
	echo ($sql);
	header("location: report.php?offset=0");
	?>