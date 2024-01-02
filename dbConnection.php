<?php

$host = 'mysql-container'; // Container name or IP address
$user = 'sunny';
$pass = '123456';
$db = 'sunny_db';

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

echo "Connected to MySQL successfully!";
