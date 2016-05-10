<html>
	<head>
		<title>Seats </title>
	</head>
	<body>
	<h1> hello World</h1>
	
	<?php
	$a = "Amir";
	$b = "Mizan";
	$c = "Sadhin";
	$d = "Ashek";
	$e = "Sagar";
	
	$students = array('a', 'c', 'e');
 
	
	echo"<pre>";
	foreach($students as $seats){
		
		print_r( ${$seats}."</br>");//repeated two $ sign 
		print_r( $$seats."</br>");//repeated two $ sign ,same as first
		
	}
	echo"</pre>"; 
	?>
	</body>

</html>
