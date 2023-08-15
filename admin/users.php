<?php
include('../config.php');
include('./admin-nav.php');
session_start();
if(!isset($_SESSION['username'])){
	header('Location: /login.php');
	exit();
}
// Get all users
$query = sprintf("SELECT * FROM users");
if(!$mysqli->query($query)) {
    die(mysqli_error($mysqli));
}

$response['headers'] = array();
$fields = mysqli_fetch_fields($mysqli);
foreach($fields as $field) {
    array_push($response['headers'],$field['name']);
}
$response['rows'] = mysqli_fetch_all($mysqli, MYSQLI_NUM);


// Get UID
$uid = mysqli_fetch_row($result)[0];
$response['title'] = 'Users · ADMIN';
$response['header'] = 'ADMIN Interface';
$response['user'] = $_SESSION['username'];
$response['table-title'] = 'Users';
$response['headers'] = array('#','name');
$response['rows'] = array(array('1','2'),array('3','4'));
include '../templates/admin-table.php';
?>