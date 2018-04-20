<!doctype html>
<html>
<head>
    <title>delete-klant3.php
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>
<h1>delete klant3.php</h1>
<p>
    Op klantid gegevens zoeken uit de tabel klanten van de database garage zodat ze verwijderd kunnen worden
</p>
<?php
$klantid = $_POST["klantidvak"];
$verwijderen = $_POST["verwijderd"];

if($verwijderen)
{
    require_once "connect.php";
    $sql = $conn->prepare("DELETE FROM klant WHERE klantid = :klantid");

    $sql->execute(["klantid" => $klantid]);

    echo "de gegevens zijn verwijderd. <br />";
}
else{
    echo "De gegevens zijn niet verwijderd. <br />";
}

echo "<a href='index.php'>  Terug naar het menu. </a>";



?>


</body>
</html>
