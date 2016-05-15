<?php 
	
	function strip_zero_date($marked_string = ""){
		// first removed the marked zero
		
		$no_zero = str_replace('*0', '', $marked_string);
		
		//then removing any removing marks
		$cleaned_string = str_replace('*0', '', $no_zero);
		return $cleaned_string;
	}
	
	function redirect_to($location=NULL){
		
		if($location != NULL){
			header("Location:{$location}");
			exit;
		}
	}
	
	function output_message($message = ""){
		if(!empty($message)){
			return "<p class=\"message\">{$message}</p>";
		}else{
			return "";
		}
	}
	






?>