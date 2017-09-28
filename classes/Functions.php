<?php
	function login_user($email,$password,$conn)
	{
		$sql = "SELECT password FROM user where email='".$email."'";
		$result = $conn->query($sql);
		if($result->num_rows>0)
		{
			while($row = $result->fetch_assoc())
			{
				if($row['password']==$password)
				{
					echo '<script language="javascript">';
					echo 'alert("Welcome")';
					echo '</script>';
				}
				else
				{
					echo '<script language="javascript">';
					echo 'alert("Incorrect Password")';
					echo '</script>';
				}
		}
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("Incorrect Password")';
			echo '</script>';
		}
	}
?>