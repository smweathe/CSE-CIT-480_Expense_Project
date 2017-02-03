<?php
	session_start();
	/*prevent user from accessing this page
	if no session is started*/
    if (!isset($_SESSION['id']))
		header("Location: index.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-type" />
    <title>Expense Master | Sign up</title>
    <link href="style.css" rel="stylesheet" />
	<!-- Favorite Icon -->
	<link rel="shortcut icon" href="/images/specialicon.ico" type="image/x-icon" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Sign up for a free Expense Master account." name="description" />
    <!-- Logo Redirect to a page at # -->
	<link href="http://localhost/ExpenseMaster/index.php" rel="canonical" />
  </head>
  <body class="signup"><noscript><iframe height="0" src="//www.googletagmanager.com/ns.html?id=GTM-JD26" style="display:none;visibility:hidden" width="0"></iframe></noscript>
    <div class="signup-page">
      <div class="header-main">
        <a class="header-logo" href="http://localhost/ExpenseMaster/index.php"></a>
        <div class="header-login">
			<!-- Login Redirect to a page at # 
			<a class="btn btn-sm btn-alt" href="#">Log in</a>
			 Logout Redirect to a page at # -->
			<a class="btn btn-sm btn-alt" href="http://localhost/ExpenseMaster/logout.php">Log Out</a>
        </div>
      </div>
      <div class="signup-content">
        <div class="benefits page-body">
          <h3>Welcome to your Account Page</h3>
          <h3>
        </div>		
        <div class="signup page-sidebar"><p class="alert alert-error" id="fill-all-fields" style="display:none"></p>
		</div>
      </div>
    </div><script src="//d2fjue5z6foteq.cloudfront.net/assets/315cc4a6724c52ae0b7b8f0104132a7094855698/main.js" type="text/javascript"></script>
  </body>
</html>
