<?php 
include '../templates/header.php';?>
<main class="flex-fill w-75 mx-auto">
    <div class="container mt-5">
        <div class="card p-5">
            <h1> Groups</h1>
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead>
                        <?php foreach($response['headers'] as $header) { echo '<th>' . $header . '</th>';} ?>
                    </thead>
                    <?php foreach($response['rows'] as $row): ?>
                    <?php foreach($row as $item): ?>
                    <tr>
                        <td><?=$item?></td>
                    </tr>
                    <?php endforeach;?>
                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </div>
</main>
<?php
include '../templates/footer.php';
?>