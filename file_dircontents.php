<?php
	// fopen/fread/fclose
	//opendir(), readdir(), closedir()
	
	$dir = ".";
	if(is_dir($dir)){
		if($dir_handle = opendir($dir)){
			while($filename = readdir($dir_handle)){
				echo "filename: {$filename} <br/>";
			}
			closedir($dir_handle);
		}
			
	}
	
	echo "<hr/>";
	// scandir() reads all file names into an array
	if(is_dir($dir)){
		$dir_array = scandir($dir);
		foreach($dir_array as $file){
			if(strpos($file,'.')>0){
				echo "filename: {$file} <br/>";
			}
		}
	}
	
?>