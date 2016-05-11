<html>
	<head>
		<title> Constracts and Destructs </title>
	</head>
	<body>
	<h1> hello World</h1>
	
	<?php
	 class Table{
		 
		 public $legs;
		 static public $total_tables = 0;
		 
		 function __construct(){
			 $this->legs = 4;
			 Table::$total_tables++;
		 }
		 function __destruct(){
			 
			 Table::$total_tables++;
		 }
	 }
	
	 $table = new Table();
	 echo $table->legs."<br>";
	 echo Table::$total_tables."<br> First: <br>";
	 $tb1 = new Table();
	 echo Table::$total_tables."<br>Secound: :<br> ";
	 $tb2 = new Table();
	 echo Table::$total_tables."<br ";
	 
	 
	?>
	</body>

</html>
