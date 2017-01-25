<?php
//db conn string
$conn=mysqli_connect("localhost","root","","login");

if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}