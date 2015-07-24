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
        ParseClient::initialize($app_id, $rest_key, $master_key);
        
        ?>