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
    <title>ExpenseMaster - Multiform</title>
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
	<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

      <style>
          .input-group-general{
              margin-left: 24px;
              margin-right: 24px;
          }
          .input-group-airform{
              margin-left: 24px;
              margin-right: 24px;
          }
          .input-group-time{
              margin-left: 24px;
              margin-right: 24px;
          }
      </style>

  </head>

	<script>
        $(document).ready(function () {
            $("#multi").hide();
            //$('<div/>', {
            //   'class' : 'input-group', html: GetHtml()
            //}).appendTo('#container');
            $('#addGeneral').click(function () {
                $('<div/>', {'class' : 'input-group-general', html: GetGeneralHtml()}).hide().appendTo('#container').slideDown('fast');
                $("#multi").show();
                moved = true;
                                var element = document.getElementById("multi");
                element.scrollIntoView();
            });
            $('#addAir').click(function () {
                $('<div/>', {'class' : 'input-group-airform', html: GetAirHtml()}).hide().appendTo('#container').slideDown('fast');
                $("#multi").show();
                                var element = document.getElementById("multi");
                element.scrollIntoView();
            });
            $('#addTime').click(function () {
                $('<div/>', {'class' : 'input-group-time', html: GetTimeHtml()}).hide().appendTo('#container').slideDown('fast');
                $("#multi").show();
                var element = document.getElementById("multi");
                element.scrollIntoView();
            });

        })

    function GetGeneralHtml(){
		var len = $('.input-group-general').length;
		var $html = $('.cloneGeneral').clone();
		$html.find('[name=merchant]')[0].name="merchant" + len;
		$html.find('[name=generalDate]')[0].name="generalDate" + len;
		$html.find('[name=generalTotal]')[0].name="generalTotal" + len;
		$html.find('[name=generalComment]')[0].name="generalComment" + len;
        $html.find('[name=generalExpense_Receipt]')[0].name="generalExpense_Receipt" + len;
        return $html.html();    
	}
     
	 function GetAirHtml(){
        var len = $('.input-group-airform').length;
        var $html = $('.cloneAir').clone();
        $html.find('[name=distance]')[0].name="distance" + len;
        $html.find('[name=airliner]')[0].name="airliner" + len;
        $html.find('[name=starting_loc]')[0].name="starting_loc" + len;
        $html.find('[name=airTotal]')[0].name="airTotal" + len;
        $html.find('[name=airDate]')[0].name="airDate" + len;
        $html.find('[name=airComment]')[0].name="airComment" + len;
        $html.find('[name=airExpense_Receipt]')[0].name="airExpense_Receipt" + len;
        return $html.html();    
	}
        
    function GetTimeHtml(){
        var len = $('.input-group-time').length;
        var $html = $('.cloneTime').clone();
        $html.find('[name=hours]')[0].name="hours" + len;
        $html.find('[name=rate]')[0].name="rate" + len;
        $html.find('[name=timeTotal]')[0].name="timeTotal" + len;
        $html.find('[name=timeDate]')[0].name="timeDate" + len;
        $html.find('[name=timeComment]')[0].name="timeComment" + len;
        return $html.html();    
	}
	</script>  

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
    <div id="test" class="signup-content" style="padding: 0px;">
		<ul class="side-by-side">
            <li><a class="active"  href="./account.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp; My Account</a></li>
            <li><a href="./newexpense.php"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; New Expense</a></li>
            <li><a href="./receipt.php"><i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp; Upload Receipt</a></li>
			<li><a href="./report.php"><i class="fa fa-file-text" aria-hidden="true"></i>&nbsp; Run Report</a></li>
		</ul>
        <div class="benefits page-body" style="padding: 30px;">
			<h2>Fill Out a New General Expense</h2>
                <form action="./includes/submit.inc.php" class="gtm_expense_form" id="expenseform" method="post" enctype="multipart/form-data">
					<div id="container"></div>		
					<input class="btn btn-alt full-width" href="./account.php" type="submit" id="multi" name="multi" value="Submit Form" />
					<br><br>

					<input class="btn btn-alt full-width" href="#" type="button" id="addGeneral" name="general" value="Add a General form" />			 
					<input class="btn btn-alt full-width" href="#" type="button" id="addAir" name="air" value="Add an Air Travel form" />	
                    <input class="btn btn-alt full-width" href="#" type="button" id="addTime" name="time" value="Add a Time form" />	
                                
            <div class="cloneGeneral" style="display: none;">
                <center><i class="fa fa-money fa-5x" aria-hidden="true"></i></center>
                <br>
                Merchant Name: <input type="text" class="required" required value="" name="merchant" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
                Date: <input type="date" class="required" required value="" name="generalDate" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
                Total:<input type="decimal" class="required" required value="" name="generalTotal" placeholder="$0.00" min="0.00" max="9999999.99" step="2" style="margin-bottom:5px"><sup class="required" title="Required"></sup>
                Additional Comments: <textarea name="generalComment" rows="5" style="margin-bottom: 5px"></textarea><sup class="required" title="Required"></sup>
                Upload Receipt: <input type="file" accept="image/*" name="generalExpense_Receipt" id="fileToUpload" style="margin-bottom: 5px"><br><br>
			</div>	
            <div class="cloneAir" style="display: none;">            
                <center><i class="fa fa-plane fa-5x" aria-hidden="true"></i></center>
                <br>
                Distance(in miles): <input type="text" class="required" name="distance" id="distance" autocomplete="false" value="" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
                Airliner Company: <input type="text" class="required" name="airliner" id="airliner" autocomplete="false" value="" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
                Starting Location: <input type="text" class="required" name="starting_loc" id="starting_loc" autocomplete="false" value="" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
                Ending Location: <input type="text" class="required" name="ending_loc" id="ending_loc" autocomplete="false" value="" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
                Total: <input type="text" class="required" name="airTotal" id="total" value="" placeholder="$0.00" style="margin-bottom: 5px; background-color: #f3f5f6;"><sup class="required" title="Required"></sup>
                <script>
                //User can only enter numbers and decimal
                  $(document).ready(function () {
                    //called when key is pressed in textbox
                    $("#distance").keypress(function (e) {
                       //if the letter is not digit then display error and don't type anything
                       if (e.which != 46 && e.which > 31 && (e.which < 48 || e.which > 57)) {
                          //display error message
                          $("#errmsg").html("Digits Only").show().fadeOut("slow");
                                 return false;
                      }
                     });
                  });
                </script>
                Date: <input type="date" class="required" name="airDate" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
                Additional Comments: <textarea name="airComment" rows="5" style="margin-bottom: 5px"></textarea><sup class="required" title="Required"></sup>
                Upload Receipt: <input type="file" name="airExpense_Receipt" style="margin-bottom: 5px"><br><br>      
            </div>
            <div class="cloneTime" style="display: none;">
                <center><i class="fa fa-clock-o fa-5x" aria-hidden="true"></i></center>
                <br>
                Hours: <input type="text" class="required" name="hours" id="hours" value="" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
                Rate: <input type="text"  class="required" name="rate"  id="rate"  value="" onclick= "calc()" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
                Total: <input type="text" class="required" name="timeTotal" id="total" value="" placeholder="$0.00" disabled="disabled" style="margin-bottom: 5px; background-color: #f3f5f6;"><sup class="required" title="Required"></sup>
                /<!--Calculate Total Script-->
                <script>
                function calc(){
                    $("#hours,#rate").keyup(function () {
                    $('#total').val($('#hours').val() * $('#rate').val());
                    });
                }
                </script>
                Date: <input type="date" class="required" name="timeDate" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
                Additional Comments: <textarea name="timeComment" rows="5" style="margin-bottom: 5px"></textarea><sup class="required" title="Required"></sup>        
            </div>        
				</form>
                <br><br>
        </div>
			
        <div class="signup page-sidebar">
                <h3>This form can be used to fill out a general expense. Items may include food, logding, merchandise, and entertainment.</h3>
                <h3>Please Note: Comments and receipt upload are not required for submission.</h3>
        </div>
    </div>
        <div id="footer"></div>
    <script src="//d2fjue5z6foteq.cloudfront.net/assets/315cc4a6724c52ae0b7b8f0104132a7094855698/main.js" type="text/javascript"></script>
  </body>
</html>
