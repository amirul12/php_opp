<?php 
 
 $file = 'filetest.txt';
if($handle = fopen($file,'w')){
	
	fwrite($handle,"qqqqq123\n 456 \n 789");  
	$pos=ftell($handle);
	fseek($handle,$pos-6);
	fwrite($handle,"abcdef"); 
	rewind($handle);
	fwrite($handle,"xyzmn");
	fclose($handle);
		 
}
?>