
<?php
require 'classes/Functions.php';
	$obj_register = new User();
	if(isset($_POST['register'])){

		$name = $_POST['user_name'];
		$email = $_POST['user_email'];
		$password = $_POST['user_password'];
		$confirm_password = $_POST['confirm_password'];

		if($confirm_password != $password){
			 echo "<script>alert('Password Not Matched')</script>";
		}
		else
		{	
			if($obj_register->isUserExist($name,$email,$password))
			{
				echo "<script>alert('Email Already registered')</script>";	
			}
			else {
				$user = $obj_register->UserRegister($name,$email,$password);
				if($user){
					echo "success";
				}
				else{
					echo "error register";
				}
			}	
		}
	}
	


?>


<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>

	<h3>Sign Up</h3>
	<form method="post">
		<label>Name : </label>
		<input type="text" name="user_name" required></br></br>
		<label>Email : </label>
		<input type="email" name="user_email" required></br></br>
		<label>Password : </label>
		<input type="password" name="user_password"></br></br>
		<label>confirm Password : </label>
		<input type="password" name="confirm_password"></br></br>
		<input type="submit" name="register" value="Register">
	</form>

</body>
</html>