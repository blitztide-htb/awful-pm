<?php
session_start();
include('config.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  // Validate user/password
  $query = sprintf("SELECT id FROM vpn_users WHERE username='%s' AND password = '%s'",$_POST['username'],$_POST['password']);
  $result = $mysqli->query($query);

  // Not found
  if(mysqli_num_rows($result) != 1) {
    http_response_code(401);
    die("Unauthorized");
  }

  // Get UID
  $uid = mysqli_fetch_row($result)[0];

  // Ensure redirection to index.php
	header('Location: /index.php');
  $_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = $_POST['password'];
  $_SESSION['uid'] = $uid;
	exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
  <?php readfile("snippets/header.inc");?>
    <title>Signin · TTX</title>
  <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="container form-signin">
    <form action="/login.php" method="POST">
  <img class="mb-4" src="./img/icons/lock.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Username</label>
  <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>
<div class="my-2">
<a href="register.php"><button class="btn btn-lg btn-primary btn-block" type="submit">Register</button></a>
</div>
</div>
</body>
<?php readfile("snippets/footer.inc"); ?>
</html>

