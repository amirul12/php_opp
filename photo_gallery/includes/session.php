<?php

class Session{
	
	private $logged_in;
	public $user_id;
	function __construct(){
		session_start();
		$this->check_login();
		if($this-> $logged_in){
			
		}else{
			
		}
		
	}
	
	public function is_logged_in(){
		return $this->logged_in;
	}
	private function check_login(){
		if(isset($_SESSION['user_id'])){
			
			$this->user_id = $_SESSION['user_id'];
			$this->logged_in= true;
		}else{
			unset($this->user_id);
			$this->logged_in= false;
			
		  
		}
		
	}
	
}
 $session = new Session();


?>