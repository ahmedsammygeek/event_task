<?php 	
if (!empty($_POST['title'])) {
	$title=$_POST['title'];
	if (!empty($_POST['content'])) {
		$content=$_POST['content'];
		if (!empty($_POST['date'])) {
			$date=$_POST['date'];
			if (!empty($_POST['limit'])) {
				$limit=$_POST['limit'];
				$connect=mysqli_connect("localhost","root","" , "event_task") or die ("couldn't connect!");
				$query=mysqli_query($connect,"INSERT INTO events VALUES('','$title','$content','$limit','0','$date') ");
				if ($query) {
					header("location: events.php");die();
				}
				else
				{
					echo "an error in your insertion";
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