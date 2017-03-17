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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta content="text/html; charset=utf-8" http-equiv="Content-type" />
    <title>ExpenseMaster - Time</title>
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
    <div class="benefits page-body" style="padding: 30px;">
          <form action="#" class="gtm_expense_form" id="expenseform" method="post">
            <div class="input-group">
            <h3><center>Time Form</center></h3>
            <center><i class="fa fa-clock-o fa-5x" aria-hidden="true"></i></center>
            <br>
            Hours: <input type="text" class="required" name="hours" id="hours" value="" tabindex="1" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
            Rate: <input type="text"  class="required" name="rate"  id="rate"  value="" onclick= "calc()" tabindex="2"  style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
            Total: <input type="text" class="required" name="total" id="total" value="" placeholder="$0.00" tabindex="3" disabled="disabled" style="margin-bottom: 5px; background-color: #f3f5f6;"><sup class="required" title="Required"></sup>
            /<!--Calculate Total Script-->
            <script>
            function calc(){
                $("#hours,#rate").keyup(function () {
                $('#total').val($('#hours').val() * $('#rate').val());
                });
            }
            </script>
            Date: <input type="date" class="required" name="date"  tabindex="4" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
            Additional Comments: <textarea name="comment" rows="5" tabindex="5" style="margin-bottom: 5px"></textarea><sup class="required" title="Required"></sup>
            Upload Receipt: <input type="file" name="expense_receipt" tabindex="6" style="margin-bottom: 5px"><br><br>
            <input class="btn btn-alt full-width" href="./account.php" tabindex="7" type="submit" value="Submit Form" />
            <br><br>
         </form>
    </div>    
    <div class="signup page-sidebar">
    </div>
      </div>
    </div><script src="//d2fjue5z6foteq.cloudfront.net/assets/315cc4a6724c52ae0b7b8f0104132a7094855698/main.js" type="text/javascript"></script>
  </body>
</html>
