<?php 
include 'classes/Functions.php';
$obj_login = new User();
$e_empty ="";
$p_empty="";
$email = "";
$password = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$email = $_POST['email'];
	$password = $_POST['Password'];
	$res = $obj_login->login_user($email,$password);
	if($res){
		echo '<div class="alert alert-success fade in">';
    	echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
    	echo '<strong>Success!</strong> Your <a href="#" class="alert-link">To PHP - SAMPLE EXERCISE</a> has been sent successfully.';
		echo '</div>';
	}
	else 
	{
		echo '<div class="alert alert-danger">';
  		echo '<strong>ERROR: </strong>Something Went Wrong.';
		echo '</div>';
	}
}
?>
<DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="modify.css">
	<title>
			PHP-Exercise
	</title>
</head>

<body>
	<!-- <div style="height:275px"></div>
	<div align="center">
		<form method="post" action="/PhP_Practice/index.php">
			<p style="font-size:20px">
	E-Mail:<input type="text" name="email" value="<?php echo $email; ?>" /><br>          <?php echo $e_empty; ?><br>
	Password:<input type="Password" name="Password"/><br>     <?php echo $p_empty; ?><br>
		<input type="submit" name="submit" value="Login"/>
			</p>
		
	</div> -->
	<div class="wrapper">
    <form class="form-signin" method="post" action="/PhP_Practice/index.php">       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" />
      <input type="password" class="form-control" name="Password" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
      <input type="button" class="btn btn-info btn-lg btn-primary btn-block"  value="Registers" onclick="location.href = 'sign_up.php';">
    </form>
  </div>
</body>
</html>	
