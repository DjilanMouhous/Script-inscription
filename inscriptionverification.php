<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inscription - 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Thasadith" rel="stylesheet">
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/testlog.css">
</head>


<?php




$mail = $_POST["mail"];
$mdp = hash('ripemd160',$_POST["password"]);
$nom = $_POST["nom"];


$host = "localhost";
$user = "root";
$password = "";
$bdd = "workshop2"; //insérer le nom de sa base de donnée


// Connexion au serveur MySQL et choix de la BDD

$lien = mysqli_connect($host,$user,$password);
mysqli_select_db($lien, 'workshop2');   //insérer le nom de sa base de donnée


// Requête SQL

$sql1 = "INSERT INTO workshop2.utilisateur(utilisateur_mail,utilisateur_mdp,utilisateur_nom) values('$mail','$mdp','$nom')";
$sql = "select * from utilisateur where utilisateur_mail='$mail'";


// Exécution de la requête SQL

$result = mysqli_query($lien, $sql);

// Récupération des résultats
$num = mysqli_num_rows($result);

if ($num==1){
    echo 'Le mail est déja utilisé';
} else{
    $result = mysqli_query($lien, $sql1);
    if ($result) {
        echo'Vous êtes bien inscrit';
    } else {
        echo 'Un probleme est survenu, merci de contacter le webmaster avec l\'erreur suivante <br />';
        echo($lien->error);
    }
}


?>