<?php

include "koneksi.php";

$no_reserv = $_POST['no_reserv'];
$nama = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$adults_number = $_POST['adult_number'];
$locations = $_POST['locations'];
$r_date = $_POST['r_date'];

$query = "update reserv set no_reserv='$no_reserv', nama='$nama', email='$email', no_hp='$phone', jmlh_tour='$adults_number', lokasi='$locations', tgl_reserv='$r_date' where no_reserv='$no_reserv' ";

//echo $query;
mysql_query ($query);
if($query){
echo "Data Editted succesfully";
}
header("location:report2.php?offset=0");
?>

