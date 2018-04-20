<!doctype html>
<html>
<head>
    <title>read-auto.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>
<h1>garage read auto</h1>
<p>
   Dit zijn alle gegevens uit de tabel van de database garage
</p>
<?php
    require_once "connect.php";

    $sql = $conn->prepare("SELECT * FROM auto");

    $sql->execute();

    echo "<table>";
    foreach($sql as $rij)
    {
        echo "<tr>";
        echo "<td>" . $rij["klantid"]   . "</td>";
        echo "<td>" . $rij["autokenteken"]   . "</td>";
        echo "<td>" . $rij["autokmstand"]   . "</td>";
        echo "<td>" . $rij["automerk"]   . "</td>";
        echo "<td>" . $rij["autotype"]   . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<a href='index.php'> terug naar het menu </a>";
?>


</body>
</html>
