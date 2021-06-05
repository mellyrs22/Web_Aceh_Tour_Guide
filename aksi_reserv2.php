<?php

include "koneksi.php";

$nama = $_POST['name1'];
$email = $_POST['email1'];
$phone = $_POST['phone1'];
$adults_number = $_POST['adults_number1'];
$locations = $_POST['locations1'];
$r_date = $_POST['r_date1'];

$query = "INSERT INTO reserv VALUES('','$nama','$email','$phone','$adults_number','$locations','$r_date')" ; //Insert query

echo $query;
//$cek_data=mysql_query($query);
//if($cek_data == 1){
//echo "Data Submitted succesfully";
//}

?>
