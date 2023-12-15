<?php
session_start();

//VARIABLES
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$bdd = new PDO('mysql:host=localhost:3306;dbname=vsa_cinema;charset=utf8', 'vsa_base', 'AZErty7241');

//CODE
$requete = $bdd->prepare('SELECT * FROM utilisateur WHERE email = :email AND mdp = :mdp');
$requete->execute(array(
    'email'=>$email,
    'mdp'=>$mdp,
));
if ($requete->rowCount() > 0){
    $_SESSION['id_utilisateur'] = res['id_utilisateur'];
    $_SESSION['nom'] = res['nom'];
    $_SESSION['prenom'] = res['prenom'];
    echo 'MENU';
}
else{
    echo 'ERREUR DE CONNECTION';
    echo '<form action="Connection.php">
    <input type="submit" value="Page Connection"/><br>
    </form>';
}