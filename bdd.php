<?php
//Identifiant de connexion a la base de donnée
define("HOST", "localhost");
define("PORT", 5432);
define("BDD_NAME", ""); 
define("BDD_USERNAME", "");
define("BDD_PASS", "");

//Connection a la BDD :
try
{
    $bdd = new PDO('pgsql:host=' . HOST . ';port=' . PORT . ';dbname=' . BDD_NAME . ';user=' . BDD_USERNAME . ';password=' . BDD_PASS);

    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    //echo "Connexion à la base de donnée réussie !";
}
catch(Exception $e)
{
    //echo "Aie, erreur : $e->getMessage";
}
?>
