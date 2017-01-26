<?php
	include 'header.php';

	if (isset($_SESSION['id'])){
		//echo 'Login successful.'."<br/>\n";
		echo 'Your user id is: '.$_SESSION['id'];
	}else{
		//echo "You are not logged in!";
	}
?>
<html>
<body>
<br><br>
</body>
<footer>
	<div id="footer">
	<nav>
		<ul>
			<label>Designed by Stephen Weatherly.</label>
		</ul>
	</nav>
	</div>
</footer>
</html>
