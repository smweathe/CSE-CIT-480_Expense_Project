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
	<title>ExpenseMaster - View</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/44ff956945.css">
	<link href="w3.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet" />
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

<!-- Expense Container -->
		<center>
		<br>
		<h2>View Expenses</h2>
			<div id="filter" style="text-align: center;">
				<input type="checkbox" value="categorya" id="filter-categorya" value="Category A">Approved
				<input type="checkbox" value="categoryb" id="filter-categoryb" value="Category B" style="margin-left: 15px;">Denied
				<input type="checkbox" value="categoryc" id="filter-categoryc" value="Category C" style="margin-left: 15px;">Pending
			</div>
		<br>
		<div class="user information" style=" padding-top: 5px; padding-left: 20px; padding-right: 20px; font-size: 16px;">
			<div id="user_info">
			<div class="w3-row" style="padding-bottom: 25px;"><br>
				<?php
					$id = $_SESSION['id'];
					$query = "SELECT ExpenseId, ExpenseStatusID, ExpenseDate, TotalPrice, BusinessName  from expenses where UserID = '$id' ORDER BY ExpenseId DESC";
					$result = mysqli_query($conn, $query);
				?>
				<!--Table Style-->
                  <style type="text/css">
                      .tg  {border-collapse:collapse;border-spacing:0; border-style:solid;border-width:1px;}
                      .tg td{font-size:14px;padding:10px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
                      .tg th{font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px; border-color: black; overflow:hidden;word-break:normal;}
                       th{background-color: #79589F;}
                      .tg .tg-9hbo{font-weight:bold;vertical-align:top;width: 120px;}
                      .tg .tg-9header{font-weight:bold;vertical-align:top;width: 120px; color: white; height: 42px;}
                      .tg .tg-yw4l{vertical-align:top}
                      /*tr:hover {background-color: #f5f5f5}*/
                      tr:nth-child(even){background-color: #f2f2f2}
                    </style>
				<table class="tg">             
					<thead>
						<tr>
							<th colspan="1" class="tg-9header">Expense ID</th>
                          				<th colspan="1" class="tg-9header">Amount</th>
                          				<th colspan="1" class="tg-9header">Merchant</th>
                          				<th colspan="1" class="tg-9header">Date Purchased</th>
                          				<th colspan="1" class="tg-9header">Status</th>
                          				<th></th>
                          				<th></th>
						</tr>
					</thead>
					<tbody>
		   <?php
                         while ($row = mysqli_fetch_array($result)) {
                          $time = strtotime($row['ExpenseDate']);
                          $date = date("m/d/y", $time);
                          $query = "SELECT ExpenseStatus from expensestatus where ExpenseStatusID='$row[ExpenseStatusID]'";
                          $res = mysqli_query($conn, $query);
                          $expStatus = mysqli_fetch_array($res);
                          if($expStatus['ExpenseStatus'] == "Approved"){
                            echo "<tr class='success'>";
                          }elseif($expStatus['ExpenseStatus'] == "Denied"){
                            echo "<tr class='danger'>";
                          }else{
                            echo "<tr class = 'warning'>";
                          }                          
                          echo "<td>".$row['ExpenseId']."</td>";
                          echo "<td>$".$row['TotalPrice']."</td>";
                          echo "<td>".$row['BusinessName']."</td>";
                          echo "<td>".$date."</td>";
                          echo "<td>".$expStatus['ExpenseStatus']."</td>";
                          echo "<td><form action='viewform.php' method='POST'><input type='hidden' name='tempId' value='".$row["ExpenseId"]."'/><input class='btn btn-sm btn-alt' type='submit' name='submit-btn' value='View Details' style='background-color:#4caf50; font-size:12px; width:130px;' /></form></td>";
                          echo "<td><form action='#' method='POST'><input type='hidden' name='tempId' value='".$row["ExpenseId"]."'/><input class='btn btn-sm btn-alt' type='submit' name='submit-btn' value='Delete' style='background-color:#C0392B; font-size:12px; width:130px;' /></form></td>";
                          echo "</tr>";
                         }
                      ?>
					</tbody>
				</table>
			</div>
		</center>
		</div>
		</div>
		</div>

<!-- End Expense Container -->  
    </div>
  </div>

    </div><script src="//d2fjue5z6foteq.cloudfront.net/assets/315cc4a6724c52ae0b7b8f0104132a7094855698/main.js" type="text/javascript"></script>
  </body>
</html>