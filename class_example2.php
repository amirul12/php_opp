<html>
	<head>
		<title>Date time format </title>
	</head>
	<body>
	<h1> hello World</h1>
	<?php
	 class Person{
		 function say_hello(){
			echo "Hello from inside the class ".get_class($this)."<br>";
		 }
		 
		 function hello(){
			 
			 $this->say_hello();
		 }
		 function adding($a, $b){
			 
			 $sum = $a + $b;
			 return $sum;
		 }
	 }
	 
	 $person = new Person();
	 $person ->say_hello();
	 $person ->hello();
	 
	 $s=$person ->adding(5,6);
	 echo $s;
	 
	 
	 
 
	
	?>
	
	</body>

</html>
