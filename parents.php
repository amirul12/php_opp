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
	 }
	 class B extends A{
		 static function after_test(){
			 echo parent::$a;
		 }
		 static function method_test(){
			 echo parent::modifier_a();
		 }
	 }
	 echo B::$a. "<br/>"
	 echo B::modifier_a(). "<br/>"

	  
	?>
	</body>

</html>
