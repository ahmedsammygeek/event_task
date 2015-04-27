<?php session_start();


if(!isset($_SESSION['username'])) {


	die("you can't go here unless you login <a href='login.php'>login page</a>");
}
if (isset($_GET['user_id'])) {
	$user_id=$_GET['user_id'];
	$event_id=$_GET['event_id'];
	$connect=mysqli_connect("localhost","root","" , "event_task") or die ("couldn't connect!");
		$query2=mysqli_query($connect,"DELETE FROM even_users WHERE event_id='$event_id' && user_id='$user_id' ");
		if ($query2) {
			$query=mysqli_query($connect,"SELECT reached FROM events WHERE id='$event_id' ");
			$row=mysqli_fetch_assoc($query);
			extract($row);
			$query3=mysqli_query($connect,"UPDATE events SET reached=$reached-1 WHERE id='$event_id' ");
			if ($query3) {
				echo "event canceled <a href=profile.php>go back!</a>";
			}
			else
			{
				echo "an error in update";
			}
		
	}
	else
	{
		echo "an error in your second request";
	}
	




}






?>
