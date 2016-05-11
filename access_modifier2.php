<html>
	<head>
		<title> Inheritance Class </title>
	</head>
	<body>
	<h1> hello World</h1>
	
	<?php
	 
	 class Getters_Setters{
		 
		 
		 private $a = 1;
		 
		 public function get_a(){
			 return $this->a;
		 }
		 public function set_a($value){
			 $this->a = $value;
		 }
	 }
	 
	$example = new Getters_Setters();
	
	//echo $example->a; //can not access private variable
	
	echo "Get method: {$example->get_a()}<br/>";
	$example->set_a(14);
	echo "after set 14 then Get method call: {$example->get_a()}";
	 
	 
	?>
	</body>

</html>
