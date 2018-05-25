<?php
// Connexion à la base de données
try
{
 $bdd = new PDO('mysql:host=localhost;dbname=profselfie', 'devselfie', '@Msmdpb225@');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO requestdemo (nomuser, passuser, emailuser, companyuser, phone, pay, pass)
VALUES(?, ?, ?, ?)');
$req->execute(array($_POST['nomuser'], $_POST['passuser'], $_POST['emailuser'], $_POST['companyuser'], $_POST['phone'], $_POST['pay'], $_POST['pass']));
// Redirection du visiteur vers la page du minichat
header('Location: ../index.html');
?>