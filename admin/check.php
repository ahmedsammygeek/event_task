<?php

session_start();
$username=$_POST['username'];
$password=$_POST['password'];


if($username&&$password)
{

$connect=mysqli_connect("localhost","root","" , "event_task") or die ("couldn't connect!");


$query=mysqli_query($connect ,"SELECT* FROM admins where username='$username'");
$numrows=mysqli_num_rows($query);
//echo $numrows;

// check if user exsists in the database 
if($numrows!=0)
{
	while( $row=mysqli_fetch_assoc($query))
		{
			$dbusername=$row['username'];
			$dbpassword=$row['password'];
		}
//chaeck ti see if username and password entered by the user match the details in the login table

	if($username==$dbusername&&$password==$dbpassword)
		{ echo "you are in !! click <a href='index.php'>here<a> to enter adminpanel";
		   $_SESSION['username']=$dbusername;
		}
	else
		{echo "Incorrect password!";}
}

else
die("That user does not exsist");
}

else 
die ("please enter a username and a password!");

?>