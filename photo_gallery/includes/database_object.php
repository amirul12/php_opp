<?php
require_once(LIB_PATH.DS.'database.php');
 
 class DatabaseObject{
	 
	 protected static $table_name ="users";
		 
	 	public  static function find_all(){
		 return self::find_by_sql("SELECT * FROM ".self::$table_name);
	 }
		 

		 public static function find_by_id($id=0) {
        
            $result_array=self::find_by_sql("Select * from ".self::$table_name." where id={$id} limit 1");
            //if (!empty($result_array)) {
            //    return array_shift($result_array);
           // } else {
           //     return FALSE;
           // }
		return !empty($result_array) ? array_shift($result_array) : false;
        }
	 public static function find_by_sql($sql=""){
		global $database;
		$result_set = $database -> query($sql);
		$object_array = array();
		while($row = $database->fetch_array($result_set)){
				$object_array[] = self::instantiate($row);
		}
		return $object_array;
		 
	 }
	 

	

	 
	 private static function instantiate($record){
		 $object = new self;
		// $object->id 			= record['id'];
		// $object->password 		= record['password'];
		// $object->username 		= record['username'];
		// $object->first_name 	= record['first_name'];
		// $object->last_name 	= record['last_name'];
		 
		foreach($record as $attribute=>$value){
		  if($object->has_attribute($attribute)) {
		    $object->$attribute = $value;
		  }
		 }
		 
		 return $object;
	 }
	 

	 
	private function has_attribute($attribute) {
	  // get_object_vars returns an associative array with all attributes 
	  // (incl. private ones!) as the keys and their current values as the value
	  $object_vars = get_object_vars($this);
	  // We don't care about the value, we just want to know if the key exists
	  // Will return true or false
	  return array_key_exists($attribute, $object_vars);
	}
	 
	 
 }