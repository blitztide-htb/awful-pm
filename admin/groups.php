<?php
include('../config.php');
session_start();
if(!isset($_SESSION['username'])){
	header('Location: /login.php');
	exit();
}
$response['title'] = 'Groups · ADMIN';
$response['header'] = 'ADMIN Interface';
include '../templates/admin-table.php';
?>