<?php
include('config.php');
session_start();
if(!isset($_SESSION['username'])){
	header('Location: /login.php');
	exit();
}
  $query = sprintf("SELECT ovpn_file FROM vpn_users WHERE id='%s'",$_GET['uid']);
  $qresult = $mysqli->query($query);
  $results = mysqli_fetch_row($qresult);
  header("Content-Type:text/plain");
  header("Content-Type: application/download");
  header('Content-Disposition: attachment; 
         filename="connection.ovpn"');
  print($results[0]);
?>