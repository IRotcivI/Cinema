<?php
var_dump($_POST);
//VARIABLES
$bdd = new PDO('mysql:host=localhost:3306;dbname=vsa_cinema;charset=utf8', 'root', '');
$nom = $_POST['nom'];
$desc = $_POST['desc'];
$affiche = $_POST['aff'];
$rea = $_POST['rea'];


//CODE
$requete = $bdd -> prepare('INSERT INTO film (nom,description,affiche,realisateur) VALUES (:nom, :description, :affiche, :realisateur)');
$requete -> execute(array(
    'nom' => $nom,
    'description' => $desc,
    'affiche' => $affiche,
    'realisateur' => $rea,
));
header("Location: correct.html");