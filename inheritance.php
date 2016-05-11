<html>
	<head>
		<title> Inheritance Class </title>
	</head>
	<body>
	<h1> hello World</h1>
	
	<?php
	class Car{
		
		var $wheels = 4;
		var $doors = 4;
		
		function wheelsdoors(){
			return $this->wheels + $this->doors;
		}
	}
	
	class Compact extends Car{
		
		
	}
	$car1 = new Car();
	$car1 =new Car();
	
	echo $car1->wheels."<br />";
	echo $car1->doors."<br />";
	echo $car1->wheelsdoors()."<br />";
	 
	 
	?>
	</body>

</html>
