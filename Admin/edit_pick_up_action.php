<?php

include "koneksi.php";
$id_pick_up=$_POST['id_pick_up'];
$no_reserv = $_POST['no_reserv'];
$date = $_POST['date'];
$no_flight= $_POST['no_flight'];
$address = $_POST['address'];
$status =$_POST['status'];
$query = "update pick_up set no_reserv='$no_reserv', date='$date', no_flight='$no_flight', alamat='$address', status='$status' where id_pick_up='$id_pick_up'";

//echo $query;
mysql_query ($query);
if($query){
echo "Data Editted succesfully";
}
header("location:report.php?offset=0");
?>

