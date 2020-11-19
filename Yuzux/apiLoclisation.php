<?php
header('Content-Type: application/json');

try {
    $pdo = new PDO('mysql:host=localhost;dbname=api;', 'root', '');
    $retour["success"] = true;
    $retour["message"] = "Connexion reusit";
} catch (Exeption $e) {
    $retour["success"] = false;
    $retour["message"] = "Connexion BDD imposible";
}

if(!empty($_GET["Ville"]))
{
    $requete = $pdo->prepare("SELECT * FROM `Location` WHERE Ville= ?");
    $requete->execute(array($_GET["Ville"]));
}
else 
{
    $requete = $pdo->prepare("SELECT * FROM Location");
    $requete->execute();
}

$retour["success"] = true;
$retour["message"] = "Localisation";
$retour["results"] ["location"] = $requete->fetchAll();

echo json_encode($retour);