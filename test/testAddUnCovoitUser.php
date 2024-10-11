<?php

include_once '../global/config.php';
include_once '../'.CHEMIN_LIB.'pdo2.php';
include_once '../'.CHEMIN_ENTITY.'CovoitUser.php';
include_once '../'.CHEMIN_MODELE.'DAOCovoitUser.php';

$idUtilisateur = 10;

deleteUnCovoitUser($idUtilisateur);

// Vérifier que l'utilisateur a bien été supprimé
$utilisateurSupprime = getUnCovoitUser($idUtilisateur); // Essayer de récupérer l'utilisateur supprimé
if (!$utilisateurSupprime) {
    echo "L'utilisateur avec l'ID $idUtilisateur a été supprimé avec succès.";
} else {
    echo "L'utilisateur existe toujours.";
}

?>
