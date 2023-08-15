<?php
include('../config.php');
include('./admin-nav.php');
session_start();
if(!isset($_SESSION['username'])){
	header('Location: /login.php');
	exit();
}

// Get all groups
$query = sprintf("SELECT * FROM groups");
$result = $mysqli->query($query);
if(!$result) {
    die(mysqli_error($mysqli));
}

$response['headers'] = array();
$fields = mysqli_fetch_fields($result);
foreach($fields as $field) {
    $response['headers'][] = $field->name;
}

$response['rows'] = mysqli_fetch_all($result, MYSQLI_NUM);

$response['title'] = 'Groups · ADMIN';
$response['header'] = 'ADMIN Interface';
$response['user'] = $_SESSION['username'];
$response['table-title'] = 'Groups';
include '../templates/admin-table.php';
?>