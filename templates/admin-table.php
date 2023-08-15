<?php
if(!array_key_exists('table-title',$response)){
    $response['table-title'] = 'DEFAULT TEXT';
}
$response['header-theme'] = 'danger';
include '../templates/header.php';?>
<style>
nav a {
    color: white;
}
</style>
<main class="flex-fill w-75 mx-auto">
    <div class="container mt-5">
        <div class="card p-5">
            <h1> <?php echo $response['table-title'];?></h1>
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead>
                        <?php foreach($response['headers'] as $header) { echo '<th>' . $header . '</th>';} ?>
                    </thead>
                    <?php foreach($response['rows'] as $row): ?>
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
</main>
<?php
include '../templates/footer.php';
?>