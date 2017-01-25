<?php
	include 'header.php';

	if (isset($_SESSION['id'])){
		echo 'Login successful.'."<br/>\n";
		echo 'Your user id is: '.$_SESSION['id'];
	}else{
		//echo "You are not logged in!";
	}
?>
<br><br>
<center><label>Welcome to the Index Screen!</label></center>
<form action= "includes/logout.inc.php">
	<button>LOG OUT</button>
</form>

</body>
</html>
