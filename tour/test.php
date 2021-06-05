<?php 

$row = 1 ;
$col = 3 ;

for($i=1; $i<=$row; $i++){
	echo "MUNCUL BARIS ke $i | \n";
	for($j=1; $j<=$col; $j++){
		if($j == 3){
			echo "MUNCULKAN YANG TERAKHIR";
		} else {
			echo "MUNCUL KOLOM | \n";
		}
	}
	echo "<br>";
}

?>




