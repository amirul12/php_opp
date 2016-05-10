<html>
	<head>
		<title> Variable Variables </title>
	</head>
	<body>
	<h1> hello World</h1>
	
	<?php
	
	$a = "hello";
	$hello = "Hello everyone";
	echo $a. "<br />";
	echo $hello ."<br/>";
	
	echo $$a ."</br>";
	
	// Dose $$var[1] mean"
	// #1 get the first element the evalute value
	// #2 evaluate dynamically then generated first element
	
	// we use {} to make it clear to understand
	// example echo${$var[1]};  //#1 to work
	//example  echo${$var}[1];   //#2 towork
	?>
	</body>

</html>
