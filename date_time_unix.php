<html>
	<head>
		<title>Date time </title>
	</head>
	<body>
	<h1> hello World</h1>
	<?php
	echo time();
	 echo "<br>";
	$d=mktime(01, 14, 54, 10, 05, 2016);
    echo "Created date is " . date("Y-m-d h:i:sa", $d);
	echo "<br>";
	$f=strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $f) . "<br>";
	echo "<br>";
	$d=strtotime("next Saturday");
	echo date("Y-m-d h:i:sa", $d) . "<br>";
	
	
	echo "After 3 month the day will <br/>";
	$d=strtotime("+3 Months");
	echo date("Y-m-d h:i:sa", $d) . "<br>";
	 
	
	?>
	
	</body>

</html>
