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
    <link rel="stylesheet" href="https://use.fontawesome.com/44ff956945.css">
	<!-- Favorite Icon -->
	<link rel="shortcut icon" href="./images/icon.png" type="image/x-icon" />
  <script src="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"></script>
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
    <div class="benefits page-body" style="padding:30px;">
        <?php
          //fetch user name to display at the top
              $sql = "SELECT id, first, last, email, bid, timestamp FROM user";
              $result= mysqli_query($conn,$sql);
              $row = mysqli_fetch_assoc($result);
          ?>
          <h3><?php echo "Welcome Back: ".$row['first']. " " .$row['last'];?> </h3><br><br>

          <div class="user information" style="padding:30px; background:#F9F9FB; border:1px solid #E4E4E7; border-radius:5px;">
            <h3>Account Information on File</h3>
            <p><?php echo "Registered Email Account: " .$row['email'];?>
            <p><?php echo "Registered Business ID: ".$row['bid'];?>
            <p><?php echo "Registered Date: ".$row['timestamp'];?>
          </div>
          <br>
          <div class="submitted_forms" style="padding:30px; background:#F9F9FB; border:1px solid #E4E4E7; border-radius:5px;">
            <h3>Recently Submitted Forms</h3>
            <p>Form 1 Placeholder:</p>
            <p>Form 2 Placeholder:</p>
            <p>Form 3 Placeholder:</p>
          </div>
    </div>		
        <div class="signup page-sidebar" style="padding:30px; background:#F9F9FB; border:1px solid #E4E4E7; border-radius:5px; margin-top: 127px;">
          <!--Fetch Company Information from DB -->
          <h3>My Company Information</h3>
          <p>Name: .$row['company']</p>
          <p>Supervisor: .$row['sid_first']."".$row['sid_last']</p>
		  </div>
  </div>
    </div><script src="//d2fjue5z6foteq.cloudfront.net/assets/315cc4a6724c52ae0b7b8f0104132a7094855698/main.js" type="text/javascript"></script>
  </body>
</html>
