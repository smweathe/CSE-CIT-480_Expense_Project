<?php
    include 'dbh.php';
  	session_start();
    /*prevent user from accessing this page
    if no session is started*/
    if (!isset($_SESSION['id'])){
        header("Location: login.php");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-type" />
    <title>ExpenseMaster - New</title>
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
  <body class="signup">
  <noscript><iframe height="0" src="//www.googletagmanager.com/ns.html?id=GTM-JD26" style="display:none;visibility:hidden" width="0"></iframe></noscript>
    <div class="signup-page">
          <div class="header-main">
            <a class="header-logo" href="./account.php"></a>
              <div class="header-login">
          			<!-- Login Redirect to a page at # 
          			<a class="btn btn-sm btn-alt" href="#">Log in</a>
          			 Logout Redirect to a page at # -->
          			<a class="btn btn-sm btn-alt" href="./logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Log Out</a>
              </div>
          </div>
          <div class="signup-content" style="padding: 0px;">
              <ul class="side-by-side">
                    <li><a class="active"  href="./account.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp; My Account</a></li>
                    <!--Modal form will pop up to submit a new expense-->
                    <li><a href="./newexpense.php"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; New Expense</a></li>
                    <li><a href="./receipt.php"><i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp; Upload Receipt</a></li>
                    <li><a href="./report.php"><i class="fa fa-file-text" aria-hidden="true"></i>&nbsp; Run Report</a></li>
              </ul>

<!-- Expense Container -->
        <div class="w3-container w3-padding-64 w3-center" id="team">
              <br>
              <h2>Ready to create a new expense?</h2>
              <h3>Please choose from the following expense types below to get started.</h3>
              <br>
              <div class="w3-row" style="padding-bottom: 25px;"><br>
<!-- General Expense Container -->
                    <div class="w3-quarter" style="padding: 5px;">
                      <div class="border1" style="border: 1px solid #E4E4E7; background: #F9F9FB; border-radius: 5px; padding-top: 15px; padding-bottom: 10px;";>
                        <i class="fa fa-money fa-4x" aria-hidden="true"></i>
                        <!--<img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">-->
                        <h4 style="margin: 10px">General Expense</h4>
                        <p align="center">Select this option for items such as entertainment, lodging, meals, and company supplies .</p>
                        <a class="expense_choice" href= "./generalexpenseform.php">New General Expense</a>
                        <br>
                      </div>
                    </div>
<!-- Time Expense Container -->
                  <div class="w3-quarter" style="padding: 5px;">
                    <div class="border1" style="border: 1px solid #E4E4E7; background: #F9F9FB; border-radius: 5px; padding-top: 15px; padding-bottom: 10px;";>
                      <i class="fa fa-clock-o fa-4x" aria-hidden="true"></i>
                      <!--<img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">-->
                      <h4 style="margin: 10px">Time</h4>
                      <p align="center">Select this option for hourly compensation based on pay rate. Both rate and time are required.</p>
                      <a class="expense_choice" href= "./timeform.php">New Time Expense</a>
                      <br>
                      </div>
                  </div>
<!-- Car Expense Container -->
                  <div class="w3-quarter" style="padding: 5px;">
                  <div class="border1" style="border: 1px solid #E4E4E7; background: #F9F9FB; border-radius: 5px; padding-top: 15px; padding-bottom: 10px;";>
                  <i class="fa fa-car fa-4x" aria-hidden="true"></i>
                    <!--<img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">-->
                    <h4 style="margin: 10px">Car Distance</h4>
                    <p align="center">Select this option for manual travel such as a car. Note distance is required.</p>
                    <a class="expense_choice" href= "./distanceform.php">New General Expense</a>
                    <br>
                  </div>
                  </div>
<!-- Air Expense Container -->
                  <div class="w3-quarter" style="padding: 5px;">
                  <div class="border1" style="border: 1px solid #E4E4E7; background: #F9F9FB; border-radius: 5px; padding-top: 15px; padding-bottom: 10px;";>
                  <i class="fa fa-plane fa-4x" aria-hidden="true"></i>
                    <!--<img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">-->
                    <h4 style="margin: 10px">Air Travel</h4>
                    <p align="center">Select this option for non-manual travel forms of travel including plane, train, and taxi.</p>
                    <a class="expense_choice" href= "./airform.php">New General Expense</a>
                    <br>
                  </div>
                  </div>
              </div>
        </div>
<!-- End Expense Container -->  
    </div>
  </div>

    </div><script src="//d2fjue5z6foteq.cloudfront.net/assets/315cc4a6724c52ae0b7b8f0104132a7094855698/main.js" type="text/javascript"></script>
  </body>
</html>
