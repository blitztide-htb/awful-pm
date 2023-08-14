<?php defined('awful-pm') or die();
$json = <<<END
[
    {
        "url":"users.php",
        "text":"Users"
    },
    {
        "url":"groups.php",
        "text":"Groups"
    },
    {
        "url":"vpns.php",
        "text":"VPNs"
    },
    {
        "url":"credentials.php",
        "text":"Credentials"
    }
]
END;
$response['nav'] = json_decode($json);
if(!$response['nav']){
    die('Your nav json sucks');
}
?>
