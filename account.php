<?php
    include 'header.php';

    if (isset($_SESSION['id'])){
        //prevent user from signing up while logged in
        echo "<p align='center'>Welcome to your account page,</p>";
    }else{
        //enable sign up button if logged out
        echo "Unable to load account information. Try again";
    }
?>
