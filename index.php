<?php

$url = $_SERVER['SERVER_NAME'];

if (substr($url, 0, 3) === 'www') {
    $url = substr($url, 3);
} else {
    $url = "www.$url";
}

header('Location: https://$url', true, 301);
exit();
