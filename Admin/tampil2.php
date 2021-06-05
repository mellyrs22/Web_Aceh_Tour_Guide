<html>
<head>
<title>Data Penjemputan</title>
</head>
<body>
<div id="logo"><img src="wp-content/uploads/2012/12/background_1.jpg" width="1500" height="175" alt="Logo" /></div>
 
<HR size="10" noshade>
         
	<form action="proses2.php" method="post" class="cart_form" id="shop_checkout" style="margin:0;padding:0;">
		

				<fieldset id="cart_delivery_information" class="simplecart_fieldset">
			<legend>Data Penjemputan</legend>

			<p>Input info data penjemputan.</p>

			<table>
			<tbody>
			<tr>
				<tr><td>Lokasi : <span title="This field is required." class="form-required"></span></td><td>
			<input size="32" name="lokasi" maxlength="64" type="text">

			</td></tr>
			<tr><td>Alamat : <span title="This field is required." class="form-required"></span></td><td>
			<input size="32" name="alamat" maxlength="64" type="text">

			</td></tr>
			<tr><td>Tanggal : <span title="This field is required." class="form-required"></span></td><td>
			<input size="32" name="tanggal" placeholder="YYYY-MM-DD" maxlength="64" type="text">

			</td></tr>
			<tr><td>Waktu : <span title="This field is required." class="form-required"></span></td><td>
			<input size="32" name="waktu" placeholder="jam:menit:detik" maxlength="64" type="text">

			</td></tr>
			<tr><td>No Penerbangan : <span title="This field is required." class="form-required"></span></td><td>
			<input size="32" name="no_pen" maxlength="64" type="text">

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
$sql = "select * from dt_jemput order by no_peng";
$hasil = mysql_query($sql,$conn);
?>

<table width="1100" border="1" cellspacing="0" cellpadding="2">
<tr>
<td width="60" align="Center">Nomor</td>
<td width="300" align="Center">Lokasi</td>
<td width="300" align="Center">Alamat</td>
<td width="300" align="Center">Tanggal</td>
<td width="300" align="Center">Waktu</td>
<td width="300" align="Center">No Penerbangan</td>
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
<td><?php echo $data[5]; ?></td>
<td><a href="delete2.php<?php echo '?no_peng='.$data[0]; ?>">Delete</a></td>
</tr><?php
}
?>
</form>
		</div>
		
      </body>
</html>
