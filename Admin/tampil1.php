<html>
<head>
<title>Input Data Pemesanan</title>
</head>
<body>
<div id="logo"><img src="wp-content/uploads/2012/12/background_1.jpg" width="1500" height="175" alt="Logo" /></div>
 
<HR size="10" noshade>
    
         
	<form action="proses.php" method="post" class="cart_form" id="shop_checkout" style="margin:0;padding:0;">
		

				<fieldset id="cart_delivery_information" class="simplecart_fieldset">
			<legend>Reservasi disini</legend>

			<p>Inuput Data Anda.</p>

			<table>
			<tbody>
			<tr>
				<tr><td>Nama Pengunjung : <span title="This field is required." class="form-required"></span></td><td>
			<input size="32" name="nama_pengunjung" maxlength="64" type="text">

			</td></tr>
			<tr><td>E-mail : <span title="This field is required." class="form-required"></span></td><td>
			<input size="32" name="email" maxlength="64" type="text">

			</td></tr>
			<tr><td>Nomor Hp : <span title="This field is required." class="form-required"></span></td><td>
			<input size="32" name="nope" maxlength="64" type="text">

			</td></tr>
			<tr><td>Daerah : <span title="This field is required." class="form-required"></span></td><td>
			<input size="32" name="daerah" maxlength="64" type="text">

			</td></tr>
			</tbody></table>

		</fieldset>
		
		<fieldset id="cart_pay" class="simplecart_fieldset">
			<input name="simpan" value="Simpan";" type="submit">
			<input name="reset" type="reset" value="Kosongkan">
			<input name="keluar" value="Keluar" onclick="window.location.href='index.html';" type="button">
		</fieldset>

	</form>

	<form>
	<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db("tourguide",$conn);
$sql = "select * from dt_wisatawan order by no_peng";
$hasil = mysql_query($sql,$conn);
?>

<table width="1100" border="1" cellspacing="0" cellpadding="2">
<tr>
<td width="60" align="Center">Nomor</td>
<td width="300" align="Center">Nama Pengunjung</td>
<td width="300" align="Center">E-mail</td>
<td width="300" align="Center">Nomor Hp</td>
<td width="300" align="Center">Daerah</td>
<td width="85" align="center">Hapus Data</td>
</tr>

<?php
while ($data = mysql_fetch_array($hasil))
{?>
<tr>
<td><?php echo $data[0]; ?></td>
<td><?php echo $data[1]; ?></td>
<td><?php echo $data[2]; ?></td>
<td><?php echo $data[3]; ?></td>
<td><?php echo $data[4]; ?></td>
<td><a href="delete.php<?php echo '?no_peng='.$data[0]; ?>">Delete</a></td>
</tr><?php
}
?>
</form>
		</div>
		
      </body>
</html>
