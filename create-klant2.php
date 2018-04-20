<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 11-4-2018
 * Time: 11:08
 */
?>

<!doctype html>
<html>
<head>
    <title>create-klant2.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>
<h1>garage create klant 2</h1>
<p>
    Een klant toevoegen aan de tabel klant in de database garage.
</p>
<?php
// klantgegevens uit de formulier halen -----------------------------
$klantid = NULL; // komt niet uit het formulier (autoincr)
$klantnaam = $_POST["klantnaamvak"];
$klantadres = $_POST["klantadresvak"];
$klantpostcode = $_POST["klantpostcodevak"];
$klantplaats = $_POST["plantplaatsvak"];


// klantgegevens invoeren in de tabel ---------------
require_once "connect.php";

$sql = $conn->prepare("INSERT INTO klant VALUES
(
:klantid, :klantnaam, :klantadres, :klantpostcode, :klantplaats
)
");

// manier 2 --------
$sql->execute([
        "klantid" => $klantid,
        "klantnaam" => $klantnaam,
        "klantadres" => $klantadres,
        "klantplaats" => $klantplaats,

]);

echo "De klant is toegevoegd <br />";
echo "<a href="index.php"> terug naar het menu </a>";





?>


</body>
</html>
