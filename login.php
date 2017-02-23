<?php

	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	//notify user of missing field/s
	if (strpos($url,'error=empty')!==false){
		//echo "Fill all fields to sign up.";
	}elseif (strpos($url,'error=username')!==false){
		echo "Username already exists. Please choose another.";
	}
  //if a session is started prevent log in again
?>

<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-type" />
    <title>Expense Master | Sign up</title>
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/44ff956945.css">
	<!-- Favorite Icon -->
	<link rel="shortcut icon" href="./images/icon.png" type="image/x-icon" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Sign up for a free Expense Master account." name="description" />
    <!-- Logo Redirect to a page at # -->
	<link href="./index.php" rel="canonical" />
  </head>
  <body class="signup"><noscript><iframe height="0" src="//www.googletagmanager.com/ns.html?id=GTM-JD26" style="display:none;visibility:hidden" width="0"></iframe></noscript>
    <div class="signup-page">
      <div class="header-main">
        <a class="header-logo" href="./index.php"></a>
        <div class="header-login">
			 <!--Home Button # -->
			<a class="btn btn-sm btn-alt" href="./index.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp; Home</a>
			<!-- Logout Redirect to a page at # 
			<a class="btn btn-sm btn-alt" href="#">Log Out</a>-->
        </div>
      </div>
      <div class="signup-content">
        <div class="benefits page-body">
          <h3>Welcome Back</h3>
          <p>Enter your credentials to sign-in securely and access your portal.</p>
          <p>If you have forgotten your password, you can click the forgot password link and we'll reset it for you</p>
        </div>
		
    <div class="signup page-sidebar">
      <h5><center>Sign In to continue to ExpenseMaster</center></h5>
         <form action="includes/login.inc.php" class="gtm_login_form" id="login" method="post">
    				<div class="input-group">
            		<center><i class="fa fa-user-circle-o fa-5x" aria-hidden="true"></i></center>
            		<br>
					   <input type="text" class="required" name="uid" placeholder="&#61447; username" tabindex="4" style="margin-bottom: 5px; font-family: 'FontAwesome';"><sup class="required" title="Required"></sup>
    				 <input type="password" class="required" name="pwd" placeholder="&#xf084; password" tabindex="5" style="margin-bottom: 5px; font-family: 'FontAwesome';"><sup class="required" title="Required"></sup>
    				  <br><br>
    				<input class="btn btn-alt full-width" href="./account.php" tabindex="7" type="submit" value="Sign In" />
            <br><br>
            <center><a href="./forgotpwd.php" style="color: #0861F0;text-decoration: none;">Forgot Password?</a></center>
		</form>
		</div>
      </div>
    </div>
    <script src="//d2fjue5z6foteq.cloudfront.net/assets/315cc4a6724c52ae0b7b8f0104132a7094855698/main.js" type="text/javascript"></script>
  </body>
</html>
