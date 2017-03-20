<?php
	$server="localhost";
	$username="root";
	$pass="";
	$db="expenses";

	//db conn string
	$conn=mysqli_connect("$server","$username","$pass","$db");
	if(!$conn){
		die("Connection failed: ".mysqli_connect_error());
	}
?>
