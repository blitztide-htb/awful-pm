<?php
include('../config.php');
session_start();
if(!isset($_SESSION['username'])){
	header('Location: /login.php');
	exit();
}
?>
<!DOCTYPE html>
<html class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Welcome · TTX</title>
        <link rel="stylesheet" href="./css/admin2.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    </head>
    <body class="d-flex flex-column h-100">
        <nav class="navbar bg-dark sticky-top text-white">
            <div class="container">
            <div class="m-2">
                <i class="bi bi-key"></i>
            </div>
            <div>
                <h2>Admin Interface</h2>
            </div>
            <div>
            <a class="m-2 text-white" href="./logout.php">
                Username <i class="bi bi-person"></i>
            </a>
        </div>
        <div class="container">
            <ul class="nav text-white">
                <li class="nav-item"> <a class='nav-link' href='./users.php'>Users</a></li>
                <li class="nav-item"> <a class='nav-link' href='./groups.php'>Groups</a></li>
                <li class="nav-item"> <a class='nav-link' href='./vpns.php'>VPNs</a></li>
                <li class="nav-item"> <a class='nav-link' href='./credentials.php'>Credentials</a></li>
            </ul>
            </div>
        </nav>
        <main class="flex-fill w-75 mx-auto">
            <div class="container mt-5">
                <div class="card p-5">
                    <h1> Users</h1>
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Password</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>admin</td>
                                <td>password</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer mt-3 py-3 bg-light">
            <div class="container">
                <span class="text-muted">
                    &copy; 2023 HTB
                </span>
            </div>
        </footer>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>