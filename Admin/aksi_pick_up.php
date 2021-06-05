<?php
include ('koneksi.php');

$no_reserv = $_POST['no_reserv'];
$date = $_POST['date'];
$no_flight = $_POST['no_flight'];
$address = $_POST['address'];

$query = " INSERT INTO pick_up VALUES('','$no_reserv','$date','$no_flight', '$address','')" ; //Insert query
mysql_query ($query);

header("location:report.php?offset=0");

?>

