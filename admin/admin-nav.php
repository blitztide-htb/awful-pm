<?php defined('awful-pm') or die();
$json = <<<END
[
    {
        'url':'test.php',
        'text':'poop'
    }
]
END;
$response['nav'] = json_decode($json);
if(!$response['nav']){
    die('Your nav json sucks');:
}
?>
