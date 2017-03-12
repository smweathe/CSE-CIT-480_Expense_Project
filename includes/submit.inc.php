<?php
include '../dbh.php';
session_start();
/*prevent user from accessing this page
if no session is started*/
if (!isset($_SESSION['id'])){
	header("Location: login.php");
}



if(isset($_POST["submit"])) {
	//File management
	if(!file_exists($_FILES['fileToUpload']['tmp_name']) || !is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
		echo 'No upload';
		header("Location: ../newexpense.php");
		exit;
	}
	$target_dir = "../uploads/";
	$temp = explode(".", $_FILES["fileToUpload"]["name"]);
	$newfilename = round(microtime(true)) . '.' . end($temp);
	$target_file = $target_dir . $newfilename;
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
	$id = $_SESSION['id'];
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
		
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
	//Query
	$merchant = mysqli_real_escape_string($conn, $_POST['merchant']);
	$date = mysqli_real_escape_string($conn, $_POST['date']);
	$total = mysqli_real_escape_string($conn, $_POST['total']);
	$comment = mysqli_real_escape_string($conn, $_POST['comment']);
	$query = "INSERT INTO expenses (UserId, ExpenseTypeID, ExpenseStatusId, BusinessName, ExpenseDate, TotalPrice, ExpenseFileName) VALUES ('$id', '1', '1', '$merchant', '$date', '$total', '$newfilename');";
	$result= mysqli_query($conn,$query);
	//Verification
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	}
	if(!$result){
		echo "query has failed!";
		printf("Errormessage: %s\n", mysqli_error($conn));
	}else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			header("Location: ../account.php");
			exit;
		} else {
			echo "Sorry, there was an error uploading your file.";
    }
}

	}

if(isset($_POST["delete"])){
	if(!isset($_POST["tempId"])){
		header("Location: ./newexpense.php");
	}
	$id = $_POST["tempId"];
	$query = "DELETE FROM expenses WHERE ExpenseId = '$id'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "query has failed!";
		printf("Errormessage: %s\n", mysqli_error($conn));
	}else{
		header("Location: ../account.php");
		exit;
	}
}	

if(isset($_POST["resubmit"])){
	
}	
?>