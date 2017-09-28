<?php

require 'config/Database.php';

class User extends Database {

	public function login_user($email,$password){
		$sql = "SELECT password FROM user where email='".$email."'";

		$result = $this->con->query($sql);
		if($result->num_rows>0)
		{
			while($row = $result->fetch_assoc())
			{
				if($row['password']==$password)
				{
					return true;
				}
				else
				{
					return false;
				}
		}
		}
		else
		{
			return false;
		}
	}
	

	public function UserRegister($name,$email,$password){

		$password =$password;
		$stmt = "INSERT INTO user(user_name,email,password) VALUES ('$name','$email','$password')";

		$query = mysqli_query($this->con,$stmt);
		if($query){
			return true;
		}
			else{
				return false;
			}
	}

	public function isUserExist($name,$email,$password){
		$stmt = "SELECT * FROM user WHERE email = '$email'";
		$sql = mysqli_query($this->con,$stmt);
		$row = mysqli_num_rows($sql);
		if($row > 0){
			return true;
		} else {
			false;
		}


	}
}





?>