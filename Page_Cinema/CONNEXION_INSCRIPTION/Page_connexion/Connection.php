<?php
session_start();

//VARIABLES
$_SESSION['email'] = $email = $_POST['email'];
$_SESSION ['mdp'] = $mdp = $_POST['mdp'];
$bdd = new PDO('mysql:host=localhost:3306;dbname=vsa_cinema;charset=utf8', 'root', '');

//CODE
$requete = $bdd->prepare('SELECT * FROM utilisateur WHERE email = :email AND mdp = :mdp');
$requete->execute(array(
    'email'=>$email,
    'mdp'=>$mdp,
));
if ($requete->rowCount() > 0 && isset($_SESSION['email']) && isset($_SESSION['mdp'])){
    echo 'Vous etes connecter';
}
else{
    echo 'ERREUR DE CONNECTION';
    echo '<form action="Cinema.html">
    <input type="submit" value="Page Connection"/><br>
    </form>';
}