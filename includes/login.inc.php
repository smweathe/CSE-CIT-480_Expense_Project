<?php
session_start();
include '../dbh.php';

$uid=mysqli_real_escape_string($conn, $_POST['uid']);
$pwd=mysqli_real_escape_string($conn, $_POST['pwd']);

if (empty($uid)){
	header("Location: http://localhost/ExpenseMaster/login.php?error=empty");
	exit();
	}
if (empty($pwd)){
	header("Location: http://localhost/ExpenseMaster/login.php?error=empty");
	exit();
}else{
	$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
	$result= mysqli_query($conn,$sql);

	if(!$row=mysqli_fetch_assoc($result)){
		echo "Your username or password is incorrect";
		header("Location: http://localhost/ExpenseMaster/login.php?error=wrong");
	}else{
		$_SESSION['id'] = $row['id'];
	}
	header("Location: ../account.php");
	echo 'uid';
}
