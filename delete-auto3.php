<!doctype html>
<html>
<head>
    <title>delete-auto3.php
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>
<h1>delete auto3.php</h1>
<p>
    Op autokenteken gegevens zoeken uit de tabel auto en van de database garage zodat ze verwijderd kunnen worden
</p>
<?php
$autokenteken = $_POST["autokentekenvak"];
$verwijderen = $_POST["verwijderd"];

if($verwijderen)
{
    require_once "connect.php";
    $sql = $conn->prepare("DELETE FROM auto WHERE autokenteken = :autokenteken");

    $sql->execute(["autokenteken" => $autokenteken]);

    echo "de gegevens zijn verwijderd. <br />";
}
else{
    echo "De gegevens zijn niet verwijderd. <br />";
}

echo "<a href='index.php'>  Terug naar het menu. </a>";



?>


</body>
</html>
