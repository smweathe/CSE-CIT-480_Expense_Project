<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<Title>Expense Master</Title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<header>
	<nav>
		<img src="./images/logo.png" alt="logo" style="width:400;height:40;">
		<ul>	
			<li><a href="index.php">Home</a></li>
			<?php
				//enable log out button if user is signed in
				if (isset($_SESSION['id'])){
					echo "<form action= 'includes/logout.inc.php'>
							<button>Log Out</button>
					</form>";
					//enables my Account button mapped to localhost
					echo"<form action='/account.php'>
					    <button type='submit'>My Account</button>
					</form>";
				} else {
					//enable log in button by default
					echo "<form action='includes/login.inc.php' method='POST'>
							<input type='text' name='uid' placeholder='Username'>
							<input type='password' name='pwd' placeholder='Password'>
							<button type='submit'>Log In</button>
					</form>";

					//echo "<li><a href='signup.php'>Sign Up</a></li>";

					echo"<form action='/signup.php'>
					    <button type='submit'>Sign Up</button>
					</form>";
				}
			?>
		</ul>
	</nav>
</header>
</body>
</html>
