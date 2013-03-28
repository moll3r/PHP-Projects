<?php
/*
This is a PHP script that I run as a cron job on my linux box at home to update the IPv4 address to my IPv6 tunnel that I have with Hurricaine Electric. Nothing too fancy here.
*/
$username = "USERNAME";
$password = "PASSWORD";
$tunnelid = "1000000";



$context = stream_context_create(array(
    'http' => array(
        'header'  => "Authorization: Basic " . base64_encode("$username:$password")
    )
));

file_get_contents("https://ipv4.tunnelbroker.net/nic/update?hostname=".$tunnelid, false, $context);
?>
