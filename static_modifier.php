
<html>
	<head>
		<title> Static Modifier </title>
	</head>
	<body>
	<h1> hello World</h1>
	
	<?php
	  
	  //static modifier cann't access from the instance
	  
	  class Students{
		  
		  static $total_student = 0;
		  
		  static function add_student(){
			  
			  echo "hello adding";
			  
		  }
		  
		  static  function welcome_student($value = "Welcome"){
			  echo "<br/>{$value} Student<br />";
		  }
	  }
	  //$student = new Students()
	  //echo $student->total_student;
	  echo Students::$total_student; //cann't use $this bcoz this is static 
	  echo Students::welcome_student("How are you,");
	  echo Students::welcome_student();
		Students::$total_student = 2;
	  echo Students::add_student();
	  
	  
	  echo "<hr/>";
	  
	  // another example 
	  
	  class One{
		  
		  static $foo = 0;
	  }
	  class Two extends One{
		  		  
	  }
	  class Three extends One{
		  
	  }
	  One::$foo=1;
	  Two::$foo=2;
	  Three::$foo=3;
	  
	  echo One::$foo;	//3
	  echo Two::$foo;	//3
	  echo Three::$foo;	//3
	  

	?>
	</body>

</html>
