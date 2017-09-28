<?php

class Database {

	public $con;
	public function __construct(){
		$this->con = mysqli_connect("localhost","root","","php_practice");
		if($this->con){
			echo "Connected";
		}
		else {
			echo "Error in Connection";
		}
	}
}


?>