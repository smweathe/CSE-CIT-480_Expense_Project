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
    <title>ExpenseMaster - General</title>
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
                <li><a href="./newexpense.php"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; New Expense</a></li>
                <li><a href="./receipt.php"><i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp; Upload Receipt</a></li>
                <li><a href="./report.php"><i class="fa fa-file-text" aria-hidden="true"></i>&nbsp; Run Report</a></li>
          </ul>
          <div class="benefits page-body" style="padding: 30px;">
          <h2>Fill Out a New General Expense</h2>
                <form action="./includes/submit.inc.php" class="gtm_expense_form" id="expenseform" method="post" enctype="multipart/form-data">
                  <div class="input-group">
                  <center><i class="fa fa-money fa-5x" aria-hidden="true"></i></center>
                  <br>
                  Merchant Name: <input type="text" class="required" required value="" name="merchant" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
                  Date: <input type="date" class="required" required value="" name="generalDate" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
                  Total:<input type="decimal" class="required" required value="" name="generalTotal" placeholder="$0.00" min="0.00" max="9999999.99" step="2" style="margin-bottom:5px"><sup class="required" title="Required"></sup>
                  Additional Comments: <textarea name="generalComment" rows="5" style="margin-bottom: 5px"></textarea><sup class="required" title="Required"></sup>
                  Upload Receipt: <input type="file" accept="image/*" name="generalExpense_Receipt" id="generalExpense_Receipt" style="margin-bottom: 5px"><br><br>
                  
                  <input class="btn btn-alt full-width" href="./account.php" type="submit" name="general" value="Submit Form" />

                  <br><br>
               </form>
          </div>		
        </div>
        <div class="signup page-sidebar">
                <h3>This form can be used to fill out a general expense. Items may include food, logding, merchandise, and entertainment.</h3>
                <h3>Please Note: Comments and receipt upload are not required for submission.</h3>
        </div>

    </div>
    <script src="//d2fjue5z6foteq.cloudfront.net/assets/315cc4a6724c52ae0b7b8f0104132a7094855698/main.js" type="text/javascript"></script>
  </body>
</html>
