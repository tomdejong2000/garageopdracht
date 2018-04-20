<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 10-4-2018
 * Time: 14:14
 */


$servername = "localhost";
$dbname = "garage";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username , $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "connected";
}
catch(PDOException $error){
    echo "connectie mislukt ..->" . $error->getMessage();
}

