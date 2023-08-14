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
        <title> VPNS · ADMIN</title>
    </head>
    <body class="d-flex flex-column h-100">
        <?php readfile("../snippets/admin-nav.inc");?>
        <main class="flex-fill w-75 mx-auto">
            <div class="container mt-5">
                <div class="card p-5">
                    <h1> VPNs</h1>
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Corporate</td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <?php readfile("../snippets/copyright.inc");?>
    </body>
    <?php readfile("../snippets/footer.inc");?>
</html>