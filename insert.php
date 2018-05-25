<?php
// Connexion à la base de données
try
{
 $bdd = new PDO("mysql:host=eu-cdbr-west-02.cleardb.net;dbname=heroku_22d3d3844877191", "ba4d6572da3fed", "a3559913");
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