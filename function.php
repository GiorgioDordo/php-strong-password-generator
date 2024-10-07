<?php

function getStrongRandomPassword($chars)
{
    $characters = '!"#$%&\'()*+,-./:;=?@[\]^_{|}~;1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($characters), 0, $chars);
}
// echo getStrongRandomPassword((int)$_GET["length_password"]) . "\n";
