<?php

//VARIABLES

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$age = $_POST['age'];
$tel = $_POST['telephone'];
$rue = $_POST['adresse'];
$ville = $_POST['ville'];
$cp = $_POST['code_postal'];
$bdd = new PDO('mysql:host=localhost:3306;dbname=vsa_cinema;charset=utf8', 'root', '');

//CODE

$requete = $bdd->prepare('INSERT INTO utilisateur (nom,prenom,age,email,mdp,tel,rue,ville,cp) VALUES (:nom,:prenom,:age,:email,:mdp,:tel,:rue,:ville,:cp)');
$requete->execute(array(
    'nom' => $nom,
    'prenom' => $prenom,
    'email' => $email,
    'mdp' => $mdp,
    'age' => $age,
    'tel' => $tel,
    'rue' => $rue,
    'ville' => $ville,
    'cp' => $cp,
));
echo "Votre compte a été crée, veuilez revenir a la page de connexion !";

