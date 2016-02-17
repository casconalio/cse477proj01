<?php
require __DIR__ . '/lib/steampunked.inc.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Steampunked Game</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
    <img class="title" src="images/title.png" width="620" height="95" alt="Steampunked Title">
</head>
<body>

<form>
    <fieldset class="grid">

    </fieldset>
</form>
<div class="player">
    <p>XXX, It's your turn!</p>
</div>
<div class="radio">
    <img class="pipe" src="images/ninety-es.png" width="40" height="40" alt="ninety-es">
    <input type="radio"> </input>
    <img class="pipe" src="images/ninety-es.png" width="40" height="40" alt="ninety-es">
    <input type="radio"> </input>
    <img class="pipe" src="images/ninety-es.png" width="40" height="40" alt="ninety-es">
    <input type="radio"> </input>
    <img class="pipe" src="images/ninety-es.png" width="40" height="40" alt="ninety-es">
    <input type="radio"> </input>
    <img class="pipe" src="images/ninety-es.png" width="40" height="40" alt="ninety-es">
    <input type="radio"> </input>
</div>
<div class="button">
    <input type="submit" name="rotate" value="Rotate">
    <input type="submit" name="discard" value="Discard">
    <input type="submit" name="openvalue" value="Open Valve">
    <input type="submit" name="giveup" value="Give up">
</div>
</body>
</html>