<!doctype html>
<html>
<head>
    <title>delete-auto2.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>
<h1>delete auto2</h1>
<p>
    op autokenteken gegevens zoeken uit de tabel auto van de database garage zodat ze verwijderd kunnen worden.
</p>
<?php
$autokenteken = $_POST["autokentekenvak"];

require_once "connect.php";

$autos = $conn->prepare("SELECT * FROM auto WHERE autokenteken = :autokenteken");

echo "<table>";
foreach($autos as $auto)
{
    echo "<tr>";
    echo "<td>" . $auto["klantid"] . "</td>";
    echo "<td>" . $auto["autokenteken"] . "</td>";
    echo "<td>" . $auto["automerk"] . "</td>";
    echo "<td>" . $auto["autotype"] . "</td>";
    echo "<td>" . $auto["autokmstand"] . "</td>";
}
echo "</table><br />";

echo "<form action='delete-auto3.php' method='post'>";

echo "<input type='hidden' name='autoidvak' value=$autokenteken>";
echo "<input type='hidden' name='verwijdervak' value='0'>";
echo "<input type='checkbox' name='verwijdervak' value='1'>";
echo "verwijder deze auto. <br />";
echo "<input type='submit'>";
echo "</form>";

?>


</body>
</html>
