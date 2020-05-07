<?php
//Identifiant de connexion a la base de donnée
define("HOST", "localhost");
define("BDD_NAME", "nean9734_smartborne"); 
define("BDD_USERNAME", "nean9734_smart");
define("BDD_PASS", "");

//Connection a la BDD :
try
{
    $bdd = new PDO('mysql:host=' . HOST . ';dbname=' . BDD_NAME . ';charset=utf8', BDD_USERNAME, BDD_PASS);

    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    //echo "Connexion à la base de donnée réussie !";
}
catch(Exception $e)
{
    //echo "Aie, erreur : $e->getMessage";
}
?>
