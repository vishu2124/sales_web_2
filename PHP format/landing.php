<!doctype html>
<html>
<head><title>Landing page</title>
<link rel="stylesheet" type="text/css" href="sales.css">
<link rel="stylesheet" type="text/css" href="navigation.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrape.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css">
<script scr="bootstrap.js"></script>
<script src="sales.js"></script>
<script scr="bootstrap.min.js"></script>
<script scr="npm.js"></script>
</head>
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
  <a href="landing.php">Home</a>		
  <a href="news.php">News</a>		
  <a href="contact.php">Contact</a>		
  <a href="aboutus.php">About us</a>			
</div>

<div id="main">
<img src="menu.png" onclick="openNav()" style="float:left; width:30px; margin-bottom:0px;"></img><br><br><br>
<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div class="container">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4"><a href="login_SU.php"><div class="mask bg1"></div></div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4"><a href="login_manager.php"><div class="mask bg2"></div></div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4"><a href="login_SE.php"><div class="mask bg3"></div></div>

	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4"><a href="login_client.php"><div class="mask bg4"></div></div>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4"><a href="visitor.php"><div class="mask bg5"></div></div>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4"><a href="#blank"><div class="mask bg6"></div></div>

</div>
</div>
</body>
</html>