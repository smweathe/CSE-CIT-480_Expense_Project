<?php
session_start();
include '../dbh.php';

$first=mysqli_real_escape_string($conn, $_POST['first']);
$last=mysqli_real_escape_string($conn, $_POST['last']);
$email=mysqli_real_escape_string($conn, $_POST['email']);
$bid=mysqli_real_escape_string($conn, $_POST['bid']);
$dobm=mysqli_real_escape_string($conn, $_POST['month']);
$dobd=mysqli_real_escape_string($conn, $_POST['day']);
$doby=mysqli_real_escape_string($conn, $_POST['year']);
//concat year, month, day
$dob=$doby.'-'.$dobm.'-'.$dobd;
$uid=mysqli_real_escape_string($conn, $_POST['uid']);
$pwd=mysqli_real_escape_string($conn, $_POST['pwd']); 

if (empty($first)){
	header("Location: ../index.php?error=firstempty");
	exit();
	}
if (empty($last)){
	header("Location: ../index.php?error=lastempty");
	exit();
	}
if (empty($email)){
	header("Location: ../index.php?error=emailempty");
	exit();
	}
if (empty($bid)){
	header("Location: ../index.php?error=bidempty");
	exit();
	}
if (empty($dobm)){
	header("Location: ../index.php?error=monthempty");
	exit();
	}
if (empty($dobd)){
	header("Location: ../index.php?error=dayempty");
	exit();
	}
if (empty($doby)){
	header("Location: ../index.php?error=yearempty");
	exit();
	}
if (empty($uid)){
	header("Location: ../index.php?error=uidempty");
	exit();
	}
if (empty($pwd)){
	header("Location: ../index.php?error=pwdempty");
	exit();
} else {
	//username check
	$sql = "SELECT uid FROM user WHERE uid='$uid'";
	$result= mysqli_query($conn,$sql);
	$uidcheck= mysqli_num_rows($result);
	//email check
	$sql2= "SELECT email FROM user WHERE email='$email'";
	$result2= mysqli_query($conn,$sql2);
	$emailcheck=mysqli_num_rows($result2);

	if ($uidcheck >=1){
		echo '<script type="text/javascript">alert("Username is already registered to another account.");
			window.location.href = "http://localhost/ExpenseMaster/index.php"
			</script>';
		exit();
	} elseif ($emailcheck >=1) {
		echo '<script type="text/javascript">alert("Email is already registered to another account..");
			window.location.href = "http://localhost/ExpenseMaster/index.php"
			</script>';
		exit();
	}else {
		$sql="INSERT INTO user (first,last,email,bid,dob,uid,pwd) VALUES('$first','$last','$email','$bid','$dob','$uid','$pwd')";
		$result= mysqli_query($conn,$sql);
		header("Location: ../confirm.php");
		}	
	}
