<?php
include ('koneksi.php');

$no_reserv = $_POST['no_reserv'];
$date = $_POST['date'];
$no_flight = $_POST['no_flight'];
$address = $_POST['address'];

$query = " INSERT INTO pick_up VALUES('','$no_reserv','$date','$no_flight','$address','')" ; //Insert query
//echo $query;
$cek_data=mysql_query($query);
if($cek_data == 1){
echo "<script>alert('Data Submitted succesfully');document.location='index.php'</script>" ;
}

?>

