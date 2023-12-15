<?php

$bdd = new PDO('mysql:host=localhost:3306;dbname=crud;charset=utf8', 'root', '');

$requete = $bdd->prepare("SELECT * FROM reduction");
$requete->execute();
$afficher = $requete->fetch();
var_dump($afficher);
echo $afficher("code");
$requete->closeCursor();
