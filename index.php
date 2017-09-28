<?php 

include 'C:/xampp/htdocs/PhP_Practice/config/Database.php';
include 'C:/xampp/htdocs/PhP_Practice/classes/Functions.php';
$e_empty ="";
$p_empty="";
$email = "";
$password = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$email = $_POST['email'];
	$password = $_POST['Password'];
	
	if(empty($email))
	{
		$e_empty = "Email should not be empty";
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		$e_empty = "Invalid Email id";
	}
	if(empty($password))
	{
		$p_empty = "Password required";
	}
	if(empty($e_empty) && empty($p_empty))
	{
		$obj = new Database;
		$res = login_user($email,$password,$obj->con);
	}
}
?>
<DOCTYPE html>
<html>
<head>
	<title>
		PHP-Exercise
	</title>
</head>

<body>
	<div style="height:275px"></div>
	<div align="center">
		<form method="post" action="/PhP_Practice/index.php">
			<p style="font-size:20px">
	E-Mail  :<input type="text" name="email" value="<?php echo $email; ?>" /><br>          <?php echo $e_empty; ?><br>
	Password:<input type="Password" name="Password"/><br>     <?php echo $p_empty; ?><br>
		<input type="submit" name="submit" value="Login"/>
			</p>
		</form>
	</div>
</body>
</html>