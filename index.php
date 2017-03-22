<?php
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	//notify user of missing field/s
	if (strpos($url,'error=empty')!==false){
		echo "Fill all fields to sign up.";
	}elseif (strpos($url,'error=username')!==false){
		echo "Username already exists. Please choose another.";
	}

  include 'dbh.php';
  session_start();
  /*redirect if session already established*/
  if (isset($_SESSION['id'])){
    header("Location: ./account.php");
  }

?>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/58cd68715b89e2149e1a2447/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

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
      </div>

<!--Left Side-->
      <div class="signup-content" style="background-image: url(./images/world.jpg);">
        <div class="benefits page-body">
          <h1 style="margin: 0 0 20px 0; font-weight: bold;" align="center">Welcome to ExpenseMaster</h1>
          <h5 style="margin: 0 0 20px 0;" align="center">"Simplying Company Expense Tracking"</h5>
            <div class="welcome1" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23)">
            <img src="./images/rsz_business.png" alt="Team Meeting" style="width:100%; border-radius:5px; max-width: 100%;height: auto;">
            </div>
            <br>
            <div class="welcome2" style="background:#F9F9FB; padding: 20px; border:1px solid #E4E4E7; border-radius:5px; box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23)">
                <h3>Mission Statement</h3>
                <p>Our goal is to improve the efficiency and accuracy of all company expense tracking.
                For companies still using spreadsheet we offer .csv uploads and convert them to online forms.
                We are a cloud based solution for companies who need to track company spending.
                Joining today gives you access to all our tools and analytics for tracking company expenses.</p>
                <br><br>
                <p align="center"><b>Join now and see what you have been missing!</b></p>
                <br>
                <h6 style="margin: 0!important; text-align: center;">-The ExpenseMaster team</h6>
            </div>
            <br><br>
        </div>
<!--End of Left Side-->

<!--Right Side-->
      <div class="signup page-sidebar">
        <p class="alert alert-error" id="fill-all-fields" style="display:none"></p>

<!--Business Registration-->
        <div class="business register" id="businessreg">
            <div class="welcome2" style="background:#F9F9FB; padding: 20px; border:1px solid #E4E4E7; border-radius:5px; box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23)">
                <h2 style="font-size: 20px; font-weight: bold;">Want to register your business?</h2>
                <p>To sign up your business and begin using ExpenseMaster, please click the button below. We will then ask you for some basic information about your firm so we can better suit your needs.</p>
                <br>
                <a class="btn btn-alt full-width" href="./businessregistration.php" style="width: 100%">Register My Business</a>
                <br>
            </div>
        </div>
<!--End of Business Registration-->

<br><br>
<!--Registration Form-->
			   <form action="includes/signup.inc.php" class="gtm_signup_register_form" id="signup" method="post">
            <div class="info_header" id="joinnow">
              <h3 align="center" class="join" style="background-color: #2E3639; padding: 0px; font-size: 24px;color: #fff; padding-left: 5px;" >User Registration</h3><i class="fa fa-pencil fa-2x" style="color:white" aria-hidden="true"></i><br>
            </div>

    				<div class="input-group" id="input-group">
              <p>If you have any difficulty signing up, please email our support team at <a style="text-decoration: none; font-weight: bold; color: darkred;" href="mailto:support@expensemaster.com">support@expensemaster.com</a>.</p>
              <br>
              <strong><label style="margin-top:.3em; color: black;">Name</label></strong>
    				  <input type="text" required="" name="first" placeholder="First" tabindex="1" style="margin-bottom: 5px; width: 49%; margin-right:3px;"><input type="text" required="" name="last" placeholder="Last" tabindex="2" style="margin-bottom: 5px; width: 49%; float: right;">
              <strong><label style="margin-top:.3em; color: black;">Email</label></strong>
    				  <input type="email" required="" name="email" placeholder="" tabindex="2" style="margin-bottom: 5px">
              <strong><label style="margin-top:.3em; color: black;">Business</label></strong>
              <input type="text" required="" name="bid" placeholder="" tabindex="3" style="margin-bottom: 5px">
              <strong><label style="margin-top:.3em; color: black;">Date of Birth</label></strong>
              <div class="dob" style="width: 100%; height: 40px; margin-bottom: 5px; display: inline-block;">
                  <select required name="month" id="month" style="width: 32%;" tabindex="4" onChange="changeDate(this.options[selectedIndex].value);">
                      <option value="">Month</option>
                      <option value="1">January</option>
                      <option value="2">February</option>
                      <option value="3">March</option>
                      <option value="4">April</option>
                      <option value="5">May</option>
                      <option value="6">June</option>
                      <option value="7">July</option>
                      <option value="8">August</option>
                      <option value="9">September</option>
                      <option value="10">October</option>
                      <option value="11">November</option>
                      <option value="12">December</option>
                  </select><select name="day" id="day" required="" style="width: 32%;  margin-right:2%; margin-left: 2%;" tabindex="5" id="day"><option value="">Day</option></select><select name="year" id="year" required="" style="width: 32%;" tabindex="6" id="year"><option value="">Year</option></select>
              </div>

