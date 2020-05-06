<?php
$dbh = new PDO('pgsql:host=lucaslelaidier.fr;port=5432;dbname=apidb;user=postgres;password=mysecretpassword');
$stmt = $dbh->prepare('SELECT * FROM api.categorie');
if ($stmt->execute()) {
    while ($row = $stmt->fetch()) {
        echo '<pre>';
        print_r($row);
    }
} else {
    echo "probleme";
}