<?php

// Identifiants pour la base de données
define('SQL_DSN', 'mysql:dbname=Melvin;host=s5-4187.nuage-peda.fr;port=3306');
define('SQL_USERNAME', 'login4187');
define('SQL_PASSWORD', 'GTSrBWkhEsSjXMa');
define('SQL_OPTIONS', [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);

// Connexion à la base de données
try {
    $pdo = new PDO(SQL_DSN, SQL_USERNAME, SQL_PASSWORD, SQL_OPTIONS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie !";

    // Exécution d'une requête simple pour tester la connexion
    $query = $pdo->query("SELECT * FROM OffreCovoite LIMIT 1");
    $result = $query->fetch(PDO::FETCH_ASSOC);
    
    if ($result) {
        echo "Données récupérées : ";
        print_r($result);
    } else {
        echo "Aucune donnée trouvée dans la table OffreCovoit.";
    }

} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
