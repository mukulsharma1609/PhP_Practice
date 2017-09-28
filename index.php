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
		echo "<script>alert('Welcome')</script>";
	}
	else {
		echo "<script>alert('Wrong password')</script>";
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
		<form method="post">
			<p style="font-size:20px">
	E-Mail  :<input type="text" name="email" value="<?php echo $email; ?>" /><br>          <?php echo $e_empty; ?><br>
	Password:<input type="Password" name="Password"/><br>     <?php echo $p_empty; ?><br>
		<input type="submit" name="submit" value="Login"/>
			</p>
		</form>
	</div>
</body>
</html>