<?php
session_start();
include '../dbh.php';

$first=mysqli_real_escape_string($conn, $_POST['first']);
$last=mysqli_real_escape_string($conn, $_POST['last']);
$uid=mysqli_real_escape_string($conn, $_POST['uid']);
$email=mysqli_real_escape_string($conn, $_POST['email']);
$pwd=mysqli_real_escape_string($conn, $_POST['pwd']);
$isSuper=$_POST['isSupervisor'];

if(isset($_POST['submit'])){
	if(empty($first) || empty($last) || empty($uid) || empty($email) || empty($pwd)){
		header("location: ../signup.php?error=empty");		
	}else{
        	$sql = "SELECT user_username FROM user WHERE user_username='$uid'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			header("location: ../signup.php?error=username");
			exit;
		}
		
                $sql = "SELECT user_email FROM user WHERE user_email='$email'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                        header("location: ../signup.php?error=email");
                        exit;
                }
        }
	
	if ($isSuper == "on"){
		echo "Super is checked";
		$sql = "INSERT INTO user (user_username, user_password, user_fname, user_lname, user_email, user_isSupervisior) VALUES ('$uid', '$pwd', '$first', '$last', '$email', 1)"; 
	}else{
		echo "Super is unchecked";
		$sql = "INSERT INTO user (user_username, user_password, user_fname, user_lname, user_email, user_isSupervisior) VALUES ('$uid', '$pwd', '$first', '$last', '$email', 0)";
	}

	$result = mysqli_query($conn,$sql);
       	if ( $result === false ) {
 		printf("error: %s\n", mysqli_error($conn));
        }else {
        	header("location: ../index.php");
        }

}

?>
