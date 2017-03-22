<?php
session_start();
include '../dbh.php';

$bname=mysqli_real_escape_string($conn, $_POST['bname']);
$baddress=mysqli_real_escape_string($conn, $_POST['baddress']);
$bcity=mysqli_real_escape_string($conn, $_POST['bcity']);
$bstate=mysqli_real_escape_string($conn, $_POST['bstate']);
$bzip=mysqli_real_escape_string($conn, $_POST['bzip']);
$first=mysqli_real_escape_string($conn, $_POST['first']);
$last=mysqli_real_escape_string($conn, $_POST['last']);

if (empty($bname)){
	header("Location: ../index.php?error=firstempty");
	exit();
	}
if (empty($baddress)){
	header("Location: ../index.php?error=lastempty");
	exit();
	}
if (empty($bcity)){
	header("Location: ../index.php?error=emailempty");
	exit();
	}
if (empty($bstate)){
	header("Location: ../index.php?error=bidempty");
	exit();
	}
if (empty($bzip)){
	header("Location: ../index.php?error=monthempty");
	exit();
	}
if (empty($first)){
	header("Location: ../index.php?error=dayempty");
	exit();
	}
if (empty($last)){
	header("Location: ../index.php?error=yearempty");
	exit();
}else {
	//Check Business Name
	$sql = "SELECT b_name FROM business WHERE b_name='$bname'";
	$result= mysqli_query($conn,$sql);
	$bidcheck= mysqli_num_rows($result);

	if ($bidcheck >=1){
		echo '<script type="text/javascript">alert("Business is already registered.");
			window.location.href = "http://localhost/ExpenseMaster/index.php"
			</script>';
		exit();
	}else {
		$sql="INSERT INTO business (b_name,b_address,b_city,b_state,zip,supervisor_first,supervisor_last) VALUES('$bname','$baddress','$bcity','$bstate','$bzip','$first','$last')";
		$result= mysqli_query($conn,$sql);
		header("Location: ../confirm.php");
		}	
	}