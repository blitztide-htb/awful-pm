<?php
include('config.php');
session_start();
if(!isset($_SESSION['username'])){
	header('Location: /login.php');
	exit();
}
$response['title'] = 'Welcome · TTX';
$response['header'] = 'Company Credential and Connection Manager';
$response['user'] = $_SESSION['username'];
$response['nav'] = array();

// Get all creds
$query = sprintf("SELECT * FROM credentials");
$result = $mysqli->query($query);
if(!$result) {
    die(mysqli_error($mysqli));
}

$credheaders = array();
$fields = mysqli_fetch_fields($result);
foreach($fields as $field) {
    $credheaders[] = $field->name;
}
$creds = mysqli_fetch_all($result, MYSQLI_NUM);

// Get all VPNs
$query = sprintf("SELECT * FROM VPNs");
$result = $mysqli->query($query);
if(!$result) {
    die(mysqli_error($mysqli));
}

$vpnheaders = array();
$fields = mysqli_fetch_fields($result);
foreach($fields as $field) {
    $vpnheaders[] = $field->name;
}
$vpns = mysqli_fetch_all($result, MYSQLI_ASSOC);
print_r($vpns);

include './templates/header.php';
?>
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
                    <thead>
                        <?php foreach($credheaders as $header) { echo '<th>' . $header . '</th>';} ?>
                    </thead>
                    <?php foreach($creds as $row): ?>
                    <tr>
                    <?php foreach($row as $item): ?>
                        <td><?=$item?></td>
                    <?php endforeach;?>
                    </tr>
                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="card p-5">
            <h1> Connections</h1>
            Use these OVPN files to connect to all the systems where you are authorized.
            <ul class="list-group mt-2">
                <?php foreach($vpns as $vpn): ?>
                <?php print_r($vpn);?>
                <li class="list-group-item d-flex justify-content-between align-items-center"><?=$vpn->name?><a href="./download_vpn.php?id=<?=$vpn->id?>" class="btn btn-success mr-0"><i class="bi bi-download"></i>
                </a></li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</main>
<?php
include './templates/footer.php';
?>
