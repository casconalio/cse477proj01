<?php
require __DIR__ . '/lib/guessing.inc.php';

$controller = new Steampunked\SteampunkedController($steampunked, $_POST);

if($controller->isReset()) {
    unset($_SESSION[STEAMPUNKED_SESSION]);
}

header("location: index.php");

exit;