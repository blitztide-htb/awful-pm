<?php
include('../config.php');
session_start();
if(!isset($_SESSION['username'])){
	header('Location: /login.php');
	exit();
}
$response['title'] = 'Groups · ADMIN';
$response['header'] = 'ADMIN Interface';
$response['user'] = $_SESSION['username'];
include '../templates/admin-table.php';
?>