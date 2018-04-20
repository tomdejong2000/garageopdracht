<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 11-4-2018
 * Time: 11:08
 */
?>

<!doctype html>
<html>
<head>
    <title>create-auto2.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>
<h1>garage create auto 2</h1>
<p>
    Een auto toevoegen aan de tabel klant in de database garage.
</p>
<?php
// autogegevens uit de formulier halen -----------------------------
$klantid = $_POST["klantidvak"]
$autokenteken = $_POST["autokentekenvak"];
$automerk = $_POST["automerkvak"];
$autotype = $_POST["autotypevak"];
$autokmstand = $_POST["autokmstandvak"];


// autogegevens invoeren in de tabel ---------------
require_once "connect.php";

$sql = $conn->prepare("INSERT INTO auto VALUES
(
:autokenteken, :automerk, :autotype, :autokmstand, :klantid
)
");

// manier 2 --------
$sql->execute([
    "klantid" => $klantid,
    "autokenteken" => $autokenteken,
    "automerk" => $automerk,
    "autotype" => $autotype,
    "autokmstand" => $autokmstand,

]);

echo "De klant is toegevoegd <br />";
echo "<a href="index.php"> terug naar het menu </a>";





?>


</body>
</html>
