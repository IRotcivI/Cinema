<?php

//VARIABLES
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$bdd = new PDO('mysql:host=localhost:3306;dbname=vsa_cinema;charset=utf8', 'root', '');

//CODE
$requete = $bdd->prepare('SELECT * FROM utilisateur WHERE email = :email AND mdp = :mdp');
$requete->execute(array(
    'email'=>$email,
    'mdp'=>$mdp,
));
if ($requete->rowCount() > 0){
    echo 'CONNECTION';
}
else{
    echo 'ERREUR DE CONNECTION';
}