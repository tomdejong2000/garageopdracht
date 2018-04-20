<!doctype html>
<html>
<head>
    <title>update-klant2.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>
<h1>update klant 2</h1>
<p>
    Dit formulier wordt gebruikt om klantgegevens te wijzigen in de tabel van de database garage.
</p>
<?php
// klantid uit de formulier halen------------------------------
$klantid = $_POST["klantidvak"];
// klantgegevens uit de tabel halen----------------------------
require_once "connect.php";

$klanten = $conn->prepare("SELECT * FROM klant WHERE klantid = :klantid");
$klanten->execute(["klantid" =>$klantid]);

// klantgegevens in een nieuwe formulier laten zien---------------------
echo "<form action='update-klant3.php' method='post'>";
foreach($klanten as $klant)
{
    //klantid mag niet gewijzigd worden
    echo " klantid:" . $klant["klantid"];
    echo " <input type='hidden' name='klantidvak' ";
    echo " value=' " . $klant["klantid"] . " '> <br /> ";


    echo "klantnaam: <input type='text' ";
    echo " name = 'klantnaamvak' ";
    echo " value = '" .$klant["klantnaam"]. "' ";
    echo "> <br />";

    echo "klantadres: <input type='text' ";
    echo " name = 'klantadresvak' ";
    echo " value = '" .$klant["klantadres"]. "' ";
    echo "> <br />";


    echo "klantpostcode: <input type='text' ";
    echo " name = 'klantpostcodevak' ";
    echo " value = '" .$klant["klantpostcode"]. "' ";
    echo "> <br />";


    echo "klantplaats: <input type='text' ";
    echo " name = 'klantplaatsvak' ";
    echo " value = '" .$klant["klantplaats"]. "' ";
    echo "> <br />";



}

echo "<input type='submit'>";
echo "</form>";

?>


</body>
</html>