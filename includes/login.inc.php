<?php
session_start();
include '../dbh.php';
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];

$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
$result= mysqli_query($conn,$sql);

//no db results
if(!$row=mysqli_fetch_assoc($result)){
	echo "Your username or password is incorrect";
}else{
	//setup session for user
	$_SESSION['id'] = $row['id'];
}
header("Location: ../index.php");
