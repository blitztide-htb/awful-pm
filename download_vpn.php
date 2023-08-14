<?php
include('config.php');
session_start();
if(!isset($_SESSION['username'])){
	header('Location: /login.php');
	exit();
}
  $query = sprintf("SELECT ovpn_file FROM vpn_users WHERE id='%s'",$_GET['uid']);
  $result = $mysqli->query($query);
  print($result);
?>