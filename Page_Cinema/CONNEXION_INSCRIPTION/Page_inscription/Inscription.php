<?php
var_dump($_POST);
//VARIABLES
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$age = $_POST['age'];
$tel = $_POST['telephone'];
$rue = $_POST['adresse'];
$ville = $_POST['ville'];
$bdd = new PDO('mysql:host=localhost:3306;dbname=vsa_cinema;charset=utf8', 'vsa_base', 'AZErty7241');

//CODE

$verification = $bdd->prepare('SELECT * FROM utilisateur WHERE email = :email');
$verification->execute(array(
    'email'=>$email,
));
if ($verification->rowCount() > 0){
    echo 'Ce email est déja utilisé par un autre utilisateur';
}else{
    $requete = $bdd->prepare('INSERT INTO utilisateur (nom,prenom,age,email,mdp,tel,rue,ville) VALUES (:nom,:prenom,:age,:email,:mdp,:tel,:rue,:ville)');
    $requete->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'mdp' => $mdp,
        'age' => $age,
        'tel' => $tel,
        'rue' => $rue,
        'ville' => $ville,

    ));
    header("Location: inscription_reussi.html");

}




