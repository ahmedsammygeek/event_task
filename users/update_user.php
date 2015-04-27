<?php session_start();


if(!isset($_SESSION['username'])) {


	die("you can't go here unless you login <a href='login.php'>login page</a>");
}


if (isset($_GET['id'])) {
	$id=$_GET['id'];
}
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$connect=mysqli_connect("localhost","root","" , "event_task") or die ("couldn't connect!");

$sql = "UPDATE users SET username='$username' , password='$password' , email = '$email' , address='$address' , phone = '$phone'  WHERE id = '$id' ";
$query=mysqli_query($connect, $sql);
if ($query) {
	echo "your update executed <a href='profile.php?id=$id'>go to your profile</a>";
}
else
{
	printf(mysqli_error($connect));
					// echo "an error in your update";
}

?>