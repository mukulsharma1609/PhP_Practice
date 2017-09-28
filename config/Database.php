<?php

class Database {

	public $con;
	public function __construct(){
		$this->con = mysqli_connect("localhost","root","vengatesh","php_practice");
		if($this->con){
			echo "connected";
			
			
		}
		else {
			echo "Error in Connection";
		}
	}
	
}
?>