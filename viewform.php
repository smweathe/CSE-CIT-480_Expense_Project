<?php
    include 'dbh.php';
  	session_start();
    /*prevent user from accessing this page
    if no session is started*/
    if (!isset($_SESSION['id'])){
        header("Location: login.php");
	}
  	if(!isset($_POST["tempId"])){
		header("Location: ./account.php");
	}
	$id = $_POST["tempId"];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-type" />
    <title>Expense Master | View Form</title>
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/44ff956945.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Favorite Icon -->
	<link rel="shortcut icon" href="./images/icon.png" type="image/x-icon" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Sign up for a free Expense Master account." name="description" />
    <!-- Logo Redirect to a page at # -->
	<link href="./index.php" rel="canonical" />
  <script>
	$(document).ready(function(){
		$('#input:edit').click(function)(){
			$('input:merchant').attr("disabled", "");
		}
	});
  </script>
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
          <form action="./includes/submit.inc.php" class="gtm_expense_form" id="expenseform" method="post" enctype="multipart/form-data">
            <div class="input-group">
            <h3><center>View Submitted Form</center></h3>
            <center><i class="fa fa-money fa-5x" aria-hidden="true"></i></center>
			<?php
				$query = "SELECT BusinessName, ExpenseDate, TotalPrice, ExpenseFileName, ExpenseStatusID from expenses where ExpenseId = '$id'";
				//ADD BUSINESS COMMENTS
				$result = mysqli_query($conn, $query);
				$row = mysqli_fetch_assoc($result)

			?>
            <br>
            Merchant Name: <input type="text" class="required" name="merchant" tabindex="1" style="margin-bottom: 5px" value="<?php echo $row['BusinessName'];?>"><sup class="required" title="Required"></sup>
            Date: <input type="date" class="required" name="date"  tabindex="2" style="margin-bottom: 5px" value="<?php $date = date("Y-m-d", strtotime($row['ExpenseDate'])); echo $date;?>"><sup class="required" title="Required"></sup>
            Total:<input type="decimal" class="required" name="total" placeholder="$0.00" tabindex="3" min="0.00" max="9999999.99" step="2" style="margin-bottom: 5px" value="<?php echo $row['TotalPrice'];?>"><sup class="required" title="Required"></sup>
            Additional Comments: <input type="text" name="comment" tabindex="4" style="margin-bottom: 5px" value="<?php echo "NEEDS SECTION IN DB"?>"><sup class="required" title="Required"></sup>
			<input type='hidden' name='tempId' value='<?php echo $id?>'/>
			<?php
				$query = "SELECT ExpenseStatus from expensestatus where ExpenseStatusID='$row[ExpenseStatusID]'";
				$res = mysqli_query($conn, $query);
				$expStatus = mysqli_fetch_array($res);
				if($expStatus['ExpenseStatus'] == "Denied" || $expStatus['ExpenseStatus'] == "Pending"){
					echo "<input class='btn btn-alt' style='margin-right: 5px' tabindex='7' id='edit' name='resubmit' value='Edit' />";
					echo "<input class='btn btn-alt' tabindex='8' type='submit' name='delete' value='Delete expense' />";
				}
			?>
			<br><br>
			</div>		
         </form>
      </div>
		<div class="signup page-sidebar" style="padding:30px; background:#F9F9FB; border:1px solid #E4E4E7; border-radius:2px; margin-top: 30px;">
			<h3>Receipt Prievew</h3>
			<img src="./uploads/<?php echo $row['ExpenseFileName']; ?>" />
		</div>
    </div><script src="//d2fjue5z6foteq.cloudfront.net/assets/315cc4a6724c52ae0b7b8f0104132a7094855698/main.js" type="text/javascript"></script>
  </body>
</html>
