<?php
    $dbuser = "root";
    $dbpass = "root"; // use the password you set in docker-compose
    $host = "db";     // match the MySQL service name in docker-compose
    $db = "internetbanking";
    $mysqli = new mysqli($host, $dbuser, $dbpass, $db);
?>
