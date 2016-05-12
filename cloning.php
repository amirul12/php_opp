<html>
	<head>
		<title> Cloning </title>
	</head>
	<body>
	<h1> Cloning</h1>
	
	<?php
	
	
	 class Fruits{
		 public $name;
		 
		 function __construct(){
			 echo "Creating new object <br/>";
		 }
		 function __clone(){
			 echo "Clone has been created <br/>";
		 }
		 
	 }
	 
	 $a  = new Fruits(); //construct method are called
	 $a->name= "Mango";
	 $b = $a;
	 $b->name = "Jack fruits";
	 echo $a->name;
	 echo "<br>";
	 
	 $c = clone $a;  //clone method are called
	 $c-> name = "Mango Juice";
	 echo $a->name;
	 
	?>
	</body>

</html>
