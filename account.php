<?php
    include 'dbh.php';
    session_start();

    /*prevent user from accessing this page
    if no session is started*/
    if (!isset($_SESSION['id'])){
        header("Location: ./login.php?error=invalidlogin");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-type" />
    <title>ExpenseMaster - Account</title>
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
              <!--Color Active Tab-->
                <li><a style="background-color: white; color: black;" href="./account.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp; My Account</a></li>
                <li><a href="./newexpense.php"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; New Expense</a></li>
                <li><a href="./receipt.php"><i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp; Upload Receipt</a></li>
                <li><a href="./report.php"><i class="fa fa-file-text" aria-hidden="true"></i>&nbsp; Run Report</a></li>
              </ul>
<!--Left Side-->
    <div class="benefits page-body" style="padding:30px;">
        <?php
          //fetch user name to display at the top;
              $sql = "SELECT * FROM user WHERE id = '{$_SESSION['id']}'";
              $result= mysqli_query($conn,$sql);
              $row = mysqli_fetch_assoc($result);
          ?>
          <h3 style="margin: 0 0 20px 0;"><?php echo "Welcome Back: ".$row['first']. " " .$row['last'];?> </h3>
          <p style="padding: 8px;">
          <h5 style="margin: 0 0 20px 0;"></h5>

          <form id="user_info" method="post">
            <div class="info_header" id="joinnow">
                <h3 align="center" class="join" style="background-color: #2E3639; padding: 0px; font-size: 24px;color: #fff; padding-left: 5px;" >My Account Information</h3><a class="btn btn-sm btn-alt" href="#" style="float: right; font-size: 14px; padding: 10px; margin: 2px;"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp; Edit</a><a class="btn btn-sm btn-alt" href="#" style="float: right; font-size: 14px; padding: 10px; margin: 2px; background-color: #4CAF50;"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; Save</a><br>
            </div>

            <div class="user information" style=" padding-top: 5px; padding-left: 20px; padding-right: 20px; font-size: 16px;">
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
                    <p style="padding: 10px;">

<!--My Account Information-->
                      <table class="tg" style="width: 445px;">
                        <!--Header Currently Disabled
                        <tr>
                          <th colspan="2" class="tg-9header"></th>
                        </tr>-->
                        <tr>
                          <td class="tg-9hbo">DB ID</td>
                          <td class="tg-yw4l"><?php echo $row['id'];?></td>
                        </tr>
                        <tr>
                          <td class="tg-9hbo">First</td>
                          <td class="tg-yw4l" contenteditable="true"><?php echo $row['first'];?></td>
                        </tr>
                        <tr>
                          <td class="tg-9hbo">Last</td>
                          <td class="tg-yw4l" contenteditable="true"><?php echo $row['last'];?></td>
                        </tr>
                        <tr>
                          <td class="tg-9hbo">Username</td>
                          <td class="tg-yw4l"><?php echo $row['uid'];?></td>
                        </tr>
                        <tr>
                          <td class="tg-9hbo">Email</td>
                          <td class="tg-yw4l" contenteditable="true"><?php echo $row['email'];?></td>
                        </tr>
                        <tr>
                          <td class="tg-9hbo">Business ID</td>
                          <td class="tg-yw4l"><?php echo $row['bid'];?></td>
                        </tr>
                        <tr>
                          <td class="tg-9hbo">Date of birth</td>
                          <td class="tg-yw4l"><?php echo $row['dob'];?></td>
                        </tr>
                        <tr>
                          <td class="tg-9hbo">Session ID</td>
                          <td class="tg-yw4l"><?php echo $_SESSION['id'];?></td>
                        </tr>
                        <tr>
                          <td class="tg-9hbo">Admin Rights</td>
                          <?php
                          if($row['is_admin']  == 1){
                              echo "<td class='tg-yw4l'>Yes</td>";
                              }
                           else{
                              echo "<td class='tg-yw4l'>No</td>";
                              }
                          ?>

                        </tr>
                        <tr>
                          <td class="tg-9hbo">Member Since</td>
                          <td class="tg-yw4l"><?php echo $row['timestamp'];?></td>
                        </tr>
                      </table>
                      <br>        

                  <!--Checking DB value 
                  <?php echo "Admin Status: ".$row['is_admin'];?><br><br>-->
                  <!--<p><?php echo "<strong>Member Since:</strong> ".$row['timestamp'];?><br><br>-->
            </div>
          </form>
          <br>
          
<!--Recently Submitted Forms-->
          <form id="user_info" method="post">
            <div class="info_header" id="joinnow">
                <h3 align="center" class="join" style="background-color: #2E3639; padding: 0px; font-size: 24px;color: #fff; padding-left: 5px;">My Recently Submitted Forms</h3><a class="btn btn-sm btn-alt" href="#" style="float: right; font-size: 14px; padding: 10px;"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp; Edit</a><br>
            </div>

            <div class="user information" style=" padding-top: 5px; padding-left: 20px; padding-right: 20px; font-size: 16px;">
                  <p style="padding: 10px;">

                  <?php
                      $id = $_SESSION['id'];
                      $query = "SELECT ExpenseId, ExpenseStatusID, ExpenseDate, TotalPrice  from expenses where UserID = '$id'";
                      $result = mysqli_query($conn, $query);
                    ?>

                    <table class="table table-condensed table-hover">
                      <thead>
                        <tr>
                          <th>Expense ID</th>
                          <th>Amount</th>
                          <th>Date Submitted</th>
                          <th>Status</th>
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
                          echo "<td>".$row['TotalPrice']."</td>";
                          echo "<td>".$date."</td>";
                          echo "<td>".$expStatus['ExpenseStatus']."</td>";
                          echo "<td class='col-md-2'><form action='viewform.php' method='POST'><input type='hidden' name='tempId' value='".$row["ExpenseId"]."'/><input class='btn btn-sm btn-alt' type='submit' name='submit-btn' value='View Details' /></form></td>";
                          echo "</tr>";
                         }

                      ?>
                      </tbody>
                     </table>

                  
                  <br>
            </div>
          </form>

