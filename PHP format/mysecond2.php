<html>
<body>
	<head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
	</head>
<?php
$fname=$lname="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$fname = test_input($_POST["manager"]);
	if($fname=="Login"){
	echo "<input type='button' value='click me!' class='form-control'>";
	echo "<input type='button' value='click me!' class='form-control'>";
	echo "<input type='button' value='click me!' class='form-control'>";
	echo "<input type='button' value='click me!' disabled class='form-control'>";
}
}

function test_input($str){
$str=trim($str);
$str=stripcslashes($str);
$str=htmlspecialchars($str);
return $str;
}

?>
</body>
</html>