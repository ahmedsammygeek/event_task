<?php
 session_start();


if(!isset($_SESSION['username'])) {


	die("you can't go here unless you login <a href='login.php'>login page</a>");
}


if (!empty($_POST['username'])) {
	$username=$_POST['username'];
	if (!empty($_POST['password'])) {
		$password=$_POST['password'];
		$connect=mysqli_connect("localhost","root","" , "event_task") or die ("couldn't connect!");
		$query=mysqli_query($connect ,"SELECT * FROM users where username='$username' && password='$password'");
		$numrows=mysqli_num_rows($query);
		if ($numrows!=0) {
			echo "welcome $username click here <a href=profil.php>goto your profil</a>";
		}
		else
		{
			echo "an error in your info";
		}
	}
	else
	{
		echo "enter your password please";
	}
}
else
{
	echo "enter your name please";
}

?>