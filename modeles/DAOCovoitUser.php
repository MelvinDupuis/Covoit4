<?php
include_once '../entity/CovoitUser.php';

function getUnCovoitUser($id){
   	$pdo = PDO2::getInstance();
	   $pdo = PDO2::getInstance();
	   $requete = $pdo->prepare("SELECT * FROM CovoitUser where CovoitUser.id='$id'");
   
			
	   $requete->execute();
	$requete->setFetchMode(PDO::FETCH_CLASS, 'CovoitUser');
	$unCovoitUser = $requete->fetch();
	  
	$requete->closeCursor();
	return $unCovoitUser;
}

function getLesCovoitUser(){
	$pdo = PDO2::getInstance();
	
	$requete = $pdo->prepare("SELECT * FROM CovoitUser");
	$requete->execute();
	$tab = $requete->fetchAll(PDO::FETCH_CLASS, "CovoitUser");
	  
	$requete->closeCursor();
	return $tab;
}



function addCovoitUser($unCovoitUser) {
    $pdo = PDO2::getInstance();

    // Préparation de la requête pour ajouter un nouvel utilisateur
    $requete = $pdo->prepare("INSERT INTO CovoitUser (nom, prenom, tel, mail, mdp) VALUES (:nom, :prenom, :tel, :mail, :mdp)");

    // Liaison des paramètres
    $nom = $unCovoitUser->getNom();
    $prenom = $unCovoitUser->getPrenom();
    $tel = $unCovoitUser->getTel();
    $mail = $unCovoitUser->getMail();
    $mdp = $unCovoitUser->getMdp();

    $requete->bindParam(':nom', $nom);
    $requete->bindParam(':prenom', $prenom);
    $requete->bindParam(':tel', $tel);
    $requete->bindParam(':mail', $mail);
    $requete->bindParam(':mdp', $mdp);

    // Exécution de la requête
    $requete->execute();
    $requete->closeCursor();
}

function updateUnCovoitUser($unCovoitUser) {
    $pdo = PDO2::getInstance();

    $requete = $pdo->prepare("UPDATE CovoitUser SET nom = :nom, prenom = :prenom, tel = :tel, mail = :mail, mdp = :mdp WHERE id = :id");

    $id = $unCovoitUser->getId();
    $nom = $unCovoitUser->getNom();
    $prenom = $unCovoitUser->getPrenom();
    $tel = $unCovoitUser->getTel();
    $mail = $unCovoitUser->getMail();
    $mdp = $unCovoitUser->getMdp();

    $requete->bindParam(':id', $id);
    $requete->bindParam(':nom', $nom);
    $requete->bindParam(':prenom', $prenom);
    $requete->bindParam(':tel', $tel);
    $requete->bindParam(':mail', $mail);
    $requete->bindParam(':mdp', $mdp);

    $requete->execute();

    $requete->closeCursor();
}

function deleteUnCovoitUser($id) {
    $pdo = PDO2::getInstance();

    // Préparation de la requête pour supprimer un utilisateur
    $requete = $pdo->prepare("DELETE FROM CovoitUser WHERE id = :id");

    // Liaison du paramètre
    $requete->bindParam(':id', $id);

    // Exécution de la requête
    $requete->execute();

    $requete->closeCursor();
}



?>
