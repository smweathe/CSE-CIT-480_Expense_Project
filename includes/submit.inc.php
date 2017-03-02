<?php
include '../dbh.php';
session_start();
/*prevent user from accessing this page
if no session is started*/
if (!isset($_SESSION['id'])){
	header("Location: login.php");
}

if(!file_exists($_FILES['fileToUpload']['tmp_name']) || !is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
    echo 'No upload';
}


if(isset($_POST["submit"])) {
	$target_dir = "../uploads/";
	$temp = explode(".", $_FILES["fileToUpload"]["name"]);
	$newfilename = round(microtime(true)) . '.' . end($temp);
	$target_file = $target_dir . $newfilename;
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
	$id = $_SESSION['id'];

    $check = getimagesize($_FILES["fileToUpload"]["name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
		
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
	$merchant = $_POST['merchant'];
	$date = $_POST['date'];
	$total = $_POST['total'];
	$comment = $_POST['comment'];
	$query = "INSERT INTO expenses (UserId, ExpenseTypeID, ExpenseStatusId, BusinessName, ExpenseDate, TotalPrice, ExpenseFileName) VALUES ('$id', '1', '1', '$merchant', '$date', '$total', '$newfilename');";
	$result= mysqli_query($conn,$query);
	
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	} if(!$result){
		echo "query has failed!";
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
?>