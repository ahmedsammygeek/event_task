<?php session_start();


if(!isset($_SESSION['username'])) {


	die("you can't go here unless you login <a href='login.php'>login page</a>");
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
	
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/bootstrap-responsive.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">


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
  								<li><a class="active" href="index.php">Home</a></li>
  								<li><a class="text-right" href="">welcome <?php echo $_SESSION['username']; ?></a></li>
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
  						

  						<div class="span6">
  							<ul> <h3>
  								<li><a href="events.php">EVENTS</a></li>
  								<br>
                  <li><a href="add_event.php">ADD EVENT</a></li>
                  <br>
  								<li><a href="users_info.php">USERS</a></li>
  								</h3>
  							</ul>
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