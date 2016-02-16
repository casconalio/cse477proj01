<?php
require __DIR__ . "/../vendor/autoload.php";

session_start();

define("STEAMPUNKED_SESSION", 'steampunked');

if(!isset($_SESSION[STEAMPUNKED_SESSION])) {
    $_SESSION[STEAMPUNKED_SESSION] = new Steampunked\Steampunked();
}

$steampunked = $_SESSION[STEAMPUNKED_SESSION];