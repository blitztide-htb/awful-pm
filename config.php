<?php
define('awful-pm',1);
$company = 'TTX';
$host = '127.0.0.1';
$db   = 'awfulpm';
$user = 'dbadmin';
$pass = 'P@ssw0rd';
$charset = 'utf8mb4';

$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

?>