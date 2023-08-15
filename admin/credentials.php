<?php
include('../config.php');
include('./admin-nav.php');
session_start();
if(!isset($_SESSION['username'])){
	header('Location: /login.php');
	exit();
}
$response['title'] = 'Credentials · ADMIN';
$response['header'] = 'ADMIN Interface';
$response['user'] = $_SESSION['username'];
$response['table-title'] = 'Credentials';
$response['headers'] = array('#','name');
$response['rows'] = array(array('1','2'),array('3','4'));
include '../templates/admin-table.php';
?>