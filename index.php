<?php
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	//notify user of missing field/s
	if (strpos($url,'error=empty')!==false){
		echo "Fill all fields to sign up.";
	}elseif (strpos($url,'error=username')!==false){
		echo "Username already exists. Please choose another.";
	}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-type" />
    <title>ExpenseMaster - Home</title>
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
			<!-- Login Redirect to a page at # -->
			<a class="btn btn-sm btn-alt" href="./login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp; Sign In</a>
			<!-- Logout Redirect to a page at # 
			<a class="btn btn-sm btn-alt" href="#">Log Out</a>-->
        </div>

<!--Left Side-->
      </div>
      <div class="signup-content">
        <div class="benefits page-body">
          <h1 align="center">Welcome to ExpenseMaster</h1>
          <h5 align="center">"Simplying Company Expense Tracking"</h5>
            <div class="welcome1" style="background:#F9F9FB; padding: 10px; border:1px solid #E4E4E7; border-radius:5px;">Our goal is to improve the efficiency and accuracy of all company expense tracking.
              For companies still using spreadsheet we offer .csv uploads and convert them to online forms.
              We are a cloud based solution for companies who need to track company spending.
              Joining today gives you access to all our tools and analytics for tracking company expenses.
              <br><br>
              <p align="center"><b>Join now and see what you have been missing!</b></p>
              <br>
            </div>
            <br>
            <div class="welcome2" style="background:#F9F9FB; padding: 10px; border:1px solid #E4E4E7; border-radius:5px;">Our goal is to improve the efficiency and accuracy of all company expense tracking.
              For companies still using spreadsheet we offer .csv uploads and convert them to online forms.
              We are a cloud based solution for companies who need to track company spending.
              Joining today gives you access to all our tools and analytics for tracking company expenses.
              <br><br>
              <p align="center"><b>Join now and see what you have been missing!</b></p>
              <br>
            </div>
            <br>
            <div class="welcome3" style="background:#F9F9FB; padding: 10px; border:1px solid #E4E4E7; border-radius:5px;">Our goal is to improve the efficiency and accuracy of all company expense tracking.
              For companies still using spreadsheet we offer .csv uploads and convert them to online forms.
              We are a cloud based solution for companies who need to track company spending.
              Joining today gives you access to all our tools and analytics for tracking company expenses.
              <br><br>
              <p align="center"><b>Join now and see what you have been missing!</b></p>
              <br>
            </div>
            <br>
        </div>

<!--Right Side-->
        <div class="signup page-sidebar">
        <p class="alert alert-error" id="fill-all-fields" style="display:none"></p>
			   <form action="includes/signup.inc.php" class="gtm_signup_register_form" id="signup" method="post">
         <div class="info_header" id="joinnow">
            <h3 align="center" class="join" style="background-color: #2E3639; padding: 0px; font-size: 24px;color: #fff; padding-left: 5px;" >Join Now</h3><i class="fa fa-pencil fa-2x" style="color:white" aria-hidden="true"></i><br>
          </div>
    				<div class="input-group">
              <p>Please fill out the form below to create an account and join our thriving community. Signing up is always free, so join today to unlock all of our member benefits.</p>
              <br> 
              <p>If you have any difficulty signing up, please email our support team at <a style="text-decoration: none; font-weight: bold;" href="mailto:support@expensemaster.com">support@expensemaster.com</a>.</p>
              <br>
    				  <input type="text" class="required" name="first" placeholder="First name" tabindex="1" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
    				  <input type="text" class="required" name="last" placeholder="Last name" tabindex="2" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
    				  <input type="email" class="required" name="email" placeholder="email" tabindex="3" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
              <input type="text" class="required" name="bid" placeholder="business id" tabindex="4" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
              <input type="text" class="required" name="uid" placeholder="username" tabindex="4" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
    				  <input type="password" class="required" name="pwd" placeholder="password" tabindex="5" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
    				  <br><br>
    				<input class="btn btn-alt full-width" href="./confirm.php" disabled="disabled" tabindex="7" type="submit" value="Create Account" />
    				</div>
			   </form>
		    </div>
      </div>
    </div>
    <script src="//d2fjue5z6foteq.cloudfront.net/assets/315cc4a6724c52ae0b7b8f0104132a7094855698/main.js" type="text/javascript"></script>

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
  <h2>MEET OUR TEAM</h2>

  <div class="w3-row"><br>
      <div class="w3-quarter">
      <i class="fa fa-user fa-4x" aria-hidden="true"></i>
        <!--<img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">-->
        <h4 style="margin: 10px">Stephen Weatherly</h4>
        <p>Web Designer/Lead Programmer</p>
        <br>
      </div>

      <div class="w3-quarter">
      <i class="fa fa-user fa-4x" aria-hidden="true"></i>
        <!--<img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">-->
        <h4 style="margin: 10px">Boban Ljuljdjurovic </h4>
        <p>Lead Programmer</p>
        <br>
      </div>

      <div class="w3-quarter">
      <i class="fa fa-user fa-4x" aria-hidden="true"></i>
        <!--<img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">-->
        <h4 style="margin: 10px">Eric Cicci</h4>
        <p>Project Manager</p>
        <br>
      </div>

      <div class="w3-quarter">
      <i class="fa fa-user fa-4x" aria-hidden="true"></i>
        <!--<img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">-->
        <h4 style="margin: 10px">Alex Tunis</h4>
        <p>Datbase Designer/App Developer</p>
        <br>
      </div>

      <div class="w3-quarter">
      <i class="fa fa-user fa-4x" aria-hidden="true"></i>
        <!--<img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">-->
        <h4 style="margin: 10px">Sean Ruta</h4>
        <p>Documentation</p>
        <br>
      </div>

      <div class="w3-quarter">
      <i class="fa fa-user fa-4x" aria-hidden="true"></i>
        <!--<img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">-->
        <h4 style="margin: 10px">Peter Lutz</h4>
        <p>Documentation</p>
        <br>
      </div>

      <div class="w3-quarter">
      <i class="fa fa-user fa-4x" aria-hidden="true"></i>
        <!--<img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">-->
        <h4 style="margin: 10px">Michael Trexler</h4>
        <p>Documentation</p>
        <br>
      </div>
  </div>
</div>

<!--Google Maps-->
  <div id="google_map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1466.7489807062302!2d-83.21554135463619!3d42.67199311499528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6b5d32ffab8de22a!2sOakland+University+-+Engineering+Center!5e0!3m2!1sen!2sus!4v1489189626784" width="1023" height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

<!--Footer-->
  <footer class="footer-container">
    <h2 align="center">Follow the team on Social Media</h2>
    <div id="social_icons" align="center" style="color: white; padding: 2px;;">
      <a href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook fa-4x" style="padding: 0px 5px 0px 5px;"></i></a>
      <a href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter fa-4x" style="padding: 0px 5px 0px 5px;"></i></a>
      <a href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus fa-4x" style="padding: 0px 5px 0px 5px;"></i></a>
      <a href="javascript:void(0)" title="Google +"><i class="fa fa-instagram fa-4x" style="padding: 0px 5px 0px 5px;"></i></a>
      <a href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin fa-4x" style="padding: 0px 5px 0px 5px;"></i></a>
    </div>
    <br><br>
    <h3 align="center" style=" color: white; font-size: 14px;line-height: 2">Designed by Stephen Weatherly ©2017</h3>
  </footer>
  </body>
</html>
