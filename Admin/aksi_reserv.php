<?php

include ('koneksi.php');

$nama = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$adults_number = $_POST['adults_number'];
$locations = $_POST['locations'];
$r_date = $_POST['r_date'];

$query = "INSERT INTO reserv VALUES('','$nama','$email','$phone','$adults_number','$locations','$r_date')" ; //Insert query

//echo $query;
mysql_query ($query);

header("location:report2.php?offset=0");
?>
