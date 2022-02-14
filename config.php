<?php
/*Verbindung herstellen zur Datenbank*/
$server = "[hostname]";
$user = "root";
$password = "";
$db = "[dbName]";

try{
    $con = new PDO('mysql:host=' .$server. '; dbname='.$db.'; charset=utf8', $user, $password);
    $con ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
    switch ($e->getCode()){
        case 1045:
            echo "Kein Zugriff für den Benutzer - ".$e->getMessage();
            break;
        default:
            break;
    }
    echo $e->getCode().' '.$e->getMessage();
}