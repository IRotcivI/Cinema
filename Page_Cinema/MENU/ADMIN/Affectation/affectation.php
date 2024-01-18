<?php

//VARIABLES
$bdd = new PDO('mysql:host=localhost:3307;dbname=vsa_cinema;charset=utf8', 'root', '');
$salle = $_POST['salle'];
$place = $_POST['place'];
$dimension = $_POST['dimension'];
$film = $_POST['film'];

//CODE
$requete = $bdd->prepare("INSERT INTO salle_projection (nom_salle,nbr_place,dimension,ref_film) VALUES (:nom_salle, :nbr_place, :dimension, :ref_film)");
$requete->execute(array(
    'nom_salle'=>$salle,
    'nbr_place'=>$place,
    'dimension'=>$dimension,
    'ref_film'=>$film,
));
echo 'Ajout';


