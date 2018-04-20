<!doctype html>
<html>
<head>
    <title>delete-klant2.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>
<h1>delete klant2</h1>
<p>
    op klantid gegevens zoeken uit de tabel klanten van de database garage zodat ze verwijderd kunnen worden.
</p>
<?php
$klantid = $_POST["klantidvak"];

require_once "connect.php";

$klanten = $conn->prepare("SELECT * FROM klant WHERE klantid = :klantid");

echo "<table>";
foreach($klanten as $klant)
{
    echo "<tr>";
    echo "<td>" . $klant["klantid"] . "</td>";
    echo "<td>" . $klant["klantnaam"] . "</td>";
    echo "<td>" . $klant["klantadres"] . "</td>";
    echo "<td>" . $klant["klantpostcode"] . "</td>";
    echo "<td>" . $klant["klantplaats"] . "</td>";
}
echo "</table><br />";

echo "<form action='delete-klant3.php' method='post'>";

echo "<input type='hidden' name='klantidvak' value=$klantid>";
echo "<input type='hidden' name='verwijdervak' value='0'>";
echo "<input type='checkbox' name='verwijdervak' value='1'>";
echo "verwijder deze klant. <br />";
echo "<input type='submit'>";
echo "</form>";

?>


</body>
</html>
