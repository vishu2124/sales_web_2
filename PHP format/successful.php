<html>
<head><title>visitor page</title>
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
	<?php
$conn= new mysqli("localhost","root","root");
$sql="CREATE DATABASE IF NOT EXISTS visitors";
if($conn->query($sql)===true){
	echo "connection successful"."<br>";}
else{echo "connection failed".$conn->error;}

	if($_SERVER["REQUEST_METHOD"]=="POST")
{ 
	$conn->query("use visitors");

	$sql="create table IF NOT EXISTS visitor(
		fname varchar(20),
		lname varchar(20),
		email varchar(50),
		remail varchar(50),
		pwd varchar(500),
		date date,
		gender varchar(2)
		)";
	if($conn->query($sql)===true){echo "table created successful"."<br>";}
	else{echo "table not created".$conn->error;}

 $fname=$lname=$email=$remail=$pwd="";
 $fname=$_POST["fname"];
  $lname=$_POST["lname"];
   $email=$_POST["email"];
    $remail=$_POST["remail"];
     $pwd==$_POST["pwd"];
     $cost = 10;

// Create a random salt
$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');

// Prefix information about the hash so PHP knows how to verify it later.
// "$2a$" Means we're using the Blowfish algorithm. The following two digits are the cost parameter.
$salt = sprintf("$2a$%02d$", $cost) . $salt;
$hash = crypt($pwd, $salt);

     $date=$_POST["date"];
     $month=$_POST["month"];
     $year=$_POST["year"];
     $gender=$_POST["gender"];
	$sql="insert into visitor(fname,lname,email,remail,pwd,date,gender)
	values('$fname','$lname','$email','$remail','$hash','$year-$month-$date','$gender')";
	if($conn->query($sql)===true){echo "record inserted successfully"."<br>";
	echo "<script>alert('Thank-you for registration');</script>";}
	else{echo "You can not be registered".$conn->error;}
}

	?>

<!-- For the Horizontal navigation bar -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
  <a href="landing.php">Home</a>		
  <a href="news.php">News</a>		
  <a href="contact.php">Contact</a>		
  <a href="aboutus.php">About us</a>			
</div>
<div id="main">
<img src="menu.png" onclick="openNav()" style="float:left; width:30px; margin-bottom:0px;"></img><br><br><br>
<!-- Registration form-->
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 btn-group">
	<p class="text-success" style="font-family:'comic sans ms';">You success fully registered</p>
</div>
</div>
</body>
</html> 