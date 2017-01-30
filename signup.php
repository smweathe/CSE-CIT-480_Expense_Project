<?php
	include 'header.php';
?>

<?php

	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	//notify user of missing field/s
	if (strpos($url,'error=empty')!==false){
		echo "<br><center><label>Fill all fields to sign up.</label></center><br<br>";
	}elseif (strpos($url,'error=username')!==false){
		echo "<br><center><label>Username is already taken. Please try another one!</label></center><br<br>";
	}elseif (strpos($url,'error=email')!==false){
                echo "<br><center><label>Email is already taken. Please try another one!</label></center><br<br>";
        }
	if (isset($_SESSION['id'])){
		//prevent user from signing up while logged in
		header('Location: index.php');
		echo "<p align='center'>You're already a member</p>";
	}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script>
$(document).ready(function(){
	$("label input").on("click",function(){
		$("#sName").toggle(!this.checked);
  	});
});
</script>
<script>
$(document).ready(function(){
        $("#sName").autocomplete({
                source: 'includes/auto.inc.php',
                minLength: 1,
		change: function (event, ui) {
                	if(!ui.item){
               		 	//http://api.jqueryui.com/autocomplete/#event-change -
                    		// The item selected from the menu, if any. Otherwise the property is null
                   		 //so clear the item for force selection
                    		$("#sName").val("");
                	}
		}

        });
});      
</script>


<html>
<body>
<form action='./includes/signup.inc.php' method='POST'>
	
	<br><center><label>Sign Up Screen</label><br></center><br><br>
	<center><label>Please fill out all forms below to join our site.</label><br></center><br><br>
	<center><input type='text' name='first' placeholder='Firstname'><br><br></center>
	<center><input type='text' name='last' placeholder='Lastname'><br><br></center>
	<center><input type='text' name='uid' placeholder='Username'><br><br></center>
	<center><input type='text' name='email' placeholder='Email'><br><br></center>
	<center><input type='password' name='pwd' placeholder='Password'><br><br></center>	
	<center><label id="sup"><input type="checkbox" name="isSupervisor" id="checkbox">Are you a supervisor?</label><br><br></center>
	<center><input type='text' name='sID' placeholder='Supervisor ID' id='sName' class="auto"><br><br></center>
	<center><button type='submit' name="submit">Sign Up</button><br></center>
</form>
</body>
</html>
