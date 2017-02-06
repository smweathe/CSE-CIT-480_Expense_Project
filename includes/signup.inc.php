<?php
session_start();
include '../dbh.php';

$first=$_POST['first'];
$last=$_POST['last'];
$email=$_POST['email'];
$bid=$_POST['bid'];
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];

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
