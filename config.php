<?php
$host = 'db.adf.gov.au';
$db   = 'vpn_data';
$user = 'dbadmin';
$pass = 'P@ssw0rd';
$charset = 'utf8mb4';

$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>