<!--End of Recently Submitted-->
           <?php 
           if($row['is_admin']  == 1){
            ?>
            <br>
            <form id="user_info" method="post">
                <div class="info_header" id="joinnow">
                    <h3 align="center" class="join" style="background-color: #2E3639; padding: 0px; font-size: 24px;color: #fff; padding-left: 5px;">Company Users</h3><a class="btn btn-sm btn-alt" href="#" style="float: right; font-size: 14px; padding: 10px;"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp; Edit</a><br>
                </div>

                <div class="user information" style=" padding-top: 5px; padding-left: 20px; padding-right: 20px; font-size: 16px;">
                      <p style="padding: 10px;">
<!--Query Company Users-->
                      <?php
                        $query1 = "SELECT first,last FROM user";
                        $results = mysqli_query($conn,$query1);
                      ?>

                        <table class="tg" style="width: 450px;">
                        <tr>
                          <th colspan="1" class="tg-9header">First</th>
                          <th colspan="1" class="tg-9header">Last</th>
                        </tr>
<!--Dynamically Grow User List with same Company id-->
                      <?php
                        $first_row = true;
                        while ($row = mysqli_fetch_assoc($results)) {
                            echo '<tr>';
                            foreach($row as $key => $field) {
                                echo '<td>' . htmlspecialchars($field) . '</td>';
                            }
                            echo '</tr>';
                        }
                        echo("</table>");

                      ?>
                            <br>
                      </div>
                  </form>
            <?php
            }
            ?>


    </div>    

<!--Right Side-->
    <div class="signup page-sidebar">
      <form id="user_info" method="post">
            <div class="info_header" id="joinnow">
                <h3 align="center" class="join" style="background-color: #2E3639; padding: 0px; font-size: 24px;color: #fff; padding-left: 5px;" >My Company</h3><br>
            </div>

        <div class="user information" style="padding-top: 5px; padding-left: 20px; padding-right: 20px; font-size: 16px;">
          <!--Fetch Company Information from DB -->
          <?php
              //fetch business related fields
              $sql1="SELECT * FROM user, business WHERE id = '{$_SESSION['id']}' and user.bid = business.bid";
              $result1=mysqli_query($conn,$sql1);
              $row1=mysqli_fetch_assoc($result1)
            ?>
          <p style="padding: 10px;">

          <!--Edit Button Disabled-->
            <!--<a class="btn btn-sm btn-alt" href="#" style="float: right; font-size: 14px; padding: 10px;"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp; Edit</a>-->

<!--My Company Information-->
            <table class="tg" style="width: 350px;">
                      <!--Header Currently Disabled
                        <tr>
                          <th colspan="2" class="tg-9header"></th>
                        </tr>-->
                      <tr>
                        <td class="tg-9hbo">Name</td>
                        <td class="tg-yw4l"><?php echo $row1['b_name'];?></td>
                      </tr>
                      <td class="tg-9hbo">Supervisor</td>
                        <td class="tg-yw4l"><?php echo $row1['supervisor_first']." ".$row1['supervisor_last'];?></td>
                      </tr>
                      <td class="tg-9hbo">Address</td>
                        <td class="tg-yw4l"><?php echo $row1['b_address'];?></td>
                      </tr>
                      <td class="tg-9hbo">City</td>
                        <td class="tg-yw4l"><?php echo $row1['b_city'];?></td>
                      </tr>
                      <td class="tg-9hbo">State</td>
                        <td class="tg-yw4l"><?php echo $row1['b_state'];?></td>
                      </tr>
                      <td class="tg-9hbo">Zip</td>
                        <td class="tg-yw4l"><?php echo $row1['zip'];?></td>
                      </tr>
            </table>
            <br>
          </p>
          </div>
        </form>
      </div>
    </div>
    <script src="//d2fjue5z6foteq.cloudfront.net/assets/315cc4a6724c52ae0b7b8f0104132a7094855698/main.js" type="text/javascript"></script>
  </body>
</html>
