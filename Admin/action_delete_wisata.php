<?php
	include "koneksi.php";
	$id_wisata = $_GET ['id_wisata'];
	$sql = "delete from wisata Where id_wisata = '$id_wisata' ";
	mysql_query($sql);
	header("location: report3.php?offset=0");
	?>