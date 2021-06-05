
	<?php 
include 'koneksi.php';
//include "Admin/session.php";
$username = $_POST['username'];
$password =  $_POST['password'];

if (($username == "") && ($password == ""))
{
	echo "<script>alert('Silakan isi username dan password Anda!!');document.location='login.php'</script>";	

}
else if (($username == "") || ($password == ""))
{
	echo "<script>alert('Silakan isi username atau password Anda!!');document.location='login.php'</script>";	
	exit();
}
else if ($_POST['username'] != "" && $_POST['password'] != "")
{
	$Admin = mysql_query("select * from admin where username='$username' and password='$password'");
	//$pelanggan = mysql_query("select * from pelanggan where username='$username' and password='$password'");
	
	if(mysql_num_rows($Admin)== 1) 
	{
			session_start();
			$_SESSION['Admin'] = 'Admin';
			echo "<script>alert('Anda Berhasil Login!!');document.location='Admin/index.php'</script>";	
			exit();
	}
	//else if (mysql_num_rows($pelanggan)== 1)                                                                                    
	//{
			//session_start();
			//$_SESSION['pelanggan'] = 'pelanggan';
			//$ambil_pelanggan= mysql_fetch_array($pelanggan);
			//$_SESSION['username'] = $ambil_pelanggan['username'];
			//$_SESSION['id_pelanggan'] = $ambil_pelanggan['id_pelanggan'];
			//$_SESSION['nama'] = $ambil_pelanggan['nama'];
			//echo "<script>alert('Anda Berhasil Login!!');document.location='pesanan.php'</script>";	
			//exit();
	//}
	else
	{
		echo "<script>alert('Username dan Password Anda Salah!!');document.location='login.php'</script>";
	}
	//$_SESSION['username'] = $ambil_pelanggan['username'];
	//$_SESSION['id_pelanggan'] = $ambil_pelanggan['id_pelanggan'];
	//header('location:pesanan.php');
}
?>

	