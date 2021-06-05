<!DOCTYPE html>
<?php 
include('koneksi.php');
?>
<html><style type="text/css">
<!--
body,td,th {
	font-family: Narkisim;
	font-size: 18px;
}
-->
</style>
<body>
<?php empty( $app ) ? header('location:../homeadmin.php') : '' ; if(isset($_SESSION['level'])){?>

<?php if($_SESSION['level']!='admin'){
echo '<div class="alert alert-error"> Maaf Anda Harus Login sebagai level Admin terlebih dahulu untuk mengakses halaman ini </div>';//jika bukan admin jangan lanjut
die ('');
?>

<?php } ?>
<div style="text-align:justify;"><img src="../catatan.png" width="50" height="50" style="float:left; margin:0 9px 3px 0;" />
<legend><strong> <marquee direction="Right">
Data Buku Pada Perpustakaan
</marquee></strong></legend>
</h3>
<form name="form1" method="post" action="">
  <table width="459" border="0" align="right">
      <tr>
        <td width="175">&nbsp;</td>
        <td width="144"><label for="tcari"></label>
        <input type="text" name="tcari" placeholder="Search... "id="tcari"></td>
        <td width="39"><input type="submit" name="button" id="button" value="Search" class="btn-info btn style12"/></button></td> 
        <td width="83"><input type="submit" name="button" id="button" value="All Data" class="btn-info btn style12" /> <?php echo $app=='List Book'?'class="active"' :'';?><a href="index.php?app=list_books"></a> </button></td>   
      </tr>
    </table>
   <p>&nbsp;</p>
 <p>&nbsp;</p>
<p><a href="http://localhost/Pustaka_Almus/login_multiuser/app/pdf_data_buku.php" class="btn btn-mini style12"><i class="icon-print"></i>Print</a><strong>&nbsp;<a href="http://localhost/Pustaka_Almus/login_multiuser/app/input_buku.php" class="btn btn-mini style12"><i class="icon-qrcode"></i> Input Buku</a></p>
<p>&nbsp;</p>
  <div align="center"></div>
     <table width="635" height="94" align="center" class="table table-bordered table-condensed table-hover">
        <thead><tr>
       	  <th width="41" height="53" align="left" bgcolor="#CCCCCC"><div align="center">ID Buku</div></th>
		  <th width="54" align="left" bgcolor="#CCCCCC"><div align="center">Judul Buku</div></th>
		  <th width="48" align="left" bgcolor="#CCCCCC"><div align="center">Sifat Buku</div></th>
          <th width="65" align="left" bgcolor="#CCCCCC"><div align="center">Penerbit</div></th>
		  <th width="52" align="left" bgcolor="#CCCCCC"><div align="center">Thn Terbit</div></th>
		  <th width="75" align="left" bgcolor="#CCCCCC"><div align="center">Jmlh Halaman</div></th>
          <th width="62" align="left" bgcolor="#CCCCCC"><div align="center">Asal Buku</div></th>
		  <th width="65" align="left" bgcolor="#CCCCCC"><div align="center">Jumlah Buku</div></th>
		  <th width="78" align="left" bgcolor="#CCCCCC"><div align="center">Tanggal Update</div></th>
        <?php if($_SESSION['level']=='admin'){?>
			<th colspan = "2" align="center" bgcolor="#CCCCCC"><div align="center" class="style7"><strong>Alat</strong></div></th>
		  <?php } ?>
		</tr>
	</thead>
<?php
  /* Koneksi Ke Database*/
  mysql_connect("localhost","root","setia1995");
  mysql_select_db("project_perpustakaan");
  /*----------------------------------*/
  /* Script untuk pencarian */
  if(isset($_POST['button'])){
  $sql=mysql_query("select * from buku where judul  Like '%".$_POST['tcari']."' or sifat  Like '%".$_POST['tcari']."' or penerbit  Like '%".$_POST['tcari']."' or terbit Like '%".$_POST['tcari']."' or peroleh  Like '%".$_POST['tcari']."' or jumlah  Like '%".$_POST['tcari']."'");
  }else{
  $sql=mysql_query("select * from buku");
  }
  /*---------------------------------*/
  while($data=mysql_fetch_array($sql)){
  ?>
         <tbody>
          <tr class="nowrap">
            <td height="33"><div align="center"><?php echo $data['id_buku']?></div></td>
            <td><div align="left"><?php echo $data['judul']?></div></td>
            <td><div align="center"><?php echo $data['sifat']?></div></td>
            <td><div align="left"><?php echo $data['penerbit'] ?></div></td>
            <td><div align="center"><?php echo $data['terbit'] ?></div></td>
             <td><div align="center"><?php echo $data['halaman'] ?></div></td>
            <td><div align="left"><?php echo $data['peroleh'] ?></div></td>
            <td><div align="center"><?php echo $data['jumlah'] ?></div></td>
            <td><div align="center"><?php echo $data['tanggal'] ?></div></td>
         <?php if($_SESSION['level']=='admin'){?>
			<td width="48"><div align="center"><strong><a href="app/edit_user.php?username=<?php echo $data['username'] ?>" class="btn btn-mini"> Edit</a>
		    </strong></div>
		  <td width="81"><div align="center"><strong><a href="app/hapus_user.php?username=<?php echo $data['username'] ?>" class="btn btn-mini" onClick="return confirm('Delete Siswa dengan NIS : <?php echo $data['username'];?>');"> Delete</a></strong></div></td>
		  <?php } ?>
		</tr>
</tbody>  
        <?php
  }
  ?>
    </table>
</form>
      <p>&nbsp;</p>
      </p>
      <p>Note : Data di atas merupakan data buku yang terdapat di dalam sistem perpustakaan, yang telah ditambahkan oleh seorang admin dan dilakukan penambahan buku secara berkala ketika ada buku baru yang terupdate, untuk menambahkan kapasitas buku bisa dilakukan pengeditan data jumlah buku. </p>
  <p align="right">&nbsp; </p>
  
</div>
<?php 
}else{
echo '<div class="alert alert-error"> Maaf Anda Harus Login terlebih dahulu untuk mengakses halaman ini </div>';
}
?>

</body>
</html>