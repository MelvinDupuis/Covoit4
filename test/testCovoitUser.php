<?php

include_once '../global/config.php';
include_once '../'.CHEMIN_LIB.'pdo2.php';
include_once '../'.CHEMIN_ENTITY.'CovoitUser.php';

$covoitUser = new CovoitUser(1, 'Dupont', 'Jean', '0123456789', 'jean.dupont@example.com', 'password123');
echo $covoitUser->getId();
echo "\n";
echo $covoitUser->getNom();
echo "\n";
echo $covoitUser->getPrenom();
echo "\n";
echo $covoitUser->getTel();
echo "\n";
echo $covoitUser->getMail();
echo "\n";
echo $covoitUser->getMdp();
echo "\n";

$covoitUser2 = new CovoitUser();
$covoitUser2->setId(5);
$covoitUser2->setNom("denis");
$covoitUser2->setPrenom("luther");
$covoitUser2->setTel("0648348628");
$covoitUser2->setMail("denis.luther@gmail.com");
$covoitUser2->setMdp("abcdefg");

echo $covoitUser2->getId();
echo "\n";
echo $covoitUser2->getNom();
echo "\n";
echo $covoitUser2->getPrenom();
echo "\n";
echo $covoitUser2->getTel();
echo "\n";
echo $covoitUser2->getMail();
echo "\n";
echo $covoitUser2->getMdp();


 
?>
