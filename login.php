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
    <title>ExpenseMaster - Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/44ff956945.css">
    <link href="w3.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" />
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

<!--Left Side-->
      <div class="signup-content">
        <div class="benefits page-body">
          <h1 style="margin: 0 0 20px 0;">Member Login</h1>
          <h5 style="margin: 0 0 20px 0;">Welcome Back Member</h5>
          <div class="welcome1" style="background:#F9F9FB; padding: 10px; border:1px solid #E4E4E7; border-radius:5px;">
              <p>Enter your credentials to sign-in securely and access your account portal. After 5 sign in attempt failures, your account will be locked for 15 minutes and an email will be sent to the account email you registered with.</p>
              <br>
              <p>If you have forgotten your password, you can click the forgot password link and we'll reset it for you.</p>
              <br>
          </div>
          <br>
          <div class="welcome2" style="background:#F9F9FB; padding: 10px; border:1px solid #E4E4E7; border-radius:5px;">Our friendly staff can be reached 24 hours a day, 7 days a week. Please contact support if you're having trouble signing in.
              <br><br>
              <p align="center"><b>Thank You for choosing ExpenseMaster.</b></p>
              <br>
          </div>
        </div>

<!--Right Side-->
    <div class="signup page-sidebar">
        <form action="includes/login.inc.php" class="gtm_login_form" id="login" method="post">
              <div class="info_header" id="joinnow">
                <h3 align="center" class="join" style="background-color: #2E3639; padding: 0px; font-size: 24px;color: #fff; padding-left: 5px;" >Sign In</h3><i class="fa fa-lock fa-2x" style="color:white" aria-hidden="true"></i><br>
              </div>

        				<div class="input-group">
                  <center><i class="fa fa-user-circle-o fa-5x" aria-hidden="true"></i></center>
                  <br>
      					  <input type="text" class="required" required value="" name="uid" placeholder="&#61447; username" tabindex="4" style="margin-bottom: 5px; font-family: 'FontAwesome';"><sup class="required" title="Required"></sup>
          				<input type="password" class="required" required value="" name="pwd" placeholder="&#xf084; password" tabindex="5" style="margin-bottom: 5px; font-family: 'FontAwesome';"><sup class="required" title="Required"></sup>
          				<br><br>
          				<input class="btn btn-alt full-width" href="./account.php" tabindex="7" type="submit" value="Sign In" />
                  <br><br>
                  <center><a href="./forgotpwd.php" style="color: #0861F0;text-decoration: none;">Forgot Password?</a></center>
                </div>
    		</form>
    </div>
    </div>
    <script src="//d2fjue5z6foteq.cloudfront.net/assets/315cc4a6724c52ae0b7b8f0104132a7094855698/main.js" type="text/javascript"></script>
  </body>
</html>
