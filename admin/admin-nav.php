<?php defined('awful-pm') or die();
$json = <<<END
[
    {
        "link":"users.php",
        "text":"Users"
    },
    {
        "link":"groups.php",
        "text":"Groups"
    },
    {
        "link":"vpns.php",
        "text":"VPNs"
    },
    {
        "link":"credentials.php",
        "text":"Credentials"
    }
]
END;
$response['nav'] = json_decode($json);
if(!$response['nav']){
    die('Your nav json sucks');
}
?>
