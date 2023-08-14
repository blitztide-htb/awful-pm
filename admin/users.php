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
        <?php readfile("../snippets/header.inc");?>
        <title> Welcome · TTX</title>
    </head>
    <body class="d-flex flex-column h-100">
        <?php readfile("../snippets/admin-nav.inc");?>
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
        <?php readfile("../snippets/copyright.inc");?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>