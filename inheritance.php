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
		
		var $doors = 2;
		
		function wheelsdoors(){
			return $this->wheels + $this->doors + 3;
		}
		
	}
	$car1 = new Car();
	$car2 =new Compact();
	
	// car1 object under class Car
	echo "Car Class and car1 object<br />";
	echo $car1->wheels."<br />";
	echo $car1->doors."<br />";
	echo $car1->wheelsdoors()."<br />";
	
	
    // car2 object under class Compact
	echo "Compact Class and car2 object<br />";
	echo $car2->wheels."<br />";
	echo $car2->doors."<br />";
	echo $car2->wheelsdoors()."<br />";
	
	echo " Check Class which is parents or Not<br />";
	 
	 
	?>
	</body>

</html>
