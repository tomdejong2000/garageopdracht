<!doctype html>
<html>
<head>
    <title>zoek-auto2.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>
<h1>garage zoek auto 2</h1>
<p>
    op autokenteken gegevens zoeken uit de tabel auto van de database
</p>
<?php
$autokenteken = $_POST["autokentekenvak"];

require_once "connect.php";

$sql = $conn->prepare("SELECT * FROM auto WHERE autokenteken = :autokenteken");
$sql->execute(["autokenteken" => $autokenteken]);

    echo "<table>";
    foreach($sql as $rij)
    {
        echo "<tr>";
        echo "<td>" . $rij["klantid"]   . "</td>";
        echo "<td>" . $rij["autokenteken"]   . "</td>";
        echo "<td>" . $rij["automerk"]   . "</td>";
        echo "<td>" . $rij["autotype"]   . "</td>";
        echo "<td>" . $rij["autokmstand"]   . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<a href='index.php'> terug naar het menu </a>";

?>


</body>
</html>