<?php
var_dump($_POST);
//VARIABLES
$nom = $_POST['nom'];
$heure = $_POST['heure'];
$date = $_POST['date'];
$paiement = $_POST['paiement'];
$nombrePlaces = $_POST['nbr_place'];

$bdd = new PDO('mysql:host=localhost:3306;dbname=vsa_cinema;charset=utf8', 'root', '');

//CODE

    $requete = $bdd->prepare('INSERT INTO reservation (nom,heure,date,paiement,nbr_place) VALUES (:nom,:heure,:date,:paiement,:nbr_place');
    $requete->execute(array(
        'nom' => $nom,
        'heure' => $heure,
        'date' => $date,
        'paiement' => $paiement,
        'nbr_place' => $nombrePlaces,

    ));
    header("Location: reussi_res.html");

