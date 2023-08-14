<?php defined('awful-pm') or die();
$json = <<<END
[
    {
        "link":"test.php",
        "text":"test"
    }
]
END;
$response['nav'] = json_decode($json);
if(!$response['nav']){
    die('Your nav json sucks');
}
?>
