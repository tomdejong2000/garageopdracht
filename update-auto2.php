<!doctype html>
<html>
<head>
    <title>update-auto2.php</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>
<body>
<h1>update auto 2</h1>
<p>
    Dit formulier wordt gebruikt om autogegevens te wijzigen in de tabel van de database garage.
</p>
<?php
// kenteken uit de formulier halen------------------------------
$autokenteken = $_POST["autokentekenvak"];
// kenteken uit de tabel halen----------------------------
require_once "connect.php";

$autos = $conn->prepare("SELECT * FROM auto WHERE autokenteken = :autokenteken");
$autos->execute(["autokenteken" =>$autokenteken]);

// autogegevens in een nieuwe formulier laten zien---------------------
echo "<form action='update-auto3.php' method='post'>";
foreach($autos as $auto)
{



    echo "klantid: <input type='text' ";
    echo " name = 'klanditvak' ";
    echo " value = '" .$auto["klantid"]. "' ";
    echo "> <br />";

    echo "autokenteken: <input type='text' ";
    echo " name = 'autokentekenvak' ";
    echo " value = '" .$auto["autokenteken"]. "' ";
    echo "> <br />";

    echo "automerk: <input type='text' ";
    echo " name = 'automerkvak' ";
    echo " value = '" .$auto["automerk"]. "' ";
    echo "> <br />";


    echo "autotype: <input type='text' ";
    echo " name = 'autotypevak' ";
    echo " value = '" .$auto["autotype"]. "' ";
    echo "> <br />";


    echo "autokmstand: <input type='text' ";
    echo " name = 'autokmstandvak' ";
    echo " value = '" .$auto["autokmstand"]. "' ";
    echo "> <br />";



}

echo "<input type='submit'>";
echo "</form>";

?>


</body>
</html>