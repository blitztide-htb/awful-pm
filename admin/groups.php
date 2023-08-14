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
$response['headers'] = Array;
$response['rows'] = Array;
include '../templates/admin-table.php';
?>