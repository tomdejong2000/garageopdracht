<!doctype html>
<html>
<head>
    <title>read-klant.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>
<h1>garage read klant</h1>
<p>
   Dit zijn alle gegevens uit de tabel van de databse garage
</p>
<?php
    require_once "connect.php";

    $sql = $conn->prepare("SELECT * FROM klant");

    $sql->execute();

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
