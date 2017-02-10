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
    <title>Expense Master | Sign up</title>
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
        <a class="header-logo" href="./index.php"></a>
        <div class="header-login">
    			<!-- Login Redirect to a page at # 
    			<a class="btn btn-sm btn-alt" href="#">Log in</a>
    			 Logout Redirect to a page at # -->
    			<a class="btn btn-sm btn-alt" href="./logout.php">Log Out</a>
        </div>
      </div>
      <!--
          <ul class="side-by-side">
            <li><a class="active" href="#home">My Account</a></li>
            <li><a href="#news">Submit Form</a></li>
            <li><a href="#contact">View Forms</a></li>
            <li><a href="#about">Message Supervisor</a></li>
          </ul>
          -->
    <div class="signup-content" style="padding: 0px;">
          <ul class="side-by-side">
            <li><a class="active" href="./account.php">My Account</a></li>
            <!--Modal form will pop up to submit a new expense-->
            <li><a href="#">New Expense</a></li>
            <li><a href="./receipt.php">Upload Receipt</a></li>
            <li><a href="./report.php">Run Report</a></li>
          </ul>
    <div class="benefits page-body" style="padding: 30px;">
        <?php
          //fetch user name to display at the top
              $sql = "SELECT id, first, last FROM user where id=".$_SESSION['id'];
              $result= mysqli_query($conn,$sql);
              $row = mysqli_fetch_assoc($result);
              echo "Welcome Back: " . $row['first']. " " . $row['last'];
          ?>
          <br><br>
          <p>To begin please use the navigational bar on top to jump to a new page</p>
        </div>		
        <div class="signup page-sidebar"><p class="alert alert-error" id="fill-all-fields" style="display:none"></p>
		</div>
      </div>
    </div><script src="//d2fjue5z6foteq.cloudfront.net/assets/315cc4a6724c52ae0b7b8f0104132a7094855698/main.js" type="text/javascript"></script>
  </body>
</html>
