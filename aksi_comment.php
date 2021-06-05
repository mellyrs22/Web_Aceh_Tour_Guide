<?php

include "koneksi.php";

$nama = $_POST['name1'];
$email = $_POST['email1'];
$comment = $_POST['comment1'];

$query = "INSERT INTO komentar VALUES('','$nama','$email','$comment','')" ; //Insert query

//echo $query;
mysql_query($query);

$cek_data=mysql_query($query);
if($cek_data == 1){
echo "Data Submitted succesfully";
}
}

?>
