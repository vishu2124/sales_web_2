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

<!-- Login form-->
<form method=post action="<?php echo htmlspecialchars("#");?>">
<div class="btn-group" style="float:right; margin-right:30px;">
				<input type="text" class="form-control" style="width:50%; float:left" placeholder="User Id">
				<input type="password" class="form-control" style="width:50%" placeholder="Password">
				<input type="reset" class="btn btn-primary" id="f1" style="float:right" value="Reset">
				<input type="submit" class="btn btn-primary" id="f1" style="float:right" value="Login">
				<a href="forgetpwd.html">forget password?</a>
			</form>
</div><br><br><br><br><br>
<!-- Registration form-->
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 btn-group">
	<p class="text-success" style="font-family:'comic sans ms';">This page is for the login and registration for the visitors Thank-you for visiting our organization</p>
</div>

<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-info">
<p id="create_text">Create an account</p>
<p id="itsfree_text">It's free and always be</p>
<form class="form-group" METHOD=POST ACTION="<?php echo htmlspecialchars("successful.php");?>">
<input type="text" name="fname" placeholder="First name" class="form-control" style="width:40%; float:left;">
<input type="text" name="lname" placeholder="Last name" class="form-control" style="width:40%; float:right; margin-bottom:10px;margin-right:20%"><br>
<input type="text" name="email" placeholder="Email" class="form-control" style="width:80%; margin-bottom:10px;">
<input type="text" name="remail" placeholder="Re-enter Email" class="form-control" style="width:80%; margin-bottom:10px;" >
<input type="password" name="pwd" placeholder="Enter New Password" class="form-control" style="width:80%; margin-bottom:10px;">
<p class="text-info" style="font-size:16px; font-weight:bold">Birthday</p>
<select name="date" id="date">
	<option value="1">1</option> <option value="2">2</option> <option value="3">3</option>	<option value="4">4</option>
	<option value="5">5</option> <option value="6">6</option> <option value="7">7</option>	<option value="8">8</option>
	<option value="9">9</option> <option value="10">10</option>	<option value="11">11</option><option value="12">12</option>
	<option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option>
	<option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option>
	<option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option>
	<option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option>
	<option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
<select name="month" id="month">
	<option value="01">Jan</option><option value="02">Feb</option><option value="03">Mar</option>
	<option value="04">Apr</option><option value="05">May</option><option value="06">June</option>
	<option value="07">July</option><option value="08">Aug</option><option value="09">Sep</option>
	<option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>
</select>
<select name="year" id="year">
	<option value="1991">1991</option>
	<option value="1992">1992</option>
	<option value="1993">1993</option>
	<option value="1994">1994</option>
	<option value="1995">1995</option>
</select> <font style="font-size:16px; font-weight:bold">Please provide your date of birth.</font ><br>
<input type="radio" name="gender" value="m" checked>Male
<input type="radio" name="gender" value="fm">Female
<br>
<input class="btn btn-success" type="submit" id="create_account" value="Create an account">
<input type="reset" class="btn btn-primary" value="Reset">
</form>
</div>
</div>
</body>
</html> 