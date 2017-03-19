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
    <title>ExpenseMaster - Distance</title>
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
    <h2>Fill Out a New Car Distance Expense</h2>
          <form action="#" class="gtm_expense_form" id="expenseform" method="post">
            <div class="input-group">
            <center><i class="fa fa-car fa-5x" aria-hidden="true"></i></center>
            <br>
            Distance(in miles): <input type="text" class="required" name="distanceDistance" id="distanceDistance" required value="" autocomplete="false" value="" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
            Rate(0.54 is default): <input type="text"  class="required" name="distanceRate"  id="distanceRate" required value="" autocomplete="false" value="" onclick= "calc()" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
            Total: <input type="text" class="required" name="distanceTotal" id="distanceTotal" value="" placeholder="$0.00" disabled="disabled" style="margin-bottom: 5px; background-color: #f3f5f6;"><sup class="required" title="Required"></sup>
            
            <script>
            //User can only enter numbers and decimal
              $(document).ready(function () {
                //called when key is pressed in textbox
                $("#distanceDistance,#distanceRate").keypress(function (e) {
                   //if the letter is not digit then display error and don't type anything
                   if (e.which != 46 && e.which > 31 && (e.which < 48 || e.which > 57)) {
                      //display error message
                      $("#errmsg").html("Digits Only").show().fadeOut("slow");
                             return false;
                  }
                 });
              });

            //Calculate Total
            function calc(){
                $("#distanceDistance,#distanceRate").keyup(function () {
                $('#distanceTotal').val($('#distanceDistance').val() * $('#distanceRate').val());
                });
            }
            </script>

            Date: <input type="date" class="required" name="distanceDate" required value=""  style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
            Additional Comments: <textarea name="distanceComment" rows="5" style="margin-bottom: 5px"></textarea><sup class="required" title="Required"></sup>
            Upload Receipt: <input type="file" name="distanceExpense_receipt" style="margin-bottom: 5px"><br><br>
            <input class="btn btn-alt full-width" href="./account.php" type="submit" value="Submit Form" />
            <br><br>
         </form>
    </div>   
      </div>

    <div class="signup page-sidebar">
            <h3>This form can be used to fill out a new car expense. The default mileage rate is $0.54 per mile.</h3>
            <h3>Please Note: Comments and receipt upload are not required for submission.</h3>
    </div>

    </div><script src="//d2fjue5z6foteq.cloudfront.net/assets/315cc4a6724c52ae0b7b8f0104132a7094855698/main.js" type="text/javascript"></script>
  </body>
</html>
