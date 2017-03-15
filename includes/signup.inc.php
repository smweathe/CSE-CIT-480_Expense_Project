<?php
session_start();
include '../dbh.php';

$first=mysqli_real_escape_string($conn, $_POST['first']);
$last=mysqli_real_escape_string($conn, $_POST['last']);
$email=mysqli_real_escape_string($conn, $_POST['email']);
$bid=mysqli_real_escape_string($conn, $_POST['bid']);
$uid=mysqli_real_escape_string($conn, $_POST['uid']);
$pwd=mysqli_real_escape_string($conn, $_POST['pwd']);

if (empty($first)){
	header("Location: ../index.php?error=empty");
	exit();
	}
if (empty($last)){
	header("Location: ../index.php?error=empty");
	exit();
	}
if (empty($email)){
	header("Location: ../index.php?error=empty");
	exit();
	}
if (empty($bid)){
	header("Location: ../index.php?error=empty");
	exit();
	}
if (empty($uid)){
	header("Location: ../index.php?error=empty");
	exit();
	}
if (empty($pwd)){
	header("Location: ../index.php?error=empty");
	exit();
	} else {
		$sql = "SELECT uid FROM user WHERE uid='$uid'";
		$result= mysqli_query($conn,$sql);
		$uidcheck= mysqli_num_rows($result);

		if ($uidcheck >=1){
			echo '<script type="text/javascript">alert("Username already exists.");
			window.location.href = "http://localhost/ExpenseMaster/index.php"
			</script>';
			exit();
		} else {
			$sql="INSERT INTO user (first,last,email,bid,uid,pwd) VALUES('$first','$last','$email','$bid','$uid','$pwd')";
			$result= mysqli_query($conn,$sql);

			header("Location: ../confirm.php");
		}	
	}
