<?php  session_start();

if(!isset($_GET['event_id'])) {
	die("error happend please try again");
} 

$event_id = $_GET['event_id'];

$connect = mysqli_connect('localhost', "root", "", "event_task");
$query = mysqli_query($connect, "SELECT * FROM events WHERE id='$event_id'");


$event = mysqli_fetch_assoc($query);

if($event['limit'] == $event['reached']) {
	die("sorry this event has reached the max ppl ");
}


if(!isset($_POST['username']) || empty($_POST['username'])) {
	die("please enter your username");
}



if(!isset($_POST['email']) || empty($_POST['email'])) {
	die("please enter your email");
}




if(!isset($_POST['phone']) || empty($_POST['phone'])) {
	die("please enter your phone");
}
$username = $_POST['username'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$user_id = $_SESSION['user_id'];
$query = mysqli_query($connect, "INSERT INTO even_users VALUES('' , '$event_id' , '$username' , '$email'
	, '$phone' , '$user_id')");
if($query) {
	$reach=$event['reached'];
	$query2=mysqli_query($connect,"UPDATE events SET reached=$reach + 1 WHERE id='$event_id' ");
	if ($query2) {
		echo "done , you now had registered to the event , go to ";
		echo "<a href='users/profile.php'> you profile</a>";
		echo "<p>$username</p>";
		echo "<p>$phone</p>";
		echo "<p>$email</p>";
		die();
	}
	else
	{
		echo mysqli_error($connect);
	}
	
}

else {
	echo "please try again";
	die();
}



?>