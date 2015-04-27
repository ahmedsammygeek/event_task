<?php session_start();


if(!isset($_SESSION['username'])) {


  die("you can't go here unless you login <a href='login.php'>login page</a>");
}


$user_id=$_SESSION['user_id'] ;

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>profile</title> 
	<meta name="description" content="FreeME:Bootstrap Theme"/>
	<meta name="keywords" content="Template, Theme, web, html5, css3" />
	<meta name="author" content="Łukasz Holeczek from creativeLabs"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

	<!-- start: CSS -->
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/bootstrap-responsive.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	
	<!-- end: CSS -->

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->

    </head>
    <body>

     <!--start: Wrapper -->
     <div id="wrapper">

      <!--start: Container -->
      <div class="container">


       <!--start: Header -->
       <header>

        <!--start: Row -->
        <div class="row">

         <!--start: Logo -->
         <div class="logo span4">

         </div>
         <!--end: Logo -->



       </div>
       <!--end: Row -->

     </header>
     <!--end: Header-->

     <!--start: Navigation-->	
     <div class="navbar navbar-inverse">
      <div class="navbar-inner">
       <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <div class="nav-collapse collapse">
         <ul class="nav">
          <li ><a href="../events.php">events</a></li>
          <li ><a href="logout.php">logout</a></li>
          <li ><a href="profile.php">profile</a></li>


        </ul>
      </div>
    </div>
  </div>
</div>
<!--end: Navigation-->

</div>
<!--end: Container-->

<!--start: Container -->
<div class="container">

 <!--start: Row -->
 <div class="row">

  <div class="row">

   <!-- start: Icon Boxes -->
   <div class="icons-box-vert-container">



    <!-- start: Icon Box Start -->
    <div class="span12">
      <?php 
      $connect=mysqli_connect("localhost","root","" , "event_task") or die ("couldn't connect!");
      $query=mysqli_query($connect ,"SELECT * FROM users where id=$user_id");
      $user = mysqli_fetch_assoc($query);
      extract($user);

      ?>



      <form  action="update_user.php<?php echo "?id=$id"; ?>" method="post">
        <label for="">username</label>
        <input type="text" value="<?php echo "$username"; ?>" name="username" ><br>

        <label for="">password</label>
        <input type="text" value="<?php echo "$password"; ?>" name="password" ><br>


        <label for="">email</label>
        <input type="text" value="<?php echo "$email"; ?>" name="email" ><br>
        <label for="">phone</label>
        <input type="text" value="<?php echo "$phone"; ?>" name="phone" ><br>

        <label for="">address</label>
        <input type="text" value="<?php echo "$address"; ?>" name="address" ><br>
        <br>
        <button type="submit" class="btn">update</button>
      </form>
      <table class="table table-bordered">
        <tr>
         <td>title</td>
         <td>data</td>
         <td>content</td>
         <td>option</td>
       </tr>
       <?php 

       $query2=mysqli_query($connect,"SELECT event_id FROM even_users WHERE user_id='$user_id'");
       while ($row=mysqli_fetch_assoc($query2)) {
        extract($row);
        $query3=mysqli_query($connect,"SELECT * FROM events WHERE id ='$event_id' ");
        $row2=mysqli_fetch_assoc($query3);
        extract($row2);
        echo "<tr>
        <td>".$title."</td>
        <td>".$when."</td>
        <td>".$content."</td>
        <td><a href='cancel_event.php?user_id=".$user_id."&event_id=".$event_id."'>DELETE</a></td>
        </tr>";

      }





      ?>


    </table>

    <p><button><a href="excel.php">excel</a></button></p>
  </div>
  <!-- end: Icon Box -->




</div>
<!-- end: Icon Boxes -->
<div class="clear">

</div>
</div>


</div>
<!--end: Row-->

</div>
<!--end: Container-->

<!--start: Container -->
<div class="container">	
 <hr>
 <hr>
</div>
<!-- end: Container  -->

</div>
<!-- end: Wrapper  -->
<!--  -->
<!-- end: Java Script -->

</body>
</html>