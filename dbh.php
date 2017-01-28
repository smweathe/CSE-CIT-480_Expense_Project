<?php
//db conn string
$conn=mysqli_connect("localhost","web","Senior_Project1!","project");

if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
