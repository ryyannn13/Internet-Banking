<?php
    $dbuser = "root";
    $dbpass = "root";
    $host = "db"; // <-- This matches the MySQL service name in docker-compose.yml
    $db = "internetbanking";
    $mysqli = new mysqli($host, $dbuser, $dbpass, $db);

    // Optional: Check for connection error
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
?>
