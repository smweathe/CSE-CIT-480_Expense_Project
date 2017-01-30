<?php
include "../dbh.php";

if (isset($_GET['term'])){
	$search = $_GET['term'];
//	$sql = "SELECT * FROM supervisors WHERE supervisors_id LIKE '%".$search."%' ORDER BY supervisors_id ASC";
	$sql = "select supervisors.supervisors_id, user.user_id, user.user_fname, user.user_lname FROM supervisors INNER JOIN user on user.user_id = supervisors.user_id where user.user_id LIKE '%".$search."%' or user.user_fname LIKE '%".$search."%' or user.user_lname LIKE '%".$search."%' ORDER BY supervisors.supervisors_id ASC";

	$result = mysqli_query($conn, $sql);
	
	while($row = mysqli_fetch_row($result)){
		$data[] = $row['2'] ." ". $row['3'] .", ID:". $row['0'];
	}
	echo json_encode($data);

}else{
        $data = "No Search terms found!";
        echo json_encode($data);
}

?>