<!--Determine number of days based on Month Selected-->
              <script language="JavaScript" type="text/javascript">
                function changeDate(i){
                  var e = document.getElementById('day');
                  while(e.length>0)
                  e.remove(e.length-1);
                  var j=-1;
                  if(i=="")
                    k=0;
                  else if(i==2)
                    k=28;
                  else if(i==4||i==6||i==9||i==11)
                    k=30;
                  else
                    k=31;
                  while(j++<k){
                    var s=document.createElement('option');
                    var e=document.getElementById('day');
                    if(j==0){
                      s.text="Day";
                      s.value="";
                    try{
                      e.add(s,null);}
                    catch(ex){
                      e.add(s);}
                    }else{
                      s.text=j;
                      s.value=j;
                      try{
                        e.add(s,null);}
                      catch(ex){
                        e.add(s);}}}}
                    y = 1997;
                    while (y-->1917){
                      var s = document.createElement('option');
                      var e = document.getElementById('year');
                      s.text=y;
                      s.value=y;
                      try{
                        e.add(s,null);}
                      catch(ex){
                        e.add(s);}}
                </script>
              <strong><label style="margin-top:.3em; color: black;">Choose a username</label></strong>
              <input type="text" required="" name="uid" placeholder="" tabindex="7" style="margin-bottom: 5px">
              <strong><label style="margin-top:.3em; color: black;">Create a password</label></strong>
    				  <input type="password" required="" name="pwd" placeholder="" tabindex="8" style="margin-bottom: 5px">
    				  <br><br>
              <p>By creating an account you agree to our <a href="#" style="color: blue">Terms & Privacy</a>.</p>
              <br>
    				  <input class="btn btn-alt full-width" href="./confirm.php" disabled="disabled" tabindex="9" type="submit" value="Create Account">
    				</div>
			   </form>
<!--End of Registration Form-->

		    </div>
      </div>
</div>
    <script src="//d2fjue5z6foteq.cloudfront.net/assets/315cc4a6724c52ae0b7b8f0104132a7094855698/main.js" type="text/javascript"></script>

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team" style="height:460px">
  <h2>MEET OUR TEAM</h2>

  <div class="w3-row" style="border: 1px solid #E4E4E7; background: #F9F9FB; border-radius: 5px; box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);"><br>
      <div class="w3-quarter">
        <i class="fa fa-user fa-4x" aria-hidden="true"></i>
        <!--<img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">-->
        <h4 style="margin: 10px">Stephen Weatherly</h4>
        <p>Web Designer/Lead Programmer</p>
        <a href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin fa-2x" style="padding: 0px 5px 0px 5px;color: #0077B5"></i></a>
        <a href="javascript:void(0)" title="Linkedin"><i class="fa fa-github fa-2x" style="padding: 0px 5px 0px 5px;"></i></a>
        <br><br>
      </div>

      <div class="w3-quarter">
      <i class="fa fa-user fa-4x" aria-hidden="true"></i>
        <!--<img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">-->
        <h4 style="margin: 10px">Boban Ljuljdjurovic </h4>
        <p>Lead Programmer</p>
        <a href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin fa-2x" style="padding: 0px 5px 0px 5px;color: #0077B5"></i></a>
        <a href="javascript:void(0)" title="Linkedin"><i class="fa fa-github fa-2x" style="padding: 0px 5px 0px 5px;"></i></a>
        <br><br>
      </div>

      <div class="w3-quarter">
      <i class="fa fa-user fa-4x" aria-hidden="true"></i>
        <!--<img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">-->
        <h4 style="margin: 10px">Eric Cicci</h4>
        <p>Project Manager</p>
        <a href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin fa-2x" style="padding: 0px 5px 0px 5px;color: #0077B5"></i></a>
        <a href="javascript:void(0)" title="Linkedin"><i class="fa fa-github fa-2x" style="padding: 0px 5px 0px 5px;"></i></a>
        <br><br>
      </div>

      <div class="w3-quarter">
      <i class="fa fa-user fa-4x" aria-hidden="true"></i>
        <!--<img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">-->
        <h4 style="margin: 10px">Alex Tunis</h4>
        <p>Datbase Designer/App Developer</p>
        <a href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin fa-2x" style="padding: 0px 5px 0px 5px;color: #0077B5"></i></a>
        <a href="javascript:void(0)" title="Linkedin"><i class="fa fa-github fa-2x" style="padding: 0px 5px 0px 5px;"></i></a>
        <br><br>
      </div>

      <div class="w3-quarter">
      <i class="fa fa-user fa-4x" aria-hidden="true"></i>
        <!--<img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">-->
        <h4 style="margin: 10px">Sean Ruta</h4>
        <p>Documentation</p>
        <a href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin fa-2x" style="padding: 0px 5px 0px 5px; color: #0077B5;"></i></a>
        <a href="javascript:void(0)" title="Linkedin"><i class="fa fa-github fa-2x" style="padding: 0px 5px 0px 5px;"></i></a>
        <br><br>
      </div>

      <div class="w3-quarter">
      <i class="fa fa-user fa-4x" aria-hidden="true"></i>
        <!--<img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">-->
        <h4 style="margin: 10px">Peter Lutz</h4>
        <p>Documentation</p>
        <a href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin fa-2x" style="padding: 0px 5px 0px 5px;color: #0077B5"></i></a>
        <a href="javascript:void(0)" title="Linkedin"><i class="fa fa-github fa-2x" style="padding: 0px 5px 0px 5px;"></i></a>
        <br><br>
      </div>

      <div class="w3-quarter">
      <i class="fa fa-user fa-4x" aria-hidden="true"></i>
        <!--<img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">-->
        <h4 style="margin: 10px">Michael Trexler</h4>
        <p>Documentation</p>
        <a href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin fa-2x" style="padding: 0px 5px 0px 5px;color: #0077B5"></i></a>
        <a href="javascript:void(0)" title="Linkedin"><i class="fa fa-github fa-2x" style="padding: 0px 5px 0px 5px;"></i></a>
        <br><br>
      </div>
  </div>
