<?php 

if(isset($_GET['id'])) {
  $id = $_GET['id'];
 $connect = mysqli_connect('localhost', "root", "", "event_task");
 $events = mysqli_query($connect, "SELECT * FROM events WHERE id ='$id' ");
 $event = mysqli_fetch_assoc($events);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>events</title> 
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
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
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
          <li><a class="active" href="events.php">events</a></li>
                  <li ><a href="users/profile.php">profile</a></li>
                  <li ><a href="users/logout.php">logout</a></li>


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

     <table class="table table-bordered">
      <tr>
       <td>title</td>
       <td><?php echo $event['title']; ?></td>
     </tr>
     <tr>
       <td>date</td>
       <td><?php echo $event['when']; ?></td>
     </tr>

     <tr>
       <td>content</td>
       <td><?php echo $event['content']; ?></td>
     </tr>


   </table>


   <?php

$date1 = explode('-', date("Y-m-d"));
$date2 = explode('-', $event['when']);


// $diff = abs(strtotime($date2) - strtotime($date1));

// $years = floor($diff / (365*60*60*24));
// $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
// $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

// echo $date1[2]-$date2[2]; die();


   if(($event['limit'] != $event['reached']) && (($date1[2] - $date2[2])<= 0)) {

    

    ?>

   <form  action="go_to_event.php?event_id=<?php echo $_GET['id']; ?>" method="post">
     <label for="">username</label>
     <input type="text" name="username" ><br>
     <label for="">email</label>
     <input type="text" name="email" ><br>
     <label for="">phone</label>
     <input type="text" name="phone" ><br>
     <br>
     <button type="submit" class="btn">going</button>
   </form>

<?php    }

else {
   echo "<h2>sorry thie event now is reached the max ppl you can't register it </h2>";
}

 

    ?>
 </div>
 <!-- end: Icon Box -->


</div>
<!-- end: Icon Boxes -->
<div class="clear"></div>
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