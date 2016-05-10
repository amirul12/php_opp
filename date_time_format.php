<html>
	<head>
		<title>Date time format </title>
	</head>
	<body>
	<h1> hello World</h1>
	<?php
	 $timestamp = time();
	 echo strftime("Today Date is:%d/%m/%y",$timestamp);
	 echo "</br>";
	 
	 $dt = time();
	 $database_time = strftime("%Y-%m-%d : %H:%M:%S");
	 echo $database_time;
	 
	
	?>
	
	</body>

</html>
