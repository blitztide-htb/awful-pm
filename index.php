<?php
session_start();
if(!isset($_SESSION['username'])){
	header('Location: /login.php');
	exit();
}
?>
<!DOCTYPE html>
<html class="h-100">
    <head>
        <?php readfile("snippets/header.inc");?>
        <title> Welcome · TTX</title>
    </head>
    <body class="d-flex flex-column h-100">
        <nav class="navbar bg-primary sticky-top text-white">
            <div class="m-2">
                <i class="bi bi-key"></i>
            </div>
            <div>
                <h2>Company Connection and Credential Manager</h2>
            </div>
            <div>
            <a class="m-2 text-white" href="./logout.php">
<?php print $_SESSION['username'];?><i class="bi bi-person"></i>
            </a>
        </nav>
        <main class="flex-shrink-0 w-75 mx-auto">
            <div class="jumbotron mt-3">
                <div class="p-5">
                    <h1> Welcome</h1>
                    <p class="lead">
                        Welcome to the company this is our credential manager and VPN connection manager, it will allow you to download your VPN connection pack and start working.
                    </p>
                </div>
            </div>
            <div class="container mt-5">
                <div class="card p-5">
                    <h1> Credentials</h1>
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <tr>
                                <th>#</th>
                                <th>System</th>
                                <th>Username</th>
                                <th>Password</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>VPN</td>
                                <td>admin</td>
                                <td>password</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="card p-5">
                    <h1> Connections</h1>
                    Use these OVPN files to connect to all the systems where you are authorized.
                    <ul class="list-group mt-2">
                        <li class="list-group-item d-flex justify-content-between align-items-center">Corporate VPN <a href="./download_vpn.php?uid=<?php print($_SESSION['uid']);?>" class="btn btn-success mr-0"><i class="bi bi-download"></i>
                        </a></li>
                    </ul>
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
    <?php readfile("snippets/footer.inc"); ?>
</html>
