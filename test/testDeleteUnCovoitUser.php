<?php

include_once '../global/config.php';
include_once '../'.CHEMIN_LIB.'pdo2.php';
include_once '../'.CHEMIN_ENTITY.'CovoitUser.php';
include_once '../'.CHEMIN_MODELE.'DAOCovoitUser.php';

// Activer l'affichage des erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Créer un nouvel utilisateur
$nouvCovoitUser = new CovoitUser(null, 'Dupont', 'Alice', '0123456789', 'alice.dupont@example.com', 'password123');

// Ajouter l'utilisateur à la base de données
addCovoitUser($nouvCovoitUser);

// Vérifier si l'utilisateur a bien été ajouté
$utilisateurAjoute = getUnCovoitUser(1); // Remplace 1 par l'ID approprié si nécessaire
var_dump($utilisateurAjoute);

?>

