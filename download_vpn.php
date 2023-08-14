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
  print($results[1]);
?>