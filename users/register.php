<?php 
session_start();
if (!empty($_POST['username'])) {
	$username=$_POST['username'];
	if (!empty($_POST['password'])) {
		$password=$_POST['password'];
		if (!empty($_POST['email'])) {
			$email=$_POST['email'];
			if (!empty($_POST['address'])) {
				$address=$_POST['address'];
				if (!empty($_POST['phone'])) {
					$phone=$_POST['phone'];
					$connect=mysqli_connect("localhost","root","" , "event_task") or die ("couldn't connect!");
					$query=mysqli_query($connect,"INSERT INTO users VALUES('','$username','$password','$email','$address','$phone') ");
					if ($query) {
						echo "welcome ..";
					}
					else
					{
						echo "an error in your register";
					}

				}
				else
				{
					echo "enter your phone please";
				}
			}
			else
			{
				echo "enter your address please";
			}
		}
		else
		{
			echo "enter your email please";
		}
	}
	else
	{
		echo "enter password please";
	}
}
else
{
	echo "enter user name please";
}



?>