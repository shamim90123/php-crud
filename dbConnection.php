<?php

$host = 'mysql-container'; // Container name or IP address
$user = 'hanif';
$pass = '123456';
$db = 'hanif_test_db';

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

echo "Connected to MySQL successfully!";
