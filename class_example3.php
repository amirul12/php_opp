<html>
	<head>
		<title> Class example 3 </title>
	</head>
	<body>
	<h1> example of Person Class </h1>
	<?php
	 class Person{
		 var $first_name;
		 var $last_name;
		 
		 var $arm_count = 2;
		 var $leg_count = 2;
		 
		 
		 function say_hello(){
			echo "Hello from inside the class ".get_class($this)."<br>";
		 }
		 function full_name(){
			 return $this->first_name."  ".$this->last_name; // please use variable name without $first_name where not use $ sign
		 }
		 
		 
	 }

	 $person = new Person();// instance/object create of Person class 
	 echo $person->arm_count; // direct print value of the member of the class
	 echo "<br/>";
	 
	 $person->first_name="Amirul"; // access the member
	 $person->last_name="Islam";
	 
	 
	 echo $person->full_name();// call the member function
	  echo "<br/>";
	 
	 $new_person =  new Person();
	 $new_person -> first_name="  Mizan";
	 $new_person -> last_name=" Rahman";
	 
	 echo $new_person->full_name();
	  
	 
	 
	 
 
	
	?>
	
	</body>

</html>
