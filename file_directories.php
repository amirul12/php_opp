<?php

	//current working Directory
	echo getcwd()."<br/>"; 
	
	//mkdir()
	mkdir('new',0777); // 0777 is the PHP default
	
	// umask() to change default permission setting
	// default may be 0022
	
	mkdir('new/test/test2',0777,true);
	
	// change sir
	chdir('new');
	echo getcwd()."<br/>"; 
	
	//removing directory
	rmdir('test/test2');
	
	
	
?>