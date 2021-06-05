<?php

include "koneksi.php";
$id = $_POST['id_wisata'];
$nama = $_POST['nama'];
$Destinasi = $_POST['Destinasi'];
$Durasi = $_POST['Durasi'];
$Keterangan = $_POST['Keterangan'];
$gambar_lama=$_POST['gambar_lama'];
$file = $_FILES['gambar_makanan'];
$filename = explode(".", $file["name"]);
$file_name = $file['name'];
if ($file_name == null)
{
	$sql="UPDATE wisata SET nama_wisata='$nama', destinasi='$Destinasi', durasi='$Durasi', keterangan='$Keterangan' WHERE id_wisata ='$id'";
	
	mysql_query($sql);
	header("location:report3.php?offset=0");
}
else
{
	$file_max_weight = 2000000; //limit the maximum size of file allowed (20Mb)
	$ok_ext = array('jpg','png','gif','jpeg','png','bmp'); // allow only these types of files
	$destination = '../Admin/Uploads/'; // where our files will be stored
	
	$file_name_no_ext = isset($filename[0]) ? $filename[0] : null; // File name without the extension
	$file_extension = $filename[count($filename)-1];
	echo $file_extension;
	$file_weight = $file['size'];
	$file_type = $file['type'];
	echo $file_type;
	// If there is no error
	echo $file['error'];
	if( $file['error'] == 0 )
	{
		// check if the extension is accepted
		if( in_array($file_extension, $ok_ext)) 
		{
			// check if the size is not beyond expected size
					// rename the file
					$fileNewName = md5 ($file_name_no_ext[0].microtime() ).'.'.$file_extension ;
					echo $fileNewName;// and move it to the destination folder
					if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName))
					{
						echo "File uploaded !";
						unlink("../Admin/Uploads/$gambar_lama"); //menghapus gambar yang telah di upload
						$sql="UPDATE wisata SET nama_wisata='$nama', destinasi='$Destinasi', durasi='$Durasi', gambar='$fileNewName', keterangan='$Keterangan' WHERE id_wisata ='$id'" ;
						
						mysql_query($sql);
						header("location:report3.php?offset=0");
					} 
					else 
					{
						echo "can't upload file.";
					}
		} 
		else
		{
		   echo "File type is not supported.";
		}
	} 
	else
	{
		echo "cek";
	}
}
