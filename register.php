<?php
include('config.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Check all values exist
    if(!isset($_POST['username']) || !isset($_POST['password']))
    {
        die('Please enter all required information');
    }
    // Insert into SQL
    $query = sprintf("INSERT INTO vpn_users(username,password) VALUES ('%s','%s')",$_POST['username'],$_POST['password']);
    $mysqli->query($query);

    // Add user to default group
    $query = sprintf("INSERT INTO memberships(userid,groupid) VALUES ((SELECT id from vpn_users WHERE username = '%s'),1)",$_POST['username']);

    // Redirect to login page
    header('Location: /index.php');
    exit();
  }
  ?>
?>
<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
  <?php readfile("snippets/header.inc");?>
    <title>Register · <?php print($company);?></title>
  <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="container form-signin">
    <form action="/register.php" method="POST">
  <img class="mb-4" src="./img/icons/lock.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">New User details</h1>
  <label for="inputEmail" class="sr-only">Username</label>
  <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
</form>
<div class="my-2">
</div>
</div>
</body>
<?php readfile("snippets/footer.inc"); ?>
</html>
