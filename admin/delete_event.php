<?php session_start();


if(!isset($_SESSION['username'])) {


	die("you can't go here unless you login <a href='login.php'>login page</a>");
}
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$connect=mysqli_connect("localhost","root","" , "event_task") or die ("couldn't connect!");
	$query=mysqli_query($connect,"DELETE FROM events WHERE id=$id");
	if ($query) {
		echo "event deleted <a href=events.php>go back!</a>";
	}
	else
	{
		echo "an error in your request";
	}




}






?>
