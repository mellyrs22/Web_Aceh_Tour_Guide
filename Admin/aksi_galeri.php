<?php

include "koneksi.php";

$nama = $_POST['nama'];

$file_max_weight = 2000000; //limit the maximum size of file allowed (20Mb)

$ok_ext = array('jpg','png','gif','jpeg','png'); // allow only these types of files

$destination = '../Admin/Uploads/' ; // where our files will be stored



// PHP sets a global variable $_FILES['file'] which containes all information on the file
// The $_FILES['file'] is also an array, so to have the file name we're supposed to write $_FILES['file']['name']
// To shorten that I added the following line. With that I could just do $file['name']
$file = $_FILES['Gambar'];
$filename = explode(".", $file["name"]); 
$file_name = $file['name']; // file original name
$file_name_no_ext = isset($filename[0]) ? $filename[0] : null; // File name without the extension
$file_extension = $filename[count($filename)-1];
$file_weight = $file['size'];
$file_type = $file['type'];
// If there is no error
if( $file['error'] == 0 )
{
    // check if the extension is accepted
    if( in_array($file_extension, $ok_ext)):
        // check if the size is not beyond expected size
                // rename the file
                $fileNewName = md5( $file_name_no_ext[0].microtime() ).'.'.$file_extension ;
                // and move it to the destination folder
                if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName) ):
                   echo "File uploaded !";
				   $sql="INSERT INTO galeri VALUES('','$nama','$fileNewName')";
					echo $sql;
					mysql_query($sql);
					header("location:report5.php?offset=0");
                else:
                    echo "can't upload file.";
                endif;
    else:
       echo "File type is not supported.";
    endif;
}
?>


