<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 11-4-2018
 * Time: 10:22
 */

?>

<!doctype html>
<html>
<head>
    <title>create-klant1.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>
<h1>garage create klant 1</h1>
<p>
    Dit formulier wordt gebruikt om klantgegevens in te voeren.
</p>
<form action="create-klant2.php" method="post">
    klantnaam: <input type="text" name="klantnaamvak"> <br/>
    klantadres: <input type="text" name="klantadresvak"> <br/>
    klantpostcode: <input type="text" name="klantpostcodevak"> <br/>
    klantplaats: <input type="text" name="klantplaatsvak"> <br/>
<input type="submit">
</form>
</body>
</html>
