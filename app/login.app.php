 <?php
 require_once '../dbh.php';

 
if (isset($_POST['userName'])){
	$username = $_POST["userName"]; 

}
if (isset($_POST['passWord'])){
	$passWord = $_POST["passWord"];
}


//$sql = "SELECT * FROM  users WHERE uid='abc' AND password='45322'";

$sql = "SELECT * FROM  users WHERE uid='$username' AND password='$passWord'";

$result = mysqli_query($conn, $sql);

$response = array();

while($row = mysqli_fetch_array($result)){
	
	
	$response = array("userId" => $row[0], "email" => $row[1], "password"=> $row[2], "uid"=> $row[8],  );
}


echo json_encode(array("user_data"=> $response));

?> 

