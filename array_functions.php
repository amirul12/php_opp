<html>
	<head>
		<title>Array function </title>
	</head>
	<body>
	<h1> hello World</h1>
	
	<?php
	 $number = array(1,2,3,4,5,6);
	 print_r($number);
	 
	 echo "<hr>";
	 
	 //shift first element out of an array
	 $a = array_shift($number);
	 
	 print_r($a) ."<br>";
	 
	 print_r($number);
	 echo "</br>";
	 //pops that are include last element
	 //and return it as same way.
	 $b = array_pop($number);
	 echo "b: ".$b."</br>";
	 print_r($number)
	 
	 
	?>
	</body>

</html>
