<html>
<head><title>Landing page</title>
<link rel="stylesheet" type="text/css" href="sales.css">
<link rel="stylesheet" type="text/css" href="navigation.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrape.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css">
<script type="text/javascript" scr="bootstrap.js"></script>
<script type="text/javascript" scr="bootstrap.min.js"></script>
<script type="text/javascript" scr="npm.js"></script>
<script src="sales.js"></script>
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
<img src="menu.png" onclick="openNav()" style="float:left; width:30px; margin-bottom:0px;"></img><br><br><br><br><br><br>
<br><br>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 icon"></div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 icon" id="backlogin" style="width:100%">
			<h2><font class="text-success">Edit Clients</font></h2>
			<form method="post" action="#login_submitted">
			<input type="button" class="btn btn-primary" style="width:100%" value="Add">
			<input type="button" class="btn btn-primary" style="width:100%" value="delete">
			
			<input type="search" results="5" class="form-control">
		</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 icon"></div>
	</div>
</div>
</body>
</html>