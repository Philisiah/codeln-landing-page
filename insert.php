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
$req = $bdd->prepare('INSERT INTO contact (nomcontact, emailcontact, subjectcontact, messagecontact)
VALUES(?, ?, ?, ?)');
$req->execute(array($_POST['nomcontact'], $_POST['emailcontact'], $_POST['subjectcontact'], $_POST['messagecontact']));
// Redirection du visiteur vers la page du minichat
header('Location: index.html');
?>