<?php
include('config.php');
session_start();
if(!isset($_SESSION['username'])){
	header('Location: /login.php');
	exit();
}

if(!isset($_GET['id']))
{
    die('Please provide id parameter');
}
$query = sprintf("SELECT config FROM vpns WHERE id='%s'",$_GET['id']);
$qresult = $mysqli->query($query);
$results = mysqli_fetch_row($qresult);
if(!$results[0]){
  die("NO VPN FILE FOUND");
}
header("Content-Type: text/plain");
header("Content-Type: application/download");
header('Content-Disposition: attachment; filename="connection.ovpn"');
print($results[0]);
?>
