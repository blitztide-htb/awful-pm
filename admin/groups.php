<?php
include('../config.php');
session_start();
if(!isset($_SESSION['username'])){
	header('Location: /login.php');
	exit();
}
$response['title'] = 'Groups · ADMIN';
include '../templates/header.template';
?>
    <body class="d-flex flex-column h-100">
        <?php readfile("../snippets/admin-nav.inc");?>
        <main class="flex-fill w-75 mx-auto">
            <div class="container mt-5">
                <div class="card p-5">
                    <h1> Groups</h1>
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Users</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Admin</td>
                                <td>admin</td>
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