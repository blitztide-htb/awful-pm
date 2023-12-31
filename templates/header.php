<?php
if(!array_key_exists('header-theme',$response)){
    $response['header-theme'] = 'dark';
}
?>
<!DOCTYPE html>
<html class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cerulean/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="/css/style.css">
        <title> <?php echo htmlspecialchars($response['title']);?></title>
    </head>
    <body class="d-flex flex-column h-100">
    <nav class="navbar bg-<?php echo htmlspecialchars($response['header-theme']);?> sticky-top text-white">
        <div class="container">
        <div class="m-2">
            <a href="/admin/">
            <i class="bi bi-gear"></i>
            </a>
        </div>
        <div>
            <h2><?php echo htmlspecialchars($response['header']);?></h2>
        </div>
        <div>
            <a class="m-2 text-white" href="/logout.php">
                <?php echo htmlspecialchars($response['user']);?> <i class="bi bi-person"></i>
            </a>
        </div>
        <div class="container">
            <ul class="nav text-white">
                <?php foreach($response['nav'] as $nav): echo
                <<<END
                <li class="nav-item"> 
                    <a class='nav-link' href='$nav->url'>
                    $nav->text
                    </a>
                </li>
                END;
                endforeach;?>
            </ul>
        </div>
    </nav>