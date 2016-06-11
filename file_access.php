<?php 
$file = 'filetest.txt';
if($handle = fopen($file,'w')){
	
	fwrite($handle,'abc'); // returns number of bytes or false
	$content = "123\n 456"; // double quotes  with(\n)
	fwrite($handle,$content); // returns number of bytes or false
	fclose($handle);
	 
}else{
	
	echo "Could not open file for writing";
}
$file = 'filetest.txt';
$content = "amar sonar bangla\n ami tumai valo basi";
if($size = file_put_contents($file, $content)){
	echo "A file of {$size} bytes was created";
}



?>