<?php
include_once("../Database/constants.php");
include_once("./user.php");



//For Registration Processsing
if (isset($_POST["username"]) AND isset($_POST["email"]) AND isset($_POST["phno"])) {
	$user = new User();
	$result = $user->createUserAccount($_POST["username"],$_POST["email"],$_POST["pswd1"],$_POST["phno"]);
	echo $result;
	exit();
}


//For Login Processing
if(isset($_POST["log_email"]) AND isset($_POST["log_password"])){

	$user = new User();
	$result = $user->userLogin($_POST["log_email"],$_POST["log_password"]);
	echo $result;
	
	exit();
}
?>
