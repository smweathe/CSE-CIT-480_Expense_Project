<?php
	include 'header.php';
?>

<?php

	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	//notify user of missing field/s
	if (strpos($url,'error=empty')!==false){
		echo "Fill all fields to sign up.";
	}elseif (strpos($url,'error=username')!==false){
		echo "Username already exists. Please choose another.";
	}

	if (isset($_SESSION['id'])){
		echo $_SESSION['id'];
	}else{
		//echo "You are not logged in!";
	}
?>

<br><br><br>

<form action="includes/signup.inc.php" method="POST">
	<center><label>Sign Up Screen</label><br></center><br><br>
	<center><label>Please fill out all forms below to join our site.</label><br></center><br><br>
	<center><input type="text" name="first" placeholder="Firstname"><br><br></center>
	<center><input type="text" name="last" placeholder="Lastname"><br><br></center>
	<center><input type="text" name="uid" placeholder="Username"><br><br></center>
	<center><input type="password" name="pwd" placeholder="Password"><br><br></center>
	<center><button type="submit">Sign Up</button><br></center>
</form>
</body>
</html>
