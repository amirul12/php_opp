<html>
	<head>
		<title> Inheritance Class </title>
	</head>
	<body>
	<h1> hello World</h1>
	
	<?php
	 class Example{
		 
		 public $a = 1;		//Everywhere
		 protected $b = 2;	//This class only
		 private $c = 3;	// This class and subclass
		 
		 function show_abc(){
			 
			 $output = $this->a;
			 $output .= $this->b;
			 $output .= $this->c;
			 
			 return $output;
		 }
		 
	 }
	 
	 $example = new Example();
	 
	 echo "Access public : {$example->a}";
	 
	 // Cannot access protected property Exampl 
	 //echo "Access protected : {$example->b}";
	 
	 //  Cannot access private property Example
	//echo "Access private : {$example->c}";
	 
	 
	 
	 
	?>
	</body>

</html>
