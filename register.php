<?php
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
        ParseClient::initialize($app_id, $rest_key, $master_key);
        date_default_timezone_set("UTC");
        
        $email=$_POST['email'];
        $usrName = $_POST['usrName'];
        $pwd = $_POST['pwd'];
        
        $user = new ParseUser();
        $user->set("username", $email);
        $user->set("password", $pwd);
        $user->set("email", $email);
        $user->set("name", $usrName);
        //$user->set("name", $usrName);

        // other fields can be set just like with ParseObject
        $user->set("phone", "415-392-0202");

        try {
          $user->signUp();
          // Hooray! Let them use the app now.
        } catch (ParseException $ex) {
          // Show the error message somewhere and let the user try again.
          echo "Error: " . $ex->getCode() . " " . $ex->getMessage();
        }
        header("location:login.php");
        ?>