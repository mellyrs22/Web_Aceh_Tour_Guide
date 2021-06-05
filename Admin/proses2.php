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
$pass = "";
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
$lokasi = $_POST['lokasi'];
$alamat = $_POST['alamat'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$np = $_POST['no_pen'];

$input = mysql_query("insert into dt_jemput (lokasi,alamat,tanggal,waktu,no_pen)
VALUES('$lokasi', '$alamat', '$tanggal', '$waktu', '$np')");
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