<html>
	<head>
		<title> Parents  Class </title>
	</head>
	<body>
	<h1> hello World</h1>
	
	<?php
	 class A{
		 static $a = 1;
		 
		 static function modifier_a(){
			 return self::$a + 10;// self or use class A that means same
		 }
		 public function hello(){
			  echo "<br/> Hello World from A class";
		 }
	 }
	 class B extends A{
		 static function after_test(){
			 echo parent::$a;
		 }
		 static function method_test(){
			 echo parent::modifier_a();
		 }
		 public function instance(){ // create object and access this method
			 echo parent::hello();
		 }
		 public function hello(){
			 echo "<br/>B class ";
			 echo parent::hello();
			 echo "<br/>B class";
		 }
		
	 }
 
	 echo B::$a. "<br/>"
	 echo B::modifier_a(). "<br/>"
 
	 
	 
	 
	 echo B::$a. "<br/>";
	 echo B::modifier_a(). "<br/>";
	 
	 
	 echo B::after_test(). "<br/>";
	 echo B::modifier_a(). "<br/>"; 
	 
	 $object = new B();
	 echo $object-> instance();
	 echo $object-> hello();
	 
 

	  
	?>
	</body>

</html>
