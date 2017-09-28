
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="modify.css">
	<title>
		
	</title>
</head>
<body>

	<!-- <h3>Sign Up</h3> -->
	<!-- <form method="post">
		<label>Name : </label>
		<input type="text" name="user_name" required></br></br>
		<label>Email : </label>
		<input type="email" name="user_email" required></br></br>
		<label>Password : </label>
		<input type="password" name="user_password"></br></br>
		<label>confirm Password : </label>
		<input type="password" name="confirm_password"></br></br>
		<input type="submit" name="register" value="Register">
	</form> -->
	<div class="wrapper">
    <form class="form-signin" method="post">       
      <h2 class="form-signin-heading">Please SignIn</h2>
      <input type="text" class="form-control" name="user_name" placeholder="UserName" required="" autofocus="" />
      <input type="text" class="form-control" name="user_email" placeholder="Email Address" required="" autofocus="" />
      <input type="password" class="form-control" name="user_password" placeholder="Password" required=""/>      
      <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required=""/>    
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>   
    </form>
  </div>
</body>
</html>