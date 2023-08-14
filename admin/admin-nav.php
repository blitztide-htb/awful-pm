<?php defined('awful-pm') or die();
$json = <<<JSON
[
    {
        'url':'test.php',
        'text':'poop'
    }
]
JSON;
$response['nav'] = json_decode($json);
if(!$response['nav']){
    die('Your nav json sucks');:
}
?>
