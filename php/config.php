<?php
	require_once "variables.php";

	//Connect to server and select database.
	$db = mysqli_connect("$server", "$root", "$password")or die("cannot connect to server"); 
	mysqli_select_db($db,"$dbms")or die("cannot select DB");
?>