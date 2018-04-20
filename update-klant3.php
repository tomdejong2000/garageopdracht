<!doctype html>
<html>
<head>
    <title>update-klant3.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>
<h1>update klant 3</h1>
<p>
    Dit formulier wordt gebruikt om klantgegevens te wijzigen in de tabel van de database garage.
</p>
<?php
// klantgegevens uit het formulier halen----
$klantid = $_POST["klantidvak"];
$klantnaam = $_POST["klantnaanvak"];
$klantadres = $_POST["klantadresvak"];
$klantpostcode = $_POST["klantpostcodevak"];
$klantplaats = $_POST["klantplaatsvak"];


//update klantgegevens----------------
require_once "connect.php";
$sql = $conn->prepare(
    "UPDATE klant SET klantnaam = :klantnaam, klantadres = :klantadres, klantpostcode = :klantpostcode, klantplaats = :klantpostcode WHERE klantid = :klantid"

);

$sql->execute([
        "klantid" => $klantid,
        "klantnaam" => $klantnaam,
        "klantadres" => $klantadres,
        "klantpostcode" => $klantpostcode,
        "klantplaats" => $klantplaats,
]);

echo "De klant is gewijzigd. <br />";
echo "<a href='index.php'> terug naar het menu";

?>


</body>
</html>