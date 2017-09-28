<?php
	function login_user($email,$password,$conn)
	{
		$sql = "SELECT password FROM user where email='".$email."'";
		echo $sql;
		$result = $conn->query($sql);
		if($result->num_rows>0)
		{
			while($row = $result->fetch_assoc())
			{
				if($row['password']==$password)
				{
					return "welcome";
				}
				else
				{
					return "Incorrect Password";
				}
		}
		}
		else
		{
			return "user doesn't exist";
		}
	}
?>