<?php

//TO DO : classe connexion


    // $dbh = new PDO('pgsql:host=lucaslelaidier.fr;port=5432;dbname=apidb;user=postgres;password=mysecretpassword');
    $dbh = new PDO('pgsql:host=host;port=5432;dbname=api;user=postgres;password=password');
    $stmt = $dbh->prepare('SELECT * FROM api.categorie');
   
    if ($stmt->execute()) {
        while ($row = $stmt->fetch()) {
            echo '<pre>';
            print_r($row);
        }
    } else {
        echo "probleme";
    }