<?php
date_default_timezone_set("UTC");
require "autoload.php";

use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseACL;
use Parse\ParsePush;
use Parse\ParseUser;
use Parse\ParseInstallation;
use Parse\ParseException;
use Parse\ParseAnalytics;
use Parse\ParseFile;
use Parse\ParseCloud;
use Parse\ParseClient;

$app_id = "UfhHlFN8D7VKIqtmEEKZmwjrOjesnL3ng4seZmzA";
$rest_key = "arZRU6XnGAtrecMQriDvpt27UDrzkcpsFDfIdFno";
$master_key = "HDbRL4H8YjOCg0D2tNHBbmiIvP8viGWf3onHTx0u";

session_start();

ParseClient::initialize($app_id, $rest_key, $master_key);

if (isset($_POST["submitButton"])) {
    //$email = $_POST['email'];
    $usrName = $_POST['email'];
    $pwd = $_POST['pwd'];
    try {
        $user = ParseUser::logIn($usrName, $pwd);
//        $currentUser = ParseUser::getCurrentUser();
//        $userName = $currentUser->get("username");
//        echo $userName;
        $url = "index.php";
        echo "<script language='javascript' 
type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>";
        // Do stuff after successful login.
    } catch (ParseException $error) {
        // The login failed. Check error to see why.
    }
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>Signin</title>
        <link href="css/login.css" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="App Sign in Form,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    </script>
    <!--webfonts-->
    <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
</head>
<body>

    <h1>Monash Survival Guide</h1>
    <div class="login"> 
        <h2>Access your Account</h2>
    </div>
    <div class="app-cam">
        <form method="post">
            <input type="text" class="text" name="email" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {
                        this.value = 'E-mail address';
                    }" >
            <input type="password" value="Password" name="pwd" onfocus="this.value = '';" onblur="if (this.value == '') {
                        this.value = 'Password';
                    }">
            <div class="submit"><input name="submitButton" type="submit" onclick="myFunction()" value="Sign in" ></div>
            <div class="clear"></div>
            <div class="buttons">
                <ul>
                    <li><a href="#" class="hvr-sweep-to-right">Sign in with Facebook</a></li>
                    <li><a href="#" class="hvr-sweep-to-left">Sign in with Twitter</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
            <div class="new">
                <p><a href="#">Forgot Password ?</a></p>
                <p class="sign">New here ?<a href="signup.php"> Sign Up</a></p>
                <div class="clear"></div>
            </div>
        </form>
    </div>
    <!--start-copyright-->
    <div class="copy-right">
        <p>Copyright &copy; 2015.Company name All rights reserved.<a href="http://www.baidu.com/" target="_blank">Dora Chen</a></p>
    </div>
    <!--//end-copyright-->
</body>
</html>