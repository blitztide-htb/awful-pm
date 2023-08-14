<?php defined('awful-pm') or die();
$response['nav'] = json_decode("[
    {
        'url':'test.php',
        'text':'poop'
    }
    ]");
if(!$response['nav']){
    die('Your nav json sucks');:
}
?>
