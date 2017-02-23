<?php

	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	//notify user of missing field/s
	if (strpos($url,'error=empty')!==false){
		//echo "Fill all fields to sign up.";
	}elseif (strpos($url,'error=username')!==false){
		echo "Username already exists. Please choose another.";
	}
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
        <div class="reset_page-body" style="margin: 2px 150px 2px;">
          <i class="fa fa-envelope fa-5x fa-pull-right" style="font-size: 8em;" aria-hidden="true"></i><h3>Forgot Your Password?</h3>
          <p style="margin: 2px 2px 2px;">If you have forgotten your password, please enter the account's email address below and click reset my password. You will receive an email that contains a link to set a new password.</p><br>
        
					    <input type="email" name="email" placeholder="email" tabindex="4" style="margin-bottom: 5px; width: 100%;">
    				  <br><br>
              <form id="resetpass" method="post" action=./index.php>
    				    <input class="btn btn-alt full-width" href="./index.php" tabindex="7" type="submit" value="Reset My Password" style="width: auto;" />
              </form>
			   </div>
		</div>
      </div>
    </div>
    <script src="//d2fjue5z6foteq.cloudfront.net/assets/315cc4a6724c52ae0b7b8f0104132a7094855698/main.js" type="text/javascript"></script>
  </body>
</html>
