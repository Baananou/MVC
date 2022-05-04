<?php
require("../config/config.php");

function connect_db()
{
    $dsn="mysql:dbname=".DATA.";host=".SERVER;
    try
    {
        $connexion=new PDO($dsn,USER,PASS);
        //echp "on est connecté;
    }
    catch(PDOException $e)
    {
        echo("Echec Connexion : %s\n".$e->getMessage());
        exit();
    }
}
?>