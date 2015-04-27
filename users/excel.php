<?PHP session_start();

$user_id = $_SESSION['user_id'];

$connect=mysqli_connect("localhost","root","" , "event_task") or die ("couldn't connect!");
$query=mysqli_query($connect ,"SELECT username , email , phone FROM even_users where user_id='$user_id'");


function cleanData(&$str)
{
  $str = preg_replace("/\t/", "\\t", $str);
  $str = preg_replace("/\r?\n/", "\\n", $str);
  if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
}


$flag = false;


$query2=mysqli_query($connect,"SELECT event_id FROM even_users WHERE user_id='$user_id'");
while ($row=mysqli_fetch_assoc($query2)) {
  extract($row);
  $query3=mysqli_query($connect,"SELECT title , content , `when` FROM events WHERE id ='$event_id' ");
  while ($row2=mysqli_fetch_assoc($query3)) {
    extract($row2);
    if(!$flag) {
      // display field/column names as first row
      echo implode("\t", array_keys($row2)) . "\r\n";
      $flag = true;
    }
    array_walk($row, 'cleanData');
    echo implode("\t", array_values($row2)) . "\r\n";
  }
}



$filename = "website_data_" . date('Ymd') . ".xls";

header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");

exit;
?>