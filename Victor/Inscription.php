<?php

//VARIABLES

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$age = $_POST['age'];
$tel = $_POST['tel'];
$rue = $_POST['rue'];
$ville = $_POST['ville'];
$cp = $_POST['cp'];
$bdd = new PDO('mysql:host=localhost:3306;dbname=vsa_cinema;charset=utf8', 'root', '');

//CODE

$requete = $bdd->prepare('INSERT INTO utilisateur (nom,prenom,age,email,tel,rue,ville,cp) VALUES (:nom,:prenom,:age,:métiers,:pays,:email,:mdp)');
$requete->execute(array(
    'nom' => $nom,
    'prenom' => $prenom,
    'email' => $email,
    'mdp' => $mdp,
    'age' => $age,
    'tel' => $tel,
    'métiers' => $metiers,
));
echo "Votre compte a été crée, veuilez revenir a la page de connexion !";

