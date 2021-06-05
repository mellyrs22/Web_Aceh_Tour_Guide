<?php
	include "koneksi.php";
	$id_galeri = $_GET ['id_galeri'];
	$sql = "delete from galeri Where id_galeri = '$id_galeri' ";
	mysql_query($sql);
	header("location: report5.php?offset=0");
	?>