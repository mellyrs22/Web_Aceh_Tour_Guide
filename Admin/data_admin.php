<!DOCTYPE html>
<?php 
include('koneksi.php');
?>
<html>
<body>
<?php empty( $app ) ? header('location:../homeadmin.php') : '' ; if(isset($_SESSION['level'])){?>

<?php if($_SESSION['level']!='admin'){
echo '<div class="alert alert-error"> Maaf Anda Harus Login sebagai level Admin terlebih dahulu untuk mengakses halaman ini </div>';//jika bukan admin jangan lanjut
die ('');
?>

<?php } ?>

<p>
	<a href="http://localhost/phpmyadmin/index.php" class="btn btn-mini"><i class="icon-lock"></i> Management Data Admin</a>&nbsp;
	<a href="http://localhost/Project/login_multiuser/homeupdate.php" class="btn btn-mini"><i class="icon-wrench"></i> Peraturan</a>&nbsp;
</p>

<div class="tab-content">
<table class="table table-bordered table-condensed table-hover">
	<thead>
		<tr class="nowrap">
			<th align="left">Username</th>
			<th align="left">Nama</th>
			<th align="left">Tempat Lahir</th>
			<th align="left">Tanggal Lahir</th>
			<th align="left">Alamat</th>
			<th align="left">Email</th>
			<th align="left">Ponsel</th>
			<?php if($_SESSION['level']=='admin'){?>
			<th colspan = "2" align="center">Alat</th>
			<?php } ?>
		</tr>
	</thead>
	
	<tbody>
	<?php
    $sql = "SELECT username, nama, tempat, lahir, alamat, email, hp FROM user WHERE level=1";
	foreach ($dbh->query($sql) as $data) :
    ?>
		<tr class="nowrap">
			<td><?php echo $data['username'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['tempat'] ?></td>
			<td><?php echo $data['lahir'] ?></td>
			<td><?php echo $data['alamat'] ?></td>
			<td><?php echo $data['email'] ?></td>
			<td><?php echo $data['hp'] ?></td>
			<?php if($_SESSION['level']=='admin'){?>
			<td><a href="app/edit_admin.php?username=<?php echo $data['username'] ?>" class="btn btn-mini"><i class="icon-edit"></i> Edit</a>
			<td><a href="app/hapus_user_admin.php?username=<?php echo $data['username'] ?>" class="btn btn-mini" onClick="return confirm('Delete mahasiswa dengan ID : <?php echo $data['username'];?>');"><i class="icon-trash"></i> Delete</a></td>
			<?php } ?>
			
		</tr>
<?php
    endforeach;
?>
	</tbody>
</table>
<p><b>Note : </b>Data di atas merupakan data admin yang terdaftar di dalam PhpMyadmin yang telah memiliki izin dari kepala perpustakaan untuk mengelola aplikasi ini, untuk mengelola CRUD data admin silahkan kunjungin control panel PhpMyadmin dan cari database "project_perpustakaan" dengan tabel "user", cari user dengan level admin untuk mengelola data admin, lalu fungsi edit &amp; hapus bisa klik pada menu tabel.</p>
</div>
<?php 
}else{
echo '<div class="alert alert-error"> Maaf Anda Harus Login terlebih dahulu untuk mengakses halaman ini </div>';
}
?>

</body>
</html>