</div>
<!--End of Team Container-->

<!--Google Maps-->
  <div id="google_map">
    <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1466.7529831561732!2d-83.21517120991751!3d42.67182351559072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6b5d32ffab8de22a!2sOakland+University+-+Engineering+Center!5e0!3m2!1sen!2sus!4v1489198341257" width="1023" height="420" frameborder="0" style="border:0; box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);" allowfullscreen></iframe>
    <br><br>
  </div>
<!--End of Google Maps-->

</body>

<!--Footer-->
  <footer class="footer-container">
    <h2 align="center">Follow the team on Social Media</h2>
    <div id="social_icons" align="center" style="color: white; padding: 10px; border-top: 1px solid #edeef0; border-bottom: 1px solid #edeef0;">
        <a href="https://www.facebook.com/ExpenseMaster/" title="Facebook"><i class="fa fa-facebook fa-4x" style="padding: 0px 5px 0px 5px; color: #365899"></i></a>
        <a href="https://twitter.com/Expense_Master" title="Twitter"><i class="fa fa-twitter fa-4x" style="padding: 0px 5px 0px 5px; color: #1da1f2"></i></a>
        <a href="https://plus.google.com/106770097272433071838" title="Google +"><i class="fa fa-google-plus fa-4x" style="padding: 0px 5px 0px 5px; color: #d34836"></i></a>
        <a href="https://www.linkedin.com/company-beta/16213827/" title="Linkedin"><i class="fa fa-linkedin fa-4x" style="padding: 0px 5px 0px 5px; color: #0077B5"></i></a>
    </div>
    <div class="footer_links" style="color: white; display: inline-block; width: 100%;">
          <div class="links1" style="float: left; width: 300px;">
                <ul class="fa-ul fa-2x">
                  <li style="font-size: .6em!important; font-weight: bold; padding-bottom: 3px;" >Contact Us</li>
                  <li style="font-size: .6em!important;"><i class="fa-li fa fa-map-marker"></i>115 Library Dr, Rochester,MI</li>
                  <li style="font-size: .6em!important;"><i class="fa-li fa fa fa-phone"></i>(586) XXX-XXXX</li>
                  <li style="font-size: .6em!important;"><i class="fa-li fa fa-envelope"></i><a href="mailto:support@expense-master.com" style="text-decoration: none;">support@expense-master.com</a></li>
              </ul>
          </div>
          <div class="links2" style="float: right; width: 300px;">
              <ul class="fa-ul fa-2x" style="padding-top: 28px">
                <li style="font-size: .6em!important;"><i class="fa-li fa fa fa-external-link" style="color: white"></i><a href="./login.php" style="text-decoration: none;">Login</a></li>
                <li style="font-size: .6em!important;"><i class="fa-li fa fa fa-external-link" style="color: white"></i><a href="./forgotpwd.php" style="text-decoration: none;">Forgot Password</a></li>
                <li style="font-size: .6em!important;"><i class="fa-li fa fa fa-external-link" style="color: white"></i><a href="#signup" style="text-decoration: none;">Sign Up</a></li>
                <li style="font-size: .6em!important;"><i class="fa-li fa fa fa-external-link" style="color: white"></i><a href="#team" style="text-decoration: none;">About Us</a></li>
              </ul>
          </div>
    </div>​
    <div class ="footer_copyright">
      <h3 align="center" style=" color: white; font-size: 14px;line-height: 2">Designed by Stephen Weatherly ©2017</h3>
    </div>
  </footer>
  <!--End of footer-->

  </body>
</html>
