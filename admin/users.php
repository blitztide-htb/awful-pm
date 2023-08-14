<?php
include('../config.php');
include('./admin-nav.php');
session_start();
if(!isset($_SESSION['username'])){
	header('Location: /login.php');
	exit();
}
$response['title'] = 'Users · ADMIN';
$response['header'] = 'ADMIN Interface';
$response['user'] = $_SESSION['username'];
$response['headers'] = array('#','name');
$response['rows'] = array(array('1','2'),array('3','4'));
$response['nav'] = array(array(
    'link' => 'test.php',
    'text' => 'TEST',
));
include '../templates/admin-table.php';
?>