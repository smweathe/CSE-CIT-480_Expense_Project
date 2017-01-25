<?php
	include 'header.php';
?>

<?php
	if (isset($_SESSION['id'])){
		echo $_SESSION['id'];
	}else{
		//echo "You are not logged in!";
	}
?>

<br><br><br>

<form action="includes/login.inc.php" method="POST">
	<center><label>Login Screen</label></center><br>
	<center><input type="text" name="uid" placeholder="Username"><center><br>
	<center><input type="password" name="pwd" placeholder="Password"><center><br>
	<center><button type="submit">Login<center></button>
</form>
</body>
</html>