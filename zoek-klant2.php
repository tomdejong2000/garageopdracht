<!doctype html>
<html>
<head>
    <title>zoek-klant2.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>
<h1>garage zoek klant 2</h1>
<p>
    op klantid gegevens zoeken uit de tabel klanted van de database
</p>
<?php
$klantid = $_POST["klantidvak"];

require_once "connect.php";

$sql = $conn->prepare("SELECT * FROM klant WHERE klantid = :klantid");
$sql->execute(["klantid" => $klantid]);

    echo "<table>";
    foreach($sql as $rij)
    {
        echo "<tr>";
        echo "<td>" . $rij["klantid"]   . "</td>";
        echo "<td>" . $rij["klantnaam"]   . "</td>";
        echo "<td>" . $rij["klantadres"]   . "</td>";
        echo "<td>" . $rij["klantpostcode"]   . "</td>";
        echo "<td>" . $rij["klantplaats"]   . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<a href='index.php'> terug naar het menu </a>";

?>


</body>
</html>