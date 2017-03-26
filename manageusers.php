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

      <div class="w3-container w3-padding-64 w3-center" id="team" style="box-shadow: none;">
          <br>
          <h2 style="font-weight: bold;">Manage Company Users</h2>
      </div>

      <div class="management_options" style="margin: 30px; min-height: auto!important; background: #F9F9FB; padding: 20px; border: 1px solid #E4E4E7; border-radius: 5px;box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
        <h3>Here you can manage users within your company and edit their permission.</h3>
        <p>Promote: Grants user Administrative Rights.(View all Company employees, promote/remove users, update user expense status)</p>
        <br>
        <p>Remove: Deletes user from Company tracking</p>
      </div>

<div class="companytable" style="padding: 30px;width: 1023px;margin: 0 auto;min-height: auto!important;">
<!--Recently Submitted Forms-->
<p style="padding: 20px;"></p>
  <form id="user_info" action="viewform.php" method="post">
        <div class="info_header" id="topborder">
        <h3 class="join" style="background-color: #2E3639; padding: 0px; font-size: 24px;color: #fff; padding-left: 5px;">Company Users</h3><br>
        </div>
        <div class="user information" style=" padding-top: 5px; padding-left: 20px; padding-right: 20px; font-size: 16px;">
              <?php
              $sql = "SELECT is_admin FROM user WHERE id = '{$_SESSION['id']}'";
              $result= mysqli_query($conn,$sql);
              $row = mysqli_fetch_assoc($result);
              
              if($row['is_admin']  == 1){
            ?>
            <?php
                $query1 = "SELECT first,last FROM user";
                $results = mysqli_query($conn,$query1);
            ?>

            <p style="padding: 10px"></p>
                  <table class="tg" style="width: 100%;"> 
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

                      <thead>
                        <tr>
                          <th colspan="1" class="tg-9header">First</th>
                          <th colspan="1" class="tg-9header">Last</th>
                          <th colspan="1" class="tg-9header">Manage</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $first_row = true;
                        while ($row = mysqli_fetch_assoc($results)) {
                            echo '<tr>';
                            foreach($row as $key => $field) {
                                echo '<td>' . htmlspecialchars($field) . '</td>';
                            }
                            echo "<td><input class='btn-1' type='submit' name='submit-btn' value='Promote' style='color:#fff; width:50%; background-color:#4caf50; font-size:12px;' /><input class='btn-1' type='submit' name='submit-btn' value='Remove' style='color:#fff; width:50%; background-color:#C0392B; font-size:12px;' />";
                            echo '</tr>';
                        }
                        echo("</table>");

                      ?>
                      </tbody>
                     </table>
                     <br>
            <?php
            }
            ?>
        </div>
  </form>
  
</div>
</div>
<!--End of Company Users-->
<script src="//d2fjue5z6foteq.cloudfront.net/assets/315cc4a6724c52ae0b7b8f0104132a7094855698/main.js" type="text/javascript"></script>
</body>
</html>