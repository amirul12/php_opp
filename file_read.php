<?php
$file = 'filetest.txt';
if($handle = fopen($file,'r')){ //reading from text file
	
	$content = fread($handle,6);
	fclose($handle);
 	
}
 echo $content;
 echo "<be/>";
 echo nl2br($content);
 echo "<hr/>";
 
 //use filesize() to read the whole file
 
 $file = 'filetest.txt';
	if($handle = fopen($file,'r')){ //reading from text file
	
	$content = fread($handle,filesize($file));
	fclose($handle);
 	
}
echo nl2br($content);
echo "<hr/>";

$content = file_get_contents($file);
echo  $content;
echo "<hr/>";

//incremental reading

$file = 'filetest.txt';
$content = "";
if($handle = fopen($file,'r')){
	
	while(!feof($handle )){
	$content .= fgets($handle);
	}
	fclose($handle);
}
echo  $content;
echo "<hr/>";

?>