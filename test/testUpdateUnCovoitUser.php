<?php

include_once '../global/config.php';
include_once '../'.CHEMIN_LIB.'pdo2.php';
include_once '../'.CHEMIN_ENTITY.'CovoitUser.php';
include_once '../'.CHEMIN_MODELE.'DAOCovoitUser.php';

$utilisateur = getUnCovoitUser(1); 

$utilisateur->setNom('Dupont');
$utilisateur->setPrenom('Alice');
$utilisateur->setTel('1234567890'); 
$utilisateur->setMail('alice.dupont@updated.com');
$utilisateur->setMdp('newpassword');

updateUnCovoitUser($utilisateur);

$utilisateurMisAJour = getUnCovoitUser(1);
var_dump($utilisateurMisAJour);

?>
