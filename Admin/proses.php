<html>
<head>
<title>Data Berhasil di Simpan</title>
</head>
<body>
<div id="logo"><img src="wp-content/uploads/2012/12/background_1.jpg" width="1500" height="175" alt="Logo" /></div>
 
<HR size="10" noshade>
    
<?php
#skrip koneksi database
$user = "root";
$pass = "setia1995";
$koneksi = mysql_connect("localhost",$user,$pass);
if($koneksi)
	$ket = "koneksi berhasil";
else
	$ket = "koneksi gagal";
print("$ket");
?>

<?php
#skrip memilih database
$database = mysql_select_db("tourguide",$koneksi);
if($database)
	$hasil = "Database dipilih";
else
	$hasil = "database tidak dipilih";
print("<br>$hasil");
?>

<?php
#skrip menambah data dalam database
$nama = $_POST['nama_pengunjung'];
$email = $_POST['email'];
$no_hp = $_POST['nope'];
$daerah = $_POST['daerah'];

$input = mysql_query("insert into dt_wisatawan (nama,email,nope,daerah)
VALUES('$nama', '$email', '$no_hp', '$daerah')");
if($input)
	$hsl = "data telah ditambah";
else
	$hsl = "data gagal ditambah";
print("<br>$hsl");
?>

<br>Jika Selesai Klik Kembali untuk Kembali ke Menu Utama<br>
<input name="Kembali" value="Kembali" onclick="window.location.href='index.html';" type="button">

</body>
</html>