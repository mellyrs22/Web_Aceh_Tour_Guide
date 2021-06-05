<?php
// Establishing connection with server by passing "server_name", "user_id", "password".
$connection = mysql_connect("localhost", "root", "");
// Selecting Database by passing "database_name" and above connection variable.
$db = mysql_select_db("tour", $connection);
$name2=$_POST['name1']; // Fetching Values from URL
$email2=$_POST['email1'];
$phone2=$_POST['phone1'];
$adults_number2=$_POST['adults_number1'];
$locations2=$_POST['locations1'];
$r_date2=$_POST['r_date1'];
$query = mysql_query("insert into reserv(no_reserv, nama, email, no_hp, jmlh_tour, lokasi, tgl_reserv) values ('','$name2','$email2','$phone2','$adults_number2','$locations2','$r_date2')"); //Insert query
if($query){
echo "Data Submitted succesfully";
}
mysql_close($connection); // Connection Closed.
?>
