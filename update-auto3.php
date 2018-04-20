<!doctype html>
<html>
<head>
    <title>update-auto3.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>
<h1>update auto 3</h1>
<p>
    Dit formulier wordt gebruikt om autogegevens te wijzigen in de tabel van de database garage.
</p>
<?php
// klantgegevens uit het formulier halen----
$klantid = $_POST["klantidvak"];
$autokenteken = $_POST["autokentekenvak"];
$automerk= $_POST["automerkvak"];
$autotype = $_POST["autotypevak"];
$autokmstand = $_POST["autokmstandvak"];


//update autogegevens----------------
require_once "connect.php";
$sql = $conn->prepare(
    "UPDATE auto SET autokenteken = :autokenteken, automerk = :automerk, autotype = :autotype, klantid = :klantid WHERE autokenteken = :autokenteken"

);

$sql->execute([
        "klantid" => $klantid,
        "autokenteken" => $autokenteken,
        "automerk" => $automerk,
        "autotype" => $autotype,
        "autokmstand" => $autokmstand,
]);

echo "De auto is gewijzigd. <br />";
echo "<a href='index.php'> terug naar het menu";

?>


</body>
</html>