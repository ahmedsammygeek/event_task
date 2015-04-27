<?php session_start();


if(!isset($_SESSION['username'])) {


	die("you can't go here unless you login <a href='login.php'>login page</a>");
}


if (isset($_GET['id'])) {
	$id=$_GET['id'];
}
if (!empty($_POST['title'])) {
	$title=$_POST['title'];
	if (!empty($_POST['content'])) {
		$content=$_POST['content'];
		if (!empty($_POST['date'])) {
			$date=$_POST['date'];
			if (!empty($_POST['limit'])) {
				$limit=$_POST['limit'];
				$connect=mysqli_connect("localhost","root","" , "event_task") or die ("couldn't connect!");

				$sql = "UPDATE events SET title='title' , content='$content' , `when` = '$date' , `limit`='$limit' WHERE id = '$id' ";
				$query=mysqli_query($connect, $sql);
				if ($query) {
					echo "your update executed <a href='events.php'>go to events agian</a>";
				}
				else
				{
					printf(mysqli_error($connect));
					// echo "an error in your update";
				}

			}
			else
			{
				echo "enter limit please";
			}
		}
		else
		{
			echo "enter date please";
		}
	}
	else
	{
		echo "enter the content please";
	}
}
else
{
	echo "enter content please ";
}



?>